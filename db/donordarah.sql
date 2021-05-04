-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 08:19 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donordarah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` year(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin123', '2021-04-13 13:12:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pendonor`
--

CREATE TABLE `pendonor` (
  `nodaftar` int(100) NOT NULL,
  `noktpsim` varchar(30) NOT NULL,
  `nmlengkap` varchar(50) NOT NULL,
  `tgllahir` date NOT NULL,
  `usia` int(3) NOT NULL,
  `jk` char(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `notelp` int(15) NOT NULL,
  `dnrterakhir` date NOT NULL,
  `goldar` char(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendonor`
--

INSERT INTO `pendonor` (`nodaftar`, `noktpsim`, `nmlengkap`, `tgllahir`, `usia`, `jk`, `alamat`, `notelp`, `dnrterakhir`, `goldar`, `created_at`) VALUES
(1, '1234', 'Tegar H', '2021-04-01', 17, 'L', 'jalan jalan', 85775774, '2021-04-01', 'AB', '2021-03-19 03:04:40'),
(2, '726418', 'wawaa', '2000-12-01', 21, 'L', 'Jalan lai', 85715631, '2020-10-10', 'AB', '2021-03-19 03:04:40'),
(3, '2010901', 'Erlyn', '2021-01-05', 12, 'P', 'jalan ikan lele', 2147483647, '2021-04-11', 'A', '2021-03-19 03:04:40'),
(4, '345', 'jajang', '2000-10-08', 21, 'L', 'jalan ', 988361, '2021-04-15', 'AB', '2021-04-19 03:04:40'),
(5, '3284', 'mamad', '2000-01-01', 21, 'L', 'jalan kamboja', 988361, '2020-10-20', 'AB', '2021-04-19 03:04:40'),
(10, '98328', 'munir', '2000-01-01', 21, 'L', 'jalan mawar', 897253001, '2021-01-01', 'B', '2021-04-19 03:04:40'),
(11, '12111', 'lala', '2000-12-12', 20, 'P', 'jalan mawar', 872361, '2020-12-12', 'O', '2021-04-19 03:04:40'),
(12, '555', 'Garfiel', '2021-04-02', 18, 'L', 'jalan mawar', 12345679, '2021-04-23', 'A', '2021-04-19 03:04:40'),
(13, '666', 'Brenda', '2021-04-03', 20, 'L', 'jalan mawar', 12345679, '2021-04-16', 'AB', '2021-05-19 03:04:40'),
(14, '28376190', 'kinan', '1999-12-02', 21, 'P', 'jalan cempaka 90', 2147483647, '2020-12-25', 'B', '2021-05-19 03:04:40'),
(15, '3764819', 'melati', '1991-08-20', 30, 'P', 'jalan kamboja 98', 2147483647, '2020-12-12', 'O', '2021-05-19 03:04:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendonor`
--
ALTER TABLE `pendonor`
  ADD PRIMARY KEY (`nodaftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pendonor`
--
ALTER TABLE `pendonor`
  MODIFY `nodaftar` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
