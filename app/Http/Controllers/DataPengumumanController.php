<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPengumumanController extends Controller
{
    public function data_pengumuman_admin()
    {
        return view('admin.data_pengumuman');
    }
}
