<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;



class DataSiswaController extends Controller
{
    public function data_siswa_admin()
    {
    if(session()->get('loggin') == true){
            $user_siswas = DB::table('user')
            ->join('user_detail', 'user.id', '=', 'user_detail.id_user_detail')
            ->where('id_user_level', '=', 2)
            ->where('id_status_terdaftar', '=', 2)
            ->get();
        return view('admin.data_siswa', compact('user_siswas'));
    }else{
        return redirect()
        ->route('login_web')
        ->with([
            'error' => 'Sesi Anda berakhir !'
        ]);
    }
    }

    public function data_siswa_admin_utama()
    {
    if(session()->get('loggin') == true){
            $user_siswas = DB::table('user')
            ->join('user_detail', 'user.id', '=', 'user_detail.id_user_detail')
            ->where('id_user_level', '=', 2)
            ->where('id_status_terdaftar', '=', 2)
            ->get();
        return view('admin_utama.data_siswa', compact('user_siswas'));
    }else{
        return redirect()
        ->route('login_web')
        ->with([
            'error' => 'Sesi Anda berakhir !'
        ]);
    }
    }

    public function data_kelas_siswa()
    {
    if(session()->get('loggin') == true){
            $user_siswas = DB::table('user')
            ->join('user_detail', 'user.id', '=', 'user_detail.id_user_detail')
            ->where('id_user_level', '=', 2)
            ->where('id_status_terdaftar', '=', 2)
            ->get();
        return view('siswa.data_siswa', compact('user_siswas'));
    }else{
        return redirect()
        ->route('login_web')
        ->with([
            'error' => 'Sesi Anda berakhir !'
        ]);
    }
    }

    public function update_siswa(Request $request){
        $kelas = $request->kelas;
        $id = $request->id;

       try {
        $affected = DB::table('user_detail')
              ->where('id_user_detail', $id)
              ->update([
              'kelas' => $kelas
              ]);
       
        return redirect()
        ->back()
        ->withInput()
        ->with([
            'success' => 'Sukses, Kelas Telah Ditambahkan !'
        ]);

    } catch (\Exception $e) {
        return redirect()
        ->back()
        ->withInput()
        ->with([
            'error' => 'Error,  Kelas Tidak Ditambahkan !'
        ]);
    }
    }

    public function update_siswa_admin_utama(Request $request){
        $kelas = $request->kelas;
        $id = $request->id;

       try {
        $affected = DB::table('user_detail')
              ->where('id_user_detail', $id)
              ->update([
              'kelas' => $kelas
              ]);
       
        return redirect()
        ->back()
        ->withInput()
        ->with([
            'success' => 'Sukses, Kelas Telah Ditambahkan !'
        ]);

    } catch (\Exception $e) {
        return redirect()
        ->back()
        ->withInput()
        ->with([
            'error' => 'Error,  Kelas Tidak Ditambahkan !'
        ]);
    }
    }

    public function update_status_data(Request $request){


        $id_status_verifikasi = $request->id_status_verifikasi;
        $id = $request->id;

       try {
        $affected = DB::table('user_detail')
              ->where('id_user_detail', $id)
              ->update([
              'id_status_verifikasi' => $id_status_verifikasi
              ]);
       
        return redirect()
        ->back()
        ->withInput()
        ->with([
            'success' => 'Sukses, Data Telah Diverifikasi !'
        ]);

    } catch (\Exception $e) {
        return redirect()
        ->back()
        ->withInput()
        ->with([
            'error' => 'Error,  Data Belum Diverifikasi !'
        ]);
    }
    }

    public function update_status_data_admin_utama(Request $request){
        $id_status_verifikasi = $request->id_status_verifikasi;
        $id = $request->id;

       try {
        $affected = DB::table('user_detail')
              ->where('id_user_detail', $id)
              ->update([
              'id_status_verifikasi' => $id_status_verifikasi
              ]);
       
        return redirect()
        ->back()
        ->withInput()
        ->with([
            'success' => 'Sukses, Data Telah Diverifikasi !'
        ]);

    } catch (\Exception $e) {
        return redirect()
        ->back()
        ->withInput()
        ->with([
            'error' => 'Error,  Data Belum Diverifikasi !'
        ]);
    }
    }

    public function delete_siswa(Request $request)
    {
        $id = $request->id;
        $ijazah = $request->ijazah;
        $skhun = $request->skhun;
        $kk = $request->kk;
        $akta_kelahiran = $request->akta_kelahiran;
        $foto = $request->foto;
        $surat_keterangan_lulus = $request->surat_keterangan_lulus;

        
        
        try {
            if(File::exists(public_path('storage/ijazah/'.$ijazah))){
                File::delete(public_path('storage/ijazah/'.$ijazah));
                File::delete(public_path('storage/skhun/'.$skhun));
                File::delete(public_path('storage/kk/'.$kk));
                File::delete(public_path('storage/akta_kelahiran/'.$akta_kelahiran));
                File::delete(public_path('storage/foto/'.$foto));
                File::delete(public_path('storage/surat_keterangan_lulus/'.$surat_keterangan_lulus));
            }

            DB::transaction(function () use ($id) {
                DB::delete("DELETE FROM user WHERE id='$id'");
                DB::delete("DELETE FROM user_detail WHERE id_user_detail='$id'");
            });
                return redirect()
                    ->route('data_siswa_admin')
                    ->with([
                        'success' => 'Anda Berhasil Menghapus Data !'
                    ]);
            } catch (\Exception $e) {
                return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Error, Data Anda Gagal Dihapus !'
                ]);
            }
    }

    public function delete_siswa_admin_utama(Request $request)
    {
        $id = $request->id;
        $ijazah = $request->ijazah;
        $skhun = $request->skhun;
        $kk = $request->kk;
        $akta_kelahiran = $request->akta_kelahiran;
        $foto = $request->foto;
        $surat_keterangan_lulus = $request->surat_keterangan_lulus;

        // echo dd(public_path('storage/ijazah/'.$ijazah));
        // die();
        try {
            if(File::exists(public_path('storage/ijazah/'.$ijazah))){
                File::delete(public_path('storage/ijazah/'.$ijazah));
                File::delete(public_path('storage/skhun/'.$skhun));
                File::delete(public_path('storage/kk/'.$kk));
                File::delete(public_path('storage/akta_kelahiran/'.$akta_kelahiran));
                File::delete(public_path('storage/foto/'.$foto));
                File::delete(public_path('storage/surat_keterangan_lulus/'.$surat_keterangan_lulus));
            }

            DB::transaction(function () use ($id) {
                DB::delete("DELETE FROM user WHERE id='$id'");
                DB::delete("DELETE FROM user_detail WHERE id_user_detail='$id'");
            });
                return redirect()
                    ->route('data_siswa_admin_utama')
                    ->with([
                        'success' => 'Anda Berhasil Menghapus Data !'
                    ]);
            } catch (\Exception $e) {
                return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Error, Data Anda Gagal Dihapus !'
                ]);
            }
    }

    
}