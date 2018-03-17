-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 17 Mar 2018 pada 08.16
-- Versi Server: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_asisten`
--

CREATE TABLE `daftar_asisten` (
  `id_asisten` int(10) UNSIGNED NOT NULL,
  `nama_asisten` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `tanggal_dibuat` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_asisten`
--

INSERT INTO `daftar_asisten` (`id_asisten`, `nama_asisten`, `status`, `tanggal_dibuat`) VALUES
(1, 'Farih ssss', 1, '2018-03-17 03:50:11'),
(2, 'Oxi', 1, '2018-03-17 04:30:42'),
(8, 'asfasfd', 1, '2018-03-17 07:07:12'),
(9, 'sadfasdfasf', 1, '2018-03-17 07:07:14'),
(10, 'asfdasdfsda', 1, '2018-03-17 07:07:17'),
(11, 'sadfaa', 1, '2018-03-17 07:07:21'),
(12, 'ss', 1, '2018-03-17 07:07:24'),
(13, 'afsdsaf', 1, '2018-03-17 07:07:27'),
(14, 'asfsadfs', 1, '2018-03-17 07:07:30'),
(15, 'asfdasfd', 1, '2018-03-17 07:07:33'),
(16, 'afsdasfsafd', 1, '2018-03-17 07:07:39'),
(17, 'asdfsadfsad', 1, '2018-03-17 07:07:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_asisten`
--
ALTER TABLE `daftar_asisten`
  ADD PRIMARY KEY (`id_asisten`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_asisten`
--
ALTER TABLE `daftar_asisten`
  MODIFY `id_asisten` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
