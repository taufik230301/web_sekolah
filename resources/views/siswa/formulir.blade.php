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
      <h1 class="m-0 text-center">Formulir Pendaftaran Ulang Siswa Baru</h1>
      <h2 class="m-0 text-center"> SMA Negeri 1 Tiga Panah</h2>
      <h4 class="m-0 text-center">Alamat</h4>
      <div class="container-fluid">
        <form>
          <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap">
          </div>
          <div class="form-group">
            <label for="nama_panggilan">Nama Panggilan</label>
            <input type="text" class="form-control" id="nama_panggilan">
          </div>
          <div class="form-group">
            <label for="nama_panggilan">Jenis Kelamin : </label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="id_jenis_kelamin" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="id_jenis_kelamin" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
          </div>
          </div>
          <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir">
          </div>
          <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir">
          </div>
          <div class="form-group">
            <label for="nama_panggilan">Agama : </label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="id_agama" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Kristen</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="id_agama" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Islam</label>
          </div>
          </div>
          <div class="form-group">
            <label for="anak_ke">Anak Ke -</label>
            <input type="text" class="form-control" id="anak_ke">
          </div>
          <div class="form-group">
            <label for="saudara_kandung">Saudara Kandung</label>
            <input type="text" class="form-control" id="saudara_kandung">
          </div>
          <div class="form-group">
            <label for="saudara_tiri">Saudara Tiri</label>
            <input type="text" class="form-control" id="saudara_tiri">
          </div>
          <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" id="nik">
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat">
          </div>
          <div class="form-group">
            <label for="rt_rw">RT/RW</label>
            <input type="text" class="form-control" id="rt_rw">
          </div>
          <div class="form-group">
            <label for="kelurahan">Kelurahan</label>
            <input type="text" class="form-control" id="kelurahan">
          </div>
          <div class="form-group">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan">
          </div>
          <div class="form-group">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan">
          </div>
          <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <input type="text" class="form-control" id="provinsi">
          </div>
          <div class="form-group">
            <label for="kode_pos">Kode Pos</label>
            <input type="text" class="form-control" id="kode_pos">
          </div>
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

