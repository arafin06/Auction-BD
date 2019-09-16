-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2019 at 12:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `biddings`
--

CREATE TABLE `biddings` (
  `id` int(10) UNSIGNED NOT NULL,
  `bid_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `category_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Mobile', 'Mobile, Tablets, Phones etc', 'category-image/mobile01.jpg', 1, '2018-10-24 08:39:33', '2018-10-24 08:39:33'),
(2, 'Camera', 'Camera, Camera Lens, Try pod, Charger, battery etc', 'category-image/camera.jpg', 1, '2018-10-24 08:55:20', '2018-10-24 08:55:20'),
(3, 'Music Instruments', 'All type of music instruments', 'category-image/music instruments.jpg', 1, '2018-10-24 08:59:57', '2018-10-24 08:59:57'),
(4, 'Laptop', 'All brand laptops', 'category-image/laptops.jpg', 1, '2018-10-24 09:13:46', '2018-10-24 09:13:46'),
(5, 'Desktop', 'Full Desktop set or Parts', 'category-image/Desktop.jpg', 1, '2018-10-24 09:54:35', '2018-10-24 09:54:35'),
(6, 'Antiques', 'Antiques Items', 'category-image/Antique-Sign.jpg', 1, '2018-10-24 10:02:46', '2018-10-24 10:02:46'),
(7, 'Art', 'All types of Art', 'category-image/Art.jpg', 1, '2018-10-24 10:05:36', '2018-10-24 10:05:36'),
(8, 'Books', 'All type of Books collection', 'category-image/physical-books-Herok.jpg', 1, '2018-10-24 10:10:46', '2018-10-24 10:10:46'),
(9, 'Collectibles', 'Collectibles', 'category-image/Collectibles.jpg', 1, '2018-10-24 10:13:00', '2018-10-24 10:13:00'),
(10, 'Crafts & Hobbies', 'Crafts & Hobbies', 'category-image/Crafts & Hobbies.jpg', 1, '2018-10-24 10:14:32', '2018-10-24 10:14:32'),
(11, 'Jewelry', 'Jewelry & Gemstones', 'category-image/Jewelry & Gemstones.jpg', 1, '2018-10-24 10:15:47', '2018-10-24 10:15:47'),
(12, 'Religious Items', 'Religious Items', 'category-image/Religious Items.jpg', 1, '2018-10-24 10:18:53', '2018-10-24 10:18:53'),
(13, 'Sports', 'Sports Items', 'category-image/819605100-612x612.jpg', 1, '2018-10-24 10:21:04', '2018-10-24 10:21:04'),
(14, 'Vehicles', 'Cars Bike etc', 'category-image/car.jpg', 1, '2018-10-24 10:25:09', '2018-10-24 10:25:09'),
(15, 'Bike', 'Bike', 'category-image/suzuki-gixxer.jpg', 1, '2018-10-24 16:37:32', '2018-10-24 16:37:32');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `mobile`, `email`, `address`, `nid`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Niaz Md. Arafin Haque', '01779337180', 'arafin6@gmail.com', 'mirpur dhaka', '23456789', '$2y$10$f7SUt65nJhUyinhrZugGxe84qo9xwOiBKKMKU8OAjsIh86FrUup6a', '2019-09-16 04:20:09', '2019-09-16 04:20:09');

-- --------------------------------------------------------

--
-- Table structure for table `front_users`
--

CREATE TABLE `front_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(11) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_06_110445_create_categories_table', 1),
(4, '2018_08_06_131003_create_products_table', 2),
(5, '2018_08_06_131945_create_products_table', 3),
(6, '2018_09_01_114037_create_front_users_table', 4),
(7, '2018_10_17_153545_create_ashiks_table', 5),
(8, '2018_10_23_143205_create_clients_table', 6),
(9, '2018_10_31_194323_create_messages_table', 7),
(10, '2018_10_31_204055_create_biddings_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double NOT NULL,
  `product_bid_date` date NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_description`, `product_price`, `product_bid_date`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Xiaomi Note 5 Pro', 'Xiaomi Note 5 Pro( Ram: 6GB \\ Rom: 64GB)', 27000, '2019-01-01', 'product-image/Xiaomi_Redmi_Note_5_Pro_L_1.jpg', 1, '2018-10-24 08:43:13', '2018-10-24 08:43:13'),
(2, 1, 'Apple iPhone 7', 'Highlights 4.7-inch (diagonal) Retina HD display with 1334-by-750 resolution and wide color 3D Touch New 12MP camera, optical image stabilization, Quad-LED True Tone flash, and Splash, water, and dust resistant¹ A10 Fusion chip with integrated M10 motion coprocessor 4K video recording at 30 fps and slo-mo video recording for 1080p at 120 fps 7MP FaceTime HD camera with Retina Flash Touch ID fingerprint sensor built into the new Home button LTE Advanced² up to 450Mbps and 802.11a/b/g/n/ac Wi-Fi with MIMO iOS 10 and iCloud Available in jet black, black, silver, gold, and rose gold³iPhone 7 features an all-new 12 MP camera with an ƒ/1.8 aperture for great low-light photos and 4K video. Optical image stabilization. A 4.7-inch Retina HD display with wide color and 3D Touch. An A10 Fusion chip for up to 2x faster performance than iPhone 6. Touch ID. Faster LTE.² The longest battery life in an iPhone. Immersive stereo sound, splash and water resistant,¹ and iOS 10.An entirely new camera system. The brightest, most colorful iPhone display ever. The fastest performance and best battery life in an iPhone. Water and splash resistant.¹ And stereo speakers. Every bit as powerful as it looks—this is iPhone 7.¹iPhone 7 and iPhone 7 Plus are splash, water, and dust resistant and were tested under controlled laboratory conditions with a rating of IP67 under IEC standard 60529. Splash, water, and dust resistance are not permanent conditions, and resistance might decrease as a result of normal wear. Do not attempt to charge a wet iPhone; refer to the user guide for cleaning and drying instructions. Liquid damage not covered under warranty. ²Data plan required. LTE Advanced and LTE are available in select markets and through select carriers. Speeds are based on theoretical throughput and vary based on site conditions and carrier. For details on LTE support, contact your carrier and see www.apple.com/iphone/LTE. ³iPhone 7 and iPhone 7 Plus in jet black are only available in 128GB and 256GB models. iPhone 7 features an all-new 12 MP camera with an ƒ/1.8 aperture for great low-light photos and 4K video. Optical image stabilization. A 4.7-inch Retina HD display with wide color and 3D Touch. An A10 Fusion chip for up to 2x faster performance than iPhone 6. Touch ID. Faster LTE.² The longest battery life in an iPhone. Immersive stereo sound, splash and water resistant,¹ and iOS 10.An entirely new camera system. The brightest, most colorful iPhone display ever. The fastest performance and best battery life in an iPhone. Water and splash resistant.¹ And stereo speakers. Every bit as powerful as it looks-this is iPhone 7.¹iPhone 7 and iPhone 7 Plus are splash, water, and dust resistant and were tested under controlled laboratory conditions with a rating of IP67 under IEC standard 60529. Splash, water, and dust resistance are not permanent conditions, and resistance might decrease as a result of normal wear. Do not attempt to charge a wet iPhone; refer to the user guide for cleaning and drying instructions. Liquid damage not covered under warranty. ²Data plan required. LTE Advanced and LTE are available in select markets and through select carriers. Speeds are based on theoretical throughput and vary based on site conditions and carrier. For details on LTE support, contact your carrier and see www.apple.com/iphone/LTE. ³iPhone 7 and iPhone 7 Plus in jet black are only available in 128GB and 256GB models. Dimensions (Overall): 5.44 inches (L) x 2.64 inches (W) x .28 inches thick Weight: 4.87 ounces Product Model: IPhone 7 Camera Features: Auto Flash, Face Detection Technology, Geotagging, HDR imaging, Image Optimization Functions, front- and rear-facing camera Computer Features: Mobile hotspot, haptic feedback, Fingerprint Reader, Orientation Sensor, Picture-in-Picture, Voice Control, pressure-sensitive touchscreen, side-by-side multitasking Electronics Condition: New Compatible Service Providers: AT&T, Verizon, Sprint Connectivity: Apple Lightning Connector Operating System Compatibility: Apple iOS Contract Type: Contract Megapixels: 12 MP Screen Size: 4.7 inches Video Resolution: 4K Battery: Required, included Warranty: 1 year limited warranty. To obtain a copy of the manufacturer\'s or supplier\'s warranty for this item, please call Target Guest Services at 1-800-591-3869. TCIN: 51538705 UPC: 190198066732 Item Number (DPCI): 255-14-0749', 40000, '2019-03-31', 'product-image/iphone7.jpg', 1, '2018-10-24 08:48:08', '2018-10-24 08:48:08'),
(3, 1, 'Galaxy S6 edge', 'Galaxy S6 edge 64GB ROM & 3GB RAM', 18000, '2019-10-02', 'product-image/samsung.jpg', 1, '2018-10-24 08:53:23', '2018-10-24 08:53:23'),
(4, 2, 'Nikon Coolpix P510', 'Nikon Coolpix P510 fixed lens DSLR with 16 megapixel camera.', 21000, '2019-10-03', 'product-image/288682-nikon-coolpix-p510.jpg', 1, '2018-10-24 08:57:49', '2018-10-24 08:57:49'),
(5, 3, 'Signature Guitar Indian', 'Indian Signature Acoustic Guitar', 5200, '2019-10-01', 'product-image/signature.jpg', 1, '2018-10-24 09:03:12', '2018-10-24 09:03:12'),
(6, 3, 'Ddrum', 'Ddrum D120B 5-Piece Drum Set', 11000, '2019-02-28', 'product-image/H78655000001000-00-500x500.jpg', 1, '2018-10-24 09:05:48', '2018-10-24 09:05:48'),
(7, 4, 'Asus', '8GB RAM, 1TB HDD, 17\" display, 2GB Nvidia Graphics,Intel i5 7100 Processor, 1 year Warranty', 41000, '2019-02-03', 'product-image/asus.jpg', 1, '2018-10-24 09:16:10', '2018-10-24 09:16:10'),
(8, 4, 'Dell Vostro', 'Dell Laptop from DIU for sell, 4GB RAM, i3 Processor, 500GB HDD, Intel internal 512MB GPU, 1.5 year used', 25000, '2019-10-01', 'product-image/dell.png', 1, '2018-10-24 09:19:26', '2018-10-24 09:19:26'),
(9, 5, 'Acer Veriton', 'Acer Veriton M200H61 Desktop ( i7,500GB, 8GB RAM ,2GB Graphics)', 60000, '2019-12-12', 'product-image/acer-desk1-1000x1000.jpg', 1, '2018-10-24 09:57:05', '2018-10-24 09:57:05'),
(10, 5, 'GeForce GTX 1050Ti', 'GeForce GTX 1050 Ti PH, 4096 MB GDDR5', 19900, '2019-05-01', 'product-image/gcas-185_gcas_185_1g_800x800.jpg', 1, '2018-10-24 09:59:05', '2018-10-24 09:59:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AR Chowdhury', 'ashiq@gmail.com', '$2y$10$YKfqYjJFPMo9zOPq6iuAgOSKtaA9KWctYbn98TiHLe9eAX5oOt3Pq', 'pl5daTcMlauSPNggXq5zd5gQqADsXiipzOpTRetesL3v7eFYv4w3pb6mnUdD', '2018-08-06 05:36:43', '2018-08-06 05:36:43'),
(2, 'Niaz MD Arafin Haque', 'arafin6@gmail.com', '$2y$10$MmGQLhGKioPX2sRRaiSIjew0UGD/qsempguiIyawwvrV4cGqIJpxu', 'toghETuSr9siImDaYgKWodpDThufz01oLCIUPpgAH9Drd2MwOD2Iomuwqu1P', '2019-09-16 04:15:22', '2019-09-16 04:15:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biddings`
--
ALTER TABLE `biddings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `front_users`
--
ALTER TABLE `front_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biddings`
--
ALTER TABLE `biddings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `front_users`
--
ALTER TABLE `front_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
