-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 10:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengaduan_masyarakat`
--

-- --------------------------------------------------------

--
-- Table structure for table `masyarakat`
--

CREATE TABLE `masyarakat` (
  `id_masyarakat` int(10) UNSIGNED NOT NULL,
  `nik` varchar(16) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `salt` varchar(64) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `masyarakat`
--

INSERT INTO `masyarakat` (`id_masyarakat`, `nik`, `username`, `password`, `salt`, `telepon`, `date_created`) VALUES
(1, '21332', 'testeruser', '$2y$10$38Qay/X7m885EIQMyzEvDuVjjDP9HFUSAHwTGUDCAtr94R9o/SF/2', '656c98b9e55948.66283479', '0877721632', '0000-00-00 00:00:00'),
(2, '8543012974658123', 'masyarakat', '$2y$10$kPxDrXU5RmSJAGSpbBgXIedHFZJ80YQ/l6JqNh1.xbNZK7CmiJY7m', '656cf26c415307.88587948', '087772348323', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-10-24-012544', 'App\\Database\\Migrations\\PengaduanMasyarakat', 'default', 'App', 1701605398, 1),
(2, '2023-10-24-015351', 'App\\Database\\Migrations\\PengaduanMasyarakat2', 'default', 'App', 1701605398, 1),
(3, '2023-10-24-020351', 'App\\Database\\Migrations\\PengaduanMasyarakat3', 'default', 'App', 1701605398, 1),
(4, '2023-10-24-022422', 'App\\Database\\Migrations\\PengaduanMasyarakat4', 'default', 'App', 1701605398, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `id_masyarakat` int(11) UNSIGNED NOT NULL,
  `id_pengaduan` int(10) UNSIGNED NOT NULL,
  `username` varchar(25) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal_pengaduan` datetime NOT NULL,
  `hapus_pengaduan` datetime NOT NULL,
  `nik` varchar(16) NOT NULL,
  `isi_laporan` text NOT NULL,
  `foto` varchar(128) NOT NULL,
  `status` enum('0','1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`id_masyarakat`, `id_pengaduan`, `username`, `judul`, `tanggal_pengaduan`, `hapus_pengaduan`, `nik`, `isi_laporan`, `foto`, `status`) VALUES
(1, 1, 're', 'kebakaran', '2023-12-03 00:00:00', '0000-00-00 00:00:00', '213', '\r\n\"Kemarin malam, terjadi kebakaran di Desa Suka Marah, menciptakan suasana tegang dan kekhawatiran di antara warga desa.\"', '1701605526_a51dce31f0b75b5800a4.jpeg', '2'),
(1, 3, 're', 'yueee', '2023-12-03 00:00:00', '2023-12-03 22:05:40', '21332', 'wqw', '1701615916_c38f9855002878df7308.jpeg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(10) UNSIGNED NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(64) NOT NULL,
  `salt` varchar(64) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `salt`, `telepon`, `level`) VALUES
(1, 'Petugas', 'petugas', '$2y$10$aktaBpqpVKVvlSY7Df20B.F2Ed4lmbanldL4xJ3.QIfH/KPNvpVRy', '656c986a832108.00672916', '08773423712', '2'),
(2, 'Administrator', 'admin', '$2y$10$VGypgI2RdoV09jv4ktaby.sk43CB3wGo.BQhLh0MI.efbFRAm6Gni', '656c82da90f0e7.99480025', '087725123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(10) UNSIGNED NOT NULL,
  `id_pengaduan` int(10) NOT NULL,
  `tanggal_tanggapan` datetime NOT NULL,
  `tanggapan` text NOT NULL,
  `status` enum('0','1','2','3','4') NOT NULL,
  `id_petugas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_pengaduan`, `tanggal_tanggapan`, `tanggapan`, `status`, `id_petugas`) VALUES
(2, 2, '2023-12-03 00:00:00', 'sedang di proses', '0', 21),
(3, 2, '2023-12-03 00:00:00', 'dari admin', '0', 21),
(4, 1, '2023-12-04 00:00:00', 'Berita baiknya, kebakaran di Desa Suka Marah telah berhasil ditangani dengan cepat dan efisien oleh petugas pemadam kebakaran serta bantuan sukarelawan, mengurangi kerugian dan merestorasi ketenangan di masyarakat.', '0', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `masyarakat`
--
ALTER TABLE `masyarakat`
  ADD PRIMARY KEY (`id_masyarakat`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`id_pengaduan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `masyarakat`
--
ALTER TABLE `masyarakat`
  MODIFY `id_masyarakat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengaduan`
--
ALTER TABLE `pengaduan`
  MODIFY `id_pengaduan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
