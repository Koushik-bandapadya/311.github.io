-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 07:20 PM
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
(4000, 'anas ', '01864773296'),
(4001, 'mim ', '01684773232'),
(4002, 'ali', '01684773296'),
(4003, ' koushik ', '01684773297'),
(4004, ' tanjil', ' 0168477329'),
(4005, ' fahim', '1789456123'),
(4006, 'rahat ', ' 0168477329'),
(4007, ' shawon ', '1789456125'),
(4008, 'abir ', '1789456126'),
(4009, 'moin ', '1789456127'),
(4010, 'khan saheb ', '1789456128'),
(4011, 'ali hoque', '1789456129'),
(4012, ' bir uttam ', '1789456130'),
(4013, 'abid khan ', '1789456178'),
(4014, 'nasifa nabid ', '1889456123'),
(4015, 'moin helal ', '1799456123'),
(4016, ' hillol ', '1749456123'),
(4017, ' shawon ', '1779456123'),
(4018, 'abid ', '1689456123'),
(4019, ' junayed ', '1989456123'),
(4020, ' jouthi hoque ', '1489456123'),
(4021, 'aman arian zayed ', '1389456123'),
(4053, 'ferdaus al shams', '0171445577'),
(4054, 'rahat', '0168477329'),
(4055, 'rahat al fahad', '123123123');

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
(1001, 'tanjil', '01715693584', 50000, '0000-00-00'),
(1002, 'ali', '01715693585', 50200, '2012-04-04'),
(1003, 'koushikkkk', '01715693586', 50300, '0000-00-00'),
(1004, 'Mohammed ali', '01726700941', 100000, '2020-04-08'),
(1005, 'anas bin mahboob', '01726700942', 12000, '2012-03-02'),
(1006, 'tania rahman', '01726700943', 10000, '2010-04-05'),
(1007, 'abm samsuzzaman', '01726700944', 10000, '1999-04-10'),
(1008, 'ali haider', '01726700945', 10000, '2010-04-14'),
(1009, 'milon khan', '01726700946', 15000, '2012-04-28'),
(1010, 'sourav barua', '01726700947', 19000, '2020-04-23');

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
(800001, 4939, 20),
(800002, 45, 20),
(800003, 4978, 20),
(800004, 4987, 20),
(800005, 4978, 20),
(800006, 2, 5),
(800007, 4967, 20),
(800008, 4983, 20),
(800009, 4987, 20),
(800010, 4987, 20),
(800011, 15, 20),
(800012, 0, 20),
(800013, 4988, 20),
(800014, 4988, 20);

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
(1004, 'killme3'),
(1005, 'helloworld'),
(1006, 'killme3'),
(1007, '1234'),
(1008, 'killmysoul'),
(1009, 'killmysoul'),
(1010, '1234');

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
(1010, 'no'),
(1014, 'no'),
(1015, 'no'),
(1016, 'yes'),
(1017, 'yes'),
(1018, 'yes'),
(1019, 'yes');

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
(800001, 'mop', 1500),
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
(1000000001, '2020-04-08', 1001, 4004),
(1000000002, '2020-04-05', 1002, 4005),
(1000000003, '2020-03-02', 1005, 4005),
(1000000004, '2020-02-10', 1002, 4007),
(1000000005, '2020-01-13', 1001, 4006),
(1000000006, '2020-01-01', 1006, 4010),
(1000000007, '2020-02-01', 1008, 4008),
(1000000008, '2020-03-10', 1009, 4009),
(1000000009, '2020-01-19', 1010, 4001),
(1000000010, '2020-03-29', 1013, 4002),
(1000000031, '2020-04-12', 1005, 4044),
(1000000032, '2020-04-09', 1001, 4045),
(1000000034, '2020-04-03', 1005, 4000),
(1000000036, '2020-04-19', 1005, 4046),
(1000000037, '2020-04-19', 1005, 4046),
(1000000038, '2020-04-18', 1005, 4046),
(1000000039, '2020-04-19', 1001, 4014),
(1000000040, '2020-04-18', 1002, 4047),
(1000000055, '2020-04-20', 1001, 4014),
(1000000056, '2020-04-15', 1001, 4014),
(1000000057, '2020-04-08', 1002, 4014),
(1000000062, '2020-05-01', 1002, 4051),
(1000000063, '2020-05-01', 1002, 4051),
(1000000064, '2020-05-01', 1002, 4051),
(1000000065, '2020-05-08', 1002, 4052),
(1000000066, '2020-05-08', 1002, 4052),
(1000000067, '2020-05-08', 1002, 4052),
(1000000068, '2020-05-08', 1002, 4052),
(1000000069, '2020-05-08', 1002, 4052),
(1000000070, '2020-05-08', 1002, 4052),
(1000000071, '2020-05-08', 1002, 4052),
(1000000072, '2020-05-05', 1001, 4053),
(1000000073, '2020-05-01', 1001, 4015),
(1000000074, '2020-05-11', 1002, 4014),
(1000000075, '2020-05-10', 1002, 4054),
(1000000076, '2020-05-10', 1001, 4054),
(1000000077, '2020-05-21', 1002, 4014),
(1000000078, '2020-05-01', 1002, 4055),
(1000000079, '2020-05-01', 1002, 4055),
(1000000080, '2020-05-01', 1002, 4055);

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
(1000000001, 103, 10),
(1000000001, 104, 2),
(1000000001, 105, 7),
(1000000002, 101, 2),
(1000000002, 102, 58),
(1000000003, 103, 50),
(1000000003, 104, 4),
(1000000004, 105, 53),
(1000000005, 109, 11),
(1000000036, 800003, 2),
(1000000036, 800005, 5),
(1000000036, 800009, 2),
(1000000036, 800012, 1),
(1000000037, 800001, 5),
(1000000038, 800001, 1),
(1000000038, 800002, 10),
(1000000038, 800004, 10),
(1000000038, 800006, 5),
(1000000039, 800003, 1),
(1000000039, 800006, 2),
(1000000040, 800002, 5),
(1000000040, 800004, 10),
(1000000041, 800001, 1),
(1000000041, 800015, 2),
(1000000042, 800001, 2),
(1000000055, 800006, 2),
(1000000056, 800001, 1),
(1000000057, 800001, 1),
(1000000058, 800002, 5),
(1000000065, 800001, 1),
(1000000071, 800001, 5),
(1000000072, 800002, 5),
(1000000072, 800003, 5),
(1000000073, 800007, 10),
(1000000074, 800007, 5),
(1000000074, 800010, 1),
(1000000076, 800001, 1),
(1000000076, 800007, 2),
(1000000076, 800008, 1),
(1000000077, 800001, 5);

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
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4056;

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
  MODIFY `Product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=800025;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `Sale_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000081;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
