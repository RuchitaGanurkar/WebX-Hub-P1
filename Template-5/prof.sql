-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 02:20 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `prof`
--

CREATE TABLE `prof` (
  `id` int(11) NOT NULL,
  `email` text DEFAULT NULL,
  `fname` text DEFAULT NULL,
  `lname` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `dob` date NOT NULL DEFAULT current_timestamp(),
  `address` text NOT NULL,
  `city` text NOT NULL,
  `pin` int(11) NOT NULL,
  `state` text NOT NULL,
  `hobbies` enum(' Drawing',' Singing',' Dancing',' Sketching',' Others') NOT NULL,
  `qualification` enum('High School(10th)',' Higher School(12th)',' Graduation(Bachelors)','Post Graduation(Masters)',' Phd') NOT NULL,
  `course` enum('BCA',' B.Com',' B.Sc',' BA',' MCA','M.Com',' M.Sc','MA') NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prof`
--

INSERT INTO `prof` (`id`, `email`, `fname`, `lname`, `country`, `dob`, `address`, `city`, `pin`, `state`, `hobbies`, `qualification`, `course`, `gender`, `number`) VALUES
(1, 'webx@gmail.com', 'WebX ', 'Hub', 'India', '2022-08-24', 'Gurugram', 'Delhi', 667483, 'Delhi', ' Singing', ' Graduation(Bachelors)', ' B.Sc', 'female', 1234567889);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prof`
--
ALTER TABLE `prof`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prof`
--
ALTER TABLE `prof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
