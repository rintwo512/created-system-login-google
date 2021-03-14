-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Mar 2021 pada 16.58
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `google_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login_id` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `role` varchar(200) NOT NULL,
  `email_address` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_picture` varchar(250) NOT NULL,
  `is_active` int(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `login_id`, `first_name`, `last_name`, `role`, `email_address`, `password`, `profile_picture`, `is_active`, `created_at`, `updated_at`) VALUES
(17, '102875120148916963403', 'WebTek', '19', 'admin', 'webtek19@gmail.com', '', 'https://lh3.googleusercontent.com/a-/AOh14Ggwe8RN--KmPY7E21rIhcbq_SsuRdg2Ul_FySFx=s96-c', 1, '2021-03-14 14:19:36', '2021-03-14 16:39:28'),
(18, '112318011313031234008', 'Rinto', 'Harahap', 'admin', 'ryntooh@gmail.com', '', 'https://lh3.googleusercontent.com/a-/AOh14GhGGK4dU09_-TvIiNamfZUEmSX8pXrfZ_W4dkxSzw=s96-c', 1, '2021-03-14 15:22:41', '2021-03-14 16:54:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
