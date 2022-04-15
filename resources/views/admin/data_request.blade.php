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
                            <h1 class="m-0">Request Akun</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Data Pendaftar</li>
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
                                                <th>Status Validasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($count = 1)
                                            @foreach($user_requests as $user_request)
                                            <tr>
                                                <td>{{ $user_request->nidn}}</td>
                                                <td>{{ $user_request->nomor_pendaftaran}}</td>
                                                <td>{{ $user_request->nama_lengkap}}</td>
                                                <td>{{ $user_request->tanggal_lahir}}</td>
                                                <td>
                                                <a href="send-mail/{{$user_request->email}}/{{$user_request->nama_lengkap}}/{{$user_request->id}}">{{ $user_request->email}}</a>
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