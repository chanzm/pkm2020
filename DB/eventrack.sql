-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Feb 2020 pada 04.53
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventrack`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_ev` int(11) NOT NULL,
  `foto_ev` varchar(250) NOT NULL,
  `nama_ev` varchar(100) NOT NULL,
  `kategori_ev` varchar(15) NOT NULL,
  `tempat_ev` varchar(50) NOT NULL,
  `tanggal_mulai_ev` date NOT NULL,
  `tanggal_selesai_ev` date NOT NULL,
  `lama_ev` int(11) NOT NULL,
  `jam_mulai_ev` time NOT NULL,
  `jam_selesai_ev` time NOT NULL,
  `penyelenggara_ev` varchar(100) NOT NULL,
  `ket_ev` text NOT NULL,
  `email_ev` varchar(100) NOT NULL,
  `notelp_ev` varchar(20) NOT NULL,
  `ig_ev` varchar(20) NOT NULL,
  `tiket_ev` int(11) NOT NULL,
  `harga_tiket_ev` int(11) NOT NULL,
  `status_ev` int(11) NOT NULL,
  `waktu_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_ev`, `foto_ev`, `nama_ev`, `kategori_ev`, `tempat_ev`, `tanggal_mulai_ev`, `tanggal_selesai_ev`, `lama_ev`, `jam_mulai_ev`, `jam_selesai_ev`, `penyelenggara_ev`, `ket_ev`, `email_ev`, `notelp_ev`, `ig_ev`, `tiket_ev`, `harga_tiket_ev`, `status_ev`, `waktu_input`) VALUES
(1, 'dash2.jpg', 'lalala event', 'music', 'ITS', '2020-01-18', '2020-01-19', 2, '10:00:00', '21:00:00', 'KM ITS', 'ini event lalala', 'lalala.its@gail.com', '089988887777', 'lalala_its', 100, 50000, 1, '2020-01-16 04:10:34'),
(2, 'dash3.jpg', 'yeyeye ITS', 'seminar', 'manarul', '2020-01-19', '2020-01-19', 1, '09:00:00', '15:00:00', 'kita sendiri', 'mari berlalayeyeye', 'yeyeye_its@gmail.com', '089788776567', 'yeyeye@its', 100, 70000, 1, '2020-01-16 04:10:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_favorit`
--

CREATE TABLE `event_favorit` (
  `id_ef` int(11) NOT NULL,
  `id_ses` int(11) NOT NULL,
  `id_ev` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalender`
--

CREATE TABLE `kalender` (
  `id_kal` int(11) NOT NULL,
  `id_ev` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_session`
--

CREATE TABLE `login_session` (
  `id_ses` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `telepon` varchar(16) NOT NULL,
  `password` varchar(100) NOT NULL,
  `repassword` varchar(100) NOT NULL,
  `role` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login_session`
--

INSERT INTO `login_session` (`id_ses`, `email`, `firstname`, `lastname`, `telepon`, `password`, `repassword`, `role`) VALUES
(1, 'chan@gmail.com', 'chan', '', '', 'chan', 'chan', ''),
(2, 'lol@gmail.com', 'daefc', '', '', 'eraf', 'eradf', ''),
(3, 'ww@gmail.com', 'qwqw qw', '', '', 'qwq', 'edcwswc', ''),
(4, 'lala@gmail.com', 'lala lala', '', '', 'lala', 'lala', ''),
(5, 'cantik@gmail.com', 'cantik', '', '', 'cantik', 'cantik', ''),
(6, 'atikarizki41@gmail.com', 'kiki', '', '', 'kikikiki', 'kikikiki', ''),
(7, 'lala@gmail.com', '', '', '', 'mbo', 'mbo', ''),
(8, 'y@gmail.com', '', '', '', 'y', 'y', ''),
(9, 'aw@gmail.com', '', 'aw', '', 'aw', 'aw', ''),
(10, 'q@gmail.com', 'q', 'q', '', 'q', 'q', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pesan` int(11) NOT NULL,
  `id_pemesan` int(11) NOT NULL,
  `id_ev` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `order_number` varchar(30) NOT NULL,
  `status` varchar(100) NOT NULL,
  `waktu_pesan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `jenis_pembayaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pesan`, `id_pemesan`, `id_ev`, `harga`, `jumlah_tiket`, `jumlah_bayar`, `order_number`, `status`, `waktu_pesan`, `jenis_pembayaran`) VALUES
(1, 6, 1, 50000, 4, 200000, '45283916', 'BELUM CHECKOUT', '2020-01-16 04:11:25', ''),
(2, 6, 1, 50000, 4, 200000, '75491620', 'CHECKOUT', '2020-01-16 04:11:42', ''),
(3, 6, 1, 50000, 4, 200000, '09258173', 'CHECKOUT', '2020-01-16 04:41:05', ''),
(4, 5, 2, 70000, 5, 350000, '96851740', 'CHECKOUT', '2020-01-17 02:02:18', ''),
(5, 10, 2, 70000, 1, 70000, '76283159', 'CHECKOUT', '2020-01-17 03:42:52', ''),
(6, 6, 1, 50000, 1, 50000, '36781245', 'CHECKOUT', '2020-01-17 06:48:25', ''),
(7, 1, 2, 70000, 7, 490000, '70419582', 'CHECKOUT', '2020-01-17 06:56:48', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_ev`);

--
-- Indeks untuk tabel `event_favorit`
--
ALTER TABLE `event_favorit`
  ADD PRIMARY KEY (`id_ef`);

--
-- Indeks untuk tabel `kalender`
--
ALTER TABLE `kalender`
  ADD PRIMARY KEY (`id_kal`);

--
-- Indeks untuk tabel `login_session`
--
ALTER TABLE `login_session`
  ADD PRIMARY KEY (`id_ses`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id_ev` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `event_favorit`
--
ALTER TABLE `event_favorit`
  MODIFY `id_ef` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kalender`
--
ALTER TABLE `kalender`
  MODIFY `id_kal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `login_session`
--
ALTER TABLE `login_session`
  MODIFY `id_ses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
