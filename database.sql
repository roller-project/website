-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 11, 2018 at 11:42 AM
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
(10, 1, '2018-07-07 20:06:52', '127.0.0.1', 'Firefox 61.0 Mac OS X'),
(11, 1, '2018-07-08 21:29:56', '127.0.0.1', 'Firefox 61.0 Mac OS X'),
(12, 1, '2018-07-09 18:28:15', '::1', 'Firefox 61.0 Mac OS X'),
(13, 1, '2018-07-09 23:40:23', '127.0.0.1', 'Firefox 61.0 Mac OS X'),
(14, 1, '2018-07-11 00:56:53', '127.0.0.1', 'Firefox 61.0 Mac OS X');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(10) NOT NULL,
  `cat_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cat_parent_id` int(10) NOT NULL,
  `cat_url` int(255) NOT NULL,
  `cat_content` text COLLATE utf8_unicode_ci NOT NULL,
  `cat_language` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'blog',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_rewrite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `display_form` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `display_to` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(1) NOT NULL,
  `views` int(1) NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stores` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) NOT NULL,
  `category_map` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `type`, `title`, `thumbnail`, `url_rewrite`, `content`, `created_at`, `updated_at`, `display_form`, `display_to`, `status`, `views`, `language`, `stores`, `category_id`, `category_map`) VALUES
(1, 'blog', 'Đăng ký Wallet', 'uploads/apple-icon-57x57.png', 'conbo', '', '2018-07-10 11:14:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(2, 'blog', 'Cài đặt hệ thống', 'uploads/apple-icon-57x57.png', 'conheo', '', '2018-07-10 11:14:17', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(3, 'team', 'KHOA VO', 'uploads/BoShen.png', '', '', '2018-07-10 10:40:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(4, 'team', 'Pham Dung', 'uploads/JiaTian.png', '', '', '2018-07-10 10:45:12', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(5, 'team', 'Ban Dau Hu', 'uploads/JohnZagula.png', '', '', '2018-07-10 10:45:54', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(6, 'team', 'Hang Nguyen', 'uploads/MinH_Kim.png', '', '', '2018-07-10 10:46:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(7, 'team', 'Leszekem', 'uploads/Prof_HongweiZhang.png', '', '', '2018-07-10 10:47:44', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(8, 'team', 'Akira', 'uploads/TianfangLi.png', '', '', '2018-07-10 10:48:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(9, 'team', 'J\'kask', 'uploads/YanGong.png', '', '', '2018-07-10 10:49:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(10, 'team', 'Katan', 'uploads/YusenDai.png', '', '', '2018-07-10 10:50:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(11, 'blog', 'Cài đặt Pool', '', '', '', '2018-07-10 11:15:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(12, 'blog', 'Cài đặt cấu hình miner', '', '', '', '2018-07-10 11:15:31', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(13, 'timeline', 'Vận hành hệ thống', '', '', 'Chúng tôi sẽ tiến hành vận hành hệ thống Roller Platform đi vào hoạt động từ ngày 12/7/2018 lúc 0h 0m 0s theo GMT +7 từ block number = 1', '2018-07-11 09:23:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(14, 'timeline', 'Phát triển Wallet', '', '', 'Xạy dụng ứng dụng wallet tren Window/ Mac/ Linux / IOS, Androi dưới dạng Application để đơn giản hóa người sử dụng', '2018-07-11 09:25:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(15, 'timeline', 'Phát hành Masternode', '', '', 'Dự kiến sẽ phát hành Masternode cho Roller Platform sao block 300.000. Khi tới block 300.000 chúng tôi sẽ tiến hành Hanfork để cập nhập Masternode', '2018-07-11 09:26:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(16, 'timeline', 'Lên sàn giao dịch', '', '', 'Sau khi Masternode được phát hành chúng tôi sẽ tiến hành lên sàn giao dịch cho Roller.', '2018-07-11 09:27:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(17, 'timeline', 'Phát triển ứng dụng Smart Contract', '', '', 'Chúng tôi sẽ mở các dịch vụ ứng dụng trên Roller Platform như xây dựng ICO, Token, Game bằng Application đơn giản hóa người dùng', '2018-07-11 09:27:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'blog',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_rewrite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `display_form` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `display_to` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(1) NOT NULL,
  `views` int(1) NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stores` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `in_menu` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `type`, `title`, `site_keywords`, `site_description`, `thumbnail`, `url_rewrite`, `content`, `created_at`, `updated_at`, `display_form`, `display_to`, `status`, `views`, `language`, `stores`, `in_menu`) VALUES
(1, 'blog', 'Test Content', '', '', 'uploads/apple-icon-57x57.png', 'conbo', '', '2018-07-10 07:06:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0),
(2, 'blog', 'test 356', '', '', 'uploads/apple-icon-57x57.png', 'conheo', '', '2018-07-10 07:06:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0);

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
(1, 'site_name', 'Roller Coins', '', '', ''),
(2, 'site_description', '', '', '', ''),
(3, 'site_keywords', '', '', '', ''),
(4, 'url_prefix', '.html', '', '', '');

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
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `options` text COLLATE utf8_unicode_ci NOT NULL,
  `paths` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sorts` int(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `language`, `stores`, `plugins`, `name`, `description`, `options`, `paths`, `sorts`, `status`) VALUES
(1, '', '', '', 'Slider', '<h1>Roller Platform</h1>\r\n<p>Xây dựng trên nền tảng Ethereum. Roller Platform cung cấp cho người dùng tất cả các ứng dụng chạy trên smart contract và coin base</p>\r\n<p>\r\nTên : Roller Network<br>\r\nViết tắt: ROL<br>\r\nLoại : Proof-of-Work<br>\r\nThuật toán : Ethash<br>\r\nThời gian tối đa 1 block : 15 secs<br>\r\nSố coin 1 block : 10<br>\r\nKhông sử dụng tạo coin cho develop<br>\r\nKhông vận hành bán ICO<br>\r\nNguyên lý dựa trên nguyên tắt cộng đồng sử dụng\r\n</p>\r\n<br>\r\n<h4>Dự kiến vận hành 12/7/2018</h4>\r\n<br>\r\n<div id=\"count_down\"></div>', '{\"url\":\"\",\"limit\":\"8\",\"effin\":[\"\",\"\",\"\",\"\"],\"id\":\"\",\"class\":\"clear-padding\",\"svn\":\"\",\"backgroundeff\":\"\",\"backgroundurl\":\"https:\\/\\/htmlstream.com\\/preview\\/front-v1.2\\/assets\\/img\\/750x750\\/img2.jpg\"}', 'resource/blocks/slider.php', 0, 1),
(2, '', '', '', 'Hướng dẫn người dùng', 'Các bài hướng dẫn căn bản khai thác Roller', '{\"url\":\"type=blog&sort=DESC&limit=5\",\"limit\":\"4\",\"effin\":[\"flipInY\",\"flipInX\",\"fadeInLeft\",\"fadeInUpBig\"],\"id\":\"\",\"class\":\"bg-primary\",\"svn\":\"stline.svg\",\"backgroundeff\":\"\",\"backgroundurl\":\"\"}', 'resource/blocks/news.php', 3, 1),
(3, '', '', '', 'Thành viên phát triển dự án', 'Một số thành viên tiêu biểu phái triển dự án này tại quốc gia của bạn', '{\"url\":\"\",\"limit\":\"8\",\"effin\":[\"\",\"\",\"\",\"\"],\"id\":\"\",\"class\":\"\",\"svn\":\"\",\"backgroundeff\":\"\",\"backgroundurl\":\"\"}', 'resource/blocks/news.php', 5, 0),
(4, '', '', '', 'Lịch trình dự kiến', 'Lịch trình phát triển dự án đang diển ra trên hệ thống vận hành của chúng tôi', '{\"url\":\"type=timeline&limit=5\",\"limit\":\"5\",\"effin\":[\"bounceInLeft\",\"bounceInRight\",\"\",\"\"],\"id\":\"timeline\",\"class\":\"timeline\",\"svn\":\"\",\"backgroundeff\":\"\",\"backgroundurl\":\"\"}', 'resource/blocks/timeline.php', 2, 0),
(5, '', '', '', 'Điều hành dự án', 'Các thành viên đang tham gia điều hành dự án Roller Platform', '{\"url\":\"type=team\",\"limit\":\"4\",\"effin\":[\"zoomInDown\",\"\",\"\",\"\"],\"id\":\"\",\"class\":\"padding-bottom-50\",\"svn\":\"svn_bottom_kline\",\"backgroundeff\":\"\",\"backgroundurl\":\"\"}', 'resource/blocks/team.php', 4, 0),
(8, '', '', '', 'Text-info', '', '{\"url\":\"\",\"limit\":\"\",\"effin\":[\"\",\"\",\"\",\"\"],\"id\":\"\",\"class\":\"\",\"svn\":\"\",\"backgroundeff\":\"\",\"backgroundurl\":\"\"}', 'resource/blocks/text-info.php', 1, 0);

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
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url_rewrite` (`url_rewrite`),
  ADD KEY `title` (`title`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `url_rewrite` (`url_rewrite`),
  ADD KEY `title` (`title`);

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
