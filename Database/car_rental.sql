-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2023 at 09:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars_details`
--

CREATE TABLE `cars_details` (
  `id` int(11) NOT NULL,
  `vehicle_model` varchar(255) NOT NULL,
  `vehicle_number` varchar(255) NOT NULL,
  `rent/day` int(11) NOT NULL,
  `seating_capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars_details`
--

INSERT INTO `cars_details` (`id`, `vehicle_model`, `vehicle_number`, `rent/day`, `seating_capacity`) VALUES
(1, 'Kwid', 'AS-01-GC-5467', 2000, 5),
(2, 'Safari', 'AS-01-FA-2453', 2000, 4),
(3, 'PUNCH', 'AS-01-DS-3724', 6000, 5),
(4, 'Creta', 'AS-01-UG-2145', 8000, 5),
(5, 'Bolero', 'AS-01-GR-3452', 5000, 5),
(6, 'Verna', 'AS-01-JD-8569', 4000, 5),
(7, 'Scorpio', 'AS-01-GT-6754', 7500, 5),
(8, 'Thar', 'AS-01-FV-3189', 15000, 5),
(9, 'Fortuner', 'AS-01-DE-1678', 10000, 5),
(10, 'ferrari', 'AS-01-JD-8569', 4000, 5),
(11, 'Wagonr', 'AS-01-UG-2147', 8000, 5);

-- --------------------------------------------------------

--
-- Table structure for table `car_rent`
--

CREATE TABLE `car_rent` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `vehicle_model` varchar(255) NOT NULL,
  `vehicle_number` varchar(255) NOT NULL,
  `rent/day` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `seating_capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_rent`
--

INSERT INTO `car_rent` (`id`, `customer_name`, `vehicle_model`, `vehicle_number`, `rent/day`, `days`, `start_date`, `seating_capacity`) VALUES
(73, 'Kunal Raha', 'Kwid', 'AS-01-GC-5467', 2000, 2, '2023-09-26', 5),
(74, 'Kunal Raha', 'Safari', 'AS-01-FA-2453', 2500, 3, '2023-09-19', 5),
(81, 'Kunal Raha', 'Kwid', 'AS-01-GC-5467', 2000, 3, '2023-09-20', 5),
(82, 'Kunal Raha', 'Kwid', 'AS-01-GC-5467', 2000, 3, '2023-09-20', 5),
(83, 'RAGHUVEER SINGH', 'PUNCH', 'AS-01-DS-3724', 6000, 5, '2023-09-05', 5),
(84, 'RAGHUVEER SINGH', 'Scorpio', 'AS-01-GT-6754', 7500, 4, '2023-09-28', 5);

-- --------------------------------------------------------

--
-- Table structure for table `car_signin`
--

CREATE TABLE `car_signin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_signin`
--

INSERT INTO `car_signin` (`id`, `username`, `password`, `fullname`, `email`, `phone_no`, `role`) VALUES
(1, 'kunalraha2002@gmail.com', '123', 'Kunal Raha', 'kunalraha2002@gmail.com', '7005020036', 'customer'),
(2, 'kaushiknath@gmail.com', '234', 'Kaushik Nath', 'kaushiknath@gmail.com', '7120045869', 'car_rental_agency'),
(4, 'kunalraha@gmail.com', '567', 'RAGHUVEER SINGH', 'kunalraha@gmail.com', '7005020036', 'customer'),
(5, 'kr123', '789', 'Deep', 'kunalraha2002@gmail.com', '6007898762', 'customer'),
(6, 'kun@gmail.com', '213', 'Deep car agency', 'kunalraha@gmail.com', '56446234417', 'car_rental_agency');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `first_name`, `last_name`, `email`, `message`) VALUES
(3, 'kunal', 'raha', 'kunalraha2002@gmail.com', 'hi'),
(4, 'Raghuveer', 'singh', 'kunalraha@gmail.com', 'please');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars_details`
--
ALTER TABLE `cars_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_rent`
--
ALTER TABLE `car_rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_signin`
--
ALTER TABLE `car_signin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars_details`
--
ALTER TABLE `cars_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `car_rent`
--
ALTER TABLE `car_rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `car_signin`
--
ALTER TABLE `car_signin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
