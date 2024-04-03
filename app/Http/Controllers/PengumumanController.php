<?php

namespace App\Http\Controllers;

use App\Mail\PengumumanCreated;
use App\Mail\PengumumanUpdated;
use App\Models\Pengumuman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class PengumumanController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:pengumuman.index|pengumuman.create|pengumuman.edit|pengumuman.delete|pengumuman.showuser']);
    }

    public function index() {
    $pengumumans = Pengumuman::when(request()->q, function($query) {
            $query->where('title', 'like', '%'. request()->q . '%');
        })
        ->orderBy('updated_at', 'desc') // Mengurutkan berdasarkan tanggal diubah secara descending (dari yang terbaru)
        ->paginate(10);

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
            'slug' => Str::slug($request->input('title')),
            'caption'   => $request->input('caption')
        ]);

        // Ambil semua email pengguna
        $emails = User::pluck('email')->toArray();

        // Kirim email notifikasi kepada semua pengguna
        foreach ($emails as $email) 
        {
            Mail::to($email)->send(new PengumumanCreated($pengumumans));
        }
        
        if($pengumumans){
            //redirect dengan pesan sukses
            return redirect()->route('pengumuman.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('pengumuman.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit($slug) { 
        $pengumumans = Pengumuman::where('slug', $slug)->firstOrFail();
    return view('pengumuman.edit', compact('pengumumans'));
    }

    // app/Http/Controllers/PengumumanController.php
public function update(Request $request, $slug)
{
    $pengumumans = Pengumuman::where('slug', $slug)->firstOrFail();

    $this->validate($request, [
        'title'   => 'required',
        'caption' => 'required'
    ]);

    $pengumumans->update([
        'title'   => $request->input('title'),
        'slug'    => Str::slug($request->input('title')),
        'caption' => $request->input('caption')
    ]);

    // Ambil semua email pengguna
    $emails = User::pluck('email')->toArray();

    // Kirim email notifikasi kepada semua pengguna
    foreach ($emails as $email) 
    {
        Mail::to($email)->send(new PengumumanUpdated($pengumumans));
    }

    if($pengumumans){
        //redirect dengan pesan sukses
        return redirect()->route('pengumuman.index')->with(['success' => 'Data Berhasil Diperbarui!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('pengumuman.index')->with(['error' => 'Data Gagal Diperbarui!']);
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
