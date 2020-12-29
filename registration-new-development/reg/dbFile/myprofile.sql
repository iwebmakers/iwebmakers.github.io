-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 07:00 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myprofile`
--

-- --------------------------------------------------------

--
-- Table structure for table `email_confirmation`
--

CREATE TABLE `email_confirmation` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `confirmationCode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forgotpassword`
--

CREATE TABLE `forgotpassword` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `job` varchar(100) NOT NULL,
  `skills` text NOT NULL,
  `bio` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `password`, `image`, `job`, `skills`, `bio`, `status`) VALUES
(10, 'Shakil Khan ahmed', 'shakilkhanblogger@hotmail.com', '$2y$10$d09ujI8HSl5.UFjEQgRFnuPDTowPI7CgM7xlVR83T5xMEbG14CoLa', '9544465556.jpg', 'software engineer', 'NodeJs, ReactJs, VueJs', 'My name is shakil khan I,m Fullstack developer and online teacher', 1),
(18, 'Shakil Ahmed khan', 'emailreceiverudemy@gmail.com', '$2y$10$HlCfozpA4mP4No7aV17FSepDM2v2DxryRH48kckrU0z/5NHUx9XZy', '8413866597.jpg', 'software engineer', 'PHP,ReactJS, Vuejs', 'My name is Shakil Khan & I,m a software engineer', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_confirmation`
--
ALTER TABLE `email_confirmation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forgotpassword`
--
ALTER TABLE `forgotpassword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email_confirmation`
--
ALTER TABLE `email_confirmation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `forgotpassword`
--
ALTER TABLE `forgotpassword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
