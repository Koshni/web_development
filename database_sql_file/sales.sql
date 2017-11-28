-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 04:36 PM
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
-- Database: `sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `id` int(100) NOT NULL,
  `sales_title` varchar(50) NOT NULL,
  `descrip` text NOT NULL,
  `contact_num` varchar(20) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`id`, `sales_title`, `descrip`, `contact_num`, `date`) VALUES
(15, 'Pug', 'Contact me for more details. <br />\r\nJOEY Ã°Å¸â€œÅ¾ Show contact numberÃ°Å¸â€œÅ¾<br />\r\nWhatapp, Pm, Msg, Wechat<br />\r\n<br />\r\n(Frist come frist serve) <br />\r\n<br />\r\nBreed - Pug<br />\r\nAge - 2 to 3 month<br />\r\nGender - male<br />\r\nLife Span - 12 to16 years<br />\r\nMka cert - Ã¢ÂÅ’<br />\r\nMicrochip- Ã¢ÂÅ’<br />\r\n1st vaccine &Deworm - Ã¢Å“â€<br />\r\n<br />\r\nÃ¢Å“â€¦Quality ensured<br />\r\nÃ¢Å“â€¦Health warranty provided<br />\r\nÃ¢Å“â€1st vaccine &Deworm up to date<br />\r\nÃ¢Å“â€Vaccination record provided<br />\r\nRead more at https://www.mudah.my/Pug-59297800.htm#3kTLmmIozWHiXrkt.99', '+6012-6543397', '2017-11-28 18:29:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
