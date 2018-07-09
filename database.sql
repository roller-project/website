-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 09, 2018 at 01:02 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `webcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(10) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `email`, `password`, `token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'thietkewebvip@gmail.com', 'a4c5a16a6fe4f39355cdd07021d0ef3c ', 'tokenID', 1, '2018-07-07 15:58:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `account_history`
--

CREATE TABLE `account_history` (
  `id` bigint(20) NOT NULL,
  `account_id` int(10) NOT NULL,
  `lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `lastlogin_ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastlogin_brown` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account_history`
--

INSERT INTO `account_history` (`id`, `account_id`, `lastlogin`, `lastlogin_ip`, `lastlogin_brown`) VALUES
(1, 1, '2018-07-06 20:59:32', '127.0.0.1', 'Firefox 61.0 Mac OS X'),
(2, 1, '2018-07-06 20:59:36', '127.0.0.1', 'Firefox 61.0 Mac OS X'),
(3, 1, '2018-07-06 21:34:34', '127.0.0.1', 'Firefox 61.0 Mac OS X'),
(4, 1, '2018-07-06 21:36:02', '127.0.0.1', 'Firefox 61.0 Mac OS X'),
(5, 1, '2018-07-06 21:36:19', '127.0.0.1', 'Firefox 61.0 Mac OS X'),
(6, 1, '2018-07-06 21:38:55', '127.0.0.1', 'Firefox 61.0 Mac OS X'),
(7, 1, '2018-07-06 21:39:30', '127.0.0.1', 'Firefox 61.0 Mac OS X'),
(8, 1, '2018-07-07 21:35:21', '127.0.0.1', 'Firefox 61.0 Mac OS X'),
(9, 1, '2018-07-08 00:39:50', '127.0.0.1', 'Firefox 61.0 Mac OS X'),
(10, 1, '2018-07-07 20:06:52', '127.0.0.1', 'Firefox 61.0 Mac OS X');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) NOT NULL,
  `key_config` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value_config` text COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stores` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `plugins` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key_config`, `value_config`, `language`, `stores`, `plugins`) VALUES
(1, 'site_name', 'Roller Coins', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` int(10) NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stores` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `plugins` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `options` text COLLATE utf8_unicode_ci NOT NULL,
  `paths` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `account_history`
--
ALTER TABLE `account_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `account_history`
--
ALTER TABLE `account_history`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
