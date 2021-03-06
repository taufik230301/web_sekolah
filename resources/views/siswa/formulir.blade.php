<!DOCTYPE html>
<html lang="en">

@include('siswa.components.header')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">



        @include('siswa.components.navbar')

        @include('siswa.components.sidebar')



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Formulir</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <!-- Notifikasi menggunakan flash session data -->

                @if (session('success'))
                <div class="alert alert-success" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    <div class="alert alert-danger" id="success-alert">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ session('error') }}
                    </div>
                </div>
                @endif
                <div>
                </div>
                <div class="container">
                    @foreach($user_siswas as $user_siswa)
                    <div class="row">
                        <div class="col text-center">
                            <img src="{{asset('public/assets/img/logo_sekolah.png')}}" alt="" width="100px">
                        </div>
                        <div class="col-8">
                            <h1 class="m-0 text-center">Formulir Pendaftaran Ulang Siswa Baru</h1>

                        </div>
                        <div class="col">
                            <img src="{{asset('public/assets/img/adiwiyata.png')}}" alt="" width="150px">
                        </div>
                    </div>

                    <div class="container-fluid">
                        <?php if($user_siswa->id_status_terdaftar == 2){ ?>
                        <center>
                            <h2>Terimakasih, Anda Telah Terdaftar</h2>
                        </center>
                        <?php }else{ ?>

                        <center>
                            <h2>Anda Belum Terdaftar</h2>
                        </center>

                        <form action="/formulir_proses" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama_lengkap">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                            </div>
                            <div class="form-group">
                                <label for="nama_panggilan">Nama Panggilan</label>
                                <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan">
                            </div>
                            <div class="form-group">
                                <label for="no_telp">No Telp</label>
                                <input type="text" class="form-control" id="no_telp" name="no_telp">
                            </div>
                            <div class="form-group">
                                <label for="sekolah_asal">Sekolah Asal</label>
                                <input type="text" class="form-control" id="sekolah_asal" name="sekolah_asal">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin : </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio1"
                                        value="Laki-Laki">
                                    <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="inlineRadio2"
                                        value="Perempuan">
                                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                            </div>
                            <div class="form-group">
                                <label for="nama_panggilan">Agama : </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama" id="inlineRadio1"
                                        value="Kristen">
                                    <label class="form-check-label" for="inlineRadio1">Kristen</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama" id="inlineRadio1"
                                        value="Khatolik">
                                    <label class="form-check-label" for="inlineRadio1">Khatolik</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama" id="inlineRadio2"
                                        value="Islam">
                                    <label class="form-check-label" for="inlineRadio2">Islam</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama" id="inlineRadio1"
                                        value="Budha">
                                    <label class="form-check-label" for="inlineRadio1">Budha</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama" id="inlineRadio1"
                                        value="Hindu">
                                    <label class="form-check-label" for="inlineRadio1">Hindu</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama" id="inlineRadio1"
                                        value="Kong Hu Cu">
                                    <label class="form-check-label" for="inlineRadio1">Kong Hu Cu</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kewarganegaraan">Kewarganegaraan</label>
                                <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                            </div>
                            <div class="form-group">
                                <label for="nama_panggilan">Status Kekeluargaan : </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status_kekeluargaan"
                                        id="inlineRadio1" value="Kandung">
                                    <label class="form-check-label" for="inlineRadio1">Kandung</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status_kekeluargaan"
                                        id="inlineRadio2" value="Tiri">
                                    <label class="form-check-label" for="inlineRadio2">Tiri</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status_kekeluargaan"
                                        id="inlineRadio2" value="Yatim Piatu">
                                    <label class="form-check-label" for="inlineRadio2">Yatim Piatu</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="anak_ke">Anak Ke -</label>
                                <input type="text" class="form-control" id="anak_ke" name="anak_ke">
                            </div>
                            <div class="form-group">
                                <label for="saudara_kandung">Saudara Kandung</label>
                                <input type="text" class="form-control" id="saudara_kandung" name="saudara_kandung">
                            </div>
                            <div class="form-group">
                                <label for="saudara_tiri">Saudara Tiri</label>
                                <input type="text" class="form-control" id="saudara_tiri" name="saudara_tiri">
                            </div>
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="text" class="form-control" id="nik" name="nik">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat">
                            </div>
                            <div class="form-group">
                                <label for="rt_rw">RT/RW</label>
                                <input type="text" class="form-control" id="rt_rw" name="rt_rw">
                            </div>
                            <div class="form-group">
                                <label for="kelurahan">Kelurahan</label>
                                <input type="text" class="form-control" id="kelurahan" name="kelurahan">
                            </div>
                            <div class="form-group">
                                <label for="kecamatan">Kecamatan</label>
                                <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                            </div>
                            <div class="form-group">
                                <label for="kabupaten">Kabupaten</label>
                                <input type="text" class="form-control" id="kabupaten" name="kabupaten">
                            </div>
                            <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <input type="text" class="form-control" id="provinsi" name="provinsi">
                            </div>
                            <div class="form-group">
                                <label for="kode_pos">Kode Pos</label>
                                <input type="text" class="form-control" id="kode_pos" name="kode_pos">
                            </div>
                            <div class="form-group">
                                <label for="ijazah">Ijazah</label>
                                <input type="file" class="form-control" id="ijazah" name="ijazah">
                            </div>
                            <input type="text" name="ijazah_old" id="ijazah_old" value="{{$user_siswa->ijazah}}" hidden>
                            <div class="form-group">
                                <label for="skhun">SKHUN</label>
                                <input type="file" class="form-control" id="skhun" name="skhun">
                            </div>
                            <input type="text" name="skhun_old" id="skhun_old" value="{{$user_siswa->skhun}}" hidden>
                            <div class="form-group">
                                <label for="kk">Kartu Keluarga</label>
                                <input type="file" class="form-control" id="kk" name="kk">
                            </div>
                            <input type="text" name="kk_old" id="kk_old" value="{{$user_siswa->kk}}" hidden>
                            <div class="form-group">
                                <label for="akta_kelahiran">Akta Kelahiran</label>
                                <input type="file" class="form-control" id="akta_kelahiran" name="akta_kelahiran">
                            </div>
                            <input type="text" name="akta_kelahiran_old" id="akta_kelahiran_old"
                                value="{{$user_siswa->akta_kelahiran}}" hidden>
                            <div class="form-group">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto">
                            </div>
                            <input type="text" name="foto_old" id="foto_old" value="{{$user_siswa->foto}}" hidden>
                            <div class="form-group">
                                <label for="surat_keterangan_lulus">Surat Keterangan Lulus Sementara</label>
                                <input type="file" class="form-control" id="surat_keterangan_lulus"
                                    name="surat_keterangan_lulus">
                            </div>
                            <input type="text" name="surat_keterangan_lulus_old" id="surat_keterangan_lulus_old"
                                value="{{$user_siswa->surat_keterangan_lulus}}" hidden>
                            <div class="form-group">
                                <label for="nilai_ipa">Nilai IPA</label>
                                <input type="text" class="form-control" id="nilai_ipa" name="nilai_ipa">
                            </div>
                            <div class="form-group">
                                <label for="nilai_ips">Nilai IPS</label>
                                <input type="text" class="form-control" id="nilai_ips" name="nilai_ips">
                            </div>
                            <div class="form-group">
                                <label for="nilai_matematika">Nilai Matematika</label>
                                <input type="text" class="form-control" id="nilai_matematika" name="nilai_matematika">
                            </div>
                            <div class="form-group">
                                <label for="nilai_bahasa_inggris">Nilai Bahasa Inggris</label>
                                <input type="text" class="form-control" id="nilai_bahasa_inggris"
                                    name="nilai_bahasa_inggris">
                            </div>
                            <div class="form-group">
                                <label for="nilai_bahasa_indonesia">Nilai Bahasa Indonesia</label>
                                <input type="text" class="form-control" id="nilai_bahasa_indonesia"
                                    name="nilai_bahasa_indonesia">
                            </div>

                            <div class="form-group">
                                <label for="jalur_pendaftaran">Jalur Pendaftaran : </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jalur_pendaftaran"
                                        id="inlineRadio1" value="Zonasi">
                                    <label class="form-check-label" for="inlineRadio1">Zonasi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jalur_pendaftaran"
                                        id="inlineRadio2" value="Prestasi">
                                    <label class="form-check-label" for="inlineRadio2">Prestasi</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jalur_pendaftaran">Pilih Ukuran Baju Batik : </label>
                                <select class="form-control" name="id_baju_batik">
                                    <option value="1">S - Rp 75.000</option>
                                    <option value="2">M - Rp 80.000</option>
                                    <option value="3">L - Rp 85.000</option>
                                    <option value="1">XL - Rp 90.000</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jalur_pendaftaran">Pilih Ukuran Baju Olahraga : </label>
                                <select class="form-control" name="id_baju_olahraga">
                                    <option value="1">S - Rp 135.000</option>
                                    <option value="2">M - Rp 145.000</option>
                                    <option value="3">L - Rp 155.000</option>
                                    <option value="1">XL - Rp 165.000</option>
                                </select>
                            </div>
                            <br>
                            <h3>Data Ayah Kandung/Tiri</h3>
                            <br>
                            <div class="form-group">
                                <label for="nama_ayah">Nama Ayah</label>
                                <input type="text" class="form-control" id="nama_ayah" name="nama_ayah">
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir_ayah">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir_ayah" name="tempat_lahir_ayah">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir_ayah">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir_ayah"
                                    name="tanggal_lahir_ayah">
                            </div>
                            <div class="form-group">
                                <label for="agama_ayah">Agama : </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama_ayah" id="inlineRadio1"
                                        value="Kristen">
                                    <label class="form-check-label" for="inlineRadio1">Kristen</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama_ayah" id="inlineRadio1"
                                        value="Khatolik">
                                    <label class="form-check-label" for="inlineRadio1">Khatolik</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama_ayah" id="inlineRadio2"
                                        value="Islam">
                                    <label class="form-check-label" for="inlineRadio2">Islam</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama_ayah" id="inlineRadio1"
                                        value="Budha">
                                    <label class="form-check-label" for="inlineRadio1">Budha</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama_ayah" id="inlineRadio1"
                                        value="Hindu">
                                    <label class="form-check-label" for="inlineRadio1">Hindu</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama_ayah" id="inlineRadio1"
                                        value="Kong Hu Cu">
                                    <label class="form-check-label" for="inlineRadio1">Kong Hu Cu</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pendidikan_ayah">Pendidikan</label>
                                <input type="text" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah">
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan_ayah">Pekerjaan</label>
                                <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah">
                            </div>
                            <div class="form-group">
                                <label for="warga_negara_ayah">Warga Negara</label>
                                <input type="text" class="form-control" id="warga_negara_ayah" name="warga_negara_ayah">
                            </div>
                            <div class="form-group">
                                <label for="nomor_telepon_ayah">Nomor Telepon Ayah</label>
                                <input type="text" class="form-control" id="nomor_telepon_ayah"
                                    name="nomor_telepon_ayah">
                            </div>
                            <div class="form-group">
                                <label for="pendapatan_ayah">Pendapatan Ayah</label>
                                <input type="text" class="form-control" id="pendapatan_ayah" name="pendapatan_ayah">
                            </div>
                            <br>
                            <h3>Data Ibu Kandung/Tiri</h3>
                            <br>
                            <div class="form-group">
                                <label for="nama_ibu">Nama Ibu</label>
                                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu">
                            </div>
                            <div class="form-group">
                                <label for="tempat_lahir_ibu">Tempat Lahir</label>
                                <input type="text" class="form-control" id="tempat_lahir_ibu" name="tempat_lahir_ibu">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir_ibu">Tanggal Lahir</label>
                                <input type="date" class="form-control" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu">
                            </div>
                            <div class="form-group">
                                <label for="agama_ibu">Agama : </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama_ibu" id="inlineRadio1"
                                        value="Kristen">
                                    <label class="form-check-label" for="inlineRadio1">Kristen</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama_ibu" id="inlineRadio1"
                                        value="Khatolik">
                                    <label class="form-check-label" for="inlineRadio1">Khatolik</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama_ibu" id="inlineRadio2"
                                        value="Islam">
                                    <label class="form-check-label" for="inlineRadio2">Islam</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama_ibu" id="inlineRadio1"
                                        value="Budha">
                                    <label class="form-check-label" for="inlineRadio1">Budha</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama_ibu" id="inlineRadio1"
                                        value="Hindu">
                                    <label class="form-check-label" for="inlineRadio1">Hindu</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="agama_ibu" id="inlineRadio1"
                                        value="Kong Hu Cu">
                                    <label class="form-check-label" for="inlineRadio1">Kong Hu Cu</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pendidikan_ibu">Pendidikan</label>
                                <input type="text" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu">
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan_ibu">Pekerjaan</label>
                                <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu">
                            </div>
                            <div class="form-group">
                                <label for="warga_negara_ibu">Warga Negara</label>
                                <input type="text" class="form-control" id="warga_negara_ibu" name="warga_negara_ibu">
                            </div>
                            <div class="form-group">
                                <label for="nomor_telepon_ibu">Nomor Telepon</label>
                                <input type="text" class="form-control" id="nomor_telepon_ibu" name="nomor_telepon_ibu">
                            </div>
                            <div class="form-group">
                                <label for="pendapatan_ibu">Pendapatan</label>
                                <input type="text" class="form-control" id="pendapatan_ibu" name="pendapatan_ibu">
                            </div>
                            <input type="text" value="{{ session()->get('id');}}" name="id" hidden>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        <?php } ?>
                        @endforeach
                        <!-- /.row (main row) -->
                    </div>
                    <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('siswa.components.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @include('siswa.components.js')

</body>

</html>