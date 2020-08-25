-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 05:38 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pato_food`
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
  `admin_img` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_img`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(1, 'MissYen', 'meepoor2b@gmail.com', '123456789', 'hahaha.jpg', 'Viet Nam', 'This application is created by Pato, if you willing to contact me, please click this link. <br/>\r\n                        <a href=\"#\"> Pato </a> <br/>\r\n                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci doloribus tempore non ut velit, nesciunt totam, perspiciatis corrupti expedita nulla aut necessitatibus eius nisi. Unde quasi, recusandae doloribus minus quisquam.\r\n                        ', '0123456789', 'Web Developer');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_name` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_desc`) VALUES
(1, 'Lunch', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, vel, ab. Neque ipsa eius autem corporis quos quisquam nobis iure laudantium. Quae ratione nam officia similique ipsum dolores illum esse!</p>'),
(2, 'Dinner', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, vel, ab. Neque ipsa eius autem corporis quos quisquam nobis iure laudantium. Quae ratione nam officia similique ipsum dolores illum esse!</p>'),
(3, 'Happy hour', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti a assumenda, eveniet. Libero, neque nemo nostrum corporis sequi placeat, autem quas iure numquam magnam distinctio dicta. Praesentium, cumque, id.</p>');

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
  `customer_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_img`) VALUES
(4, 'Yen', 'yen@gmail.com', '0123456', 'Vietnam', 'Ha Giang', 'Ã¡dasdasda', 'Tran Phu', 'avatar-05.jpg'),
(5, 'Yen', 'yen@gmail.com', '0123456', 'Vietnam', 'Ha Giang', 'Ã¡dasdasda', 'Tran Phu', 'avatar-05.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` float NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` date NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `status`) VALUES
(1, 2, 25.5, 1258664548, 2, 'Medium', '2019-08-10', 'pending'),
(2, 2, 135.27, 1159733131, 3, 'Medium', '2019-08-10', 'pending'),
(3, 2, 135.27, 1914784233, 3, 'Medium', '2019-08-10', 'pending'),
(4, 2, 135.27, 486753694, 3, 'Medium', '2019-08-10', 'pending'),
(5, 2, 89.37, 1158535573, 3, 'Medium', '2019-08-10', 'pending'),
(6, 2, 90.18, 1903730536, 2, 'Small', '2019-08-10', 'pending'),
(7, 2, 90.18, 2023359028, 2, 'Medium', '2019-08-10', 'pending'),
(8, 2, 90.18, 1006432745, 2, 'Medium', '2019-08-10', 'pending'),
(9, 2, 90.18, 2140303510, 2, 'Medium', '2019-08-10', 'pending'),
(10, 2, 45.09, 575705958, 1, 'Large', '2019-08-10', 'pending'),
(11, 2, 38.7, 986636342, 2, 'Medium', '2019-08-10', 'pending'),
(12, 2, 59.58, 734134505, 2, 'Medium', '2019-08-10', 'pending'),
(13, 2, 135.27, 584807496, 3, 'Medium', '2019-08-10', 'pending'),
(14, 2, 90.18, 694538959, 2, 'Medium', '2019-08-10', 'pending'),
(15, 2, 90.18, 624245838, 2, 'Small', '2019-08-10', 'pending'),
(16, 2, 90.18, 1816877454, 2, 'Medium', '2019-08-10', 'pending'),
(17, 2, 25.5, 1738637322, 2, 'Small', '2019-08-10', 'pending'),
(18, 2, 180.36, 1365448536, 4, 'Small', '2019-08-10', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `food_id` int(10) NOT NULL,
  `f_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `food_name` text NOT NULL,
  `food_img1` text NOT NULL,
  `food_img2` text NOT NULL,
  `food_img3` text NOT NULL,
  `food_price` float NOT NULL,
  `food_keywords` text NOT NULL,
  `food_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`food_id`, `f_cat_id`, `cat_id`, `date`, `food_name`, `food_img1`, `food_img2`, `food_img3`, `food_price`, `food_keywords`, `food_desc`) VALUES
(1, 3, 2, '2019-08-10', 'PINE NUT SBRISALONA', 'Bread-1.jpg', 'Bread-2.jpg', 'Bread-3.jpg', 45.09, 'Bread', '<p>Sed fermentum eros vitae eros</p>'),
(2, 4, 1, '2019-08-10', 'TEMPUS ALIQUET', 'Fried-meat-1.jpg', 'Fried-meat-2.jpg', 'Fried-meat-3.jpg', 45.09, 'Meat', '<p>Aenean condimentum ante erat</p>'),
(3, 3, 1, '2019-07-29', 'CRAS EGET MAGNA', 'Pasta-1.jpg', 'Pasta-2.jpg', 'Pasta-3.jpg', 45.09, 'Pasta', '<p>Sed fermentum eros vitae eros</p>'),
(4, 5, 1, '2019-08-10', 'DUIS MASSA', 'macaroni-1.jpg', 'macaroni-2.jpg', 'macaroni-3.jpg', 12.75, 'Macaroni', '<p>Proin lacinia nisl ut ultricies posuere nulla</p>'),
(5, 5, 1, '2019-07-29', 'SBRISALONA', 'pancakes-1.jpg', 'pancakes-2.jpg', 'pancakes-3.jpg', 29.79, 'Pancake', '<p>Proin lacinia nisl ut ultricies posuere nulla</p>'),
(6, 6, 1, '2019-08-10', 'NULLAM MAXIMUS', 'wine-1.jpg', 'wine-2.jpg', 'wine-3.jpg', 12.75, 'Wine', '<p>Duis massa nibh porttitor nec imperdiet eget</p>'),
(7, 2, 3, '2019-07-29', 'MAECENAS TRISTIQUE', 'egg-1.jpg', 'egg-2.jpg', 'egg-3.jpg', 29.79, 'Egg', '<p>Aenean pharetra tortor dui in pellentesque</p>'),
(8, 1, 2, '2019-07-29', 'CRAS MAXIMUS', 'Soup-1.jpg', 'Soup-2.jpg', 'Soup-3.jpg', 29.79, 'Soup', '<p>Proin lacinia nisl ut ultricies posuere nulla</p>'),
(9, 2, 1, '2019-08-10', 'AENEAN EU', 'salad-4.jpg', 'salad-5.jpg', 'salad-6.jpg', 29.79, 'Salad', '<p>Feugiat maximus neque fareta</p>'),
(10, 2, 1, '2019-08-10', 'SED FEUGIAT', 'bread-4.jpg', 'bread-5.jpg', 'bread-6.jpg', 19.35, 'Bread', '<p>Proin lacina nisl uti ultricies</p>'),
(11, 3, 1, '2019-08-10', 'CONSECTETUR', 'meat-4.jpg', 'meat-5.jpg', 'meat-6.jpg', 45.09, 'Meat', '<p>Etiam falicus torto</p>'),
(12, 4, 1, '2019-08-10', 'VIVAMUS PRETIUM', 'pizza-1.jpg', 'pizza-2.jpg', 'pizza-3.jpg', 45.09, 'Pizza', '<p>Proin lacina nisl uti ultricies</p>'),
(13, 6, 1, '2019-08-10', 'DUIS PHARETRA LIGULA', 'juice-1.jpg', 'juice-2.jpg', 'juice-3.jpg', 12.75, 'Juice', '<p>Feugiat maximus neque fareta</p>'),
(14, 8, 1, '2019-08-10', 'IN EU DOLOR', 'ice-1.jpg', 'ice-2.jpg', 'ice-3.jpg', 9.79, 'Ice cream', '<p>Proin lacina nisk ut ultricies</p>'),
(15, 8, 1, '2019-08-10', 'FEUGIAT MAXIMUS', 'ice-4.jpg', 'ice-5.jpg', 'ice-6.jpg', 9.79, 'Ice cream', '<p>Sed fermentum eros vitae</p>'),
(16, 2, 2, '2019-08-10', 'DUIS SED ALIQUET', 'salad-7.jpg', 'salad-8.jpg', 'salad-9.jpg', 29.79, 'Salad', '<p>Proin lacina nisl uti ultricies</p>'),
(17, 2, 2, '2019-08-10', 'SUSPENDISSE', 'bread-7.jpg', 'bread-8.jpg', 'bread-9.jpg', 29.79, 'Bread', '<p>Feugiat maximus neque fareta</p>'),
(18, 3, 2, '2019-08-10', 'SCELERISQUE SED', 'pasta-4.jpg', 'pasta-5.jpg', 'pasta-6.jpg', 45.09, 'Pasta', '<p>Proin lacina nisk ut ultricies</p>'),
(19, 4, 2, '2019-08-10', 'SCELERISQUE SED', 'meat-7.jpg', 'meat-8.jpg', 'meat-9.jpg', 45.09, 'Meat', '<p>Sed fermentum eros vitae</p>'),
(20, 4, 2, '2019-08-10', 'MOLLIS NULLA', 'chicken-1.jpg', 'chicken-2.jpg', 'chicken-3.jpg', 45.09, 'Chicken', '<p>Proin lacina nisl uti ultricies</p>'),
(21, 5, 2, '2019-08-10', 'CONVALLIS AUGUE', 'maraconi-4.jpg', 'maraconi-5.jpg', 'maraconi-6.jpg', 12.75, 'Macaroni', '<p>Feugiat maximus neque fareta</p>'),
(22, 5, 2, '2019-08-10', 'MAECENAS TRISTIQUE', 'pancake-4.jpg', 'pancake-5.jpg', 'pancake-6.jpg', 12.75, 'Pancake', '<p>Proin lacina nisk ut ultricies</p>'),
(23, 6, 2, '2019-08-10', ' DUIS TINCIDUNT', 'wine-4.jpg', 'wine-5.jpg', 'wine-6.jpg', 19.35, 'Wine', '<p>Sed fermentum eros vitae</p>'),
(24, 6, 2, '2019-08-10', 'TEMPUS ALIQUET', 'juice-4.jpg', 'juice-5.jpg', 'juice-6.jpg', 12.75, 'Juice', '<p>Proin lacina nisl uti ultricies</p>'),
(25, 8, 2, '2019-08-10', 'SCELERISQUE', 'coffee-1.jpg', 'coffee-2.jpg', 'coffe3-3.jpg', 12.75, 'Coffee', '<p>Feugiat maximus neque fareta</p>'),
(26, 8, 2, '2019-08-10', 'CRAS MAXIMUS', 'ice-4.jpg', 'ice-5.jpg', 'ice-6.jpg', 9.79, 'Ice cream', '<p>Sed fermentum eros vitae</p>');

-- --------------------------------------------------------

--
-- Table structure for table `food_categories`
--

CREATE TABLE `food_categories` (
  `f_cat_id` int(10) NOT NULL,
  `f_cat_name` text NOT NULL,
  `f_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food_categories`
--

INSERT INTO `food_categories` (`f_cat_id`, `f_cat_name`, `f_cat_desc`) VALUES
(2, 'Antipasto', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, vel, ab. Neque ipsa eius autem corporis quos quisquam nobis iure laudantium. Quae ratione nam officia similique ipsum dolores illum esse!</p>'),
(3, 'Primo Piatto', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, vel, ab. Neque ipsa eius autem corporis quos quisquam nobis iure laudantium. Quae ratione nam officia similique ipsum dolores illum esse!</p>'),
(4, 'Secondo Piatto', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, vel, ab. Neque ipsa eius autem corporis quos quisquam nobis iure laudantium. Quae ratione nam officia similique ipsum dolores illum esse!</p>'),
(5, 'Contorno', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, vel, ab. Neque ipsa eius autem corporis quos quisquam nobis iure laudantium. Quae ratione nam officia similique ipsum dolores illum esse!</p>'),
(6, 'Dolce', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, vel, ab. Neque ipsa eius autem corporis quos quisquam nobis iure laudantium. Quae ratione nam officia similique ipsum dolores illum esse!</p>'),
(8, 'Bere', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, vel, ab. Neque ipsa eius autem corporis quos quisquam nobis iure laudantium. Quae ratione nam officia similique ipsum dolores illum esse!</p>');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` float NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(1, 1305122353, 29.79, 'Back Code', 123213, 1234545, '27/06/2019');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `food_id` int(10) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `food_id`, `invoice_no`, `qty`, `size`, `order_status`) VALUES
(1, 2, 1, 1258664548, 2, 'Medium', 'pending'),
(2, 2, 1, 1159733131, 3, 'Medium', 'pending'),
(3, 2, 1, 1914784233, 3, 'Medium', 'pending'),
(4, 2, 1, 486753694, 3, 'Medium', 'pending'),
(5, 2, 1, 1158535573, 3, 'Medium', 'pending'),
(6, 2, 1, 1903730536, 2, 'Small', 'pending'),
(7, 2, 1, 2023359028, 2, 'Medium', 'pending'),
(8, 2, 1, 1006432745, 2, 'Medium', 'pending'),
(9, 2, 1, 2140303510, 2, 'Medium', 'pending'),
(10, 2, 1, 575705958, 1, 'Large', 'pending'),
(11, 2, 1, 986636342, 2, 'Medium', 'pending'),
(12, 2, 1, 734134505, 2, 'Medium', 'pending'),
(13, 2, 0, 584807496, 3, 'Medium', 'pending'),
(14, 2, 0, 694538959, 2, 'Medium', 'pending'),
(15, 2, 0, 624245838, 2, 'Small', 'pending'),
(16, 2, 0, 1816877454, 2, 'Medium', 'pending'),
(17, 2, 0, 1738637322, 2, 'Small', 'pending'),
(18, 2, 0, 1365448536, 4, 'Small', 'complete');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`) VALUES
(1, 'Slide number 1', 'slide-1.jpg'),
(3, 'Slide number 3', 'slide-3.jpeg'),
(11, 'Slide number 2', 'slide-2.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

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
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `food_categories`
--
ALTER TABLE `food_categories`
  ADD PRIMARY KEY (`f_cat_id`);

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
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `food_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `food_categories`
--
ALTER TABLE `food_categories`
  MODIFY `f_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
