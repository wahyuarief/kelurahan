-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Mei 2018 pada 10.13
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 5.6.33

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
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `title`, `url`) VALUES
(1, 'Seram Ndivic', '7ed65719053a797e9334efbaee72e9e1.png'),
(172, 'My house!', 'eb4f-51.jpg'),
(173, 'Some flowers', 'ac84-52.jpg'),
(176, 'My garden!', '7ad8-63.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
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
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id`, `peg_id`, `judul`, `konten`, `slug`, `created_at`, `updated_at`) VALUES
(1, 2016230074, 'Tentang Kami', 'Pondok Bambu adalah sebuah kelurahan di kecamatan Duren Sawit Jakarta Timur. Kelurahan ini berbatasan dengan Kelurahan Klender di sebelah utara, Kelurahan Cipinang Muara di sebelah barat, Kelurahan Duren Sawit di sebelah timur dan Kelurahan Cipinang Melayu di sebelah selatan.', 'tentang-kami', '2018-04-13 03:28:16', '2018-05-22 10:12:21'),
(2, 2016230074, 'Visi dan Misi', '<strong>Visi</strong><br>Terwujudnya kota Jakarta Timur yang berorientasi kepada pelayanan publik menuju kota berekonomi modern.<br><br><strong>Misi</strong><br>\r\n<ol>\r\n  <li>Mewujudkan Jakarta Timur sebagai kota modern yang terbuka serta konsisten dengan rencana tata ruang wilayah.</li>\r\n  <li>Menjadikan Jakarta sebagai ibu kota yang bebas dari masalah-masalah menahun seperti macet, banjir, pemukiman kumuh, sampah dan lain-lain.</li>\r\n  <li>Membangun budaya masyarakat perkotaan yang toleran, tetapi juga sekaligus memiliki kesadaran dalam memelihara kota.</li>\r\n  <li>Membangun pemerintahan yang bersih dan transparan serta berorientasi pada pelayanan publik.<br></li>\r\n</ol>', 'visi-dan-misi', '2018-04-13 03:29:11', '2018-05-22 09:44:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `deskripsi` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `judul`, `start`, `end`, `deskripsi`) VALUES
(1, 'Test Event', '2018-04-17 00:00:00', '2018-05-16 00:00:00', 'ya ini test event'),
(2, 'New Event', '2018-04-23 00:00:00', '2018-05-23 00:00:00', 'dan ini event baru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_laporan`
--

CREATE TABLE `kategori_laporan` (
  `id` int(32) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_laporan`
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
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` int(32) NOT NULL,
  `peg_id` int(32) NOT NULL,
  `kat_id` int(32) NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_laporan` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `peg_id`, `kat_id`, `nama`, `isi`, `no_laporan`, `slug`, `created_at`, `updated_at`) VALUES
(1, 2016230074, 1, 'Perintah simpan pinjam dana liburan', 'Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan, Perintah simpan pinjam dana liburan.', '32/BKD/2018', 'perintah-simpan-pinjam-dana-liburan', '2018-03-13 17:00:00', '2018-03-13 17:00:00'),
(3, 2016230086, 3, 'coba', '<p>coba</p>', '31/BKD/2018', 'coba-1', '2018-03-24 09:53:11', '2018-03-24 09:53:11'),
(5, 2016230086, 2, 'lomba kemerdekaan', '<p>lomba</p>', '36/BKD/2018', 'lomba-kemerdekaan', '2018-03-27 11:54:42', '2018-03-27 11:54:42'),
(7, 2016230086, 1, 'jakarta adalah ibukota replubik indonesia', '<p>jakarta</p>', '38/BKD/2018', 'jakarta-adalah-ibukota-replubik-indonesia', '2018-03-27 12:08:21', '2018-03-28 07:35:43'),
(9, 2016230086, 6, 'sambutan kepada ketua karang taruna', '<p>hari ini adalah sambutan kepada ketua karang taruna</p>', '34/BKD/2018', 'sambutan-kepada-ketua-karang-taruna', '2018-03-30 08:46:33', '2018-03-30 04:14:05'),
(10, 2016230086, 4, 'satu dua tutup botol', '<p>ya gini lah projek kontol<br></p>', '39/BKD/2018', 'satu-dua-tutup-botol', '2018-04-12 03:43:23', '2018-04-12 10:43:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `jenis` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
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
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `nip`, `nama_depan`, `nama_belakang`, `jabatan`, `keterangan`, `email`, `password`, `foto`, `created_at`, `updated_at`, `last_login`) VALUES
(1, 2016230074, 'Super', 'Admin', 'IT Staff', 'y\r\n', 'wahyu@hacktivist.or.id', '$2y$10$bwuXAyindhMcHZuO8bxLGOGGdaBjiQDPRpcT.DLKEBh9PNlzVGQTW', '7ed65719053a797e9334efbaee72e9e1.png', '2018-03-13 00:00:00', '2018-04-02 05:03:13', '2018-05-22 14:37:55'),
(2, 2016230086, 'Muhammad ', 'Zahidin Nur', 'IT Staff', NULL, 'zahidin@gmail.com', '$2y$10$CTjzvmT5B.dxojKZOxsjTeMc4E7.Gwl9slAgX.0lozwGrKSMxzWdO', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2018-04-13 14:56:46'),
(3, 2016230011, 'Udin', 'Sedunia', 'IT Staff', 'woyo', 'udin@gmail.com', '$2y$10$qSXve4SuzRVInXKhckv8BOvo9HzaOZNvVcUO4h0u4p8UrK6lvqzTW', '', '2018-04-02 05:27:33', '0000-00-00 00:00:00', '2018-04-02 21:12:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`judul`, `deskripsi`, `logo`) VALUES
('Pondok Bambu', 'Cara buat web', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
