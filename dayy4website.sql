-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 02:41 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dayy4website`
--

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `id` int(11) NOT NULL,
  `judulnavbar` varchar(255) NOT NULL,
  `ucapandihome` varchar(255) NOT NULL,
  `moreinfo` text NOT NULL,
  `about` text NOT NULL,
  `galleryjudul` varchar(255) NOT NULL,
  `tgl_isi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `cadangan1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `halaman`
--

INSERT INTO `halaman` (`id`, `judulnavbar`, `ucapandihome`, `moreinfo`, `about`, `galleryjudul`, `tgl_isi`, `cadangan1`) VALUES
(29, '<span>./Dayy</span>4gtw', 'Welcome Bro', '<p><b><span style=\"font-size: 18px; font-family: \" arial=\"\" black\";\"=\"\">﻿</span><span style=\"font-family: \" arial=\"\" black\";\"=\"\" comic=\"\" sans=\"\" ms\";=\"\" font-size:=\"\" 18px;\"=\"\">yo ndak mampu, aku gawe website </span><span style=\"font-family: \" arial=\"\" black\";\"=\"\" comic=\"\" sans=\"\" ms\";=\"\" font-size:=\"\" 18px;\"=\"\" ms\";\"=\"\">tanpo ajarane wong laen:v</span></b></p><hr><p><br><img src=\"../gambar/9b8619251a19057cff70779273e95aa6.jpg\" data-filename=\"9b8619251a19057cff70779273e95aa6.jpg\" style=\"width: 100%;\"></p>', '', '', '2022-11-04 13:01:59', ''),
(31, 'Gallery', ':v', '<p>gk tau<img src=\"../gambar/9b8619251a19057cff70779273e95aa6.jpg\" data-filename=\"9b8619251a19057cff70779273e95aa6.jpg\" style=\"width: 100%;\"></p>', '', '', '2022-11-04 12:40:29', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `halaman`
--
ALTER TABLE `halaman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `halaman`
--
ALTER TABLE `halaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
