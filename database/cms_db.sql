
CREATE TABLE IF NOT EXISTS `access_token` (
  `token_id` int NOT NULL AUTO_INCREMENT,
  `access_token` varchar(75) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`token_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `access_token` (`token_id`, `access_token`, `user_id`) VALUES
	(27, '669cee5d6b4288f8311c07b34593499e', 1),
	(28, '798877982c9887e7f55e9a8edf5e597d', 33),
	(29, '17c94913e8f21863c38e35f6393f451a', 1),
	(30, '490f95413f896397978b85f2f40a4431', 34),
	(31, '9054a53214da114d2cd0405649bc5047', 1),
	(32, 'ca1b5d63f36bd66ca1831104d295a916', 34),
	(33, '95e2c7255132dcafac123c13359a9d2a', 34),
	(34, 'dd6388b69bab669116fcc0f7a2dd6869', 34),
	(35, '58cb78e403f2e0555a1973a14817d647', 33),
	(36, 'f296edd9d7c19bf5f40e649033d19e49', 33),
	(37, '2c3399f7327ef85701e4f1653c510553', 33),
	(38, '39dbfdba752ee731be90ddd6a2029dbc', 1),
	(39, '43142ee09b366165dedc0b52e68ef11a', 33),
	(40, '85f2f8e3572bd7bb729abd6da46733f1', 1),
	(41, '7bd36fc84afd3c11efec428c761a0b76', 33),
	(42, '336244e51d643c051313174e8965baa7', 1),
	(43, '4709ff61b722cde69f80ad9c9140e760', 33),
	(44, '0a8c8a02be5ec666877dce42ac5d1f4c', 33),
	(45, '38f71132f5382eb0c9c8ae80a841615d', 1),
	(46, '0901486d4b589231a8f042bfbfa12eab', 33),
	(47, 'fe6f62d460ee1f5feea60d305e5bba81', 33),
	(48, 'fe18b72c6c356ef55c1aa4d2e9cb89f4', 1),
	(49, '54c2e945f5f2447c5a1d9edd7cf438f4', 33);
CREATE TABLE IF NOT EXISTS `approval_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `approval_users` (`id`, `type`) VALUES
	(0, 'Pending'),
	(1, 'Confirmed'),
	(2, 'Enable'),
	(3, 'Disapproved');


CREATE TABLE IF NOT EXISTS `courier_details` (
  `idcourier_details` int NOT NULL AUTO_INCREMENT,
  `p_info_id` int DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idcourier_details`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `courier_details` (`idcourier_details`, `p_info_id`, `resume`, `description`) VALUES
	(8, 17, 'http://localhost:80/Resume/1666244908.pdf', 'awwwwwwww');


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
  `barangay` varchar(255) DEFAULT NULL,
  `house_no` varchar(255) DEFAULT NULL,
  `discrict_code` varchar(255) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`p_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


INSERT INTO `personal_info` (`p_info_id`, `user_id`, `first_name`, `last_name`, `middle_name`, `street`, `city`, `province`, `zip_code`, `barangay`, `house_no`, `discrict_code`, `birthdate`, `gender`, `contact_no`, `created_at`, `updated_at`) VALUES
	(16, 33, 'marvin', 'villanea', 'taper', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '069465465', '2022-10-20 05:46:02', '2022-10-21 07:03:50'),
	(17, 34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-20 05:48:28', '2022-10-20 05:48:28');


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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `status`, `user_type`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', 'admin123', '1', '1', '2022-09-23 02:36:01', '2022-09-23 02:36:01'),
	(33, 'kmtest001', 'kmtest001@gmail.com', '123456789', '1', '2', '2022-10-20 13:46:02', '2022-10-20 13:46:02'),
	(34, 'courier', 'courier@gmail.com', '123456789', '1', '3', '2022-10-20 13:48:28', '2022-10-20 13:49:34');

