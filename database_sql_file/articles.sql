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
-- Database: `articles`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `art_id` int(100) NOT NULL,
  `title` text NOT NULL,
  `entry` text NOT NULL,
  `date_entered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`art_id`, `title`, `entry`, `date_entered`) VALUES
(20, 'Teach Your Dog to Command', 'Is your dog easily distracted? Does he spend your entire walk lunging at squirrels and barking at people? Is he unable to to pass a brightly colored umbrella or a playing child without wanting to investigate?\r\n<br />\r\nIf your dogâ€™s curiosity is slowing down your walks, thereâ€™s a solution. Training your dog to â€œlookâ€ on command can help keep him focused on where heâ€™s going without missing any of the excitement thatâ€™s happening around him.\r\n<br />\r\nTraining your dog to look in the direction of something novel, interesting or possibly even slightly unnerving may sound nonsensical. Why draw your dogâ€™s attention to something that may excite or even upset him? When you teach your dog to â€œlook,â€ you also train him to return his attention to you. This can help to make novel situations more predictable and give your dog a way to focus and avoid overreacting to something that might be scary or stressful â€” or just super exciting â€” for him.\r\n\r\nLook Over There!\r\nHold an object your dog will be interested in â€” like a chew toy or a ball â€” behind your back, where your dog cannot see it. A toy with a squeaker or rattle can be helpful for catching your dogâ€™s attention. You can also wiggle or wave the toy gently to catch his eye. \r\n\r\nAsk your dog to look at you; once he is making eye contact, pull the hidden item out and hold it out to your side, away from where your dog is looking. Immediately mark and reward any glance or movement your dog makes in the direction of the object.', '2017-11-28 18:15:26'),
(21, 'How to Help a Dog With Separation Anxiety', 'Have you ever come home from work to find that your dog has chewed a hole in the door, pooped in the house or, according to the neighbors, barked incessantly? You may have chalked it up to boredom or to spite because you felt your dog must be mad at you for being gone all day.<br />\r\nThatâ€™s a common belief, but itâ€™s downright wrong. What seems to be â€œbadâ€ behavior is often a dogâ€™s response to fear. And fear, anxiety or stress are often at the root of canine separation anxiety.<br />\r\nSeparation anxiety is one of the most common behavior issues in dogs. An estimated 15 percent of the nationâ€™s dogs are thought to suffer from separation anxiety, according to my colleague Nicholas Dodman, a board-certified veterinary behaviorist and professor emeritus in animal behavior at Tufts Cummings School of Veterinary Medicine in North Grafton, Massachusetts.<br />\r\n', '2017-11-28 18:24:11'),
(22, 'Teach Your Dog to find it', 'Most dogs are naturally good at following their noses: They can often track everything from a dead mouse in your yard to the turkey sandwich you left unattended on the kitchen counter. This ability to nose out interesting smells can be channeled into a constructive skill with some simple training.<br />\r\nâ€œFind itâ€ can be helpful in a variety of situations. A quick game of â€œfind itâ€ can help nervous or timid canines to relax around new people or in unfamiliar situations, like at the vetâ€™s office. â€œFind itâ€ can be a way to help your dog channel excess energy or calm himself when greeting visitors. And â€œfind itâ€ can provide important mental stimulation by encouraging your dog to work for his meals and treats, which mimics the hunting his feral ancestors would have done.<br />\r\nâ€œFind itâ€ is a simple and fun game to teach your dog. Hereâ€™s how to get him sniffing.<br />\r\nTeach your dog to play â€œfind itâ€ by encouraging his natural talent for sniffing things out. A verbal or physical signal of the start of the game can help your dog know when itâ€™s time to put his nose to the ground and go searching for something interesting.<br />\r\n<br />\r\n', '2017-11-28 18:38:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`art_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `art_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
