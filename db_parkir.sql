-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 11:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_parkir`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_mobil_keluar`
--

CREATE TABLE `tb_mobil_keluar` (
  `id` int(11) NOT NULL,
  `plat` varchar(10) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `waktu_keluar` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mobil_masuk`
--

CREATE TABLE `tb_mobil_masuk` (
  `id` int(11) NOT NULL,
  `plat` varchar(10) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `waktu_masuk` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mobil_masuk`
--

INSERT INTO `tb_mobil_masuk` (`id`, `plat`, `merk`, `tanggal_masuk`, `waktu_masuk`) VALUES
(2, 'H 8909 HI', 'Honda', '2022-03-06', '09:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekap`
--

CREATE TABLE `tb_rekap` (
  `id` int(11) NOT NULL,
  `plat` varchar(10) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `waktu_masuk` timestamp NOT NULL DEFAULT current_timestamp(),
  `waktu_keluar` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_mobil_keluar`
--
ALTER TABLE `tb_mobil_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mobil_masuk`
--
ALTER TABLE `tb_mobil_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_rekap`
--
ALTER TABLE `tb_rekap`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_mobil_keluar`
--
ALTER TABLE `tb_mobil_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_mobil_masuk`
--
ALTER TABLE `tb_mobil_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_rekap`
--
ALTER TABLE `tb_rekap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
