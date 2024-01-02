<?php

namespace App\Http\Controllers;

use App\Exports\ExportData;
use App\Models\PPDB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class PPDBController extends Controller
{
    public function __construct()
    {
        $this->middleware(['permission:ppdb.index|ppdb.create|ppdb.edit|ppdb.delete|ppdb.showuser|ppdb.detail_data']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $existingData = PPDB::where('user_id', auth()->id())->first();

        if ($existingData) {
            return view('ppdb.detail_data', compact('existingData'));
        } else {
            $ppdbs = PPDB::latest()->when(request()->q, function($query) {
                return $query->where('nama', 'like', '%' . request()->q . '%');
            })->paginate(10);
    
            return view('ppdb.index', compact('ppdbs'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function export_excel()
    {
        return Excel::download(new ExportData, "ppdb.xlsx");
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
                    'nama'     => 'required',
                    'jkel'   => 'required',
                    'tmp_lh'     => 'required',
                    'tgl_lh'     => 'required',
                    'agama'     => 'required',
                    'alamat'     => 'required',
                    'sekolah'     => 'required',
                    'no_wa'     => 'required',
                    'ayah'     => 'required',
                    'ibu'     => 'required',
                    'jlh_sdr'     => 'required',
                    'sakit'     => 'required',
                    'hobi'     => 'required',
                    'organisasi'     => 'required',
                    'jrs_1'     => 'required',
                    'alasan_1'     => 'required',
                    'jrs_cd'     => 'required',
                    'alasan_cd'     => 'required',
                ]);
        // Cek apakah user sudah memiliki data PPDB
       // Cek apakah user sudah memiliki data PPDB
       $existingData = PPDB::where('user_id', auth()->id())->first();

       if ($existingData) {
           // Jika data sudah ada, perbarui data tersebut
           $existingData->update($request->all());
       } else {
           // Jika belum ada data, buat data baru
           PPDB::create(array_merge($request->all(), ['user_id' => auth()->id()]));
       }

       return redirect()->route('ppdb.index')->with('success', 'Data berhasil ditambahkan');
   
        
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
    public function edit($id) { 
        $existingData = PPDB::findOrFail($id);
        return view('ppdb.edit', compact('existingData'));
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
        // Temukan ppdb berdasarkan ID
        $existingData = PPDB::findOrFail($id);

        // Validasi data yang dikirim dari form edit
        $validatedData = $request->validate([
            'nama'     => 'required',
            'jkel'   => 'required',
            'tmp_lh'     => 'required',
            'tgl_lh'     => 'required',
            'agama'     => 'required',
            'alamat'     => 'required',
            'sekolah'     => 'required',
            'no_wa'     => 'required',
            'ayah'     => 'required',
            'ibu'     => 'required',
            'jlh_sdr'     => 'required',
            'sakit'     => 'required',
            'hobi'     => 'required',
            'organisasi'     => 'required',
            'jrs_1'     => 'required',
            'alasan_1'     => 'required',
            'jrs_cd'     => 'required',
            'alasan_cd'     => 'required',
        ]);

        // Perbarui data pengumuman dengan data yang dikirim dari form
        $existingData->update($validatedData);

        // Redirect ke halaman yang tepat setelah berhasil melakukan update
        return redirect()->route('ppdb.index')->with('success', 'Pengumuman berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ppdbs = PPDB::findOrFail($id);
        $ppdbs->delete();

        if($ppdbs){
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
