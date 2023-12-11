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
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('halo2', function () {
    return "<h1>Haloo Apa Kabar</h1>";
});

Route::get('blog', function () {
    return view('blog');
});
Route::get('Responsive', function () {
    return view('Responsive');
});
Route::get('link', function () {
    return view('link');
});
Route::get('5026221187', function () {
    return view('5026221187');
});
Route::get('welcome', function () {
    return view('welcome');
});
Route::get('about', function () {
    return view('about');
});
Route::get('skills', function () {
    return view('skills');
});
Route::get('hobby', function () {
    return view('hobby');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('js1', function () {
    return view('js1');
});
Route::get('js2', function () {
    return view('js2');
});
Route::get('validasi', function () {
    return view('validasi');
});
Route::get('style', function () {
    return view('style');
});
Route::get('187', function () {
    return view('187');
});
Route::get('hello', function () {
    return view('hello');
});
Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');


//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/View/{id}','App\Http\Controllers\PegawaiController@View');

Route::get('/nilaikuliah','App\Http\Controllers\NilaiKuliahController@index');
Route::get('/nilaikuliah/tambah1','App\Http\Controllers\NilaiKuliahController@tambah');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');

//route CRUD
Route::get('/sirup','App\Http\Controllers\SirupController@index');
Route::get('/sirup/tambah2','App\Http\Controllers\SirupController@tambah');
Route::post('/sirup/store','App\Http\Controllers\SirupController@store');
Route::get('/sirup/edit2/{kodesirup}','App\Http\Controllers\SirupController@edit');
Route::post('/sirup/update','App\Http\Controllers\SirupController@update');
Route::get('/sirup/hapus/{kodesirup}','App\Http\Controllers\SirupController@hapus');
Route::get('/sirup/View2/{kodesirup}','App\Http\Controllers\SirupController@view');
Route::get('/sirup/cari','App\Http\Controllers\SirupController@cari');

Route::get('/keranjangbelanja','App\Http\Controllers\KeranjangController@index');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KeranjangController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KeranjangController@store');
Route::get('/keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangController@hapus');

//EAS
Route::get('/combo','App\Http\Controllers\KategoriController@index');
Route::get('/hasilcombo','App\Http\Controllers\KategoriController@view');

