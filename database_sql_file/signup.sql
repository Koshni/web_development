-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 04:35 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `id` int(100) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(4, 'Dev', 'Raj', 'devraj@yahoo.com', 'Dev Raj', 'dev12'),
(5, 'Amy ', 'Green', 'amy_green@gmail.com', 'Amy Green', 'amy@1702'),
(8, 'Agatha ', 'Christie', 'agathachristie16@gmail.com', 'Agatha Christie', 'agathachristie'),
(11, 'Joanne', 'Rowling', 'joanne_97@yahoo.com', 'Joane Rowling', 'joan97'),
(14, 'Alison', 'Wood', 'alisonwood@gmail.com', 'Alison Wood', 'ali08'),
(15, 'Jean', 'Sasson', 'jean_30@yahoo.com', 'Jean Sass', 'sasson23'),
(16, 'John', 'Oliver', 'john_oliver@gmail,com', 'John Oliver', 'john14'),
(17, 'Oliver', 'Benson', 'oliverbenson@gmail.com', 'Oliver Benson', 'oliver16'),
(18, 'Rani', 'Irani', 'rani_irani@gmail.com', 'Rani Irani', 'rani19'),
(19, 'Raj', 'Anand', 'rajanand@gmail.com', 'Raj Anand', 'raj76');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
