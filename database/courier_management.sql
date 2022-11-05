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


-- Dumping database structure for courier_management
CREATE DATABASE IF NOT EXISTS `courier_management` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `courier_management`;

-- Dumping structure for table courier_management.access_token
DROP TABLE IF EXISTS `access_token`;
CREATE TABLE IF NOT EXISTS `access_token` (
  `token_id` int NOT NULL AUTO_INCREMENT,
  `access_token` varchar(75) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`token_id`)
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table courier_management.access_token: ~9 rows (approximately)
DELETE FROM `access_token`;
INSERT INTO `access_token` (`token_id`, `access_token`, `user_id`) VALUES
	(131, '7df537ec1cf01c0590d3b118fa18b977', 46),
	(132, 'a9028c12bb31f804b5ad38ac4cda3eb6', 43),
	(133, '4eef847f623fa3289c68567f4b10cbfa', 44),
	(134, '502f3985c7bad841cbbd23e9b26e981b', 47),
	(135, '4be0ca698e81d6793ec45239bf94a8a8', 43),
	(136, '389dea08cd23f680654a60af5f8fc187', 47),
	(137, 'bdb51b109e4d5c3b24b50febb0de5e95', 43),
	(138, 'de97724cd22ad7b653835ab90ed562cc', 47),
	(139, 'ebd0db19e1e22f0dfd1ce3a23516ebf1', 43),
	(140, '59a70992e75d268eff1a249831835044', 43),
	(141, 'b6de26c7c11fa32582f6c41fa680026a', 44),
	(142, '3dc3137ecc8f71bfbf087f237100581b', 43),
	(143, '98943f88bd4507a8508fa8356de206f5', 43),
	(144, '8a48408cbddfa2407fb4cd3c1b47a325', 46),
	(145, '58d125865d0a0898d87beb0b1d5c7122', 44),
	(146, 'd42f00128a8bedbcaaedbf1703774eac', 48),
	(147, '74c0079c3d32756064247d4a4b66fc6b', 49),
	(148, '5c8d8a173dcb0bcdca48b13932968bb2', 50),
	(149, '958b8d34f6f7d73c98cfa7407a51e56a', 1),
	(150, '56841ac4f81421dc674ade5299a6b63a', 1),
	(151, '1bdaf491928eff956f0f52ed301df32c', 43),
	(152, '04884a38a9a2e89ed44b324c06cfd508', 44),
	(153, '9431b36d8569901623f9aa736d376fb3', 44),
	(154, '62fe6072d1daac8cac2d05805e94bcdf', 43),
	(155, '1e45336436722ae440d2551f3b9db2b4', 44);

-- Dumping structure for table courier_management.address_info
DROP TABLE IF EXISTS `address_info`;
CREATE TABLE IF NOT EXISTS `address_info` (
  `id_address_info` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_address_info`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table courier_management.address_info: ~2 rows (approximately)
DELETE FROM `address_info`;
INSERT INTO `address_info` (`id_address_info`, `user_id`, `address`, `contact_no`, `created_at`, `updated_at`) VALUES
	(35, 44, '55 Casili, Anao City, Tarlac 2310 ', NULL, '2022-11-01 05:00:59', '2022-11-01 05:00:59'),
	(36, 45, '585 Don Ramon, Anao City, Tarlac 2310 ', NULL, '2022-11-01 08:34:06', '2022-11-01 08:34:06'),
	(37, 47, '5 Don Ramon, Anao City, Tarlac 2310 ', NULL, '2022-11-03 01:17:29', '2022-11-03 01:17:29');

-- Dumping structure for table courier_management.approval_users
DROP TABLE IF EXISTS `approval_users`;
CREATE TABLE IF NOT EXISTS `approval_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table courier_management.approval_users: ~4 rows (approximately)
DELETE FROM `approval_users`;
INSERT INTO `approval_users` (`id`, `type`) VALUES
	(1, 'Confirmed'),
	(2, 'Enable'),
	(3, 'Disapproved'),
	(5, 'Pending');

-- Dumping structure for table courier_management.barangay
DROP TABLE IF EXISTS `barangay`;
CREATE TABLE IF NOT EXISTS `barangay` (
  `barangay_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`barangay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table courier_management.barangay: ~8 rows (approximately)
DELETE FROM `barangay`;
INSERT INTO `barangay` (`barangay_id`, `name`) VALUES
	(1, 'Baguindoc'),
	(2, 'Bantog'),
	(3, 'Campos'),
	(4, 'Carmen'),
	(5, 'Casili'),
	(6, 'Don Ramon'),
	(7, 'Hernando'),
	(8, 'Poblacion');

-- Dumping structure for table courier_management.courier_details
DROP TABLE IF EXISTS `courier_details`;
CREATE TABLE IF NOT EXISTS `courier_details` (
  `idcourier_details` int NOT NULL AUTO_INCREMENT,
  `p_info_id` int DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idcourier_details`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table courier_management.courier_details: ~0 rows (approximately)
DELETE FROM `courier_details`;
INSERT INTO `courier_details` (`idcourier_details`, `p_info_id`, `resume`, `description`) VALUES
	(11, 26, 'http://localhost:7070/Resume/1667277983.pdf', 'Hi good day team, we would like to enter your office sir.'),
	(12, 32, 'http://localhost:7070/Resume/1667570537.pdf', 'sadfdasfdasfsdafdasf'),
	(13, 33, 'http://localhost:7070/Resume/1667570887.pdf', 'dsfahhhhh');

-- Dumping structure for table courier_management.courier_notify
DROP TABLE IF EXISTS `courier_notify`;
CREATE TABLE IF NOT EXISTS `courier_notify` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '0',
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table courier_management.courier_notify: ~0 rows (approximately)
DELETE FROM `courier_notify`;
INSERT INTO `courier_notify` (`id`, `description`, `status`, `user_id`, `created_at`) VALUES
	(5, 'You got New Parcel # 7894561 22-11-03 01:11:29', 1, 43, '2022-11-03 01:17:29'),
	(6, 'You got New Parcel # 54489 22-11-04 01:11:38', 1, 43, '2022-11-04 01:20:38'),
	(7, 'You got New Parcel # 855588 22-11-04 03:11:13', 1, 43, '2022-11-04 03:32:13'),
	(8, 'You got New Parcel # 789456411 22-11-04 03:11:29', 1, 43, '2022-11-04 03:49:29'),
	(9, 'You got New Parcel # 78945611 22-11-04 03:11:15', 1, 43, '2022-11-04 03:56:15'),
	(10, 'You got New Parcel # 1234555512 22-11-04 04:11:32', 1, 43, '2022-11-04 04:00:32'),
	(11, 'You got New Parcel # 5324324 22-11-04 04:11:04', 1, 43, '2022-11-04 04:11:04');

-- Dumping structure for table courier_management.parcel_details
DROP TABLE IF EXISTS `parcel_details`;
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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table courier_management.parcel_details: ~5 rows (approximately)
DELETE FROM `parcel_details`;
INSERT INTO `parcel_details` (`idparcel_details`, `user_id`, `idcourier_details`, `recepient_name`, `recepient_address`, `recepient_contact_no`, `parcel_number`, `parcel_description`, `type_delivery`, `weight_id`, `created_at`, `status`, `amount`, `address_sender`, `recipient_image`) VALUES
	(26, 44, 43, 'Sender seder Recipient', 'Tarlac City Anao', '9755983121', '123213', 'This is testing', 'Delivery', 2, '2022-11-01 04:52:07', 7, 50.00, ', Campos, Anao, Tarlac, 2310', 'http://localhost:7070/api/images/recipient/recipient1667372264.jpg'),
	(27, 44, 43, 'Sender to Sender', 'Tomas Cabili Avenue', '9755983121', '13212414141321321', 'sadfa', 'Delivery', 3, '2022-11-01 05:00:59', 7, 50.00, '55 Casili, Anao City, Tarlac 2310 ', 'http://localhost:7070/api/images/recipient/recipient1667371602.jpg'),
	(28, 45, 43, 'ggg ggg', '2313123', '9755983121', '13212414141', '1321321312', 'Delivery', 3, '2022-11-01 08:34:06', 7, 50.00, '585 Don Ramon, Anao City, Tarlac 2310 ', NULL),
	(29, 46, 43, 'Marvin tae', 'Tarlac anao bugoy', '9755983121', '7959', 'Mommy ', 'Delivery', 2, '2022-11-02 07:57:12', 7, 50.00, ', Carmen, Anao, Tarlac, 2310', 'http://localhost:7070/api/images/recipient/recipient1667532346.jpg'),
	(30, 46, 43, 'Marivn villanea', 'Yendje', '9755983121', '5777', 'Narak', 'Delivery', 2, '2022-11-02 08:02:02', 11, 50.00, ', Carmen, Anao, Tarlac, 2310', NULL),
	(31, 47, 43, 'ggg ggg', '2313123', '9755983121', '7894561', 'This is testing', 'Delivery', 2, '2022-11-03 01:17:29', 7, 50.00, '5 Don Ramon, Anao City, Tarlac 2310 ', 'http://localhost:7070/api/images/recipient/recipient1667438427.jpg'),
	(32, 44, 43, 'MArvin Villanea', 'Purok 2 saray iligan city', '9755983121', '54489', 'Laptop', 'Delivery', 2, '2022-11-04 01:20:38', 7, 50.00, '55 Casili, Anao City, Tarlac 2310 ', 'http://localhost:7070/api/images/recipient/recipient1667525903.jpg'),
	(33, 44, 43, 'Marvin Villanea', 'Campos, Anao, Tarlac, 2310', '9755983121', '855588', 'Computers Hardware', 'Delivery', 2, '2022-11-04 03:32:13', 7, 50.00, '55 Casili, Anao City, Tarlac 2310 ', 'http://localhost:7070/api/images/recipient/recipient1667532862.jpg'),
	(34, 44, 43, 'Fernan Torres', 'Campos, Anao, Tarlac, 2310', '9486502742', '789456411', 'Laptop', 'Delivery', 2, '2022-11-04 03:49:28', 5, 50.00, ', Campos, Anao, Tarlac, 2310', NULL),
	(35, 44, 43, 'Fernando Torre', 'Campos, Anao, Tarlac, 2310', '9534834817', '78945611', 'computer', 'Delivery', 3, '2022-11-04 03:56:15', 7, 50.00, ', Campos, Anao, Tarlac, 2310', 'http://localhost:7070/api/images/recipient/recipient1667609158.png'),
	(36, 48, 43, 'Fernando Torres', 'Campos, Anao, Tarlac, 2310', '9755983121', '1234555512', 'Keyboard', 'Delivery', 3, '2022-11-04 04:00:32', 7, 50.00, ', Campos, Anao, Tarlac, 2310', 'http://localhost:7070/api/images/recipient/recipient1667534568.jpg'),
	(37, 48, 43, 'Fernando Torres', 'Campos, Anao, Tarlac, 2310', '9534834817', '5324324', 'Computer', 'Delivery', 3, '2022-11-04 04:11:04', 7, 50.00, ', Campos, Anao, Tarlac, 2310', 'http://localhost:7070/api/images/recipient/recipient1667535180.jpg');

-- Dumping structure for table courier_management.parcel_status
DROP TABLE IF EXISTS `parcel_status`;
CREATE TABLE IF NOT EXISTS `parcel_status` (
  `id_status` int NOT NULL AUTO_INCREMENT,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table courier_management.parcel_status: ~12 rows (approximately)
DELETE FROM `parcel_status`;
INSERT INTO `parcel_status` (`id_status`, `description`) VALUES
	(1, 'Pending Request'),
	(2, 'Parcel Accepted by Courier'),
	(3, 'Item Collected by Courier'),
	(4, 'Shipped'),
	(5, 'In-Transit'),
	(6, 'Arrived at Destination'),
	(7, 'Delivered'),
	(8, 'Picked-up'),
	(9, 'Ready to Pickup'),
	(10, 'Out for Delivery'),
	(11, 'Unsuccessfull Delivery Attempt'),
	(12, 'Parcel Denied by Courier');

-- Dumping structure for table courier_management.personal_info
DROP TABLE IF EXISTS `personal_info`;
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
  PRIMARY KEY (`p_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table courier_management.personal_info: ~8 rows (approximately)
DELETE FROM `personal_info`;
INSERT INTO `personal_info` (`p_info_id`, `user_id`, `first_name`, `last_name`, `middle_name`, `street`, `city`, `province`, `zip_code`, `zone`, `landmark`, `barangay`, `house_no`, `discrict_code`, `birthdate`, `gender`, `contact_no`, `image`, `created_at`, `updated_at`) VALUES
	(26, 43, 'Courier', 'Courier', 'Courier', NULL, 'Anao', 'Tarlac', '2310', '44', '3213213', 'Carmen', '41241412412', NULL, '2022-11-02', 'male', '9755983121', 'http://localhost:7070/images/profile1667279916.jpg', '2022-11-01 04:46:23', '2022-11-04 03:22:51'),
	(27, 44, 'users1', 'users1', 'users1', NULL, 'Anao', 'Tarlac', '2310', '24', 'test', 'Campos', '32', NULL, '2022-11-09', 'Male', '9755983121', 'http://localhost:7070/images/profile1667278247.jpg', '2022-11-01 04:49:12', '2022-11-04 03:22:51'),
	(28, 45, 'ggg', 'ggg', 'JANUBAS', NULL, 'Iligan City', 'Lanao del Norte', '9200', '5', '', 'Campos', '', NULL, '', '', '9755983121', 'http://localhost:7070/images/profile1667291572.jpg', '2022-11-01 08:32:19', '2022-11-04 03:22:53'),
	(29, 46, 'Mommy', 'Mommy', 'Mommy', NULL, 'Anao', 'Tarlac', '2310', '3', 'Hahaha', 'Carmen', '', NULL, '2022-11-02', 'M', '9755983121', 'http://4d44-158-62-63-200.ap.ngrok.io/images/profile1667375620.jpg', '2022-11-02 07:47:58', '2022-11-04 03:22:53'),
	(30, 47, 'users1', 'User1', 'user1', NULL, 'Anao', 'Tarlac', '2310', '5', '', 'Casili', '', NULL, '2022-11-03', 'M', '9755983121', 'http://localhost:7070/images/profile1667438203.jpg', '2022-11-03 01:14:25', '2022-11-04 03:22:54'),
	(31, 48, 'MArvin', 'Villanea', 'TApere', NULL, 'Anao', 'Tarlac', '2310', '10', '', 'Campos', '', NULL, '2022-11-10', 'M', '9755983121', 'http://localhost:7070/images/profile1667534380.jpg', '2022-11-04 03:59:02', '2022-11-04 03:59:39'),
	(32, 49, NULL, NULL, NULL, NULL, 'Anao', 'Tarlac', '2310', '54', '', 'Campos', NULL, NULL, NULL, NULL, NULL, 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-11-04 14:02:16', '2022-11-04 14:02:16'),
	(33, 50, NULL, NULL, NULL, NULL, 'Anao', 'Tarlac', '2310', '4', '', 'Bantog', NULL, NULL, NULL, NULL, NULL, 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg', '2022-11-04 14:08:07', '2022-11-04 14:08:07');

-- Dumping structure for table courier_management.rate_courier
DROP TABLE IF EXISTS `rate_courier`;
CREATE TABLE IF NOT EXISTS `rate_courier` (
  `id_rate` int NOT NULL AUTO_INCREMENT,
  `user_id` bigint DEFAULT NULL,
  `rate_type` varchar(45) DEFAULT NULL,
  `courier_id` bigint DEFAULT NULL,
  `parcel_id` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_rate`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table courier_management.rate_courier: ~2 rows (approximately)
DELETE FROM `rate_courier`;
INSERT INTO `rate_courier` (`id_rate`, `user_id`, `rate_type`, `courier_id`, `parcel_id`, `created_at`) VALUES
	(1, 44, '1', 43, '27', '2022-11-02 10:03:36'),
	(2, 44, '5', 43, '26', '2022-11-02 10:07:43'),
	(3, 47, '5', 43, '31', '2022-11-03 01:21:22'),
	(4, 44, '3', 43, '32', '2022-11-04 01:38:52'),
	(5, 44, '2', 43, '33', '2022-11-04 03:35:09'),
	(6, 48, '5', 43, '36', '2022-11-04 04:04:14'),
	(7, 48, '5', 43, '37', '2022-11-04 04:13:38');

-- Dumping structure for table courier_management.set_weight
DROP TABLE IF EXISTS `set_weight`;
CREATE TABLE IF NOT EXISTS `set_weight` (
  `weight_id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(45) DEFAULT NULL,
  `amount` decimal(13,2) DEFAULT NULL,
  PRIMARY KEY (`weight_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table courier_management.set_weight: ~3 rows (approximately)
DELETE FROM `set_weight`;
INSERT INTO `set_weight` (`weight_id`, `description`, `amount`) VALUES
	(1, 'Small', 50.00),
	(2, 'Medium', 100.00),
	(3, 'Large', 150.00);

-- Dumping structure for table courier_management.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `user_type` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table courier_management.users: ~9 rows (approximately)
DELETE FROM `users`;
INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `status`, `user_type`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', 'admin123', '1', '1', '2022-09-23 02:36:01', '2022-09-23 02:36:01'),
	(43, 'courier', 'courier@gmail.com', 'marvin123', '1', '3', '2022-11-01 12:46:23', '2022-11-01 12:47:47'),
	(44, 'users1', 'users1@gmail.com', 'marvin123', '1', '2', '2022-11-01 12:49:12', '2022-11-01 12:49:12'),
	(45, 'marvin123', 'marvin123@gmial.com', 'marvin123', '1', '2', '2022-11-01 16:32:18', '2022-11-01 16:32:18'),
	(46, 'Mommy', 'mommy@gmail.com', 'marvin123', '1', '2', '2022-11-02 15:47:58', '2022-11-02 15:47:58'),
	(47, 'users123', 'users123@gmail.com', 'marvin123', '1', '2', '2022-11-03 09:14:25', '2022-11-03 09:14:25'),
	(48, 'marvin1234', 'marvin1234@gmail.com', 'marvin123', '1', '2', '2022-11-04 11:59:02', '2022-11-04 11:59:02'),
	(49, 'courier222', 'courier222@gmail.com', 'courier222', '1', '3', '2022-11-04 22:02:16', '2022-11-05 08:13:40'),
	(50, 'courier123', 'courier123@gmail.com', 'marvin123', '3', '3', '2022-11-04 22:08:07', '2022-11-05 08:14:01');

-- Dumping structure for table courier_management.users_notify
DROP TABLE IF EXISTS `users_notify`;
CREATE TABLE IF NOT EXISTS `users_notify` (
  `id_notify` bigint NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL DEFAULT '0',
  `status` tinytext NOT NULL,
  `user_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_notify`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table courier_management.users_notify: ~2 rows (approximately)
DELETE FROM `users_notify`;
INSERT INTO `users_notify` (`id_notify`, `description`, `status`, `user_id`, `created_at`) VALUES
	(13, '7894561 Has been Parcel Accepted by Courier', '0', 47, '2022-11-03 01:18:43'),
	(14, '7894561 Has been Delivered', '0', 47, '2022-11-03 01:20:27'),
	(15, '5777 Has been Unsuccessfull Delivery Attempt', '1', 46, '2022-11-04 01:17:30'),
	(16, '54489 Has been Parcel Accepted by Courier', '1', 44, '2022-11-04 01:29:52'),
	(17, '54489 Has been Shipped', '1', 44, '2022-11-04 01:33:30'),
	(18, '54489 Has been In-Transit', '1', 44, '2022-11-04 01:33:54'),
	(19, '54489 Has been Delivered', '1', 44, '2022-11-04 01:38:23'),
	(20, '7959 Has been Item Collected by Courier', '1', 46, '2022-11-04 02:52:36'),
	(21, '7959 Has been Item Collected by Courier', '1', 46, '2022-11-04 02:55:30'),
	(22, '7959 Has been In-Transit', '1', 46, '2022-11-04 03:17:20'),
	(23, '7959 Has been Delivered', '1', 46, '2022-11-04 03:25:46'),
	(24, '855588 Has been Parcel Accepted by Courier', '1', 44, '2022-11-04 03:32:23'),
	(25, '855588 Has been In-Transit', '1', 44, '2022-11-04 03:33:00'),
	(26, '855588 Has been Delivered', '1', 44, '2022-11-04 03:34:22'),
	(27, '789456411 Has been Parcel Accepted by Courier', '1', 44, '2022-11-04 03:50:02'),
	(28, '789456411 Has been In-Transit', '1', 44, '2022-11-04 03:50:58'),
	(29, '78945611 Has been Parcel Accepted by Courier', '1', 44, '2022-11-04 03:56:36'),
	(30, '78945611 Has been In-Transit', '1', 44, '2022-11-04 03:57:11'),
	(31, '1234555512 Has been Parcel Accepted by Courier', '1', 48, '2022-11-04 04:00:52'),
	(32, '1234555512 Has been In-Transit', '1', 48, '2022-11-04 04:01:13'),
	(33, '1234555512 Has been Delivered', '1', 48, '2022-11-04 04:02:47'),
	(34, '5324324 Has been Parcel Accepted by Courier', '1', 48, '2022-11-04 04:11:21'),
	(35, '5324324 Has been In-Transit', '1', 48, '2022-11-04 04:11:45'),
	(36, '5324324 Has been Delivered', '1', 48, '2022-11-04 04:13:00'),
	(37, '78945611 Has been In-Transit', '1', 44, '2022-11-05 00:45:48'),
	(38, '78945611 Has been Delivered', '1', 44, '2022-11-05 00:45:57');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
