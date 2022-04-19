<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPendaftarController;
use App\Http\Controllers\DataRequestController;
use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\DataPengumumanController;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\CetakDokumenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'public_view'])->name('public_view');

Route::get('/login_web', [LoginController::class, 'login_view'])->name('login_web');
Route::post('/login_proses', [LoginController::class, 'login_proses']);
Route::get('/log_out', [LoginController::class, 'log_out'])->name('log_out');

Route::get('/register_web', [RegisterController::class, 'register_view'])->name('register_web');
Route::post('/register_proses', [RegisterController::class, 'store_siswa']);

Route::get('/register_web_admin', [RegisterController::class, 'register_view_admin'])->name('register_web_admin');
Route::post('/register_proses_admin', [RegisterController::class, 'store_admin']);

Route::get('/admin', [DashboardController::class, 'dashboard_admin'])->name('admin');

Route::get('/admin/data_request', [DataRequestController::class, 'data_request_admin'])->name('data_request_admin');
Route::post('/tambah_siswa', [DataRequestController::class, 'tambah_siswa']);

Route::get('/admin/data_pendaftar', [DataPendaftarController::class, 'data_pendaftar_admin']);


Route::get('/admin/data_siswa', [DataSiswaController::class, 'data_siswa_admin'])->name('data_siswa_admin');
Route::post('/admin/atur_kelas', [DataSiswaController::class, 'update_siswa']);
Route::post('/admin/atur_status_data', [DataSiswaController::class, 'update_status_data']);
Route::post('/admin/data_siswa_delete', [DataSiswaController::class, 'delete_siswa']);

Route::get('/admin/data_pengumuman', [DataPengumumanController::class, 'data_pengumuman_admin'])->name('data_pengumuman_admin');
Route::post('/admin/data_pengumuman_tambah', [DataPengumumanController::class, 'store_pengumuman']);
Route::post('/admin/data_pengumuman_edit', [DataPengumumanController::class, 'edit_pengumuman']);
Route::post('/admin/data_pengumuman_delete', [DataPengumumanController::class, 'delete_pengumuman']);

Route::get('/siswa', [DashboardController::class, 'dashboard_siswa'])->name('siswa');
Route::get('/siswa/formulir', [FormulirController::class, 'formulir_pendaftaran'])->name('formulir_pendaftaran');
Route::post('/formulir_proses', [FormulirController::class, 'formulir_proses']);

Route::get('/siswa/cetak_kwitansi', [CetakDokumenController::class, 'cetak_kwitansi']);

Route::get('/siswa/cetak_kwitansi/{id}', function ($id) {
   
    return App::call('App\Http\Controllers\CetakDokumenController::cetak_kwitansi' , ['id' => $id]);
});

Route::get('/siswa/data_pengumuman', [DataPengumumanController::class, 'data_pengumuman_siswa'])->name('data_pengumuman_siswa');
Route::get('/siswa/data_kelas', [DataSiswaController::class, 'data_kelas_siswa'])->name('data_kelas_siswa');

Route::get('/admin/send-mail/{email}/{nama_lengkap}/{id}', function ($email,  $nama_lengkap, $id) {
   
    return App::call('App\Http\Controllers\DataRequestController::send_mail' , ['email' => $email, 'nama_lengkap' => $nama_lengkap,  'id' => $id]);
});

Route::get('/admin/download/{file}', function ($file){
    return Storage::get('storage/ijazah/'.$file);
});

