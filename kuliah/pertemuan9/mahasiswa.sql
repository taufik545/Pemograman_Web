-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Bulan Mei 2020 pada 10.32
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
(9, 'rizki ramdani', '193040016', 'rizki2mail.com', 'Teknik informatika', 'rizki.com'),
(10, 'Taufik hidayat', '193040019', 'taufik@mail.com', 'Teknik informatika', 'taufik.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
