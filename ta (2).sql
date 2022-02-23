-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Feb 2022 pada 11.55
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
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `keterangan`) VALUES
(8, '1644490340_f4f1412f5109115291ed.jpg', 'ok'),
(12, '1644574862_d6b8dca25f606b6ec002.jpg', 'coba tambah gambar ke kebudayaan ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id`, `judul`, `content`) VALUES
(1, 'SEJARAH', ' <p>Pura Dalem Ped merupakan salah satu pura kahyangan jagad yang terkenal di pelosok Bali sehingga masyarakat Bali berbondong-bondong tangkil ke Pura Dalem Ped ini. Pura Dalem Ped tepat berada di pesisir pantai Desa Ped, Kecamatan Nusa Penida, Kabupaten Klungkung.</p>\r\n                    <p>Sejarah Desa Ped tergolong sangat unik. Dalam penulisan sejarah Desa Ped ini, penulis hanya menggunakan sumber lisan, artefak dan selebihnya dari berbagai media. Hal ini disebabkan karena penulis tidak menemukan sumber tertulis yang bisa dijadikan sumber. Artefak yang dimaksud di sini adalah adanya tiga buah tapel yang sekarang di’<em>linggih</em>’kan di Pura Dalem Ped. Seperti uraian di atas, dengan adanya tiga buah tapel ini melahirkan sebuah nama “Ped”, yang pada awalnya dari kesaktian tiga buah tapel yang sangat populer ke pelosok Bali pada saat itu dan sampai didengar oleh seorang Pedanda yaitu Ida Pedanda Abiansemal, sehingga Ida Pedanda Abiansemal bersama pepatih dan pengikutnya secara beriringan <em>(mapeed) </em>datang ke Nusa dengan maksud menyaksikan langsung kebenaran informasi atas keberadaan tiga tapel yang sakti di Pura Dalem Nusa. Dulu bernama Pura Dalem Nusa tetapi sudah ada pergantian nama setelah Ida Pedanda Abiansemal beriringan (mapeed) ke Pura Dalem Nusa kemudian digantikan oleh seorang tokoh Puri Klungkung pada zaman I Dewa Agung menjadi Pura Dalem Ped.</p>\r\n                    <p>Informasi tentang keberadaan Pura Dalem Ped atau Pura Penataran Ped pada awalnya masih sangat simpang siur. Hal ini disebabkan karena dalam penggalian sumber untuk mencari informasi tentang keberadaan pura ini, sumber-sumber yang ada sangat minim. Dengan demikian hal ini memicu timbulnya perdebatan yang cukup lama di antara beberapa tokoh-tokoh spiritual. Perdebatan yang timbul yakni mengenai nama pura. Kelompok Puri Klungkung, Puri Gelgel dan Mangku Rumodja Mangku Lingsir, menyebutkan pura itu bernama Pura Pentaran  Ped. Yang lainnya, khususnya para balian di Bali, menyebut Pura Dalem Ped.</p>\r\n                    <p>Menurut Dewa Ketut Soma seorang penekun spiritual dan penulis buku asal Desa Satra, Klungkung, dalam tulisannya berjudul “<em>Selayang Pandang Pura Ped” </em>berpendapat, kedua sebutan dari dua versi yang berbeda itu benar adanya. Menurutnya, yang dimaksudkan adalah Pura Dalem Penataran Ped, Jadi, satu pihak menonjolkan “penataran”-nya, satu pihak lainnya lebih menonjolkan “dalem”-nya.</p>\r\n                    <p>Kembali pada tiga buah tapel. Saking saktinya, tapel-tapel itu bahkan mampu menyembuhkan berbagai macam penyakit, baik yang diderita manusia maupun tumbuh-tumbuhan. Sebelumnya, Ida Pedanda Abiansemal kehilangan ‘ tiga buah tapel. Begitu menyaksikan tiga tapel yang ada di Pura Dalem Nusa itu, ternyata tapel tersebut adalah miliknya yang hilang dari kediamannya. Namun, Ida Pedanda tidak mengambil kembali tapel-tapel itu dengan catatan warga Nusa menjaga dengan baik dan secara terus-menerus melakukan upacara-upacara sebagaimana mestinya.</p>\r\n                    <p>Kesaktian tiga tapel itu bukan saja masuk ke telinga Ida Pedanda, tetapi ke seluruh pelosok Bali, termasuk pada waktu itu warga Subak Sampalan yang saat itu menghadapi serangan hama tanaman seperti tikus, walang sangit dan lainnya. Ketika mendengar kesaktian tiga tapel itu, seorang klian subak diutus untuk menyaksikan tapel tersebut di Pura Dalem Nusa. Sesampainya di sana, klian subak memohon anugerah agar Subak Sampalan terhindar dari berbagai penyakit yang menyerang tanaman mereka, Permohonan itu terkabul. Tak lama berselang, penyakit tanaman itu pergi jauh dari Subak Sampalan. Hasil panenpun menjadi berlimpah.</p>\r\n                    <p>Kemudian warga menggelar upacara <em>mapeed. </em>Langkah itu diikuti subak-subak lain di sekitar Sampalan. Kabar tentang pelaksanaan upacara <em>mapeed </em>itu terdengar hingga seluruh pelosok Nusa. Sejak saat itulah I Dewa Agung Klungkung mengganti nama Pura Dalem Nusa dengan Pura Dalem Peed (Ped).</p>\r\n                    <p>Meski pun ada kata “dalem”, namun bukan berarti pura tersebut mempakan bagian dari Tri Kahyangan. Yang dimaksudkan “dalem” di sini adalah merujuk sebutan raja yang berkuasa di Nusa Penida pada zaman itu. Dalem atau raja dimaksud adalah penguasa sakti Ratu Gede Nusa atau Ratu Gede Mecaling.</p>\r\n                    <p>Ada lima lokasi pura yang bersatu pada areal Pura Penataran Agung Ped. Persembahyangan pertama yakni Pura Segara, sebagai tempat berstananya Bhatara Baruna, yang terletak pada bagian paling utara dekat dengan bibir pantai lautan Selat Nusa. Persembahyangan kedua yakni Pura Taman yang terletak di sebelah selatan Pura Segara dengan kolam mengitari pelinggih yang ada di dalamnya yang berfungsi sebagai tempat penyucian. Kemudian persembahyangan ketiga yakni ke baratnya lagi, ada pura utama yakni Penataran Ratu Gede Mecaling sebagai simbol kesaktian penguasa Nusa pada zamannya. Persembahyangan terakhir yakni di sebelah timurnya ada Ratu Mas. Terakhir di <em>jaba tengah </em>ada Bale Agung yang merupakan linggih Bhatara-bhatara pada waktu <em>ngusaba.</em></p>\r\n                    <p>Masing-masing pura dilengkapi pelinggih, bale perantenan dan bangunan-bangunan lain sesuai fungsi pura masing-masing. Selain itu, di posisi <em>jaba </em>ada sebuah wantilan yang sudah berbentuk bangunan balai banjar model daerah Badung yang biasa dipergunakan untuk pertunjukan kesenian.</p>\r\n                    <p>Seluruh bangunan yang ada di Pura Penataran Agung Ped sudah mengalami perbaikan atau pemugaran, kecuali benda-benda yang dikeramatkan. Contohnya, dua area yakni Area Ratu Gede Mecaling yang ada di Pura Ratu Gede dan Area Ratu Mas yang ada di Pelebaan Ratu Mas. Kedua area itu tidak ada yang berani menyentuhnya. Begitu juga bangunan-bangunan keramat lainnya. Kalaupun ada upaya untuk memperbaiki, hal itu dilakukan dengan membuat bangunan serupa di sebelah bangunan yang dikeramatkan tersebut.</p>');

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
-- Struktur dari tabel `kebudayaan`
--

CREATE TABLE `kebudayaan` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `keterangan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kebudayaan`
--

INSERT INTO `kebudayaan` (`id`, `foto`, `keterangan`) VALUES
(1, '1644575521_e0625c6821f4b30b1f98.jpg', 'coba 1');

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
(3, 'Sampalan', 'Tribuana', 'nusa penida', '0812345678', '<p>pagi : 06.30-07.00</p>\r\n<p>Siang</p>\r\n');

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
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `kebudayaan`
--
ALTER TABLE `kebudayaan`
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
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `infokes`
--
ALTER TABLE `infokes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `kebudayaan`
--
ALTER TABLE `kebudayaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
