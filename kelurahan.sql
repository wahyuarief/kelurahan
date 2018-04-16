-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 16, 2018 at 01:36 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(32) NOT NULL,
  `peg_id` int(32) NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `peg_id`, `judul`, `konten`, `slug`, `created_at`, `updated_at`) VALUES
(1, 2016230074, 'tentang kami', '<p>kami adalah superhero</p>', 'tentang-kami', '2018-04-13 03:28:16', '0000-00-00 00:00:00'),
(2, 2016230074, 'visi misi', '<p>menyelesaikan masalah tanpa solusi</p>\r\n<p><br></p>', 'visi-misi', '2018-04-13 03:29:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `deskripsi` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `judul`, `start`, `end`, `deskripsi`) VALUES
(1, 'Test Event', '2018-04-17 00:00:00', '2018-05-16 00:00:00', 'ya ini test event'),
(2, 'New Event', '2018-04-23 00:00:00', '2018-05-23 00:00:00', 'dan ini event baru');

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
  `no_laporan` int(32) DEFAULT NULL,
  `no_registrasi` int(32) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `peg_id`, `kat_id`, `nama`, `isi`, `no_laporan`, `no_registrasi`, `slug`, `created_at`, `updated_at`) VALUES
(1, 2016230074, 1, 'Perintah simpan pinjam dana liburan', 'Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan.', 455657, 12323, 'perintah-simpan-pinjam-dana-liburan', '2018-03-13 17:00:00', '2018-03-13 17:00:00'),
(3, 2016230086, 3, 'coba', '<p>coba</p>', 1234, 12344, 'coba-1', '2018-03-24 09:53:11', '2018-03-24 09:53:11'),
(5, 2016230086, 2, 'lomba kemerdekaan', '<p>lomba</p>', 23232, 23232, 'lomba-kemerdekaan', '2018-03-27 11:54:42', '2018-03-27 11:54:42'),
(7, 2016230086, 1, 'jakarta adalah ibukota replubik indonesia', '<p>jakarta</p>', 222, 111, 'jakarta-adalah-ibukota-replubik-indonesia', '2018-03-27 12:08:21', '2018-03-28 07:35:43'),
(9, 2016230086, 6, 'sambutan kepada ketua karang taruna', '<p>hari ini adalah sambutan kepada ketua karang taruna</p>', NULL, 2121, 'sambutan-kepada-ketua-karang-taruna', '2018-03-30 08:46:33', '2018-03-30 04:14:05'),
(10, 2016230086, 4, 'satu dua tutup botol', '<p>ya gini lah projek kontol<br></p>', 32432, 21312, 'satu-dua-tutup-botol', '2018-04-12 03:43:23', '2018-04-12 10:43:23');

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
(1, 2016230074, 'Wahyu', 'Arief', 'IT Staff', 'y\r\n', 'wahyu@hacktivist.or.id', '$2y$10$bwuXAyindhMcHZuO8bxLGOGGdaBjiQDPRpcT.DLKEBh9PNlzVGQTW', '7ed65719053a797e9334efbaee72e9e1.png', '2018-03-13 00:00:00', '2018-04-02 05:03:13', '2018-04-13 15:18:21'),
(2, 2016230086, 'Muhammad ', 'Zahidin Nur', 'IT Staff', NULL, 'zahidin@gmail.com', '$2y$10$CTjzvmT5B.dxojKZOxsjTeMc4E7.Gwl9slAgX.0lozwGrKSMxzWdO', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2018-04-13 14:56:46'),
(3, 2016230011, 'Udin', 'Sedunia', 'IT Staff', 'woyo', 'udin@gmail.com', '$2y$10$qSXve4SuzRVInXKhckv8BOvo9HzaOZNvVcUO4h0u4p8UrK6lvqzTW', '', '2018-04-02 05:27:33', '0000-00-00 00:00:00', '2018-04-02 21:12:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peg_id` (`peg_id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori_laporan`
--
ALTER TABLE `kategori_laporan`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
