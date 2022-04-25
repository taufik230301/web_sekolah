<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataRequestController extends Controller
{

    public function tambah_siswa(Request $request)
   {

    //    dd('submitted');
    // // 
    $nama_lengkap = $request->nama_lengkap;
    $nomor_pendaftaran = $request->nomor_pendaftaran;
    $nidn = $request->nidn;
    $id = sha1($nomor_pendaftaran.$nidn);
    
    
        try {
            DB::transaction(function () use ($id, $nomor_pendaftaran, $nidn, $nama_lengkap) {
                DB::insert("INSERT INTO user(id,id_user_level,id_user_detail) VALUES('$id','2','$id')");
                DB::insert("INSERT INTO user_detail(id_user_detail, nomor_pendaftaran, nidn, nama_lengkap, id_status_verifikasi, id_status_validasi, id_status_terdaftar) VALUES('$id','$nomor_pendaftaran','$nidn','$nama_lengkap','1','1','1')");
            });
                return redirect()
                    ->route('data_request_admin')
                    ->with([
                        'success' => 'Berhasil Dimasukan !'
                    ]);
            } catch (\Exception $e) {
                return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Error, Data Gagal Dimasukan !'
                ]);
            }
           
        
   }

   public function tambah_siswa_admin_utama(Request $request)
   {

    //    dd('submitted');
    // // 
    $nama_lengkap = $request->nama_lengkap;
    $nomor_pendaftaran = $request->nomor_pendaftaran;
    $nidn = $request->nidn;
    $id = sha1($nomor_pendaftaran.$nidn);
    
    
        try {
            DB::transaction(function () use ($id, $nomor_pendaftaran, $nidn, $nama_lengkap) {
                DB::insert("INSERT INTO user(id,id_user_level,id_user_detail) VALUES('$id','2','$id')");
                DB::insert("INSERT INTO user_detail(id_user_detail, nomor_pendaftaran, nidn, nama_lengkap, id_status_verifikasi, id_status_validasi, id_status_terdaftar) VALUES('$id','$nomor_pendaftaran','$nidn','$nama_lengkap','1','1','1')");
            });
                return redirect()
                    ->route('data_request_admin_utama')
                    ->with([
                        'success' => 'Berhasil Dimasukan !'
                    ]);
            } catch (\Exception $e) {
                return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Error, Data Gagal Dimasukan !'
                ]);
            }
           
        
   }

    public function data_request_admin()
    {
    if(session()->get('loggin') == true){
            $user_requests = DB::table('user')
            ->join('user_detail', 'user.id', '=', 'user_detail.id_user_detail')
            ->where('id_user_level', '=', 2)
            ->where('id_status_validasi', '=', 1)
            ->get();
        return view('admin.data_request', compact('user_requests'));
    }else{
        return redirect()
        ->route('login_web')
        ->with([
            'error' => 'Sesi Anda berakhir !'
        ]);
    }
    }

    public function data_request_admin_utama()
    {
    if(session()->get('loggin') == true){
            $user_requests = DB::table('user')
            ->join('user_detail', 'user.id', '=', 'user_detail.id_user_detail')
            ->where('id_user_level', '=', 2)
            ->where('id_status_validasi', '=', 1)
            ->get();
        return view('admin_utama.data_request', compact('user_requests'));
    }else{
        return redirect()
        ->route('login_web')
        ->with([
            'error' => 'Sesi Anda berakhir !'
        ]);
    }
    }

    public function send_mail($email, $nama_lengkap, $id, $nidn){

  
        $pasword = substr(md5(mt_rand()), 0, 7);
        try {
        $affected = DB::table('user')
              ->where('id', $id)
              ->update(['username' => $nidn, 'password' => $pasword]);

        $affected = DB::table('user_detail')
              ->where('id_user_detail', $id)
              ->update(['id_status_validasi' => '2']);

        $details = [
            'title' => "Username dan Password Akun Pendaftaran Ulang SMA Negeri 1 Tigapanah ",
            'body' => 'Halo '.$nama_lengkap.' Silahkan masukan username dan password berikut saat login pada website'. 
                        'Ini Username : '.$nidn.' dan password : '.$pasword
        ];
       
        \Mail::to($email)->send(new \App\Mail\MyTestMail($details));
       
        return redirect()
        ->back()
        ->withInput()
        ->with([
            'success' => 'Sukses, Email Terkirim !'
        ]);

    } catch (\Exception $e) {
        return redirect()
        ->back()
        ->withInput()
        ->with([
            'error' => 'Error, Email Tidak Terkirim !'
        ]);
    }

    }

    public function send_mail_admin_utama($email, $nama_lengkap, $id, $nidn){

        
        $pasword = substr(md5(mt_rand()), 0, 7);
        try {
        $affected = DB::table('user')
              ->where('id', $id)
              ->update(['username' => $nidn, 'password' => $pasword]);

        $affected = DB::table('user_detail')
              ->where('id_user_detail', $id)
              ->update(['id_status_validasi' => '2']);

        $details = [
            'title' => "Username dan Password Akun Pendaftaran Ulang SMA Negeri 1 Tigapanah ",
            'body' => 'Halo '.$nama_lengkap.' Silahkan masukan username dan password berikut saat login pada website'. 
                        'Ini Username : '.$nidn.' dan password : '.$pasword
        ];
       
        \Mail::to($email)->send(new \App\Mail\MyTestMail($details));
       
        return redirect()
        ->back()
        ->withInput()
        ->with([
            'success' => 'Sukses, Email Terkirim !'
        ]);

    } catch (\Exception $e) {
        return redirect()
        ->back()
        ->withInput()
        ->with([
            'error' => 'Error, Email Tidak Terkirim !'
        ]);
    }

    }
}