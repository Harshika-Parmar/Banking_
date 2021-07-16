-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 01:51 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MONEY`
--

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE `trans` (
  `transaction_id` int(20) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `amount` float NOT NULL,
  `date_time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`transaction_id`, `sender`, `receiver`, `amount`, `date_time`) VALUES
(1, 'Harshika Parmar', 'Maira Parmar', 100 , '2021-07-10 12:41:48.544309');

-- --------------------------------------------------------

--
-- Table structure for table `user_list`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `balance` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_list`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Harshika Parmar', 'harshika@gmail.com', 5005400),
(2, 'Hitali Yadav', 'hitali@gmail.com', 3670000),
(3, 'Bhavna Makwana', 'bhavna@gmail.com', 4560000),
(4, 'Kiran Bohra', 'kiran@gmail.com', 5007500),
(5, 'Maira Parmar', 'maira@gmail.com', 4007600),
(6, 'Niyati Malik', 'niyati@gmail.com', 3004600),
(7, 'Preeti Naik', 'preeti@gmail.com', 5078000),
(8, 'kaushik Sawant', 'kaushik@gmail.com', 4004500),
(9, 'Lakshmi Poojara', 'lakshmi@gmail.com', 30076400),
(10, 'Kanubhai Mishra', 'kanubhai@gmail.com', 50045300);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trans`
--
ALTER TABLE `trans`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `user_list`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trans`
--
ALTER TABLE `trans`
  MODIFY `transaction_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2 ;

--
-- AUTO_INCREMENT for table `user_list`
--
ALTER TABLE `users`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11 ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
