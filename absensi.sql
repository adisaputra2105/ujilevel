-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 10:59 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absensi`
--

CREATE TABLE `tbl_absensi` (
  `id_absen` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_absensi`
--

INSERT INTO `tbl_absensi` (`id_absen`, `id_siswa`, `keterangan`, `tanggal`) VALUES
(23, 2, 'Hadir', '2022-11-29'),
(24, 14, 'Sakit', '2022-11-29'),
(25, 7, 'Izin', '2022-11-29'),
(26, 2, 'Hadir', '2022-11-30'),
(27, 14, 'Alpa', '2022-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notelp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nama`, `email`, `alamat`, `notelp`) VALUES
(2, 'ADI PUTRA RAMADHAN', 'adiputraramadhan@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(4, 'ROBBY AKHSAN', 'robyakhsan@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(5, 'AMELIA SAFITRY', 'ameliasafitry@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(6, 'ALENDRA VERENO ALFAREL', 'alendraverenoalfarel@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(7, 'ANGGER CAKRA WICAKSONO', 'anggercakrawicaksono@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(8, 'FAUZAN GUSDANI DWI NANDA', 'fauzangusdani@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(9, 'RIFKI IHZA FATHONI', 'rifkiihza@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(10, 'JONATHAN PANDU', 'jonathanpandu@gmail.com', 'Smk Bina Mandiri Multimedia', '01823456789'),
(11, 'DONI IRAWAN', 'doniirawa@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(12, 'ANDINI NOVITASARI', 'andininovitasari@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(13, 'FIRENZE HIGA PUTRA', 'firenzehiga@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(14, 'AGAM SUTEGUH', 'agamsuteguh@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(15, 'BRYANT SULTAN NUGROHO', 'bryantsultan@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(16, 'DESTUTY ANGELI LASE', 'destutyangelilase@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(17, 'MUHAMMAD SURATMAN', 'muhammadsuratman@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(18, 'RAFLIE ASFAR YASIN', 'raflieasfar@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(19, 'MUHAMMAD REFANSA ALI MUZKY', 'refansa@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(20, 'FINA DWI ARIYANI', 'finadwi@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(21, 'ONI CAHYO OKTOVIANO', 'onicahyo@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(22, 'FARDAN SEPTIAN', 'fardanseptian@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(23, 'TRI ANJANI AMANAH', 'trianjani@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(24, 'MIRZA ELFANDI', 'mirzaelfandi@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(25, 'MEIDA NUR AFIFAH', 'meidanur@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(26, 'RAJU YADERA', 'rajuyadera@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(27, 'LENY NYRSILAH', 'lenynursilah@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(28, 'WAWAN BADRU TAMAM', 'wawanbadru@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(29, 'HERSA PUTRI FERNANDA', 'hersaputri@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(30, 'DAFFA AL BAIHAQI HARIS LUBIS', 'daffa@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(31, 'SIMON RUDI HASIBUAN', 'simonrudi@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(32, 'THORIQ AL FARABY PERMANA', 'thoriq@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(33, 'HAIKAL PRASETYA AL HAKIM', 'haikal@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(34, 'RAKHMAWATI', 'rakhmawati@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(35, 'FARID MARDAN AZIZ', 'faridmardan@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(36, 'RUTSIANA MARINTAN MUNTHE', 'rutsiana@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(37, 'SATRIA RANGGA PUTRA RICKY', 'satriarangga@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(38, 'WAHYU EKA SAPUTRA', 'wahyueka@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(39, 'ALVIN JEPRANDO BARIMBING', 'alvin@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(40, 'AUFA RAMADHAN', 'aufaramadhan@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(41, 'ANINDA FITRI LITASNI', 'aninda@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(42, 'DIMAS ABDIN', 'dimasabidin@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(43, 'MUHAMMAD FATHAN AL MUTFI', 'fathan@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(44, 'RAIHAN HAKIM', 'raihanhakim@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(45, 'ALBERT ENSTEIN HARO', 'albert@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789'),
(46, 'ADI SAPUTRA', 'adisaputra@gmail.com', 'Smk Bina Mandiri Multimedia', '08123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
