<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPendaftarController extends Controller
{
    public function data_pendaftar_admin()
    {
        if(session()->get('loggin') == true){

            $user_pendaftar = DB::table('user')
            ->join('user_detail', 'user.id', '=', 'user_detail.id_user_detail')
            ->where('id_user_level', '=', 2)
            ->where('id_status_validasi', '=', 2)
            ->get();

            dd($user_pendaftar);

            return view('admin.data_pendaftar', compact('user_pendaftar'));

        }else{
            return redirect()
            ->route('login_web')
            ->with([
                'error' => 'Sesi Anda berakhir !'
            ]);
        }
    }

    public function data_pengumuman_admin()
    {
        return view('admin.data_pengumuman');
    }
}
