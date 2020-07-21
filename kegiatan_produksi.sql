-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 21 Jul 2020 pada 03.28
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
-- Database: `kegiatan_produksi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_kegiatan`
--

CREATE TABLE `detail_kegiatan` (
  `id_detail_kegiatan` int(11) NOT NULL,
  `id_kegiatan` int(100) NOT NULL,
  `uraian_kegiatan` text NOT NULL,
  `kendala` text NOT NULL,
  `tindakan_lanjut` text NOT NULL,
  `penanggung_jawab` text NOT NULL,
  `penanggung_jawab2` text NOT NULL,
  `penanggung_jawab3` text NOT NULL,
  `penanggung_jawab4` text NOT NULL,
  `penanggung_jawab5` text NOT NULL,
  `penanggung_jawab6` text NOT NULL,
  `indikator` text NOT NULL,
  `keterangan` text NOT NULL,
  `waktu_kegiatan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_kegiatan`
--

INSERT INTO `detail_kegiatan` (`id_detail_kegiatan`, `id_kegiatan`, `uraian_kegiatan`, `kendala`, `tindakan_lanjut`, `penanggung_jawab`, `penanggung_jawab2`, `penanggung_jawab3`, `penanggung_jawab4`, `penanggung_jawab5`, `penanggung_jawab6`, `indikator`, `keterangan`, `waktu_kegiatan`) VALUES
(32, 27, 'Koordinasi terkait jalur pipa transmisi air baku surakatiga yang letaknya bergeser akibat dari adanya saluran irigasi yang boocor', '-', '-Perbaikan jalur transmisi air baku Surakatiga', 'Kepala Divisi Produksi', 'Kepala Divisi Trandis', 'Kasubdiv Pengadaan dan RT', 'Kasubdiv Pengendalian Air Baku', '', '', '100%', '-', '2020-07-16'),
(33, 27, 'Pembahasan rencana pembangunan TPS Kel.Winduhaji yang akan di bangun di sebelah utara IPA Surakatiga', '-', '-melakukan pengecekan kualitas air baku sebelum dan setelah adanya TPS', 'Kepala Divisi Produksi', 'Kasubdiv Kualitas Air', '', '', '', '', '100%', '-', '2020-07-16'),
(34, 27, 'Pembahasan Jalan Akses Menuju IPA SURAKATIGA yang RUSAK', '-', '-', 'Kepala Divisi Produksi', 'Kasubdiv Kualitas Air', '', '', '', '', '100%', '-', '2020-07-16'),
(36, 28, 'Laporan Bulanan Kublikasi penggunaan sumber mata air yang berasal dari air permukaan dan mata air yang di gunakan PDAM', '-', '-', 'Kepala divisi Produksi', 'Kasub div Kualitas Air', '', '', '', '', '100%', '-', '0000-00-00'),
(37, 29, 'Pemasangan drum ponton secara berkala di waduk darma', '-', '-', 'Kepala divisi produksi', 'Kasubdiv Kualitas air', 'kasubdiv pengendalian air baku', '', '', '', '100%', '-', '0000-00-00'),
(38, 30, 'Percobaan Menanam Jagung', '-', '-', 'ASD', '', '', '', '', '', '100%', '-', '0000-00-00'),
(39, 31, 'Melak Cangkeng', '-', '-', 'DSAD', '', '', '', '', '', '100%', '-', '0000-00-00'),
(40, 32, 'monitoring dan pemeliharaan reservoir', '-', 'hasil laporan pekerjaan dijadikan bahan evaluasi', 'Kepala Divisi Produksi', 'Kasubdiv pengendalian air baku', '', '', '', '', '100%', '-', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(100) NOT NULL,
  `kegiatan` text NOT NULL,
  `waktu_kegiatan` date NOT NULL,
  `output` text NOT NULL,
  `waktu_kegiatan2` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `kegiatan`, `waktu_kegiatan`, `output`, `waktu_kegiatan2`) VALUES
(27, 'Koordinasi dengan Kelurahan Winduhaji', '2020-07-16', 'Pemeliharaan Sumber air IPA Surakatiga', '0000-00-00'),
(28, 'Laporan Pemakaian Air ke UPTD PSDA', '2020-07-18', 'Hasil berupa Pajak air yang harus di bayarkan oleh PDAM', '0000-00-00'),
(29, 'Pemasangan Drum Ponton', '2020-07-18', '-', '0000-00-00'),
(30, 'Percobaan', '2020-06-19', 'Percobaan Menanam Jagung', '0000-00-00'),
(31, 'Percobaan Melak Cangkeng', '2020-05-22', 'Percobaan Melak Cangkeng', '0000-00-00'),
(32, 'Monitoring reservoir linggar jati', '2020-07-22', '-', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `struktur`
--

CREATE TABLE `struktur` (
  `id_struktur` int(100) NOT NULL,
  `nama_kadiv` text NOT NULL,
  `nama_kasubdiv` text NOT NULL,
  `nama_pelaksana` text NOT NULL,
  `nik_kadiv` text NOT NULL,
  `nik_kasubdiv` text NOT NULL,
  `nik_pelaksana` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `struktur`
--

INSERT INTO `struktur` (`id_struktur`, `nama_kadiv`, `nama_kasubdiv`, `nama_pelaksana`, `nik_kadiv`, `nik_kasubdiv`, `nik_pelaksana`) VALUES
(1, 'Lis Suparsih, S.Sos ', 'Samsudin', 'asdaf', '093.098', '093.103', '0234.234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `hakakses` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `hakakses`) VALUES
(1, 'produksi', '16431198395faf20e5a208c90982fbdcb0307b4e', 'produksi', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_kegiatan`
--
ALTER TABLE `detail_kegiatan`
  ADD PRIMARY KEY (`id_detail_kegiatan`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

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
-- AUTO_INCREMENT untuk tabel `detail_kegiatan`
--
ALTER TABLE `detail_kegiatan`
  MODIFY `id_detail_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
