<!DOCTYPE html>
<html lang="en">

@include('admin.components.header')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">



        @include('admin.components.navbar')

        @include('admin.components.sidebar')



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Pengumuman</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">DataTable with default features</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>NIDN</th>
                                                <th>Nama</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Jalur Pendaftaran</th>
                                                <th>File Ijazah</th>
                                                <th>File SKHUN</th>
                                                <th>Jalur Pendafataran</th>
                                                <th>Nilai IPA</th>
                                                <th>Nilai IPS</th>
                                                <th>Kelas</th>
                                                <th>Nama Panggilan</th>
                                                <th>Email</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tempat Lahir</th>
                                                <th>Agama</th>
                                                <th>Kewarganegaraan</th>
                                                <th>Status Kekeluargaan</th>
                                                <th>Anak Ke -</th>
                                                <th>Saudara Kandung</th>
                                                <th>Saudara Tiri</th>
                                                <th>NIK</th>
                                                <th>Alamat</th>
                                                <th>RT/RW</th>
                                                <th>Kelurahan</th>
                                                <th>Kecamatan</th>
                                                <th>Kabupaten</th>
                                                <th>Provinsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($count = 1)
                                            @foreach($user_siswas as $user_siswa)
                                            <tr>
                                                <td>{{$user_siswa->nidn}}</td>
                                                
                                                <td>{{$user_siswa->nama_lengkap}}</td>
                                                <td>{{$user_siswa->tanggal_lahir}}</td>
                                                <td>{{$user_siswa->jalur_pendaftaran}}</td>
                                                <td>
                                                <a href="{{asset('/storage/ijazah')}}/{{$user_siswa->ijazah}}" target="_blank">Ijazah</a>
                                                </td>
                                                <td>
                                                <a href="{{asset('/storage/skhun')}}/{{$user_siswa->skhun}}" target="_blank">Skhun</a>
                                                </td>
                                                
                                                <td>{{$user_siswa->jalur_pendaftaran}}</td>
                                                <td>{{$user_siswa->nilai_ipa}}</td>
                                                <td>{{$user_siswa->nilai_ips}}</td>
                                                <td>{{$user_siswa->kelas}}</td>
                                                <td>{{$user_siswa->nama_panggilan}}</td>
                                                <td>{{$user_siswa->email}}</td>
                                                <td>{{$user_siswa->jenis_kelamin}}</td>
                                                <td>{{$user_siswa->tempat_lahir}}</td>
                                                <td>{{$user_siswa->agama}}</td>
                                                <td>{{$user_siswa->kewarganegaraan}}</td>
                                                <td>{{$user_siswa->status_kekeluargaan}}</td>
                                                <td>{{$user_siswa->anak_ke}}</td>
                                                <td>{{$user_siswa->saudara_kandung}}</td>
                                                <td>{{$user_siswa->saudara_tiri}}</td>
                                                <td>{{$user_siswa->NIK}}</td>
                                                <td>{{$user_siswa->alamat}}</td>
                                                <td>{{$user_siswa->rt_rw}}</td>
                                                <td>{{$user_siswa->kelurahan}}</td>
                                                <td>{{$user_siswa->kecamatan}}</td>
                                                <td>{{$user_siswa->kabupaten}}</td>
                                                <td>{{$user_siswa->provinsi}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('admin.components.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    @include('admin.components.js')

</body>

</html>