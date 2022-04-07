<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard_admin()
    {
        return view('admin.dashboard');
    }

    public function dashboard_siswa()
    {
        return view('siswa.dashboard');
    }
}
