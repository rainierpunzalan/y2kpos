-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2016 at 08:01 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `y2kpos`
--

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`ID`, `NAME`) VALUES
(4, 'rainier'),
(5, 'rainier');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `FOOD_ID` int(11) NOT NULL,
  `FOOD_NAME` varchar(90) NOT NULL,
  `SRP` decimal(10,2) NOT NULL,
  `FOOD_CATEGORY` int(11) NOT NULL,
  `AVAILABLE` tinyint(1) NOT NULL DEFAULT '0',
  `ACTIVE` tinyint(1) NOT NULL DEFAULT '0',
  `PICTURE` varchar(100) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food_category`
--

CREATE TABLE `food_category` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `HISTORY_ID` int(11) NOT NULL,
  `USER_ID` int(11) NOT NULL,
  `REFERENCE_ID` varchar(50) NOT NULL,
  `REMARKS_ID` varchar(500) NOT NULL,
  `LOG_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`HISTORY_ID`, `USER_ID`, `REFERENCE_ID`, `REMARKS_ID`, `LOG_DATE`) VALUES
(1, 0, '', 'rpgpunzalan Logged in', '2016-04-30 09:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ORDER_ID` int(11) NOT NULL,
  `TRANSACTION_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ORDER_STATUS` int(11) NOT NULL,
  `ORDERTAKER` int(11) NOT NULL,
  `ISTAKEOUT` tinyint(1) NOT NULL,
  `TABLE_NO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ordertakers`
--

CREATE TABLE `ordertakers` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `OI_ID` int(11) NOT NULL,
  `ORDER_ID` int(11) NOT NULL,
  `FOOD_ID` int(11) NOT NULL,
  `QUANTITY` int(11) NOT NULL,
  `SRP` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `setting_key` varchar(30) NOT NULL,
  `value` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`setting_key`, `value`) VALUES
('color1', ''),
('color2', ''),
('color3', ''),
('companyTagline', ''),
('company_name', 'Sample Company'),
('logo', 'logo.jpg'),
('site_title', 'Y2K POS');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_level`
--

CREATE TABLE `user_access_level` (
  `ID` int(11) NOT NULL,
  `ACCESS_LEVEL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_level`
--

INSERT INTO `user_access_level` (`ID`, `ACCESS_LEVEL`) VALUES
(1, 'USER'),
(9, 'DEV');

-- --------------------------------------------------------

--
-- Table structure for table `user_accounts`
--

CREATE TABLE `user_accounts` (
  `USER_ID` int(11) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(200) NOT NULL,
  `USER_ACCESS_LEVEL` int(11) NOT NULL,
  `CREATED_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `USER_STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_accounts`
--

INSERT INTO `user_accounts` (`USER_ID`, `USERNAME`, `PASSWORD`, `USER_ACCESS_LEVEL`, `CREATED_DATE`, `USER_STATUS`) VALUES
(1, 'rpgpunzalan', '115927b66ae4977a38dab15ca0e3793b', 9, '2015-12-13 10:52:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `ID` int(11) NOT NULL,
  `STATUS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`ID`, `STATUS`) VALUES
(1, 'ACTIVE'),
(2, 'INACTIVE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`FOOD_ID`);

--
-- Indexes for table `food_category`
--
ALTER TABLE `food_category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`HISTORY_ID`),
  ADD KEY `USER_ID` (`USER_ID`,`REFERENCE_ID`,`REMARKS_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ORDER_ID`);

--
-- Indexes for table `ordertakers`
--
ALTER TABLE `ordertakers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`OI_ID`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`setting_key`);

--
-- Indexes for table `user_access_level`
--
ALTER TABLE `user_access_level`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_accounts`
--
ALTER TABLE `user_accounts`
  ADD PRIMARY KEY (`USER_ID`),
  ADD KEY `USER_ACCESS_LEVEL` (`USER_ACCESS_LEVEL`,`USER_STATUS`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `FOOD_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `food_category`
--
ALTER TABLE `food_category`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `HISTORY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ORDER_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ordertakers`
--
ALTER TABLE `ordertakers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `OI_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_access_level`
--
ALTER TABLE `user_access_level`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_accounts`
--
ALTER TABLE `user_accounts`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_status`
--
ALTER TABLE `user_status`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
