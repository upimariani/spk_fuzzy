-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Okt 2022 pada 07.16
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_fuzzy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `balita`
--

CREATE TABLE `balita` (
  `id_balita` int(11) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_balita` varchar(50) NOT NULL,
  `alamat_balita` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tgl_lahir` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `balita`
--

INSERT INTO `balita` (`id_balita`, `nik`, `nama_balita`, `alamat_balita`, `nama_ayah`, `nama_ibu`, `jenis_kelamin`, `tgl_lahir`) VALUES
(1, '3208106201180001  ', 'Aqila', 'Pamijahan', 'Dono', 'Wawat', 'P', '2018-01-22'),
(2, '3208100203180002', 'Hafidz', 'Pamijahan', 'Hendi', 'Sawiti', 'L', '2018-03-02'),
(3, '3208006308170005', 'Azka', 'Pamijahan', 'Ahdi', 'Wiwi Winarti', 'L', '2017-08-23'),
(4, '3208106308180002', 'Tasya Dini', 'Pamijahan', 'Saeful', 'Nani', 'P', '2018-08-23'),
(5, '3208106001211342', 'Dinda', 'Pamijahan', 'Sudirno', 'Lusi', 'P', '2021-01-20'),
(6, '3208103107218872', 'Rifki Safwan Azzami', 'Pamijahan', 'Rosidin', 'Marni', 'L', '2021-07-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lap_status_gizi`
--

CREATE TABLE `lap_status_gizi` (
  `id_lap` int(11) NOT NULL,
  `id_balita` int(11) NOT NULL,
  `tgl_periksa` varchar(15) NOT NULL,
  `umur` int(11) NOT NULL,
  `bb` int(11) NOT NULL,
  `tb` int(11) NOT NULL,
  `m1` varchar(10) NOT NULL,
  `m2` varchar(10) NOT NULL,
  `m3` varchar(10) NOT NULL,
  `a1` varchar(10) NOT NULL,
  `a2` varchar(10) NOT NULL,
  `a3` varchar(10) NOT NULL,
  `titik_pusat` varchar(10) NOT NULL,
  `status_gizi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lap_status_gizi`
--

INSERT INTO `lap_status_gizi` (`id_lap`, `id_balita`, `tgl_periksa`, `umur`, `bb`, `tb`, `m1`, `m2`, `m3`, `a1`, `a2`, `a3`, `titik_pusat`, `status_gizi`) VALUES
(1, 2, '2022-10-30', 41, 15, 95, '5304.5', '236.802', '-2661.12', '51.5', '1.38', '-15.12', '76', 'Gizi Lebih');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `alamat` varchar(125) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `no_hp`, `username`, `password`, `level_user`) VALUES
(1, 'Lina Aminati', 'Pamijahan', '0875698745633', 'ketuaposyandu', 'ketua', 2),
(2, 'Nung Hayati', 'Pamijahan', '085156727368', 'nungadmin', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `balita`
--
ALTER TABLE `balita`
  ADD PRIMARY KEY (`id_balita`);

--
-- Indeks untuk tabel `lap_status_gizi`
--
ALTER TABLE `lap_status_gizi`
  ADD PRIMARY KEY (`id_lap`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `balita`
--
ALTER TABLE `balita`
  MODIFY `id_balita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `lap_status_gizi`
--
ALTER TABLE `lap_status_gizi`
  MODIFY `id_lap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
