-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql313.888webhost.com
-- Generation Time: Feb 12, 2018 at 11:20 AM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `888we_21419398_abhinayraj`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
-- Creation: Jan 16, 2018 at 05:21 PM
-- Last update: Jan 18, 2018 at 09:27 PM
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phonenumber` bigint(20) DEFAULT NULL,
  `selopt` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `vstatus` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`),
  UNIQUE KEY `selopt` (`selopt`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `password`, `phonenumber`, `selopt`, `code`, `vstatus`, `date`) VALUES
('Abhinay Raj', 'abhinay@acharya.ac.in', '$2y$10$5XBmKEhSJCAdQ013N9h7yuD/Zh/Qbwv75dk/ODzFTV0E8JFdn4qAq', 7858827816, 'dslab', '62c9b9f5ba98ab2aca0c4946ca5b2aaf', 1, '2018-01-18 14:46:30'),
('cyrussanzio', 'srajan@acharya.ac.in', '$2y$10$F17O4678WB7pnoZV65SCjeaQuQ6l/DUYl/J3TcGMSWFKbd6/Q.VJa', 8967984563, 'Java', '5811a7b7e564a65d07aeac2ae66f8e12', 1, '2018-01-18 14:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--
-- Creation: Jan 16, 2018 at 06:22 PM
-- Last update: Jan 29, 2018 at 04:43 AM
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `rfid_no` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `java` int(11) NOT NULL DEFAULT '0',
  `javalab` int(11) NOT NULL DEFAULT '0',
  `dsinc` int(11) NOT NULL DEFAULT '0',
  `dslab` int(11) NOT NULL DEFAULT '0',
  `pe` int(11) NOT NULL DEFAULT '0',
  `os` int(11) NOT NULL DEFAULT '0',
  `linuxlab` int(11) NOT NULL DEFAULT '0',
  `kanadakali` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`rfid_no`, `date`, `java`, `javalab`, `dsinc`, `dslab`, `pe`, `os`, `linuxlab`, `kanadakali`) VALUES
(7858826816, '2018-01-19 13:31:52', 1, 0, 1, 1, 1, 1, 0, 1),
(27140244102, '2018-01-19 13:31:52', 0, 1, 1, 1, 0, 0, 1, 1),
(20360251102, '2018-01-19 13:31:52', 1, 1, 1, 1, 1, 1, 0, 0),
(8019516825, '2018-01-19 13:31:52', 1, 1, 1, 1, 1, 1, 1, 1),
(2810118233, '2018-01-19 13:31:52', 1, 1, 1, 1, 1, 1, 1, 1),
(696625269, '2018-01-19 13:31:52', 1, 1, 1, 1, 0, 1, 1, 0),
(2512311153, '2018-01-19 13:31:52', 1, 1, 1, 1, 1, 1, 1, 1),
(987654321, '2018-01-19 13:31:52', 1, 0, 1, 1, 1, 1, 1, 1),
(974984568734, '2018-01-19 13:31:52', 1, 1, 1, 1, 1, 1, 1, 1),
(89763876579, '2018-01-19 13:31:52', 1, 0, 1, 1, 1, 1, 1, 1),
(696625269, '2018-01-17 11:05:00', 0, 1, 1, 1, 1, 1, 1, 1),
(987654321, '2018-01-17 11:05:00', 1, 1, 1, 1, 0, 1, 0, 1),
(2512311153, '2018-01-17 11:06:00', 1, 1, 0, 1, 1, 1, 1, 1),
(2810118233, '2018-01-17 11:07:00', 1, 0, 1, 1, 0, 1, 1, 1),
(8019516825, '2018-01-17 11:05:00', 0, 1, 1, 1, 1, 1, 1, 1),
(20360251102, '2018-01-17 11:05:00', 1, 1, 1, 0, 1, 1, 1, 0),
(27140244102, '2018-01-17 11:05:00', 1, 1, 1, 1, 0, 0, 1, 1),
(7858826816, '2018-01-17 11:05:00', 1, 1, 1, 1, 1, 1, 1, 1),
(974984568734, '2018-01-17 11:05:00', 0, 1, 1, 1, 1, 1, 1, 1),
(89763876579, '2018-01-17 11:05:00', 1, 1, 0, 1, 1, 1, 1, 1),
(89763876579, '2018-01-18 21:17:12', 0, 0, 1, 1, 1, 1, 1, 1),
(974984568734, '2018-01-18 21:17:12', 0, 1, 1, 1, 1, 1, 1, 1),
(7858826816, '2018-01-18 21:17:12', 1, 1, 1, 1, 1, 1, 1, 1),
(27140244102, '2018-01-18 21:17:12', 1, 1, 1, 1, 1, 1, 1, 1),
(20360251102, '2018-01-18 21:17:12', 1, 1, 1, 1, 1, 1, 1, 1),
(8019516825, '2018-01-18 21:17:12', 0, 1, 1, 1, 0, 1, 0, 1),
(2810118233, '2018-01-18 21:17:12', 0, 0, 1, 1, 1, 0, 0, 1),
(2512311153, '2018-01-18 21:17:12', 1, 1, 1, 1, 1, 1, 1, 1),
(987654321, '2018-01-18 21:17:12', 0, 1, 1, 1, 1, 1, 1, 1),
(696625269, '2018-01-18 21:17:12', 1, 1, 1, 1, 1, 1, 0, 1),
(696625269, '2018-01-16 08:23:00', 1, 1, 1, 1, 1, 1, 1, 0),
(987654321, '2018-01-16 08:23:00', 1, 1, 1, 1, 1, 1, 1, 1),
(2512311153, '2018-01-16 08:25:00', 1, 1, 1, 1, 0, 1, 1, 0),
(2810118233, '2018-01-16 08:26:00', 1, 1, 1, 1, 1, 1, 0, 0),
(8019516825, '2018-01-16 08:23:00', 0, 1, 1, 1, 1, 0, 1, 1),
(20360251102, '2018-01-16 08:23:00', 0, 1, 1, 1, 1, 1, 1, 1),
(27140244102, '2018-01-16 08:29:00', 1, 1, 1, 1, 1, 1, 1, 1),
(7858826816, '2018-01-16 08:23:00', 1, 1, 1, 1, 1, 1, 1, 1),
(974984568734, '2018-01-16 08:33:00', 0, 1, 1, 1, 1, 1, 1, 0),
(89763876579, '2018-01-16 08:34:00', 0, 1, 1, 1, 1, 0, 0, 0),
(696625269, '2018-01-15 09:22:27', 0, 1, 1, 1, 1, 1, 1, 0),
(987654321, '2018-01-15 11:22:27', 1, 0, 0, 0, 1, 1, 1, 1),
(2512311153, '2018-01-15 09:28:31', 1, 1, 1, 1, 1, 1, 1, 0),
(2810118233, '2018-01-15 13:21:32', 1, 1, 1, 1, 1, 1, 0, 0),
(8019516825, '2018-01-15 17:27:19', 1, 1, 0, 0, 1, 1, 0, 0),
(20360251102, '2018-01-15 16:26:31', 1, 1, 1, 1, 1, 0, 0, 1),
(27140244102, '2018-01-15 14:28:18', 0, 1, 1, 1, 1, 1, 1, 1),
(7858826816, '2018-01-15 05:00:00', 1, 1, 1, 1, 1, 1, 1, 1),
(974984568734, '2018-01-15 21:28:37', 0, 1, 1, 1, 1, 0, 0, 0),
(89763876579, '2018-01-15 18:30:36', 1, 1, 1, 1, 1, 1, 1, 1),
(2512311153, '2018-01-21 03:55:22', 1, 1, 1, 1, 1, 1, 1, 0),
(8019516825, '2018-01-21 03:55:22', 1, 1, 1, 1, 1, 1, 1, 0),
(2810118233, '2018-01-29 03:52:46', 1, 1, 0, 1, 1, 1, 1, 0),
(27140244102, '2018-01-29 03:52:46', 1, 1, 1, 1, 1, 1, 1, 1),
(8019516825, '2018-01-29 03:52:46', 0, 0, 1, 1, 1, 1, 1, 1),
(20360251102, '2018-01-29 03:52:46', 1, 1, 1, 1, 1, 1, 1, 1),
(696625269, '2018-01-29 03:52:46', 1, 1, 1, 1, 1, 1, 1, 1),
(271277153, '2018-01-29 03:52:46', 1, 1, 1, 0, 0, 0, 1, 1),
(2512311153, '2018-01-29 03:52:46', 0, 1, 1, 1, 1, 0, 0, 0),
(8019516825, '2018-01-29 03:52:46', 1, 0, 0, 1, 0, 1, 1, 1),
(89763876579, '2018-01-29 03:10:50', 1, 1, 1, 1, 1, 1, 1, 0),
(974984568734, '2018-01-29 03:10:00', 1, 1, 1, 1, 1, 1, 1, 0),
(2810118233, '2018-01-23 04:21:31', 1, 1, 1, 1, 1, 1, 0, 0),
(27140244102, '2018-01-23 04:21:31', 1, 1, 1, 1, 1, 1, 0, 0),
(8019516825, '2018-01-23 04:21:31', 1, 1, 1, 1, 1, 1, 1, 0),
(20360251102, '2018-01-23 04:21:31', 1, 1, 1, 1, 1, 1, 1, 1),
(696625269, '2018-01-23 04:21:31', 1, 1, 1, 1, 1, 1, 0, 0),
(271277153, '2018-01-23 04:21:31', 0, 0, 0, 0, 0, 0, 1, 0),
(2512311153, '2018-01-23 04:21:31', 1, 1, 1, 1, 1, 1, 0, 0),
(8019516825, '2018-01-29 04:21:31', 0, 0, 0, 0, 0, 0, 0, 0),
(2810118233, '2018-01-22 04:19:30', 1, 1, 1, 1, 1, 0, 0, 0),
(27140244102, '2018-01-22 04:19:30', 0, 1, 1, 1, 1, 0, 0, 0),
(8019516825, '2018-01-22 04:19:30', 0, 1, 1, 1, 1, 1, 0, 0),
(20360251102, '2018-01-22 04:19:30', 1, 1, 1, 1, 1, 1, 1, 0),
(696625269, '2018-01-22 04:19:30', 1, 1, 1, 1, 1, 1, 0, 0),
(271277153, '2018-01-22 04:19:30', 1, 1, 1, 1, 1, 1, 0, 0),
(2512311153, '2018-01-22 04:19:30', 1, 1, 1, 1, 1, 1, 1, 0),
(8019516825, '2018-01-22 04:19:30', 1, 1, 1, 1, 1, 1, 1, 0),
(2810118233, '2018-01-21 03:55:22', 1, 1, 1, 1, 1, 1, 0, 0),
(27140244102, '2018-01-21 03:55:22', 1, 1, 1, 1, 1, 1, 0, 1),
(8019516825, '2018-01-21 03:55:22', 1, 1, 1, 1, 1, 1, 1, 0),
(20360251102, '2018-01-21 03:55:22', 1, 1, 1, 1, 1, 1, 0, 0),
(696625269, '2018-01-21 03:55:22', 1, 1, 1, 1, 1, 1, 0, 0),
(271277153, '2018-01-21 03:55:22', 1, 1, 1, 1, 1, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `joinusers_atten`
--
-- Creation: Jan 16, 2018 at 05:26 PM
-- Last update: Jan 18, 2018 at 01:27 PM
--

CREATE TABLE IF NOT EXISTS `joinusers_atten` (
  `rfid_no` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rfid_no`,`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `joinusers_atten`
--

INSERT INTO `joinusers_atten` (`rfid_no`, `email`, `date`) VALUES
(696625269, 'avinash.decp.16@acharya.ac.in', '2018-01-18 13:27:38'),
(987654321, 'abhishek.decp.16@acharya.ac.in', '2018-01-18 13:27:38'),
(2512311153, 'arman.decp.16@acharya.ac.in', '2018-01-18 13:27:38'),
(2810118233, 'devesh.decp.16@acharya.ac.in', '2018-01-18 13:27:38'),
(8019516825, 'aritra.decp.16@acharya.ac.in', '2018-01-18 13:27:38'),
(20360251102, 'tejus.decp.16@acharya.ac.in', '2018-01-18 13:27:38'),
(27140244102, 'surya.decp.16@acharya.ac.in', '2018-01-18 13:27:38'),
(7858826816, 'abhinay.decp.16@acharya.ac.in', '2018-01-18 13:27:38'),
(974984568734, 'ujjwal.decp.16@acharya.ac.in', '2018-01-18 13:27:38'),
(89763876579, 'arshiya.decp.16@acharya.ac.in', '2018-01-18 13:27:38');

-- --------------------------------------------------------

--
-- Table structure for table `late`
--
-- Creation: Jan 16, 2018 at 06:30 PM
-- Last update: Jan 18, 2018 at 09:41 PM
--

CREATE TABLE IF NOT EXISTS `late` (
  `rfid_no` bigint(20) NOT NULL,
  `allow` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `late`
--

INSERT INTO `late` (`rfid_no`, `allow`, `date`) VALUES
(123243243, 1, '2018-01-17 20:53:23'),
(234235432, 1, '2018-01-18 21:41:10');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--
-- Creation: Jan 16, 2018 at 05:28 PM
-- Last update: Feb 09, 2018 at 03:52 PM
--

CREATE TABLE IF NOT EXISTS `subscriber` (
  `email` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`email`, `date`) VALUES
('abhinayraj1226@gmail.com', '2018-01-17 20:26:55'),
('deveshvishal.607@gmail.com', '2018-01-18 14:58:57'),
('subhashverma446@gmail.com', '2018-01-19 07:01:29'),
('cyrussanzio1226@gmail.com', '2018-01-19 08:04:51'),
('akashkumarnitin1999@gmail.com', '2018-01-20 08:36:35'),
('abmendpara777@12', '2018-01-20 09:07:36'),
('abmendpara777@gmail.com', '2018-01-20 09:08:23'),
('shubhamrider98@gmail.com', '2018-01-20 15:40:58'),
('rockayush.30@gmail.com', '2018-01-20 15:41:10'),
('arman.decp.16@acharya.ac.in', '2018-01-24 06:29:56'),
('avinash.abhi877@gmail.com', '2018-01-26 08:43:23'),
('mightyabhishekraj22@gmail.com', '2018-02-01 02:02:26'),
('raj870978@gmail.com', '2018-02-09 15:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--
-- Creation: Jan 16, 2018 at 05:23 PM
-- Last update: Feb 01, 2018 at 09:44 AM
--

CREATE TABLE IF NOT EXISTS `superadmin` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `vstatus` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`name`, `email`, `password`, `code`, `vstatus`, `date`) VALUES
('leelavathi ', 'leelavathi@acharya.ac.in', '$2y$10$.olcR5SHpyEALOEw.IymdOiqW87vRJ/PThHgUIRS3UMABbj4ijuQO', '0146200bbe8660a427d0988a4d9d8261', 1, '2018-02-01 09:43:10'),
('Abhinay Raj', 'abhinayraj1226@gmail.com', '$2y$10$dFb6blRzpwStevY1BECpauQrjenGrjI8DEqzh1w6MKN3tCVi9780i', 'e254d1908c3020cd442282ad96ff19fc', 1, '2018-01-17 07:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Jan 16, 2018 at 05:19 PM
-- Last update: Feb 03, 2018 at 02:13 AM
--

CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration` varchar(255) NOT NULL,
  `phonenumber` bigint(20) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `vstatus` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`email`,`registration`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `registration`, `phonenumber`, `code`, `vstatus`, `date`) VALUES
('Abhinay Raj', 'abhinay.decp.16@acharya.ac.in', '$2y$10$/ehXYQY/Dc2/GG6fcd6QPex2k1NZj3Fc0XczYgx6xheXC2TiOrUC2', '434cs16002', 7858826816, '5c45cfff7730b49259b9848ede3b94d0', 1, '2018-01-17 20:00:01'),
('avinash ', 'avinash.decp.16@acharya.ac.in', '$2y$10$Y6XCN2mQLvUjmJupGEqdPen74OlpfJsc75/NHkX7GSQvRup2YnHAe', '434cs16011', 7586786576, 'a76c1b7b665d5e0fd78e8722ac1fecdb', 1, '2018-01-18 13:05:37'),
('abhishek', 'abhishek.decp.16@acharya.ac.in', '$2y$10$Aor2v5WGAjamTtktHsw2D.toKrhX.fZ9meyJ5/sGL3p45S2wDqEYG', '434cs16045', 8937489564, '39937e437be13efb2cf4235c4a2ec922', 0, '2018-01-18 13:09:22'),
('arman', 'arman.decp.16@acharya.ac.in', '$2y$10$dHpVRJQUvxYXAx.JXacbXOe94sz8XvSGKqU3olAQn/9Aj0U.FxTDq', '434cs16010', 9874859675, '4c1694f7fd8d486c428fb1494822c01e', 1, '2018-01-18 13:10:37'),
('devesh', 'devesh.decp.16@acharya.ac.in', '$2y$10$XW0JdxyBPdvlrSyoqbhsf.fkoRlJQu3Lrt7tgW.CVnBbqKbbny5om', '434cs16018', 9874985634, '0a31241a7c3b5d61e1455f8a9f78ed72', 1, '2018-01-18 13:11:38'),
('aritra nandi majumader', 'aritra.decp.16@acharya.ac.in', '$2y$10$1wxOCr/WS30LWZHhNpFIHu/c.s1Z4nxGn2./CLEuOXjJePtVba0Jy', '434cs16004', 9876389453, 'fa098dee1d3b38bf74473b2f4cb58e3f', 0, '2018-01-18 13:12:42'),
('Nehal Ahmad', 'nehal.decp.16@acharya.ac.in', '$2y$10$F8nNOVt7DPefTfWuzeCrW.htBmWFfYQdpWR8zB7uovN.m1A1ckX9S', '434cs16049', 8084729745, '611d24d2f3259f0aa7a7204690abe883', 1, '2018-01-20 09:09:38'),
('ABHISHEK I M', 'mendpara.decp.16@acharya.ac.in', '$2y$10$4v1yTdrH.kV14PL8m.9ZjO3TVlcXqZL8/7PBxyWZUMUWSPuL5tnNK', '434cs16044', 7574967479, '78ea5b9d7edf74bb0468e9457bb86ab9', 0, '2018-01-20 09:09:25'),
('arshiya banu', 'arshiya.decp.16@acharya.ac.in', '$2y$10$fUJjlNdQ3WIumNygtWWtQueN9OUO7GUkGzkdbt4RWvtQjxFQLF9iW', '434cs16003', 9876384653, 'bbe7418686c246ddb9e77df2528c5904', 0, '2018-01-18 13:26:56'),
('Vinayaka ', 'vinayaka.decp.16@acharya.ac.in', '$2y$10$1l22UkBIu0IZ3EmjFW/Gz.eXWjrAAlef3RRTU0h41Bf/kR0YMbv3K', '434cs16094', 8296859230, 'e29301cd1abbe5688bf32cb83042bc78', 1, '2018-01-19 07:44:15'),
('Issach s cherian', 'issach.decp.16@acharya.ac.in', '$2y$10$AgfW5G1mlEv9JxTdwqNhnuMqRmIYyH/EOhhOF2SVaRuePBCoo8clm', '434cs16030', 9019124047, 'e3ba6033ba60da78f9be1ae8c59b0cf0', 1, '2018-02-01 09:18:48');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
