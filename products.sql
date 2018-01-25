-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2016 at 06:21 PM
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
  `product_img_name` varchar(100) NOT NULL DEFAULT 'no_image.jpg',
  `product_name` varchar(100) NOT NULL,
  `price` int(5) NOT NULL,
  `product_qty` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `fandom`, `category`, `product_img_name`, `product_name`, `price`, `product_qty`) VALUES
(1, 'got-cloth-1', 'Game of Thrones', 'Clothing', 'got-cloth-1.jpg', '[T-shirt] The North Remembers', 500, 99),
(2, 'got-cloth-2', 'Game of Thrones', 'Clothing', 'got-cloth-2.jpg', '[T-shirt] King in the North', 500, 99),
(3, 'got-cloth-3', 'Game of Thrones', 'Clothing', 'got-cloth-3.jpg', '[T-shirt] Hodor', 500, 99),
(4, 'got-cloth-4', 'Game of Thrones', 'Clothing', 'got-cloth-4.jpg', 'Hoodie', 750, 99),
(5, 'got-cloth-5', 'Game of Thrones', 'Clothing', 'got-cloth-5.jpg', '[T-shirt] The Direwolves', 500, 99),
(6, 'got-cloth-6', 'Game of Thrones', 'Clothing', 'got-cloth-6.jpg', '[T-shirt] The Lannisters Send Their Regards', 500, 99),
(7, 'got-acc-1', 'Game of Thrones', 'Accessories', 'got-acc-1.jpg', 'Targaryen Necklace', 350, 99),
(8, 'got-acc-2', 'Game of Thrones', 'Accessories', 'got-acc-2.jpg', 'Direwolf Necklace', 350, 99),
(9, 'got-acc-3', 'Game of Thrones', 'Accessories', 'got-acc-3.jpg', 'Stark Necklace', 350, 99),
(10, 'got-acc-4', 'Game of Thrones', 'Accessories', 'got-acc-4.jpg', 'Armour Ring', 350, 99),
(11, 'got-sou-1', 'Game of Thrones', 'Souvenir', 'got-sou-1.jpg', 'Jon Snow Pendrive', 400, 99),
(12, 'got-sou-2', 'Game of Thrones', 'Souvenir', 'got-sou-2.jpg', 'Tyrion Pendrive', 400, 99),
(13, 'got-sou-3', 'Game of Thrones', 'Souvenir', 'got-sou-3.jpg', 'Dragon Pendrive', 400, 99),
(14, 'got-sou-4', 'Game of Thrones', 'Souvenir', 'got-sou-4.jpg', 'Arya Stark Pendrivee', 400, 99),
(15, 'got-sou-5', 'Game of Thrones', 'Souvenir', 'got-sou-5.jpg', 'Darnerys Pendrive', 400, 99),
(16, 'got-sou-6', 'Game of Thrones', 'Souvenir', 'got-sou-6.jpg', 'Winterfell Glass', 600, 99),
(17, 'got-sou-7', 'Game of Thrones', 'Souvenir', 'got-sou-7.jpg', 'Castle Black Glass', 600, 99),
(18, 'got-sou-8', 'Game of Thrones', 'Souvenir', 'got-sou-8.jpg', 'Winterfell Mug', 600, 99),
(19, 'hg-cloth-01', 'Hunger Games', 'Clothing', 'hg-cloth-01.jpg', '[T-shirt] The Girl on Fire', 500, 99),
(20, 'hg-cloth-02', 'Hunger Games', 'Clothing', 'hg-cloth-02.jpg', '[T-shirt] Real or Not Real', 500, 99),
(21, 'hg-cloth-03', 'Hunger Games', 'Clothing', 'hg-cloth-03.jpg', '[T-shirt] The Hanging Tree', 500, 99),
(22, 'hg-cloth-04', 'Hunger Games', 'Clothing', 'hg-cloth-04.jpg', '[T-shirt] May the odds be ever in your favor', 500, 99),
(23, 'hg-cloth-05', 'Hunger Games', 'Clothing', 'hg-cloth-05.jpg', '[T-shirt] Calm Down Bro', 500, 99),
(24, 'hg-cloth-06', 'Hunger Games', 'Clothing', 'hg-cloth-06.jpg', '[T-shirt]The 75th Annual Hunger Games', 500, 99),
(25, 'hg-acc-01', 'Hunger Games', 'Accessories', 'hg-acc-01.jpg', 'Mockingjay Bracelet', 350, 99),
(26, 'hg-acc-02', 'Hunger Games', 'Accessories', 'hg-acc-02.jpg', 'Real or Not Real? Pendant', 350, 99),
(27, 'hg-acc-03', 'Hunger Games', 'Accessories', 'hg-acc-03.jpg', 'Mockingjay Earrings', 350, 99),
(28, 'hg-acc-04', 'Hunger Games', 'Accessories', 'hg-acc-04.jpg', 'Katniss Arrow Earrings', 350, 99),
(29, 'hg-sou-01', 'Hunger Games', 'Souvenir', 'hg-sou-01.png', 'Hunger Games Mug', 250, 99),
(30, 'hg-sou-02', 'Hunger Games', 'Souvenir', 'hg-sou-02.jpg', 'Katniss Tote Bag', 500, 99),
(31, 'hg-sou-03', 'Hunger Games', 'Souvenir', 'hg-sou-03.jpg', 'Mockingjay Iphone Cover', 300, 99),
(32, 'hg-sou-04', 'Hunger Games', 'Souvenir', 'hg-sou-04.jpg', 'Girl on Fire Pillow Cover', 200, 99),
(33, 'hp-cloth-1', 'Harry Potter', 'Clothing', 'hp-cloth-1.jpg', '[T-shirt] Hogwarts Alumni', 500, 99),
(34, 'hp-cloth-2', 'Harry Potter', 'Clothing', 'hp-cloth-2.jpg', '[T-shirt] Hogwarts', 500, 99),
(35, 'hp-cloth-3', 'Harry Potter', 'Clothing', 'hp-cloth-3.jpg', '[T-shirt] Deathly Hollows', 500, 99),
(36, 'hp-cloth-4', 'Harry Potter', 'Clothing', 'hp-cloth-4.jpg', '[T-shirt] Gryffindor', 500, 99),
(37, 'hp-cloth-5', 'Harry Potter', 'Clothing', 'hp-cloth-5.jpg', '[T-shirt] Ravenclaw', 500, 99),
(38, 'hp-cloth-6', 'Harry Potter', 'Clothing', 'hp-cloth-6.jpg', '[T-shirt] Slytherin', 500, 99),
(39, 'hp-cloth-7', 'Harry Potter', 'Clothing', 'hp-cloth-7.jpg', '[T-shirt] Hufflepuff', 500, 99),
(40, 'hp-acc-1', 'Harry Potter', 'Accessories', 'hp-acc-1.jpg', 'Deathly Hollows Pendant', 350, 99),
(41, 'hp-acc-2', 'Harry Potter', 'Accessories', 'hp-acc-2.jpg', 'Time Turn Earings', 350, 99),
(42, 'hp-acc-3', 'Harry Potter', 'Accessories', 'hp-acc-3.jpg', 'Deathly Hollows Ring', 350, 99),
(43, 'hp-acc-7', 'Harry Potter', 'Accessories', 'hp-acc-7.jpg', 'Snitch Necklace', 350, 99),
(44, 'hp-acc-8', 'Harry Potter', 'Accessories', 'hp-acc-8.jpg', 'Snitch Earings', 350, 99),
(45, 'hp-acc-9', 'Harry Potter', 'Accessories', 'hp-acc-9.jpg', 'Bracelet', 350, 99),
(46, 'hp-sou-1', 'Harry Potter', 'Souvenir', 'hp-sou-1.jpg', 'Hogwarts Mug', 450, 99),
(47, 'hp-sou-1', 'Harry Potter', 'Souvenir', 'hp-sou-2.jpg', 'Marauders Map Mug ', 250, 99),
(48, 'hp-sou-1', 'Harry Potter', 'Souvenir', 'hp-sou-3.jpg', 'Harry Potter Mobile Case', 300, 99),
(49, 'hp-sou-1', 'Harry Potter', 'Souvenir', 'hp-sou-4.jpg', 'Marauders Map Mobile Case', 250, 99),
(50, 'hp-sou-1', 'Harry Potter', 'Souvenir', 'hp-sou-5.jpg', 'Deathly Hollows Mobile Case', 250, 99);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
