<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::latest('updated_at')->when(request()->q, function($query) {
            $query->where('judul', 'like', '%'. request()->q . '%');
        })->paginate(9);

        return view('home.berita', compact('beritas'));
    }
    
    public function detail($slug)
    {
        $beritas = Berita::where('slug', $slug)->firstOrFail();
        $convert = Berita::pluck('isi')->first();

        return view('home.detail_berita', compact('beritas', 'convert'));
    }
}
