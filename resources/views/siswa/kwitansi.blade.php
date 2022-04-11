<!DOCTYPE html>
<html>

<head>
    <title>Hi</title>
</head>

<body>
    @foreach($data as $data_kwitansi)
    <h1>Tagihan Siswa Baru SMA Negeri 1 Tiga Panah</h1>
    <p></p>
    <p>Baju Olahraga Ukuran {{ $data_kwitansi->ukuran_baju_olahraga }} = {{ $data_kwitansi->harga_baju_olahraga }}</p>
    <p>Baju Batik Ukuran {{ $data_kwitansi->ukuran_baju_batik }} = {{ $data_kwitansi->harga_baju_batik }}</p>
    <p>Uang Osis 3 Bulan X Rp. 15.000 = 45000</p>
    <p>Atribut, Topi, Dasi= 50000</p>
    <p>---------------------------------------------------------</p>
    <p>Total : {{ $data_kwitansi->harga_baju_olahraga + $data_kwitansi->harga_baju_batik +45000+50000}}</p>
    <p>Nama : {{ $data_kwitansi->nama_lengkap }}</p>
    @endforeach
</body>

</html>