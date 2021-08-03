-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 03:58 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `loglog`
--

CREATE TABLE `loglog` (
  `id` int(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `p_pic` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loglog`
--

INSERT INTO `loglog` (`id`, `username`, `password`, `email`, `phone`, `p_pic`) VALUES
(15, 'pawachai', '1234', 'pawachai@pawachai', '0931240524', 'IMG-61063687676389.png'),
(16, 'jirateep', '1234', 'jirateep@jirateep', '0968907254', 'IMG-61063cc72b52f9.69880625.png'),
(17, 'pawachaipawachai', '1234', 'pawachaii@pawachaii', '0931240524', 'IMG-61063d050bc124.62685459.png'),
(18, 'jirateepjirateep', '1234', 'jirateepjirateep@jirateepjirateep', '0968907254', 'IMG-61063ea245fe14.66836814.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loglog`
--
ALTER TABLE `loglog`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loglog`
--
ALTER TABLE `loglog`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
