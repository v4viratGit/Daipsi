-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 03:32 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internshipdemoprojectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ca`
--

CREATE TABLE `ca` (
  `question` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ca`
--

INSERT INTO `ca` (`question`) VALUES
('what is the formula of simple interest\r\nSimple Interest= P x R x T ÷ 100, where P = Principal, R = Rate of Interest and T = Time Period of the Loan/Deposit in years');

-- --------------------------------------------------------

--
-- Table structure for table `ca_queries`
--

CREATE TABLE `ca_queries` (
  `question` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_price` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_price`) VALUES
(2, 'jee', 500);

-- --------------------------------------------------------

--
-- Table structure for table `cs`
--

CREATE TABLE `cs` (
  `question` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs`
--

INSERT INTO `cs` (`question`) VALUES
('what does it mean by ITR\r\nIncome Tax Return (ITR) is a form which a person is supposed to submit to the Income Tax Department of India');

-- --------------------------------------------------------

--
-- Table structure for table `cs_queries`
--

CREATE TABLE `cs_queries` (
  `question` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jee`
--

CREATE TABLE `jee` (
  `question` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jee`
--

INSERT INTO `jee` (`question`) VALUES
('What is the formula of gravitational force\r\nThe mathematical formula for gravitational force is F=GMmr2 F = G Mm r 2 where G is the gravitational constant.');

-- --------------------------------------------------------

--
-- Table structure for table `jee_queries`
--

CREATE TABLE `jee_queries` (
  `question` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jee_queries`
--

INSERT INTO `jee_queries` (`question`) VALUES
('What is the atomic value of hydrogen, JEE');

-- --------------------------------------------------------

--
-- Table structure for table `mentorship`
--

CREATE TABLE `mentorship` (
  `email_id` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentorship`
--

INSERT INTO `mentorship` (`email_id`, `phone`, `fname`) VALUES
('virat@gmail.com', '123456789', 'Virat Kamble'),
('virat@gmail.com', '1235489', 'virat k'),
('virat@gmail.com', '1235489', 'virat k'),
('virat@gmail.com', '1235489', 'virat k'),
('virat@gmail.com', '1235489', 'virat k'),
('virat@gmail.com', '1235489', 'virat k'),
('virat@gmail.com', '1235489', 'virat k'),
('virat@gmail.com', '1235489', 'virat k'),
('virat@gmail.com', '1235489', 'virat k');

-- --------------------------------------------------------

--
-- Table structure for table `neet`
--

CREATE TABLE `neet` (
  `question` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `neet`
--

INSERT INTO `neet` (`question`) VALUES
('What is the formula of gravitational force\r\nThe mathematical formula for gravitational force is F=GMmr2 F = G Mm r 2 where G is the gravitational constant.'),
('what is the level of water present in the human body\r\nUp to 60% of the human adult body is water');

-- --------------------------------------------------------

--
-- Table structure for table `neet_queries`
--

CREATE TABLE `neet_queries` (
  `question` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `users_email` varchar(30) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `course_link` varchar(30) NOT NULL,
  `course_amount` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `users_email`, `course_name`, `course_link`, `course_amount`) VALUES
(13, 'virat@gmail.com', 'jee', 'jee.html', 0),
(14, 'virat@gmail.com', 'jee', 'jee.html', 500);

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `question` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`question`) VALUES
('What is the atomic number of hydrogen, NEET'),
('what, NEET'),
('What is the atomic number of hydrogen, NEET'),
('What is the atomic number of hydrogen, JEE'),
('what is an example question, CA');

-- --------------------------------------------------------

--
-- Table structure for table `upsc`
--

CREATE TABLE `upsc` (
  `question` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upsc`
--

INSERT INTO `upsc` (`question`) VALUES
('What is the formula of gravitational force\r\nThe mathematical formula for gravitational force is F=GMmr2 F = G Mm r 2 where G is the gravitational constant.'),
('how many articles are there in the indian constitution\r\nThe original text of the Constitution contained 395 articles in 22 parts and eight schedules');

-- --------------------------------------------------------

--
-- Table structure for table `upsc_queries`
--

CREATE TABLE `upsc_queries` (
  `question` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `profilephoto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `profilephoto`) VALUES
(1, 'Virat', 'virat@gmail.com', '123456', '5786573857648', ''),
(2, 'Ram', 'ram@gmail.com', '123456', '5786573857648', ''),
(3, 'Bala', 'bala@gmail.com', '123456', '7894561233', ''),
(4, 'abc', 'abc@xyz.com', '123456', '78942215856', ''),
(5, 'xyz', 'xyz@gb.com', '123456', '7894561233', ''),
(6, 'v', 'v@g.com', '123456', '46584654', ''),
(7, 'Veer', 'veer@gmail.com', '123456', '7894561233', 'uploads/1.jpg'),
(8, 'Jp', 'jp@gmail.com', '123456', '78942215856', 'uploads/2.jpg'),
(9, 'Mina', 'mina@gmail.com', '1123456', '7685594545', 'uploads/ex1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`name`, `link`) VALUES
('Chapter 1', 'videos/v1.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ca`
--
ALTER TABLE `ca` ADD FULLTEXT KEY `question` (`question`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cs`
--
ALTER TABLE `cs` ADD FULLTEXT KEY `question` (`question`);

--
-- Indexes for table `jee`
--
ALTER TABLE `jee` ADD FULLTEXT KEY `question` (`question`);

--
-- Indexes for table `neet`
--
ALTER TABLE `neet` ADD FULLTEXT KEY `question` (`question`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upsc`
--
ALTER TABLE `upsc` ADD FULLTEXT KEY `question` (`question`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
