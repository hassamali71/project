-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2017 at 08:12 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yiiproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'hassam', 'ali', 'hassamali', '2B0lKJOdIQWn3COUdiJZC4v27RSdbyEW', '$2y$13$Y85dl5kfYVOU6PhBhHANJe5d2K5/ehhG/LlVHPLP340nm888Gt6R2', NULL, 'hassamali71@gmail.com', 10, 1493467082, 1493467082),
(2, 'Arhum', 'Haroon', 'arhumharoon', '5A_Sm28vOXVMZg1YsDL0CLwFZimwfa94', '$2y$13$ETA4.NMCe66urNIh48HfiuDwk9b47E9TT19WNFki8.HovWM1Sfz72', NULL, 'arhumharoon1990@hotmail.com', 10, 1493472349, 1493472349),
(3, 'Fahad', 'Haroon', 'admin', 'f_rIKUrGsyJSr-2qswVy4VDYpQOkDCw1', '$2y$13$h2hwrhZmOJYNRKzy42QwheoFwoh/Ew5sJ/kW3/25dY4unJ.U5I0W.', NULL, 'fahadharoon360@gmail.com', 10, 1497376981, 1497376981);

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `subject`, `body`, `created_at`) VALUES
(1, 'Fahad Haroon', 'testing@gmail.com', 'some subject', 'body for testing', '2017-06-14 21:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1493332465),
('m130524_201442_init', 1493332487);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `ikey` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `availability` varchar(50) NOT NULL,
  `prod_condition` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `user_email`, `name`, `description`, `ikey`, `amount`, `quantity`, `availability`, `prod_condition`, `brand`, `stock`, `image`, `status`, `created_at`) VALUES
(4, 'fahadharoon360@gmail.com', 'Nike Joggers', 'Easy to wear', '149775838938', '2499', 5, 'In Stock', 'New', 'Nike', 50, 'nike2.jpg', 1, '2017-06-18 03:59:49'),
(5, 'fahadharoon360@gmail.com', 'Green Nike Joggers', 'Easy to wear', '149775850691', '3000', 5, 'In Stock', 'New', 'Nike', 50, 'nike1.jpg', 1, '2017-06-18 04:01:46'),
(6, 'fahadharoon360@gmail.com', 'Nike Toe', 'Easy to wear', '149775859923', '3499', 5, 'In Stock', 'New', 'Nike', 50, 'nike3.jpg', 1, '2017-06-18 04:03:19'),
(7, 'fahadharoon360@gmail.com', 'Nike Toe', 'Easy to wear', '149775870698', '3499', 5, 'In Stock', 'New', 'Nike', 50, 'nike4.jpg', 1, '2017-06-18 04:05:06'),
(8, 'fahadharoon360@gmail.com', 'Nike Joggers', 'Easy to wear', '149775906297', '2499', 5, 'In Stock', 'New', 'Nike', 50, 'nike5.jpg', 1, '2017-06-18 04:11:02'),
(9, 'fahadharoon360@gmail.com', 'Nike Shoes', 'Easy to wear', '149775913610', '2499', 5, 'In Stock', 'New', 'Nike', 50, 'nike6.jpg', 1, '2017-06-18 04:12:16'),
(11, 'fahadharoon360@gmail.com', 'Nike Shoes', 'Easy to wear', '149912647713', '2400', 50, 'In Stock', 'New', 'Nike', 80, 'women4.jpg', 1, '2017-07-04 00:01:17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, '', '', 'fahadharoon', '2B0lKJOdIQWn3COUdiJZC4v27RSdbyEW', '$2y$13$Y85dl5kfYVOU6PhBhHANJe5d2K5/ehhG/LlVHPLP340nm888Gt6R2', NULL, 'fahadharoon11@hotmail.com', 10, 1493467082, 1493467082),
(2, 'Arhum', 'Haroon', 'arhumharoon', '5A_Sm28vOXVMZg1YsDL0CLwFZimwfa94', '$2y$13$ETA4.NMCe66urNIh48HfiuDwk9b47E9TT19WNFki8.HovWM1Sfz72', NULL, 'arhumharoon1990@hotmail.com', 10, 1493472349, 1493472349),
(3, 'Fahad', 'Haroon', 'fahadharoon12', 'f_rIKUrGsyJSr-2qswVy4VDYpQOkDCw1', '$2y$13$h2hwrhZmOJYNRKzy42QwheoFwoh/Ew5sJ/kW3/25dY4unJ.U5I0W.', NULL, 'fahadharoon360@gmail.com', 10, 1497376981, 1497376981),
(4, 'Hassam', 'Ali', 'hassamali', 'kjGuYrZrqdERMLwOzxOIxUKXIx5hz4Pa', '$2y$13$LAifO216bfkSvNuYnLG7jezWYphNxc9rz34lAqGyksghYQ7TFFZNq', NULL, 'hassamali71@gmail.com', 10, 1499202188, 1499202188);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
