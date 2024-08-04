-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 05:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_country` text NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(2, 'sweatha', 'sweatham.19msc@kongu.edu@kongu.edu', '123', 'admin.jpg', '9244336638', 'India', 'web Updater', 'I\'m Student from kongu engineering college.Budding Web developer');

-- --------------------------------------------------------

--
-- Table structure for table `bundle_product_relation`
--

CREATE TABLE `bundle_product_relation` (
  `rel_id` int(10) NOT NULL,
  `rel_title` varchar(255) NOT NULL,
  `product_id` int(10) NOT NULL,
  `bundle_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `productname` varchar(20) NOT NULL,
  `cat_id` int(20) NOT NULL,
  `p_cat_id` int(20) NOT NULL,
  `product_psp_price` int(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(20) NOT NULL,
  `product_img1` varchar(255) NOT NULL,
  `session_id` int(20) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `customer_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `product_id`, `productname`, `cat_id`, `p_cat_id`, `product_psp_price`, `quantity`, `total`, `product_img1`, `session_id`, `customer_id`, `customer_name`) VALUES
(72, 0, '', 0, 0, 0, 1, 0, '', 2, 0, ''),
(73, 25, 'A Mini Skin care Kit', 16, 28, 999, 2, 1998, 'p1.jpg', 2, 6, 'sai@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_top` text NOT NULL,
  `cat_image` text NOT NULL,
  `cat_meta_description` text NOT NULL,
  `cat_meta_keywords` text NOT NULL,
  `delete_tab` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_top`, `cat_image`, `cat_meta_description`, `cat_meta_keywords`, `delete_tab`) VALUES
(16, 'OIL PAINTING', 'yes', 'c1.jpg', 'Good for skin', 'Skincare', 0),
(17, 'CHARCOAL PAINTING', 'yes', 'c2.jpg', 'Diet and Fitness care', 'Diet and Fitness', 0),
(18, 'WATERCOLOR PAINTING', 'yes', 'c3.jpg', ' Energy Booster Tisane', ' Energy Booster', 0),
(20, 'ABSTRACT PAINTING', 'yes', 'c4.png', 'It helps to maintain sugar level', 'Tisanes', 1),
(21, 'CONTEMPLARY PAINTING', 'yes', 'c4.png', 'Eye Sight', 'Eye Sight', 0),


-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(10) NOT NULL,
  `contact_email` text NOT NULL,
  `contact_heading` text NOT NULL,
  `contact_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_confirm_code` text NOT NULL,
  `delete_tab` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`, `customer_confirm_code`, `delete_tab`) VALUES
(6, 'sweatha', 'swe@gmail.com', '123', 'India', 'coimbatore', '6382896498', 'Raja Street', '556aabaa-cc7e-4ca7-9ee2-29cb38251a5a.jpg', '', '316485', 0),
(8, 'sweatha', 'swe', '123', '642104', 'cbe', '9842863232', '3A street', 'Webp.net-resizeimage (12).jpg', '', '774928', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `order_status` text NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `order_date`, `order_status`) VALUES
(40, 6, 100, 2, 1, '2021-11-08 14:18:18', 'pending'),
(41, 6, 100, 2, 3, '2021-11-08 14:51:52', 'pending'),
(42, 6, 100, 2, 3, '2021-11-08 20:46:20', 'pending'),
(43, 6, 100, 2, 3, '2021-11-08 22:39:24', 'pending'),
(44, 6, 100, 2, 1, '2021-11-10 01:12:38', 'pending'),
(45, 6, 100, 2, 1, '2021-11-10 13:15:16', 'pending'),
(46, 6, 100, 2, 1, '2021-11-10 13:16:09', 'pending'),
(47, 6, 100, 2, 1, '2021-11-10 13:16:48', 'pending'),
(48, 6, 100, 2, 2, '2021-11-11 07:11:55', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(10) NOT NULL,
  `manufacturer_title` text NOT NULL,
  `manufacturer_top` text NOT NULL,
  `manufacturer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`manufacturer_id`, `manufacturer_title`, `manufacturer_top`, `manufacturer_image`) VALUES
(6, 'Ace  Teas', 'yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(10) NOT NULL,
  `order_status` text NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `order_status`) VALUES
(41, 6, 2, 25, 1, 'pending'),
(42, 6, 2, 25, 3, 'pending'),
(44, 6, 2, 25, 3, 'pending'),
(45, 6, 2, 25, 1, 'pending'),
(46, 6, 2, 25, 1, 'pending'),
(47, 6, 2, 25, 1, 'pending'),
(48, 6, 2, 25, 1, 'pending'),
(49, 6, 2, 25, 2, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `p_cat_id` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `manufacturer_id` int(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_url` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_psp_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_features` text NOT NULL,
  `product_video` text NOT NULL,
  `product_keywords` text NOT NULL,
  `product_label` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `delete_tab` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `manufacturer_id`, `date`, `product_title`, `product_url`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_psp_price`, `product_desc`, `product_features`, `product_video`, `product_keywords`, `product_label`, `status`, `delete_tab`) VALUES
(25, 28, 16, 6, '2021-10-26 08:38:05', 'A Mini Skin care Kit', 'teas', 'p1.jpg', 'p1.jpg', 'p1.jpg', 677, 999, '\r\n\r\n\r\nA gift box with an assortment of our finest tisanes , this complete box is an impressive gift, for a wedding, that special anniversary, housewarming or landmark birthday.\r\n', '\r\n\r\n\r\nOrganic hand crafted botanicals and herbs are carefully dried and combined for a restoring and gently detoxing tisane. Rich in minerals, vitamin C and anthocyanin necessary for skin repair and radiance while balancing the blood and Skin..\r\n', '\r\n\r\n\r\n\r\n', 'skin care', 'teas', 'product', 0),
(26, 28, 16, 6, '2021-10-26 08:49:36', 'A Pack of all Seasons', 'Tisane', 'p2.jpg', 'p2.jpg', 'p2.jpg', 1499, 1689, '\r\n\r\nA gift box with an assortment of our finest tisanes , this complete box is an impressive gift, for a wedding, that special anniversary, housewarming or landmark birthday.', '\r\n\r\nSkin’s herbal blend has the ability to fight free radicals, help soothe damaged skin while also possessing anti-viral, anti-inflammatory, anti-toxic, anti-bacterial and antiseptic properties.\r\nSkin encourages the growth of new skin cells due to its collagen synthesis promotion which reduces the appearance of fine lines and wrinkles, drawing out impurities and hydrating the skin.', '\r\n\r\n', 'seasons', 'skin', 'product', 0),
(28, 31, 18, 6, '2021-11-01 01:31:20', 'Black tea for skin', 'ww.google.com', 'p1.jpg', 'p1.jpg', 'p1.jpg', 455, 677, '\r\n\r\n\r\n\r\nA gift box with an assortment of our finest tisanes ,Organic hand crafted botanicals and herbs are carefully dried and combined for a restoring and gently detoxing tisane. Rich in minerals, vitamin C and anthocyanin necessary for Energy.\r\n\r\n', '\r\n\r\n\r\n\r\nA gift box with an assortment of our finest tisanes ,Organic hand crafted botanicals and herbs are carefully dried and combined for a restoring and gently detoxing tisane. Rich in minerals, vitamin C and anthocyanin necessary for Energy.\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n', 'Energy booster', 'Energy Booster', 'product', 0),
(29, 31, 18, 6, '2021-10-31 14:44:45', 'A Full kit for Energy Booster', 'www.google.com', 'p2.jpg', 'p2.jpg', 'p2.jpg', 1599, 1999, '\r\n\r\nA gift box with an assortment of our finest tisanes ,Organic hand crafted botanicals and herbs are carefully dried and combined for a restoring and gently detoxing tisane. Rich in minerals, vitamin C and anthocyanin necessary for Energy.\r\n', '\r\n\r\n', '\r\n\r\n', 'full kit for energy booster', 'full kit for energy booster', 'product', 0),
(30, 29, 16, 6, '2021-11-01 01:07:35', 'jasmine Tea', 'www.google.com', 'p3.jpg', 'p3.jpg', 'p3.jpg', 788, 999, '\r\n\r\nSkin’s herbal blend has the ability to fight free radicals, help soothe damaged skin while also possessing anti-viral, anti-inflammatory, anti-toxic, anti-bacterial and antiseptic properties.\r\nSkin encourages the growth of new skin cells due to its collagen synthesis promotion which reduces the appearance of fine lines and wrinkles, drawing out impurities and hydrating the skin.', '\r\n\r\n', '\r\n\r\n', 'Jasmine Tea', 'Jasmin Tea', 'product', 0),
(33, 28, 16, 6, '2021-11-01 03:13:47', 'Rose Tisane', 'www.google.com', 'p3.jpg', 'p3.jpg', 'p3.jpg', 677, 899, '\r\nskin\r\n', '\r\n\r\nskin', '\r\n\r\n', 'skin', 'rose tea', 'product', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_top` text NOT NULL,
  `p_cat_image` text NOT NULL,
  `delete_tab` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `cat_title`, `p_cat_title`, `p_cat_top`, `p_cat_image`, `delete_tab`) VALUES
(28, 'Tisane for Skin care', 'Black tea for skin', 'yes', 'pc1.jpg', 0),
(29, 'Tisane for Skin care', 'Jasmine Tea', 'yes', 'pc6.jpg', 0),
(31, 'Tisane for Energy Booster', 'Booster Tisane', '', 'pc5.jpg', 0),
(33, 'Tisane for Energy Booster', 'Green tea', 'yes', 'pc3.jpg', 0),
(34, 'Tisane for Diet and Fitness', 'Dandelion Tea', 'yes', 'pc4.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `razorpay`
--

CREATE TABLE `razorpay` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `pay_id` varchar(255) NOT NULL,
  `pay_status` varchar(255) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `mail_id` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `term_id` int(10) NOT NULL,
  `term_title` varchar(100) NOT NULL,
  `term_link` varchar(100) NOT NULL,
  `term_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`term_id`, `term_title`, `term_link`, `term_desc`) VALUES
(1, 'Rules And Regulations', 'rules', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance.&nbsp;</p>'),
(2, 'Refund Policy', 'link2', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on'),
(3, 'Pricing and Promotions Policy', 'link3', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).Why do we use it?It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on');

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `coupon_id` int(10) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `coupon_title` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `coupon_price` int(100) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_limit` int(100) NOT NULL,
  `coupon_used` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`coupon_id`, `product_id`, `coupon_title`, `product_title`, `coupon_price`, `coupon_code`, `coupon_limit`, `coupon_used`) VALUES
(4, '25', 'newone', 'A Mini Skin care Kit', 234, 'sweatha', 1, 0),
(5, '26', 'new', 'A Pack of all Seasons', 345, '2222', 10, 0),
(6, '25', 'skin care', 'A Mini Skin care Kit', 34, 'iugwidw', 1, 0),
(7, '26', 'wppmwx', 'A Pack of all Seasons', 344, 'wcdwdwcd', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `delete_tab` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `customer_id`, `product_id`, `delete_tab`) VALUES
(3, 0, 0, 0),
(22, 2, 18, 0),
(23, 2, 19, 0),
(26, 6, 28, 0),
(27, 6, 26, 0),
(28, 6, 30, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bundle_product_relation`
--
ALTER TABLE `bundle_product_relation`
  ADD PRIMARY KEY (`rel_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `razorpay`
--
ALTER TABLE `razorpay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bundle_product_relation`
--
ALTER TABLE `bundle_product_relation`
  MODIFY `rel_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `razorpay`
--
ALTER TABLE `razorpay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `term_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `coupon_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
