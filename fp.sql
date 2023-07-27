-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jul 2023 pada 13.27
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kehilangan`
--

CREATE TABLE `kehilangan` (
  `id` int(9) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `tanggal_kehilangan` date NOT NULL,
  `tempat_kehilangan` varchar(255) NOT NULL,
  `informasi_detail` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `no_hp` varchar(20) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `kehilangan`
--

INSERT INTO `kehilangan` (`id`, `nama_barang`, `kategori`, `tanggal_kehilangan`, `tempat_kehilangan`, `informasi_detail`, `foto`, `no_hp`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'kunci', 'Lainya', '2023-07-06', 'Parkiran', 'kunci motor beat', '1688729099_d2960a2e15903900405c.jpg', '088888889', NULL, NULL, NULL),
(8, 'Hp Iphone', 'Elektronik', '2023-07-06', 'Gendung 5 lantai 3 ruang 3 Amikom', 'Hp Iphone warna gold', '1688729234_ae33e20b4807f27250a0.jpg', '08898989', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporant`
--

CREATE TABLE `laporant` (
  `deskripsi` text NOT NULL,
  `no_hp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-07-05-055050', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1688536292, 1),
(2, '2023-07-05-000000', 'App\\Database\\Migrations\\CreateTemuansTable', 'default', 'App', 1688550164, 2),
(3, '2023-07-05-103240', 'App\\Database\\Migrations\\CreateKehilanganTable', 'default', 'App', 1688553180, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `temuan`
--

CREATE TABLE `temuan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `tanggal_penemuan` date NOT NULL,
  `tempat_penemuan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `temuan`
--

INSERT INTO `temuan` (`id`, `nama_barang`, `kategori`, `tanggal_penemuan`, `tempat_penemuan`, `foto`, `no_hp`) VALUES
(13, 'Hp Samsung', 'Elektronik', '2023-07-05', 'Gedung 7 lantai 2 ruang  1 Amikom', '1688728236_774902c2f828d8b18d9c.jpg', '0812345678'),
(14, 'Dompet', 'Lainya', '2023-07-04', 'Parkiran belakang Amikom', '1688728758_f1c6d49d4af575ed6433.jpg', '0812345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`) VALUES
(5, 'pengguna', 'pengguna@gmail.com', '$2y$10$gtfgzFebOA7hwxlRufDqvObIXUt41BTao7GsMcG5KAZZNQH/LMHdy');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kehilangan`
--
ALTER TABLE `kehilangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `temuan`
--
ALTER TABLE `temuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kehilangan`
--
ALTER TABLE `kehilangan`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `temuan`
--
ALTER TABLE `temuan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
