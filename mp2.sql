-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2022 pada 13.03
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mp2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`id`, `nama`, `level`, `email`, `password`, `jeniskelamin`, `foto`) VALUES
(11, 'dosen pertama yang sudah di edit', 'dosen', 'dosenpertama@gmail.com', '$2y$10$XR4IWD6Alin/HkKrIHOiwev3XM8Ol7.VOiwsgx2tVetfvcXRbLekO', 'Laki - Laki', 'dosen pertama yang sudah di edit.png'),
(12, 'dosen baru', 'dosen', 'dosenbaru@gmail.com', '$2y$10$0jnA6BdWvwljlkcRPRorw.nNVaSdKtUwiMci0.dp8Vn1elNMhhohK', 'Perempuan', 'dosen baru.jpg'),
(13, 'dosen laki laki', 'dosen', 'dosenlaki@gmail.com', '$2y$10$PkkyAwBBG4MIw/viYkBNSuuTjI7e4OXPZrFAVHn2hE2SEXI12jXiS', 'Laki - Laki', 'dosen laki laki.jpg'),
(14, 'dosen perempuan', 'dosen', 'dosenperempuan@gmail.com', '$2y$10$Nsdva.NDZOKgdLu2R1Red.5cwO9lzYbKxE8UYZWmD7aMsosrIWQiC', 'Perempuan', 'dosen perempuan.jpg'),
(16, 'dosen kelima', 'dosen', 'dosenlima@gmail.com', '$2y$10$DDZfGyePJmnVIRbYkcKQ5OJXsLlavVh7Xzv7d63oyHrIB5DoisjHO', 'Perempuan', 'dosen kelima.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dosenwali`
--

CREATE TABLE `tbl_dosenwali` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_dosenwali`
--

INSERT INTO `tbl_dosenwali` (`id`, `nama`, `jeniskelamin`, `foto`) VALUES
(1, 'dosen wali 1', 'Laki - Laki', 'pram.jpg'),
(2, 'dosen wali 2', 'Perempuan', '2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `wali` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id`, `nama`, `jurusan`, `level`, `email`, `password`, `jeniskelamin`, `foto`, `wali`, `catatan`) VALUES
(9, 'pramuhdiana', 'Teknik Informatika', 'mahasiswa', 'pramuhdiana@gmail.com', '$2y$10$XifqmrnKjDJQfi40EqmS5uaSw0wN.A3SblRFWLhKh5A04h2aIi4jy', 'Laki-Laki', 'pramuhdiana.jpg', 'dosen perempuan', ''),
(10, 'pram', 'Sistem Informasi', 'mahasiswa', 'pram@gmail.com', '$2y$10$IZe8cNxN/9HrC.KW1KEQ7utJrzqGeHoFngM2aQXabE/8j0ontCWk.', 'Perempuan', 'pram.jpg', '', ''),
(11, 'diana baru', 'Sistem Informasi', 'mahasiswa', 'diana@gmail.com', '$2y$10$1tF7GIXthXUUdzZZ6qkLZOqgR5T5UCyDoHLq/syoTQgS4JeyRWJbG', 'Perempuan', 'diana baru.jpg', '', ''),
(12, 'san dy', 'Teknik Informatika', 'mahasiswa', 'sandy@gmail.com', '$2y$10$COMCs6nfd4nm/ValJcryPeV2GHRSEAFW./kXFcQXjEf91JhPs8ZwC', 'Laki-Laki', 'san dy.jpg', 'dosen baru', ''),
(13, 'mahasiswa baru', 'Sistem Informasi', 'mahasiswa', 'baru@gmail.com', '$2y$10$OdE4hsjoxzIkslcysuF6veVllcHyA4z30VZ.Z1R5PnfTZVeBaBTIG', 'Perempuan', 'mahasiswa baru.jpg', 'dosen', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_riwayat`
--

CREATE TABLE `tbl_riwayat` (
  `id` int(11) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `nama_dosen` varchar(255) NOT NULL,
  `catatan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_riwayat`
--

INSERT INTO `tbl_riwayat` (`id`, `nama_mhs`, `nama_dosen`, `catatan`) VALUES
(6, 'diana', 'dosen perempuan', 'ini catatan dari mahasiswa diana untuk dosen perempuan'),
(14, 'pram', 'dosen kelima', 'catatan dari mahasiswa pram');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sandy Pramuhdiana', 'admin', 'sandypramuhdiana96@gmail.com', NULL, '$2y$10$JdAuNqH24iJrcu9fmYnCGu1BdYImNSnR9fg6ZVRHhNtAzUvqgZ6ly', NULL, '2022-05-15 05:51:38', '2022-05-15 05:51:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_dosenwali`
--
ALTER TABLE `tbl_dosenwali`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_dosenwali`
--
ALTER TABLE `tbl_dosenwali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
