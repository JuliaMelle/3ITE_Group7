-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2023 at 06:37 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orglink`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `number` varchar(12) NOT NULL,
  `program` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `number`, `program`, `email`, `username`, `password`, `profile`) VALUES
(1, 'julia', 'pascua', '534543', 'emerut', 'jtpascua@student.apc.edu.ph', 'rr352', 'e10adc3949ba59abbe56e057f20f883e', '1692979068_8174.png'),
(2, 'julia', 'pascua', '534543', 'emerut44', 'jtpascua2@student.apc.edu.ph', 'nicole', 'd41d8cd98f00b204e9800998ecf8427e', '1692979239_2134.png'),
(3, 'julia', 'pascua', '0092321', 'emerut4423', 'j@gmail.com', 'juliamelle', '25f9e794323b453885f5181f1b624d0b', '1692979350_2936.png'),
(4, 'julia2', 'pascua2', '0092321213', 'emerut23', 'j@student.apc.edu.ph', 'nicole223', '25d55ad283aa400af464c76d713c07ad', '1692979396_3747.png'),
(5, 'julia21', 'pascua21', '00923212131', 'emerut233', 'j2@student.apc.edu.ph', 'nicole54', '25d55ad283aa400af464c76d713c07ad', '1692979527_9610.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
