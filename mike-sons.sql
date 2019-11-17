-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2019 at 06:55 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mike-sons`
--

-- --------------------------------------------------------

--
-- Table structure for table `Apply job`
--

CREATE TABLE `Apply job` (
  `id` int(10) NOT NULL,
  `jobid` int(10) NOT NULL,
  `personaid` int(10) NOT NULL,
  `state` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Apply job`
--

INSERT INTO `Apply job` (`id`, `jobid`, `personaid`, `state`) VALUES
(1, 2, 1, '1'),
(2, 1, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `Apply tender`
--

CREATE TABLE `Apply tender` (
  `id` int(10) NOT NULL,
  `tenderid` int(10) NOT NULL,
  `personnaid` int(10) NOT NULL,
  `state` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Apply tender`
--

INSERT INTO `Apply tender` (`id`, `tenderid`, `personnaid`, `state`) VALUES
(4, 4, 1, 2),
(5, 4, 1, 1),
(6, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Jobs`
--

CREATE TABLE `Jobs` (
  `id` int(10) NOT NULL,
  `job-title` varchar(20) NOT NULL,
  `job-desc` varchar(1000) NOT NULL,
  `vacancies` int(10) NOT NULL,
  `salary` int(50) NOT NULL,
  `category` varchar(20) NOT NULL,
  `due-date` date NOT NULL,
  `organisation` varchar(200) NOT NULL,
  `state` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Jobs`
--

INSERT INTO `Jobs` (`id`, `job-title`, `job-desc`, `vacancies`, `salary`, `category`, `due-date`, `organisation`, `state`) VALUES
(1, 'marketing', 'Slll networks', 3, 10000, 'permanent', '2019-11-30', '1', 0),
(2, 'Joomla', 'Want a web developer for my site please if interested reach out', 1, 10000, 'temporary', '2019-11-07', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tenders`
--

CREATE TABLE `tenders` (
  `id` int(10) NOT NULL,
  `tender_name` varchar(20) NOT NULL,
  `tender_description` varchar(1000) NOT NULL,
  `category` varchar(15) NOT NULL,
  `due_date` date NOT NULL,
  `price` int(100) NOT NULL,
  `org` varchar(200) NOT NULL,
  `state` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tenders`
--

INSERT INTO `tenders` (`id`, `tender_name`, `tender_description`, `category`, `due_date`, `price`, `org`, `state`) VALUES
(1, 'mike', 'hsshshhsh', 'contract ', '2019-11-16', 54545, '1', 0),
(2, 'mike', 'hsshshhsh', 'contract ', '2019-11-16', 54545, '1', 0),
(3, 'Nothing ', 'Thgf', 'contract ', '2019-11-23', 2555, '1', 0),
(4, 'Maize ', 'We need about 7000 tonnes  of maize if you can  provide please apply for this tender', 'product', '2019-11-30', 1000000, '1', 0),
(5, 'michael', 'asdfghjkl;kjhgfdsasdfghjkjhgfdszASZdfghjkhgfdsz', 'product', '2019-11-21', 10, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(10) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Michael kariuki', 'mwkariuki2e@gmail.com', '35287193');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Apply job`
--
ALTER TABLE `Apply job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Apply tender`
--
ALTER TABLE `Apply tender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Jobs`
--
ALTER TABLE `Jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenders`
--
ALTER TABLE `tenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Apply job`
--
ALTER TABLE `Apply job`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Apply tender`
--
ALTER TABLE `Apply tender`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Jobs`
--
ALTER TABLE `Jobs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tenders`
--
ALTER TABLE `tenders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
