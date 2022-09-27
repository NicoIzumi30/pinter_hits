-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2022 at 07:30 PM
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
  `berita` text NOT NULL,
  `penulis` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `berita`, `penulis`, `image`, `tanggal`) VALUES
(2, 'Coba aja', '<p><kbd>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium sit quod odio distinctio, ratione dignissimos iure incidunt laudantium quos voluptate, molestias nostrum eveniet. Assumenda impedit quaerat quasi dolores ab voluptatem aperiam id dolorum ipsam quibusdam! At laboriosam laudantium neque doloremque veniam quas sapiente dolorum, rerum eveniet sed atque dicta non modi possimus minus autem. Reiciendis architecto est a officia ipsum, labore, culpa ratione, debitis quo suscipit doloribus vitae adipisci. Ipsa animi minima libero ullam illo. Assumenda</kbd></p>\r\n\r\n<p> </p>\r\n\r\n<p>officiis totam consequuntur hic, iure dolores nihil reprehenderit aliquid animi id expedita adipisci, vero vitae commodi corrupti placeat voluptas esse facilis doloribus odit velit?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium sit quod odio distinctio, ratione dignissimos iure incidunt laudantium quos voluptate, molestias nostrum eveniet. Assumenda impedit quaerat quasi dolores ab voluptatem aperiam id dolorum ipsam quibusdam! At laboriosam laudantium neque doloremque veniam quas sapiente dolorum, rerum eveniet sed atque dicta non modi possimus minus autem. Reiciendis architecto est a officia ipsum, labore, culpa ratione, debitis quo suscipit doloribus vitae adipisci. Ipsa animi minima libero ullam illo. Assumenda officiis totam consequuntur hic, iure dolores nihil reprehenderit aliquid animi id expedita adipisci, vero vitae commodi corrupti placeat voluptas esse facilis doloribus odit velit?</p>\r\n', 'Nico Izumi', 'IMG_20220710_031213_989.jpg', '2022-09-27 13:30:33'),
(3, 'Lemper Bakar', '<p>Brilio.net - Kamu pasti sudah sering makan lemper kan? Jajanan khas pasar ini memang punya rasa gurih dan tekstur sedikit kenyal sehingga bikin nagih saat dikunyah. Apalagi, biasanya lemper dibuat menggunakan beragam isian yang bikin rasanya semakin enak.<br>\r\nLemper memang umumnya hanya dimasak dengan cara dikukus, tetapi lemper juga bisa dibakar, lho. Aromanya pun jadi semakin wangi khas daun pisang yang dibakar. Keduanya sama-sama enak dan praktis untuk dibuat.<br>\r\nKamu bisa membuat lemper bakar sendiri di rumah, lho. Hanya dengan bahan-bahan sederhana, kamu sudah bisa bikin makanan enak di rumah. Tinggal kamu mengisi lempernya dengan bahan-bahan sesuai selera, seperti ayam dan daging cincang, abon, hingga ikan.<br>\r\nPenasaran kan, kayak gimana sih resep lemper bakar berbagai isi? Berikut sebelas resep kreasi lemper bakar berbagai isi yang gurih, empuk, dan antigagal, dirangkum BrilioFood dari berbagai sumber, Selasa (28/9).</p>\r\n\r\n<h3><br>\r\n<strong>1. Lemper bakar ayam.</strong></h3>\r\n\r\n<p><img alt=\"\" src=\"https://cdn-brilio-net.akamaized.net/webp/news/2021/09/28/214266/1569574-resep-kreasi-lemper-bakar.jpg\"></p>\r\n\r\n<p>Bahan:<br>\r\n- 500 gr beras ketan putih, rendam minimal 2 jam, tiriskan<br>\r\n- 300 ml santan kental<br>\r\n- 1 sdt garam<br>\r\n- 2 lembar daun salam<br>\r\n- 2 lembar daun pandan<br>\r\nIsian ayam:<br>\r\n- 300 gr dada ayam, rebus sebentar asal matang, suwir-suwir<br>\r\n- 30 ml santan instan<br>\r\n- 1 batang serai, geprek<br>\r\n- 2 lembar daun salam<br>\r\n- 2 lembar daun jeruk<br>\r\n- 5 siung bawang merah, haluskan<br>\r\n- 3 siung bawang putih, haluskan<br>\r\n- 3 butir kemiri, haluskan<br>\r\n- 100 ml air kaldu ayam (air sisa rebusan ayam)<br>\r\n- Garam<br>\r\n- Gula pasir<br>\r\nCara membuat:<br>\r\n1. Kukus ketan 15 menit atau sampai setengah matang.<br>\r\n2. Sambil mengukus ketan, masak santan, garam, daun pandan, dan daun salam dengan api kecil sampai mendidih.<br>\r\n3. Angkat ketan yang sudah setengah matang, siram dengan santan panas, biarkan santan meresap.<br>\r\n4. Kukus lagi ketan 20 menit atau sampai matang.<br>\r\n5. Isian ayam: tumis bumbu halus, tambahkan serai, daun salam, dan daun jeruk, tumis sampai harum. Masukkan air kaldu ayam, ayam suwir, garam, gula, dan santan instan, masak sampai air menyusut, angkat.<br>\r\n6. Siapkan daun pisang, jemur dan bersihkan, potong seukuran untuk membungkus lemper.<br>\r\n7. Ambil 2 lembar daun pisang, ambil 2 sdm ketan, ratakan.<br>\r\n8. Ambil 1 sdm isian ayam, tata di tengahnya, padatkan dan gulung lemper, sematkan tusuk gigi di bagian ujungnya.<br>\r\n9. Panggang lemper di teflon sampai harum dan daun agak mengering, lemper bakar ayam siap disajikan.</p>\r\n', 'Nico Izumi', 'lemper2.jpg', '2022-09-27 15:50:35');

-- --------------------------------------------------------

--
-- Table structure for table `challenge`
--

CREATE TABLE `challenge` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `deskripsi` text NOT NULL,
  `sk` text NOT NULL,
  `poster` varchar(256) NOT NULL,
  `tanggal` varchar(128) NOT NULL,
  `periode` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `challenge`
--

INSERT INTO `challenge` (`id`, `title`, `deskripsi`, `sk`, `poster`, `tanggal`, `periode`) VALUES
(1, 'Pinter Hits Challenge', '<p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, aut facere! Doloribus blanditiis illo pariatur quibusdam quis reiciendis culpa fugiat nisi eius assumenda dignissimos nemo ea, id hic neque aspernatur.</strong></p>\r\n\r\n<p> </p>\r\n', '<pre>\r\n    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cumque, assumenda? Quidem eveniet excepturi dolorem rerum. Facere explicabo quam temporibus,\r\n nihil esse eligendi nobis repellendus illo saepe nostrum eveniet voluptatem! Possimus dolorum tempore nesciunt doloremque ratione.\r\n Voluptatem repudiandae corporis incidunt consequatur quidem placeat, vitae laboriosam omnis suscipit eius optio ipsum sunt porro dolores rerum, \r\n\r\nAdipisci tenetur blanditiis officiis fugit nam quos debitis in, porro voluptate animi atque minus sequi!</pre>\r\n', 'IMG_20220710_024842_1872.jpg', '2022-09-27', '2022-11-26');

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
(2, 'Tape Ketan', '617d1e6f421041.jpg', '<p>Tape ketan merupakan&nbsp;<strong>salah satu produk makanan hasil fermentasi khas Indonesia yang terbuat dari beras ketan</strong>. Proses pembuatan tape ketan cukup mudah, sehingga banyak yang mengembangkan produk tersebut secara tradisional maupun modern.</p>\r\n'),
(5, 'Lemper', 'lemper1.jpg', '<p>Lemper adalah&nbsp;<strong>makanan ringan yang terbuat dari ketan, biasanya berisi abon atau cincangan daging ayam dan dibungkus dengan daun pisang</strong>.</p>\r\n');

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
(2, 5, 'lemper-bakar-isi-abon-foto-resep-utama.jpg', 'Lemper Bakar', '<p><strong>Langkah 1</strong></p>\r\n\r\n<p>Masak santan dan daun salam, daun pandan serta garam, lalu masukkan beras ketan, aron sampai susut santannya.</p>\r\n\r\n<p><strong>Langkah 2</strong></p>\r\n\r\n<p>Kukus ketan tersebut selama 30 menit, angkat. Lalu biarkan sampai hangat, ketan jangan terlalu dingin karna nanti susah dibentuk.Siapkan bahan lain serta perlengkapan seperti plastik untuk membentuk,daun dan lidi semat.</p>\r\n\r\n<p><strong>Langkah 3</strong></p>\r\n\r\n<p>Ambil ketan 1 sendok nasi, pipihkan diatas lembaran plastik, isi abon.</p>\r\n\r\n<p><strong>Langkah 4</strong></p>\r\n\r\n<p>Bentuk oval sehingga isian di dalam, padatkan, gulungkan di daun. Saya buat 2 lapis pembungkus layaknya lemper jaman dulu.</p>\r\n\r\n<p><strong>Langkah 5</strong></p>\r\n\r\n<p>Semat kedua ujung dengan lidi, lakukan sampai selesai.</p>\r\n\r\n<p><strong>Langkah 6</strong></p>\r\n\r\n<p>Bakar langsung diatas panggangan, sesekali dibalik agar rata matangnya, biarkan dingin dan potong kelebihan daun pembungkus sebelum disajikan.</p>\r\n\r\n<p> </p>\r\n');

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
(3, 2, 2),
(4, 1, 5),
(5, 2, 5),
(6, 1, 6),
(11, 1, 10),
(12, 1, 11),
(13, 1, 12),
(14, 1, 13);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `icon`) VALUES
(1, 'Dashboard', 'fas fa-fw fa-tachometer-alt'),
(2, 'Profile', 'fas fa-fw fa-user'),
(5, 'Product', 'fas fa- fa-clipboard-list'),
(6, 'Menu', 'fas fa-fw fa-folder'),
(9, 'Profile 1', 'fas fa-fw fa-newspaper'),
(11, 'Public', 'fas fa-fw fa-newspaper'),
(12, 'Survey', 'fas fa-fw fa-folder-open'),
(13, 'Challenge', 'fas fa-fw fa-fire');

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
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 1),
(2, 2, 'My Profile', 'admin/user', 1),
(3, 2, 'Edit Profile', 'admin/edit', 1),
(4, 5, 'Data Kategori Menu', 'admin/category', 1),
(5, 5, 'Data Variasi Menu', 'admin/variasi', 1),
(6, 6, 'Menu Management', 'menu', 1),
(7, 6, 'Sub Menu Management', 'menu/submenu', 1),
(9, 6, 'Access', 'menu/access', 1),
(12, 10, 'Article', 'pr/article', 1),
(13, 11, 'Article', 'pr/article', 1),
(14, 12, 'Laporan Survey', 'survey', 1),
(15, 13, 'Pinter Hits Challenge', 'challenge', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `challenge`
--
ALTER TABLE `challenge`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `challenge`
--
ALTER TABLE `challenge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_variasi_menu`
--
ALTER TABLE `tb_variasi_menu`
  MODIFY `id_variasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
