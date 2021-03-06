<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
   public function login_view()
   {
    return view('login');
   }

   public function login_proses(Request $request)
   {
    
      $username = $request->username;
      $password = $request->password;

      $user = DB::table('user')
      ->join('user_detail', 'user.id', '=', 'user_detail.id_user_detail')
      ->where('username', '=', $username)
      ->first();

      if($user){
         if($user->password == $password){

            if($user->id_user_level == 1){
                  if($user->is_active == 1){

                     $request->session()->put('username', $user->username);
                     $request->session()->put('nama_lengkap', $user->nama_lengkap);
                     $request->session()->put('id', $user->id);
                     $request->session()->put('loggin', true);

                     return redirect()
                           ->route('admin')
                           ->with([
                                 'success' => 'Anda Berhasil Masuk !'
                           ]);
                    }else{
                     return redirect()
                     ->route('login_web')
                     ->with([
                         'error' => 'Akun Anda Belum Aktif !'
                     ]);
                    }

            }else if($user->id_user_level == 2){
               $request->session()->put('username', $username);
               $request->session()->put('nama_lengkap', $user->nama_lengkap);
               $request->session()->put('id', $user->id);
               $request->session()->put('id_status_verifikasi', $user->id_status_verifikasi);
               $request->session()->put('loggin', true);

               return redirect()
                       ->route('siswa')
                       ->with([
                           'success' => 'Anda Berhasil Masuk !'
                       ]);
            }else if($user->id_user_level == 3){
               $request->session()->put('username', $user->username);
               $request->session()->put('nama_lengkap', $user->nama_lengkap);
               $request->session()->put('id', $user->id);
               $request->session()->put('loggin', true);

            return redirect()
                    ->route('admin_utama')
                    ->with([
                        'success' => 'Anda Berhasil Masuk !'
                    ]);
            }else{
               return redirect()
               ->route('login_web')
               ->with([
                  'error' => 'Anda Tidak Memiliki Akses !'
               ]);
            }
         }else{
            return redirect()
            ->route('login_web')
            ->with([
                'error' => 'Password Salah !'
            ]);
         }
      }else{
         return redirect()
      ->route('login_web')
      ->with([
          'error' => 'Anda Belum Tedaftar !'
      ]);
      }
   }
   
   public function log_out(Request $request)
   {
      $request->session()->flush();
      return redirect()
      ->route('login_web')
      ->with([
          'success' => 'Anda Berhasil Logout !'
      ]);
   }
   
}