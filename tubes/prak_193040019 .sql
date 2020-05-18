-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2020 pada 02.05
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
-- Database: `prak_193040019`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alatmusik`
--

CREATE TABLE `alatmusik` (
  `id` int(11) NOT NULL,
  `nama_alat` varchar(30) NOT NULL,
  `merek` varchar(30) NOT NULL,
  `cara_memainkan` varchar(30) NOT NULL,
  `harga` int(100) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `alatmusik`
--

INSERT INTO `alatmusik` (`id`, `nama_alat`, `merek`, `cara_memainkan`, `harga`, `gambar`) VALUES
(1, 'bass', 'yamaha', 'dipetik', 3000000, 'bass.jpg'),
(2, 'gitar', 'yamaha', 'dipetik', 4500000, 'gitar.jpg'),
(3, 'pianika', 'ostrava', 'ditiup-ditekan', 500000, 'pianika.jpg'),
(4, 'drum', 'yamaha', 'dipukul', 15000000, 'drum.jpg'),
(5, 'piano', 'sonny', 'ditekan', 5000000, 'piano.jpg'),
(6, 'suling', 'lokal', 'ditiup', 400000, 'suling.jpg'),
(7, 'ukulele', 'yamaha', 'dipetik', 1400000, 'ukulele.jpg'),
(8, 'angklung', 'lokal', 'di goyangkan', 6000000, 'angklung.jpg'),
(9, 'harmonika', 'sonny', 'disedot', 2000000, 'harmonika.jpg'),
(10, 'klarinet', 'choho', 'ditiup', 2500000, 'klarinet.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(10, 'taufik', '$2y$10$KGEklnQERPwMuliIpTqKvOtdleeV2zO8mqbSbUUO1MjypfFo1R4CC');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alatmusik`
--
ALTER TABLE `alatmusik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alatmusik`
--
ALTER TABLE `alatmusik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
