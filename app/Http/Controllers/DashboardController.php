<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard_admin()
    {
        if(session()->get('loggin') == true){
            return view('admin.dashboard');
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