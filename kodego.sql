-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 27, 2022 at 02:29 AM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kodego`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_number` int(11) NOT NULL,
  `last_name` char(50) NOT NULL,
  `first_name` char(50) NOT NULL,
  `salary` int(11) DEFAULT NULL,
  `dept_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_number`, `last_name`, `first_name`, `salary`, `dept_id`) VALUES
(1001, 'Smith', 'John', 62000, 500),
(1002, 'Anderson', 'Jane', 57500, 500),
(1003, 'Everest', 'Brad', 71000, 501),
(1004, 'Horvath', 'Jack', 42000, 501);

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` char(50) NOT NULL,
  `city` char(50) DEFAULT NULL,
  `state` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_name`, `city`, `state`) VALUES
(100, 'Microsoft', 'Redmond', 'Washington'),
(200, 'Google', 'Mountain View', 'California'),
(300, 'Oracle', 'Redwood City', 'California'),
(400, 'Kimberly-Clark', 'Irving', 'Texas'),
(500, 'Tyson Foods', 'Springdale', 'Arkansas'),
(600, 'SC Johnson', 'Racine', 'Wisconsin'),
(700, 'Dole Food Company', 'Westlake Village', 'California'),
(800, 'Flowers Foods', 'Thomasville', 'Georgia'),
(900, 'Electronic Arts', 'Redwood City', 'California');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_number`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
