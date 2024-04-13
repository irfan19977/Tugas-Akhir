<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Ambil kategori dari parameter slug jika disediakan
        $categorySlug = $request->query('kategori');
        $beritasQuery = Berita::latest('updated_at');
        
        // Jika ada kategori yang dipilih, filter berita berdasarkan kategori
        if ($categorySlug) {
            $beritasQuery->whereHas('kategoris', function ($query) use ($categorySlug) {
                $query->where('slug', $categorySlug);
            });
        }
        
        // Lakukan pencarian jika ada query pencarian
        $beritas = $beritasQuery->when($request->q, function ($query) use ($request) {
            $query->where('judul', 'like', '%' . $request->q . '%');
        })->paginate(9);

        // Ambil semua kategori
        $categories = Kategori::all();

        return view('home.berita', compact('beritas', 'categories'));
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function detail($slug)
    {
        $beritas = Berita::where('slug', $slug)->firstOrFail();
        $convert = Berita::pluck('isi')->first();
        $categories = Kategori::all();

        return view('home.detail_berita', compact('beritas', 'convert', 'categories'));
    }

    /**
     * Display a listing of the resource based on category.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function beritaByCategory($slug)
    {
        // Temukan kategori berdasarkan slug
        $category = Kategori::where('slug', $slug)->firstOrFail();
        
        // Ambil berita yang terkait dengan kategori tersebut
        $beritas = $category->berita()->latest('updated_at')->paginate(9);

        // Ambil semua kategori (untuk menampilkan kategori di tampilan)
        $categories = Kategori::all();

        // Kirim berita dan kategori ke tampilan
        return view('home.berita', compact('beritas', 'categories'));
    }

}
