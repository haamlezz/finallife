-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2019 at 05:20 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(10) NOT NULL,
  `education_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) NOT NULL,
  `year_end` int(11) NOT NULL,
  `level` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `faculty` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `institute` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `education_name`, `user_id`, `year_end`, `level`, `faculty`, `institute`, `country`) VALUES
(13, 'IT', 1, 2019, 'ຊັ້ນສູງ', 'ຂໍ້ມູນຂ່າວສານ', 'ວິທະຍາໄລລາວທອັບ', 'ລາວ'),
(14, 'ເອເລັກໂຕນິກ', 2, 2019, 'ຊັ້ນສູງ', 'ສອ້ມແປງ', 'ວີທະຍາໄລເຕັກນິກຈຳປາສັກ', 'ລາວ'),
(15, 'rtsutyi', 2, 3465, 'hdgjdg', 'hsjuj', 'jyjghkjgj', 'jdyyj');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `experience_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `start` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `end` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`experience_id`, `user_id`, `start`, `end`, `place`, `description`) VALUES
(4, 9, '2016', '2019', 'hsfdtyu', '້ກເ່ເາີ້ດາກ່າດຫ່ະ');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(10) NOT NULL,
  `experience_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `place` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `experience_name`, `user_id`, `start`, `end`, `place`, `description`) VALUES
(14, 'ຜະລຶດຢາ', 1, 2017, 2020, 'ໂຮງງານຜະລິດຢາເລກ3', 'ວຽກບໍ່ກົງກັບສີ່ງທີ່ຮຽນມາ'),
(15, 'ສອ້ມແປງລົດມາກອ່ນ', 2, 2011, 2015, 'ຮ້ານສອ້ມແປງລົດຂອງຄອບຄົວ', 'ໄປຮຽນຕໍ່'),
(16, 'udtyutdy', 1, 243, 54645, 'dyfjjdghj', 'tkjdukgh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` int(11) NOT NULL,
  `sex_id` int(20) NOT NULL,
  `f_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `admin`, `sex_id`, `f_name`, `l_name`, `tel`, `address`, `email`, `date_of_birth`, `photo`) VALUES
(1, 'user2', '$2y$10$4DeotG/cE0SOjIQYcM1TkeCe8DQ6WafUzC.OMw9oE3IZaZPbhKP86', 0, 2, 'ວີຍະເດດ', 'ຂັນຕີວົງ', '02076735136', 'ໝອງໄຮ', 'viyadeth123@gmail.co', '0000-00-00', 'homepage.jpg'),
(2, 'user1', '$2y$10$4DeotG/cE0SOjIQYcM1TkeCe8DQ6WafUzC.OMw9oE3IZaZPbhKP86', 0, 2, 'khamchan', 'hongsambun', '6846796658', 'jdghjdjjj', 'dfgshf@gmail.com', '0000-00-00', '1200px-MySQL.svg.png'),
(3, 'admin', '$2y$10$4DeotG/cE0SOjIQYcM1TkeCe8DQ6WafUzC.OMw9oE3IZaZPbhKP86', 1, 1, 'Super', 'Admin', '', '', '', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`experience_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `experience_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
