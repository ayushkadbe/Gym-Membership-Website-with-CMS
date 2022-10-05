-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 05, 2022 at 11:52 AM
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
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(2552) NOT NULL,
  `height` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `bloodgroup` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `gender`, `address`, `height`, `weight`, `bloodgroup`, `password`) VALUES
(1, 'Vision', 'vision@witch.world', '987654210', 'male', 'DarkWorld', '6', '78', 'O', 'DarkHold69'),
(2, 'Wanda Vision', 'wanda@witch.world', '987654210', 'Female', 'DarkWorld', '6', '78', 'O', 'DarkHold69'),
(3, 'Thor Odison', 'thor@asgard.com', '1234567890', 'male', 'Asgard', '6', '78', 'A', 'JaneForever3000'),
(4, 'Steve Rogers', 'steve@captain.com', '1234347890', 'male', 'NewYork', '6', '75', 'B', 'PeggyForever3000'),
(6, 'Bahubali', 'prabhas@bahubali.com', '1234347890', 'Alpha Male', 'Chennai, Tamil Nadu', '6', '81', 'B+', '#DevSena1'),
(10, 'Peter Parket', 'peter@spydy.com', '8765438717', 'Male', 'Stark Tower', '6', '55', 'b+', 'GwenTen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
