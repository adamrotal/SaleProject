-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2016 at 09:48 AM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `liked`
--

CREATE TABLE `liked` (
  `id` int(11) NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idProduk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `idPenjual` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `tanggalDiTambah` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `idPenjual`, `name`, `description`, `price`, `gambar`, `tanggalDiTambah`) VALUES
(1, 4, 'Macbook Pro Retina Display', 'Dijual macbook pro retina display 2015.\r\n\r\nSpec :\r\nIntel core i5\r\nRAM 8GB\r\n256 SSD\r\nCC 6\r\n\r\nFull set!', 15000000, 'macbook_pro.jpg', '2016-09-26'),
(3, 4, 'Iphone 5s Gold 32GB', 'Jual Iphone 5s warna Gold pemakaian 1 tahun\r\n\r\nSpec :\r\nRAM 1GB\r\nMemori 32GB\r\nwarna Gold\r\nno lecet, mulus.\r\nspek lengkap cek gsmarena gan\r\n\r\nfull set.', 3500000, 'iphone_5s.jpg', '2016-09-26'),
(4, 4, 'Batik Turoquoise full set', 'jual batik handmade turquoise.\r\n\r\nSize bisa menyesuaikan badan anda. jahitan mulus. ', 300000, 'batik_turquoise.jpg', '2016-09-26');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `idProduk` int(11) DEFAULT NULL,
  `idPembeli` int(11) DEFAULT NULL,
  `namaPembeli` varchar(50) DEFAULT NULL,
  `fullAddress` varchar(250) DEFAULT NULL,
  `postalCode` varchar(10) DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL,
  `creditCard` varchar(30) DEFAULT NULL,
  `codeVerification` varchar(10) DEFAULT NULL,
  `tanggalDiBeli` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullName` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `fullAddress` varchar(250) DEFAULT NULL,
  `postalCode` varchar(10) DEFAULT NULL,
  `phoneNumber` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullName`, `username`, `email`, `password`, `fullAddress`, `postalCode`, `phoneNumber`) VALUES
(1, 'Ahmad Fajar Prasetiyo', 'fajar', 'ahmad.fajar@gmail.com', '12345678', 'Jl. Argowayang no 31 Pare Kediri Jawa Timur', '43211', '085312843102'),
(2, 'Adam Rotal', 'adamrotal', 'adamrotal@gmail.com', '12345678', 'Jl. Raya No 14 Ngadiluwih Kediri', '64171', '085815072108'),
(3, 'Dandu Satyanuraga', 'dandu', 'dandu@gmail.com', '12345678', 'Jl. MT. Haryono No 10 Ungaran', '50511', '081390979890'),
(4, 'Dea Putri Pamungkas', 'deapamungkas', 'deapamungkas@gmail.com', '12345678', 'Jl. Raya No.14 Ngadiluwih Kab. Kediri', '64171', '085815072108');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `liked`
--
ALTER TABLE `liked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `liked`
--
ALTER TABLE `liked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
