<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;

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

// Route untuk halaman Beranda
Route::get('/', function () {
    return view('welcome');
});

// Resource Routes untuk Program Studi
Route::resource('prodis', ProdiController::class);

// Resource Routes untuk Mahasiswa
Route::resource('mahasiswas', MahasiswaController::class);