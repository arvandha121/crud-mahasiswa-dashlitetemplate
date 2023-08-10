-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2023 pada 16.02
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud-mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `kota`, `created_at`, `updated_at`) VALUES
(1, '2041720134', 'Arief Nauvan Ramadha', '2001-11-20', 'Laki-laki', 'Kauman', 'Nganjuk', '2023-08-10 07:00:50', NULL),
(2, '2041720130', 'Ahmad Rafif Alaudin', '2002-01-12', 'Laki-laki', 'Pesantren', 'Kediri', '2023-08-10 07:00:50', NULL),
(3, '2041720010', 'Taufik Anwar', '2001-08-15', 'Laki-laki', 'Dau', 'Malang', '2023-08-10 07:00:50', NULL),
(4, '2041720098', 'Alun Mega', '2001-03-10', 'Perempuan', 'Rejoso', 'Nganjuk', '2023-08-10 07:00:50', NULL),
(5, '2041720016', 'Atmayanti', '2003-03-15', 'Perempuan', 'Ds Bandung', 'Tulungagung', '2023-08-10 07:00:50', NULL),
(6, '2041720015', 'Muchammad Rizal Gusnanda Atmaja', '2003-10-12', 'Laki-laki', 'Ds Dawuhan', 'Trenggalek', '2023-08-10 07:00:50', NULL),
(7, '2041720100', 'Venny Meida Hersianty', '2002-01-11', 'Perempuan', 'Lowokwaru', 'Malang', '2023-08-10 07:00:50', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
