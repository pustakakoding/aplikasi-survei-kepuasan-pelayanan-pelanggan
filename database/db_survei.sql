-- phpMyAdmin SQL Dump
-- version 5.2.0-dev+20220102.e4dfea9a45
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2022 at 07:52 AM
-- Server version: 5.7.36
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_survei`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_survei`
--

CREATE TABLE `tbl_survei` (
  `nilai` enum('Sangat Puas','Puas','Kurang Puas','Tidak Puas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_survei`
--

INSERT INTO `tbl_survei` (`nilai`) VALUES
('Puas'),
('Sangat Puas'),
('Puas'),
('Puas'),
('Sangat Puas'),
('Puas'),
('Kurang Puas'),
('Sangat Puas'),
('Puas'),
('Kurang Puas'),
('Puas'),
('Puas'),
('Puas'),
('Puas'),
('Sangat Puas'),
('Puas'),
('Sangat Puas'),
('Tidak Puas'),
('Sangat Puas'),
('Puas'),
('Kurang Puas'),
('Sangat Puas'),
('Puas'),
('Puas'),
('Kurang Puas'),
('Kurang Puas'),
('Puas'),
('Puas'),
('Puas'),
('Puas'),
('Sangat Puas'),
('Sangat Puas'),
('Sangat Puas'),
('Sangat Puas'),
('Sangat Puas'),
('Sangat Puas'),
('Sangat Puas'),
('Sangat Puas'),
('Kurang Puas'),
('Kurang Puas'),
('Tidak Puas'),
('Tidak Puas');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
