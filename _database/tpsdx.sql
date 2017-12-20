-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2017 at 10:26 AM
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
  `bdx_power` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `betdx_engine`
--

INSERT INTO `betdx_engine` (`bdx_id`, `bdx_max`, `bdx_min`, `bdx_real`, `bdx_exp`, `bdx_gold`, `bdx_gift`, `bdx_sponsor`, `bdx_end`, `bdx_power`) VALUES
(1, 10, 1, 2, 10, 20, 'TPS', 'TPS', '2017-12-19 16:11:45', '1');

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

--
-- Dumping data for table `betdx_log`
--

INSERT INTO `betdx_log` (`id_log`, `log_konten`, `icon_konten`, `ts_konten`) VALUES
(1, '<strong>Game dimulai</strong>. Sekarang Anda dapat memulai melakukan <strong>Bet</strong>. Tunggu sampai waktu habis, jika beruntung, nomor Anda dan nomor tebakan sama maka Andalah pemenangnya!', 'fa-power-off', '2017-12-19 08:40:56'),
(2, '<strong>Julianto Chai</strong> bergabung.', 'fa-sign-in', '2017-12-19 08:46:31'),
(3, '<strong>Julianto Chai</strong> meng-bet <strong>2</strong>.', 'fa-thumb-tack', '2017-12-19 08:46:31');

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
('bagasnero', 1, 0),
('esabagus', 4, 1),
('paw', 3, 6),
('saijnawazaki', 2, 4);

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
('bagasnero', '6512bd43d9caa6e02c990b0a82652dca', 'Bhagas Gustaf Van Nero', 'user', '2017-12-14 08:38:41', '2017-12-19 08:20:38', 'ctjsgiloebqdal6n88t078ck82'),
('esabagus', '6512bd43d9caa6e02c990b0a82652dca', 'Esa Bagus', 'user', '2017-12-14 08:41:38', '2017-12-15 06:37:02', NULL),
('jun', '6512bd43d9caa6e02c990b0a82652dca', 'Mashuda Mawardi Putra', 'user', '2017-12-14 08:41:07', '2017-12-15 06:37:12', NULL),
('paw', '6512bd43d9caa6e02c990b0a82652dca', 'Ahmad Fawzi Pratama', 'user', '2017-12-14 08:39:28', '2017-12-15 06:37:16', NULL),
('saijnawazaki', '6512bd43d9caa6e02c990b0a82652dca', 'Julianto Chai', 'admin', '2017-12-13 02:54:50', '2017-12-20 04:17:53', '0iialuhuekuvu65acrphb7g8g0');

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
('bagasnero', 'line2', '081322222222', 'bhagas@gmail.com', 'no_pp.png'),
('esabagus', 'line4', '081344444444', 'esabag@emailb.com', 'no_pp.png'),
('jun', 'linejun', '08122137462161261', 'jun@jun.com', 'no_pp.png'),
('paw', 'line3', '081333333333', 'paw@yahoo.com', 'no_pp.png'),
('saijnawazaki', 'line1', '081311111111', 'saijnawazaki@manastudioid.com', 'no_pp.png');

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
('bagasnero', 51, 41),
('esabagus', 23, 32423),
('jun', 123123, 34343),
('paw', 42, 32),
('saijnawazaki', 1070, 1120);

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
-- Dumping data for table `penghargaan`
--

INSERT INTO `penghargaan` (`id_achi`, `achi_name`, `username`, `achi_konten`, `timestamp`) VALUES
('MS/TPS/ACHI/20171212121212', 'Anti', 'saijnawazaki', 'MOST LOL', '2017-12-20 07:29:42'),
('MS/TPS/ACHI/20171220092415', 'BetDX Winner', 'saijnawazaki', 'BetDX Winner with bet 2', '2017-12-20 08:24:15'),
('MS/TPS/ACHI/20171220092509', 'BetDX Winner', 'saijnawazaki', 'BetDX Winner with bet 2', '2017-12-20 08:25:09'),
('MS/TPS/ACHI/20171220093141', 'BetDX Winner', 'saijnawazaki', 'BetDX Winner with bet 2 (MAX: 10 and MIN: 1) and got TPS from TPS also 10 EXP and 20 GOLD', '2017-12-20 08:31:41'),
('MS/TPS/ACHI/20171220093430', 'BetDX Winner', 'saijnawazaki', 'BetDX Winner with bet 2 (MAX: 10, MIN: 1, and PARTICIPLES: 4) and got TPS from TPS also 10 EXP and 20 GOLD', '2017-12-20 08:34:30'),
('MS/TPS/ACHI/20171220094122', 'BetDX Winner', 'saijnawazaki', 'BetDX Winner with bet 2 (MAX: 10, MIN: 1, and PARTICIPLES: 4) and got TPS from TPS also 10 EXP and 20 GOLD', '2017-12-20 08:41:22');

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
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
