-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2020 at 10:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp_demo_02`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `phone`) VALUES
(4001, 'anas ', '01864773296'),
(4066, 'shihab', '01700145824'),
(4067, 'khalid joy', '01547845632'),
(4068, 'shahriar islam', '01236547125'),
(4069, 'nasifa nabid ', '01556478459'),
(4070, 'rashad m mahbub', '01732564785');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_ID` int(10) NOT NULL,
  `Emp_Name` varchar(20) NOT NULL,
  `Contact_no` varchar(11) NOT NULL,
  `Salary` int(6) NOT NULL,
  `Hire_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_ID`, `Emp_Name`, `Contact_no`, `Salary`, `Hire_date`) VALUES
(1001, 'tanjil mahmood', '01715693584', 50000, '2020-01-23'),
(1002, 'ali hoque', '01715693585', 50200, '2012-04-04'),
(1003, 'koushik banerjee', '01715693586', 50300, '2020-01-23'),
(1004, 'Mohammed ali', '01726700941', 100000, '2020-01-23'),
(1005, 'anas bin mahboob', '01726700942', 12000, '0000-00-00'),
(1006, 'tania rahman', '01726700943', 10000, '0000-00-00'),
(1007, 'abm samsuzzaman', '01726700944', 10000, '1999-04-10'),
(1008, 'ali haider', '01726700945', 10000, '2010-04-14'),
(1009, 'milon khan', '01726700946', 15000, '2012-04-28'),
(1010, 'sourav barua', '01726700947', 19500, '2002-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `Product_id` int(10) NOT NULL,
  `current_stock` int(10) NOT NULL,
  `minimum_stock` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`Product_id`, `current_stock`, `minimum_stock`) VALUES
(800001, 1640, 20),
(800002, 11, 20),
(800003, 4961, 20),
(800004, 4888, 20),
(800005, 4962, 20),
(800006, 1, 5),
(800007, 4938, 20),
(800008, 4980, 20),
(800009, 4980, 20),
(800010, 4982, 20),
(800011, 12, 20),
(800012, 0, 20),
(800013, 4976, 20),
(800014, 4982, 20);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `employee_id` int(11) NOT NULL,
  `password` varchar(20) NOT NULL DEFAULT '1234'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`employee_id`, `password`) VALUES
(1001, 'killme'),
(1002, 'killme3'),
(1003, 'killme3'),
(1004, 'tjm1234'),
(1005, 'helloworld'),
(1006, 'killme3'),
(1007, 'yts007'),
(1008, 'killmysoul'),
(1009, 'killmysoul'),
(1010, 'yts4545');

-- --------------------------------------------------------

--
-- Table structure for table `manager_authorization`
--

CREATE TABLE `manager_authorization` (
  `employee_id` int(10) NOT NULL,
  `authorization` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager_authorization`
--

INSERT INTO `manager_authorization` (`employee_id`, `authorization`) VALUES
(1001, 'yes'),
(1002, 'no'),
(1003, 'yes'),
(1004, 'yes'),
(1005, 'no'),
(1006, 'no'),
(1007, 'no'),
(1008, 'no'),
(1009, 'no'),
(1010, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_id` int(10) NOT NULL,
  `Product_name` varchar(30) NOT NULL,
  `Unit_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_id`, `Product_name`, `Unit_price`) VALUES
(800001, 'mop', 150),
(800002, 'aloo paratha', 60),
(800003, 'biscuit', 40),
(800004, 'chanachur', 60),
(800005, 'dal puri', 100),
(800006, 'Moa', 5),
(800007, 'kurkurey  chips', 10),
(800008, 'ruler', 10),
(800009, 'eraser', 10),
(800010, 'cap', 1000),
(800011, 'shwal', 1050),
(800012, 'shirt', 1000),
(800013, 'sunglass', 1050),
(800014, 'apple', 180);

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `Sale_id` int(10) NOT NULL,
  `Sale_date` date NOT NULL,
  `Sold_by` int(11) NOT NULL,
  `Customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`Sale_id`, `Sale_date`, `Sold_by`, `Customer_id`) VALUES
(1000000001, '2020-05-05', 1001, 4000),
(1000000141, '2020-05-20', 1001, 4066),
(1000000142, '2020-05-30', 1001, 4067),
(1000000143, '2020-05-21', 1001, 4068),
(1000000144, '2020-05-12', 1001, 4068),
(1000000145, '2020-05-11', 1002, 4069),
(1000000146, '2020-05-30', 1001, 4070),
(1000000147, '2020-05-20', 1001, 4070);

-- --------------------------------------------------------

--
-- Table structure for table `sale_details`
--

CREATE TABLE `sale_details` (
  `sale_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sale_details`
--

INSERT INTO `sale_details` (`sale_id`, `product_id`, `quantity`) VALUES
(1000000001, 800001, 1),
(1000000141, 800001, 1),
(1000000141, 800003, 2),
(1000000141, 800004, 1),
(1000000141, 800010, 1),
(1000000142, 800001, 2),
(1000000142, 800011, 1),
(1000000143, 800001, 2),
(1000000143, 800007, 1),
(1000000143, 800013, 1),
(1000000144, 800001, 0),
(1000000144, 800005, 2),
(1000000144, 800009, 1),
(1000000144, 800014, 1),
(1000000145, 800001, 5),
(1000000145, 800004, 5),
(1000000145, 800005, 1),
(1000000145, 800006, 1),
(1000000146, 800002, 2),
(1000000146, 800004, 1),
(1000000146, 800010, 1),
(1000000147, 800004, 5),
(1000000147, 800007, 2),
(1000000147, 800010, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_ID`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`Sale_id`);

--
-- Indexes for table `sale_details`
--
ALTER TABLE `sale_details`
  ADD PRIMARY KEY (`sale_id`,`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4071;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Emp_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1020;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1020;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=800026;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `Sale_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000148;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
