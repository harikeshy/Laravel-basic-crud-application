-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Nov 08, 2021 at 01:12 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraveldemo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` text NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `description`, `user_id`, `updated_at`, `created_at`) VALUES
(1, 'How are the Places123', '2', '2018-06-29 07:22:07', '2017-12-25 02:03:27'),
(5, 'Hello Guys', '3', '2018-01-20 01:51:39', '2018-01-20 01:51:31'),
(3, 'Site not looking yet good...bro', '2', '2018-06-29 07:30:35', '2017-12-25 02:50:23'),
(6, 'Hello\r\nrocky', '3', '2018-02-03 08:24:34', '2018-02-03 08:24:23'),
(9, 'sa re gama pa', '3', '2018-03-19 07:42:22', '2018-03-19 07:42:22'),
(10, 'hey guy', '3', '2018-03-19 07:54:05', '2018-03-19 07:54:05'),
(11, 'It hub', '3', '2018-03-19 07:54:45', '2018-03-19 07:54:45'),
(12, 'ccc', '3', '2018-03-19 07:57:06', '2018-03-19 07:57:06'),
(13, 'lorem ipsm dummy text', '2', '2018-03-24 05:32:40', '2018-03-20 00:52:50'),
(18, 'hor bai ki hal ha', '2', '2018-03-24 05:33:01', '2018-03-20 01:58:14'),
(20, 'cvcxvcxv', '2', '2018-03-26 05:38:25', '2018-03-26 05:38:25'),
(21, 'My First comment on this website', '1', '2018-04-05 02:45:52', '2018-04-05 02:45:52'),
(22, 'Mike, give me the desctiption of project', '25', '2018-04-05 03:07:57', '2018-04-05 03:07:57'),
(23, 'ddd', '2', '2018-06-27 06:42:24', '2018-06-27 06:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'sam', 'sam@test.com', '$2y$10$eZ4qh1jKvyuqnIOrGsDFqeoEcKBfxfRz/SW/HPSciDyjMHyL/QNDq', 'KPZC2w0mtWcAOk2yArpn2TnWWf67IebUy5g8tJWCPvYvblBbjeqYjVGEP4ni', '2017-12-15 07:58:14', '2018-04-05 02:41:30'),
(26, 'mike', 'mm@test.com', '$2y$10$CMLqX.RDnBEbH93dn07xnOtn2NVLtFusYpbAUsGEPlHD7FLnGYuym', NULL, '2018-06-29 07:41:10', '2018-06-29 07:41:10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
