-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 30, 2025 at 01:16 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semilir`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci,
  `harga` decimal(10,2) NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `nama`, `deskripsi`, `harga`, `foto`, `created_at`, `updated_at`, `kategori`) VALUES
(1, 'Bakso', 'Semangkuk bakso dengan lontong, bihun, sambal, dan kuah rempah yang terasa hangat di lidah.', '12000.00', 'menu-bakso.png', NULL, NULL, 'makanan'),
(2, 'Cappucino', 'Cappuccino dingin dengan manis yang halus dan kesegaran yang terasa rapi di setiap tegukan.', '4000.00', 'menu-cappucino.png', NULL, NULL, 'minuman'),
(3, 'Es Cappucino', 'Cappuccino dingin dengan manis yang halus dan kesegaran yang terasa rapi di setiap tegukan.', '4000.00', 'menu-es-cappucino.png', NULL, NULL, 'minuman'),
(4, 'Es Joshua', 'Minuman energi dengan susu kental manis, membuat tubuh lebih bertenaga. ', '5000.00', 'menu-es-joshua.png', NULL, NULL, 'minuman'),
(5, 'Es Kopi hitam', 'Kopi hitam dingin dengan karakter tegas dan jernih, dipadukan dengan es membuat rasanya lebih mantap.\r\n', '4000.00', 'menu-es-kopi.png', NULL, NULL, 'minuman'),
(6, 'Es Kukubima Susu', 'Perpaduan kukubima dan susu yang manis lembut, memberi tenaga sekaligus kenyamanan.', '5000.00', 'menu-es-kukubima-susu.png', NULL, NULL, 'minuman'),
(7, 'Es Kukubima', 'Kukubima dingin dengan rasa manis segar yang cepat mengangkat kembali semangat.', '4000.00', 'menu-es-kukubima.png', NULL, NULL, 'minuman'),
(8, 'Es milo', 'Milo dingin yang creamy dan akrab di lidah, membawa sensasi ringan khas minuman masa kecil.', '4000.00', 'menu-es-milo.png', NULL, NULL, 'minuman'),
(9, 'Es Nutrisari', 'Nutrisari dingin dengan kesegaran buah yang sederhana dan cerah.', '4000.00', 'menu-es-nutrisari.png', NULL, NULL, 'minuman'),
(10, 'Es Susu Jahe', 'Susu dingin dengan kehangatan jahe yang tipis, memberikan rasa lembut yang tetap menyegarkan.', '4000.00', 'menu-es-susu-jahe.png', NULL, NULL, 'minuman'),
(11, 'Es Teh', 'Teh manis dingin dengan rasa ringan dan tenang, mudah dinikmati kapan pun.', '4000.00', 'menu-es-teh.png', NULL, NULL, 'minuman'),
(12, 'Es Temulawak', 'Minuman temulawak dingin dengan rasa herbal yang lembut, memberi kesegaran natural yang menenangkan.', '8000.00', 'menu-es-temulawak.png', NULL, NULL, 'minuman'),
(13, 'Es White Coffee', 'White coffee dingin dengan aroma creamy yang halus, memberikan sensasi segar namun tetap hangat di rasa.', '4000.00', 'menu-es-whitecoffee.png', NULL, NULL, 'minuman'),
(14, 'Kopi Gula Aren Panas', 'Kopi hangat dengan gula aren yang memberikan manis dan lembut di tenggorokan.', '4000.00', 'menu-kopi-aren-panas.png', NULL, NULL, 'minuman'),
(15, 'Kopi Hitam Panas', 'Kopi hitam hangat dengan karakter kuat, namun tetap menyisakan kehangatan yang nyaman.', '4000.00', 'menu-kopi-panas.png', NULL, NULL, 'minuman'),
(16, 'Lalapan Ayam', 'Ayam goreng berbumbu lembut dipadukan dengan lalapan segar, tahu tempe, sambal, dan nasi hangat.', '12000.00', 'menu-lalapan-ayam.png', NULL, NULL, 'makanan'),
(17, 'Lalapan Nila', 'Nila goreng renyah tersaji dengan lalapan segar, tahu tempe, sambal, dan nasi hangat yang nyaman dinikmati.', '15000.00', 'menu-lalapan-nila.png', NULL, NULL, 'makanan'),
(18, 'Lalapan Telur', 'Telur goreng sederhana, ditemani lalapan, tahu, sambal, dan nasi hangat.', '10000.00', 'menu-lalapan-telur.png', NULL, NULL, 'makanan'),
(19, 'Mie KSC', 'Mie instan rasa Korean Spicy Chicken dengan pedas gurih yang mantap.', '6000.00', 'menu-mieksc.png', NULL, NULL, 'makanan'),
(20, 'Mie KSC + Telur', 'Mie Korean Spicy Chicken dengan tambahan telur goreng untuk rasa yang lebih mantap.', '9000.00', 'menu-mieksc-telur.png', NULL, NULL, 'makanan'),
(21, 'Mie Sedap Goreng + Telur', 'Mie goreng instan dengan tambahan telur goreng.', '8000.00', 'menu-miesedap-telur.png', NULL, NULL, 'makanan'),
(22, 'Mie Sedap Goreng', 'Mie goreng instan dengan bumbu gurih yang familiar.', '5000.00', 'menu-miesedap.png', NULL, NULL, 'makanan'),
(23, 'Mie Sedap Soto + Telur', 'Mie soto instan dengan tambahan telur goreng.', '8000.00', 'menu-miesoto-telur.png', NULL, NULL, 'makanan'),
(24, 'Mie Sedap Soto', 'Mie soto instan dengan kuah soto yang menghangatkan.', '5000.00', 'menu-miesoto.png', NULL, NULL, 'makanan'),
(25, 'Milo Panas', 'Milo hangat dengan rasa coklat lembut, memberi kenyamanan yang terasa pelan tapi pasti.', '4000.00', 'menu-milo-panas.png', NULL, NULL, 'minuman'),
(26, 'Nila Kuah Kuning', 'Nila kuah kuning beraroma rempah dan kaya rasa, tersaji bersama nasi hangat.', '15000.00', 'menu-nila-kuning.png', NULL, NULL, 'makanan'),
(27, 'Nasi Pecel Nila', 'Nasi pecel + nila goreng, lengkap dengan tahu, tempe, dan kerupuk.', '17000.00', 'menu-pecel-nila.png', NULL, NULL, 'makanan'),
(28, 'Nasi Pecel Original', 'Nasi pecel klasik, ditemani tahu tempe, dan kerupuk.', '8000.00', 'menu-pecel-ori.png', NULL, NULL, 'makanan'),
(29, 'Nasi Pecel Telur', 'Nasi pecel + telur goreng, lengkap dengan tahu, tempe, dan kerupuk.', '11000.00', 'menu-pecel-telur.png', NULL, NULL, 'makanan'),
(30, 'Nasi Pecel Ayam', 'Nasi pecel + ayam goreng, lengkap dengan tahu, tempe, dan kerupuk.', '12000.00', 'menu-pecel-ayam.png', NULL, NULL, 'makanan'),
(31, 'Tempe Penyet Ayam', 'Ayam goreng dengan tempe penyet, dilengkapi tahu tempe, lalapan, dan nasi hangat.', '14000.00', 'menu-penyet-ayam.png', NULL, NULL, 'makanan'),
(32, 'Tempe Penyet Nila', 'Nila goreng berpadu tempe penyet, disajikan bersama tahu tempe, lalapan, dan nasi hangat.', '17000.00', 'menu-penyet-nila.png', NULL, NULL, 'makanan'),
(33, 'Tempe Penyet Original', 'Tempe yang dipenyet bersama sambal, lengkap dengan tahu tempe, lalapan, dan nasi hangat.', '8000.00', 'menu-penyet-ori.png', NULL, NULL, 'makanan'),
(34, 'Tempe Penyet Telur', 'Telur goreng dipadukan tempe penyet, tersaji dengan tahu tempe, lalapan, dan nasi hangat.', '12000.00', 'menu-penyet-telur.png', NULL, NULL, 'makanan'),
(35, 'Susu Jahe Panas', 'Susu hangat berpadu jahe yang menenangkan, pas untuk menghangatkan tubuh dan pikiran.', '4000.00', 'menu-susu-jahe.png', NULL, NULL, 'minuman'),
(36, 'Susu Soda', 'Minuman ringan dengan perpaduan susu dan soda, menghadirkan rasa manis segar yang unik namun tetap lembut.', '15000.00', 'menu-susu-soda.png', NULL, NULL, 'minuman'),
(37, 'Teh Panas', 'Teh hangat dengan aroma tenang dan manis yang pas dan menenagkan.', '4000.00', 'menu-teh-panas.png', NULL, NULL, 'minuman'),
(38, 'White Coffee Panas', 'White coffee panas dengan rasa creamy dan lembut, mudah dinikmati tanpa perlu tambahan apa pun.', '4000.00', 'menu-whitecoffee-panas.png', NULL, NULL, 'minuman'),
(39, 'Es Extrajoss', 'Minuman energi dengan rasa khas yang ringan dan segar, membantu tubuh kembali bertenaga.', '4000.00', 'menu-es-extrajoss.png', NULL, NULL, 'minuman');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_11_25_012419_create_menus_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('qopyoxCr8oLmq9SVyZKajwSUt3M9JYbrlqx8wxHl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicGhYV3U2a1BCcDNHaGhVQWtIdEpibEVTbFBmME5TbnpNeFR2OHM3eSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1764465361);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
