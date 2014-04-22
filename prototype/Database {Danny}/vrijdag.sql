-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2014 at 04:38 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vrijdag`
--
CREATE DATABASE IF NOT EXISTS `vrijdag` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `vrijdag`;

-- --------------------------------------------------------

--
-- Table structure for table `nieuws`
--

CREATE TABLE IF NOT EXISTS `nieuws` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL,
  `bericht` text NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `bericht` (`bericht`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `nieuws`
--

INSERT INTO `nieuws` (`id`, `title`, `bericht`) VALUES
(1, 'GOAL!', 'Er is zojuist gescoord door Menno, het staat nu 5 - 0 voor Unicorn B.V. vs Vrijdag'),
(2, 'W000T', '<p>En weer een fantasties doelpunt door Menno,</p>\r\n<p>De stand is nu 6 - 0</p>\r\n<p>Wat een spannende wedstrijd :O</p>');

-- --------------------------------------------------------

--
-- Table structure for table `poulewedstrijden`
--

CREATE TABLE IF NOT EXISTS `poulewedstrijden` (
  `wedstrijdnr` int(10) NOT NULL AUTO_INCREMENT,
  `slot_1` varchar(50) NOT NULL,
  `slot_2` varchar(50) NOT NULL,
  `goals_slot_1` int(10) NOT NULL,
  `goals_slot_2` int(10) NOT NULL,
  `winnaar` varchar(50) NOT NULL,
  `gelijk` tinyint(1) NOT NULL,
  `nowplaying` int(11) NOT NULL,
  PRIMARY KEY (`wedstrijdnr`),
  KEY `slot_2` (`slot_2`),
  KEY `winnaar` (`winnaar`),
  KEY `slot_1` (`slot_1`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `poulewedstrijden`
--

INSERT INTO `poulewedstrijden` (`wedstrijdnr`, `slot_1`, `slot_2`, `goals_slot_1`, `goals_slot_2`, `winnaar`, `gelijk`, `nowplaying`) VALUES
(1, 'Team 1', 'Team 2', 0, 0, '', 0, 0),
(2, 'Team 6', 'Team 7', 2, 0, 'Team 6', 0, 1),
(3, 'Team 4', 'Team 5', 0, 0, '', 0, 0),
(4, 'Team 9', 'Team 10', 0, 0, '', 0, 0),
(5, 'Team 2', 'Team 3', 0, 0, '', 0, 0),
(6, 'Team 7', 'Team 8', 0, 0, '', 0, 0),
(7, 'Team 1', 'Team 4', 0, 0, '', 0, 0),
(8, 'Team 6', 'Team 9', 0, 0, '', 0, 0),
(9, 'Team 3', 'Team 5', 0, 0, '', 0, 0),
(10, 'Team 8', 'Team 10', 0, 0, '', 0, 0),
(11, 'Team 2', 'Team 4', 0, 0, '', 0, 0),
(12, 'Team 7', 'Team 9', 0, 0, '', 0, 0),
(13, 'Team 1', 'Team 3', 0, 0, '', 0, 0),
(14, 'Team 6', 'Team 8', 0, 0, '', 0, 0),
(15, 'Team 2', 'Team 5', 0, 0, '', 0, 0),
(16, 'Team 7', 'Team 10', 0, 0, '', 0, 0),
(17, 'Team 3', 'Team 4', 0, 0, '', 0, 0),
(18, 'Team 8', 'Team 9', 0, 0, '', 0, 0),
(19, 'Team 1', 'Team 5', 0, 0, '', 0, 0),
(20, 'Team 6', 'Team 10', 0, 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `spelers`
--

CREATE TABLE IF NOT EXISTS `spelers` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(50) NOT NULL DEFAULT 'testpersoon',
  `tussenvoegsel` varchar(10) DEFAULT NULL,
  `achternaam` varchar(50) NOT NULL DEFAULT 'achternaam',
  `klas` varchar(5) NOT NULL DEFAULT 'apo1?',
  `doelpunten` int(2) DEFAULT NULL,
  `team_id` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `team_id` (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=121 ;

--
-- Dumping data for table `spelers`
--

INSERT INTO `spelers` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`, `klas`, `doelpunten`, `team_id`) VALUES
(71, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 11),
(72, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 11),
(73, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 11),
(74, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 11),
(75, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 11),
(76, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 12),
(77, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 12),
(78, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 12),
(79, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 12),
(80, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 12),
(81, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 13),
(82, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 13),
(83, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 13),
(84, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 13),
(85, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 13),
(86, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 14),
(87, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 14),
(88, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 14),
(89, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 14),
(90, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 15),
(91, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 16),
(92, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 16),
(93, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 16),
(94, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 16),
(95, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 16),
(96, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 17),
(97, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 17),
(98, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 17),
(99, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 17),
(100, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 17),
(101, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 19),
(102, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 19),
(103, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 19),
(104, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 19),
(105, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 19),
(106, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 20),
(107, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 20),
(108, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 20),
(109, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 20),
(110, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 20),
(111, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 15),
(112, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 15),
(113, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 15),
(114, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 15),
(115, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 14),
(116, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 18),
(117, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 18),
(118, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 18),
(119, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 18),
(120, 'testpersoon', NULL, 'achternaam', 'apo1?', NULL, 18);

-- --------------------------------------------------------

--
-- Table structure for table `team-poulewedstrijd`
--

CREATE TABLE IF NOT EXISTS `team-poulewedstrijd` (
  `team_id` int(10) NOT NULL,
  `poulewedstrijd_id` int(10) NOT NULL,
  KEY `poulewedstrijd_id` (`poulewedstrijd_id`),
  KEY `team_id` (`team_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team-poulewedstrijd`
--

INSERT INTO `team-poulewedstrijd` (`team_id`, `poulewedstrijd_id`) VALUES
(11, 1),
(12, 1),
(16, 2),
(17, 2),
(14, 3),
(15, 3),
(19, 4),
(20, 4),
(12, 5),
(13, 5),
(17, 6),
(18, 6),
(11, 7),
(14, 7),
(16, 8),
(19, 8),
(13, 9),
(15, 9),
(18, 10),
(20, 10),
(12, 11),
(14, 11),
(17, 12),
(19, 12),
(11, 13),
(13, 13),
(16, 14),
(18, 14),
(12, 15),
(15, 15),
(17, 16),
(20, 16),
(13, 17),
(14, 17),
(18, 18),
(19, 18),
(11, 19),
(15, 19),
(16, 20),
(20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) NOT NULL,
  `doelp_voor` int(2) DEFAULT NULL,
  `doelp_tegen` int(2) DEFAULT NULL,
  `gewonnen` int(2) DEFAULT NULL,
  `verloren` int(2) DEFAULT NULL,
  `gelijk` int(2) DEFAULT NULL,
  `poule` varchar(1) NOT NULL,
  `punten` int(2) NOT NULL DEFAULT '0',
  `totaal_punten` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `naam` (`naam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `naam`, `doelp_voor`, `doelp_tegen`, `gewonnen`, `verloren`, `gelijk`, `poule`, `punten`, `totaal_punten`) VALUES
(11, 'Team 1', NULL, NULL, 0, NULL, 0, 'A', 0, 0),
(12, 'Team 2', NULL, NULL, 0, NULL, 0, 'A', 0, 0),
(13, 'Team 3', NULL, NULL, 0, NULL, 0, 'A', 0, 0),
(14, 'Team 4', NULL, NULL, 0, NULL, 0, 'A', 0, 0),
(15, 'Team 5', NULL, NULL, 0, NULL, 0, 'A', 0, 0),
(16, 'Team 6', NULL, NULL, 1, NULL, 0, 'B', 3, 3),
(17, 'Team 7', NULL, NULL, 0, NULL, 0, 'B', 0, 0),
(18, 'Team 8', NULL, NULL, 0, NULL, 0, 'B', 0, 0),
(19, 'Team 9', NULL, NULL, 0, NULL, 0, 'B', 0, 0),
(20, 'Team 10', NULL, NULL, 0, NULL, 0, 'B', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `last_login` timestamp NULL DEFAULT NULL,
  `email` text NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `is_admin`, `last_login`, `email`, `confirmed`) VALUES
(8, 'Danneke', '093952e5e7fd45edb17b8151ccbf28f3', 1, '2014-04-18 21:48:31', '', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `poulewedstrijden`
--
ALTER TABLE `poulewedstrijden`
  ADD CONSTRAINT `poulewedstrijden_ibfk_1` FOREIGN KEY (`slot_1`) REFERENCES `teams` (`naam`) ON UPDATE CASCADE,
  ADD CONSTRAINT `poulewedstrijden_ibfk_2` FOREIGN KEY (`slot_2`) REFERENCES `teams` (`naam`) ON UPDATE CASCADE;

--
-- Constraints for table `spelers`
--
ALTER TABLE `spelers`
  ADD CONSTRAINT `spelers_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `team-poulewedstrijd`
--
ALTER TABLE `team-poulewedstrijd`
  ADD CONSTRAINT `team-poulewedstrijd_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `team-poulewedstrijd_ibfk_2` FOREIGN KEY (`poulewedstrijd_id`) REFERENCES `poulewedstrijden` (`wedstrijdnr`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
