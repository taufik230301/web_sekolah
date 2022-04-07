<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
   public function login_view()
   {
    return view('login');
   }

   public function login_proses(Request $request)
   {
    
   }
   
   
}