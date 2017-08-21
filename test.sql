-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2017 at 05:51 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `aip`
--

CREATE TABLE `aip` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `release_date` date NOT NULL,
  `duration` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `genre` text NOT NULL,
  `synopsis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aip`
--

INSERT INTO `aip` (`id`, `title`, `release_date`, `duration`, `genre`, `synopsis`) VALUES
(1, 'People Places Things', '2016-08-15', '2017-08-13 13:48:25', 'Comedy', 'Will Henry is a newly single graphic novelist balancing parenting hisyoung twin daughters and a classroom full of students while exploringand navigating the rich complexities of new love and letting go of thewoman who left him.'),
(2, 'dxffd', '2017-08-20', '0000-00-00 00:00:00', 'xcvcxv', 'vxc xcvxcxcv'),
(4, 'dxffd', '2017-08-20', '0000-00-00 00:00:00', 'xcvcxv', 'vxc xcvxcxcv'),
(5, 'dfvfdgv', '2017-08-18', '0000-00-00 00:00:00', 'xvvcx', 'xvgvv'),
(6, 'dfvfdgv', '2017-08-18', '0000-00-00 00:00:00', 'xvvcx', 'xvgvv'),
(7, 'dfvfdgv', '2017-08-18', '0000-00-00 00:00:00', 'xvvcx', 'xvgvv'),
(8, 'dfvfdgv', '2017-08-18', '0000-00-00 00:00:00', 'xvvcx', 'xvgvv'),
(9, 'dfvfdgv', '2017-08-18', '0000-00-00 00:00:00', 'xvvcx', 'xvgvv'),
(10, 'dfvfdgv', '2017-08-18', '0000-00-00 00:00:00', 'xvvcx', 'xvgvv'),
(11, 'dfvfdgv', '2017-08-18', '0000-00-00 00:00:00', 'xvvcx', 'xvgvv'),
(12, 'dfvfdgv', '2017-08-18', '0000-00-00 00:00:00', 'xvvcx', 'xvgvv'),
(13, 'dfvfdgv', '2017-08-18', '0000-00-00 00:00:00', 'xvvcx', 'xvgvv'),
(14, 'dfvfdgv', '2017-08-18', '0000-00-00 00:00:00', 'xvvcx', 'xvgvv'),
(15, 'dfvfdgv', '2017-08-18', '0000-00-00 00:00:00', 'xvvcx', 'xvgvv'),
(16, 'Bahubali', '2017-08-09', '0000-00-00 00:00:00', 'action', 'nice'),
(17, 'Bahubali', '2017-08-09', '0000-00-00 00:00:00', 'action', 'nice'),
(18, 'Bahubali', '2017-08-09', '0000-00-00 00:00:00', 'action', 'nice'),
(19, 'sdfsdf', '2017-08-10', '0000-00-00 00:00:00', 'sdf', 'vv f'),
(20, 'kjnnn', '2017-08-24', '0000-00-00 00:00:00', 'dhghd', 'cgn');

-- --------------------------------------------------------

--
-- Table structure for table `db`
--

CREATE TABLE `db` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` int(20) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db`
--

INSERT INTO `db` (`id`, `name`, `mobile`, `email`) VALUES
(1, 'cxzx', 0, ''),
(2, 'cxzx', 0, ',n,'),
(3, 'fvcvc', 0, 'xdvxcv'),
(4, 'fvcvc', 0, 'xdvxcv'),
(5, 'fvcvc', 0, 'xdvxcv'),
(6, 'fvcvc', 0, 'xdvxcv'),
(7, 'fvcvc', 0, 'xdvxcv'),
(8, 'fvcvc', 0, 'xdvxcv'),
(9, 'nmmm ', 0, 'jkbk'),
(10, 'hjh', 0, 'nnm'),
(11, 'hjh', 0, 'nnm'),
(12, 'n n', 0, 'fbbn'),
(13, 'dczdxc', 0, 'dfgvfd'),
(14, 'dcxv', 0, 'vxdvv');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(20) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `address` text CHARACTER SET utf8 NOT NULL,
  `city` text CHARACTER SET utf8 NOT NULL,
  `state` varchar(20) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `address`, `city`, `state`, `feedback`) VALUES
(97, 'Priyadharshini Devanand', 'priya31793@gmail.com', '151,John street,', 'Lidcombe', 'NSW', 'I would like to know if there is any vacancy for Educators'),
(98, 'Aswin', 'aswin@gmail.com', '151,John street,', 'Select', 'Select', 'good service');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aip`
--
ALTER TABLE `aip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db`
--
ALTER TABLE `db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aip`
--
ALTER TABLE `aip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `db`
--
ALTER TABLE `db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
