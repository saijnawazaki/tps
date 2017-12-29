-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2017 at 10:00 AM
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
  `session_id` varchar(100) DEFAULT NULL,
  `id_pk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`, `fullname`, `type_account`, `live_account`, `up_account`, `session_id`, `id_pk`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin', '2017-12-13 02:54:50', '2017-12-21 06:59:08', NULL, NULL),
('ayano', 'e1f1c9fec0579dfe4888b17e224e3fda', 'Ayano Tateyama', 'user', '2017-12-29 07:08:46', '2017-12-29 07:13:30', '6n3ruo650h6j3vhr28t778nad7', NULL),
('saijnawazaki', 'e1f1c9fec0579dfe4888b17e224e3fda', 'Julianto Chai', 'admin', '2017-12-22 02:29:34', '2017-12-29 06:42:08', 's33urvjt22vccpeo9sch6lnll6', 1);

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
('ayano', NULL, NULL, NULL, 'no_pp.png'),
('saijnawazaki', 'saijnawazaki', '081311111111', 'saijnawazaki@manastudioid.com', 'no_pp.png');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna_komunitas`
--

CREATE TABLE `pengguna_komunitas` (
  `id_pk` int(11) NOT NULL,
  `fullname` varchar(20) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `birthplace` varchar(10) DEFAULT NULL,
  `bloodtype` varchar(2) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna_komunitas`
--

INSERT INTO `pengguna_komunitas` (`id_pk`, `fullname`, `gender`, `birthday`, `birthplace`, `bloodtype`, `place`) VALUES
(1, 'Julianto Cha1i', 'm', '1995-01-01', 'id-skw', 'b', 'id-jkt');

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
('ayano', 0, 0),
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

-- --------------------------------------------------------

--
-- Table structure for table `wibumine_battlefield`
--

CREATE TABLE `wibumine_battlefield` (
  `no` int(11) NOT NULL,
  `username` varchar(20) DEFAULT '0',
  `force_mine` char(1) DEFAULT '0',
  `dmg_mine` int(11) DEFAULT '0',
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wibumine_battlefield`
--

INSERT INTO `wibumine_battlefield` (`no`, `username`, `force_mine`, `dmg_mine`, `timestamp`) VALUES
(1, NULL, NULL, NULL, '2017-12-29 08:48:45'),
(2, 'saijnawazaki', 'g', 31, '2017-12-29 04:19:56'),
(3, NULL, NULL, NULL, '2017-12-29 04:19:53'),
(4, NULL, NULL, NULL, '2017-12-29 04:26:19'),
(5, 'saijnawazaki', 'k', 80, '2017-12-29 06:28:06'),
(6, 'saijnawazaki', 'b', 78, '2017-12-29 02:00:22'),
(7, 'saijnawazaki', 'g', 7, '2017-12-29 03:19:08'),
(8, 'saijnawazaki', 'b', 86, '2017-12-29 02:56:46'),
(9, 'saijnawazaki', 'b', 29, '2017-12-29 03:20:28'),
(10, NULL, NULL, NULL, '2017-12-29 06:27:59'),
(11, NULL, NULL, NULL, '2017-12-29 06:23:44'),
(12, 'saijnawazaki', 'b', 33, '2017-12-29 03:20:08'),
(13, 'saijnawazaki', 'b', 38, '2017-12-29 03:22:50'),
(14, 'saijnawazaki', 'b', 38, '2017-12-29 03:20:37'),
(15, 'saijnawazaki', 'b', 82, '2017-12-29 03:14:39'),
(16, NULL, NULL, NULL, '2017-12-29 08:56:46'),
(17, 'saijnawazaki', 'b', 39, '2017-12-29 03:14:22'),
(18, 'saijnawazaki', 'b', 84, '2017-12-29 03:10:47'),
(19, 'saijnawazaki', 'b', 47, '2017-12-29 02:46:46'),
(20, 'saijnawazaki', 'g', 26, '2017-12-29 02:00:31'),
(21, 'saijnawazaki', 'g', 46, '2017-12-29 03:10:34'),
(22, 'saijnawazaki', 'b', 92, '2017-12-29 03:14:47'),
(23, NULL, NULL, NULL, '2017-12-29 06:29:47'),
(24, 'saijnawazaki', 'b', 26, '2017-12-29 03:17:25'),
(25, 'saijnawazaki', 'g', 39, '2017-12-29 03:22:34'),
(26, 'saijnawazaki', 'g', 40, '2017-12-29 03:19:57'),
(27, 'saijnawazaki', 'g', 0, '2017-12-29 03:21:56'),
(28, NULL, NULL, NULL, '2017-12-29 08:57:06'),
(29, NULL, NULL, NULL, '2017-12-29 06:28:01'),
(30, 'saijnawazaki', 'b', 7, '2017-12-29 03:20:12'),
(31, NULL, NULL, NULL, '2017-12-28 06:50:48'),
(32, 'saijnawazaki', 'b', 32, '2017-12-29 02:55:53'),
(33, NULL, NULL, NULL, '2017-12-29 04:19:58'),
(34, NULL, NULL, NULL, '2017-12-29 04:19:59'),
(35, 'saijnawazaki', 'g', 26, '2017-12-29 02:04:12'),
(36, 'saijnawazaki', 'b', 30, '2017-12-29 03:23:03'),
(37, NULL, NULL, NULL, '2017-12-28 06:50:48'),
(38, NULL, NULL, NULL, '2017-12-28 06:50:48'),
(39, NULL, NULL, NULL, '2017-12-28 06:50:48'),
(40, NULL, NULL, NULL, '2017-12-28 06:50:48'),
(41, NULL, NULL, NULL, '2017-12-28 06:50:48'),
(42, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(43, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(44, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(45, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(46, NULL, NULL, NULL, '2017-12-29 03:56:46'),
(47, NULL, NULL, NULL, '2017-12-29 06:23:41'),
(48, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(49, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(50, 'saijnawazaki', 'g', 82, '2017-12-29 03:24:27'),
(51, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(52, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(53, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(54, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(55, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(56, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(57, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(58, 'ayano', 'b', 83, '2017-12-29 08:57:10'),
(59, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(60, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(61, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(62, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(63, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(64, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(65, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(66, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(67, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(68, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(69, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(70, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(71, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(72, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(73, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(74, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(75, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(76, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(77, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(78, NULL, NULL, NULL, '2017-12-28 06:50:49'),
(79, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(80, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(81, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(82, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(83, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(84, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(85, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(86, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(87, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(88, 'ayano', 'b', 3, '2017-12-29 07:14:09'),
(89, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(90, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(91, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(92, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(93, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(94, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(95, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(96, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(97, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(98, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(99, NULL, NULL, NULL, '2017-12-28 06:50:50'),
(100, 'saijnawazaki', 'g', 42, '2017-12-29 03:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `wibumine_log`
--

CREATE TABLE `wibumine_log` (
  `id_log` int(11) NOT NULL,
  `log_konten` varchar(300) DEFAULT NULL,
  `icon_konten` varchar(100) DEFAULT NULL,
  `ts_konten` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wibumine_log`
--

INSERT INTO `wibumine_log` (`id_log`, `log_konten`, `icon_konten`, `ts_konten`) VALUES
(1, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 02:46:46'),
(2, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 02:47:33'),
(3, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 02:52:38'),
(4, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 02:55:53'),
(5, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 02:56:23'),
(6, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 02:56:46'),
(7, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:09:50'),
(8, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:10:34'),
(9, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:10:47'),
(10, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:12:24'),
(11, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:14:22'),
(12, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:14:39'),
(13, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:14:47'),
(14, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:14:54'),
(15, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:17:25'),
(16, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:19:08'),
(17, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:19:57'),
(18, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:20:09'),
(19, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:20:12'),
(20, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:20:29'),
(21, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:20:38'),
(22, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:21:55'),
(23, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:21:56'),
(24, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:22:34'),
(25, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:22:50'),
(26, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:23:03'),
(27, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:23:46'),
(28, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:24:27'),
(29, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:24:51'),
(30, 'Julianto Chai melepaskan mine no 58', 'fa-thumb-tack', '2017-12-29 03:55:28'),
(31, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 03:56:19'),
(32, 'Julianto Chai melepaskan mine no 46', 'fa-thumb-tack', '2017-12-29 03:56:46'),
(33, 'Julianto Chai melepaskan mine no 3', 'fa-thumb-tack', '2017-12-29 04:04:46'),
(34, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 04:04:51'),
(35, 'Julianto Chai melepaskan mine no 2', 'fa-thumb-tack', '2017-12-29 04:19:43'),
(36, 'Julianto Chai melepaskan mine no 3', 'fa-thumb-tack', '2017-12-29 04:19:53'),
(37, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 04:19:56'),
(38, 'Julianto Chai melepaskan mine no 33', 'fa-thumb-tack', '2017-12-29 04:19:58'),
(39, 'Julianto Chai melepaskan mine no 34', 'fa-thumb-tack', '2017-12-29 04:19:59'),
(40, 'Julianto Chai melepaskan mine no 4', 'fa-thumb-tack', '2017-12-29 04:26:19'),
(41, 'Julianto Chai melepaskan mine no 47', 'fa-thumb-tack', '2017-12-29 06:23:41'),
(42, 'Julianto Chai melepaskan mine no 11', 'fa-thumb-tack', '2017-12-29 06:23:44'),
(43, 'Julianto Chai melepaskan mine no 5', 'fa-thumb-tack', '2017-12-29 06:26:39'),
(44, 'Julianto Chai melepaskan mine no 10', 'fa-thumb-tack', '2017-12-29 06:27:59'),
(45, 'Julianto Chai melepaskan mine no 29', 'fa-thumb-tack', '2017-12-29 06:28:01'),
(46, 'Julianto Chai menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 06:28:06'),
(47, 'Julianto Chai melepaskan mine no 23', 'fa-thumb-tack', '2017-12-29 06:29:47'),
(48, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 07:14:09'),
(49, 'Ayano Tateyama(Kertas) kalah melawan (). Mine no 1 dibersihkan', 'fa-thumb-tack', '2017-12-29 07:26:52'),
(50, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 07:26:56'),
(51, 'Ayano Tateyama(Gunting) kalah melawan (). Mine no 1 dibersihkan', 'fa-thumb-tack', '2017-12-29 07:29:12'),
(52, 'Ayano Tateyama(Gunting) kalah melawan (). Mine no 1 dibersihkan', 'fa-thumb-tack', '2017-12-29 07:31:00'),
(53, 'Ayano Tateyama(Batu) kalah melawan (). Mine no 1 dibersihkan', 'fa-thumb-tack', '2017-12-29 07:31:20'),
(54, 'Ayano Tateyama(Batu) kalah melawan (). Mine no 1 dibersihkan', 'fa-thumb-tack', '2017-12-29 07:40:27'),
(55, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 07:41:59'),
(56, 'Ayano Tateyama(Kertas) kalah melawan (). Mine no 1 dibersihkan', 'fa-thumb-tack', '2017-12-29 07:42:19'),
(57, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 07:42:44'),
(58, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 07:49:30'),
(59, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 07:56:53'),
(60, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 07:57:46'),
(61, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 07:59:37'),
(62, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:01:05'),
(63, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:01:36'),
(64, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:02:04'),
(65, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:02:14'),
(66, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:02:28'),
(67, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:03:23'),
(68, 'Ayano Tateyama melepaskan mine no 1', 'fa-thumb-tack', '2017-12-29 08:03:48'),
(69, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:03:51'),
(70, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:04:06'),
(71, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:05:29'),
(72, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:05:47'),
(73, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:06:06'),
(74, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:07:00'),
(75, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:07:28'),
(76, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:08:19'),
(77, 'Ayano Tateyama [Batu]', 'fa-thumb-tack', '2017-12-29 08:08:27'),
(78, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:18:11'),
(79, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:19:06'),
(80, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:19:32'),
(81, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:21:43'),
(82, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:22:04'),
(83, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:22:56'),
(84, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:23:51'),
(85, 'Ayano Tateyama melepaskan mine no 1', 'fa-thumb-tack', '2017-12-29 08:24:02'),
(86, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:24:04'),
(87, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:25:44'),
(88, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:26:34'),
(89, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:26:55'),
(90, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:28:23'),
(91, 'Ayano Tateyama(Batu) imbang melawan Julianto Chai(Batu). Mine no 1 dibersihkan', 'fa-thumb-tack', '2017-12-29 08:28:33'),
(92, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:29:10'),
(93, 'Ayano Tateyama (Batu) kalah melawan Julianto Chai(Kertas). Mine no 1 dibersihkan', 'fa-thumb-tack', '2017-12-29 08:35:46'),
(94, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:35:50'),
(95, 'Ayano Tateyama (Kertas) kalah melawan Julianto Chai(Gunting). Mine no 1 dibersihkan', 'fa-thumb-tack', '2017-12-29 08:36:25'),
(96, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:36:39'),
(97, 'Ayano Tateyama (Gunting) kalah melawan Julianto Chai(Batu). Mine no 1 dibersihkan', 'fa-thumb-tack', '2017-12-29 08:36:50'),
(98, 'Ayano Tateyama (Batu) menang melawan Julianto Chai(Gunting). Mine no 1 dibersihkan', 'fa-thumb-tack', '2017-12-29 08:37:21'),
(99, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:37:37'),
(100, 'Ayano Tateyama (Batu) menang melawan Julianto Chai(Gunting). Mine no 1 dibersihkan', 'fa-thumb-tack', '2017-12-29 08:37:54'),
(101, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:48:28'),
(102, 'Ayano Tateyama (Batu) menang melawan Julianto Chai(Gunting). Julianto Chai menerima 39 Damage dan 1 Score. Ayano Tateyama mendapatkan 15 Score. Mine no 1 dibersihkan', 'fa-thumb-tack', '2017-12-29 08:48:45'),
(103, 'Ayano Tateyama (Batu) imbang melawan Julianto Chai(Batu). Ayano Tateyama dan Julianto Chai mendapatkan 1 Score. Mine no 16 dibersihkan', 'fa-thumb-tack', '2017-12-29 08:56:46'),
(104, 'Ayano Tateyama (Batu) imbang melawan Julianto Chai(Batu). Ayano Tateyama dan Julianto Chai mendapatkan 1 Score. Mine no 28 dibersihkan', 'fa-thumb-tack', '2017-12-29 08:57:06'),
(105, 'Ayano Tateyama menklaim sebuah mine', 'fa-thumb-tack', '2017-12-29 08:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `wibumine_player`
--

CREATE TABLE `wibumine_player` (
  `username` varchar(20) NOT NULL,
  `hp` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wibumine_player`
--

INSERT INTO `wibumine_player` (`username`, `hp`, `score`) VALUES
('ayano', 100, 110),
('saijnawazaki', 61, 110);

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
-- Indexes for table `pengguna_komunitas`
--
ALTER TABLE `pengguna_komunitas`
  ADD PRIMARY KEY (`id_pk`);

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
-- Indexes for table `wibumine_battlefield`
--
ALTER TABLE `wibumine_battlefield`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `wibumine_log`
--
ALTER TABLE `wibumine_log`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `wibumine_player`
--
ALTER TABLE `wibumine_player`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `betdx_log`
--
ALTER TABLE `betdx_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengguna_komunitas`
--
ALTER TABLE `pengguna_komunitas`
  MODIFY `id_pk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wibumine_log`
--
ALTER TABLE `wibumine_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
