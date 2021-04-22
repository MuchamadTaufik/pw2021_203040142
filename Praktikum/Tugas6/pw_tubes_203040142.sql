-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 02:25 AM
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
-- Database: `pw_tubes_203040142`
--

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Description` varchar(300) NOT NULL,
  `Size` varchar(20) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `Picture`, `Name`, `Description`, `Size`, `Price`, `Category`) VALUES
(1, '1.png', 'Kentzcore', 'Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch', 'Allsize', 'RP. 350.000', 'Hoddie'),
(2, '2.png', 'Fasthilic', 'Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch', 'Allsize', 'RP. 350.000', 'Hoddie'),
(3, '3.png', 'Conqueror', 'Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch', 'Allsize', 'RP. 350.000', 'Hoddie'),
(4, '4.png', 'WHO?', 'Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch', 'Allsize', 'RP. 350.000', 'Hoddie'),
(5, '5.png', 'Conqueror', 'Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch', 'Allsize', 'RP. 350.000', 'Hoddie'),
(6, '6.png', 'Conqueror', 'Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch', 'Allsize', 'RP. 350.000', 'Hoddie'),
(7, '7.png', 'White', 'Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch', 'Allsize', 'RP. 350.000', 'Hoddie'),
(8, '8.png', 'WHO?', 'Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch', 'Allsize', 'RP. 350.000', 'Hoddie'),
(9, '9.png', 'DXNR', 'Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch', 'Allsize', 'RP. 350.000', 'Hoddie'),
(10, '10.png', 'DXNR', 'Fleece material with Plastisol Screen printing, Elastic wrist rubber is not easy to stretch', 'Allsize', 'RP. 350.000', 'Hoddie');

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
(1, 'admin', 'admin'),
(0, 'taufik', '$2y$10$rAocw2n.FH4KioU2c83tj.CC7DDN9MvIIxXBFWODOTST.nRG3PgVi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
