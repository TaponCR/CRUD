-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2019 at 01:37 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` int(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `phone` int(255) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table`
--

INSERT INTO `table` (`id`, `name`, `roll`, `email`, `gender`, `phone`, `photos`, `created_at`, `updated_at`) VALUES
(1, 'Ayushman', 1, 'ayushman1@gmail.com', 'male', 1712345681, 'Ayushman.jpg', '2019-03-09 12:34:25', '2019-03-09 12:34:25'),
(2, 'Dhiman', 2, 'dhiman3@gmail.com', 'male', 1812345678, 'Dhiman.jpg', '2019-03-09 12:07:51', '2019-03-09 12:07:51'),
(3, 'Adity', 3, 'adity4@gmail.com', 'female', 1912345678, 'Adity.jpg', '2019-03-09 12:09:55', '2019-03-09 12:09:55'),
(4, 'Anita', 4, 'anita3@gmail.com', 'female', 1712345681, 'Anita.jpg', '2019-03-09 12:11:20', '2019-03-09 12:11:20'),
(5, 'Hemika', 5, 'hemika12@gmail.com', 'female', 1912345678, 'Himika.jpg', '2019-03-09 12:12:18', '2019-03-09 12:12:18'),
(6, 'Ratri', 6, 'ratri4@gmail.com', 'female', 1712345681, 'Rati.jpg', '2019-03-09 12:13:44', '2019-03-09 12:13:44'),
(7, 'Taniya', 7, 'taniya4@gmail.com', 'female', 1912345678, 'Taniya.jpg', '2019-03-09 12:16:48', '2019-03-09 12:16:48'),
(8, 'Aditto', 8, 'aditto6@gmail.com', 'male', 1313245671, 'Aditto.jpg', '2019-03-09 12:19:32', '2019-03-09 12:19:32'),
(9, 'Aniket', 9, 'aniket81@gmail.com', 'male', 1812345678, 'Aniket.jpg', '2019-03-09 12:22:05', '2019-03-09 12:22:05'),
(10, 'Ritesh', 10, 'retesh4@gmail.com', 'male', 1912345678, 'Retesh.jpg', '2019-03-09 12:23:24', '2019-03-09 12:23:24'),
(11, 'Hemesh', 11, 'hemesh4@gmail.com', 'male', 1812345678, 'Hemesh.jpg', '2019-03-09 12:25:46', '2019-03-09 12:25:46'),
(12, 'Priyanka', 12, 'priyanka7@gmail.com', 'female', 1712345681, 'priyanka.jpg', '2019-03-09 12:27:41', '2019-03-09 12:27:41'),
(13, 'Omit', 13, 'omit7@gmail.com', 'male', 1737641418, 'Omit.jpg', '2019-03-09 12:28:47', '2019-03-09 12:28:47'),
(14, 'Anu', 14, 'anut1@gmail.com', 'female', 1313245671, 'Anu.jpg', '2019-03-09 12:30:17', '2019-03-09 12:30:17'),
(15, 'Ovick', 15, 'ovi45@gmail.com', 'male', 1912345678, 'ovi.jpg', '2019-03-09 12:31:16', '2019-03-09 12:31:16'),
(16, 'Priyoshi', 16, 'prioshi3@gmail.com', 'female', 1737642410, 'Prioshi.jpg', '2019-03-09 12:32:25', '2019-03-09 12:32:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table`
--
ALTER TABLE `table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
