-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2024 pada 16.25
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_pegawai`
--

CREATE TABLE `db_pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `status` enum('Tetap','Honorer','','') NOT NULL,
  `foto_profil` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `db_pegawai`
--

INSERT INTO `db_pegawai` (`id`, `nama`, `email`, `no_hp`, `bidang`, `status`, `foto_profil`) VALUES
(1, 'Dewi Anjani ', 'dewianjani2493@gmail.com', '083852061105', 'Data Analyst', 'Tetap', 'uploads/gambar111.jpg'),
(2, 'Lim Dah Yun', 'limyunyun56@gmail.com', '087987654908', 'Product Manager', 'Tetap', 'uploads/gambar222.jpg'),
(3, 'Danu Andino', 'danudino@gmail.com', '082987456321', 'Data Engineer', 'Tetap', 'uploads/gambar555.jpg'),
(4, 'Dewi susilo', 'susilolo@gmail.com', '085987654213', 'Product Manager', 'Honorer', 'uploads/gambar333.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_pegawai`
--
ALTER TABLE `db_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `db_pegawai`
--
ALTER TABLE `db_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
