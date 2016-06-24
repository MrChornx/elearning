-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2016 at 02:13 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `access`
--

CREATE TABLE `access` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ზუსტ და საბუნებისმეტყველო', '2016-06-08 09:04:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'ფსიქოლოგიისა და განათლების', '2016-06-08 09:04:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'ჰუმანიტარული მეცნიერებების', '2016-06-08 09:04:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'სოციალურ და პოლიტიკურ მეცნიერებათა', '2016-06-08 09:04:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'ეკონომიკისა და ბიზნესის', '2016-06-08 09:04:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'მედიცინის', '2016-06-08 09:04:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `filename`, `location`, `post_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'c83733a2179414fcbd17', '/Applications/XAMPP/xamppfiles/htdocs/elearning/public/uploads/files/c83733a2179414fcbd17.docx', 4, '2016-06-10 10:54:29', '2016-06-10 10:54:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers_subjects`
--

CREATE TABLE `lecturers_subjects` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lecturers_subjects`
--

INSERT INTO `lecturers_subjects` (`id`, `user_id`, `subject_id`, `type`) VALUES
(1, 2, 1, 1),
(2, 3, 1, 1),
(3, 4, 2, 1),
(4, 5, 2, 1),
(5, 2, 3, 1),
(6, 4, 3, 1),
(7, 2, 4, 1),
(8, 3, 4, 1),
(9, 2, 5, 1),
(10, 2, 6, 1),
(11, 2, 7, 1),
(12, 3, 7, 1),
(13, 2, 6, 2),
(14, 2, 6, 2),
(15, 2, 6, 2),
(16, 2, 6, 2),
(17, 2, 2, 2),
(18, 2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `text` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `subject_id`, `heading`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 1, 'cxzczx', 'dasdsa', '2016-06-10 10:54:29', '2016-06-10 10:54:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'დაპროგრამების საფუძვლები', '', '2016-06-08 09:04:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'ქიმიის შესავალი', '', '2016-06-08 11:33:36', '2016-06-08 05:05:56', '0000-00-00 00:00:00'),
(3, 'ფიზიკის შესავალი 2', '', '2016-06-08 09:15:45', '2016-06-08 09:15:45', '0000-00-00 00:00:00'),
(4, 'ბიოლოგია', '', '2016-06-09 09:04:54', '2016-06-09 09:04:54', '0000-00-00 00:00:00'),
(5, 'JavaScript საწყისები', '', '2016-06-10 10:08:53', '2016-06-10 10:08:53', '0000-00-00 00:00:00'),
(6, 'ჩაკეტილი საგანი', 'test', '2016-06-10 11:08:59', '2016-06-10 11:08:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `subjects_courses`
--

CREATE TABLE `subjects_courses` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects_courses`
--

INSERT INTO `subjects_courses` (`id`, `subject_id`, `course_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 3),
(4, 3, 1),
(5, 4, 1),
(6, 4, 3),
(7, 5, 1),
(8, 6, 1),
(9, 6, 2),
(10, 7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `type` int(11) DEFAULT '1',
  `email` varchar(255) DEFAULT NULL,
  `rep` varchar(255) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `avatar` text NOT NULL,
  `online` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `lastname`, `status`, `type`, `email`, `rep`, `city`, `country`, `avatar`, `online`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'test', '098f6bcd4621d373cade4e832627b4f6', 'გივი', 'ნადიბაიძე', NULL, 2, NULL, 'სრული პროფესორი', NULL, NULL, 'profile_default.png', 1, '2016-06-11 00:10:54', '2016-06-10 20:10:54', '0000-00-00 00:00:00'),
(3, 'test1', '098f6bcd4621d373cade4e832627b4f6', 'ავთანდილ', 'ხუციშვილი', NULL, 2, NULL, 'ასოცირებული პროფესორი', NULL, NULL, 'default2.png', 0, '2016-06-10 23:42:47', '2016-06-07 04:33:43', '0000-00-00 00:00:00'),
(4, 'test2', '098f6bcd4621d373cade4e832627b4f6', 'ბეჟან', 'ღვაბერიძე', NULL, 2, NULL, 'სრული პროფესორი', NULL, NULL, 'profile_default.png\r\n', 0, '2016-06-10 23:43:12', '2016-06-07 04:33:43', '0000-00-00 00:00:00'),
(5, 'test3', '098f6bcd4621d373cade4e832627b4f6', 'ირინა', 'ხუციშვილი', NULL, 2, NULL, '', NULL, NULL, 'default2.png', 0, '2016-06-10 23:33:41', '2016-06-07 04:33:43', '0000-00-00 00:00:00'),
(6, 'test4', '098f6bcd4621d373cade4e832627b4f6', 'გივი', 'თარგამაძე', NULL, 2, NULL, '', NULL, NULL, 'profile_default.png\r\n', 0, '2016-06-10 23:34:08', '2016-06-07 04:33:43', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturers_subjects`
--
ALTER TABLE `lecturers_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects_courses`
--
ALTER TABLE `subjects_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `lecturers_subjects`
--
ALTER TABLE `lecturers_subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `subjects_courses`
--
ALTER TABLE `subjects_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
