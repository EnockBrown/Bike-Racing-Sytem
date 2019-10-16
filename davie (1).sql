-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 07:57 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `davie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(1, 'Administrator', 'Admin', 'admin'),
(2, 'Enock', 'Enock', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bike`
--

CREATE TABLE `bike` (
  `bike_id` int(100) NOT NULL,
  `bike_type` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bike`
--

INSERT INTO `bike` (`bike_id`, `bike_type`, `price`, `photo`) VALUES
(19, 'Mountain Bike', '2000', '08-large.jpg'),
(22, 'Hybrid/Comfort Bike', '2999', '08-small.jpg'),
(24, 'Hybrid/Comfort Bike', '200', 'velobar-177055-unsplash.jpg'),
(25, 'Commuting Bike', '250', 'yomex-owo-640069-unsplash.jpg'),
(29, 'Commuting Bike', '', 'service-7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `guest_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contactno` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`guest_id`, `firstname`, `middlename`, `lastname`, `address`, `contactno`) VALUES
(6, 'Enock', 'cheruiyot', 'Brown', '123 molo', '1234567'),
(7, 'Isack', 'TJYERWQ', 'yr6tr4e3w2', 'rewewqw', '0700000000'),
(8, 'jkui', 'fedws', 'utyrtere', '7564534erww', '5645322'),
(9, 'utyerw', 'ityerw', '6545343q', '786756432', '89765432'),
(10, 'sam', 'ddd', 'Aroko', 'isackous@gmail.com', '75645342312'),
(11, 'sam', 'Enock', 'Aroko', '1234er', '876543'),
(12, 'wertyui', 'ertyui', 'wertyui', 'ertyui', 'wertyui'),
(13, 'ertyiuoi', 'ertyui', 'rttyiuoip', 'ewrtyuio', 'retytuyiuo'),
(14, 'wertyui', 'ertyu', 'qwerty', 'dfghj', '3245678'),
(15, 'wertyui', 'wertyui', 'qwertyui', 'werty', '23456789'),
(16, 'wertyui', 'tyuii', 'ewrty', 'wertyui', '12345678'),
(17, 'enock', 'ceruiyot', 'Aroko', '65432htgrfedws', '12345678'),
(18, 'wer', 'wer', 'werty', 'werty', 'erty'),
(19, 'wer', 'wer', 'werty', 'werty', 'erty'),
(20, 'werty', 'ewrty', 'ewrty', 'ertyy', '1343567'),
(21, 'qwerty', '1234566', 'qwer', 'ewrt', 'ty3456'),
(22, 'qwertyui', 'wertyui', 'wertyu', 'ertyui', 'ertyui'),
(23, 'wqerty', 'qwerty', 'wertyy', 'werty', '12345678'),
(24, 'qwerty', 'wertyuiwertyuwerty', 'wdfghj', 'wertyu', '23456789'),
(25, 'tyrerw', 'etyuio', 'rtyu', 'ityuii', '345678'),
(26, 'ertyui', 'ertyuio', 'errtyui', 'rtyuio', '4567890-'),
(27, 'Willy', 'Warex', 'N', '599-10205', '779511216'),
(28, 'Willy', 'Warex', 'N', '599-10205', '779511216'),
(29, 'hjjryeew', 'kjhngvcx', 'jkhjmhgbfv9876544', '89786745', '0897865433');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `bike_id` int(11) NOT NULL,
  `bike_no` int(5) NOT NULL,
  `extra_days` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `days` int(2) NOT NULL,
  `checkin` date NOT NULL,
  `checkin_time` time NOT NULL,
  `checkout` date NOT NULL,
  `checkout_time` time NOT NULL,
  `bill` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `guest_id`, `bike_id`, `bike_no`, `extra_days`, `status`, `days`, `checkin`, `checkin_time`, `checkout`, `checkout_time`, `bill`) VALUES
(7, 8, 1, 1, 0, 'Check Out', 6, '2019-03-13', '08:08:03', '2019-03-13', '08:08:08', '1200'),
(8, 9, 2, 23, 2, 'Check Out', 4, '2019-03-22', '08:03:59', '2019-03-11', '08:06:10', '9600'),
(9, 11, 11, 123, 1, 'Check Out', 2, '2019-03-10', '19:36:41', '2019-03-12', '19:36:55', '1400'),
(10, 12, 11, 1, 0, 'Check Out', 2, '2019-03-29', '02:12:56', '2019-03-30', '02:13:03', '600'),
(11, 14, 13, 34, 0, 'Check Out', 3, '2019-03-29', '02:13:52', '2019-03-31', '02:13:57', '0'),
(12, 15, 13, 12, 1, 'Check Out', 2, '2019-03-30', '02:14:08', '2019-03-30', '02:14:12', '800'),
(13, 16, 13, 2, 4, 'Check Out', 3, '2019-03-31', '02:14:35', '2019-03-31', '02:14:38', '3200'),
(14, 17, 13, 12, 1, 'Check Out', 13, '2019-04-02', '02:14:21', '2019-04-10', '02:14:25', '800'),
(15, 18, 13, 1, 1, 'Check Out', 1, '2019-04-04', '02:17:01', '2019-03-29', '02:17:04', '800'),
(16, 20, 13, 1, 2, 'Check Out', 1, '2019-04-05', '02:17:16', '2019-03-29', '02:17:19', '1600'),
(17, 21, 13, 12, 4, 'Check Out', 13, '2019-04-06', '02:17:34', '2019-04-10', '02:17:37', '3200'),
(18, 22, 13, 12, 5, 'Check Out', 3, '2019-04-07', '02:18:02', '2019-03-31', '02:18:06', '4000'),
(19, 23, 13, 5, 6, 'Check Out', 3, '2019-04-08', '02:17:48', '2019-03-31', '02:17:51', '4800'),
(20, 24, 13, 12, 0, 'Check Out', 34, '2019-04-10', '02:18:13', '2019-05-01', '02:18:18', '0'),
(22, 26, 13, 21, 0, 'Check Out', 1, '2019-04-06', '16:27:11', '2019-03-30', '16:28:03', '0'),
(23, 29, 15, 1, 1, 'Check In', 8, '2019-04-03', '02:35:39', '2019-04-10', '00:00:00', '984');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(199) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(21, 'EnockBrown', 'enochcheruiyot876@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bike`
--
ALTER TABLE `bike`
  ADD PRIMARY KEY (`bike_id`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`guest_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bike`
--
ALTER TABLE `bike`
  MODIFY `bike_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `guest`
--
ALTER TABLE `guest`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
