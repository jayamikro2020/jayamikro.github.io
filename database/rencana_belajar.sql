-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2020 pada 17.19
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rencana_belajar`
--

CREATE TABLE `rencana_belajar` (
  `id_rencana` int(50) NOT NULL,
  `nama_rencana` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `rincian_rencana` text COLLATE latin1_general_ci NOT NULL,
  `durasi` text COLLATE latin1_general_ci NOT NULL,
  `tgl_rencana` date NOT NULL,
  `tgl_realisasi` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `rencana_belajar`
--

INSERT INTO `rencana_belajar` (`id_rencana`, `nama_rencana`, `rincian_rencana`, `durasi`, `tgl_rencana`, `tgl_realisasi`) VALUES
(100004, 'Learning PHP', '', '', '2020-07-04', '0000-00-00 00:00:00'),
(100005, 'Learning PHP', '', '', '2020-07-04', '0000-00-00 00:00:00'),
(100003, 'Learning PHP', '', '', '2020-07-04', '0000-00-00 00:00:00'),
(100006, 'Learning PHP', '', '', '2020-07-04', '0000-00-00 00:00:00'),
(100007, 'Learning PHP', '', '', '2020-07-04', '0000-00-00 00:00:00'),
(100008, 'Learning Psikotes', '', '', '2020-07-04', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rencana_belajar`
--
ALTER TABLE `rencana_belajar`
  ADD PRIMARY KEY (`id_rencana`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `rencana_belajar`
--
ALTER TABLE `rencana_belajar`
  MODIFY `id_rencana` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100009;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
