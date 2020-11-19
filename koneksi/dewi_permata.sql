-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 06:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dewi_permata`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` varchar(13) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `passwords` varchar(100) NOT NULL,
  `level` int(1) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `nama_lengkap`, `email`, `alamat`, `no_telepon`, `jenis_kelamin`, `passwords`, `level`, `is_active`) VALUES
(1, 'Ahmad Junaidi', 'ahmadjunaidi@gmail.com', 'JL.kertajaya no 2 barat daya', '081927162718', 'L', '962762aa8e6f3e7a817e7fbb621c0d51', 0, 1),
(2, 'Rangga Pratama', 'ranggapratama@gmail.com', 'Jl.Pasar Muda Raya 2', '083182718281', 'L', '0353b17b03bfd15add51314c3da9353e', 0, 1),
(4, 'admin', 'admindewipermata@gmail.com', 'Kp.Putat rt03 rw02 Sindang Sari Kec.Pasar Kemis', '+62 888 9306 ', 'L', 'a59985c0c25f9f100a945d4f6fcb0942', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
