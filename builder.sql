-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 06:37 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `builder`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_address` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_address`) VALUES
(0, 'Tejas Bhamre', 'tejasbhamre7@gmail.com', '123', 'admin.jpg', '8421208111', 'Plot 34, NavVinayak Society, Jijai Nagar'),
(5, 'Atharva ', 'atharvadeshpande99@gmail.com', '123', 'bed-1-2.jpg', '7218340969', 'KESHAV NAGAR, NEAR GULMOHAR MARKET');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `agent_id` int(10) NOT NULL,
  `agent_name` varchar(150) NOT NULL,
  `agent_address` varchar(250) NOT NULL,
  `agent_contact` varchar(20) NOT NULL,
  `agent_email` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`agent_id`, `agent_name`, `agent_address`, `agent_contact`, `agent_email`) VALUES
(0, 'Tejas Bhamre', 'Plot 34, NavVinayak Society, Jijai Nagar', '8421208111', 'tejasbhaamre7@gmail.com'),
(2, 'Mrs Eden Battarbee', '25 Main Streat, Beaumonts', '08 8762 5308', 'eden@gmail.com'),
(3, 'Tyson A Salvado', '15 Ghost Hill Road, ST Marys South', '02 4728 5284', 'tyson@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobileNo` varchar(20) DEFAULT NULL,
  `bhk` int(20) DEFAULT NULL,
  `price` int(100) DEFAULT NULL,
  `delivery_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_expectations`
--

CREATE TABLE `customer_expectations` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `preference_location` varchar(500) NOT NULL,
  `purchasetime` varchar(50) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `bhk` varchar(50) NOT NULL,
  `budget` varchar(50) NOT NULL,
  `door` varchar(50) NOT NULL,
  `kitchen` varchar(50) NOT NULL,
  `bedroom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `property_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `property_id` int(10) NOT NULL,
  `property_title` varchar(150) DEFAULT NULL,
  `property_details` text,
  `delivery_type` varchar(20) DEFAULT NULL,
  `availability` varchar(15) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `property_address` varchar(200) DEFAULT NULL,
  `property_img1` varchar(50) DEFAULT NULL,
  `bed_room` varchar(5) DEFAULT NULL,
  `liv_room` varchar(5) DEFAULT NULL,
  `parking` varchar(30) DEFAULT NULL,
  `kitchen` varchar(5) DEFAULT NULL,
  `property_type` varchar(20) DEFAULT NULL,
  `floor_space` varchar(20) DEFAULT NULL,
  `agent_id` int(10) DEFAULT NULL,
  `blueprint` varchar(50) DEFAULT NULL,
  `property_video` varchar(50) DEFAULT NULL,
  `map_location` varchar(1000) DEFAULT NULL,
  `featured` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `property_image`
--

CREATE TABLE `property_image` (
  `property_images` varchar(200) DEFAULT NULL,
  `property_id` int(10) DEFAULT NULL,
  `image_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `property_image`
--
ALTER TABLE `property_image`
  ADD PRIMARY KEY (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `agent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `property_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_image`
--
ALTER TABLE `property_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
