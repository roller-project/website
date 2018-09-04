-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2018 at 12:05 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

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
  `is_admin` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--


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
(14, 1, '2018-07-11 00:56:53', '127.0.0.1', 'Firefox 61.0 Mac OS X'),
(15, 1, '2018-07-10 20:34:58', '127.0.0.1', 'Firefox 61.0 Mac OS X'),
(16, 1, '2018-07-12 00:55:06', '127.0.0.1', 'Firefox 61.0 Mac OS X'),
(17, 1, '2018-07-11 18:44:29', '127.0.0.1', 'Firefox 61.0 Mac OS X'),
(18, 1, '2018-07-13 01:20:43', '127.0.0.1', 'Firefox 61.0 Mac OS X'),
(19, 1, '2018-07-12 18:40:03', '127.0.0.1', 'Firefox 61.0 Mac OS X'),
(20, 1, '2018-07-13 01:03:56', '127.0.0.1', 'Firefox 61.0 Mac OS X');

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
(1, 'blog', 'Đăng ký Wallet', 'uploads/apple-icon-57x57.png', 'conbo', 'Chúng tôi đang tiến hành cập nhập dữ liệu cho các hường dẫn người dùng', '2018-07-12 14:33:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(2, 'blog', 'Cài đặt hệ thống', 'uploads/apple-icon-57x57.png', 'conheo', 'Chúng tôi đang tiến hành cập nhập dữ liệu cho các hường dẫn người dùng', '2018-07-12 14:33:18', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(3, 'team', 'CEO<br>KHOA VO', 'uploads/BoShen.png', '', '', '2018-07-12 15:02:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(4, 'team', 'MANAGER / Pham Dung', 'uploads/JiaTian.png', '', '', '2018-07-12 15:01:39', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(5, 'team', 'DOC / Ban Dau Hu', 'uploads/JohnZagula.png', '', '', '2018-07-12 15:01:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(6, 'team', 'Support / Hang Nguyen', 'uploads/MinH_Kim.png', '', '', '2018-07-12 15:02:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(7, 'team', 'Support / Leszekem', 'uploads/Prof_HongweiZhang.png', '', '', '2018-07-12 15:02:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(8, 'team', 'Akira', 'uploads/TianfangLi.png', '', '', '2018-07-10 10:48:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(9, 'team', 'J\'kask', 'uploads/YanGong.png', '', '', '2018-07-10 10:49:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(10, 'team', 'Katan', 'uploads/YusenDai.png', '', '', '2018-07-10 10:50:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(11, 'blog', 'Cài đặt Pool', '', '', 'Chúng tôi đang tiến hành cập nhập dữ liệu cho các hường dẫn người dùng', '2018-07-12 14:33:22', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(12, 'blog', 'Cài đặt cấu hình miner', '', '', 'Chúng tôi đang tiến hành cập nhập dữ liệu cho các hường dẫn người dùng', '2018-07-12 14:33:26', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(13, 'timeline', 'Vận hành hệ thống', '', '', 'Chúng tôi sẽ tiến hành vận hành hệ thống Roller Platform đi vào hoạt động từ ngày 12/7/2018 lúc 0h 0m 0s theo GMT +7 từ block number = 1', '2018-07-11 09:23:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(14, 'timeline', 'Phát triển Wallet', '', '', 'Xạy dụng ứng dụng wallet tren Window/ Mac/ Linux / IOS, Androi dưới dạng Application để đơn giản hóa người sử dụng', '2018-07-11 09:25:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(15, 'timeline', 'Phát hành Masternode', '', '', 'Dự kiến sẽ phát hành Masternode cho Roller Platform sao block 300.000. Khi tới block 300.000 chúng tôi sẽ tiến hành Hanfork để cập nhập Masternode', '2018-07-11 09:26:13', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(16, 'timeline', 'Lên sàn giao dịch', '', '', 'Sau khi Masternode được phát hành chúng tôi sẽ tiến hành lên sàn giao dịch cho Roller.', '2018-07-11 09:27:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(17, 'timeline', 'Phát triển ứng dụng Smart Contract', '', '', 'Chúng tôi sẽ mở các dịch vụ ứng dụng trên Roller Platform như xây dựng ICO, Token, Game bằng Application đơn giản hóa người dùng', '2018-07-11 09:27:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, ''),
(18, 'exchange', 'Ex 1', 'uploads/news_1.png', '', '', '2018-07-12 14:30:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 'english', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url_rewrite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(1) NOT NULL,
  `views` int(1) NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stores` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `in_menu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apps_display` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `parent_id`, `title`, `site_keywords`, `site_description`, `thumbnail`, `url_rewrite`, `content`, `created_at`, `updated_at`, `status`, `views`, `language`, `stores`, `in_menu`, `apps_display`) VALUES
(1, 0, 'Test Content', '', '', 'uploads/apple-icon-57x57.png', 'conbo', '', '2018-07-10 07:06:38', '0000-00-00 00:00:00', 0, 0, 'english', '', '0', ''),
(2, 3, 'test 356', '', '', 'uploads/apple-icon-57x57.png', 'conheo', '', '2018-07-14 09:06:08', '0000-00-00 00:00:00', 0, 0, 'english', '', '0', ''),
(3, 1, 'fdsa', '', '', '', 'khoa', '<p>&nbsp;</p>', '2018-07-14 10:02:12', '0000-00-00 00:00:00', 1, 0, 'english', '', '', '1');

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
(4, 'url_prefix', '.html', '', '', ''),
(10, 'site_email', '', '', '', ''),
(11, 'language', 'english', '', '', ''),
(12, 'maintenance', 'off', '', '', ''),
(13, 'post_type', 'team=Team|exchange=Exchange List', '', '', '');

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
(1, '', '', '', 'Slider', '<h1>Roller Platform</h1>\r\n<p>Xây dựng trên nền tảng Ethereum. Roller Platform cung cấp cho người dùng tất cả các ứng dụng chạy trên smart contract và coin base</p>\r\n<p>\r\nTên : Roller Network<br>\r\nViết tắt: ROL<br>\r\nLoại : Proof-of-Work<br>\r\nThuật toán : Ethash<br>\r\nThời gian tối đa 1 block : 15 secs<br>\r\nSố coin 1 block : 10<br>\r\nKhông sử dụng tạo coin cho develop<br>\r\nKhông vận hành bán ICO<br>\r\nNguyên lý dựa trên nguyên tắt cộng đồng sử dụng\r\n</p>\r\n<br>\r\n<h4>Dự kiến vận hành 12/7/2018</h4>\r\n<br>\r\n<div id=\"count_down\"></div>', '{\"url\":\"\",\"limit\":\"8\",\"effin\":[\"\",\"\",\"\",\"\"],\"id\":\"\",\"class\":\"clear-padding\",\"svn\":\"\",\"backgroundeff\":\"\",\"backgroundurl\":\"https:\\/\\/htmlstream.com\\/preview\\/front-v1.2\\/assets\\/img\\/750x750\\/img2.jpg\"}', 'resource/blocks/slider.php', 0, 0),
(2, '', '', '', 'Hướng dẫn người dùng', 'Các bài hướng dẫn căn bản khai thác Roller', '{\"url\":\"type=blog&sort=DESC&limit=5\",\"limit\":\"4\",\"effin\":[\"flipInY\",\"flipInX\",\"fadeInLeft\",\"fadeInUpBig\"],\"id\":\"\",\"class\":\"bg-warning\",\"svn\":\"yewwer.svg\",\"backgroundeff\":\"\",\"backgroundurl\":\"\"}', 'resource/blocks/news.php', 4, 1),
(3, '', '', '', 'Liên kết phát triển', 'Một số thành viên tiêu biểu phái triển dự án này tại quốc gia của bạn', '{\"url\":\"\",\"limit\":\"8\",\"effin\":[\"\",\"\",\"\",\"\"],\"id\":\"\",\"class\":\"bg-light\",\"svn\":\"treand-up.svg\",\"backgroundeff\":\"\",\"backgroundurl\":\"\"}', 'resource/blocks/news.php', 7, 1),
(4, '', '', '', 'Lịch trình dự kiến', 'Lịch trình phát triển dự án đang diển ra trên hệ thống vận hành của chúng tôi', '{\"url\":\"type=timeline&limit=5\",\"limit\":\"5\",\"effin\":[\"bounceInLeft\",\"bounceInRight\",\"\",\"\"],\"id\":\"timeline\",\"class\":\"timeline\",\"svn\":\"\",\"backgroundeff\":\"\",\"backgroundurl\":\"\"}', 'resource/blocks/timeline.php', 2, 1),
(5, '', '', '', 'Điều hành dự án', 'Các thành viên đang tham gia điều hành dự án Roller Platform', '{\"url\":\"type=team\",\"limit\":\"4\",\"effin\":[\"zoomInDown\",\"\",\"\",\"\"],\"id\":\"\",\"class\":\"padding-bottom-50\",\"svn\":\"stline.svg\",\"backgroundeff\":\"\",\"backgroundurl\":\"\"}', 'resource/blocks/team.php', 5, 1),
(8, '', '', '', 'Text-info', '<!-- Info -->\r\n            <div class=\"media mb-7\" id=\"jomView\">\r\n              <div class=\"d-flex mr-3\">\r\n                <span class=\"u-icon u-icon-primary--air u-icon--sm rounded-circle\">\r\n                  <span class=\"u-icon__inner font-weight-bold\">A.</span>\r\n                </span>\r\n              </div>\r\n              <div class=\"media-body\">\r\n                <h3 class=\"h5 text-primary\">Thông tin Roller Platform</h3>\r\n                <p>\r\nTên : Roller Network<br>\r\nViết tắt: ROL<br>\r\nLoại : Proof-of-Work<br>\r\nThuật toán : Ethash<br>\r\nThời gian tối đa 1 block : 15 secs<br>\r\nSố coin 1 block : 10<br>\r\nKhông sử dụng tạo coin cho develop<br>\r\nKhông vận hành bán ICO<br>\r\nNguyên lý dựa trên nguyên tắt cộng đồng sử dụng\r\n</p>\r\n              </div>\r\n            </div>\r\n            <!-- End Info -->\r\n\r\n            <!-- Info -->\r\n            <div class=\"media mb-7\">\r\n              <div class=\"d-flex mr-3\">\r\n                <span class=\"u-icon u-icon-primary--air u-icon--sm rounded-circle\">\r\n                  <span class=\"u-icon__inner font-weight-bold\">B.</span>\r\n                </span>\r\n              </div>\r\n              <div class=\"media-body\">\r\n                <h3 class=\"h5 text-primary\">Cơ hội phát triển kinh doanh</h3>\r\n                <p>Nhận đóng góp 0.2 BTC cho 35 tài khoản từ ngày 12/07/2018. Những tài khoản này sẽ được mining từ block 1- block 50.000</p>\r\n                <p>Các đóng góp này sẽ làm chi phí lên sàn. Vui lòng chuyển về ví BTC : <a href=\"https://www.blockchain.com/btc/address/18UDydoLS6eckX2aspZLWUWngKkZahWPkK\" target=\"_bank\">18UDydoLS6eckX2aspZLWUWngKkZahWPkK</a></p>\r\n<p>Hiện đã có 6 tài khoản đóng góp với số lượng 1.2 BTC</p>\r\n              </div>\r\n            </div>\r\n            <!-- End Info -->', '{\"url\":\"\",\"limit\":\"\",\"effin\":[\"\",\"\",\"\",\"\"],\"id\":\"\",\"class\":\"bg-light\",\"svn\":\"stline.svg\",\"backgroundeff\":\"\",\"backgroundurl\":\"https:\\/\\/cryptocoingrowth.com\\/wp-content\\/uploads\\/2018\\/04\\/shutterstock_687394948-1-768x768-750x750.jpg\"}', 'resource/blocks/text-info.php', 3, 1),
(9, '', '', '', 'Roller Platform', 'Chính thức hoạt động từ ngày 12/07/2018. Nhận 35 tài khoản đóng góp lên sàn của thành viên. <a href=\"#jomView\">Xem thêm...</a>', '{\"url\":\"\",\"limit\":\"\",\"effin\":[\"\",\"\",\"\",\"\"],\"id\":\"\",\"class\":\"clear-padding\",\"svn\":\"\",\"backgroundeff\":\"\",\"backgroundurl\":\"\"}', 'resource/blocks/slider-v2.php', 1, 1),
(10, '', '', '', 'List Exchange', '', '{\"url\":\"type=exchange\",\"limit\":\"24\",\"effin\":[\"\",\"\",\"\",\"\"],\"id\":\"\",\"class\":\"bg-primary padding-top-50\",\"svn\":\"\",\"backgroundeff\":\"\",\"backgroundurl\":\"https:\\/\\/htmlstream.com\\/preview\\/front-v1.2\\/assets\\/img\\/1920x800\\/img5.jpg\"}', 'resource/blocks/logo-link.php', 6, 1);

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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
