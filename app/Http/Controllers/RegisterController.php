<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function register_view()
   {
    return view('register');
   }

   public function store(Request $request)
   {

    //    dd('submitted');
    // // 
    
    $nomor_pendaftaran = $request->nomor_pendaftaran;
    $nidn = $request->nidn;
    $tanggal_lahir = $request->tanggal_lahir;
    $email = $request->email;
    $id = sha1($nomor_pendaftaran.$nidn);
    
    
        try {
            DB::transaction(function () use ($id, $email) {
                DB::insert("INSERT INTO user(id,email,id_user_level,id_user_detail) VALUES('$id','$email','2','$id')");
            });
                return redirect()
                    ->route('login_web')
                    ->with([
                        'success' => 'Anda Telah Terdaftar !'
                    ]);
            } catch (\Exception $e) {
                return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Error, Anda Belum Terdaftar !'
                ]);
            }
           
        
   }
   
}