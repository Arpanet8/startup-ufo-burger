-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 07:08 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_burger_ufo`
--

-- --------------------------------------------------------

--
-- Table structure for table `burger`
--

CREATE TABLE `burger` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `burger`
--

INSERT INTO `burger` (`id`, `name`, `data`) VALUES
(1, 'Start Up Ufo Burger', '<p>Start Up Ufo Burger adalah sebuah perusahaan Burger dengan bentuk burger yang unik menyerupai piringan UFO. Selain itu, ukuran UFO Burger ini lebih besar daripada ukuran yang biasanya. UFO Burger ini juga memiliki varian rasa yang beragam dan menggunakan daging pilihan terbaik.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `investasi`
--

CREATE TABLE `investasi` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `benefit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investasi`
--

INSERT INTO `investasi` (`id`, `name`, `price`, `benefit`) VALUES
(4, 'PAKET BASIC *Tanpa Gerobak', '11000000', '<p>✓ Bahan baku</p>\r\n\r\n<p>✓ Peralatan</p>\r\n\r\n<p>✓ Marketing Tools</p>\r\n\r\n<p>✓ Support Influencer &amp; Artis</p>\r\n\r\n<p>✓ Pendampingan Penuh &amp; Training Rutin</p>\r\n\r\n<p>✓ Iklan Facebook &amp; Instagram ADS</p>\r\n\r\n<p>✖ <del>Gerobak</del></p>\r\n\r\n<p>✖ <del>Freezer</del></p>\r\n'),
(5, 'PAKET STANDAR + Freezer', '12500000', '<p>✓ Bahan baku</p>\r\n\r\n<p>✓ Peralatan</p>\r\n\r\n<p>✓ Marketing Tools</p>\r\n\r\n<p>✓ Support Influencer &amp; Artis</p>\r\n\r\n<p>✓ Pendampingan Penuh &amp; Training Rutin</p>\r\n\r\n<p>✓ Iklan Facebook &amp; Instagram ADS</p>\r\n\r\n<p>✖ <del>Gerobak</del></p>\r\n\r\n<p>✓ Freezer</p>\r\n'),
(6, 'PAKET STANDAR + Gerobak', '13500000', '<p>✓ Bahan baku</p>\r\n\r\n<p>✓ Peralatan</p>\r\n\r\n<p>✓ Marketing Tools</p>\r\n\r\n<p>✓ Support Influencer &amp; Artis</p>\r\n\r\n<p>✓ Pendampingan Penuh &amp; Training Rutin</p>\r\n\r\n<p>✓ Iklan Facebook &amp; Instagram ADS</p>\r\n\r\n<p>✓ Gerobak</p>\r\n\r\n<p>✖ <del>Freezer</></p>\r\n'),
(7, 'PAKET PREMIUM + Gerobak + Freezer', '17500000', '<p>✓ Bahan baku</p>\r\n\r\n<p>✓ Peralatan</p>\r\n\r\n<p>✓ Marketing Tools</p>\r\n\r\n<p>✓ Support Influencer &amp; Artis</p>\r\n\r\n<p>✓ Pendampingan Penuh &amp; Training Rutin</p>\r\n\r\n<p>✓ Iklan Facebook &amp; Instagram ADS</p>\r\n\r\n<p>✓ Gerobak</p>\r\n\r\n<p>✓ Freezer</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `link_maps` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `lokasi`, `email`, `no_telp`, `link_maps`) VALUES
(1, 'Jl. Suwatio No. 13B, Teluk, Purwokerto Selatan, Banyumas, Jawa Tengah, Indonesia 53145', 'info@slcorp.co.id', 'info@slcorp.co.id', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63298.89825218988!2d109.27018514568064!3d-7.445201376198986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655c239e9a22a3%3A0xb01d5fbafc70227a!2sSambel%20Layah%20Corp!5e0!3m2!1sid!2sid!4v1652673914009!5m2!1sid!2sid');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `description`, `price`, `image`) VALUES
(6, 'Cheesesteak Burger', '<p>Berisi Daging Sapi Asli, Keju Cheddar, Bawang Karamel Dengan Bumbu Saus Asap BBQ.</p>\r\n', '23', '1658422042.jpg'),
(7, 'BBQ Chicken Burger', '<p>Berisi Daging Ayam Asap Asli, Keju Cheddar, Bawang Karamel Dengan Bumbu Saus Asap BBQ</p>\r\n', '20', '1658422081.jpg'),
(8, 'BBQ Beef Burger', '<p>Berisi Daging Sapi Asap A sli, Keju Cheddar, Bawang Karamel Dengan Bumbu Saus Asap BBQ</p>\r\n', '25', '1658422110.jpg'),
(9, 'Bulgogi Burger', '<p>Berisi Daging Sapi Yng Sudah Diasinkan, Keju Cheddar, Bawang Karamel Dengan Bumbu Saus Korea</p>\r\n', '25', '1658422136.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `percent` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `judul`, `isi`) VALUES
(1, 'TENTANG', '<p>SL CORP Indonesia merupakan perusahaan kuliner yang berdiri sejak 2013 di Purwokerto, Jawa Tengah. Saat memiliki hampir 1.000 jaringan dan cabang yang tersebar di pulau Jawa, Sumatra, Kalimantan dengan berbagai brand untuk berbagai segmen masyarakat. SL CORP Indonesia memiliki banyak cabang yang berfokus di bidang food and beverage, salah satunya ada Start Up UFO Burger.</p>\r\n\r\n<p>Start Up UFO Burger ini juga bagian dari SL CORP Indonesia dan di dukung oleh team management professional secara penuh.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `name`, `description`, `image`) VALUES
(4, '1658428694.PNG', '<p>start up ufo burger</p>', '2022/07/21 08:38:13'),
(5, '1658428723.PNG', '<p>start up ufo burger</p>\r\n', '2022/07/21 08:38:43'),
(6, '1658428742.PNG', '<p>start up ufo burger</p>\r\n', '2022/07/21 08:39:01'),
(7, '1658428763.PNG', '<p>start up ufo burger</p>\r\n', '2022/07/21 08:39:23'),
(8, '1658428783.PNG', '<p>start up ufo burger</p>\r\n', '2022/07/21 08:39:42'),
(9, '1658428792.PNG', '<p>start up ufo burger</p>\r\n', '2022/07/21 08:39:51'),
(10, '1658428802.PNG', '<p>start up ufo burger</p>\r\n', '2022/07/21 08:40:02'),
(11, '1658428817.PNG', '<p>start up ufo burger</p>\r\n', '2022/07/21 08:40:16'),
(12, '1658515755.PNG', '<p>Start Up UFO burger</p>\r\n', '2022/07/22 08:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(2, 'arpanet', 'falaharfani02@gmail.com', '5f16a101c8589f8eef6c5d8e4769344d'),
(8, 'Amanah nur azzahra', 'zahra11@gmail.com', '7ccc95c9d5f7df1e7defd1a5b024c8b3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `burger`
--
ALTER TABLE `burger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investasi`
--
ALTER TABLE `investasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `burger`
--
ALTER TABLE `burger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `investasi`
--
ALTER TABLE `investasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
