<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Exam;
use App\Models\User;
use App\Models\ExamUser;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
     /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:exams.index|exams.create|exams.edit|exams.delete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentUser = User::findOrFail(Auth()->id());
        if($currentUser->hasRole('admin')){
            $exams = Exam::latest()->when(request()->q, function($exams) {
                $exams = $exams->where('name', 'like', '%'. request()->q . '%');
            })->paginate(10);
        }elseif($currentUser->hasRole('student')){
            $exams = Exam::whereHas('users', function (Builder $query) {
                $query->where('user_id', Auth()->id());
            })->paginate(10);
        }elseif($currentUser->hasRole('teacher')){
            $exams = Exam::where('created_by', Auth()->id())->latest()->when(request()->q, function($exams) {
                $exams = $exams->where('created_by', Auth()->id())->where('name', 'like', '%'. request()->q . '%');
            })->paginate(10);
        }
        
        $user = new User();

        return view('exams.index', compact('exams','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exams.create');
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
            'name'          => 'required',
            'time'          => 'required',
            'total_question'=> 'required',
            'start'         => 'required',
            'end'           => 'required'
        ]);

        $exam = Exam::create([
            'name'          => $request->input('name'),
            'time'          => $request->input('time'),
            'total_question'=> $request->input('total_question'),
            'status'        => 'Ready',
            'start'         => $request->input('start'),
            'end'           => $request->input('end'),
            'created_by'    => Auth()->id()
        ]);

        $exam->questions()->sync($request->input('questions'));

        if($exam){
            //redirect dengan pesan sukses
            return redirect()->route('exams.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('exams.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(exam $exam)
    {
        $questions = $exam->questions()->where('exam_id', $exam->id)->get();
        
        return view('exams.edit', compact('exam', 'questions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, exam $exam)
    {
        $this->validate($request, [
            'name'          => 'required',
            'time'          => 'required',
            'total_question'=> 'required',
            'start'         => 'required',
            'end'           => 'required'
        ]);

        $exam->update([
            'name'          => $request->input('name'),
            'time'          => $request->input('time'),
            'total_question'=> $request->input('total_question'),
            'start'         => $request->input('start'),
            'end'           => $request->input('end'),
            'created_by'    => Auth()->id()
        ]);

        $exam->questions()->sync($request->input('questions'));

        if($exam){
            //redirect dengan pesan sukses
            return redirect()->route('exams.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('exams.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Show the form for detailing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(exam $exam)
    {
    $questions = $exam->questions()->where('exam_id', $exam->id)->get();
    
    // Ambil skor dari tabel pivot exam_user
    $userScore = User::find(Auth::id())->exams()->where('exam_id', $exam->id)->first()->pivot->score;
    
    return view('exams.show', compact('exam', 'questions', 'userScore'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exam = Exam::findOrFail($id);
        $exam->delete();

        if($exam){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }

    public function start($id)
    {
        $exam = Exam::findOrFail($id);
        $exam_questions = $exam->questions;

        if ($exam_questions->count() == 0) {
            return back()->with(['error' => 'Belum ada Pertanyaan']);
        }
        return view('exams.start', compact('id'));
    }

    public function result($score, $userId, $examId)
    {
        $user = User::findOrFail($userId);
        $exam = Exam::findOrFail($examId);
        return view('exams.result', compact('score', 'user', 'exam'));
    }

    public function student($id)
    {
        $exam = Exam::findOrFail($id);
        return view('exams.student', compact('exam'));
    }

    public function assign(Request $request, $id)
    {
        $exam = Exam::findOrFail($id);

        $exam->users()->sync($request->input('students'));

        return redirect('/exams');

    }

    public function review($userId, $examId)
    {
        return view('exams.review', compact('userId', 'examId'));
    }

    public function hasil($id)
    {
        $exam = Exam::findOrFail($id);
        $results = $exam->users()->withPivot('history_answer', 'score')->get();

        return view('exams.hasil', compact('exam', 'results'));
    }

    public function hasilSemua(Request $request)
    {
        $query = ExamUser::query();

        // Jika ada parameter 'nama' dalam request, filter berdasarkan nama pengguna
        if ($request->has('nama')) {
            $query->whereHas('user', function ($q) use ($request) {
                $q->where('nama', $request->nama);
            });
        }

        // Jika ada parameter 'ujian' dalam request, filter berdasarkan nama ujian
        if ($request->has('ujian')) {
            $query->whereHas('exam', function ($q) use ($request) {
                $q->where('name', $request->ujian);
            });
        }

        // Ambil data ujian dan skor
        $results = $query->with(['user', 'exam'])->get();

        return view('exams.hasilSemua', compact('results'));
    }
    
    public function cetakPDF()
    {
        // Ambil data yang ingin dicetak, misalnya semua hasil ujian
        $results = ExamUser::all();

        // Load view hasil ujian ke dalam variabel $html
        $html = view('exams.table', compact('results'))->render();

        // Konfigurasi DomPDF
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isRemoteEnabled', true);

        // Inisialisasi DomPDF
        $dompdf = new Dompdf($options);

        // Membuat PDF dari HTML
        $dompdf->loadHtml($html);

        // (Opsional) Set ukuran dan orientasi halaman
        $dompdf->setPaper('A4', 'landscape');

        // Render PDF
        $dompdf->render();

        // Mengirimkan output PDF kepada pengguna
        return $dompdf->stream('hasil_ujian.pdf');
    }
}
