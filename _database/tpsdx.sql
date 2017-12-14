-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 10:31 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpsdx`
--

-- --------------------------------------------------------

--
-- Table structure for table `betdx_engine`
--

CREATE TABLE `betdx_engine` (
  `bdx_max` int(11) DEFAULT NULL,
  `bdx_min` int(11) DEFAULT NULL,
  `bdx_real` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `betdx_engine`
--

INSERT INTO `betdx_engine` (`bdx_max`, `bdx_min`, `bdx_real`) VALUES
(100, 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `betdx_player`
--

CREATE TABLE `betdx_player` (
  `username` varchar(20) NOT NULL,
  `bdx_bet` int(11) DEFAULT NULL,
  `bdx_rbet` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `betdx_player`
--

INSERT INTO `betdx_player` (`username`, `bdx_bet`, `bdx_rbet`) VALUES
('bagasnero', 1, NULL),
('esabagus', 10, NULL),
('paw', NULL, NULL),
('saijnawazaki', 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `type_account` varchar(10) NOT NULL,
  `live_account` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `up_account` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `session_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`, `fullname`, `type_account`, `live_account`, `up_account`, `session_id`) VALUES
('bagasnero', '6512bd43d9caa6e02c990b0a82652dca\r\n', 'Bhagas Gustaf Van Nero', 'user', '2017-12-14 08:38:41', '2017-12-14 09:31:20', NULL),
('esabagus', '6512bd43d9caa6e02c990b0a82652dca\r\n', 'Esa Bagus', 'user', '2017-12-14 08:41:38', '2017-12-14 09:31:20', NULL),
('jun', '6512bd43d9caa6e02c990b0a82652dca\r\n', 'Mashuda Mawardi Putra', 'user', '2017-12-14 08:41:07', '2017-12-14 09:31:20', NULL),
('paw', '6512bd43d9caa6e02c990b0a82652dca\r\n', 'Ahmad Fawzi Pratama', 'user', '2017-12-14 08:39:28', '2017-12-14 09:31:20', NULL),
('saijnawazaki', '6512bd43d9caa6e02c990b0a82652dca\r\n', 'Julianto Chai', 'admin', '2017-12-13 02:54:50', '2017-12-14 09:31:20', 'lp4f9c5803sopi9p7bsn8lid43');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna_permainan`
--

CREATE TABLE `pengguna_permainan` (
  `username` varchar(20) NOT NULL,
  `exp` int(10) UNSIGNED NOT NULL,
  `gold` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna_permainan`
--

INSERT INTO `pengguna_permainan` (`username`, `exp`, `gold`) VALUES
('bagasnero', 1, 1),
('esabagus', 3, 32423),
('jun', 123123, 34343),
('paw', 2, 2),
('saijnawazaki', 1000, 435345);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `betdx_player`
--
ALTER TABLE `betdx_player`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pengguna_permainan`
--
ALTER TABLE `pengguna_permainan`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
