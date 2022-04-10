<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


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

    public function delete_siswa(Request $request)
    {
        $id = $request->id;
        $ijazah = $request->ijazah;
        $skhun = $request->skhun;

        try {
            if(File::exists(public_path('storage/ijazah/'.$ijazah))){
                File::delete(public_path('storage/ijazah/'.$ijazah));
                File::delete(public_path('storage/skhun/'.$skhun));
            }else{
                dd('File does not exists.');
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
}