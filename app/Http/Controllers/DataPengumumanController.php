<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DataPengumumanController extends Controller
{
    public function data_pengumuman_admin()
    {
        if(session()->get('loggin') == true){
            $pengumumans = DB::table('pengumuman')->get();
           
            return view('admin.data_pengumuman', compact('pengumumans'));
        }else{
            return redirect()
            ->route('login_web')
            ->with([
                'error' => 'Sesi Anda berakhir !'
            ]);
        }
    }

    public function store_pengumuman(Request $request)
    {
        $judul_pengumuman = $request->judul_pengumuman;
        $isi_pengumuman = $request->isi_pengumuman;
        $nama_penulis = $request->nama_penulis;
        $tanggal_pengumuman = $request->tanggal_pengumuman;

        try {
            DB::transaction(function () use ($judul_pengumuman, $isi_pengumuman, $nama_penulis, $tanggal_pengumuman) {
                DB::insert("INSERT INTO pengumuman(judul_pengumuman,isi_pengumuman,nama_penulis, tanggal_pengumuman) VALUES('$judul_pengumuman','$isi_pengumuman','$nama_penulis','$tanggal_pengumuman')");
            });
                return redirect()
                    ->route('data_pengumuman_admin')
                    ->with([
                        'success' => 'Anda Berhasil Menambahkan Data !'
                    ]);
            } catch (\Exception $e) {
                return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Error, Data Anda Gagal Dimasukan !'
                ]);
            }
        }

        
    
}
