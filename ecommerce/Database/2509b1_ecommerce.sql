-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2026 at 06:27 AM
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
-- Database: `2509b1_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_desc`) VALUES
(1, 'Electronics', 'Good Quality products'),
(2, 'Clothing', 'Good'),
(3, 'Grocery', 'dfd');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `cat_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `title`, `description`, `price`, `stock`, `image`, `status`, `cat_id`, `created_at`) VALUES
(1, 'Dawlance AC 30 ENERCON X T3 1.5 Ton Heat And Cool Inverter Split', 'The Dawlance AC 30 ENERCON X T3 is a premium 1.5-ton inverter split AC designed to deliver powerful cooling with exceptional energy savings. Equipped with Gold Fin anti-rust protection, it ensures long-lasting durability even in humid and coastal environments. Its heat and cool technology provides reliable comfort throughout the year, while the advanced inverter system optimizes electricity usage for reduced operating costs. Widely recognized in the Pakistani market, this model earns positive feedback for its quiet performance, fast cooling, and superior energy efficiency, making it a trusted choice for homes and offices.', 134000, 50, '6a225a8a52e75.png', 1, 1, '2026-06-05 10:11:38'),
(5, 'Magnitude Headphone', 'Magnitude R-1505 is a software-based, mood-tuned headphone built to evolve with how you listen, delivering adaptive sound that feels calm, focused, or energetic depending on your mood rather than a fixed profile. Featuring Bluetooth 5.4 with stable wireless range and compatibility with both Android and iOS, Magnitude connects seamlessly and supports dual device connection, making transitions between phone and laptop effortless. Its 40mm tuned drivers produce rich, studio-enhanced audio with depth and clarity, while built-in voice assistant support for Siri and Google Assistant keeps playback and control hands-free. With up to 10 hours of playtime, 90 hours of standby, and fast Type-C charging, Magnitude is ready for all-day listening, and it also includes a wired option via AUX for flexible use. Designed with comfort and durability in mind, this headphone arrives in a sleek, everyday-ready aesthetic and is backed by UKAS Sound Certification, AMTIVO, and ISO 9001 quality standards along with a 1-year official brand warranty, with everything you need in the box: Magnitude device, charging cable, AUX cable, and user manual.', 6595, 50, '6a4b38b9b52b5.webp', 1, 1, '2026-07-06 10:10:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `joined_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `status`, `role`, `joined_at`) VALUES
(2, 'haris', 'haris@aptechnorth.edu.pk', '$2y$10$FxGIn/S9mfHP6qcVKXs/BODWpF3IODtKTwkx.F2fXsUOUbItlmwUu', 1, 'admin', '2026-06-22 09:47:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
