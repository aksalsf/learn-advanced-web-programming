-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 08:32 AM
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
-- Database: `pwl_tugas4`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_identitas`
--

CREATE TABLE `tb_identitas` (
  `email` varchar(255) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `prodi` varchar(128) NOT NULL,
  `gender` tinytext NOT NULL,
  `birthday` date NOT NULL,
  `alamat` text NOT NULL,
  `agreement` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_identitas`
--

INSERT INTO `tb_identitas` (`email`, `nama`, `password`, `prodi`, `gender`, `birthday`, `alamat`, `agreement`) VALUES
('aksal.sf@gmail.com', 'Aksal Syah Falah', '$2y$10$9UqCnVINlpH99zadrvjPuuWt6p4IoJVgP70VLAQHAAxEURSR8O3nW', 'Teknik Informatika', 'L', '2001-01-15', 'Surakarta', 0),
('buton@gmail.com', 'Budi Hartono', '$2y$10$g0GnKH.AhKuQ.cGTME0pAedMQPoAxgWbpLRvJPFBi7DQxDfsx5krS', 'Teknik Informatika', 'L', '1999-12-12', 'Business District, jl Malabar Utara 3 N0 16, Jl. Malabar Utara III No.16, RT.02/RW.15, Mojosongo, Kec. Jebres, Kota Surakarta, Jawa Tengah 57127', 0),
('mutrag@ymail.com', 'Muhammad Putra G', '$2y$10$ww2ytvknh0tti6GdRCkmx.mQwcYqMj2i0tgvkDGYifkkDt0kFJTUi', 'Teknik Informatika', 'L', '2002-01-01', 'Mantung, Sukoharjo', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_identitas`
--
ALTER TABLE `tb_identitas`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
