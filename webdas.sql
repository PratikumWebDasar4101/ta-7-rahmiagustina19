-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Okt 2018 pada 05.52
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
