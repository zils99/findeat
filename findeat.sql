-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2022 at 07:56 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findeat`
--

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `collection_id` int(11) NOT NULL,
  `collection_nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`collection_id`, `collection_nama`) VALUES
(2, 'kopi'),
(1, 'ramen'),
(3, 'western');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `lokasi_id` int(11) NOT NULL,
  `lokasi_tempat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`lokasi_id`, `lokasi_tempat`) VALUES
(6, 'braga'),
(5, 'none'),
(7, 'riau');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_gambar` varchar(255) NOT NULL,
  `restaurant_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_gambar`, `restaurant_name`) VALUES
(1, 'menu1.png', 'Ramen Ya!'),
(10, 'menu2.png', 'Ramen Ya!'),
(11, 'menu3.png', 'Ramen Ya!'),
(13, 'menu4.png', 'Ramen Ya!'),
(14, 'menu5.png', 'Ramen Ya!'),
(15, 'menu6.png', 'Ramen Ya!');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `reservasi_id` int(11) NOT NULL,
  `reservasi_tanggal` date NOT NULL,
  `reservasi_username` varchar(255) NOT NULL,
  `reservasi_seat` int(11) NOT NULL,
  `reservasi_status` varchar(255) NOT NULL,
  `reservasi_restaurant` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`reservasi_id`, `reservasi_tanggal`, `reservasi_username`, `reservasi_seat`, `reservasi_status`, `reservasi_restaurant`) VALUES
(2, '2022-06-01', 'pembeli1', 2, 'Waiting', 'Ramen Ya!');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurant_id` int(11) NOT NULL,
  `restaurant_name` varchar(255) NOT NULL,
  `restaurant_address` varchar(255) NOT NULL,
  `restaurant_jamoperasional` varchar(255) NOT NULL,
  `restaurant_harga` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `lokasi_tempat` varchar(255) NOT NULL,
  `collection_tipe` varchar(255) NOT NULL,
  `restaurant_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurant_id`, `restaurant_name`, `restaurant_address`, `restaurant_jamoperasional`, `restaurant_harga`, `user_email`, `lokasi_tempat`, `collection_tipe`, `restaurant_gambar`) VALUES
(3, 'Ramen Ya!', 'Paris Van Java, Blok H-21', '10.00 - 23.00', 'Rp 100.000 - Rp 200.000', 'penjual1@gmail.com', 'braga', 'ramen', 'detail_item.png');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `review_rating` int(11) NOT NULL,
  `review_name` varchar(255) NOT NULL,
  `review_restaurant` varchar(255) NOT NULL,
  `review_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_joindate` date NOT NULL,
  `user_gambar` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_password`, `user_email`, `user_joindate`, `user_gambar`, `user_role`) VALUES
(1, 'penjual1', '$2y$10$3hllfjS6esg72yYv0HF6bu62LF9xtiyafqbVPe7Uf.lOrFI7Oc3eW', 'penjual1@gmail.com', '2022-05-30', '', 'owner'),
(4, 'admin', '$2y$10$iIy3B/EihRlqMd.yhH3OLeCFNNgQN0zrbmVDp6.iyGqurQ0eT9.Ey', 'admin@gmail.com', '2022-05-30', '', 'admin'),
(5, 'pembeli1', '$2y$10$fNyBTlEgs5.4x0Tot04cJOGZ5yaDmwQUXg/nIqNwYoF2LjYhVRnOy', 'pembeli1@gmail.com', '2022-05-31', '', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`collection_id`),
  ADD KEY `collection_nama` (`collection_nama`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`lokasi_id`),
  ADD KEY `lokasi_tempat` (`lokasi_tempat`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `restaurant_name` (`restaurant_name`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`reservasi_id`),
  ADD UNIQUE KEY `reservasi_restaurant` (`reservasi_restaurant`),
  ADD KEY `reservasi_username` (`reservasi_username`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurant_id`),
  ADD KEY `user_email` (`user_email`),
  ADD KEY `restaurant_name` (`restaurant_name`),
  ADD KEY `lokasi_tempat` (`lokasi_tempat`),
  ADD KEY `collection_tipe` (`collection_tipe`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `review_restaurant` (`review_restaurant`),
  ADD KEY `review_name` (`review_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_email` (`user_email`),
  ADD KEY `user_nama` (`user_nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `collection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `lokasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `reservasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`restaurant_name`) REFERENCES `restaurant` (`restaurant_name`);

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`reservasi_restaurant`) REFERENCES `restaurant` (`restaurant_name`),
  ADD CONSTRAINT `reservasi_ibfk_2` FOREIGN KEY (`reservasi_username`) REFERENCES `user` (`user_nama`);

--
-- Constraints for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD CONSTRAINT `restaurant_ibfk_1` FOREIGN KEY (`user_email`) REFERENCES `user` (`user_email`),
  ADD CONSTRAINT `restaurant_ibfk_2` FOREIGN KEY (`lokasi_tempat`) REFERENCES `lokasi` (`lokasi_tempat`),
  ADD CONSTRAINT `restaurant_ibfk_3` FOREIGN KEY (`collection_tipe`) REFERENCES `collection` (`collection_nama`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`review_restaurant`) REFERENCES `restaurant` (`restaurant_name`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`review_name`) REFERENCES `user` (`user_nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
