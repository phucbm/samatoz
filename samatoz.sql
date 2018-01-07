-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2018 at 10:07 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samatoz`
--

-- --------------------------------------------------------

--
-- Table structure for table `cthd`
--

CREATE TABLE `cthd` (
  `cthd_id` int(10) NOT NULL,
  `hd_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `glx_id` int(10) NOT NULL,
  `cthd_soluong` int(11) NOT NULL,
  `cthd_ngaylap` datetime NOT NULL,
  `glx_dongia` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `hd_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'PRIMARY',
  `hd_username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) NOT NULL,
  `hd_tongtien` double NOT NULL,
  `hd_ngaylap` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `glx_id` int(3) NOT NULL,
  `glx_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `glx_price` double NOT NULL,
  `glx_name_full` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `glx_name_short` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `glx_name_intro` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `glx_img_front` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `glx_img_banner` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `glx_img_color_1` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `glx_img_color_2` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `glx_img_color_3` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `glx_rom_1` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `glx_rom_2` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `glx_memo_card` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `glx_ram` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `glx_dai` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `glx_ngang` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `glx_mong` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `glx_nang` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `glx_scr_size` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `glx_reso` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `glx_chip` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `glx_bat_capa` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `glx_bat_music` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `glx_bat_video` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `glx_bat_call` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `glx_bat_3g` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `glx_bat_wifi` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `glx_cam_front` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `glx_cam_rear` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `glx_cam_rec` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `glx_color_1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `glx_color_2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `glx_color_3` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `glx_buy_fpt` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `glx_buy_cps` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `glx_buy_tgdd` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `glx_tukhoaseo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`glx_id`, `glx_type`, `glx_price`, `glx_name_full`, `glx_name_short`, `glx_name_intro`, `glx_img_front`, `glx_img_banner`, `glx_img_color_1`, `glx_img_color_2`, `glx_img_color_3`, `glx_rom_1`, `glx_rom_2`, `glx_memo_card`, `glx_ram`, `glx_dai`, `glx_ngang`, `glx_mong`, `glx_nang`, `glx_scr_size`, `glx_reso`, `glx_chip`, `glx_bat_capa`, `glx_bat_music`, `glx_bat_video`, `glx_bat_call`, `glx_bat_3g`, `glx_bat_wifi`, `glx_cam_front`, `glx_cam_rear`, `glx_cam_rec`, `glx_color_1`, `glx_color_2`, `glx_color_3`, `glx_buy_fpt`, `glx_buy_cps`, `glx_buy_tgdd`, `glx_tukhoaseo`) VALUES
(1, 'Galaxy S', 18490000, 'Samsung Galaxy S7 Edge', 'S7 Edge', 'Màn hình 5.5 inch Edge Quad - HD Super AMOLED.', 's7e-black-onyx-copy.png', 's7edge-1366x400.png', 's7e-black-onyx-copy.png', 's7e-gold-platinum-copy.png', 's7e-silver-titanium-copy.png', '32', '64', '200', '4', '151', '73', '7', '157', '6', '2560 x 1440 (Quad HD)', '2.15GHz,1.6GHz', '3600', '66', '19', '36', '13', '15', 'CMOS 5.0 MP', 'Dual Pixel 12.0 MP', 'UHD 4K (3840 x 2160)@30fps', 'Gold Platinum', 'Black Onyx', 'silver titanium', 'http://fptshop.com.vn/dien-thoai/samsung-galaxy-s7-edge', 'http://cellphones.com.vn/galaxy-s7-edge-32-gb-cty.html', 'https://www.thegioididong.com/dtdd/samsung-galaxy-s7-edge', ''),
(2, 'Galaxy Note', 15999000, 'Samsung Galaxy Note 5', 'Note 5', 'Màn hình 5.7". Bút Spen tiện dụng.', 'note5-gold-platinum.png', 'note5-1366x400.png', 'note5-black.png', 'note5-gold-platinum.png', 'note5-white-pearl.png', '32', '64', '', '4', '153', '76', '7', '170', '6', '2560 x 1440 (Quad HD)', '2.1GHz, 1.5GHz,Quad-Core', '3000', '64', '15', '22', '10', '13', 'CMOS 5.0 MP', 'CMOS 16.0 MP', 'UHD 4K (3840 x 2160)@30fps', 'Black Sapphire', 'White Pearl', 'Gold Platinum', 'http://fptshop.com.vn/dien-thoai/samsung-galaxy-note-5', 'http://cellphones.com.vn/galaxy-note-5-cty-at.html', 'https://www.thegioididong.com/dtdd/samsung-galaxy-note-5', ''),
(3, 'Galaxy Tab', 12190000, 'Galaxy Tab S (10.5inch)', 'Tab S', 'CPU: 8 nhân, 1.9GHz, 1.3GHz .Màn hình Super AMOLED rực rỡ .Thiết kế mỏng nhẹ, tinh tế.', 'tab-s-titanium-bronze.png', 'tab-s-1366x400.png', 'tab-s-titanium-bronze2.png', 'tab-s-titanium-bronze.png', '', '16', '', '128', '3', '177', '247', '6', '479', '10', '2560 x 1600 (WQXGA)', '1.9GHz, 1.3GHz', '7900', '132', '12', '48', '8', '9', 'CMOS 2.1 MP', 'CMOS 8.0 MP', 'WQHD (2560 x 1440)@30fps', 'Titanium Bronze', 'Titanium Bronze', 'Titanium Bronze', 'http://www.techone.vn/samsung-galaxy-tab-s-10-5-cong-ty-3476.html', 'http://www.techone.vn/samsung-galaxy-tab-s-10-5-cong-ty-3476.html', 'http://www.techone.vn/samsung-galaxy-tab-s-10-5-cong-ty-3476.html', ''),
(4, 'Galaxy Tab', 17599000, 'Samsung Galaxy Tab Pro S 12', 'Tab Pro S', 'Bộ xử lý Intel® Core™ m3-6Y30.Windows 10 Home.Siêu mỏng, siêu nhẹ.', 'tab-pro-s-black.png', 'tab-pro-s-1366x400.png', 'tab-pro-s-black2.png', 'tab-pro-s-white.png', '', '32', '64', '128', '4', '290.3', '198.8', '6.35', '694.3', '12', '2160 x 1440', 'Intel® Core™ m3-6Y30 processor', '4000', '68', '11', '36', '13', '16', '5MP', '5MP', 'Full HD (1920 x 1080)', 'Black Sapphire', 'White Pearl', '', 'https://shop.us.samsung.com/store?Action=DisplayPage&Env=BASE&Locale=en_US&SiteID=samsung&id=ThreePgCheckoutShoppingCartPage', 'https://shop.us.samsung.com/store?Action=DisplayPage&Env=BASE&Locale=en_US&SiteID=samsung&id=ThreePgCheckoutShoppingCartPage', 'http://fit.hcmup.edu.vn/~hienlth/COMP1303/', ''),
(5, 'Galaxy S', 15990000, 'Samsung Galaxy S7', 'S7', 'Màn hình 5.1 inch Quad HD - Super AMOLEDCamera sau Dual Pixel 12MP (f/1.7), OIS / Camera trước 5MP(f/1.7)Kháng nước và bụi chuẩn IP68', 's7-gold-platinum.png', 's7-1366x400.png', 's7-black-onyx.png', 's7-black-onyx2.png', 's7-gold-platinum.png', '32', '64', '200', '4', '143', '70', '8', '152', '5', '2560 x 1440 (Quad HD)', '2.3GHz, 1.6GHz (Quad Core)', '3000', '45', '15', '22', '11', '15', 'CMOS 5.0 MP', 'Dual Pixel 12.0 MP', 'UHD 4K (3840 x 2160)@30fps', 'Black Onyx', '', 'Gold Platinum', 'http://fptshop.com.vn/dien-thoai/samsung-galaxy-s7', 'http://cellphones.com.vn/galaxy-s7-32-gb-cty.html', 'https://www.thegioididong.com/dtdd/samsung-galaxy-s7', ''),
(6, 'Galaxy Note', 13990000, 'Samsung Galaxy Note Edge', 'Note Edge', 'Màn hình: Super AMOLED, 5.6"', 'note-edge-black-2.png', 'note-edge-1366x400.png', 'note-edge-black.png', 'note-edge-black-2.png', '', '32', '', '128', '3', '151', '82', '7.6', '174', '5.6', '2560 x 1440(Quad HD)', '2.7 GHz Quad-Core', '3000', '68', '12', '32', '9', '10', '3.7MP', 'CMOS 16.0 MP', 'UHD 4K (3840 x 2160)@30fps', 'Charcoal Black', 'Charcoal Black', '', 'http://fptshop.com.vn/dien-thoai/samsung-galaxy-note-edge', 'http://cellphones.com.vn/galaxy-s6-edge-32-gb-cty-cu.html', 'https://www.thegioididong.com/dtdd/samsung-galaxy-note-edge', ''),
(11, 'Galaxy S', 13490000, 'Samsung Galaxy S7 Active', 'S7 Active', 'Chống nước, Chống va đập, Cảm biến vân tay', 's7ac-greencamo-320x600-copy.png', 's7ac-1366x400.png', 's7ac-sandy-gold.png', 's7ac-titanium-grey.png', '', '32', '64', '200', '4', '189', '75', '9.9', '181', '5.1', '2560x1440', '2.15GHz x 2 + 1.6GHz x 2, Qualcomm 8996', '4000', '69', '18', '36', '11', '15', '5MP', '12MP', 'UHD 4K (3840 x 2160)@30fps', 'sandy gold', 'titanium grey', 'titanium grey', 'http://fptshop.com.vn/dien-thoai/samsung-galaxy-s7', 'http://cellphones.com.vn/galaxy-s7-32-gb-cty.html', 'https://www.thegioididong.com/dtdd/samsung-galaxy-s7', ''),
(12, 'Galaxy S', 11490000, 'Samsung Galaxy S6', 's6', 'Vẻ ngoài nổi bật, quyến rũ, kết hợp mượt mà giữa kính và kim loại', 's6-black-sapphire.png', 's6-1366x400.png', 's6-black.png', 's6-canh-ben.png', '', '32', '', '200', '3', '143', '70', '6.8', '138', '5.1', '2560x1440', 'Octa-core (Quad-core 1.5 GHz & Quad-core 2.1 GHz)', '2550', '57', '13', '12', '10', '12', 'CMOS 5.0 MP', 'CMOS 16MP', 'UHD 4K (3840 x 2160) @ 30fps', 'Black', '', '', 'http://fptshop.com.vn/dien-thoai/samsung-galaxy-s6', 'http://cellphones.com.vn/galaxy-s6-32-gb-cty-dm.html', 'https://www.thegioididong.com/dtdd/samsung-galaxy-s6', ''),
(13, 'Galaxy S', 13990000, 'Samsung Galaxy S6 edge', 'S6 Edge', 'Tương tác nhiều hơn với cạnh bên', 's6edge-cyan.png', 's6edge-1366x400.png', 's6edge-cyan.png', 's6edge-gold-platinum-copy.png', 's6edge-green.png', '32', '', '', '3', '142', '70', '7', '132', '5.1', '2560x1440', 'Octa-core (Quad-core 1.5 GHz & Quad-core 2.1 GHz)', '2600', '58', '13', '12', '10', '13', '5MP', '16MP', '2160p@30fps HDR', 'Cyan', 'gold platinum', 'gold platinum', 'http://fptshop.com.vn/dien-thoai/samsung-galaxy-s6-edge', 'http://cellphones.com.vn/galaxy-s6-edge-32-gb-cty-at.html', 'https://www.thegioididong.com/dtdd/samsung-galaxy-s6-edge', ''),
(14, 'Galaxy S', 14500000, 'Samsung Galaxy S6 Active', 'S6 Active', 'Pin cực trâu, xài cực lâu', 's6ac-white-copy.png', 's6ac-1366x400.png', 's6ac-blue-copy.png', 's6ac-grey-copy.png', 's6ac-white-copy.png', '32', '64', '128', '3', '157', '72', '9.9', '170', '5.1', '2560x1440', '2.1GHz, 1.5GHz; Octa-Core', '3500', '63', '12', '14', '12', '12', 'CMOS 5.0 MP', 'CMOS 16MP', 'UHD 4K (3840 x 2160)@30fps', 'blue smoke', 'titanium grey', 'white smoke', 'http://www.bestbuy.com/site/samsung-galaxy-s6-active-4g-with-32gb-memory-cell-phone-gray-at-t/8086015.p?id=1219687242551&skuId=8086015', 'https://www.att.com/cellphones/samsung/galaxy-s6-active.html?partner=LinkShare&siteId=jo_pTdthTuc-poqR6Lih3v5R3QBYRVe4lA#sku=sku7640492', 'https://www.att.com/cellphones/samsung/galaxy-s6-active.html?partner=LinkShare&siteId=jo_pTdthTuc-poqR6Lih3v5R3QBYRVe4lA#sku=sku7640492', ''),
(15, 'Galaxy Note', 12490000, 'Samsung Galaxy Note 3', 'Note 3', 'Màn hình lớn trải nghiệm mượt mà', 'note3-black.png', 'note3-1366x400.png', 'note3-black.png', 'note3-white.png', '', '32', '', '128', '3', '152', '79', '8.3', '170', '5.7', '1920 x 1080', '2.3GHz Quad-Core', '3200', '56', '16', '20', '12', '15', '2MP', '13MP', 'UHD 4K (3840 x 2160)@30fps', 'Black', 'White', 'White', 'http://fptshop.com.vn/dien-thoai/samsung-galaxy-note-5', 'http://cellphones.com.vn/galaxy-note-5-cty.html', 'https://www.thegioididong.com/dtdd/samsung-galaxy-note-3', ''),
(16, 'Galaxy Note', 12990000, 'samsung galaxy Note 4', 'note 4', 'Galaxy Note4 sở hữu màn hình 5.7 inch Super AMOLED QuadHD 2K cho trải nghiệm hình ảnh sống động.', 'note4-frost-white-copy.png', 'note4-1366x400.png', 'note4-charcoal-black-copy.png', 'note4-frost-white-copy.png', '', '32', '64', '128', '3', '153.5', '78.6', '8.5', '176', '5.7', 'Galaxy Note4 sở hữu ', '1.9GHz, 1.3GHz', '3220', '57', '12', '20', '11', '13', 'CMOS 3.7 MP', 'CMOS 16.0 MP', 'UHD 4K (3840 x 2160)@30fps', 'charcoal black', 'frost white', 'frost white', 'https://www.thegioididong.com/dtdd/samsung-galaxy-note-4', 'http://cellphones.com.vn/galaxy-note-4-cty.html', 'https://www.thegioididong.com/dtdd/samsung-galaxy-note-4', ''),
(17, 'Galaxy Tab', 13990000, 'samsung galaxy tab s2', 'tab s2', 'Thiết Kế Tinh Xảo. Hiệu Năng Hoàn Hảo. Hiển Thị Rực Rỡ. Chụp Ảnh Sắc Nét', 'tabs2-black.png', 'tabs2-1366x400.png', 'tabs2-black.png', 'tabs2-white.png', 'tabs2-gold.png', '32', '64', '128', '3', '237.3', ' 169.', '5.6', '392', '9.7', '  2048 x 1536 (QXGA)', '1.9GHz, 1.3GHz', '5870', '109', '12', '30', '7', '8', 'CMOS 2.1 MP', 'CMOS 8.0 MP', 'QHD (2560 x 1440)@30fps', 'black', 'white', 'gold', 'http://fptshop.com.vn/may-tinh-bang/samsung-tab-s-97-inch', 'http://vinhphatmobile.com/samsung-galaxy-tab-s2-9.7-t815.html', 'https://www.thegioididong.com/may-tinh-bang/samsung-galaxy-tab-s2-t815', ''),
(18, 'Galaxy Tab', 18990000, 'samsung galaxy tab view', 'tab view', 'Định nghĩa lại xu hướng giải trí mới, Cho bạn một trải nghiệm tuyệt vời.', 'tab-view-black.png', 'tab-view-1366x400.png', 'tab-view-white.png', 'tab-view-black.png', '', '32', '', '128', '2', '451.9', '275.8', '12', '2649', '18.4', '1920 x 1080', 'Octa-core 1.6Ghz, Samsung Exynos7580', '5700', '299', '8', '1', '8', '10', 'CMOS 2.1 MP', 'Không có.', 'Full HD (1920 x 1080)', 'white', 'black', 'black', 'http://www.beachcamera.com/shop/product/SAMSMT670NZKAXAR/Samsung-Galaxy-View-184-32GB-Wi-Fi-Tablet-Black?omid=200&ref=cj&utm_source=CJ&utm_medium=Affiliate&utm_content=1796839', 'http://www.frys.com/product/8654780?lk_pricespider', 'http://www.pcconnection.com/product/samsung-galaxy-view-exynos-7580-1.6ghz-2gb-32gb-bt-wc-18.4-fhd-mt-android-5.1-black/sm-t670nzkaxar/31910980?cac=Result', ''),
(19, 'Galaxy Tab', 6990000, 'samsung galaxy tab a', 'tab a', 'Thiết kế hiện đại, tạo tác hoàn hảo. Trải nghiệm hình ảnh bất tận.', 'tab-a-white.png', 'tab-a-1366x400.png', 'tab-a-smoky-blue.png', 'tab-a-white.png', 'tab-a-smoky-titanium.png', '16', '', '128', '2', '208.4', '137.9', '7.5', '320', '8.0', '1024 x 768 (XGA)', '4 Core,1024 x 768 (XGA)', '4200', '144', '13', '28', '11', '12', 'CMOS 2.0 MP', 'CMOS 5.0 MP', 'HD (1280 x 720)@30fps', 'smoky blue', 'smoky white', 'smoky white', 'https://bachlongmobile.com/samsung-galaxy-tab-a-80-inch.html', 'http://hoangnammobile.vn/Product/Details/525', 'https://www.adayroi.com/may-tinh-bang-samsung-galaxy-tab-a-8-0-sm-t355-wifi-3g-16gb-den-p-WQ1n1-f1-2?pi=MLnMw&w=nD9&mc=W43D', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL COMMENT 'PRIMARY',
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `phone`, `address`, `email`, `level`) VALUES
(51, 'phucsnef', '0c12278389532e91c601af4c8adef7fc', '00909', 'HCMC', 'minhphuc1511one@gmail.com', 1),
(52, 'ltnguyen151', '7215ee9c7d9dc229d2921a40e899ec5f', '09876663445', '123 Lê Văn Sĩ phường 18 quận 9', 'ltnguyen@gmail.com', 2),
(53, 'dwhite', '7bed973191e6b65755d14e2dec622efd', '01232616677', '351 Lạc Long Quân phường 5 quậ', 'awardstaraward@gmail.com', 2),
(54, 'admin', 'admin', '01232616677', 'I102  An Dương Vương', 'admin@admin.admin', 1),
(55, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', '906680492', 'HCMC', 'user@user.user', 2),
(56, 'Dien', '52ec538941f82416e7ce1caf283a765f', '01232616677', '90 huynh viet thanh', 'haidiennguyenle@gmail.com', 2),
(57, 'hienlth', '7215ee9c7d9dc229d2921a40e899ec5f', '0169526445', 'i102  An Dương Vương phường 5 ', 'hienlth@hcmup.edu.vn', 2),
(58, 'dennlhh', '7215ee9c7d9dc229d2921a40e899ec5f', '0123122214', 'i102 ', 'dddd@gmail.com', 2),
(59, 'test1', '202cb962ac59075b964b07152d234b70', '12345', '234', 'test01@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cthd`
--
ALTER TABLE `cthd`
  ADD PRIMARY KEY (`cthd_id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`glx_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cthd`
--
ALTER TABLE `cthd`
  MODIFY `cthd_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `glx_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'PRIMARY', AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
