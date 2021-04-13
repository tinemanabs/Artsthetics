-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 07:34 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artsthetics`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `user_bday` varchar(255) NOT NULL,
  `user_contact` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `v_code` varchar(20) NOT NULL,
  `v_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`user_id`, `user_fullname`, `user_bday`, `user_contact`, `user_email`, `user_username`, `user_pass`, `v_code`, `v_status`) VALUES
(8, 'Christine Marie', 'December 25, 1999', '09123456789', 'user@gmail.com', 'tinemanabs', '123', '', 0),
(9, 'Robby Christian', 'June 3, 2000', '09123456789', 'robbychristiandeleon@gmail.com', 'iho', '123', '', 0),
(10, 'Kimberly', 'November 16, 2002', '09123244849', 'kim@gmail.com', 'kim', '123', '6075210a5503a', 0),
(12, 'Christine Manabat', 'December 25, 1999', '09123244849', 'tinemanabat@gmail.com', 'tine', '123', '6075298798a44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_img` varchar(255) NOT NULL,
  `post_caption` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`post_id`, `user_id`, `post_img`, `post_caption`) VALUES
(1, 8, 'uploads/tinemanabs/test_img.jpg', ''),
(3, 8, 'uploads/tinemanabs/test_img.jpg', ''),
(4, 8, 'uploads/tinemanabs/test_img.jpg', ''),
(5, 8, 'uploads/tinemanabs/test_img.jpg', ''),
(6, 9, 'uploads/iho/cy.jpg', ''),
(7, 9, 'uploads/iho/cy.jpg', ''),
(8, 9, 'uploads/iho/theo.jpg', ''),
(9, 8, 'uploads/tinemanabs/background.jpg', ''),
(10, 8, 'uploads/tinemanabs/background.jpg', ''),
(11, 8, 'uploads/tinemanabs/background.jpg', ''),
(12, 8, 'uploads/tinemanabs/background.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_post`
--
ALTER TABLE `user_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_post`
--
ALTER TABLE `user_post`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
