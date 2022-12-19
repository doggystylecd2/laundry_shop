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
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.access_token: ~13 rows (approximately)
INSERT INTO `access_token` (`token_id`, `access_token`, `user_id`) VALUES
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
	(61, 'da452b6da870164b33a704e1e4e24316', 1);

-- Dumping structure for table laundry_shop.address_info
CREATE TABLE IF NOT EXISTS `address_info` (
  `id_address_info` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_address_info`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.address_info: ~0 rows (approximately)

-- Dumping structure for table laundry_shop.approval_users
CREATE TABLE IF NOT EXISTS `approval_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.approval_users: ~4 rows (approximately)
INSERT INTO `approval_users` (`id`, `type`) VALUES
	(1, 'Confirmed'),
	(2, 'Enable'),
	(3, 'Disapproved'),
	(5, 'Pending');

-- Dumping structure for table laundry_shop.barangay
CREATE TABLE IF NOT EXISTS `barangay` (
  `barangay_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`barangay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.barangay: ~12 rows (approximately)
INSERT INTO `barangay` (`barangay_id`, `name`) VALUES
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

-- Dumping structure for table laundry_shop.courier_details
CREATE TABLE IF NOT EXISTS `courier_details` (
  `idcourier_details` int NOT NULL AUTO_INCREMENT,
  `p_info_id` int DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `driver_license` varchar(255) CHARACTER SET utf8mb4  DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcourier_details`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.courier_details: ~1 rows (approximately)
INSERT INTO `courier_details` (`idcourier_details`, `p_info_id`, `resume`, `driver_license`, `description`, `created_at`) VALUES
	(4, 51, 'http://localhost:7070/Resume/marvinvillanea-1671433906.pdf', 'http://localhost:7070/DriverLicense/marvinvillanea-1671433906.png', 'Tell me about your self', '2022-12-19 07:11:46');

-- Dumping structure for table laundry_shop.courier_notify
CREATE TABLE IF NOT EXISTS `courier_notify` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '0',
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.courier_notify: ~0 rows (approximately)

-- Dumping structure for table laundry_shop.error_logs
CREATE TABLE IF NOT EXISTS `error_logs` (
  `iderror_logs` int NOT NULL AUTO_INCREMENT,
  `descriptions` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iderror_logs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.error_logs: ~0 rows (approximately)

-- Dumping structure for table laundry_shop.form_booking_user
CREATE TABLE IF NOT EXISTS `form_booking_user` (
  `booking_id` int NOT NULL AUTO_INCREMENT,
  `p_info_id` int DEFAULT NULL,
  `shop_id` int DEFAULT NULL,
  `shop_services_id` int DEFAULT NULL,
  `date_time_to_pickup` timestamp NULL DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL,
  `status_booking` smallint DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_time_to_delivery` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.form_booking_user: ~0 rows (approximately)
INSERT INTO `form_booking_user` (`booking_id`, `p_info_id`, `shop_id`, `shop_services_id`, `date_time_to_pickup`, `address`, `contact_no`, `status_booking`, `created_at`, `updated_at`, `date_time_to_delivery`) VALUES
	(1, 50, 4, 4, '2022-12-19 02:14:00', 'Purok 2 Saray', '09755913121', 0, '2022-12-19 02:14:51', '2022-12-19 02:14:51', NULL),
	(2, 50, 4, 4, '2022-12-19 02:14:00', 'Purok 2 Saray', '09755913121', 0, '2022-12-19 02:14:52', '2022-12-19 02:14:52', NULL),
	(3, 50, 4, 4, '2022-12-19 02:14:00', 'Purok 2 Saray', '09755913121', 0, '2022-12-19 02:14:59', '2022-12-19 02:14:59', NULL),
	(4, 50, 4, 4, '2022-12-19 02:15:00', 'cadfasf', 'dsafdsaf', 0, '2022-12-19 02:15:20', '2022-12-19 02:15:20', NULL),
	(5, 50, 4, 4, '2022-12-19 02:15:00', 'cadfasf', 'dsafdsaf', 0, '2022-12-19 02:16:45', '2022-12-19 02:16:45', NULL),
	(6, 50, 4, 4, '2022-12-19 02:15:00', 'cadfasf', 'dsafdsaf', 0, '2022-12-19 02:17:18', '2022-12-19 02:17:18', NULL);

-- Dumping structure for table laundry_shop.notity_system
CREATE TABLE IF NOT EXISTS `notity_system` (
  `notify_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`notify_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.notity_system: ~8 rows (approximately)
INSERT INTO `notity_system` (`notify_id`, `user_id`, `description`, `status`, `created_at`, `updated_at`) VALUES
	(3, 68, 'Account Has been Verify/Confirmed by Admin', NULL, '2022-12-18 16:25:51', '2022-12-18 16:25:51'),
	(4, 68, 'Account Has been Verify/Confirmed by Admin', NULL, '2022-12-18 16:26:18', '2022-12-18 16:26:18'),
	(5, 68, 'You got New Order # 1 22-12-19 02:12:51', NULL, '2022-12-19 02:14:51', '2022-12-19 02:14:51'),
	(6, 68, 'You got New Order # 2 22-12-19 02:12:52', NULL, '2022-12-19 02:14:52', '2022-12-19 02:14:52'),
	(7, 68, 'You got New Order # 3 22-12-19 02:12:59', NULL, '2022-12-19 02:14:59', '2022-12-19 02:14:59'),
	(8, 68, 'You got New Order # 4 22-12-19 02:12:20', NULL, '2022-12-19 02:15:20', '2022-12-19 02:15:20'),
	(9, 68, 'You got New Order # 5 22-12-19 02:12:45', 0, '2022-12-19 02:16:45', '2022-12-19 02:16:45'),
	(10, 68, 'You got New Order # 6 22-12-19 02:12:18', 0, '2022-12-19 02:17:18', '2022-12-19 02:17:18');

-- Dumping structure for table laundry_shop.parcel_details
CREATE TABLE IF NOT EXISTS `parcel_details` (
  `idparcel_details` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `idcourier_details` int DEFAULT NULL,
  `recepient_name` varchar(255) DEFAULT NULL,
  `recepient_address` varchar(255) DEFAULT NULL,
  `recepient_contact_no` varchar(255) DEFAULT NULL,
  `parcel_number` varchar(55) DEFAULT NULL,
  `parcel_description` varchar(255) DEFAULT NULL,
  `type_delivery` varchar(45) DEFAULT NULL,
  `weight_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int DEFAULT '1',
  `amount` decimal(13,2) DEFAULT NULL,
  `address_sender` varchar(255) DEFAULT NULL,
  `recipient_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idparcel_details`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.parcel_details: ~0 rows (approximately)

-- Dumping structure for table laundry_shop.parcel_status
CREATE TABLE IF NOT EXISTS `parcel_status` (
  `id_status` int NOT NULL AUTO_INCREMENT,
  `description` varchar(100) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.parcel_status: ~12 rows (approximately)
INSERT INTO `parcel_status` (`id_status`, `description`, `details`) VALUES
	(1, 'Pending Request', 'Waiting Confirmation from Courier'),
	(2, 'Parcel Accepted by Courier', NULL),
	(3, 'Item Collected by Courier', 'The Item has been Collected by Courier.'),
	(4, 'Shipped', 'The item has been Shipped.'),
	(5, 'In-Transit', 'The parcel will be arrived to day.'),
	(6, 'Arrived at Destination', 'The item has been arrived at destination.'),
	(7, 'Delivered', NULL),
	(8, 'Picked-up', 'The item already picked-up by Recipient.'),
	(9, 'Ready to Pickup', 'The item are ready to pickup.'),
	(10, 'Out for Delivery', 'Out for Delivery'),
	(11, 'Unsuccessfull Delivery Attempt', 'The item Unsuccessful Delivered Attempty'),
	(12, 'Parcel Denied by Courier', 'The Parcel Denied by Courier');

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
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.personal_info: ~2 rows (approximately)
INSERT INTO `personal_info` (`p_info_id`, `user_id`, `first_name`, `last_name`, `middle_name`, `street`, `city`, `province`, `zip_code`, `zone`, `landmark`, `barangay`, `house_no`, `discrict_code`, `birthdate`, `gender`, `contact_no`, `image`, `created_at`, `updated_at`, `verify_number`) VALUES
	(49, 68, 'marvin', 'villanea', 'tapere', NULL, 'San Fernando City', 'La Union', '2500', 'Saray', '', '1', NULL, NULL, NULL, NULL, '09755983121', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-12-18 07:22:22', '2022-12-18 07:22:22', 0),
	(50, 69, 'MARVIN', 'VILLANEA', 'tapere', NULL, 'San Fernando City', 'La Union', '2500', 'Saray', '', '1', NULL, NULL, NULL, NULL, '09755983121', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-12-18 07:45:44', '2022-12-18 07:45:44', 0),
	(51, 70, 'VILLANEA', 'MARVIN', 'tapere', NULL, 'San Fernando City', 'La Union', '2500', 'Saray', '', '3', NULL, NULL, NULL, NULL, '09755983121', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-12-19 07:11:46', '2022-12-19 07:11:46', 0);

-- Dumping structure for table laundry_shop.rate_courier
CREATE TABLE IF NOT EXISTS `rate_courier` (
  `id_rate` int NOT NULL AUTO_INCREMENT,
  `user_id` bigint DEFAULT NULL,
  `rate_type` varchar(45) DEFAULT NULL,
  `courier_id` bigint DEFAULT NULL,
  `parcel_id` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_rate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.rate_courier: ~0 rows (approximately)

-- Dumping structure for table laundry_shop.set_weight
CREATE TABLE IF NOT EXISTS `set_weight` (
  `weight_id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(45) DEFAULT NULL,
  `amount` decimal(13,2) DEFAULT NULL,
  PRIMARY KEY (`weight_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.set_weight: ~1 rows (approximately)

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
  `status` int DEFAULT '1' COMMENT '0 = ACTIVE . 1 = NOT ACTIVE',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`shop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.shops: ~1 rows (approximately)
INSERT INTO `shops` (`shop_id`, `p_info_id`, `name`, `descriptions`, `logo`, `permit`, `owner`, `bussiness_id`, `status`, `created_at`) VALUES
	(4, 49, 'Top Wash', 'This is the greate Shop', 'http://localhost:7070/images/SHOP_LOGO/villaneamarvin-1671348142.png', 'http://localhost:7070/images/BUSSINESS_PERMIT/villaneamarvin-1671348142.png', 'Marvin', '78974564', 0, '2022-12-18 07:22:22');

-- Dumping structure for table laundry_shop.shops_services
CREATE TABLE IF NOT EXISTS `shops_services` (
  `shop_services_id` int NOT NULL AUTO_INCREMENT,
  `shop_id` int DEFAULT NULL,
  `services_id` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`shop_services_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.shops_services: ~3 rows (approximately)
INSERT INTO `shops_services` (`shop_services_id`, `shop_id`, `services_id`, `status`, `created_at`, `updated_at`) VALUES
	(4, 4, 1, NULL, '2022-12-18 07:22:22', '2022-12-18 07:22:22'),
	(5, 4, 2, NULL, '2022-12-18 07:22:22', '2022-12-18 07:22:22'),
	(6, 4, 3, NULL, '2022-12-18 07:22:22', '2022-12-18 07:22:22');

-- Dumping structure for table laundry_shop.shops_services_available
CREATE TABLE IF NOT EXISTS `shops_services_available` (
  `shop_available_id` int NOT NULL AUTO_INCREMENT,
  `shop_services_id` int DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `amount` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`shop_available_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.shops_services_available: ~0 rows (approximately)

-- Dumping structure for table laundry_shop.system_info
CREATE TABLE IF NOT EXISTS `system_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4  DEFAULT NULL,
  `descriptions` varchar(255) DEFAULT NULL,
  `version` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `city` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `zip_code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.system_info: ~1 rows (approximately)
INSERT INTO `system_info` (`id`, `title`, `descriptions`, `version`, `created_at`, `city`, `province`, `zip_code`) VALUES
	(1, 'Washing Well Laundry Shop', NULL, NULL, '2022-11-18 02:31:37', 'San Fernando City', 'La Union', '2500');

-- Dumping structure for table laundry_shop.type_of_services
CREATE TABLE IF NOT EXISTS `type_of_services` (
  `services_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4  DEFAULT NULL,
  `type` smallint DEFAULT '0' COMMENT '0 = BASIC ITEMS, 1 = OTHRES',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`services_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.type_of_services: ~3 rows (approximately)
INSERT INTO `type_of_services` (`services_id`, `name`, `type`, `created_at`) VALUES
	(1, 'HAND WASH', 0, '2022-12-10 03:32:53'),
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
  `user_type` varchar(45) CHARACTER SET utf8mb4  DEFAULT NULL COMMENT '1 = admin,   2 = user, 3 courier, 4 = shops',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.users: ~3 rows (approximately)
INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `status`, `verify`, `user_type`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', 'admin123', 1, 1, '1', '2022-09-23 02:36:01', '2022-12-10 17:53:49'),
	(68, 'marvinvillanea', 'marvinvillanea1@gmail.com', '1234', 1, 1, '4', '2022-12-18 15:22:22', '2022-12-19 00:25:51'),
	(69, 'marvinvillanea', 'marvin_bound@yahoo.com', 'marvin_bound', 1, 1, '2', '2022-12-18 15:45:44', '2022-12-18 15:45:44'),
	(70, 'marvinvillana', 'courier@gmail.com', '1234', 1, 0, '3', '2022-12-19 15:11:46', '2022-12-19 15:11:46');

-- Dumping structure for table laundry_shop.users_notify
CREATE TABLE IF NOT EXISTS `users_notify` (
  `id_notify` bigint NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL DEFAULT '0',
  `status` tinytext NOT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_notify`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.users_notify: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
