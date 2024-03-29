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
use App\Http\Controllers\ImageController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DkvController;
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

Route::get('/login', function () {
    return view('auth.login');
});

// Rute untuk menampilkan formulir pendaftaran
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Rute untuk menangani proses pendaftaran
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

Route::get('/ak', [AkController::class, 'index'])->name('ak');
Route::get('/tkj', [TkjController::class, 'index'])->name('tkj');
Route::get('/dkv', [DkvController::class, 'index'])->name('dkv');
Route::get('/asper', [AsperController::class, 'index'])->name('asper');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/detail_berita/{slug}', [BeritaController::class, 'detail'])->name('detail_berita');


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function(){

    //dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

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

    //images
    Route::resource('images', ImageController::class)->except([
        'show', 'create', 'edit', 'update'
    ]);

    //videos
    Route::resource('videos', VideoController::class)->except([
        'show', 'create', 'edit', 'update'
    ]);

    //audios
    Route::resource('audios', AudioController::class)->except([
        'show', 'create', 'edit', 'update'
    ]);

    //documents
    Route::resource('documents', DocumentController::class)->except([
        'show', 'create', 'edit', 'update'
    ]);

    //subjects
    Route::resource('subjects', SubjectController::class)->except([
        'show', 'create', 'edit', 'update'
    ]);

    //questions
    Route::resource('questions', QuestionController::class)->except([
        'show'
    ]);

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

    //Berita
    Route::resource('beritaadmin', BeritaAdminController::class)->except([
        'show'
    ]);



    //exams
    
    Route::resource('exams', ExamController::class); 
    Route::get('/exams/result/{score}/{user_id}/{exam_id}', [ExamController::class, 'result'])->name('exams.result');
    Route::get('/exams/start/{id}', [ExamController::class, 'start'])->name('exams.start');
    Route::get('exams/student/{id}', [ExamController::class, 'student'])->name('exams.student');
    Route::put('exams/assign/{id}', [ExamController::class, 'assign'])->name('exams.assign');
    Route::get('/exams/review/{user_id}/{exam_id}', [ExamController::class, 'review'])->name('exams.review');
});
