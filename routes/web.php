<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPendaftarController;
use App\Http\Controllers\DataPengumumanController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\CetakDokumenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

Route::get('/login_web', [LoginController::class, 'login_view'])->name('login_web');
Route::get('/register_web', [RegisterController::class, 'register_view'])->name('register_web');
Route::post('/register_proses', [RegisterController::class, 'store']);

Route::get('/admin', [DashboardController::class, 'dashboard_admin']);
Route::get('/admin/data_pendaftar', [DataPendaftarController::class, 'data_pendaftar_admin']);
Route::get('/admin/data_pengumuman', [DataPengumumanController::class, 'data_pengumuman_admin']);


Route::get('/siswa', [DashboardController::class, 'dashboard_siswa']);
Route::get('/siswa/formulir', [FormulirController::class, 'formulir_pendaftaran']);
Route::get('/siswa/cetak_kwitansi', [CetakDokumenController::class, 'cetak_kwitansi']);


