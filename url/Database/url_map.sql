-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2019 at 07:26 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `url`
--

-- --------------------------------------------------------

--
-- Table structure for table `url_map`
--

CREATE TABLE `url_map` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `code` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `url_map`
--

INSERT INTO `url_map` (`id`, `url`, `code`, `created`) VALUES
(100000000, 'https://www.google.com', 'google1', '2018-07-22 12:42:23'),
(100000001, 'https://youtube.com', 'youtube', '2018-07-22 15:39:49'),
(100000002, 'https://www.youtube.com/watch?v=J8hzJxb0rpc&feature=youtu.be', '1njchu', '2018-07-22 15:45:26'),
(100000003, 'http://www.mayur.com', '1njchv', '2018-07-22 15:47:48'),
(100000004, 'https://facebook.com', '1njchw', '2018-07-22 16:03:12'),
(100000005, 'https://www.youtube.com/watch?v=AhgtoQIfuQ4&feature=youtu.be', '1njchx', '2018-07-22 16:03:34'),
(100000006, 'https://www.facebook.com', '1njchy', '2018-07-22 17:52:41'),
(100000007, 'https://www.youtube.com/watch?v=AhgtoQIfuQ4&feature=youtu.be/aa', '1njchz', '2018-07-22 17:59:17'),
(100000008, 'https://www.google.com/abs', '', '2018-07-22 18:10:45'),
(100000009, 'https://www.google.com/aaa', '1njci1', '2018-07-22 18:12:13'),
(100000010, 'https://www.google.com', 'goog', '2018-07-22 18:12:32'),
(100000011, 'https://www.google.com', 'goog1', '2018-07-22 18:13:05'),
(100000012, 'https://www.google.com', 'goog12', '2018-07-23 17:03:41'),
(100000013, 'https://github.com/ulixius9?tab=repositories', 'git', '2019-01-26 11:54:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `url_map`
--
ALTER TABLE `url_map`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `url_map`
--
ALTER TABLE `url_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000014;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
