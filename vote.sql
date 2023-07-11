-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2018 at 07:18 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate_register`
--

CREATE TABLE IF NOT EXISTS `candidate_register` (
  `id` int(33) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(222) NOT NULL,
  `secondname` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(222) NOT NULL,
  `gender` varchar(222) NOT NULL,
  `dept` varchar(222) NOT NULL,
  `discription` varchar(300) NOT NULL,
  `phone_no` varchar(222) NOT NULL,
  `percentage_of_mark` varchar(222) NOT NULL,
  `percentage_of_attendance` varchar(222) NOT NULL,
  `photo` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `reenter_password` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `candidate_register`
--


-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(33) NOT NULL AUTO_INCREMENT,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'diya', 'd@gmail.com', 'vote', 'not responding');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(33) NOT NULL AUTO_INCREMENT,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `usertype` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'a@gmail.com', 'a', 'user'),
(2, 'n@gmail.com', 's', 'student'),
(3, 'admin', 'admin', 'admin'),
(4, 'niya@gmail.com', 'niya', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE IF NOT EXISTS `user_register` (
  `id` int(33) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(222) NOT NULL,
  `secondname` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(222) NOT NULL,
  `gender` varchar(222) NOT NULL,
  `dept` varchar(222) NOT NULL,
  `phone_no` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `reenter_password` varchar(222) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `firstname`, `secondname`, `email`, `dob`, `address`, `gender`, `dept`, `phone_no`, `password`, `reenter_password`) VALUES
(1, 'a', 'a', 'a@gmail.com', '2000-12-10', 'aaaaaaaaaaa', 'male', 'a', '222222222222', 'a', 'a'),
(2, 'nia', 's', 'n@gmail.com', '1999-11-10', 'hhk', 'Female', 'IInd BCA', '55366778777', 's', 's'),
(3, 'niya', 'r', 'niya@gmail.com', '1999-08-31', 'niyasss', 'Female', 'IIIrd BCA', '9999999999', 'niya', 'niya');
