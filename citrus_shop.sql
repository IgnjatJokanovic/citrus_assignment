-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 22, 2020 at 10:02 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citrus_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `text`, `approved`) VALUES
(1, 'Peter', 'dd@gmail.com', 'Lemons are the best', 1),
(2, 'Johny', 'test@gmail.com', 'This company is great', 1),
(3, 'Samantha', 'example@gmail.com', 'I like citrus', 1),
(4, 'Rocky', 'rocky@gmail.com', 'Please Approve me', 0),
(5, 'Rambo', 'rambo@gmail.com', 'What Rocky said', 0),
(6, 'Bond', '007@gmail.com', 'These coments are evil', 0);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `image`, `title`, `description`) VALUES
(1, '1.jpg', 'Item 1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, magni.'),
(2, '2.jpg', 'Item 2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, nobis.'),
(3, '3.jpg', 'Item 3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, nobis.'),
(4, '4.jpg', 'Item 4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, nobis.'),
(5, '5.jpg', 'Item 5', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, nobis.'),
(6, '6.jpg', 'Item 6', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, nobis.'),
(7, '7.jpg', 'Item 7', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, nobis.'),
(8, '8.jpg', 'Item 8', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, nobis.'),
(9, '9.jpg', 'Item 9', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, nobis.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
