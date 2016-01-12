-- phpMyAdmin SQL Dump
-- version 4.4.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2016 at 11:56 PM
-- Server version: 5.5.31
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amironline_feedly`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedly_items`
--

CREATE TABLE IF NOT EXISTS `feedly_items` (
  `id` int(11) unsigned NOT NULL COMMENT 'id++',
  `items_id` varchar(255) NOT NULL COMMENT 'کد منحصربفردي که خود فيدلي ميده',
  `keywords` varchar(511) DEFAULT NULL COMMENT 'تگ هاي مربوط به خبر',
  `originId` varchar(255) NOT NULL COMMENT 'آدرس اينترنتي خبر',
  `title` varchar(255) NOT NULL COMMENT 'عنوان',
  `published` datetime NOT NULL COMMENT 'زمان انتشار خبر',
  `content` text NOT NULL COMMENT 'متن خبر',
  `visual_url` varchar(255) DEFAULT NULL COMMENT 'تصاوير مربوط به خبر',
  `direction` enum('rtl','ltr') DEFAULT NULL COMMENT 'جهت نگارش خبر',
  `language` enum('fa','en','tr') DEFAULT NULL COMMENT 'زبان خبر'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='پست هاي فيلدي';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedly_items`
--
ALTER TABLE `feedly_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `items_id_2` (`items_id`),
  ADD KEY `title` (`title`),
  ADD KEY `items_id` (`items_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedly_items`
--
ALTER TABLE `feedly_items`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id++';
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
