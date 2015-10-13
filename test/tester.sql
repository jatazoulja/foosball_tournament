-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2015 at 03:55 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tester`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `match_id`, `team_id`, `score`) VALUES
(1, 2, 13, 4),
(2, 2, 12, 10),
(3, 3, 15, 6),
(4, 3, 12, 10);

-- --------------------------------------------------------

--
-- Table structure for table `match`
--

CREATE TABLE IF NOT EXISTS `match` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `match`
--

INSERT INTO `match` (`id`, `date`) VALUES
(2, '2015-10-12'),
(3, '2015-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `profile`, `logo`) VALUES
(12, 'Joey/Mits', '', 'http://img01.deviantart.net/8217/i/2011/135/6/5/arsenal_football_club_logo_by_lemongraphic-d3gg6no.png'),
(13, 'Marky/Migz', '', 'https://upload.wikimedia.org/wikipedia/en/6/6c/Azam_FC_Club_Logo.jpg'),
(14, 'Ram/Val', '', 'https://upload.wikimedia.org/wikipedia/en/6/6a/Zte_Football_Club_Logo_90.png'),
(15, 'Roy/Kenneth', '', 'http://www.chattanoogafc.com/media/images/league_teams/pumas-fc-logo.png'),
(16, 'Alben/Jason', '', 'https://m1.behance.net/rendition/modules/15853473/disp/d7816ae7fc41f9f6a71aa2fbe431a186.jpg'),
(17, 'Robi/Marlon', '', 'http://www.firstcoastsoccer.com/imgs/jfchomepage/JFC_logo.jpg'),
(18, 'Edward/Mark', '', 'http://www.firstcoastsoccer.com/imgs/jfchomepage/JFC_logo.jpg'),
(19, 'Vincent/Elaine', '', 'http://www.pixelube.com/wp-content/uploads/2013/06/eagle-claw-logo.jpg'),
(20, 'Ching/Brian', '', 'http://kassiesa.nl/uefa/clubs/images/1.FC-Kaiserslautern@2.-other-logo.png'),
(21, 'Denise/Ron', '', 'http://t3.gstatic.com/images?q=tbn:ANd9GcTsxj-MlyC7akfBpYuIuZHOBDbk-ZPAVJwJCmnW6ol2cp3KnfIADQ'),
(22, 'Peter/jonathan', '', 'https://upload.wikimedia.org/wikipedia/en/8/8c/Jacksonville_United_FC_logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `match`
--
ALTER TABLE `match`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `match`
--
ALTER TABLE `match`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
