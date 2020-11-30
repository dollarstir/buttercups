-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2020 at 07:59 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buttercups`
--

-- --------------------------------------------------------

--
-- Table structure for table `acomo`
--

CREATE TABLE `acomo` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `pic` text DEFAULT NULL,
  `dateadded` varchar(100) DEFAULT NULL,
  `ltype` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acomo`
--

INSERT INTO `acomo` (`id`, `title`, `price`, `description`, `pic`, `dateadded`, `ltype`) VALUES
(2, 'Luxury', '120', 'Complete Home ,Laundry,Cooking,House Keeping,security,Fans/Air Condition', 'dixcove-1974624_1920.jpg-LAPPING-1605197232.jpg', '12th November, 2020', 'Long Stay'),
(3, 'Semi-Luxury', '90', 'Apartment/Flat ,Cooking,House Keeping,Fans/Air Condition', '188738_0092dcbe-1605197627.jpg', '12th November, 2020', 'Long Stay'),
(4, 'African Home', '100', 'Live with an African family ,Laundry,Cooking,House Keeping,African food,Fans', 'ghana-684554_1920.jpg-HERBERT BIESER-1605197815.jpg', '12th November, 2020', 'Long Stay');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `price` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `pic` text DEFAULT NULL,
  `dateadded` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `price`, `description`, `pic`, `dateadded`) VALUES
(2, 'Biking', '65', 'It will be amazing. Overlooking the Aqueduct and Nature Park, Lorem Ipsum Hotel is situated 5 minutesâ€™ walk from Londonâ€™s Zoological Gardens and a metro station. ', 'bk-1605186230.jpg', '11th November, 2020'),
(3, 'Hair Braiding', '20', 'Hair. Overlooking the Aqueduct and Nature Park, Lorem Ipsum Hotel is situated 5 minutesâ€™ walk from Londonâ€™s Zoological Gardens and a metro station. ', '1501690354-5400-Ghana-Braids-3-1605102500.jpg', '11th November, 2020'),
(5, 'Festivals', '45', 'Festivals. Overlooking the Aqueduct and Nature Park, Lorem Ipsum Hotel is situated 5 minutesâ€™ walk from Londonâ€™s Zoological Gardens and a metro station. ', 'slave-castle-947762_1920.jpg-DAVID OLIVE-1605102923.jpg', '11th November, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `arrival` varchar(100) DEFAULT NULL,
  `departure` varchar(100) DEFAULT NULL,
  `arrivaltime` varchar(100) DEFAULT NULL,
  `departuretime` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `days` varchar(100) DEFAULT NULL,
  `sp` text DEFAULT NULL,
  `tt` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `myref` text DEFAULT NULL,
  `pic` text DEFAULT NULL,
  `dateadded` varchar(100) DEFAULT NULL,
  `pstatus` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `startdate` text DEFAULT NULL,
  `enddate` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `fname`, `lname`, `email`, `country`, `state`, `zip`, `address`, `arrival`, `departure`, `arrivaltime`, `departuretime`, `contact`, `days`, `sp`, `tt`, `type`, `title`, `myref`, `pic`, `dateadded`, `pstatus`, `status`, `startdate`, `enddate`) VALUES
(1, 'sdjkds', 'sdsdfsd', 'kpin463@gmail.com', 'Angola', 'Canillo', '00023323', 'Dome', '2020-11-29', '2020-11-29', '15:43', '12:31', '+19732323223', '2', 'yah', '130', 'activities', NULL, 'BST2048749', 'dollar', '21st November, 2020', 'paid', 'pending', '', ''),
(2, 'sdjkds', 'sdsdfsd', 'kpin463@gmail.com', 'Angola', 'Canillo', '00023323', 'Dome', '2020-11-29', '2020-11-29', '15:43', '12:31', '+19732323223', '2', 'yah', '130', 'activities', NULL, 'BST5569252', 'dollar', '21st November, 2020', 'paid', 'pending', '', ''),
(3, 'sdjkds', 'sdsdfsd', 'kpin463@gmail.com', 'Ghana', 'Greater', '00023323', 'Dome', '2020-11-29', '2020-11-29', '15:43', '12:31', '+19732323223', '2', 'yah', '130', 'activities', NULL, 'BST9801550', 'Screenshot 2020-02-22 at 8.31.18 AM_1605953131.png', '21st November, 2020', 'paid', 'Active', '2020/11/21', '2020/11/23'),
(4, 'sdjkds', 'sdsdfsd', 'kpin463@gmail.com', 'Ghana', 'Greater', '00023323', 'Dome', '2020-11-29', '2020-11-29', '15:43', '12:31', '+19732323223', '2', 'yah', '130', 'activities', NULL, 'BST8903277', 'Screenshot 2020-02-22 at 8.31.18 AM_1605953622.png', '21st November, 2020', 'paid', 'pending', '', ''),
(5, 'sdjkds', 'sdsdfsd', 'kpin463@gmail.com', 'Ghana', 'Greater', '00023323', 'Dome', '2020-11-29', '2020-11-29', '15:43', '12:31', '+19732323223', '2', 'yah', '130', 'activities', NULL, 'BST8146610', 'Screenshot 2020-02-22 at 8.31.18 AM_1605953985.png', '21st November, 2020', 'paid', 'Active', '2020/11/21', '2020/11/23'),
(6, 'Dollar', 'King', 'kpin463@gmail.com', 'Ghana', 'Ashanti', '00023323', 'Dome', '2020-11-29', '2020-11-29', '15:43', '12:31', '++233556676471', '2', 'yah', '130', 'activities', 'Biking', 'BST2065887', '{}_1605956046.JPG', '21st November, 2020', 'paid', 'Active', '2020/11/21', '2020/11/20');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `pic` text DEFAULT NULL,
  `ref` varchar(200) DEFAULT NULL,
  `dateadded` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `title`, `pic`, `ref`, `dateadded`) VALUES
(3, 'Cape Coast', 'cape_coast_castle1-1605269835.jpg', 'faci414557050', '13th November, 2020'),
(4, 'Kumasi', 'KAKUM-NATIONAL-PARK-3-768x384-1605274600.jpg', 'faci773153026', '13th November, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `locpics`
--

CREATE TABLE `locpics` (
  `id` int(11) NOT NULL,
  `pic` text DEFAULT NULL,
  `ref` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locpics`
--

INSERT INTO `locpics` (`id`, `pic`, `ref`) VALUES
(5, 'cape_coast_castle1.jpg', 'faci414557050'),
(6, 'cape_coast_castle_2.jpg', 'faci414557050'),
(7, 'male_dungeon.jpg', 'faci414557050'),
(8, 'cape_coast_castle_2.jpg', 'faci773153026'),
(9, 'kakum_3.jpg', 'faci773153026'),
(10, 'slave_river3.jpg', 'faci773153026'),
(11, 'slave_river.jpg', 'faci773153026');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `price` varchar(200) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `pic` text DEFAULT NULL,
  `dateadded` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tour`
--

INSERT INTO `tour` (`id`, `title`, `price`, `description`, `pic`, `dateadded`) VALUES
(2, 'Luxury', '45', 'Some random text here will be a great opportunity', 'itl.cat_canoe-wallpaper_1595570 (1)-1605192636.png', '12th November, 2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acomo`
--
ALTER TABLE `acomo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locpics`
--
ALTER TABLE `locpics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acomo`
--
ALTER TABLE `acomo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locpics`
--
ALTER TABLE `locpics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
