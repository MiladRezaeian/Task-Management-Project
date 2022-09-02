-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 02, 2022 at 09:05 PM
-- Server version: 10.4.26-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madno_taskManagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `folders`
--

CREATE TABLE `folders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `folders`
--

INSERT INTO `folders` (`id`, `user_id`, `name`, `created_at`) VALUES
(1, 1, 'personal', '2022-08-28 13:15:00'),
(4, 1, 'sasa', '2022-08-31 18:46:14'),
(6, 1, 'asd', '2022-08-31 19:15:27'),
(7, 1, 'fdg', '2022-08-31 19:22:29'),
(8, 1, 'fdgdfg', '2022-08-31 19:22:31'),
(9, 3, 'asd', '2022-09-02 19:42:33'),
(10, 4, 'personal', '2022-09-02 20:51:23'),
(11, 4, 'work', '2022-09-02 20:51:29');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(512) CHARACTER SET utf8 NOT NULL,
  `user_id` int(11) NOT NULL,
  `folder_id` int(11) NOT NULL,
  `is_done` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `user_id`, `folder_id`, `is_done`, `created_at`) VALUES
(1, 'first task', 1, 1, 0, '2022-08-29 19:08:09'),
(3, 'sfg', 1, 4, 1, '2022-09-01 19:23:58'),
(4, 'sfgasd', 1, 4, 1, '2022-09-01 19:24:00'),
(5, 'sfgasdasd', 1, 4, 0, '2022-09-01 19:24:02'),
(6, 'asfas', 1, 4, 0, '2022-09-01 19:25:37'),
(7, 'gfsdg', 1, 4, 0, '2022-09-01 19:25:40'),
(8, 'Ù†ØªØ¯', 1, 4, 0, '2022-09-01 21:12:46'),
(9, 'asdas', 3, 9, 0, '2022-09-02 19:42:46'),
(10, 'sdfsd', 4, 10, 0, '2022-09-02 21:03:36'),
(11, 'jbk', 4, 10, 0, '2022-09-02 21:03:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(256) CHARACTER SET utf8 NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(3, 'ali', 'ali@ali.com', '$2y$10$96Pd36K0RnDvcBpMliBdRuFco6xPLQh05PaFPRbwwXFbLJ5DEYiW2', '2022-09-02 18:01:12'),
(4, 'milad', 'milad@milad.com', '$2y$10$uQWwaGX61xizS2ZWjzto9OVCs5cKW0OetP6p8AlthsDaGXFdpH8dW', '2022-09-02 20:50:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `folders`
--
ALTER TABLE `folders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `folders`
--
ALTER TABLE `folders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
