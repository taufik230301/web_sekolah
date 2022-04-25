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
                            <h1 class="m-0">Siswa Terdaftar</h1>
                        </div><!-- /.col -->

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Pendaftar</li>
                            </ol>
                        </div><!-- /.col -->


                    </div><!-- /.row -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Tambah Siswa Terdaftar
                    </button>
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <!-- Notifikasi menggunakan flash session data -->
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
                                    <h3 class="card-title">Data Request Akun</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>NIDN</th>
                                                <th>Nomor Pendaftaran</th>
                                                <th>Nama</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($count = 1)
                                            @foreach($user_requests as $user_request)
                                            <tr>
                                                <td>{{ $user_request->nidn}}</td>
                                                <td>{{ $user_request->nomor_pendaftaran}}</td>
                                                <td>{{ $user_request->nama_lengkap}}</td>
                                                <td>

                                                    <?php
                                                  if($user_request->tanggal_lahir == NULL ){?>
                                                    <i class="fas fa-times"></i>
                                                    <?php } else{?>
                                                    {{$user_request->tanggal_lahir}}
                                                    <?php }
                                                  ?>

                                                </td>
                                                <td>
                                                <?php
                                                  if($user_request->email == NULL ){?>
                                                    <i class="fas fa-times"></i>
                                                    <?php } else{?>
                                                        <a
                                                        href="send-mail/{{$user_request->email}}/{{$user_request->nama_lengkap}}/{{$user_request->id}}/{{$user_request->nidn}}">{{ $user_request->email}}</a>
                                                    <?php }
                                                  ?>
                                                    
                                                </td>
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
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa Terdaftar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/tambah_siswa" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama_lengkap">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                            aria-describedby="nama_lengkap" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nomor_pendaftaran">Nomor Pendaftaran</label>
                                        <input type="text" class="form-control" id="nomor_pendaftaran"
                                            name="nomor_pendaftaran" aria-describedby="nomor_pendaftaran" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nidn">NIDN</label>
                                        <input type="text" class="form-control" id="nidn" name="nidn"
                                            aria-describedby="nidn" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
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