<?php

namespace App\Http\Controllers;

use App\Models\Audio;
use App\Models\Image;
use App\Models\Video;
use App\Models\Subject;
use App\Models\Document;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QuestionController extends Controller
{
     /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:questions.index|questions.create|questions.edit|questions.delete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::latest()->when(request()->q, function($questions) {
            $questions = $questions->where('detail', 'like', '%'. request()->q . '%');
        })->paginate(10);

        $subject = new Subject();
        $user = new User();

        return view('questions.index', compact('questions', 'subject', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::latest()->get();
        return view('questions.create', compact('subjects'));
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
            'subject_id'  => 'required',
            'detail'      => 'required',
            'option_A'    => 'required',
            'option_B'    => 'required',
            'option_C'    => 'required',
            'option_D'    => 'required',
            'answer'      => 'required',
            'explanation' => 'required'
        ]);

        // Upload video jika ada
        if ($request->hasFile('video_id')) {
            $video = $request->file('video_id');
            $video->storeAs('public/videos', $video->hashName());
            $videoName = $video->hashName();
        } else {
            $videoName = null;
        }

        // Upload gambar jika ada
        if ($request->hasFile('image_id')) {
            $image = $request->file('image_id');
            $image->storeAs('public/images', $image->hashName());
            $imageName = $image->hashName();
        } else {
            $imageName = null;
        }

        // Upload audio jika ada
        if ($request->hasFile('audio_id')) {
            $audio = $request->file('audio_id');
            $audio->storeAs('public/audios', $audio->hashName());
            $audioName = $audio->hashName();
        } else {
            $audioName = null;
        }


        $question = Question::create([
            'subject_id'    => $request->input('subject_id'),
            'detail'        => $request->input('detail'),
            'option_A'      => $request->input('option_A'),
            'option_B'      => $request->input('option_B'),
            'option_C'      => $request->input('option_C'),
            'option_D'      => $request->input('option_D'),
            'option_E'      => $request->input('option_E'),
            'video_id'      => $videoName,
            'audio_id'      => $audioName,
            'image_id'      => $imageName,
            'document_id'   => $request->input('document_id'),
            'answer'        => $request->input('answer'),
            'explanation'   => $request->input('explanation'),
            'created_by'    => Auth()->id()
        ]);


        if($question){
            //redirect dengan pesan sukses
            return redirect()->route('questions.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('questions.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $subjects = Subject::latest()->get();
        return view('questions.edit', compact('question', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $this->validate($request, [
            'subject_id'  => 'required',
            'detail'      => 'required',
            'option_A'    => 'required',
            'option_B'    => 'required',
            'option_C'    => 'required',
            'option_D'    => 'required',
            'answer'      => 'required',
            'explanation' => 'required'
        ]);

        if ($request->hasFile('video_id')) {
            $video = $request->file('video_id');
            $video->storeAs('public/videos', $video->hashName());
            $videoName = $video->hashName();
        
            // Hapus video lama jika ada
            if ($question->video_id) {
                // Hapus video lama dari storage
                Storage::delete('public/videos/' . $question->video_id);
            }
        } else {
            // Jika tidak ada file video baru yang diunggah, gunakan video yang sudah ada
            $videoName = $question->video_id;
        }
        
        if ($request->hasFile('audio_id')) {
            $audio = $request->file('audio_id');
            $audio->storeAs('public/audios', $audio->hashName());
            $audioName = $audio->hashName();
        
            // Hapus audio lama jika ada
            if ($question->audio_id) {
                // Hapus audio lama dari storage
                Storage::delete('public/audios/' . $question->audio_id);
            }
        } else {
            // Jika tidak ada file audio baru yang diunggah, gunakan audio yang sudah ada
            $audioName = $question->audio_id;
        }
        
        // Jika ada file gambar yang diunggah
        if ($request->hasFile('image_id')) {
            $image = $request->file('image_id');
            $image->storeAs('public/images', $image->hashName());
            $imageName = $image->hashName();
            
            // Hapus gambar lama jika ada
            if ($question->image_id) {
                // Hapus gambar lama dari storage
                Storage::delete('public/images/' . $question->image_id);
            }
        } else {
            // Jika tidak ada file gambar baru yang diunggah, gunakan gambar yang sudah ada
            $imageName = $question->image_id;
        }
        

        $question = Question::findOrFail($question->id);

        $question->update([
            'subject_id'    => $request->input('subject_id'),
            'detail'        => $request->input('detail'),
            'option_A'      => $request->input('option_A'),
            'option_B'      => $request->input('option_B'),
            'option_C'      => $request->input('option_C'),
            'option_D'      => $request->input('option_D'),
            'option_E'      => $request->input('option_E'),
            'video_id'      => $videoName,
            'audio_id'      => $audioName,
            'image_id'      => $imageName,
            'answer'        => $request->input('answer'),
            'explanation'   => $request->input('explanation'),
            'created_by'    => Auth()->id()
        ]);

        if($question){
            //redirect dengan pesan sukses
            return redirect()->route('questions.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('questions.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $question = Question::findOrFail($id);
        $question->delete();


        if($question){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }

    public function deleteAll(Request $request)
    {
        $ids = $request->ids;
        Question::whereIn('id', $ids)->delete();
        return response()->json(["success"=>"Berhasil"]);
    }
}
