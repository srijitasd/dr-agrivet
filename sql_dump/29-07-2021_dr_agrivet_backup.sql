-- mysqldump-php https://github.com/ifsnop/mysqldump-php
--
-- Host: localhost	Database: dr_agrivet
-- ------------------------------------------------------
-- Server version 	5.5.5-10.4.13-MariaDB
-- Date: Thu, 29 Jul 2021 12:57:04 +0200

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40101 SET @OLD_AUTOCOMMIT=@@AUTOCOMMIT */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `book_appointment`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book_appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `queries` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_appointment`
--

LOCK TABLES `book_appointment` WRITE;
/*!40000 ALTER TABLE `book_appointment` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `book_appointment` VALUES (3,'Ruchika','9836671432','','Kolkata','','','marble floor cleaning','2021-07-13','','Home'),(4,'srijit das','5643564','srijit29032001@gmail.com','10, revarend kali banerjee row','kolkata','700006','Smart Clean Advanced,Smart Clean Regular,Kitchen Degreasing,Restroom Destaining,Sofa-O-Clean,Chair-O-Clean,Carpet-O-Clean,Curtain-O-Clean,Blinds-O-Clean,Wooden Floor Polishing,Marble Floor Cleaning Advanced,Pre and Post Event Cleaning,Post Renovation Clea','2021-07-06','15:14','fdhgdhbd'),(5,'srijit das','5643564','srijit29032001@gmail.com','10, revarend kali banerjee row','kolkata','700006','Smart Clean Advanced,Smart Clean Regular,Kitchen Degreasing,Restroom Destaining,Sofa-O-Clean,Chair-O-Clean,Carpet-O-Clean,Curtain-O-Clean,Blinds-O-Clean,Wooden Floor Polishing,Marble Floor Cleaning Advanced,Pre and Post Event Cleaning,Post Renovation Clea','2021-07-06','15:14','fdhgdhbd'),(6,'srijit das','5643564','srijit29032001@gmail.com','10, revarend kali banerjee row','kolkata','700006','Smart Clean Advanced,Smart Clean Regular,Kitchen Degreasing,Restroom Destaining,Sofa-O-Clean,Chair-O-Clean,Carpet-O-Clean,Curtain-O-Clean,Blinds-O-Clean,Wooden Floor Polishing,Marble Floor Cleaning Advanced,Pre and Post Event Cleaning,Post Renovation Clea','2021-07-06','15:14','fdhgdhbd');
/*!40000 ALTER TABLE `book_appointment` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `book_appointment` with 4 row(s)
--

--
-- Table structure for table `client_details`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` varchar(255) NOT NULL,
  `client_date` varchar(255) NOT NULL,
  `client_time` varchar(255) NOT NULL,
  `client_ip` varchar(255) NOT NULL,
  `client_city` text NOT NULL,
  `online_status` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_details`
--

LOCK TABLES `client_details` WRITE;
/*!40000 ALTER TABLE `client_details` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `client_details` VALUES (21,'1624962680422','2021-06-29','12:31:20','117.99.87.137','Kolkata',1624965176),(22,'1624965173047','2021-06-29','13:12:53','110.227.109.199','Kolkata',1625297309),(23,'1624965173047','2021-06-30','07:55:22','110.227.109.199','Kolkata',1625297309),(24,'1625550062287','2021-07-06','11:11:02 am','110.225.14.249','Kolkata',1627552914);
/*!40000 ALTER TABLE `client_details` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `client_details` with 4 row(s)
--

--
-- Table structure for table `enquiry_table`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enquiry_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` text NOT NULL,
  `mob_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enquiry_table`
--

LOCK TABLES `enquiry_table` WRITE;
/*!40000 ALTER TABLE `enquiry_table` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `enquiry_table` VALUES (28,'srijit das','07003593398','srijit29032001@gmail.com','sd'),(29,'srijit das','07003593398','srijit29032001@gmail.com','dfrhdf'),(30,'srijit das','07003593398','srijit29032001@gmail.com','egfewfgew'),(31,'srijit das','07003593398','srijit29032001@gmail.com','efwegew'),(32,'srijit das','07003593398','srijit29032001@gmail.com','sdgwrgha'),(33,'dipika dalui','1234567890','info.saltyhome@gmail.com','fghdhb');
/*!40000 ALTER TABLE `enquiry_table` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `enquiry_table` with 6 row(s)
--

--
-- Table structure for table `newsletter`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `submit_date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter`
--

LOCK TABLES `newsletter` WRITE;
/*!40000 ALTER TABLE `newsletter` DISABLE KEYS */;
SET autocommit=0;
INSERT INTO `newsletter` VALUES (1,'srijit@gmail.com','2021-06-26 14:14:27'),(2,'srijit@gmail.com','2021-06-26 14:15:19'),(3,'srijit@gmail.com','2021-06-26 14:32:31'),(4,'rahul@gmail.com','2021-06-28 15:22:31');
/*!40000 ALTER TABLE `newsletter` ENABLE KEYS */;
UNLOCK TABLES;
COMMIT;

-- Dumped table `newsletter` with 4 row(s)
--

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;
/*!40101 SET AUTOCOMMIT=@OLD_AUTOCOMMIT */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on: Thu, 29 Jul 2021 12:57:05 +0200
