<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataRequestController extends Controller
{
    public function data_request_admin()
    {
        return view('admin.data_request');
    }
}
