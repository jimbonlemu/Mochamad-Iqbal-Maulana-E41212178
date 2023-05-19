<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UploadTugasController;

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
    return view('login');
});

// Rute untuk menampilkan form login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Rute untuk mengirimkan data login
Route::post('/login', [LoginController::class, 'login']);

// Rute untuk logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rute untuk menampilkan form registrasi
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Rute untuk mengirimkan data registrasi
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/upload-tugas', [UploadTugasController::class,'showUploadForm'])->name('upload.tugas');
Route::post('/upload-tugas', [UploadTugasController::class,'upload'])->name('upload.tugas');
Route::get('/profile/edit', [ProfileController::class,'edit'])->name('profile.edit');
Route::post('/profile/update', [ProfileController::class,'update'])->name('profile.update');



