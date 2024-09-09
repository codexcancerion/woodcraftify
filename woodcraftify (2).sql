-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2024 at 11:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `woodcraftify`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(255) NOT NULL,
  `categoryDescription` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryId`, `categoryName`, `categoryDescription`) VALUES
(2, 'Tables', 'A variety of tables ranging from dining to coffee tables, crafted from Cordilleran wood with traditional designs.'),
(3, 'Chairs', 'Handcrafted wooden chairs, benches, and rocking chairs, offering comfort and style with a touch of tradition.'),
(4, 'Cabinets', 'Spacious wooden cabinets and wardrobes, perfect for storage, with intricate Cordilleran carvings.'),
(5, 'Shelves', 'Multi-layered wooden shelves for storage and display, blending functionality with traditional craftsmanship.'),
(6, 'Beds', 'Traditional wooden bed frames with beautiful Cordilleran carvings, providing both comfort and style.'),
(7, 'Sculptures', 'Intricately carved wooden sculptures inspired by Cordilleran culture, symbolizing strength and tradition.'),
(15, 'Wall Art', 'Beautifully carved wooden wall art and traditional wall hangings that add a cultural touch to any space.'),
(16, 'Lamps', 'Eco-friendly bamboo and wooden lamps that bring warmth and natural beauty to any room.'),
(17, 'Containers', 'Handwoven baskets and wooden boxes, perfect for storage or decoration, made from natural materials.'),
(18, 'Home DÃ©cor', 'A variety of wooden home dÃ©cor items, including candle holders, bowls, and room dividers, crafted with traditional designs.');

-- --------------------------------------------------------

--
-- Table structure for table `featured_products`
--

CREATE TABLE `featured_products` (
  `id` int(11) NOT NULL,
  `shopId` varchar(10) DEFAULT NULL,
  `productId` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `featured_products`
--

INSERT INTO `featured_products` (`id`, `shopId`, `productId`) VALUES
(17, NULL, '12'),
(18, NULL, '14'),
(19, NULL, '29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `shopId` varchar(10) DEFAULT NULL,
  `productName` varchar(255) NOT NULL,
  `productDescription` text DEFAULT NULL,
  `productImage` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `availableQuantity` int(11) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `dimensionsId` varchar(10) DEFAULT NULL,
  `materials` text DEFAULT NULL,
  `length` int(10) DEFAULT NULL,
  `width` int(10) DEFAULT NULL,
  `height` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `shopId`, `productName`, `productDescription`, `productImage`, `price`, `availableQuantity`, `category`, `dimensionsId`, `materials`, `length`, `width`, `height`) VALUES
(12, NULL, 'Cordilleran Wooden Dining Table', 'A handcrafted wooden dining table made from sustainable Cordilleran wood, featuring traditional carvings.', 'Cordilleran Wooden Dining Table', 15000.00, 5, 'Tables', 'D001', 'Cordilleran Wood', 200, 100, 75),
(14, NULL, 'Bontoc Wooden Bench', 'A sturdy and elegantly designed bench inspired by Bontoc craftsmanship.', 'Bontoc Wooden Bench', 8000.00, 10, 'Chairs', 'D001', 'Bamboo, Cordilleran Wood', 150, 50, 45),
(15, NULL, 'Ifugao Wooden Sculpture', 'An intricately carved Ifugao wooden sculpture symbolizing strength and resilience.', 'Ifugao Wooden Sculpture', 5000.00, 20, 'Sculptures', 'D001', 'Cordilleran Wood', 30, 20, 40),
(16, NULL, 'Sagada Wooden Shelf', 'A multi-layered wooden shelf that blends functionality with Sagadas artistic touch.', 'Sagada Wooden Shelf', 12000.00, 7, 'Shelves', 'D001', 'Wood', 100, 40, 180),
(17, NULL, 'Kalinga Wooden Chair', 'A traditional Kalinga chair with intricate woodwork and a comfortable design.', 'Kalinga Wooden Chair', 6000.00, 12, 'Chairs', 'D001', 'Wood', 70, 70, 90),
(18, NULL, 'Mountain Province Wooden Cabinet', 'A solid wood cabinet with ample storage, showcasing the craftsmanship of Mountain Province.', 'Mountain Province Wooden Cabinet', 25000.00, 6, 'Cabinets', 'D001', 'Wood', 120, 60, 200),
(19, NULL, 'Cordilleran Wooden Wall Art', 'A beautifully carved wall art piece depicting traditional Cordilleran patterns.', 'Cordilleran Wooden Wall Art', 4500.00, 15, 'Wall Art', 'D001', 'Wood', 100, 2, 50),
(20, NULL, 'Baguio Wooden Rocking Chair', 'A classic rocking chair made from durable wood, offering comfort and style.\n', 'Baguio Wooden Rocking Chair', 9000.00, 6, 'Chairs', 'D001', 'Wood', 110, 60, 100),
(21, NULL, 'Cordilleran Bamboo Lamp', 'An eco-friendly bamboo lamp that adds warmth and a natural touch to any space.', 'Cordilleran Bamboo Lamp', 3000.00, 10, 'Lamps', 'D001', 'Wood, Bamboo', 20, 20, 60),
(22, NULL, 'Traditional Wooden Bed', 'A traditional wooden bed frame with beautiful Cordilleran carvings, perfect for any bedroom.', 'Traditional Wooden Bed', 18000.00, 5, 'Beds', 'D001', 'Wood', 200, 160, 50),
(23, NULL, 'Handwoven Basket', 'A beautifully handwoven basket made from natural materials, perfect for storage or decoration.', 'Handwoven Basket', 2500.00, 20, 'Containers', 'D001', 'Bamboo, Abaca', 50, 50, 30),
(24, NULL, 'Wooden Jewelry Box', 'A small wooden jewelry box with intricate carvings, perfect for storing your precious items.', 'Wooden Jewelry Box', 3500.00, 15, 'Containers', 'D001', 'Wood', 20, 15, 10),
(26, NULL, 'Cordilleran Wooden Bedside Table', 'A handcrafted wooden bedside table with a minimalist design and natural wood finish.', 'Cordilleran Wooden Bedside Table', 6000.00, 8, 'Tables', 'D001', 'Wood', 50, 40, 60),
(27, NULL, 'Bamboo Candle Holder', 'A bamboo candle holder that adds a touch of nature to any room, perfect for creating a cozy ambiance.', 'Bamboo Candle Holder', 1200.00, 25, 'Home DÃ©cor', 'D001', 'Bamboo', 15, 15, 20),
(28, NULL, 'Cordilleran Wooden Wardrobe', 'A spacious wooden wardrobe with traditional Cordilleran carvings, providing both style and functionality.', 'Cordilleran Wooden Wardrobe', 28000.00, 4, 'Cabinets', 'D001', 'Wood', 180, 60, 220),
(29, NULL, 'Ifugao Carved Wooden Bowl', 'A beautifully carved wooden bowl inspired by Ifugao culture, perfect for serving or decoration.', 'Ifugao Carved Wooden Bowl', 3000.00, 18, 'Home DÃ©cor', 'D001', 'Wood', 30, 30, 15),
(30, NULL, 'Wooden Room Divider', 'A foldable wooden room divider with intricate carvings, offering both privacy and style.', 'Wooden Room Divider', 10000.00, 6, 'Home DÃ©cor', 'D001', 'Wood', 150, 2, 180),
(32, NULL, 'Cordilleran Wall Hanging', 'A traditional wall hanging made from natural fibers and wooden elements, perfect for adding a cultural touch to your home.', 'Cordilleran Wall Hanging', 3500.00, 12, 'Wall Art', 'D001', 'Wood, Fibers', 80, 2, 120);

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `shopId` int(11) NOT NULL,
  `shopName` varchar(255) NOT NULL,
  `shopDescription` text DEFAULT NULL,
  `logoType` varchar(255) DEFAULT NULL,
  `logoMark` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `contactNumber` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `story` text DEFAULT NULL,
  `heroLine` varchar(255) DEFAULT NULL,
  `heroLineHighlight` varchar(255) DEFAULT NULL,
  `heroDescription` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shopId`, `shopName`, `shopDescription`, `logoType`, `logoMark`, `location`, `contactNumber`, `email`, `mission`, `story`, `heroLine`, `heroLineHighlight`, `heroDescription`) VALUES
(1, 'Woodcraftify', 'Crafting Excellence, Preserving Traditions, Shaping the Future', 'woodcraftify_logotype.png', 'woodcraftify_logomark.png', 'Baguio City, Philippines', '+63 912 345 6789', 'contact@woodcrafts.ph', 'Our mission is to craft furniture and decor that embody authenticity and sustainability, while honoring the cultural heritage of the Cordilleras. We strive to deliver products that are not only beautiful but also functional and durable.', 'WoodCraftify is a homegrown brand dedicated to preserving the rich heritage of Cordilleran craftsmanship. With every piece we create, we tell a story of tradition, sustainability, and unparalleled quality. Our journey began with a vision to connect skilled artisans with clients who appreciate the art of woodworking.', 'Wazzup', 'MASTER', 'In Woodcraftify, we help you furnish your homes with quality crafts and furnitures.');

-- --------------------------------------------------------

--
-- Table structure for table `shopvalues`
--

CREATE TABLE `shopvalues` (
  `valueId` varchar(10) NOT NULL,
  `valueName` varchar(255) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shopvalues`
--

INSERT INTO `shopvalues` (`valueId`, `valueName`, `description`) VALUES
('V001', 'Quality', 'We deliver products that stand the test of time'),
('V002', 'Craftmanship', 'Every detail is carefully crafted by skilled artisans.'),
('V003', 'Artistry', 'Every piece, a work of art.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`),
  ADD KEY `categoryName` (`categoryName`);

--
-- Indexes for table `featured_products`
--
ALTER TABLE `featured_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `productName` (`productName`),
  ADD KEY `price` (`price`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`shopId`),
  ADD KEY `shopName` (`shopName`),
  ADD KEY `location` (`location`);

--
-- Indexes for table `shopvalues`
--
ALTER TABLE `shopvalues`
  ADD PRIMARY KEY (`valueId`),
  ADD KEY `valueName` (`valueName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `featured_products`
--
ALTER TABLE `featured_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `shopId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
