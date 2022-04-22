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

   public function store_siswa(Request $request)
   {

    //    dd('submitted');
    // // 
    $nama_lengkap = $request->nama_lengkap;
    $nomor_pendaftaran = $request->nomor_pendaftaran;
    $nidn = $request->nidn;
    $tanggal_lahir = $request->tanggal_lahir;
    $email = $request->email;

   
    
        try {
            
            $user = DB::table('user_detail')
            ->where('nomor_pendaftaran', '=', $nomor_pendaftaran)
            ->where('nidn', '=', $nidn)
            ->first();
            
            $id = $user->id_user_detail;
            DB::transaction(function () use ($email, $nomor_pendaftaran, $nidn, $nama_lengkap, $tanggal_lahir, $id) {
                DB::update("UPDATE user SET email='$email' WHERE id='$id'");
                DB::update("UPDATE user_detail SET tanggal_lahir='$tanggal_lahir' WHERE nomor_pendaftaran='$nomor_pendaftaran' AND nidn='$nidn'");
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
                    'error' => 'Maaf, NIDN anda tidak terdaftar di dalam sistem kami, Hanya pendaftar yang dinyatakan lulus yang dapat melakukan pendaftaran. !'
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