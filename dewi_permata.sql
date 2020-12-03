-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2020 pada 11.10
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_user` int(11) NOT NULL,
  `nama_pemesan` varchar(30) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `berangkat` varchar(100) NOT NULL,
  `almt_berangkat` varchar(200) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `almt_tujuan` varchar(200) NOT NULL,
  `tipe_bus` varchar(150) NOT NULL,
  `tgl_mulai` datetime NOT NULL,
  `jam_mulai` time NOT NULL,
  `tgl_selesai` datetime NOT NULL,
  `jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='biaya';

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_user`, `nama_pemesan`, `telp`, `berangkat`, `almt_berangkat`, `tujuan`, `almt_tujuan`, `tipe_bus`, `tgl_mulai`, `jam_mulai`, `tgl_selesai`, `jam_selesai`) VALUES
(2, 'azis muhaimin', '089764763678', 'Depok', 'jl.parman jaya', 'gathering', 'jl.walihgghh', 'executive', '2020-12-02 00:00:00', '16:49:00', '2020-12-03 00:00:00', '19:49:00'),
(3, 'azis muhaimin', '081287930880', 'Jakarta', 'jkt', 'ziarah_walisongo', 'jkt barat', 'vip', '2020-12-15 00:00:00', '16:53:00', '2020-12-17 00:00:00', '16:53:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `nama_lengkap`, `email`, `alamat`, `no_telepon`, `jenis_kelamin`, `passwords`, `level`, `is_active`) VALUES
(6, 'Azis Muhaimin', 'azismuhaimin001@gmail.com', 'Rajeg Kab.Tangerang Banten', '081287930880', 'L', '84bd9834eac807529377a3b24410e9cb', 0, 1),
(7, 'Azis', 'azismuhaimin300@yahoo.com', '12345', '123456', 'L', 'deec4d9ddc40706b52a125db87e2f682', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
