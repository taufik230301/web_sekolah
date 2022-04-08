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

   public function register_view_admin()
   {
    return view('register_admin');
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
            DB::transaction(function () use ($id, $email, $nomor_pendaftaran, $nidn) {
                DB::insert("INSERT INTO user(id,email,id_user_level,id_user_detail) VALUES('$id','$email','2','$id')");
                DB::insert("INSERT INTO user_detail(id_user_detail,nomor_pendaftaran,nidn) VALUES('$id','$nomor_pendaftaran','$nidn')");
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

   public function store_admin(Request $request)
   {

    //    dd('submitted');
    // // 
    
    $username = $request->username;
    $password = $request->password;
    $no_telp = $request->no_telp;
    $email = $request->email;
    $id = sha1($username.$password);
    
    
        try {
            DB::transaction(function () use ($id, $email, $username, $password, $no_telp) {
                DB::insert("INSERT INTO user(id,email,username,password,no_telp,id_user_level,id_user_detail) VALUES('$id','$email','$username','$password','$no_telp','1','$id')");
                DB::insert("INSERT INTO user_detail(id_user_detail) VALUES('$id')");
            });
                return redirect()
                    ->route('login_web')
                    ->with([
                        'success' => 'Anda Telah Terdaftar Sebagai Admin !'
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