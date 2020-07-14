-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 08 Jul 2020 pada 09.47
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `debit_air`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(100) NOT NULL,
  `hasil` double NOT NULL,
  `total` double NOT NULL,
  `tanggal` date NOT NULL,
  `nama_mata_air` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `hasil`, `total`, `tanggal`, `nama_mata_air`) VALUES
(2, 78.45, 42774.05, '2020-04-24', 'Mata Air Amerika'),
(3, 48.23, 125012.16, '2020-04-23', 'IPA DARMA'),
(4, 48.5, 125712, '2020-04-16', 'IPA DARMA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_air`
--

CREATE TABLE `mata_air` (
  `id_mata_air` int(100) NOT NULL,
  `nama_mata_air` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mata_air`
--

INSERT INTO `mata_air` (`id_mata_air`, `nama_mata_air`) VALUES
(1, 'IPA DARMA'),
(2, 'IPA SURAKATIGA'),
(3, 'Mata Air Cibulakan'),
(4, 'Mata Air Cibulakan'),
(5, 'Mata Air Amerika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur`
--

CREATE TABLE `struktur` (
  `id_struktur` int(100) NOT NULL,
  `nama_kadiv` varchar(100) NOT NULL,
  `nama_kasubdiv` varchar(100) NOT NULL,
  `nik_kadiv` varchar(100) NOT NULL,
  `nik_kasubdiv` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `struktur`
--

INSERT INTO `struktur` (`id_struktur`, `nama_kadiv`, `nama_kasubdiv`, `nik_kadiv`, `nik_kasubdiv`) VALUES
(1, 'Lis Suparsih, S.Sos', 'Rohanda', '093.098', '093.103');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `hakakses` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `hakakses`) VALUES
(1, 'admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indeks untuk tabel `mata_air`
--
ALTER TABLE `mata_air`
  ADD PRIMARY KEY (`id_mata_air`);

--
-- Indeks untuk tabel `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id_struktur`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `mata_air`
--
ALTER TABLE `mata_air`
  MODIFY `id_mata_air` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
