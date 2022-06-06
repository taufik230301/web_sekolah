-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 07:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `baju_batik`
--

CREATE TABLE `baju_batik` (
  `id_baju_batik` int(11) NOT NULL,
  `ukuran_baju_batik` varchar(20) NOT NULL,
  `harga_baju_batik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baju_batik`
--

INSERT INTO `baju_batik` (`id_baju_batik`, `ukuran_baju_batik`, `harga_baju_batik`) VALUES
(1, 'S', 75000),
(2, 'M', 80000),
(3, 'L', 85000),
(4, 'XL', 90000);

-- --------------------------------------------------------

--
-- Table structure for table `baju_olahraga`
--

CREATE TABLE `baju_olahraga` (
  `id_baju_olahraga` int(11) NOT NULL,
  `ukuran_baju_olahraga` varchar(100) NOT NULL,
  `harga_baju_olahraga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baju_olahraga`
--

INSERT INTO `baju_olahraga` (`id_baju_olahraga`, `ukuran_baju_olahraga`, `harga_baju_olahraga`) VALUES
(1, 'S', 135000),
(2, 'M', 145000),
(3, 'L', 155000),
(4, 'XL', 165000);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(100) NOT NULL,
  `isi_pengumuman` text NOT NULL,
  `nama_penulis` varchar(50) NOT NULL,
  `tanggal_pengumuman` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `nama_penulis`, `tanggal_pengumuman`) VALUES
(3, 'Pembagian Kelas', 'Wajib bagi siswa sudah mendapatkan kelas nya masing - masing, harus mendapat kelas yang sudah ditentukan, karena akan dimulai kegiatan belajar mengajar semester', 'Taufik', '2022-04-14'),
(7, 'Jadwal Kelas', 'Nanti akan dibagikan kelas masing masing', 'Taufik', '2022-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(256) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `id_user_level` int(120) NOT NULL,
  `id_user_detail` varchar(256) NOT NULL,
  `is_active` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `no_telp`, `id_user_level`, `id_user_detail`, `is_active`) VALUES
('dd94709528bb1c83d08f3088d4043f4742891f4f', 'admin_utama', 'admin', 'admin@gmail.com', '0812718728', 3, 'dd94709528bb1c83d08f3088d4043f4742891f4f', 1),
('fba92459c5bbf723b2a5b79c5cf58a78d43d4d67', 'admin_panitia_1', 'admin123', 'admin@gmail.com', '0812718728', 1, 'fba92459c5bbf723b2a5b79c5cf58a78d43d4d67', 1),
('c3ffa67b2402269a3cabeb2344b79c31f785c017', 'eea8d36', '61594ed', 'taufiiqul.hakim@binus.ac.id', '0812718728', 2, 'c3ffa67b2402269a3cabeb2344b79c31f785c017', NULL),
('5dff35d6c735ae2de9840c04c704b061bc5d527a', '131311313', '207d264', 'taufiiqul.hakim@binus.ac.id', '0812718728', 2, '5dff35d6c735ae2de9840c04c704b061bc5d527a', NULL),
('d9b970b9f05a7d7e264f8087cd12b1d07ee562cd', '1290129102', '2843e56', 'taufiiqulhakim23@gmail.com', NULL, 2, 'd9b970b9f05a7d7e264f8087cd12b1d07ee562cd', NULL),
('ca64cdd88308dd9ae11db3b7bc7cc684aae03eb6', 'panatia_01', 'panatia_01', 'panatia_01@gmail.com', '0182812712', 1, 'ca64cdd88308dd9ae11db3b7bc7cc684aae03eb6', 0),
('31b758ce32cf8f52fa06dfe81dbbabf77b2daa1c', 'panitia_02', 'panitia_02', 'panitia_02@gmail.com', '08127818127', 1, '31b758ce32cf8f52fa06dfe81dbbabf77b2daa1c', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id_user_detail` varchar(256) NOT NULL,
  `nomor_pendaftaran` varchar(25) DEFAULT NULL,
  `nidn` varchar(25) DEFAULT NULL,
  `nama_lengkap` varchar(30) DEFAULT NULL,
  `nama_panggilan` varchar(30) DEFAULT NULL,
  `sekolah_asal` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tanggal_lahir` varchar(30) DEFAULT NULL,
  `agama` varchar(100) DEFAULT NULL,
  `kewarganegaraan` varchar(100) DEFAULT NULL,
  `status_kekeluargaan` varchar(100) DEFAULT NULL,
  `anak_ke` int(10) DEFAULT NULL,
  `saudara_kandung` int(10) DEFAULT NULL,
  `saudara_tiri` int(10) DEFAULT NULL,
  `NIK` varchar(30) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `rt_rw` varchar(30) DEFAULT NULL,
  `kelurahan` varchar(100) DEFAULT NULL,
  `kecamatan` varchar(100) DEFAULT NULL,
  `kabupaten` varchar(100) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `kode_pos` int(10) DEFAULT NULL,
  `id_status_verifikasi` int(10) DEFAULT NULL,
  `id_status_validasi` int(10) DEFAULT NULL,
  `id_status_terdaftar` int(11) DEFAULT NULL,
  `ijazah` varchar(250) DEFAULT NULL,
  `skhun` varchar(250) DEFAULT NULL,
  `kk` varchar(250) DEFAULT NULL,
  `akta_kelahiran` varchar(250) DEFAULT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `surat_keterangan_lulus` varchar(250) DEFAULT NULL,
  `jalur_pendaftaran` varchar(100) DEFAULT NULL,
  `nilai_ipa` int(11) DEFAULT NULL,
  `nilai_ips` int(11) DEFAULT NULL,
  `nilai_matematika` int(11) DEFAULT NULL,
  `nilai_bahasa_inggris` int(11) DEFAULT NULL,
  `nilai_bahasa_indonesia` int(11) DEFAULT NULL,
  `kelas` varchar(100) DEFAULT NULL,
  `id_baju_batik` int(10) DEFAULT NULL,
  `id_baju_olahraga` int(10) DEFAULT NULL,
  `nama_ayah` varchar(30) DEFAULT NULL,
  `tempat_lahir_ayah` varchar(30) DEFAULT NULL,
  `tanggal_lahir_ayah` date DEFAULT NULL,
  `agama_ayah` varchar(20) DEFAULT NULL,
  `pendidikan_ayah` varchar(40) DEFAULT NULL,
  `pekerjaan_ayah` varchar(30) DEFAULT NULL,
  `warga_negara_ayah` varchar(30) DEFAULT NULL,
  `nomor_telepon_ayah` varchar(30) DEFAULT NULL,
  `pendapatan_ayah` int(30) DEFAULT NULL,
  `nama_ibu` varchar(30) DEFAULT NULL,
  `tempat_lahir_ibu` varchar(30) DEFAULT NULL,
  `tanggal_lahir_ibu` date DEFAULT NULL,
  `agama_ibu` varchar(20) DEFAULT NULL,
  `pendidikan_ibu` varchar(40) DEFAULT NULL,
  `pekerjaan_ibu` varchar(30) DEFAULT NULL,
  `warga_negara_ibu` varchar(30) DEFAULT NULL,
  `nomor_telepon_ibu` varchar(30) DEFAULT NULL,
  `pendapatan_ibu` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id_user_detail`, `nomor_pendaftaran`, `nidn`, `nama_lengkap`, `nama_panggilan`, `sekolah_asal`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `kewarganegaraan`, `status_kekeluargaan`, `anak_ke`, `saudara_kandung`, `saudara_tiri`, `NIK`, `alamat`, `rt_rw`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`, `id_status_verifikasi`, `id_status_validasi`, `id_status_terdaftar`, `ijazah`, `skhun`, `kk`, `akta_kelahiran`, `foto`, `surat_keterangan_lulus`, `jalur_pendaftaran`, `nilai_ipa`, `nilai_ips`, `nilai_matematika`, `nilai_bahasa_inggris`, `nilai_bahasa_indonesia`, `kelas`, `id_baju_batik`, `id_baju_olahraga`, `nama_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `agama_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `warga_negara_ayah`, `nomor_telepon_ayah`, `pendapatan_ayah`, `nama_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `agama_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `warga_negara_ibu`, `nomor_telepon_ibu`, `pendapatan_ibu`) VALUES
('dd94709528bb1c83d08f3088d4043f4742891f4f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('fba92459c5bbf723b2a5b79c5cf58a78d43d4d67', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('c3ffa67b2402269a3cabeb2344b79c31f785c017', '1728172871', '172817281', 'Taufiiqul Hakim', 'taufik', 'SMPN 03 Tanjung Raja', 'Laki-Laki', 'Palembang', '2022-04-14', 'Islam', 'Indonesia', 'Kandung', 1, 0, 0, '061827182871812', 'Jl. Sekip', '001/002', 'test', 'test', 'test', 'Sumatera Selatan', 30661, 2, 2, 2, '2p9hWHYmLC9N4LgSIpa21zt6ZWRqPrWouDD2Cu9K.pdf', '00eWIxHU7klNOE4C2LGGtam21H3MupTugojEagSn.pdf', 'IbBlQFCgJuPT56u9d7s9c2NYNxnu9NTv0sCYYLAi.pdf', 'cDWAgCDXToxGWjRfhtCjlBAF3ZwouoSVHD5q96jv.pdf', 'ufwqgHBtRvDEVnIAmoFXztf1Yn361a7G6dbzD7Av.jpg', 'gnOQZgqiS0RN5OVPAQoWtQAqNAPjjlMJVGx7pgtg.pdf', 'Prestasi', 87, 90, 91, 76, 90, 'X IPS 1', 1, 1, 'Kreskres', 'Palembang', '2022-04-13', 'Islam', 'S1', 'Swasta', 'Indonesia', '0818271872', 1000000, 'Ica', 'Palembang', '2022-04-20', 'Islam', 'D3', 'Swasta', 'Indonesia', '0812781728', 18000000),
('5dff35d6c735ae2de9840c04c704b061bc5d527a', '12121212', '131311313', 'Kresna Vespri', 'kresna', 'SMPN 03 Tanjung Raja', 'Laki-Laki', 'Palembang', '2022-04-15', 'Islam', 'Indonesia', 'Kandung', 1, 0, 0, '061827182871812', 'Jl. Sekip', '001/002', 'test', 'test', 'test', 'Sumatera Selatan', 30661, 2, 2, 2, 'VmLmh2DH0EtLM0ygPaEgTAn6SVdOXhhAsipivNaR.pdf', 'AitAXtMJH7r08RcLUA52bqZhW6vTyEfT5EXOVYOA.pdf', 'bJO7lbR2EeYoD7Xu5u4kftw2JyER89VV4b4Hel3n.pdf', 'l1fVF8VTAu5H24MptNW4mpeDUmvU5g8lghirRkyA.pdf', 'k9OAVaSp3mLgmQX2Fq78sIeMnaCnX5VsoUQs5I7v.jpg', 'iEksOyKP87EMAEk2GLyheb4gOWQmPMxxdGFvcFjB.pdf', 'Zonasi', 86, 90, 91, 90, 90, 'X IPS 1', 1, NULL, 'Kreskres', 'Palembang', '2022-04-08', 'Islam', 'S1', 'Swasta', 'Indonesia', '0812781728', 1000000, 'Ica', 'Palembang', '2022-04-14', 'Islam', 'D3', 'Swasta', 'Indonesia', '081928187281', 18000000),
('d9b970b9f05a7d7e264f8087cd12b1d07ee562cd', '1291029012', '1290129102', 'Kresna Vespri', NULL, NULL, NULL, NULL, '2022-06-07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ca64cdd88308dd9ae11db3b7bc7cc684aae03eb6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('31b758ce32cf8f52fa06dfe81dbbabf77b2daa1c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE `user_level` (
  `id_user_level` int(11) NOT NULL,
  `user_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baju_batik`
--
ALTER TABLE `baju_batik`
  ADD PRIMARY KEY (`id_baju_batik`);

--
-- Indexes for table `baju_olahraga`
--
ALTER TABLE `baju_olahraga`
  ADD PRIMARY KEY (`id_baju_olahraga`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `user_level`
--
ALTER TABLE `user_level`
  ADD PRIMARY KEY (`id_user_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baju_batik`
--
ALTER TABLE `baju_batik`
  MODIFY `id_baju_batik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `baju_olahraga`
--
ALTER TABLE `baju_olahraga`
  MODIFY `id_baju_olahraga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id_user_level` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
