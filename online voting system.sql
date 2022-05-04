-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2022 at 07:34 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online voting system`
--
CREATE DATABASE IF NOT EXISTS `online voting system` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `online voting system`;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `lan_id` int(100) NOT NULL,
  `fullname` varchar(10) NOT NULL,
  `about` varchar(255) NOT NULL,
  `votecount` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`lan_id`, `fullname`, `about`, `votecount`) VALUES
(1, 'bjp', 'Bjp is not going to the people only form a government. We have come to the people to give stability and a development oriented government.', 3),
(2, 'congress', 'The minority party in congress votes against rasing the debt limit, forcing the majority party to whip its members into casting politically painful votes in favor. ', 3),
(3, 'aap', 'AAP is only party which doesnot claim to rule, but claim to pass on the rule to people and execute what people want.', 3),
(4, 'bsp', 'We grant you many congratulation on this auspicious occasion. also, wish for your good health and successfull life.', 1),
(5, 'cpi', 'The bourgeoisie has torn away from the family its sentiment veil, and has reduced the family relation to a mere money relation.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loginusers`
--

CREATE TABLE `loginusers` (
  `id` int(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rank` varchar(80) NOT NULL DEFAULT 'voter',
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginusers`
--

INSERT INTO `loginusers` (`id`, `username`, `password`, `rank`, `status`) VALUES
(112, '19BCE124@nirmauni.ac.in', 'Rishi@123', 'voter', 'ACTIVE'),
(111, '19BCE120@nirmauni.ac.in', 'Vatsal@123', 'voter', 'ACTIVE'),
(110, '19BCE116@nirmauni.ac.in', 'Manil@123', 'voter', 'ACTIVE'),
(104, '19BCE115@nirmauni.ac.in', 'Chirag@123', 'voter', 'ACTIVE'),
(107, '19BCE112@nirmauni.ac.in', 'Manan@123', 'voter', 'ACTIVE'),
(108, '19BCE113@nirmauni.ac.in', 'Aryan@123', 'voter', 'ACTIVE'),
(109, '19BCE114@nirmauni.ac.in', 'Nandan@123', 'voter', 'ACTIVE'),
(1, '19BCE107@nirmauni.ac.in', 'Nikhil@123', 'admin', 'ACTIVE'),
(2, '19BCE111@nirmauni.ac.in', 'Vishal@123', 'admin', 'ACTIVE'),
(3, '19BCE110@nirmauni.ac.in', 'Ronik@123', 'admin', 'ACTIVE'),
(113, '19BCE125@nirmauni.ac.in', 'Awais@123', 'voter', 'ACTIVE'),
(114, '19BCE126@nirmauni.ac.in', 'Chirag@123', 'voter', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'NOTVOTED',
  `voted` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `firstname`, `lastname`, `username`, `status`, `voted`) VALUES
(110, 'Manil', 'Shah', '19BCE116@nirmauni.ac.in', 'VOTED', 'aap'),
(109, 'Nandan', 'Mandliya', '19BCE114@nirmauni.ac.in', 'VOTED', 'cpi'),
(108, 'Aryan', 'Manani', '19BCE113@nirmauni.ac.in', 'VOTED', 'bsp'),
(107, 'Manan', 'Patel', '19BCE112@nirmauni.ac.in', 'VOTED', 'aap'),
(104, 'Chirag', 'Mandviya', '19BCE115@nirmauni.ac.in', 'VOTED', 'bjp'),
(111, 'Vatsal', 'Manvar', '19BCE120@nirmauni.ac.in', 'VOTED', 'aap'),
(112, 'Rishi', 'Mehta', '19BCE124@nirmauni.ac.in', 'VOTED', 'congress'),
(113, 'Awais', 'Menon', '19BCE125@nirmauni.ac.in', 'VOTED', 'bjp'),
(114, 'Chirag', 'Memriya', '19BCE126@nirmauni.ac.in', 'VOTED', 'congress');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`lan_id`);

--
-- Indexes for table `loginusers`
--
ALTER TABLE `loginusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `lan_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loginusers`
--
ALTER TABLE `loginusers`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
