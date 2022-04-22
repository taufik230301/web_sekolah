<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataPanitiaController extends Controller
{
    public function data_panitia_admin()
    {
    if(session()->get('loggin') == true){
            $user_panitias = DB::table('user')
            ->where('id_user_level', '=', 1)
            ->get();
        return view('admin_utama.data_panitia', compact('user_panitias'));
    }else{
        return redirect()
        ->route('login_web')
        ->with([
            'error' => 'Sesi Anda berakhir !'
        ]);
    }
    }
}