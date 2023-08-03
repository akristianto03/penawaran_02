-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 02 Agu 2023 pada 02.04
-- Versi server: 8.0.30
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u417752542_db_marketing`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `latest_update`
--

CREATE TABLE `latest_update` (
  `id` int NOT NULL,
  `produk` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `nama_proyek` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marketing` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_penawaran`
--

CREATE TABLE `tbl_data_penawaran` (
  `id` int NOT NULL,
  `produk` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marketing` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_surat` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_instansi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_customer` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_customer` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon_customer` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_proyek` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `periode_pelaksana` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_penanggung_jawab` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon_penanggung_jawab` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_penagihan` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `include` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ppn` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metode_pembayaran` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keterangan_tambahan` varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `goals` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permintaan_alat`
--

CREATE TABLE `tbl_permintaan_alat` (
  `ids` int NOT NULL,
  `nama_proyek` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `marketing` varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item` varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_satuan` float DEFAULT NULL,
  `satuan` varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permintaan_aspal`
--

CREATE TABLE `tbl_permintaan_aspal` (
  `ids` int NOT NULL,
  `nama_proyek` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `marketing` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ketebalan` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satuan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_satuan` float DEFAULT NULL,
  `jumlah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permintaan_marka`
--

CREATE TABLE `tbl_permintaan_marka` (
  `ids` int NOT NULL,
  `nama_proyek` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `marketing` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `standard` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_satuan` float DEFAULT NULL,
  `satuan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permintaan_pancang`
--

CREATE TABLE `tbl_permintaan_pancang` (
  `ids` int NOT NULL,
  `marketing` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_proyek` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `item` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `panjang` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_satuan` float DEFAULT NULL,
  `keterangan` varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permintaan_panel`
--

CREATE TABLE `tbl_permintaan_panel` (
  `ids` int NOT NULL,
  `nama_proyek` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `marketing` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_satuan` float DEFAULT NULL,
  `satuan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permintaan_paving`
--

CREATE TABLE `tbl_permintaan_paving` (
  `ids` int NOT NULL,
  `nama_proyek` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `marketing` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mutu_beton` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `warna` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satuan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_satuan` float DEFAULT NULL,
  `jumlah` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permintaan_readymix`
--

CREATE TABLE `tbl_permintaan_readymix` (
  `ids` int NOT NULL,
  `nama_proyek` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `marketing` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slump` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `umur_beton` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipe` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_satuan` float DEFAULT NULL,
  `satuan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permintaan_sheet_pile`
--

CREATE TABLE `tbl_permintaan_sheet_pile` (
  `ids` int NOT NULL,
  `marketing` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_proyek` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `item` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `panjang` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_satuan` float DEFAULT NULL,
  `keterangan` varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permintaan_stensla`
--

CREATE TABLE `tbl_permintaan_stensla` (
  `ids` int NOT NULL,
  `nama_proyek` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `marketing` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `armada` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `satuan` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_satuan` float DEFAULT NULL,
  `jumlah` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_permintaan_uditch`
--

CREATE TABLE `tbl_permintaan_uditch` (
  `ids` int NOT NULL,
  `nama_proyek` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `marketing` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `beban_gandar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga_satuan` float DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`) VALUES
(63, 'ADMIN123', '$2y$10$zbIMY6HMEtwsxbvBWbqZAupItv4mMK2sEKrV5EV8Bf5orARDeWgKS', 'Admin'),
(64, 'USER111', '$2y$10$rB1jT6.hT1w1YtFy0I2wJeCbgoo0xDstzt0u/9bJ8R4nFG7PEhKZO', 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `x_session`
--

CREATE TABLE `x_session` (
  `idx` int NOT NULL,
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logged_ip` varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `useragent` varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `idadmin` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `latest_update`
--
ALTER TABLE `latest_update`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_data_penawaran`
--
ALTER TABLE `tbl_data_penawaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_proyek` (`nama_proyek`);

--
-- Indeks untuk tabel `tbl_permintaan_alat`
--
ALTER TABLE `tbl_permintaan_alat`
  ADD PRIMARY KEY (`ids`),
  ADD KEY `nama_proyek` (`nama_proyek`);

--
-- Indeks untuk tabel `tbl_permintaan_aspal`
--
ALTER TABLE `tbl_permintaan_aspal`
  ADD PRIMARY KEY (`ids`),
  ADD KEY `nama_proyek` (`nama_proyek`);

--
-- Indeks untuk tabel `tbl_permintaan_marka`
--
ALTER TABLE `tbl_permintaan_marka`
  ADD PRIMARY KEY (`ids`),
  ADD KEY `nama_proyek` (`nama_proyek`);

--
-- Indeks untuk tabel `tbl_permintaan_pancang`
--
ALTER TABLE `tbl_permintaan_pancang`
  ADD PRIMARY KEY (`ids`),
  ADD KEY `nama_proyek` (`nama_proyek`);

--
-- Indeks untuk tabel `tbl_permintaan_panel`
--
ALTER TABLE `tbl_permintaan_panel`
  ADD PRIMARY KEY (`ids`),
  ADD KEY `nama_proyek` (`nama_proyek`);

--
-- Indeks untuk tabel `tbl_permintaan_paving`
--
ALTER TABLE `tbl_permintaan_paving`
  ADD PRIMARY KEY (`ids`);

--
-- Indeks untuk tabel `tbl_permintaan_readymix`
--
ALTER TABLE `tbl_permintaan_readymix`
  ADD PRIMARY KEY (`ids`),
  ADD KEY `nama_proyek` (`nama_proyek`);

--
-- Indeks untuk tabel `tbl_permintaan_sheet_pile`
--
ALTER TABLE `tbl_permintaan_sheet_pile`
  ADD PRIMARY KEY (`ids`),
  ADD KEY `nama_proyek` (`nama_proyek`);

--
-- Indeks untuk tabel `tbl_permintaan_stensla`
--
ALTER TABLE `tbl_permintaan_stensla`
  ADD PRIMARY KEY (`ids`),
  ADD KEY `nama_proyek` (`nama_proyek`);

--
-- Indeks untuk tabel `tbl_permintaan_uditch`
--
ALTER TABLE `tbl_permintaan_uditch`
  ADD PRIMARY KEY (`ids`),
  ADD KEY `nama_proyek` (`nama_proyek`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `x_session`
--
ALTER TABLE `x_session`
  ADD PRIMARY KEY (`idx`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `latest_update`
--
ALTER TABLE `latest_update`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2528;

--
-- AUTO_INCREMENT untuk tabel `tbl_data_penawaran`
--
ALTER TABLE `tbl_data_penawaran`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7140;

--
-- AUTO_INCREMENT untuk tabel `tbl_permintaan_alat`
--
ALTER TABLE `tbl_permintaan_alat`
  MODIFY `ids` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1695;

--
-- AUTO_INCREMENT untuk tabel `tbl_permintaan_aspal`
--
ALTER TABLE `tbl_permintaan_aspal`
  MODIFY `ids` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2353;

--
-- AUTO_INCREMENT untuk tabel `tbl_permintaan_marka`
--
ALTER TABLE `tbl_permintaan_marka`
  MODIFY `ids` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tbl_permintaan_pancang`
--
ALTER TABLE `tbl_permintaan_pancang`
  MODIFY `ids` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5665;

--
-- AUTO_INCREMENT untuk tabel `tbl_permintaan_panel`
--
ALTER TABLE `tbl_permintaan_panel`
  MODIFY `ids` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT untuk tabel `tbl_permintaan_paving`
--
ALTER TABLE `tbl_permintaan_paving`
  MODIFY `ids` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1878;

--
-- AUTO_INCREMENT untuk tabel `tbl_permintaan_readymix`
--
ALTER TABLE `tbl_permintaan_readymix`
  MODIFY `ids` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3384;

--
-- AUTO_INCREMENT untuk tabel `tbl_permintaan_sheet_pile`
--
ALTER TABLE `tbl_permintaan_sheet_pile`
  MODIFY `ids` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT untuk tabel `tbl_permintaan_stensla`
--
ALTER TABLE `tbl_permintaan_stensla`
  MODIFY `ids` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT untuk tabel `tbl_permintaan_uditch`
--
ALTER TABLE `tbl_permintaan_uditch`
  MODIFY `ids` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3675;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `x_session`
--
ALTER TABLE `x_session`
  MODIFY `idx` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11742;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
