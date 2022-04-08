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

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambah_pengumuman">
                        Tambah Data Pengumuman
                    </button>
                    <div class="row mt-3">
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
                                                <th>No</th>
                                                <th>Judul Pengumuman</th>
                                                <th>Isi Pengumuman</th>
                                                <th>Nama Penulis</th>
                                                <th>Tanggal Pengumuman</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($count = 1)
                                            @foreach($pengumumans as $pengumuman)
                                            <tr>
                                                <td>{{$count++}}</td>
                                                <td>{{$pengumuman->judul_pengumuman}}</td>
                                                <td>{{$pengumuman->isi_pengumuman}}</td>
                                                <td> {{$pengumuman->nama_penulis}}</td>
                                                <td>{{$pengumuman->tanggal_pengumuman}}</td>
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
                    <!-- Modal -->
                    <div class="modal fade" id="tambah_pengumuman" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pengumuman</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="/admin/data_pengumuman_tambah" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="judul_pengumuman">Judul Pengumuman</label>
                                            <input type="text" class="form-control" id="judul_pengumuman"
                                                name="judul_pengumuman" aria-describedby="judul_pengumuman">
                                        </div>
                                        <div class="form-group">
                                            <label for="isi_pengumuman">Isi Pengumuman</label>
                                            <input type="text" class="form-control" id="isi_pengumuman"
                                                name="isi_pengumuman" aria-describedby="isi_pengumuman">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama_penulis">Nama Penulis</label>
                                            <input type="text" class="form-control" id="nama_penulis"
                                                name="nama_penulis" aria-describedby="nama_penulis">
                                        </div>
                                        <div class="form-group">
                                            <label for="tanggal_pengumuman">Tanggal Pengumuman</label>
                                            <input type="date" class="form-control" id="tanggal_pengumuman"
                                                name="tanggal_pengumuman" aria-describedby="tanggal_pengumuman">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
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