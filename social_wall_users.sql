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
-- Table structure for table `social_wall_users`
--

CREATE TABLE `social_wall_users` (
  `id` int(100) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `profile_image` longtext,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_wall_users`
--

INSERT INTO `social_wall_users` (`id`, `user_id`, `profile_image`, `username`, `email`, `password`) VALUES
(1, 'user5d578d1d951590.55602753', 'https://images.pexels.com/photos/1037992/pexels-photo-1037992.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260', 'Dragonhost', 'admin@gmail.com', '$2y$10$VVyWFtliWqLXKh4XNrRwfeTvGP7Ox7pIN.MGgynSAmIf5AYCX7hO6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `social_wall_users`
--
ALTER TABLE `social_wall_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `social_wall_users`
--
ALTER TABLE `social_wall_users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
