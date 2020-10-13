-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 03 Sep 2020 pada 06.11
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
(39, 31, 'Melak Cangkeng', '-', '-', 'DSAD', '', '', '', '', '', '100%', '-', '0000-00-00'),
(46, 32, 'Pembacaan water meter induk MA  cibodas dan babelan PAM Cirebon ', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Pengendalian Air Baku', 'Kasub.Div Kualitas Air', '', '', '', '100%', '-', '0000-00-00'),
(47, 33, 'Pemeriksaan Water meter induk MA. Cibulan 1 dan 2', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Pengendalian Air Baku', 'Kasub.Div Kualitas Air', '', '', '', '100%', '-', '0000-00-00'),
(48, 34, 'Mengukur debit andalan MA. Cibangir', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Pengendalian Air Baku', '', '', '', '', '100%', '-', '0000-00-00'),
(49, 35, 'Menggantu WM lama yang telah rusak', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Kualitas Air', '', '', '', '', '100%', '-', '0000-00-00'),
(50, 36, 'Mengatur optimalisasi pemanfaatan air', '-', '-', 'Kepala Divisi Produksi', 'Kepala Divisi Litbang', 'Kepala Divisi Trandist', '', '', '', '100%', '-', '0000-00-00'),
(51, 37, 'Pembersihan intake surakatiga yang sebelumnya penuh dengan lumpur', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Pengendalian Air Baku', '', '', '', '', '100%', '-', '0000-00-00'),
(52, 38, 'Mengukur debit untuk mengetahui jumlah air yang di gunakan cab cidahu dari garatengah, singkup dan rajadanu', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Pengendalian Air Baku', '', '', '', '', '100%', '-', '0000-00-00'),
(53, 39, 'membersihan lumpur yang banyak mengendap di tub setler', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Kualitas Air', '', '', '', '', '100%', '-', '0000-00-00'),
(54, 40, 'Koordinasi dengan pihak Labkesda', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Pengendalian Air Baku', 'Kasub.Div Kualitas Air', '', '', '', '100%', '-', '0000-00-00'),
(55, 41, 'Pendistribusian kaporit ke seluruh cabang unit dan pos', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Pengendalian Air Baku', '', '', '', '', '100%', '-', '0000-00-00'),
(56, 42, 'Mengukur debit MA. Kopi bojong, Kopi Ciinjuk dan Batu nganjut', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Pengendalian Air Baku', '', '', '', '', '100%', '-', '0000-00-00'),
(57, 43, 'Pengecekan madul genset IPA Surakatiga', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Pengendalian Air Baku', '', '', '', '', '100%', '-', '0000-00-00'),
(58, 44, 'Pengecekan kondisi pompa MA. Citamba lama yang mengalami kerusakan sehingga harus adanya penggantian', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Kualitas Air', 'Kasub.Div Pengendalian Air Baku', '', '', '', '100%', '-', '0000-00-00'),
(59, 45, 'pemantauan perencanaan pemasangan ponton barudi Darma', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Pengendalian Air Baku', '', '', '', '', '100%', '-', '0000-00-00'),
(60, 46, 'Koordinasi terkait permintaan suplesi air MA. Kopi ciinjuk', 'Tidak adanya respon yang baik mengenai suplesi penambahan debit', '-', 'Kepala Divisi Produksi', 'Kasub.Div Pengendalian Air Baku', '', '', '', '', '0%', '-', '0000-00-00'),
(61, 47, 'Mengencangkan sealing ponton agar tidak mudah terbawa angin', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Pengendalian Air Baku', '', '', '', '', '100%', '-', '0000-00-00'),
(62, 48, 'Kegiatan rutin pembersihan torn', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Kualitas Air', 'Kasub.Div Pengendalian Air Baku', '', '', '', '100%', '-', '0000-00-00'),
(63, 49, 'Kegiatan rutin opsih', '-', '-', 'Kepala Divisi Produksi', '', '', '', '', '', '100%', '-', '0000-00-00'),
(64, 50, 'Memasang jaring di bront', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Kualitas Air', '', '', '', '', '100%', '-', '0000-00-00'),
(65, 51, 'Pemeliharaan berupa opsih rutin di Darma loka, Cibulan, Surakatiga dan BPT Kertawirama', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Kualitas Air', '', '', '', '', '100%', '-', '0000-00-00'),
(66, 52, 'Melakukan koordinasi dengan Labkesda mengenai waktu pelaksanaan pemeriksaan Lab', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Kualitas Air', '', '', '', '', '100%', '-', '0000-00-00'),
(67, 53, 'Pemasangan jaring di intake MA. Cibulakan dan BPT Kertawirama', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Kualitas Air', '', '', '', '', '100%', '-', '0000-00-00'),
(68, 54, 'Pembubuhan kaporit di IPA darma, surakatiga, cabang, unit dan pos', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Kualitas Air', '', '', '', '', '100%', '-', '0000-00-00'),
(69, 55, 'Pengukuran debit optimal dari MA. Cibangir dan Darmaloka ', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Pengendalian Air Baku', '', '', '', '', '100%', '-', '0000-00-00'),
(70, 56, 'Kunjungan membahas mengenai hak guna tanah yang digunakan oleh IPA Surakatiga', '-', '-', 'Kepala Divisi Produksi', '', '', '', '', '', '100%', '-', '0000-00-00'),
(71, 57, 'Kunjungan dari PJLHK Bogor ke PDAM terkait kegiatan pemanfaatan mata air di kawasan TN dan melakukan kunjungan ke MA. Balong dalem', '-', '-', '', '', '', '', '', '', '100%', '-', '0000-00-00'),
(72, 58, 'Koordinasi dengan pihak cabang ciawi dan penjaga bront MA. Cibulan terkait debit untuk menghadapi musim kemarau', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Pengendalian Air Baku', '', '', '', '', '100%', '-', '0000-00-00'),
(73, 59, 'Koordinasi terkait proyek strategis pembangunan waduk darma yang akan melakukan pembangunan ponton IPA Darma', '-', '-', 'Kepala Divisi Produksi', 'Kasub.Div Pengendalian Air Baku', '', '', '', '', '100%', '-', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(100) NOT NULL,
  `kegiatan` text NOT NULL,
  `waktu_kegiatan` date NOT NULL,
  `output` text NOT NULL,
  `waktu_kegiatan2` date NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `kegiatan`, `waktu_kegiatan`, `output`, `waktu_kegiatan2`, `file`) VALUES
(32, 'Pembacaan meter air cibodas dan babelan PAM Cirebon ', '2020-06-02', 'Terbacanya hasil pemakaian air PAM Cirebon', '2020-06-02', ''),
(33, 'Pembacaan meter air Cibulan 1 dan 2', '2020-06-02', 'Terbacanya hasil penggunaan air cabang ciawi cidahu dan japara', '2020-06-02', ''),
(34, 'Pengukuran debit MA. Cibangir', '2020-06-05', 'Terukurnya debit andalan MA. Cibangir sebesar 50 l/dt', '2020-06-05', ''),
(35, 'Penggantian WM PT. Linggarjati (H. Kosasih)', '2020-06-27', 'WM baru', '2020-06-27', ''),
(36, 'Koordinasi mengenai pendistribusian MA. Cibulan ke Ciawi dan Cidahu', '2020-06-11', 'Pemanfaatan sumber air berjalan optimal', '2020-06-11', ''),
(37, 'Pengurasan IPA Surakatiga', '2020-06-09', 'Intake bersih dari lumpur dan pemanfaatan optimal', '2020-06-10', ''),
(38, 'Pengukuran debit MA. Cibulan sampai ke Cidahu', '2020-06-15', 'Terukurnya jumlah air yang di gunakan oleh cidahu', '2020-06-15', ''),
(39, 'Pengurasan tub setler dan bak pasir IPA Darma', '2020-06-16', 'Tub setler dan Bak pasir bekerja secara optimal', '2020-06-16', ''),
(40, 'Pemeriksaan kualitas air PAM Tirta Kamuning', '2020-06-25', 'Mengetahui kualitas air PAM', '2020-06-25', ''),
(41, 'Pendistribusian kaporit ke seluruh cabang unit dan pos', '2020-06-24', 'Kaporit terdistribusikan', '2020-06-24', ''),
(42, 'Pengukuran debit MA. Kopi bojong, Kopi Ciinjuk dan Batu nganjut', '2020-06-23', 'Mengetahui debit optimal', '2020-06-24', ''),
(43, 'Pengecekan madul genset IPA Surakatiga', '2020-06-27', 'Pemeliharaan genset ', '2020-06-27', ''),
(44, 'Pengecekan dan pemasangan pompa MA. Citamba', '2020-06-28', 'Pemasangan pompa baru', '2020-06-30', ''),
(45, 'Koordinasi dan pemantauan perencanaan pemasangan ponton barudi Darma', '2020-06-25', 'Lokasi tepat', '0000-00-00', ''),
(46, 'Koordinasi dengan pengurus Pamsimas palutungan dan mitra cai desa cisantana ', '2020-07-03', 'Suplesi air MA. Kopi ciinjuk', '2020-07-03', ''),
(47, 'Pengencangan sealing ponton', '2020-07-09', 'Agar tidak mudah terbawa angin dan posisi berubah', '2020-07-09', ''),
(48, 'Pengurasan torn bahan kimia IPA Darma', '2020-07-10', 'Pemaliharaan aset', '2020-07-10', ''),
(49, 'Opsih Darma Loka, Surakatiga dan BPT Kertawirama', '2020-07-10', 'Pemeliharaan aset', '0000-00-00', ''),
(50, 'Pemasangan jaring di MA. Cibulakan Linggarjati', '2020-07-23', 'Kegiatan pemeliharaan bront agat tidak adanya sampah yang masuk ke bront', '0000-00-00', ''),
(51, 'Pemeliharaan berupa opsih rutin di Darma loka, Cibulan, Surakatiga dan BPT Kertawirama', '2020-07-10', 'Terpeliharanya sarana prasarana pemanfaatan sumber air', '0000-00-00', ''),
(52, 'Koordinasi terkait pemeriksaan air di Labkesda', '2020-07-15', 'Penetapan jadwal pengambilan sampel air di pelanggan', '0000-00-00', ''),
(53, 'Pemasangan jaring di intake MA. Cibulakan dan BPT Kertawirama', '2020-07-23', 'Terpasangnya jaring agar sampah tidak masuk ke Reservoir', '0000-00-00', ''),
(54, 'Pembubuhan kaporit di IPA darma, surakatiga, cabang, unit dan pos', '2020-07-23', 'Kegiatan rutin peningkatan kualitas', '0000-00-00', ''),
(55, 'Pengukuran debit Darmaloka dan cibangir', '2020-07-23', 'Pengukuran debit optimal dari MA. Cibangir dan Darmaloka ', '0000-00-00', ''),
(56, 'Kunjungan lurah Winduhaji', '2020-07-28', 'Kunjungan ke IPA Surakatiga', '0000-00-00', ''),
(57, 'Kunjungan dari PJLHK Bogor ke PDAM terkait kegiatan pemanfaatan mata air di kawasan TN', '2020-07-08', 'Pendampingan kunjungan ke titik mata air', '2020-07-08', ''),
(58, 'Kunjungan ke MA. Cibulan', '2020-07-15', 'Pengendalian debit air musim kemarau', '0000-00-00', ''),
(59, 'Koordinasi terkait proyek strategis pembangunan waduk darma', '2020-07-10', 'Perencanaan pembangunan ponton', '0000-00-00', '');

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
(1, 'Lis Suparsih, S.Sos ', 'Samsudin', 'Wineke C.N.', '093.098', '093.103', '217.249');

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
  MODIFY `id_detail_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
