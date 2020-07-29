-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jul 2020 pada 12.47
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silelang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(8, 'Maulana Yusup', 'lanaysps@gmail.com', 'default.jpg', '$2y$10$prkhMzFCStzP2IkB6A74i.9uBDfPdJo4TLkkiv.SVge0L93iF2m5C', 1, 1, 1594113181),
(9, 'maul', 'maul@gmail.com', 'default.jpg', '$2y$10$IYAL7s6nesfxA.5wP7fZcOEC4SUhX1hxVgd12LC77bBlSNawVd0te', 2, 1, 1594124010),
(10, 'maul', 'admin@gmail.com', 'default.jpg', '$2y$10$Hrt/aiSEfDwTKsx8BGTEg.Eaf4d.BaTYpUYxD6V6bb75XE5nro1ka', 2, 0, 1594124796),
(11, 'sdfsdf', 'sdss', 'dsds', 'sds', 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'lanaysps@gmail.com', '5UEWjOHghOqOn54cYyhZHPTa2QwVMG5y/lqyLxBLpHE=', 1594052344),
(2, 'admin@gmail.com', 'g+NuKLbCygJTnez9LiFlFI9peGF5136dZ2Kdf0KDHXM=', 1594052459),
(3, 'lanaysps@gmail.com', 'G2aReNUfq0gbWDtXZjFeQ6a2T9I8sFBD0AbN6RMWG+8=', 1594111193),
(4, 'lanaysps@gmail.com', 'gWg3nRpjLyBg6HLLJP9o74HJLB+hm5FWb9pUb3INXo8=', 1594113074),
(5, 'lanaysps@gmail.com', 'o43UJ0EGF9XnK3RKJz2HcsE9Xlitxq6NrylI/J0J4lI=', 1594113181),
(6, 'maul@gmail.com', 'hYkK7O8Uin5KSNwrtzuI+0bvWY0mUxMTq31Vvv7kBzY=', 1594124010);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
