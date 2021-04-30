-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 05:47 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

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
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `Picture`, `Name`, `Description`, `Price`) VALUES
(1, '1.png', 'Bershka', 'Combad 30s', 'Rp. 270.000'),
(2, '2.png', 'A COLD WALL', 'Combad 30s', 'Rp. 275.000'),
(3, '3.png', 'Rannka', 'Soft textured black vegan leather Jacket', 'Rp. 780.000'),
(4, '4.png', 'Carhartt WIP Phoenix', 'HUF Shirt and Patagonia T-Shirt combination', 'RP. 990.000'),
(5, '5.png', 'Slip Vans', 'All Size', 'Rp. 450.000');

-- --------------------------------------------------------

--
-- Table structure for table `store2`
--

CREATE TABLE `store2` (
  `id` int(11) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store2`
--

INSERT INTO `store2` (`id`, `Picture`, `Name`, `Description`, `Price`) VALUES
(1, '9.png', 'Nina García', 'Marie Claire USA', 'Rp. 780.000'),
(2, '10.png', 'Bee Kind', 'Kindness-themed vintage graphic t-shirt', 'Rp. 300.000'),
(3, '11.png', 'EW!', 'unisex shirt sizes OR ladies\' shirt sizes', 'Rp. 300.000'),
(4, '12.png', 'Corduroy Patchwork Vintage', 'Low Price & High Quality', 'Rp. 430.000'),
(5, '13.png', 'The Diana Bag', 'the Diana is crafted from smooth', 'Rp. 1.280.000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'taufik', '$2y$10$9.uSrEOne2x5d2zD/PUnLuV5Aw6bSDI2rlZUf76l77FwkR1ldjJr6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store2`
--
ALTER TABLE `store2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `store2`
--
ALTER TABLE `store2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
