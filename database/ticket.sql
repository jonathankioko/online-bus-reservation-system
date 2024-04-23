-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 09:08 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `contact`, `email`, `password`, `date`) VALUES
(1, 'amos kiok2o', '222225', 'amos@gmail.com', '22', '2024-04-01 14:27:58'),
(2, 'connor bradley', '070707', 'bradley@gmail.com', '77', '2024-04-02 03:57:01'),
(3, '', '55555', 'trent@gmail.com', '55', '2024-04-02 04:09:40'),
(4, '', '1234567', 'jones@gmail.com', '11', '2024-04-02 04:16:53'),
(5, '', '88888', 'tag@gmail.com', '88', '2024-04-02 04:22:47'),
(6, '', '888888', 'mutuku@gmail.com', '88', '2024-04-03 09:53:08'),
(7, 'virgil van djik', '444444', 'virgil@gmail.com', '44', '2024-04-03 09:59:08'),
(8, 'df', '12345677', '6@gmail.com', '34', '2024-04-19 11:58:29'),
(9, 'kioko jonathan', '0728202050', 'kiokomwathe@gmail.co', '444', '2024-04-22 08:52:17');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `id` int(11) NOT NULL,
  `date` varchar(11) NOT NULL,
  `bus` varchar(11) NOT NULL,
  `seat_reserve` varchar(11) NOT NULL,
  `transactionnum` varchar(10) NOT NULL,
  `seat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservedetails`
--

CREATE TABLE `reservedetails` (
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `contact` varchar(255) NOT NULL,
  `bus` varchar(6) NOT NULL,
  `transactionnum` varchar(13) NOT NULL,
  `payable` varchar(6) NOT NULL,
  `setnumber` text NOT NULL,
  `address` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `id` int(11) NOT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservedetails`
--

INSERT INTO `reservedetails` (`fname`, `lname`, `contact`, `bus`, `transactionnum`, `payable`, `setnumber`, `address`, `date`, `id`, `status`) VALUES
('ee', 'kyalo', '0113755285', '3', '36sbe3', '4000', '2 7', '4455', '2024-04-27', 14, 'Not Void'),
('KIOKO', 'MWATHE', '0113755285', '4', 'bj32nq', '1200', '1 ', 'NAIROBI-MOMBASA', '2024-04-05', 15, 'Not Void'),
('y', 'y', '12345678', '1', '4s05qo', '2000', '1 ', 'y-y', '2024-04-04', 16, NULL),
('amos', 'MWATHE', '0113755285', '1', '5iqfon', '2000', '1 ', 'NAIROBI-MOMBASA', '2024-04-03', 17, NULL),
('amos', 'MWATHE', '0113755285', '1', 'qxje80', '2000', '2 ', 'NAIROBI-MOMBASA', '2024-04-04', 18, NULL),
('amos', 'MWATHE', '0113755285', '1', '365884', '2000', '1 ', 'NAIROBI-MOMBASA', '2024-04-19', 19, NULL),
('i', 'i', '0113755285', '1', '2urnyv', '2000', '1 ', 'o', '0000-00-00', 20, NULL),
('u', 'u', 'u', '1', 'axcdec', '2000', '2 ', 'u', '2024-04-05', 21, NULL),
('amos', 'MWATHE', '0113755285', '6', 'w08vtt', '2000', '3 ', 'NAIROBI-MOMBASA', '2024-04-04', 22, NULL),
('amos', 'MWATHE', '0113755285', '4', 'v7b0hh', '1200', '1 ', 'NAIROBI-MOMBASA', '0000-00-00', 23, NULL),
('amos', 'MWATHE', '0113755285', '1', 'pdbjc6', '2000', '3 ', 'NAIROBI-MOMBASA', '2024-04-04', 24, NULL),
('amos', 'MWATHE', '0113755285', '1', '150', '2000', '1 ', 'NAIROBI-MOMBASA', '2024-03-31', 25, NULL),
('amos', 'MWATHE', '0113755285', '7', 'owwrj4', '2000', '1 ', 'NAIROBI-MOMBASA', '0000-00-00', 26, NULL),
('ghj', 'rty', '0113755285', '1', 'bzno6s', '4000', '70,71', 'NAIROBI-MOMBASA', '2024-04-18', 28, NULL),
('hg', 'fh', '0724567890', '1', 'srs8gr', '2000', '1 ', 'f-j', '2024-04-19', 29, NULL),
('ABuu', 'Kibet', '07285448760', '3', 'ugut6y', '2000', '1 ', 'NAIROBI-MOMBASA', '2024-04-19', 30, NULL),
('KIOKO', 'MWATHE', '0113755285', '3', 'fctv5n', '2000', '1 ', 'NAIROBI-MOMBASA', '2024-04-10', 31, NULL),
('KIOKO', 'MWATHE', '0113755285', '3', '4hkt5f', '2000', '1 ', 'NAIROBI-MOMBASA', '2024-04-17', 32, NULL),
('amos', 'MWATHE', '0113755285', '3', 'frcqpw', '2000', '1 ', 'NAIROBI-MOMBASA', '2024-04-18', 33, NULL),
('amos', 'kyalo', '0113755285', '3', 'sj0dnt', '2000', '1 ', '4455', '2024-04-17', 34, NULL),
('KIOKO', 'MWATHE', '0113755285', '3', 'c45bsizx', '2000', '1 ', 'NAIROBI-MOMBASA', '2024-04-24', 35, NULL),
('amos', 'jk', '0724567890', '1', '0rcmbone', '2000', '1 ', 'mombasa-nairobi', '2024-04-20', 36, NULL),
('amos', 'MWATHE', '0113755285', '1', 't8qwkkaz', '2000', '1 ', 'NAIROBI-MOMBASA', '2024-04-17', 37, NULL),
('KIOKO', 'MWATHE', '0113755285', '1', 'eydyd76i', '2000', '1 ', 'NAIROBI-MOMBASA', '2024-04-02', 38, NULL),
('amos', 'MWATHE', '0113755285', '1', 'im283y3c', '4000', '1 2 ', 'NAIROBI-MOMBASA', '2024-04-05', 39, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `route` varchar(300) NOT NULL,
  `price` varchar(30) NOT NULL,
  `numseats` int(30) NOT NULL,
  `type` varchar(300) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `route`, `price`, `numseats`, `type`, `time`) VALUES
(1, 'nairobi-mombasa', '2000', 30, 'infinity KDP 740N', '22:30:00'),
(3, 'Mombasa-Nairobi', '2000', 72, 'Omega KDN 543W', '22:30:00'),
(4, 'Nairobi-Meru', '1200', 72, 'Liverpool KDM 980V', '01:00:00'),
(5, 'Meru-Nairobi', '1200', 72, 'Anfield KDK 231F', '01:00:00'),
(6, 'Nairobi-mombasa', '2000', 43, 'Jurgen KCW 478 P', '09:30:00'),
(7, 'Mombasa-Nairobi', '2000', 72, 'Klopp KCF 640T', '09:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservedetails`
--
ALTER TABLE `reservedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reservedetails`
--
ALTER TABLE `reservedetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
