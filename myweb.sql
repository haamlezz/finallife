-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 22, 2019 at 01:29 PM
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
-- Database: `myweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `year_end` int(11) NOT NULL,
  `level` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `education_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `faculty` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `institute` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `user_id`, `year_end`, `level`, `education_name`, `faculty`, `institute`, `country`) VALUES
(13, 5, 2016, 'ຊັ້ນສູງ', 'ໄອທີ', 'ຂໍ້ມູນຂ່າວສານ', 'ວິທະຍາໄລລາວທອັບ', 'ລາວ'),
(14, 2, 2019, 'ຊັ້ນສູງ', 'ໄຟຟ້າ', 'ສອ້ມແປງ', 'ວີທະຍາໄລເຕັກນິກຈຳປາສັກ', 'ລາວ'),
(16, 5, 2019, 'ປະລິນຍາເອກ', 'ອອກແບບ', 'Media of Art', 'Lao-Top College', 'Lao PDR'),
(17, 5, 2017, 'ປະລິນຍາໂທ', 'ອອກແບບ', 'Media of Art', 'Lao-Top College', 'Lao PDR'),
(18, 5, 2015, 'ຊັ້ນສູງ', 'ວິສະວະກຳ ກົນຈັກ', 'ວິສະວະກຳສາດ', 'ມະຫາວິທະຍາໄລ ແຫ່ງຊາດ ວິທະຍາເຂດ', 'ສປປ ລາວ'),
(19, 5, 2011, 'ມັດທະຍົມປາຍ', 'ມັດທະຍົມປາຍ', '', 'ມັດທະຍົມປາຍ ຈັນທະບູລີ', 'ສປປ ລາວ'),
(20, 5, 2018, 'ປະລິນຍາເອກ', 'ບໍລິຫານທຸລະກິດ', 'ເສດຖະສາດ ບໍລິຫານທຸລະກິດ', 'ມະຫາວິທະຍາໄລ ແຫ່ງຊາດ', 'ສປປ ລາວ'),
(21, 5, 2019, 'ປະລິນຍາເອກ', 'BA', 'Setthasath', 'Mor sor', 'Lao'),
(22, 7, 2019, 'ຊັ້ນສູງ', 'ເຕັກໂນໂລຊີ ຂໍ້ມູນຂ່າວສານ ໄອທີ', 'ໄອທີ', 'ລາວ-ທ໊ອບ', 'ລາວ'),
(23, 7, 2017, 'ຊັ້ນກາງ', 'ການຢາ', 'ວິທະຍາສາດ ການແພດ', 'ລາວ-ທ໊ອບ', 'ສປປ ລາວ');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(10) NOT NULL,
  `experience_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `place` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `experience_name`, `user_id`, `start`, `end`, `place`, `description`) VALUES
(14, 'ຜະລຶດຢາ', 1, 2017, 2020, 'ໂຮງງານຜະລິດຢາເລກ3', 'ວຽກບໍ່ກົງກັບສີ່ງທີ່ຮຽນມາ'),
(15, 'ສອ້ມແປງລົດມາກອ່ນ', 2, 2011, 2015, 'ຮ້ານສອ້ມແປງລົດຂອງຄອບຄົວ', 'ໄປຮຽນຕໍ່'),
(16, 'udtyutdy', 1, 243, 54645, 'dyfjjdghj', 'tkjdukgh'),
(17, 'ຜູ່ປະສານງານ', 5, 2013, 2014, 'ໜ່ວຍງານເຜີຍແຜ່ ສີລະທັມ ນະຄອນຫຼ', ''),
(18, 'ຊ່າງພາບ', 5, 2014, 1, 'ບໍ່ມີ', ''),
(19, 'ຫົວໜ້າພະແນນ', 7, 2019, 1, 'ໂຮງງານຜະລິດຢາ ເລກ 3', 'ອື່ນໆໆໆໆໆໆ');

-- --------------------------------------------------------

--
-- Table structure for table `online`
--

CREATE TABLE `online` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `session_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` int(11) NOT NULL,
  `gender` int(10) NOT NULL,
  `f_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'profile.png',
  `about` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `admin`, `gender`, `f_name`, `l_name`, `tel`, `address`, `email`, `date_of_birth`, `photo`, `about`, `status`, `created_at`) VALUES
(1, 'user2', '$2y$10$4DeotG/cE0SOjIQYcM1TkeCe8DQ6WafUzC.OMw9oE3IZaZPbhKP86', 0, 2, 'ວີຍະເດດ', 'ຂັນຕີວົງ', '02076735136', 'ໝອງໄຮ', 'viyadeth123@gmail.co', '0000-00-00', '12bounmy9321400.jpg', '', 0, '2019-07-21 23:38:09'),
(2, 'user1', '$2y$10$4DeotG/cE0SOjIQYcM1TkeCe8DQ6WafUzC.OMw9oE3IZaZPbhKP86', 0, 2, 'khamchan', 'hongsambun', '6846796658', 'jdghjdjjj', 'dfgshf@gmail.com', '0000-00-00', '12bounmy9321400.jpg', '', 2, '2019-07-21 23:38:09'),
(5, 'song', '$2y$10$pdDjtz3AeRVeCmrq89ECSeZh6OM2ZE/.e8Uex5wZPj/tDA.sju1F.', 0, 1, 'song', 'vong', '', '', 'song@gmail.com', '0000-00-00', '12bounmy9321400.jpg', '', 2, '2019-07-21 23:38:09'),
(6, 'khamwieng', '$2y$10$G0umEgUQVsNdy2fAApYTWu2KjW60EreDT6GIc7r1hlBTtUINijbVC', 0, 1, 'Khamwieng', 'Chanthakoun', '', '', 'khamwieng@gmail.com', '0000-00-00', '12bounmy9321400.jpg', '', 1, '2019-07-21 23:38:09'),
(7, 'sew', '$2y$10$P0v4cE38cXfEPAcxwgouzOYY6bhLjbGFWkl.zORis8HnVAmwuCwSK', 0, 1, 'viyadeth', 'khantivong', '', '', 'sew@gmail.com', '0000-00-00', '12bounmy9321400.jpg', '', 0, '2019-07-21 23:38:09'),
(9, 'haamlezz', '$2y$10$4ariPzJ61PqH5T6d/j7XOeSHghySa0nVwJGUdtLhCa3fB5A3jLIpW', 0, 1, 'Sompasong', 'vongthavone', '', '', 'vongthavone@gmail.co', '0000-00-00', '12bounmy9321400.jpg', '', 0, '2019-07-21 23:38:09'),
(10, 'ddbotdd', '$2y$10$UHRhuVnuCMifyVRRMf9dBO5k6h9T5jp8xo6.FS46ugqE5DFHC5Rc.', 0, 1, 'dfdf', 'dfeofm', '', '', 'ddbotdd@gmail.com', '0000-00-00', '12bounmy9321400.jpg', '', 0, '2019-07-21 23:38:09'),
(11, 'ddd', '$2y$10$t0OfCsf22LA0dlIt7kDgiOHYPc5/x3Qi6ela0DLw7LMvX/qMJMw02', 0, 1, '', '', '', '', 'ddd@gmail.com', '0000-00-00', '12bounmy9321400.jpg', '', 0, '2019-07-21 23:38:09'),
(12, 'bounmy', '$2y$10$NgdrZdTJIPiOjLVRReFEleAwL1vshfjXZoAXiRYQl1mXDby2Q9r4S', 1, 1, 'Bounthanome', 'Somphengdee', '22222222', 'Somhong\r\ndddddddddd\r\nddddddddd', 'bounthanome@gmail.co', '2002-01-01', '12bounmy5051165.jpg', 'I\'m good at math.....dddd\r\nddddddd', 0, '2019-07-21 23:38:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `online`
--
ALTER TABLE `online`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `online`
--
ALTER TABLE `online`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
