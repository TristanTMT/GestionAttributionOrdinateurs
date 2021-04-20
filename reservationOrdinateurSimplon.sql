-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: localhost    Database: test_simplon
-- ------------------------------------------------------
-- Server version	8.0.23

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
-- Table structure for table `computer_user`
--

DROP TABLE IF EXISTS `computer_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `computer_user` (
  `idcomputer_user` int NOT NULL AUTO_INCREMENT,
  `computer_id` int NOT NULL,
  `user_id_reservation` int NOT NULL,
  `hour` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `computerName` varchar(45) NOT NULL,
  PRIMARY KEY (`idcomputer_user`),
  KEY `FK1_idx` (`computer_id`),
  KEY `FK2_idx` (`user_id_reservation`),
  CONSTRAINT `FK1` FOREIGN KEY (`computer_id`) REFERENCES `computers` (`id_computer`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `FK2` FOREIGN KEY (`user_id_reservation`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `computer_user`
--

LOCK TABLES `computer_user` WRITE;
/*!40000 ALTER TABLE `computer_user` DISABLE KEYS */;
INSERT INTO `computer_user` VALUES (9,16,1,'09:30','2021-04-20','Tien-Mi-Tiee','Tristan','Huawei');
/*!40000 ALTER TABLE `computer_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `computers`
--

DROP TABLE IF EXISTS `computers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `computers` (
  `id_computer` int NOT NULL AUTO_INCREMENT,
  `userId` varchar(45) DEFAULT NULL,
  `name_computer` varchar(45) NOT NULL,
  `date` date DEFAULT NULL,
  `used_computer` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_computer`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `computers`
--

LOCK TABLES `computers` WRITE;
/*!40000 ALTER TABLE `computers` DISABLE KEYS */;
INSERT INTO `computers` VALUES (1,NULL,'Apple iPad',NULL,'Non'),(2,NULL,'Asus',NULL,'Non'),(16,NULL,'Huawei',NULL,'Oui'),(17,NULL,'MSI',NULL,'Non');
/*!40000 ALTER TABLE `computers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membres`
--

DROP TABLE IF EXISTS `membres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `membres` (
  `id` int NOT NULL,
  `pseudo` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `motdepasse` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membres`
--

LOCK TABLES `membres` WRITE;
/*!40000 ALTER TABLE `membres` DISABLE KEYS */;
INSERT INTO `membres` VALUES (1,'Admin','admin@admin.com','admin');
/*!40000 ALTER TABLE `membres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `lastName_user` varchar(45) NOT NULL,
  `firstName_user` varchar(45) NOT NULL,
  `use_computer` int DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Tien-Mi-Tiee','Tristan',1);
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

-- Dump completed on 2021-04-20 13:20:47
