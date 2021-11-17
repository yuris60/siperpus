-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2021 at 06:21 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `judul_buku` varchar(100) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `isbn` varchar(17) NOT NULL,
  `thn_terbit` year(4) NOT NULL,
  `tinggi_buku` int(3) NOT NULL,
  `tgl_penerimaan` date NOT NULL,
  `jml_halaman` int(4) NOT NULL,
  `jml_eksemplar` int(4) NOT NULL,
  `stok_buku` int(4) NOT NULL,
  `rak_buku` int(1) NOT NULL,
  `gambar_buku` char(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_ddc`, `id_jenisbuku`, `id_sumberbuku`, `judul_buku`, `penerbit`, `pengarang`, `isbn`, `thn_terbit`, `tinggi_buku`, `tgl_penerimaan`, `jml_halaman`, `jml_eksemplar`, `stok_buku`, `rak_buku`, `gambar_buku`) VALUES
(1, 17, 2, 2, 'Advokasi Pencegahan Penyalahgunaan Narkoba', 'BNN Kab. Purbalingga', 'BNN Kab. Purbalingga', '', 2020, 1, '2021-11-16', 1, 50, 50, 1, ''),
(2, 0, 0, 0, 'Al-Qur\'an', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(3, 17, 0, 0, 'Anamnesia Dan Pemeriksaan Fisik', 'Erlangga Jakarta', 'Janathan 61', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(4, 17, 0, 0, 'Anatomi Dan Fisiologi Untuk Mahasisawa Keperawatan', 'Buku Kedokteran ', 'Drs. H. Syaiful', '', 2032, 0, '0000-00-00', 0, 0, 0, 0, ''),
(5, 17, 0, 0, 'Anatomi Dan Fisologi Manusia ', 'Numed Yogyakarta', 'Zuyina L', '', 2031, 0, '0000-00-00', 0, 0, 0, 0, ''),
(6, 17, 0, 0, 'Anatomi Dan Fisologi Untuk Paramedis', 'Gramedia Jakarta', 'Evelyn C.P', '', 2039, 0, '0000-00-00', 0, 0, 0, 0, ''),
(7, 17, 0, 0, 'Anatomi Fisiologi', 'Pilar Utama Mandiri Jaktim ', 'Rudi Fahru, Adi Setiawan', '', 2018, 0, '0000-00-00', 0, 0, 0, 0, ''),
(8, 17, 0, 0, 'Asuhan Keperawatan Praktis', 'Mediaction Yogyakarta', 'Amin Huda', '', 2036, 0, '0000-00-00', 0, 0, 0, 0, ''),
(9, 13, 0, 0, 'Atas Singgasana', 'Gama Media Jakarta ', 'Abidah El. K', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(10, 13, 0, 0, 'Atheis', 'Balai Pustaka Jakarta', 'Achdiat K', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(11, 12, 0, 0, 'Bahasa Indoenesia XI (1)', 'Erlangga Jakarta', 'Husin ', '', 2012, 0, '0000-00-00', 0, 0, 0, 0, ''),
(12, 12, 0, 0, 'Bahasa Indoenesia XII (2)', 'Erlangga Jakarta', 'Husin ', '', 2039, 0, '0000-00-00', 0, 0, 0, 0, ''),
(13, 12, 0, 0, 'Bahasa Indonesia X', 'Kemendikbud Jakarta ', 'Kemendikbud', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(14, 12, 0, 0, 'Bahasa Indonesia X (1)', 'Erlangga Jakarta', 'Ahinad Iskak', '', 2038, 0, '0000-00-00', 0, 0, 0, 0, ''),
(15, 12, 0, 0, 'Bahasa Indonesia XI', 'Kemendikbud Jakarta ', 'Kemendikbud', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(16, 0, 0, 0, 'Bahasa Inggris X', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(17, 0, 0, 0, 'Bahasa Inggris XI', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(18, 0, 0, 0, 'Biologi 2', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(19, 0, 0, 0, 'Biologi 3', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(20, 0, 0, 0, 'Biologi X', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(21, 13, 0, 0, 'Bukan Milik Kami ', 'Balai Pustaka Jakarta', 'Syamsul Arifin', '', 1998, 0, '0000-00-00', 0, 0, 0, 0, ''),
(22, 13, 0, 0, 'Dan Perangpun Sia', 'Pustaka Jaya Jakarta', 'Ismail Maha', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(23, 13, 0, 0, 'Dari Avemaria Kejalan Lain Roma', 'Balai Pustaka Jakarta', 'Idrus', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(24, 13, 0, 0, 'Dari Satu Masa, Dari Satu Tempat', 'CV. Mus Jakarta', 'Asrul Sani', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(25, 13, 0, 0, 'Dari Sunyi KE Bunyi ', 'Grafiti Jakarta', 'Hartojo Andang ', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(26, 18, 0, 0, 'Dasar-Dasar Kefarmasian', 'Pilar Utama Mandiri Jaktim ', 'Hendrik M, Diniah A', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(27, 18, 0, 0, 'Dasar-Dasar Kefarmasian Kelas X', 'Buku Kedokteran ', 'Ai Kurasein', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(28, 18, 0, 0, 'Dasar-Dasar Kefarmasian Kelas XI', 'Buku Kedokteran ', 'Aster Nila', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(29, 13, 0, 0, 'Dewi Sartika ', 'Kemendikbud Jakarta ', 'Rochiat W', '', 1985, 0, '0000-00-00', 0, 0, 0, 0, ''),
(30, 17, 0, 0, 'Diagnosis Keperawatan', 'Buku Kedokteran Indonesia', 'Judith M', '', 2032, 0, '0000-00-00', 0, 0, 0, 0, ''),
(31, 13, 0, 0, 'Diantara Kaliprogo Dan Kalipongo', 'Mitra Gama Media Jakarta ', 'Khisna Miha', '', 1995, 0, '0000-00-00', 0, 0, 0, 0, ''),
(32, 13, 0, 0, 'Ditengah Keluarga', 'Pustaka Jaya Jakarta', 'Ajib Rosidi', '', 2033, 0, '0000-00-00', 0, 0, 0, 0, ''),
(33, 13, 0, 0, 'Dunia Semata Wayang ', 'Hihkayat Jakarta ', 'Imam Budisan', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(34, 13, 0, 0, 'Efrosina', 'Cakra Budaya Indo Jakarta ', 'Cecep Syamsul', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(35, 13, 0, 0, 'Empat Kumpulan Sajak', 'Pustaka Jaya Jakarta', 'Rendra', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(36, 0, 0, 0, 'Ensiklopedi Islam ', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(37, 18, 0, 0, 'Farmakognosi', 'Pilar Utama Mandiri Jaktim ', 'Supriani, Nursalimi', '', 2018, 0, '0000-00-00', 0, 0, 0, 0, ''),
(38, 18, 0, 0, 'Farmakognosi Dasar Kelas X', 'Buku Kedokteran ', 'Muh. Yani Zam', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(39, 18, 0, 0, 'Farmakologi 1', 'Pilar Utama Mandiri Jaktim ', 'Nur Salimi, Rudi Fahrud ', '', 2018, 0, '0000-00-00', 0, 0, 0, 0, ''),
(40, 18, 0, 0, 'Farmakologi Kelas XI', 'Buku Kedokteran ', 'Muh. Yani Zam', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(41, 18, 0, 0, 'Farmakologi Kelas XII', 'Buku Kedokteran ', 'Aster Nila', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(42, 18, 0, 0, 'Farmakologi Kelas XII', 'Buku Kedokteran ', 'Aster Nila', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(43, 18, 0, 0, 'Farmakologi Program Keahlian XI', 'Buku Kedokteran ', 'Aster Nila', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(44, 18, 0, 0, 'Farmakope Indonesia', 'Depkes RI Indonesia ', 'Depkes', '', 1978, 0, '0000-00-00', 0, 0, 0, 0, ''),
(45, 15, 0, 0, 'Fisika X', 'Erlangga Ciracas Jakarta', 'Sudirman', '', 2018, 0, '0000-00-00', 0, 0, 0, 0, ''),
(46, 0, 0, 0, 'Fokus Asessmen Kompetensi Minuman (AKM)', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(47, 0, 0, 0, 'Fokus UN 2018', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(48, 0, 0, 0, 'Formukarium Nasional ', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(49, 0, 0, 0, 'Forward An English 1', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(50, 0, 0, 0, 'Forward An English 2', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(51, 0, 0, 0, 'Forward An English 3', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(52, 11, 0, 0, 'Forward An English XII (3)', 'Erlangga Jakarta', 'Eka Mulya,Shyla K L', '', 2018, 0, '0000-00-00', 0, 0, 0, 0, ''),
(53, 0, 0, 0, 'Get Along With English 2', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(54, 0, 0, 0, 'Get Along With English 3', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(55, 13, 0, 0, 'Hadiah Liburan', 'Adi Cita Karya R. Jakarta', 'Riza Astuti', '', 1996, 0, '0000-00-00', 0, 0, 0, 0, ''),
(56, 13, 0, 0, 'Haji Agus Sakim', 'Kemendikbud Jakarta ', 'Drs. Mukayat', '', 1985, 0, '0000-00-00', 0, 0, 0, 0, ''),
(57, 13, 0, 0, 'Hujan Kepagian', 'Balai Pustaka Jakarta', 'Nugroho Noto ', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(58, 17, 0, 0, 'Ilmu Komunikasi Dalam Kontek Keperawatan ', 'Tran Infameida Jakarta ', 'Ns. Nunung N', '', 2010, 0, '0000-00-00', 0, 0, 0, 0, ''),
(59, 18, 0, 0, 'Ilmu Meracik Obat', 'Gajah Mada UP Yogyakarta', 'Moh. Anief', '', 1997, 0, '0000-00-00', 0, 0, 0, 0, ''),
(60, 17, 0, 0, 'Ilmu Penyakit Dan Penunjang Diagnostik 2', 'Pilar Utama Mandiri Jaktim ', 'Dr. Anggraini Ns Ainun Bad', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(61, 13, 0, 0, 'Indonesiaku', 'Kemendikbud Jakarta ', 'Hamid Jaber', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(62, 13, 0, 0, 'Jelajah Bandung Purba', 'Inti Media Jakarta ', 'Dewi Syafrian', '', 2034, 0, '0000-00-00', 0, 0, 0, 0, ''),
(63, 13, 0, 0, 'Jumpa Aceh', 'Nusa Agung Jakarta ', 'H. M Zaerudin', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(64, 18, 0, 0, 'K3LH Program Keahlian Kefarmasian Kelas X', 'Buku Kedokteran ', 'Hartati ', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(65, 19, 0, 0, 'Katalog Desain-Desain Tehnik Web Multimedia Buku Komputer B', 'Andi Penerbit Yogyakarta', 'Janathan 62', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(66, 0, 0, 0, 'Kalimati ', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(67, 0, 0, 0, 'Kamus Inggris Indonesia', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(68, 1, 0, 0, 'Kamus Kedokteran Dorland', 'Depkes RI Indonesia ', 'Buku Kedokteran', '', 1998, 0, '0000-00-00', 0, 0, 0, 0, ''),
(69, 17, 0, 0, 'Kamus Keperawatan ', 'Dinamika Jakarta ', 'Rahayuni', '', 1978, 0, '0000-00-00', 0, 0, 0, 0, ''),
(70, 17, 0, 0, 'Kamus Keperawatan ', 'Dinamika Jakarta ', 'Rahayuni', '', 1978, 0, '0000-00-00', 0, 0, 0, 0, ''),
(71, 1, 0, 0, 'Kamus Lengkap Bahasa Jawa', 'Widya Karya Semarang', 'Drs. Damanto', '', 2016, 0, '0000-00-00', 0, 0, 0, 0, ''),
(72, 13, 0, 0, 'Kapitan Patimura ', 'Kemdikbud Jakarta ', 'Ig Nanulaita ', '', 1985, 0, '0000-00-00', 0, 0, 0, 0, ''),
(73, 13, 0, 0, 'Kartika Wulandari', 'CV. Swakarya Jakarta', 'Slamet N', '', 2036, 0, '0000-00-00', 0, 0, 0, 0, ''),
(74, 13, 0, 0, 'Kasihku Disirandu', 'Mita Gama Widya', 'Drs. K. Soemar', '', 1996, 0, '0000-00-00', 0, 0, 0, 0, ''),
(75, 0, 0, 0, 'Katalog Aplikasi Office Database Buku Komputer A', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(76, 13, 0, 0, 'Keajabian Di Pasar Senin ', 'CV. Mus Jakarta', 'Misbach Yusa', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(77, 13, 0, 0, 'Kebutuhan Dasar Mannusia', 'Pilar Utama Mandiri Jaktim ', 'Dewi Puspita Ns, Tuti Asria', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(78, 13, 0, 0, 'Keluarga Permana ', 'Nusa Agung Jakarta ', 'Ramadhan ', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(79, 13, 0, 0, 'Kembali Ziarah', 'Gama Media Yogyakarta', 'Isbedy Stiawan', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(80, 13, 0, 0, 'Kepahlawanan Generasi Sahabat Rosulullah', 'UNU Islam Malang ', 'DR. Abdurrahman', '', 2033, 0, '0000-00-00', 0, 0, 0, 0, ''),
(81, 0, 0, 0, 'Kesehatan Kerja', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(82, 17, 0, 0, 'Keselamatan Dan Kesehatan  Kerja ', 'Gasyen Publis Jatinegara', 'Cecep Dani', '', 2014, 0, '0000-00-00', 0, 0, 0, 0, ''),
(83, 17, 0, 0, 'Keselamatan Kesehatan  Dan Lingkungan Hidup (K3LH) ', 'Pilar Utama Mandiri Jaktim ', 'Heru Widiarto, H. Abduh B', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(84, 17, 0, 0, 'Ketrampilan Dasar Tindak Keperawatan 2', 'Pilar Utama Mandiri Jaktim ', 'Dhanik Tri Dewi Puspita', '', 2018, 0, '0000-00-00', 0, 0, 0, 0, ''),
(85, 19, 0, 0, 'Ketrampilan Komputer Dan Pengelolaan Informasi XI (2)', 'Erlangga Jakarta', 'Nurindah D', '', 2013, 0, '0000-00-00', 0, 0, 0, 0, ''),
(86, 19, 0, 0, 'Ketrampilan Komputer Dan Pengelolaan Informasi XII (3)', 'Erlangga Jakarta', 'Nuridah Dwiyani', '', 2013, 0, '0000-00-00', 0, 0, 0, 0, ''),
(87, 15, 0, 0, 'Kimia ', 'erlangga Ciracas Jakarta', 'Aas Saidah, Tiara Damay', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(88, 18, 0, 0, 'Kimia Farmasi 2', 'Pilar Utama Mandiri Jaktim ', 'Adi Yuli war, Heri Reksa', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(89, 18, 0, 0, 'Kimia Farmasi Prog. Farmasi Kelas XI', 'Buku Kedokteran ', 'Yulie', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(90, 15, 0, 0, 'Kimia X (1)', 'Erlangga Jakarta', 'Siti Nagiyah', '', 2015, 0, '0000-00-00', 0, 0, 0, 0, ''),
(91, 15, 0, 0, 'Kimia XI Kelompok Teknologi Dan Kesehatan ', 'Erlangga Jakarta', 'Siti Nagiyah', '', 2013, 0, '0000-00-00', 0, 0, 0, 0, ''),
(92, 17, 0, 0, 'Komunikasi Keperawatan', 'Pilar Utama Mandiri Jaktim ', 'Supanjiono Ns Tuti Asri', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(93, 17, 0, 0, 'Konsep Dasar Keperawatan 1', 'Pilar Utama Mandiri Jaktim ', 'Supanjiono Ns Endah IV', '', 2018, 0, '0000-00-00', 0, 0, 0, 0, ''),
(94, 13, 0, 0, 'Layar Terkembang', 'Balai Pustaka Jakarta', 'St. Takdir Alisy', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(95, 13, 0, 0, 'Malam Taman Sari ', 'Gama Media Yogyakarta', 'Suminto', '', 2033, 0, '0000-00-00', 0, 0, 0, 0, ''),
(96, 13, 0, 0, 'Malam Terakhir ', 'Grafiti Jakarta', 'Leila S Shudo', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(97, 16, 0, 0, 'Matematika  X (1)', 'Erlangga Jakarta', 'Eka Zuliana', '', 2012, 0, '0000-00-00', 0, 0, 0, 0, ''),
(98, 16, 0, 0, 'Matematika 1', 'Erlangga Ciracas Jakarta', 'Kasmina Toali', '', 2018, 0, '0000-00-00', 0, 0, 0, 0, ''),
(99, 16, 0, 0, 'Matematika 1', 'Erlangga Ciracas Jakarta', 'Kasmina Toali', '', 2018, 0, '0000-00-00', 0, 0, 0, 0, ''),
(100, 16, 0, 0, 'Matematika 2', 'Erlangga Ciracas Jakarta', 'Kasmina Toali', '', 2018, 0, '0000-00-00', 0, 0, 0, 0, ''),
(101, 16, 0, 0, 'Matematika 3', 'Erlangga Jakarta', 'Kasmina Toali', '', 2018, 0, '0000-00-00', 0, 0, 0, 0, ''),
(102, 16, 0, 0, 'Matematika X', 'Kemendikbud Jakarta ', 'Kemendikbud', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(103, 16, 0, 0, 'Matematika XI', 'Kemendikbud Jakarta ', 'Kemendikbud', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(104, 16, 0, 0, 'Matematika XI', 'Kemendikbud Jakarta ', 'Kemendikbud', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(105, 16, 0, 0, 'Matematika XII', 'Erlangga Jakarta', 'Kasmina Toali', '', 2018, 0, '0000-00-00', 0, 0, 0, 0, ''),
(106, 16, 0, 0, 'Matematika XII (3)', 'Erlangga Jakarta', 'Tasmina Taoli', '', 2038, 0, '0000-00-00', 0, 0, 0, 0, ''),
(107, 18, 0, 0, 'Memahami Teknik Pembuatan Sediaan Obat Dalam Skala Kecil dan Skala Industri', 'Erlangga Jakarta', 'Bidang Studii Keahlian Farmasi', '', 2015, 0, '0000-00-00', 0, 0, 0, 0, ''),
(108, 13, 0, 0, 'Membaca Semesta', 'Dwi Segara Jakarta', 'Dwi Segara', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(109, 18, 0, 0, 'Menangkal Narkoba Dan Kekerasan', 'Balai Pustaka Jakarta', 'Dr. Lydiahar', '', 2036, 0, '0000-00-00', 0, 0, 0, 0, ''),
(110, 18, 0, 0, 'Modul MenerapkanPembuatan Sediaaan Obat Sesuai Resep Dokter Dibawah Pengaawasan Apotek', 'Erlangga Jakarta', 'Maryani ', '', 2012, 0, '0000-00-00', 0, 0, 0, 0, ''),
(111, 13, 0, 0, 'Nyanyian Anak Cucu', 'Angkas Bandung', 'Upita Agustina ', '', 2030, 0, '0000-00-00', 0, 0, 0, 0, ''),
(112, 13, 0, 0, 'Nyanyian Tanah Air', 'Grasindo Jakarta ', 'Saini KM', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(113, 13, 0, 0, 'Orang-Orang Belanda Dipintu Darurat', 'Jakarta Putra Sukses', 'Munggul Wibowo', '', 2032, 0, '0000-00-00', 0, 0, 0, 0, ''),
(114, 13, 0, 0, 'Pahlawan Dan Tikus', 'Hikayat Publis Yogyakarta', 'K.H.A Mustala', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(115, 13, 0, 0, 'Pak Jon, Apa Bebernya Kerjaanmu', 'Depdikbud Jakarta ', 'Marjono ', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(116, 13, 0, 0, 'Pejuang Pantang Menyerang ', 'CV. Nugraha Jakarta', 'Purnawan', '', 1986, 0, '0000-00-00', 0, 0, 0, 0, ''),
(117, 18, 0, 0, 'Pelayanan farmasi', 'Pilar Utama Mandiri Jaktim ', 'Abdur Rahman, Fitri Soleh', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(118, 18, 0, 0, 'Pelayanan Farmasi Adm Farma Kelas X', 'Buku Kedokteran ', 'Syukrina', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(119, 18, 0, 0, 'Pelayanan Farmasi Adm Farma Kelas XII', 'Buku Kedokteran ', 'Syukrina', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(120, 18, 0, 0, 'Pelayanan Farmasi Ilmu Resep Kelas XI Dan XII', 'Buku Kedokteran', 'Ai Kurasein', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(121, 18, 0, 0, 'Pelayanan Farmasi Simulasi Apotek Kelas XI Dan XII', 'Buku Kedokteran', 'Fitrri Zakiah', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(122, 3, 0, 0, 'Pendidikan Agama Islam 1', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(123, 3, 0, 0, 'Pendidikan Agama Islam 2', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(124, 3, 0, 0, 'Pendidikan Agama Islam 3', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(125, 3, 0, 0, 'Pendidikan Agama Islam 3', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(126, 3, 0, 0, 'Pendidikan Agama Islam Dan Budi Pekerti ', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(127, 3, 0, 0, 'Pendidikan Agama Islam Dan Budi Pekerti XI', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(128, 8, 0, 0, 'Pendidikan Jasmani Olahraga Dan Kesehatan X', 'Kemendikbud Jakarta ', 'Kemendikbud', '', 2014, 0, '0000-00-00', 0, 0, 0, 0, ''),
(129, 8, 0, 0, 'Pendidikan Jasmani Olahraga Dan Kesehatan XI', 'Kemendikbud Jakarta ', 'Kemdikbud ', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(130, 8, 0, 0, 'Pendidikan Jasmani, Olahraga Dan Kesehatan 1', 'Erlangga Ciracas Jakarta', 'Indiarti Agung, M Azhar M', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(131, 8, 0, 0, 'Pendidikan Jasmani, Olahraga Dan Kesehatan XI', 'Kemendikbud Jakarta ', 'Kemendikbud', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(132, 0, 0, 0, 'Pendidikan Kewarganegaraan XI (2)', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(133, 0, 0, 0, 'Pendidikan Pancasila Dan Kewarganegaraan X', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(134, 0, 0, 0, 'Pendidikan Pancasila Dan Kewarganegaraan XI', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(135, 0, 0, 0, 'Pengantar Kebutuhan Dasar Manusia ', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(136, 0, 0, 0, 'Perhitungan Dosis Obat ', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(137, 0, 0, 0, 'Perundang-undangan Kesehatan', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(138, 13, 0, 0, 'Peruntuhan Cahaya', 'Hikayat Jakarta ', 'Jamal D Rah', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(139, 13, 0, 0, 'Potret Seorang Penyair Muda Sebagai Si Maling Kundang ', 'Nusa Agung Jakarta ', 'Goenawan M', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(140, 11, 0, 0, 'Practise Your English Competence 1', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(141, 11, 0, 0, 'Practise Your English Competence 2', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(142, 8, 0, 0, 'Prakarya Dan Kewirausahaan XI', 'Kemendikbud Jakarta ', 'Kemendikbud', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(143, 17, 0, 0, 'Praktik Klinik Keperawatan Dasar 3', 'Buku Kedokteran', 'Barbara R Hg.', '', 2013, 0, '0000-00-00', 0, 0, 0, 0, ''),
(144, 14, 0, 0, 'Prigel Bahasa Jawa 1', 'Erlangga Ciracas Jakarta', 'Gandung W', '', 2014, 0, '0000-00-00', 0, 0, 0, 0, ''),
(145, 14, 0, 0, 'Prigel Bahasa Jawa 2', 'Erlangga  Jakarta', 'Gedung Wid', '', 2014, 0, '0000-00-00', 0, 0, 0, 0, ''),
(146, 14, 0, 0, 'Prigel Bahasa Jawa 3 (XII)', 'Erlangga Jakarta', 'Gandung W', '', 2013, 0, '0000-00-00', 0, 0, 0, 0, ''),
(147, 14, 0, 0, 'Prigel Bahasa Jawa 3 (XII)', 'Erlangga Jakarta', 'Gandung W', '', 2013, 0, '0000-00-00', 0, 0, 0, 0, ''),
(148, 8, 0, 0, 'Produk Kreatif Dan Kewirausahaan', 'Yudistira', 'Dony Kusuma', '', 2019, 0, '0000-00-00', 0, 0, 0, 0, ''),
(149, 8, 0, 0, 'Produk Kreatif Dan Kewirausahaan 1', 'Jakarta Yudistira', 'Dody Kusuma', '', 2019, 0, '0000-00-00', 0, 0, 0, 0, ''),
(150, 8, 0, 0, 'Produk Kreatif Dan Kewirausahaan XI Dan XII', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(151, 12, 0, 0, 'Produktif Berbahasa Indonesia', 'Erlangga Ciracas Jakarta', 'Yustinah', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(152, 12, 0, 0, 'Produktif Berbahasa Indonesia 2', 'Erlangga Ciracas Jakarta', 'Yustinah', '', 2018, 0, '0000-00-00', 0, 0, 0, 0, ''),
(153, 12, 0, 0, 'Produktif Berbahasa Indonesia XII (3)', 'Erlangga Jakarta', 'Yustinah', '', 2019, 0, '0000-00-00', 0, 0, 0, 0, ''),
(154, 12, 0, 0, 'Produktif Berbahasa Indonesia XII (3)', 'Erlangga Jakarta', 'Yustinah', '', 2019, 0, '0000-00-00', 0, 0, 0, 0, ''),
(155, 12, 0, 0, 'PTP Bahasa Indonesia Kelas X', 'Erlangga Jakarta', 'Sujepti', '', 2020, 0, '0000-00-00', 0, 0, 0, 0, ''),
(156, 12, 0, 0, 'PTP Bahasa Indonesia Kelas XI', 'Erlangga Jakarta', 'Sujepti', '', 2020, 0, '0000-00-00', 0, 0, 0, 0, ''),
(157, 12, 0, 0, 'PTP Bahasa Indonesia Kelas XII', 'Erlangga Jakarta', 'Sujepti', '', 2020, 0, '0000-00-00', 0, 0, 0, 0, ''),
(158, 12, 0, 0, 'PTP Bahasa Indonesia X (1)', 'Erlangga Jakarta', 'Sujepti', '', 2020, 0, '0000-00-00', 0, 0, 0, 0, ''),
(159, 12, 0, 0, 'PTP Bahasa Indonesia XI (1)', 'Erlangga Jakarta', 'Sujepti', '', 2020, 0, '0000-00-00', 0, 0, 0, 0, ''),
(160, 16, 0, 0, 'PTP Matematika Kelas X', 'Erlangga Jakarta', 'Eka Zuliana', '', 2020, 0, '0000-00-00', 0, 0, 0, 0, ''),
(161, 16, 0, 0, 'PTP Matematika Kelas XI', 'Erlangga Jakarta', 'Eka Zuliana', '', 2020, 0, '0000-00-00', 0, 0, 0, 0, ''),
(162, 16, 0, 0, 'PTP Matematika Kelas XII', 'Erlangga Jakarta', 'Eka Zuliana', '', 2020, 0, '0000-00-00', 0, 0, 0, 0, ''),
(163, 16, 0, 0, 'PTP Matematika X (1)', 'Erlangga Jakarta', 'Eka Zuliana', '', 2020, 0, '0000-00-00', 0, 0, 0, 0, ''),
(164, 11, 0, 0, 'PTP Splash Grade XI', 'Erlangga Jakarta', 'Anik M', '', 2020, 0, '0000-00-00', 0, 0, 0, 0, ''),
(165, 11, 0, 0, 'PTP Splash Grade XII', 'Erlangga Jakarta', 'Anik M', '', 2020, 0, '0000-00-00', 0, 0, 0, 0, ''),
(166, 11, 0, 0, 'PTP Splash X (1)', 'Erlangga Jakarta', 'Anik M', '', 2020, 0, '0000-00-00', 0, 0, 0, 0, ''),
(167, 11, 0, 0, 'PTP Splash XI (2)', 'Erlangga Jakarta', 'Anik M', '', 2020, 0, '0000-00-00', 0, 0, 0, 0, ''),
(168, 13, 0, 0, 'Reportase Yang Menakutkan ', 'Jakarta Nafila ', 'Mustofa', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(169, 13, 0, 0, 'Robohnya Surau Kami ', 'Gramedia Jakarta', 'A.A Navis', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(170, 13, 0, 0, 'Romeo Juliet', 'Navila Jakarta ', 'Skakespera', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(171, 13, 0, 0, 'Rumah Cahaya', 'Gama Media Yogyakarta', 'Abdul Wachid', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(172, 13, 0, 0, 'Sebelum Senja Selesai', 'Hikayat Publis Yogyakarta', 'Moh. Wanganw', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(173, 13, 0, 0, 'Sejarah Indonesia', 'Kemendikbud Jakarta ', 'Kemendikbud  ', '', 2016, 0, '0000-00-00', 0, 0, 0, 0, ''),
(174, 13, 0, 0, 'Sejarah Indonesia', 'Kemendikbud Jakarta ', 'Kemendikbud  ', '', 2016, 0, '0000-00-00', 0, 0, 0, 0, ''),
(175, 13, 0, 0, 'Sembayang Rumputan', 'Navila Jakarta ', 'Ahmadun Y', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(176, 8, 0, 0, 'Seni Budaya I', 'Erlangga Ciracas Jakarta', 'Sugiyanto, T. Agustin ', '', 2018, 0, '0000-00-00', 0, 0, 0, 0, ''),
(177, 8, 0, 0, 'Seni Budaya XI', 'Kemendikbud Jakarta ', 'Kemendikbud', '', 2017, 0, '0000-00-00', 0, 0, 0, 0, ''),
(178, 1, 0, 0, 'Simulasi Dan Komunikasi ', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(179, 13, 0, 0, 'Slilit Sang Kiai ', 'Grafiti Jakarta', 'Emha Ainun', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(180, 13, 0, 0, 'Sri Rejeki ', 'Intimedia ', 'Kasno, S.Pd', '', 2034, 0, '0000-00-00', 0, 0, 0, 0, ''),
(181, 13, 0, 0, 'Sri Sumarah', 'Grafiti Jakarta', 'Kumpulan Saja', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(182, 13, 0, 0, 'Suara Sang Guru ', 'Pustaka Jaya Jakarta', 'Kahil Gibran', '', 1992, 0, '0000-00-00', 0, 0, 0, 0, ''),
(183, 13, 0, 0, 'Sumur Tanpa Dasar', 'Nusa Agung Jakarta ', 'Arifin C Noer', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(184, 13, 0, 0, 'Sumur Tanpa Dasar', 'Nusa Agung Jakarta ', 'Arifin C Noer', '', 2035, 0, '0000-00-00', 0, 0, 0, 0, ''),
(185, 0, 0, 0, 'Tanaman Obat Indonesia', '', '', '', 0000, 0, '0000-00-00', 0, 0, 0, 0, ''),
(186, 13, 0, 0, 'Tuanku Imam Bonjol ', 'Kemendikbud Jakarta ', 'Drs. Mardjaai ', '', 1985, 0, '0000-00-00', 0, 0, 0, 0, ''),
(187, 11, 0, 0, 'X-Epres UN  Bahasa Inggris', 'Erlangga Jakarta', 'Endrawati', '', 2019, 0, '0000-00-00', 0, 0, 0, 0, ''),
(188, 12, 0, 0, 'X-Epres UN 2019 Bahasa Indonesia', 'Erlangga Jakarta', 'Rustamaji', '', 2018, 0, '0000-00-00', 0, 0, 0, 0, ''),
(189, 11, 0, 0, 'X-Epres UN 2019 Bahasa Inggris', 'Erlangga Jakarta', 'Endarwati', '', 2018, 0, '0000-00-00', 0, 0, 0, 0, ''),
(190, 16, 0, 0, 'X-Epres UN 2019 Matematika', 'Erlangga Jakarta', 'Kasmina ', '', 2018, 0, '0000-00-00', 0, 0, 0, 0, ''),
(191, 12, 0, 0, 'X-Epres UN 2020 Bahasa Indonesia', 'Erlangga Jakarta', 'Rustamaji', '', 2019, 0, '0000-00-00', 0, 0, 0, 0, ''),
(192, 16, 0, 0, 'X-Epres UN 2020 Matematika', 'Erlangga Jakarta', 'Kasmina', '', 2018, 0, '0000-00-00', 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `detail_klasifikasi_ddc`
--

CREATE TABLE `detail_klasifikasi_ddc` (
  `id_detailddc` int(11) NOT NULL,
  `id_ddc` int(11) NOT NULL,
  `kode_detailddc` int(11) NOT NULL,
  `kategori_detailddc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_klasifikasi_ddc`
--

INSERT INTO `detail_klasifikasi_ddc` (`id_detailddc`, `id_ddc`, `kode_detailddc`, `kategori_detailddc`) VALUES
(1, 400, 1, 'Bahasa Indonesia'),
(2, 400, 2, 'Bahasa Inggris'),
(3, 400, 3, 'Fiksi dan Nonfiksi'),
(4, 400, 4, 'Bahasa Jawa'),
(5, 500, 1, 'Sains'),
(6, 500, 2, 'Matematika'),
(7, 600, 1, 'Keperawatan'),
(8, 600, 2, 'Farmasi'),
(9, 600, 3, 'Komputer');

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
(2, 'N', 'Non Fiksi');

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi_ddc`
--

CREATE TABLE `klasifikasi_ddc` (
  `id_ddc` int(11) NOT NULL,
  `kode_ddc` varchar(5) NOT NULL,
  `kategori_ddc` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klasifikasi_ddc`
--

INSERT INTO `klasifikasi_ddc` (`id_ddc`, `kode_ddc`, `kategori_ddc`) VALUES
(1, '000', 'Umum'),
(2, '100', 'Filsafat dan Psikologi'),
(3, '200', 'Agama'),
(4, '300', 'Ilmu Sosial'),
(5, '400', 'Bahasa'),
(6, '500', 'Sains dan Matematika'),
(7, '600', 'Teknologi'),
(8, '700', 'Seni &amp; Rekreasi'),
(9, '800', 'Literatur dan Sastra'),
(10, '900', 'Sejarah dan Geografi'),
(11, '400.1', 'Bahasa Inggris'),
(12, '400.2', 'Bahasa Indonesia'),
(13, '400.3', 'Fiksi dan Non Fiksi'),
(14, '400.4', 'Bahasa Jawa'),
(15, '500.1', 'Sains'),
(16, '500.2', 'Matematika'),
(17, '600.1', 'Keperawatan'),
(18, '600.2', 'Farmasi'),
(19, '600.3', 'Komputer');

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
-- Indexes for table `detail_klasifikasi_ddc`
--
ALTER TABLE `detail_klasifikasi_ddc`
  ADD PRIMARY KEY (`id_detailddc`);

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
  ADD PRIMARY KEY (`id_ddc`);

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
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `detail_klasifikasi_ddc`
--
ALTER TABLE `detail_klasifikasi_ddc`
  MODIFY `id_detailddc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `detail_peminjaman`
--
ALTER TABLE `detail_peminjaman`
  MODIFY `id_detailpinjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_buku`
--
ALTER TABLE `jenis_buku`
  MODIFY `id_jenisbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `klasifikasi_ddc`
--
ALTER TABLE `klasifikasi_ddc`
  MODIFY `id_ddc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
