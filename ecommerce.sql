-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2019 at 01:56 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `parent_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `parent_id`, `status`) VALUES
(1, 'Electronics', NULL, 0, 1),
(2, 'Smartphone', NULL, 1, 1),
(3, 'iPhone', NULL, 2, 1),
(4, 'TV', '1569672268_tv-shop-by-55-65.jpg', 1, 1),
(5, 'Man\'s Fashion', '', 0, 1),
(6, 'Women\'s Fashion', '', 0, 1),
(7, 'T-Shirt', '', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sku` varchar(30) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `brand_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `spacial_price` decimal(10,2) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Inactive',
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sku`, `name`, `description`, `brand_id`, `quantity`, `price`, `spacial_price`, `status`, `image`, `created_at`, `updated_at`) VALUES
(2, 2, 'SM-G950U', 'Samsung Galaxy S8 SM-G950U 64GB Smartphone (Unlocked, Midnight Black)', '<div><b>Key Features</b></div><ul><li>GSM + CDMA / 4G LTE Capable</li><li>Compatible with All Major US Carriers</li><li>North American Variant</li><li>f/1.7 12MP Rear + 8MP Front Cameras</li></ul><div>Put powerful performance in your pocket with the&nbsp;Samsung Galaxy S8 SM-G950U 64GB Smartphone&nbsp;in Midnight Black. This smartphone incorporates 64GB of storage and is powered by a Qualcomm Snapdragon 835 CPU running four cores at 1.9 GHz and four cores at 2.35 GHz. Thanks to its integrated microSD expansion slot, users have the option</div>', NULL, 110, '40000.00', '0.00', 1, '1570189086_1496748111_1337323.jpg', '2019-10-04 11:38:06', '2019-10-18 10:11:51'),
(3, 2, 'k11', 'LG K11 Smartphone', '<div><div><b>Processor</b></div><div><a href=\"https://www.notebookcheck.net/Mediatek-MT6750-SoC-Benchmarks-and-Specs.197138.0.html\" target=\"\" rel=\"\">Mediatek MT6750</a></div></div><div><div><b>Graphics adapter</b></div><div><a href=\"https://www.notebookcheck.net/ARM-Mali-T860-MP2-Benchmarks-and-Specs.163318.0.html\" target=\"\" rel=\"\">ARM Mali-T860 MP2</a></div></div><div><div><b>Memory</b></div><div>2048&nbsp;MB&nbsp;&nbsp;<div><div></div><div></div></div></div></div><div><div>Display</div><div>5.3 inch 16:9, 1280 x 720 pixel 277 PPI, Capacitive touchscreen, IPS, glossy: yes</div></div><div><div>Storage</div><div>16 GB eMMC Flash, 16&nbsp;GB&nbsp;&nbsp;<div><div></div><div></div></div>, 10 GB free</div></div><div><div><div>Connections</div><div>1 USB 2.0, Audio Connections: 3.5 mm jack, Card Reader: Up to 2 TB microSD cards, 1 Fingerprint Reader, NFC, Brightness Sensor, Sensors: Accelerometer, Proximity sensor, Compass</div></div><div><div>Networking</div><div>802.11 b/g/n (b/g/n = Wi-Fi 4), Bluetooth 4.2, GSM: 850, 900, 1,800, 1,900 MHz. UMTS: B1, B2, B5, B8. LTE Cat. 4: B1, B3, B6, B8, B20, B38., LTE, GPS</div></div><div><div>Size</div><div>height x width x depth (in mm): 8.68 x 148.7 x 75.3 ( = 0.34 x 5.85 x 2.96 in)</div></div><div><div>Battery</div><div>3000 mAh Lithium-Ion, Talk time 3G (according to manufacturer): 30&nbsp;h, Standby 2G (according to manufacturer): 550&nbsp;h</div></div><div><div>Operating System</div><div>Android 7.1 Nougat</div></div><div><div>Camera</div><div>Primary Camera: 13 MPix<br>Secondary Camera: 8 MPix</div></div><div><div>Additional features</div><div>Speakers: Two speakers, Keyboard: Virtual keyboard, Keyboard Light: yes, USB power supply, USB Type-A to Micro USB cable, SIM tool, 24 Months Warranty, SAR values: Head â€“ 0.812 W/kg, Body â€“ 1.585 W/kg, fanless</div></div></div><div><div>Weight</div><div>162 g ( = 5.71 oz / 0.36 pounds), Power Supply: 50 g ( = 1.76 oz / 0.11 pounds)</div></div>', NULL, 100, '45000.00', '0.00', 1, '1570189221_csm_large09_3ca56d6a40.jpg', '2019-10-04 11:40:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `support_phone` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `facebook_id` text NOT NULL,
  `google_id` text NOT NULL,
  `skype_id` text NOT NULL,
  `tweeter_id` text NOT NULL,
  `youtube_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`address`, `email`, `phone`, `support_phone`, `logo`, `facebook_id`, `google_id`, `skype_id`, `tweeter_id`, `youtube_id`) VALUES
('100/20, Gulsha C/A, Dhaka-1207, Bangladesh', 'support@eCommerce.com', '+8801922334455', '+8801722334455', '', 'https://www.facebook.com/samsungelectronics', '#', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `password` varchar(191) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_type` enum('admin','manager','staff') NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=inactive',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `phone`, `password`, `address`, `user_type`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Md. Abdul Kaiyum', 'kaiyum@gmail.com', '01987654321', 'e10adc3949ba59abbe56e057f20f883e', 'New Eskaton, Dhaka, Bangladesh', 'manager', 0, '2019-09-21 11:24:31', '2019-09-27 12:05:14'),
(5, 'Administrator', 'admin@ecom.com', '01923834495', 'e10adc3949ba59abbe56e057f20f883e', ' New Eskaton, Dhaka, Bangladesh ', 'admin', 0, '2019-09-21 11:26:02', '2019-09-28 10:03:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
