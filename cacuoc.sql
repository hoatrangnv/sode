-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2019 lúc 12:50 PM
-- Phiên bản máy phục vụ: 10.1.25-MariaDB
-- Phiên bản PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cacuoc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bankers`
--

CREATE TABLE `bankers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` double(8,2) NOT NULL,
  `rate_times` int(10) UNSIGNED NOT NULL,
  `register_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bankers`
--

INSERT INTO `bankers` (`id`, `name`, `logo`, `promotion`, `comment`, `rate`, `rate_times`, `register_url`, `rate_url`, `created_at`, `updated_at`) VALUES
(1, 'zbet', 'zbet.jpeg?n=1571999727', 'Thưởng <span style=\"font-size: 14pt;\"><strong>200%</strong></span> mở tài khoản <strong>+ 5 triệu đồng</strong>', '<div>Vua nhà cái châu Mỹ</div>\r\n<div>Support 24/7</div>\r\n<div>Nạp rút tiền nhanh</div>', 9.90, 89078, 'https://www.zbet.com/', 'https://nhacaiso.vn/zbet/', '2019-10-25 10:30:05', '2019-10-25 10:35:30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `config`
--

CREATE TABLE `config` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `config`
--

INSERT INTO `config` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Nhà Cái Số', 'Top nhà cái số 1✅ các nhà cái uy tín nhất Việt Nam hiện nay. ✅ Tổng hợp nhà cái số một tốt nhất châu Á, nhà cái bóng đá cá cược uy tín nhất 2019', NULL, '2019-10-24 08:02:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_22_124752_create_config_table', 2),
(7, '2019_10_25_151525_create_bankers_table', 4),
(6, '2019_10_22_125238_create_posts_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` smallint(5) UNSIGNED NOT NULL COMMENT '1:Promotion 2:Guide 3:Experience 4:Game',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos` int(10) UNSIGNED NOT NULL,
  `view` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `type`, `title`, `slug`, `cover`, `description`, `content`, `pos`, `view`, `created_at`, `updated_at`) VALUES
(1, 2, 'Cách đọc kèo bóng đá trên mạng cho người mới chơi', 'cach-doc-keo-bong-da-tren-mang-cho-nguoi-moi-choi', 'cach-doc-keo-bong-da-tren-mang-cho-nguoi-moi-choi.jpeg?n=1571995152', 'Với những người bắt đầu chơi cá cược, am hiểu và nắm được các định nghĩa cơ bản của các tỷ lệ cá cược là một yêu cầu tối thiểu.', '<p>Với mong muốn gi&uacute;p người chơi c&aacute; cược b&oacute;ng đ&aacute; thuận lợi hơn. Nh&agrave; c&aacute;i số chia sẻ <strong>c&aacute;ch đọc k&egrave;o b&oacute;ng đ&aacute;</strong> tại c&aacute;c nh&agrave; c&aacute;i đang hoạt động tr&ecirc;n mạng hiện nay. Từ k&egrave;o ch&acirc;u &Aacute;, k&egrave;o Ch&acirc;u &Acirc;u tới k&egrave;o b&oacute;ng đ&aacute; t&agrave;i xỉu. H&atilde;y bắt đầu t&igrave;m hiểu nh&eacute;. !</p>\r\n\r\n<p><img alt=\"Cách xem kèo bóng đá\" class=\"aligncenter size-full wp-image-11793\" src=\"https://nhacaiso.vn/wp-content/uploads/2019/04/cach-xem-keo-bong-da-nhacaiso.jpg\" style=\"height:295px; width:704px\" /></p>\r\n\r\n<h2 style=\"text-align:justify\"><strong>C&aacute;ch đọc k&egrave;o b&oacute;ng đ&aacute; Ch&acirc;u &Aacute;</strong></h2>\r\n\r\n<p style=\"text-align:justify\">Khi bạn đ&atilde; biết được c&aacute;ch xem k&egrave;o b&oacute;ng đ&aacute; th&igrave; việc đọc k&egrave;o b&oacute;ng đ&aacute; sẽ rất dễ d&agrave;ng cho c&aacute;c bạn. Ở ch&acirc;u &Aacute; người chơi thường lựa chọn k&egrave;o chấp, k&egrave;o ch&acirc;u &aacute; để c&aacute; cược. K&egrave;o Ch&acirc;u &Aacute; bao gồm c&aacute;c k&egrave;o sau:</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>K&egrave;o đồng banh &ndash; k&egrave;o h&ograve;a &ndash; tỷ lệ chấp (0-0)</strong></h3>\r\n\r\n<p style=\"text-align:justify\">K&egrave;o đồng banh, hay k&egrave;o h&ograve;a xuất hiện khi tr&igrave;nh độ đội b&oacute;ng cửa tr&ecirc;n v&agrave; đội kh&aacute;ch tương đồng nhau v&igrave; thế sẽ c&oacute; tỉ lệ chấp b&agrave;n thắng bằng 0. K&egrave;o đồng banh 0 tương tự như k&egrave;o h&ograve;a 1, h&ograve;a 2. Với k&egrave;o n&agrave;y khi bạn chọn cửa tr&ecirc;n nh&agrave; hay đội cửa dưới nếu đội n&agrave;o đ&oacute; thắng th&igrave; bạn sẽ được ăn tiền. Nếu h&ograve;a sẽ được ho&agrave;n tiền.</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>K&egrave;o đồng banh nửa tr&aacute;i&nbsp; 0 &ndash; 0.5 hay l&agrave; K&egrave;o 1/4</strong></h3>\r\n\r\n<p style=\"text-align:justify\">L&agrave; k&egrave;o m&agrave; đội của tr&ecirc;n chấp đội cửa dưới chưa đến nửa quả. Vậy thắng thua được t&iacute;nh như thế n&agrave;o ?</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">&ndash; Nếu đội cửa tr&ecirc;n thắng trận: Cược đội cửa tr&ecirc;n bạn sẽ thắng k&egrave;o, cược đội cửa dưới bạn thua k&egrave;o.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">&ndash; Ngược lại nếu đội cửa tr&ecirc;n thua trận: Cược đội cửa tr&ecirc;n bạn sẽ thua k&egrave;o, cược đội cửa dưới bạn thắng k&egrave;o.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:#000000\">&ndash; V&agrave; Nếu hai đội h&ograve;a nhau: Cược đội cửa tr&ecirc;n bạn sẽ thua nửa tiền k&egrave;o, cược đội cửa dưới bạn thắng nửa tiền k&egrave;o.</span></p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>K&egrave;o chấp nửa tr&aacute;i &ndash; K&egrave;o 1/2 hay 0,5</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Đối với k&egrave;o n&agrave;y th&igrave; đội cửa tr&ecirc;n sẽ chấp nửa tr&aacute;i với đội cửa dưới. K&egrave;o n&agrave;y sẽ kh&ocirc;ng c&oacute; trường hợp ho&agrave;n tiền.</p>\r\n\r\n<p style=\"text-align:justify\">Nếu đặt cửa tr&ecirc;n bạn thắng k&egrave;o nếu họ thắng trận, ngược lại đội dưới thắng trận th&igrave; họ thắng k&egrave;o. V&agrave; nếu 2 đội h&ograve;a nhau th&igrave; phần thắng thuộc về đ&ocirc;i của dưới.</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>K&egrave;o chấp nửa một &ndash; K&egrave;o 3/4, k&egrave;o 0,75 hay 0,5/1</strong></h3>\r\n\r\n<p style=\"text-align:justify\">&ndash; Nếu đội cửa tr&ecirc;n thắng c&aacute;ch biệt 1 b&agrave;n: Chọn đội cửa tr&ecirc;n bạn được ăn nửa tiền &ndash; đội cửa dưới mất nửa tền</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Nếu đội cửa tr&ecirc;n thắng c&aacute;ch biệt 2 b&agrave;n trở l&ecirc;n: Chọn đội cửa tr&ecirc;n &ndash; thắng k&egrave;o, chọn đội kh&aacute;ch &ndash; thua k&egrave;o.</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; Nếu đội nh&agrave; thua hoặc h&ograve;a đội kh&aacute;ch: Chọn đội cửa tr&ecirc;n &ndash; thua k&egrave;o, chọn đội kh&aacute;ch &ndash; thắng k&egrave;o.</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>K&egrave;o chấp 1 tr&aacute;i &ndash; k&egrave;o 1, k&egrave;o h&ograve;a</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Đối k&egrave;o chấp 1 tr&aacute;i khi đội của tr&ecirc;n thắng với c&aacute;ch biệt 1 b&agrave;n th&igrave; sẽ h&ograve;a tiền cược. Nếu thắng với c&aacute;ch biệt 2 b&agrave;n đặt của tr&ecirc;n thắng cược. V&agrave; khi đội của dưới thắng hoặc h&ograve;a th&igrave; đặt cửa dưới sẽ thắng cược.</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>K&egrave;o chấp 1 tr&aacute;i đồng nửa &ndash; 1/1,5 hay 1,25</strong></h3>\r\n\r\n<p style=\"text-align:justify\">-Nếu đội nằm tr&ecirc;n c&aacute;ch biệt 1 b&agrave;n: Chọn đội nằm tr&ecirc;n &ndash; thua nửa k&egrave;o, chọn đội nằm dưới &ndash; thắng nửa k&egrave;o</p>\r\n\r\n<p style=\"text-align:justify\">-Nếu đội nằm tr&ecirc;n thắng c&aacute;ch biệt từ 2 b&agrave;n trở l&ecirc;n: Chọn đội nằm tr&ecirc;n th&igrave; bạn thắng k&egrave;o, chọn đội dưới bạn thua k&egrave;o</p>\r\n\r\n<p style=\"text-align:justify\">-Khi đội nằm dưới thắng hoặc h&ograve;a: Chọn đội nằm tr&ecirc;n &ndash; thua k&egrave;o, chọn đội nằm dưới &ndash; thắng k&egrave;o</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>K&egrave;o chấp 1 tr&aacute;i rưỡi &ndash; k&egrave;o 1,5</strong></h3>\r\n\r\n<p style=\"text-align:justify\">K&egrave;o 1.5 hay c&ograve;n gọi l&agrave; k&egrave;o 1 đứt với k&egrave;o n&agrave;y đội tr&ecirc;n sẽ chấp đội dưới 1.5 b&agrave;n. Như vậy nếu đội chủ nh&agrave; thắng với c&aacute;ch biệt 2 b&agrave;n thắng trở l&ecirc;n th&igrave; đội cửa dưới sẽ thua k&egrave;o. Nếu dưới 2 b&agrave;n th&igrave; đặt của tr&ecirc;n thua to&agrave;n bộ tiền cược.</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>K&egrave;o chấp tr&aacute;i rưỡi đến 2 tr&aacute;i &ndash; k&egrave;o 1,5-2, k&egrave;o 1.75</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Đặt đội của tr&ecirc;n thắng to&agrave;n bộ k&egrave;o khi c&aacute;ch biệt tr&ecirc;n 3 b&agrave;n thắng. Nếu c&aacute;ch biệt 2 b&agrave;n th&igrave; thắng nửa k&egrave;o, của dưới thua nửa k&egrave;o. Nếu tỉ số dưới 2 b&agrave;n hoặc h&ograve;a v&agrave; thua th&igrave; đặt của dưới ăn to&agrave;n bộ tiền cược.</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>K&egrave;o chấp 2 tr&aacute;i (2) k&egrave;o h&ograve;a 2</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Với k&egrave;o n&agrave;y bạn sẽ h&ograve;a k&egrave;o khi đội cửa tr&ecirc;n thắng với c&aacute;ch biệt 2 b&agrave;n. Dưới 2 b&agrave;n th&igrave; đặt cửa dưới ăn đủ tiền cược của tr&ecirc;n thua hết. C&aacute;ch biệt tr&ecirc;n 2 b&agrave;n th&igrave; của tr&ecirc;n thắng cược, cửa dưới thua cuộc.</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>K&egrave;o chấp 2,25 &ndash; tỷ lệ chấp từ 2 &ndash; 2,5 tr&aacute;i</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Nếu đội cửa tr&ecirc;n c&oacute; c&aacute;ch biệt &iacute;t hơn 2 b&agrave;n th&igrave; đặt cửa dưới ăn to&agrave;n bộ tiền. Nếu thắng c&aacute;ch biệt 2 b&agrave;n th&igrave; đội của dưới ăn nửa tiền, cửa tr&ecirc;n thua nửa tiền. Thắng c&aacute;ch biệt 3 b&agrave;n đặt cửa tr&ecirc;n thắng cược.</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>K&egrave;o chấp 2,5</strong></h3>\r\n\r\n<p style=\"text-align:justify\">Tương tự như k&egrave;o 1.5 hay k&egrave;o 0.5 bắt buộc đội cửa tr&ecirc;n thắng với c&aacute;ch biệt 3 b&agrave;n mới thắng cược. Nếu &iacute;t hơn, thua hoặc h&ograve;a th&igrave; đặt cửa dưới thắng cược. Cửa tr&ecirc;n thua to&agrave;n bộ cược. Kh&ocirc;ng c&oacute; h&ograve;a tiền</p>\r\n\r\n<h3 style=\"text-align:justify\"><strong>K&egrave;o chấp 2,75 &ndash; tỷ lệ chấp 2,5 &ndash; 3 tr&aacute;i</strong></h3>\r\n\r\n<p style=\"text-align:justify\">K&egrave;o n&agrave;y đội tr&ecirc;n sẽ chấp đội dưới 2,5 &ndash; 3 b&agrave;n. Như vậy bắt buộc đội tr&ecirc;n phải thắng với c&aacute;ch biệt 4 b&agrave;n th&igrave; bạn th&igrave; mới thắng hết k&egrave;o, nếu c&aacute;ch biệt 3 b&agrave;n th&igrave; đội cửa tr&ecirc;n thắng 1/2 , đội kh&aacute;ch thua 1/2 tiền cược. C&ograve;n c&aacute;ch biệt dưới 3 b&agrave;n th&igrave; đội của dưới sẽ thắng cược.</p>\r\n\r\n<h2 style=\"text-align:justify\"><strong>C&aacute;ch đọc k&egrave;o b&oacute;ng đ&aacute; Ch&acirc;u &Acirc;u</strong></h2>\r\n\r\n<p style=\"text-align:justify\">K&egrave;o ch&acirc;u &Acirc;u c&ograve;n c&oacute; t&ecirc;n gọi kh&aacute;c l&agrave; k&egrave;o 1&times;2, c&oacute; nguồn gốc từ ch&acirc;u &Acirc;u v&agrave; được d&ugrave;ng trong c&aacute;c trận đấu m&agrave; hai đội c&oacute; lực lượng đồng đều nhau.</p>\r\n\r\n<p style=\"text-align:justify\">Khi tham gia <strong>soi k&egrave;o đ&aacute; b&oacute;ng</strong> n&agrave;y, người chơi kh&ocirc;ng cần phải quan t&acirc;m đến số b&agrave;n thắng, b&agrave;n thua của trận đấu. Bạn chỉ cần ch&uacute; &yacute; xem đội n&agrave;o l&agrave; chủ nh&agrave;, đội n&agrave;o l&agrave; kh&aacute;ch v&agrave; đưa ra dự đo&aacute;n trận đấu l&agrave; thắng &ndash; h&ograve;a hay thua.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>C&ocirc;ng thức 1&times;2 c&oacute; nghĩa l&agrave;:</strong></p>\r\n\r\n<p style=\"text-align:justify\">&ndash; 1 l&agrave; cược cho đội chủ nh&agrave;: Khi đội chủ nh&agrave; thắng trận &ndash; bạn thắng cược</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; 2 l&agrave; cược cho đội kh&aacute;ch: Khi đội kh&aacute;ch thắng &ndash; bạn thắng cược</p>\r\n\r\n<p style=\"text-align:justify\">&ndash; X l&agrave; đặt cược hai đội h&ograve;a nh&agrave;: Khi hai đội h&ograve;a &ndash; bạn thắng cược</p>\r\n\r\n<p><img alt=\"\" class=\"alignleft wp-image-11077\" src=\"https://nhacaiso.vn/wp-content/uploads/2019/08/hot-nhacaiso.gif\" style=\"height:68px; width:68px\" />Đừng bỏ qua b&agrave;i chia sẻ: <a href=\"https://nhacaiso.vn/cach-choi-ca-do-bong-da/\">C&aacute;ch c&aacute; độ b&oacute;ng đ&aacute;</a>&nbsp;kh&ocirc;ng thua khi bạn muốn thắng c&aacute;c nh&agrave; c&aacute;i.</p>\r\n\r\n<h2 style=\"text-align:justify\"><strong>Hướng dẫn c&aacute;ch xem k&egrave;o b&oacute;ng đ&aacute;</strong></h2>\r\n\r\n<p style=\"text-align:justify\">Muốn chơi c&aacute; cược b&oacute;ng đ&aacute; th&igrave; bạn phải biết<span style=\"color:#ff0000\">&nbsp;<strong>c&aacute;ch xem k&egrave;o b&oacute;ng đ&aacute;</strong></span>&nbsp;v&agrave; phải hiểu được c&aacute;c con số ở trong bảng xem k&egrave;o của mỗi trận đấu. Nh&agrave; c&aacute;i số sẽ lấy v&iacute; dụ khi soi k&egrave;o trận đấu giữa Australia v&agrave; Syria để giải th&iacute;ch c&aacute;c chỉ số k&egrave;o đấu cho c&aacute;c bạn.</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"\" class=\"aligncenter wp-image-6062\" src=\"https://nhacaiso.vn/wp-content/uploads/2019/01/cach-doc-keo-bong-da.jpg\" style=\"height:405px; width:800px\" /></p>\r\n\r\n<h3 style=\"text-align:justify\">C&aacute;c K&iacute; hiệu v&agrave; con số cần biết khi xem k&egrave;o</h3>\r\n\r\n<p style=\"text-align:justify\"><strong>Giờ v&agrave; Trấn đấu</strong>: C&aacute;i n&agrave;y th&igrave; tất cả mọi người đ&atilde; biết, đặc điểm cần lưu &yacute; ở cột n&agrave;y l&agrave; <span style=\"color:#ff0000\">đội b&oacute;ng đứng trước</span>. Đội n&agrave;o đứng trước th&igrave; mặc định sẽ l&agrave; <span style=\"color:#ff0000\">đội cửa tr&ecirc;n</span> được đ&aacute;nh gi&aacute; cao hơn trong trận đấu.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Cả trận</strong> vs <strong>Hiệp 1</strong>: Nghĩa l&agrave; bạn muốn bắt k&egrave;o b&oacute;ng đ&aacute; cả trận đấu hay chỉ trong hiệp 1. Ở mỗi kiểu k&egrave;o sẽ c&oacute; c&aacute;c th&ocirc;ng số c&aacute; cược kh&aacute;ch nhau:</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Tỷ lệ</strong>: ở đ&acirc;y th&ocirc;ng thường l&agrave; k&egrave;o Ch&acirc;u &Aacute;.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>T&agrave;i Xỉu</strong>: l&agrave; k&egrave;o b&oacute;ng đ&aacute; t&agrave;i xỉu bạn n&ecirc;n t&igrave;m hiểu chi tiết: <a href=\"https://nhacaiso.vn/tai-xiu-bong-da/#Cach_doc_keo_tai_xiu_bong_da_cho_nguoi_moi\" rel=\"noopener\" target=\"_blank\"><strong>C&aacute;ch đọc k&egrave;o t&agrave;i xỉu b&oacute;ng đ&aacute;</strong></a>, kinh nghiệm đ&aacute;nh t&agrave;i xỉu ở Nh&agrave; C&aacute;i Số.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>1&times;2: </strong>L&agrave; k&egrave;o Ch&acirc;u &Acirc;u.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Số 1 c&oacute; khung m&agrave;u đỏ</strong>: L&agrave; số b&agrave;n thắng, tỉ lệ v&agrave; đội cửa tr&ecirc;n chấp đội cửa dưới cả trận đấu. Ở đ&acirc;y&nbsp;Australia l&agrave; đội cửa tr&ecirc;n sẽ chấp&nbsp; Syria 1 quả, tương tự cho k&egrave;o hiệp 1. C&aacute;c con số th&ocirc;ng tường từ 0 &ndash; 3. <span style=\"color:#ff0000\">Bạn xem tiếp c&aacute;ch đọc k&egrave;o b&oacute;ng đ&aacute; ở dưới để hiểu r&otilde; hơn</span>.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>D&atilde;y số, c&aacute;c con số trong bảng</strong>: 0.76 &ndash; 0.92&hellip; l&agrave; tỉ lệ tiền thưởng m&agrave; bạn nhận được khi thắng cược.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Lưu &Yacute;</strong>: mỗi trận đấy sẽ c&oacute; nhiều k&egrave;o kh&aacute;c nhau cho bạn chọn lựa để tham gia c&aacute; cược.</p>\r\n\r\n<h2 style=\"text-align:justify\"><strong>C&aacute;ch t&iacute;nh tiền cược trong b&oacute;ng đ&aacute;</strong></h2>\r\n\r\n<p style=\"text-align:justify\">Khi xem k&egrave;o b&oacute;ng đ&aacute; ch&acirc;u &Aacute; ch&uacute;ng ta thường thấy&nbsp; sẽ c&oacute; cả tỷ lệ dương v&agrave; &acirc;m ( &ndash; 0.92 ở tr&ecirc;n h&igrave;nh ). Vậy con số n&agrave;y c&oacute; &yacute; nghĩa g&igrave;</p>\r\n\r\n<p style=\"text-align:justify\">Khi bạn đặt cược v&agrave;o độ b&oacute;ng c&oacute; tỷ lệ &acirc;m ( Syria ) th&igrave; số tiền thực tế nh&agrave; c&aacute;i trừ l&uacute;c bạn đặt cược sẽ được t&iacute;n với c&ocirc;ng thức:&nbsp; Số tiền đặt * tỷ lệ &acirc;m.</p>\r\n\r\n<p style=\"text-align:justify\">V&iacute; dụ với trận đấu muốn đặt cược 100 ngh&igrave;n đồng cho đội tuyển Syria với tỷ lệ l&agrave; -0.92. Số tiền m&agrave; nh&agrave; c&aacute;i trừ của bạn l&agrave; 100* 0.92 = 92 ngh&igrave;n đồng.</p>\r\n\r\n<p style=\"text-align:justify\">Ở c&aacute;c k&egrave;o c&aacute; cược sẽ c&oacute; 4 trường hợp t&iacute;nh tiền như sau: Bạn thắng cả tiền &ndash; Bạn thắng nửa tiền &ndash; Bạn thua nửa tiền &ndash; Bạn thua cả tiền. C&aacute;ch t&iacute;nh tiền ở dưới bảng n&agrave;y:</p>\r\n\r\n<p style=\"text-align:justify\"><img alt=\"Cách tính tiền kèo bóng đá\" class=\"size-full wp-image-6064\" src=\"https://nhacaiso.vn/wp-content/uploads/2019/01/Cach-tinh-tien-keo-bong-da.jpg\" style=\"height:425px; width:897px\" /></p>\r\n\r\n<p style=\"text-align:justify\">Tr&ecirc;n đ&acirc;y l&agrave; những th&ocirc;ng tin <strong>Hướng dẫn c&aacute;ch đọc k&egrave;o b&oacute;ng đ&aacute;</strong> Ch&acirc;u &Aacute;, soi k&egrave;o b&oacute;ng đ&aacute; Ch&acirc;u &Acirc;u tr&ecirc;n mạng m&agrave; <a href=\"https://nhacaiso.vn\">nh&agrave; c&aacute;i số một</a> tổng hợp lại, hy vọng c&aacute;c bạn sẽ kh&ocirc;ng c&ograve;n bỡ ngỡ khi tham gia c&aacute; đội b&oacute;ng đ&aacute; online nữa. Ch&uacute;c c&aacute;c bạn lu&ocirc;n may mắn v&agrave; thắng lớn!</p>', 999, 1, '2019-10-25 09:19:12', '2019-10-25 10:35:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `phone_number`, `level`, `admin`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nhacaiso', '0123456789', 1, 1, 'nhacaiso@gmail.com', '$2y$10$M6LcjU5XUiTQyI0i395pMeiq.Cd7pK.eR7eJ0LwSmYbCTlq2RX7SO', 'nNW9RHGO8LJeSdqeCIM0PApnrDGL1jnC4YCZThKpYrQLFz9ky7gTctGt1UAF', '2019-10-24 07:58:23', '2019-10-24 07:58:23');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bankers`
--
ALTER TABLE `bankers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bankers`
--
ALTER TABLE `bankers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `config`
--
ALTER TABLE `config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
