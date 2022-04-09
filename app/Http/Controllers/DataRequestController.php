<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataRequestController extends Controller
{
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

    public function send_mail($email, $nama_lengkap, $id){

        $username = substr(md5(mt_rand()), 0, 7);
        $pasword = substr(md5(mt_rand()), 0, 7);
        try {
        $affected = DB::table('user')
              ->where('id', $id)
              ->update(['username' => $username, 'password' => $pasword]);

        $affected = DB::table('user_detail')
              ->where('id_user_detail', $id)
              ->update(['id_status_validasi' => '2']);

        $details = [
            'title' => "Mail FROM ".$email,
            'body' => 'Halo '.$nama_lengkap.' 
                        Ini Username : '.$username.' dan password : '.$pasword
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