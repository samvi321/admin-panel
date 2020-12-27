-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 07:37 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `animal`
--

CREATE TABLE `animal` (
  `id` int(100) NOT NULL,
  `species` varchar(200) NOT NULL,
  `groups` varchar(100) NOT NULL,
  `streetORwild` varchar(10) NOT NULL,
  `adoption` varchar(10) NOT NULL,
  `description` varchar(255) NOT NULL,
  `aged` varchar(10) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `animal`
--

INSERT INTO `animal` (`id`, `species`, `groups`, `streetORwild`, `adoption`, `description`, `aged`, `image`) VALUES
(3, 'parrot', 'bird', 'wild', 'yes', 'parrot is green', 'no', 'camera.jpg'),
(5, 'monkey', 'mammal', 'wild', 'no', 'monkey eats banana', 'yes', 'watch.jpg'),
(6, 'lion', 'mammal', 'wild', 'no', 'lion is king', 'yes', 'shirt.jpg'),
(8, 'tiger', 'mammal', 'wild', 'no', 'tiger is dangerous', 'yes', 'camera.jpg'),
(14, 'cat', 'mammal', 'wild', 'yes', 'cat name is pussy', 'no', 'watch.jpg'),
(19, 'snake', 'reptile', 'wild', 'no', 'snakes are poisonous', 'yes', 'shirt.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animal`
--
ALTER TABLE `animal`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
