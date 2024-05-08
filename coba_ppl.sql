-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2024 pada 07.29
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba_ppl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi_pelatihan`
--

CREATE TABLE `informasi_pelatihan` (
  `informasi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `informasi_pelatihan`
--

INSERT INTO `informasi_pelatihan` (`informasi`) VALUES
('Pelatihan Budidaya Kopi di Sekolah Kopi RAISA merupakan salah satu jenis pelatihan yang berfokus pada aspek hulu dari budidaya kopi, mulai dari pemilihan bibit hingga panen. Pelatihan ini dirancang untuk membekali para petani kopi dengan pengetahuan dan keterampilan yang tepat untuk menghasilkan kopi berkualitas tinggi.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihan`
--

CREATE TABLE `pelatihan` (
  `id` int(10) UNSIGNED NOT NULL,
  `video` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Aktif',
  `judul` varchar(255) NOT NULL,
  `deskripsi_video` varchar(1000) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `tanggal_upload` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `tanggal_nonaktif` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelatihan`
--

INSERT INTO `pelatihan` (`id`, `video`, `gambar`, `status`, `judul`, `deskripsi_video`, `kategori`, `tanggal_upload`, `tanggal_nonaktif`) VALUES
(1, 'https://www.youtube.com/watch?v=FVhV9s34c5c', 'Cuplikan layar 2024-04-25 193514.png', 'Aktif', 'Pengolahan Kopi', 'Pengolahan Kopi: Penjelasan singkat tentang proses pengolahan buah kopi menjadi biji kopi yang siap digunakan, meliputi tahap pemisahan, fermentasi, pengeringan, dan pengupasan, untuk menghasilkan biji kopi berkualitas biji kopi berkualitas tinggi ...', 'Pengolahan Kopi', '2024-04-18 11:10:51', NULL),
(2, 'https://www.youtube.com/watch?v=FVhV9s34c5c', 'Cuplikan layar 2024-04-22 214944.png', 'Non Aktif', 'testing', 'testing juga', 'Pengolahan Kopi', '2024-04-26 15:27:29', '2024-05-01 20:50:34'),
(3, 'https://www.youtube.com/watch?v=FVhV9s34c5c', 'Gambar WhatsApp 2024-05-01 pukul 19.36.13_12e4233e.jpg', 'Aktif', 'aaa', 'absd', 'Pengolahan Kopi', '2024-05-01 20:50:00', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomor_telepon` bigint(25) DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'Petani'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `nomor_telepon`, `alamat`, `kecamatan`, `kabupaten`, `provinsi`, `username`, `password`, `role`) VALUES
(1, 'Joe Ferdinan', 0, '', '', '', '', 'joe', '12345678', 'Petani'),
(2, 'Admin', 0, '', '', '', '', 'admin', '1', 'Admin'),
(3, 'Siapa ya', 8123456789, 'Lupa pokok di bumi', 'Pakusari', 'Jember', 'Jawa Timur', 'siapa', 'siapa', 'Petani');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
