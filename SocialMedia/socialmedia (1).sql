-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2024 at 04:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialmedia`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `user_id` varchar(50) NOT NULL,
  `photo_id` varchar(50) NOT NULL,
  `cuser_id` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`user_id`, `photo_id`, `cuser_id`, `time`, `comment`) VALUES
('Bheem@123', 'bheem.jpg', 'krishna@04', '2023-02-05 08:53:11', 'he he'),
('Bheem@123', 'bheem.jpg', 'motu@03', '2023-02-05 08:45:21', 'bheem bheem'),
('Bheem@123', 'bheem.jpg', 'patlu@01', '2023-02-05 08:34:05', 'wow bheem'),
('Bheem@123', 'bheem.jpg', 'Raaju@04', '2023-02-05 08:25:14', 'super bheem'),
('Bheem@123', 'bheem.jpg', 'tom@07', '2023-02-05 08:12:24', 'hey..bheem'),
('Bheem@123', 'bheem2.jpg', 'motu@03', '2023-02-05 08:45:52', 'he he'),
('Bheem@123', 'bheem2.jpg', 'patlu@01', '2023-02-05 08:34:46', 'hurray'),
('Bheem@123', 'bheem2.jpg', 'Raaju@04', '2023-02-05 08:25:28', 'he he'),
('Bheem@123', 'bheem2.jpg', 'tom@07', '2023-02-05 08:13:13', 'hurrey..'),
('Chutki@01', 'chutki1.jpg', 'krishna@04', '2023-02-05 08:53:45', 'nice'),
('Chutki@01', 'chutki1.jpg', 'motu@03', '2023-02-05 08:46:36', 'nice '),
('Chutki@01', 'chutki1.jpg', 'patlu@01', '2023-02-05 08:35:34', 'aww cute'),
('Chutki@01', 'chutki1.jpg', 'Raaju@04', '2023-02-05 08:26:38', 'nice chutki...'),
('Chutki@01', 'chutki1.jpg', 'tom@07', '2023-02-05 08:15:22', 'nice teddy'),
('Chutki@01', 'indu1.jpg', 'motu@03', '2023-02-05 08:46:50', 'cutees'),
('Chutki@01', 'indu1.jpg', 'patlu@01', '2023-02-05 08:36:26', 'both are nice'),
('Chutki@01', 'indu1.jpg', 'Raaju@04', '2023-02-05 08:27:03', 'cutees'),
('Chutki@01', 'indu1.jpg', 'tom@07', '2023-02-05 08:15:54', 'aww super'),
('Jaggu@01', 'jaggu.jpg', 'motu@03', '2023-02-05 08:47:25', 'hey jaggu'),
('Jaggu@01', 'jaggu.jpg', 'patlu@01', '2023-02-05 08:36:58', 'he he'),
('Jaggu@01', 'jaggu.jpg', 'Raaju@04', '2023-02-05 08:28:33', 'hey wow'),
('Jaggu@01', 'jaggu.jpg', 'tom@07', '2023-02-05 08:16:37', 'wahh jaggu..!!'),
('jerry@01', 'tom.jpg', 'krishna@04', '2023-02-05 08:54:24', 'wow'),
('jerry@01', 'tom.jpg', 'motu@03', '2023-02-05 08:48:08', 'jerry'),
('jerry@01', 'tom.jpg', 'patlu@01', '2023-02-05 08:38:13', 'ha ha'),
('jerry@01', 'tom.jpg', 'Raaju@04', '2023-02-05 08:29:39', 'tom and jerry...'),
('jerry@01', 'tom.jpg', 'tom@07', '2023-02-05 08:17:56', 'cutee...'),
('kaaliya@01', 'kaliya1.jpg', 'krishna@04', '2023-02-05 08:56:45', 'wahh kaliya'),
('kaaliya@01', 'kaliya1.jpg', 'motu@03', '2023-02-05 08:49:44', 'nice kaaliya'),
('kaaliya@01', 'kaliya1.jpg', 'patlu@01', '2023-02-05 08:38:42', 'nice kaaliya'),
('kaaliya@01', 'kaliya1.jpg', 'tom@07', '2023-02-05 08:18:57', 'ware wahh kaaliya'),
('krishna@04', 'krish.jfif', 'motu@03', '2023-02-05 08:50:22', 'amazing'),
('krishna@04', 'krish.jfif', 'patlu@01', '2023-02-05 08:39:46', 'ncie krishna'),
('krishna@04', 'krish.jfif', 'Raaju@04', '2023-02-05 08:30:31', 'nice krish..'),
('krishna@04', 'krish.jfif', 'tom@07', '2023-02-05 08:19:40', 'nice'),
('krishna@04', 'krishna.jpg', 'motu@03', '2023-02-05 08:50:34', 'litle'),
('krishna@04', 'krishna.jpg', 'patlu@01', '2023-02-05 08:40:09', 'litle krishna'),
('krishna@04', 'krishna.jpg', 'Raaju@04', '2023-02-05 08:30:52', 'hey krish..'),
('krishna@04', 'krishna.jpg', 'tom@07', '2023-02-05 08:20:36', 'krishnaa..'),
('motu@03', 'patlu1.jpg', 'patlu@01', '2023-02-05 08:40:52', 'besties'),
('motu@03', 'patlu1.jpg', 'Raaju@04', '2023-02-05 08:31:48', 'motuuu'),
('motu@03', 'patlu1.jpg', 'tom@07', '2023-02-05 08:21:16', 'motu pathluu'),
('Raaju@04', 'raaju1.jpg', 'krishna@04', '2023-02-05 08:55:25', 'hey hey'),
('Raaju@04', 'raaju1.jpg', 'motu@03', '2023-02-05 08:51:21', 'wahh raajuu'),
('Raaju@04', 'raaju1.jpg', 'patlu@01', '2023-02-05 08:42:37', 'hey bro..'),
('Raaju@04', 'raaju1.jpg', 'tom@07', '2023-02-05 08:22:25', 'heyy.. raaju..'),
('tom@07', 'tj1.jpg', 'krishna@04', '2023-02-05 08:56:00', 'oo wow');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `user_id` varchar(50) NOT NULL,
  `cuser_id` varchar(50) NOT NULL,
  `photo_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`user_id`, `cuser_id`, `photo_id`) VALUES
('Bheem@123', 'krishna@04', 'bheem.jpg'),
('Bheem@123', 'krishna@04', 'bheem2.jpg'),
('Bheem@123', 'motu@03', 'bheem.jpg'),
('Bheem@123', 'motu@03', 'bheem2.jpg'),
('Bheem@123', 'patlu@01', 'bheem.jpg'),
('Bheem@123', 'patlu@01', 'bheem2.jpg'),
('Bheem@123', 'Raaju@04', 'bheem.jpg'),
('Bheem@123', 'Raaju@04', 'bheem2.jpg'),
('Bheem@123', 'tom@07', 'bheem.jpg'),
('Bheem@123', 'tom@07', 'bheem2.jpg'),
('Chutki@01', 'Bheem@123', 'chutki1.jpg'),
('Chutki@01', 'krishna@04', 'chutki1.jpg'),
('Chutki@01', 'krishna@04', 'indu1.jpg'),
('Chutki@01', 'motu@03', 'chutki1.jpg'),
('Chutki@01', 'motu@03', 'indu1.jpg'),
('Chutki@01', 'patlu@01', 'chutki1.jpg'),
('Chutki@01', 'patlu@01', 'indu1.jpg'),
('Chutki@01', 'Raaju@04', 'chutki1.jpg'),
('Chutki@01', 'Raaju@04', 'indu1.jpg'),
('Chutki@01', 'tom@07', 'chutki1.jpg'),
('Chutki@01', 'tom@07', 'indu1.jpg'),
('Jaggu@01', 'krishna@04', 'jaggu.jpg'),
('Jaggu@01', 'motu@03', 'jaggu.jpg'),
('Jaggu@01', 'patlu@01', 'jaggu.jpg'),
('Jaggu@01', 'Raaju@04', 'jaggu.jpg'),
('Jaggu@01', 'tom@07', 'jaggu.jpg'),
('jerry@01', 'krishna@04', 'tom.jpg'),
('jerry@01', 'motu@03', 'tom.jpg'),
('jerry@01', 'patlu@01', 'tom.jpg'),
('jerry@01', 'Raaju@04', 'tom.jpg'),
('jerry@01', 'tom@07', 'tom.jpg'),
('kaaliya@01', 'krishna@04', 'kaliya1.jpg'),
('kaaliya@01', 'motu@03', 'kaliya1.jpg'),
('kaaliya@01', 'patlu@01', 'kaliya1.jpg'),
('kaaliya@01', 'tom@07', 'kaliya1.jpg'),
('krishna@04', 'motu@03', 'krish.jfif'),
('krishna@04', 'motu@03', 'krishna.jpg'),
('krishna@04', 'patlu@01', 'krish.jfif'),
('krishna@04', 'patlu@01', 'krishna.jpg'),
('krishna@04', 'Raaju@04', 'krish.jfif'),
('krishna@04', 'Raaju@04', 'krishna.jpg'),
('krishna@04', 'tom@07', 'krish.jfif'),
('krishna@04', 'tom@07', 'krishna.jpg'),
('motu@03', 'krishna@04', 'patlu1.jpg'),
('motu@03', 'patlu@01', 'patlu1.jpg'),
('motu@03', 'Raaju@04', 'patlu1.jpg'),
('motu@03', 'tom@07', 'patlu1.jpg'),
('Raaju@04', 'krishna@04', 'raaju1.jpg'),
('Raaju@04', 'motu@03', 'raaju1.jpg'),
('Raaju@04', 'patlu@01', 'raaju1.jpg'),
('Raaju@04', 'tom@07', 'raaju1.jpg'),
('tom@07', 'krishna@04', 'tj1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `user_id` varchar(100) NOT NULL,
  `post_id` varchar(100) NOT NULL,
  `location` varchar(200) DEFAULT NULL,
  `caption` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `likes` int(30) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`user_id`, `post_id`, `location`, `caption`, `created_at`, `likes`) VALUES
('Bheem@123 ', 'bheem2.jpg', 'home', 'Hurrayyy..!!', '2023-02-04 16:58:41', 5),
('Chutki@01 ', 'chutki1.jpg', 'Native', 'hey..teddy', '2023-02-04 17:02:03', 6),
('Chutki@01 ', 'indu1.jpg', 'Best friends', 'vacation..!!!', '2023-02-04 17:30:21', 5),
('Jaggu@01 ', 'jaggu.jpg', 'Forest', 'hurrayy..!!', '2023-02-04 17:38:14', 5),
('kaaliya@01 ', 'kaliya1.jpg', 'Dolakpur', 'Crazyy..!!', '2023-02-04 17:41:38', 4),
('krishna@04 ', 'krish.jfif', 'Forest', 'Blissful Life', '2023-02-04 18:04:26', 4),
('krishna@04 ', 'krishna.jpg', 'home', 'Childhood', '2023-02-04 18:05:44', 4),
('motu@03 ', 'patlu1.jpg', 'home town', 'Friendss', '2023-02-04 17:44:51', 4),
('Raaju@04 ', 'raaju1.jpg', 'home', 'Happy..!', '2023-02-04 17:33:54', 4),
('tom@07 ', 'tj1.jpg', 'house', 'Heyy Jerryyy', '2023-02-04 17:57:59', 1),
('jerry@01 ', 'tom.jpg', 'home', 'Ohhh..Tom', '2023-02-04 18:00:29', 5);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `user_id` varchar(50) NOT NULL,
  `touser_id` varchar(50) NOT NULL,
  `replay` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`user_id`, `touser_id`, `replay`) VALUES
('ami120', 'Jaggu@01', ''),
('Bheem@123', 'Chutki@01', 'accepted'),
('Bheem@123', 'Jaggu@01', ''),
('Bheem@123', 'jerry@01', ''),
('Bheem@123', 'kaaliya@01', 'accepted'),
('Bheem@123', 'krishna@04', 'accepted'),
('Bheem@123', 'motu@03', 'accepted'),
('Bheem@123', 'patlu@01', 'accepted'),
('Bheem@123', 'Raaju@04', 'accepted'),
('Bheem@123', 'tom@07', 'accepted'),
('in123', 'Chutki@01', ''),
('in123', 'motu@03', ''),
('Jaggu@01', 'Bheem@123', 'accepted'),
('Jaggu@01', 'Chutki@01', 'accepted'),
('Jaggu@01', 'jerry@01', 'accepted'),
('Jaggu@01', 'kaaliya@01', 'accepted'),
('Jaggu@01', 'krishna@04', 'accepted'),
('Jaggu@01', 'motu@03', 'accepted'),
('Jaggu@01', 'patlu@01', 'accepted'),
('Jaggu@01', 'Raaju@04', 'accepted'),
('Jaggu@01', 'tom@07', 'accepted'),
('jerry@01', 'Bheem@123', 'accepted'),
('jerry@01', 'Chutki@01', 'accepted'),
('jerry@01', 'Jaggu@01', 'accepted'),
('jerry@01', 'kaaliya@01', 'accepted'),
('jerry@01', 'krishna@04', 'accepted'),
('jerry@01', 'motu@03', 'accepted'),
('jerry@01', 'patlu@01', 'accepted'),
('jerry@01', 'Raaju@04', 'accepted'),
('jerry@01', 'tom@07', 'accepted'),
('kaaliya@01', 'Bheem@123', 'accepted'),
('kaaliya@01', 'Chutki@01', 'accepted'),
('kaaliya@01', 'Jaggu@01', 'accepted'),
('kaaliya@01', 'jerry@01', 'accepted'),
('kaaliya@01', 'krishna@04', 'accepted'),
('kaaliya@01', 'motu@03', 'accepted'),
('kaaliya@01', 'patlu@01', 'accepted'),
('kaaliya@01', 'Raaju@04', 'accepted'),
('kaaliya@01', 'tom@07', 'accepted'),
('krishna@04', 'Bheem@123', 'accepted'),
('krishna@04', 'Chutki@01', 'accepted'),
('krishna@04', 'Jaggu@01', 'accepted'),
('krishna@04', 'jerry@01', 'accepted'),
('krishna@04', 'kaaliya@01', 'accepted'),
('krishna@04', 'motu@03', 'accepted'),
('krishna@04', 'patlu@01', 'accepted'),
('krishna@04', 'Raaju@04', 'accepted'),
('krishna@04', 'tom@07', 'accepted'),
('motu@03', 'Bheem@123', 'accepted'),
('motu@03', 'Chutki@01', 'accepted'),
('motu@03', 'Jaggu@01', 'accepted'),
('motu@03', 'jerry@01', 'accepted'),
('motu@03', 'kaaliya@01', 'accepted'),
('motu@03', 'krishna@04', 'accepted'),
('motu@03', 'patlu@01', 'accepted'),
('motu@03', 'Raaju@04', 'accepted'),
('motu@03', 'tom@07', 'accepted'),
('patlu@01', 'Bheem@123', 'accepted'),
('patlu@01', 'Chutki@01', 'accepted'),
('patlu@01', 'Jaggu@01', 'accepted'),
('patlu@01', 'jerry@01', 'accepted'),
('patlu@01', 'kaaliya@01', 'accepted'),
('patlu@01', 'krishna@04', 'accepted'),
('patlu@01', 'motu@03', 'accepted'),
('patlu@01', 'Raaju@04', 'accepted'),
('patlu@01', 'tom@07', 'accepted'),
('Raaju@04', 'Bheem@123', 'accepted'),
('Raaju@04', 'Chutki@01', 'accepted'),
('Raaju@04', 'Jaggu@01', 'accepted'),
('Raaju@04', 'jerry@01', 'accepted'),
('Raaju@04', 'kaaliya@01', 'accepted'),
('Raaju@04', 'krishna@04', 'accepted'),
('Raaju@04', 'motu@03', 'accepted'),
('Raaju@04', 'patlu@01', 'accepted'),
('Raaju@04', 'tom@07', 'accepted'),
('tom@07', 'Bheem@123', 'accepted'),
('tom@07', 'Chutki@01', 'accepted'),
('tom@07', 'Jaggu@01', 'accepted'),
('tom@07', 'jerry@01', 'accepted'),
('tom@07', 'kaaliya@01', 'accepted'),
('tom@07', 'krishna@04', 'accepted'),
('tom@07', 'motu@03', 'accepted'),
('tom@07', 'patlu@01', 'accepted'),
('tom@07', 'Raaju@04', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `user_ID` varchar(30) NOT NULL,
  `bio` varchar(100) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `profile_photo` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `user_ID`, `bio`, `email`, `profile_photo`, `created_at`) VALUES
('preethi', 'ami120', 'hii', 'amithags03@gmail.com', 'cartoon.jfif', '2024-03-05 05:44:16'),
('Bheen', 'Bheem@123', 'hello...!!..Strong..enough', 'bheem@gamil.com', 'bheem4.jpg', '2023-02-04 16:56:49'),
('CHUTKI', 'Chutki@01', 'A..happy.girl', 'chutki@gmail.com', 'chutki.jpg', '2023-02-04 17:00:47'),
('Indu Mati', 'in123', 'hekoooo', 'indya@gmail.com', 'indu.jpg', '2024-03-05 06:45:51'),
('JAGGU', 'Jaggu@01', 'heyy..Guyss.!!', 'jaggu@gmail.com', 'jaggu1.jpg', '2023-02-04 17:36:44'),
('JERRY', 'jerry@01', 'Am..crazyy..!!', 'jerry@gmail.com', 'jerry.jpg', '2023-02-04 17:59:42'),
('KAALIYA', 'kaaliya@01', 'Am..crazyy..!!', 'kaaliya@gmail.com', 'kaliya.jpg', '2023-02-04 17:40:05'),
('KRISHNA', 'krishna@04', 'Devine...!!!', 'krishan@gmail.com', 'krishna.jpg', '2023-02-04 18:02:38'),
('MOTU', 'motu@03', 'Happy..Life', 'motu@gamil.com', 'motu.jpg', '2023-02-04 17:44:05'),
('PATLU', 'patlu@01', 'Hello..Guys..!', 'patlu@gmail.com', 'patlu.jpg', '2023-02-04 17:46:33'),
('RAAJU', 'Raaju@04', 'Being', 'raaju@gamil.com', 'raaju.jpg', '2023-02-04 17:32:17'),
('TOM', 'tom@07', 'we..are..to..entertain', 'tom@gmail.com', 'tom1.jpg', '2023-02-04 17:55:41');

-- --------------------------------------------------------

--
-- Table structure for table `user_follow`
--

CREATE TABLE `user_follow` (
  `user_ID` varchar(50) NOT NULL,
  `following_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_follow`
--

INSERT INTO `user_follow` (`user_ID`, `following_user`) VALUES
('Bheem@123', 'Chutki@01'),
('Bheem@123', 'kaaliya@01'),
('Bheem@123', 'krishna@04'),
('Bheem@123', 'motu@03'),
('Bheem@123', 'patlu@01'),
('Bheem@123', 'Raaju@04'),
('Jaggu@01', 'Chutki@01'),
('Jaggu@01', 'jerry@01'),
('Jaggu@01', 'kaaliya@01'),
('Jaggu@01', 'krishna@04'),
('Jaggu@01', 'motu@03'),
('Jaggu@01', 'patlu@01'),
('Jaggu@01', 'Raaju@04'),
('Jaggu@01', 'tom@07'),
('jerry@01', 'Chutki@01'),
('jerry@01', 'Jaggu@01'),
('jerry@01', 'kaaliya@01'),
('jerry@01', 'krishna@04'),
('jerry@01', 'motu@03'),
('jerry@01', 'patlu@01'),
('jerry@01', 'Raaju@04'),
('jerry@01', 'tom@07'),
('kaaliya@01', 'Bheem@123'),
('kaaliya@01', 'Chutki@01'),
('kaaliya@01', 'Jaggu@01'),
('kaaliya@01', 'jerry@01'),
('kaaliya@01', 'krishna@04'),
('kaaliya@01', 'motu@03'),
('kaaliya@01', 'patlu@01'),
('kaaliya@01', 'Raaju@04'),
('kaaliya@01', 'tom@07'),
('krishna@04', 'Bheem@123'),
('krishna@04', 'Chutki@01'),
('krishna@04', 'Jaggu@01'),
('krishna@04', 'jerry@01'),
('krishna@04', 'kaaliya@01'),
('krishna@04', 'motu@03'),
('krishna@04', 'patlu@01'),
('krishna@04', 'Raaju@04'),
('krishna@04', 'tom@07'),
('motu@03', 'Bheem@123'),
('motu@03', 'Chutki@01'),
('motu@03', 'Jaggu@01'),
('motu@03', 'jerry@01'),
('motu@03', 'kaaliya@01'),
('motu@03', 'krishna@04'),
('motu@03', 'patlu@01'),
('motu@03', 'Raaju@04'),
('motu@03', 'tom@07'),
('patlu@01', 'Bheem@123'),
('patlu@01', 'Chutki@01'),
('patlu@01', 'Jaggu@01'),
('patlu@01', 'jerry@01'),
('patlu@01', 'kaaliya@01'),
('patlu@01', 'krishna@04'),
('patlu@01', 'motu@03'),
('patlu@01', 'Raaju@04'),
('patlu@01', 'tom@07'),
('Raaju@04', 'Bheem@123'),
('Raaju@04', 'Chutki@01'),
('Raaju@04', 'Jaggu@01'),
('Raaju@04', 'jerry@01'),
('Raaju@04', 'kaaliya@01'),
('Raaju@04', 'krishna@04'),
('Raaju@04', 'motu@03'),
('Raaju@04', 'patlu@01'),
('Raaju@04', 'tom@07'),
('tom@07', 'Bheem@123'),
('tom@07', 'Chutki@01'),
('tom@07', 'Jaggu@01'),
('tom@07', 'jerry@01'),
('tom@07', 'kaaliya@01'),
('tom@07', 'krishna@04'),
('tom@07', 'motu@03'),
('tom@07', 'patlu@01'),
('tom@07', 'Raaju@04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`user_id`,`photo_id`,`cuser_id`),
  ADD KEY `CMFK2` (`cuser_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`user_id`,`cuser_id`,`photo_id`),
  ADD KEY `LFK2` (`cuser_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `PFK` (`user_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`user_id`,`touser_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `user_follow`
--
ALTER TABLE `user_follow`
  ADD PRIMARY KEY (`user_ID`,`following_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `CMFK1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `CMFK2` FOREIGN KEY (`cuser_id`) REFERENCES `user` (`user_ID`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `LFK1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `LFK2` FOREIGN KEY (`cuser_id`) REFERENCES `user` (`user_ID`) ON DELETE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `PFK` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
