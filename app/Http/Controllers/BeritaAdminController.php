<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
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
        })->paginate(10);

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
            'judul'     => 'required',
            'desc'   => 'required',
            'isi'   => 'required',
            'sampul' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Atur validasi untuk sampul
        ]);

        $sampulPath = null;

    if ($request->hasFile('sampul')) {
        $sampul = $request->file('sampul');
        $sampulName = time() . '_' . $sampul->getClientOriginalName();
        $sampul->move(public_path('sampul'), $sampulName); // Simpan sampul di direktori public/sampul
        $sampulPath = 'sampul/' . $sampulName; // Simpan path sampul untuk disimpan ke database
    }


        $beritas = Berita::create([
            'judul'     => $request->input('judul'),
            'slug' => Str::slug($request->input('judul')),
            'sampul' => $sampulPath, // Simpan path gambar ke database
            'desc'   => $request->input('desc'),
            'isi'   => $request->input('isi'),
            'user_id' => auth()->id(),
        ]);

        if($beritas){
            //redirect dengan pesan sukses
            return redirect()->route('beritaadmin.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
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
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $berita = Berita::findOrFail($id);

        $this->validate($request, [
            'judul'     => 'required',
            'desc'   => 'required',
            'isi'   => 'required',
            'sampul' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Atur validasi untuk sampul
        ]);

        
        $berita->judul = $request->input('judul');
        $berita->desc = $request->input('desc');
        $berita->isi = $request->input('isi');
        $berita->save();

        return redirect()->route('beritaadmin.index')->with(['success' => 'Data Berhasil Diubah!']);
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
