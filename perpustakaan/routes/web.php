<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiAnggotaController;
use App\Http\Controllers\PeminjamanBukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AnggotaController;



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
[DashboardController::class, 'index']);

// Route::get('/book', 
// [BookController::class, 'buku']);

Route::get('/member', 
[MemberController::class, 'anggota']);

// praktikum 11
Route::get('/book', 
[BookController::class, 'index']);

Route::get('/anggota', 
[AnggotaController::class, 'index']);
