-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 13, 2018 at 11:14 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Nim` char(9) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Jurusan` varchar(100) NOT NULL,
  `Gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `Nama`, `Nim`, `Email`, `Jurusan`, `Gambar`) VALUES
(41, 'rini', '123455', 'bagas@gmail.com', 'akutansi', 'dina.jpeg'),
(45, 'dika', '1234', 'dika@gmail.com', 'mesin', 'dika.jpg'),
(93, 'fulan', '1234', 'fulan@gmail.com', 'mesin', '5b1f43b3804f5.jpeg'),
(94, 'dian', '12444', 'dian@gmail.com', 'ekonomi', '5b1f3a6385a44.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(9, 'dika', '$2y$10$1KqVw1MkU6/JWJ3Hh55IHeemIQJW7w091iSmqSb/DPK5Ct1n9mNQ6'),
(10, 'manager2', '$2y$10$YMDZSFdHD6a7Cs4oy7X0mesRUu4UkncuX2yIPq6BMyT8lug.kJJI6'),
(11, 'andi', '$2y$10$juNczwO80/ivpYVCK89JHe8mVwzOpDY6S9uyYrKOs/Q6NhjF8Wrui'),
(12, 'fajar', '$2y$10$3a/5o/7pB85cNUxDhPOi2eQNWxJ4GhoQMdqqQfj/8wLDuvXi6MeiK'),
(13, 'admin', '$2y$10$6B1EXT6nV2LpgHfOz3pTxu/ZKWNADz/FIcdcsNZ8osSHZxBTIcHWe'),
(14, 'adi', 'c46335eb267e2e1cde5b017acb4cd799'),
(15, 'admin2', '21232f297a57a5a743894a0e4a801fc3'),
(16, 'ad', 'as');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
