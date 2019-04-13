-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 01, 2018 at 10:44 AM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` char(60) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `created_at`) VALUES
(1, 'Bindhu', 'votingadmin', '$2y$10$igfL.gnC0bEISYb9XoT9b.okrmpMrrIY4M8W.xLvQw4q1SOmQTmfy', '2018-01-31 10:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_registration`
--

DROP TABLE IF EXISTS `candidate_registration`;
CREATE TABLE IF NOT EXISTS `candidate_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_name` varchar(225) DEFAULT NULL,
  `party_name` varchar(225) DEFAULT NULL,
  `constitution_id` bigint(10) DEFAULT NULL,
  `serial_number` bigint(10) DEFAULT NULL,
  `candidate_image` varchar(50) DEFAULT NULL,
  `party_symbol` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_registration`
--

INSERT INTO `candidate_registration` (`id`, `candidate_name`, `party_name`, `constitution_id`, `serial_number`, `candidate_image`, `party_symbol`, `created_at`, `update_at`) VALUES
(1, 'Pawan Kalyan', 'Janaseena', 1873, 298, 'ovc_candidate_1873_candidate_image.jpg', 'ovc_candidate_1873_party_symbol.png', '2018-02-01 00:00:00', '2018-02-01 10:43:17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
