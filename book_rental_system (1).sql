-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2023 at 12:54 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_rental_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'khanusman8685@gmail.com', '12345', '2023-12-01 12:39:57', '2023-12-01 12:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `Auther_name` varchar(50) DEFAULT NULL,
  `pages` varchar(50) DEFAULT NULL,
  `publish_date` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `Auther_name`, `pages`, `publish_date`, `image`, `created_at`, `updated_at`) VALUES
(9, 'HTML & CSS', 'Adnan Sami', '160', '2023-12-08', '1701780126_75458df5c56e9b4fc54a.jpg', '2023-12-05 17:42:06', '2023-12-05 17:42:06'),
(7, 'Laravel', 'Kamran Yaseen', '204', '2023-12-20', '1701780056_6a2fe3193335f753cc12.jpg', '2023-12-05 17:40:56', '2023-12-05 17:40:56'),
(8, 'Core PHP', 'Usman Bubber', '11', '2023-12-01', '1701780098_074b42a470494d6aef62.jpg', '2023-12-05 17:41:39', '2023-12-05 17:41:39'),
(15, 'Android Development', 'Zobair imran', '370', '2023-12-05', '1702019127_0aaf4ca70c0089cd7204.jpg', '2023-12-08 12:05:27', '2023-12-08 12:05:27'),
(11, 'Gernal Knowledge', 'Ikram Nomi', '50', '2023-12-18', '1701798436_c7eda1962b16957b53ac.jpg', '2023-12-05 22:47:16', '2023-12-05 22:47:16'),
(12, 'Pro Angular 9', 'Afaq Haider', '46', '2023-12-02', '1701839212_bf28074d8ae3b3b455f5.jpg', '2023-12-06 10:06:52', '2023-12-06 10:06:52'),
(13, 'Build API', 'Irfan Bhai', '342', '2023-12-03', '1701839391_3ff028bfe507433f92c4.jpg', '2023-12-06 10:09:51', '2023-12-06 10:09:51'),
(14, 'Java Script', 'Huzaifa Bhai', '160', '2023-12-04', '1701839434_75837a9df1fbfae92190.jpg', '2023-12-06 10:10:34', '2023-12-06 10:10:34'),
(17, 'Node JS', 'Afaq Haider', '204', '2023-11-16', '1702019260_798c077a1f4cf2e20ef0.jpg', '2023-12-08 12:07:40', '2023-12-08 12:07:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-11-29-125021', 'App\\Database\\Migrations\\Users', 'default', 'App', 1701263347, 1),
(2, '2023-12-04-071936', 'App\\Database\\Migrations\\Admin', 'default', 'App', 1701675234, 2),
(3, '2023-12-04-122621', 'App\\Database\\Migrations\\Books', 'default', 'App', 1701693169, 3),
(4, '2023-12-06-075758', 'App\\Database\\Migrations\\Rentals', 'default', 'App', 1701855245, 4);

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

DROP TABLE IF EXISTS `rentals`;
CREATE TABLE IF NOT EXISTS `rentals` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `book_id` bigint UNSIGNED NOT NULL,
  `rental_date` date NOT NULL,
  `return_date` date NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `user_id`, `book_id`, `rental_date`, `return_date`, `created_at`, `updated_at`) VALUES
(10, 18, 17, '2023-12-09', '2023-12-13', '2023-12-08 15:13:23', '2023-12-08 15:13:23'),
(11, 18, 7, '2023-12-01', '2023-12-02', '2023-12-08 16:07:31', '2023-12-08 16:07:31'),
(8, 17, 10, '2023-12-02', '2023-12-05', '2023-12-07 15:53:54', '2023-12-07 15:53:54'),
(7, 6, 13, '2023-12-01', '2023-12-12', '2023-12-07 11:56:15', '2023-12-07 11:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `cpassword`, `created_at`, `updated_at`) VALUES
(17, 'kamran Yaseen khan', 'beteachcompany620@gmail.com', '11111', '11111', '2023-12-05 16:35:16', '2023-12-07 17:51:23'),
(6, 'Muhammad Usman Bubber', 'khanusman8685@gmail.com', '12345', '12345', '2023-12-04 11:12:25', '2023-12-07 17:51:37'),
(18, 'Muhammad Irfan Khan', 'irfan@gmail.com', '12345', '12345', '2023-12-08 15:03:04', '2023-12-08 15:03:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
