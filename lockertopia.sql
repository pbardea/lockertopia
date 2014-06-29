-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2014 at 08:31 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `lockertopia`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `username` varchar(40) DEFAULT NULL,
  `class_name` varchar(40) DEFAULT NULL,
  `homework` varchar(200) DEFAULT NULL,
  `announcement` varchar(200) DEFAULT NULL,
  `project` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
