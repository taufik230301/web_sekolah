-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 01:04 PM
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
(3, 'Pembagian Kelas', 'Wajib bagi siswa sudah mendapatkan kelas nya masing - masing, harus mendapat kelas yang sudah ditentukan, karena akan dimulai kegiatan belajar mengajar semester 2', 'Taufik', '2022-04-14');

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
  `id_user_detail` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `no_telp`, `id_user_level`, `id_user_detail`) VALUES
('dd94709528bb1c83d08f3088d4043f4742891f4f', 'admin', 'admin', 'admin@gmail.com', '0812718728', 1, 'dd94709528bb1c83d08f3088d4043f4742891f4f'),
('ae1b55d53bf0752f74c76d761432000024176a79', 'f39851d', '9172cf7', 'meliana.nanda2020@gmail.com', '0812718728', 2, 'ae1b55d53bf0752f74c76d761432000024176a79'),
('32035f3a476237bcdd77a7cb76a66961c638f95c', '7e4962c', 'fbada5e', 'taufiiqul.hakim@binus.ac.id', NULL, 2, '32035f3a476237bcdd77a7cb76a66961c638f95c');

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
  `jalur_pendaftaran` varchar(100) DEFAULT NULL,
  `nilai_ipa` int(11) DEFAULT NULL,
  `nilai_ips` int(11) DEFAULT NULL,
  `kelas` varchar(100) DEFAULT NULL,
  `id_baju_batik` int(10) DEFAULT NULL,
  `id_baju_olahraga` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id_user_detail`, `nomor_pendaftaran`, `nidn`, `nama_lengkap`, `nama_panggilan`, `sekolah_asal`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `kewarganegaraan`, `status_kekeluargaan`, `anak_ke`, `saudara_kandung`, `saudara_tiri`, `NIK`, `alamat`, `rt_rw`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`, `id_status_verifikasi`, `id_status_validasi`, `id_status_terdaftar`, `ijazah`, `skhun`, `jalur_pendaftaran`, `nilai_ipa`, `nilai_ips`, `kelas`, `id_baju_batik`, `id_baju_olahraga`) VALUES
('dd94709528bb1c83d08f3088d4043f4742891f4f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('ae1b55d53bf0752f74c76d761432000024176a79', '72187281', '172187281', 'Nanda Meliana', 'Nanda', 'SMP N 08 Tiga Panah', 'Laki-Laki', 'Medan', '2022-04-13', 'Islam', 'Indonesia', 'Kandung', 1, 0, 0, '061827182871812', 'Jl. Sekip', '001/002', 'test', 'test', 'test', 'Sumatera Utara', 30661, 2, 2, 2, '7IggftgbJi2m7nzWpnJJ28kBpg6mQaSxx1ry0hNH.pdf', 'wcjHWPVfkzweUD64yCDTUxaeyVRUgVzGVs8hLQfL.pdf', 'Prestasi', 87, 90, 'X IPA 2', 2, 2),
('32035f3a476237bcdd77a7cb76a66961c638f95c', '128172', '17281728', 'Taufiiqul Hakim', NULL, NULL, NULL, NULL, '2022-04-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_level`
--
ALTER TABLE `user_level`
  MODIFY `id_user_level` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
