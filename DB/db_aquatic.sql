-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2024 at 02:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aquatic`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_email` varchar(40) NOT NULL,
  `admin_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Sabin Paul', 'sabinpaul369@gmail.com', 'sabinpaul10'),
(2, 'Lijin Soli', 'lijinsoli123@gmail.com', 'lijinsoli7'),
(3, 'Adithyan Sabu', 'adithyansabu69@gmail.com', 'sabu9796'),
(8, 'Nehmal N', 'nehmal11@gmail.com', 'nehmal456'),
(9, 'Alen V', 'alengibbs123@gmail.com', 'alen1216'),
(11, 'Sabin', 'sabu24@gmail.com', 'wfadfadgf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL,
  `booking_date` varchar(100) NOT NULL,
  `booking_time` varchar(100) NOT NULL,
  `booking_status` int(11) NOT NULL,
  `booking_amount` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `booking_date`, `booking_time`, `booking_status`, `booking_amount`, `user_id`, `booking_address`) VALUES
(23, '2024-09-06', '2024-09-06 16:33:06', 4, '3000.00', 6, 'saybfiahdnUShdnoab'),
(24, '', '', 0, '', 6, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `cart_qty` int(11) NOT NULL DEFAULT 1,
  `product_id` int(11) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `cart_qty`, `product_id`, `cart_status`, `booking_id`) VALUES
(30, 3, 18, 1, 23),
(31, 1, 18, 0, 24);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `Cat_id` int(11) NOT NULL,
  `Category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`Cat_id`, `Category_name`) VALUES
(2, 'Kadal Meen'),
(3, 'Puzha Meen'),
(5, 'Kayal Meen'),
(12, 'shell fish');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `Complaint_id` int(11) NOT NULL,
  `complaint_title` varchar(100) NOT NULL,
  `complaint_content` varchar(500) NOT NULL,
  `complaint_reply` varchar(500) NOT NULL,
  `complaint_status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(2, 'Thiruvanathapuram'),
(3, 'Ernakulam'),
(4, 'Thrissur'),
(6, 'Palakad'),
(8, 'Kozhikode'),
(12, 'Kasargod'),
(15, 'Kollam'),
(16, 'Alapuzha'),
(17, 'Kottayam'),
(18, 'Idukki'),
(19, 'Pathanamthitta'),
(20, 'Wayanad'),
(21, 'Kannur'),
(23, 'Malapuram');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `Login_id` int(11) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`Login_id`, `Email_id`, `Password`) VALUES
(1, 'sabinpaul369@gmail.com', 'sabinpaul45'),
(2, 'lijinsoli07@gmail.com', 'lijinsoli7'),
(3, 'sabu69@gmail.com', 'sabu69');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_name`
--

CREATE TABLE `tbl_name` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_name`
--

INSERT INTO `tbl_name` (`id`, `Name`) VALUES
(1, 'Sabin'),
(2, 'sabu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(30) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `district_id`) VALUES
(12, 'Chavara', 15),
(13, 'Varkala', 2),
(14, 'Chuttipara', 6),
(15, 'Iritty', 21),
(16, 'Nilambur', 23),
(17, 'Petta', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_photo` varchar(500) NOT NULL,
  `product_details` varchar(100) NOT NULL,
  `Cat_id` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `product_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_photo`, `product_details`, `Cat_id`, `seller_id`, `product_price`) VALUES
(16, 'Crab', 'WIN_20240805_10_32_57_Pro.jpg', 'Fresh ', 2, 6, '50'),
(17, 'Lobster', 'WIN_20240805_10_33_01_Pro.jpg', 'Fresh ', 2, 6, '100'),
(18, 'Tuna', 'WIN_20240816_09_52_17_Pro.jpg', 'Fresh ', 2, 5, '1000'),
(20, 'Neymeen', 'WIN_20240724_15_03_47_Pro.jpg', 'Fresh ', 2, 5, '450'),
(21, 'Neymeen', 'WIN_20240724_15_03_47_Pro.jpg', 'Fresh ', 5, 7, '450'),
(22, 'Neymeen', 'WIN_20240724_15_03_47_Pro.jpg', 'Fresh ', 5, 7, '450');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_rating` int(11) NOT NULL,
  `user_review` varchar(300) NOT NULL,
  `review_datetime` varchar(100) NOT NULL,
  `seller_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `user_name`, `user_rating`, `user_review`, `review_datetime`, `seller_id`) VALUES
(1, 'David', 4, 'Good', '2024-09-01 22:05:12', 4),
(2, 'Sebin', 3, 'its good', '2024-09-03 17:03:11', 12),
(3, 'Sebin', 3, 'Good but it not ', '2024-09-03 18:39:52', 5),
(4, 'Lijin Soli', 4, 'Good Quality', '2024-09-04 13:42:55', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seller`
--

CREATE TABLE `tbl_seller` (
  `seller_id` int(11) NOT NULL,
  `seller_name` varchar(30) NOT NULL,
  `seller_email` varchar(30) NOT NULL,
  `seller_password` varchar(30) NOT NULL,
  `seller_photo` varchar(400) NOT NULL,
  `seller_proof` varchar(400) NOT NULL,
  `place_id` int(11) NOT NULL,
  `seller_subscribe` varchar(60) NOT NULL,
  `seller_amount` int(11) NOT NULL,
  `seller_contact` varchar(12) NOT NULL,
  `seller_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_seller`
--

INSERT INTO `tbl_seller` (`seller_id`, `seller_name`, `seller_email`, `seller_password`, `seller_photo`, `seller_proof`, `place_id`, `seller_subscribe`, `seller_amount`, `seller_contact`, `seller_status`) VALUES
(5, 'Sabin', 'sabinpaul36@gmail.com', 'sabinpaul10', 'IMG_9558.HEIC', 'IMG_9559.HEIC', 12, '', 0, '', 1),
(6, 'Lijin Soli', 'lijinsoli123@gmail.com', 'lijinsoli7', 'IMG_9558.HEIC', 'IMG_9574.HEIC', 13, '2024-12-01', 300, '', 0),
(7, 'Madhav', 'mad23@gmail.com', '12345', 'WIN_20240724_15_03_41_Pro.jpg', 'WIN_20240719_17_29_05_Pro.jpg', 13, '', 0, '9951423452', 1),
(8, 'Neha M', 'neha23@gmail.com', 'neha1234', 'WIN_20240724_15_03_47_Pro.jpg', 'WIN_20240724_15_03_41_Pro.jpg', 12, '', 0, '9951423452', 1),
(9, 'abhi', 'abhi@gmail.com', '12345', 'WIN_20240719_17_29_03_Pro.jpg', 'WIN_20240724_15_03_47_Pro.jpg', 17, '', 0, '7376493344', 0),
(10, 'shibu', 'shibu@gmail.com', '12345678', 'WIN_20240724_15_03_41_Pro.jpg', 'WIN_20240719_17_28_53_Pro.jpg', 15, '2024-12-06', 300, '54527452822', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sellercomplaint`
--

CREATE TABLE `tbl_sellercomplaint` (
  `Complaint_id` int(11) NOT NULL,
  `SI_NO` int(11) NOT NULL,
  `Content` varchar(100) NOT NULL,
  `Reply` varchar(100) NOT NULL,
  `Seller` varchar(30) NOT NULL,
  `Action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stock`
--

CREATE TABLE `tbl_stock` (
  `stock_id` int(11) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `stock_date` varchar(30) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_stock`
--

INSERT INTO `tbl_stock` (`stock_id`, `stock_quantity`, `stock_date`, `product_id`) VALUES
(10, 30, '2024-08-05', 9),
(11, 30, '2024-08-06', 10),
(12, 38, '2024-08-06', 11),
(13, 38, '2024-08-06', 8),
(14, 30, '2024-08-06', 18),
(15, 60, '2024-08-06', 11),
(16, 40, '2024-09-03', 19),
(17, 23, '2024-09-03', 20),
(18, 5, '2024-09-04', 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe`
--

CREATE TABLE `tbl_subscribe` (
  `subscribe_id` int(11) NOT NULL,
  `subscribe_amount` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `subscribe_date` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subscribe`
--

INSERT INTO `tbl_subscribe` (`subscribe_id`, `subscribe_amount`, `seller_id`, `subscribe_date`) VALUES
(1, 300, 10, '2024-09-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_photo` varchar(100) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `place_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_photo`, `user_address`, `place_id`) VALUES
(1, 'Sabin', 'sabinpaul369@gmail.com', 'sabinpaul45', '', 'Rose Dale Vaddy', 12),
(2, 'Lijin Soli', 'lijinsoli123@gmail.com', 'lijinsoli69', '', 'Soli Nivas vaddy', 0),
(3, 'Lijin Soli', 'lijinsoli123@gmail.com', 'q4235rwe', '20231125_193820.jpg', 'wtwetwrt', 0),
(4, 'Lijin Soli', 'lijinsoli123@gmail.com', '34235', '20231125_193839.jpg', 'sdfgdsgsd', 0),
(5, 'Sabin', 'adithyansabu69@gmail.com', 'sabu69', 'IMG_9558.HEIC', 'sabinpaul', 12),
(6, 'Ajith', 'ajith@gmail.com', 'ajith1234', 'WIN_20240805_10_32_57_Pro.jpg', 'saybfiahdnUShdnoab', 13),
(7, 'aysha', 'aysha@gmil.com', 'nehmal123', 'WIN_20240724_15_03_41_Pro.jpg', 'new street', 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usercomplaint`
--

CREATE TABLE `tbl_usercomplaint` (
  `Complaint_id` int(11) NOT NULL,
  `Content` varchar(100) NOT NULL,
  `Reply` varchar(100) NOT NULL,
  `User` varchar(30) NOT NULL,
  `Action` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`Cat_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`Complaint_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`Login_id`);

--
-- Indexes for table `tbl_name`
--
ALTER TABLE `tbl_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `tbl_seller`
--
ALTER TABLE `tbl_seller`
  ADD PRIMARY KEY (`seller_id`);

--
-- Indexes for table `tbl_sellercomplaint`
--
ALTER TABLE `tbl_sellercomplaint`
  ADD PRIMARY KEY (`Complaint_id`);

--
-- Indexes for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  ADD PRIMARY KEY (`subscribe_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_usercomplaint`
--
ALTER TABLE `tbl_usercomplaint`
  ADD PRIMARY KEY (`Complaint_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `Cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `Complaint_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `Login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_name`
--
ALTER TABLE `tbl_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_seller`
--
ALTER TABLE `tbl_seller`
  MODIFY `seller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_sellercomplaint`
--
ALTER TABLE `tbl_sellercomplaint`
  MODIFY `Complaint_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_stock`
--
ALTER TABLE `tbl_stock`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  MODIFY `subscribe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_usercomplaint`
--
ALTER TABLE `tbl_usercomplaint`
  MODIFY `Complaint_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
