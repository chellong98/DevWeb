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
-- Table structure for table `baidang`
--

DROP TABLE IF EXISTS `baidang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `baidang` (
  `idBaiDang` int(11) NOT NULL AUTO_INCREMENT,
  `idNguoiDang` int(11) DEFAULT NULL,
  `noiDungBaiDang` text,
  `ngayDang` datetime DEFAULT NULL,
  PRIMARY KEY (`idBaiDang`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `baidang`
--

LOCK TABLES `baidang` WRITE;
/*!40000 ALTER TABLE `baidang` DISABLE KEYS */;
INSERT INTO `baidang` VALUES (15,12,'{\"text\":\"test :)\",\"image\":\"uploadImages\\\\qiukfmfizb.jpg\",\"imageSize\":{\"width\":1200,\"height\":1920}}','2018-05-05 04:56:18'),(16,12,'{\"text\":\"a\",\"image\":\"uploadImages\\\\lelymmzljr.jpg\",\"imageSize\":{\"width\":1920,\"height\":1200}}','2018-05-05 04:59:01'),(17,12,'{\"text\":\"a\",\"image\":\"uploadImages\\\\xjqokbovzj.jpg\",\"imageSize\":{\"width\":null,\"height\":null}}','2018-05-06 13:11:04'),(21,12,'{\"text\":\"hello\",\"image\":\"uploadImages\\\\dvwsuacoqs.jpg\",\"imageSize\":{\"width\":1200,\"height\":1920}}','2018-05-06 13:43:14');
/*!40000 ALTER TABLE `baidang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commenttable`
--

DROP TABLE IF EXISTS `commenttable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commenttable` (
  `idComment` int(11) NOT NULL,
  `idNguoiDang` int(11) DEFAULT NULL,
  `idBaiDang` int(11) DEFAULT NULL,
  `noiDungComment` text,
  `ngayComment` datetime DEFAULT NULL,
  PRIMARY KEY (`idComment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commenttable`
--

LOCK TABLES `commenttable` WRITE;
/*!40000 ALTER TABLE `commenttable` DISABLE KEYS */;
INSERT INTO `commenttable` VALUES (1,12,1,'no comment','2018-04-23 17:08:27');
/*!40000 ALTER TABLE `commenttable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `liketable`
--

DROP TABLE IF EXISTS `liketable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `liketable` (
  `idLike` int(11) NOT NULL,
  `idBaiDang` int(11) DEFAULT NULL,
  `idNguoiLike` int(11) DEFAULT NULL,
  PRIMARY KEY (`idLike`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `liketable`
--

LOCK TABLES `liketable` WRITE;
/*!40000 ALTER TABLE `liketable` DISABLE KEYS */;
INSERT INTO `liketable` VALUES (1,1,12);
/*!40000 ALTER TABLE `liketable` ENABLE KEYS */;
UNLOCK TABLES;

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
  `imageCover` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sothutu`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usersinfomation`
--

LOCK TABLES `usersinfomation` WRITE;
/*!40000 ALTER TABLE `usersinfomation` DISABLE KEYS */;
INSERT INTO `usersinfomation` VALUES (12,'Nguyễn Nhật Long','1998-07-17','https://www.facebook.com/ChelLong7798','Male','longnn@ows.com.vn','longvip98','uploadImages/chellong.jpg','uploadImages/ACT.jpg'),(13,'Lê Đình Hiếu','1998-02-25','https://www.facebook.com/profile.php?id=100022488380981&hc_ref=ARSR0nqv03P_EiKrAugAPUn2NsTCxE4iBcCjDc7LPRdRFOD4k20UFn8pqxCSa0KpG3c&fref=nf','Male','a7a7lovea7@gmail.com','cuccut123','uploadImages/sucvathieu.jpg','uploadImages/anhbiacuanhap.jpg'),(15,'Giấy Nháp','1998-02-13','https://www.facebook.com/GiayNhapcoder','Male','giaynhapcoder@gmail.com','cuccut123','uploadImages/giaynhap.jpg','uploadImages/anhbiacuanhap.jpg'),(16,'Vũ Thị Linh','1998-11-27','https://www.facebook.com/Vu.highlight','Female','vlinh@gmail.com','cuccut123','uploadImages/linhvu.jpg','uploadImages/anhbiacualinh.jpg'),(17,'a a','2018-04-14','a','Male','a@gmail.com','a','1_DJz5ZUYm6tCGB5TXIU3TNw.png',NULL),(19,'hoang nghiem','2018-04-14','hoangnm','Male','hoangnm@ows.vn','123123','uploadImages/_MG_4858.jpg','uploadImages/ACT.jpg');
/*!40000 ALTER TABLE `usersinfomation` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-06 17:04:44
