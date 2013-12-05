-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2013 at 04:57 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `linkedin`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(100) NOT NULL,
  `company_size` varchar(20) DEFAULT NULL,
  `industry` varchar(30) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_size`, `industry`, `description`) VALUES
(1, 'Apple', NULL, 'Computers and Technology', NULL),
(2, 'PTCL', NULL, 'Telecom', NULL),
(3, 'Mobilink', NULL, 'Telecom', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `connection`
--

CREATE TABLE IF NOT EXISTS `connection` (
  `user_id1` int(11) NOT NULL,
  `user_id2` int(11) NOT NULL,
  PRIMARY KEY (`user_id1`,`user_id2`),
  KEY `user_id2` (`user_id2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `connection`
--

INSERT INTO `connection` (`user_id1`, `user_id2`) VALUES
(1, 2),
(1, 5),
(1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE IF NOT EXISTS `education` (
  `education_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `program` varchar(30) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `institution_id` int(11) NOT NULL,
  PRIMARY KEY (`education_id`),
  KEY `user_id` (`user_id`),
  KEY `institution_id` (`institution_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`education_id`, `user_id`, `program`, `start_date`, `end_date`, `institution_id`) VALUES
(1, 2, 'ACCA', '2013-11-15', '2014-11-16', 1),
(2, 8, 'BS Computer Science', '2013-11-21', NULL, 2),
(3, 7, 'BS Computer Science', '2013-10-21', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) NOT NULL,
  `group_type` bit(1) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE IF NOT EXISTS `institution` (
  `institution_id` int(11) NOT NULL AUTO_INCREMENT,
  `institution_name` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`institution_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `institution`
--

INSERT INTO `institution` (`institution_id`, `institution_name`, `description`) VALUES
(1, 'FAST-NUCES', NULL),
(2, 'LUMS', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `job_title` varchar(30) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `designation` varchar(40) DEFAULT NULL,
  `self_employed` bit(1) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `industry` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`job_id`),
  KEY `user_id` (`user_id`),
  KEY `company_id` (`company_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `user_id`, `job_title`, `start_date`, `end_date`, `designation`, `self_employed`, `company_id`, `industry`) VALUES
(2, 5, 'Sucker Expert', '2013-11-16', NULL, NULL, b'1', NULL, 'Computer Sceince'),
(3, 1, 'Event Designer', '2013-11-16', NULL, NULL, b'1', NULL, 'Event Organizing');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`group_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `user_id` int(11) NOT NULL,
  `country` varchar(30) NOT NULL,
  `postal_Code` bigint(20) DEFAULT NULL,
  `current_position` int(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `language` varchar(15) DEFAULT NULL,
  `fortune` bigint(20) DEFAULT NULL,
  `years_of_experience` int(11) DEFAULT NULL,
  `joining_date` date NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `country`, `postal_Code`, `current_position`, `dob`, `language`, `fortune`, `years_of_experience`, `joining_date`) VALUES
(1, 'Pakistan', 54700, 1, '1992-11-09', 'Urdu', NULL, 2, '2013-11-15'),
(2, 'Pakistan', 54700, 2, '1992-11-09', 'Punjabi', NULL, 4, '2013-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `user_id1` int(11) NOT NULL,
  `user_id2` int(11) NOT NULL,
  PRIMARY KEY (`user_id1`,`user_id2`),
  KEY `user_id2` (`user_id2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`user_id1`, `user_id2`) VALUES
(1, 7),
(2, 7),
(4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `profilePic` varchar(100) NOT NULL,
  `accountType` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstName`, `lastName`, `email`, `password`, `profilePic`, `accountType`) VALUES
(1, 'Maha', 'Kamal', 'modestmaha@gmail.com', '123456', '', 1),
(2, 'Maria', 'Kamal', 'modestmaha@yahoo.com', '123456', '', 1),
(3, 'Hamza', 'Asad', 'hamza@fazool.com', '123456', '', 1),
(4, 'Aroosa', 'Javed', 'aroosa@gmail.com', '123456', '', 1),
(5, 'Hamza', 'Tahir', 'bonga@gmail.com', '123456', '', 1),
(6, 'Hamza', 'Random', 'sucker@gmail.com', '123456', '', 1),
(7, 'Hamza', 'Mubeen', 'suckernesskihadd@gmail.com', '123456', '', 1),
(8, 'Maria', 'Mazhar', 'maria@gmail.com', '123456', '', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `connection`
--
ALTER TABLE `connection`
  ADD CONSTRAINT `connection_ibfk_1` FOREIGN KEY (`user_id1`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `connection_ibfk_2` FOREIGN KEY (`user_id2`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `education_ibfk_2` FOREIGN KEY (`institution_id`) REFERENCES `institution` (`institution_id`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `job_ibfk_2` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`);

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `membership_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `membership_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`user_id1`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`user_id2`) REFERENCES `user` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
