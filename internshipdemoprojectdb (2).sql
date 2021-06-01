-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 03:52 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

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
-- Table structure for table `commerce`
--

CREATE TABLE `commerce` (
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `commerce_queries`
--

CREATE TABLE `commerce_queries` (
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
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('What is the atomic value of hydrogen, JEE'),
('what is water, JEE'),
('What is the atomic value of hydrogen, JEE');

-- --------------------------------------------------------

--
-- Table structure for table `likedislike`
--

CREATE TABLE `likedislike` (
  `al` int(30) NOT NULL,
  `ad` int(30) NOT NULL,
  `bl` int(30) NOT NULL,
  `bd` int(30) NOT NULL,
  `cl` int(30) NOT NULL,
  `cd` int(30) NOT NULL,
  `el` int(30) NOT NULL,
  `ed` int(30) NOT NULL,
  `fl` int(30) NOT NULL,
  `fd` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likedislike`
--

INSERT INTO `likedislike` (`al`, `ad`, `bl`, `bd`, `cl`, `cd`, `el`, `ed`, `fl`, `fd`) VALUES
(45, 44, 34, 46, 32, 34, 23, 34, 54, 32);

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `email` varchar(255) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `about` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `designation` varchar(40) NOT NULL,
  `qualification` varchar(40) NOT NULL,
  `experiance` varchar(40) NOT NULL,
  `skills` varchar(250) NOT NULL,
  `password` varchar(40) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`email`, `lname`, `fname`, `fullname`, `about`, `location`, `designation`, `qualification`, `experiance`, `skills`, `password`, `photo`) VALUES
('varun5@gmail.com', 'sai', 'varun', 'neelisetty venkata varunsai', 'hivarun', 'ind', 'student', 'cse', '18', 'c', 'varun@123', 'images/Bhim.png'),
('varun6@gmail.com', 'varun', 'n', 'n varun', 'h', 'india', 'student', 'btech', '12', 'java', 'varu@123', 'images/amzon-pay.png'),
('varun7@gmail.com', 'varun', 'nv', 'nv varun', 'this is varun', 'india', 'student', 'btech', '12', 'java,c', 'varu@123', 'images/digital-hain.png'),
('varun8@gmail.com', 'varun', 'n', 'n varun', 'hi this is varun', 'lodon', '12', 'btech', '12', 'php', 'varu@123', 'images/about us main img.png');

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
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `neet`
--

INSERT INTO `neet` (`question`, `answer`) VALUES
('what is the average bone density of a human', 'The normal ranges for bone mineral density by our methodology were thus 0.96-1.39 g/cm3 for women and 0.92-1.35 g/cm3 for men.');

-- --------------------------------------------------------

--
-- Table structure for table `neet_queries`
--

CREATE TABLE `neet_queries` (
  `question` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `neet_queries`
--

INSERT INTO `neet_queries` (`question`) VALUES
('php, NEET');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `email` varchar(40) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `skills` text NOT NULL,
  `qualification` text NOT NULL,
  `username` text NOT NULL,
  `about` text NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`email`, `fname`, `lname`, `skills`, `qualification`, `username`, `about`, `photo`) VALUES
('varun5@gmail.com', 'n', 'varu', 'c', 'cse', 'varun2', 'hi', 'images/American Express.png'),
('varun8@gmail.com', 'n', 'varun', 'java', '12', 'varunsai', 'hivarun', 'images/jee course.png'),
('varun9@gmail.com', '', '', '', '', '', '', 'images/mdd.png');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `users_email` varchar(30) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `course_description` varchar(30) NOT NULL,
  `course_link` varchar(30) NOT NULL,
  `course_amount` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `users_email`, `course_name`, `course_description`, `course_link`, `course_amount`) VALUES
(9, 'virat@gmail.com', 'NEET', 'Complete NEET Course', 'neet-course-content.php', 500),
(10, 'virat@gmail.com', 'JEE', 'Complete JEE Course', 'jee-course-content.php', 500),
(0, 'varunsai.0913@gmail.com', 'NEET', 'Complete NEET Course', 'neet-course-content.php', 500),
(0, 'varunsai.0913@gmail.com', 'JEE', 'Complete JEE Course', 'jee-course-content.php', 500),
(13, 'virat@gmail.com', 'jee', '', 'jee.html', 0),
(14, 'virat@gmail.com', 'jee', '', 'jee.html', 500),
(0, '', 'jee', '', 'jee.html', 500);

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
('what is an example question, CA'),
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
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `userpass` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `profilephoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `userpass`, `contact`, `profilephoto`) VALUES
(1, 'Virat', 'virat@gmail.com', '123456', '5786573857648', ''),
(2, 'Ram', 'ram@gmail.com', '123456', '5786573857648', ''),
(3, 'varunsai0913', 'varunsai.0913@gmail.com', 'varu@123', '6303302732', ''),
(4, 'varunsai0913', 'varun@gmail.com', 'varun123', '6303302732', ''),
(5, 'varunsai0913', 'varun1@gmail.com', 'varun123', '6303302732', ''),
(6, 'varunsai091', 'varun2@gmail.com', 'varun123', '6303302732', ''),
(7, 'varunsai0913', 'varunsai.0913@gmail.com', 'vv', '6303302732', ''),
(10, 'varun2', 'varunsai3.0913@gmail.com', 'varu@123', '1234567890', ''),
(11, 'varun2', 'varunsai4.0913@gmail.com', 'varu@123', '1234567890', ''),
(12, 'xyz', 'xyz@gb.com', '123456', '7894561233', 'uploads/1.jpg'),
(13, 'varun', 'varun5@gmail.com', 'varu@123', '1234567890', ''),
(14, 'varun2', 'varun6@gmail.com', 'varu@123', '1234567890', ''),
(15, 'neelisetty venkata varunsai', 'varun7@gmail.com', 'varu@123', '1234567890', ''),
(16, 'neelisetty venkata varunsai', 'varun8@gmail.com', 'varu@123', '1234567890', ''),
(17, 'n varun', 'varun9@gmail.com', 'varu@123', '1234567890', '');

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
('Chapter 1', 'videos/v1.mp4'),
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
