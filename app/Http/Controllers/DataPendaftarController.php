<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPendaftarController extends Controller
{
    public function data_pendaftar_admin()
    {
        return view('admin.data_pendaftar');
    }

    public function data_pengumuman_admin()
    {
        return view('admin.data_pengumuman');
    }
}
