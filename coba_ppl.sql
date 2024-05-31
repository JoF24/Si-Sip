-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Bulan Mei 2024 pada 14.30
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
(1, 'https://www.youtube.com/watch?v=BzbpPMEv21k', 'Budidaya Kopi.png', 'Aktif', 'Mengenal Teknologi Budidaya Kopi', 'Video berjudul Mengenal Teknologi Budidaya Kopi ini berisi tentang bagaimana alur budidaya kopi mulai dari penanaman sampai pasca panen', 'Pelatihan Budidaya Kopi', '2024-05-29 23:22:43', NULL),
(2, 'https://www.youtube.com/watch?v=8kzooDQBnA8', 'Mengola Kopi.png', 'Aktif', 'Belajar Roasting Kopi - Teknik Untuk Pemula', 'FARMER\'SINHERITANCECOFFEHi coffee lovers, yuk mampir ke coffee Aksata Coffee & Roastery. Bakalan serudeh... didampingin barista yang berpengalaman dan bisa diskusi tentang rasa kopi', 'Barista', '2024-05-29 23:22:43', NULL),
(3, 'https://www.youtube.com/watch?v=ZN1KETSFBxc', 'Pengendalian Hama.png', 'Aktif', 'Pengendalian Hama dan Penyakit dalam Budidaya Kopi secara Organik', 'Menurut Badan Pusat Statistik produksi kopi di Indonesia yang berasal dari perkebunan rakyat, dari mulai tahun 2015 - 2017 mengalami peningkatan. Produksi pada tahun 2015 sekitar 602 ,37 ribu ton, pada tahun 2016 menjadi 632 ribu ton atau meningkat 4,92%. Pada tahun 2017 mencapai 636,7 ribu ton atau meningkat 0,74% dibandingkan dengan tahun 2016. Kenaikan produksi ini tidak lepas dari pemeliharaan kebun yang baik dan benar. Hama dan penyakit pada tanaman kopi perlu dikendalikan agar tidak terjadi penurunan produktivitas dan kualitas pada biji kopi. Tanaman kopi yang terserang hama dan penyakit pada tingkat yang serius dapat menyebabkan kematian. Teknik pengendalian hama dan penyakit yang tepat dapat meminimalisir risiko kematian pada tanaman kopi.', 'Pengolahan Kopi', '2024-05-29 23:22:43', NULL);

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
(1, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  `deskripsi_produk` varchar(2555) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `status_promosi` varchar(255) DEFAULT NULL,
  `status_validasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `promosi`
--

INSERT INTO `promosi` (`id_promosi`, `nama_usaha`, `nomor_telepon`, `nama_produk`, `foto_produk`, `deskripsi_produk`, `harga`, `status_promosi`, `status_validasi`) VALUES
(1, 'UD Budi Makmur', '08123456789', 'Kopi Arabika', 'Kopi Arabika.png', 'Rasakan kenikmatan kopi Arabika berkualitas tinggi dari Koptam. Koptam menghadirkan kopi Arabika pilihan dari berbagai daerah di Indonesia, diolah dengan cermat untuk menghasilkan rasa yang istimewa. Kopi Arabika Koptam memiliki cita rasa yang kaya dan kompleks, dengan aroma yang harum dan rasa yang seimbang. Anda dapat memilih kopi Arabika Koptam dengan berbagai tingkat roasting, dari light roast hingga dark roast, untuk menyesuaikan selera Anda.', '20,000', 'Aktif', 'Diterima'),
(2, 'UD Budi Makmur', '08123456789', 'Kopi Ekspreso', 'Kopi Ekspreso.png', 'Kopi Ekspresso adalah paduan sempurna antara kekuatan dan kelembutan dalam setiap tegukan. Diolah dengan cermat dari biji kopi pilihan, setiap cangkir Espresso adalah perayaan akan seni penyeduhan kopi yang klasik dan otentik.', '10,000', 'Aktif', 'Diterima'),
(3, 'Toko Tani Ani', '08532145678', 'Kopi Robusta', 'Kopi Robusta.png', 'Dari perbukitan yang gagah di belahan tropis, hadir kekuatan yang tak terbantahkan dalam secangkir kopi Robusta . Dipilih dengan hati-hati dari kebun-kebun kopi yang tersebar di dataran tinggi, setiap biji kopi Robusta menghadirkan keberanian dan karakter yang kuat, siap membangunkan semangat Anda.', '35,000', 'Aktif', 'Diterima'),
(4, 'Toko Tani Ani', '08532145678', 'Premium Robusta', 'Premium Robusta.png', 'Dari tanah yang subur dan perkebunan kopi pilihan di dataran tinggi yang terpencil, hadir keistimewaan dan keanggunan dalam secangkir kopi Robusta Premium. Dipilih dengan cermat dari pohon kopi yang matang secara optimal, setiap biji kopi Robusta Premium menghadirkan kekuatan dan kelembutan yang luar biasa, menciptakan pengalaman kopi yang memanjakan indra.', '42,000', 'Aktif', 'Diterima'),
(5, 'Toko Tani Ani', '08532145678', 'Qillet Millet Kopi', 'Qiller Millet Kopi.png', 'Dari padang rumput yang hijau subur dan gurun yang luas, muncul keajaiban kopi alternatif yang mempesona, Qillet Millet Kopi. Merupakan paduan unik antara biji kopi premium dengan biji millet berkualitas tinggi, setiap cangkir Qillet Millet Kopi adalah perpaduan antara kekuatan kopi dan nutrisi kaya dari millet, menciptakan pengalaman minum kopi yang sehat dan memuaskan.', '25,000', 'Aktif', 'Diterima'),
(6, 'CV Cahaya Tani', '08176543210', 'Biji Kopi Arabika', 'Biji Kopi Arabika.png', 'Dari perkebunan kopi tertinggi di dataran tinggi yang menakjubkan, hadir keunggulan dan keanggunan dalam setiap butir biji kopi arabika. Dipilih secara teliti dari pohon kopi yang matang secara optimal, setiap biji memancarkan kemurnian dan kekayaan cita rasa khas kopi arabika, menciptakan fondasi yang kuat untuk karya seni kopi Anda.', '25,000', 'Aktif', 'Diterima');

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
(1, 'Budi Setiawan', 'Premium Robusta', 'Agus Setiawan', 'Contoh Surat Ijin Usaha.pdf', 'Contoh Foto Produk.png', 'Contoh Video Progres Pembuatan.mp4', 'Bijikopi,  lemon,  kayu  bakar,  plastik  kemasan,  minyak  tanah', 'Wajan,  spatula,  mesin  pengemasan,  tumbukan  kopi', 'Ditinjau', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nomor_telepon` varchar(25) DEFAULT NULL,
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
(1, 'Budi Setiawan', '08123456789', 'UD Budi Makmur', 'Jl. Kenanga No.12, Kelurahan Sumbersari.', 'Sumbersari', 'Jember', 'Jawa Timur', 'budismakmur12', 'budisetia123', 'Petani'),
(2, 'Ani Lestari', '08532145678', 'Toko Tani Ani', 'Jl. Mawar No.23, Kelurahan Patrang.', 'Patrang', 'Jember', 'Jawa Timur', 'tokotani.ani', 'anilestari2024', 'Petani'),
(3, 'Cipto Raharjo', '08176543210', 'CV Cahaya Tani', 'Jl. Melati No.34, Desa Mumbulsari.', 'Kaliwates', 'Jember', 'Jawa Timur', 'cvcahayatani', 'ciptoraharjo88', 'Petani'),
(4, 'Dwi Astuti', '08289012345', 'Grosir Kopi Dwi', 'Jl. Anggrek No.45, Kelurahan Tegalgede.', 'Patrang', 'Jember', 'Jawa Timur', 'grosir.kopidwi', 'dwiastuti2023', 'Petani'),
(5, 'Agus Setiawan', '08123456789', NULL, 'Jl. Kalimantan No.12, Kecamatan Sumbersari', 'Sumbersari', 'Jember', 'Jawa Timur', 'agus.s', 'Agus1234', 'Fasilitator'),
(6, ' Rendra', NULL, NULL, NULL, NULL, NULL, NULL, 'Rendra11', 'R3ndra11', 'Admin');

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
  MODIFY `id_progres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `promosi`
--
ALTER TABLE `promosi`
  MODIFY `id_promosi` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `sertifikasi`
--
ALTER TABLE `sertifikasi`
  MODIFY `id_sertifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
