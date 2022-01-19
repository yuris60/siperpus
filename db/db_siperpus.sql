-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 05:03 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nm_admin` varchar(30) NOT NULL,
  `akses` enum('Petugas Perpustakaan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nm_admin`, `akses`) VALUES
(1, 'admin', '$2y$10$rRh9FBQOwsj.j4x9at8tx.V7/2QLKgcFyWCzsqrW3JztOfiA1FVrO', 'Administrator', 'Petugas Perpustakaan');

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `nisn` char(10) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nm_anggota` varchar(50) NOT NULL,
  `jk_anggota` enum('L','P') NOT NULL,
  `tempatlahir_anggota` varchar(40) NOT NULL,
  `tgllahir_anggota` date NOT NULL,
  `nik_anggota` varchar(16) NOT NULL,
  `agama_anggota` varchar(20) NOT NULL,
  `alamat_anggota` text NOT NULL,
  `rt` char(3) NOT NULL,
  `rw` char(3) NOT NULL,
  `dusun` varchar(30) NOT NULL,
  `kelurahan` varchar(40) NOT NULL,
  `kecamatan` varchar(40) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `foto_anggota` char(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`nisn`, `id_kelas`, `nm_anggota`, `jk_anggota`, `tempatlahir_anggota`, `tgllahir_anggota`, `nik_anggota`, `agama_anggota`, `alamat_anggota`, `rt`, `rw`, `dusun`, `kelurahan`, `kecamatan`, `nama_ayah`, `nama_ibu`, `foto_anggota`) VALUES
('0004680903', 12, 'Desti Eka Anggraeni', 'P', 'Purbalingga', '2002-12-30', '3303143012020008', 'Islam', 'Bojongsari', '2', '2', 'Bojongsari', 'Bojongsari', 'Kec. Bojongsari', 'Suyono', 'Umiati', '0004680903.jpg'),
('0006214793', 3, 'Ernia Saputri', 'P', 'Purbalingga', '2004-08-14', '3303145408040002', 'Islam', 'bumisari', '15', '3', '', 'bumisari', 'Kec. Bojongsari', 'miswanto', 'miskem', '0006214793.jpg'),
('0006595914', 1, 'Yuli Nur Rohmahwati', 'P', 'PURBALINGGA', '2003-07-09', '3303094907030001', 'Islam', 'Gunungkarang', '1', '1', '', 'Gunungkarang', 'Kec. Bobotsari', 'KHARIS SARTONO', 'ROPIAH', '0006595914.jpg'),
('0009002403', 3, 'Vini Freminisa Fatihah', 'P', 'Purbalingga', '2005-09-27', '3303146709050003', 'Islam', 'Bumisari', '7', '4', '', 'Bumisari', 'Kec. Bojongsari', 'Kato riyono', 'Mujiati', '0009002403.jpg'),
('0009262784', 1, 'Lilis Setiawati', 'P', 'PURBALINGGA', '2006-01-25', '3303096501060001', 'Islam', 'Gunungkarang', '1', '4', '', 'Gunungkarang', 'Kec. Bobotsari', 'WAHID', 'KANTINAH', '0009262784.jpg'),
('0015375389', 12, 'Novita Dwi Yanti', 'P', 'PEMALANG', '2002-01-25', '3327036501020006', 'Islam', 'MENDELEM', '0', '0', 'MENDELEM', 'MENDELEM', 'Kec. Belik', 'KASMO', 'NARTI', '0015375389.jpg'),
('0018123595', 8, 'Indah Choirun Nisa', 'P', 'Purbalingga', '2005-10-18', '3303185810050002', 'Islam', 'Condong RT 03 RW 02', '', '', '', 'Condong', 'Kec. Kertanegara', '', 'Sitinah', '0018123595.jpg'),
('0019540789', 12, 'Mu\'adz', 'L', 'Purbalingga', '2001-08-01', '3303060108010002', 'Islam', 'Klapasawit', '2', '4', 'Klapasawit', 'Klapasawit', 'Kec. Kalimanah', 'Mohamad Iskandar', 'Neni Luwiyanti', '0019540789.jpg'),
('0021082778', 5, 'Nafis Waliyah Putri', 'P', 'PURBALINGGA', '2002-10-03', '3303146907020001', 'Islam', 'KRAJAN', '3', '4', 'KRAJAN', 'PEKALONGAN', 'Kec. Bojongsari', 'SARYONO', 'MURIAH', '0021082778.jpg'),
('0021403151', 12, 'Fitriani Nurafifah', 'P', 'Purbalingga', '2002-12-07', '3303184712020001', 'Islam', 'Langkap', '1', '3', 'Langkap', 'Langkap', 'Kec. Kertanegara', 'Sumarno', 'Sumirah', '0021403151.jpg'),
('0023982686', 6, 'Uci Tri Khanafi', 'P', 'PURBALINGGA', '2002-11-28', '3303086811020004', 'Islam', 'CIPAKU', '3', '1', 'SIWERIT', 'CIPAKU', 'Kec. Mrebet', 'SOLEKHAN', 'SULASMI', '0023982686.jpg'),
('0024245059', 12, 'Resa Triani', 'P', 'PURBALINGGA', '2002-09-24', '3303086409030001', 'Islam', 'Bojong', '3', '2', '', 'Bojong', 'Kec. Mrebet', 'Sachyono', 'Sahiroh', '0024245059.jpg'),
('0025986138', 12, 'Salma Novia Ramadani', 'P', 'Purbalingga', '2002-11-19', '3303125911020002', 'Islam', 'Majingklak RT 03 Rw 019', '3', '19', '', 'Tamansari', 'Kec. Karangmoncol', 'Kusmono', 'Eka Yuli Astuti', '0025986138.jpg'),
('0026242368', 4, 'Ruri Delvi Triana', 'P', 'purbalingga', '2002-12-11', '3303145112020004', 'Islam', 'bumisari', '16', '8', '', 'bumisari', 'Kec. Bojongsari', 'gayat Tri Lasnowo', 'Lasmiati', '0026242368.jpg'),
('0027359221', 12, 'Bintang Risma Pratama', 'L', 'Purbalingga', '2002-05-07', '3173060705021002', 'Islam', 'Wirasana', '2', '4', '', 'Wirasana', 'Kec. Purbalingga', 'Joni Aris Prasetyo', 'Sukmawati', '0027359221.jpg'),
('0028362774', 4, 'Vita Anggraeni', 'P', 'PURBALINGGA', '2005-03-15', '3303095503050001', 'Islam', 'KARANG TALUN', '4', '3', 'BAK', 'KARANGTALUN', 'Kec. Bobotsari', 'DAHONO HADI KRISNANTO', 'SUDIYAH', '0028362774.jpg'),
('0029060836', 12, 'Soibah Widitiara', 'P', 'PUBALINGGA', '2002-07-29', '3303166907020002', 'Islam', 'PENGADEGAN', '9', '5', 'PENGADEGAN', 'PENGADEGAN', 'Kec. Pengadegan', 'MIRDIANTO', 'IIN SUTIMAH', '0029060836.jpg'),
('0029784855', 9, 'Melani Hermawati', 'P', 'Purbalingga', '2002-10-20', '3303086010020002', 'Islam', 'Jl. Bithing', '2', '3', 'Bithing', 'Pengalusan', 'Kec. Mrebet', 'DARMAN', 'TRISWATI', '0029784855.jpg'),
('0031627753', 10, 'Wulandari Deswindra', 'P', 'Purbalingga', '2003-12-03', '3303134312030002', 'Islam', 'Pandak', '12', '2', '', 'Sumampir', 'Kec. Rembang', 'Indra Jayusman', 'Wiasih', '0031627753.jpg'),
('0032640889', 6, 'Nur Alikia Lufita', 'P', 'PURBALINGGA', '2003-09-04', '3303124409030001', 'Islam', 'SERANG', '3', '18', '', 'TUNJUNGMULI', 'Kec. Karangmoncol', 'SUBHAN MUSTOFA', 'SOIMAH', '0032640889.jpg'),
('0032729122', 11, 'Bela Nur Oktaviana', 'P', 'Purbalingga', '2003-10-06', '3303094610030002', 'Islam', 'Gandasuli RT 01 Rw 05', '1', '3', '', 'Gandasuli', 'Kec. Bobotsari', 'Siswoyo', 'Famila Morles', '0032729122.jpg'),
('0033338182', 12, 'Jeflianto', 'L', 'PURBALINGGA', '2003-01-19', '3303131801030001', 'Islam', 'MAKAM', '2', '5', '', 'MAKAM', 'Kec. Rembang', 'NURKHALIM', 'TURSIMAH', '0033338182.jpg'),
('0034344993', 6, 'Rifky Elvando', 'L', 'Purbalingga', '2003-12-22', '3303072212030003', 'Islam', 'Lemah Meteng', '22', '9', 'Sumingkir', 'Sumingkir', 'Kec. Kutasari', 'Roso Sunggoko', 'Dian Asnita', '0034344993.jpg'),
('0034563002', 11, 'Dimas Pangestu Putra Alifia', 'L', 'Purbalingga', '2003-01-23', '3303142301030002', 'Islam', 'Brobot', '17', '5', 'Brobot', 'Brobot', 'Kec. Bojongsari', 'Alip Kismono', 'Misri Yuspita', '0034563002.jpg'),
('0034756361', 6, 'Desta Umbari', 'P', 'Purbalingga', '2003-12-18', '3303085812030003', 'Islam', 'Selaganggeng', '2', '3', '', 'Selaganggeng', 'Kec. Mrebet', 'Bambang Teja Umbari', 'Sugiyah', '0034756361.jpg'),
('0034804962', 5, 'Sifa Destriyani', 'P', 'PEMALANG', '2003-12-03', '3327030312030006', 'Islam', 'Belik', '10', '7', 'BELIK', 'Belik', 'Kec. Belik', 'Ujang', 'MUGIYATI', '0034804962.jpg'),
('0035228509', 5, 'Aminah Tri Wahyuli', 'P', 'Purbalingga', '2003-07-18', '3303095807030002', 'Islam', 'Karangtalun RT 02 RW 06', '2', '6', '', 'Karangtalun', 'Kec. Bobotsari', 'Slamet Riyadi', 'Martini', '0035228509.jpg'),
('0035543308', 11, 'Slamet', 'L', 'Purbalingga', '2003-04-06', '3303080604030001', 'Islam', 'Sindang RT 02 Rw 02', '2', '2', '', 'Sindang', 'Kec. Mrebet', 'Simin', 'Fitriyah', '0035543308.jpg'),
('0035764160', 11, 'Zhafira Anis Saputri', 'P', 'Purbalingga', '2003-08-23', '3303096308030001', 'Islam', 'Majapura RT 03 RW 07', '3', '7', '', 'Majapura', 'Kec. Bobotsari', 'Susyanto', 'Ujianti', '0035764160.jpg'),
('0036399957', 12, 'Siti Nurjanah', 'P', 'Purbalingga', '2003-12-19', '3303175912030002', 'Islam', 'Siwagu', '6', '6', '', 'Purbasari', 'Kec. Karangjambu', 'Wamin Aminudin', 'Tarwi', '0036399957.jpg'),
('0037165435', 5, 'Farah Amelia Agustina', 'P', 'Pemalang', '2003-08-22', '3327046208030003', 'Islam', 'Majalangu Rt 02/01 Watukumpul', '2', '1', '', 'Majalangu', 'Kec. Watukumpul', 'Sukisto', 'Siti Jumaroh', '0037165435.jpg'),
('0037448554', 5, 'Lutfi Mukaromah', 'P', 'Purbalingga', '2003-12-15', '3303031512030003', 'Islam', 'Jl. Desa Krenceng', '8', '3', '', 'Krenceng', 'Kec. Kejobong', 'Sutrisno', 'Ratinah', '0037448554.jpg'),
('0037786750', 11, 'Ica Damayanti', 'P', 'Purbalingga', '2004-01-22', '3303076201040002', 'Islam', 'Sumingkir', '22', '9', '', 'Sumingkir', 'Kec. Kutasari', 'Misno', 'Ngatinah', '0037786750.jpg'),
('0037874561', 6, 'Erlinda Nurdiyantari', 'P', 'Tasikmalaya', '2003-04-14', '3206305404030001', 'Islam', 'Kp. Bojong Petir', '5', '2', 'Kp. Bojong Petir', 'Sariwangi', 'Kec. Sariwangi', 'Suyatno', 'Uun Nurhasanah', '0037874561.jpg'),
('0037928809', 6, 'Stasya Yuna Fegiutami', 'P', 'Purbalingga', '2003-10-12', '3303085210030002', 'Islam', 'Pager Andong', '3', '2', 'Pager Andong', 'Pager Andong', 'Kec. Mrebet', 'Juwarno', 'Siti Yuniati', '0037928809.jpg'),
('0038333758', 12, 'Tri Mega Puspita', 'P', 'Purbalingga', '2003-08-16', '3303095608030003', 'Islam', 'Banjarsari', '1', '2', 'Banjarsari', 'Banjarsari', 'Kec. Bobotsari', 'Tofik Imron Rosyadi', 'Ruminah', '0038333758.jpg'),
('0038374935', 12, 'Dewi Aprilia', 'P', 'Purbalingga', '2003-04-29', '3303106904030002', 'Islam', 'Karangreja', '1', '5', '', 'Karangreja', 'Kec. Karangreja', 'Sebo Kahono', 'Rini Retnowati', '0038374935.jpg'),
('0038497936', 11, 'Vega Listiani', 'P', 'Purbalingga', '2003-12-14', '3303085412030002', 'Islam', 'Bojong RT 02 RW 04', '2', '4', '', 'Bojong', 'Kec. Mrebet', 'supanti', 'Supanti', '0038497936.jpg'),
('0038534772', 12, 'Melisa Rismawati', 'P', 'Purbalingga', '2003-06-24', '3303086406030002', 'Islam', 'Binangun', '3', '2', 'Binangun', 'Binangun', 'Kec. Mrebet', 'Nasikhin', 'Tumiati', '0038534772.jpg'),
('0038535388', 12, 'Sulistio', 'L', 'Purbalingga', '2003-11-28', '3303082811030004', 'Islam', 'Pengalusan', '4', '2', 'Pengalusan', 'Pengalusan', 'Kec. Mrebet', 'Sidun', 'Makhiti', '0038535388.jpg'),
('0038593598', 12, 'Ariska Romadani', 'P', 'PURBALINGGA', '2003-07-04', '3303144407030003', 'Islam', 'KARANG BOLONG', '1', '7', 'KAJONGAN', 'KAJONGAN', 'Kec. Bojongsari', 'PAINO', 'KASNIATUN', '0038593598.jpg'),
('0038633003', 12, 'Sevi Prianti', 'P', 'PURBALINGGA', '2003-09-15', '3303085509030004', 'Islam', 'Selaganggeng', '1', '5', '', 'Selaganggeng', 'Kec. Mrebet', 'Karso', 'Turyati', '0038633003.jpg'),
('0038672198', 11, 'Akhmad Rifai', 'L', 'Purbalingga', '2003-04-23', '3303182304030002', 'Islam', 'KARANGPUCUNG', '4', '2', '', 'Karangpucung', 'Kec. Kertanegara', 'Achmad Junedi', 'Wurti', '0038672198.jpg'),
('0038802736', 12, 'Rahel Afta Alifia Sari', 'P', 'PURBALINGGA', '2003-12-01', '3303044112030002', 'Islam', 'SEMPOR LOR', '2', '3', '', 'SEMPOR LOR', 'Kec. Kaligondang', 'SINAR HIDAYAT', 'ENI YULIATI', '0038802736.jpg'),
('0038891880', 1, 'Aman Fajar Satryaji', 'L', 'Banyumas', '2003-06-02', '3303080403050343', 'Islam', 'Mangunegara', '', '', '', 'Mangunegara', 'Kec. Mrebet', '', 'Aminah', '0038891880.jpg'),
('0038891881', 1, 'Amin Fajar Setyawan', 'L', 'Banyumas', '2003-06-02', '3303080409030002', 'Islam', 'Mangunegara', '', '', '', 'Mangunegara', 'Kec. Mrebet', '', 'Aminah', '0038891881.jpg'),
('0038910429', 5, 'Wiki Suci Triana', 'P', 'PEMALANG', '2003-11-15', '3327035511030005', 'Islam', 'Beluk', '35', '8', 'Delimas', 'Beluk', 'Kec. Belik', 'Rakis', 'KANI', '0038910429.jpg'),
('0038910430', 6, 'Devita Ayu Wulan Siamy', 'P', 'Pemalang', '2003-11-21', '3327036111030006', 'Islam', 'Krajan Beluk RT 34 RW 08', '', '', '', 'Beluk', 'Kec. Belik', 'Mujiarto', 'Sairah', '0038910430.jpg'),
('0038913006', 11, 'Rina Amanda', 'P', 'PEMALANG', '2003-06-28', '3327026806030001', 'Islam', 'PULOSARI', '3', '1', 'KERAJAN', 'PULOSARI', 'Kec. Pulosari', 'SARIFUDIN ANWAR', 'SULASMI', '0038913006.jpg'),
('0038915698', 12, 'Tika Indriani', 'P', 'PEMALANG', '2003-09-26', '3327026609030004', 'Islam', 'BATUR', '26', '3', 'BATUR', 'CIKENDUNG', 'Kec. Pulosari', 'waryono', 'MURIAH', '0038915698.jpg'),
('0038958175', 11, 'Ema Faujijah', 'P', 'Pemalang', '2003-09-03', '3327034309030006', 'Islam', 'Mendelem', '5', '4', 'Karanganyar', 'Mendelem', 'Kec. Belik', 'Sitrun', 'Astiyah', '0038958175.jpg'),
('0038975384', 11, 'Puput Marsela', 'P', 'PEMALANG', '2003-03-14', '3327035403030008', 'Islam', 'Bulakan', '3', '7', 'Dukuh Karang', 'Bulakan', 'Kec. Belik', 'Sahuri', 'MURYATI', '0038975384.jpg'),
('0039410927', 5, 'Salwa Afreria Sari', 'P', 'Purbalingga', '2003-11-15', '3303145511030003', 'Islam', 'Jln Raya Bumi Sari', '7', '3', 'Gayunan', 'Pagedangan', 'Kec. Bojongsari', 'Herun', 'Inah', '0039410927.jpg'),
('0039470622', 5, 'Seli Nur Fajriyah', 'P', 'Purbalingga', '2003-12-09', '3303144212030003', 'Islam', 'Metenggeng', '3', '2', '', 'Metenggeng', 'Kec. Bojongsari', 'Rasman', 'Seti Wihayati', '0039470622.jpg'),
('0039937697', 11, 'Ade Fatih Mustofa', 'L', 'Purbalingga', '2003-05-22', '3303083005030002', 'Islam', 'Pagerandong', '4', '1', 'Petanoan', 'Pagerandong', 'Kec. Mrebet', 'SETIADI', 'ELTI SUKMAWATI', '0039937697.jpg'),
('0040810527', 12, 'Erina Novalia', 'P', 'TELUK AGUNG', '2004-11-05', '1609084511040003', 'Islam', 'TELUK AGUNG', '1', '1', 'Teluk Agung', 'TELUK AGUNG', 'Kec. Mekakau Ilir', 'SABTU RACHMAN', 'WIYARTI', '0040810527.jpg'),
('0041183428', 10, 'Tri Susanti', 'P', 'Purbalingga', '2004-12-21', '3303176112040001', 'Islam', '-', '0', '0', 'Bandingan', 'Karangjambu', 'Kec. Karangjambu', 'NUR AFIF TARMAN', 'ROWANTI', '0041183428.jpg'),
('0041245750', 6, 'Dwi Arfianti', 'P', 'Purbalingga', '2004-04-08', '3303084804040001', 'Islam', 'Cipaku', '2', '4', '', 'Cipaku', 'Kec. Mrebet', 'Sukirman', 'Sulasih', '0041245750.jpg'),
('0041306682', 11, 'Nunik Ruwanti', 'P', 'PURBALINGGA', '2004-01-07', '3303074701040001', 'Islam', 'KARANGCEGAK', '4', '2', 'KARANGCEGAK', 'KARANGCEGAK', 'Kec. Kutasari', 'NURWANTO', 'MIARTI', '0041306682.jpg'),
('0041440790', 5, 'Rany Syahda Kumala Kinarsih', 'P', 'PEMALANG', '2004-02-13', '3327025302040001', 'Islam', 'PULOSARI', '9', '2', 'PULOSARI', 'PULOSARI', 'Kec. Pulosari', 'FIKI HERIYANTO', 'LILI AFRIANA', '0041440790.jpg'),
('0041586451', 7, 'Aprilia Wilujeng', 'P', 'Purbalingga', '2004-04-24', '3302266404040007', 'Islam', 'Tunjungmuli', '2', '1', 'Desa Utara', 'Tunjungmuli', 'Kec. Karangmoncol', 'Sugeng Supangkat', 'Sofiyatun', '0041586451.jpg'),
('0041925631', 9, 'Tata Irmadani', 'P', 'Purbalingga', '2004-10-24', '3303116410040002', 'Islam', 'Karanganyar', '5', '1', '', 'Karanganyar', 'Kec. Karanganyar', 'Sudiyanto', 'Wakhyuni', '0041925631.jpg'),
('0042073263', 6, 'Windi Oktafia', 'P', 'Purbalingga', '2004-10-20', '3209246410040003', 'Islam', 'Karangasem', '4', '3', '', 'Karangasem', 'Kec. Kertanegara', 'Adim', 'Mujiroh', '0042073263.jpg'),
('0042185261', 12, 'Devika Sallsabila Melani Putri', 'P', 'TEGAL', '2004-05-09', '3303074905040002', 'Islam', 'JL RAYA DAWUAN', '11', '5', 'DAWUAN', 'SUMINGKIR', 'Kec. Kutasari', 'RATMONO', 'RIYANTI', '0042185261.jpg'),
('0042286828', 5, 'Novi Libriani Karomah', 'P', 'Purbalingga', '2004-11-23', '3303116411040001', 'Islam', 'Karanganyar', '1', '2', '', 'Karanganyar', 'Kec. Karanganyar', 'Tupon Atmo Sumanto', 'Sri Astuti', '0042286828.jpg'),
('0042305907', 6, 'Shelaviyani', 'P', 'Purbalingga', '2004-07-15', '3303055507040001', 'Islam', 'Purbalingga Kulon', '3', '3', 'Kecepit', 'Purbalingga Kulon', 'Kec. Purbalingga', 'Soviyudin', 'Eko Iriani', '0042305907.jpg'),
('0042571588', 12, 'Zaena Masitoh', 'P', 'Purbalingga', '2004-01-23', '3303176301040001', 'Islam', 'Siwagu', '6', '5', '', 'Purbasari', 'Kec. Karangjambu', 'Toha', 'Sobihatun', '0042571588.jpg'),
('0042601193', 5, 'Nadifan Nur Khasanah', 'P', 'Purbalingga', '2004-01-05', '3303144501040003', 'Islam', 'Pekalongan', '3', '9', '', 'Pekalongan', 'Kec. Bojongsari', 'Kasmianto', 'Partini', '0042601193.jpg'),
('0042749085', 12, 'Vivi Novela Giantina', 'P', 'Purbalingga', '2004-11-21', '3303146111040002', 'Islam', 'Metenggeng', '6', '3', '', 'Metenggeng', 'Kec. Bojongsari', 'Kholid Anwar', 'Murtingah', '0042749085.jpg'),
('0042925589', 4, 'Arzila Artikasari', 'P', 'Purbalingga', '2004-07-05', '3303084507040004', 'Islam', 'Selaganggeng', '4', '1', '', 'Selaganggeng', 'Kec. Mrebet', 'Waskito', 'Susilowati', '0042925589.jpg'),
('0043141385', 7, 'Cahyo Utomo', 'L', 'PURBALINGGA', '2004-08-08', '3303180808040001', 'Islam', 'LANGKAP', '6', '1', '', 'LANGKAP', 'Kec. Kertanegara', 'BASOR', 'MISTIYAH', '0043141385.jpg'),
('0043443119', 9, 'Revi Erdiana', 'P', 'PURBALINGGA', '2004-12-07', '3303094712040001', 'Islam', 'Bobotsari', '2', '10', 'Bobotsari', 'Bobotsari', 'Kec. Bobotsari', 'Rohadi Hadi P', 'SUHADMI', '0043443119.jpg'),
('0043460452', 6, 'Fajar Nur Firmansyah', 'P', 'Tangerang', '2004-07-27', '3330308270704000', 'Islam', 'Jl. Ki Tepus Rumput', '2', '6', 'Onje', 'Onje', 'Kec. Mrebet', 'Sarwono', 'Suatni', '0043460452.jpg'),
('0043541314', 6, 'Hanif Umar Atha', 'L', 'PURBALINGGA', '2004-03-13', '3303091303040004', 'Islam', 'Belik', '2', '7', '', 'Belik', 'Kec. Belik', 'Tomo', 'Tri astuti', '0043541314.jpg'),
('0043817589', 4, 'Tasya Amalina', 'P', 'Tanggerang', '2004-06-24', '3303086406040002', 'Islam', 'Mangunegara RT 06 RW 02', '6', '1', '', 'Mangunegara', 'Kec. Mrebet', 'Zulfadi', 'TTITIK PUSPAENI', '0043817589.jpg'),
('0043821401', 12, 'Azelia Khurota Ain', 'P', 'PURBALINGGA', '2004-04-05', '3303104504040001', 'Islam', 'Jl. Desa Karangreja', '1', '4', 'KEDOYA', 'KARANGREJA', 'Kec. Karangreja', 'MAD SUROSO', 'SARINAH', '0043821401.jpg'),
('0043823858', 3, 'Wulan Astuti', 'P', 'PURBALINGGA', '2004-12-26', '3303086612040004', 'Islam', 'BINANGUN', '6', '3', 'DUKUHLIRU', 'BINANGUN', 'Kec. Mrebet', 'KARSID', 'MARLINA', '0043823858.jpg'),
('0043894138', 11, 'Lita Bening Prasasti', 'P', 'Purbalingga', '2004-06-14', '3303085406040007', 'Islam', 'Onje', '1', '4', '', 'Onje', 'Kec. Mrebet', 'Martoni', 'Sumiati', '0043894138.jpg'),
('0044057917', 6, 'Nanda Nur Sainah', 'P', 'purbalingga', '2004-09-28', '1023123001023', 'Islam', 'Onje RT 2 Rw 8', '2', '8', '', 'Onje', 'Kec. Mrebet', 'Nur Kholis', 'Misyatun', '0044057917.jpg'),
('0044133742', 3, 'Wildan Hamada', 'L', 'purbalingga', '2004-05-24', '3303142405040002', 'Islam', 'Gembong RT 03 RW 02', '', '', '', 'Gembong', 'Kec. Bojongsari', 'Mudiarso sunarso', 'Mutiroh', '0044133742.jpg'),
('0044371712', 12, 'Mei Rinaningsih', 'P', 'Purbalingga', '2004-05-06', '3303094605040001', 'Islam', 'Karangmalang', '2', '3', 'Karangmalang', 'Karangmalang', 'Kec. Bobotsari', 'Rochman', 'Suwarni', '0044371712.jpg'),
('0044401552', 11, 'Fi Azizah Wahyuningrum', 'P', 'Purbalingga', '2004-05-28', '3303116805040001', 'Islam', 'Banjarkerta', '3', '4', '', 'Banjarkerta', 'Kec. Karanganyar', 'LAMSI', 'ROCHYATI', '0044401552.jpg'),
('0044423564', 11, 'Maratul Aufia', 'P', 'Purbalingga', '2004-06-25', '3303126506040002', 'Islam', 'Brubahan RT 03 RW 09', '3', '9', '', 'Tunjungmuli', 'Kec. Karangmoncol', 'Amar Mustofa', 'Leli Khasanah', '0044423564.jpg'),
('0044438720', 8, 'Bela Puspita Sari', 'P', 'PURBALINGGA', '2004-01-28', '1810046801040002', 'Islam', 'TANJUNG RUSIA', '2', '1', '', 'TANJUNG RUSIA', 'Kec. Pardasuka', 'SUMEH', 'ROSITA', '0044438720.jpg'),
('0044526046', 6, 'Selfina', 'P', 'PURBALINGGA', '2004-02-18', '3303125802040001', 'Islam', 'ARCA', '1', '17', '', 'TUNJUNGMULI', 'Kec. Karangmoncol', 'MISRONI', 'ASIROH', '0044526046.jpg'),
('0044644893', 4, 'Pujja Puspita Ayudia', 'P', 'Purbalingga', '2004-08-28', '3303136808040008', 'Islam', 'Tanalum', '2', '1', '', 'Tanalum', 'Kec. Rembang', 'Surakhmat', 'Siti Indaryani', '0044644893.jpg'),
('0044915985', 5, 'Afisa Salfia', 'P', 'PURBALINGGA', '2004-12-18', '3303125812040001', 'Islam', 'TUNJUNGMULI', '9', '13', 'KALI CABAN', 'TUNJUNGMULI', 'Kec. Karangmoncol', 'MISDI', 'JUMIATI', '0044915985.jpg'),
('0045072926', 10, 'Anissa Novianti', 'P', 'Purbalingga', '2004-11-11', '3303115111040002', 'Islam', 'Kasih', '5', '3', 'kasih', 'Kasih', 'Kec. Kertanegara', 'Sahud Supendi', 'Sumeni', '0045072926.jpg'),
('0045208390', 6, 'Maya Istanti', 'P', 'Purbalingga', '2004-01-19', '3303185901040001', 'Islam', 'Langkap', '2', '2', '', 'Langkap', 'Kec. Kertanegara', 'Rusdiono', 'Nasiroh', '0045208390.jpg'),
('0045210447', 6, 'Oktalika Aura Nurvanda', 'P', 'PURBALINGGA', '2004-10-05', '3303084510040001', 'Islam', 'MANGUNEGARA', '4', '2', 'MANGUNEGARA', 'MANGUNEGARA', 'Kec. Mrebet', 'NUROKHMAN', 'TUKIRAH', '0045210447.jpg'),
('0045287125', 7, 'Alan Setiaji', 'L', 'Purbalingga', '2004-02-01', '3303140102040001', 'Islam', 'GEMBONG,RT/RW 06/03', '6', '3', '', 'GEMBONG', 'Kec. Bojongsari', '', 'Kuati', '0045287125.jpg'),
('0045382225', 9, 'Oktavia Labibah', 'P', 'purbalingga', '2004-10-31', '3303147110040002', 'Islam', 'Karangbanjar RT 17 RW 07', '17', '7', '', 'Karangbanjar ', 'Kec. Bojongsari', 'Mislam', 'Fatimah', '0045382225.jpg'),
('0045519924', 11, 'Titah Pramesti', 'P', 'PURBALINGGA', '2004-01-07', '3303104701040001', 'Islam', 'Jl. Desa Karangreja', '1', '5', '', 'KARANGREJA', 'Kec. Karangreja', 'RAKUM', 'SUDARTI', '0045519924.jpg'),
('0045554377', 6, 'Lusi Mefiyani', 'P', 'PURBALINGGA', '2004-05-01', '3303124105040001', 'Islam', 'SERANG', '3', '18', '', 'TUNJUNGMULI', 'Kec. Karangmoncol', 'JAMALI', 'RUSMIATI', '0045554377.jpg'),
('0045570029', 12, 'Henni', 'P', 'Purbalingga', '2004-04-22', '3303106204040001', 'Islam', 'Serang RT 04 RW 01', '4', '1', '', 'Serang', 'Kec. Karangreja', 'Samsudin', 'Kuspri', '0045570029.jpg'),
('0045590973', 5, 'Desti Dwi Listiani', 'P', 'Purbalingga', '2004-12-01', '3303084112040003', 'Islam', 'Cipaku', '1', '4', '', 'Cipaku', 'Kec. Mrebet', 'Tresna Susilo', 'Resiyati', '0045590973.jpg'),
('0045671603', 11, 'Faozi Prasetiyo', 'L', 'Purbalingga', '2004-06-02', '3303180206040001', 'Islam', 'KARANG PUCUNG', '3', '2', 'KARANG PUCUNG', 'KARANG PUCUNG', 'Kec. Kertanegara', 'WARSO AL ACHMAD MUZAENI', 'TUGINI', '0045671603.jpg'),
('0045988658', 11, 'Intan Tiara Ayu', 'P', 'Purbalingga', '2004-07-28', '3303156807040001', 'Islam', 'Kandanggampang', '1', '2', '', 'Kandanggampang', 'Kec. Purbalingga', 'Sudarso', 'Ratna Indrawati', '0045988658.jpg'),
('0045988755', 9, 'Muna Fadilah Kinanti', 'P', 'Cilacap', '2004-11-28', '3301146811040002', 'Islam', 'Jl. Dr. Soetomo', '1', '10', 'Jenang Utara', 'Jenang', 'Kec. Majenang', 'Wartono', 'Karwijah', '0045988755.jpg'),
('0046018538', 5, 'Erni', 'P', 'Pemalang', '2004-02-11', '3327035102040006', 'Islam', 'Beluk', '35', '8', '', 'Beluk', 'Kec. Belik', 'Sudri', 'Nari', '0046018538.jpg'),
('0046116776', 4, 'Destriana Khikmatul Azizah', 'P', 'purbalingga', '2004-12-17', '3303185712040002', 'Islam', 'Karangtengah RT 05 RW 02', '5', '2', '', 'Karangtengah', 'Kec. Kertanegara', 'Rokib', 'Musriyati', '0046116776.jpg'),
('0046208949', 11, 'Refa Aurilia Alentha', 'P', 'Purbalingga', '2004-04-11', '3303085104040004', 'Islam', 'Jl. Ki Tepus Rumput', '1', '4', 'Onje', 'Onje', 'Kec. Mrebet', 'Karsum', 'Budi Suhesti', '0046208949.jpg'),
('0046292900', 9, 'Ilham Fauzan', 'L', 'PURBALINGGA', '2004-07-28', '3303102807040004', 'Islam', '(tidak diisi)', '3', '5', '', 'KARANGREJA', 'Kec. Karangreja', 'PARDI', 'DARSIH', '0046292900.jpg'),
('0046330911', 2, 'Viki Ardi Pratama', 'L', 'Pemalang', '2005-12-12', '3327031212050003', 'Islam', 'Dusun Jurang Jero', '4', '4', 'Jurang Jero', 'Badak', 'Kec. Belik', 'Edi Suwarno', 'Suparti', '0046330911.jpg'),
('0046331862', 5, 'Nur Riski Ais Zaitun', 'P', 'PEMALANG', '2004-01-12', '3327035201040002', 'Islam', 'Beluk', '34', '8', 'Krajan', 'Beluk', 'Kec. Belik', 'Taryani', 'DAMIRI', '0046331862.jpg'),
('0046415786', 5, 'Wiwit Oktaviani', 'P', 'PEMALANG', '2004-10-02', '3327034210040002', 'Islam', 'BELUK', '36', '8', '', 'BELUK', 'Kec. Belik', 'Kasmo', 'HENI FATIMAH', '0046415786.jpg'),
('0046437665', 12, 'Isna Azizah', 'P', 'Pemalang', '2004-03-04', '3327034403040003', 'Islam', 'Beluk', '16', '5', 'Pekutukan', 'Beluk', 'Kec. Belik', 'Kino', 'Humyati', '0046437665.jpg'),
('0046437669', 5, 'Risqi Yatul Mustofa', 'L', 'Pemalang', '2004-04-18', '3327031804040003', 'Islam', 'Beluk', '23', '6', '', 'Beluk', 'Kec. Belik', 'Slamet', 'YATMI', '0046437669.jpg'),
('0046449207', 5, 'Uni Luvidah', 'P', 'Purbalingga', '2004-04-15', '3303095504040002', 'Islam', 'Gandasuli RT02 RW 05', '2', '5', '', 'Gandasuli', 'Kec. Bobotsari', 'Slamet', 'Emi Harwati', '0046449207.jpg'),
('0046491505', 12, 'Feliani Ananda Safitri', 'P', 'PEMALANG', '2004-04-30', '3327037004040002', 'Islam', 'SODONG', '2', '3', 'SODONG', 'SIKASUR', 'Kec. Belik', 'NASIR', 'DARIASIH', '0046491505.jpg'),
('0046492588', 10, 'Okiyatun Muna', 'P', 'Pemalang', '2005-07-14', '3327035407050004', 'Islam', 'Bulakan RT 03 RW 07', '3', '7', '', 'Bulakan', 'Kec. Belik', 'Pujianto', 'Daisah', '0046492588.jpg'),
('0046492863', 12, 'Nelia Anggi Saputri', 'P', 'PEMALANG', '2004-03-24', '3327036403040004', 'Islam', 'JL. KANDANGGOTONG', '9', '1', 'KANDANGGOTONG', 'GOMBONG', 'Kec. Belik', 'SUPRIYADIN', 'RODAH', '0046492863.jpg'),
('0046493545', 4, 'Anggun Roro Ayu', 'P', 'Pemalang', '2004-08-30', '3327037008040002', 'Islam', 'Kuta Lor', '6', '2', 'KUTA', 'Kuta', 'Kec. Belik', 'Wahono', 'Yuliarti', '0046493545.jpg'),
('0046510237', 3, 'Yolanda Ribka Saputri', 'P', 'Purbalingga', '2004-06-07', '3303144706040004', 'Islam', 'Kajongan', '2', '7', '', 'Kajongan', 'Kec. Bojongsari', 'Afiat Riyanto', 'Siti Priatin', '0046510237.jpg'),
('0046624920', 6, 'Merta Nuraeni', 'P', 'PURBALINGGA', '2004-02-09', '3303094902040005', 'Islam', 'LIMBASARI', '4', '6', 'KARANG JOHO', 'LIMBASARI', 'Kec. Bobotsari', 'MAD ARIM', 'MASIROH', '0046624920.jpg'),
('0046700072', 11, 'Vega Indriana', 'P', 'Purbalingga', '2004-06-25', '3303086506040004', 'Islam', 'Sangkanayu', '15', '5', 'Kadus 3', 'Sangkanayu', 'Kec. Mrebet', 'Suratno', 'Nuryati', '0046700072.jpg'),
('0046726492', 3, 'Andini Desiana Fadilla', 'P', 'PURBALINGGA', '2004-12-20', '3303126012040003', 'Islam', 'GUNUNG TUGEL', '11', '21', '', 'TUNJUNGMULI', 'Kec. Karangmoncol', 'JAJANG', 'WARYATI', '0046726492.jpg'),
('0046768849', 12, 'Vani Vanesa Febian', 'P', 'Purbalingga', '2004-02-10', '3303131002040002', 'Islam', 'Panusupan', '1', '10', 'Panusupan', 'Panusupan', 'Kec. Rembang', 'Erwin Mulgiono', 'Runtia', '0046768849.jpg'),
('0046816179', 11, 'Nurul Azizah', 'P', 'Jakarta', '2004-06-26', '3303146606040002', 'Islam', 'Gembong', '12', '6', '', 'Gembong', 'Kec. Bojongsari', 'Mukdir', 'suryati', '0046816179.jpg'),
('0046816227', 5, 'Chikmatul Wachidah', 'P', 'Purbalingga', '2004-05-22', '3303146205040001', 'Islam', 'Banjaran RT 18 RW 09', '18', '9', '', 'Banjaran', 'Kec. Bojongsari', 'Samiarji Rasidi', 'Samidah', '0046816227.jpg'),
('0046816234', 4, 'Wisnu', 'L', 'Purbalingga', '2004-08-22', '3303142208040001', 'Islam', 'Banjaran', '23', '12', 'Sawangan', 'Banjaran', 'Kec. Bojongsari', 'Sakimin', 'Marsinah', '0046816234.jpg'),
('0046887236', 5, 'Ajeng Kinanggit', 'P', 'PURBALINGGA', '2004-04-26', '3303126604040001', 'Islam', 'Rajawana', '1', '1', '', 'Rajawana', 'Kec. Karangmoncol', 'TUKIMAN', 'Misweni', '0046887236.jpg'),
('0046893949', 12, 'Tias Nur Ristiani', 'P', 'Pemalang', '2014-05-05', '3327034505040004', 'Islam', 'Kalitengah RT 015 Rw 004', '15', '3', '', 'Beluk', 'Kec. Belik', 'Sakri', 'Taryuni', '0046893949.jpg'),
('0046905833', 11, 'Devina Putri Jaatsiyah', 'P', 'Purbalingga', '2004-11-01', '3303054111040004', 'Islam', 'Jl. Purbalingga Lor', '1', '3', '', 'Purbalingga Lor', 'Kec. Purbalingga', 'Basuki', 'Hesti Susy Sulistiah', '0046905833.jpg'),
('0046925425', 11, 'Fitri Amalia', 'P', 'Purbalingga', '2004-11-20', '3303146011040002', 'Islam', 'Pekalongan', '1', '10', '', 'Pekalongan', 'Kec. Bojongsari', 'Duhroni', 'Eliah', '0046925425.jpg'),
('0046933934', 12, 'Mita Anisa Nurlatifah', 'P', 'Purbalingga', '2003-03-23', '3303086303030001', 'Islam', 'Onje', '2', '4', 'Onje', 'Onje', 'Kec. Mrebet', 'Hermanto', 'Yulia Saputri', '0046933934.jpg'),
('0047048064', 6, 'Aisa', 'P', 'PURBALINGGA', '2004-04-25', '3303106504040001', 'Islam', 'SERANG', '2', '1', '', 'SERANG', 'Kec. Karangreja', 'TARYOTO', 'WINEM', '0047048064.jpg'),
('0047055165', 11, 'Amiatun Lisa Saputri', 'P', 'Purbalingga', '2004-05-09', '3303144905040001', 'Islam', 'BUMISARI', '10', '5', 'BUMISARI', 'BUMISARI', 'Kec. Bojongsari', 'Rahmat Jaenudin', 'Watiah', '0047055165.jpg'),
('0047289871', 1, 'Tri Anggun Cahyani', 'P', 'PURBALINGGA', '2004-04-28', '3303088804040003', 'Islam', 'Binangun, Mrebet', '3', '2', 'Mrebet', 'Mrebet', 'Kec. Mrebet', 'Yatno', 'NAGIMAH', '0047289871.jpg'),
('0047502033', 5, 'Dian Ichsani', 'P', 'Purbalingga', '2004-01-23', '3303146301040003', 'Islam', 'Patemon', '1', '7', 'Dusun IV', 'Patemon', 'Kec. Bojongsari', 'Lujeng Waluyo', 'Sugiati', '0047502033.jpg'),
('0047625917', 10, 'Siti Nakhdiyatul Mega', 'P', 'Jakarta', '2004-11-04', '3303094411040001', 'Islam', 'Pakuncen Rt 2 Rw 5', '2', '5', '', 'Dawuhan ', 'Kec. Bobotsari', 'Achmad warsidin', 'Wahyati', '0047625917.jpg'),
('0047720503', 9, 'Winda Istikomah', 'P', 'PURBALINGGA', '2004-05-21', '3303096105040001', 'Islam', 'Karangmalang Rt 02 Rw 08', '2', '8', '', 'Karangmalang', 'Kec. Bobotsari', 'AKSAN', 'ENTIN HARTINI', '0047720503.jpg'),
('0047801855', 3, 'Fiolin Fio Fenturini', 'P', 'Purbalingga', '2004-10-01', '3303121607070160', 'Islam', 'Pungkuran', '3', '10', 'Dusun V Karangmoncol', 'Pekiringan', 'Kec. Karangmoncol', 'Wendianto', 'Haryati', '0047801855.jpg'),
('0048051139', 8, 'Tatik Setiani', 'P', 'PURBALINGGA', '2004-05-04', '3303094405040002', 'Islam', 'TALAGENING', '', '', '', 'TALAGENING', 'Kec. Bobotsari', '', 'SAWINAH', '0048051139.jpg'),
('0048509985', 6, 'Amanda Silvia', 'P', 'PURBALINGGA', '2004-08-06', '3303044608040001', 'Islam', 'SEMPOR LOR', '2', '3', '', 'SEMPOR LOR', 'Kec. Kaligondang', 'HADI SUPARMAN', 'TUSRIYATI', '0048509985.jpg'),
('0048594260', 9, 'Sevianti', 'P', 'PURBALINGGA', '2004-09-01', '3303175201010001', 'Islam', 'SANGUWATANG', '2', '1', '', 'SANGUWATANG', 'Kec. Karangjambu', 'SLAMET RIYADI', 'MUNJIANTI', '0048594260.jpg'),
('0048596314', 11, 'Nita Sarianti', 'P', 'PURBALINGGA', '2004-12-25', '3303156512040001', 'Islam', 'KALITINGGAR', '5', '3', '', 'KALITINGGAR', 'Kec. Padamara', 'SARIMIN', 'TURENI', '0048596314.jpg'),
('0048662933', 5, 'Gita Melati', 'P', 'Bekasi', '2004-06-03', '3275054308040003', 'Islam', 'Bojong Meteng RT 05 RW 07', '5', '7', '', 'Bojong Meteng', 'Kec. Rawalumbu', 'SUTARMAN', 'Sumarni', '0048662933.jpg'),
('0048826791', 12, 'Imel Wulan Dari', 'P', 'PEMALANG', '2004-11-20', '3327036011040001', 'Islam', 'MENDELEM PENPEN', '3', '2', '', 'MENDELEM', 'Kec. Belik', 'SOBAR', 'ISAH', '0048826791.jpg'),
('0048832947', 9, 'Rita Rahmawati', 'P', 'Purbalingga', '2004-12-28', '3303116812040001', 'Islam', 'BRAKAS', '3', '2', '', 'BRAKAS', 'Kec. Karanganyar', 'dayin', 'RIANTI', '0048832947.jpg'),
('0048975134', 12, 'Oskar Jala Sena Wibowo', 'L', 'PURBALINGGA', '2004-05-02', '3303130205040003', 'Islam', 'MAKAM', '3', '5', '', 'MAKAM', 'Kec. Rembang', 'IMAM SODIKIN', 'DARYATI', '0048975134.jpg'),
('0048975285', 3, 'Rina Aryani', 'P', 'PURBALINGGA', '2004-03-03', '3303094304040001', 'Islam', 'KARANGTALUN', '4', '3', 'KARANGTALUN', 'KARANGTALUN', 'Kec. Bobotsari', 'NASIRUN', 'RIYATI', '0048975285.jpg'),
('0049109126', 12, 'Rena Apriliani', 'P', 'Banjarnegara', '2004-04-26', '3304196604040001', 'Islam', 'Karanggondang', '2', '4', 'Karanggondang', 'Pasegeran', 'Kec. Pandanarum', 'Suwanto', 'Suntiah', '0049109126.jpg'),
('0049120296', 10, 'Rafika Linda Istiqomah', 'P', 'Purbalingga', '2004-04-13', '3303055304040001', 'Islam', 'Gang Blumbang Purbalingga Lor RT 03 RW 03', '3', '3', '', 'Purbalingga Lor', 'Kec. Purbalingga', 'Solechan', 'Nur Hidayati', '0049120296.jpg'),
('0049229589', 9, 'Sasi Amalia Ramadhani', 'P', 'Purbalingga', '2004-10-18', '3303185810040003', 'Islam', 'Karangasem', '1', '4', '', 'Karangasem', 'Kec. Kertanegara', 'Ahmad Sohirin', 'Sumarti', '0049229589.jpg'),
('0049343198', 11, 'Winda Utmainah', 'P', 'Purbalingga', '2004-05-28', '3303146904040001', 'Islam', 'Kajongan RT 01 RW 07', '1', '7', '', 'Kajongan', 'Kec. Bojongsari', 'Winarno', 'Eka Sunar Lestari', '0049343198.jpg'),
('0049357737', 6, 'Tania Fiki Nurika', 'P', 'Purbalingga', '2004-08-05', '3327046208030003', 'Islam', 'Pekalongan, Rt 1 Rw 02', '1', '2', '', 'Pekalongan', 'Kec. Bojongsari', 'JAHIDIN', 'Nur Gerhanawati ', '0049357737.jpg'),
('0049797011', 11, 'Rahmat Hidayat', 'L', 'Purbalingga', '2004-11-11', '3303121111040002', 'Islam', 'Karangsawah', '2', '8', 'Karangsawah', 'Baleraksa', 'Kec. Karangmoncol', 'Ahmad Yasir', 'Taswati', '0049797011.jpg'),
('0049828414', 11, 'Nur Aisah Antikawati', 'P', 'Purbalingga', '2004-04-18', '3303095804040008', 'Islam', 'Gunungkarang RT 02 RW 02', '2', '2', '', 'Gunungkarang', 'Kec. Bobotsari', 'Kasroh', 'Sartika', '0049828414.jpg'),
('0049882566', 10, 'Astrit Triana', 'P', 'Purbalingga', '2004-01-11', '3303095101040002', 'Islam', 'Karangduren', '2', '5', 'Karangduren', 'Karangduren', 'Kec. Bobotsari', 'Sachudi', 'Ani Widiastuti', '0049882566.jpg'),
('0049906208', 12, 'Aska Febrianti', 'P', 'BOGOR', '2004-02-03', '3303102302040001', 'Islam', 'SIWARAK', '3', '5', '', 'SIWARAK', 'Kec. Karangreja', 'PARJO', 'NENENG NURWATI', '0049906208.jpg'),
('0049978657', 4, 'Nafisyah Nur Ramadani', 'P', 'Purbalingga', '2004-10-28', '', 'Islam', 'Dagan', '4', '2', '', 'Dagan', 'Kec. Bobotsari', 'Kuswanto', 'Suratmi', '0049978657.jpg'),
('0050811905', 9, 'Deni Ferdiyanto', 'L', 'purbalingga', '2005-02-18', '3303101802050001', 'Islam', 'Karangreja RT.01 / RW.03', '1', '1', '', 'Karangreja', 'Kec. Karangreja', 'Isgianto', 'Karsini', '0050811905.jpg'),
('0051003869', 3, 'Bita Nuraini', 'P', 'Purbalingga', '2005-11-07', '3303184711050001', 'Islam', 'Patemon', '2', '8', '', 'Patemon', 'Kec. Bojongsari', 'Sarwono Adi Santosa', 'Miswati', '0051003869.jpg'),
('0051041491', 9, 'Junani', 'P', 'Purbalingga', '2005-12-11', '3303105112050003', 'Islam', 'Kutabawa', '17', '5', 'Bambangan', 'Kutabawa', 'Kec. Karangreja', 'NUROCHIM', 'RATMI ', '0051041491.jpg'),
('0051081151', 1, 'Eva Mualifah', 'P', 'Pemalang', '2005-06-25', '3327045509060002', 'Islam', 'Tundagan RT 07/RW 01', '7', '1', '', 'Tundagan', 'Kec. Watukumpul', '', 'Mutiah', '0051081151.jpg'),
('0051392804', 8, 'Monika Nanda Larasati', 'P', 'PURBALINGGA', '2005-01-17', '3303085701050002', 'Islam', 'jalan desa', '2', '6', '', 'Cipaku', 'Kec. Mrebet', 'SUDARTO', 'ENI AFRIANI', '0051392804.jpg'),
('0051425769', 5, 'Lutfia Arifah', 'P', 'PURBALINGGA', '2005-01-16', '3303095601050001', 'Islam', 'SIMPANGAN', '3', '4', 'SIMPANGAN', 'PAKUNCEN', 'Kec. Bobotsari', 'WARYUDI', 'NUR HIDAYATI', '0051425769.jpg'),
('0051496105', 2, 'Brina Luvita Asani', 'P', 'TEGAL', '2005-08-09', '3327034908050005', 'Islam', 'Belik', '7', '2', 'BELIK', 'Belik', 'Kec. Belik', 'Wastoyo', 'Suefih', '0051496105.jpg'),
('0051567166', 3, 'Ishak Ardiansyah', 'L', 'Purbalingga', '2005-08-25', '3303092508050001', 'Islam', 'Penisihan', '2', '2', 'Penisihan', 'Palumbungan', 'Kec. Bobotsari', 'Marduki', 'Nahwati', '0051567166.jpg'),
('0051738418', 11, 'Najwa Ashfia', 'P', 'Purbalingga', '2005-10-16', '3210165610050001', 'Islam', 'Karangsawah', '4', '8', 'Karangsawah', 'Baleraksa', 'Kec. Karangmoncol', 'Sutarja', 'Endah Wahyuni', '0051738418.jpg'),
('0052165758', 12, 'Alfiah Indri Safitri', 'P', 'JAKARTA', '2005-04-06', '3303144604050001', 'Islam', 'Metenggeng', '18', '9', '', 'Metenggeng', 'Kec. Bojongsari', 'WANDI', 'SUMIARTI', '0052165758.jpg'),
('0052265832', 9, 'Ika Triana', 'P', 'Purbalingga', '2005-04-17', '3303175704050001', 'Islam', 'Jalan Raya Karangjambu', '19', '6', 'Bandingan', 'Karangjambu', 'Kec. Karangjambu', 'RATIM KUSYADI', 'KUSMINI', '0052265832.jpg'),
('0052301310', 10, 'Riska Cahya Aulia', 'P', 'Purbalingga', '2005-02-05', '3303134502050002', 'Islam', 'Datar', '2', '2', '', 'Tanalum', 'Kec. Rembang', 'Kasno', 'Sumiati', '0052301310.jpg'),
('0052333409', 7, 'Erisa Rahmadani', 'P', 'PURBALINGGA', '2005-11-02', '3303080211050005', 'Islam', 'Pengalusan', '4', '2', 'Pengalusan', 'Pengalusan', 'Kec. Mrebet', 'TONGAT', 'SUMIATI', '0052333409.jpg'),
('0052425503', 9, 'Dhiya Ahza Mutie', 'P', 'Purbalingga', '2005-04-01', '3303144104050002', 'Islam', 'Kajongan', '1', '8', 'Kajongan', 'Kajongan', 'Kec. Bojongsari', 'Maman Supratman', 'Cubarti', '0052425503.jpg'),
('0052555621', 2, 'Reziana Monica', 'P', 'Pemalang', '2005-09-24', '3327036409050001', 'Islam', 'Mendelem', '2', '9', 'Tampol', 'Mendelem', 'Kec. Belik', 'Harmoko', 'Tarniti', '0052555621.jpg'),
('0052634324', 9, 'Endah Wahyuningsih', 'P', 'PURBALINGGA', '2005-06-04', '330307446050001 ', 'Islam', 'JL RAYA DAWUAN', '10', '4', 'DAWUHAN', 'SUMINGKIR', 'Kec. Kutasari', 'AHMAD WAHYUDI', 'HENI KUSWANTI', '0052634324.jpg'),
('0052642801', 9, 'Anita Aprilia', 'P', 'PURBALINGGA', '2006-04-15', '3303095504060003', 'Islam', 'KARANGTALUN', '3', '3', 'KARANGTALUN', 'KARANGTALUN', 'Kec. Bobotsari', 'SUDARMO', 'SAINAH', '0052642801.jpg'),
('0052689551', 3, 'Anindito Saputro', 'L', 'PURBALINGGA', '2005-05-12', '3303101205050001', 'Islam', 'GONDANG', '2', '1', '', 'GONDANG', 'Kec. Karangreja', 'JAYADI MARTIN', 'SUYATI', '0052689551.jpg'),
('0052721475', 2, 'Youmi Vikri Griyanti', 'P', 'PURBALINGGA', '2005-12-15', '3303105512050002', 'Islam', 'TLAHABLOR', '1', '6', '', 'TLAHABLOR', 'Kec. Karangreja', 'Tarso Arsowiyadi', 'KUSJARLIYAH', '0052721475.jpg'),
('0052750253', 9, 'Faeha Nada Nur Barokah', 'P', 'purbalingga', '2005-06-01', '3303084106050001', 'Islam', 'Mangunegara RT 05 RW 02', '5', '2', '', 'Mangunegara', 'Kec. Mrebet', 'Ifan Sunaryo', 'NUR ISTATI', '0052750253.jpg'),
('0052850040', 9, 'Hana Rifa Pertiwi', 'P', 'PURBALINGGA', '2005-03-04', '3303104403050002', 'Islam', 'JL RAYA KARANGREJA', '3', '4', '', 'KARANGREJA', 'Kec. Karangreja', 'KUNDANG SAPUTRA', 'WAINAH', '0052850040.jpg'),
('0052950538', 10, 'Muflikhun', 'L', 'Purbalingga', '2005-02-11', '3303171102050002', 'Islam', 'Sirandu', '3', '3', 'Sirandu', 'Sirandu', 'Kec. Karangjambu', 'Sodirin', 'Eryatun', '0052950538.jpg'),
('0052978231', 9, 'Anggi Dwi Nurrohmah', 'P', 'Purbalingga', '2005-06-14', '3303141407050001', 'Islam', 'Bumisari', '13', '6', '', 'Bumisari', 'Kec. Bojongsari', 'suratno', 'sri suratmi', '0052978231.jpg'),
('0053017334', 9, 'Riski Dewiyanti', 'P', 'Pemalang', '2005-06-24', '3327036406050003', 'Islam', 'Mendelem RT 02 RW 08', '2', '8', '', 'Mendelem ', 'Kec. Belik', 'Waryat', 'Sairah', '0053017334.jpg'),
('0053019046', 9, 'Cindy Oktaviani', 'P', 'PEMALANG', '2005-10-08', '3327034810050005', 'Islam', 'Belik', '2', '4', 'Kepetek', 'Belik', 'Kec. Belik', 'Suritno', 'AJI KURNIASIH', '0053019046.jpg'),
('0053090536', 10, 'Anggi Novita Sari', 'P', 'PEMALANG', '2005-06-15', '3327035506050010', 'Islam', 'SODONG', '2', '1', 'SODONG', 'SIKASUR', 'Kec. Belik', 'MULYANTO', 'KAMIRAH', '0053090536.jpg'),
('0053093222', 9, 'Gina Aprilia', 'P', 'Pemalang', '2005-04-10', '3327035004050007', 'Islam', 'Kuta Kidul', '18', '4', 'KUTA KIDUL', 'Kuta', 'Kec. Belik', 'Raminto', 'Muryati', '0053093222.jpg'),
('0053099875', 6, 'Mugianto', 'L', 'PURBALINGGA', '2005-03-22', '3303112203050001', 'Islam', 'BRAKAS', '1', '3', 'BRAKAS', 'BRAKAS', 'Kec. Karanganyar', 'SAKHIRIN', 'KASNI', '0053099875.jpg'),
('0053103559', 8, 'Ayu Wulan Dari', 'P', 'Jakarta', '2005-08-03', '1502084308050003', 'Islam', 'Jalan Onje', '1', '6', '', 'Purbalingga Lor', 'Kec. Purbalingga', 'Mujiyo', 'Sumarni', '0053103559.jpg'),
('0053105025', 9, 'Meli Wulandari', 'P', 'purbalingga', '2005-05-21', '3303146105050004', 'Islam', 'Pagedangan', '', '', '', 'Pagedangan', 'Kec. Bojongsari', 'Romiarso', 'Sanginah', '0053105025.jpg'),
('0053256833', 4, 'Uli Agustinasari', 'P', 'Purbalingga', '2005-08-16', '3303125608050001', 'Islam', 'Tamansari', '1', '17', '', 'Tamansari', 'Kec. Karangmoncol', 'Iwan Munandar', 'Dewi Rusanti', '0053256833.jpg'),
('0053307690', 10, 'Mistianingsih', 'P', 'Purbalingga', '2005-05-05', '3303044505050001', 'Islam', 'Sidareaj', '12', '5', 'Catutan', 'Sidareja', 'Kec. Kaligondang', 'Sunarsin', 'Jumiati', '0053307690.jpg'),
('0053323063', 10, 'Idri Yani', 'P', 'purbalingga', '2005-05-05', '3303080505050007', 'Islam', 'Tangkisan RT 03 RW 06', '3', '5', '', 'Tangkisan', 'Kec. Mrebet', 'Mistono', 'Mistiah', '0053323063.jpg'),
('0053332186', 7, 'Tri Anjali', 'P', 'PURBALINGGA', '2005-09-21', '3303116109050002', 'Islam', 'BANGUN REKSA INDAH 1', '1', '10', '', 'KARANG TENGAH', 'Kec. Karang Tengah', 'SUTARWO', 'TUSIYAH', '0053332186.jpg'),
('0053438294', 4, 'Astrid Silviana Mukti', 'P', 'PURBALINGGA', '2005-09-21', '3303096109050001', 'Islam', 'Limbasari', '4', '1', 'Limbasari', 'Limbasari', 'Kec. Bobotsari', 'Sutrisno', 'YUNENSIH', '0053438294.jpg'),
('0053455687', 3, 'Hendri Wido Seno', 'L', 'Purbalingga', '2005-08-18', '3393110311950002', 'Islam', 'Kaliori RT 14 RW 03', '14', '3', '', 'Kaliori', 'Kec. Karanganyar', 'Sairin', 'Misnem', '0053455687.jpg'),
('0053455691', 3, 'Dewi Annisya Maysun Nabila', 'P', 'Purbalingga', '2005-03-10', '3303115003050003', 'Islam', 'Kaliori', '13', '3', 'PENGAMPIRAN', 'Kaliori', 'Kec. Karanganyar', 'CHADERI', 'Susanti', '0053455691.jpg'),
('0053460722', 2, 'Anastasia Dwi Sonita Salma', 'P', 'Purbalingga', '2005-01-24', '3173016401050014', 'Islam', 'Karangpetir', '1', '11', '', 'Cipaku', 'Kec. Mrebet', 'Uut Septianto', 'Yenni', '0053460722.jpg'),
('0053525299', 10, 'Dahlia Widi Setiawati', 'P', 'Banjarnegara', '2005-08-19', '3304115908050001', 'Islam', 'Bandingan, Rt 03 Rw 02', '3', '4', '', 'Bandingan', 'Kec. Rakit', 'Mukim', 'Endon Erowati', '0053525299.jpg'),
('0053549502', 4, 'Farah As Sifa', 'P', 'purbalingga', '2005-08-02', '3303144208050003', 'Islam', 'Matenggeng RT 04 RW 02', '', '', '', 'Matenggeng ', 'Kec. Bojongsari', 'Misdar', 'Ruci', '0053549502.jpg'),
('0053568215', 10, 'Choerul Isnan Nawawi', 'L', 'purbalingga', '2005-04-19', '3303081904050002', 'Islam', 'Onje RT 01 RW 01', '', '', '', 'Onje', 'Kec. Mrebet', 'Nur Chosim', 'Nuruliyatun', '0053568215.jpg'),
('0053653003', 3, 'Ananda Ayu Lestari', 'P', 'PURBALINGGA', '2005-01-28', '3303106801050002', 'Islam', 'Serang', '4', '2', '', 'Serang', 'Kec. Karangreja', 'KARYONO', 'SRI RAHAYU', '0053653003.jpg'),
('0053699514', 4, 'Selviana Dewi Astuti', 'P', 'Purbalingga', '2005-01-29', '3303136901050001', 'Islam', 'Bawahan', '4', '6', '', 'Gunung Wuled', 'Kec. Rembang', 'Sarjono', 'Jarmini', '0053699514.jpg'),
('0053952829', 2, 'Kiki Walihwan', 'L', 'Purbalingga', '2005-07-24', '3303132407050002', 'Islam', 'Buret Kalikarang', '5', '3', 'Buret Kalikarang', 'Tanalum', 'Kec. Rembang', 'Sugiono', 'Tarmi', '0053952829.jpg'),
('0054245633', 4, 'Heni Ramadani', 'P', 'purbalingga', '2005-11-12', '3303144110050002', 'Islam', 'Kajongan RT 01 RW 07', '1', '7', '', 'Kajongan', 'Kec. Bojongsari', 'Sakim', 'SUNARTI', '0054245633.jpg'),
('0054284633', 9, 'Rohmah Nur Baiti', 'P', 'BANJARNEGARA', '2005-03-24', '3303116403050001', 'Islam', 'KALIJARAN', '2', '4', 'KALIJARAN', 'KALIJARAN', 'Kec. Karanganyar', 'KHADIRIN', 'NARYATIN', '0054284633.jpg'),
('0054302082', 3, 'Syahwa Aditia Putri Priandoyo', 'P', 'Purbalingga', '2005-03-10', '3303125003050005', 'Islam', 'Jln Serma Salamun', '1', '7', 'Dusun IV Karangmoncol', 'Pekiringan', 'Kec. Karangmoncol', 'Pamuji Priyandoyo', 'Yuyun', '0054302082.jpg'),
('0054329093', 3, 'Sukma Naila Syafaah Hannan', 'P', 'PEMALANG', '2005-02-21', '3327046102050007', 'Islam', 'MAJAKERTA', '2', '1', '', 'MAJAKERTA', 'Kec. Watukumpul', 'WAHNAN', 'INDAH PURWANTI', '0054329093.jpg'),
('0054339719', 4, 'Syifa Ade Saputri', 'P', 'purbalingga', '2005-03-08', '3303184803050001', 'Islam', 'KARANGTENGAH Rt 01 Rw 01 ', '1', '1', '', 'KARANGTENGAH', 'Kec. Kertanegara', 'Saryono Alfan Azizi', 'Kusmiati', '0054339719.jpg'),
('0054360955', 12, 'Entis Sutisna', 'P', 'Purbalingga', '2005-04-25', '3303136504050001', 'Islam', 'Panusupan', '3', '9', 'Panusupan', 'Panusupan', 'Kec. Rembang', 'Suwandi', 'Sumiyati', '0054360955.jpg'),
('0054485893', 3, 'Lovina Angely', 'P', 'Purbalingga', '2005-01-10', '3303075001050003', 'Kristen', 'Candinata', '1', '1', 'Candinata', 'Candinata', 'Kec. Kutasari', 'YF Suyono', 'Quinella Findi Setiyati', '0054485893.jpg'),
('0054495863', 4, 'Isya Syakila Putri', 'P', 'purbalingga', '2005-08-10', '3301215008050004', 'Islam', 'Limbasari RT 01 RW 04', '1', '4', '', 'Limbasari', 'Kec. Bobotsari', 'Udinoto', 'SUMIRAH', '0054495863.jpg'),
('0054542567', 1, 'Novel Linda Suciana', 'P', 'Pemalang', '2005-11-02', '3327034211050005', 'Islam', 'Mendelem', '1', '8', 'Mendelem', 'Mendelem', 'Kec. Belik', 'Andiono', 'Ihwatun', '0054542567.jpg'),
('0054552365', 10, 'Yessi Tri Agustin', 'P', 'Purbalingga', '2005-08-14', '3303085408050003', 'Islam', 'Serayularangan', '1', '1', '', 'Serayularangan', 'Kec. Mrebet', 'IMAM SUBCHI', 'PAWIT IRWATI', '0054552365.jpg'),
('0054732231', 8, 'Luri Novisyah', 'P', 'Purbalingga', '2005-06-10', '3303145006050001', 'Islam', 'BOJONGSARI', '2', '8', 'Banyumudal', 'BOJONGSARI', 'Kec. Bojongsari', 'MURITO', 'PARTINI TRI PRASETYA', '0054732231.jpg'),
('0054755882', 4, 'Endah Setiani', 'P', 'Purbalingga', '2005-09-12', '3303131209050002', 'Islam', 'Malang Sumampir', '8', '5', '', 'Sumampir', 'Kec. Rembang', 'Akhir Kholimansyah', 'Rukheni Widiastuti', '0054755882.jpg'),
('0054867323', 9, 'Irvan Galih Sutomo', 'L', 'Purbalingga', '2004-08-28', '3303112308040001', 'Islam', 'Brakas,Karanganyar,Purbalingga', '3', '1', 'Brakas', 'Brakas', 'Kec. Karanganyar', 'Miarso', 'Kamiatun', '0054867323.jpg'),
('0054900223', 8, 'Nur Khalisa', 'P', 'Purbalingga', '2005-08-15', '3303115508050001', 'Islam', 'Brakas', '3', '1', 'Brakas', 'Brakas', 'Kec. Karanganyar', 'Soim', 'Wasirah', '0054900223.jpg'),
('0054964082', 4, 'Sri Endah Lestari', 'P', 'purbalingga', '2005-03-29', '3303146903050001', 'Islam', 'Pekalongan RT 01 RW 11', '', '', '', 'Pekalongan', 'Kec. Bojongsari', 'Hermanto Misman', 'Marwati', '0054964082.jpg'),
('0055035836', 7, 'Khoerun Nisa', 'P', 'Pemalang', '2005-03-04', '3327044403050008', 'Islam', 'Tundagan', '3', '4', '', 'Tundagan', 'Kec. Watukumpul', 'SUMINTO', 'SUTIAH', '0055035836.jpg'),
('0055057266', 7, 'Revalina Saputri', 'P', 'PURBALINGGA', '2005-09-15', '3303145509050001', 'Islam', 'Majapura', '1', '5', 'Majapura', 'Majapura', 'Kec. Bobotsari', 'Romi Abdulah', 'DWI SUSANTI', '0055057266.jpg'),
('0055147633', 10, 'Rosdiana Olifia Saputri', 'P', 'Purbalingga', '2005-10-02', '3303074210050001', 'Islam', 'Kutasari', '11', '6', 'Dusun 3', 'Kutasari', 'Kec. Kutasari', 'Suyitno', 'Sri Martini', '0055147633.jpg'),
('0055317157', 3, 'Salsabila Khairunnisa', 'P', 'Purbalingga', '2005-05-12', '3303145205050001', 'Islam', 'Patemon', '1', '6', '', 'Patemon', 'Kec. Bojongsari', 'Suwito', 'Susiah', '0055317157.jpg'),
('0055414951', 3, 'Annisa Wahyu Hidayah', 'P', 'PURBALINGGA', '2005-01-03', '3303094301050002', 'Islam', 'Pakuncen', '2', '4', 'Pakuncen', 'Pakuncen', 'Kec. Bobotsari', 'Suyono', 'ETI HIDAYATI', '0055414951.jpg'),
('0055480461', 10, 'Dila Islami Putri', 'P', 'Purbalingga', '2005-02-13', '3303085302050001', 'Islam', 'Jl.Putut I', '3', '4', 'Putut I', 'Serayularangan', 'Kec. Mrebet', 'Kadikun', 'Setiani', '0055480461.jpg'),
('0055530467', 4, 'Dinu Afriana Riza', 'P', 'Purbalingga', '2005-04-03', '3303144304050001', 'Islam', 'Beji', '16', '8', '', 'Beji', 'Kec. Bojongsari', 'Riswanto', 'Misyati', '0055530467.jpg'),
('0055603774', 10, 'Sari', 'P', 'CIAMIS', '2005-02-17', '3207275702050001', 'Islam', 'CIPAKU', '30', '12', 'CIPAKU', 'CIGUGUR', 'KEC. CIGUGUR', 'SELAMET', 'SITI MARYATI', '0055603774.jpg'),
('0055683971', 9, 'Dwi Retno Asih', 'P', 'Purbalingga', '2005-03-23', '3303096303050003', 'Islam', 'Dagan', '2', '9', '', 'Dagan', 'Kec. Bobotsari', 'Sarno Sumarjo', 'Miswati', '0055683971.jpg'),
('0055805765', 4, 'Sulfi Dea Nur Kholifatullah', 'P', 'Purbalingga', '2005-11-24', '3303146411050001', 'Islam', 'Pekalongan', '3', '10', '', 'Pekalongan', 'Kec. Bojongsari', 'Ahmad Nurhaerin Sarkim', 'Alfiah', '0055805765.jpg'),
('0056013935', 10, 'Keisya Pinasti Yulaekha', 'P', 'purbalingga', '2005-04-18', '3303115804050002', 'Islam', 'Lumpang RT 01 RW 01', '1', '1', '', 'Lumpang', 'Kec. Karanganyar', 'Yulianto', 'Liza Endarwati', '0056013935.jpg'),
('0056060042', 2, 'Angga Huntoro', 'L', 'PURBALINGGA', '2005-11-14', '3303081411050002', 'Islam', 'SINDANG', '2', '7', 'SALAM', 'SINDANG', 'Kec. Mrebet', 'TURYANTO', 'SARTIAH', '0056060042.jpg'),
('0056079444', 8, 'Dea Nur Rahmawati', 'P', 'Purbalingga', '2005-09-30', '3303107009050001', 'Islam', 'Bayeman Kidul', '2', '10', '', 'Tlahab Lor', 'Kec. Karangreja', 'Nur Iman', 'Watirah', '0056079444.jpg'),
('0056201609', 9, 'Qowiyyun Roufun', 'P', 'Pemalang', '2004-06-10', '3327035006040006', 'Islam', 'Beluk', '33', '8', 'Krajan', 'Beluk', 'Kec. Belik', 'Daryono', 'Sutriyati', '0056201609.jpg'),
('0056219816', 4, 'Selfi', 'P', 'purbalingga', '2005-11-16', '3303145611050001', 'Islam', 'Bojongsari', '', '', '', 'Bojongsari', 'Kec. Bojongsari', 'Rasmo', 'Ariyati', '0056219816.jpg'),
('0056278683', 4, 'Habib Damai Faturrahman', 'L', 'Purbalingga', '2004-09-10', '3303091009040001', 'Islam', 'Tlagayasa', '2', '4', 'Tlagayasa', 'Tlagayasa', 'Kec. Bobotsari', 'Sutaryo', 'Maryatun', '0056278683.jpg'),
('0056494349', 10, 'Rio Boydinda Tabah Anggara', 'L', 'Purbalingga', '2005-02-27', '3303122702050003', 'Islam', 'Karangwuni', '2', '2', 'Karangwuni', 'Tamansari', 'Kec. Karangmoncol', 'Sobar Hadi Sutrisno', 'Eni Kristiorini', '0056494349.jpg'),
('0056536862', 10, 'Annisa Salsabilla', 'P', 'PURBALINGGA', '2005-05-20', '3303086005050003', 'Islam', 'Bojong RT 01 RW 02', '2', '6', 'PURBALINGGA LOR', 'PURBALINGGA LOR', 'Kec. Purbalingga', 'AGUS SUJARAH', 'INDRI LISTYANI', '0056536862.jpg'),
('0056612820', 8, 'Mahmudah Febriani', 'P', 'PURBALINGGA', '2005-02-11', '3303085102050006', 'Islam', 'CIPAKU', '2', '3', '', 'CIPAKU', 'Kec. Mrebet', 'SUPRATIN', 'ISTINGADAH', '0056612820.jpg'),
('0056819378', 10, 'Sela Oktaviani', 'P', 'Purbalingga', '2005-10-17', '3303145710050001', 'Islam', 'Pekalongan', '2', '7', '', 'Pekalongan', 'Kec. Bojongsari', 'Misno', 'Watem', '0056819378.jpg'),
('0056820970', 4, 'Firman Noval Ardiansyah', 'L', 'Purbalingga', '2005-09-07', '3303080709050002', 'Islam', 'Cipaku', '2', '7', '', 'Cipaku', 'Kec. Mrebet', 'SOFAN HAMDANI YASIN', 'IKA PURMIATI', '0056820970.jpg'),
('0056830176', 3, 'Sovi Rahmadani', 'P', 'PURBALINGGA', '2005-10-30', '3303097011050002', 'Islam', 'Palumbungan', '1', '4', 'Palumbungan', 'Palumbungan', 'Kec. Bobotsari', 'Mukmin', 'HALIYAH', '0056830176.jpg'),
('0056868180', 6, 'Anggun Febianti', 'P', 'Purbalingga', '2005-02-24', '3303086402050001', 'Islam', 'Sangkanayu', '11', '4', 'Kadus 2', 'Sangkanayu', 'Kec. Mrebet', 'Agus Priatmiko', 'Yudaroh', '0056868180.jpg'),
('0056903851', 8, 'Fadila Novel Fitriah', 'P', 'Purbalingga', '2005-11-18', '3303145811050002', 'Islam', 'Banjaran', '25', '12', 'Sawangan', 'Banjaran', 'Kec. Bojongsari', 'Sudarto', 'Dwi Haryanti', '0056903851.jpg'),
('0056922281', 10, 'Hanifah Novisari Mukti', 'P', 'Purbalingga', '2005-11-24', '3303116404050003', 'Islam', 'Gampingan', '2', '1', 'Gampingan', 'Buara', 'Kec. Karanganyar', 'Mujiono', 'Sukatmi', '0056922281.jpg'),
('0057006235', 3, 'Nayla Nabilla Sukrisna', 'P', 'Yogyakarta', '2005-12-19', '3303115912060001', 'Islam', 'Karanganyar RT 01 RW 02', '1', '2', '', 'Karanganyar', 'Kec. Karanganyar', 'Tony sukrisna', 'May Martin', '0057006235.jpg'),
('0057009263', 10, 'Azizah Insani', 'P', 'Purbalingga', '2005-04-04', '3303134404050001', 'Islam', 'Tanalum', '1', '3', '', 'Tanalum', 'Kec. Rembang', 'Mustopo', 'Solikhatun', '0057009263.jpg'),
('0057061968', 1, 'Syarifatul Auliya', 'P', 'Purbalingga', '2005-08-16', '3303125608050002', 'Islam', 'Majingklak rt 02 rw 19 Tamansari Karangmoncol', '2', '19', '', 'Majingklak', 'Kec. Karangmoncol', '', 'Emi Mustafidah', '0057061968.jpg'),
('0057206553', 3, 'Tiana Nur Afifah', 'P', 'Purbalingga', '2005-01-26', '3303126601050001', 'Islam', 'Tajug', '3', '3', '', 'Tajug', 'Kec. Karangmoncol', 'Andi Sutarno', 'Neni Indriyani', '0057206553.jpg');
INSERT INTO `anggota` (`nisn`, `id_kelas`, `nm_anggota`, `jk_anggota`, `tempatlahir_anggota`, `tgllahir_anggota`, `nik_anggota`, `agama_anggota`, `alamat_anggota`, `rt`, `rw`, `dusun`, `kelurahan`, `kecamatan`, `nama_ayah`, `nama_ibu`, `foto_anggota`) VALUES
('0057222253', 4, 'Mei Agustin', 'P', 'Purbalingga', '2005-05-13', '3303125305050002', 'Islam', 'Karangmiri', '1', '9', 'Karangmiri', 'Baleraksa', 'Kec. Karangmoncol', 'Agus Tiawan', 'Marfungah', '0057222253.jpg'),
('0057244528', 8, 'Umi Laellatul Rohmah', 'P', 'PURBALINGGA', '2005-08-04', '3303134408050001', 'Islam', 'JL. CURUG', '5', '1', '1', 'TANALUM', 'Kec. Rembang', 'ALI PRIANTO', 'JAMIAH', '0057244528.jpg'),
('0057281284', 8, 'Ekarani Saputri', 'P', 'PURBALINGGA', '2005-01-24', '3303132401040001', 'Islam', 'Tanalum,', '3', '1', '', 'Tanalum', 'Kec. Rembang', 'Rustami', 'Nenti', '0057281284.jpg'),
('0057393113', 2, 'Aulia Nur Fadillah', 'P', 'Purbalingga', '2005-09-06', '3303144609050001', 'Islam', 'Beji', '16', '8', '', 'Beji', 'Kec. Bojongsari', 'Mad Riyanto Al Amad', 'Sarinah', '0057393113.jpg'),
('0057413205', 4, 'Yesi Agustin', 'P', 'Purbalingga', '2005-08-17', '3303185708050001', 'Islam', 'Karangpule', '4', '1', 'Karangpule', 'Karangpucung', 'Kec. Kertanegara', 'Eko Purwanto', 'Sri Pamuji', '0057413205.jpg'),
('0057741545', 4, 'Yulia Wulansari', 'P', 'Purbalingga', '2005-07-06', '3303061607050002', 'Islam', 'Cipaku', '1', '6', 'SIWADAS', 'Cipaku', 'Kec. Mrebet', 'SARIKUN', 'SULASIH', '0057741545.jpg'),
('0057768267', 3, 'Melly Rahmawati', 'P', 'purbalingga', '2005-05-28', '3303146805050002', 'Islam', 'Bojongsari RT 1 RW 11', '1', '1', '', 'Bojongsari', 'Kec. Bojongsari', 'Parsito', 'Purwati', '0057768267.jpg'),
('0057935269', 10, 'Rismawanti Utami', 'P', 'Purbalingga', '2005-01-02', '3303084201050005', 'Islam', 'Dukuh Kecomberan', '6', '2', '', 'Pengalusan', 'Kec. Mrebet', 'Herman', 'Subur Prianti', '0057935269.jpg'),
('0058095548', 3, 'Dwi Ratna Wulandari', 'P', 'Tanggerang', '2005-05-14', '3303085405050004', 'Islam', 'Guyung Kedungrejo RT 02 RW 04', '2', '3', '', 'Guyung Kedungrejo', 'Kec. Gerih', 'Puji manfaat', 'Darni', '0058095548.jpg'),
('0058119133', 3, 'Asah Bintang Tri Pawelas', 'P', 'PURBALINGGA', '2005-03-10', '3303090406000002', 'Islam', 'Limbasari', '1', '4', 'Limbasari', 'Limbasari', 'Kec. Bobotsari', 'M. Pringgo Suwono', 'SUPRIYATI', '0058119133.jpg'),
('0058527351', 10, 'Selly Puspitasari', 'P', 'PURBALINGGA', '2005-06-10', '3303085006050004', 'Islam', 'JALAN61', '0', '0', 'DESA61', 'DESA61', 'Kec. Mrebet', 'RUSMAN', 'ROHYATI', '0058527351.jpg'),
('0058663615', 1, 'Amar Finatul Rohmah', 'P', 'PURBALINGGA', '2006-03-05', '3303080815070442', 'Islam', 'JALAN43', '0', '0', '', 'DESA43', 'Kec. Mrebet', 'MISWANTO', 'SARPIYAH', '0058663615.jpg'),
('0058860789', 12, 'Tri Rahayu', 'P', 'Purbalingga', '2005-07-30', '3303117007050002', 'Islam', 'Maribaya', '7', '1', '', 'Maribaya', 'Kec. Karanganyar', 'Wiyoto', 'Suheti', '0058860789.jpg'),
('0058872957', 6, 'Arum Dwi Nurhidayah', 'P', 'Purbalingga', '2005-06-04', '3303084406050001', 'Islam', 'Cipaku RT 04 RW 08', '4', '8', '', 'Cipaku', 'Kec. Mrebet', 'Suyatno', 'Suentri', '0058872957.jpg'),
('0059056246', 4, 'Maharani Nur Cahyaning', 'P', 'Purbalingga', '2005-06-14', '3303075406050002', 'Islam', 'Karanglewas', '7', '3', '', 'Karanglewas', 'Kec. Kutasari', 'Suharyati', 'Suharyati', '0059056246.jpg'),
('0059224722', 7, 'Eka Febrianti', 'P', 'Purbalingga', '2006-02-25', '3303086502060001', 'Islam', 'Sangkanayu', '12', '4', 'Dusun 2', 'Sangkanayu', 'Kec. Mrebet', 'Surahman', 'Siti Baro\'ah', '0059224722.jpg'),
('0059257133', 10, 'Filda Dimas Santosa', 'L', 'Purbalingga', '2005-06-27', '3303122706050004', 'Islam', 'Tamansari', '1', '17', '', 'Tamansari', 'Kec. Karangmoncol', 'Suwanto', 'Poniyah', '0059257133.jpg'),
('0059369663', 4, 'Rahayu Setiani', 'P', 'Purbalingga', '2005-04-04', '3303144404050002', 'Islam', 'Beji', '19', '8', '', 'Beji', 'Kec. Bojongsari', 'Susmianto Aswin', 'Kaswati', '0059369663.jpg'),
('0059422817', 9, 'Atta Wahyu Pratama', 'P', 'Banjarnegara', '2005-04-05', '3304120504050003', 'Islam', 'Karangjambe', '2', '1', 'Karangjambe', 'Pandanarum', 'Kec. Pandanarum', 'Haerul', 'Sulisyati', '0059422817.jpg'),
('0059507408', 10, 'Vela Dwi Mareta', 'P', 'Purbalingga', '2005-03-05', '3303044503050001', 'Islam', 'Brecek', '2', '2', 'brecek', 'Brecek', 'Kec. Kaligondang', 'Yuli Masriman', 'Aryatin', '0059507408.jpg'),
('0059626458', 4, 'Eli Sholihah', 'P', 'Purbalingga', '2005-02-06', '3303124602050001', 'Islam', 'Jl. Raya Grugul', '22', '8', 'Mergasa', 'Rajawana', 'Kec. Karangmoncol', 'Daryo Muktiarto', 'Daimah', '0059626458.jpg'),
('0059700324', 3, 'Elsa Nanda Pratama', 'P', 'Purbalingga', '2005-09-26', '3303086609050005', 'Islam', 'Ki Tepus Rumput', '2', '3', '', 'Onje', 'Kec. Mrebet', 'Muhammad Riki Riyan', 'Murniyati', '0059700324.jpg'),
('0059717915', 9, 'Eka Septiani', 'P', 'PURBALINGGA', '2005-09-03', '3303084309050002', 'Islam', 'BINANGUN', '5', '1', '', 'BINANGUN', 'Kec. Mrebet', 'SARWONO', 'KATIAH', '0059717915.jpg'),
('0059807196', 8, 'Devi Setyawati', 'P', 'PURBALINGGA', '2006-02-09', '3303064902060003', 'Islam', 'Blater', '1', '3', 'Blater', 'Blater', 'Kec. Kalimanah', 'SUKARSO', 'KUSTINI', '0059807196.jpg'),
('0059860354', 3, 'Dina Saputri', 'P', 'Purbalingga', '2005-04-20', '3303096003050002', 'Islam', 'Tlaga', '2', '3', 'Tlagayasa', 'Tlagayasa', 'Kec. Bobotsari', 'Jiman', 'Tuspirah', '0059860354.jpg'),
('0061100510', 7, 'Fransiska Dwi Apriliana', 'P', 'Purbalingga', '2006-04-20', '3303136004060003', 'Islam', 'Jl. Raya Serang', '5', '5', '', 'Kutabawa', 'Kec. Karangreja', 'Darningsih', 'Darningsih', '0061100510.jpg'),
('0061146658', 1, 'Mila Kurniawati', 'P', 'Pemalang', '2006-11-19', '3327035911060002', 'Islam', 'Kuta', '10', '3', 'Kuta Kidul', 'Kuta', 'Kec. Belik', 'Caman', 'Kurniati', '0061146658.jpg'),
('0061293141', 7, 'Fadela Tri Anggraeni', 'P', 'PURBALINGGA', '2006-09-25', '3303086509060003', 'Islam', 'KRADENAN', '1', '3', '', 'KRADENAN', 'Kec. Mrebet', 'PAIJO', 'MUTONAH', '0061293141.jpg'),
('0061585049', 1, 'Rosa Prahastiwi', 'P', 'Purbalingga', '2006-06-16', '3303085606060001', 'Islam', 'Cipaku', '2', '7', '', 'Cipaku', 'Kec. Mrebet', 'Suwitno', 'Paini', '0061585049.jpg'),
('0061590168', 2, 'Shafana Azzahra', 'P', 'Purbalingga', '2006-04-26', '33030002180130  ', 'Islam', 'Buara RT 01 RW 02 ', '', '', '', 'Buara', 'Kec. Karanganyar', '', 'Sri Fakhatun ', '0061590168.jpg'),
('0061754607', 1, 'Anggi Yuliani Tiwi', 'P', 'PEMALANG', '2006-11-27', '3327146711060001', 'Islam', 'Jl. Ds Karangmalang', '2', '8', 'Pulasari', 'Karangmalang', 'Kec. Bobotsari', 'Tumadi', 'Titi Mudnah', '0061754607.jpg'),
('0061831438', 2, 'Kharisma Evelyne Eka Susanto', 'P', 'Pemalang', '2006-11-03', '3327074311060005', 'Kristen', 'Jln. Kol. Sugiri No.36', '1', '7', 'Bobotsari', 'Bobotsari', 'Kec. Bobotsari', 'Arif Susanto', 'Suzana Nur Maya', '0061831438.jpg'),
('0061923669', 2, 'Pramila Rahma Fajriyah', 'P', 'Purbalingga', '2006-07-14', '3303105407060001', 'Islam', 'Serang Rt06/02', '', '', '', 'Serang ', 'Kec. Karangreja', '', 'Kismiyatun', '0061923669.jpg'),
('0062057187', 2, 'Anggun Agustin', 'P', 'PURBALINGGA', '2006-08-27', '3303146708060004', 'Islam', 'Jl. Raya Pekalongan', '2', '3', 'Satu', 'Pekalongan', 'Kec. Bojongsari', 'SITIN', 'SATINI', '0062057187.jpg'),
('0062218304', 8, 'Naura Zahira Nabighoh', 'P', 'PEMALANG', '2006-02-08', '3327034802060001', 'Islam', 'DK.SODONG', '3', '2', 'Dk. Sodong', 'SIKASUR', 'Kec. Belik', 'TARINO', 'RINI', '0062218304.jpg'),
('0062400500', 2, 'Artika Septiana', 'P', 'Purbalingga', '2005-09-05', '3303084509050003', 'Islam', 'Cipaku', '3', '7', '', 'Cipaku', 'Kec. Mrebet', 'SUPANGAT', 'WAHYANI', '0062400500.jpg'),
('0062438464', 1, 'Alfin Helmi Baihaqi', 'L', 'PEMALANG', '2006-07-20', '3327032007060003', 'Islam', 'Beluk', '21', '5', 'Pekutukan', 'Beluk', 'Kec. Belik', 'Sartoro', 'NURUL HAYATI', '0062438464.jpg'),
('0062502408', 2, 'Alika Putri Rahmadania', 'P', 'Purbalingga', '2006-10-06', '3303144610070001', 'Islam', 'Patemon', '1', '8', 'Patemon', 'Patemon', 'Kec. Bojongsari', 'Aji Sutrisno', 'Eti Haryati', '0062502408.jpg'),
('0062526406', 7, 'Rochellina Ruista', 'P', 'PURBALINGGA', '2006-10-23', '3303076310060001', 'Islam', '-', '0', '0', 'Surau', 'Sokoagung', 'Kec. Bagelen', 'RISMONO', 'RUBIYATI', '0062526406.jpg'),
('0062693578', 8, 'Pangestika Tri Rahayu', 'P', 'Purbalingga', '2006-07-23', '3303056307060002', 'Islam', 'Sirongge', '3', '3', '', 'Kembaran Kulon', 'Kec. Purbalingga', 'Lujeng Ismail', 'Mintarsih', '0062693578.jpg'),
('0062753650', 8, 'Maya Karina Candra', 'P', 'PURBALINGGA', '2006-11-21', '3303096111060001', 'Islam', 'Bobotsari', '1', '10', 'Bobotsari', 'Bobotsari', 'Kec. Bobotsari', 'Teguh Supriyanto', 'NUR FITRIANI', '0062753650.jpg'),
('0062998324', 7, 'Aulia Diah Saputri', 'P', 'Purbalingga', '2006-05-11', '3303075105060002', 'Islam', 'Meri', '7', '3', 'Meri', 'Meri', 'Kec. Kutasari', 'Rasiman', 'Dasimah', '0062998324.jpg'),
('0063049568', 1, 'Mutia Dwi Amanda', 'P', 'Purbalingga', '2006-12-15', '3303115512060001', 'Islam', 'Jalan Raya Buara', '2', '3', '', 'Buara', 'Kec. Karanganyar', 'Miswadi', 'Rochyati', '0063049568.jpg'),
('0063246267', 8, 'Desi Ayu Lestari', 'P', 'Bekasi', '2006-01-29', '1802046901060002', 'Islam', 'Jl. Raya Cipaku', '3', '5', 'Siwadas', 'Cipaku', 'Kec. Mrebet', 'DEDE BURHANUDIN', 'Ana Ashyva', '0063246267.jpg'),
('0063292907', 1, 'Zalzabila Rahma Nur Fitria', 'P', 'Purbalingga', '2006-10-24', 'NULL            ', 'Islam', 'Sangkanayu Rt 12 Rw 04 Mrebet Purbalingga', '', '', '', 'Sangkanayu', 'Kec. Mrebet', '', 'Wigiyanti', '0063292907.jpg'),
('0063736458', 7, 'Nia Okta Ramadhani', 'P', 'PURBALINGGA', '2006-10-06', '3303084610060007', 'Islam', 'Tangkisan', '1', '5', 'TANGKISAN', 'TANGKISAN', 'Kec. Mrebet', 'Ali Muntorid', 'Rohyatun', '0063736458.jpg'),
('0063744707', 2, 'Munasifatul Khoeriah', 'P', 'Purbalingga', '2006-03-22', '3303126203060001', 'Islam', 'Baleraksa, karang miri Rt 01 Rw 09', '1', '8', '', 'Baleraksa', 'Kec. Karangmoncol', '', 'Rumiyati', '0063744707.jpg'),
('0063938699', 9, 'Anisa', 'P', 'purbalingga', '2006-04-24', '3303116404060001', 'Islam', 'Kabunderan RT 04 RW 01', '4', '1', '', 'Kabunderan', 'Kec. Karanganyar', 'MISWADI', 'Ruminah ', '0063938699.jpg'),
('0064014096', 10, 'Livia Ayu Laraswati', 'P', 'Serang Banten', '2006-01-01', '3303094101060001', 'Islam', 'Talagening', '3', '6', 'Talagening', 'Talagening', 'Kec. Bobotsari', 'SUHIM', 'Widanarti', '0064014096.jpg'),
('0064159364', 7, 'Defa Cika Febriani', 'P', 'Purbalingga', '2006-02-17', '3303095702060001', 'Islam', 'Dagan', '1', '6', '', 'Dagan', 'Kec. Bobotsari', 'Taryono', 'Ernawati', '0064159364.jpg'),
('0064196471', 8, 'Safitri Noviana', 'P', 'Purbalingga', '2006-11-03', '3303114311060002', 'Islam', 'Brakas,Karanganyar,Purbalingga', '2', '1', 'Brakas', 'Brakas', 'Kec. Karanganyar', 'Muhidin', 'Warsiti', '0064196471.jpg'),
('0064264601', 7, 'Deni Alvina', 'P', 'Purbalingga', '2006-06-28', '3303096006060001', 'Islam', 'Limbasari', '3', '3', 'Limbasari', 'Limbasari', 'Kec. Bobotsari', 'Sugiarto', 'Khadiyah', '0064264601.jpg'),
('0064307256', 2, 'Safinatul Khafidzah', 'P', 'Purbalingga', '2006-12-13', '3303121312060003', 'Islam', 'Baleraksa, karang miri RT 01\\RW 09', '1', '9', '', 'Baleraksa', 'Kec. Karangmoncol', '', 'Irawati', '0064307256.jpg'),
('0064766935', 2, 'Arina Khusna Aini', 'P', 'Purbalingga', '2006-03-24', '3303106403060001', 'Islam', 'Pratin kutabawa RT 6 RW 2', '', '', '', 'kutabawa', 'Kec. Karangreja', '', 'Neni Nuryati', '0064766935.jpg'),
('0064783057', 1, 'Nurul Lailatunisa', 'P', 'Purbalingga', '2006-06-15', '3303105506060001', 'Islam', 'Serang', '2', '4', 'Serang', 'Serang', 'Kec. Karangreja', 'Marsono Tarsid', 'Sartem', '0064783057.jpg'),
('0064944313', 1, 'Kiki Nur Arifin', 'L', 'Pemalang', '2006-03-05', '3327030503060003', 'Islam', 'Mendelem RT 01 RW 09', '', '', '', 'Mendelem ', 'Kec. Belik', '', 'Mutri', '0064944313.jpg'),
('0064972673', 8, 'Eka Sari', 'P', 'PURBALINGGA', '2006-04-08', '3303134804060001', 'Islam', 'Tanalum,', '4', '2', '', 'Tanalum', 'Kec. Rembang', 'Khamto', 'Sulasmi', '0064972673.jpg'),
('0065206205', 3, 'Nur Farchatul Fuada ', 'P', 'purbalingga', '2006-02-12', '3303115202060001', 'Islam', 'Kalijaran Rt 02 Rw 01', '2', '1', '', 'Sokawera ', 'Kec. Karanganyar', 'Sumadi', 'Umiyati', '0065206205.jpg'),
('0065313948', 2, 'Fadillah Agustin', 'P', 'PURBALINGGA', '2006-08-18', '3303095808060001', 'Islam', 'Bobotsari', '1', '10', 'Bobotsari', 'Bobotsari', 'Kec. Bobotsari', 'Masruhi', 'ENDAH SUPRIANTI', '0065313948.jpg'),
('0065322572', 2, 'Mela Novita Sri Rahayu', 'P', 'Purbalingga', '2006-11-01', '3303094111060002', 'Islam', 'Banjarsari', '3', '5', 'Banjarsari', 'Banjarsari', 'Kec. Bobotsari', 'Sri Hartono', 'Satiti Rahayu', '0065322572.jpg'),
('0065343901', 7, 'Sofi Tri Yulihasanah', 'P', 'PURBALINGGA', '2006-07-03', '3303084307060002', 'Islam', 'Karanggan Muda', '3', '2', 'Dusun 1', 'Karanggan', 'Kec. Gunungputri', 'Karyono', 'ROHIMAH', '0065343901.jpg'),
('0065743209', 7, 'Roro Musfikasari', 'P', 'Purbalingga', '2006-09-11', '3303125109060001', 'Islam', 'Serang, desa tunjungmuli, kec.karangmoncol, kab.Purbalingga', '', '', '', 'Tunjungmuli', 'Kec. Karangmoncol', '', 'Khopsiyah', '0065743209.jpg'),
('0065855685', 1, 'Wulan Setyaningrum', 'P', 'PURBALINGGA', '2006-09-16', '3303095609060001', 'Islam', 'Talagening', '1', '3', '', 'Talagening', 'Kec. Bobotsari', 'Kasmono', 'DWI LESTIANA SARI', '0065855685.jpg'),
('0065945006', 7, 'Icha Febri Ristiantika ', 'P', 'Purbalingga', '2006-02-06', '3303084602060003', 'Islam', 'Tangkisan', '2', '7', '', 'Tangkisan', 'Kec. Mrebet', 'Wahyono', 'Turiah', '0065945006.jpg'),
('0066056471', 1, 'Ataya Raiza Rafid', 'L', 'Purbalingga', '2006-01-01', '3303130101060005', 'Islam', 'Ardi Lawet', '1', '3', '', 'Panusupan', 'Kec. Rembang', 'TURNOMO NUR IMAN', 'SULISTIOWATI', '0066056471.jpg'),
('0066278510', 8, 'Sri Ayu Astuti', 'P', 'Purbalingga', '2006-11-11', '3303145111060003', 'Islam', 'Beji', '18', '8', '', 'Beji', 'Kec. Bojongsari', 'Kasdi', 'Puji Sunarsih', '0066278510.jpg'),
('0066406704', 1, 'Haerul Anam', 'L', 'Purbalingga', '2006-10-05', '3303090510060004', 'Islam', 'Jalan Raya Banjarsari', '2', '5', '', 'Banjarsari', 'Kec. Bobotsari', 'Nurihsan Sutrisno', 'Tuminah', '0066406704.jpg'),
('0066988026', 7, 'Luthfi Lustiyani', 'P', 'Purbalingga', '2006-01-22', '3303096201060001', 'Islam', 'Dagan', '2', '3', '', 'Dagan', 'Kec. Bobotsari', 'Sutaryo', 'Supriah', '0066988026.jpg'),
('0067024684', 7, 'Januar Eka Nurhidayah', 'P', 'Purbalingga', '2006-01-14', '3303185401060001', 'Islam', 'Karangtengah', '10', '3', '', 'Karangtengah', 'Kec. Kertanegara', 'Agung Barokah', 'Nasiti', '0067024684.jpg'),
('0067101037', 1, 'Bunga Wahyuni', 'P', 'Purbalingga', '2006-03-30', '3303097003060004', 'Islam', 'Karangmalang', '2', '4', 'Karangmalang', 'Karangmalang', 'Kec. Bobotsari', 'Samingin', 'Suweni', '0067101037.jpg'),
('0067165021', 7, 'Azah Nur Rahayu', 'P', 'Purbalingga', '2006-11-26', '3303146611060002', 'Islam', 'Metenggeng', '4', '2', '', 'Metenggeng', 'Kec. Bojongsari', 'Suwarto', 'Tursini', '0067165021.jpg'),
('0067232497', 7, 'Winda Indriani', 'P', 'Purbalingga', '2006-03-23', '3303076303060001', 'Islam', 'KARANGCEGAK', '4', '2', 'KARANGCEGAK', 'KARANGCEGAK', 'Kec. Kutasari', 'Kholidin Al Wachirun', 'Tursiati', '0067232497.jpg'),
('0067358881', 8, 'Kheizka Kairana Zahira Putri', 'P', 'Purbalingga', '2006-05-09', '3303184905060003', 'Islam', 'Darma, Rt 01/02, kec.Kertanegara,Kab Purbalingga ', '', '', '', 'Darma', 'Kec. Kertanegara', '', 'Cahya Kurniyati', '0067358881.jpg'),
('0067410907', 1, 'Siti Dira Ayunda', 'P', 'Purbalingga', '2006-07-29', '3303146907060001', 'Islam', 'Beji RT 12 RW 6', '', '', '', 'Beji', 'Kec. Bojongsari', '', 'Ida Marlina', '0067410907.jpg'),
('0067627582', 8, 'Andri Kurniawan', 'L', 'Purbalingga', '2006-09-08', '3303120809060003', 'Islam', 'Baleraksa', '4', '6', '', 'Baleraksa', 'Kec. Karangmoncol', 'HENDRA', 'KHUSMIYATI', '0067627582.jpg'),
('0067690118', 7, 'Oktaviana Rahmadhani', 'P', 'Purbalingga', '2006-10-16', '3303075610060003', 'Islam', 'Candiwulan', '15', '6', '', 'Candiwulan', 'Kec. Kutasari', 'Manto', 'W. Winarti', '0067690118.jpg'),
('0067791943', 7, 'Mila Nur Aini', 'P', 'Purbalingga', '2006-07-24', '3303126407060002', 'Islam', 'Celeleng Karangsari RT 02 RW 05', '', '', '', 'Karangsari', 'Kec. Karangmoncol', '', 'Niken Sutrisni', '0067791943.jpg'),
('0068351090', 10, 'Dwi Aulia Yulisa', 'P', 'Purbalingga', '2006-01-26', '3303086601060001', 'Islam', 'Sangkanayu', '17', '5', 'Kadus 3', 'Sangkanayu', 'Kec. Mrebet', 'Sugiono', 'Suryaningsih', '0068351090.jpg'),
('0068378761', 1, 'Silfiani Agustin', 'P', 'Purbalingga', '2006-08-09', '3303144908060001', 'Islam', 'Patemon', '2', '7', 'patemon', 'Patemon', 'Kec. Bojongsari', 'Gianto', 'Tri Hartini', '0068378761.jpg'),
('0068450151', 1, 'Ria Finola Putri Juliandani', 'P', 'PURBALINGGA', '2006-07-21', '3674036107060006', 'Islam', 'Pengalusan', '5', '3', '', 'Pengalusan', 'Kec. Mrebet', 'AGUS SALIM', 'ROFIAH', '0068450151.jpg'),
('0068486913', 1, 'Puspita Setyaningtias', 'P', 'PURBALINGGA', '2006-08-07', '3303034708060005', 'Islam', 'NANGKASAWIT', '1', '1', '', 'NANGKASAWIT', 'Kec. Kejobong', 'TRI ATMOKO', 'TITIN HARTATI', '0068486913.jpg'),
('0068506998', 4, 'Aprizia Bunga Khalawah', 'P', 'purbalingga', '2006-04-09', '3303114404060001', 'Islam', 'Maribaya RT 01 RW 03', '1', '3', '', 'Maribaya', 'Kec. Karanganyar', 'Hadi Prayitno', 'MARKAMAH', '0068506998.jpg'),
('0068650975', 7, 'Isnatun Nuraeni', 'P', 'PEMALANG', '2006-04-18', '3327045804060002', 'Islam', 'CIKADU', '12', '2', '', 'CIKADU', 'Kec. Watukumpul', 'DAHURI', 'TUSRI', '0068650975.jpg'),
('0068658461', 1, 'Anis Nur Rokhmah', 'P', 'PURBALINGGA', '2006-09-25', '3303046509060002', 'Islam', 'Jalan Raya Langgar', '3', '8', '', 'Langgar', 'Kec. Kejobong', 'MUGIONO', 'PURI ASTUTI', '0068658461.jpg'),
('0068707382', 1, 'Adila Salsabila Putri', 'P', 'Banyumas', '2006-03-15', '3302265503060001', 'Islam', 'Cluster Ciberem Indah Blok A/4 Rt 07 Rw 01', '', '', '', 'Ciberem', 'Kec. Sumbang', '', 'Indriyanti', '0068707382.jpg'),
('0068986668', 8, 'Iyan Novita Sari', 'P', 'PURBALINGGA', '2006-11-24', '3303126411060001', 'Islam', 'TUNJUNGMULI', '', '', '', 'TUNJUNGMULI', 'Kec. Karangmoncol', 'MAKMUR', 'SUWARNI', '0068986668.jpg'),
('0069197355', 8, 'Apriyana Wardatul Nur Arofah', 'P', 'Purbalingga', '2006-04-15', '3303038550460001', 'Islam', 'Onje Rt01 Rw07', '', '', '', 'Onje', 'Kec. Mrebet', '', 'SODIYAH', '0069197355.jpg'),
('0069246264', 7, 'Najwa Salsabila', 'P', 'Purbalingga', '2006-01-15', '3303125501060003', 'Islam', 'Baleraksa RT 03 RW 05', '3', '3', '', 'Baleraksa', 'Kec. Karangmoncol', '', 'Siti Aniroh', '0069246264.jpg'),
('0069321072', 7, 'Rindika Olivia Rolida Annafi', 'P', 'Purbalingga', '2006-06-25', '3303056506060001', 'Islam', 'Jalan Onje RT 01 / RW 06 Purbalingga Lor, Purbalingga', '1', '6', '', 'Purbalingga Lor', 'Kec. Purbalingga', 'Tri Haryanto', 'Yuliana', '0069321072.jpg'),
('0069463874', 1, 'Arlia Ananda', 'P', 'Banyumas', '2006-09-12', '3302175209060003', 'Islam', 'Panusupan RT 6 RW 3', '6', '3', 'LEGOK', 'Panusupan', 'Kec. Cilongok', 'SOIM', 'Warsini', '0069463874.jpg'),
('0069488617', 2, 'Szuliyana Aszahro', 'P', 'Purbalingga', '2006-06-08', '3303094806060002', 'Islam', 'Banjarsari', '1', '2', 'Banjarsari', 'Banjarsari', 'Kec. Bobotsari', 'Sutrisno', 'Turyanti', '0069488617.jpg'),
('0069501846', 1, 'Andika Dwi Cahyo', 'L', 'Purbalingga', '2006-03-11', '3303080607730002', 'Islam', 'Tangkisan', '2', '7', '', 'Tangkisan', 'Kec. Mrebet', 'Khadimin', 'Tukiah', '0069501846.jpg'),
('0069710537', 8, 'Ricardo Arya Bayu', 'L', 'PURBALINGGA', '2006-03-23', '3303182303060001', 'Islam', 'BANJARSARI', '1', '2', '', 'BANJARSARI', 'Kec. Bantarbolang', 'PRAYITNO', 'KASIYAH', '0069710537.jpg'),
('0069748839', 8, 'Yodha Setyawan', 'L', 'Purbalingga', '2006-04-25', '3303082504060004', 'Islam', 'Sindang', '3', '6', 'Sindang', 'Sindang', 'Kec. Mrebet', 'RISNO', 'Turnafsiyah', '0069748839.jpg'),
('0069813341', 2, 'Zalfa Adinda Tazkia', 'P', 'PEMALANG', '2006-02-28', '3327046802060003', 'Islam', 'WATUKUMPUL', '4', '4', '', 'WATUKUMPUL', 'Kec. Watukumpul', 'JUNAEDI', 'TUTI WIDIANI', '0069813341.jpg'),
('0069890796', 8, 'Hizi Nurfariza', 'P', 'Purbalingga', '2006-10-29', '3303086810060004', 'Islam', 'Serayu Karanganyar', '4', '3', 'Serayu Karanganyar', 'Serayu Karanganyar', 'Kec. Mrebet', 'Teguh Subagyo', 'Antin Kristianingsih', '0069890796.jpg'),
('0069941596', 4, 'Nur Fidiya Putri', 'P', 'Purbalingga', '2006-01-25', '3303116501060001', 'Islam', 'Maribaya', '2', '2', '', 'Maribaya', 'Kec. Karanganyar', 'Nasirwan', 'SOPIYAH', '0069941596.jpg'),
('0071292209', 1, 'Elisa Dwi Cahyani', 'P', 'PEMALANG', '2007-02-15', '3327035502070008', 'Islam', 'Beluk', '31', '7', 'Krajan', 'Beluk', 'Kec. Belik', 'Suratno', 'Tri Antep', '0071292209.jpg'),
('0072359459', 10, 'Iqlima Lulu Nadhiroh', 'P', 'PURBALINGGA', '2005-04-03', '3303094304050001', 'Islam', 'KARANGDUREN', '1', '1', '', 'KARANGDUREN', 'Kec. Bobotsari', 'MUFIDIN', 'KASINAH', '0072359459.jpg'),
('0072389617', 7, 'Adellia', 'P', 'Pemalang', '2007-07-07', '3327034707070008', 'Islam', 'Belik RT 01 RW 04 ', '1', '2', '', 'Belik', 'Kec. Belik', '', 'Kurniati', '0072389617.jpg'),
('0072739758', 12, 'Yanuar Nur Hidayanti', 'P', 'Purbalingga', '2004-01-10', '3303095504040002', 'Islam', 'Bobotsari RT 03 RW 08', '3', '8', '', 'Bobotsari', 'Kec. Bobotsari', 'Suryanto', 'Sunarti', '0072739758.jpg'),
('0073061220', 12, 'Tyas Wulan Anggriani', 'P', 'PURBALINGGA', '2003-06-27', '3303096706030002', 'Islam', 'MAJAPURA', '2', '2', 'MAJAPURA', 'MAJAPURA', 'Kec. Bobotsari', 'HOFUR', 'SEPTIANI AJININGSIH', '0073061220.jpg'),
('0073600974', 2, 'Ananda Zaskia', 'P', 'Purbalingga', '2007-02-14', '3303085402070001', 'Islam', 'Sangkanayu', '11', '4', 'Kadus 2', 'Sangkanayu', 'Kec. Mrebet', 'Sunar', 'Jurmiyah', '0073600974.jpg'),
('0073817360', 8, 'Aghnia Sabila Najwa', 'P', 'Purbalingga', '2007-01-26', '3303116601070003', 'Islam', 'Kalijaran RT 02 RW 04', '2', '2', '', 'Kalijaran', 'Kec. Karanganyar', '', 'Ulwiyatun choerotun nisa', '0073817360.jpg'),
('0074189715', 2, 'Niken Ayu Cahyaningtyas', 'P', 'Purbalingga', '2007-01-12', '3303085201070002', 'Islam', 'Jl. Ds Tangkisan', '1', '4', 'TANGKISAN', 'TANGKISAN', 'Kec. Mrebet', 'Muhamad Soleh', 'Miswati', '0074189715.jpg'),
('0074222577', 2, 'Nur Adnan Sawaludin', 'L', 'PURBALINGGA', '2005-11-07', '3303090711050002', 'Islam', 'BOBOTSARI', '1', '12', '', 'BOBOTSARI', 'Kec. Bobotsari', 'NASIRUN', 'RATINI', '0074222577.jpg'),
('0076056733', 4, 'Dimas Tri Prabowo', 'L', 'Purbalingga', '2004-12-30', '3303093012040001', 'Islam', 'Pakuncen ', '4', '1', 'Pakuncen ', 'Pakuncen', 'Kec. Bobotsari', 'Jono Sapto Prabowo', 'Sujatmi', '0076056733.jpg'),
('0077322902', 2, 'Fildzah Amelia Putri', 'P', 'PURBALINGGA', '2007-02-01', '3303074102070004', 'Islam', 'Jalan Karangjengkol', '8', '3', '', 'Karangjengkol', 'Kec. Kutasari', 'JUMIN', 'MUMUN', '0077322902.jpg'),
('0077841683', 7, 'Takhiya Rahmanisya', 'P', 'Purbalingga', '2007-05-01', '3303114105070004', 'Islam', 'Maribaya RT 04 RW 03', '', '', '', 'Maribaya', 'Kec. Karanganyar', '', 'Sairah', '0077841683.jpg'),
('0078343643', 12, 'Alya Khoirul Nisah', 'P', 'purbalingga', '2003-03-24', '3303096303030003', 'Islam', 'Majapura RT 01 RW 08', '1', '8', '', 'Majapura', 'Kec. Bobotsari', 'Wahib', 'Maret Puji Utami', '0078343643.jpg'),
('0078732188', 8, 'Rizky Dani Abdillah', 'L', 'Tangerang', '2007-08-17', '3674061708070002', 'Islam', 'Karangasem', '4', '5', '', 'Karangasem', 'Kec. Kertanegara', 'Dasiman', 'Saripah', '0078732188.jpg'),
('0079100534', 7, 'Andini Aprilia', 'P', 'PURBALINGGA', '2007-04-01', '3303084104070001', 'Islam', 'Tangkisan', '1', '3', '', 'Tangkisan', 'Kec. Mrebet', 'SUDIYANTO', 'TUGIMAH', '0079100534.jpg'),
('0079151886', 2, 'Emi Aulia', 'P', 'Purbalingga', '2007-05-08', 'NULL            ', 'Islam', 'Karangjengkol Rt 14 Rw 04 Kutasari Purbalingga', '', '', '', 'Karangjengkol', 'Kec. Kutasari', '', 'Misem', '0079151886.jpg'),
('0088442950', 7, 'Maulida Nurohmah', 'P', 'Purbalingga', '2008-04-02', '3303084204080003', 'Islam', 'Pengalusan', '3', '1', '', 'Pengalusan', 'Kec. Mrebet', 'Narwono', 'Sumiati', '0088442950.jpg'),
('3032293086', 5, 'Anis Safitri', 'P', 'Purbalingga', '2003-02-09', '3303144902030003', 'Islam', 'Bojongsari RT 01 RW 01', '1', '1', '', 'Bojongsari', 'Kec. Bojongsari', 'Misri', 'Suwanti', '3032293086.jpg'),
('3033277259', 3, 'Arif Bachtiar Luthfi', 'L', 'purbalingga', '2003-07-06', '3303140607030004', 'Islam', 'Gembong RT 03 RW 02', '3', '2', '', 'Gembong', 'Kec. Bojongsari', 'Rasmo', 'NURHIKMAH', '3033277259.jpg'),
('3040320018', 3, 'Selfiatun Saputri', 'P', 'purbalingga', '2004-12-21', '3303146112040002', 'Islam', 'Bumisari', '1', '1', '', 'Bumisari', 'Kec. Bojongsari', 'Turyanto Karjono', 'Turyinah', '3040320018.jpg'),
('3042814090', 9, 'Annisa Muktinti', 'P', 'Purbalingga', '2004-11-22', '3303146211040001', 'Islam', 'Karangbanjar dusun karangsempu Rt 20 Rw 08', '20', '8', '', 'KarangBanjar', 'Kec. Bojongsari', 'Suparman', 'Wasiti', '3042814090.jpg'),
('3043221609', 10, 'Susi Yati Amin', 'P', 'Lampung Timur', '2004-09-20', '1807136009040002', 'Islam', 'PURBALINGGA LOR RT 01 RW 06 JLN ONJE NO 2', '', '', '', 'Purbalingga lor', 'Kec. Purbalingga', 'JUMADI ANWAR', 'Siti Komariyah', '3043221609.jpg'),
('3043768339', 10, 'Novita', 'P', 'Pemalang', '2004-11-15', '3327035511040006', 'Islam', 'Karangjambu', '', '', '', 'Bandingan', 'Kec. Karangjambu', 'Dakim', 'Aisah', '3043768339.jpg'),
('3045240527', 10, 'Anisa Irma', 'P', 'Purbalingga ', '2004-09-05', '3303114509040001', 'Islam', 'Kalijaran RT 02 RW 04', '2', '4', '', 'Kalijaran', 'Kec. Karanganyar', 'Kusnadi', 'Tusiyah', '3045240527.jpg'),
('3046094999', 4, 'Noviyanti', 'P', 'purbalingga', '2004-11-06', '3303084611030002', 'Islam', 'Selaganggeng RT 03 RW 01', '3', '1', '', 'Selaganggeng', 'Kec. Mrebet', 'Bekti Susanto', 'Rustianti', '3046094999.jpg'),
('3047807254', 11, 'Fariska Maulani', 'P', 'Purbalingga', '2004-10-05', '3303184510040001', 'Islam', 'Mergasana RT 04 RW01', '4', '1', '', 'Mergasana', 'Kec. Kertanegara', 'Achmad Sodeli', 'Turijah', '3047807254.jpg'),
('3048966582', 6, 'Nita Wulandari', 'P', 'Purbalingga', '2004-09-05', '3303084508040001', 'Islam', 'Karangnangka Rt 03 Rw 04', '3', '4', '', 'Karangnangka', 'Kec. Mrebet', 'Warsito', 'Maniti', '3048966582.jpg'),
('3049619083', 10, 'Elza Monita Nur Istiqomah Priyanto', 'P', 'purbalingga', '2004-12-15', '3303034111010001', 'Islam', 'Nangkasawit RT 01 RW 01', '1', '1', '', 'Nangkasawit', 'Kec. Kejobong', 'Welas priyanto', 'Suparti', '3049619083.jpg'),
('3052324047', 3, 'Prima Dina Lestari', 'P', 'purbalingga', '2005-05-04', '3303124405050001', 'Islam', 'Bantarwaru RT 01 RW 017', '1', '16', '', 'Tamansari', 'Kec. Karangmoncol', 'Sutarno', 'Muslimah', '3052324047.jpg'),
('3053088182', 3, 'Mahendra Hibban Ulinuha', 'L', 'purbalingga', '2005-05-01', '3303140105050001', 'Islam', 'Gembong RT 02 RW 01', '2', '1', '', 'Gembong', 'Kec. Bojongsari', 'Slamet Sumardono', 'SITI KHAMDIYAH', '3053088182.jpg'),
('3053473349', 3, 'Rahayu Irianti', 'P', 'purbalingga', '2005-05-08', '3303054805050001', 'Islam', 'Karanglewas RT 10 RW 05', '', '', '', 'Karanglewas', 'Kec. Kutasari', 'Budiyono', 'Umi Sukirah', '3053473349.jpg'),
('3055925437', 1, 'Ayu Natalia', 'P', 'Purbalingga', '2005-12-24', '3303146912050001', 'Islam', 'Jalan Kolonel Sugiri No. 88 Bobotsari', '', '', '', 'Bojongsari RT 3 RW 2', 'Kec. Bojongsari', '', 'Sutrisni', '3055925437.jpg'),
('3057340498', 10, 'Elsa Safitri', 'P', 'purbalingga', '2005-07-30', '3303127007030001', 'Islam', 'Kaliputih', '', '', '', 'Karangsari', 'Kec. Karangmoncol', 'Akhmad Khamidin', 'Sartini', '3057340498.jpg'),
('3057803082', 4, 'Denis Anggraeni Setiya Ningrum', 'P', 'PURBALINGGA', '2005-09-22', '3303086209050001', 'Islam', 'PENGALUSAN', '7', '1', '', 'PENGALUSAN', 'Kec. Mrebet', 'KADIS', 'SETIYANI', '3057803082.jpg'),
('3058898543', 3, 'Syifa Azizah Saputri', 'P', 'purbalingga', '2005-11-03', '3303144311050003', 'Islam', 'Patemon RT 01 RW 08', '1', '8', '', 'Patemon', 'Kec. Bojongsari', 'Suprianto', 'Ana Rosanti', '3058898543.jpg'),
('3059501526', 9, 'Aulia Nur Amaliyana', 'P', 'Pemalang', '2005-08-15', '3327035509050003', 'Islam', 'Belik', '', '', '', 'Belik', 'Kec. Belik', 'Karyono', 'Yatni', '3059501526.jpg'),
('3059630693', 9, 'Sekar Arum', 'P', 'BEKASI', '2005-06-02', '3303084402050001', 'Islam', 'BINANGUN', '6', '1', '', 'BINANGUN', 'Kec. Mrebet', 'PUJI NUGROHO', 'SURYATI', '3059630693.jpg'),
('3064291766', 1, 'Fara Zuliana', 'P', 'Purbalingga', '2006-01-07', '3303144107060009', 'Islam', 'Patemon RT 01 RW 08', '', '', '', 'Patemon ', 'Kec. Bojongsari', '', 'Tuti', '3064291766.jpg'),
('3065114774', 2, 'Edison Dilga Pramana', 'L', 'Purbalingga', '2006-07-29', '3303132907060006', 'Islam', 'Panusupan rt 01 / Rw 010', '1', '10', 'Pagelaran', 'Panusupan', 'Kec. Rembang', 'Erwin Mulgiono', 'Runita', '3065114774.jpg'),
('3076797809', 2, 'Siti Kholiyah', 'P', 'Purbalingga', '2007-05-08', 'NULL            ', 'Islam', 'Serang Rt 06 Rw 02 Karangreja Purbalingga', '', '', '', 'Serang', 'Kec. Karangreja', '', 'Wasmirah', '3076797809.jpg'),
('3900307398', 9, 'Syaifi Fadilla', 'P', 'Purbalingga', '2005-01-27', '3303181203080003', 'Islam', 'Karang tengah', '', '', '', 'Karang tengah', 'Kec. Kertanegara', 'Ali Mahfud', 'Tasriah', '3900307398.jpg'),
('3909894533', 9, 'Sherly N Pratama', 'P', 'purbalingga', '2004-11-21', '3303122111040001', 'Islam', 'Karangsari RT 02 RW 07', '2', '7', '', 'Celeleng', 'Kec. Karangmoncol', 'Muldiyanto', 'Ida Farida', '3909894533.jpg'),
('9999027115', 9, 'Adinda Efriliana', 'P', 'Purbalingga', '2006-04-24', '3303086404060003', 'Islam', 'Serayukaranganyar', '5', '3', '', 'Serayukaranganyar', 'Kec. Mrebet', 'Kusisno', 'Enti Sukesih', '9999027115.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` char(6) NOT NULL,
  `id_ddc` int(11) NOT NULL,
  `id_jenisbuku` int(11) NOT NULL,
  `id_sumberbuku` int(11) NOT NULL,
  `id_kategoribuku` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `isbn` varchar(17) NOT NULL,
  `buku_kelas` enum('X','XI','XII') NOT NULL,
  `thn_terbit` year(4) NOT NULL,
  `tinggi_buku` int(3) NOT NULL,
  `tgl_penerimaan` date NOT NULL,
  `jml_halaman` int(4) NOT NULL,
  `jml_eksemplar` int(4) NOT NULL,
  `stok_buku` int(4) NOT NULL,
  `rak_buku` varchar(3) NOT NULL,
  `gambar_buku` char(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `id_ddc`, `id_jenisbuku`, `id_sumberbuku`, `id_kategoribuku`, `judul_buku`, `penerbit`, `pengarang`, `isbn`, `buku_kelas`, `thn_terbit`, `tinggi_buku`, `tgl_penerimaan`, `jml_halaman`, `jml_eksemplar`, `stok_buku`, `rak_buku`, `gambar_buku`) VALUES
('B00001', 18, 2, 2, 1, 'Farmakologi Jilid 1', 'Pilar Utama Mandiri', 'Nur Salimi Dwi Sakti, S. Far, Apt dkk', '978-602-6220-61-5', 'XI', 2017, 25, '0000-00-00', 140, 140, 22, '1', 'B00001.jpg'),
('B00002', 18, 2, 1, 1, 'Farmakologi Jilid 2', 'Pilar Utama Mandiri', 'Rahayu Prihatin, S. Far., Apt dkk', '978-602-6220-62-2', 'XII', 2018, 25, '0000-00-00', 70, 70, 31, '1', 'B00002.jpg'),
('B00003', 18, 2, 1, 1, 'Tanaman Obat Indonesia ', 'Pilar Utama Mandiri', 'Abdur Rahman,S.Si., Apt dkk', '978-602-6220-53-0', 'XI', 2017, 25, '0000-00-00', 148, 148, 8, '1', 'B00003.jpg'),
('B00004', 18, 2, 1, 1, 'Dasar-Dasar Kefarmasian', 'Pilar Utama Mandiri', 'Hendrik, M. Farm., Apt dkk', '978-602-6220-66-0', 'XI', 2017, 25, '0000-00-00', 156, 156, 26, '1', 'B00004.jpg'),
('B00005', 18, 2, 1, 1, 'Keselamatan Kesehatan Kerja Dan Lingkungan Hidup (K3LH)', 'Pilar Utama Mandiri', 'Heru Widiarto, S. Farm., Apt', '978-602-6220-52-3', 'XI', 2017, 25, '0000-00-00', 128, 128, 31, '1', 'B00005.jpg'),
('B00006', 18, 2, 1, 1, 'Pelayanan Farmasi Jilid 1', 'Pilar Utama Mandiri', 'Abdur Rahman,S.Si., Apt dkk', '978-602-6220-64-6', 'XI', 2018, 25, '0000-00-00', 168, 168, 6, '1', 'B00006.jpg'),
('B00007', 18, 2, 1, 1, 'Pelayanan Farmasi Jilid 2', 'Pilar Utama Mandiri', 'Fitri sholechah, s. Farm., Apt dkk', '978-602-6220-65-3', 'XII', 2018, 25, '0000-00-00', 140, 140, 54, '1', 'B00007.jpg'),
('B00008', 18, 2, 1, 1, 'Farmakognonsi', 'Pilar Utama Mandiri', 'Supriani, M Sc., Apt dkk', '978-602-6220-55-4', 'XI', 2018, 25, '0000-00-00', 132, 132, 26, '1', 'B00008.jpg'),
('B00009', 18, 2, 1, 1, 'Kimia Farmasi Jilid 1', 'Pilar Utama Mandiri', 'Ardi Yuli Wardani, S.si dkk', '978-602-6220-57-8', 'XI', 2018, 25, '0000-00-00', 76, 76, 8, '1', 'B00009.jpg'),
('B00010', 18, 2, 1, 1, 'Perundang-Undangan Kesehatan', 'Pilar Utama Mandiri', 'Arip, S.Farm., Apt dkk', '978-602-6220-51-6', 'XI', 2017, 25, '0000-00-00', 154, 154, 61, '1', 'B00010.jpg'),
('B00011', 18, 2, 1, 1, 'Modul Menerapkan Pembuatan Sediaan Obat sesuai resep dokter dibawah pengawasan apoteker             ', 'Erlangga', 'Maryani, S.Farm., Apt', '978-602-241-315-8', 'XI', 2013, 26, '0000-00-00', 61, 61, 35, '1', 'B00011.jpg'),
('B00012', 18, 2, 1, 1, 'Melaksanakan Kerjasama dengan Kolega dan Pelanggan', 'Erlangga', 'Sri Muharni dkk', '978-602-298-656-0', 'XI', 2016, 26, '0000-00-00', 76, 76, 2, '1', 'B00012.jpg'),
('B00013', 18, 2, 1, 1, 'Mendeskripsikan Penggolongan Obat', 'Erlangga', 'Sri Muharni Budiningsih, Apt', '978-602-298-662-5', 'XI', 2016, 26, '0000-00-00', 86, 86, 11, '1', 'B00013.jpg'),
('B00014', 18, 2, 1, 1, 'Memahami Teknik Pembuatan Sediaan Obat dalam Skala Kecil dan Skala Industri Jilid 1', 'Erlangga', 'Maryani, S.Farm., Apt', '978-602-298-532-7', 'XI', 2015, 26, '0000-00-00', 94, 94, 21, '1', 'B00014.jpg'),
('B00015', 17, 2, 1, 1, 'Anatomi Fisiologi', 'Pilar Utama Mandiri', 'Rudi Fahrudin,SMK.,M.Pd', '978-602-6220-35-6', 'XI', 2017, 25, '0000-00-00', 170, 170, 23, '1', 'B00015.jpg'),
('B00016', 17, 2, 1, 1, 'Komunikasi Keperawatan ', 'Pilar Utama Mandiri', 'Supanjiono,S. Kep. Ners dkk', '978-602-6220-14-1', 'XI', 2017, 25, '0000-00-00', 102, 102, 25, '1', 'B00016.jpg'),
('B00017', 17, 2, 1, 1, 'Ilmu Penyakit Dan Penunjang Diagnostik Jilid 1', 'Pilar Utama Mandiri', 'dr. Anggarini Zaenab, MM dkk', '978-602-6220-38-7', 'XI', 2018, 25, '0000-00-00', 148, 148, 2, '1', 'B00017.jpg'),
('B00018', 17, 2, 1, 1, 'Ilmu Penyakit Dan Penunjang Diagnostik Jilid 2', 'Pilar Utama Mandiri', 'dr. Anggarini Zaenab, MM dkk', '978-602-6220-39-4', 'XII', 2018, 25, '0000-00-00', 156, 156, 10, '1', 'B00018.jpg'),
('B00019', 17, 2, 1, 1, 'ilmu Kesehatan Masyarakat', 'Pilar Utama Mandiri', 'Wahyu Sulistiani, S.Kep.Ns', '978-602-6220-36-3', 'XI', 2017, 25, '0000-00-00', 118, 118, 48, '1', 'B00019.jpg'),
('B00020', 17, 2, 1, 1, 'Konsep Dasar Keperawatan  Jilid 1', 'Pilar Utama Mandiri', 'Supanjiono,S. Kep. Ners dkk', '978-602-6220-41-7', 'XI', 2018, 25, '0000-00-00', 2, 2, 22, '1', 'B00020.jpg'),
('B00021', 17, 2, 1, 1, 'Konsep Dasar Keperawatan  Jilid 2', 'Pilar Utama Mandiri', 'Ns. Tuti Asrianti Utam, SE., S.Kep., M.Kep dkk', '978-602-6220-42-5', 'XII', 2018, 25, '0000-00-00', 90, 90, 59, '1', 'B00021.jpg'),
('B00022', 17, 2, 1, 1, 'Konsep Dasar Keperawatan  Jilid 3', 'Pilar Utama Mandiri', 'Ns. Tuti Asrianti Utam, SE., S.Kep., M.Kep dkk', '978-602-6220-43-1', 'XII', 2017, 25, '0000-00-00', 88, 88, 42, '1', 'B00022.jpg'),
('B00023', 17, 2, 1, 1, 'Kebutuhan Dasar Manusia Jilid 1', 'Pilar Utama Mandiri', 'Dewi Puspitasari dkk', '978-602-6220-45-5', 'XI', 2018, 25, '0000-00-00', 94, 94, 2, '1', 'B00023.jpg'),
('B00024', 17, 2, 1, 1, 'Kebutuhan Dasar Manusia Jilid 2', 'Pilar Utama Mandiri', 'Dewi Puspitasari dkk', '978-602-6220-46-2', 'XII', 2017, 25, '0000-00-00', 118, 118, 13, '1', 'B00024.jpg'),
('B00025', 17, 2, 1, 1, 'Ketrampilan Dasar Tindakan Keperawatan Jilid 1', 'Pilar Utama Mandiri', 'Dhanik Tri Hastuti, S.Kep.,Ns dkk', '978-602-6220-48-6', 'X', 2018, 25, '0000-00-00', 140, 140, 4, '1', 'B00025.jpg'),
('B00026', 17, 2, 1, 1, 'Ketrampilan Dasar Tindakan Keperawatan Jilid 2', 'Pilar Utama Mandiri', 'Dhanik Tri Hastuti, S.Kep.,Ns dkk', '978-602-6220-49-3', 'XI', 2018, 25, '0000-00-00', 80, 80, 24, '1', 'B00026.jpg'),
('B00027', 17, 2, 1, 1, 'Ketrampilan Dasar Tindakan Keperawatan Jilid 3', 'Pilar Utama Mandiri', 'Dhanik Tri Hastuti, S.Kep.,Ns dkk', '', 'XII', 0000, 0, '0000-00-00', 124, 124, 39, '1', 'B00027.jpg'),
('B00028', 18, 2, 1, 1, 'Farmakologi dan Terapi Edisi lima', 'FKUI Jakarta', 'Dep. Farmakologi FKUI', '978-979-1610-46-7', 'X', 2007, 25, '0000-00-00', 931, 931, 4, '2', 'B00028.jpg'),
('B00029', 18, 2, 1, 4, 'Obat-Obat Penting', 'PT. Gramedia Jakarta', 'Drs. Tan Hoan Tjay dkk', '978-602-10995', 'X', 1979, 25, '0000-00-00', 969, 969, 1, '2', 'B00029.jpg'),
('B00030', 18, 2, 1, 4, 'ISO Farmakoterapi ', 'PT. ISFI Jakarta', 'Prof. Dr Elin Yulinah Sukandar,. Apt', '978-979-18514-1-1', 'X', 2009, 25, '0000-00-00', 1022, 1022, 1, '2', 'B00030.jpg'),
('B00031', 18, 2, 1, 4, 'Farmakope Indonesia Edisi Ke 3', 'Departemen Kesehatan RI', 'Dr. Mirdan Sirait', '', 'X', 1979, 20, '0000-00-00', 920, 920, 2, '2', 'B00031.jpg'),
('B00032', 18, 2, 1, 4, 'Informasi Spesialite Indonesia 2016', 'Jurnal Farmasi Indonesia ', 'Tim ISO Indonesia ', '854-4492', 'X', 2016, 20, '0000-00-00', 628, 368, 2, '2', 'B00032.jpg'),
('B00033', 18, 2, 1, 4, 'Perhitungan Dosis Edisi  7', 'Erlangga', 'Mary Jo Boyer', '978-979-099-764-8', 'X', 2009, 20, '0000-00-00', 368, 368, 2, '2', 'B00033.jpg'),
('B00034', 18, 2, 1, 4, 'ISO 2017/2018', 'PT. ISFI Jakarta Barat', 'Drs. M Dani Pratomo, Apt', '0854-4492', 'X', 2005, 20, '0000-00-00', 655, 655, 1, '2', 'B00034.jpg'),
('B00035', 18, 2, 1, 1, 'Ilmu Meracik Obat', 'UGM Press', 'Moh. Anif', '979-420-432-3', 'X', 2010, 20, '0000-00-00', 231, 231, 1, '2', 'B00035.jpg'),
('B00036', 17, 2, 1, 1, 'Diagnosis Keperawatan', 'EGC', 'Nanda International', '978-979-044-134-7', 'X', 2018, 20, '0000-00-00', 671, 671, 2, '2', 'B00036.jpg'),
('B00037', 17, 2, 1, 6, 'Kamus Saku Kedokteram Dorland Edisi 25', 'EGC', 'Dr. Popy Kumala dkk', '979-448-410-5', 'X', 1998, 20, '0000-00-00', 1210, 1210, 4, '2', 'B00037.jpg'),
('B00038', 17, 2, 1, 6, 'Kamus Keperawatan', 'Wacana Intelektual', 'Dr. Mayapada ', '978-602-8-118-583', 'X', 2008, 20, '0000-00-00', 640, 640, 2, '2', 'B00038.jpg'),
('B00039', 17, 2, 1, 1, 'Diagnosis Keperawatan', 'EGC', 'Ns. Esty Wahyuningsih', '978-979-044-182-8', 'X', 1988, 20, '0000-00-00', 1214, 1214, 1, '2', 'B00039.jpg'),
('B00040', 17, 2, 1, 6, 'Kamus Keperawatan', 'Paramedia ', 'Rosdiana A. R', '979-602-89-36187', 'X', 2008, 20, '0000-00-00', 640, 640, 3, '2', 'B00040.jpg'),
('B00041', 17, 2, 1, 6, 'Kamus Keperawatan', 'Dinamika', 'Rahayuni J', '978-602-8936-101', 'XI', 2008, 20, '0000-00-00', 640, 640, 3, '2', 'B00041.jpg'),
('B00042', 17, 2, 1, 1, 'Asuhan Keperawatan Praktis Jilid 2', 'Media Action', 'Amin Huda Nuarif, S. Kep., Ns dkk', '978-602-72002-6-5', 'X', 2016, 20, '0000-00-00', 435, 435, 4, '2', 'B00042.jpg'),
('B00043', 17, 2, 1, 1, 'Asuhan Keperawatan Praktis Jilid 1', 'Media Action', 'Amin Huda Nuarif, S. Kep., Ns dkk', '978-602-72002-5-8', 'X', 2016, 20, '0000-00-00', 440, 440, 5, '2', 'B00043.jpg'),
('B00044', 17, 2, 1, 1, 'Psikologi Keperawatan', 'Rajawali Press', 'Prof. Dr. Zulfan Saam, M.S dkk', '978-979-769-458-6', 'X', 2012, 20, '0000-00-00', 214, 214, 1, '2', 'B00044.jpg'),
('B00045', 17, 2, 1, 1, 'Kebutuhan Dasar Manusia', 'Penerbbit Andi', 'Yeni Lestari, S.Kep dkk', '978-979-29-6387-8', 'X', 2017, 25, '0000-00-00', 180, 180, 1, '2', 'B00045.jpg'),
('B00046', 17, 2, 1, 1, 'Anatomi Fisiologi Dan Siklus Kehhidupan Manusia', 'Medical Book', 'Lidia Widia', '978-602-1547-86-1', 'X', 2015, 25, '0000-00-00', 180, 180, 1, '2', 'B00046.jpg'),
('B00047', 17, 2, 1, 1, 'Pemgantar Kebutuhan Dasar Manusia ', 'Salemba Medika', 'A. Aziz Alimul Hidayat', '978-602-1163-15-3', 'X', 2014, 25, '0000-00-00', 276, 276, 1, '2', 'B00047.jpg'),
('B00048', 17, 2, 1, 1, 'Anamnesa dan Pemeriksaan Fisik', 'Erlangga Medical Series', ' Jonathan Gleadle', '979-781-822-5', 'X', 2007, 25, '0000-00-00', 202, 202, 1, '2', 'B00048.jpg'),
('B00049', 17, 2, 1, 1, 'Praktik Keperawatan Dasar', 'EGC', 'Jane F. Budhi. S. Kep', '978-979-044-355-6', 'X', 2002, 25, '0000-00-00', 108, 108, 3, '2', 'B00049.jpg'),
('B00050', 3, 2, 1, 1, 'Pendidikan Agama Islam dan Budi Pekerti', 'Kemendikbud', 'Nelty Khairiyah dkk', '978-602-427-042-1', 'X', 2017, 25, '0000-00-00', 202, 202, 86, '2', 'B00050.jpg'),
('B00051', 12, 2, 1, 1, 'Bahasa Inggris', 'Kemendikbud', 'Utami Widianti', '978-602-427-106-0', 'X', 2017, 25, '0000-00-00', 224, 224, 16, '2', 'B00051.jpg'),
('B00052', 12, 2, 1, 1, 'Forward An English', 'Erlangga', 'Shyla K. Lande dkk', '978-602-434-654-6', 'XI', 2017, 25, '0000-00-00', 185, 185, 122, '3', 'B00052.jpg'),
('B00053', 12, 2, 1, 1, 'Forward An English', 'Erlanggga', 'Shyla K. Lande dkk', '978-602-434-653-9', 'X', 2017, 25, '0000-00-00', 236, 236, 54, '3', 'B00053.jpg'),
('B00054', 12, 2, 1, 1, 'Bahasa Inggris', 'Kemendikbud', 'Emi Emilia  dkk', '978-602-427-106-0', 'XI', 2017, 25, '0000-00-00', 170, 170, 97, '3', 'B00054.jpg'),
('B00055', 12, 2, 1, 1, 'Bahasa Inggris Semester 2', 'Kemendikbud', 'Helena dkk', '978-602-282-479-4', 'XI', 2017, 25, '0000-00-00', 128, 128, 10, '3', 'B00055.jpg'),
('B00056', 18, 2, 1, 1, 'Kimia Farmasi Jilid 2', 'Pilar Utama Mandiri', 'Ardi Yuli Wardani, S.si dkk', '978-602-6220-59-8', 'XI', 2018, 25, '0000-00-00', 88, 88, 33, '2', 'B00056.jpg'),
('B00057', 12, 2, 1, 1, 'Forward An English ', 'Erlangga', 'Eka Mulya Astuti dkk', '978-602-298-805-2', 'XII', 2018, 25, '0000-00-00', 149, 149, 28, '3', 'B00057.jpg'),
('B00058', 12, 2, 1, 1, 'Forward An English', 'Erlangga', 'Shyla K. Lande dkk', '978-602-434-655-3', 'XII', 2019, 25, '0000-00-00', 182, 182, 143, '3', 'B00058.jpg'),
('B00059', 16, 2, 1, 1, 'Matematika ', 'Erlangga', 'Kasmina dkk', '978-602-434-745-1', 'X', 2018, 25, '0000-00-00', 334, 334, 42, '4', 'B00059.jpg'),
('B00060', 16, 2, 1, 1, 'Matematika ', 'Erlangga', 'Sudianto Manullang dkk', '978-602-282-106-9', 'XII', 2017, 25, '0000-00-00', 338, 338, 95, '4', 'B00060.jpg'),
('B00061', 16, 2, 1, 1, 'Matematika  Jilid 2', 'Erlangga', 'Kasmina dkk', '978-602-434-746-8', 'XI', 2018, 25, '0000-00-00', 340, 340, 71, '4', 'B00061.jpg'),
('B00062', 16, 2, 1, 1, 'Matematika Jilid 3', 'Erlangga', 'Kasmina dkk', '978-602-434-747-5', 'XII', 2019, 25, '0000-00-00', 128, 128, 105, '4', 'B00062.jpg'),
('B00063', 16, 2, 1, 1, 'Matematika Jilid 4', 'Erlangga', 'Kasmina dkk', '978-602-298-875-5', 'XII', 2018, 25, '0000-00-00', 154, 154, 31, '4', 'B00063.jpg'),
('B00064', 16, 2, 1, 1, 'Matematika', 'Kemendikbud', 'Bornok Sinaga dkk', '978-602-282-493-0', 'X', 2017, 25, '0000-00-00', 224, 224, 36, '4', 'B00064.jpg'),
('B00065', 16, 2, 1, 3, 'Erlangga X-press Matematika', 'Erlangga', 'Kasmina dkk', '978-623-266-352-7', 'XII', 2021, 25, '0000-00-00', 162, 162, 28, '', 'B00065.jpg'),
('B00066', 11, 2, 1, 3, 'Erlangga X-press Bahasa Inggris', 'Erlangga', 'Endrawati', '978-623-266-381-7', 'XII', 2021, 25, '0000-00-00', 79, 79, 10, '', 'B00066.jpg'),
('B00067', 12, 2, 1, 3, 'Erlangga X-press Bahasa Indonesia', 'Erlangga', 'Rustamanji', '978-623-266-351-6', 'XII', 2021, 0, '0000-00-00', 196, 196, 28, '', 'B00067.jpg'),
('B00068', 17, 2, 1, 4, 'MIM\'S Petunjuk Konsultasi Edisi 19', 'PT. Isfi Indonesia ', 'Ikatan Apoteker Indomesia', '', 'XII', 2021, 0, '0000-00-00', 200, 200, 25, 'Lab', 'B00068.jpg'),
('B00069', 18, 2, 1, 4, 'ISO (Indonesia Volume 52 Tahun 2019', 'PT. Isfi Indonesia ', 'Ikatan Apoteker Indomesia', '8-997226-830011', 'XII', 2021, 20, '0000-00-00', 456, 456, 25, 'Lab', 'B00069.jpg'),
('B00070', 17, 2, 1, 1, 'Farmakope Edisi 3', 'Kemendikbud', 'Ikatan Apoteker Indomesia', '', 'XII', 2021, 20, '0000-00-00', 1235, 1235, 10, 'Lab', 'B00070.jpg'),
('B00071', 17, 2, 1, 1, 'Farmakope Edisi 5 Jilid 1', 'Kemendikbud', 'Ikatan Apoteker Indomesia', '', 'XII', 2021, 25, '0000-00-00', 1235, 1235, 2, 'Lab', 'B00071.jpg'),
('B00072', 17, 2, 1, 1, 'Farmakope Edisi 5 jilid 2', 'Kemendikbud', 'Ikatan Apoteker Indomesia', '', 'XII', 2021, 25, '0000-00-00', 1235, 1235, 2, 'Lab', 'B00072.jpg'),
('B00073', 17, 2, 1, 1, 'Farmakope Edisi 6 Jilid 1', 'Kemendikbud', 'Ikatan Apoteker Indomesia', '', 'XII', 2021, 25, '0000-00-00', 1235, 1235, 2, 'Lab', 'B00073.jpg'),
('B00074', 17, 2, 1, 1, 'Farmakope Edisi 6 Jilid 2', 'Kemendikbud', 'Ikatan Apoteker Indomesia', '', 'XII', 2021, 25, '0000-00-00', 1235, 1235, 2, 'Lab', 'B00074.jpg'),
('B00075', 18, 2, 1, 1, 'Anatomi Fisiologi', 'Medical Book', 'Zuyina Luk lukaningsih', '978-62-9129-14-4', 'XI', 2011, 20, '0000-00-00', 116, 116, 1, '2', 'B00075.jpg'),
('B00076', 17, 2, 1, 4, 'MIM\'S Petunjuk Konsultasi Edisi 19', 'Mim\'s Pharmacy Guide', 'Dr. Arlina Pramudianto', '979074861-2', 'XI', 2012, 20, '0000-00-00', 435, 435, 1, '2', 'B00076.jpg'),
('B00077', 18, 2, 1, 1, 'Penyakit Infeksi ', 'Erlangga', 'Mandal dkk', '978-979-033-588-2', 'XI', 2014, 20, '0000-00-00', 301, 301, 1, '2', 'B00077.jpg'),
('B00078', 18, 2, 1, 1, 'Keperawatan Gawat Darurat', 'Medical Book', 'Musliha, S.Kep, Ners', '978-979-1446-85-3', 'XI', 2010, 20, '0000-00-00', 180, 180, 1, '2', 'B00078.jpg'),
('B00079', 18, 2, 1, 1, 'Ilmu Komunikaso Dalam Konteks Keperawatan', 'Trans  Info Media ', 'Ns.  Nunung Nurhasanah, S Kep', '978-602-8200-47-9', 'XI', 2013, 20, '0000-00-00', 160, 160, 2, '2', 'B00079.jpg'),
('B00080', 1, 2, 1, 3, 'Erlangga Fokus AKM ', 'Erlangga', 'Tim Erlangga Fokus ', '978-623-266-362-6', 'XII', 2020, 25, '0000-00-00', 246, 246, 106, '2B', 'B00080.jpg'),
('B00081', 16, 2, 1, 3, 'PTP Matematika ', 'Erlangga', 'Eka Zuliana dkk', '978-623-266-030-4', 'X', 2020, 25, '0000-00-00', 234, 234, 111, '2B', 'B00081.jpg'),
('B00082', 14, 2, 1, 1, 'Prigel Bahsaa Jawa ', 'Erlangga', 'Gandung Widaryatmo,dkk', '978-602-298-635-5', 'X', 2014, 25, '0000-00-00', 148, 148, 51, '3B', 'B00082.jpg'),
('B00083', 3, 2, 1, 1, 'Pendidikan Agama Islam dan Budi Pekerti', 'Erlangga', 'H. Abd. Rahman dkk', '978-602-434-633', 'XI', 2017, 25, '0000-00-00', 276, 276, 64, '1B', 'B00083.jpg'),
('B00084', 3, 2, 1, 1, 'Pendidikan Agama Islam dan Budi Pekerti', 'Kemendikbud ', 'Kemendikbud', '978-602-282-407-7', 'XI', 2014, 25, '0000-00-00', 134, 134, 1, '1B', 'B00084.jpg'),
('B00085', 3, 2, 1, 1, 'Pendidikan Agama Islam dan Budi Pekerti', 'Kemendikbud', 'Mustahdi dkk', '978-602-427-044-5', 'XI', 2017, 25, '0000-00-00', 218, 218, 76, '1B', 'B00085.jpg'),
('B00086', 12, 2, 1, 1, 'Bahasa Indoneisa', 'Kemendikbud', 'Suherli dkk', '978-602-427-099-5', 'X', 2017, 25, '0000-00-00', 290, 290, 22, '3A', 'B00086.jpg'),
('B00087', 12, 2, 1, 1, 'Bahasa Indomesia', 'Kemendikbud ', 'Suherli dkk', '978-602-427-2-8', 'XI', 2017, 25, '0000-00-00', 314, 314, 45, '3A', 'B00087.jpg'),
('B00088', 3, 2, 1, 1, 'Pendidikan Agama Islam dan Budi Pekerti', 'Erlangga', 'H. Abd. Rahman dkk', '978--602-486-945-', 'XI', 2018, 25, '0000-00-00', 242, 242, 21, '2A', 'B00088.jpg'),
('B00089', 4, 2, 1, 1, 'Pendidikan Pancasila dan Kewarganegaraan', 'Kemendikbud', 'Yusnawan Lubis dkk', '978-602-427-092-6', 'XI', 2017, 25, '0000-00-00', 228, 228, 89, '3B', 'B00089.jpg'),
('B00090', 11, 2, 1, 1, 'Produktif Berbahasa Indonesia', 'Erlangga', 'Yustinah', '978-602-434-638-6', 'X', 2017, 25, '0000-00-00', 276, 276, 41, '3A', 'B00090.jpg'),
('B00091', 11, 2, 1, 1, 'Produktif Berbahasa Indonesia', 'Erlangga', 'Yustinah', '978-602-434-639-3', 'XI', 2018, 25, '0000-00-00', 274, 274, 1, '3A', 'B00091.jpg'),
('B00092', 18, 2, 1, 1, 'K3 & Kesehatan Lingkungan', 'EGC', 'Budi Yulianto, M.Kes', '978-979-044-376-1', 'X', 2013, 25, '0000-00-00', 130, 130, 1, '', 'B00092.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `detail_peminjaman`
--

CREATE TABLE `detail_peminjaman` (
  `id_detailpinjam` int(11) NOT NULL,
  `id_pinjam` char(12) NOT NULL,
  `id_buku` char(6) NOT NULL,
  `qty_pinjam` int(11) NOT NULL,
  `tgl_kembali` datetime NOT NULL,
  `tgl_pengembalian` datetime NOT NULL,
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
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nm_jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nm_jurusan`) VALUES
(1, 'Farmasi'),
(2, 'Keperawatan');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_buku`
--

CREATE TABLE `kategori_buku` (
  `id_kategoribuku` int(11) NOT NULL,
  `nm_kategoribuku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_buku`
--

INSERT INTO `kategori_buku` (`id_kategoribuku`, `nm_kategoribuku`) VALUES
(1, 'Buku Teks Pelajaran'),
(2, 'Buku Bacaan'),
(3, 'Buku Penunjang Ujian'),
(4, 'Buku Penunjang Pelajaran'),
(5, 'Kamus Umum'),
(6, 'Kamus Produktif'),
(7, 'Al-Quran'),
(8, 'Ensiklopedia');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `tingkatan_kelas` enum('1','2','3') NOT NULL,
  `nomor_kelas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_jurusan`, `tingkatan_kelas`, `nomor_kelas`) VALUES
(1, 1, '1', 1),
(2, 1, '1', 2),
(3, 1, '2', 1),
(4, 1, '2', 2),
(5, 1, '3', 1),
(6, 1, '3', 1),
(7, 2, '1', 1),
(8, 2, '1', 2),
(9, 2, '2', 1),
(10, 2, '2', 2),
(11, 2, '3', 1),
(12, 2, '3', 2);

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
  `id_pinjam` char(12) NOT NULL,
  `tgl_pinjam` datetime NOT NULL,
  `nisn` char(10) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `tgl_bataspinjam` date NOT NULL,
  `total_denda` int(6) NOT NULL,
  `status` enum('Belum Lunas','Lunas') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `nisn` char(10) NOT NULL,
  `jam_kunjungan` datetime NOT NULL,
  `keperluan` enum('Membaca','Mengerjakan Tugas','Belajar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `nisn`, `jam_kunjungan`, `keperluan`) VALUES
(1, '0004680903', '2021-11-20 00:03:44', 'Membaca'),
(2, '0006214793', '2021-11-20 00:26:40', 'Membaca'),
(3, '0006595914', '2021-11-20 00:29:09', 'Membaca'),
(4, '0006595914', '2021-11-20 00:29:38', 'Membaca'),
(5, '0006595914', '2021-11-20 00:31:41', 'Membaca'),
(6, '0006595914', '2021-11-20 00:32:01', 'Membaca'),
(7, '0006595914', '2021-11-20 00:32:25', 'Membaca'),
(8, '0006595914', '2021-11-20 00:32:54', 'Membaca'),
(9, '0006595914', '2021-11-20 00:33:16', 'Membaca'),
(10, '0006595914', '2021-11-20 00:33:32', 'Membaca'),
(11, '0015375389', '2021-11-22 23:46:48', 'Membaca'),
(12, '0018123595', '2021-11-22 23:47:23', 'Membaca');

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
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nisn`);

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
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`id_kategoribuku`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

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
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indexes for table `sumber_buku`
--
ALTER TABLE `sumber_buku`
  ADD PRIMARY KEY (`id_sumberbuku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  MODIFY `id_kategoribuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `klasifikasi_ddc`
--
ALTER TABLE `klasifikasi_ddc`
  MODIFY `id_ddc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sumber_buku`
--
ALTER TABLE `sumber_buku`
  MODIFY `id_sumberbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
