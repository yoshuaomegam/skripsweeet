-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2019 pada 17.33
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apbd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `belanja`
--

CREATE TABLE `belanja` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pelaporan` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `belanja` bigint(20) NOT NULL,
  `belanja2` bigint(20) DEFAULT NULL,
  `tipe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lat` double(10,6) DEFAULT NULL,
  `lng` double(10,6) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `belanja`
--

INSERT INTO `belanja` (`id`, `id_pelaporan`, `nama`, `belanja`, `belanja2`, `tipe`, `lat`, `lng`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'sddsddf', 343341, NULL, 'Pembinaan Kemasyarakatan Desa', NULL, NULL, 0, '2018-12-25 20:23:28', '2019-01-14 07:51:22'),
(2, 2, 'DSXZX', 233223, NULL, 'Pemberdayaan Masyarakat Desa', NULL, NULL, 0, '2018-12-25 20:29:31', '2018-12-25 20:33:43'),
(3, 2, 'wijdihadi', 23333, NULL, 'Belanja Tak Terduga', NULL, NULL, 0, '2019-01-14 08:00:52', '2019-01-14 08:00:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `desa`
--

CREATE TABLE `desa` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kecamatan` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kades` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto_kades` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_operator` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `desa`
--

INSERT INTO `desa` (`id`, `nama`, `id_kecamatan`, `logo`, `nama_kades`, `foto_kades`, `id_operator`, `created_at`, `updated_at`) VALUES
(13, 'soco', 14, NULL, 'toni', NULL, 29, '2018-12-24 11:52:31', '2018-12-24 11:52:31'),
(14, 'Jambangan', 15, NULL, 'Tona', NULL, 30, '2018-12-24 11:53:02', '2018-12-24 11:53:02'),
(15, 'karanganyar', 17, NULL, 'tono', NULL, 31, '2018-12-24 11:53:52', '2018-12-24 11:53:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_belanja`
--

CREATE TABLE `detail_belanja` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_belanja` int(10) UNSIGNED NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pembiayaan`
--

CREATE TABLE `detail_pembiayaan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pembiayaan` int(10) UNSIGNED NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pendapatan`
--

CREATE TABLE `detail_pendapatan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pendapatan` int(10) UNSIGNED NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `camat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`, `camat`, `created_at`, `updated_at`) VALUES
(14, 'Ngrambe', 'uin', NULL, NULL),
(15, 'Paron', 'uii', NULL, NULL),
(17, 'karanganyar', 'sutiyoso', '2018-12-07 00:48:07', '2018-12-07 00:48:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_28_164601_laratrust_setup_tables', 2),
(4, '2018_09_30_190517_kecamatan', 3),
(5, '2018_10_11_045531_desa', 4),
(6, '2018_10_26_191314_pelaporan', 5),
(8, '2018_11_05_142406_perencanaan', 6),
(10, '2018_11_05_143028_detail_perencanaan', 7),
(15, '2018_11_23_141116_pendapatandesa', 8),
(16, '2018_11_26_004805_detail_pendapatan', 9),
(17, '2018_12_15_092415_pembiayaan', 10),
(18, '2018_12_15_092803_detail_pembiayaan', 10),
(19, '2018_12_17_101216_belanjadesa', 11),
(20, '2018_12_17_101240_detail_belanjadesa', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('bappemas@gmail.com', '$2y$10$gM1w43jSbBB5ANy7yrODweqjvaGPtPKj8Z9hsoaKCfJdr.sB3uENK', '2018-11-16 06:28:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelaporan`
--

CREATE TABLE `pelaporan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_desa` int(10) UNSIGNED NOT NULL,
  `tahun_apbd` year(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelaporan`
--

INSERT INTO `pelaporan` (`id`, `id_desa`, `tahun_apbd`, `created_at`, `updated_at`, `status`) VALUES
(1, 15, 2019, '2018-12-24 11:59:42', '2018-12-24 11:59:42', 0),
(2, 13, 2017, '2018-12-24 22:55:26', '2019-01-14 08:20:37', 1),
(3, 13, 2015, '2018-12-27 12:08:26', '2018-12-27 12:08:29', 0),
(4, 13, 2033, '2018-12-27 12:08:36', '2018-12-27 12:08:38', 0),
(5, 14, 2017, '2018-12-27 12:09:04', '2018-12-27 12:09:15', 0),
(6, 14, 2015, '2018-12-27 12:09:08', '2018-12-27 12:09:17', 0),
(7, 14, 2020, '2018-12-27 12:09:14', '2018-12-27 12:09:19', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembiayaan`
--

CREATE TABLE `pembiayaan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pelaporan` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembiayaan` bigint(20) NOT NULL,
  `pembiayaan2` bigint(20) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembiayaan`
--

INSERT INTO `pembiayaan` (`id`, `id_pelaporan`, `nama`, `pembiayaan`, `pembiayaan2`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Sisa lebih perhitungan anggaran (SILPA) tahun sebelumnya', 333333, NULL, 0, '2018-12-27 10:49:36', '2019-01-14 07:49:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendapatan`
--

CREATE TABLE `pendapatan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_pelaporan` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendapatan` bigint(20) NOT NULL,
  `pendapatan2` bigint(20) DEFAULT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pendapatan`
--

INSERT INTO `pendapatan` (`id`, `id_pelaporan`, `nama`, `pendapatan`, `pendapatan2`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Pendapatan asli desa', 22224, NULL, 0, '2018-12-27 10:49:30', '2019-01-14 08:24:11'),
(2, 2, 'Swadaya partisipasi dan gotong royong', 788555, NULL, 0, '2019-01-14 08:39:16', '2019-01-14 08:39:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'operator', 'operator', NULL, '2018-09-28 10:17:29', '2018-09-28 10:17:29'),
(2, 'bappemas', 'bappemas', NULL, '2018-09-28 10:17:30', '2018-09-28 10:17:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(2, 17, 'App\\User'),
(1, 24, 'App\\User'),
(1, 25, 'App\\User'),
(1, 26, 'App\\User'),
(1, 29, 'App\\User'),
(1, 30, 'App\\User'),
(1, 31, 'App\\User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(17, 'bappemas', 'bappemas@gmail.com', NULL, '$2y$10$QOYaujpFAYfu4gMmcayBde/k2NuYOa7B7551SK.533P5s9r7J6gh2', '0yPBD8BnsMBG2lMONnvnxB4MtErv0nBsAYKJTuHCEdU27mWcOQEnLXhpaHuE', '2018-10-26 02:57:07', '2018-10-26 02:57:07'),
(22, 'yos', 'yos@gmail.com', NULL, '$2y$10$JYOruYTBfuYTtZOnrXRHgeYI3YmplBO7w/ynm7Zv6kV2TTqhEuDle', NULL, '2018-12-06 12:44:49', '2018-12-06 12:44:49'),
(24, 'ngale123', 'ngale@gmail.com', NULL, '$2y$10$fwI5SVvgKxOW/VaFw/vgFOxDyfb0/H8TaZE.7L3tadGpSGuMOQ/S6', NULL, '2018-12-07 00:10:06', '2018-12-07 00:10:06'),
(25, 'yosi', 'yosingale@gmail.com', NULL, '$2y$10$hTZhIazseJDEwFZT3EZQ/uO.ZE8x0GJAY7OGy9oLM5mJWe/kM6YK6', NULL, '2018-12-07 00:14:06', '2018-12-07 00:14:06'),
(26, 'yosis', 'yosingalse@gmail.com', NULL, '$2y$10$M3ApXKml467Dt2fOwLkajelByw39pVS8Zd2Dvh6e5Aq9J4NoX39yG', NULL, '2018-12-07 00:15:16', '2018-12-07 00:15:16'),
(29, 'soco123', 'soco@gmail.com', NULL, '$2y$10$.qMJb7Ipc.AmR/oD32PWoeduIdHeq5x2X7GTD1drSDUWgL9X5/GMC', 'vuzdP1e3X3qpyGoObP4Oxj0pj7aEnHsm7r5E6Egzh7iZ0IZvz5xQJVa5rvwo', '2018-12-24 11:52:31', '2018-12-24 11:52:31'),
(30, 'jambangan123', 'jambangan@gmail.com', NULL, '$2y$10$YnZmti9QSJW1jGqZNtdvhO1.rVK/q1ACPfxhZhLfTaDvfY6vcLRzO', 'jzxEzn9XmZojmD0aMh5wLeZjs7orHXfryruMakDpKmgyKz7FNd6o34L5UVTF', '2018-12-24 11:53:02', '2018-12-24 11:53:02'),
(31, 'karanganyar123', 'karanganyar@gmail.com', NULL, '$2y$10$7gOLmc2XRuvYF9TI/a2UEeKMxU5Ds7LzEp4GxED0QkRhrBYMbYIHG', NULL, '2018-12-24 11:53:51', '2018-12-24 11:53:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `belanja`
--
ALTER TABLE `belanja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `belanja_id_pelaporan_foreign` (`id_pelaporan`);

--
-- Indeks untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `desa_id_kecamatan_foreign` (`id_kecamatan`),
  ADD KEY `desa_id_operator_foreign` (`id_operator`);

--
-- Indeks untuk tabel `detail_belanja`
--
ALTER TABLE `detail_belanja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_belanja_id_belanja_foreign` (`id_belanja`);

--
-- Indeks untuk tabel `detail_pembiayaan`
--
ALTER TABLE `detail_pembiayaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_pembiayaan_id_pembiayaan_foreign` (`id_pembiayaan`);

--
-- Indeks untuk tabel `detail_pendapatan`
--
ALTER TABLE `detail_pendapatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_pendapatan_id_pendapatan_foreign` (`id_pendapatan`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pelaporan`
--
ALTER TABLE `pelaporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pelaporan_id_desa_foreign` (`id_desa`);

--
-- Indeks untuk tabel `pembiayaan`
--
ALTER TABLE `pembiayaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembiayaan_id_pelaporan_foreign` (`id_pelaporan`);

--
-- Indeks untuk tabel `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pendapatan_id_pelaporan_foreign` (`id_pelaporan`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indeks untuk tabel `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indeks untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `belanja`
--
ALTER TABLE `belanja`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `desa`
--
ALTER TABLE `desa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `detail_belanja`
--
ALTER TABLE `detail_belanja`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_pembiayaan`
--
ALTER TABLE `detail_pembiayaan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `detail_pendapatan`
--
ALTER TABLE `detail_pendapatan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pelaporan`
--
ALTER TABLE `pelaporan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pembiayaan`
--
ALTER TABLE `pembiayaan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pendapatan`
--
ALTER TABLE `pendapatan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `belanja`
--
ALTER TABLE `belanja`
  ADD CONSTRAINT `belanja_id_pelaporan_foreign` FOREIGN KEY (`id_pelaporan`) REFERENCES `pelaporan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `desa`
--
ALTER TABLE `desa`
  ADD CONSTRAINT `desa_id_kecamatan_foreign` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `desa_id_operator_foreign` FOREIGN KEY (`id_operator`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_belanja`
--
ALTER TABLE `detail_belanja`
  ADD CONSTRAINT `detail_belanja_id_belanja_foreign` FOREIGN KEY (`id_belanja`) REFERENCES `belanja` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_pembiayaan`
--
ALTER TABLE `detail_pembiayaan`
  ADD CONSTRAINT `detail_pembiayaan_id_pembiayaan_foreign` FOREIGN KEY (`id_pembiayaan`) REFERENCES `pembiayaan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_pendapatan`
--
ALTER TABLE `detail_pendapatan`
  ADD CONSTRAINT `detail_pendapatan_id_pendapatan_foreign` FOREIGN KEY (`id_pendapatan`) REFERENCES `pendapatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pelaporan`
--
ALTER TABLE `pelaporan`
  ADD CONSTRAINT `pelaporan_id_desa_foreign` FOREIGN KEY (`id_desa`) REFERENCES `desa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembiayaan`
--
ALTER TABLE `pembiayaan`
  ADD CONSTRAINT `pembiayaan_id_pelaporan_foreign` FOREIGN KEY (`id_pelaporan`) REFERENCES `pelaporan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pendapatan`
--
ALTER TABLE `pendapatan`
  ADD CONSTRAINT `pendapatan_id_pelaporan_foreign` FOREIGN KEY (`id_pelaporan`) REFERENCES `pelaporan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
