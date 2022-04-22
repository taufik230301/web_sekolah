<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard_admin()
    {
        if(session()->get('loggin') == true){
            $user_counts = DB::table('user')->where('id_user_level', '=', 2)->count();
            return view('admin.dashboard', compact('user_counts'));

        }else{
            return redirect()
            ->route('login_web')
            ->with([
                'error' => 'Sesi Anda berakhir !'
            ]);
        }
       
    }

    public function dashboard_admin_utama()
    {
        if(session()->get('loggin') == true){
            $user_counts = DB::table('user')->where('id_user_level', '=', 2)->count();
            return view('admin_utama.dashboard', compact('user_counts'));

        }else{
            return redirect()
            ->route('login_web')
            ->with([
                'error' => 'Sesi Anda berakhir !'
            ]);
        }
       
    }

    public function dashboard_siswa()
    {
        if(session()->get('loggin') == true){
        return view('siswa.dashboard');
        }else{
            return redirect()
            ->route('login_web')
            ->with([
                'error' => 'Sesi Anda berakhir !'
            ]);
        }
    }
}