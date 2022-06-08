-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 11:48 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id_cart` int(11) NOT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesan`
--

CREATE TABLE `tbl_pesan` (
  `pesan_id` int(11) NOT NULL,
  `prod_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `jenis_pemb` varchar(50) DEFAULT NULL,
  `cara_pickup` varchar(50) DEFAULT NULL,
  `tgl_pickup` varchar(50) DEFAULT NULL,
  `jam_pickup` varchar(50) DEFAULT NULL,
  `pemb_status` varchar(50) DEFAULT NULL,
  `pickup_status` varchar(50) DEFAULT NULL,
  `jmlh_brg` varchar(50) DEFAULT NULL,
  `subtotal` varchar(50) DEFAULT NULL,
  `pajak` varchar(50) DEFAULT NULL,
  `harga_total` varchar(50) DEFAULT NULL,
  `foto_pemb` varchar(50) DEFAULT NULL,
  `trans_date` datetime DEFAULT NULL,
  `upload_custom` varchar(100) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pesan`
--

INSERT INTO `tbl_pesan` (`pesan_id`, `prod_id`, `user_id`, `username`, `email`, `no_telp`, `jenis_pemb`, `cara_pickup`, `tgl_pickup`, `jam_pickup`, `pemb_status`, `pickup_status`, `jmlh_brg`, `subtotal`, `pajak`, `harga_total`, `foto_pemb`, `trans_date`, `upload_custom`, `notes`) VALUES
(1, 2, 2, 'user', 'user@gmail.com', '1234567891011', 'Shopee Pay', 'Ambil Pribadi', '2022-06-03', '01:21', 'Terverifikasi', 'Ready', '3', '750', '82.5', '832.5', 'images/nophoto.png', '2022-05-19 00:00:00', 'images/nophoto.png', NULL),
(2, 3, 2, 'user', 'user@gmail.com', '1234567891011', 'Shopee Pay', 'Ambil Pribadi', '2022-06-03', '01:21', 'Tidak Terverifikasi', 'Belum Siap', '4', '1000', '110', '1110', 'images/nophoto.png', '2022-05-19 00:00:00', 'images/nophoto.png', NULL),
(3, 2, 2, 'user', 'user@gmail.com', '1234567891011', 'Shopee Pay', 'Grab', '2022-05-27', '02:15', 'Tidak Terverifikasi', 'Belum Siap', '3', '750', '82.5', '832.5', 'images/nophoto.png', '2022-05-19 00:00:00', 'images/nophoto.png', NULL),
(4, 17, 2, 'user', 'user@gmail.com', '1234567891011', 'OVO', 'Grab', '2022-05-20', '02:21', 'Tidak Terverifikasi', 'Belum Siap', '4', '140000', '15400', '155400', 'images/nophoto.png', '2022-05-19 02:17:28', 'images/nophoto.png', NULL),
(5, 2, 2, 'user', 'user@gmail.com', '1234567891011', 'DANA', 'Ambil Pribadi', '2022-06-07', '13:56', 'Tidak Terverifikasi', 'Belum Siap', '4', '1000', '110', '1110', 'images/nophoto.png', '2022-05-24 13:52:03', 'upload_custom/5.png', 'ada 7 gambar 1 kertas ya pak'),
(6, 1, 3, ' reyhan', 'reyhan@gmail.com', ' 122362626632', 'Bank Transfer', 'Grab', '2022-05-27', '17:15', 'Tidak Terverifikasi', 'Belum Siap', '6', '1500', '165', '1665', 'upload_trans/6.png', '2022-05-24 14:12:10', 'upload_custom/6.png', '6 biji ya kak 1 kertas'),
(7, 2, 3, ' reyhan', 'reyhan@gmail.com', ' 122362626632', 'Bank Transfer', 'Grab', '2022-05-27', '17:15', 'Tidak Terverifikasi', 'Belum Siap', '4', '1000', '110', '1110', 'upload_trans/7.jpg', '2022-05-24 14:12:10', 'images/nophoto.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `prod_id` int(11) NOT NULL,
  `prod_category` varchar(100) DEFAULT NULL,
  `prod_name` varchar(100) DEFAULT NULL,
  `type_ppr` varchar(11) DEFAULT NULL,
  `uk_ppr` varchar(11) DEFAULT NULL,
  `stock` varchar(100) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `foto_produk` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`prod_id`, `prod_category`, `prod_name`, `type_ppr`, `uk_ppr`, `stock`, `price`, `foto_produk`) VALUES
(1, 'paper', 'brosur', 'matte', 'A4', '3990', '250', 'fotoproduk/produk1.jpg'),
(2, 'paper', 'brosur', 'matte', 'F4', '1475', '250', 'fotoproduk/produk2.jpg'),
(3, 'paper', 'brosur', 'glossy', 'A4', '1496', '250', 'fotoproduk/produk3.jpg'),
(4, 'paper', 'brosur', 'glossy', 'F4', '1500', '250', 'fotoproduk/produk4.jpg'),
(5, 'paper', 'undangan', 'matte', 'A4', '1000', '300', 'fotoproduk/produk5.jpg'),
(6, 'paper', 'undangan', 'matte', 'F4', '1000', '300', 'fotoproduk/produk6.png'),
(7, 'paper', 'undangan', 'glossy', 'A4', '1000', '300', 'fotoproduk/produk7.jpg'),
(8, 'paper', 'undangan', 'glossy', 'F4', '1000', '300', 'fotoproduk/produk8.jpg'),
(9, 'paper', 'postcard', 'matte', '4R', '2000', '1000', 'fotoproduk/produk9.png'),
(10, 'paper', 'postcard', 'glossy', '4R', '2000', '1000', 'fotoproduk/produk10.jpg'),
(11, 'paper', 'voucher', 'matte', '15 x 7 cm', '750', '300', 'fotoproduk/produk11.jpg'),
(12, 'paper', 'voucher', 'glossy', '15 x 7 cm', '750', '300', 'fotoproduk/produk12.png'),
(13, 'stickers', 'sticker chromo', 'glossy', 'diameter 5 ', '3000', '1000', 'fotoproduk/produk13.png'),
(14, 'stickers', 'sticker vinyl', 'glossy', '5 x 9 cm', '2996', '2000', 'fotoproduk/produk14.png'),
(15, 'large format', 'x banner', 'matte', '60 x 160 cm', '250', '70000', 'fotoproduk/produk15.png'),
(16, 'large format', 'x banner', 'glossy', '60 x 160 cm', '250', '70000', 'fotoproduk/produk16.png'),
(17, 'large format', 'spanduk', 'glossy', '80 x 200 cm', '196', '35000', 'fotoproduk/produk17.png'),
(18, 'large format', 'roll up banner', 'matte', '60 x 160 cm', '250', '110000', 'fotoproduk/produk18.png'),
(19, 'large format', 'roll up banner', 'glossy', '60 x 160 cm', '250', '110000', 'fotoproduk/produk19.png'),
(20, 'large format', 'flag banner', 'glossy', '300 x 100 c', '150', '1320000', 'fotoproduk/produk20.png'),
(21, 'product', 'packaging sleeve', 'matte', 'small', '496', '600', 'fotoproduk/produk21.jpg'),
(22, 'product', 'packaging sleeve', 'matte', 'medium', '500', '100', 'fotoproduk/produk22.jpg'),
(23, 'product', 'packaging sleeve', 'matte', 'large', '500', '1500', 'fotoproduk/produk23.jpg'),
(24, 'product', 'packaging sleeve', 'glossy', 'small', '500', '600', 'fotoproduk/produk24.jpg'),
(25, 'product', 'packaging sleeve', 'glossy', 'medium', '500', '1000', 'fotoproduk/produk25.jpg'),
(26, 'product', 'packaging sleeve', 'glossy', 'large', '497', '1500', 'fotoproduk/produk26.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `no_telp` varchar(150) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `pass`, `no_telp`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$yEDEU19QLg69Pe3oZq7MXODoFVtj.2UZjwE.j8encOxAVn2PIb4Z2', '1234567891011', 'admin'),
(2, 'user', 'user@gmail.com', '$2y$10$6Jsw69Ae.c3S3hYQGRnB7eOCFkL3165xIug7LyakiVHcw/a9qopeG', '1234567891011', 'user'),
(3, ' reyhan', 'reyhan@gmail.com', '$2y$10$B3GRJ8shcioATJ8KJjah1OF3QhXcMMVsv.KDJ0C4N12ht5/.l6CZO', ' 122362626632', 'user'),
(4, 'ADMIN2', 'admin2@gmail.com', '$2y$10$08RPuVJjzPmD0hToALGc4.q4tVTX7qguzpIRtanmwyzpS3YSbTV2a', '123412345678', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD PRIMARY KEY (`pesan_id`),
  ADD KEY `prod_id` (`prod_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  MODIFY `pesan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD CONSTRAINT `tbl_cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tbl_cart_ibfk_2` FOREIGN KEY (`prod_id`) REFERENCES `tbl_produk` (`prod_id`);

--
-- Constraints for table `tbl_pesan`
--
ALTER TABLE `tbl_pesan`
  ADD CONSTRAINT `tbl_pesan_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `tbl_produk` (`prod_id`),
  ADD CONSTRAINT `tbl_pesan_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
