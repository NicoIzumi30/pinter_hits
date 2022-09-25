-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2022 at 05:30 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pinter_hits`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `id_category` int(11) NOT NULL,
  `nama_category` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`id_category`, `nama_category`, `image`, `deskripsi`) VALUES
(1, 'Lemper', 'lemper.jpg', '<p style=\"text-align:justify\">Lemper adalah makanan ringan yang terbuat dari ketan, biasanya berisi abon atau cincangan daging ayam dan dibungkus dengan daun pisang. Lemper terkenal di Indonesia dan disantap sebagai pengganjal lapar sebelum memakan makanan utama.</p>\r\n\r\n<ul>\r\n	<li>Coba 1</li>\r\n	<li>Coba 2</li>\r\n	<li>Coba 3</li>\r\n</ul>\r\n'),
(2, 'Tape Ketan', '617d1e6f42104.jpg', 'Tape ketan adalah makanan tradisional daerah pasundan Jawa Barat yang terbuat dari beras ketan yang memiliki rasa manis di fermentasi menggunakan ragi selama kurun waktu tertentu. Tape ketan selama fermentasi menghasilkan alkohol sebagai hasil fermantasi.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_variasi_menu`
--

CREATE TABLE `tb_variasi_menu` (
  `id_variasi` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `nama_variasi` varchar(100) NOT NULL,
  `cara_pembuatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_variasi_menu`
--

INSERT INTO `tb_variasi_menu` (`id_variasi`, `id_category`, `image`, `nama_variasi`, `cara_pembuatan`) VALUES
(1, 2, '617d1e6f42104.jpg', 'Es Tape', '<p>Di gelas masukan gula pasir tambahkan air dingin,aduk sampe gula larut,tambahkan tape ketan,lalu tambahkan es batu.gampang ya,segar banget d minum nya siang hari.</p>\r\n'),
(2, 1, 'lemper-bakar-isi-abon-foto-resep-utama.jpg', 'Lemper Bakar', '<p><strong>Langkah 1</strong></p>\r\n\r\n<p>Masak santan dan daun salam, daun pandan serta garam, lalu masukkan beras ketan, aron sampai susut santannya.</p>\r\n\r\n<p><strong>Langkah 2</strong></p>\r\n\r\n<p>Kukus ketan tersebut selama 30 menit, angkat. Lalu biarkan sampai hangat, ketan jangan terlalu dingin karna nanti susah dibentuk.Siapkan bahan lain serta perlengkapan seperti plastik untuk membentuk,daun dan lidi semat.</p>\r\n\r\n<p><strong>Langkah 3</strong></p>\r\n\r\n<p>Ambil ketan 1 sendok nasi, pipihkan diatas lembaran plastik, isi abon.</p>\r\n\r\n<p><strong>Langkah 4</strong></p>\r\n\r\n<p>Bentuk oval sehingga isian di dalam, padatkan, gulungkan di daun. Saya buat 2 lapis pembungkus layaknya lemper jaman dulu.</p>\r\n\r\n<p><strong>Langkah 5</strong></p>\r\n\r\n<p>Semat kedua ujung dengan lidi, lakukan sampai selesai.</p>\r\n\r\n<p><strong>Langkah 6</strong></p>\r\n\r\n<p>Bakar langsung diatas panggangan, sesekali dibalik agar rata matangnya, biarkan dingin dan potong kelebihan daun pembungkus sebelum disajikan.</p>\r\n\r\n<p> </p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Nico Izumi', 'izumi@mail.com', 'default.jpg', '$2y$10$SB/sVNxpn24UQHSxSMawIOlrkMkuTn8e2.E5.F0nJuOboghdxW3Fa', 1, 1, 1664092535),
(2, 'Nico', 'izumi@mail.come', 'default.jpg', '$2y$10$hMKmc2G30PkrIIwCfUHo1ub/d7RVHUauv99fN484QIxBPzPMg3B2C', 2, 1, 1664092790),
(3, 'NIke', 'nike@mail.com', 'default.jpg', '$2y$10$xla8C0QO.4XzGasRO7/uc.kPpWzWrYVHwMws/UZ7YMh9ZJNfj/CL2', 2, 1, 1664093200),
(4, 'Nico', 'nicoxcode30@gmail.com', 'default.jpg', '$2y$10$II4p0HBDRo73LecrQEndM.bJCCKuKVNglbp38vZruGnW4LF.3gRre', 2, 1, 1664093333);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'admin/user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'admin/edit', 'fas fa-fw fa-user-edit', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tb_variasi_menu`
--
ALTER TABLE `tb_variasi_menu`
  ADD PRIMARY KEY (`id_variasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_variasi_menu`
--
ALTER TABLE `tb_variasi_menu`
  MODIFY `id_variasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
