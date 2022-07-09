-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 04:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
  `id_anggota` int(11) NOT NULL,
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
  `foto_anggota` char(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nisn`, `id_kelas`, `nm_anggota`, `jk_anggota`, `tempatlahir_anggota`, `tgllahir_anggota`, `nik_anggota`, `agama_anggota`, `alamat_anggota`, `rt`, `rw`, `dusun`, `kelurahan`, `kecamatan`, `nama_ayah`, `nama_ibu`, `foto_anggota`) VALUES
(1, '0068707382', 3, 'Adila Salsabila Putri', 'P', 'Banyumas', '2006-03-15', '3302265503060001', 'Islam', 'Cluster Ciberem Indah Blok A/4 ', '7', '1', '', 'Ciberem', 'Kec. Sumbang', '', 'Indriyanti', 'no_photo'),
(2, '0062438464', 3, 'Alfin Helmi Baihaki', 'L', 'Pemalang', '2006-07-20', '3327032007060003', 'Islam', 'Belik', '21', '5', 'Pekutukan', 'Beluk', 'Kec. Belik', 'Sartoro', 'Nurul Hayati ', 'no_photo'),
(3, '0038891880', 3, 'Aman Fajar Satryaji', 'L', 'Banyumas', '2003-06-02', '3303080403050343', 'Islam', 'Mangunegara', '', '', '', 'Mangunegara', 'Kec. Mrebet', '', 'Aminah', 'no_photo'),
(4, '0058663615', 3, 'Amar Finatul Rohmah', 'P', 'Purbalingga ', '2006-03-05', '3303080815070442', 'Islam', 'Jalan 43', '0', '0', '', 'Desa43', 'Kec. Mrebet', 'Miswanto', 'Sarpiyah', 'no_photo'),
(5, '0038891881', 3, 'Amin Fajar Setyawan', 'L', 'Banyumas', '2003-06-02', '3303080409030002', 'Islam', 'Mangunegara', '', '', '', 'Mangunegara', 'Kec. Mrebet', '', 'Aminah', 'no_photo'),
(6, '0069501846', 3, 'Andika Dwi Cahyo', 'L', 'Purbalingga', '2006-03-11', '3303080607730002', 'Islam', 'Tangkisan', '2', '7', '', 'Tangkisan', 'Kec. Mrebet', 'Khadimin', 'Tukiah', 'no_photo'),
(7, '0061754607', 3, 'Anggi Yuliani Tiwi', 'P', 'Pemalang ', '2006-11-27', '3327146711060001', 'Islam', 'Jl. Ds Karangmalang', '2', '8', 'Pulasari', 'Karangmalang', 'Kec. Bobotsari', 'Tumadi', 'Titi Mudnah', 'no_photo'),
(8, '0068658461', 3, 'Anis Nur Rokhmah', 'P', 'Purbalingga', '2006-09-25', '3303046509060002', 'Islam', 'Jalan Raya Langgar', '3', '8', '', 'Langgar', 'Kec. Kejobong', 'Mugiono', 'Puri Astuti', 'no_photo'),
(9, '0069463874', 3, 'Arlia Ananda', 'P', 'Banyumas', '2006-09-12', '3302175209060003', 'Islam', 'Panusupan ', '6', '3', 'Legok', 'Panusupan', 'Kec. Cilongok', 'SOIM', 'Warsini', 'no_photo'),
(10, '0066056471', 3, 'Ataya Razia Rafiq', 'L', 'Purbalingga', '2006-01-01', '3303130101060005', 'Islam', 'Ardi Lawet', '1', '3', '', 'Panusupan', 'Kec. Rembang', 'Turnomo Nur Iman', 'Sulistiowati', 'no_photo'),
(11, '3055925437', 3, 'Ayu Natalia', 'P', 'Purbalingga', '2005-12-24', '3303146912050001', 'Islam', 'Jalan Kolonel Sugiri No. 88 Bobotsari', '3', '2', '', 'Bojongsari', 'Kec. Bojongsari', '', 'Sutrisni', 'no_photo'),
(12, '0067101037', 3, 'Bunga Wahyuni', 'P', 'Purbalingga', '2006-03-30', '3303097003060004', 'Islam', 'Karangmalang', '2', '4', 'Karangmalang', 'Karangmalang', 'Kec. Bobotsari', 'Samingin', 'Suweni', 'no_photo'),
(13, '0071292209', 3, 'Elisa Dwi Cahyani', 'P', 'Pemalang ', '2007-02-15', '3327035502070008', 'Islam', 'Belik', '31', '7', 'Krajan', 'Beluk', 'Kec. Belik', 'Suratno', 'Tri Antep', 'no_photo'),
(14, '0051081151', 3, 'Eva Mualifah', 'P', 'Pemalang', '2005-06-25', '3327045509060002', 'Islam', 'Tundagan ', '7', '1', '', 'Tundagan', 'Kec. Watukumpul', '', 'Mutiah', 'no_photo'),
(15, '3064291766', 3, 'Fara Zuliana', 'P', 'Purbalingga', '2006-01-07', '3303144107060009', 'Islam', 'Patemon ', '1', '8', '', 'Patemon ', 'Kec. Bojongsari', '', 'Tuti', 'no_photo'),
(16, '0066406704', 3, 'Haerul Anam', 'L', 'Purbalingga', '2006-10-05', '3303090510060004', 'Islam', 'Jalan Raya Banjarsari', '2', '5', '', 'Banjarsari', 'Kec. Bobotsari', 'Nurihsan Sutrisno', 'Tuminah', 'no_photo'),
(17, '0064944313', 3, 'Kiki Nur Arifin', 'L', 'Pemalang', '2006-03-05', '3327030503060003', 'Islam', 'Mendelem ', '1', '9', '', 'Mendelem ', 'Kec. Belik', '', 'Mutri', 'no_photo'),
(18, '0009262784', 3, 'Lilis Setiawati', 'P', 'Purbalingga', '2006-01-25', '3303096501060001', 'Islam', 'Gunungkarang', '1', '4', '', 'Gunungkarang', 'Kec. Bobotsari', 'Wahid', 'Kantinah', 'no_photo'),
(19, '0061146658', 3, 'Mila Kurniawati', 'P', 'Pemalang', '2006-11-19', '3327035911060002', 'Islam', 'Kuta', '10', '3', 'Kuta Kidul', 'Kuta', 'Kec. Belik', 'Caman', 'Kurniati', 'no_photo'),
(20, '0063049568', 3, 'Mutia Dwi Amanda', 'P', 'Purbalingga', '2006-12-15', '3303115512060001', 'Islam', 'Jalan Raya Buara', '2', '3', '', 'Buara', 'Kec. Karanganyar', 'Miswadi', 'Rochyati', 'no_photo'),
(21, '0054542567', 3, 'Novel Linda Suciana', 'P', 'Pemalang', '2005-11-02', '3327034211050005', 'Islam', 'Mendelem', '1', '8', 'Mendelem', 'Mendelem', 'Kec. Belik', 'Andiono', 'Ihwatun', 'no_photo'),
(22, '0064783057', 3, 'Nurul Lailatunisa', 'P', 'Purbalingga', '2006-06-15', '3303105506060001', 'Islam', 'Serang', '2', '4', 'Serang', 'Serang', 'Kec. Karangreja', 'Marsono Tarsid', 'Sartem', 'no_photo'),
(23, '0068486913', 3, 'Puspita Setyaningtias', 'P', 'Purbalingga', '2006-08-07', '3303034708060005', 'Islam', 'Nangkasawit', '1', '1', '', 'Nangkasawit', 'Kec. Kejobong', 'Tri Atmoko', 'Titin Hartanti ', 'no_photo'),
(24, '0068450151', 3, 'Ria Finola Putri Juanda', 'P', 'Purbalingga', '2006-07-21', '3674036107060006', 'Islam', 'Pengalusan', '5', '3', '', 'Pengalusan', 'Kec. Mrebet', 'Agus Salim', 'Rofiah', 'no_photo'),
(25, '0061585049', 3, 'Rosa Prahastiwi', 'P', 'Purbalingga', '2006-06-16', '3303085606060001', 'Islam', 'Cipaku', '2', '7', '', 'Cipaku', 'Kec. Mrebet', 'Suwitno', 'Paini', 'no_photo'),
(26, '0068378761', 3, 'Silfiani Agustin', 'P', 'Purbalingga', '2006-08-09', '3303144908060001', 'Islam', 'Patemon', '2', '7', 'patemon', 'Patemon', 'Kec. Bojongsari', 'Gianto', 'Tri Hartini', 'no_photo'),
(27, '0067410907', 3, 'Siti Dira Ayunda', 'P', 'Purbalingga', '2006-07-29', '3303146907060001', 'Islam', 'Beji ', '12', '6', '', 'Beji', 'Kec. Bojongsari', '', 'Ida Marlina', 'no_photo'),
(28, '0057061968', 3, 'Syarifatul Auliya', 'P', 'Purbalingga', '2005-08-16', '3303125608050002', 'Islam', 'Majingklak  Tamansri Karangmoncol', '2', '19', 'Majingklak', 'Majingklak', 'Kec. Karangmoncol', '', 'Emi Mustafidah', 'no_photo'),
(29, '0047289871', 3, 'Tri Anggun Cahyani', 'P', 'Purbalingga', '2004-04-28', '3303088804040003', 'Islam', 'Binangun', '3', '2', 'Binangun', 'Mrebet', 'Kec. Mrebet', 'Yatno', 'Nagimah ', 'no_photo'),
(30, '0065855685', 3, 'Wulan Setyaningru,', 'P', 'Purbalingga', '2006-09-16', '3303095609060001', 'Islam', 'Talagening', '1', '3', '', 'Talagening', 'Kec. Bobotsari', 'Kasmono', 'Dwi Lestiani Sari', 'no_photo'),
(31, '0006595914', 3, 'Yuli Nurohmawati', 'P', 'Purbalingga', '2003-07-09', '3303094907030001', 'Islam', 'Gunungkarang', '1', '1', '', 'Gunungkarang', 'Kec. Bobotsari', 'Kharis Saartono', 'Ropiah', 'no_photo'),
(32, '0063292907', 3, 'Zalzabila Rahma Nur Fitria', 'P', 'Purbalingga', '2006-10-24', '', 'Islam', 'Sangkanayu ', '12', '4', '', 'Sangkanayu', 'Kec. Mrebet', '', 'Wigiyanti', 'no_photo'),
(33, '0062502408', 4, 'Alika Putri Rahmadania', 'P', 'Purbalingga', '2006-10-06', '3303144610070001', 'Islam', 'Patemon', '1', '8', 'Patemon', 'Patemon', 'Kec. Bojongsari', 'Aji Sutrisno', 'Eti Haryati', 'no_photo'),
(34, '0073600974', 4, 'Ananda Zaskia', 'P', 'Purbalingga', '2007-02-14', '3303085402070001', 'Islam', 'Sangkanayu', '11', '4', 'Kadus 2', 'Sangkanayu', 'Kec. Mrebet', 'Sunar', 'Jurmiyah', 'no_photo'),
(35, '0053460722', 4, 'Anastasia Dwi Sonita Salma', 'P', 'Purbalingga', '2005-01-24', '3173016401050014', 'Islam', 'Karangpetir', '1', '11', '', 'Cipaku', 'Kec. Mrebet', 'Uut Septianto', 'Yenni', 'no_photo'),
(36, '0056060042', 4, 'Angga Huntoro', 'L', 'Purbalingga', '2005-11-14', '3303081411050002', 'Islam', 'Sindang', '2', '7', 'SALAM', 'SINDANG', 'Kec. Mrebet', 'Turyanto', 'Sartiah', 'no_photo'),
(37, '0062057187', 4, 'Anggun Agustin', 'P', 'Purbalingga', '2006-08-27', '3303146708060004', 'Islam', 'Jl. Raya Pekalongan', '2', '3', 'Satu', 'Pekalongan', 'Kec. Bojongsari', 'Sitin', 'Satini', 'no_photo'),
(38, '0064766935', 4, 'Arina Khusna Aini', 'P', 'Purbalingga', '2006-03-24', '3303106403060001', 'Islam', 'Pratin kutabawa', '6', '2', '', 'kutabawa', 'Kec. Karangreja', '', 'Neni Nuryati', 'no_photo'),
(39, '0062400500', 4, 'Artika Septiana', 'P', 'Purbalingga', '2005-09-05', '3303084509050003', 'Islam', 'Cipaku', '3', '7', '', 'Cipaku', 'Kec. Mrebet', 'Supangat', 'Wahyani', 'no_photo'),
(40, '0057393113', 4, 'Aulia Nur Fadillah', 'P', 'Purbalingga', '2005-09-06', '3303144609050001', 'Islam', 'Beji', '16', '8', '', 'Beji', 'Kec. Bojongsari', 'Mad Riyanto Al Amad', 'Sarinah', 'no_photo'),
(41, '0051496105', 4, 'Brina Luvita Asani', 'P', 'Tegal', '2005-08-09', '3327034908050005', 'Islam', 'Belik', '7', '2', 'BELIK', 'Belik', 'Kec. Belik', 'Wastoyo', 'Suefih', 'no_photo'),
(42, '3065114774', 4, 'Edison Dilga Pramana', 'L', 'Purbalingga', '2006-07-29', '3303132907060006', 'Islam', 'Panusupan ', '1', '10', 'Pagelaran', 'Panusupan', 'Kec. Rembang', 'Erwin Mulgiono', 'Runita', 'no_photo'),
(43, '0079151886', 4, 'Emi Aulia', 'P', 'Purbalingga', '2007-05-08', '', 'Islam', 'Karangjengkol Kutasari Purbalingga', '14', '4', '', 'Karangjengkol', 'Kec. Kutasari', '', 'Misem', 'no_photo'),
(44, '0065313948', 4, 'Fadillah Agustin', 'P', 'Purbalingga', '2006-08-18', '3303095808060001', 'Islam', 'Bobotsari', '1', '10', 'Bobotsari', 'Bobotsari', 'Kec. Bobotsari', 'Masruhi', 'Endah Suprianti', 'no_photo'),
(45, '0077322902', 4, 'Fildzah Amelia Putri', 'P', 'Purbalingga', '2007-02-01', '3303074102070004', 'Islam', 'Jalan Karangjengkol', '8', '3', '', 'Karangjengkol', 'Kec. Kutasari', 'Jumin', 'Mumun', 'no_photo'),
(46, '0061831438', 4, 'Kharisma Evelyne Eka Susanto', 'P', 'Pemalang', '2006-11-03', '3327074311060005', 'Kristen', 'Jln. Kol. Sugiri No.36', '1', '7', 'Bobotsari', 'Bobotsari', 'Kec. Bobotsari', 'Arif Susanto', 'Suzana Nur Maya', 'no_photo'),
(47, '0053952829', 4, 'Kiki Walihwan', 'L', 'Purbalingga', '2005-07-24', '3303132407050002', 'Islam', 'Buret Kalikarang', '5', '3', 'Buret Kalikarang', 'Tanalum', 'Kec. Rembang', 'Sugiono', 'Tarmi', 'no_photo'),
(48, '0065322572', 4, 'Mela Novita Sri Rahayu', 'P', 'Purbalingga', '2006-11-01', '3303094111060002', 'Islam', 'Banjarsari', '3', '5', 'Banjarsari', 'Banjarsari', 'Kec. Bobotsari', 'Sri Hartono', 'Satiti Rahayu', 'no_photo'),
(49, '0063744707', 4, 'Munasifatul Khoeriah', 'P', 'Purbalingga', '2006-03-22', '3303126203060001', 'Islam', 'Baleraksa, karang miri ', '1', '9', '', 'Baleraksa', 'Kec. Karangmoncol', '', 'Rumiyati', 'no_photo'),
(50, '0074189715', 4, 'Niken Ayu Cahyaningtyas', 'P', 'Purbalingga', '2007-01-12', '3303085201070002', 'Islam', 'Jl. Ds Tangkisan', '1', '4', 'Tangkisan', 'Tangkisan ', 'Kec. Mrebet', 'Muhamad Soleh', 'Miswati', 'no_photo'),
(51, '0074222577', 4, 'Nur Adnan Sawaludin', 'L', 'Purbalingga', '2005-11-07', '3303090711050002', 'Islam', 'Bobotasari', '1', '12', '', 'Bobotsari', 'Kec. Bobotsari', 'Nasirun', 'Ratini', 'no_photo'),
(52, '0061923669', 4, 'Pramila Rahma Fajriyah', 'P', 'Purbalingga', '2006-07-14', '3303105407060001', 'Islam', 'Serang ', '6', '8', '', 'Serang ', 'Kec. Karangreja', '', 'Kismiyatun', 'no_photo'),
(53, '0052555621', 4, 'Reziana Monica', 'P', 'Pemalang', '2005-09-24', '3327036409050001', 'Islam', 'Mendelem', '2', '9', 'Tampol', 'Mendelem', 'Kec. Belik', 'Harmoko', 'Tarniti', 'no_photo'),
(54, '0064307256', 4, 'Safinatul Khafidzah', 'P', 'Purbalingga', '2006-12-13', '3303121312060003', 'Islam', 'Baleraksa, karang miri ', '1', '9', '', 'Baleraksa', 'Kec. Karangmoncol', '', 'Irawati', 'no_photo'),
(55, '0061590168', 4, 'Shafana Azzahra', 'P', 'Purbalingga', '2006-04-26', '33030002180130  ', 'Islam', 'Buara ', '1', '2', '', 'Buara', 'Kec. Karanganyar', '', 'Sri Fakhatun ', 'no_photo'),
(56, '3076797809', 4, 'Siti Kholiyah', 'P', 'Purbalingga', '2007-05-08', '', 'Islam', 'Serang Karangreja Purbalingga', '6', '2', '', 'Serang', 'Kec. Karangreja', '', 'Wasmirah', 'no_photo'),
(57, '0069488617', 4, 'Szuliyana Aszahro', 'P', 'Purbalingga', '2006-06-08', '3303094806060002', 'Islam', 'Banjarsari', '1', '2', 'Banjarsari', 'Banjarsari', 'Kec. Bobotsari', 'Sutrisno', 'Turyanti', 'no_photo'),
(58, '0046330911', 4, 'Viki Ardi Pratama', 'L', 'Pemalang', '2005-12-12', '3327031212050003', 'Islam', 'Dusun Jurang Jero', '4', '4', 'Jurang Jero', 'Badak', 'Kec. Belik', 'Edi Suwarno', 'Suparti', 'no_photo'),
(59, '0052721475', 4, 'Youmi Vikri Griyanti', 'P', 'Purbalingga', '2005-12-15', '3303105512050002', 'Islam', 'Tlahablor', '1', '6', '', 'Tlahablor', 'Kec. Karangreja', 'Tarso Arsowiyadi', 'Kusjarliyah', 'no_photo'),
(60, '0069813341', 4, 'Zalfa Adinda Tazkia', 'P', 'Pemalang ', '2006-02-28', '3327046802060003', 'Islam', 'Watukumpul', '4', '4', '', 'Watukumpul', 'Kec. Watukumpul', 'Junaedi', 'Tuti Widiani', 'no_photo'),
(61, '', 4, 'Inayatul Khodijah', 'P', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 'no_photo'),
(62, '0072389617', 9, 'Adellia', 'P', 'Pemalang', '2007-07-07', '3327034707070008', 'Islam', 'Belik ', '1', '2', '', 'Belik', 'Kec. Belik', '', 'Kurniati', 'no_photo'),
(63, '0045287125', 9, 'Alan Setiaji', 'L', 'Purbalingga', '2004-02-01', '3303140102040001', 'Islam', 'Gembong', '6', '3', '', 'Gembong', 'Kec. Bojongsari', '', 'Kuati', 'no_photo'),
(64, '0079100534', 9, 'Andini Aprilia', 'P', 'Purbalingga', '2007-04-01', '3303084104070001', 'Islam', 'Tangkisan', '1', '3', '', 'Tangkisan', 'Kec. Mrebet', 'Sudiyanto', 'Tugimah', 'no_photo'),
(65, '0041586451', 9, 'Aprilia Wilujeng', 'P', 'Purbalingga', '2004-04-24', '3302266404040007', 'Islam', 'Tunjungmuli', '2', '1', 'Desa Utara', 'Tunjungmuli', 'Kec. Karangmoncol', 'Sugeng Supangkat', 'Sofiyatun', 'no_photo'),
(66, '0062998324', 9, 'Aulia Diah Saputri', 'P', 'Purbalingga', '2006-05-11', '3303075105060002', 'Islam', 'Meri', '7', '3', 'Meri', 'Meri', 'Kec. Kutasari', 'Rasiman', 'Dasimah', 'no_photo'),
(67, '0067165021', 9, 'Azah Nur Rahayu', 'P', 'Purbalingga', '2006-11-26', '3303146611060002', 'Islam', 'Metenggeng', '4', '2', '', 'Metenggeng', 'Kec. Bojongsari', 'Suwarto', 'Tursini', 'no_photo'),
(68, '0043141385', 9, 'Cahyo Utomo', 'L', 'Purbalingga', '2004-08-08', '3303180808040001', 'Islam', 'Langkap ', '6', '1', '', 'Langkap', 'Kec. Kertanegara', 'Basor', 'Mistiyah', 'no_photo'),
(69, '0064159364', 9, 'Defa Cika Febriani', 'P', 'Purbalingga', '2006-02-17', '3303095702060001', 'Islam', 'Dagan', '1', '6', '', 'Dagan', 'Kec. Bobotsari', 'Taryono', 'Ernawati', 'no_photo'),
(70, '0064264601', 9, 'Deni Alvina', 'P', 'Purbalingga', '2006-06-28', '3303096006060001', 'Islam', 'Limbasari', '3', '3', 'Limbasari', 'Limbasari', 'Kec. Bobotsari', 'Sugiarto', 'Khadiyah', 'no_photo'),
(71, '0059224722', 9, 'Eka Febrianti', 'P', 'Purbalingga', '2006-02-25', '3303086502060001', 'Islam', 'Sangkanayu', '12', '4', 'Dusun 2', 'Sangkanayu', 'Kec. Mrebet', 'Surahman', 'Siti Baro\'Ah', 'no_photo'),
(72, '0052333409', 9, 'Erisa Rahmadani', 'P', 'Purbalingga', '2005-11-02', '3303080211050000', 'Islam', 'Pengalusan', '4', '2', 'Pengalusan', 'Pengalusan', 'Kec. Mrebet', 'Tongat', 'Sumiati', 'no_photo'),
(73, '0061293141', 9, 'Fadela Tri Anggraeni', 'P', 'Purbalingga', '2006-09-25', '3303086509060000', 'Islam', 'Kradenan', '1', '3', '', 'Kradenan', 'Kec. Mrebet', 'Paijo', 'Mutonah', 'no_photo'),
(74, '0061100510', 9, 'Fransiska Dwi Apriliana', 'P', 'Purbalingga', '2006-04-20', '3303136004060003', 'Islam', 'Jl. Raya Serang', '5', '5', '', 'Kutabawa', 'Kec. Karangreja', 'Darningsih', 'Darningsih', 'no_photo'),
(75, '0065945006', 9, 'Icha Febri Ristiantika ', 'P', 'Purbalingga', '2006-02-06', '3303084602060003', 'Islam', 'Tangkisan', '2', '7', '', 'Tangkisan', 'Kec. Mrebet', 'Wahyono', 'Turiah', 'no_photo'),
(76, '0068650975', 9, 'Isnatun Nuraeni', 'P', 'Pemalang ', '2006-04-18', '3327045804060002', 'Islam', 'Cikadu', '12', '2', '', 'Cikadu', 'Kec. Watukumpul', 'Dahuri', 'Tusri', 'no_photo'),
(77, '0067024684', 9, 'Januar Eka Nurhidayah', 'P', 'Purbalingga', '2006-01-14', '3303185401060001', 'Islam', 'Karangtengah', '10', '3', '', 'Karangtengah', 'Kec. Kertanegara', 'Agung Barokah', 'Nasiti', 'no_photo'),
(78, '0055035836', 9, 'Khoerun Nisa', 'P', 'Pemalang', '2005-03-04', '3327044403050008', 'Islam', 'Tundagan', '3', '4', '', 'Tundagan', 'Kec. Watukumpul', 'Suminto', 'Sutiah', 'no_photo'),
(79, '0066988026', 9, 'Luthfi Lustiyani', 'P', 'Purbalingga', '2006-01-22', '3303096201060001', 'Islam', 'Dagan', '2', '3', '', 'Dagan', 'Kec. Bobotsari', 'Sutaryo', 'Supriah', 'no_photo'),
(80, '0088442950', 9, 'Maulida Nurohmah', 'P', 'Purbalingga', '2008-04-02', '3303084204080003', 'Islam', 'Pengalusan', '3', '1', '', 'Pengalusan', 'Kec. Mrebet', 'Narwono', 'Sumiati', 'no_photo'),
(81, '0067791943', 9, 'Mila Nur Aini', 'P', 'Purbalingga', '2006-07-24', '3303126407060002', 'Islam', 'Celeleng Karangsari', '2', '5', '', 'Karangsari', 'Kec. Karangmoncol', '', 'Niken Sutrisni', 'no_photo'),
(82, '0069246264', 9, 'Najwa Salsabila', 'P', 'Purbalingga', '2006-01-15', '3303125501060003', 'Islam', 'Baleraksa ', '3', '3', '', 'Baleraksa', 'Kec. Karangmoncol', '', 'Siti Aniroh', 'no_photo'),
(83, '0063736458', 9, 'Nia Okta Ramadhani', 'P', 'Purbalingga', '2006-10-06', '3303084610060007', 'Islam', 'Tangkisan', '1', '5', 'Tangkisan ', 'Tangkisan', 'Kec. Mrebet', 'Ali Muntorid', 'Rohyatun', 'no_photo'),
(84, '0067690118', 9, 'Oktaviana Rahmadhani', 'P', 'Purbalingga', '2006-10-16', '3303075610060003', 'Islam', 'Candiwulan', '15', '6', '', 'Candiwulan', 'Kec. Kutasari', 'Manto', 'W. Winarti', 'no_photo'),
(85, '0055057266', 9, 'Revalina Saputri', 'P', 'Purbalingga', '2005-09-15', '3303145509050001', 'Islam', 'Majapura', '1', '5', 'Majapura', 'Majapura', 'Kec. Bobotsari', 'Romi Abdulah', 'Dwi Susanti', 'no_photo'),
(86, '0069321072', 9, 'Rindika Olivia Rolida Annafi', 'P', 'Purbalingga', '2006-06-25', '3303056506060001', 'Islam', 'Jalan Onje ', '1', '6', 'Onje', 'Purbalingga Lor', 'Kec. Purbalingga', 'Tri Haryanto', 'Yuliana', 'no_photo'),
(87, '0062526406', 9, 'Rochellina Ruista', 'P', 'Purbalingga', '2006-10-23', '3303076310060001', 'Islam', '-', '0', '0', 'Surau', 'Sokoagung', 'Kec. Bagelen', 'Rismono', 'Rubiyati', 'no_photo'),
(88, '0065743209', 9, 'Roro Musfikasari', 'P', 'Purbalingga', '2006-09-11', '3303125109060001', 'Islam', 'Serang, desa tunjungmuli', '', '', 'Serang ', 'Tunjungmuli', 'Kec. Karangmoncol', '', 'Khopsiyah', 'no_photo'),
(89, '0065343901', 9, 'Sofi Tri Yulihasanah', 'P', 'Purbalingga', '2006-07-03', '3303084307060002', 'Islam', 'Karanggan Muda', '3', '2', 'Dusun 1', 'Karanggan', 'Kec. Gunungputri', 'Karyono', 'Rohimah', 'no_photo'),
(90, '0077841683', 9, 'Takhiya Rahmanisya', 'P', 'Purbalingga', '2007-05-01', '3303114105070004', 'Islam', 'Maribaya', '4', '3', '', 'Maribaya', 'Kec. Karanganyar', '', 'Sairah', 'no_photo'),
(91, '0053332186', 9, 'Tri Anjali', 'P', 'Purbalingga', '2005-09-21', '3303116109050002', 'Islam', 'Bangun Reksa Indah', '1', '10', '', 'Karang Tengah', 'Kec. Karang Tengah', 'Sutarwo', 'Tusiyah', 'no_photo'),
(92, '0067232497', 9, 'Winda Indriani', 'P', 'Purbalingga', '2006-03-23', '3303076303060001', 'Islam', 'Karangcegak', '4', '2', 'Karangcaegak ', 'Karangcegak', 'Kec. Kutasari', 'Kholidin Al Wachirun', 'Tursiati', 'no_photo'),
(93, '0073817360', 10, 'Aghnia Sabila Najwa', 'P', 'Purbalingga', '2007-01-26', '3303116601070003', 'Islam', 'Kalijaran', '2', '4', '', 'Kalijaran', 'Kec. Karanganyar', '', 'Ulwiyatun Choerotun Nisa', 'no_photo'),
(94, '0067627582', 10, 'Andri Kurniawan', 'L', 'Purbalingga', '2006-09-08', '3303120809060003', 'Islam', 'Baleraksa', '4', '6', '', 'Baleraksa', 'Kec. Karangmoncol', 'Hendra', 'Khusmiyati', 'no_photo'),
(95, '0069197355', 10, 'Apriyana Wardatul Nur Arofah', 'P', 'Purbalingga', '2006-04-15', '3303038550460001', 'Islam', 'Onje ', '1', '7', '', 'Onje', 'Kec. Mrebet', '', 'Sodiyah', 'no_photo'),
(96, '0053103559', 10, 'Ayu Wulan Dari', 'P', 'Jakarta', '2005-08-03', '1502084308050003', 'Islam', 'Jalan Onje', '1', '6', '', 'Purbalingga Lor', 'Kec. Purbalingga', 'Mujiyo', 'Sumarni', 'no_photo'),
(97, '0044438720', 10, 'Bela Puspita Sari', 'P', 'Purbalingga', '2004-01-28', '1810046801040002', 'Islam', 'Tanjung Rusia', '2', '1', '', 'Tanjung Rusia', 'Kec. Pardasuka', 'Sumeh', 'Rosita', 'no_photo'),
(98, '0056079444', 10, 'Dea Nur Rahmawati', 'P', 'Purbalingga', '2005-09-30', '3303107009050001', 'Islam', 'Bayeman Kidul', '2', '10', '', 'Tlahab Lor', 'Kec. Karangreja', 'Nur Iman', 'Watirah', 'no_photo'),
(99, '0063246267', 10, 'Desi Ayu Lestari', 'P', 'Bekasi', '2006-01-29', '1802046901060002', 'Islam', 'Jl. Raya Cipaku', '3', '5', 'Siwadas', 'Cipaku', 'Kec. Mrebet', 'Dede Burhanudin', 'Ana Ashyva', 'no_photo'),
(100, '0059807196', 10, 'Devi Setyawati', 'P', 'Purbalingga', '2006-02-09', '3303064902060003', 'Islam', 'Blater', '1', '3', 'Blater', 'Blater', 'Kec. Kalimanah', 'Sukarso', 'Kustini', 'no_photo'),
(101, '0064972673', 10, 'Eka Sari', 'P', 'Purbalingga', '2006-04-08', '3303134804060001', 'Islam', 'Tanalum', '4', '2', '', 'Tanalum', 'Kec. Rembang', 'Khamto', 'Sulasmi', 'no_photo'),
(102, '0057281284', 10, 'Ekarani Saputri', 'P', 'Purbalingga', '2005-01-24', '3303132401040001', 'Islam', 'Tanalum', '3', '1', '', 'Tanalum', 'Kec. Rembang', 'Rustami', 'Nenti', 'no_photo'),
(103, '0056903851', 10, 'Fadila Novel Fitriah', 'P', 'Purbalingga', '2005-11-18', '3303145811050002', 'Islam', 'Banjaran', '25', '12', 'Sawangan', 'Banjaran', 'Kec. Bojongsari', 'Sudarto', 'Dwi Haryanti', 'no_photo'),
(104, '0069890796', 10, 'Hizi Nurfariza', 'P', 'Purbalingga', '2006-10-29', '3303086810060004', 'Islam', 'Serayu Karanganyar', '4', '3', 'Serayu Karanganyar', 'Serayu Karanganyar', 'Kec. Mrebet', 'Teguh Subagyo', 'Antin Kristianingsih', 'no_photo'),
(105, '0018123595', 10, 'Indah Choirun Nisa', 'P', 'Purbalingga', '2005-10-18', '3303185810050002', 'Islam', 'Condong', '3', '2', '', 'Condong', 'Kec. Kertanegara', '', 'Sitinah', 'no_photo'),
(106, '0068986668', 10, 'Iyan Novita Sari', 'P', 'Purbalingga', '2006-11-24', '3303126411060001', 'Islam', 'Tunjungmuli', '', '', '', 'Tunjungmuli', 'Kec. Karangmoncol', 'Makmur', 'Suwarni', 'no_photo'),
(107, '0067358881', 10, 'Kheizka Kairana Zahira Putri', 'P', 'Purbalingga', '2006-05-09', '3303184905060003', 'Islam', 'Darma ', '1', '2', '', 'Darma', 'Kec. Kertanegara', '', 'Cahya Kurniyati', 'no_photo'),
(108, '0054732231', 10, 'Luri Novisyah', 'P', 'Purbalingga', '2005-06-10', '3303145006050001', 'Islam', 'Bojongsari', '2', '8', 'Banyumudal', 'Bojongsari', 'Kec. Bojongsari', 'Murito', 'Partini Tri Prasetya', 'no_photo'),
(109, '0056612820', 10, 'Mahmudah Febriani', 'P', 'Purbalingga', '2005-02-11', '3303085102050006', 'Islam', 'Cipaku', '2', '3', '', 'Cipaku', 'Kec. Mrebet', 'Supratin', 'Istingadah', 'no_photo'),
(110, '0062753650', 10, 'Maya Karina Candra', 'P', 'Purbalingga', '2006-11-21', '3303096111060001', 'Islam', 'Bobotsari', '1', '10', 'Bobotsari', 'Bobotsari', 'Kec. Bobotsari', 'Teguh Supriyanto', 'Nur Fitriani', 'no_photo'),
(111, '0051392804', 10, 'Monika Nanda Larasati', 'P', 'Purbalingga', '2005-01-17', '3303085701050002', 'Islam', 'jalan desa', '2', '6', '', 'Cipaku', 'Kec. Mrebet', 'Sudarto', 'Eni Afriani', 'no_photo'),
(112, '0062218304', 10, 'Naura Zahira Nabighoh', 'P', 'Pemalang', '2006-02-08', '3327034802060001', 'Islam', 'DK. Sodong', '3', '2', 'Dk. Sodong', 'Sikasur', 'Kec. Belik', 'Tarino', 'Rini', 'no_photo'),
(113, '0054900223', 10, 'Nur Khalisa', 'P', 'Purbalingga', '2005-08-15', '3303115508050001', 'Islam', 'Brakas', '3', '1', 'Brakas', 'Brakas', 'Kec. Karanganyar', 'Soim', 'Wasirah', 'no_photo'),
(114, '0062693578', 10, 'Pangestika Tri Rahayu', 'P', 'Purbalingga', '2006-07-23', '3303056307060002', 'Islam', 'Sirongge', '3', '3', '', 'Kembaran Kulon', 'Kec. Purbalingga', 'Lujeng Ismail', 'Mintarsih', 'no_photo'),
(115, '0069710537', 10, 'Ricardo Arya Bayu', 'L', 'Purbalingga', '2006-03-23', '3303182303060001', 'Islam', 'Banjarsari', '1', '2', '', 'Banjarsari', 'Kec. Bantarbolang', 'Prayitno', 'Kasiyah', 'no_photo'),
(116, '0078732188', 10, 'Rizky Dani Abdillah', 'L', 'Tangerang', '2007-08-17', '3674061708070002', 'Islam', 'Karangasem', '4', '5', '', 'Karangasem', 'Kec. Kertanegara', 'Dasiman', 'Saripah', 'no_photo'),
(117, '0064196471', 10, 'Safitri Noviana', 'P', 'Purbalingga', '2006-11-03', '3303114311060002', 'Islam', 'Brakas', '2', '1', 'Brakas', 'Brakas', 'Kec. Karanganyar', 'Muhidin', 'Warsiti', 'no_photo'),
(118, '0066278510', 10, 'Sri Ayu Astuti', 'P', 'Purbalingga', '2006-11-11', '3303145111060003', 'Islam', 'Beji', '18', '8', '', 'Beji', 'Kec. Bojongsari', 'Kasdi', 'Puji Sunarsih', 'no_photo'),
(119, '0048051139', 10, 'Tatik Setiani', 'P', 'Purbalingga', '2004-05-04', '3303094405040002', 'Islam', 'Talagening ', '', '', '', 'Talagening', 'Kec. Bobotsari', '', 'Sawinah', 'no_photo'),
(120, '0057244528', 10, 'Umi Laellatul Rohmah', 'P', 'Purbalingga', '2005-08-04', '3303134408050001', 'Islam', 'JL. Curug', '5', '1', '', 'Tanalum', 'Kec. Rembang', 'Ali Prianto', 'Jamiah', 'no_photo'),
(121, '0069748839', 10, 'Yodha Setyawan', 'L', 'Purbalingga', '2006-04-25', '3303082504060004', 'Islam', 'Sindang', '3', '6', 'Sindang', 'Sindang', 'Kec. Mrebet', 'Risno', 'Turnafsiyah', 'no_photo'),
(122, '0053653003', 5, 'Ananda Ayu Lestari', 'P', 'Purbalingga', '2005-01-28', '3303106801050002', 'Islam', 'Serang', '4', '2', '', 'Serang', 'Kec. Karangreja', 'Karyono', 'Sri Rahayu', 'no_photo'),
(123, '0046726492', 5, 'Andini Desiana Fadilla', 'P', 'Purbalingga', '2004-12-20', '3303126012040003', 'Islam', 'Gunung Tugel ', '11', '21', '', 'Tunjungmuli ', 'Kec. Karangmoncol', 'Jajang', 'Waryati', 'no_photo'),
(124, '0052689551', 5, 'Anindito Saputro', 'L', 'Purbalingga', '2005-05-12', '3303101205050001', 'Islam', 'Gondang', '2', '1', '', 'Gondang ', 'Kec. Karangreja', 'Jayadi Martin', 'Suyati', 'no_photo'),
(125, '0055414951', 5, 'Annisa Wahyu Hidayah', 'P', 'Purbalingga', '2005-01-03', '3303094301050002', 'Islam', 'Pakuncen', '2', '4', 'Pakuncen', 'Pakuncen', 'Kec. Bobotsari', 'Suyono', 'Eti Hidayati', 'no_photo'),
(126, '3033277259', 5, 'Arif Bachtiar Luthfi', 'L', 'Purbalingga', '2003-07-06', '3303140607030004', 'Islam', 'Gembong ', '3', '2', '', 'Gembong', 'Kec. Bojongsari', 'Rasmo', 'Nurhikmah', 'no_photo'),
(127, '0058119133', 5, 'Asah Bintang Tri Pawelas', 'P', 'Purbalingga', '2005-03-10', '3303090406000002', 'Islam', 'Limbasari', '1', '4', 'Limbasari', 'Limbasari', 'Kec. Bobotsari', 'M. Pringgo Suwono', 'Supriyati', 'no_photo'),
(128, '0051003869', 5, 'Bita Nuraini', 'P', 'Purbalingga', '2005-11-07', '3303184711050001', 'Islam', 'Patemon', '2', '8', '', 'Patemon', 'Kec. Bojongsari', 'Sarwono Adi Santosa', 'Miswati', 'no_photo'),
(129, '0053455691', 5, 'Dewi Annisya Maysun Nabila', 'P', 'Purbalingga', '2005-03-10', '3303115003050003', 'Islam', 'Kaliori', '13', '3', 'Pengaripan', 'Kaliori', 'Kec. Karanganyar', 'Chaderi', 'Susanti', 'no_photo'),
(130, '0059860354', 5, 'Dina Saputri', 'P', 'Purbalingga', '2005-04-20', '3303096003050002', 'Islam', 'Tlaga', '2', '3', 'Tlagayasa', 'Tlagayasa', 'Kec. Bobotsari', 'Jiman', 'Tuspirah', 'no_photo'),
(131, '0058095548', 5, 'Dwi Ratna Wulandari', 'P', 'Tanggerang', '2005-05-14', '3303085405050004', 'Islam', 'Guyung Kedungrejo ', '2', '4', '', 'Guyung Kedungrejo', 'Kec. Gerih', 'Puji Manfaat', 'Darni', 'no_photo'),
(132, '0059700324', 5, 'Elsa Nanda Pratama', 'P', 'Purbalingga', '2005-09-26', '3303086609050005', 'Islam', 'Ki Tepus Rumput', '2', '3', '', 'Onje', 'Kec. Mrebet', 'Muhammad Riki Riyan', 'Murniyati', 'no_photo'),
(133, '0006214793', 5, 'Ernia Saputri', 'P', 'Purbalingga', '2004-08-14', '3303145408040002', 'Islam', 'Bumisari', '15', '3', '', 'bumisari', 'Kec. Bojongsari', 'Miswanto', 'Miskem', 'no_photo'),
(134, '0047801855', 5, 'Fiolin Fio Fenturini', 'P', 'Purbalingga', '2004-10-01', '3303121607070160', 'Islam', 'Pungkuran', '3', '10', 'Dusun V', 'Pekiringan', 'Kec. Karangmoncol', 'Wendianto', 'Haryati', 'no_photo'),
(135, '0053455687', 5, 'Hendri Wido Seno', 'L', 'Purbalingga', '2005-08-18', '3393110311950002', 'Islam', 'Kaliori ', '14', '3', '', 'Kaliori', 'Kec. Karanganyar', 'Sairin', 'Misnem', 'no_photo'),
(136, '0051567166', 5, 'Ishak Ardiansyah', 'L', 'Purbalingga', '2005-08-25', '3303092508050001', 'Islam', 'Penisihan', '2', '2', 'Penisihan', 'Palumbungan', 'Kec. Bobotsari', 'Marduki', 'Nahwati', 'no_photo'),
(137, '0054485893', 5, 'Lovina Angely', 'P', 'Purbalingga', '2005-01-10', '3303075001050003', 'Kristen', 'Candinata', '1', '1', 'Candinata', 'Candinata', 'Kec. Kutasari', 'Yf Suyono', 'Quinella Findi Setiyati', 'no_photo'),
(138, '3053088182', 5, 'Mahendra Hibban Ulinuha', 'L', 'purbalingga', '2005-05-01', '3303140105050001', 'Islam', 'Gembong ', '2', '1', '', 'Gembong', 'Kec. Bojongsari', 'Slamet Sumardono', 'Siti Khamdiyah', 'no_photo'),
(139, '0057768267', 5, 'Melly Rahmawati', 'P', 'purbalingga', '2005-05-28', '3303146805050002', 'Islam', 'Bojongsari ', '1', '11', '', 'Bojongsari', 'Kec. Bojongsari', 'Parsito', 'Purwati', 'no_photo'),
(140, '0057006235', 5, 'Nayla Nabilla Sukrisna', 'P', 'Yogyakarta', '2005-12-19', '3303115912060001', 'Islam', 'Karanganyar ', '1', '2', '', 'Karanganyar', 'Kec. Karanganyar', 'Tony Sukrisna', 'May Martin', 'no_photo'),
(141, '0065206205', 5, 'Nur Farchatul Fuada ', 'P', 'purbalingga', '2006-02-12', '3303115202060001', 'Islam', 'Kalijaran', '2', '1', '', 'Sokawera ', 'Kec. Karanganyar', 'Sumadi', 'Umiyati', 'no_photo'),
(142, '3052324047', 5, 'Prima Dina Lestari', 'P', 'purbalingga', '2005-05-04', '3303124405050001', 'Islam', 'Bantarwaru ', '1', '17', '', 'Tamansari', 'Kec. Karangmoncol', 'Sutarno', 'Muslimah', 'no_photo'),
(143, '3053473349', 5, 'Rahayu Irianti', 'P', 'purbalingga', '2005-05-08', '3303054805050001', 'Islam', 'Karanglewas ', '10', '5', '', 'Karanglewas', 'Kec. Kutasari', 'Budiyono', 'Umi Sukirah', 'no_photo'),
(144, '0048975285', 5, 'Rina Aryani', 'P', 'Purbalingga', '2004-03-03', '3303094304040001', 'Islam', 'Karangtalun ', '4', '3', 'Karangtalun', 'Karangtalun', 'Kec. Bobotsari', 'Nasirun', 'Riyati', 'no_photo'),
(145, '0055317157', 5, 'Salsabila Khairunnisa', 'P', 'Purbalingga', '2005-05-12', '3303145205050001', 'Islam', 'Patemon', '1', '6', '', 'Patemon', 'Kec. Bojongsari', 'Suwito', 'Susiah', 'no_photo'),
(146, '3040320018', 5, 'Selfiatun Saputri', 'P', 'purbalingga', '2004-12-21', '3303146112040002', 'Islam', 'Bumisari', '1', '1', '', 'Bumisari', 'Kec. Bojongsari', 'Turyanto Karjono', 'Turyinah', 'no_photo'),
(147, '0056830176', 5, 'Sovi Rahmadani', 'P', 'Purbalingga', '2005-10-30', '3303097011050002', 'Islam', 'Palumbungan', '1', '4', 'Palumbungan', 'Palumbungan', 'Kec. Bobotsari', 'Mukmin', 'Haliyah', 'no_photo'),
(148, '0054329093', 5, 'Sukma Naila Syafaah Hannan', 'P', 'Pemalang', '2005-02-21', '3327046102050007', 'Islam', 'Majakerta', '2', '1', '', 'MAJAKERTA', 'Kec. Watukumpul', 'Wahnan', 'Indah Purwanti', 'no_photo'),
(149, '0054302082', 5, 'Syahwa Aditia Putri Priandoyo', 'P', 'Purbalingga', '2005-03-10', '3303125003050005', 'Islam', 'Jln Serma Salamun', '1', '7', 'Dusun IV ', 'Pekiringan', 'Kec. Karangmoncol', 'Pamuji Priyandoyo', 'Yuyun', 'no_photo'),
(150, '3058898543', 5, 'Syifa Azizah Saputri', 'P', 'purbalingga', '2005-11-03', '3303144311050003', 'Islam', 'Patemon ', '1', '8', '', 'Patemon', 'Kec. Bojongsari', 'Suprianto', 'Ana Rosanti', 'no_photo'),
(151, '0057206553', 5, 'Tiana Nur Afifah', 'P', 'Purbalingga', '2005-01-26', '3303126601050001', 'Islam', 'Tajug', '3', '3', '', 'Tajug', 'Kec. Karangmoncol', 'Andi Sutarno', 'Neni Indriyani', 'no_photo'),
(152, '0009002403', 5, 'Vini Freminisa Fatihah', 'P', 'Purbalingga', '2005-09-27', '3303146709050003', 'Islam', 'Bumisari', '7', '4', '', 'Bumisari', 'Kec. Bojongsari', 'Kato Riyono', 'Mujiati', 'no_photo'),
(153, '0044133742', 5, 'Wildan Hamada', 'L', 'purbalingga', '2004-05-24', '3303142405040002', 'Islam', 'Gembong ', '3', '2', '', 'Gembong', 'Kec. Bojongsari', 'Mudiarso Sunarso', 'Mutiroh', 'no_photo'),
(154, '0043823858', 5, 'Wulan Astuti', 'P', 'purbalingga', '2004-12-26', '3303086612040004', 'Islam', 'Binngun ', '6', '3', 'Dukuhliru', 'Binangun ', 'Kec. Mrebet', 'Karsid', 'Marlina', 'no_photo'),
(155, '0046510237', 5, 'Yolanda Ribka Saputri', 'P', 'Purbalingga', '2004-06-07', '3303144706040004', 'Islam', 'Kajongan', '2', '7', '', 'Kajongan', 'Kec. Bojongsari', 'Afiat Riyanto', 'Siti Priatin', 'no_photo'),
(156, '0046493545', 6, 'Anggun Roro Ayu', 'P', 'Pemalang', '2004-08-30', '3327037008040002', 'Islam', 'Kuta Lor', '6', '2', 'Kuta', 'Kuta', 'Kec. Belik', 'Wahono', 'Yuliarti', 'no_photo'),
(157, '0068506998', 6, 'Aprizia Bunga Khalawah', 'P', 'purbalingga', '2006-04-09', '3303114404060001', 'Islam', 'Maribaya ', '1', '3', '', 'Maribaya', 'Kec. Karanganyar', 'Hadi Prayitno', 'Markamah ', 'no_photo'),
(158, '0042925589', 6, 'Arzila Artikasari', 'P', 'Purbalingga', '2004-07-05', '3303084507040004', 'Islam', 'Selaganggeng', '4', '1', '', 'Selaganggeng', 'Kec. Mrebet', 'Waskito', 'Susilowati', 'no_photo'),
(159, '0053438294', 6, 'Astrid Silviana Mukti', 'P', 'Purbalingga', '2005-09-21', '3303096109050001', 'Islam', 'Limbasari', '4', '1', 'Limbasari', 'Limbasari', 'Kec. Bobotsari', 'Sutrisno', 'Yunensih', 'no_photo'),
(160, '3057803082', 6, 'Denis Anggraeni Setiya Ningrum', 'P', 'Purbalingga', '2005-09-22', '3303086209050001', 'Islam', 'Pengalusan', '7', '1', '', 'Pengalusan ', 'Kec. Mrebet', 'Kadis ', 'Setiyani ', 'no_photo'),
(161, '0046116776', 6, 'Destriana Khikmatul Azizah', 'P', 'purbalingga', '2004-12-17', '3303185712040002', 'Islam', 'Karangtengah ', '5', '2', '', 'Karangtengah', 'Kec. Kertanegara', 'Rokib', 'Musriyati', 'no_photo'),
(162, '0076056733', 6, 'Dimas Tri Prabowo', 'L', 'Purbalingga', '2004-12-30', '3303093012040001', 'Islam', 'Pakuncen ', '4', '1', 'Pakuncen ', 'Pakuncen', 'Kec. Bobotsari', 'Jono Sapto Prabowo', 'Sujatmi', 'no_photo'),
(163, '0055530467', 6, 'Dinu Afriana Riza', 'P', 'Purbalingga', '2005-04-03', '3303144304050001', 'Islam', 'Beji', '16', '8', '', 'Beji', 'Kec. Bojongsari', 'Riswanto', 'Misyati', 'no_photo'),
(164, '0059626458', 6, 'Eli Sholihah', 'P', 'Purbalingga', '2005-02-06', '3303124602050001', 'Islam', 'Jl. Raya Grugul', '22', '8', 'Mergasa', 'Rajawana', 'Kec. Karangmoncol', 'Daryo Muktiarto', 'Daimah', 'no_photo'),
(165, '0054755882', 6, 'Endah Setiani', 'P', 'Purbalingga', '2005-09-12', '3303131209050002', 'Islam', 'Malang Sumampir', '8', '5', '', 'Sumampir', 'Kec. Rembang', 'Akhir Kholimansyah', 'Rukheni Widiastuti', 'no_photo'),
(166, '0053549502', 6, 'Farah As Sifa', 'P', 'purbalingga', '2005-08-02', '3303144208050003', 'Islam', 'Matenggeng ', '4', '2', '', 'Matenggeng ', 'Kec. Bojongsari', 'Misdar', 'Ruci', 'no_photo'),
(167, '0056820970', 6, 'Firman Noval Ardiansyah', 'L', 'Purbalingga', '2005-09-07', '3303080709050002', 'Islam', 'Cipaku', '2', '7', '', 'Cipaku', 'Kec. Mrebet', 'Sofan Hamdani Yasin', 'Ika Purmiati', 'no_photo'),
(168, '0056278683', 6, 'Habib Damai Faturrahman', 'L', 'Purbalingga', '2004-09-10', '3303091009040001', 'Islam', 'Tlagayasa', '2', '4', 'Tlagayasa', 'Tlagayasa', 'Kec. Bobotsari', 'Sutaryo', 'Maryatun', 'no_photo'),
(169, '0054245633', 6, 'Heni Ramadani', 'P', 'purbalingga', '2005-11-12', '3303144110050002', 'Islam', 'Kajongan ', '1', '7', '', 'Kajongan', 'Kec. Bojongsari', 'Sakim', 'Sunarti', 'no_photo'),
(170, '0054495863', 6, 'Isya Syakila Putri', 'P', 'purbalingga', '2005-08-10', '3301215008050004', 'Islam', 'Limbasari ', '1', '4', '', 'Limbasari', 'Kec. Bobotsari', 'Udinoto', 'Sumirah', 'no_photo'),
(171, '0059056246', 6, 'Maharani Nur Cahyaning', 'P', 'Purbalingga', '2005-06-14', '3303075406050002', 'Islam', 'Karanglewas', '7', '3', '', 'Karanglewas', 'Kec. Kutasari', 'Suharyati', 'Suharyati', 'no_photo'),
(172, '0057222253', 6, 'Mei Agustin', 'P', 'Purbalingga', '2005-05-13', '3303125305050002', 'Islam', 'Karangmiri', '1', '9', 'Karangmiri', 'Baleraksa', 'Kec. Karangmoncol', 'Agus Tiawan', 'Marfungah', 'no_photo'),
(173, '0049978657', 6, 'Nafisyah Nur Ramadani', 'P', 'Purbalingga', '2004-10-28', '', 'Islam', 'Dagan', '4', '2', '', 'Dagan', 'Kec. Bobotsari', 'Kuswanto', 'Suratmi', 'no_photo'),
(174, '3046094999', 6, 'Noviyanti', 'P', 'purbalingga', '2004-11-06', '3303084611030002', 'Islam', 'Selaganggeng', '3', '1', '', 'Selaganggeng', 'Kec. Mrebet', 'Bekti Susanto', 'Rustianti', 'no_photo'),
(175, '0069941596', 6, 'Nur Fidiya Putri', 'P', 'Purbalingga', '2006-01-25', '3303116501060001', 'Islam', 'Maribaya', '2', '2', '', 'Maribaya', 'Kec. Karanganyar', 'Nasirwan', 'Sopiyah', 'no_photo'),
(176, '0044644893', 6, 'Pujja Puspita Ayudia', 'P', 'Purbalingga', '2004-08-28', '3303136808040008', 'Islam', 'Tanalum', '2', '1', '', 'Tanalum', 'Kec. Rembang', 'Surakhmat', 'Siti Indaryani', 'no_photo'),
(177, '0059369663', 6, 'Rahayu Setiani', 'P', 'Purbalingga', '2005-04-04', '3303144404050002', 'Islam', 'Beji', '19', '8', '', 'Beji', 'Kec. Bojongsari', 'Susmianto Aswin', 'Kaswati', 'no_photo'),
(178, '0026242368', 6, 'Ruri Delvi Triana', 'P', 'purbalingga', '2002-12-11', '3303145112020004', 'Islam', 'bumisari', '16', '8', '', 'bumisari', 'Kec. Bojongsari', 'Gayat Tri lasnowo ', 'Lasmiati', 'no_photo'),
(179, '0056219816', 6, 'Selfi', 'P', 'purbalingga', '2005-11-16', '3303145611050001', 'Islam', 'Bojongsari', '', '', '', 'Bojongsari', 'Kec. Bojongsari', 'Rasmo', 'Ariyati', 'no_photo'),
(180, '0053699514', 6, 'Selviana Dewi Astuti', 'P', 'Purbalingga', '2005-01-29', '3303136901050001', 'Islam', 'Bawahan', '4', '6', '', 'Gunung Wuled', 'Kec. Rembang', 'Sarjono', 'Jarmini', 'no_photo'),
(181, '0054964082', 6, 'Sri Endah Lestari', 'P', 'purbalingga', '2005-03-29', '3303146903050001', 'Islam', 'Pekalongan ', '', '', '', 'Pekalongan', 'Kec. Bojongsari', 'Hermanto Misman', 'Marwati', 'no_photo'),
(182, '0055805765', 6, 'Sulfi Dea Nur Kholifatullah', 'P', 'Purbalingga', '2005-11-24', '3303146411050001', 'Islam', 'Pekalongan', '3', '10', '', 'Pekalongan', 'Kec. Bojongsari', 'Ahmad Nurhaerin Sarkim', 'Alfiah', 'no_photo'),
(183, '0054339719', 6, 'Syifa Ade Saputri', 'P', 'purbalingga', '2005-03-08', '3303184803050001', 'Islam', 'Karang Tengah  ', '1', '1', '', 'Karangtengah ', 'Kec. Kertanegara', 'Saryono Alfan Azizi', 'Kusmiati', 'no_photo'),
(184, '0043817589', 6, 'Tasya Amalina', 'P', 'Tanggerang', '2004-06-24', '3303086406040002', 'Islam', 'Mangunegara ', '6', '2', '', 'Mangunegara', 'Kec. Mrebet', 'Zulfadi', 'Titik Puspaeni ', 'no_photo'),
(185, '0053256833', 6, 'Uli Agustinasari', 'P', 'Purbalingga', '2005-08-16', '3303125608050001', 'Islam', 'Tamansari', '1', '17', '', 'Tamansari', 'Kec. Karangmoncol', 'Iwan Munandar', 'Dewi Rusanti', 'no_photo'),
(186, '0028362774', 6, 'Vita Anggraeni', 'P', 'Purbalingga', '2005-03-15', '3303095503050001', 'Islam', 'Karangtalun ', '4', '3', 'BAK', 'Karangtalun ', 'Kec. Bobotsari', 'Dahono Hadi Trisnanto', 'Sudiyah ', 'no_photo'),
(187, '0046816234', 6, 'Wisnu', 'L', 'Purbalingga', '2004-08-22', '3303142208040001', 'Islam', 'Banjaran', '23', '12', 'Sawangan', 'Banjaran', 'Kec. Bojongsari', 'Sakimin', 'Marsinah', 'no_photo'),
(188, '0057413205', 6, 'Yesi Agustin', 'P', 'Purbalingga', '2005-08-17', '3303185708050001', 'Islam', 'Karangpule', '4', '1', 'Karangpule', 'Karangpucung', 'Kec. Kertanegara', 'Eko Purwanto', 'Sri Pamuji', 'no_photo'),
(189, '0057741545', 6, 'Yulia Wulansari', 'P', 'Purbalingga', '2005-07-06', '3303061607050002', 'Islam', 'Cipaku', '1', '6', 'Siwadas', 'Cipaku', 'Kec. Mrebet', 'Sarikun ', 'Sulasih', 'no_photo'),
(190, '9999027115', 11, 'Adinda Efriliana', 'P', 'Purbalingga', '2006-04-24', '3303086404060003', 'Islam', 'Serayukaranganyar', '5', '3', '', 'Serayukaranganyar', 'Kec. Mrebet', 'Kusisno', 'Enti Sukesih', 'no_photo'),
(191, '0052978231', 11, 'Anggi Dwi Nurrohmah', 'P', 'Purbalingga', '2005-06-14', '3303141407050001', 'Islam', 'Bumisari', '13', '6', '', 'Bumisari', 'Kec. Bojongsari', 'suratno', 'sri suratmi', 'no_photo'),
(192, '0063938699', 11, 'Anisa', 'P', 'purbalingga', '2006-04-24', '3303116404060001', 'Islam', 'Kabunderan ', '4', '1', '', 'Kabunderan', 'Kec. Karanganyar', 'Miswadi', 'Ruminah ', 'no_photo'),
(193, '0052642801', 11, 'Anita Aprilia', 'P', 'purbalingga', '2006-04-15', '3303095504060003', 'Islam', 'Karangtalun ', '3', '3', 'Karangtalun ', 'Karangtalun', 'Kec. Bobotsari', 'Sudarmo', 'Sainah ', 'no_photo'),
(194, '3042814090', 11, 'Annisa Muktinti', 'P', 'Purbalingga', '2004-11-22', '3303146211040001', 'Islam', 'Karangbanjar ', '20', '8', 'Karangsempu', 'KarangBanjar', 'Kec. Bojongsari', 'Suparman', 'Wasiti', 'no_photo'),
(195, '0059422817', 11, 'Atta Wahyu Pratama', 'P', 'Banjarnegara', '2005-04-05', '3304120504050003', 'Islam', 'Karangjambe', '2', '1', 'Karangjambe', 'Pandanarum', 'Kec. Pandanarum', 'Haerul', 'Sulisyati', 'no_photo'),
(196, '3059501526', 11, 'Aulia Nur Amaliyana', 'P', 'Pemalang', '2005-08-15', '3327035509050003', 'Islam', 'Belik', '', '', '', 'Belik', 'Kec. Belik', 'Karyono', 'Yatni', 'no_photo'),
(197, '0053019046', 11, 'Cindy Oktaviani', 'P', 'Pemalang', '2005-10-08', '3327034810050005', 'Islam', 'Belik', '2', '4', 'Kepetek', 'Belik', 'Kec. Belik', 'Suritno', 'Aji Kurniasih', 'no_photo'),
(198, '0050811905', 11, 'Deni Ferdiyanto', 'L', 'purbalingga', '2005-02-18', '3303101802050001', 'Islam', 'Karangreja ', '1', '3', '', 'Karangreja', 'Kec. Karangreja', 'Isgianto', 'Karsini', 'no_photo'),
(199, '0052425503', 11, 'Dhiya Ahza Mutie', 'P', 'Purbalingga', '2005-04-01', '3303144104050002', 'Islam', 'Kajongan', '1', '8', 'Kajongan', 'Kajongan', 'Kec. Bojongsari', 'Maman Supratman', 'Cubarti', 'no_photo'),
(200, '0055683971', 11, 'Dwi Retno Asih', 'P', 'Purbalingga', '2005-03-23', '3303096303050003', 'Islam', 'Dagan', '2', '9', '', 'Dagan', 'Kec. Bobotsari', 'Sarno Sumarjo', 'Miswati', 'no_photo'),
(201, '0059717915', 11, 'Eka Septiani', 'P', 'Purbalingga', '2005-09-03', '3303084309050002', 'Islam', 'Binangun ', '5', '1', '', 'BInangun', 'Kec. Mrebet', 'Sarwono', 'Katiaih ', 'no_photo'),
(202, '0052634324', 11, 'Endah Wahyuningsih', 'P', 'Purbalingga', '2005-06-04', '330307446050001 ', 'Islam', 'JL. Raya Dawuan', '10', '4', 'Dawuan', 'Sumingkir', 'Kec. Kutasari', 'Ahmad Wahyudi', 'Heni Kuswanti', 'no_photo'),
(203, '0052750253', 11, 'Faeha Nada Nur Barokah', 'P', 'Purbalingga', '2005-06-01', '3303084106050001', 'Islam', 'Mangunegara', '5', '2', '', 'Mangunegara', 'Kec. Mrebet', 'Ifan Sunaryo', 'Nur Istiati', 'no_photo'),
(204, '0053093222', 11, 'Gina Aprilia', 'P', 'Pemalang', '2005-04-10', '3327035004050007', 'Islam', 'Kuta Kidul', '18', '4', 'Kuta Kidul ', 'Kuta', 'Kec. Belik', 'Raminto', 'Muryati', 'no_photo'),
(205, '0052850040', 11, 'Hana Rifa Pertiwi', 'P', 'Purbalingga', '2005-03-04', '3303104403050002', 'Islam', 'JL Raya Karangreja ', '3', '4', '', 'Karangreja', 'Kec. Karangreja', 'Kundang Saputra', 'Wainah', 'no_photo'),
(206, '0052265832', 11, 'Ika Triana', 'P', 'Purbalingga', '2005-04-17', '3303175704050001', 'Islam', 'Jalan Raya Karangjambu', '19', '6', 'Bandingan', 'Karangjambu', 'Kec. Karangjambu', 'Ratim Kusyadi ', 'Kusmini', 'no_photo'),
(207, '0046292900', 11, 'Ilham Fauzan', 'L', 'Purbalingga', '2004-07-28', '3303102807040004', 'Islam', '(tidak diisi)', '3', '5', '', 'Karangreja ', 'Kec. Karangreja', 'Pardi', 'Darsih', 'no_photo'),
(208, '0054867323', 11, 'Irvan Galih Sutomo', 'L', 'Purbalingga', '2004-08-28', '3303112308040001', 'Islam', 'Brakas,Karanganyar,Purbalingga', '3', '1', 'Brakas', 'Brakas', 'Kec. Karanganyar', 'Miarso', 'Kamiatun', 'no_photo'),
(209, '0051041491', 11, 'Junani', 'P', 'Purbalingga', '2005-12-11', '3303105112050003', 'Islam', 'Kutabawa', '17', '5', 'Bambangan', 'Kutabawa', 'Kec. Karangreja', 'Nurochim', 'RATMI ', 'no_photo'),
(210, '0029784855', 11, 'Melani Hermawati', 'P', 'Purbalingga', '2002-10-20', '3303086010020002', 'Islam', 'Jl. Bithing', '2', '3', 'Bithing', 'Pengalusan', 'Kec. Mrebet', 'Darman ', 'Triswati', 'no_photo'),
(211, '0053105025', 11, 'Meli Wulandari', 'P', 'purbalingga', '2005-05-21', '3303146105050004', 'Islam', 'Pagedangan', '', '', '', 'Pagedangan', 'Kec. Bojongsari', 'Romiarso', 'Sanginah', 'no_photo'),
(212, '0045988755', 11, 'Muna Fadilah Kinanti', 'P', 'Cilacap', '2004-11-28', '3301146811040002', 'Islam', 'Jl. Dr. Soetomo', '1', '10', 'Jenang Utara', 'Jenang', 'Kec. Majenang', 'Wartono', 'Karwijah', 'no_photo'),
(213, '0045382225', 11, 'Oktavia Labibah', 'P', 'purbalingga', '2004-10-31', '3303147110040002', 'Islam', 'Karangbanjar ', '17', '7', '', 'Karangbanjar ', 'Kec. Bojongsari', 'Mislam', 'Fatimah', 'no_photo'),
(214, '0056201609', 11, 'Qowiyyun Roufun', 'P', 'Pemalang', '2004-06-10', '3327035006040006', 'Islam', 'Beluk', '33', '8', 'Krajan', 'Beluk', 'Kec. Belik', 'Daryono', 'Sutriyati', 'no_photo'),
(215, '0043443119', 11, 'Revi Erdiana', 'P', 'Purbalingga', '2004-12-07', '3303094712040001', 'Islam', 'Bobotsari', '2', '10', 'Bobotsari', 'Bobotsari', 'Kec. Bobotsari', 'Rohadi Hadi P', 'Suhamdi', 'no_photo'),
(216, '0053017334', 11, 'Riski Dewiyanti', 'P', 'Pemalang', '2005-06-24', '3327036406050003', 'Islam', 'Mendelem ', '2', '8', '', 'Mendelem ', 'Kec. Belik', 'Waryat', 'Sairah', 'no_photo'),
(217, '0048832947', 11, 'Rita Rahmawati', 'P', 'Purbalingga', '2004-12-28', '3303116812040001', 'Islam', 'Brakas ', '3', '2', '', 'Brakas ', 'Kec. Karanganyar', 'dayin', 'Rianti', 'no_photo'),
(218, '0054284633', 11, 'Rohmah Nur Baiti', 'P', 'Banjarnegara', '2005-03-24', '3303116403050001', 'Islam', 'Kalijaran ', '2', '4', 'Kalijaran ', 'Kalijaran ', 'Kec. Karanganyar', 'Khadirin', 'Naryati', 'no_photo'),
(219, '0049229589', 11, 'Sasi Amalia Ramadhani', 'P', 'Purbalingga', '2004-10-18', '3303185810040003', 'Islam', 'Karangasem', '1', '4', '', 'Karangasem', 'Kec. Kertanegara', 'Ahmad Sohirin', 'Sumarti', 'no_photo'),
(220, '3059630693', 11, 'Sekar Arum', 'P', 'Bekasi ', '2005-06-02', '3303084402050001', 'Islam', 'Binangun ', '6', '1', '', 'BInangun', 'Kec. Mrebet', 'Puji Nugroho', 'Suryati', 'no_photo'),
(221, '0048594260', 11, 'Sevianti', 'P', 'Purbalingga', '2004-09-01', '3303175201010001', 'Islam', 'Sanguwatang ', '2', '1', '', 'Sanguwatang ', 'Kec. Karangjambu', 'Slamet Riyadi', 'Munjianti', 'no_photo'),
(222, '3909894533', 11, 'Sherly N Pratama', 'P', 'purbalingga', '2004-11-21', '3303122111040001', 'Islam', 'Karangsari ', '2', '7', '', 'Celeleng', 'Kec. Karangmoncol', 'Muldiyanto', 'Ida Farida', 'no_photo'),
(223, '3900307398', 11, 'Syaifi Fadilla', 'P', 'Purbalingga', '2005-01-27', '3303181203080003', 'Islam', 'Karang tengah', '', '', '', 'Karang tengah', 'Kec. Kertanegara', 'Ali Mahfud', 'Tasriah', 'no_photo'),
(224, '0041925631', 11, 'Tata Irmadani', 'P', 'Purbalingga', '2004-10-24', '3303116410040002', 'Islam', 'Karanganyar', '5', '1', '', 'Karanganyar', 'Kec. Karanganyar', 'Sudiyanto', 'Wakhyuni', 'no_photo'),
(225, '0047720503', 11, 'Winda Istikomah', 'P', 'Purbalingga', '2004-05-21', '3303096105040001', 'Islam', 'Karangmalang ', '2', '8', '', 'Karangmalang', 'Kec. Bobotsari', 'Aksan ', 'Entin Hartini ', 'no_photo'),
(226, '0053090536', 12, 'Anggi Novita Sari', 'P', 'Pemalang', '2005-06-15', '3327035506050010', 'Islam', 'Sodong', '2', '1', 'Sodong ', 'Sikasur', 'Kec. Belik', 'Mulyanto', 'Kamirah', 'no_photo'),
(227, '3045240527', 12, 'Anisa Irma', 'P', 'Purbalingga ', '2004-09-05', '3303114509040001', 'Islam', 'Kalijaran', '2', '4', '', 'Kalijaran', 'Kec. Karanganyar', 'Kusnadi', 'Tusiyah', 'no_photo'),
(228, '0045072926', 12, 'Anissa Novianti', 'P', 'Purbalingga', '2004-11-11', '3303115111040002', 'Islam', 'Kasih', '5', '3', 'kasih', 'Kasih', 'Kec. Kertanegara', 'Sahud Supendi', 'Sumeni', 'no_photo'),
(229, '0056536862', 12, 'Annisa Salsabilla', 'P', 'Purbalingga', '2005-05-20', '3303086005050003', 'Islam', 'Bojong ', '1', '2', 'Purbalingga Lor', 'Purbalingga Lor', 'Kec. Purbalingga', 'Agus Sujarah', 'Indri Listyani', 'no_photo'),
(230, '0049882566', 12, 'Astrit Triana', 'P', 'Purbalingga', '2004-01-11', '3303095101040002', 'Islam', 'Karangduren', '2', '5', 'Karangduren', 'Karangduren', 'Kec. Bobotsari', 'Sachudi', 'Ani Widiastuti', 'no_photo'),
(231, '0057009263', 12, 'Azizah Insani', 'P', 'Purbalingga', '2005-04-04', '3303134404050001', 'Islam', 'Tanalum', '1', '3', '', 'Tanalum', 'Kec. Rembang', 'Mustopo', 'Solikhatun', 'no_photo'),
(232, '0053568215', 12, 'Choerul Isnan Nawawi', 'L', 'purbalingga', '2005-04-19', '3303081904050002', 'Islam', 'Onje ', '1', '1', '', 'Onje', 'Kec. Mrebet', 'Nur Chosim', 'Nuruliyatun', 'no_photo'),
(233, '0053525299', 12, 'Dahlia Widi Setiawati', 'P', 'Banjarnegara', '2005-08-19', '3304115908050001', 'Islam', 'Bandingan', '3', '2', '', 'Bandingan', 'Kec. Rakit', 'Mukim', 'Endon Erowati', 'no_photo'),
(234, '0055480461', 12, 'Dila Islami Putri', 'P', 'Purbalingga', '2005-02-13', '3303085302050001', 'Islam', 'Jl.Putut I', '3', '4', 'Putut I', 'Serayularangan', 'Kec. Mrebet', 'Kadikun', 'Setiani', 'no_photo'),
(235, '0068351090', 12, 'Dwi Aulia Yulisa', 'P', 'Purbalingga', '2006-01-26', '3303086601060001', 'Islam', 'Sangkanayu', '17', '5', 'Kadus 3', 'Sangkanayu', 'Kec. Mrebet', 'Sugiono', 'Suryaningsih', 'no_photo'),
(236, '3057340498', 12, 'Elsa Safitri', 'P', 'purbalingga', '2005-07-30', '3303127007030001', 'Islam', 'Kaliputih', '', '', '', 'Karangsari', 'Kec. Karangmoncol', 'Akhmad Khamidin', 'Sartini', 'no_photo'),
(237, '3049619083', 12, 'Elza Monita Nur Istiqomah Priyanto', 'P', 'purbalingga', '2004-12-15', '3303034111010001', 'Islam', 'Nangkasawit RT 01 RW 01', '1', '1', '', 'Nangkasawit', 'Kec. Kejobong', 'Welas Priyanto', 'Suparti', 'no_photo'),
(238, '0059257133', 12, 'Filda Dimas Santosa', 'L', 'Purbalingga', '2005-06-27', '3303122706050004', 'Islam', 'Tamansari', '1', '17', '', 'Tamansari', 'Kec. Karangmoncol', 'Suwanto', 'Poniyah', 'no_photo'),
(239, '0056922281', 12, 'Hanifah Novisari Mukti', 'P', 'Purbalingga', '2005-11-24', '3303116404050003', 'Islam', 'Gampingan', '2', '1', 'Gampingan', 'Buara', 'Kec. Karanganyar', 'Mujiono', 'Sukatmi', 'no_photo'),
(240, '0053323063', 12, 'Idri Yani', 'P', 'purbalingga', '2005-05-05', '3303080505050007', 'Islam', 'Tangkisan RT 03 RW 06', '3', '5', '', 'Tangkisan', 'Kec. Mrebet', 'Mistono', 'Mistiah', 'no_photo'),
(241, '0072359459', 12, 'Iqlima Lulu Nadhiroh', 'P', 'purbalingga', '2005-04-03', '3303094304050001', 'Islam', 'Karangduren ', '1', '1', '', 'KARANGDUREN', 'Kec. Bobotsari', 'Mufidin', 'Kasinah', 'no_photo'),
(242, '0056013935', 12, 'Keisya Pinasti Yulaekha', 'P', 'purbalingga', '2005-04-18', '3303115804050002', 'Islam', 'Lumpang', '1', '1', '', 'Lumpang', 'Kec. Karanganyar', 'Yulianto', 'Liza Endarwati', 'no_photo'),
(243, '0064014096', 12, 'Livia Ayu Laraswati', 'P', 'Serang Banten', '2006-01-01', '3303094101060001', 'Islam', 'Talagening', '3', '6', 'Talagening', 'Talagening', 'Kec. Bobotsari', 'Suhim', 'Widanarti', 'no_photo');
INSERT INTO `anggota` (`id_anggota`, `nisn`, `id_kelas`, `nm_anggota`, `jk_anggota`, `tempatlahir_anggota`, `tgllahir_anggota`, `nik_anggota`, `agama_anggota`, `alamat_anggota`, `rt`, `rw`, `dusun`, `kelurahan`, `kecamatan`, `nama_ayah`, `nama_ibu`, `foto_anggota`) VALUES
(244, '0053307690', 12, 'Mistianingsih', 'P', 'Purbalingga', '2005-05-05', '3303044505050001', 'Islam', 'Sidareaj', '12', '5', 'Catutan', 'Sidareja', 'Kec. Kaligondang', 'Sunarsin', 'Jumiati', 'no_photo'),
(245, '0052950538', 12, 'Muflikhun', 'L', 'Purbalingga', '2005-02-11', '3303171102050002', 'Islam', 'Sirandu', '3', '3', 'Sirandu', 'Sirandu', 'Kec. Karangjambu', 'Sodirin', 'Eryatun', 'no_photo'),
(246, '3043768339', 12, 'Novita', 'P', 'Pemalang', '2004-11-15', '3327035511040006', 'Islam', 'Karangjambu', '', '', '', 'Bandingan', 'Kec. Karangjambu', 'Dakim', 'Aisah', 'no_photo'),
(247, '0046492588', 12, 'Okiyatun Muna', 'P', 'Pemalang', '2005-07-14', '3327035407050004', 'Islam', 'Bulakan ', '3', '7', '', 'Bulakan', 'Kec. Belik', 'Pujianto', 'Daisah', 'no_photo'),
(248, '0049120296', 12, 'Rafika Linda Istiqomah', 'P', 'Purbalingga', '2004-04-13', '3303055304040001', 'Islam', 'Gang Blumbang ', '3', '3', 'Blumbang ', 'Purbalingga Lor', 'Kec. Purbalingga', 'Solechan', 'Nur Hidayati', 'no_photo'),
(249, '0056494349', 12, 'Rio Boydinda Tabah Anggara', 'L', 'Purbalingga', '2005-02-27', '3303122702050003', 'Islam', 'Karangwuni', '2', '2', 'Karangwuni', 'Tamansari', 'Kec. Karangmoncol', 'Sobar Hadi Sutrisno', 'Eni Kristiorini', 'no_photo'),
(250, '0052301310', 12, 'Riska Cahya Aulia', 'P', 'Purbalingga', '2005-02-05', '3303134502050002', 'Islam', 'Datar', '2', '2', '', 'Tanalum', 'Kec. Rembang', 'Kasno', 'Sumiati', 'no_photo'),
(251, '0057935269', 12, 'Rismawanti Utami', 'P', 'Purbalingga', '2005-01-02', '3303084201050005', 'Islam', 'Dukuh Kecomberan', '6', '2', '', 'Pengalusan', 'Kec. Mrebet', 'Herman', 'Subur Prianti', 'no_photo'),
(252, '0055147633', 12, 'Rosdiana Olifia Saputri', 'P', 'Purbalingga', '2005-10-02', '3303074210050001', 'Islam', 'Kutasari', '11', '6', 'Dusun 3', 'Kutasari', 'Kec. Kutasari', 'Suyitno', 'Sri Martini', 'no_photo'),
(253, '0055603774', 12, 'Sari', 'P', 'Ciamis', '2005-02-17', '3207275702050001', 'Islam', 'Cipsku ', '30', '12', 'Cipaku ', 'Cigugur', 'KEC. CIGUGUR', 'Selamet', 'Siti Maryati', 'no_photo'),
(254, '0056819378', 12, 'Sela Oktaviani', 'P', 'Purbalingga', '2005-10-17', '3303145710050001', 'Islam', 'Pekalongan', '2', '7', '', 'Pekalongan', 'Kec. Bojongsari', 'Misno', 'Watem', 'no_photo'),
(255, '0058527351', 12, 'Selly Puspitasari', 'P', 'Purbalingga', '2005-06-10', '3303085006050004', 'Islam', 'Jalan 61 ', '0', '0', 'Desa61 ', 'Desa61', 'Kec. Mrebet', 'Rusman', 'Rohyati', 'no_photo'),
(256, '0047625917', 12, 'Siti Nakhdiyatul Mega', 'P', 'Jakarta', '2004-11-04', '3303094411040001', 'Islam', 'Pakuncen Rt 2 Rw 5', '2', '5', '', 'Dawuhan ', 'Kec. Bobotsari', 'Achmad Warsidin', 'Wahyati', 'no_photo'),
(257, '3043221609', 12, 'Susi Yati Amin', 'P', 'Lampung Timur', '2004-09-20', '1807136009040002', 'Islam', 'Jln. Onje No 2', '1', '6', '', 'Purbalingga lor', 'Kec. Purbalingga', 'Jumadi Anwar', 'Siti Komariyah', 'no_photo'),
(258, '0041183428', 12, 'Tri Susanti', 'P', 'Purbalingga', '2004-12-21', '3303176112040001', 'Islam', '-', '0', '0', 'Bandingan', 'Karangjambu', 'Kec. Karangjambu', 'Nur Afif Tarman', 'Rowanti', 'no_photo'),
(259, '0059507408', 12, 'Vela Dwi Mareta', 'P', 'Purbalingga', '2005-03-05', '3303044503050001', 'Islam', 'Brecek', '2', '2', 'brecek', 'Brecek', 'Kec. Kaligondang', 'Yuli Masriman', 'Aryatin', 'no_photo'),
(260, '0031627753', 12, 'Wulandari Deswindra', 'P', 'Purbalingga', '2003-12-03', '3303134312030002', 'Islam', 'Pandak', '12', '2', '', 'Sumampir', 'Kec. Rembang', 'Indra Jayusman', 'Wiasih', 'no_photo'),
(261, '0054552365', 12, 'Yessi Tri Agustin', 'P', 'Purbalingga', '2005-08-14', '3303085408050003', 'Islam', 'Serayularangan', '1', '1', '', 'Serayularangan', 'Kec. Mrebet', 'Imam Subchi', 'Pawit Irwati', 'no_photo'),
(262, '0075177012', 0, 'Agus Prastian', 'L', 'Purbalingga', '2007-08-23', '', 'Kristen Katolik', 'Pengalusan', '5', '3', '', '', 'Mrebet', 'Imam Pamuji Sartono', 'Elina', 'no_photo'),
(263, '0068408617', 0, 'Alisa Wafiq Azizah', 'P', 'Purbalingga', '2006-08-15', '', 'Islam', 'Cipaku', '2', '3', '', '', 'Mrebet', 'Ujang Rusian', 'Ropingah', 'no_photo'),
(264, '', 0, 'Amelia', 'P', 'Purbalingga', '2007-03-25', '', 'Islam', 'Kalijaran', '1', '5', '', '', 'Karanganyar', 'Karmen', 'Salamah', 'no_photo'),
(265, '0073698464', 0, 'Anisa Widi Pratami', 'P', 'Purbalingga', '2007-01-14', '', 'Islam', 'Kajongan', '3', '8', '', '', 'Bojongsari', 'Rudianto', 'Siwi Oktiana', 'no_photo'),
(266, '0062761612', 0, 'Asaifah Hijriatun Kurniati', 'P', 'Purbalingga', '2007-12-17', '', 'Islam', 'Serang', '6', '2', '', '', 'karangreja', 'Sunardi Sularno', 'Sartiyah', 'no_photo'),
(267, '0089593205', 0, 'Asyifa As Zahra', 'P', 'Purbalingga', '2008-04-08', '', 'Islam', 'tangkisan', '2', '4', '', '', 'Mrebet', 'Karyanto', 'Khadirah', 'no_photo'),
(268, '0072768071', 0, 'Azahra Apriliana Putri', 'P', 'Jakarta', '2007-04-07', '', 'Islam', 'Karangbanjar', '14', '5', '', '', 'Bojongsari', 'Sunaryo', 'Surinah', 'no_photo'),
(269, '0073689527', 0, 'Delsa Cynthia Sari', 'P', 'Purbalingga', '2007-12-19', '', 'Islam', 'Mangunegara', '7', '1', '', '', 'Mrebet', 'Sarimin Thalif', 'Muhyati', 'no_photo'),
(270, '0075373758', 0, 'Derani Salsa  Nur Azizah', 'P', 'Purbalingga', '2006-12-26', '', 'Islam', 'Ponjen', '3', '3', '', '', 'Karanganyar', 'Achmad Yasin Soimun', 'Isah Nur Hidayat', 'no_photo'),
(271, '0076667326', 0, 'Dewi Sartika', 'P', 'Purbalingga', '2007-08-18', '', 'Islam', 'Karangturi', '2', '1', '', '', 'Mrebet', 'Ahmad Bajuri', 'Jariah', 'no_photo'),
(272, '', 0, 'Elvi Kirana Wati', 'P', 'Purbalingga', '0000-00-00', '', 'Islam', 'Bobotsari', '1', '12', '', '', 'Bobotsari', 'Kuswinarno', 'Sri Handayani', 'no_photo'),
(273, '', 0, 'Endah Maelani', 'P', 'Purbalingga', '2006-05-29', '', 'Islam', 'Tumanggal', '10', '3', '', '', 'Pengadegan', 'Jarmono', 'Amirah', 'no_photo'),
(274, '0079362587', 0, 'Etsa Dwi Maryam', 'P', 'Purbalingga', '2007-05-20', '', 'Islam', 'Tegalpingen', '4', '4', '', '', 'Pengadegan', 'Sukhaol Nur Suhada', 'Musrofah', 'no_photo'),
(275, '0062632750', 0, 'Fajar Saputra  R', 'L', 'Purbalingga', '2006-10-19', '', 'Islam', 'Gembong', '6', '3', '', '', 'Bojongsari', 'Suyitno', 'Dian Ristiani', 'no_photo'),
(276, '0072228732', 0, 'Febiana Tria Nandira', 'P', 'Purbalingga', '2007-02-26', '', 'Islam', 'Panusupan', '4', '5', '', '', 'Rembang', 'Imam Sutarno', 'Kusyati', 'no_photo'),
(277, '0076560753', 0, 'Fita Nurrohmah SH', 'P', 'Purbalingga', '2007-07-27', '', 'Islam', 'Jambu Desa', '4', '4', '', '', 'Karanganyar', 'Miswan', 'Lutfiah', 'no_photo'),
(278, '0088179947', 0, 'Hafna Ilmi Mukhola', 'P', 'Pemalang', '2008-01-13', '', 'Islam', 'Badak', '2', '5', '', '', 'Belik', 'Ruli Yanto', 'Tuti', 'no_photo'),
(279, '0072481279', 0, 'Haifa Farihatul Fatihah', 'P', 'Purbalingga', '2007-01-09', '', 'Islam', 'Beluk Krajan', '31', '7', '', '', 'Belik', 'Arisro', 'Sis Tri Yayanti', 'no_photo'),
(280, '0066097336', 0, 'Hesti Nur harzani', 'P', 'Tegal', '2006-10-31', '', 'Islam', 'Karangjambu', '1', '1', '', '', 'Purbalingga', 'Munadzir', 'Harnati', 'no_photo'),
(281, '', 0, 'Icha Novia', 'P', 'Purbalingga', '2006-11-30', '', 'Islam', 'Tlagayasa', '2', '7', '', '', 'Bobotsari', 'Misrono', 'Darwati', 'no_photo'),
(282, '0075211187', 0, 'Inayatul Ulwi Awalia', 'P', 'Pemalang', '2007-06-05', '', 'Islam', 'Belik', '', '', '', '', 'Pemalang', 'Imanto', 'Siti Nur Hayati', 'no_photo'),
(283, '0088335387', 0, 'Inka Laura Sari', 'P', 'Purbalingga', '2008-07-18', '', 'Islam', 'Bojongsari', '2', '7', '', '', 'Bojongsari', 'Sartono', 'Nia Daniati', 'no_photo'),
(284, '0075593533', 0, 'Intan Anastasya', 'P', 'Purbalingga', '2007-03-05', '', 'Islam', 'Kalijaran', '3', '6', '', '', 'Karanganyar', 'Akhmad Sopandi', 'Ponirah', 'no_photo'),
(285, '', 0, 'Isnaeni Fatimatu Zahro', 'P', 'Purbalingga', '2007-01-16', '', 'Islam', 'Pakuncen', '1', '3', '', '', 'Bobotsari', 'Wardoyo', 'Sri Hamzati', 'no_photo'),
(286, '', 0, 'Lina Tuftakiyah', 'P', 'Purbalingga', '2005-11-01', '', 'Islam', 'Tegal Pingen', '5', '2', '', '', 'pengadegan', 'Edi Wahyanto', 'Wahyati', 'no_photo'),
(287, '0073448046', 0, 'Lulu Savira Indah', 'P', 'Purbalingga', '2007-07-17', '', 'Islam', 'Ponjen ', '4', '3', '', '', 'Karanganyar', 'Ach. Agus Widiyanto', 'Fitriana', 'no_photo'),
(288, '0077671022', 0, 'Lusiana Putri Pratiwi', 'P', 'Purbalingga', '2007-03-07', '', 'Islam', 'karangduren', '3', '1', '', '', 'Bobotsari', 'Slamet', 'Aprianti', 'no_photo'),
(289, '', 0, 'Lusiana Rahmawati', 'P', 'Purbalingga', '2007-06-26', '', 'Islam', 'Bumisari', '6', '4', '', '', 'Bojongsari', 'Nur Ikhsanudin', 'Sestri Wiyanti', 'no_photo'),
(290, '0068597735', 0, 'Lutfiana Usmanah', 'P', 'Purbalingga', '2006-12-07', '', 'Islam', 'Pekalongan', '2', '4', '', '', 'Bojongsari', 'Riswanto Alsuparmin', 'Miswati', 'no_photo'),
(291, '0073323269', 0, 'Malva Kayla Febriyani', 'P', 'Brebes', '2007-02-15', '', 'Islam', 'Tamansari', '1', '13', '', '', 'Karangmoncol', 'Sujono', 'Sri Mundiroh', 'no_photo'),
(292, '0074878624', 0, 'Meila Avdaera Vega', 'P', 'Purbalingga', '2007-05-05', '', 'Islam', 'Onje', '2', '8', '', '', 'Mrebet', 'Alm. Narso', 'Mistirah', 'no_photo'),
(293, '', 0, 'Meisya Ristianti', 'P', 'Pemalang', '2007-05-08', '', 'Islam', 'belik', '3', '7', '', '', 'Belik', 'Rusmanto', 'Kurniati', 'no_photo'),
(294, '0073628809', 0, 'Meita Silva', 'P', 'Purbalingga', '2007-05-14', '', 'Islam', 'Serayu Kr.Anyar', '1', '2', '', '', 'Mrebet', 'Ratin', 'Misni', 'no_photo'),
(295, '3078005962', 0, 'Meliana saputri', 'P', 'Banyumas', '2007-07-01', '', 'Islam', 'Gandotapa', '1', '1', '', '', 'kutasari', 'Tugiyono', 'Darsih', 'no_photo'),
(296, '', 0, 'Merlinda Nur Febriani', 'P', 'Purbalingga', '2006-02-24', '', 'Islam', 'Onje', '2', '1', '', '', 'Mrebet', 'Ridwan', 'almh. Khatinah', 'no_photo'),
(297, '', 0, 'Nabila Ibti Samah', 'P', 'Purbalingga', '2007-03-02', '', 'Islam', 'Beji', '14', '7', '', '', 'Bojongsari', 'Akh Sahri Kusdirin', 'Siti Khotijah', 'no_photo'),
(298, '3072478344', 0, 'Nadia Fika', 'P', 'Purbalingga', '2007-09-09', '', 'Islam', 'Langkap', '5', '3', '', '', 'Kertanegara', 'Yadi Prasetyo', 'Nani Haryani', 'no_photo'),
(299, '', 0, 'Naela Nabilatuz Zaqia', 'P', 'Purbalingga', '2007-05-01', '', 'Islam', 'Krangean', '3', '2', '', '', 'Kertanegara', 'kusminto', 'dian yayuk suseno', 'no_photo'),
(300, '0074656296', 0, 'Natasya Wulandari', 'P', 'Purbalingga', '2007-07-03', '', 'Islam', 'Pagerandong', '2', '2', '', '', 'Mrebet', 'Yatimin', 'Riyatun', 'no_photo'),
(301, '0071748060', 0, 'Nila Solihatin', 'P', 'Purbalingga', '2007-05-14', '', 'Islam', 'Kutabawa', '3', '1', '', '', 'Karangreja', 'Suritno Sudir', 'Miarti', 'no_photo'),
(302, '0063153486', 0, 'Nimatul Ngudma', 'P', 'Pemalang', '2006-12-28', '', 'Islam', 'Belik', '', '', '', '', 'Pemalang', 'Syaroni', 'Tasri', 'no_photo'),
(303, '0071748060', 0, 'Nita Solihatin', 'P', 'Purbalingga', '2007-05-14', '', 'Islam', 'Kutabawa', '3', '1', '', '', 'karangreja', 'Suritno Sudir', 'Minarti', 'no_photo'),
(304, '', 0, 'Nunik Safitri', 'P', 'Purbalingga', '2005-10-19', '', 'Islam', 'Serang, Gunung Malang', '5', '7', '', '', 'Karangreja', 'Rismanto Kasmin', 'Rasti', 'no_photo'),
(305, '', 0, 'Pambayun Diva Nugraheni', 'P', 'Purbalingga', '2005-12-18', '', 'Islam', 'Bumisari', '7', '4', '', '', 'Bojongsari', 'Sudiarto Naryanto', 'Ulva Marhatin', 'no_photo'),
(306, '', 0, 'Putri Dian Septiani', 'P', 'Purbalingga', '2005-09-22', '', 'Islam', 'Tegalpingen', '3', '4', '', '', 'Pengadegan', 'Mugianto', 'Asri', 'no_photo'),
(307, '', 0, 'Raisya Ramadhani', 'P', 'Purbalingga', '2007-10-09', '', 'Islam', 'Karangduren', '2', '2', '', '', 'Bobotsari', 'Mugiono', 'Tarmiyah', 'no_photo'),
(308, '', 0, 'Refi Mariska ', 'P', 'Purbalingga', '2007-05-09', '', 'Islam', 'Bumisari, RT 10 RW 05', '10', '5', '', '', 'Bojongsari', 'Sarno', 'Kalimah', 'no_photo'),
(309, '0074555055', 0, 'Revaliza Fibriani', 'P', 'Pemalang', '2007-02-11', '', 'Islam', 'Belik', '2', '4', '', '', 'Belik', 'Rokhidin', 'Roiyah', 'no_photo'),
(310, '0076089118', 0, 'Rifa Nur Anggraeni', 'P', 'Purbalingga', '2008-05-07', '', 'Islam', 'Karangjengkol', '8', '3', '', '', 'kutasari', 'Bahrowi tarmo', 'Narsiti', 'no_photo'),
(311, '', 0, 'Riska Adinda R', 'P', 'Purbalingga', '2007-10-01', '', 'Islam', 'Gembong', '13', '7', '', '', 'Bojongsari', 'Ahmad Minarto', 'Suryati', 'no_photo'),
(312, '0066851989', 0, 'Rizki Ramadana', 'L', 'Purbalingga', '2006-05-15', '', 'Islam', 'Sirau', '11', '4', '', '', 'Karangmoncol', 'Muslihin', 'Tarsimah', 'no_photo'),
(313, '', 0, 'Sashy Ramadhani', 'P', 'Purbalingga', '2006-09-29', '', 'Islam', 'Lambur', '8', '3', '', '', 'Mrebet', 'Adnan Heriyanto', 'Endah Puji Rahayu', 'no_photo'),
(314, '0073089466', 0, 'Sefi Rahma Romadon', 'P', 'Purbalingga', '2007-09-20', '', 'Islam', 'Karangpucung', '6', '3', '', '', 'Kertanegara', 'Nadiarjo Jarwo', 'Tuminah', 'no_photo'),
(315, '0074099898', 0, 'Sera Amelia', 'P', 'Purbalingga', '2007-07-21', '', 'Islam', 'Limbasari', '4', '2', '', '', 'Bobotsari', 'Tofik Hidayat', 'karmila', 'no_photo'),
(316, '0071004600', 0, 'Shera Kirana', 'P', 'Purbalingga', '2007-10-20', '', 'Islam', 'Metenggeng', '13', '7', '', '', 'Bojongsari', 'Abas Susanto', 'Susi', 'no_photo'),
(317, '', 0, 'Sigi Wimalista', 'P', 'Purbalingga', '2007-09-29', '', 'Islam', 'Lambur ', '3', '1', '', '', 'Mrebet', 'Suparno', 'Samrotun', 'no_photo'),
(318, '0071406090', 0, 'Sigit Maulana', 'P', 'Purbalingga', '2007-12-03', '', 'Islam', 'Wlahar ', '1', '2', '', '', 'Rembang', 'Kisno Nurdianto', 'Sumiati', 'no_photo'),
(319, '007', 0, 'Siti Nur Awaliyah', 'P', 'Purbalingga', '2007-08-08', '', 'Islam', 'Buara', '2', '2', '', '', 'Karanganyar', 'Dakir', 'Rusimah', 'no_photo'),
(320, '', 0, 'Syifa Syafiana', 'P', 'Purbalingga', '2006-04-07', '', 'Islam', 'Lambur', '3', '1', '', '', 'Mrebet', 'Isro Baharudin', 'Puji Rahayu', 'no_photo'),
(321, '', 0, 'Tazkira Amelia Putri', 'P', 'Purbalingga', '2006-07-12', '', 'Islam', 'Tanalum', '3', '2', '', '', 'Rembang', 'kasmawi', 'Nuryati', 'no_photo'),
(322, '0068181924', 0, 'Tiara Febriani Putri', 'P', 'Purbalingga', '2006-02-14', '', 'Islam', 'Galuh', '12', '6', '', '', 'PBG', 'Sugeng Romadhon', 'Aryanti', 'no_photo'),
(323, '0072003494', 0, 'Tiara Nur Anggraeni', 'P', 'Purbalingga', '2007-04-17', '', 'Islam', 'Karangpucung', '4', '1', '', '', 'Kertanegara', 'Ukat', 'Riyanti', 'no_photo'),
(324, '', 0, 'Toto Santoso', 'P', 'Purbalingga', '2007-02-04', '', 'ISlam', 'Kalikabong', '2', '2', '', '', 'Kalimanah', 'Romli', 'Asih marliyah', 'no_photo'),
(325, '0069592441', 0, 'Tri Ibnu Abdul Y', 'L', 'Purbalingga', '2006-10-25', '', 'Islam', 'Sokanegara', '4', '3', '', '', 'kejobong', 'Sahri', 'Ruwiyah', 'no_photo'),
(326, '', 0, 'Umi Hidayah', 'P', 'Purbalingga', '2006-10-10', '', 'Islam', 'Ponjen', '3', '2', '', '', 'Kranganyar', 'Fauzi Muslim', 'Sukiran', 'no_photo'),
(327, '', 0, 'Vivi Alviatun Najah', 'P', 'Purbalingga', '2007-07-29', '', 'Islam', 'tangkisan', '2', '6', '', '', 'Tangkisan', 'Sunarto', 'Khusnul Samisah', 'no_photo'),
(328, '', 0, 'Wiwit Mamia', 'P', 'Purbalingga', '2007-05-19', '', 'Islam', 'Cipaku', '2', '5', '', '', 'Mrebet', 'Sutaryo', 'Wadiah', 'no_photo'),
(329, '', 0, 'Yulianti Eka Ayu Saputri', 'P', 'Purbalingga', '2007-07-06', '', 'Islam', 'Banjaran', '15', '8', '', '', 'Bojongsari', 'Ali Rohman Tasmin', 'Nisah', 'no_photo');

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
('B00001', 18, 2, 2, 1, 'Farmakologi Jilid 1', 'Pilar Utama Mandiri', 'Nur Salimi Dwi Sakti, S. Far, Apt dkk', '978-602-6220-61-5', 'XI', 2017, 25, '0000-00-00', 140, 140, 21, '1', 'B00001.jpg'),
('B00002', 18, 2, 1, 1, 'Farmakologi Jilid 2', 'Pilar Utama Mandiri', 'Rahayu Prihatin, S. Far., Apt dkk', '978-602-6220-62-2', 'XII', 2018, 25, '0000-00-00', 70, 70, 30, '1', 'B00002.jpg'),
('B00003', 18, 2, 1, 1, 'Tanaman Obat Indonesia ', 'Pilar Utama Mandiri', 'Abdur Rahman,S.Si., Apt dkk', '978-602-6220-53-0', 'XI', 2017, 25, '0000-00-00', 148, 148, 7, '1', 'B00003.jpg'),
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
-- Table structure for table `kas`
--

CREATE TABLE `kas` (
  `id_kas` int(11) NOT NULL,
  `tgl_penerimaan` date NOT NULL,
  `sumber` enum('Denda Buku','Perpanjang Kartu','','') NOT NULL,
  `nominal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id_anggota` int(11) NOT NULL,
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
  `id_anggota` int(11) NOT NULL,
  `jam_kunjungan` datetime NOT NULL,
  `keperluan` enum('Membaca','Mengerjakan Tugas','Belajar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id_kas`);

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
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;

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
-- AUTO_INCREMENT for table `kas`
--
ALTER TABLE `kas`
  MODIFY `id_kas` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sumber_buku`
--
ALTER TABLE `sumber_buku`
  MODIFY `id_sumberbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
