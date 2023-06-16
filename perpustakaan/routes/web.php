<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrasiPeminjamanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPeminjamanController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;


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
//Route::get('/books', [BooksController::class, 'index']);


// praktikum 11
Route::get('/tampilan/book', [BookController::class, 'index']);

Route::get('/tampilan/member', [MemberController::class, 'index']);


// praktikum 12
Route::get('/tampilan/book/create', [BookController::class, 'create']);
Route::post('/tampilan/book/store', [BookController::class, 'store']);
Route::delete('/tampilan/book/destroy/{id}', [BookController::class, 'destroy']);


// Tugas Pekan 12
Route::get('/tampilan/member/create', [MemberController::class, 'create']);
Route::post('/tampilan/member/store', [MemberController::class, 'store']);
Route::delete('/tampilan/member/destroy/{id}', [MemberController::class, 'destroy']);


// Praktikum 13 - Edit & Detail

Route::get('/tampilan/book/edit/{id}', [BookController::class, 'edit']);
Route::put('/tampilan/book/update/{id}', [BookController::class, 'update']);
Route::get('/tampilan/book/show/{id}', [BookController::class, 'show']);