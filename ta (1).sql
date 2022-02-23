-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Feb 2022 pada 06.52
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `infokes`
--

CREATE TABLE `infokes` (
  `id` int(11) NOT NULL,
  `desa` varchar(100) NOT NULL,
  `positif` int(11) NOT NULL,
  `dalam_perawatan` int(11) NOT NULL,
  `sembuh` int(11) NOT NULL,
  `meninggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `infokes`
--

INSERT INTO `infokes` (`id`, `desa`, `positif`, `dalam_perawatan`, `sembuh`, `meninggal`) VALUES
(1, 'Batukandik', 13, 0, 13, 0),
(2, 'Batumadeg', 14, 0, 14, 0),
(3, 'Batununggul', 76, 0, 71, 4),
(4, 'Bunga Mekar', 8, 0, 8, 2),
(5, 'Jungutbatu', 25, 0, 23, 2),
(6, 'Kampung Toyapakeh', 2, 0, 2, 0),
(7, 'Klumpu', 27, 0, 25, 2),
(8, 'Kutampi', 16, 0, 15, 0),
(9, 'Kutampi Kaler', 45, 1, 43, 2),
(10, 'Lembongan', 37, 0, 35, 1),
(11, 'Ped', 57, 0, 54, 3),
(12, 'Pejukutan', 40, 0, 39, 2),
(13, 'Sakti', 24, 1, 21, 2),
(14, 'Sekartaji', 24, 1, 22, 0),
(15, 'Suana', 36, 0, 35, 1),
(16, 'Tanglad', 13, 0, 10, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `isi`) VALUES
(6, 'Agus', 'coba ci4'),
(7, 'Amanda ', 'test kriuk'),
(8, 'drake', 'nice job/ well done and keep improving this website... thanks for the informations!!! :)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` enum('admin','user') NOT NULL DEFAULT 'user',
  `nama` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `alamat` varchar(250) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `email`, `level`, `nama`, `password`, `created_at`, `updated_at`, `alamat`, `foto`) VALUES
(1, 'Wikgung', 'agunkde111@gmail.com', 'admin', 'agus amanda', '$2y$10$q56n91a5b9t.9ffIMiDi9.iwdiWOWL5rm216Bcsj/14vtUx8EtAJG', '2022-02-05 05:31:50', '2022-01-20 12:29:30', 'DENPASARa', '1644039110_15762e2b10931a6b8c03.png'),
(2, 'admin', 'agunkde111@gmail.com', 'user', 'agus', '$2y$10$Wu/mS3sorI4l8gP5fdj2qeuuLK8GVFIOVlC6gsbC4y3gqC1/IInkK', '2022-02-02 11:14:33', '2022-01-26 11:19:08', 'Klungkung', ''),
(3, 'user1', 'agunkde111@gmail.com', 'user', 'user1 uji coba  ', '$2y$10$Cb3FrmGvDQDUbUpG9rEcDuf7VbKYOnnc6svxwBVhaFHCjrDiigBjm', '2022-02-03 04:44:47', '2022-02-03 02:49:19', 'rumah', '1643863468_a803c2f5597c7355e0e5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelabuhan`
--

CREATE TABLE `pelabuhan` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `tujuan` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `kontak` varchar(50) NOT NULL,
  `jadwal` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelabuhan`
--

INSERT INTO `pelabuhan` (`id`, `nama`, `tujuan`, `alamat`, `kontak`, `jadwal`) VALUES
(1, 'buyuk', '', 'buyuk', '0812345678', ''),
(2, 'tribuana', '', 'rumah', '0812345678', ''),
(3, 'Sampalan', 'Tribuana', 'nusa penida', '0812345678', 'pagi : 06.30-07.00\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemangku`
--

CREATE TABLE `pemangku` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kontak` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemangku`
--

INSERT INTO `pemangku` (`id`, `nama`, `kontak`, `alamat`) VALUES
(1, 'mk a', '+6281234567833', 'desa ped'),
(5, 'kadek', '0812345678', 'rumah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penginapan`
--

CREATE TABLE `penginapan` (
  `id` int(11) NOT NULL,
  `nama_penginapan` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `kontak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tokohadat`
--

CREATE TABLE `tokohadat` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kontak` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tokohadat`
--

INSERT INTO `tokohadat` (`id`, `nama`, `kontak`, `alamat`) VALUES
(1, 'Agus', '0812345678', 'rumahku');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `infokes`
--
ALTER TABLE `infokes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelabuhan`
--
ALTER TABLE `pelabuhan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemangku`
--
ALTER TABLE `pemangku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tokohadat`
--
ALTER TABLE `tokohadat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `infokes`
--
ALTER TABLE `infokes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pelabuhan`
--
ALTER TABLE `pelabuhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pemangku`
--
ALTER TABLE `pemangku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tokohadat`
--
ALTER TABLE `tokohadat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
