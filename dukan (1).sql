-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2019 at 06:29 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dukan`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `AID` int(20) NOT NULL,
  `billing_address` varchar(50) NOT NULL,
  `shipping_address` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phonenum` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`AID`, `billing_address`, `shipping_address`, `province`, `city`, `phonenum`) VALUES
(1, 'House no A 316 karachi', 'House no 13 C hyderbada', 'Sindh', 'Hyderabad', '03003027737'),
(21, 'House no 316, block A, Phase 1, Gulshan-e-HadeedI', 'SHouse no 316, block A, Phase 1, Gulshan-e-Had', 'Sindh', 'Hyderabad', '1231'),
(60, 'house no 1280 karachi', 'house no 1280 karachi', 'sindh', 'karachi', '03142401569'),
(61, 'karachi pakistan', 'fast karachi', 'Sindth', 'Karachi', '03213455643'),
(62, 'fast karachi', 'fast karachi', 'karachi', 'Karachi', '03001234678'),
(63, '', '', '', '', ''),
(64, '', '', '', '', ''),
(65, '', '', '', '', ''),
(66, '', '', '', '', ''),
(67, '', '', '', '', ''),
(68, '', '', '', '', ''),
(69, '', '', '', '', ''),
(70, '', '', '', '', ''),
(71, '', '', '', '', ''),
(72, '', '', '', '', ''),
(73, '', '', '', '', ''),
(74, 'House no 316, block A, Phase 1, Gulshan-e-Hadeed', 'House no 316, block A, Phase 1, Gulshan-e-Hadeed', 'Sindh', 'Karachi', '923046526275'),
(75, 'House no 316, block A, Phase 1, Gulshan-e-Hadeed', 'House no 316, block A, Phase 1, Gulshan-e-Hadeed', 'Sindh', 'Karachi', '923046526275');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `fname`, `lname`, `email`, `username`, `password`, `picture`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin', ''),
(3, 'taha', 'memon', 'tahamemon20@gmail.com', 'taha', 'taha123', '44503596_1891304284294140_8203583544782487552_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category_history`
--

CREATE TABLE `category_history` (
  `id` int(20) NOT NULL,
  `category_no` int(20) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `DateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_history`
--

INSERT INTO `category_history` (`id`, `category_no`, `cname`, `DateTime`) VALUES
(2, 9, 'car', '2018-12-04 13:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `orderno` int(10) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactid`, `name`, `email`, `mobileno`, `orderno`, `comment`, `datetime`) VALUES
(16, 'hani', 'hani@gmail.com', '030012345678', 3, 'testing testing 123', '21-31-2018 03:31:01'),
(17, 'taha', 'tahaisthe_best@yahoo', '03003027737', 4, 'testing good sucess yeah', '21-31-2018 03:31:41'),
(18, 'uzair', 'uzair@gmail.com', '0300123456', 5, 'testing test', '21-50-2018 12:50:09'),
(19, 'farhan', 'farhan@gmail.com', '03123456787', 8, 'testing is good', '21-06-2018 13:06:12'),
(20, 'akash', 'akash@gmail.com', '0312214325', 6, 'sajhdsaddsa', '21-07-2018 16:07:32'),
(21, 'test', 'test@gmail.com', '12432554', 99, 'sagdgsad\r\n', '21-08-2018 16:08:12'),
(22, 'shiza', 'shiza@gmail.com', '030012345678', 89, 'testing ', '22-33-2018 12:33:27'),
(23, 'taha', 'tahamemon20@gmail.com', '03003027737', 89, 'testing mail hopefully it will work', '25-25-2018 03:25:40'),
(24, 'taha', 'tahamemon20@gmail.com', '3003027737', 78, 'testing mail function', '25-28-2018 03:28:54'),
(25, 'taha', 'tahamemon20@gmail.com', '03003027737', 56, 'mail testing', '25-36-2018 03:36:29');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(20) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `addressID` int(11) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `createdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `fname`, `lname`, `email`, `dob`, `username`, `password`, `addressID`, `picture`, `createdate`) VALUES
(1, 'taha', 'memon', 'tahamemon20@gmail.com', '1996-06-17', 'tahamemon', 'taha123', 1, 'sadsa', '2018-11-23'),
(3, 'John', 'Wick', 'tahaisthe_best@yahoo.com', '1996-08-17', 'tahamemon20', 'e09b621059f69d558da98b62d4e87e7c', 21, '44503596_1891304284294140_8203583544782487552_n.jpg', '0000-00-00'),
(33, 'Aakash', 'Panhwar', 'aakashpanhwar9@gmail.com', '0000-00-00', 'aakash', '7c20304175fc7ace9147d7b4c0ddfe8d', 60, '44503596_1891304284294140_8203583544782487552_n.jpg', '30-13-2018 15:13:32'),
(34, 'Hani', 'Raza', 'hani@gmail.com', '1996-10-24', 'haniraza5', 'a32ae7cb7003cfd3dd18ebd7edc60328', 61, '', '04-46-2018 10:46:00'),
(35, 'farhan', 'ahmad', 'farhanahmad@gmail.com', '1996-12-12', 'farhan20', '9cf452b375e430338103a9c5cff21462', 62, '', '04-04-2018 14:04:14'),
(48, 'ahmed', 'raza', 'jubileesheikh@gmail.com', '1999-12-19', 'ahmedraza8', 'ed36c2b690f236a4529db4d406707039', 75, '', '10-55-2018 00:55:25');

-- --------------------------------------------------------

--
-- Table structure for table `deleteproduct_log`
--

CREATE TABLE `deleteproduct_log` (
  `id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `DateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deleteproduct_log`
--

INSERT INTO `deleteproduct_log` (`id`, `product_id`, `product_name`, `DateTime`) VALUES
(1, 1, 'shirt', '2018-12-04 02:25:29'),
(2, 2, 'pant', '2018-12-04 03:37:16'),
(3, 29, 'santro car', '2018-12-04 03:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `discount_id` int(20) NOT NULL,
  `discount_code` varchar(50) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `location` varchar(64) NOT NULL,
  `discount` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`discount_id`, `discount_code`, `product_title`, `location`, `discount`) VALUES
(1, 'welcome20', '', '', 50),
(2, 'asd', 'Mate 10 Lite', 'tariq road', 3),
(4, '123', 'Mate 10 Lite', 'bahadurabad', 6),
(7, 'asd', 'Men Party Shirts', 'Tariq Road', 3),
(8, '12345', '', '', 3);

-- --------------------------------------------------------

--
-- Table structure for table `dukan_order`
--

CREATE TABLE `dukan_order` (
  `orderID` int(20) NOT NULL,
  `custID` int(20) NOT NULL,
  `grand_total` float NOT NULL,
  `status` varchar(100) NOT NULL,
  `rider_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dukan_order`
--

INSERT INTO `dukan_order` (`orderID`, `custID`, `grand_total`, `status`, `rider_id`) VALUES
(2, 3, 2000, 'Shipped', 1),
(3, 3, 3112, 'Shipped', 2),
(4, 3, 6000, 'Shipped', 2),
(5, 3, 1890, 'RECIEVED', 0),
(6, 3, 1890, 'RECIEVED', 0),
(7, 3, 1890, 'Shipped', 5),
(8, 3, 1890, 'RECIEVED', 0),
(9, 3, 1890, 'Shipped', 4),
(10, 3, 1890, 'RECIEVED', 0),
(11, 3, 97600, 'RECIEVED', 0),
(12, 3, 132000, 'RECIEVED', 0),
(13, 3, 2000, 'RECIEVED', 0),
(14, 3, 3200, 'RECIEVED', 0),
(15, 3, 1200, 'RECIEVED', 0),
(16, 3, 1200, 'RECIEVED', 0),
(17, 3, 3200, 'RECIEVED', 0),
(18, 3, 1200, 'RECIEVED', 0);

--
-- Triggers `dukan_order`
--
DELIMITER $$
CREATE TRIGGER `statuschange` AFTER UPDATE ON `dukan_order` FOR EACH ROW INSERT into order_statuscheck VALUES (null,new.orderID,new.rider_id,new.status)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(20) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `sell_price` float NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `discount` float NOT NULL,
  `grand_total` float NOT NULL,
  `orderdate` date NOT NULL,
  `expected_delivery_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `old_rider`
--

CREATE TABLE `old_rider` (
  `id` int(20) NOT NULL,
  `rider_id` int(20) NOT NULL,
  `rname` varchar(50) NOT NULL,
  `DateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `old_rider`
--

INSERT INTO `old_rider` (`id`, `rider_id`, `rname`, `DateTime`) VALUES
(1, 3, 'john', '2018-12-04 04:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `order_statuscheck`
--

CREATE TABLE `order_statuscheck` (
  `id` int(20) NOT NULL,
  `orderid` int(20) NOT NULL,
  `rider_id` int(20) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_statuscheck`
--

INSERT INTO `order_statuscheck` (`id`, `orderid`, `rider_id`, `status`) VALUES
(1, 4, 2, 'Shipped'),
(2, 7, 5, 'Shipped'),
(3, 9, 4, 'Shipped');

-- --------------------------------------------------------

--
-- Table structure for table `price_history`
--

CREATE TABLE `price_history` (
  `id` int(11) NOT NULL,
  `product_id` int(20) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `old_price` float NOT NULL,
  `DateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price_history`
--

INSERT INTO `price_history` (`id`, `product_id`, `product_name`, `old_price`, `DateTime`) VALUES
(1, 29, 'santro car', 120000, '2018-12-04 02:20:18'),
(2, 29, 'santro car', 130000, '2018-12-04 02:52:17'),
(3, 2, 'pant', 2000, '2018-12-04 02:52:17'),
(4, 2, 'pant', 2000, '2018-12-04 02:56:26'),
(5, 36, 'Black Leather Jacket For Men', 3200, '2018-12-06 14:54:52'),
(6, 38, 'Men Party Shirts', 1200, '2018-12-08 03:42:46'),
(7, 37, 'Mens Cotton Plain Green Shirt - Dress Shirts', 1200, '2018-12-08 03:43:10'),
(8, 37, 'Mens Cotton Plain Green Shirt - Dress Shirts', 1200, '2018-12-09 02:07:16'),
(9, 36, 'Black Leather Jacket For Men', 3200, '2018-12-09 02:09:56'),
(10, 36, 'Black Leather Jacket For Men', 3200, '2018-12-09 02:12:09'),
(11, 38, 'Men Party Shirts', 1200, '2018-12-09 02:13:56'),
(12, 38, 'Men Party Shirts', 1200, '2018-12-09 02:14:18');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(20) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `category_no` int(20) NOT NULL,
  `company` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `buying_price` float NOT NULL,
  `sell_price` float NOT NULL,
  `quantity` int(10) NOT NULL,
  `pro_desc` text NOT NULL,
  `short_desc` text NOT NULL,
  `picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `category_no`, `company`, `model`, `buying_price`, `sell_price`, `quantity`, `pro_desc`, `short_desc`, `picture`) VALUES
(33, 'Mate 10 Lite', 4, 'HUAWEI', '10 lite', 30000, 32000, 10, 'Huawei Mate 10 Lite\'s retail price in Pakistan is Rs. 34,999. Official dealers and warranty providers regulate the retail price of Huawei mobile products in official warranty.\r\nâ€¢	Retail Price of Huawei Mate 10 Lite in Pakistan is Rs. 34,999.\r\nâ€¢	Retail Price of Huawei in USD is $303.\r\nHuawei Mate 10 Lite - Budget Friendly Lighter Variant! Huawei is releasing flagship standard Mate 10 but they did not forget Lite version of this smartphone. That\'s why now they introduced the lighter version of flagship device to make sure that everyone will get the taste of their latest product Huawei Mate 10 Lite. It seems impossible for everyone to buy such high end device with such a low budget that\'s why just like old times they brought you budget friendly Huawei\'s Mate 10 Lite so you can enjoy every moment of your life by staying inside the limits of your budget. On the start it was not clear that whether they are going to launch Huawei Mate 10\'s Pro version or not but now it is pretty clear that just like the past they gonna release lighter and pro version of flagship too. Detail of specifications list revealed that Mate 10 Lite by Huawei most features identical to the flagship device but major difference that we are going meet in specification of this is its display size and storage configuration. Huawei 10 Lite packed 5.99 inch display instead of 5.88 inches while the resolution and pixel density is different too from each other. IPS matrix is common in both devices where Huawei Mate\'s 10 Lite is going to launch with 4 GB of RAM instead of 6 GB RAM while internal storage is limited to 64 GB instead of multi-variant. Chipset used inside the Mate 10 Lite is Huawei Kirin 659 which is selected to compete with Samsung. Li-Po 3340 mAh battery is fixed inside the belly of the smartphone and it is non-removable. Further more 10 Lite is upgraded to Nougat OS which is 7th and most advanced version of Android for now. OPPO F5 is also on its way to top this phone but it seems that its too difficult for this phone to take lead while Nokia 2 is also reaping some profits along with this phone.', '5.9\" Display - 4Gb Ram - 64Gb Rom - Android 7.1 (Nougat) - Blue', '1.jpg'),
(34, 'Samsung Galaxy A7', 4, 'Samsung', '2018', 55000, 60000, 10, 'Samsung Galaxy A7 2018 - Look no Further! \r\nSamsung has already started working on the Galaxy A7 and it is called the 2018 version of the device which is going to debut in the end of this year or this new series is going in the beginning of next year. Recently its successor launched in market and now Samsung Galaxy A7 2018 appeared on the GFXBench and it revealed a lot of its specification and it revealed that the upcoming phone will be high end device where price of Samsung\'s Galaxy A7 2018 will be more then 50K so it seems that if you are planning to purchase this smart phone then start savings today. There is no doubt that Samsung Galaxy A7\'s price is according to its specifications while the design will be same as older devices are carrying. Indicating of sources is now confirmed that the triple camera setup is coming in Samsung A7 2018 and its clear like water that this phone is coming with triple camera setup on the back side. It is revealed that 24MP + 8MP + 5MP triple camera is present on back side of Galaxy A7 2018 and same 24 MP camera is fixed on front side to make the selfies more sharper and colorful just like the real life. Beneath the top layer of Galaxy A7 2018 by Samsung 2.2 GHz processor is attached with the chipset which is keeping all the functions running without taking a break for a single second. 4 GB RAM of Samsung Galaxy\'s A7 2018 is true friend of the processor which helps him a lot in all the multi-tasking and gaming. Another friend of these two is Mali G71 GPU which is handling the graphics of A7 2018 and give you high end results while playing games. The Newer A series will also feature Infinity Display and Bixby support.', 'Samsung Galaxy A7 2018\'s retail price in Pakistan is Rs. 59,999. Official dealers and warranty providers regulate the retail price of Samsung mobile products in official warranty.\r\nâ€¢	Retail Price of Samsung Galaxy A7 2018 in Pakistan is Rs. 59,999.\r\nâ€¢	Retail Price of Samsung in USD is $447.', '2.jpg'),
(35, 'Honor 8x 64GB', 4, 'HUAWEI', '2017', 36000, 40000, 10, 'If you still think that you need some more storage then you have an SD card slot too in Honor\'s 8x 64GB which is capable enough to expand your internal storage up to 256 GB. In other specifications, you will get a massive and bright screen with a size of 6.5 inches. Honor 8x 64GB\'s resolution is 1080 x 2340 pixels and if we talk about the pixel density of the display then it is 396 pixels per inch. You will get the latest processor from Huawei and 8x 64GB by Honor is coming with Hisilicon Kirin 710 which is new in business and have more focus on gaming performance with a dedicated GPU to put its all power in running games without pausing. Honor 64GB got the help of Mali-G51 MP4 GPU for making the graphics look better while playing heavy and messy graphics games. If you are a game lover then Honor 8x\'s 64GB definitely need a bigger battery to perform the job and that\'s why 3750 mAh battery is used to look after the needs of energy for this phone. 20 MP main camera of Honor 8x 64GB is not alone because it got the support of the additional 2 MP depth sensor which is going to bring more detail of your images. For selfies 16 MP lens is used so 8x 64GB\'s users will get the best selfies all the time so what do you think is it good enough to beat Samsung.', 'Honor just brought its new 8x 64GB to the table with less internal storage to make it more affordable for you with 64 GB. well, you can always get yourself an extra SD card for Honor 8x 64GB because still, it\'s not that bad 64Gb is still enough for most.', '3.jpg'),
(36, 'Black Leather Jacket For Men', 5, 'Outfitters', '2018', 3000, 3200, 7, '1. Top quality Japan Faux Leather jacket. 2. Nice Look. 3. Original YKK zip. 4. Made from top quality materials. 5. Hand Washable. 6. An Immense style at a fraction of the highstreet retail price.\r\nSpecifications of Black Leather Jacket For Men\r\nâ€¢	Brand\r\nMONCLER\r\nâ€¢	SKU\r\nMO114FA03ZK0WNAFAMZ-2167230\r\nâ€¢	Color\r\nBlack\r\nâ€¢	Main Material\r\nFaux Leather\r\nâ€¢	Warranty Policy EN\r\nNo', 'â€¢	Top quality Japanese Faux Leather jacket\r\nâ€¢	Stylish Look\r\nâ€¢	Original YKK zip\r\nâ€¢	Premium Quality\r\nâ€¢	Autumn/Winter Wear\r\nâ€¢	Hand Washable', '6.jpg'),
(37, 'Mens Cotton Plain Green Shirt - Dress Shirts', 5, 'Tommy Hilfiger', '2018', 1000, 1200, 8, '50% Sale on Mens Shirts in Pakistan. Best price for Mens Shirts in Pakistan. Casual Shirts, Party Shirts, Dress Shirts, Branded Shirts, Plain Shirts, Full Sleeves Shirts, Body Fit Shirts, Slim Fit Shirts, Classic Collar Shirts, Standard Collar Shirts, Summer Shirts, Spring Shirts, Eid Collection Shirts, Polo Cotton Shirts.\r\nStyle:\r\nCasual Shirts, Formal Shirts, Party Shirts, Dress Shirts, Branded Shirts,\r\nDesign:\r\nPlain Shirt,\r\nSleeves:\r\nFull Sleeves Shirts,\r\nFitting:\r\nBody Fit Shirts, Slim Fit Shirts\r\nCollar:\r\nClassic Collar Shirts, Standard Collar Shirts\r\nSeason:\r\nSummer Shirts, Spring Shirts, Eid Collection Shirts\r\nMaterial:\r\nCotton Shirts\r\nBody Fit Shirts, Branded, Branded Shirts, Casual Shirts, Classic Collar Shirts, Clothing, Dress Shirts, Eid Collection Shirts, Export Stocklot, Full Sleeves Shirts, Men Party Shirts, Plain Shirts, Polo Cotton Shirts, Shirts, Slim Fit Shirts, Spring Shirts, Standard Collar Shirts, Summer Shirts,\r\n85% Cotton15% Polyeste', 'Tommy Hilfiger Men\'s Casual Dress Shirts. Mens Shirts Online Shopping in Pakistan. Buy Mens Shirts Online in Pakistan.', '7.jpg'),
(38, 'Men Party Shirts', 5, 'Tommy Hilfiger', '2018', 1000, 1200, 7, 'Style:\r\nCasual Shirts, Party Shirts, Branded Shirts,\r\nDesign:\r\nCheck Design Shirts,\r\nSleeves:\r\nFull Sleeves Shirts,\r\nFitting:\r\nBody Fit Shirts, Slim Fit Shirts\r\nCollar:\r\nClassic Collar Shirts, Standard Collar Shirts\r\nSeason:\r\nWinter Shirts, Autumn Shirts\r\nMaterial:\r\nVery Soft Cotton Shirts\r\nColor:\r\nWhite & Royal Blue\r\nBody Fit Shirts, Branded, Branded Shirts, Casual Shirts, Classic Collar Shirts, Clothing, Eid Collection Shirts, Export Stocklot, Full Sleeves Shirts, Men Party Shirts, Plain Shirts, Soft Cotton Shirts, Shirts, Slim Fit Shirts, Autumn Shirts, Standard Collar Shirts, Winter Shirts,\r\n\r\n95% Cotton\r\n05% Polyester\r\n', 'Tommy Hilfiger Men Shirts. Mens Shirts Online Shopping in Pakistan. Buy Mens Shirts Online in Pakistan. 50% Sale on Mens Shirts in Pakistan. Best price for Mens Shirts in Pakistan. Casual Shirts, Party Shirts, Branded Shirts, Winter Shirts, Full Sleeves Shirts, Body Fit Shirts, Slim Fit Shirts, Classic Collar Shirts, Standard Collar Shirts, Summer Shirts, Autumn Shirts, Designer Shirts, Stylish Shirts.', '8.jpg'),
(39, 'NIKON D5300 DSLR Camera 18-55VR Kit', 2, 'NIKON', '2017', 75000, 82000, 10, 'Full HD 1080p - Black\r\nBefore the , you chose your smartphone camera for convenience. Zooming was clumsy. Shooting in low light was nearly impossible. Capturing fast action was a game of luck. But after the , you\'ll see that you were compromising image quality. That some of the greatest photos happen when the light is low. That fast action can be frozen in perfect clarity. And that a camera and a smartphone can work together in harmony to make the photos you share absolutely amazing.\r\nStunning simplicity\r\nPhotos and videos captured with the and a superb NIKKOR lens are as vibrant and lifelike as the moments they preserve. Shoot in extremely low light without a problem. Freeze fast-action in its tracks. Create portraits with rich, natural skin tones and beautifully blurred backgrounds. The photos you share will amaze everyoneâ€”even yourself.\r\nNikon SnapBridge\r\nSnapBridge has changed the way cameras and smartphones work togetherâ€”and only Nikon has it. Take a picture with the and it\'s automatically transferred to your compatible smartphone or tablet, ready to share. SnapBridge works seamlessly with NIKON IMAGE SPACE, a cloud storage and sharing site, to back-up your photos and to help you create and share albums with your friends and family. The future of photo sharing is here.', 'Product details of NIKON D5300 DSLR Camera 18-55VR Kit\r\nâ€¢	Brand Warranty\r\nâ€¢	Snap Bridge Bluetooth Connectivity\r\nâ€¢	24.2MP DX-Format CMOS Sensor\r\nâ€¢	EXPEED 4 Image Processor\r\nâ€¢	No Optical Low-Pass Filter\r\nâ€¢	Native ISO 100-25600; 5 fps Shooting', '26.jpg'),
(40, 'Canon EOS 200D With kit lens EF-S 18-55 IS STM (Bl', 2, 'CANON', '2018', 76000, 80000, 10, 'â€¢	Native ISO 25600, Extended to ISO 51200\r\nâ€¢	Up to 5 fps Continuous Shooting\r\nâ€¢	Feature Assistant; Microphone Input\r\nâ€¢	Built-In Wi-Fi with NFC and Bluetooth\r\nâ€¢	EF-S 18-55mm f/4-5.6 Lens\r\nâ€¢	Specifications of Eos 200D/ Sl2 Dslr Camera With 18-55Mm Lens (Black)\r\nâ€¢	Product description\r\nâ€¢	Canon EOS 200D DSLR Camera provides users with a fully-featured system that won\'t weigh them down. Packed into the tiny body is a capable 24.2MP APS-C CMOS sensor and a DIGIC 7 Image Processor, both of which work together to create sharp, vivid images at native sensitivities up to ISO 25600 and extended sensitivities up to ISO 51200. Video shooting has received a boost with Full HD 1080p recording possible at up to 60 fps. The 200D also manages some significant body upgrades, with the main addition being a 3.0\" vari-angle touchscreen LCD for intuitive operation and the ability to work at odd angles with relative ease.\r\nâ€¢	As a DSLR, the 200D obviously retains the optical viewfinder for fast, natural composition of your images and it can shoot continuously at speeds up to 5 fps. This setup also features a 9-point AF system for capturing tack sharp images. If you are working in Live View or shooting video, the 200D does offer Dual Pixel CMOS AF technology, providing fast, accurate focusing in these modes and with intuitive control via the touchscreen. Additionally, the 200D has a microphone input for higher quality audio recording during movie shooting.', 'Product details of Canon EOS 200D With kit lens EF-S 18-55 IS STM (Black)\r\nâ€¢	24.2MP APS-C CMOS Sensor\r\nâ€¢	DIGIC 7 Image Processor\r\nâ€¢	3\" 1.04m-Dot Vari-Angle Touchscreen LCD\r\nâ€¢	Full HD 1080p Video Recording at 60 fps', '27.jpg'),
(41, 'Canon EOS 1300D + 18-55mm IS II Lens', 2, 'CANON', '2018', 160000, 170000, 10, 'Capture the moments with your 18.0 Megapixel EOS 1300D camera and lens kit and start sharing your DSLR quality stills and cinematic Full HD movies. From stunning landscapes to portraits, take sharp must-have shots with an Image Stabilizer zoom lens. Shoot and share your life story in high quality via Wi-Fi and NFC*.', 'â€¢	Beginner\'s DSLR to start making memories\r\nâ€¢	18.0 MP, APS-C sensor, 3 fps\r\nâ€¢	Wi-Fi, NFC', '29.jpg'),
(42, 'Fully Automatic Washing Machine White', 6, 'Haier', '2018', 30000, 33000, 10, 'â€¢	Brand Warranty\r\nâ€¢	Anti Bacterial Wash\r\nâ€¢	Digital Display\r\nâ€¢	Quick Wash\r\nâ€¢	Easy to use\r\nâ€¢	7.5 kg\r\nâ€¢	SKU\r\nHA779HL04RLIUNAFAMZ-2508839\r\nâ€¢	Model\r\n2018\r\nâ€¢	Warranty Policy EN\r\n10 Years motor one year parts\r\nWhatâ€™s in the box\r\n1 x Fully Automatic washing machine - 75-918 - 7.5 kg - White\r\n', '75-918 - 7.5 kg - White\r\n', '16.jpg'),
(43, 'Aurora AMD900SS 29-Liter Compact Microwave Oven Bl', 6, 'Aurora', '2018', 6500, 7500, 10, 'â€¢	Defrost by weight\r\nâ€¢	Cooking end signal\r\nâ€¢	Safety lock function\r\nâ€¢	Easy pull handle door\r\nâ€¢	Digital Bright LED Display\r\nâ€¢	10 Microwave power levels\r\nâ€¢	Overheat safety protection', 'Features\r\nâ€¢	Capacity: 29 Liters\r\nâ€¢	Ideal to use in all weathers\r\nâ€¢	Output Power: 900W\r\nâ€¢	Voltage: 230V, 50 Hz\r\n', '17.jpg'),
(44, 'Haier HRF-336 ECS Refrigerator', 6, 'Haier', '2018', 32990, 35990, 10, 'Product details of Haier HRF-336 ECS - E-Star Series Top Mount Refrigerator - 306 L\r\nâ€¢	Brand Warranty\r\nâ€¢	306L / 13 cu.ft.\r\nâ€¢	Energy Saving up to 55%\r\nâ€¢	Free Standing Type\r\nâ€¢	Top Mount\r\nâ€¢	Direct Cool Cooling Technology\r\nâ€¢	Conventional Technology\r\nâ€¢	E-Star Series\r\n', '- E-Star Series Top Mount Refrigerator - 306 L', '19.jpg'),
(45, 'Rose Gold And Silver Chronograph Stainless Steel W', 3, 'Romanson', '2018', 20000, 22190, 10, 'Romanson is well identified all around the world for its innovative, high class and luxurious watch collection.\r\nGo elegant by including TM6A28H MJ WH - Chronograph Wrist Watch for Men to your closet. This watch is an ultimate accessory that meet your fashion necessities. It satisfies your bold attire by adding perfection to it. Get this appealing piece to your collection and get the must-prepossessing look you need!\r\nSpecifications of Rose Gold And Silver Chronograph Stainless Steel Wrist Watch For Men - Tm6A28H Mj Wh\r\nâ€¢	Brand\r\nRomanson\r\nâ€¢	SKU\r\nRO173FA1NBY9CNAFAMZ-2346656\r\nâ€¢	Watch\'s water resistance\r\n5 ATM\r\nâ€¢	Warranty Policy EN\r\n1 Year International Warranty\r\nWhatâ€™s in the box\r\n1 x Rose Gold And Silver Chronograph Stainless Steel Wrist Watch For Men - Tm6A28H Mj Wh', 'â€¢	Display: Analog\r\nâ€¢	Mechanism: Swiss Quartz\r\nâ€¢	Dial color: Silver\r\nâ€¢	Dial shape: Round\r\nâ€¢	Case material: Stainless Steel\r\nâ€¢	Case Color: Rose Gold & Silver\r\nâ€¢	Band material: Stainless Steel\r\nâ€¢	Band color: Rose Gold & SIlver\r\nâ€¢	Glass: Sapphire\r\nâ€¢	Water resistance: 50 meters\r\nâ€¢	Wrist watch for men', '21.jpg'),
(46, 'Brown Leather Wallet for Men - 0532-4HAMIZ-06', 3, 'Denizen', '2018', 1000, 1190, 10, 'â€¢	Color: Brown\r\nâ€¢	Material: Leather\r\nâ€¢	Multiple pocket design\r\nâ€¢	Compact size\r\nBrown Leather Wallet for Men - 0532-4HAMIZ-06\r\nSpecifications of Brown Leather Wallet for Men - 0532-4HAMIZ-06\r\nâ€¢	Brand\r\nDenizen\r\nâ€¢	SKU\r\nEN460FA135VWSNAFAMZ-1987783', 'Leather Wallet for Men - 0532-4HAMIZ-06', '23.jpg'),
(47, 'Band 2 - Fitness Band - Black', 3, 'MI', '2017', 3000, 3300, 10, 'â€¢	Time monitor, Heart rate, Steps count\r\nâ€¢	Splash Resistance (IP 67)\r\nâ€¢	Touch Button\r\nâ€¢	Sleep Monitor: monitors the sleep pattern\r\nâ€¢	Call & Message alert\r\nâ€¢	20 days battery', 'Mi band 2 A fitness tracker', '24.jpg'),
(48, 'Surf Excel washing powder 500g', 7, 'Uniliver', '2018', 110, 145, 10, 'Surf Excel believes that every stain a child brings home is an experience; a value learned in process of getting dirty! â€œDaag tu Achhe Hain (Dirt is good)â€ champions the theory that if a child learns something and gets dirty in the process, then those stains are good.\r\nSpecifications of Surf Excel washing powder 500g\r\nâ€¢	Brand\r\nSurf Excel\r\nâ€¢	SKU\r\nSU252OTFGR3WNAFAMZ-1509655', 'â€¢	100% tough stain removal faster\r\nâ€¢	Improved, long lasting fragrance', '31.jpg'),
(49, 'Head & Shoulders Shampoo Citrus Fresh 200ml', 7, 'Uniliver', '2018', 160, 195, 10, 'â€¢	Head & Shoulders Shampoo Citrus Fresh 200ml\r\nHead & Shoulders Shampoo Citrus Fresh 200ml\r\nSpecifications of Head & Shoulders Shampoo Citrus Fresh 200ml\r\nâ€¢	Brand\r\nHead & Shoulders\r\nâ€¢	SKU\r\nHE119HBHLN8LNAFAMZ-5094278\r\n', 'For dandruff free hairs', '32.jpg'),
(50, 'Green Tea Pure Green 45gm (30 Tea Bags)', 7, 'Lipton', '2018', 80, 94, 10, 'Green tea aids digestion by boosting your body\'s natural metabolic rate which may assist weight loss and reduce abdominal fat. Green Tea contains Theanine which promotes relaxation. Its powerful antioxidants help fight ageing and various types of cancer,\r\nSpecifications of Green Tea Pure Green 45gm (30 Tea Bags)\r\nâ€¢	Brand\r\nLipton\r\nâ€¢	SKU\r\nTA011OTFW7T3NAFAMZ-2573763\r\n', 'â€¢	Green Tea Pure Green\r\nâ€¢	Premium quality\r\nâ€¢	45gm (30 Tea Bags)\r\nâ€¢	Items may be restricted per customer', '33.jpg');

--
-- Triggers `product`
--
DELIMITER $$
CREATE TRIGGER `deletelog` BEFORE DELETE ON `product` FOR EACH ROW INSERT into deleteproduct_log values(null,old.pid,old.pname,NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateprice` BEFORE UPDATE ON `product` FOR EACH ROW INSERT into price_history VALUES (null,old.pid,old.pname,old.sell_price,NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `cno` int(20) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`cno`, `category_name`) VALUES
(2, 'CAMERA'),
(3, 'Accessories'),
(4, 'Mobiles'),
(5, 'Men\'s Clothing'),
(6, 'Appliances'),
(7, 'Grocery');

--
-- Triggers `product_category`
--
DELIMITER $$
CREATE TRIGGER `category_history` AFTER DELETE ON `product_category` FOR EACH ROW INSERT into category_history values (null,old.cno,old.category_name,NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `product_quantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`report_id`, `product_id`, `order_id`, `product_price`, `product_quantity`) VALUES
(1, 36, 14, 3200, 1),
(2, 38, 15, 1200, 1),
(3, 37, 16, 1200, 1),
(6, 36, 17, 3200, 1),
(8, 38, 18, 1200, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rider`
--

CREATE TABLE `rider` (
  `rider_ID` int(20) NOT NULL,
  `rname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenum` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rider`
--

INSERT INTO `rider` (`rider_ID`, `rname`, `email`, `phonenum`) VALUES
(1, 'ali', 'ali@gmail.com', '030012345678'),
(2, 'ahmed', 'ahmed@gmail.com', '031212345689'),
(3, 'taha', 'taha@gmail.com', '03454783654'),
(4, 'farhan', 'farhan@gmail.com', '03009876543'),
(5, 'ghafoor', 'ghafoor@gmail.com', '03119283746'),
(6, 'junaid', 'junaid@gmail.com', '03339191854'),
(7, 'anas', 'anas@gmail.com', '03459911922'),
(8, 'ahsan', 'ahsan@gmail.com', '03435646781');

--
-- Triggers `rider`
--
DELIMITER $$
CREATE TRIGGER `oldemployee` BEFORE DELETE ON `rider` FOR EACH ROW INSERT into old_rider VALUES (null,old.rider_id,old.rname,NOW())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `category_history`
--
ALTER TABLE `category_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `addressID` (`addressID`);

--
-- Indexes for table `deleteproduct_log`
--
ALTER TABLE `deleteproduct_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`discount_id`);

--
-- Indexes for table `dukan_order`
--
ALTER TABLE `dukan_order`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `rider_id` (`rider_id`),
  ADD KEY `custID` (`custID`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `old_rider`
--
ALTER TABLE `old_rider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_statuscheck`
--
ALTER TABLE `order_statuscheck`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price_history`
--
ALTER TABLE `price_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `category_no` (`category_no`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `rider`
--
ALTER TABLE `rider`
  ADD PRIMARY KEY (`rider_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `AID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category_history`
--
ALTER TABLE `category_history`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `deleteproduct_log`
--
ALTER TABLE `deleteproduct_log`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `discount_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dukan_order`
--
ALTER TABLE `dukan_order`
  MODIFY `orderID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `old_rider`
--
ALTER TABLE `old_rider`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_statuscheck`
--
ALTER TABLE `order_statuscheck`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `price_history`
--
ALTER TABLE `price_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `cno` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rider`
--
ALTER TABLE `rider`
  MODIFY `rider_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`addressID`) REFERENCES `address` (`AID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dukan_order`
--
ALTER TABLE `dukan_order`
  ADD CONSTRAINT `dukan_order_ibfk_1` FOREIGN KEY (`custID`) REFERENCES `customer` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_no`) REFERENCES `product_category` (`cno`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reports_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `dukan_order` (`orderID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
