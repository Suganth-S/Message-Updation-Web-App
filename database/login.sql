-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 09:32 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6030875_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(200) NOT NULL,
  `userid` varchar(200) NOT NULL,
  `mobilenumber` bigint(20) NOT NULL,
  `mailid` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `cpassword` varchar(200) NOT NULL,
  `otp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `userid`, `mobilenumber`, `mailid`, `password`, `cpassword`, `otp`) VALUES
('Suganth S', 'suman', 9600742896, 'suganth@gmail.com', 'suman', 'suman', 0),
('suman', 'suganth', 0, '', '', '', 0),
('suman', '', 0, '', '', '', 0),
('suman', 'suganth', 1234567890, 'sfqdf@sdgdg.com', 'suman', 'suman', 0),
('', '', 0, '', '', '', 0),
('Suganth S', 'suman', 1234567890, 'hshjsa', 'suman', 'suman', 12345),
('suman', 'suman', 0, '', '', '', 0),
('suman', 'suman', 2345678901, 'jdsd', 'suman', 'suman', 232),
('suman', 'suman', 2345678901, 'jdsd', '', 'suman', 0),
('suman', 'suman6', 999, 'sum', '', 'sum', 0),
('suman', 'suman6', 999, 'sum', 'sum', 'sum', 0),
('suman', '966', 966, 'fjfjf', 'hit', 'hit', 0),
('Karthi', '666', 777, 'suman@gmail.com', 'karthi', 'karthi', 0),
('Suman', 'suman', 111, 'suman@gmail.com', '222', '111', 0),
('Suman', 'suman', 111, 'suman@gmail.com', '111', '111', 0),
('suman', 'suman@6', 9600742896, 'suman@gmail.com', 'suman', 'suman', 0),
('Suman', '1212', 9600742896, 'suman@gmail.com', '111', '111', 0),
('Suman', '1212', 9600742896, 'suman@gmail.com', '111', '111', 0),
('Suman', '1212', 9600742896, 'suman@gmail.com', '111', '111', 0),
('Suman', '1212', 9600742896, 'suman@gmail.com', '123456', '111', 0),
('Suman', '1212', 9600742896, 'suman@gmail.com', '111', '111', 0),
('ssdysag', 'sdsa', 323, 'qsqs', '323', '323', 0),
('ssdysag', 'sdsa', 323, 'qsqs', '323', '323', 0),
('suman', 'sun', 1234567890, 'rdfcg', '123', '123', 0),
('suman', 'sun', 1234567890, 'rdfcg', '123', '123', 0),
('', '', 0, '', '', '', 0),
('', '', 0, '', '', '', 0),
('', '', 0, '', '', '', 0),
('', '', 0, '', '', '', 0),
('', '', 0, '', '', '', 0),
('sdfds', 'fdsds', 0, 'df', '2323', '2323', 0),
('2323', 'sasas332323', 23232323, '2323', '32', '32', 0),
('Suman', 'suman@6', 9600742896, 'suman@gmail.com', 'suman', 'suman', 0),
('Suman', 'suman@6', 9600742896, 'suman@gmail.com', 'sdsd', 'suman', 0),
('Suman', 'suman6', 9600742896, 'suganth@gmail.com', 'king', 'king', 0),
('Suman', 'suman6', 9600742896, 'suganth@gmail.com', 'king', 'king', 0),
('Suman', 'suman6', 9600742896, 'suganth@gmail.com', 'king', 'king', 0),
('Suman', 'suman6', 9600742896, 'suganth@gmail.com', 'king', 'king', 0),
('Suganth S', 'suman', 9600742896, 'suman@gmail.com', 'king', 'king', 1234567),
('Suganth S', 'suman', 9600742896, 'suman@gmail.com', '6213', '6213', 0),
('', '', 0, '', '', '', 0),
('suma', 'suman66', 9600742896, 'suman@gmail.com', '111', '111', 0),
('suman', 'suman66', 9600742896, 'suman@gmail.com', 'suman', 'suman', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
