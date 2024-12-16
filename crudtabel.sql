-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2024 at 10:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudtabel`
--

-- --------------------------------------------------------

--
-- Table structure for table `datanegara`
--

CREATE TABLE `datanegara` (
  `id` int(11) NOT NULL,
  `buku` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `datanegara`
--

INSERT INTO `datanegara` (`id`, `buku`, `nama`, `email`, `alamat`, `telepon`, `status`) VALUES
(35, 'tes', 'tes', 'tes@tes', 'tes', '00012323fds', 'Di pinjam'),
(36, 'tes', 'tes', 'tes@fs', 'tes', 'tes', 'Di balikan'),
(39, 'Apa Itu Sejarah', 'orang', 'orang@gmail.com', 'jalan jalan ke bali', '0123456789', 'Di pinjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datanegara`
--
ALTER TABLE `datanegara`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datanegara`
--
ALTER TABLE `datanegara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
