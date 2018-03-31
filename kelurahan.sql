-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2018 at 04:14 
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelurahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori_laporan`
--

CREATE TABLE `kategori_laporan` (
  `id` int(32) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_laporan`
--

INSERT INTO `kategori_laporan` (`id`, `nama`, `slug`) VALUES
(1, 'Surat Masuk', 'surat-masuk'),
(2, 'Surat Keluar', 'surat-keluar'),
(3, 'Surat Tugas', 'surat-tugas'),
(4, 'Surat Keputusan', 'surat-keputusan'),
(5, 'Undangan Masuk', 'undangan-masuk'),
(6, 'Undangan Keluar', 'undangan-keluar');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(32) NOT NULL,
  `peg_id` int(32) NOT NULL,
  `kat_id` int(32) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat` int(32) DEFAULT NULL,
  `no_undangan` int(32) DEFAULT NULL,
  `no_registrasi` int(32) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `peg_id`, `kat_id`, `nama`, `isi`, `no_surat`, `no_undangan`, `no_registrasi`, `slug`, `created_at`, `updated_at`) VALUES
(1, 2016230074, 1, 'Perintah simpan pinjam dana liburan', 'Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan.', 455657, 454567, 12323, 'perintah-simpan-pinjam-dana-liburan', '2018-03-13 17:00:00', '2018-03-13 17:00:00'),
(3, 2016230086, 3, 'coba', '<p>coba</p>', 1234, 123123, 12344, 'coba-1', '2018-03-24 09:53:11', '2018-03-24 09:53:11'),
(5, 2016230086, 2, 'lomba kemerdekaan', '<p>lomba</p>', 23232, 123, 23232, 'lomba-kemerdekaan', '2018-03-27 11:54:42', '2018-03-27 11:54:42'),
(6, 2016230086, 2, 'lomba kemerdekaan 17 agustus', '<p>lomba</p>', 23232, 123, 23232, 'lomba-kemerdekaan-17-agustus', '2018-03-27 11:55:03', '2018-03-27 11:55:03'),
(7, 2016230086, 1, 'jakarta adalah ibukota replubik indonesia', '<p>jakarta</p>', 222, NULL, 111, 'jakarta-adalah-ibukota-replubik-indonesia', '2018-03-27 12:08:21', '2018-03-28 07:35:43'),
(9, 2016230086, 6, 'sambutan kepada ketua karang taruna', '<p>hari ini adalah sambutan kepada ketua karang taruna</p>', NULL, 1212, 2121, 'sambutan-kepada-ketua-karang-taruna', '2018-03-30 08:46:33', '2018-03-30 04:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(32) NOT NULL,
  `nip` int(32) NOT NULL,
  `nama_depan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_belakang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama_depan`, `nama_belakang`, `jabatan`, `keterangan`, `email`, `password`, `foto`, `created_at`, `updated_at`, `last_login`) VALUES
(1, 2016230074, 'Wahyu ', 'Arief', 'IT Staff', '-', 'wahyu@hacktivist.or.id', '$2y$10$bwuXAyindhMcHZuO8bxLGOGGdaBjiQDPRpcT.DLKEBh9PNlzVGQTW', '', '2018-03-13 00:00:00', '2018-03-13 00:00:00', '2018-03-14 21:19:47'),
(2, 2016230086, 'Muhammad ', 'Zahidin Nur', 'Zahidin IT Staff', NULL, 'zahidin@gmail.com', '$2y$10$CTjzvmT5B.dxojKZOxsjTeMc4E7.Gwl9slAgX.0lozwGrKSMxzWdO', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2018-03-28 19:56:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_laporan`
--
ALTER TABLE `kategori_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kat_id`),
  ADD KEY `peg_id` (`peg_id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_laporan`
--
ALTER TABLE `kategori_laporan`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
