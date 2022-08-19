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

Route::get('/', 'Datauser@index'); 
Route::get('/tambah-data', 'Datauser@tambah_data'); 
Route::post('/tambah-data/tambah', 'Datauser@aksi_tambah_data'); 
Route::get('/edit-data/{id}', 'Datauser@edit_data'); 
Route::post('/edit-data/edit', 'Datauser@aksi_edit_data'); 
Route::get('/hapus-data/{id}', 'Datauser@hapus_data'); 
