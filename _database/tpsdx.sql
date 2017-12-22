-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2017 at 10:39 AM
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
  `bdx_id` int(11) NOT NULL,
  `bdx_max` int(11) DEFAULT NULL,
  `bdx_min` int(11) DEFAULT NULL,
  `bdx_real` int(11) DEFAULT NULL,
  `bdx_exp` int(11) DEFAULT NULL,
  `bdx_gold` int(11) DEFAULT NULL,
  `bdx_gift` varchar(50) DEFAULT NULL,
  `bdx_sponsor` varchar(100) DEFAULT NULL,
  `bdx_end` datetime DEFAULT NULL,
  `bdx_power` char(1) NOT NULL,
  `bdx_req` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `betdx_engine`
--

INSERT INTO `betdx_engine` (`bdx_id`, `bdx_max`, `bdx_min`, `bdx_real`, `bdx_exp`, `bdx_gold`, `bdx_gift`, `bdx_sponsor`, `bdx_end`, `bdx_power`, `bdx_req`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `betdx_log`
--

CREATE TABLE `betdx_log` (
  `id_log` int(11) NOT NULL,
  `log_konten` varchar(300) DEFAULT NULL,
  `icon_konten` varchar(100) DEFAULT NULL,
  `ts_konten` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `betdx_player`
--

CREATE TABLE `betdx_player` (
  `username` varchar(20) NOT NULL,
  `bdx_bet` int(11) DEFAULT NULL,
  `bdx_rbet` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gadx_engine`
--

CREATE TABLE `gadx_engine` (
  `id_gadx` int(11) NOT NULL,
  `gadx_power` char(1) DEFAULT NULL,
  `gadx_fase` char(1) DEFAULT NULL,
  `gadx_end` datetime DEFAULT NULL,
  `gadx_req` varchar(10) DEFAULT NULL,
  `gadx_exp` int(11) DEFAULT NULL,
  `gadx_gold` int(11) DEFAULT NULL,
  `gadx_gift` varchar(100) DEFAULT NULL,
  `gadx_sponsor` varchar(100) DEFAULT NULL,
  `gadx_real` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gadx_engine`
--

INSERT INTO `gadx_engine` (`id_gadx`, `gadx_power`, `gadx_fase`, `gadx_end`, `gadx_req`, `gadx_exp`, `gadx_gold`, `gadx_gift`, `gadx_sponsor`, `gadx_real`) VALUES
(1, '1', '1', '2017-12-31 15:55:15', NULL, 100, 20, '1xx', 'asdasd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gadx_player`
--

CREATE TABLE `gadx_player` (
  `username` varchar(20) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gadx_player`
--

INSERT INTO `gadx_player` (`username`, `timestamp`) VALUES
('saijnawazaki', '2017-12-22 09:30:55');

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
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin', '2017-12-13 02:54:50', '2017-12-21 06:59:08', NULL),
('saijnawazaki', 'e1f1c9fec0579dfe4888b17e224e3fda', 'Julianto Chai', 'admin', '2017-12-22 02:29:34', '2017-12-22 06:26:45', 'd0ircv6ifq3qa7nsipd0edlom5');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna_detail`
--

CREATE TABLE `pengguna_detail` (
  `username` varchar(20) NOT NULL,
  `lineid` varchar(50) DEFAULT NULL,
  `nohp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna_detail`
--

INSERT INTO `pengguna_detail` (`username`, `lineid`, `nohp`, `email`, `pp`) VALUES
('admin', NULL, NULL, NULL, 'no_pp.png'),
('saijnawazaki', 'saijnawazaki', '081311111111', 'saijnawazaki@manastudioid.com', 'no_pp.png');

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
('admin', 1, 2),
('saijnawazaki', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `penghargaan`
--

CREATE TABLE `penghargaan` (
  `id_achi` char(26) NOT NULL,
  `achi_name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `achi_konten` varchar(200) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `betdx_engine`
--
ALTER TABLE `betdx_engine`
  ADD PRIMARY KEY (`bdx_id`);

--
-- Indexes for table `betdx_log`
--
ALTER TABLE `betdx_log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `betdx_player`
--
ALTER TABLE `betdx_player`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `gadx_engine`
--
ALTER TABLE `gadx_engine`
  ADD PRIMARY KEY (`id_gadx`);

--
-- Indexes for table `gadx_player`
--
ALTER TABLE `gadx_player`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pengguna_detail`
--
ALTER TABLE `pengguna_detail`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `lineid` (`lineid`),
  ADD UNIQUE KEY `nohp` (`nohp`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pengguna_permainan`
--
ALTER TABLE `pengguna_permainan`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `penghargaan`
--
ALTER TABLE `penghargaan`
  ADD PRIMARY KEY (`id_achi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `betdx_log`
--
ALTER TABLE `betdx_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
