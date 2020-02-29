-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 01, 2020 at 02:38 AM
-- Server version: 10.3.22-MariaDB-1
-- PHP Version: 7.3.14-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vdrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `aid` int(11) NOT NULL,
  `area` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `capacity` varchar(50) NOT NULL,
  `auto` varchar(10) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`aid`, `area`, `type`, `capacity`, `auto`) VALUES
(1, 'area1', 'Mudy', '25 cents', 'yes'),
(2, 'Area2', 'Clay', '25cent', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `valve`
--

CREATE TABLE `valve` (
  `vid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `t` varchar(5) NOT NULL,
  `ct` varchar(5) NOT NULL DEFAULT '0',
  `h` varchar(5) NOT NULL,
  `ch` varchar(5) NOT NULL DEFAULT '0',
  `m` varchar(5) NOT NULL,
  `cm` varchar(5) NOT NULL DEFAULT '0',
  `status` varchar(10) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `valve`
--

INSERT INTO `valve` (`vid`, `aid`, `name`, `t`, `ct`, `h`, `ch`, `m`, `cm`, `status`) VALUES
(1, 1, 'coconut', '35', '0', '50', '0', '55', '0', 'on'),
(2, 1, 'Banana', '30', '0', '50', '0', '60', '0', 'no'),
(3, 1, 'PineApple', '40', '0', '60', '0', '65', '0', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `valve`
--
ALTER TABLE `valve`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `valve`
--
ALTER TABLE `valve`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
