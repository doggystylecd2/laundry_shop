-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table laundry_shop.access_token
CREATE TABLE IF NOT EXISTS `access_token` (
  `token_id` int NOT NULL AUTO_INCREMENT,
  `access_token` varchar(75) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`token_id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table laundry_shop.access_token: ~63 rows (approximately)
INSERT IGNORE INTO `access_token` (`token_id`, `access_token`, `user_id`) VALUES
	(48, '1897ff090b8b072b387525b03b0111b4', 1),
	(49, '32d8e8bbe83760377fb2b0b0f0d766bd', 68),
	(50, '816d2782e5ca50bea13b7d03a3decede', 69),
	(51, '8f7cf42d523aea0fa2b889f5fa26a704', 68),
	(52, '5f9072a2ce89870af0326c59b0b1276a', 69),
	(53, '919de3c7eb5abb9b9f8fb9b5c81029f7', 1),
	(54, '5c06a184d5415cbcebcff4a27d93f389', 68),
	(55, 'c722ac9649068cfdd35071fbb8eef480', 69),
	(56, '06187eba7d8425d738b462cbe14ada65', 68),
	(57, '65f3042f0b3553b579a0776ae9797681', 69),
	(58, 'c34d698f887fb12768121de1eb807c43', 68),
	(59, 'ffc75150fa631d1130463b4031e6cc41', 70),
	(60, 'cfb34cc4e1bf9c58b262b255fcddd3d5', 70),
	(61, 'da452b6da870164b33a704e1e4e24316', 1),
	(62, '0296f9dba87af203eae9fc6470d051e3', 1),
	(63, 'ad5875b48a81299be754439ec6d68843', 68),
	(64, 'd02c230064e985bee03af640be2d0fb3', 69),
	(65, '52e34b88b159b9a56a596ec8d54dd311', 70),
	(66, 'fd44f913dce00ba5f8c69c6f777a4ed5', 1),
	(67, 'a2211a455dcf1f651812aeba1b1df0ba', 69),
	(68, '80809f7a48c0542be0f76f8ab780a222', 68),
	(69, 'a6eacacbad29c7a98a927b9e07b1af48', 68),
	(70, 'ccf33d98d14671f0c3d62a3004482d62', 69),
	(71, '05c7c86eab319f268abfa9c1ded9de10', 68),
	(72, '5c0a5b0032758469271b1ce2aa780022', 69),
	(73, '7259465a196c332d8dd111ecff5e046d', 68),
	(74, 'd558e7cb66a65b38dbfbb584ecae28f3', 69),
	(75, 'de440c6977f78d59301bf42d7a5af69e', 69),
	(76, '66163150b2ba07ba3d30569de2aea98f', 68),
	(77, 'abcf01fb67509a35e4b30b719d87171c', 70),
	(78, '7a54643d95cac4d3b00034de5842e462', 68),
	(79, 'd8b1c0c251111a8f43fd4278aaf90b69', 70),
	(80, '808c5fad17282b9c5c54a61ba3d32ca1', 68),
	(81, '52ee032252a1b4510a3ba1498ef95f97', 69),
	(82, 'eb07c695e997e4aff11cd5475808085c', 68),
	(83, '08bf4272eb3c273d4ad925709096cdc8', 70),
	(84, '5954d42ca174de01bf314e65c608db44', 68),
	(85, '52c555af06882d1a6a502f9ad6e470e3', 69),
	(86, 'cc1f458c19576eb77bcceb78855f0b1e', 70),
	(87, '4ff6a1fedc38fab69d69614b1ab08994', 69),
	(88, '105dec68982d9d66bd01fefe8bf8757d', 68),
	(89, '0ad55f83be2df0c3c092d538f44d3c9b', 70),
	(90, '93be625abe8ef080a8984b5cdbc8960e', 69),
	(91, 'd14be24ce32d26526e2eecba1456932a', 68),
	(92, '7d9fde26f33146141c60f904adca4160', 70),
	(93, '745fb5bf26844d76118662f3876f146c', 69),
	(94, '747ebc07975f215c2d05167b26f0f3a4', 68),
	(95, '722b792302d3f01971ca6052937a434e', 70),
	(96, '81d7aeffd8d4860dfe1a549f60ab4667', 69),
	(97, '90a0918d845f3fbaf7e1ee4704a11a4e', 69),
	(98, 'b64e73f0ab04ebd89eed013a55608ab1', 71),
	(99, 'bb388a679ed72cf88daaf5acda696c3c', 1),
	(100, 'ef18531ea8cbc7596613874e75833658', 71),
	(101, 'f393af393979fbb2b76f125b64dd7133', 72),
	(102, '4c26862e1c78a3752c580b66c948cb97', 1),
	(103, '9c52cdbf4c0df1167ccb7112a29c6e8c', 72),
	(104, '4dcaec71302f3d60ebfd633c5a931473', 73),
	(105, 'fba604df887f805e888485d946b856f0', 71),
	(106, 'b6873ac2c479563a7bd65350b29bf432', 72),
	(107, '70a85e0d190d7db3e9396dbcb415b4c8', 73),
	(108, 'c0f97e7bf3f0f819323102140094d630', 68),
	(109, '33be5b972c6a95a6a26d0fbfc9bf4720', 71),
	(110, '225fd1c6874cd27c5e890b367cd811d6', 73),
	(111, '04f317aebbfb1e0803cca8065a423e28', 71),
	(112, '47d6ead508adcc3b3844a86d85e9c63c', 1),
	(113, 'f972cc4ac990ec461b9217d56e6fdf11', 74),
	(114, '5d01566a2291309cc0c5b9a703a44096', 1),
	(115, '3ef475ce43796f891a067a8cd496380b', 69),
	(116, '3b88566d9f684d403bfd2a030bad7cac', 70),
	(117, 'dbde7954894a5ac417f6e708bec128ce', 68),
	(118, '912b2d71947595ece03124b2df4d660a', 1),
	(119, '7d98ad29175896b237a9d99e636b261a', 73),
	(120, '332a3c3b11282a3b73c5d0e48a30b0e6', 68);

-- Dumping structure for table laundry_shop.address_info
CREATE TABLE IF NOT EXISTS `address_info` (
  `id_address_info` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_address_info`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table laundry_shop.address_info: ~0 rows (approximately)

-- Dumping structure for table laundry_shop.approval_users
CREATE TABLE IF NOT EXISTS `approval_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table laundry_shop.approval_users: ~4 rows (approximately)
INSERT IGNORE INTO `approval_users` (`id`, `type`) VALUES
	(1, 'Confirmed'),
	(2, 'Enable'),
	(3, 'Disapproved'),
	(5, 'Pending');

-- Dumping structure for table laundry_shop.barangay
CREATE TABLE IF NOT EXISTS `barangay` (
  `barangay_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`barangay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table laundry_shop.barangay: ~12 rows (approximately)
INSERT IGNORE INTO `barangay` (`barangay_id`, `name`) VALUES
	(1, 'District I'),
	(2, 'District II'),
	(3, 'District III'),
	(4, 'District IV'),
	(5, 'District V'),
	(6, 'District VI'),
	(7, 'District VII'),
	(8, 'District VIII'),
	(9, 'District IX'),
	(10, 'District X'),
	(11, 'District XI'),
	(12, 'District XII');

-- Dumping structure for table laundry_shop.booking_transaction
CREATE TABLE IF NOT EXISTS `booking_transaction` (
  `transaction_id` int NOT NULL AUTO_INCREMENT,
  `booking_id` int DEFAULT NULL,
  `shop_available_id` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `total_amount` int DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`transaction_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table laundry_shop.booking_transaction: ~2 rows (approximately)
INSERT IGNORE INTO `booking_transaction` (`transaction_id`, `booking_id`, `shop_available_id`, `quantity`, `total_amount`, `created_at`, `updated_at`) VALUES
	(36, 9, 5, 1, 300, '2022-12-22 15:56:22', '2022-12-22 15:56:22'),
	(37, 9, 6, 1, 200, '2022-12-22 15:56:22', '2022-12-22 15:56:22');

-- Dumping structure for table laundry_shop.courier_details
CREATE TABLE IF NOT EXISTS `courier_details` (
  `idcourier_details` int NOT NULL AUTO_INCREMENT,
  `p_info_id` int DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `driver_license` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcourier_details`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table laundry_shop.courier_details: ~0 rows (approximately)
INSERT IGNORE INTO `courier_details` (`idcourier_details`, `p_info_id`, `resume`, `driver_license`, `description`, `created_at`) VALUES
	(4, 51, 'http://localhost:7070/DriverLicense/marvinvillanea-1671433906.png', 'http://localhost:7070/DriverLicense/marvinvillanea-1671433906.png', 'Tell me about your self', '2022-12-19 07:11:46'),
	(5, 53, 'http://localhost:7070/DriverLicense/courier22courier22-1671723708.png', 'http://localhost:7070/DriverLicense/courier22courier22-1671723708.png', '2 years', '2022-12-22 15:41:48');

-- Dumping structure for table laundry_shop.error_logs
CREATE TABLE IF NOT EXISTS `error_logs` (
  `iderror_logs` int NOT NULL AUTO_INCREMENT,
  `descriptions` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iderror_logs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table laundry_shop.error_logs: ~0 rows (approximately)

-- Dumping structure for table laundry_shop.form_booking_user
CREATE TABLE IF NOT EXISTS `form_booking_user` (
  `booking_id` int NOT NULL AUTO_INCREMENT,
  `p_info_id` int DEFAULT NULL,
  `shop_id` int DEFAULT NULL,
  `shop_services_id` int DEFAULT NULL,
  `date_time_to_pickup` timestamp NULL DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `delivery_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL,
  `status_booking` smallint DEFAULT '0',
  `user_id` int DEFAULT NULL COMMENT 'user_id = only the coureir_Id .. after the approval of shops',
  `date_time_to_delivery` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table laundry_shop.form_booking_user: ~2 rows (approximately)
INSERT IGNORE INTO `form_booking_user` (`booking_id`, `p_info_id`, `shop_id`, `shop_services_id`, `date_time_to_pickup`, `address`, `delivery_address`, `contact_no`, `status_booking`, `user_id`, `date_time_to_delivery`, `created_at`, `updated_at`) VALUES
	(7, 50, 4, 4, '2022-12-24 13:21:00', 'Tibagan', NULL, '09755983121', 2, 70, NULL, '2022-12-21 13:23:16', '2022-12-22 12:38:53'),
	(8, 50, 4, 4, '2022-12-21 14:49:00', 'Tibagan', 'Saray', '09755983121', 12, 70, NULL, '2022-12-21 14:49:54', '2022-12-22 13:09:17'),
	(9, 54, 5, 8, '2022-12-23 06:40:00', 'Purok 2 Saray Iligan City', 'Purok 2 Saray Iligan City', '09755983121', 12, 72, NULL, '2022-12-22 15:44:04', '2022-12-22 16:16:54');

-- Dumping structure for table laundry_shop.notity_system
CREATE TABLE IF NOT EXISTS `notity_system` (
  `notify_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`notify_id`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table laundry_shop.notity_system: ~39 rows (approximately)
INSERT IGNORE INTO `notity_system` (`notify_id`, `user_id`, `description`, `status`, `created_at`, `updated_at`) VALUES
	(109, 71, 'Account Has been Verify/Confirmed by Admin', 1, '2022-12-22 15:39:30', '2022-12-22 15:40:14'),
	(110, 72, 'Account Has been Verify/Confirmed by Admin', 0, '2022-12-22 15:42:25', '2022-12-22 15:42:25'),
	(111, 71, 'You got New Order # 9 22-12-22 03:12:04', 0, '2022-12-22 15:44:04', '2022-12-22 15:44:04'),
	(112, 72, 'You got New Order # 9 22-12-22 03:12:15', 1, '2022-12-22 15:45:15', '2022-12-22 15:46:26'),
	(113, 71, 'Your Order # 9, Has been approved. We\'ll let you know once it done. Thank you!. 22-12-22 03:12:15', 0, '2022-12-22 15:45:15', '2022-12-22 15:45:15'),
	(114, 71, 'Order # 9, Has been approved by Courier. Thank you!. 22-12-22 03:12:37', 0, '2022-12-22 15:46:37', '2022-12-22 15:46:37'),
	(115, 73, 'Your Order # 9, Has been approved by Courier. Thank you!. 22-12-22 03:12:37', 0, '2022-12-22 15:46:37', '2022-12-22 15:46:37'),
	(116, 71, 'Order # 9, Ready to Pickup. Have a nice day!. 22-12-22 03:12:06', 0, '2022-12-22 15:47:06', '2022-12-22 15:47:06'),
	(117, 73, 'Your Order # 9, is Ready to Pickup. Have a nice day!. 22-12-22 03:12:06', 0, '2022-12-22 15:47:06', '2022-12-22 15:47:06'),
	(118, 71, 'Order # 9, Has been done Reviewing by the Courier. Have a nice day!. 22-12-22 03:12:47', 0, '2022-12-22 15:51:47', '2022-12-22 15:51:47'),
	(119, 73, 'Your Order # 9, Has been reviewed. Thank you!. 22-12-22 03:12:47', 0, '2022-12-22 15:51:47', '2022-12-22 15:51:47'),
	(120, 71, 'Order # 9, Arrived at Destination.. Have a nice day!. 22-12-22 03:12:30', 0, '2022-12-22 15:57:30', '2022-12-22 15:57:30'),
	(121, 73, 'Your Order # 9, Arrived at Destination. Thank you!. 22-12-22 03:12:30', 0, '2022-12-22 15:57:30', '2022-12-22 15:57:30'),
	(122, 73, 'Your Order # 9, are now in-process. Have a nice day!. 22-12-22 03:12:52', 0, '2022-12-22 15:58:52', '2022-12-22 15:58:52'),
	(123, 73, 'Your Order # 9, Are ready to pakaging. Have a nice day!. 22-12-22 03:12:06', 0, '2022-12-22 15:59:06', '2022-12-22 15:59:06'),
	(124, 71, 'Order # 9, Successfully Delivered.. Have a nice day!. 22-12-22 04:12:37', 0, '2022-12-22 16:02:37', '2022-12-22 16:02:37'),
	(125, 73, 'Your Order # 9, Successfully Delivered. Thank you!. 22-12-22 04:12:37', 0, '2022-12-22 16:02:37', '2022-12-22 16:02:37'),
	(126, 71, 'Order # 9, Ready To Delivered.. Have a nice day!. 22-12-22 04:12:15', 0, '2022-12-22 16:04:15', '2022-12-22 16:04:15'),
	(127, 73, 'Your Order # 9, Ready To Delivered. Thank you!. 22-12-22 04:12:15', 0, '2022-12-22 16:04:15', '2022-12-22 16:04:15'),
	(128, 71, 'Order # 9, Has been In-Transit. Have a nice day!. 22-12-22 04:12:03', 0, '2022-12-22 16:05:03', '2022-12-22 16:05:03'),
	(129, 73, 'Your Order # 9, will be arrived to day. Thank you!. 22-12-22 04:12:03', 0, '2022-12-22 16:05:03', '2022-12-22 16:05:03'),
	(130, 71, 'Order # 9, Has been arrived at Destination.. Have a nice day!. 22-12-22 04:12:24', 0, '2022-12-22 16:05:24', '2022-12-22 16:05:24'),
	(131, 73, 'Your Order # 9, Arrived at Destination. Thank you!. 22-12-22 04:12:24', 0, '2022-12-22 16:05:24', '2022-12-22 16:05:24'),
	(132, 71, 'Order # 9, Successfully Delivered.. Have a nice day!. 22-12-22 04:12:53', 0, '2022-12-22 16:05:53', '2022-12-22 16:05:53'),
	(133, 73, 'Your Order # 9, Successfully Delivered. Thank you!. 22-12-22 04:12:53', 1, '2022-12-22 16:05:53', '2022-12-22 16:06:09'),
	(134, 73, 'Your Order # 9, are now in-process. Have a nice day!. 22-12-22 04:12:46', 0, '2022-12-22 16:09:46', '2022-12-22 16:09:46'),
	(135, 73, 'Your Order # 9, Are ready to pakaging. Have a nice day!. 22-12-22 04:12:53', 0, '2022-12-22 16:09:53', '2022-12-22 16:09:53'),
	(136, 72, 'Order # 9, Ready to Delivered. Thank you!. 22-12-22 04:12:31', 0, '2022-12-22 16:15:31', '2022-12-22 16:15:31'),
	(137, 73, 'Your Order # 9, Ready to Delivered. Have a nice day!. 22-12-22 04:12:31', 0, '2022-12-22 16:15:31', '2022-12-22 16:15:31'),
	(138, 72, 'Order # 9, Ready to Delivered. Thank you!. 22-12-22 04:12:32', 0, '2022-12-22 16:16:32', '2022-12-22 16:16:32'),
	(139, 73, 'Your Order # 9, Ready to Delivered. Have a nice day!. 22-12-22 04:12:32', 0, '2022-12-22 16:16:32', '2022-12-22 16:16:32'),
	(140, 71, 'Order # 9, Has been In-Transit. Have a nice day!. 22-12-22 04:12:42', 0, '2022-12-22 16:16:42', '2022-12-22 16:16:42'),
	(141, 73, 'Your Order # 9, will be arrived to day. Thank you!. 22-12-22 04:12:42', 0, '2022-12-22 16:16:42', '2022-12-22 16:16:42'),
	(142, 71, 'Order # 9, Has been arrived at Destination.. Have a nice day!. 22-12-22 04:12:48', 0, '2022-12-22 16:16:48', '2022-12-22 16:16:48'),
	(143, 73, 'Your Order # 9, Arrived at Destination. Thank you!. 22-12-22 04:12:48', 0, '2022-12-22 16:16:48', '2022-12-22 16:16:48'),
	(144, 71, 'Order # 9, Successfully Delivered.. Have a nice day!. 22-12-22 04:12:54', 0, '2022-12-22 16:16:54', '2022-12-22 16:16:54'),
	(145, 73, 'Your Order # 9, Successfully Delivered. Thank you!. 22-12-22 04:12:54', 0, '2022-12-22 16:16:54', '2022-12-22 16:16:54'),
	(146, 74, 'Account Has been Verify/Confirmed by Admin', 0, '2022-12-22 16:37:39', '2022-12-22 16:37:39'),
	(147, 71, 'Account Has been Verify/Confirmed by Admin', 0, '2022-12-22 16:38:37', '2022-12-22 16:38:37'),
	(148, 74, 'Account Has been Verify/Confirmed by Admin', 0, '2022-12-22 16:43:15', '2022-12-22 16:43:15'),
	(149, 71, 'Account Has been Verify/Confirmed by Admin', 0, '2022-12-22 16:46:26', '2022-12-22 16:46:26'),
	(150, 72, 'Account Has been Verify/Confirmed by Admin', 0, '2022-12-22 16:48:01', '2022-12-22 16:48:01');

-- Dumping structure for table laundry_shop.parcel_status
CREATE TABLE IF NOT EXISTS `parcel_status` (
  `id_status` int NOT NULL AUTO_INCREMENT,
  `description` varchar(100) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=23546 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table laundry_shop.parcel_status: ~17 rows (approximately)
INSERT IGNORE INTO `parcel_status` (`id_status`, `description`, `details`) VALUES
	(0, 'Pending Request', 'Waiting Confirmation'),
	(1, 'Order Accepted By Shop', 'Waiting for a Driver Confirmation.'),
	(2, 'Order Accepted By Courier', 'Please Ready to pick-up your Items.'),
	(3, 'Ready to Pickup', 'The item are ready to pickup.'),
	(4, 'Reviewing Items', 'Reviewing the items'),
	(5, 'Items Collected by Courier', 'The Item has been Collected by Courier.'),
	(6, 'Arrived at Destination', 'The item has been arrived at destination.'),
	(7, 'In-process', 'The Item are now in-process.'),
	(8, 'Packaging', 'Packaging the items.'),
	(9, 'Ready to Deliver.', 'The item is ready to deliver.'),
	(10, 'In-Transit', 'The parcel will be arrived to day.'),
	(11, 'Arrived at Destination', 'The item has been arrived at destination.'),
	(12, 'Delivered', NULL),
	(13, 'Cancel Order', 'The Order has been Canceled.'),
	(14, 'Order Declined ', 'The Order has been Declined by Shops. Out of Delivery/ Out of schedule.'),
	(15, 'Order Declined', 'The Order has been Declined by Courier.'),
	(16, 'Pending Courier', 'Waiting for the Available Delivery.');

-- Dumping structure for table laundry_shop.personal_info
CREATE TABLE IF NOT EXISTS `personal_info` (
  `p_info_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `house_no` varchar(255) DEFAULT NULL,
  `discrict_code` varchar(255) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `verify_number` int DEFAULT '0' COMMENT '0 = not verify, 1 = full verify',
  PRIMARY KEY (`p_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table laundry_shop.personal_info: ~7 rows (approximately)
INSERT IGNORE INTO `personal_info` (`p_info_id`, `user_id`, `first_name`, `last_name`, `middle_name`, `street`, `city`, `province`, `zip_code`, `zone`, `landmark`, `barangay`, `house_no`, `discrict_code`, `birthdate`, `gender`, `contact_no`, `image`, `created_at`, `updated_at`, `verify_number`) VALUES
	(49, 68, 'marvin', 'villanea', 'tapere', NULL, 'San Fernando City', 'La Union', '2500', 'Saray', '', '1', NULL, NULL, NULL, NULL, '09755983121', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-12-18 07:22:22', '2022-12-18 07:22:22', 0),
	(50, 69, 'MARVIN', 'VILLANEA', 'tapere', NULL, 'San Fernando City', 'La Union', '2500', 'Saray', '', '1', NULL, NULL, NULL, NULL, '09755983121', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-12-18 07:45:44', '2022-12-18 07:45:44', 0),
	(51, 70, 'VILLANEA', 'MARVIN', 'tapere', NULL, 'San Fernando City', 'La Union', '2500', 'Saray', '', '3', NULL, NULL, NULL, NULL, '09755983121', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-12-19 07:11:46', '2022-12-19 07:11:46', 0),
	(52, 71, 'marvin', 'villanea', 'tapare', NULL, 'San Fernando City', 'La Union', '2500', 'saray', '', '2', NULL, NULL, NULL, NULL, '09755983121', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-12-22 15:38:46', '2022-12-22 15:38:46', 0),
	(53, 72, 'courier22', 'courier22', 'courier22', NULL, 'San Fernando City', 'La Union', '2500', 'Tibagna', '', '1', NULL, NULL, NULL, NULL, '09755983121', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-12-22 15:41:48', '2022-12-22 15:41:48', 0),
	(54, 73, 'user22', 'user22', 'user22', NULL, 'San Fernando City', 'La Union', '2500', 'saray', '', '1', NULL, NULL, NULL, NULL, '09755983121', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-12-22 15:43:16', '2022-12-22 15:43:16', 0),
	(55, 74, 'VILLANEA', 'MARVIN', 'tapere', NULL, 'San Fernando City', 'La Union', '2500', '23', '', '1', NULL, NULL, NULL, NULL, '09755983121', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-12-22 16:28:00', '2022-12-22 16:28:00', 0);

-- Dumping structure for table laundry_shop.rate_courier
CREATE TABLE IF NOT EXISTS `rate_courier` (
  `id_rate` int NOT NULL AUTO_INCREMENT,
  `user_id` bigint DEFAULT NULL,
  `rate_type` varchar(45) DEFAULT NULL,
  `courier_id` bigint DEFAULT NULL,
  `parcel_id` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_rate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table laundry_shop.rate_courier: ~0 rows (approximately)

-- Dumping structure for table laundry_shop.rate_shops
CREATE TABLE IF NOT EXISTS `rate_shops` (
  `id_rate` int NOT NULL AUTO_INCREMENT,
  `user_id` bigint DEFAULT NULL COMMENT 'users  = only',
  `rate_type` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT '1 , 2 , 3 , 4, 5',
  `shop_id` bigint DEFAULT NULL,
  `comments` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `booking_id` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_rate`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table laundry_shop.rate_shops: ~1 rows (approximately)
INSERT IGNORE INTO `rate_shops` (`id_rate`, `user_id`, `rate_type`, `shop_id`, `comments`, `booking_id`, `created_at`) VALUES
	(5, 73, '5', 5, 'Good Washing', '9', '2022-12-23 19:30:16');

-- Dumping structure for table laundry_shop.shops
CREATE TABLE IF NOT EXISTS `shops` (
  `shop_id` int NOT NULL AUTO_INCREMENT,
  `p_info_id` int DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `descriptions` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `permit` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `bussiness_id` varchar(255) DEFAULT NULL,
  `status` int DEFAULT '0' COMMENT '0 = ACTIVE . 1 = NOT ACTIVE',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`shop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table laundry_shop.shops: ~3 rows (approximately)
INSERT IGNORE INTO `shops` (`shop_id`, `p_info_id`, `name`, `descriptions`, `logo`, `permit`, `owner`, `bussiness_id`, `status`, `created_at`) VALUES
	(4, 49, 'Top Wash', 'This is the greate Shop', 'http://localhost:7070/images/SHOP_LOGO/villaneamarvin-1671348142.png', 'http://localhost:7070/images/BUSSINESS_PERMIT/villaneamarvin-1671348142.png', 'Marvin', '78974564', 0, '2022-12-18 07:22:22'),
	(5, 52, 'Go Wash', 'Go wash is the best', 'http://localhost:7070/images/SHOP_LOGO/villaneamarvin-1671723526.png', 'http://localhost:7070/images/BUSSINESS_PERMIT/villaneamarvin-1671723526.png', 'Gowash', '785465', 0, '2022-12-22 15:38:46'),
	(6, 55, 'Go Wash', 'Go wash is the best', 'http://localhost:7070/images/SHOP_LOGO/marvinvillanea-1671726481.png', 'http://localhost:7070/images/BUSSINESS_PERMIT/marvinvillanea-1671726481.png', 'marvin the greate', '213412', 0, '2022-12-22 16:28:00');

-- Dumping structure for table laundry_shop.shops_services
CREATE TABLE IF NOT EXISTS `shops_services` (
  `shop_services_id` int NOT NULL AUTO_INCREMENT,
  `shop_id` int DEFAULT NULL,
  `services_id` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`shop_services_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table laundry_shop.shops_services: ~6 rows (approximately)
INSERT IGNORE INTO `shops_services` (`shop_services_id`, `shop_id`, `services_id`, `status`, `created_at`, `updated_at`) VALUES
	(4, 4, 1, NULL, '2022-12-18 07:22:22', '2022-12-18 07:22:22'),
	(5, 4, 2, NULL, '2022-12-18 07:22:22', '2022-12-18 07:22:22'),
	(6, 4, 3, NULL, '2022-12-18 07:22:22', '2022-12-18 07:22:22'),
	(7, 5, 2, NULL, '2022-12-22 15:38:46', '2022-12-22 15:38:46'),
	(8, 5, 3, NULL, '2022-12-22 15:38:46', '2022-12-22 15:38:46'),
	(9, 6, 2, NULL, '2022-12-22 16:28:00', '2022-12-22 16:28:00');

-- Dumping structure for table laundry_shop.shops_services_available
CREATE TABLE IF NOT EXISTS `shops_services_available` (
  `shop_available_id` int NOT NULL AUTO_INCREMENT,
  `shop_services_id` int DEFAULT NULL,
  `category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `amount` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`shop_available_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table laundry_shop.shops_services_available: ~5 rows (approximately)
INSERT IGNORE INTO `shops_services_available` (`shop_available_id`, `shop_services_id`, `category`, `name`, `amount`, `created_at`, `updated_at`) VALUES
	(1, 8, 'Type Services', '60 per 1kg', 60, '2022-12-22 08:00:38', '2022-12-22 15:45:00'),
	(2, 8, 'Others', 'Tide', 50, '2022-12-22 08:00:49', '2022-12-22 15:45:01'),
	(3, 8, 'Special Wash', 'Jacket', 100, '2022-12-22 08:01:09', '2022-12-22 15:45:02'),
	(5, 8, 'Delivery', 'Delivery', 300, '2022-12-22 08:02:13', '2022-12-22 15:45:03'),
	(6, 8, 'Delivery', 'Pick-up', 200, '2022-12-22 08:25:20', '2022-12-22 15:45:03');

-- Dumping structure for table laundry_shop.system_info
CREATE TABLE IF NOT EXISTS `system_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `descriptions` varchar(255) DEFAULT NULL,
  `version` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `city` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `zip_code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table laundry_shop.system_info: ~0 rows (approximately)
INSERT IGNORE INTO `system_info` (`id`, `title`, `descriptions`, `version`, `created_at`, `city`, `province`, `zip_code`) VALUES
	(1, 'Washing Well Laundry Shop', NULL, NULL, '2022-11-18 02:31:37', 'San Fernando City', 'La Union', '2500');

-- Dumping structure for table laundry_shop.type_of_services
CREATE TABLE IF NOT EXISTS `type_of_services` (
  `services_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `type` smallint DEFAULT '0' COMMENT '0 = BASIC ITEMS, 1 = OTHRES',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`services_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table laundry_shop.type_of_services: ~2 rows (approximately)
INSERT IGNORE INTO `type_of_services` (`services_id`, `name`, `type`, `created_at`) VALUES
	(2, 'PRESS / IRON', 0, '2022-12-10 03:33:03'),
	(3, 'WASH DRY & FOLD', 0, '2022-12-10 03:33:28');

-- Dumping structure for table laundry_shop.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `status` int DEFAULT '1' COMMENT '0= not active, 1 = actrive',
  `verify` tinyint DEFAULT NULL COMMENT '0 = not verify , 1 = verfit by admin, 2 = reject',
  `user_type` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT '1 = admin,   2 = user, 3 courier, 4 = shops',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `driver_status` int DEFAULT NULL COMMENT '0 = available, 1 = not available',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table laundry_shop.users: ~8 rows (approximately)
INSERT IGNORE INTO `users` (`user_id`, `username`, `email`, `password`, `status`, `verify`, `user_type`, `created_at`, `updated_at`, `driver_status`) VALUES
	(1, 'admin', 'admin@gmail.com', 'admin123', 1, 1, '1', '2022-09-23 02:36:01', '2022-12-10 17:53:49', NULL),
	(68, 'marvinvillanea', 'shops@gmail.com', '1234', 1, 1, '4', '2022-12-18 15:22:22', '2022-12-21 21:18:16', NULL),
	(69, 'marvinvillanea', 'users@gmail.com', '1234', 1, 1, '2', '2022-12-18 15:45:44', '2022-12-21 21:18:28', NULL),
	(70, 'marvinvillana', 'courier@gmail.com', '1234', 1, 1, '3', '2022-12-19 15:11:46', '2022-12-22 00:37:14', NULL),
	(71, 'gowash', 'gowash@gmail.com', '1234', 1, 1, '4', '2022-12-22 23:38:46', '2022-12-23 00:46:26', NULL),
	(72, 'courier22', 'courier22@gmail.com', '1234', 1, 1, '3', '2022-12-22 23:41:48', '2022-12-23 00:48:01', NULL),
	(73, 'user22', 'user22@gmail.com', '1234', 1, 1, '2', '2022-12-22 23:43:16', '2022-12-22 23:43:16', NULL),
	(74, 'shop3', 'shop3@gmail.com', '1234', 1, 1, '4', '2022-12-23 00:28:00', '2022-12-23 00:43:15', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
