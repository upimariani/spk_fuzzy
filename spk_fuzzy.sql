-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2022 at 02:17 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `balita`
--

CREATE TABLE `balita` (
  `id_balita` int(11) NOT NULL,
  `nama_balita` varchar(50) NOT NULL,
  `alamat_balita` varchar(50) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tgl_lahir` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balita`
--

INSERT INTO `balita` (`id_balita`, `nama_balita`, `alamat_balita`, `nama_ayah`, `nama_ibu`, `jenis_kelamin`, `tgl_lahir`) VALUES
(3, 'Nazla', 'asasa', 'sd', 'Mamah', 'P', '04/30/2022');

-- --------------------------------------------------------

--
-- Table structure for table `index`
--

CREATE TABLE `index` (
  `id_index` int(11) NOT NULL,
  `nama_index` varchar(50) NOT NULL,
  `range_awal` varchar(50) NOT NULL,
  `range_tengah` varchar(50) NOT NULL,
  `range_akhir` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `index`
--

INSERT INTO `index` (`id_index`, `nama_index`, `range_awal`, `range_tengah`, `range_akhir`, `keterangan`) VALUES
(1, 'Umur', '0', '6', '12', 'fase 1'),
(2, 'Umur', '6', '12', '24', 'fase 2'),
(3, 'Umur', '12', '24', '36', 'fase 3'),
(4, 'Umur', '24', '36', '48', 'fase 4'),
(5, 'Umur', '36', '48', '60', 'fase 5'),
(6, 'Berat Badan Laki-Laki', '0', '7', '13', 'ringan'),
(7, 'Berat Badan Laki-Laki', '7', '13', '19', 'sedang'),
(8, 'Berat Badan Laki-Laki', '13', '19', '19', 'berat'),
(9, 'Berat Badan Perempuan', '0', '7', '12', 'ringan'),
(10, 'Berat Badan Perempuan', '7', '12', '18', 'sedang'),
(11, 'Berat Badan Perempuan', '12', '18', '18', 'berat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `alamat` varchar(125) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat`, `no_hp`, `username`, `password`) VALUES
(1, 'Nita', 'Ciawigebang, Kuningan', '0875698745633', 'admin', 'admin'),
(4, 'Upi', 'Cigugur, Kuningan', '085156727368', 'upiadmin', 'upiadmin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balita`
--
ALTER TABLE `balita`
  ADD PRIMARY KEY (`id_balita`);

--
-- Indexes for table `index`
--
ALTER TABLE `index`
  ADD PRIMARY KEY (`id_index`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balita`
--
ALTER TABLE `balita`
  MODIFY `id_balita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `index`
--
ALTER TABLE `index`
  MODIFY `id_index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
