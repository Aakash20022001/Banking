-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3030
-- Generation Time: Sep 19, 2021 at 05:54 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `S.No` int(12) NOT NULL,
  `Account_Number` varchar(12) NOT NULL,
  `Full Name` varchar(24) NOT NULL,
  `Account Type` varchar(12) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Contact No.` varchar(12) NOT NULL,
  `Amount` int(20) NOT NULL,
  `status1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`S.No`, `Account_Number`, `Full Name`, `Account Type`, `Email`, `Contact No.`, `Amount`, `status1`) VALUES
(1, 'BOD202111220', 'AAKASH', 'SAVINGS', 'aakash@gmail.com', '9999999991', 13000, 'debited'),
(4, 'BOD202111221', 'ABHISHEK', 'SAVINGS', 'abhishek@gmail.com', '9999999777', 6500, 'credited'),
(2, 'BOD202111222', 'ADITYA', 'SAVINGS', 'aditya@gmail.com', '9999998888', 5000, 'credited'),
(3, 'BOD202111223', 'AKSHAT', 'CURRENT', 'akshat123@gmail.com', '9999998866', 8500, 'debited'),
(5, 'BOD202111224', 'HARSHAL', 'SAVINGS', 'harshalsingh@gmail.com', '9999999666', 6000, 'credited'),
(6, 'BOD202111225', 'LUCKY', 'CURRENT', 'luckys1999@gmail.com', '9999999555', 3000, 'debited'),
(7, 'BOD202111226', 'MAYANK', 'SAVINGS', 'mayankparihar@gmail.com', '9999994444', 11000, 'credited'),
(9, 'BOD202111227', 'NAYAN', 'CURRENT', 'nayansharma@gmail.com', '9999999123', 3000, 'credited'),
(10, 'BOD202111228', 'PRATHAM', 'SAVINGS', 'prathamcool@gmail.com', '9999992323', 8000, 'credited'),
(11, 'BOD202111229', 'SUYANSH', 'SAVINGS', 'suyashtomar@gmail.com', '9999995656', 0, 'debited'),
(12, 'BOD202111230', 'TANISHQ', 'SAVINGS', 'tanishqsinghsikarwar@gmail.com', '9999994466', 9000, 'credited');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `tid` int(11) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `sender_acc` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `receiver_acc` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `transaction_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`tid`, `sender`, `sender_acc`, `receiver`, `receiver_acc`, `amount`, `transaction_date`, `msg`) VALUES
(1, 'Aditya', 'BOD202111222', 'Aakash', 'BOD202111220', 2000, '2021-09-16 12:10:29', 'fundraising'),
(3, 'Akshat', 'BOD202111223', 'Abhishek', 'BOD202111221', 1000, '2021-09-16 12:10:29', 'Party'),
(12, 'Suyansh', 'BOD202111229', 'Mayank', 'BOD202111226', 3500, '0000-00-00 00:00:00', 'Rent money'),
(13, 'Suyansh', 'BOD202111229', 'Mayank', 'BOD202111226', 1000, '2021-09-17 12:29:13', 'No'),
(14, 'Aakash', 'BOD202111220', 'Harshal', 'BOD202111224', 2000, '2021-09-17 13:02:01', 'fees'),
(15, 'Lucky', 'BOD202111225', 'Nayan', 'BOD202111227', 1000, '2021-09-17 18:30:10', 'Party');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Account_Number`),
  ADD KEY `s.no` (`S.No`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `S.No` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
