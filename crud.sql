-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2024 pada 21.08
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(20) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `jenis_barang` varchar(20) DEFAULT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `tgl_masuk`, `jenis_barang`, `harga`) VALUES
(5, 'Durian', '2024-01-17', 'buah', '30000'),
(6, 'daiai', '2024-01-02', 'sabun', '2000'),
(7, 'beras tani', '2024-01-02', 'beras', '3000'),
(8, 'minyak zaitun', '2024-01-13', 'minyak', '2000'),
(9, 'kuini', '2024-01-13', 'buah', '2000'),
(10, 'kuini ku', '2024-01-13', 'buah', '2000'),
(11, 'kuini', '2024-01-13', 'buah', '2000'),
(12, 'kuini', '2024-01-13', 'buah', '2000'),
(13, 'kuini', '2024-01-13', 'buah', '2000'),
(14, 'kuini', '2024-01-13', 'buah', '2000'),
(15, 'kuini', '2024-01-13', 'buah', '2000'),
(16, 'kuini', '2024-01-13', 'buah', '2000'),
(17, 'kuini', '2024-01-13', 'buah', '2000'),
(18, 'kuini', '2024-01-13', 'buah', '2000'),
(19, 'kuini', '2024-01-13', 'buah', '2000'),
(20, 'kuini', '2024-01-13', 'buah', '2000'),
(21, 'kuini', '2024-01-13', 'buah', '2000'),
(22, 'kuini', '2024-01-13', 'buah', '2000'),
(23, 'kuini', '2024-01-13', 'buah', '2000'),
(24, 'kuini', '2024-01-13', 'buah', '2000'),
(25, 'kuini', '2024-01-13', 'buah', '2000'),
(26, 'kuini', '2024-01-13', 'buah', '2000'),
(27, 'kuini', '2024-01-13', 'buah', '2000'),
(28, 'kuini', '2024-01-13', 'buah', '2000'),
(29, 'kuini', '2024-01-13', 'buah', '2000'),
(30, 'kuini', '2024-01-13', 'buah', '2000'),
(31, 'kuini', '2024-01-13', 'buah', '2000'),
(32, 'kuini', '2024-01-13', 'buah', '2000'),
(33, 'kuini', '2024-01-13', 'buah', '2000'),
(34, 'kuini', '2024-01-13', 'buah', '2000'),
(35, 'kuini', '2024-01-13', 'buah', '2000'),
(36, 'kuini', '2024-01-13', 'buah', '2000'),
(37, 'kuini', '2024-01-13', 'buah', '2000'),
(38, 'kuini', '2024-01-13', 'buah', '2000'),
(39, 'kuini', '2024-01-13', 'buah', '2000'),
(40, 'kuini', '2024-01-13', 'buah', '2000'),
(41, 'kuini', '2024-01-13', 'buah', '2000'),
(42, 'kuini', '2024-01-13', 'buah', '2000'),
(43, 'kuini', '2024-01-13', 'buah', '2000'),
(44, 'kuini', '2024-01-13', 'buah', '2000'),
(45, 'kuini', '2024-01-13', 'buah', '2000'),
(46, 'kuini', '2024-01-13', 'buah', '2000'),
(47, 'kuini', '2024-01-13', 'buah', '2000'),
(48, 'kuini', '2024-01-13', 'buah', '2000'),
(49, 'kuini', '2024-01-13', 'buah', '2000'),
(50, 'kuini', '2024-01-13', 'buah', '2000'),
(51, 'kuini', '2024-01-13', 'buah', '2000'),
(52, 'kuini', '2024-01-13', 'buah', '2000'),
(53, 'kuini', '2024-01-13', 'buah', '2000'),
(54, 'kuini', '2024-01-13', 'buah', '2000'),
(55, 'kuini', '2024-01-13', 'buah', '2000'),
(56, 'kuini', '2024-01-13', 'buah', '2000'),
(57, 'kuini', '2024-01-13', 'buah', '2000'),
(58, 'kuini', '2024-01-13', 'buah', '2000'),
(59, 'kuini', '2024-01-13', 'buah', '2000'),
(60, 'kuini', '2024-01-13', 'buah', '2000'),
(61, 'kuini', '2024-01-13', 'buah', '2000'),
(62, 'kuini', '2024-01-13', 'buah', '2000'),
(63, 'kuini', '2024-01-13', 'buah', '2000'),
(64, 'kuini', '2024-01-13', 'buah', '2000'),
(65, 'kuini', '2024-01-13', 'buah', '2000'),
(66, 'kuini', '2024-01-13', 'buah', '2000'),
(67, 'kuini', '2024-01-13', 'buah', '2000'),
(68, 'kuini', '2024-01-13', 'buah', '2000'),
(69, 'kuini', '2024-01-13', 'buah', '2000'),
(70, 'kuini', '2024-01-13', 'buah', '2000'),
(71, 'kuini', '2024-01-13', 'buah', '2000'),
(72, 'kuini', '2024-01-13', 'buah', '2000'),
(73, 'kuini', '2024-01-13', 'buah', '2000'),
(74, 'kuini', '2024-01-13', 'buah', '2000'),
(75, 'kuini', '2024-01-13', 'buah', '2000'),
(76, 'kuini', '2024-01-13', 'buah', '2000'),
(77, 'kuini', '2024-01-13', 'buah', '2000'),
(78, 'kuini', '2024-01-13', 'buah', '2000'),
(79, 'kuini', '2024-01-13', 'buah', '2000'),
(80, 'kuini', '2024-01-13', 'buah', '2000'),
(81, 'kuini', '2024-01-13', 'buah', '2000'),
(82, 'kuini', '2024-01-13', 'buah', '2000'),
(83, 'kuini', '2024-01-13', 'buah', '2000'),
(84, 'kuini', '2024-01-13', 'buah', '2000'),
(85, 'kuini', '2024-01-13', 'buah', '2000'),
(86, 'kuini', '2024-01-13', 'buah', '2000'),
(87, 'kuini', '2024-01-13', 'buah', '2000'),
(88, 'kuini', '2024-01-13', 'buah', '2000'),
(89, 'kuini', '2024-01-13', 'buah', '2000'),
(90, 'kuini', '2024-01-13', 'buah', '2000'),
(91, 'kuini', '2024-01-13', 'buah', '2000'),
(92, 'kuini', '2024-01-13', 'buah', '2000'),
(93, 'kuini', '2024-01-13', 'buah', '2000'),
(94, 'kuini', '2024-01-13', 'buah', '2000'),
(95, 'kuini', '2024-01-13', 'buah', '2000'),
(96, 'kuini', '2024-01-13', 'buah', '2000'),
(97, 'kuini', '2024-01-13', 'buah', '2000'),
(98, 'kuini', '2024-01-13', 'buah', '2000'),
(99, 'kuini', '2024-01-13', 'buah', '2000'),
(100, 'kuini', '2024-01-13', 'buah', '2000'),
(101, 'kuini', '2024-01-13', 'buah', '2000'),
(102, 'kuini', '2024-01-13', 'buah', '2000'),
(103, 'kuini', '2024-01-13', 'buah', '2000'),
(104, 'kuini', '2024-01-13', 'buah', '2000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` int(20) NOT NULL,
  `id_users` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`) VALUES
(18, 'Thoriq Nst', 'thoriq', '$2y$10$vs/OZWLW9oT7SXfyPSFFOeqVbxyNMHFkA5bY3QmrHblud6bRL6Haq');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_users` (`id_users`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT untuk tabel `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
