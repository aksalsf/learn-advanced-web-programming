-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 09:24 AM
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
-- Database: `pwl_uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_merk`
--

CREATE TABLE `tb_merk` (
  `id_merk` char(6) NOT NULL,
  `nama` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_merk`
--

INSERT INTO `tb_merk` (`id_merk`, `nama`) VALUES
('MERK01', 'Apple'),
('MERK02', 'Xiaomi'),
('MERK03', 'Infinix'),
('MERK04', 'Realme'),
('MERK05', 'Oppo');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ponsel`
--

CREATE TABLE `tb_ponsel` (
  `id_ponsel` char(8) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `id_merk` char(6) NOT NULL,
  `harga` int(8) NOT NULL,
  `berat` int(3) NOT NULL,
  `spesifikasi` text NOT NULL,
  `gambar` text NOT NULL,
  `stok` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_ponsel`
--

INSERT INTO `tb_ponsel` (`id_ponsel`, `nama`, `id_merk`, `harga`, `berat`, `spesifikasi`, `gambar`, `stok`) VALUES
('APEL0001', 'Apple iPhone 12 128GB - Blue', 'MERK01', 15499000, 164, 'Isi Kotak :\r\n• iPhone dengan iOS 14.\r\n• Kabel USB-C ke Lightning.\r\n• Buku Manual dan dokumentasi lain.\r\n\r\nUkuran layar: 6.1 inci, 1170 x 2532 pixels, Super Retina XDR OLED, HDR10, 625 nits (typ), 1200 nits (peak)\r\nMemori: RAM 4 GB, ROM 128 GB\r\nSistem operasi: iOS 14\r\nCPU: Apple A14 Bionic (5 nm), Hexa-core (2x3.1 GHz Firestorm + 4x1.8 GHz Icestorm)\r\nGPU: Apple GPU (4-core graphics)\r\nKamera: 12 MP, f/1.6, 26mm (wide), 1.4µm, dual pixel PDAF, OIS. 12 MP, f/2.4, 120˚, 13mm (ultrawide), 1/3.6\". Depan 12 MP, f/2.2, 23mm (wide), 1/3.6\"\r\nSIM: Nano-SIM/eSIM\r\nBaterai: Li-Ion 2815 mAh\r\nDimensi: 146.7 x 71.5 x 7.4 mm\r\nBerat: 164 gr\r\nGaransi Resmi', 'APEL0001.jpg', 12),
('NFNX0001', 'Infinix Hot 10 6/128GB - Black', 'MERK03', 1949000, 195, 'Ukuran layar: 6.78 inci, 720 x 1640 pixels, Infinity-O display\r\nMemori: RAM 6 GB, ROM 128 GB, MicroSD up to 512 GB\r\nSistem operasi: Android 10, XOS 6.0\r\nCPU: Mediatek Helio G70 (12 nm) Octa-core\r\nGPU: Mali-G52 2EEMC2\r\nKamera: Quad 16 MP, (wide), PDAF; 2 MP, (macro); 2 MP, (depth); QVGA (Low light sensor), depan 8 MP, (wide)\r\nSIM: Dual SIM (Nano-SIM)\r\nBaterai: Non-removable Li-Po 5200 mAh\r\nBerat: 195 gram\r\nGaransi Resmi', 'NFNX0001.jpg', 9),
('OPPO0001', 'OPPO A54 4/128GB - Blue', 'MERK05', 2699000, 192, 'Ukuran layar: 6.51 inci, 720 x 1600 pixels, IPS LCD, 20:9, 60 Hz, 269 ppi\r\nMemori: RAM 4 GB, ROM 128 GB, MicroSD up to 256 GB\r\nSistem operasi: Android 10, ColorOS 7.2\r\nCPU: Mediatek MT6765 Helio P35 (12nm) Octa-core up to 2.35 GHz\r\nGPU: PowerVR GE8320\r\nKamera: Triple 13MP Kamera Utama, 2MP Kamera Makro, 2M Kamera Bokeh, depan 16 MP AI Beauty 2.0\r\nSIM: Dual SIM (Nano-SIM)\r\nBaterai: Li-Po 5000 mAh, non-removable\r\nBerat: 192 gram\r\nGaransi Resmi', 'OPPO0001.jpg', 4),
('OPPO0002', 'OPPO Reno5 F 8/128GB - Purple', 'MERK05', 4299000, 172, 'Ukuran layar: 6.43 inci, 1080 x 2400 pixels, AMOLED\r\nMemori: RAM 8 GB, ROM 128 GB, MicroSD slot\r\nSistem operasi: Android 11, ColorOS 11.1\r\nCPU: Mediatek MT6779V Helio P95 (12 nm) Octa-core up to 2.2 GHz\r\nGPU: PowerVR GM9446\r\nKamera: Quad 48 MP, f/1.7, 25mm (wide); 8 MP, f/2.2, 16mm, 119˚ (ultrawide); 2 MP, f/2.4, (macro); 2 MP, f/2.4, (depth), depan 32 MP, f/2.4, 24mm (wide)\r\nSIM: Dual SIM (Nano-SIM)\r\nBaterai: Non-removable Li-Po 4310 mAh\r\nBerat: 172 gram\r\nGaransi Resmi', 'OPPO0002.jpg', -2),
('RLME0001', 'Realme 8 Pro 8/128GB - Black', 'MERK04', 4499000, 176, 'Ukuran layar: 6.4 inci, 1080 x 2400 pixels, Super AMOLED\r\nMemori: RAM 8 GB, ROM 128 GB, MicroSD slot\r\nSistem operasi: Android 11, Realme UI 2.0\r\nCPU: Qualcomm SM7125 Snapdragon 720G (8 nm) Octa-core up to 2.3 GHz\r\nGPU: Adreno 618\r\nKamera: Quad 108 MP, f/1.88, 26mm (wide); 8 MP, f/2.25, 119˚, 16mm (ultrawide); 2 MP, f/2.4, (macro); 2 MP, f/2.4, (depth), depan 16 MP, f/2.45, (wide)\r\nSIM: Dual SIM (Nano-SIM)\r\nBaterai: Li-Po 4500 mAh, non-removable\r\nBerat: 176 gram\r\nGaransi Resmi', 'RLME0001.jpg', 7),
('XAME0001', 'Xiaomi Redmi Note 10 Pro 6/64GB – Onyx Gray', 'MERK02', 3599000, 193, 'Ukuran layar: 6.67 inches, 107.4cm2, 1080 x 2400 pixels (~395 ppi density) AMOLED, 120Hz, HDR10\r\nMemori: RAM 6GB, ROM 64GB, microSDXC slot\r\nSistem operasi: Android 11; MIUI 12\r\nCPU: Qualcomm SM7150 Snapdragon 732G (8 nm), Octa-core (2x2.3 GHz Kryo 470 Gold & 6x1.8 GHz Kryo 470 Silver)\r\nGPU: Adreno 618\r\nKamera Belakang: 108 MP f/1.9 26mm PDAF dual-pixel (wide), 8 MP f/2.2 120˚(ultrawide), 5 MP f/2.4 (macro), & 2 MP f/2.4 (depth)\r\nKamera Depan: 16 MP f/2.5 (wide)\r\nSIM: Dual SIM (Nano-SIM, dual stand-by)\r\nBaterai: Li-Po 5020 mAh, non-removable\r\nBerat: 193 gr\r\nGaransi Resmi', 'XAME0001.jpg', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` char(8) NOT NULL,
  `id_ponsel` char(8) NOT NULL,
  `nama_pembeli` varchar(128) NOT NULL,
  `alamat_pembeli` text NOT NULL,
  `wa_pembeli` char(13) NOT NULL,
  `kuantitas` int(2) NOT NULL,
  `total` int(12) NOT NULL,
  `status` varchar(24) NOT NULL COMMENT 'Pesanan Diterima\r\nMenunggu Pembayaran\r\nProses Pengiriman\r\nTransaksi Selesai',
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_ponsel`, `nama_pembeli`, `alamat_pembeli`, `wa_pembeli`, `kuantitas`, `total`, `status`, `timestamp`) VALUES
('ORD00001', 'HAPE0001', 'Paijo Budiman', 'Nganjuk, Jateng', '6285746352532', 2, 4001000, 'Pesanan Diterima', '2021-04-18 15:54:31'),
('ORD00002', 'OPPO0002', 'Aksal Syah Falah', 'Mertoudan 6/9, Mojosongo, Jebres, Surakarta 57127', '6289691783679', 1, 4299000, 'Pesanan Diterima', '2021-04-19 06:41:01'),
('ORD00003', 'NFNX0001', 'Jamal Wiwoho', 'Jl. Ir. Sutami No.36, Kentingan, Kec. Jebres, Kota Surakarta, Jawa Tengah 57126', '628122601681', 3, 5847000, 'Pesanan Diterima', '2021-04-19 06:46:30'),
('ORD00004', 'OPPO0002', 'Alfian', 'Purwokerto', '6287685678297', 1, 4299000, 'Pesanan Diterima', '2021-04-19 06:49:59'),
('ORD00005', 'OPPO0002', 'Harjana', 'Gd. A, Fakultas MIPA UNS', '6287762676422', 1, 4299000, 'Pesanan Diterima', '2021-04-19 07:11:05'),
('ORD00006', 'OPPO0001', 'Cahaya Dian Lesmono', 'Jl Jend Sudirman Kav 58 Graha Niaga Lt 27-28,Senayan', '6289232505091', 2, 5398000, 'Pesanan Diterima', '2021-04-19 07:20:49');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `nama` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`nama`, `password`, `email`) VALUES
('Paijo Muhaimin Iskandar', 'Lorem ipsum', 'paijo.mhm@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_merk`
--
ALTER TABLE `tb_merk`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `tb_ponsel`
--
ALTER TABLE `tb_ponsel`
  ADD PRIMARY KEY (`id_ponsel`) USING BTREE,
  ADD KEY `id_merk` (`id_merk`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`) USING BTREE,
  ADD KEY `id_ponsel` (`id_ponsel`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`nama`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_ponsel`
--
ALTER TABLE `tb_ponsel`
  ADD CONSTRAINT `tb_ponsel_ibfk_1` FOREIGN KEY (`id_merk`) REFERENCES `tb_merk` (`id_merk`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
