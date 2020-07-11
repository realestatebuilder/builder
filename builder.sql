-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 09:23 AM
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
(4, 'Pragati Gaikwad', 'psgaikwad@mitaoe.ac.in', '123', 'about.jpg', '7878787878', '    KESHAV NAGAR, NEAR GULMOHAR MARKET    ');

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
(1, 'Samuel A Waldey', '95, Henry Street, Indented Head, Victoria', '03 5321 1053', 'samuel@gmail.com'),
(2, 'Mrs Eden Battarbee', '25 Main Streat, Beaumonts', '08 8762 5308', 'eden@gmail.com'),
(3, 'Tyson A Salvado', '15 Ghost Hill Road, ST Marys South', '02 4728 5284', 'tyson@gmail.com');

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
  `property_img2` varchar(50) DEFAULT NULL,
  `property_img3` varchar(50) DEFAULT NULL,
  `property_img4` varchar(50) DEFAULT NULL,
  `property_img5` varchar(50) DEFAULT NULL,
  `bed_room` varchar(5) DEFAULT NULL,
  `liv_room` varchar(5) DEFAULT NULL,
  `parking` varchar(30) DEFAULT NULL,
  `kitchen` varchar(5) DEFAULT NULL,
  `property_type` varchar(20) DEFAULT NULL,
  `floor_space` varchar(20) DEFAULT NULL,
  `agent_id` int(10) DEFAULT NULL,
  `blueprint` varchar(50) DEFAULT NULL,
  `property_video` varchar(50) DEFAULT NULL,
  `map_location` varchar(1000) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`property_id`, `property_title`, `property_details`, `delivery_type`, `availability`, `price`, `property_address`, `property_img1`, `property_img2`, `property_img3`, `property_img4`, `property_img5`, `bed_room`, `liv_room`, `parking`, `kitchen`, `property_type`, `floor_space`, `agent_id`, `blueprint`, `property_video`, `map_location`) VALUES
(5, 'Ashirvad Nivas', '<p>hii there</p>', 'Sale', 'Available', '1000', 'Chinchwad', 'about.jpg', 'advertisements.jpg', 'facebook.png', 'instagram.png', 'linkedin.png', '0', '1', 'Not Available', '1', 'Office Space', '1700sqft', 0, 'Screenshot (14).png', 'WIN_20200409_19_25_03_Pro.mp4', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d1890.4393598856968!2d73.78117215807208!3d18.624523996837155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d18.6229016!2d73.7820462!4m5!1s0x3bc2b9a54f8d6c25%3A0x6c24b1bf1f23643!2sGandhi%20Peth%2C%20Chinchwad%20Gaon%2C%20Chinchwad%2C%20Pimpri-Chinchwad%2C%20Maharashtra%20411033!3m2!1d18.6261464!2d73.7820006!5e0!3m2!1sen!2sin!4v1594384513223!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `property_image`
--

CREATE TABLE `property_image` (
  `property_images` varchar(200) DEFAULT NULL,
  `property_id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_image`
--

INSERT INTO `property_image` (`property_images`, `property_id`) VALUES
('images/properties/bed-1-1.jpg', 1),
('images/properties/bed-1-2.jpg', 1),
('images/properties/liv-1-1.jpg', 1),
('images/properties/liv-1-2.jpg', 1),
('images/properties/kitchen-1-1.jpg', 1),
('images/properties/bed-1-1.jpg', 2),
('images/properties/bed-1-2.jpg', 2),
('images/properties/liv-1-1.jpg', 2),
('images/properties/liv-1-2.jpg', 2),
('images/properties/kitchen-1-1.jpg', 2),
('images/properties/bed-2-1.jpg', 2),
('images/properties/bed-2-2.jpg', 2),
('images/properties/liv-2-1.jpg', 2),
('images/properties/liv-2-2.jpg', 2),
('images/properties/kitchen-2-1.jpg', 2),
('images/properties/bed-3-1.jpg', 3),
('images/properties/bed-3-2.jpg', 3),
('images/properties/liv-3-1.jpg', 3),
('images/properties/liv-3-2.jpg', 3),
('images/properties/kitchen-3-1.jpg', 3),
('images/properties/bed-4-1.jpg', 4),
('images/properties/bed-4-2.jpg', 4),
('images/properties/liv-4-1.jpg', 4),
('images/properties/liv-4-2.jpg', 4),
('images/properties/kitchen-4-1.jpg', 4),
('images/properties/bed-5-1.jpg', 5),
('images/properties/bed-5-2.jpg', 5),
('images/properties/liv-5-1.jpg', 5),
('images/properties/liv-5-2.jpg', 5),
('images/properties/kitchen-5-1.jpg', 5),
('images/properties/bed-6-1.jpg', 6),
('images/properties/bed-6-2.jpg', 6),
('images/properties/liv-6-1.jpg', 6),
('images/properties/liv-6-2.jpg', 6),
('images/properties/kitchen-6-1.jpg', 6),
('images/properties/bed-7-1.jpg', 7),
('images/properties/bed-7-2.jpg', 7),
('images/properties/liv-7-1.jpg', 7),
('images/properties/liv-7-2.jpg', 7),
('images/properties/kitchen-7-1.jpg', 7);

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
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`property_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `agent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `property_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
