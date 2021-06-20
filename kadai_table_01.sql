-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2021 at 04:41 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kadai_php02`
--

-- --------------------------------------------------------

--
-- Table structure for table `kadai_table_01`
--

CREATE TABLE `kadai_table_01` (
  `id` int(12) NOT NULL,
  `name` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `review` int(12) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kadai_table_01`
--

INSERT INTO `kadai_table_01` (`id`, `name`, `url`, `review`, `comment`) VALUES
(1, 'マッキー', 'www.maki', 4, '意味不明'),
(2, 'マッキー', 'makii.eiga', 3, 'ストーリーが意味不明だった'),
(3, 'YESMAN', 'www.hhh', 4, '最高だった'),
(4, 'バーフバリ', 'http://baahubali-movie.com/sp/', 5, 'アクションがかなりよかった。'),
(7, 'きっとうまくいく', 'http:/www', 5, '最高傑作');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kadai_table_01`
--
ALTER TABLE `kadai_table_01`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kadai_table_01`
--
ALTER TABLE `kadai_table_01`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
