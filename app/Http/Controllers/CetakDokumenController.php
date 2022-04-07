<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CetakDokumenController extends Controller
{
    public function cetak_kwitansi()
    {
        return view('siswa.kwitansi');
    }
}
