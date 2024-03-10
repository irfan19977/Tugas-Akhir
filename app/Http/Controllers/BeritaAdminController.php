<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaAdminController extends Controller
{

    public function __construct()
    {
        $this->middleware(['permission:beritaadmin.index|beritaadmin.create|beritaadmin.edit|beritaadmin.delete']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::latest()->when(request()->q, function($beritas) {
            $beritas = $beritas->where('judul', 'like', '%'. request()->q . '%');
        })->paginate(3);

        $convert = Berita::pluck('isi')->first();

        return view('berita.index', compact('beritas', 'convert'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $this->validate($request, [
        'judul' => 'required',
        'sampul' => 'required|mimes:jpg,bmp,png',
        'isi' => 'required'
    ]);

    // Upload image
    $sampul = $request->file('sampul');
    $sampulPath = $sampul->storeAs('public/sampul', $sampul->hashName());

    $berita = Berita::create([
        'judul' => $request->input('judul'),
        'slug' => Str::slug($request->input('judul')),
        'sampul' => $sampulPath,
        'keterangan' => $request->input('keterangan'),
        'isi' => $request->input('isi'),
        'user_id'   => auth()->id(),
    ]);

    if ($berita) {
        // Redirect dengan pesan sukses
        return redirect()->route('beritaadmin.index')->with(['success' => 'Data Berhasil Disimpan!']);
    } else {
        // Redirect dengan pesan error
        return redirect()->route('beritaadmin.index')->with(['error' => 'Data Gagal Disimpan!']);
    }
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        
        return view('berita.edit', compact('berita'));
    }

    /**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  string  $slug
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $slug)
{
    $berita = Berita::where('slug', $slug)->firstOrFail();

    $this->validate($request, [
        'judul' => 'required',
        'isi' => 'required'
    ]);

    // Update image if there's a new one
    if ($request->hasFile('sampul')) {
        Storage::delete($berita->sampul); // Menghapus gambar lama
        $sampul = $request->file('sampul');
        $sampulPath = $sampul->storeAs('public/sampul', $sampul->hashName());
    } else {
        $sampulPath = $berita->sampul; // Jika tidak ada gambar baru, gunakan yang lama
    }

    // Lakukan pembaruan data
    $berita->judul = $request->input('judul');
    $berita->slug = Str::slug($request->input('judul'));
    $berita->sampul = $sampulPath; // Gunakan path gambar yang baru atau lama
    $berita->keterangan = $request->input('keterangan');
    $berita->isi = $request->input('isi');
    $berita->user_id = auth()->id();

    if ($berita->save()) {
        // Redirect dengan pesan sukses
        return redirect()->route('beritaadmin.index')->with(['success' => 'Data Berhasil Diperbarui!']);
    } else {
        // Redirect dengan pesan error
        return redirect()->route('beritaadmin.index')->with(['error' => 'Data Gagal Diperbarui!']);
    }
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $beritas = Berita::findOrFail($id);
        $link= Storage::disk('local')->delete('public/sampul/'.$beritas->link);
        $beritas->delete();

        if($beritas){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}
