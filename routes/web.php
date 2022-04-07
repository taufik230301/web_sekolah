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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view('/admin', 'admin.dashboard');
Route::view('/admin/data_pendaftar', 'admin.data_pendaftar');
Route::view('/admin/data_pengumuman', 'admin.data_pengumuman');

Route::view('/siswa', 'siswa.dashboard');
Route::view('/siswa/formulir', 'siswa.formulir');
