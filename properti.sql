-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 06:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `properti`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesan`
--

CREATE TABLE `tb_pemesan` (
  `id_pemesan` int(11) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `nama_pemesan` varchar(80) NOT NULL,
  `email` varchar(30) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `id_properti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_properti`
--

CREATE TABLE `tb_properti` (
  `nama_properti` varchar(200) DEFAULT NULL,
  `no_properti` varchar(10) DEFAULT NULL,
  `harga_properti` decimal(10,0) DEFAULT NULL,
  `jumlah_kamar` decimal(10,0) DEFAULT NULL,
  `daya_listrik` varchar(10) DEFAULT NULL,
  `sumber_air` enum('SUMUR','PDAM','','') DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `id_properti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_properti`
--

INSERT INTO `tb_properti` (`nama_properti`, `no_properti`, `harga_properti`, `jumlah_kamar`, `daya_listrik`, `sumber_air`, `keterangan`, `foto`, `id_properti`) VALUES
('Perumahan Griya Gunung Pesona Tahap 1', '001', '198000000', '3', '900 VA', 'PDAM', 'Properti murah berkualitas buat kamu para milenial yang sedang mencari rumah ayok boking unitnya sekarang.', 'properti1.jpg', 17),
('Perumahan Griya Gunung Pesona Tahap 1', '002', '200000000', '4', '1200 VA', 'PDAM', 'Perumahan yang indah aman dan nyaman', 'properti2.jpg', 18),
('Perumahan Griya Gunung Pesona Tahap 3', '003', '250000000', '4', '1500 VA', 'SUMUR', 'Rumah yang aman dan nyaman serta berkualitas', 'properti3.jpg', 19),
('Pesona Properti Tahap 3', '003', '250000000', '4', '1200 VA', 'PDAM', 'Rumah yang Indah dan nyaman', 'properti3.jpg', 21);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tamu`
--

CREATE TABLE `tb_tamu` (
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_pesan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_lengkap`, `email`, `password`) VALUES
(1, 'Dedy Ibrahim', 'dedyibrahym23@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pemesan`
--
ALTER TABLE `tb_pemesan`
  ADD PRIMARY KEY (`id_pemesan`);

--
-- Indexes for table `tb_properti`
--
ALTER TABLE `tb_properti`
  ADD PRIMARY KEY (`id_properti`);

--
-- Indexes for table `tb_tamu`
--
ALTER TABLE `tb_tamu`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pemesan`
--
ALTER TABLE `tb_pemesan`
  MODIFY `id_pemesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_properti`
--
ALTER TABLE `tb_properti`
  MODIFY `id_properti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
