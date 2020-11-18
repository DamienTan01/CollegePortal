-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 08:59 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `coment`
--

CREATE TABLE `coment` (
  `id` int(11) NOT NULL,
  `schoolId` int(11) NOT NULL,
  `username` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `coment`
--

INSERT INTO `coment` (`id`, `schoolId`, `username`, `content`, `time`) VALUES
(1, 5, 'admin', '啊啊哈', '2020-11-01 04:20:13'),
(2, 5, 'admin', '啦啦啦', '2020-11-01 04:46:03'),
(3, 5, 'user', '45vhbj', '2020-11-01 07:50:50'),
(4, 12, 'user', 'abc', '2020-11-01 08:20:21'),
(5, 12, 'user', 'abcd', '2020-11-01 08:21:50'),
(6, 12, 'user', '123', '2020-11-01 08:49:48'),
(7, 12, 'user', 'hhhhhh', '2020-11-01 10:45:32');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `brief` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `comment` double NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `name`, `brief`, `number`, `comment`, `time`) VALUES
(12, 'University A', 'www', 1, 4, '2020-11-01 07:59:14'),
(13, 'University B', '', 2, 4.4, '2020-11-01 07:59:29'),
(14, 'University C', '', 1, 4.6, '2020-11-01 07:59:40'),
(15, 'University D', '', 1, 4.5, '2020-11-01 07:59:49'),
(16, 'University E', '', 1, 2.5, '2020-11-01 07:59:59'),
(19, 'wwoo', 'wee', 1, 2.3, '2020-11-02 10:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `time`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2020-10-29 08:47:33'),
(2, 'user', '202cb962ac59075b964b07152d234b70', '2020-11-01 07:49:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coment`
--
ALTER TABLE `coment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
