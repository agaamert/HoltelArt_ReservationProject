-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2022 at 07:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotelart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `username` varchar(24) CHARACTER SET utf8 NOT NULL,
  `password` varchar(24) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(2, 'Mert Aga', 'admin', 'admin'),
(6, 'I am Admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `name` varchar(20) CHARACTER SET utf8 NOT NULL,
  `email_addr` varchar(30) CHARACTER SET utf8 NOT NULL,
  `title` varchar(15) CHARACTER SET utf8 NOT NULL,
  `message` varchar(500) CHARACTER SET utf8 NOT NULL,
  `email_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`name`, `email_addr`, `title`, `message`, `email_ID`) VALUES
('Mert Aga', 'agaamert@outlook.com', 'Available Rooms', 'Hello,\r\n\r\nCan I learn if there are available rooms for group of 15 people between 15/07/2022 and 30/07/2022?\r\n\r\nThank you,\r\nMert Aga\r\n', 9);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `firstname` varchar(50) CHARACTER SET utf8 NOT NULL,
  `lastname` varchar(40) CHARACTER SET utf8 NOT NULL,
  `address` varchar(50) CHARACTER SET utf8 NOT NULL,
  `contactno` varchar(13) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `firstname`, `lastname`, `address`, `contactno`) VALUES
(1, 'Mert', 'Aga', 'Athens', '6948650170'),
(2, 'Mert', 'Aga', 'Athens', '6948'),
(3, 'fghfgh', 'fghfgh', 'fghfgh', 'fghfgh'),
(4, 'Dilara', 'Kioase', 'Xanthi', '69454545'),
(5, 'fghfgh', 'fghfgh', 'fghfgh', 'fghfgh'),
(6, 'Mert Aga', 'Aga', 'Xanthi', '6948650170'),
(7, 'Mert', 'Aga', 'Athens', '6948650170'),
(8, 'Mert', 'Aga', 'Athens', '6948650170'),
(9, 'Mert', 'Aga', 'Athens', '6948650170'),
(10, 'selmaniye', 'haci', 'hrwwwn poluytwvwiuoy', '6946578756'),
(11, 'Dilara', 'fghfgh', 'Xanthi', '6948650170'),
(12, 'Dilara', 'Aga', 'Xanthi', '6948650170'),
(13, 'Dilara', 'Aga', 'Xanthi', '6948650170'),
(14, 'Mert', 'fghfgh', 'fghfgh', '69454545'),
(15, 'Merttttttttttttttt', 'fghfgh', 'fghfgh', '69454545'),
(16, 'Merttttttttttttttt', 'fghfgh', 'fghfgh', '69454545'),
(17, 'Merttttttttttttttt', 'fghfgh', 'fghfgh', '69454545'),
(18, 'Merttttttttttttttt', 'fghfgh', 'fghfgh', '69454545'),
(19, 'Merttttttttttttttt', 'fghfgh', 'fghfgh', '69454545'),
(20, 'Dilara', 'Aga', 'Xanthi', '6948650170'),
(21, 'Merttttttttttttttt', 'fghfgh', 'fghfgh', '69454545'),
(22, 'Mert', 'Aga', 'Xanthi', '6948650170'),
(23, 'Mert', 'Aga', 'Xanthi', '6948650170'),
(24, 'Mert', 'Aga', 'Xanthi', '6948650170'),
(25, 'Dilara', 'Kioase', 'Xanthi', '6946578756'),
(26, 'Dilara', 'Kioase', 'Xanthi', '6946578756'),
(27, 'Dilara', 'Kioase', 'Xanthi', '6946578756'),
(28, 'Mert', 'haci', 'Xanthi', '6948650170'),
(29, 'fghfgh', 'fghfgh', 'Xanthi', '69454545'),
(30, 'Dilara', 'fghfgh', 'Athens', '69454545'),
(31, 'Dilara', 'fghfgh', 'Athens', '69454545'),
(32, 'Dilara', 'Aga', 'Xanthi', '6948650170'),
(33, 'Dilara', 'Aga', 'Xanthi', '6948650170'),
(34, 'Mert', 'Kioase', 'Xanthi', '6948650170'),
(35, 'Dilara', 'Aga', 'Xanthi', '6946578756'),
(36, 'Dilara', 'Aga', 'Xanthi', '69454545'),
(37, 'Dilara', 'Aga', 'Xanthi', '69454545'),
(38, 'Dilara', 'Aga', 'Xanthi', '69454545'),
(39, 'Dilara', 'Aga', 'Xanthi', '6948650170'),
(40, 'Mert', 'Aga', 'Athens', '6948650170'),
(41, 'Dilara', 'Aga', 'Xanthi', '6948650170'),
(42, 'Mert', 'Aga', 'Xanthi', '6948650170'),
(43, 'Dilara', 'fghfgh', 'Xanthi', '6948650170'),
(44, 'Dilara', 'Kioase', 'fghfgh', '69454545'),
(45, 'Mert', 'Aga', 'Athens', '6948650170'),
(46, 'Mert', 'Kioase', 'Xanthi', '6946578756'),
(47, 'selmaniye', 'haci', 'fghfgh', '6948'),
(48, 'Mert', 'Aga', 'Xanthi', '6948650170'),
(49, 'Mert', 'Kioase', 'Xanthi', '6948650170'),
(50, 'Mert', 'Aga', 'Xanthi', '6948650170'),
(51, 'fghfgh', 'haci', 'Xanthi', '69454545');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_type` varchar(50) CHARACTER SET utf8 NOT NULL,
  `price` varchar(11) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `description` varchar(250) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_type`, `price`, `photo`, `description`) VALUES
(6, 'Standard (Single)', '199', '17.jpg', 'Single Room, 1 bed, Free Wifi, Hot/Cold water in bathroom, TV'),
(8, 'Triplex', '420', '20.jpg', 'Triplex Room, 3 beds, Free Wifi, Hot/Cold water in bathroom and towels, 4K TV, Netflix'),
(9, 'VIP (Quadrublex)', '540', '11.jpg', 'VIP Quadrublex Room, 4 beds, Free Wifi, Hot/Cold water in bathroom and towels, Jakuzi, Gaming PC, 4K TV, Netflix'),
(10, 'Doublex', '220', '6.jpg', 'Doublex Room, 2 beds, Free Wifi, Hot/Cold water in bathroom, TV, Netflix'),
(11, 'VIP (Quadrublex)', '669', '8.jpg', 'VIP Quadrublex Room, 4 beds, Free Wifi, Hot/Cold water in bathroom and towels, Jakuzi, Gaming PC, 4K TV, Netflix'),
(12, 'Doublex', '400', '7.jpg', 'Doublex Room, 2 beds, Free Wifi, Hot/Cold water in bathroom, TV, Netflix'),
(13, 'Triplex', '380', '19.jpg', 'Triplex Room, 3 beds, Free Wifi, Hot/Cold water in bathroom and towels, 4K TV, Netflix'),
(14, 'VIP (Quadrublex)', '600', '21.jpg', 'VIP Quadrublex Room, 4 beds, Free Wifi, Hot/Cold water in bathroom and towels, Jakuzi, Gaming PC, 4K TV, Netflix'),
(15, 'Standard (Single)', '620', '22.jpg', 'Single Room, 1 bed, Free Wifi, Hot/Cold water in bathroom and towels, Jakuzi, Gaming PC, 4K TV, Netflix'),
(16, 'Doublex', '290', '24.jpg', 'Doublex Room, 2 beds, Free Wifi, Hot/Cold water in bathroom, TV, Netflix'),
(17, 'Triplex', '900', '23.jpg', 'Triplex Room, 3 beds, Free Wifi, Hot/Cold water in bathroom and towels, 4K TV, Netflix'),
(18, 'VIP (Quadrublex)', '1200', '16.jpg', 'VIP Room, 4 beds, Free Wifi,  Jakuzi, Gaming PC, 4K TV, Netflix, Akropoli View'),
(19, 'Doublex', '200', '2.jpg', 'Doublex Room, 2 beds, Free Wifi, Hot/Cold water in bathroom, TV'),
(20, 'VIP (Quadrublex)', '1500', '26.jpg', 'VIP Room, 4 beds, Free Wifi,  Jakuzi, Gaming PC, 4K TV, Netflix, Akropoli View'),
(21, 'Standart (Single)', '330', '25.jpg', 'Single Room, 1 bed, Free Wifi, Hot/Cold water in bathroom and towels, Jakuzi, Gaming PC, 4K TV, Netflix'),
(22, 'VIP (Quadrublex)', '1800', '27.jpg', 'VIP Room, 4 beds, Free Wifi,  Jakuzi, Gaming PC, 4K TV, Netflix, Akropoli View');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `room_no` int(5) NOT NULL,
  `extra_bed` int(11) NOT NULL,
  `status` varchar(20) CHARACTER SET utf8 NOT NULL,
  `days` int(3) NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `checkout_time` time NOT NULL,
  `bill` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `guest_id`, `room_id`, `room_no`, `extra_bed`, `status`, `days`, `checkin`, `checkin_time`, `checkout`, `checkout_time`, `bill`) VALUES
(17, 1, 20, 16, 0, 'Check Out', 5, '2022-06-25', '00:26:55', '2022-06-30', '00:27:59', '7500'),
(34, 1, 6, 1, 0, 'Check Out', 4, '2022-09-10', '02:14:31', '2022-09-14', '02:20:50', '796');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`email_ID`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `email_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
