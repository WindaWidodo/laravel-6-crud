<?php

// Contoh penggunaan namespace

use App\Http\Controllers\FormController;
use App\Kategori;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/','DashboardController@index');

Route::post('/welcome','FormController@kirim');

Route::get('/master', function () {
    return view('adminlte.master');
});


Route::get('/halaman', function () {
    return view('halaman.index');
});


Route::get('/form','FormController@bio');



// CRUD
// Create
Route::get('/Kategori/create', 'KategoriController@create'); //untuk ke form
Route::post('/kategori', 'KategoriController@store'); //untuk menyimpan ke databese

// read
Route::get('/Kategori','KategoriController@index'); //route list Kategori
Route::get('/kategori/{kategori_id}','KategoriController@show'); // route detail kategori


//Update
Route::get('/kategori/{kategori_id}/edit','KategoriController@edit'); //route edit
Route::put('/kategori/{kategori_id}','KategoriController@update'); // route update


// Delete
Route::delete('/kategori/{kategori_id}','KategoriController@destroy'); //route hapus 