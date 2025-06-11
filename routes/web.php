<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Link ;
use App\Http\Controllers\PegawaiController ;
use App\Http\Controllers\Pegawai2Controller ;
use App\Http\Controllers\BlogController ;
use App\Http\Controllers\BelanjaController;
// import java.io;

// System.out.print();


Route::get('/', function () { 
    return view('welcome');
});

Route::get('halo', function () {
	return "<h2>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h2>";
});

Route::get('blog', function () {
	return view('blog'); 
});

Route::get('hello', [Link::class, 'helloword']); 

//ihiihih


Route::get('dosen', [Link::class, 'index']);

//Route::get('/pegawai/{nama}', [Pegawai2Controller::class, 'index']);
Route::get('/formulir', [Pegawai2Controller::class, 'formulir']);
Route::post('/formulir/proses', [Pegawai2Controller::class, 'proses']);

// route blog
Route::get('/blog',  [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//CRUD
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class,'tambah'] );
Route::post('/pegawai/store', [PegawaiController::class,'store'] );
Route::get('/pegawai/edit/{id}', [PegawaiController::class,'edit'] );
Route::post('/pegawai/update', [PegawaiController::class,'update'] );
Route::get('/pegawai/hapus/{id}', [PegawaiController::class,'hapus'] );


Route::get('/keranjang', [BelanjaController::class, 'index']);
Route::get('/keranjang/tambah', [BelanjaController::class, 'tambah']);
Route::post('/keranjang/store', [BelanjaController::class, 'store']);
Route::get('/keranjang/hapus/{id}', [BelanjaController::class, 'hapus']);
Route::get('/keranjang/cari', [BelanjaController::class, 'cari']);

