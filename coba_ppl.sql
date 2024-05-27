-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Bulan Mei 2024 pada 07.56
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
-- Struktur dari tabel `kemajuan`
--

CREATE TABLE `kemajuan` (
  `id_kemajuan` int(11) NOT NULL,
  `kemajuan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kemajuan`
--

INSERT INTO `kemajuan` (`id_kemajuan`, `kemajuan`) VALUES
(1, 'Submitted Pengajuan'),
(2, 'Proses P3H'),
(3, 'Dikirim Ke Komite Fatwa'),
(4, 'Dikembalikan Oleh Komite Fatwa'),
(5, 'Selesai Sidang Fatwa'),
(6, 'Penerbitan Sertifikat'),
(7, 'Terbit Sertifikat Halal'),
(8, 'Dibatalkan');

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
-- Struktur dari tabel `progres`
--

CREATE TABLE `progres` (
  `id_progres` int(11) NOT NULL,
  `kemajuan` varchar(255) DEFAULT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `5` varchar(255) DEFAULT NULL,
  `6` varchar(255) DEFAULT NULL,
  `7` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL,
  `8` varchar(255) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `progres`
--

INSERT INTO `progres` (`id_progres`, `kemajuan`, `1`, `2`, `3`, `5`, `6`, `7`, `4`, `8`, `catatan`) VALUES
(1, '1,2,3,4', '25/04/2024', '26/04/2024', '27/04/2024', NULL, NULL, NULL, '26/05/2024', NULL, 'Coba'),
(2, '1,2', '25/05/2024', '26/05/2024', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `promosi`
--

CREATE TABLE `promosi` (
  `id_promosi` int(2) NOT NULL,
  `nama_usaha` varchar(255) DEFAULT NULL,
  `nomor_telepon` varchar(255) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `foto_produk` varchar(255) DEFAULT NULL,
  `deskripsi_produk` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `status_promosi` varchar(255) DEFAULT NULL,
  `status_validasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `promosi`
--

INSERT INTO `promosi` (`id_promosi`, `nama_usaha`, `nomor_telepon`, `nama_produk`, `foto_produk`, `deskripsi_produk`, `harga`, `status_promosi`, `status_validasi`) VALUES
(1, 'coba', '8123456789', 'Kopi', 'Barista.png', 'COBA COBA', '20,000', 'Aktif', 'Diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sertifikasi`
--

CREATE TABLE `sertifikasi` (
  `id_sertifikasi` int(11) NOT NULL,
  `nama_petani` varchar(255) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `id_fasilitator` varchar(255) NOT NULL,
  `izin_usaha` varchar(255) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `video_proses_produk` varchar(255) NOT NULL,
  `bahan_digunakan` varchar(1000) NOT NULL,
  `alat_digunakan` varchar(1000) NOT NULL,
  `id_status` varchar(255) DEFAULT NULL,
  `id_progres` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sertifikasi`
--

INSERT INTO `sertifikasi` (`id_sertifikasi`, `nama_petani`, `nama_produk`, `id_fasilitator`, `izin_usaha`, `foto_produk`, `video_proses_produk`, `bahan_digunakan`, `alat_digunakan`, `id_status`, `id_progres`) VALUES
(1, 'Siapa ya', 'Kopi', 'Fasilitator Jawa Timur', 'PKM Simbelmawa.pdf', 'Barista.png', 'Start Up - Background Music (BGM) - Start Up Kdrama (1).mp4', 'Biji kopi, lemon, kayu bakar, plastik kemasan, minyak tanah', 'Wajan, spatula, mesin pengemasan, tumbukan kopi', 'Diterima', 1),
(2, 'Siapa ya', 'Kopi', 'Fasilitator Jawa Timur', 'JOE FERDINAN.pdf', 'Bukti Transfer.jpg', '🎶Backsound tenang    aesthetic no copyright🌿.mp4', 'Biji kopi, lemon, kayu bakar, plastik kemasan, minyak tanah', 'Wajan, spatula, mesin pengemasan, tumbukan kopi', 'Ditinjau', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomor_telepon` bigint(25) DEFAULT NULL,
  `nama_usaha` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(11) NOT NULL DEFAULT 'Petani'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `nomor_telepon`, `nama_usaha`, `alamat`, `kecamatan`, `kabupaten`, `provinsi`, `username`, `password`, `role`) VALUES
(1, 'Joe Ferdinan', 0, NULL, '', '', '', '', 'joe', '12345678', 'Petani'),
(2, 'Admin1', NULL, NULL, NULL, NULL, NULL, NULL, 'admin', '1', 'Admin'),
(3, 'Siapa ya', 8123456789, 'coba', 'Lupa pokok di bumi', 'Pakusari', 'Jember', 'Jawa Timur', 'siapa', 'siapa', 'Petani'),
(4, 'Fasilitator Jawa Timur', 8123456789, NULL, 'Pokok Jawa Timur', 'Kaliwates', 'Surabaya', 'Jawa Timur', 'fasilitator1', '1', 'Fasilitator'),
(5, 'Fasilitator Jawa Tengah', 812345678910, NULL, 'Jawa Tengah', 'Pakusari', 'Solo', 'Jawa Tengah', 'fasilitator2', '2', 'Fasilitator'),
(6, 'Fasilitator Jawa Barat', 812345678910, NULL, 'Jawa Barat', 'Sumbersari', 'Bogor', 'Jawa Barat', 'fasilitator3', '3', 'Fasilitator'),
(16, 'Fasilitator', 812345678910, NULL, 'Just Earth', 'Bebas', 'Bebas', 'Bebas', 'Fasi', '1', 'Fasilitator'),
(17, 'Manut', 812345678910, NULL, 'Manut', 'Manut', 'Manut', 'Manut', 'Manut', 'Manut', 'Fasilitator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kemajuan`
--
ALTER TABLE `kemajuan`
  ADD PRIMARY KEY (`id_kemajuan`);

--
-- Indeks untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `progres`
--
ALTER TABLE `progres`
  ADD PRIMARY KEY (`id_progres`);

--
-- Indeks untuk tabel `promosi`
--
ALTER TABLE `promosi`
  ADD PRIMARY KEY (`id_promosi`);

--
-- Indeks untuk tabel `sertifikasi`
--
ALTER TABLE `sertifikasi`
  ADD PRIMARY KEY (`id_sertifikasi`);

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
-- AUTO_INCREMENT untuk tabel `kemajuan`
--
ALTER TABLE `kemajuan`
  MODIFY `id_kemajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pelatihan`
--
ALTER TABLE `pelatihan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `progres`
--
ALTER TABLE `progres`
  MODIFY `id_progres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `promosi`
--
ALTER TABLE `promosi`
  MODIFY `id_promosi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sertifikasi`
--
ALTER TABLE `sertifikasi`
  MODIFY `id_sertifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
