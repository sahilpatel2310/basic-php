-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2025 at 07:57 AM
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
-- Database: `interview1`
--

-- --------------------------------------------------------

--
-- Table structure for table `try1`
--

CREATE TABLE `try1` (
  `id` int(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(240) NOT NULL,
  `img` varchar(250) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `country` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `try1`
--

INSERT INTO `try1` (`id`, `email`, `password`, `img`, `gender`, `country`) VALUES
(56, 'Sahilpatel8666@gmail.com', '123456', '', 'Male', ''),
(57, 'mmet@gmail.com', '123', 'hack.jpg', 'Male', 'india'),
(65, 'Sahilpatel8666@gmail.com', '11111', '', 'Male', ''),
(74, '', '', '', 'Female', ''),
(75, '', '', '', 'Female', ''),
(76, '', '', '', 'Male', 'usa'),
(77, 'sp@gmail.com', '786', 'buggati.jpeg', 'Male', 'india'),
(78, '', '', '', '', ''),
(79, '', '', '', '', ''),
(80, '', '', '', '', ''),
(81, '', '', '', 'Female', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `try1`
--
ALTER TABLE `try1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `try1`
--
ALTER TABLE `try1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
