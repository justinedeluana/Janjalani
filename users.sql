-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2024 at 03:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `member_deluana`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `password`, `registration_date`) VALUES
(3, 'Kurt', 'Paras', 'kurt.paras@lpunetwork.edu.ph', '$2y$10$0wnH6QsimlgKuzCWwC8bgOohtkfSALYmUyDqRmVRFLjWuxldbfJbO', '2024-11-09 22:01:54'),
(4, 'Daryl Dane', 'Pescasio', 'dane.pescasio@lpunetwork.edu.ph', '$2y$10$.S3EbLYKTNIBUepeqqaikurvmk4EyudgYR6WRbYcFJj8KJzaO05pa', '2024-11-09 22:02:29'),
(5, 'Frank', 'Borromeo', 'frank.borromeo@gmail.com', '$2y$10$XkryfEHvpqMxPpWoGA2REOQFuKF3TzY7r8nJU9inMMGUpjV4BX4fG', '2024-11-11 22:36:02'),
(6, 'Banito', 'Balubag', 'balubag.banito@lpunetwork.edu.ph', '$2y$10$K8SOZ8GqsZtgUNUOeELKAOZclMw/03QYBWaiLOfuw2j8KaUY09XM2', '2024-11-11 22:36:48'),
(7, 'Kalkulito', 'Balubag', 'balubag.kalkulito@lpunetwork.edu.ph', '$2y$10$FiphS1pcjzUQH4VQyMnXjukcXFUWiP4EEw42PAGbGqWXetcH.BCee', '2024-11-12 00:48:13'),
(8, 'Tohru', 'Deluana', 'tohrudeluana@gmail.com', '$2y$10$F/Emacthii1hLbsMA3ioJ.QQBgsDThc0KJIrmrEcsMHrKhZyi6viK', '2024-11-12 01:12:08'),
(11, 'Happy', 'A', 'alexis@example.com', '$2y$10$opWK3ttTNQzg1Xsnxb71b.i2NcVAFtty.SQk81TjkiIwOK8WsP012', '2024-11-13 21:20:13'),
(12, 'Abanito', 'Calumpang', 'abanito@gmail.com', '$2y$10$IakiiZJcCzBELYwSN39UrulQxaTyfXwnZ3siZeNSBDAD11KWsS0x2', '2024-11-13 21:24:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
