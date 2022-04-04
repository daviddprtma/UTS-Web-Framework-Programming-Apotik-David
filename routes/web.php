<?php

use App\Http\Controllers\CategoryController;
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

Route::resource('obat', 'ObatController');
Route::resource('categories', 'CategoryController');

Route::get('/listobat160419103',"ObatController@dataObat");
Route::get('/obatbatuk160419103','CategoryController@tampilkanObatBatuk');
Route::get('/daftarkategori160419103','CategoryController@tampilkanDaftarKategori');
Route::get('/stokobatdikit160419103','ObatController@stokObatDikit');