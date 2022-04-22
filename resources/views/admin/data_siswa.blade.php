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
                            <h1 class="m-0">Data Siswa</h1>
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
                @if (session('success'))
                <div class="alert alert-success" id="success-alert">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    <strong>{{ session('success') }}</strong>
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    <div class="alert alert-danger" id="success-alert">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ session('error') }}</strong>
                    </div>
                </div>
                @endif
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Data siswa</h3>
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
                                                <th>Nilai Matematika</th>
                                                <th>Nilai Bahasa Inggris</th>
                                                <th>Nilai Bahasa Indonesia</th>
                                                <th>Kelas</th>
                                                <th>Status Verifikasi</th>
                                                <th>Nama Panggilan</th>
                                                <th>Asal Sekolah</th>
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
                                                <th>Foto</th>
                                                <th>File KK</th>
                                                <th>File Akta Kelahiran</th>
                                                <th>File Surat Keterangan Lulus Sementara</th>
                                                <th>Kelurahan</th>
                                                <th>Kecamatan</th>
                                                <th>Kabupaten</th>
                                                <th>Provinsi</th>
                                                <th>Atur Kelas</th>
                                                <th>Atur Status Data</th>
                                                <th>Hapus Data</th>
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
                                                    <a href="{{asset('/storage/ijazah')}}/{{$user_siswa->ijazah}}"
                                                        target="_blank">Ijazah</a>
                                                </td>
                                                <td>
                                                    <a href="{{asset('/storage/skhun')}}/{{$user_siswa->skhun}}"
                                                        target="_blank">Skhun</a>
                                                </td>


                                                <td>{{$user_siswa->jalur_pendaftaran}}</td>
                                                <td>{{$user_siswa->nilai_ipa}}</td>
                                                <td>{{$user_siswa->nilai_ips}}</td>
                                                <td>{{$user_siswa->nilai_matematika}}</td>
                                                <td>{{$user_siswa->nilai_bahasa_inggris}}</td>
                                                <td>{{$user_siswa->nilai_bahasa_indonesia}}</td>
                                                <td> <?php
                                                  if($user_siswa->kelas == NULL ){?>
                                                    <i class="fas fa-times"></i>
                                                    <?php } else{?>
                                                    {{$user_siswa->kelas}}
                                                    <?php }
                                                  ?></td>
                                                <td> <?php
                                                  if($user_siswa->id_status_verifikasi == 1 ){?>
                                                    <i class="fas fa-times"></i>
                                                    <?php } else{?>
                                                    <i class="fas fa-check"></i>
                                                    <?php }
                                                  ?></td>
                                                <td>{{$user_siswa->nama_panggilan}}</td>
                                                <td>{{$user_siswa->sekolah_asal}}</td>
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
                                                <td>
                                                    <center> <a href="{{asset('/storage/foto')}}/{{$user_siswa->foto}}"
                                                            target="_blank"><img
                                                                src="{{asset('/storage/foto')}}/{{$user_siswa->foto}}"
                                                                style="width: 25%"> </a>
                                                </td>
                                                <td>
                                                    <a href="{{asset('/storage/kk')}}/{{$user_siswa->kk}}"
                                                        target="_blank">KK</a>
                                                </td>
                                                <td>
                                                    <a href="{{asset('/storage/akta_kelahiran')}}/{{$user_siswa->akta_kelahiran}}"
                                                        target="_blank">Akta Kelahiran</a>
                                                </td>

                                                <td>
                                                    <a href="{{asset('/storage/surat_keterangan_lulus')}}/{{$user_siswa->surat_keterangan_lulus}}"
                                                        target="_blank">SKL Sementara</a>
                                                </td>

                                                <td>{{$user_siswa->kelurahan}}</td>
                                                <td>{{$user_siswa->kecamatan}}</td>
                                                <td>{{$user_siswa->kabupaten}}</td>
                                                <td>{{$user_siswa->provinsi}}</td>
                                                <td>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-primary" data-toggle="modal"
                                                                data-target="#edit_kelas{{$user_siswa->id}}">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-primary" data-toggle="modal"
                                                                data-target="#edit_status{{$user_siswa->id}}">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-responsive">
                                                        <div class="table table-striped table-hover ">
                                                            <a href="" class="btn btn-danger" data-toggle="modal"
                                                                data-target="#hapus_siswa{{$user_siswa->id}}">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- Modal Hapus Data Siswa -->
                                            <div class="modal fade" id="hapus_siswa{{$user_siswa->id}}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Hapus Data
                                                                Siswa
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="/admin/data_siswa_delete" method="post"
                                                                enctype="multipart/form-data">
                                                                <div class="row">
                                                                    @csrf
                                                                    <div class="col-md-12">
                                                                        <input type="hidden" name="id"
                                                                            value="{{$user_siswa->id}}" />
                                                                        <input type="hidden" name="ijazah"
                                                                            value="{{$user_siswa->ijazah}}" />
                                                                        <input type="hidden" name="skhun"
                                                                            value="{{$user_siswa->skhun}}" />
                                                                        <p>Apakah kamu yakin ingin menghapus data
                                                                            ini?</i></b></p>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger ripple"
                                                                        data-dismiss="modal">Tidak</button>
                                                                    <button type="submit"
                                                                        class="btn btn-success ripple save-category">Ya</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="edit_kelas{{$user_siswa->id}}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Atur Kelas
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="atur_kelas" method="POST">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Pilih Kelas</label>
                                                                    <select class="form-control" name="kelas">
                                                                        <option value="X IPA 2">X IPA 2</option>
                                                                    </select>
                                                                </div>
                                                                <input type="text" value="{{$user_siswa->id}}" name="id"
                                                                    hidden>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="edit_status{{$user_siswa->id}}" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Atur Status
                                                                Data
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="atur_status_data" method="POST">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Pilih Status
                                                                        Data</label>
                                                                    <select class="form-control"
                                                                        name="id_status_verifikasi">
                                                                        <option value="1">Belum Diverifikasi</option>
                                                                        <option value="2">Telah Diverifikasi</option>
                                                                    </select>
                                                                </div>
                                                                <input type="text" value="{{$user_siswa->id}}" name="id"
                                                                    hidden>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Submit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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