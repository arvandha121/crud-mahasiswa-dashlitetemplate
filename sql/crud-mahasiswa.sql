-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 12:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

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
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `kota`, `created_at`, `updated_at`) VALUES
(1, '5062537702', 'Mitra Hardiansyah', '1981-08-31', 'Laki-laki', 'Gg. Otto No. 895, Pagar Alam 19879, Bali', 'Bandar Lampung', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(2, '4115230027', 'Tari Tari Agustina S.Kom', '1987-05-12', 'Laki-laki', 'Dk. Gotong Royong No. 437, Palangka Raya 64679, Bengkulu', 'Bandar Lampung', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(3, '4168014540', 'Balidin Candrakanta Wibisono S.Ked', '1971-06-05', 'Perempuan', 'Ki. Nakula No. 812, Pasuruan 84322, Maluku', 'Tarakan', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(4, '9498995998', 'Umar Prasetya S.Pd', '1982-07-14', 'Laki-laki', 'Gg. Pahlawan No. 989, Parepare 83823, Bengkulu', 'Probolinggo', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(5, '1356905313', 'Ciaobella Tania Nasyidah S.I.Kom', '2011-07-03', 'Laki-laki', 'Dk. Baha No. 53, Sabang 12511, Sulut', 'Pangkal Pinang', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(6, '2721149190', 'Hesti Nasyiah S.E.I', '1996-01-29', 'Perempuan', 'Dk. Baja No. 551, Gorontalo 73439, Malut', 'Bandar Lampung', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(7, '7887722037', 'Lili Utami', '2022-05-24', 'Perempuan', 'Kpg. HOS. Cjokroaminoto (Pasirkaliki) No. 404, Sorong 11121, Banten', 'Bandar Lampung', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(8, '1531661250', 'Cinthia Aryani', '1979-09-10', 'Laki-laki', 'Dk. Rajawali Timur No. 275, Palembang 70572, Sulbar', 'Padangpanjang', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(9, '1327597067', 'Septi Maryati', '2008-10-24', 'Perempuan', 'Ds. Suryo No. 350, Bitung 56313, Kalbar', 'Bandar Lampung', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(10, '8089303478', 'Tantri Haryanti S.Pd', '2010-11-20', 'Laki-laki', 'Dk. Bak Air No. 238, Semarang 97654, Sulut', 'Tanjungbalai', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(11, '5564247623', 'Capa Okto Santoso', '1985-12-22', 'Perempuan', 'Psr. Babakan No. 498, Surakarta 74025, Sulut', 'Bandar Lampung', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(12, '2749203677', 'Teguh Sitompul', '1986-10-16', 'Perempuan', 'Gg. Cihampelas No. 171, Pekalongan 93146, Banten', 'Palembang', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(13, '7757029584', 'Kenes Nyoman Hidayanto', '1970-05-26', 'Perempuan', 'Ds. Yohanes No. 462, Gunungsitoli 94869, Riau', 'Bandar Lampung', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(14, '8679709387', 'Karya Januar', '2016-01-28', 'Perempuan', 'Jln. Fajar No. 582, Kediri 13511, Riau', 'Bandar Lampung', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(15, '4697960545', 'Siti Laksita S.Pd', '2010-08-21', 'Laki-laki', 'Gg. Suryo No. 158, Bau-Bau 27577, Sumut', 'Palembang', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(16, '0022475960', 'Latika Palastri', '1982-06-16', 'Perempuan', 'Jln. Baranangsiang No. 402, Bengkulu 24512, Banten', 'Palembang', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(17, '3848529049', 'Lili Syahrini Haryanti', '1999-04-18', 'Laki-laki', 'Jln. Bakhita No. 820, Banda Aceh 35245, Sumut', 'Binjai', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(18, '7813108685', 'Jamalia Hana Wastuti', '2023-02-26', 'Laki-laki', 'Ki. Astana Anyar No. 226, Payakumbuh 55978, Jatim', 'Bandar Lampung', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(19, '2433048156', 'Jarwi Salahudin', '2017-02-26', 'Laki-laki', 'Ds. Bappenas No. 612, Pangkal Pinang 15613, Papua', 'Makassar', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(20, '5544487329', 'Jaka Hardiansyah', '1995-10-19', 'Laki-laki', 'Jln. Perintis Kemerdekaan No. 73, Depok 51554, Jabar', 'Mataram', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(21, '7080317315', 'Cindy Wahyuni S.Ked', '1977-08-05', 'Laki-laki', 'Ki. Otista No. 963, Dumai 76561, Papua', 'Kotamobagu', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(22, '5299075855', 'Himawan Maryadi', '1986-04-02', 'Perempuan', 'Jln. Salatiga No. 764, Administrasi Jakarta Barat 14718, Papua', 'Tanjung Pinang', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(23, '0467295053', 'Lutfan Prakasa', '2006-01-18', 'Laki-laki', 'Dk. Babadan No. 573, Administrasi Jakarta Timur 44105, NTT', 'Palembang', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(24, '0838275955', 'Bajragin Darsirah Rajata', '1976-03-15', 'Laki-laki', 'Kpg. Sudiarto No. 130, Bandar Lampung 12822, Kepri', 'Tanjung Pinang', '2023-08-17 03:02:36', '2023-08-17 03:02:36'),
(25, '3112573880', 'Maida Rahayu S.IP', '1997-04-15', 'Laki-laki', 'Ds. Ujung No. 109, Semarang 81709, Kalbar', 'Depok', '2023-08-17 03:02:36', '2023-08-17 03:02:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(61, '2014_10_12_000000_create_users_table', 1),
(62, '2014_10_12_100000_create_password_resets_table', 1),
(63, '2019_08_19_000000_create_failed_jobs_table', 1),
(64, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(65, '2023_07_24_031620_create_mahasiswa_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$bMb8DnYdUbEOKQauHMrv9ucs5zB2OPty2Pd3/wdKdBmSflFm5fKvG', NULL, NULL, NULL),
(2, 'nauvan', 'nauvan121@gmail.com', '$2y$10$aFQ4OG1rGewhIX0sf4R7zOkWNxvOYuLGzJJhZmJMNx1imoVWqa4Ee', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
