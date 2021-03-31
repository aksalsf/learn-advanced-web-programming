-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 12:39 PM
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
-- Database: `pwl`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(8) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `prodi` varchar(128) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `kewarganegaraan` char(3) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `password`, `tanggal_lahir`, `prodi`, `jenis_kelamin`, `kewarganegaraan`, `status`, `keterangan`) VALUES
('K4020001', 'Adam Wibowo', '$2y$10$mgegUPQDoEIZ4vaIJhh4YO4yY0Q6Q5hcfihj5tdEteXweLymuXZGq', '2002-08-17', 'D3 Teknik Informatika', 'L', '1', 1, 'Bukan nabi'),
('K4020002', 'Budi Hartono', '$2y$10$JqVSojK3VcK75ReL9SlF4O7CL2x78hCNILYqOsYbSskSnC1Jts3Y6', '2001-09-16', 'D3 Teknik Informatika', 'L', '0', 1, 'Orang Malaysia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
