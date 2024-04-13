<?php

use App\Http\Controllers\AkController;
use App\Http\Controllers\AsperController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AudioController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BeritaAdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DkvController;
use App\Http\Controllers\EskulController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\pendaftaranController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TkjController;
use App\Models\Exam;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.homepage');
});

Route::get('/pendaftaran', [pendaftaranController::class, 'index'])->name('pendaftaran');

Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/akuntansi-dan-keuangan-lembaga', [AkController::class, 'index'])->name('ak');

Route::get('/teknik-komputer-dan-jaringan', [TkjController::class, 'index'])->name('tkj');

Route::get('/design-komunikas-visual', [DkvController::class, 'index'])->name('dkv');

Route::get('/asisten-keperawatan', [AsperController::class, 'index'])->name('asper');

Route::get('/eskul', [EskulController::class, 'index'])->name('eskul');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita');

Route::get('/berita/kategori/{slug}', [BeritaController::class, 'beritaByCategory'])->name('berita.by.category');

Route::get('/detail_berita/{slug}', [BeritaController::class, 'detail'])->name('detail_berita');

Route::get('/contact', [ContactUsController::class, 'index'])->name('contact');

Route::post('/contact', [ContactUsController::class, 'store'])->name('contact.store');

Route::post('/mark-as-read/{id}', [ContactUsController::class, 'markAsRead']);


Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/reset', function () {
    return view('auth.passwords.email');
})->name('reset');

// Rute untuk menangani proses pendaftaran
Route::post('/register', [RegisterController::class, 'register']);
// Rute untuk menampilkan formulir pendaftaran
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){

    //dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    //ContactAdmin
    Route::resource('message', MessageController::class)->except([
        'create'
    ]);
    Route::post('/messages/{id}/update-status', [ MessageController::class, 'updateStatus'])->name('updateStatus');
    //permissions
    Route::resource('permissions', PermissionController::class)->only([
        'index'
    ]);

    //roles
    Route::resource('roles', RoleController::class)->except([
        'show'
    ]);

    //users
    Route::resource('users', UserController::class)->except([
        'show'
    ]);

    //subjects
    Route::resource('subjects', SubjectController::class)->except([
        'show'
    ]);

    //questions
    Route::resource('questions', QuestionController::class)->except([
        'show'
    ]);
    Route::delete('/selected-question', [QuestionController::class, 'deleteAll'])->name('question.delete');
    Route::post('/questions/import', [QuestionController::class, 'import_excel'])->name('questions.import');
    //pengumuman
    Route::resource('pengumuman', PengumumanController::class)->except([
        'show'
    ]);

    //PPDB
    Route::resource('ppdb', PPDBController::class)->except([
        'show'
    ]);
    Route::get('/ppdb/detail_data', [PPDBController::class, 'detail_data'])->name('ppdb.detail_data');
    Route::get('/ppdb/export/excel', [PPDBController::class, 'export_excel']);

    //Kategori Berita
    Route::resource('kategori', KategoriController::class)->except([
        'show'
    ]);
    
    //Berita
    Route::resource('beritaadmin', BeritaAdminController::class)->except([
        'show'
    ]);
    Route::post('beritaadmin/images', [BeritaAdminController::class,'storeImage'])->name('beritaadmin.storeImage');


    //exams
    
    Route::resource('exams', ExamController::class); 
    Route::get('hasil', [ExamController::class, 'hasil'])->name('exams.hasil');
    Route::get('/exams/result/{score}/{user_id}/{exam_id}', [ExamController::class, 'result'])->name('exams.result');
    Route::get('/exams/start/{id}', [ExamController::class, 'start'])->name('exams.start');
    Route::get('exams/student/{id}', [ExamController::class, 'student'])->name('exams.student');
    Route::put('exams/assign/{id}', [ExamController::class, 'assign'])->name('exams.assign');
    Route::get('/exams/review/{user_id}/{exam_id}', [ExamController::class, 'review'])->name('exams.review');
});
