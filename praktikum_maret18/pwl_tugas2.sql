-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 06:33 PM
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
-- Database: `pwl_tugas2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_identitas`
--

CREATE TABLE `tb_identitas` (
  `identitas_nim` char(8) NOT NULL,
  `identitas_nama` varchar(64) NOT NULL,
  `identitas_password` varchar(255) NOT NULL,
  `identitas_tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_identitas`
--

INSERT INTO `tb_identitas` (`identitas_nim`, `identitas_nama`, `identitas_password`, `identitas_tanggal_lahir`) VALUES
('G1289419', 'Bagus Widodo', '$2y$10$AIIJ50.j3dUSMWW41MUE1OAc/ozeFcS8AR34nM/PXTB1lrCqFcZhO', '2001-07-02'),
('K2045031', 'Putri Rahayu', '$2y$10$0DVYxei3bn4OLK63hMiSoemQdwo2mw2o86PN.XQU1yeIfbQN9NEFe', '2002-08-21'),
('K2417001', 'Albert Einsten', '$2y$10$SOYEP.Ejr2grohi9GE0xi.LEsufOniSChwtMdDigG7dy.2rMp6aGu', '1901-01-01'),
('K5117024', 'Paijo Kurnia', '$2y$10$Yyhr4Y0aWcGiJ/x3F/g65ugyZUeJKXfoeJ6nOLxdAobr78UYg4Fm2', '2001-05-20'),
('K8724184', 'Alif Doni', '$2y$10$AwUucj89cAIGrVJlS1Q56uuliqVhRNfZGTq7AAVWZhP4BmvL52jem', '2001-01-01'),
('M3119004', 'Aksal Syah Falah', '$2y$10$r5WXsNboscaMZfynQJiwpOf5u3qqAh.f3x9VsMoVGEb21D6zWifMm', '2001-01-15'),
('P3114020', 'Joko Widodo', '$2y$10$LVK/tJax96af7muqigVCMudQ0kKH.h1afzg0mlg7Cb7HtOCUluwSK', '1996-08-17'),
('P4560021', 'Mansur Hidayat', '$2y$10$mQz2fpesyUKK9v1TVt8fVezY.KT7GW6s812NlOf2kU4X8IK70m3iW', '2001-07-14'),
('Y1417491', 'Kim Jong Eun', '$2y$10$C57kstpvo.GF95HHGRuCRuE0VlYvfXYcx8CSGsWniNzdUrQNU8Vvy', '2002-12-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_identitas`
--
ALTER TABLE `tb_identitas`
  ADD PRIMARY KEY (`identitas_nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
