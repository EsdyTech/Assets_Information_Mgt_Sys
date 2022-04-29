-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 05:16 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assets_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(10) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `emailAddress` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `firstName`, `lastName`, `emailAddress`, `password`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '11111');

-- --------------------------------------------------------

--
-- Table structure for table `assetscategory_tbl`
--

CREATE TABLE `assetscategory_tbl` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `dateCreated` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assetscategory_tbl`
--

INSERT INTO `assetscategory_tbl` (`id`, `categoryName`, `description`, `dateCreated`) VALUES
(3, 'Computer Hardwares', 'All computer hardwares', '2022-04-03 13:50:21'),
(4, 'Goods Deliverables', 'All Goods Deliverables', '2022-04-03 13:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `assetstransfer_tbl`
--

CREATE TABLE `assetstransfer_tbl` (
  `id` int(10) NOT NULL,
  `assetId` varchar(255) DEFAULT NULL,
  `assetCategoryId` varchar(20) DEFAULT NULL,
  `fromBranchId` varchar(20) DEFAULT NULL,
  `toBranchId` varchar(20) DEFAULT NULL,
  `transferedById` varchar(20) DEFAULT NULL,
  `dateTransfered` varchar(20) DEFAULT NULL,
  `dateCreated` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assetstransfer_tbl`
--

INSERT INTO `assetstransfer_tbl` (`id`, `assetId`, `assetCategoryId`, `fromBranchId`, `toBranchId`, `transferedById`, `dateTransfered`, `dateCreated`) VALUES
(4, '4', '3', '23', '26', '1', '2022-04-28', '2022-04-03 16:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `assets_tbl`
--

CREATE TABLE `assets_tbl` (
  `id` int(10) NOT NULL,
  `assetId` varchar(255) DEFAULT NULL,
  `assetName` varchar(255) DEFAULT NULL,
  `assetDescription` text DEFAULT NULL,
  `amount` varchar(10) DEFAULT NULL,
  `quantity` varchar(10) DEFAULT NULL,
  `quantityRem` varchar(10) DEFAULT NULL,
  `branchId` varchar(10) DEFAULT NULL,
  `departmentId` varchar(10) DEFAULT NULL,
  `assetCategoryId` varchar(10) DEFAULT NULL,
  `vendorId` varchar(10) DEFAULT NULL,
  `datePurchased` varchar(20) DEFAULT NULL,
  `dateCreated` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assets_tbl`
--

INSERT INTO `assets_tbl` (`id`, `assetId`, `assetName`, `assetDescription`, `amount`, `quantity`, `quantityRem`, `branchId`, `departmentId`, `assetCategoryId`, `vendorId`, `datePurchased`, `dateCreated`) VALUES
(4, '100003', 'Hp Pro book', 'Laptop computer', '7901250.00', '3', '2', '26', '3', '3', '1', '2022-04-13', '2022-04-03 15:12:19'),
(5, '100004', 'Hp Pro Elite book', 'Laptop computer', '4475004.21', '7', '7', '23', '3', '3', '1', '2022-04-14', '2022-04-03 15:12:54');

-- --------------------------------------------------------

--
-- Table structure for table `branchusers_tbl`
--

CREATE TABLE `branchusers_tbl` (
  `id` int(10) NOT NULL,
  `firstName` varchar(255) DEFAULT NULL,
  `lastName` varchar(255) DEFAULT NULL,
  `phoneNo` varchar(15) DEFAULT NULL,
  `emailAddress` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `branchId` varchar(10) DEFAULT NULL,
  `departmentId` varchar(10) DEFAULT NULL,
  `isActive` varchar(255) DEFAULT NULL,
  `dateCreated` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branchusers_tbl`
--

INSERT INTO `branchusers_tbl` (`id`, `firstName`, `lastName`, `phoneNo`, `emailAddress`, `password`, `branchId`, `departmentId`, `isActive`, `dateCreated`) VALUES
(1, 'Adewale', 'Omoba', '09099889930', 'Adewaleomoba33@yahoo.com', '12345', '23', '3', 'Yes', '2022-04-03 14:35:42'),
(3, 'Ajose', 'Sewanu', '09088997762', 'Ajose22sewanu@gmail.com', '11111', '23', '1', 'Yes', '2022-04-03 14:37:14');

-- --------------------------------------------------------

--
-- Table structure for table `branch_tbl`
--

CREATE TABLE `branch_tbl` (
  `id` int(10) NOT NULL,
  `branchName` varchar(255) DEFAULT NULL,
  `branchLocation` varchar(255) DEFAULT NULL,
  `branchAddress` text DEFAULT NULL,
  `branchContact` varchar(255) DEFAULT NULL,
  `dateCreated` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch_tbl`
--

INSERT INTO `branch_tbl` (`id`, `branchName`, `branchLocation`, `branchAddress`, `branchContact`, `dateCreated`) VALUES
(23, 'Awolowo Branch', 'Awolowo road', 'Awolowo road ikoyi lagos', '09088990000', '2022-04-03 13:35:24'),
(26, 'Victorial Island', 'Awolowo road', 'Awolowo road ikoyi lagos', '09088990000', '2022-04-03 13:38:18'),
(28, 'dasdas', 'Awolowo road', 'Awolowo road ikoyi lagos', '09088990000', '2022-04-03 17:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `department_tbl`
--

CREATE TABLE `department_tbl` (
  `id` int(10) NOT NULL,
  `departmentName` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `dateCreated` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department_tbl`
--

INSERT INTO `department_tbl` (`id`, `departmentName`, `description`, `dateCreated`) VALUES
(1, 'Logisitics', 'Logistics Department', '2022-04-03 13:52:39'),
(3, 'Finance', 'Finance', '2022-04-03 13:52:58');

-- --------------------------------------------------------

--
-- Table structure for table `soldassests_tbl`
--

CREATE TABLE `soldassests_tbl` (
  `id` int(10) NOT NULL,
  `assetId` varchar(10) DEFAULT NULL,
  `assetCategoryId` varchar(10) DEFAULT NULL,
  `quantitySold` varchar(20) DEFAULT NULL,
  `amountSold` varchar(20) DEFAULT NULL,
  `dateSold` varchar(20) DEFAULT NULL,
  `dateCreated` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soldassests_tbl`
--

INSERT INTO `soldassests_tbl` (`id`, `assetId`, `assetCategoryId`, `quantitySold`, `amountSold`, `dateSold`, `dateCreated`) VALUES
(5, '4', '3', '1', '12642000.00', '2022-04-08', '2022-04-03 16:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_tbl`
--

CREATE TABLE `vendor_tbl` (
  `id` int(10) NOT NULL,
  `vendorName` varchar(255) DEFAULT NULL,
  `vendorLocation` varchar(255) DEFAULT NULL,
  `vendorContact` varchar(255) DEFAULT NULL,
  `dateCreated` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_tbl`
--

INSERT INTO `vendor_tbl` (`id`, `vendorName`, `vendorLocation`, `vendorContact`, `dateCreated`) VALUES
(1, 'Microsoft', 'Silicon Valley', '09088990000', '2022-04-03 14:00:55'),
(4, 'Mobil', 'Surulere', '09088990000', '2022-04-03 14:01:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assetscategory_tbl`
--
ALTER TABLE `assetscategory_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assetstransfer_tbl`
--
ALTER TABLE `assetstransfer_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets_tbl`
--
ALTER TABLE `assets_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branchusers_tbl`
--
ALTER TABLE `branchusers_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_tbl`
--
ALTER TABLE `branch_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_tbl`
--
ALTER TABLE `department_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soldassests_tbl`
--
ALTER TABLE `soldassests_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_tbl`
--
ALTER TABLE `vendor_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assetscategory_tbl`
--
ALTER TABLE `assetscategory_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `assetstransfer_tbl`
--
ALTER TABLE `assetstransfer_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `assets_tbl`
--
ALTER TABLE `assets_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `branchusers_tbl`
--
ALTER TABLE `branchusers_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `branch_tbl`
--
ALTER TABLE `branch_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `department_tbl`
--
ALTER TABLE `department_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `soldassests_tbl`
--
ALTER TABLE `soldassests_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vendor_tbl`
--
ALTER TABLE `vendor_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
