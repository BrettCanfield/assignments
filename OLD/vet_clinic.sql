-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2025 at 07:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vet_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `owner_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phone_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`owner_id`, `first_name`, `last_name`, `phone_number`) VALUES
(1, 'Alice', 'Nguyen', '417-555-0123'),
(2, 'Marcus', 'Reed', '417-555-0199'),
(3, 'Priya', 'Patel', '417-555-0117'),
(4, 'Daniel', 'Ortiz', '417-555-0175'),
(5, 'Sarah', 'Kim', '417-555-0144');

-- --------------------------------------------------------

--
-- Table structure for table `pets`
--

CREATE TABLE `pets` (
  `pet_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `species` varchar(20) NOT NULL,
  `breed` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pets`
--

INSERT INTO `pets` (`pet_id`, `owner_id`, `name`, `species`, `breed`) VALUES
(1, 1, 'Milo', 'Dog', 'Labrador Retriever'),
(2, 1, 'Luna', 'Cat', 'Domestic Short Hair'),
(3, 2, 'Rocky', 'Dog', 'Boxer'),
(4, 2, 'Nibbles', 'Rabbit', 'Holland Lop'),
(5, 3, 'Coco', 'Bird', 'Cockatiel'),
(6, 3, 'Simba', 'Cat', 'Maine Coon'),
(7, 4, 'Buddy', 'Dog', 'Mixed'),
(8, 4, 'Pepper', 'Guinea Pig', 'Abyssinian'),
(9, 5, 'Koda', 'Dog', 'Siberian Husky'),
(10, 5, 'Mochi', 'Cat', 'Siamese');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`owner_id`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`pet_id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pets`
--
ALTER TABLE `pets`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pets`
--
ALTER TABLE `pets`
  ADD CONSTRAINT `pets_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`owner_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
