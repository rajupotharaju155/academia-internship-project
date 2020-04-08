-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Apr 06, 2020 at 10:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academia`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`id`, `username`, `email`, `password`, `cpassword`) VALUES
(2, 'abc', 'abc@gmail.com', '$2y$10$nXhAc7zMW9Pbigq6WhLSAOxpqbxlHmonV5w4i9ClLaA4oXthT8Zxy', '$2y$10$nXhAc7zMW9Pbigq6WhLSAOxpqbxlHmonV5w4i9ClLaA4oXthT8Zxy'),
(3, 'shrusti', 'shrustisavant20@gmail.com', '$2y$10$feWBsUQc44yK4tFNKM.nReOYUeUeHDtwh7Poq3V.gtTL8gP.FD7z6', '$2y$10$PI7gyItAPqrqPMht6PP.QeKaHfSVobSPg8L5pnqpR9vI1IS8jEM56'),
(7, 'cami', 'cami@gmail.com', '$2y$10$EXaXBISgRI6i5CS6IHu9sO/mvja8ghYQJOxOGkECgfIRL/QQ/aje.', '$2y$10$HClBhpg9HIdpqwsKFpDmwOsywDjE8yLXXHX0/vbtrk4j5ZeBH8/na');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
