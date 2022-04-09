<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPendaftarController;
use App\Http\Controllers\DataRequestController;
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
Route::post('/login_proses', [LoginController::class, 'login_proses']);
Route::get('/log_out', [LoginController::class, 'log_out'])->name('log_out');

Route::get('/register_web', [RegisterController::class, 'register_view'])->name('register_web');
Route::post('/register_proses', [RegisterController::class, 'store_siswa']);

Route::get('/register_web_admin', [RegisterController::class, 'register_view_admin'])->name('register_web_admin');
Route::post('/register_proses_admin', [RegisterController::class, 'store_admin']);

Route::get('/admin', [DashboardController::class, 'dashboard_admin'])->name('admin');
Route::get('/admin/data_pendaftar', [DataPendaftarController::class, 'data_pendaftar_admin']);
Route::get('/admin/data_request', [DataRequestController::class, 'data_request_admin']);
Route::get('/admin/data_pengumuman', [DataPengumumanController::class, 'data_pengumuman_admin'])->name('data_pengumuman_admin');
Route::post('/admin/data_pengumuman_tambah', [DataPengumumanController::class, 'store_pengumuman']);

Route::get('/siswa', [DashboardController::class, 'dashboard_siswa'])->name('siswa');
Route::get('/siswa/formulir', [FormulirController::class, 'formulir_pendaftaran']);
Route::get('/siswa/cetak_kwitansi', [CetakDokumenController::class, 'cetak_kwitansi']);

Route::get('/admin/send-mail/{email}/{nama_lengkap}/{id}', function ($email,  $nama_lengkap, $id) {
   
    return App::call('App\Http\Controllers\DataRequestController::send_mail' , ['email' => $email, 'nama_lengkap' => $nama_lengkap,  'id' => $id]);
});


