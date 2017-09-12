-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 17, 2017 at 05:25 PM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `hams`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambulance`
--

CREATE TABLE `ambulance` (
  `am_id` int(11) NOT NULL,
  `am_total` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `am_book`
--

CREATE TABLE `am_book` (
  `ambook_id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `uphone` varchar(20) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `ambulancetype` varchar(100) NOT NULL,
  `extras` varchar(100) NOT NULL,
  `pickup_time` datetime NOT NULL,
  `pickup_place` varchar(300) NOT NULL,
  `dropoff_place` varchar(300) NOT NULL,
  `comments` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `am_book`
--

INSERT INTO `am_book` (`ambook_id`, `uname`, `uphone`, `uemail`, `ambulancetype`, `extras`, `pickup_time`, `pickup_place`, `dropoff_place`, `comments`) VALUES
(1, 'rajib', '345345', 'rajibrsmita@gmail.com', '', '', '0000-00-00 00:00:00', '', '', ''),
(2, 'rajib', '345345', 'rajibrsmita@gmail.com', '', '', '0000-00-00 00:00:00', '', '', ''),
(3, 'rajib', '345345', 'rajibrsmita@gmail.com', '', '', '0000-00-00 00:00:00', '', '', ''),
(4, 'rajib', '345345', 'rajibrsmita@gmail.com', 'van', 'baby', '2017-07-17 12:00:00', '', 'zcxc', 'zxczc'),
(5, 'rajib', '345345', 'rajibrsmita@gmail.com', 'van', 'baby', '2017-07-17 12:00:00', '', 'zcxc', 'zxczc'),
(6, 'ss', 'ss', 'rajibrsmita@gmail.com', 'van', 'baby', '2017-07-17 02:02:00', '', 'ss', 'sss'),
(7, 'rajib', '333', 'rajibrsmita@gmail.com', 'car', 'baby', '2017-07-17 03:03:00', '', 'asdd', 'asd'),
(8, 'rajib', '333', 'rajibrsmita@gmail.com', 'car', 'baby', '2017-07-17 03:03:00', '', 'asdd', 'asd'),
(9, 'a', '1', 'rajibrsmita@gmail.com', 'van', 'baby', '2017-07-18 03:03:00', '', 'ss', '22'),
(10, 'rajib', '345345', 'rajibrsmita@gmail.com', 'car', 'baby', '2017-07-17 01:01:00', '', 'sfds', 'sfdsfsf');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(300) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `status`) VALUES
(1, 'Dhaka', 1),
(2, 'Chittagong', 1),
(3, 'Rajshahi', 1),
(4, 'Khulna', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(500) NOT NULL,
  `hospital_cat` varchar(500) NOT NULL,
  `city_id` int(11) NOT NULL,
  `am_tot` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `hospital_name`, `hospital_cat`, `city_id`, `am_tot`, `status`) VALUES
(1, 'Dhaka medical', 'General Hospital / Clinic', 1, 10, 1),
(2, 'khanpur general hospital', 'genaral', 1, 20, 1),
(3, 'chittgong Medicl', '', 2, 30, 1),
(4, 'Rajshahi general hospital', '', 3, 50, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `am_book`
--
ALTER TABLE `am_book`
  ADD PRIMARY KEY (`ambook_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `am_book`
--
ALTER TABLE `am_book`
  MODIFY `ambook_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;