-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 05:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` bigint(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `no_hp`, `password`) VALUES
(1, '212121', '0', 0, '0'),
(2, '12333', '0', 0, '0'),
(3, '11111111', '0', 0, '0'),
(4, '12333', '0', 0, '0'),
(5, '11111111', 'adit', 0, 'shidratulkhadri@gmail.com'),
(6, '081234567', 'dimas', 0, 'shidratulk@yahoo.com'),
(7, '333333', 'adit', 0, 'shidratulkhadri@gmail.com'),
(8, '4444', 'adit', 0, 'shidratulkhadri@gmail.com'),
(9, 'shidratulkhadri@gmail.com', 'yuyu', 0, '2222'),
(10, 'Shidratul Khodri', 'shidratulkhadri@gmail.com', 45678, '$2y$10$1DtrHxeUTUvG/VTak6fKlONkG1QqqJ0FAjfVVipEdsNnkRGWjxnmO'),
(11, 'adit', 'shidratulkhadri@gmail.com', 321312, '$2y$10$DruM5tTaHuTX/xVMwNU3X.CKkzerdRbB11tmBPccBgffun4hvMGde');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
