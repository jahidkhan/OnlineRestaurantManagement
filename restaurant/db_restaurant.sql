-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2015 at 06:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`admin_id` int(2) NOT NULL,
  `admin_full_name` varchar(50) NOT NULL,
  `admin_email_address` varchar(100) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `access_lavel` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_full_name`, `admin_email_address`, `admin_password`, `access_lavel`) VALUES
(3, 'Salah Uddin Ahmed', 'smoni623@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0),
(5, 'miron', 'miron@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(6, 'zahid', 'zahid1132@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE IF NOT EXISTS `tbl_booking` (
`booking_id` int(5) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `mobile_no` int(4) NOT NULL,
  `email_address` varchar(30) NOT NULL,
  `time` varchar(5) NOT NULL,
  `date` date NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `person_no` int(4) NOT NULL,
  `address` varchar(100) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `booking_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `full_name`, `mobile_no`, `email_address`, `time`, `date`, `company_name`, `person_no`, `address`, `create_time`, `booking_status`) VALUES
(2, 'dddddd', 1727867556, 's@g.com', '0000-', '2012-02-15', 'ddddd', 12, 'panthon', '2015-04-11 17:55:23', 0),
(3, 'dddddd', 1727867556, 's@g.com', '0000-', '2012-02-15', 'ddddd', 12, 'panthon', '2015-04-11 17:56:42', 0),
(4, 'dddddd', 1727867556, 's@g.com', '0000-', '2012-02-15', 'ddddd', 12, 'panthon', '2015-04-11 17:57:12', 0),
(5, 'dddddd', 1727867556, 's@g.com', '0000-', '2012-02-15', 'ddddd', 12, 'panthon', '2015-04-11 17:58:36', 0),
(6, 'dddddd', 1727867556, 's@g.com', '0000-', '2012-02-15', 'ddddd', 12, 'panthon', '2015-04-11 18:00:51', 0),
(7, 'dddddd', 1727867556, 's@g.com', '0000-', '2012-02-15', 'ddddd', 12, 'panthon', '2015-04-11 18:38:22', 0),
(8, 'dddddd', 1727867556, 's@g.com', '0000-', '2012-02-15', 'ddddd', 12, 'panthon', '2015-04-11 18:38:49', 0),
(9, 'Minhaz Uddin', 1710967131, 'masumcse', '0000-', '2015-12-04', 'Airtel BD', 5, '43/R/1 Indra Road, Panthopath, Dhaka-1212.', '2015-04-11 18:42:01', 0),
(10, 'Minhaz Uddin', 1710967131, 'masumcse', '20:00', '2015-12-04', 'Airtel BD', 5, '43/R/1 Indra Road, Panthopath, Dhaka-1212.', '2015-04-11 19:41:33', 0),
(11, 'Minhaz Uddin', 1727867556, 'masumcse', '12:05', '2015-04-14', 'Airtel BD', 5, '43/R/1 Indra Road, Panthopath, Dhaka-1212.', '2015-04-11 19:42:31', 0),
(12, '', 0, '', '', '0000-00-00', '', 500, '', '2015-04-28 20:10:06', 0),
(13, 'Minhaz Uddin', 1727867556, 'masumcse', '10:12', '0005-09-12', 'dds', 1000, '43/R/1 Indra Road, Panthopath, Dhaka-1212.', '2015-04-28 20:11:16', 0),
(14, '', 0, 'masumcse1052@gm', '', '0000-00-00', '', 9, '', '2015-04-28 20:13:53', 0),
(15, '', 0, 'masumcse1052@gmail.com', '', '0000-00-00', '', 3000, '43/R/1 Indra Road, Panthopath, Dhaka-1212.', '2015-04-28 20:15:06', 0),
(16, '', 0, '', '', '0000-00-00', '', 0, '', '2015-05-04 17:02:00', 0),
(17, 'rubel', 1727867556, 'rubel@gmail.com', '22:10', '2015-01-01', 'Airtel BD', 20, '43/R/1 Indra Road, Panthopath, Dhaka-1212.', '2015-05-06 14:57:29', 0),
(18, 'miron', 1923823988, 'miron@yahoo.com', '17:50', '2015-05-25', 'aa', 12, 'uttara, dhaka', '2015-05-25 17:55:18', 0),
(19, 'joyonto', 0, 'asdasd@dsfdsf.com', '13:59', '2015-05-26', '', 24, 'uttara, dhaka', '2015-05-25 18:52:30', 0),
(20, 'adasd', 1923823988, 'asdasd@dsfdsf.com', '11:59', '2015-05-26', '', 12, 'uttara, dhaka', '2015-05-25 18:56:22', 0),
(21, 'adasd', 1923823988, 'asdasd@dsfdsf.com', '11:59', '2015-05-26', '', 5, 'uttara, dhaka', '2015-05-25 18:57:58', 0),
(22, 'miron', 1923823988, 'miron@yahoo.com', '00:59', '2015-05-12', '', 12, 'uttara, dhaka', '2015-05-25 19:18:57', 0),
(23, 'adasd', 1923823988, 'miron@yahoo.com', '12:59', '2015-05-27', '', 12, 'uttara, dhaka', '2015-05-25 19:41:25', 0),
(26, 'miron', 1923823988, 'miron@yahoo.com', '12:59', '2015-05-27', '', 160, 'uttara, dhaka', '2015-05-25 19:45:10', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE IF NOT EXISTS `tbl_brand` (
`brand_id` int(5) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `brand_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_description`, `publication_status`) VALUES
(31, 'SALAD', '', 1),
(32, 'FISH', '', 1),
(33, 'CHICKEN', '', 1),
(34, 'TANDOORI SPECIAL', '', 1),
(35, 'BEEF', '', 1),
(36, 'DUCK', '', 1),
(37, 'BIRYANI', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
`customer_id` int(7) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `city` varchar(50) NOT NULL,
  `activation_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `first_name`, `last_name`, `email_address`, `password`, `company_name`, `address`, `mobile`, `gender`, `city`, `activation_status`) VALUES
(71, 'Joyonto', 'Sarker', 'joyonto@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'dhaka', '01739585232', 'male', 'dhaka', 1),
(72, '', '', 'dd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '0', '', 1),
(73, '', '', 'ggg@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '0', '', 1),
(74, 'Joyonto', 'sarker', 'joyonto@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '0', '', 1),
(75, 'khan', 'jahid', 'jahid@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'dds', 'dhaka', '01727867556', 'male', 'dhaka', 1),
(76, 'Salah Uddin', 'Ahmed', 'smoni623@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'dds', 'hnjsx', '01245', 'male', 'hgsudgx', 1),
(77, 'khan', 'jahid', 'jahid@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 'panthon', '01727867556', 'male', 'dhaka', 1),
(78, 'moni', 'khan', 'a@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'dfghh', 'sukrabad', '01727867556', 'male', 'dhaka', 1),
(79, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '0', '', 1),
(80, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '0', '', 1),
(81, 'khan', 'jahid', 'as@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Airtel BD', '43/R/1 Indra Road, Panthopath, Dhaka-1212.', '01727867556', 'male', 'dhaka', 0),
(82, 'sarkar', 'joyento', 'e@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Airtel BD', '43/R/1 Indra Road, Panthopath, Dhaka-1212.', '01727867556', 'male', 'dhaka', 0),
(83, '', '', 'b@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '0', '', 0),
(84, '', '', 'jahid@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '', '0', '', 0),
(85, 'rubel', 'khan', 'rubel@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Airtel BD', '43/R/1 Indra Road, Panthopath, Dhaka-1212.', '01727867556', 'male', 'dhaka', 0),
(86, 'rubel', 'khan', 'rubel@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Airtel BD', '43/R/1 Indra Road, Panthopath, Dhaka-1212.', '01727867556', 'male', 'dhaka', 0),
(87, 'miron', 'jahan', 'miron@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '', '', '', 1),
(88, 'romio', 'kumar', 'miron@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '', '01281212212', 'male', 'dhaka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
`order_id` int(7) NOT NULL,
  `customer_id` int(7) NOT NULL,
  `shipping_id` int(7) NOT NULL,
  `payment_id` int(7) NOT NULL,
  `order_total` float(10,2) NOT NULL,
  `order_status` varchar(15) NOT NULL DEFAULT 'Pending',
  `order_comments` text NOT NULL,
  `order_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `order_comments`, `order_date_time`) VALUES
(23, 71, 16, 24, 0.00, 'Pending', '', '2015-03-03 23:00:11'),
(22, 71, 16, 23, 0.00, 'Pending', '', '2015-03-03 22:59:57'),
(21, 71, 16, 22, 0.00, 'Pending', '', '2015-03-03 22:59:52'),
(20, 71, 16, 21, 0.00, 'Pending', '', '2015-03-03 22:58:49'),
(24, 75, 18, 25, 0.00, 'Pending', '', '2015-04-17 04:36:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE IF NOT EXISTS `tbl_order_details` (
`order_details_id` int(11) NOT NULL,
  `order_id` int(7) NOT NULL,
  `product_id` int(4) NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_sales_quantity` int(3) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_price`, `product_name`, `product_sales_quantity`) VALUES
(32, 23, 30, 41400.00, 'Samsung GALAXY Note 3 Neo', 2),
(31, 22, 27, 53500.00, 'Nokia Lumia 1520', 2),
(30, 21, 27, 53500.00, 'Nokia Lumia 1520', 2),
(29, 20, 30, 41400.00, 'Samsung GALAXY Note 3 Neo', 1),
(28, 20, 27, 53500.00, 'Nokia Lumia 1520', 1),
(33, 24, 44, 210.00, 'Garden Green Salad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
`payment_id` int(7) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `payment_status` varchar(15) NOT NULL DEFAULT 'Pending',
  `payment_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_type`, `payment_status`, `payment_date_time`) VALUES
(24, 'cash_on_delivery', 'Pending', '2015-03-03 23:00:11'),
(23, 'cash_on_delivery', 'Pending', '2015-03-03 22:59:57'),
(22, 'paypal', 'Pending', '2015-03-03 22:59:52'),
(21, 'cash_on_delivery', 'Pending', '2015-03-03 22:58:49'),
(25, 'cash_on_delivery', 'Pending', '2015-04-17 04:36:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
`product_id` int(5) NOT NULL,
  `brand_id` int(5) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_description` text NOT NULL,
  `old_price` varchar(10) NOT NULL,
  `product_price` varchar(10) NOT NULL,
  `product_quantity` int(3) NOT NULL,
  `featured_product` tinyint(1) NOT NULL DEFAULT '0',
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_image` varchar(256) NOT NULL,
  `publication_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `brand_id`, `product_name`, `product_description`, `old_price`, `product_price`, `product_quantity`, `featured_product`, `created_date_time`, `product_image`, `publication_status`) VALUES
(43, 30, 'BOOKING', '                                                            ', '', '100', 100, 0, '2015-04-07 18:47:55', './admin_doc/product_images/TABLE.jpg', 1),
(44, 31, 'Garden Green Salad', '                                                                                                                                                                                    ', '300', '210', 20, 1, '2015-05-05 18:26:33', './admin_doc/product_images/36_(1).jpg', 1),
(45, 33, 'Balti', '<em >An aromatic Chicken dish cooked in Kashmiri curry a 20yr old recipe. The beauty of Balti is its simplicity.</em>', '', '450', 25, 1, '2015-05-04 13:41:21', './admin_doc/product_images/1021.JPG', 1),
(46, 33, 'Bhuna Murgh', '<em >Chicken cooked dry with special onion-tomato Masala.</em>', '', '475', 25, 1, '2015-05-04 13:42:57', './admin_doc/product_images/99.JPG', 1),
(47, 0, 'Deshi Fish Curry', '<em >Fish cooked in Bangladeshi way. The pride of Heritage</em>', '', '590', 25, 1, '2015-05-04 13:44:06', './admin_doc/product_images/52.jpg', 1),
(48, 32, 'Elish Macher Shorshe Bata', '<em >Fresh Elish fish cooked in mustard sauce with a touch of Bangladeshi Style.</em>', '', '990', 25, 1, '2015-05-04 13:45:05', './admin_doc/product_images/53.jpg', 1),
(49, 31, 'Sonar Bangla Salad', '<span >Garden fresh vegetable tossed and served with special heritage mustard dressing.</span>', '', '210', 25, 1, '2015-05-04 13:45:56', './admin_doc/product_images/12.jpg', 1),
(50, 34, 'Mutton Sheekh Kabab', '<em >Mutton Minced kebab stuffed with egg delicately flavored and cooked on&nbsp; skewers in Tandoor.</em>', '', '450', 25, 1, '2015-05-05 18:29:17', './admin_doc/product_images/111.jpg', 1),
(52, 37, 'Chicken Biryani', '                                <span>Rice cooked with curry cut chicken on Dum. Served with Raita.</span>                            ', '', '475', 25, 1, '2015-05-05 18:35:37', './admin_doc/product_images/20.jpg', 1),
(53, 37, 'Mutton Biryani', '<em >The traditional art of cooking Basmati rice &amp; raw meat together in Dum. Served with Raita.</em>', '', '525', 25, 1, '2015-05-05 18:33:19', './admin_doc/product_images/116.jpg', 1),
(54, 34, 'Tandoori Mixed Grill', '<span >A very special blend of exotic kebabs of Chicken, lamb, Cottage cheese grilled in Tandoor</span>', '', '1350', 25, 1, '2015-05-05 18:34:28', './admin_doc/product_images/191.jpg', 1),
(55, 32, 'Deshi Fish Curry', '<em >Fish cooked in Bangladeshi way. The pride of Heritage</em>', '', '590', 25, 1, '2015-05-05 18:37:02', './admin_doc/product_images/521.jpg', 1),
(57, 36, 'Duck Roast', '<span >The traditional all time favorite-cooked in our in house heritage spices</span>', '', '700', 25, 1, '2015-05-05 18:38:40', './admin_doc/product_images/151.jpg', 1),
(58, 36, 'Duck Bhuna', '<em >Duck cooked dry with special onion-tomato Masala with a touch of&nbsp;authentic heritage spices</em>', '', '700', 25, 1, '2015-05-05 18:40:00', './admin_doc/product_images/54.jpg', 1),
(59, 35, 'Balti-Beef', '<em >An aromatic Beef dish cooked in Kashmiri curry a 20yr old recipe. The beauty of Balti is its simplicity.</em>', '', '450', 25, 1, '2015-05-05 18:41:20', './admin_doc/product_images/105.jpg', 1),
(60, 35, 'Bhuna Beef', '<span >Beef cooked dry with special onion-tomato Masala.</span>', '', '425', 25, 1, '2015-05-05 18:42:03', './admin_doc/product_images/17.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE IF NOT EXISTS `tbl_shipping` (
`shipping_id` int(7) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `full_name`, `mobile_no`, `email_address`, `company_name`, `address`, `city`) VALUES
(16, 'joyonto', '01739585232', 'jsarker91@gmail.com', '', 'dhaka', 'dhaka'),
(17, '', '', '', '', '', '0'),
(18, 'khan jahid', '01727', 'jahid@gmail.com', 'dds', 'dhaka', 'dhaka'),
(19, '0', '0', '0', '0', '0', '0'),
(20, '0', '0', '0', '0', '0', '0');

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
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
 ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
 ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
 ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
 ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
 ADD PRIMARY KEY (`shipping_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
MODIFY `booking_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
MODIFY `brand_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
MODIFY `customer_id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
MODIFY `order_id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
MODIFY `payment_id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
MODIFY `shipping_id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
