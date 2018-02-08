-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 192.168.1.30    Database: nodered
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.23-MariaDB-9+deb9u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `MQTTData`
--

DROP TABLE IF EXISTS `MQTTData`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `MQTTData` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Building` varchar(45) DEFAULT NULL,
  `Location` varchar(45) DEFAULT NULL,
  `Sensor` varchar(45) DEFAULT NULL,
  `Value` varchar(45) DEFAULT NULL,
  `Date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `MQTTData`
--

LOCK TABLES `MQTTData` WRITE;
/*!40000 ALTER TABLE `MQTTData` DISABLE KEYS */;
INSERT INTO `MQTTData` VALUES (1,'asdf','asdf','asdf ','asdf',NULL),(2,'GCH','Room1','Lamp1','1','2018-02-04 05:53:45'),(3,'GCH','Room1','Lamp1','0','2018-02-04 05:53:45'),(4,'GCH','Room1','Lamp1','1','2018-02-04 05:53:46'),(5,'GCH','Room1','Lamp1','0','2018-02-04 05:53:46'),(6,'GCH','Room1','Lamp1','1','2018-02-04 05:53:46'),(7,'GCH','Room1','Lamp1','0','2018-02-04 05:53:46'),(8,'GCH','Room1','Lamp1','1','2018-02-04 05:53:57'),(9,'GCH','Room1','Lamp1','0','2018-02-04 05:53:57'),(10,'GCH','Room1','Lamp1','1','2018-02-04 05:53:58'),(11,'GCH','Room1','Lamp1','0','2018-02-04 05:53:58'),(12,'GCH','Room1','Lamp1','1','2018-02-04 05:53:58'),(13,'GCH','Room1','Lamp1','0','2018-02-04 05:53:58'),(14,'GCH','Room1','Lamp1','1','2018-02-04 05:53:58'),(15,'GCH','Room1','Lamp1','0','2018-02-04 05:53:58'),(16,'GCH','Room1','Lamp1','1','2018-02-04 05:53:58'),(17,'GCH','Room1','Lamp1','0','2018-02-04 05:53:58'),(18,'GCH','Room1','Lamp1','1','2018-02-04 05:53:58'),(19,'GCH','Room1','Lamp1','0','2018-02-04 05:53:58'),(20,'GCH','Room1','Lamp1','1','2018-02-04 05:53:59'),(21,'GCH','Room1','Lamp1','0','2018-02-04 05:53:59'),(22,'GCH','Room1','Lamp1','1','2018-02-04 05:53:59'),(23,'GCH','Room1','Lamp1','0','2018-02-04 05:53:59'),(24,'GCH','Room1','Lamp1','1','2018-02-04 05:53:59'),(25,'GCH','Room1','Lamp1','0','2018-02-04 05:53:59'),(26,'GCH','Room1','Lamp1','1','2018-02-04 05:53:59'),(27,'GCH','Room1','Lamp1','0','2018-02-04 05:54:00'),(28,'GCH','Room1','Lamp1','1','2018-02-04 05:54:00'),(29,'GCH','Room1','Lamp1','0','2018-02-04 05:54:00'),(30,'GCH','Room1','Lamp1','1','2018-02-04 05:54:00'),(31,'GCH','Room1','Lamp1','0','2018-02-04 05:54:00'),(32,'GCH','Room1','Lamp1','1','2018-02-04 05:54:00'),(33,'GCH','Room1','Lamp1','0','2018-02-04 05:54:00'),(34,'GCH','Room1','Lamp1','1','2018-02-04 05:54:01'),(35,'GCH','Room1','Lamp1','0','2018-02-04 05:54:01'),(36,'GCH','Room1','Lamp1','1','2018-02-04 05:54:01'),(37,'GCH','Room1','Lamp1','0','2018-02-04 05:54:01'),(38,'GCH','Room1','Lamp1','1','2018-02-04 05:54:01'),(39,'GCH','Room1','Lamp1','0','2018-02-04 05:54:10'),(40,'GCH','Room1','Lamp1','1','2018-02-04 05:54:11'),(41,'GCH','Room1','Lamp1','0','2018-02-04 05:54:13'),(42,'GCH','Room1','Lamp1','1','2018-02-04 05:54:14'),(43,'GCH','Room1','Lamp1','0','2018-02-04 05:54:16'),(44,'GCH','Room1','Lamp1','1','2018-02-04 05:54:17');
/*!40000 ALTER TABLE `MQTTData` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-02-05 21:34:40
