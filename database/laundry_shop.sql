

-- Dumping structure for table laundry_shop.access_token
CREATE TABLE IF NOT EXISTS `access_token` (
  `token_id` int NOT NULL AUTO_INCREMENT,
  `access_token` varchar(75) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`token_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.access_token: ~0 rows (approximately)
DELETE FROM `access_token`;
INSERT INTO `access_token` (`token_id`, `access_token`, `user_id`) VALUES
	(9, '90a0cbd9f8ce8fc0ead8836ce8af5517', 55),
	(10, 'd4b49be47e1945197c04134ae195743e', 56),
	(11, 'c4f12cf70951a58a13c22880b9a64955', NULL),
	(12, 'f00bd421c1227cb23ddfc3fab0e3484d', NULL),
	(13, '6dfe1f596fbf2704f6689403a03a1d67', 59),
	(14, 'd96afd9241af4be85cf7999f246e9583', 60),
	(15, 'e1806f3cf47ac3f6786959a9b86f7043', 61),
	(16, 'c3922c9a989acdef239f67e0067c0ec5', 62),
	(17, '084a207da0bfcc428ce463331111e8a2', 55),
	(18, 'f72360a3d8812c2cdd1c30352fc667d1', 62),
	(19, 'ca908033f789922bf4797c8b32ebbb4c', 55),
	(20, 'eede49ac029f5d9f545cfbc677a59504', 64),
	(21, '15884daa683fbe03d37e49ff14e95121', 55),
	(22, 'ce9f169fbe0e59e46acb165eda737d23', 65),
	(23, '6749b84327f63acdcd67c522a18af3b9', 55),
	(24, '70254adb8faa0e801a6ed8487f193ef5', 1);

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
DELETE FROM `address_info`;

-- Dumping structure for table laundry_shop.approval_users
CREATE TABLE IF NOT EXISTS `approval_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.approval_users: ~4 rows (approximately)
DELETE FROM `approval_users`;
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
DELETE FROM `barangay`;
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.courier_details: ~0 rows (approximately)
DELETE FROM `courier_details`;
INSERT INTO `courier_details` (`idcourier_details`, `p_info_id`, `resume`, `driver_license`, `description`, `created_at`) VALUES
	(1, 41, 'http://localhost:7070/Resume/villaneamarvin-1668851186.docx', 'http://localhost:7070/DriverLicense/villaneamarvin-1668851186.docx', 'fvghnjm,.', '2022-11-19 09:46:26'),
	(2, 42, 'http://localhost:7070/Resume/marvinvillanea-1668851322.docx', 'http://localhost:7070/DriverLicense/marvinvillanea-1668851322.png', 'sdfgfsdgfsdgsfdg', '2022-11-19 09:48:41'),
	(3, 43, 'http://localhost:7070/Resume/villaneamarvin-1668852006.docx', 'http://localhost:7070/DriverLicense/villaneamarvin-1668852006.png', 'dsafdsafdasf', '2022-11-19 10:00:06');

-- Dumping structure for table laundry_shop.courier_notify
CREATE TABLE IF NOT EXISTS `courier_notify` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '0',
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.courier_notify: ~0 rows (approximately)
DELETE FROM `courier_notify`;

-- Dumping structure for table laundry_shop.error_logs
CREATE TABLE IF NOT EXISTS `error_logs` (
  `iderror_logs` int NOT NULL AUTO_INCREMENT,
  `descriptions` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iderror_logs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.error_logs: ~0 rows (approximately)
DELETE FROM `error_logs`;

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
DELETE FROM `parcel_details`;

-- Dumping structure for table laundry_shop.parcel_status
CREATE TABLE IF NOT EXISTS `parcel_status` (
  `id_status` int NOT NULL AUTO_INCREMENT,
  `description` varchar(100) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.parcel_status: ~12 rows (approximately)
DELETE FROM `parcel_status`;
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
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.personal_info: ~9 rows (approximately)
DELETE FROM `personal_info`;
INSERT INTO `personal_info` (`p_info_id`, `user_id`, `first_name`, `last_name`, `middle_name`, `street`, `city`, `province`, `zip_code`, `zone`, `landmark`, `barangay`, `house_no`, `discrict_code`, `birthdate`, `gender`, `contact_no`, `image`, `created_at`, `updated_at`, `verify_number`) VALUES
	(36, 55, 'marvin', 'villanea', 'tapere', NULL, 'San Fernando City', 'La Union', '2500', '1', '', '4', NULL, NULL, NULL, NULL, '09755983121', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-11-18 05:15:26', '2022-11-18 05:15:26', 0),
	(37, 56, 'marvin', 'villanea', 'tapre', NULL, 'San Fernando City', 'La Union', '2500', '2', '', '4', NULL, NULL, NULL, NULL, '09755983121', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-11-19 08:40:55', '2022-11-19 08:40:55', 0),
	(38, 57, 'marvin', 'villanea', 'tapere', NULL, NULL, NULL, NULL, '2', '', '4', NULL, NULL, NULL, NULL, '7894561230.', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-11-19 09:39:19', '2022-11-19 09:39:19', 0),
	(39, 58, 'marvin', 'villanea', 'tapere', NULL, NULL, NULL, NULL, '2', '', '4', NULL, NULL, NULL, NULL, '7894561230.', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-11-19 09:39:19', '2022-11-19 09:39:19', 0),
	(40, 59, 'marvin', 'villanea', 'tapere', NULL, 'San Fernando City', 'La Union', '2500', '23', '', '2', NULL, NULL, NULL, NULL, '0975983121', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-11-19 09:41:53', '2022-11-19 09:41:53', 0),
	(41, 60, 'marvin', 'villanea', 'tapere', NULL, 'San Fernando City', 'La Union', '2500', '21321', '', '2', NULL, NULL, NULL, NULL, '09755983121', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-11-19 09:46:26', '2022-11-19 09:46:26', 0),
	(42, 61, 'VILLANEA', 'MARVIN', 'JANUBAS', NULL, 'San Fernando City', 'La Union', '2500', '21321', '', '2', NULL, NULL, NULL, NULL, '79887654465', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-11-19 09:48:41', '2022-11-19 09:48:41', 0),
	(43, 62, 'marvin', 'villanea', 'tapere', NULL, 'San Fernando City', 'La Union', '2500', '213213', '', '3', NULL, NULL, NULL, NULL, '0975983121', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-11-19 10:00:06', '2022-11-19 10:00:06', 0),
	(44, 63, 'shop1', 'shop1', 'shop1', NULL, 'San Fernando City', 'La Union', '2500', '5', '', '2', NULL, NULL, NULL, NULL, '09755983121', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-11-19 11:08:02', '2022-11-19 11:08:02', 0),
	(45, 64, 'shop2', 'shop2', 'shop2', NULL, 'San Fernando City', 'La Union', '2500', '44', '', '3', NULL, NULL, NULL, NULL, '123213123121', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-11-19 11:09:17', '2022-11-19 11:09:17', 0),
	(46, 65, 'go', 'wash', 'go wash', NULL, 'San Fernando City', 'La Union', '2500', '23', '', '3', NULL, NULL, NULL, NULL, '7897987', 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-11-19 11:15:49', '2022-11-19 11:15:49', 0);

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
DELETE FROM `rate_courier`;

-- Dumping structure for table laundry_shop.set_weight
CREATE TABLE IF NOT EXISTS `set_weight` (
  `weight_id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(45) DEFAULT NULL,
  `amount` decimal(13,2) DEFAULT NULL,
  PRIMARY KEY (`weight_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.set_weight: ~3 rows (approximately)
DELETE FROM `set_weight`;
INSERT INTO `set_weight` (`weight_id`, `description`, `amount`) VALUES
	(1, 'Small', 50.00),
	(2, 'Medium', 100.00),
	(3, 'Large', 150.00);

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
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`shop_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.shops: ~2 rows (approximately)
DELETE FROM `shops`;
INSERT INTO `shops` (`shop_id`, `p_info_id`, `name`, `descriptions`, `logo`, `permit`, `owner`, `bussiness_id`, `created_at`) VALUES
	(1, 45, 'shop2', 'shop2', 'http://localhost:7070/images/SHOP_LOGO/shop2shop2-1668856158.png', 'http://localhost:7070/images/BUSSINESS_PERMIT/shop2shop2-1668856158.png', 'shop2', '123213', '2022-11-19 11:09:17'),
	(2, 46, 'Go Wash', 'Testing testing', 'http://localhost:7070/images/SHOP_LOGO/washgo-1668856549.png', 'http://localhost:7070/images/BUSSINESS_PERMIT/washgo-1668856549.png', 'Go wash', '789456', '2022-11-19 11:15:49');

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
DELETE FROM `system_info`;
INSERT INTO `system_info` (`id`, `title`, `descriptions`, `version`, `created_at`, `city`, `province`, `zip_code`) VALUES
	(1, 'Washing Well Laundry Shop', NULL, NULL, '2022-11-18 02:31:37', 'San Fernando City', 'La Union', '2500');

-- Dumping structure for table laundry_shop.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `verify` tinyint DEFAULT NULL COMMENT '0 = not verify , 1 = verfit by admin',
  `user_type` varchar(45) CHARACTER SET utf8mb4  DEFAULT NULL COMMENT '1 = admin,   2 = user, 3 courier, 4 = shops',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table laundry_shop.users: ~12 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `status`, `verify`, `user_type`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', 'admin123', '1', NULL, '1', '2022-09-23 02:36:01', '2022-09-23 02:36:01'),
	(55, 'marvin123', 'marvin@gmail.com', 'marvin123', '1', NULL, '2', '2022-11-18 13:15:26', '2022-11-18 13:15:26'),
	(56, 'tigergames', 'client1@connect.com', '1234', '1', NULL, '2', '2022-11-19 16:40:55', '2022-11-19 16:40:55'),
	(57, 'marvin123', 'courier12322@gmail.com', '1234', '1', 0, '3', '2022-11-19 17:39:19', '2022-11-19 17:39:19'),
	(58, 'marvin123', 'courier12322@gmail.com', '1234', '1', 0, '3', '2022-11-19 17:39:19', '2022-11-19 17:39:19'),
	(59, 'courier123444', 'courier123444@gmail.com', '1234', '1', 0, '3', '2022-11-19 17:41:53', '2022-11-19 17:41:53'),
	(60, 'courier12344455', 'courier12344455@gmail.com', '12345', '1', 0, '3', '2022-11-19 17:46:26', '2022-11-19 17:46:26'),
	(61, '4123421', 'LloydNiceGuy@gmail.com', '1234', '1', 0, '3', '2022-11-19 17:48:41', '2022-11-19 17:48:41'),
	(62, 'marvin123', 'client1123213213@connect.com', '1234', '1', 0, '3', '2022-11-19 18:00:06', '2022-11-19 18:00:06'),
	(63, 'tigergames', 'shop1@connect.com', '123456', '1', 0, '3', '2022-11-19 19:08:02', '2022-11-19 19:08:02'),
	(64, 'shop2', 'shop2@gmail.com', '1234', '1', 0, '3', '2022-11-19 19:09:17', '2022-11-19 19:09:17'),
	(65, 'gowash', 'gowash@gmail.com', '12345', '1', 0, '3', '2022-11-19 19:15:49', '2022-11-19 19:15:49');

-- Dumping structure for table laundry_shop.users_notify
CREATE TABLE IF NOT EXISTS `users_notify` (
  `id_notify` bigint NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL DEFAULT '0',
  `status` tinytext NOT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_notify`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;
