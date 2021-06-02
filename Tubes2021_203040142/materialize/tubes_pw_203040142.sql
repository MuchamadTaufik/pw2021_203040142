-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2021 pada 04.07
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_pw_203040142`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `store`
--

INSERT INTO `store` (`id`, `Picture`, `Name`, `Description`, `Price`) VALUES
(1, '1.png', 'Bershka', 'Combad 30s', 'Rp. 275.000'),
(2, '2.png', 'A COLD WALL', 'Combad 30s', 'Rp. 275.000'),
(3, '3.png', 'Rannka', 'Soft textured black vegan leather Jacket', 'Rp. 780.000'),
(4, '4.png', 'Carhartt WIP Phoenix', 'HUF Shirt and Patagonia T-Shirt combination', 'RP. 990.000'),
(5, '5.png', 'Slip Vans', 'All Size', 'Rp. 450.000'),
(8, '6.png', 'Converse Chuck All Star', 'All Size', 'Rp. 580.000'),
(9, '7.png', 'JhonVarvatos', 'Fulton Triple Pocket Backpack', 'Rp. 450.000'),
(10, '8.png', 'KnomoBags', 'practical bag', 'Rp. 440.000'),
(11, '9.png', 'Nina García', 'Marie Claire USA', 'Rp. 780.000'),
(12, '10.png', 'Bee Kind', 'Kindness-themed vintage graphic t-shirt', 'Rp. 300.000'),
(13, '12.png', 'Corduroy Patchwork Vintage', 'Low Price &amp; High Quality', 'Rp. 430.000'),
(14, '13.png', 'The Diana Bag', 'the Diana is crafted from smooth', 'Rp. 1.280.000'),
(15, '14.png', 'Heels', 'Heels have a back zipper, an ankle strap', 'Rp. 999.000'),
(16, '15.png', 'Faux Leather', 'small shoulder bag and big shoulder bag', 'Rp. 1.180.000'),
(17, '16.png', 'Heels', 'Heels have a back zipper, an ankle strap', 'Rp. 980.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(6, 'mhmdtaufikm', '$2y$10$3qdElOxMOYtx9YyGWo6CtOCwPWWnIeRmA/UleLMXuGhoCLQ6ywyNa'),
(7, 'novyaryn', '$2y$10$5J3CnHuJmlb4DWBXjDVL7uQSN1YFz192RTKnXuMk11XWbIiAZo1lS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `store`
--
ALTER TABLE `store`
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
-- AUTO_INCREMENT untuk tabel `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
