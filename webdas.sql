-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2018 pada 10.27
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendataan`
--

CREATE TABLE `pendataan` (
  `nim` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jk` text NOT NULL,
  `prodi` text NOT NULL,
  `fakultas` text NOT NULL,
  `asal` text NOT NULL,
  `moto_hidup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendataan`
--

INSERT INTO `pendataan` (`nim`, `nama`, `jk`, `prodi`, `fakultas`, `asal`, `moto_hidup`) VALUES
(5, 'Lolaawqihuryekwuq', 'Perempuan', '> D3 Sistem Informasi', 'FEB', 'Jakarta', 'Berusaha tdk lola'),
(43, 'Siapa', 'Perempuan', '> D3 Sistem Informasi', 'FEB', 'London', 'kajahag'),
(235, 'Agaa', 'Laki-laki', '> D3 Sistem Informasi', 'FEB', 'Jakarta', 'Gkgk'),
(543, 'huhuhu', 'perempuan', 'D3 Sistem Informasi', 'FEB', 'Tasikmalaya', 'ahahah'),
(654, 'intan', 'perempuan', 'D3 Manajemen Pemasaran', 'FEB', 'Jakarta', 'Bahagia always'),
(1765, 'Roro', 'perempuan', 'D3 Sistem Informasi', 'FIT', 'Bandung', 'Lalal'),
(6354, 'wanda afifah', 'perempuan', 'D3 Sistem Informasi', 'FEB', 'Jakarta', 'Ceria'),
(6548, 'Amissu', 'perempuan', 'D3 Sistem Informasi', 'FEB', 'Jakarta', 'Heheh'),
(7650, 'Budi', 'perempuan', 'D3 Sistem Informasi', 'FIT', 'Batam', 'Sukses'),
(65431, 'Gilang', 'laki-laki', 'D3 Sistem Informasi', 'FEB', 'Bandung', 'Okeee'),
(1234445, 'rahmi', 'perempuan', 'D3 Sistem Informasi', 'FIT', 'Tsm', 'aaa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendataan`
--
ALTER TABLE `pendataan`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
