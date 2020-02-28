-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 27, 2020 at 09:19 PM
-- Server version: 10.3.21-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sabbirsp_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(250) NOT NULL,
  `adminUser` varchar(250) NOT NULL,
  `adminEmail` varchar(250) NOT NULL,
  `adminPass` varchar(50) NOT NULL,
  `level` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminName`, `adminUser`, `adminEmail`, `adminPass`, `level`) VALUES
(1, 'sabbir ahmed sumon', 'admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brandId` int(11) NOT NULL,
  `brandName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brandId`, `brandName`) VALUES
(8, 'POLO'),
(9, 'Armani'),
(10, 'Tommy'),
(11, 'Lacoste'),
(12, 'Army'),
(13, 'Boss'),
(14, 'Lotto'),
(15, 'S. Oliver'),
(16, 'Fila'),
(17, 'Hilfiger'),
(18, 'Sapphire'),
(19, 'Superdry'),
(20, 'SuperHero'),
(21, 'Green World');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `sId` varchar(250) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(250) NOT NULL,
  `price` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cartId`, `sId`, `productId`, `productName`, `price`, `quantity`, `image`) VALUES
(1, 'jkkpf5g2ekbjea43e36ktmq6q2', 3, 'Glass', '600', '3', 'upload/7dc256dec3.jpg'),
(2, 'cdpm2tn30eosbkklj641bh7oc0', 8, 'step tshirt', '7', '1', 'upload/e62802260c.jpg'),
(16, 'uqpku9n7s7fq39uhivok5ruav1', 12, 'polo t shirt', '8', '', 'upload/9bb891f725.jpg'),
(17, 'uqpku9n7s7fq39uhivok5ruav1', 9, 'Formal Shirt full sleeve', '10', '', 'upload/3f1e5cfa7b.jpg'),
(18, 'uqpku9n7s7fq39uhivok5ruav1', 11, 'polo t shirt', '8', '1', 'upload/f2e37a5624.jpg'),
(19, 'qc1qn1hbi7o6atge3p086dd6c1', 8, 'step tshirt', '7', '', 'upload/6a2f1b1d5c.jpg'),
(21, 't9am0t4rag0i3riqvvf1qt5ml0', 9, 'Formal Shirt full sleeve', '10', '1', 'upload/3f1e5cfa7b.jpg'),
(24, '6ol9b4rutrj876v6ip1apoclj0', 12, 'polo t shirt', '8', '3', 'upload/9bb891f725.jpg'),
(25, '6ol9b4rutrj876v6ip1apoclj0', 10, 'polo t shirt', '7', '4', 'upload/303ce7fa1a.jpg'),
(26, '8iirn2j2c2hc6opjjal55kljde', 6, 'v-neck t-shirt', '8', '1', 'upload/c1b93caec1.jpg'),
(27, 'l867039h7ptvj7g8lbjsn2f2l7', 9, 'Formal Shirt full sleeve', '10', '4', 'upload/3f1e5cfa7b.jpg'),
(28, 'nnrlfa8gnnaj9qvi711ho4v503', 9, 'Formal Shirt full sleeve', '10', '1', 'upload/3f1e5cfa7b.jpg'),
(29, 'raq9rka3h2gsltteqamcmqlni5', 6, 'v-neck t-shirt', '8', '4', 'upload/c1b93caec1.jpg'),
(30, 'raq9rka3h2gsltteqamcmqlni5', 11, 'polo t shirt', '8', '1', 'upload/f2e37a5624.jpg'),
(31, '3b513164a0069e6d96be085ed5732487', 8, 'step tshirt', '7', '5', 'upload/6a2f1b1d5c.jpg'),
(32, '90315e724826a1e078045a8173c8f94f', 10, 'polo t shirt', '7', '3', 'upload/303ce7fa1a.jpg'),
(33, '2e5cf5dd86eac2a4bdecbb4424444192', 12, 'polo t shirt', '8', '4', 'upload/9bb891f725.jpg'),
(34, '60cce7a64ec97c2750a350231057d21c', 11, 'polo t shirt', '8', '1', 'upload/f2e37a5624.jpg'),
(35, 'b7bafd3f0ef35019d3cb7bdbaa2d382e', 8, 'step tshirt', '7', '4', 'upload/6a2f1b1d5c.jpg'),
(36, '4593c6937b43d9dd128bd95394e78367', 8, 'step tshirt', '7', '1', 'upload/6a2f1b1d5c.jpg'),
(37, '8635661c81ceecf5bf430b41543466f7', 8, 'step tshirt', '7', '1', 'upload/6a2f1b1d5c.jpg'),
(38, '8b963490afae91fc8b34c7358d3b13f6', 12, 'polo t shirt', '8', '1', 'upload/9bb891f725.jpg'),
(39, '5dc7401b69b8b39f4b35e093d83eee5f', 12, 'polo t shirt', '8', '1', 'upload/9bb891f725.jpg'),
(40, 'd97fa6bda51b60949b76887e76690da4', 12, 'polo t shirt', '8', '1', 'upload/9bb891f725.jpg'),
(41, '62ce2a26be1c53df368a4766ab0168d4', 6, 'v-neck t-shirt', '8', '1', 'upload/c1b93caec1.jpg'),
(42, 'c647e60ca7f9cfba6cda40d6a2bfc6fa', 11, 'polo t shirt', '8', '3', 'upload/f2e37a5624.jpg'),
(43, 'b7aea64a683d39cbdc7df17ccb44a017', 11, 'polo t shirt', '8', '1', 'upload/f2e37a5624.jpg'),
(44, '58d8c6514fb7d5eb7b354141dcc9438a', 6, 'v-neck t-shirt', '8', '1', 'upload/c1b93caec1.jpg'),
(45, '3c8d4003cdf5a5cdd9dfa4347b48ab90', 12, 'polo t shirt', '8', '2', 'upload/9bb891f725.jpg'),
(46, 'fae8dd6574a1626ea5369eadafc8bb4a', 6, 'v-neck t-shirt', '8', '1', 'upload/c1b93caec1.jpg'),
(47, '7419b01d7a94a3335fc32785b367e772', 9, 'Formal Shirt full sleeve', '10', '2', 'upload/3f1e5cfa7b.jpg'),
(48, 'bd27fcdf06245cbc7ce1791008c6950f', 9, 'Formal Shirt full sleeve', '10', '3', 'upload/3f1e5cfa7b.jpg'),
(49, '1f47b5b0ad7e80b94552418e74a4f604', 12, 'polo t shirt', '8', '4', 'upload/9bb891f725.jpg'),
(50, 'f3027a590cf362f13c0974a34d453e59', 12, 'polo t shirt', '8', '4', 'upload/9bb891f725.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catId` int(11) NOT NULL,
  `catName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`catId`, `catName`) VALUES
(8, 'T-Shirt'),
(9, 'T-shirt (v-neck)'),
(10, 'T-shirt (full-sleeve)'),
(11, 'Shirt (formal)'),
(12, 'Pant (jeans)'),
(13, 'Pant (rip)'),
(14, 'Pant (gabadin)'),
(15, 'Pant (3quartar)'),
(16, 'Babies cloth'),
(17, 'V-neck (solid)'),
(18, 'V-neck (step)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `zip` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `address`, `city`, `country`, `zip`, `phone`, `email`, `pass`) VALUES
(1, 'sabbir ahmed sumon', 'Lamakaji', 'Sylhet', 'Bangladesh', '3100', '01779453846', 'sabbir@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'ahmed', 'akhalia', 'Sylhet', 'Bangladesh', '1122', '01779452654', 'sabbir2@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'sabbir', 'sylhet', 'sylhet', 'BD', '3100', '16545611', 'sabbir9646@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `cmrId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `cmrId`, `productId`, `productName`, `price`, `quantity`, `image`, `date`, `status`) VALUES
(1, 1, 11, 'polo t shirt', 8, 3, 'upload/f2e37a5624.jpg', '2017-05-12 20:16:14', 2),
(2, 1, 8, 'step tshirt', 7, 2, 'upload/6a2f1b1d5c.jpg', '2017-05-12 20:16:14', 2),
(3, 1, 12, 'polo t shirt', 8, 2, 'upload/9bb891f725.jpg', '2017-05-12 20:16:14', 2),
(4, 1, 8, 'step tshirt', 7, 1, 'upload/6a2f1b1d5c.jpg', '2017-05-12 20:24:56', 0),
(5, 1, 9, 'Formal Shirt full sleeve', 10, 4, 'upload/3f1e5cfa7b.jpg', '2017-05-13 13:20:03', 0),
(6, 1, 9, 'Formal Shirt full sleeve', 10, 3, 'upload/3f1e5cfa7b.jpg', '2017-05-13 13:36:08', 0),
(7, 1, 8, 'step tshirt', 7, 5, 'upload/6a2f1b1d5c.jpg', '2017-06-09 02:38:03', 0),
(8, 0, 4, 'Formal Shirt', 15, 3, 'upload/e13b90d362.jpg', '2018-03-03 00:23:25', 0),
(9, 3, 10, 'polo t shirt', 7, 1, 'upload/303ce7fa1a.jpg', '2018-03-03 00:29:02', 0),
(10, 1, 7, ' Polo T-shirt ', 8, 1, 'upload/9492f92670.jpg', '2018-06-03 01:05:42', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(250) NOT NULL,
  `catId` int(11) NOT NULL,
  `brandId` int(11) NOT NULL,
  `body` varchar(5000) NOT NULL,
  `price` varchar(20) NOT NULL,
  `image` varchar(250) NOT NULL,
  `type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`productId`, `productName`, `catId`, `brandId`, `body`, `price`, `image`, `type`) VALUES
(4, 'Formal Shirt', 11, 14, '<p>details will be updated later.....</p>', '15', 'upload/e13b90d362.jpg', 0),
(5, 'v-neck full sleeve tshirt', 17, 14, '<p>details will be updated later..........</p>', '10', 'upload/4b48e57b0a.jpg', 1),
(6, 'v-neck t-shirt', 17, 14, '<p>details willl be updated later.....</p>', '8', 'upload/c1b93caec1.jpg', 0),
(7, ' Polo T-shirt ', 8, 8, '<p>details will be updated.....</p>', '8', 'upload/9492f92670.jpg', 0),
(8, 'step tshirt', 8, 11, '<p>details will be updated later....</p>', '7', 'upload/6a2f1b1d5c.jpg', 0),
(9, 'Formal Shirt full sleeve', 11, 9, '<p>details will be updated later..........</p>', '10', 'upload/3f1e5cfa7b.jpg', 0),
(10, 'polo t shirt', 8, 8, '<p>details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......</p>', '7', 'upload/303ce7fa1a.jpg', 0),
(11, 'polo t shirt', 8, 8, '<p>details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......</p>', '8', 'upload/f2e37a5624.jpg', 1),
(12, 'polo t shirt', 8, 8, '<p>details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......details will be updated later......</p>', '8', 'upload/9bb891f725.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wlist`
--

CREATE TABLE `tbl_wlist` (
  `id` int(11) NOT NULL,
  `cmrId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` float(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brandId`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catId`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `tbl_wlist`
--
ALTER TABLE `tbl_wlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brandId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_wlist`
--
ALTER TABLE `tbl_wlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
