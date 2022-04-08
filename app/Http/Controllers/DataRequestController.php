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
}