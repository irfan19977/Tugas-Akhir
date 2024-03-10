<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class SubjectController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:subjects.index|subjects.create|subjects.delete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subject::latest()->when(request()->q, function($subjects) {
            $subjects = $subjects->where('name', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('subjects.index', compact('subjects'));
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
            'name'     => 'required'
        ]);
        
        $subject = subject::create([
            'name'     => $request->input('name'),
            'slug'    => Str::slug($request->input('name')),
        ]);

        if($subject){
            //redirect dengan pesan sukses
            return redirect()->route('subjects.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('subjects.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit($slug) { 
        $subject = Subject::where('slug', $slug)->firstOrFail();
        return view('subjects.edit', compact('subject'));
    }

    public function update(Request $request, $slug)
    {
        $subject = Subject::where('slug', $slug)->firstOrFail();

        $this->validate($request, [
            'name'   => 'required'
        ]);

        $subject->update([
            'name'   => $request->input('name'),
            'slug'    => Str::slug($request->input('name')),
        ]);

        if($subject){
            //redirect dengan pesan sukses
            return redirect()->route('subjects.index')->with(['success' => 'Data Berhasil Diperbarui!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('subjects.index')->with(['error' => 'Data Gagal Diperbarui!']);
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
        $subject = subject::findOrFail($id);
        $subject->delete();

        if($subject){
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
