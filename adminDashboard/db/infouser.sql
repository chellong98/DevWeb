-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: cuccut123database
-- ------------------------------------------------------
-- Server version	5.7.21-log

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
-- Table structure for table `usersinfomation`
--

DROP TABLE IF EXISTS `usersinfomation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usersinfomation` (
  `sothutu` int(11) NOT NULL AUTO_INCREMENT,
  `hoten` text,
  `ngaysinh` date DEFAULT NULL,
  `linkfacebook` text,
  `gioitinh` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sothutu`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usersinfomation`
--

LOCK TABLES `usersinfomation` WRITE;
/*!40000 ALTER TABLE `usersinfomation` DISABLE KEYS */;
INSERT INTO `usersinfomation` VALUES (12,'Nguyễn Nhật Long','1998-07-17','https://www.facebook.com/ChelLong7798','on','longnn@ows.com.vn','longvip98','uploadImages/chellong.jpg'),(13,'Lê Đình Hiếu','1998-02-25','https://www.facebook.com/profile.php?id=100022488380981&hc_ref=ARSR0nqv03P_EiKrAugAPUn2NsTCxE4iBcCjDc7LPRdRFOD4k20UFn8pqxCSa0KpG3c&fref=nf','on','a7a7lovea7@gmail.com','cuccut123','uploadImages/sucvathieu.jpg'),(15,'Giấy Nháp','1998-02-13','https://www.facebook.com/GiayNhapcoder','on','giaynhapcoder@gmail.com','cuccut123','uploadImages/giaynhap.jpg');
/*!40000 ALTER TABLE `usersinfomation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'cuccut123database'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-09 16:40:53
