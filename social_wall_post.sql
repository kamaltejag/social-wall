-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2019 at 07:24 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_wall`
--

-- --------------------------------------------------------

--
-- Table structure for table `social_wall_post`
--

CREATE TABLE `social_wall_post` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `text` longtext NOT NULL,
  `video` longtext NOT NULL,
  `image` longtext NOT NULL,
  `link` longtext NOT NULL,
  `link_description` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_wall_post`
--

INSERT INTO `social_wall_post` (`id`, `user_id`, `username`, `text`, `video`, `image`, `link`, `link_description`, `date`) VALUES
(1, 'user5d578d1d951590.55602753', 'Dragonhost', 'This is just some dummy text being typed here for the sake of testing the working mechanism of this website.', '', '', '', NULL, '2019-08-17 10:47:33'),
(2, 'user5d578d1d951590.55602753', 'Dragonhost', '', '', 'https://images.pexels.com/photos/1054289/pexels-photo-1054289.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', '', NULL, '2019-08-17 10:48:10'),
(3, 'user5d578d1d951590.55602753', 'Dragonhost', '', '', '', 'https://stackoverflow.com/', 'This is the best website for programmers to search for their queries.', '2019-08-17 10:49:32'),
(4, 'user5d578d1d951590.55602753', 'Dragonhost', '', 'IQL73W5R1-E', '', '', NULL, '2019-08-17 10:50:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `social_wall_post`
--
ALTER TABLE `social_wall_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `social_wall_post`
--
ALTER TABLE `social_wall_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
