-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2015 at 08:26 AM
-- Server version: 5.6.21
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tournament`
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE IF NOT EXISTS `matches` (
`id` int(11) NOT NULL,
  `date` date NOT NULL,
  `season` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

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

-- --------------------------------------------------------

--
-- Table structure for table `team_players`
--

CREATE TABLE IF NOT EXISTS `team_players` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `team_players`
--

INSERT INTO `team_players` (`id`, `user_id`, `team_id`) VALUES
(1, 2, 12),
(2, 3, 12),
(3, 4, 13),
(4, 5, 13),
(5, 6, 14),
(6, 7, 14),
(7, 8, 15),
(8, 9, 15),
(9, 10, 16),
(10, 11, 16),
(11, 12, 17),
(12, 13, 17),
(13, 14, 18),
(14, 15, 18),
(15, 16, 19),
(16, 17, 19),
(17, 18, 20),
(18, 19, 20),
(19, 20, 21),
(20, 21, 21),
(21, 22, 22),
(22, 23, 22);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1444715633, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '127.0.0.1', 'joey', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'joey', 'istrator', 'asurion', '0'),
(3, '127.0.0.1', 'mits', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'mits', 'istrator', 'asurion', '0'),
(4, '127.0.0.1', 'marky', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'marky', 'istrator', 'asurion', '0'),
(5, '127.0.0.1', 'migz', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'migz', 'istrator', 'asurion', '0'),
(6, '127.0.0.1', 'ram', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'ram', 'istrator', 'asurion', '0'),
(7, '127.0.0.1', 'val', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'val', 'istrator', 'asurion', '0'),
(8, '127.0.0.1', 'roy', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'roy', 'istrator', 'asurion', '0'),
(9, '127.0.0.1', 'kenneth', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'kenneth', 'istrator', 'asurion', '0'),
(10, '127.0.0.1', 'alben', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'alben', 'istrator', 'asurion', '0'),
(11, '127.0.0.1', 'jason', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'jason', 'istrator', 'asurion', '0'),
(12, '127.0.0.1', 'robi', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'robi', 'istrator', 'asurion', '0'),
(13, '127.0.0.1', 'marlon', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'marlon', 'istrator', 'asurion', '0'),
(14, '127.0.0.1', 'edward', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'edward', 'istrator', 'asurion', '0'),
(15, '127.0.0.1', 'mark', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'mark', 'istrator', 'asurion', '0'),
(16, '127.0.0.1', 'vincent', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'vincent', 'istrator', 'asurion', '0'),
(17, '127.0.0.1', 'elaine', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'elaine', 'istrator', 'asurion', '0'),
(18, '127.0.0.1', 'ching', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'ching', 'istrator', 'asurion', '0'),
(19, '127.0.0.1', 'brian', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'brian', 'istrator', 'asurion', '0'),
(20, '127.0.0.1', 'denise', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'denise', 'istrator', 'asurion', '0'),
(21, '127.0.0.1', 'ron', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'ron', 'istrator', 'asurion', '0'),
(22, '127.0.0.1', 'peter', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'peter', 'istrator', 'asurion', '0'),
(23, '127.0.0.1', 'jonathan', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'jonathan', 'istrator', 'asurion', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
`id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 3, 2),
(5, 4, 2),
(6, 5, 2),
(7, 6, 2),
(8, 7, 2),
(9, 8, 2),
(10, 9, 2),
(11, 10, 2),
(12, 11, 2),
(13, 12, 2),
(14, 13, 2),
(15, 14, 2),
(16, 15, 2),
(17, 16, 2),
(18, 17, 2),
(19, 18, 2),
(20, 19, 2),
(21, 20, 2),
(22, 21, 2),
(23, 22, 2),
(24, 23, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_players`
--
ALTER TABLE `team_players`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`), ADD KEY `fk_users_groups_users1_idx` (`user_id`), ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `team_players`
--
ALTER TABLE `team_players`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
