-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2021 at 03:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_siperpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `no_anggota` char(8) NOT NULL,
  `nm_anggota` varchar(40) NOT NULL,
  `nisn` char(10) DEFAULT NULL,
  `nis` char(10) DEFAULT NULL,
  `jk_anggota` enum('L','P') NOT NULL,
  `tgllahir_anggota` date NOT NULL,
  `nohp_anggota` varchar(13) DEFAULT NULL,
  `alamat_anggota` text NOT NULL,
  `foto_anggota` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `id_ddc` int(11) NOT NULL,
  `id_jenisbuku` int(11) NOT NULL,
  `id_sumberbuku` int(11) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `penerbit` varchar(40) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `isbn` varchar(17) NOT NULL,
  `thn_terbit` year(4) NOT NULL,
  `tinggi_buku` int(3) NOT NULL,
  `tgl_penerimaan` date NOT NULL,
  `jml_halaman` int(4) NOT NULL,
  `jml_eksemplar` int(4) NOT NULL,
  `stok_buku` int(4) NOT NULL,
  `rak` int(1) NOT NULL,
  `gambar` char(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `id_detailpinjam` int(11) NOT NULL,
  `id_pinjam` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `keterlambatan` int(3) NOT NULL,
  `status_buku` enum('Belum Kembali','Sudah Kembali') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_buku`
--

CREATE TABLE `jenis_buku` (
  `id_jenisbuku` int(11) NOT NULL,
  `kode_jenisbuku` char(1) NOT NULL,
  `nm_jenisbuku` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_buku`
--

INSERT INTO `jenis_buku` (`id_jenisbuku`, `kode_jenisbuku`, `nm_jenisbuku`) VALUES
(1, 'F', 'Fiksi'),
(12, 'N', 'Non Fiksi');

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi_ddc`
--

CREATE TABLE `klasifikasi_ddc` (
  `kode_ddc` char(3) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klasifikasi_ddc`
--

INSERT INTO `klasifikasi_ddc` (`kode_ddc`, `kategori`) VALUES
('000', 'Karya Umum'),
('100', 'Ilfils/Psikologi'),
('200', 'Agama'),
('300', 'Ilmu Sosial'),
('400', 'Bahasa'),
('500', 'Sains'),
('600', 'Teknologi'),
('700', 'Kesenian'),
('800', 'Kesastraan'),
('900', 'Geografium/S.Umum');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nm_pegawai` varchar(50) NOT NULL,
  `foto_pegawai` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(11) NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `no_anggota` char(7) NOT NULL,
  `kd_pegawai` char(12) NOT NULL,
  `tgl_batas_akhir` date NOT NULL,
  `total_denda` int(6) NOT NULL,
  `status` enum('Belum Lunas','Lunas') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `no_pengunjung` int(8) NOT NULL,
  `tgl_kunjungan` datetime NOT NULL,
  `nis` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `asal_instansi` varchar(40) NOT NULL,
  `status` enum('Siswa','Guru/Staff','Tamu') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sumber_buku`
--

CREATE TABLE `sumber_buku` (
  `id_sumberbuku` int(11) NOT NULL,
  `kode_sumberbuku` char(1) NOT NULL,
  `nm_sumberbuku` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sumber_buku`
--

INSERT INTO `sumber_buku` (`id_sumberbuku`, `kode_sumberbuku`, `nm_sumberbuku`) VALUES
(1, 'S', 'Sumbangan'),
(2, 'B', 'Beli'),
(3, 'W', 'Wakaf'),
(4, 'T', 'Tukar Menukar'),
(5, 'H', 'Hadiah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  ADD PRIMARY KEY (`id_detailpinjam`);

--
-- Indexes for table `jenis_buku`
--
ALTER TABLE `jenis_buku`
  ADD PRIMARY KEY (`id_jenisbuku`);

--
-- Indexes for table `klasifikasi_ddc`
--
ALTER TABLE `klasifikasi_ddc`
  ADD PRIMARY KEY (`kode_ddc`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`no_pengunjung`);

--
-- Indexes for table `sumber_buku`
--
ALTER TABLE `sumber_buku`
  ADD PRIMARY KEY (`id_sumberbuku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  MODIFY `id_detailpinjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_buku`
--
ALTER TABLE `jenis_buku`
  MODIFY `id_jenisbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `no_pengunjung` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sumber_buku`
--
ALTER TABLE `sumber_buku`
  MODIFY `id_sumberbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
