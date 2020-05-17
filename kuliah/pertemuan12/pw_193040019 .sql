-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Bulan Mei 2020 pada 11.20
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
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Alwi ramadhan', '193040029', 'alwi03@mail.com', 'Teknik Informatika', 'alwi.jpg'),
(2, 'David dalil', '193040002', 'daviddalil@mail.com', 'Teknik informatika', 'david.jpg'),
(3, 'yusril ismail aji', '193040025', 'yusril@mail.com', 'Teknik informatika', 'yusril.jpg'),
(4, 'hanif hadad', '193040001', 'hanif@mail.com', 'Teknik informatika', 'hanif.jpg'),
(5, 'fahri ariansyah', '193040011', 'fahri@mail.com', 'Teknik informatika', 'fahri.jpg'),
(6, 'reza dwi ana', '193040005', 'reza@mail.com', 'Teknik informatika', 'reza.jpg'),
(7, 'yuni stiawati', '193040034', 'yuni@mail.com', 'Teknik informatika', 'yuni.jpg'),
(8, 'wildan ', '19304009', 'wildan@mail.com', 'Teknik informatika', 'wildan.jpg'),
(9, 'rizki ramdani', '193040016', 'rizki2mail.com', 'Teknik informatika', 'rizki.jpg'),
(10, 'Taufik hidayat', '193040019', 'taufik@mail.com', 'Teknik informatika', 'taufik.jpg');

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
(3, 'admin', 'admin'),
(5, 'taufik', '$2y$10$dx8w./rZcrWvLTnYmB2bMejhkfx83Vu/RDTaoZmcAVWspgwDQmpYm');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tubes_193040019`
--
ALTER TABLE `tubes_193040019`
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
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tubes_193040019`
--
ALTER TABLE `tubes_193040019`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
