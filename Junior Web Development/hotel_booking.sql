-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 01 Des 2024 pada 09.08
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
-- Database: `hotel_booking`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `jenis_kelamin` enum('laki','perempuan') NOT NULL,
  `nomor_identitas` char(16) NOT NULL,
  `tipe_kamar` enum('standar','deluxe','family') NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `durasi_menginap` int(11) NOT NULL,
  `termasuk_breakfast` tinyint(1) NOT NULL,
  `diskon` decimal(10,2) NOT NULL,
  `total_bayar` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bookings`
--

INSERT INTO `bookings` (`id`, `nama_pemesan`, `jenis_kelamin`, `nomor_identitas`, `tipe_kamar`, `tanggal_pesan`, `durasi_menginap`, `termasuk_breakfast`, `diskon`, `total_bayar`) VALUES
(15, 'mila', 'perempuan', '5678654323456789', 'family', '2024-12-01', 4, 1, 10.00, 4560000.00),
(21, 'jeriko', 'laki', '5678654323456789', 'family', '2024-12-01', 4, 1, 10.00, 4400000.00),
(24, 'rahman', 'laki', '6289736487898204', 'deluxe', '2024-12-12', 2, 1, 0.00, 1680000.00),
(26, 'tegr', 'laki', '6777666666666666', 'standar', '2024-01-12', 3, 0, 0.00, 1500000.00),
(27, 'tegr', 'laki', '6777666666666666', 'standar', '2024-01-12', 3, 0, 0.00, 1500000.00),
(28, 'nando', 'laki', '1234567890345666', 'standar', '2023-12-13', 2, 0, 0.00, 1000000.00),
(29, 'tegr', 'laki', '6777666666666666', 'standar', '2024-12-18', 4, 1, 10.00, 2040000.00),
(30, 'Burhan', 'laki', '8888898989898989', 'family', '2024-12-03', 8, 1, 10.00, 8720000.00),
(31, 'Burhan', 'laki', '8888898989898989', 'standar', '2024-12-18', 8, 1, 10.00, 3680000.00);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
