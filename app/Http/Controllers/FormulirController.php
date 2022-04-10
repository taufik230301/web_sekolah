<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FormulirController extends Controller
{
    public function formulir_pendaftaran()
    {

    if(session()->get('loggin') == true){

        return view('siswa.formulir');

    }else{
        return redirect()
        ->route('login_web')
        ->with([
            'error' => 'Sesi Anda berakhir !'
        ]);
    }

    }
    public function formulir_proses(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'ijazah' => "required|mimes:pdf|max:10000",
            'skhun' => "required|mimes:pdf|max:10000"
        ]);
 
        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Error, Data Tidak Terupload !'
                ]);
        }

           

        $nama_lengkap = $request->nama_lengkap;
        $nama_panggilan = $request->nama_panggilan;
        $jenis_kelamin = $request->jenis_kelamin;
        $tempat_lahir = $request->tempat_lahir;
        $tanggal_lahir = $request->tanggal_lahir;
        $agama = $request->agama;
        $kewarganegaraan = $request->kewarganegaraan;
        $status_kekeluargaan = $request->status_kekeluargaan;
        $anak_ke = $request->anak_ke;
        $saudara_kandung = $request->saudara_kandung;
        $saudara_tiri = $request->saudara_tiri;
        $nik = $request->nik;
        $alamat = $request->alamat;
        $rt_rw = $request->rt_rw;
        $kelurahan = $request->kelurahan;
        $kecamatan = $request->kecamatan;
        $kabupaten = $request->kabupaten;
        $provinsi = $request->provinsi;
        $kode_pos = $request->kode_pos;
        $id = $request->id;
        $jalur_pendaftaran = $request->jalur_pendaftaran;
        $nilai_ipa = $request->nilai_ipa;
        $nilai_ips = $request->nilai_ips;

       
   
           $name_ijazah = $request->file('ijazah')->getClientOriginalName();
   
           $path_ijazah = $request->file('ijazah')->store('public/ijazah');

           $name_skhun = $request->file('skhun')->getClientOriginalName();
   
           $path_skhun = $request->file('skhun')->store('public/skhun');

           $file_name_ijazah = str_replace("public/ijazah/", "", $path_ijazah );
           $file_name_skhun = str_replace("public/skhun/", "", $path_skhun );

           


       try {
        $affected = DB::table('user_detail')
              ->where('id_user_detail', $id)
              ->update(['nama_lengkap' => $nama_lengkap, 
              'nama_panggilan' => $nama_panggilan, 
              'jenis_kelamin' => $jenis_kelamin, 
              'tempat_lahir' => $tempat_lahir,
              'tanggal_lahir' => $tanggal_lahir,
              'agama' => $agama,
              'kewarganegaraan' => $kewarganegaraan,
              'status_kekeluargaan' => $status_kekeluargaan,
              'anak_ke' => $anak_ke,
              'saudara_kandung' => $saudara_kandung,
              'saudara_tiri' => $saudara_tiri,
              'NIK' => $nik,
              'alamat' => $alamat,
              'rt_rw' => $rt_rw,
              'kelurahan' => $kelurahan,
              'kecamatan' => $kecamatan,
              'kabupaten' => $kabupaten,
              'provinsi' => $provinsi,
              'kode_pos' => $kode_pos,
              'ijazah' => $file_name_ijazah,
              'skhun' => $file_name_skhun,
              'id_status_terdaftar' => '2',
              'jalur_pendaftaran' => $jalur_pendaftaran,
              'nilai_ipa' => $nilai_ipa,
              'nilai_ips' => $nilai_ips]);
       
        return redirect()
        ->back()
        ->withInput()
        ->with([
            'success' => 'Sukses, Data Telah Di Upload !'
        ]);

    } catch (\Exception $e) {
        return redirect()
        ->back()
        ->withInput()
        ->with([
            'error' => 'Error, Data Tidak Terupload !'
        ]);
    }

    }
        // echo $nama_lengkap;
        // echo "<br>";
        // echo $nama_panggilan;
        // echo "<br>";
        // echo $jenis_kelamin;
        // echo "<br>";
        // echo $tempat_lahir;
        // echo "<br>";
        // echo $tanggal_lahir;
        // echo "<br>";
        // echo $agama;
        // echo "<br>";
        // echo $kewarganegaraan;
        // echo "<br>";
        // echo $status_kekeluargaan;
        // echo "<br>";
        // echo $anak_ke;
        // echo "<br>";
        // echo $saudara_kandung;
        // echo "<br>";
        // echo $saudara_tiri;
        // echo "<br>";
        // echo $nik;
        // echo "<br>";
        // echo $alamat;
        // echo "<br>";
        // echo $rt_rw;
        // echo "<br>";
        // echo $kelurahan;
        // echo "<br>";
        // echo $kecamatan;
        // echo "<br>";
        // echo $kabupaten;
        // echo "<br>";
        // echo $provinsi;
        // echo "<br>";
        // echo $kode_pos;

    
    
}