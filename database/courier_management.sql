-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: courier_management
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `access_token`
--

DROP TABLE IF EXISTS `access_token`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `access_token` (
  `token_id` int NOT NULL AUTO_INCREMENT,
  `access_token` varchar(75) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`token_id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `access_token`
--

LOCK TABLES `access_token` WRITE;
/*!40000 ALTER TABLE `access_token` DISABLE KEYS */;
INSERT INTO `access_token` VALUES (63,'9fbff04c0e8964c528d02bc8ee07686c',1),(64,'76d5399f40a218ef2a5ba4215c443b2c',36),(65,'c52fe8ef8071cb7a21ec059e535f17aa',37),(66,'ffce55b08672313e63c4c99d2decc842',36),(67,'941f920d9c9c71efd72c99c080f5cb8e',1),(68,'5e3a1b4c97befe63054ff964766e2889',36),(69,'54a2cec179cda9f40f701f703a940249',1),(70,'42585d4cd523dc9d112e9b457040f6ac',37),(71,'31774ca7318a385d91033b0f5d248623',36),(72,'bc06f604606a448b5fa06ebe95c18804',37),(73,'a39a049ed1f02b2ebed1af9ae208da7a',36),(74,'79caf95076c4fbe8b11c25236e400163',37),(75,'d0acfc327da04d5a86317dd5b85f4890',1),(76,'b7a807c15ad614c853bb94dff8ed0ed1',37),(77,'618418de7ec752794b901fc4d18304c4',36),(78,'77d678a30588513a4b2785c1ba3ff9cc',36),(79,'79a5e669aea19fcaef6c1af743702318',37),(80,'739c6e1fb7175723c15a62a73f84607c',36),(81,'2ce137b1e1a1734eef86a45be3437e61',36),(82,'bcc56991a9f33e77170df1e710e54cc8',37),(83,'111a6ad0d3c15e76c95c6499c3a976c3',36);
/*!40000 ALTER TABLE `access_token` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `address_info`
--

DROP TABLE IF EXISTS `address_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `address_info` (
  `id_address_info` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_address_info`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address_info`
--

LOCK TABLES `address_info` WRITE;
/*!40000 ALTER TABLE `address_info` DISABLE KEYS */;
INSERT INTO `address_info` VALUES (31,36,'Purok 2, Tibanga-Saray ',NULL,'2022-10-24 08:11:27','2022-10-24 08:11:27'),(32,36,'Msu Naawan iligan city',NULL,'2022-10-26 04:09:34','2022-10-26 04:09:34'),(33,36,'Tomas Cabili Avenue',NULL,'2022-10-26 08:20:28','2022-10-26 08:20:28');
/*!40000 ALTER TABLE `address_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `approval_users`
--

DROP TABLE IF EXISTS `approval_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `approval_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `approval_users`
--

LOCK TABLES `approval_users` WRITE;
/*!40000 ALTER TABLE `approval_users` DISABLE KEYS */;
INSERT INTO `approval_users` VALUES (0,'Pending'),(1,'Confirmed'),(2,'Enable'),(3,'Disapproved');
/*!40000 ALTER TABLE `approval_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courier_details`
--

DROP TABLE IF EXISTS `courier_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `courier_details` (
  `idcourier_details` int NOT NULL AUTO_INCREMENT,
  `p_info_id` int DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idcourier_details`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courier_details`
--

LOCK TABLES `courier_details` WRITE;
/*!40000 ALTER TABLE `courier_details` DISABLE KEYS */;
INSERT INTO `courier_details` VALUES (9,20,'http://localhost:7070/Resume/1666592945.pdf','asdkjfgdsakfgasdif');
/*!40000 ALTER TABLE `courier_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parcel_details`
--

DROP TABLE IF EXISTS `parcel_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parcel_details` (
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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parcel_details`
--

LOCK TABLES `parcel_details` WRITE;
/*!40000 ALTER TABLE `parcel_details` DISABLE KEYS */;
INSERT INTO `parcel_details` VALUES (19,36,37,'ggg ggg','21321321321','3213213','123213',NULL,'Pickup',1,'2022-10-24 08:37:50',12,50.00,'Purok 2, Tibanga-Saray ',NULL),(20,36,37,'Testing Receiver','Purok 2, Tibanga-Saray, iligan City','798754964','13212414141',NULL,'Delivery',2,'2022-10-26 04:07:15',2,50.00,'Purok 2, Tibanga-Saray, Iligan City, Lanao Del Norte, 9200',NULL),(21,36,37,'TEsting I loveyou ','Purok 2, Tibanga-Saray','123215421','456','This is testing','Delivery',2,'2022-10-26 04:09:34',1,50.00,'Msu Naawan iligan city',NULL),(22,36,37,'Tesing 123 123','Tarlac','09688234121','1123123','testingg','Delivery',1,'2022-10-26 08:20:28',2,50.00,'Tomas Cabili Avenue',NULL);
/*!40000 ALTER TABLE `parcel_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parcel_status`
--

DROP TABLE IF EXISTS `parcel_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parcel_status` (
  `id_status` int NOT NULL AUTO_INCREMENT,
  `description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_status`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parcel_status`
--

LOCK TABLES `parcel_status` WRITE;
/*!40000 ALTER TABLE `parcel_status` DISABLE KEYS */;
INSERT INTO `parcel_status` VALUES (1,'Pending Request'),(2,'Parcel Accepted by Courier'),(3,'Item Collected by Courier'),(4,'Shipped'),(5,'In-Transit'),(6,'Arrived at Destination'),(7,'Delivered'),(8,'Picked-up'),(9,'Ready to Pickup'),(10,'Out for Delivery'),(11,'Unsuccessfull Delivery Attempt'),(12,'Parcel Denied by Courier');
/*!40000 ALTER TABLE `parcel_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_info`
--

DROP TABLE IF EXISTS `personal_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_info` (
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
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`p_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_info`
--

LOCK TABLES `personal_info` WRITE;
/*!40000 ALTER TABLE `personal_info` DISABLE KEYS */;
INSERT INTO `personal_info` VALUES (19,36,'marvin','villanea','tapere','Purok 2','Iligan City','Lanao Del Norte','9200','Tibanga-Saray','123','10','2000-06-20','Male','09755983121','http://localhost:7070/images/profile1666593233.png','2022-10-24 06:25:55','2022-10-24 06:33:53'),(20,37,'Testing','Courier','test','Purok 2','Iligan City','Lanao Del Norte','9200','Saray tibanga','','','2022-10-28','M','14214','http://localhost:7070/images/profile1666758321.png','2022-10-24 06:29:05','2022-10-26 04:25:21');
/*!40000 ALTER TABLE `personal_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rate_courier`
--

DROP TABLE IF EXISTS `rate_courier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rate_courier` (
  `id_rate` int NOT NULL AUTO_INCREMENT,
  `user_id` bigint DEFAULT NULL,
  `rate_type` varchar(45) DEFAULT NULL,
  `courier_id` bigint DEFAULT NULL,
  `parcel_id` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_rate`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rate_courier`
--

LOCK TABLES `rate_courier` WRITE;
/*!40000 ALTER TABLE `rate_courier` DISABLE KEYS */;
/*!40000 ALTER TABLE `rate_courier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `set_weight`
--

DROP TABLE IF EXISTS `set_weight`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `set_weight` (
  `weight_id` int NOT NULL AUTO_INCREMENT,
  `description` varchar(45) DEFAULT NULL,
  `amount` decimal(13,2) DEFAULT NULL,
  PRIMARY KEY (`weight_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `set_weight`
--

LOCK TABLES `set_weight` WRITE;
/*!40000 ALTER TABLE `set_weight` DISABLE KEYS */;
INSERT INTO `set_weight` VALUES (1,'Small',50.00),(2,'Medium',100.00),(3,'Large',150.00);
/*!40000 ALTER TABLE `set_weight` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `user_type` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@gmail.com','admin123','1','1','2022-09-23 02:36:01','2022-09-23 02:36:01'),(36,'marvin','marvin@gmail.com','marvin123','1','2','2022-10-24 14:25:55','2022-10-24 14:25:55'),(37,'courier','courier@gmail.com','marvin123','1','3','2022-10-24 14:29:05','2022-10-24 14:53:20');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-29 18:44:50
