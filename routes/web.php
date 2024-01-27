<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MhsController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mhs', [MhsController::class,'tampilSemua']);
Route::get('/mhs/{nim}', [MhsController::class,'tampil']);
Route::post('/mhs', [MhsController::class,'tambah']);
Route::patch('/mhs/{nim}', [MhsController::class,'ubah']);
Route::delete('/mhs/{nim}', [MhsController::class,'hapus']);
// Akses ke database
Route::get('/m/tambah', [MahasiswaController::class,'tambahForm']);
Route::get('/m/ubah/{id}', [MahasiswaController::class,'ubahForm']);
Route::get('/m/hapus/{id}', [MahasiswaController::class,'hapusForm']);
Route::get('/m', [MahasiswaController::class,'tampilSemua']);
Route::get('/m/{id}', [MahasiswaController::class,'tampil']);
Route::post('/m', [MahasiswaController::class,'tambah']);
Route::patch('/m/{id}', [MahasiswaController::class,'ubah']);
Route::delete('/m/{id}', [MahasiswaController::class,'hapus']);
