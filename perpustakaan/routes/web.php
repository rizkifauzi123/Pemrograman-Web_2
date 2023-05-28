<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiPeminjamanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPeminjamanController;
use App\Http\Controllers\BooksController;

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
    return "Assalamualaikum Ukhti";
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

Route::get('/form-registrasi-anggota', [RegistrasiAnggotaController::class, 'index']);
Route::post('/hasil-regist', [RegistrasiAnggotaController::class, 'hasil']);

//praktikum 9
Route::get('/form-peminjaman-buku', [RegistrasiPeminjamanController::class, 'index']);
Route::post('/hasil-peminjaman', [RegistrasiPeminjamanController::class, 'hasil']);


//praktkum 10
Route::get('/dashboard', [DashboardController::class, 'index']);


//tugas pekan ke 10

Route::get('/tampilan', [DashboardPeminjamanController::class, 'index']);
Route::get('/books', [BooksController::class, 'index']);