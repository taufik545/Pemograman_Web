-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Bulan Mei 2020 pada 10.53
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040019`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tubes_193040019`
--

CREATE TABLE `tubes_193040019` (
  `id` int(100) NOT NULL,
  `nama_alat` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `cara_permainan` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tubes_193040019`
--

INSERT INTO `tubes_193040019` (`id`, `nama_alat`, `merk`, `cara_permainan`, `harga`, `gambar`) VALUES
(1, 'bass', 'yamaha', 'dipetik', 2500000, 'bass.jpg'),
(2, 'gitar', 'yamaha', 'dipetik', 2000000, 'gitar.jpg'),
(3, 'pianika', 'yamaha', 'ditiup & ditekan', 700000, 'pianika.jpg'),
(4, 'drum', 'yamaha', 'dipukul', 15000000, 'drum.jpg'),
(5, 'piano', 'yamaha', 'ditekan', 3000000, 'piano.jpg'),
(6, 'suling', 'lokal', 'ditiup', 500000, 'suling.jpg'),
(7, 'ukulele', 'yamaha', 'dipetik', 3000000, 'ukulele.jpg'),
(8, 'angklung', 'lokal', 'di goyangkan', 4000000, 'angklung.jpg'),
(9, 'harmonika', 'sony', 'ditiup', 700000, 'harmonika.jpg'),
(10, 'klarinet', 'yamaha', 'ditiup', 500000, 'klarinet.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tubes_193040019`
--
ALTER TABLE `tubes_193040019`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tubes_193040019`
--
ALTER TABLE `tubes_193040019`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
