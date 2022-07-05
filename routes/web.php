<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    return redirect('/produk');
});

//CRUD produk
Route::get('/produk','App\Http\Controllers\ProductController@index');
Route::get('/produk/tambah','App\Http\Controllers\ProductController@tambah');
Route::get('/produk/edit/{id}','App\Http\Controllers\ProductController@edit');
Route::post('/produk/buat','App\Http\Controllers\ProductController@buat');
Route::post('/produk/update','App\Http\Controllers\ProductController@update');
Route::get('/produk/delete/{id}','App\Http\Controllers\ProductController@delete');
//Kategori
Route::get('/kategori','App\Http\Controllers\KategoriController@index');
Route::get('/kategori/tambah','App\Http\Controllers\KategoriController@tambah');
Route::get('/kategori/edit/{id}','App\Http\Controllers\KategoriController@edit');
Route::post('/kategori/buat','App\Http\Controllers\KategoriController@buat');
Route::post('/kategori/update','App\Http\Controllers\KategoriController@update');
Route::get('/kategori/delete/{id}','App\Http\Controllers\KategoriController@delete');

