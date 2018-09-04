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
-- Database: `message`
--

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id_msg` bigint(20) NOT NULL,
  `sendmsg` varchar(10000) NOT NULL,
  `msg_date_time` datetime NOT NULL,
  `read_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id_msg`, `sendmsg`, `msg_date_time`, `read_status`) VALUES
(1, 'sorry sis', '2018-05-26 10:00:00', 1),
(2, 'Hello Sir,,,How Are You??', '2018-05-27 12:10:00', 1),
(3, 'This is suman from kncet', '2018-05-27 14:00:05', 1),
(4, 'I am from ECE dapartment.....', '2018-05-28 17:03:21', 1),
(5, 'I am currently pursuing final year of ECE', '2018-05-30 11:00:10', 1),
(6, 'I am currently doing projects in field of web designing', '2018-05-30 07:07:50', 1),
(7, 'I am currently doing projects in field of web designing and i am also interested in IOT', '2018-05-30 10:20:12', 1),
(8, 'Hello Sir,,,How Are You??', '2018-05-30 11:24:00', 1),
(9, 'unread status ', '2018-05-09 11:28:00', 1),
(27, 'Hell new messages', '2018-05-30 11:03:33', 1),
(28, 'This is suman from kncet', '2018-05-30 11:22:23', 1),
(29, 'This is suman from kncet', '2018-05-30 11:24:49', 1),
(30, 'This is suman from kncet', '2018-05-30 11:27:44', 1),
(31, 'Hell new messages', '2018-05-30 11:43:13', 1),
(32, 'Hai  this is suman', '2018-05-30 11:44:10', 1),
(33, 'helloooo', '2018-05-30 11:45:48', 1),
(34, 'helloooo', '2018-05-30 11:55:04', 1),
(35, 'Hai  this is suman', '2018-05-30 11:56:07', 1),
(36, 'Hai  this is suman', '2018-05-30 11:57:54', 1),
(37, 'This is suman from kncet', '2018-05-31 06:57:31', 1),
(38, 'This is suman from kncet', '2018-05-31 09:05:50', 1),
(42, 'Hell new messages', '2018-05-31 05:58:05', 1),
(43, 'dfdf', '2018-05-31 05:59:48', 1),
(44, '      hai hello this is suman                                          ', '2018-06-01 03:27:19', 1),
(45, '          Hellloo User welcome  to tamil engineer...                                     ', '2018-06-01 06:32:23', 1),
(46, '        Hello sir                                        ', '2018-06-01 06:33:15', 1),
(47, '                     Hello everyone                           ', '2018-06-01 08:58:42', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id_msg`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id_msg` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
