<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
}
