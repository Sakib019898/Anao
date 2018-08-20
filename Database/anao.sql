-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2018 at 10:57 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anao`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `password`) VALUES
(1, 'saqeeb', 'skb@gmail.com', '123456789'),
(2, 'sofia', 'sofia@gmail.com', '123456789'),
(3, 'Shamit Ahmed', 'shamit@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `price` decimal(12,5) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `price`, `amount`) VALUES
(10, 1, '101200.00000', 1),
(10, 2, '176000.00000', 1),
(10, 3, '22000.00000', 1),
(11, 1, '101200.00000', 1),
(11, 2, '176000.00000', 1),
(11, 3, '22000.00000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Electronics'),
(2, 'Watches'),
(3, 'Books'),
(4, 'Video_Games'),
(5, 'Cosmetics');

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

CREATE TABLE `confirmation` (
  `id` int(11) DEFAULT NULL,
  `total_cost` decimal(12,5) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `place` varchar(30) DEFAULT NULL,
  `traveler_earn` decimal(12,5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `username`, `mobile`, `email`, `password`) VALUES
(1, 'Murad', '015102', 'murad@yahoo.com', '123456789'),
(2, 'Amit', '015105', 'amit@yahoo.com', '123456789'),
(3, 'CSENasim', '0171489', 'csenasim@yahoo.com', '123456789'),
(4, 'Tokey', '0167124', 'tokey@yahoo.com', '123456789'),
(5, 'AbulMal', '012354668', 'abul@gmail.com', '123456789'),
(6, 'Sofia Neherin', '0191919182', 'sofia@gmail.com', 'asd'),
(7, 'nuhahaha', '354', 'ysdgyu@gah', '444'),
(8, 'Raiyan', '0198986565635', 'ryan@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `customer_product`
--

CREATE TABLE `customer_product` (
  `id` int(11) NOT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `trav_id` int(11) DEFAULT NULL,
  `confirm` varchar(5) DEFAULT 'no',
  `place` varchar(30) DEFAULT 'nai'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_product`
--

INSERT INTO `customer_product` (`id`, `cust_id`, `trav_id`, `confirm`, `place`) VALUES
(10, 6, 3, 'yes', 'dhaka'),
(11, 8, 3, 'yes', 'dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `product_name` varchar(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `price` decimal(12,5) DEFAULT NULL,
  `description` text,
  `pic` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `product_name`, `amount`, `price`, `description`, `pic`) VALUES
(1, 1, 'IPhoneX', 46, '101200.00000', 'GSM unlocked 5.8\",64GB space,Grey', '11.png'),
(2, 1, 'Sony Vaio', 42, '176000.00000', 'Intel I7 7400M,8GB Ram,320GB hd,NVIDIA GeForce 800M,Webcam', '12.png'),
(3, 1, 'Razer Headphone', 44, '22000.00000', 'Hefty,Flawless mechanism,Platform pc,xbox', '13.png'),
(4, 1, 'Playstation4', 45, '25960.00000', 'Slim 1TB Console,Star wars battlefront2', '14.png'),
(5, 1, 'Joystick', 48, '22000.00000', 'Oval ear cushions 7.1,Chroma light', '15.png'),
(6, 3, 'Think python', 49, '8800.00000', 'Introduction of python programming for begginers', '31.png'),
(7, 3, 'Data communication', 49, '13200.00000', 'Author:Forouzan,The basics of data communication and networking', '32.png'),
(8, 3, 'Lincoln in the bardo', 50, '1672.00000', 'Author:George Sunders,Detailed novel evokes the dreams and disillusionment that follow Saeed and Nadia', '33.png'),
(9, 3, 'Exit west', 51, '1408.00000', 'Author:Mohsin Hamid,Hilariously funny,horribly sad and surprising novel', '34.png'),
(10, 3, 'Bear town', 49, '1144.00000', 'Author:Fredrick Backman,slow burn of novel about a community', '35.png'),
(11, 4, 'Resident Evil', 49, '1000.00000', 'Survival horror game developed by Capcorn', '45.png'),
(12, 4, 'Cod WW2', 48, '1000.00000', 'First person shooter game developed by sledgehamme games', '41.png'),
(13, 4, 'NFS payback', 49, '1000.00000', 'Racing video games developed by ghost games', '43.png'),
(14, 4, 'cuphead', 49, '1000.00000', 'indie video game develpoed by studio MDHR', '42.png'),
(15, 4, 'Origins', 50, '1000.00000', 'Action adventure game', '45.png'),
(16, 5, 'Bunts Bees', 50, '2000.00000', 'Natural moisturizing Lipstick', '51.png'),
(17, 5, 'ByAlegory Makeup', 50, '1000.00000', 'Eye shadow', '52.png'),
(18, 5, 'Varvatos Vintage', 50, '2000.00000', 'Perfume spray', '53.png'),
(19, 5, 'Calvin clain', 50, '2000.00000', 'holiday gift set', '54.png'),
(20, 5, 'Eternity aqua', 50, '2000.00000', 'For men ', '55.png'),
(21, 2, 'Rolex submerinar', 50, '200000.00000', '7.5 inches band,yellow gold bezzel ', '21.png');

-- --------------------------------------------------------

--
-- Table structure for table `traveler_advance`
--

CREATE TABLE `traveler_advance` (
  `trav_id` int(11) DEFAULT NULL,
  `free` varchar(5) DEFAULT NULL,
  `flight` varchar(25) DEFAULT NULL,
  `sent_time` varchar(25) DEFAULT NULL,
  `place` varchar(20) DEFAULT NULL,
  `earn` decimal(12,5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traveler_advance`
--

INSERT INTO `traveler_advance` (`trav_id`, `free`, `flight`, `sent_time`, `place`, `earn`) VALUES
(1, 'yes', '5.5.2019', '2.2.2050', 'Mohakhali', '0.00000'),
(2, 'yes', '20.02.2018', '22.02.2018', 'Dhanmondi', '0.00000'),
(3, 'yes', '31.01.2018', '1.02.2018', 'Gulsan', '0.00000'),
(4, 'yes', '1.03.2018', '4.03.2018', 'Rampura', '0.00000');

-- --------------------------------------------------------

--
-- Table structure for table `traveler_basic`
--

CREATE TABLE `traveler_basic` (
  `trav_id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `passport` varchar(20) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `traveler_basic`
--

INSERT INTO `traveler_basic` (`trav_id`, `username`, `email`, `phone`, `passport`, `password`) VALUES
(1, 'saqeeb', 'sakib019898@gmail.com', '01989863922', 'GHE-6987', '12345'),
(2, 'chamit', 'auti8@gmail.com', '01728546912', 'DAMN-789', '123456'),
(3, 'felix', 'felix@yahoo.com', '++8352290123456', 'passport3', '123456789'),
(4, 'ryan', 'ryan@yahoo.com', '+632241255', 'bcbcbcb', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`,`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `id` (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD KEY `p_confirmation` (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `customer_product`
--
ALTER TABLE `customer_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `trav_id` (`trav_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `traveler_advance`
--
ALTER TABLE `traveler_advance`
  ADD KEY `trav_id` (`trav_id`);

--
-- Indexes for table `traveler_basic`
--
ALTER TABLE `traveler_basic`
  ADD PRIMARY KEY (`trav_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer_product`
--
ALTER TABLE `customer_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `traveler_basic`
--
ALTER TABLE `traveler_basic`
  MODIFY `trav_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`id`) REFERENCES `customer_product` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD CONSTRAINT `p_confirmation` FOREIGN KEY (`id`) REFERENCES `customer_product` (`id`);

--
-- Constraints for table `customer_product`
--
ALTER TABLE `customer_product`
  ADD CONSTRAINT `customer_product_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `traveler_advance`
--
ALTER TABLE `traveler_advance`
  ADD CONSTRAINT `traveler_advance_ibfk_1` FOREIGN KEY (`trav_id`) REFERENCES `traveler_basic` (`trav_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
