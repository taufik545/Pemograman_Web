-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 07.06
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
  `ID` int(11) NOT NULL,
  `NAMA` varchar(30) NOT NULL,
  `NRP` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `JURUSAN` varchar(100) NOT NULL,
  `GAMBAR` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`ID`, `NAMA`, `NRP`, `EMAIL`, `JURUSAN`, `GAMBAR`) VALUES
(1, 'Taufik hidayat ', '193040019', 'taufikhidayat@gmail.com', 'Teknik Informatika', 'taufik.jpg'),
(2, 'David dalil', '193040002', 'daviddalil@gmail.com', 'Teknik Informatika', 'david.jpg'),
(3, 'Yuni setiawati', '193040021', 'yunisetiawati@yahoo.com', 'Teknik Pangan', 'yuni.jpg'),
(4, 'Alwi ramadan', '193040029', 'alwiramadan@yahoo.com', 'Teknik Industri  ', 'alwi.jpg'),
(5, 'yusril ismail aji', '193040024', 'yusril23@mail.com', 'Mesin', 'yusril.jpg'),
(6, 'Hanif pulloh', '193040001', 'hanif282@mail.com', 'Teknik Industri', 'hanif.jpg'),
(7, 'Rizki ramdani', '193040016', 'rizki.@mail.unpas.ac.id', 'Teknik Pangan', 'rizki.jpg'),
(8, 'Fahri ariansyah', '193040010', 'fahri@mail.unpas.ac.id', 'Teknik Informatika', 'fahri.jpg'),
(9, 'Reza dwi ana', '193040005', 'rezadwiana@mail.unpas.ac.id', 'Teknik Industri', 'reza.jpg'),
(10, 'Muhamad Wildan', '193040009', 'nadliw123@yahoo.com', 'Teknik Informatika', 'wildan.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
