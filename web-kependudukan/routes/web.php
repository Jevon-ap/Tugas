<?php

use Illuminate\Support\Facades\Route;

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
    return view('dashboard',[
        "title"=>"Dashboard",
        "bagian1"=>"Penduduk",
        "jumlah"=>100
    ]);
});

Route::get('/data_kk', function () {
    return view('data_kk',[
        "title"=>"Data Kartu Keluarga"
    ]);
});

Route::get('/data_penduduk', function () {
    return view('data_penduduk',[
        "title"=>"Data Penduduk"
    ]);
});

Route::get('/tambah', function () {
    return view('tambah',[
        "title"=>"Tambah Data Penduduk"
    ]);
});

Route::post('/data_penduduk', function () {
    return view('data_penduduk',[
        "title"=>"Data Penduduk"
    ]);
});

Route::get('/detail', function () {
    return view('detail',[
        "title"=>"Detail penduduk"
    ]);
});

Route::get('/detail_kk', function () {
    return view('detail_kk',[
        "title"=>"Detail Kartu Keluarga"
    ]);
});

