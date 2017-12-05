-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2016 at 02:18 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(25) NOT NULL,
  `fandom` varchar(25) NOT NULL,
  `category` varchar(25) NOT NULL,
  `product_img_name` varchar(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `fandom`, `category`, `product_img_name`, `product_name`, `price`) VALUES
(1, 'got-cloth-1', 'got', 'clothing', 'got-cloth-1.jpg', '[T-shirt] The North Remembers', 500),
(2, 'got-cloth-2', 'got', 'clothing', 'got-cloth-2.jpg', '[T-shirt] King in the North', 500),
(3, 'got-cloth-3', 'got', 'clothing', 'got-cloth-3.jpg', '[T-shirt] Hodor', 500),
(4, 'got-cloth-4', 'got', 'clothing', 'got-cloth-4.jpg', 'Hoodie', 750),
(5, 'got-cloth-5', 'got', 'clothing', 'got-cloth-5.jpg', '[T-shirt] The Direwolves', 500),
(6, 'got-cloth-6', 'got', 'clothing', 'got-cloth-6.jpg', '[T-shirt] The Lannisters Send Their Regards', 500),
(7, 'got-acc-1', 'got', 'acc', 'got-acc-1.jpg', 'Targaryen Necklace', 350),
(8, 'got-acc-2', 'got', 'acc', 'got-acc-2.jpg', 'Direwolf Necklace', 350),
(9, 'got-acc-3', 'got', 'acc', 'got-acc-3.jpg', 'Stark Necklace', 350),
(10, 'got-acc-4', 'got', 'acc', 'got-acc-4.jpg', 'Armour Ring', 350);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
