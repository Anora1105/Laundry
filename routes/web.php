<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\TransaksiController;

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



//Beranda
Route::get('/', [BerandaController::class,'index'])->name('beranda')->middleware('auth');

//CRUD
Route::get('/transaksi', [TransaksiController::class,'transaksi'])->name('transaksi');
Route::get('/tambah', [TransaksiController::class,'tambah'])->name('tambah');
Route::post('/insert', [TransaksiController::class,'insert'])->name('insert');

Route::get('/edit/{id}', [TransaksiController::class,'edit'])->name('edit');
Route::post('/update/{id}', [TransaksiController::class,'update'])->name('update');
Route::get('/hapus/{id}', [TransaksiController::class,'hapus'])->name('hapus');

//Nota
Route::get('/nota/{id}', [TransaksiController::class, 'nota'])->name('nota');

//Login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/loginproses',[LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/register',[LoginController::class, 'register'])->name('register');
Route::post('/registeruser',[LoginController::class, 'registeruser'])->name('registeruser');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
