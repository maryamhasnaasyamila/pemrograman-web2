<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiAnggotaController;
use App\Http\Controllers\PeminjamanBukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AnggotaController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Assalamu'alaikum Sobat, Selamat Belajar Laravel";
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/nilai', function () {
    return view('nilai');
});

Route::get('/kesehatan', function () {
    return view('kesehatan');
});

Route::get('/form-registrasi-anggota', 
[RegistrasiAnggotaController::class, 'index']);

Route::post('/hasil-regist', 
[RegistrasiAnggotaController::class, 'hasil']);

Route::get('/form-peminjaman-buku', 
[PeminjamanBukuController::class, 'index']);

Route::post('/hasil-peminjaman', 
[PeminjamanBukuController::class, 'hasil']);

// praktikum 10
Route::get('/dashboard', 
[DashboardController::class, 'index'])->middleware('auth');

// Route::get('/book', 
// [BookController::class, 'buku']);

Route::get('/member', 
[MemberController::class, 'anggota']);

// praktikum 11
Route::get('/dashboard/book', 
[BookController::class, 'index'])->middleware('auth');

Route::get('/dashboard/anggota', 
[AnggotaController::class, 'index'])->middleware('auth');

// praktikum 12
Route::get('/dashboard/book/create', 
[BookController::class, 'create'])->middleware('auth');

Route::post('/dashboard/book/store', 
[BookController::class, 'store'])->middleware('auth');

Route::delete('/dashboard/book/destroy/{id}', 
[BookController::class, 'destroy'])->middleware('auth');


// anggota
Route::get('/dashboard/anggota/create', 
[AnggotaController::class, 'create'])->middleware('auth');

Route::post('/dashboard/anggota/store', 
[AnggotaController::class, 'store'])->middleware('auth');

Route::delete('/dashboard/anggota/destroy/{id}', 
[AnggotaController::class, 'destroy'])->middleware('auth');

// praktikum 13
Route::get('/dashboard/book/edit/{id}', 
[BookController::class, 'edit'])->middleware('auth');

Route::put('/dashboard/book/update/{id}', 
[BookController::class, 'update'])->middleware('auth');

Route::get('/dashboard/book/show/{id}', 
[BookController::class, 'show'])->middleware('auth');

// anggota
Route::get('/dashboard/anggota/edit/{id}', 
[AnggotaController::class, 'edit'])->middleware('auth');

Route::put('/dashboard/anggota/update/{id}', 
[AnggotaController::class, 'update'])->middleware('auth');

Route::get('/dashboard/anggota/show/{id}', 
[AnggotaController::class, 'show'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
