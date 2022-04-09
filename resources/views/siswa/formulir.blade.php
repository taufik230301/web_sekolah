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
                <h1 class="m-0 text-center">Formulir Pendaftaran Ulang Siswa Baru</h1>
                <h2 class="m-0 text-center"> SMA Negeri 1 Tiga Panah</h2>
                <h4 class="m-0 text-center">Alamat</h4>
                <div class="container-fluid">
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
                                <input class="form-check-input" type="radio" name="agama" id="inlineRadio2"
                                    value="Islam">
                                <label class="form-check-label" for="inlineRadio2">Islam</label>
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
                            <label for="kode_pos">Ijazah</label>
                            <input type="file" class="form-control" id="ijazah" name="ijazah">
                            @error('file')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="kode_pos">SKHUN</label>
                            <input type="file" class="form-control" id="skhun" name="skhun">
                            @error('file')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="text" value="{{ session()->get('id');}}" name="id" hidden>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
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