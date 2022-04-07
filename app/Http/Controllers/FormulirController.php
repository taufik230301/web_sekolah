<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulirController extends Controller
{
    public function formulir_pendaftaran()
    {
        return view('siswa.formulir');
    }
}
