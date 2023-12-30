<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:pengumuman.index|pengumuman.create|pengumuman.edit|pengumuman.delete|pengumuman.showuser']);
    }

    public function index() {
        $pengumumans = Pengumuman::latest()->when(request()->q, function($pengumumans) {
            $pengumumans = $pengumumans->where('title', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('pengumuman.index', compact('pengumumans'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'     => 'required',
            'caption'   => 'required'
        ]);


        $pengumumans = Pengumuman::create([
            'title'     => $request->input('title'),
            'caption'   => $request->input('caption')
        ]);

        if($pengumumans){
            //redirect dengan pesan sukses
            return redirect()->route('pengumuman.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('pengumuman.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit($id) { 
        $pengumumans = Pengumuman::findOrFail($id);
        return view('pengumuman.edit', compact('pengumumans'));
    }

    public function update(Request $request, $id)
    {
        // Temukan pengumuman berdasarkan ID
        $pengumuman = Pengumuman::findOrFail($id);

        // Validasi data yang dikirim dari form edit
        $validatedData = $request->validate([
            'title' => 'required',
            'caption' => 'required',
            // Tambahkan validasi sesuai kebutuhan lainnya
        ]);

        // Perbarui data pengumuman dengan data yang dikirim dari form
        $pengumuman->update($validatedData);

        // Redirect ke halaman yang tepat setelah berhasil melakukan update
        return redirect()->route('pengumuman.index')->with('success', 'Pengumuman berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengumumans = Pengumuman::findOrFail($id);
        $pengumumans->delete();

        if($pengumumans){
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
