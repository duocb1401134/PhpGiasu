-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: giasu
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Table structure for table `buoitrongngay`
--

DROP TABLE IF EXISTS `buoitrongngay`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buoitrongngay` (
  `ID_GS` int(11) NOT NULL,
  `ST2` tinyint(1) NOT NULL DEFAULT '0',
  `ST3` tinyint(1) NOT NULL DEFAULT '0',
  `ST4` tinyint(1) NOT NULL DEFAULT '0',
  `ST5` tinyint(1) NOT NULL DEFAULT '0',
  `ST6` tinyint(1) NOT NULL DEFAULT '0',
  `ST7` tinyint(1) NOT NULL DEFAULT '0',
  `SCN` tinyint(1) NOT NULL DEFAULT '0',
  `CT2` tinyint(1) NOT NULL DEFAULT '0',
  `CT3` tinyint(1) NOT NULL DEFAULT '0',
  `CT4` tinyint(1) NOT NULL DEFAULT '0',
  `CT5` tinyint(1) NOT NULL DEFAULT '0',
  `CT6` tinyint(1) NOT NULL DEFAULT '0',
  `CT7` tinyint(1) NOT NULL DEFAULT '0',
  `CCN` tinyint(1) NOT NULL DEFAULT '0',
  `TT2` tinyint(1) NOT NULL DEFAULT '0',
  `TT3` tinyint(1) NOT NULL DEFAULT '0',
  `TT4` tinyint(1) NOT NULL DEFAULT '0',
  `TT5` tinyint(1) NOT NULL DEFAULT '0',
  `TT6` tinyint(1) NOT NULL DEFAULT '0',
  `TT7` tinyint(1) NOT NULL DEFAULT '0',
  `TCN` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_GS`),
  CONSTRAINT `FK_REFERENCE_36` FOREIGN KEY (`ID_GS`) REFERENCES `giasu` (`ID_GS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buoitrongngay`
--

LOCK TABLES `buoitrongngay` WRITE;
/*!40000 ALTER TABLE `buoitrongngay` DISABLE KEYS */;
INSERT INTO `buoitrongngay` VALUES (6,1,0,0,0,0,0,0,1,0,0,0,0,0,0,1,0,0,0,0,0,0);
/*!40000 ALTER TABLE `buoitrongngay` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chieusinh`
--

DROP TABLE IF EXISTS `chieusinh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chieusinh` (
  `ID_CHIEUSINH` int(11) NOT NULL AUTO_INCREMENT,
  `ID_IMG` int(11) DEFAULT NULL,
  `ID_GS` int(11) DEFAULT NULL,
  `ID_MONHOC` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TEN_CHIEUSINH` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MOTA_CHIEUSINH` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NGAYMO_CHIEUSINH` date DEFAULT NULL,
  `ND_CS` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_CHIEUSINH`),
  KEY `FK_REFERENCE_24` (`ID_IMG`),
  KEY `FK_REFERENCE_31` (`ID_MONHOC`),
  KEY `FK_REFERENCE_32` (`ID_GS`),
  CONSTRAINT `FK_REFERENCE_24` FOREIGN KEY (`ID_IMG`) REFERENCES `image` (`ID_IMG`),
  CONSTRAINT `FK_REFERENCE_31` FOREIGN KEY (`ID_MONHOC`) REFERENCES `monhoc` (`ID_MONHOC`),
  CONSTRAINT `FK_REFERENCE_32` FOREIGN KEY (`ID_GS`) REFERENCES `giasu` (`ID_GS`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chieusinh`
--

LOCK TABLES `chieusinh` WRITE;
/*!40000 ALTER TABLE `chieusinh` DISABLE KEYS */;
INSERT INTO `chieusinh` VALUES (2,9,6,'T1','Anh Van','hu hứ','2016-08-06','<p>hư ha</p>\r\n\r\n<p><img alt=\"\" src=\"/upload/images/Screenshot%20(5)(1).png\" /></p>\r\n'),(6,21,6,'AVCB1','Anhh van can bản 1','bao đậu','2017-05-11','<p>Giới thiệu bản th&acirc;n kh&ocirc;ng nằm ở việc chỉ n&ecirc;u t&ecirc;n m&igrave;nh. Những th&ocirc;ng tin kh&aacute;c bạn c&oacute; thể kể th&ecirc;m l&agrave; qu&ecirc; qu&aacute;n, c&ocirc;ng việc, một v&agrave;i sở th&iacute;ch&hellip; Tuy nhi&ecirc;n, nội dung c&acirc;u chuyện, văn phong c&oacute; thể linh hoạt t&ugrave;y v&agrave;o mỗi ho&agrave;n cảnh.</p>\r\n\r\n<p>Nh&igrave;n chung, việc giới thiệu bản th&acirc;n c&oacute; thể chia th&agrave;nh ba phần nhỏ: Ch&agrave;o hỏi, th&ecirc;m th&ocirc;ng tin cơ bản v&agrave; chia sẻ sở th&iacute;ch.</p>\r\n\r\n<p><img alt=\"\" src=\"/giasu/images/molop/1-b1-a1-2690-1456828693.jpg\" style=\"height:300px; width:500px\" /></p>\r\n');
/*!40000 ALTER TABLE `chieusinh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dangkychieusinh`
--

DROP TABLE IF EXISTS `dangkychieusinh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dangkychieusinh` (
  `ID_HOCVIEN` int(11) NOT NULL,
  `ID_CHIEUSINH` int(11) NOT NULL,
  PRIMARY KEY (`ID_HOCVIEN`,`ID_CHIEUSINH`),
  KEY `FK_REFERENCE_29` (`ID_CHIEUSINH`),
  CONSTRAINT `FK_REFERENCE_28` FOREIGN KEY (`ID_HOCVIEN`) REFERENCES `hocvien` (`ID_HOCVIEN`),
  CONSTRAINT `FK_REFERENCE_29` FOREIGN KEY (`ID_CHIEUSINH`) REFERENCES `chieusinh` (`ID_CHIEUSINH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dangkychieusinh`
--

LOCK TABLES `dangkychieusinh` WRITE;
/*!40000 ALTER TABLE `dangkychieusinh` DISABLE KEYS */;
/*!40000 ALTER TABLE `dangkychieusinh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dangkynoiday`
--

DROP TABLE IF EXISTS `dangkynoiday`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dangkynoiday` (
  `ID_TINH` int(11) DEFAULT NULL,
  `ID_HUYEN` int(11) DEFAULT NULL,
  `ID_GS` int(11) DEFAULT NULL,
  KEY `FK_REFERENCE_38` (`ID_TINH`),
  KEY `FK_REFERENCE_39` (`ID_HUYEN`),
  KEY `FK_REFERENCE_40` (`ID_GS`),
  CONSTRAINT `FK_REFERENCE_38` FOREIGN KEY (`ID_TINH`) REFERENCES `tinh` (`ID_TINH`),
  CONSTRAINT `FK_REFERENCE_39` FOREIGN KEY (`ID_HUYEN`) REFERENCES `huyen` (`ID_HUYEN`),
  CONSTRAINT `FK_REFERENCE_40` FOREIGN KEY (`ID_GS`) REFERENCES `giasu` (`ID_GS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dangkynoiday`
--

LOCK TABLES `dangkynoiday` WRITE;
/*!40000 ALTER TABLE `dangkynoiday` DISABLE KEYS */;
/*!40000 ALTER TABLE `dangkynoiday` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `day`
--

DROP TABLE IF EXISTS `day`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `day` (
  `ID_GS` int(11) NOT NULL,
  `ID_MONHOC` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  KEY `FK_REFERENCE_30` (`ID_MONHOC`),
  KEY `FK_REFERENCE_33` (`ID_GS`),
  CONSTRAINT `FK_REFERENCE_30` FOREIGN KEY (`ID_MONHOC`) REFERENCES `monhoc` (`ID_MONHOC`),
  CONSTRAINT `FK_REFERENCE_33` FOREIGN KEY (`ID_GS`) REFERENCES `giasu` (`ID_GS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `day`
--

LOCK TABLES `day` WRITE;
/*!40000 ALTER TABLE `day` DISABLE KEYS */;
INSERT INTO `day` VALUES (6,'AVCB1'),(6,'AVCB2');
/*!40000 ALTER TABLE `day` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `giasu`
--

DROP TABLE IF EXISTS `giasu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `giasu` (
  `ID_GS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_IMG` int(11) DEFAULT '1',
  `ID_TRINHDO` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ID_KHOINGANH` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TEN_GS` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GIOITINH_GS` tinyint(1) DEFAULT NULL,
  `NGAYSINH_GS` date DEFAULT NULL,
  `SDT_GS` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMAIL_GS` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MATKHAU_GS` varbinary(100) DEFAULT NULL,
  `GIOITHIEU_GS` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NOICONGTAC_GS` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DUYET_GS` tinyint(1) DEFAULT '0',
  `LUONGKHOIDIEM_GS` int(11) DEFAULT NULL,
  `LUONGCAONHAT_GS` int(11) DEFAULT NULL,
  `CHUYENNGANH_GS` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TG_DK` datetime DEFAULT NULL,
  `ADMIN` tinyint(1) DEFAULT '0',
  `DAXEM_GS` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`ID_GS`),
  KEY `FK_REFERENCE_1` (`ID_IMG`),
  KEY `FK_REFERENCE_12` (`ID_TRINHDO`),
  KEY `FK_REFERENCE_34` (`ID_KHOINGANH`),
  CONSTRAINT `FK_REFERENCE_1` FOREIGN KEY (`ID_IMG`) REFERENCES `image` (`ID_IMG`),
  CONSTRAINT `FK_REFERENCE_12` FOREIGN KEY (`ID_TRINHDO`) REFERENCES `trinhdo` (`ID_TRINHDO`),
  CONSTRAINT `FK_REFERENCE_34` FOREIGN KEY (`ID_KHOINGANH`) REFERENCES `khoinganh` (`ID_KHOINGANH`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `giasu`
--

LOCK TABLES `giasu` WRITE;
/*!40000 ALTER TABLE `giasu` DISABLE KEYS */;
INSERT INTO `giasu` VALUES (6,12,'dh','CNTT','Nguyễn Tấn Được',1,'1996-01-06','01868149511','tanduoc13@gmail.com','\�S�Y\�\Z��Ct�F\�T�\�eM^S�\0\n%��I5j~*�֥\�l\�z\�r���','Là thành viên kỳ cựu của trang web','Trường Đại Học Cần Thơ',1,1000,300,'Tin Học Ứng Dụng',NULL,1,1),(7,1,'ch',NULL,NULL,2,NULL,NULL,'tranminhan@gmail.com','\�S�Y\�\Z��Ct�F\�T�\�eM^S�\0\n%��I5j~*�֥\�l\�z\�r���',NULL,NULL,1,NULL,NULL,NULL,NULL,0,1),(8,1,'ths',NULL,'Trần Minh An',NULL,NULL,NULL,'ntdhoctap@gmail.com','\�S�Y\�\Z��Ct�F\�T�\�eM^S�\0\n%��I5j~*�֥\�l\�z\�r���',NULL,NULL,1,NULL,NULL,NULL,'2017-03-04 18:30:28',0,0),(9,1,'tc',NULL,'Tran Thien Thanh',NULL,NULL,NULL,'thienthu123@gmail.com','\�S�Y\�\Z��Ct�F\�T�\�eM^S�\0\n%��I5j~*�֥\�l\�z\�r���',NULL,NULL,1,NULL,NULL,NULL,'2017-03-04 18:31:23',0,0),(10,1,'cd',NULL,'Vu Van Vô',1,'1990-02-10','098080808','vanvo123@gmail.com','\�S�Y\�\Z��Ct�F\�T�\�eM^S�\0\n%��I5j~*�֥\�l\�z\�r���','Chuyên môn các lĩnh vực ngôn ngữ mới','Trường Cao Đăng Cần Thơ',1,NULL,NULL,'Công nghệ thông tin','2017-03-04 18:32:08',0,0),(17,1,NULL,NULL,'Vo Nhat Minh',1,'2010-09-02','099968989','vnminh12@gmail.com','\�S�Y\�\Z��Ct�F\�T�\�eM^S�\0\n%��I5j~*�֥\�l\�z\�r���','Hang hái trong việc day hoc','Đại Học Cần Thơ',0,100000,200000,NULL,NULL,0,0),(18,1,'dh','CNTT','Võ Nhật Minh',1,'1996-06-01','01697914677','vnminh123@gmail.com','\�S�Y\�\Z��Ct�F\�T�\�eM^S�\0\n%��I5j~*�֥\�l\�z\�r���','Thợ mọc','Cần Thơ',0,10000,20000,'Tinh hoc ung dung',NULL,0,0),(19,1,NULL,NULL,'Tran Quang Minh',NULL,NULL,NULL,'tqminh@gmail.com','\�S�Y\�\Z��Ct�F\�T�\�eM^S�\0\n%��I5j~*�֥\�l\�z\�r���',NULL,NULL,0,NULL,NULL,NULL,NULL,0,0),(20,1,NULL,NULL,'Tran Minh Dai',NULL,NULL,NULL,'tmdai@gmail.com','\�S�Y\�\Z��Ct�F\�T�\�eM^S�\0\n%��I5j~*�֥\�l\�z\�r���',NULL,NULL,0,NULL,NULL,NULL,NULL,0,0),(21,1,NULL,NULL,'Tran Minh Anh',NULL,NULL,NULL,'tmanh@gmail.com','\�S�Y\�\Z��Ct�F\�T�\�eM^S�\0\n%��I5j~*�֥\�l\�z\�r���',NULL,NULL,0,NULL,NULL,NULL,NULL,1,0);
/*!40000 ALTER TABLE `giasu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hocvien`
--

DROP TABLE IF EXISTS `hocvien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hocvien` (
  `ID_HOCVIEN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_GS` int(11) DEFAULT NULL,
  `TEN_HOCVIEN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EMAIL__HOCVIEN` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SDT_HOCVIEN` varchar(13) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DIACHI_HOCVIEN` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TG_DK_HV` datetime DEFAULT NULL,
  `DAXEM_HOCVIEN` tinyint(1) DEFAULT '0',
  `DK_TN` tinyint(1) DEFAULT '0',
  `DK_MON` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DK_LOP` tinyint(1) DEFAULT '0',
  `YEUCAU` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_HOCVIEN`),
  KEY `FK_REFERENCE_18` (`ID_GS`),
  CONSTRAINT `FK_REFERENCE_18` FOREIGN KEY (`ID_GS`) REFERENCES `giasu` (`ID_GS`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hocvien`
--

LOCK TABLES `hocvien` WRITE;
/*!40000 ALTER TABLE `hocvien` DISABLE KEYS */;
INSERT INTO `hocvien` VALUES (1,NULL,'Nguyen Van Minh','tanduoc13@gmail.com','01868149511','ban kia',NULL,0,0,'1',0,''),(2,NULL,'aaaa','a@gmail.com','145','ga',NULL,0,0,'0',0,''),(3,6,'Nguyễn Minh Anh','minhanh@gmail.com','01868149511',NULL,NULL,0,0,'0',0,''),(4,7,'Nguyễn Hiếu','Hieunguyen@gmail.com','01868149511',NULL,NULL,1,0,'0',0,''),(9,NULL,'Nguyen Mo Lop b','tanduoc13@gmail.com','01868149511',NULL,'2016-08-23 22:50:02',0,NULL,'T1',1,'lala'),(10,NULL,'Nguyễn Tân Được','tanduoc13@gmail.com','01868149511','day tot vao','2016-08-23 23:20:10',NULL,1,'AVCB1',NULL,'BÊN KIA'),(11,6,'Ngueyn 123','tanduoc13@gmail.com','01868149511','hân','2016-08-24 01:16:52',NULL,0,'AVCB1',0,'nguyen'),(12,NULL,'dat','dat@gmail.com','1234','a','2016-11-30 14:38:25',NULL,NULL,NULL,1,'a'),(13,NULL,'fgf4545','dat@gmail.com','34','fdf','2016-12-21 11:13:41',NULL,NULL,NULL,1,'fdf');
/*!40000 ALTER TABLE `hocvien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `huyen`
--

DROP TABLE IF EXISTS `huyen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `huyen` (
  `ID_HUYEN` int(11) NOT NULL,
  `ID_TINH` int(11) DEFAULT NULL,
  `TEN_HUYEN` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_HUYEN`),
  KEY `FK_REFERENCE_37` (`ID_TINH`),
  CONSTRAINT `FK_REFERENCE_37` FOREIGN KEY (`ID_TINH`) REFERENCES `tinh` (`ID_TINH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `huyen`
--

LOCK TABLES `huyen` WRITE;
/*!40000 ALTER TABLE `huyen` DISABLE KEYS */;
INSERT INTO `huyen` VALUES (1,1,'Thành Phố Long Xuyên'),(2,1,'Thị Xã Châu Đốc'),(3,1,'Huyện Châu Thành'),(4,1,'Huyện Châu Phú'),(5,1,'Huyện Tịnh Biên'),(6,1,'Huyện Tri Tôn'),(7,1,'Huyện Thoại Sơn'),(8,1,'Huyện Chợ Mới'),(9,1,'Huyện Phú Tân'),(10,1,'Huyện Tân Châu'),(11,1,'Huyện An Phú'),(12,2,'Thành Phố Vũng Tàu'),(13,2,'Thành Phố Bà Rịa'),(14,2,'Huyện Long Điền'),(15,2,'Huyện Đất Đỏ'),(16,2,'Huyện Châu Đức'),(17,2,'Huyện Tân Thành'),(18,2,'Huyện Côn Đảo'),(19,2,'Huyện Xuyên Mộc'),(20,3,'Thành Phố Bắc Giang'),(21,3,'Huyện Sơn Động'),(22,3,'Huyện Lục Ngạn'),(23,3,'Huyện Lục Nam'),(24,3,'Huyện Lạng Giang'),(25,3,'Huyện Tân Yên'),(26,3,'Huyện Yên Thế'),(27,3,'Huyện Hiệp Hoà'),(28,3,'Huyện Việt Yên'),(29,3,'Huyện Yên Dũng'),(30,4,'Thị Xã Bắc Kạn'),(31,4,'Huyện Ba Bể'),(32,4,'Huyện Bạch Thông'),(33,4,'Huyện Chợ Đồn'),(34,4,'Huyện Chợ Mới'),(35,4,'Huyện Na Rì'),(36,4,'Huyện Ngân Sơn'),(37,4,'Huyện Pác Nặm'),(38,5,'Thành Phố Bạc Liêu'),(39,5,'Huyện Hồng Dân'),(40,5,'Huyện Hòa Bình'),(41,5,'Huyện Giá Rai'),(42,5,'Huyện Phước Long'),(43,5,'Huyện Vĩnh Lợi'),(44,5,'Huyện Đông Hải'),(45,6,'Thành Phố Bắc Ninh'),(46,6,'Thị Xã Từ Sơn'),(47,6,'Huyện Tiên Du'),(48,6,'Huyện Yên Phong'),(49,6,'Huyện Quế Võ'),(50,6,'Huyện Thuận Thành'),(51,6,'Huyện Lương Tài'),(52,6,'Huyện Gia Bình'),(53,7,'Thành Phố Bến Tre'),(54,7,'Huyện Châu Thành'),(55,7,'Huyện Bình Đại'),(56,7,'Huyện Chợ Lách'),(57,7,'Huyện Thạnh Phú'),(58,7,'Huyện Giồng Trôm'),(59,7,'Huyện Ba Tri'),(60,7,'Huyện Mỏ Cày'),(61,8,'Thành Phố Quy Nhơn'),(62,8,'Thị Xã An Nhơn'),(63,8,'Huyện An Lão'),(64,8,'Huyện Hoài Ân'),(65,8,'Huyện Hoài Nhơn'),(66,8,'Huyện Phù Cát'),(67,8,'Huyện Phù Mỹ'),(68,8,'Huyện Tuy Phước'),(69,8,'Huyện Tây Sơn'),(70,8,'Huyện Vân Canh'),(71,8,'Huyện Vĩnh Thạnh'),(72,9,'Thành Phố Thủ Dầu Một'),(73,9,'Thị Xã Thuận An'),(74,9,'Thị Xã Dĩ An'),(75,9,'Huyện Bến Cát'),(76,9,'Huyện Dầu Tiếng'),(77,9,'Huyện Tân Uyên'),(78,9,'Huyện Phú Giáo'),(79,10,'Thị Xã Đồng Xoài'),(80,10,'Thị Xã Bình Long'),(81,10,'Thị Xã Phước Long'),(82,10,'Huyện Đồng Phú'),(83,10,'Huyện Bù Đăng'),(84,10,'Huyện Bù Đốp'),(85,10,'Huyện Chơn Thành'),(86,10,'Huyện Lộc Ninh'),(87,10,'Huyện Bù Gia Mập'),(88,10,'Huyện Hớn Quản'),(89,11,'Thị Xã La Gi'),(90,11,'Huyện Tuy Phong'),(91,11,'Huyện Bắc Bình'),(92,11,'Huyện Hàm Thuận Bắc'),(93,11,'Huyện Hàm Thuận Nam'),(94,11,'Huyện Hàm Tân'),(95,11,'Huyện Phú Quý'),(96,11,'Huyện Tánh Linh'),(97,11,'Huyện Đức Linh'),(98,11,'TP Phan Thiết'),(99,12,'Thành Phố Cà Mau'),(100,12,'Huyện Đầm Dơi'),(101,12,'Huyện Ngọc Hiển'),(102,12,'Huyện Cái Nước'),(103,12,'Huyện Trần Văn Thời'),(104,12,'Huyện U Minh'),(105,12,'Huyện Thới Bình'),(106,12,'Huyện Năm Căn'),(107,12,'Huyện Phú Tân'),(108,13,'Thị Xã Cao Bằng'),(109,13,'Huyện Bảo Lâm'),(110,13,'Huyện Bảo Lạc'),(111,13,'Huyện Nguyên Bình'),(112,13,'Huyện Thông Nông'),(113,13,'Huyện Hà Quảng'),(114,13,'Huyện Hòa An'),(115,13,'Huyện Trà Lĩnh'),(116,13,'Huyện Trùng Khánh'),(117,13,'Huyện Hạ Lang'),(118,13,'Huyện Phục Hòa'),(119,13,'Huyện Quảng Uyên'),(120,13,'Huyện Thạch An'),(121,14,'Thành phố Buôn Ma Thuột'),(122,14,'Huyện Ea H Leo'),(123,14,'Huyện Krông Buk'),(124,14,'Huyện Krông Năng'),(125,14,'Huyện Ea Súp'),(126,14,'Huyện Cư M gar'),(127,14,'Huyện Krông Pắc'),(128,14,'Huyện Ea Kar'),(129,14,'Huyện M`Đrăk'),(130,14,'Huyện Krông Ana'),(131,14,'Huyện Krông Bông'),(132,14,'Huyện Lăk'),(133,14,'Huyện Buôn Đôn'),(134,14,'Huyện Cư Kuin'),(135,15,'Thị Xã Gia Nghĩa'),(136,15,'Huyện Cư Jút'),(137,15,'Huyện Đắk Glong'),(138,15,'Huyện Đắk Mil'),(139,15,'Huyện Đắk R\'lấp'),(140,15,'Huyện Đắk Song'),(141,15,'Huyện Krông Nô'),(142,15,'Huyện Tuy Đức'),(143,16,'Thành Phố Điện Biên'),(144,16,'Thị Xã Mường Lay'),(145,16,'Huyện Điện Biên Đông'),(146,16,'Huyện Mường Ảng'),(147,16,'Huyện Mường Chà'),(148,16,'Huyện Tuần Giáo'),(149,16,'Huyện Tủa Chùa'),(150,16,'Huyện Mường Nhé'),(151,16,'Huyện Nậm Pồ'),(152,17,'Thành Phố Biên Hòa'),(153,17,'Thị Xã Long Khánh'),(154,17,'Huyện Cẩm Mỹ'),(155,17,'Huyện Định Quán'),(156,17,'Huyện Long Thành'),(157,17,'Huyện Nhơn Trạch'),(158,17,'Huyện Tân Phú'),(159,17,'Huyện Thống Nhất'),(160,17,'Huyện Trảng Bom'),(161,17,'Huyện Vĩnh Cửu'),(162,17,'Huyện Xuân Lộc'),(163,18,'Thành Phố Cao Lãnh'),(164,18,'Thị Xã Hồng Ngự'),(165,18,'Thị Xã Sa Đéc'),(166,18,'Huyện Tam Nông'),(167,18,'Huyện Thanh Bình'),(168,18,'Huyện Cao Lãnh'),(169,18,'Huyện Tháp Mười'),(170,18,'Huyện Châu Thành'),(171,18,'Huyện Tân Nồng'),(172,18,'Huyện Lai Vung'),(173,18,'Huyện Lấp Vò'),(174,19,'Thành phố Pleiku'),(175,19,'Huyện Chư Păh'),(176,19,'Huyện Mang Yang'),(177,19,'Huyện Kbang'),(178,19,'Thị xã An Khê'),(179,19,'Huyện Kông Chro'),(180,19,'Huyện Đức Cơ'),(181,19,'Huyện Chưprông'),(182,19,'Huyện Chư Sê'),(183,19,'Huyện Ayunpa'),(184,19,'Huyện Krông Pa'),(185,19,'Huyện Ia Grai'),(186,19,'Huyện Đăk Đoa'),(187,19,'Huyện Ia Pa'),(188,19,'Huyện Đăk Pơ'),(189,19,'Huyện Phú Thiện'),(190,20,'Thành Phố Hà Giang'),(191,20,'Huyện Đồng Văn'),(192,20,'Huyện Mèo Vạc'),(193,20,'Huyện Yên Minh'),(194,20,'Huyện Quản Bạ'),(195,20,'Huyện Bắc Mê'),(196,20,'Huyện Vị Xuyên'),(197,20,'Huyện Bắc Quang'),(198,20,'Huyện Hoàng Su Phì'),(199,20,'Huyện Xín Mần'),(200,20,'Huyện Quang Bình'),(201,21,'Thị xã Phủ Lý'),(202,21,'Huyện Duy Tiên'),(203,21,'Huyện Kim Bảng'),(204,21,'Huyện Lý Nhân'),(205,21,'Huỵện Thanh Liêm'),(206,21,'Huyện Bình Lục'),(207,22,'Thành Phố Hà Tỉnh'),(208,22,'Thị Xã Hồng Lĩnh'),(209,22,'Huyện Cẩm Xuyên'),(210,22,'Huyện Can Lộc'),(211,22,'Huyện Đức Thọ'),(212,22,'Huyện Hương Khê'),(213,22,'Huyện Hương Sơn'),(214,22,'Huyện Kỳ Anh'),(215,22,'Huyện Nghi Xuân'),(216,22,'Huyện Thạch Hà'),(217,22,'Huyện Vũ Quang'),(218,22,'Huyện Lộc Hà'),(219,23,'Thành Phố Hải Dương'),(220,23,'Thị Xã Chí Linh'),(221,23,'Huyện Bình Giang'),(222,23,'Huyện Cẩm Giàng'),(223,23,'Huyện Nam Sách'),(224,23,'Huyện Thanh Hà'),(225,23,'Huyện Kim Thành'),(226,23,'Huyện Kinh Môn'),(227,23,'Huyện Gia Lộc'),(228,23,'Huyện Tứ Kỳ'),(229,23,'Huyện Thanh Miện'),(230,23,'Huyện Ninh Giang'),(231,24,'Thành Phố Vị Thanh'),(232,24,'Thị Xã Ngã Bảy'),(233,24,'Huyện Long Mỹ'),(234,24,'Huyện Châu Thành'),(235,24,'Huyện Châu Thành A'),(236,24,'Huyện Vị Thủy'),(237,24,'Huyện Phụng Hiệp'),(238,25,'Thành Phố Hòa Bình'),(239,25,'Huyện Đà Bắc'),(240,25,'Huyện Kỳ Sơn'),(241,25,'Huyện Lương Sơn'),(242,25,'Huyện Cao Phong'),(243,25,'Huyện Kim Bôi'),(244,25,'Huyện Lạc Thuỷ'),(245,25,'Huyện Mai Châu'),(246,25,'Huyện Tân Lạc'),(247,25,'Huyện Lạc Sơn'),(248,25,'Huyện Yên Thuỷ'),(249,26,'Thành Phố Hưng Yên'),(250,26,'Huyện Kim Động'),(251,26,'Huyện Yên Mỹ'),(252,26,'Huyện Phù Cừ'),(253,26,'Huyện Ân Thi'),(254,26,'Huyện Khoái Châu'),(255,26,'Huyện Văn Giang'),(256,26,'Huyện Văn Lâm'),(257,26,'Huyện Mỹ Hào'),(258,26,'Huyện Tiên Lữ'),(259,27,'Thành Phố Nha Trang'),(260,27,'Thành Phố Cam Ranh'),(261,27,'Huyện Khánh Sơn'),(262,27,'Huyện Khánh Vĩnh'),(263,27,'Huyện Cam Lâm'),(264,27,'Huyện Diên Khánh'),(265,27,'Huyện Ninh Hòa'),(266,27,'Huyện Trường Sa'),(267,27,'Huyện Vạn Ninh'),(268,28,'Thành Phố Rạch Giá'),(269,28,'Thị Xã Hà Tiên'),(270,28,'Huyện An Biên'),(271,28,'Huyện An Minh'),(272,28,'Huyện Châu Thành'),(273,28,'Huyện Giồng Riềng'),(274,28,'Huyện Gò Quao'),(275,28,'Huyện Hòn Đất'),(276,28,'Huyện Kiên Hải'),(277,28,'Huyện Kiên Lương'),(278,28,'Huyện Phú Quốc'),(279,28,'Huyện Tân Hiệp'),(280,28,'Huyện U Minh Thượng'),(281,28,'Huyện Vĩnh Thuận'),(282,28,'Huyện Giang Thành'),(283,29,'Thành Phố Kon Tum'),(284,29,'Huyện Đak Hà'),(285,29,'Huyện Đak Tô'),(286,29,'Huyện Ngọc Hồi'),(287,29,'Huyện Đak Glêi'),(288,29,'Huyện Sa Thầy'),(289,29,'Huyện Kon Rẫy'),(290,29,'Huyện Kon Plong'),(291,29,'Huyện Tu Mơ Rông'),(292,30,'Thị Xã Lai Châu'),(293,30,'Huyện Tam Đường'),(294,30,'Huyện Than Uyên'),(295,30,'Huyện Phong Thổ'),(296,30,'Huyện Sìn Hồ'),(297,30,'Huyện Mường Tè'),(298,30,'Huyện Tân Uyên'),(299,31,'Thành Phố Đà Lạt'),(300,31,'Thành Phố Bảo Lộc'),(301,31,'Huyện Bảo Lâm'),(302,31,'Huyện Cát Tiên'),(303,31,'Huyện Di Linh'),(304,31,'Huyện Đam Rông'),(305,31,'Huyện Đạ Huoai'),(306,31,'Huyện Đạ Tẻh'),(307,31,'Huyện Đơn Dương'),(308,31,'Huyện Lạc Dương'),(309,31,'Huyện Lâm Hà'),(310,31,'Huyện Đức Trọng'),(311,32,'Thành Phố Lạng Sơn'),(312,32,'Huyện Tràng Định'),(313,32,'Huyện Văn Lãng'),(314,32,'Huyện Hữu Lũng'),(315,32,'Huyện Cao Lộc'),(316,32,'Huyện Lộc Bình'),(317,32,'Huyện Đình Lập'),(318,32,'Huyện Chi Lăng'),(319,32,'Huyện Văn Quan'),(320,32,'Huyện Bình Gia'),(321,32,'Huyện Bắc Sơn'),(322,33,'Thành Phố Lào Cai'),(323,33,'Huyện Bảo Thắng'),(324,33,'Huyện Bắc Hà'),(325,33,'Huyện Bảo Yên'),(326,33,'Huyện Bát Xát'),(327,33,'Huyện Mường Khương'),(328,33,'Huyện Sa Pa'),(329,33,'Huyện Si Ma Cai'),(330,33,'Huyện Văn Bàn'),(331,34,'Thành Phố Tân An'),(332,34,'Huyện Cần Giuộc'),(333,34,'Huyện Châu Thành'),(334,34,'Huyện Thủ Thừa'),(335,34,'Huyện Bến Lức'),(336,34,'Huyện Thạnh Hoá'),(337,34,'Huyện Cần Đước'),(338,34,'Huyện Tân Trụ'),(339,34,'Huyện Đức Hoà'),(340,34,'Huyện Tân Hưng'),(341,34,'Huyện Vĩnh Hưng'),(342,34,'Huyện Tân Thạnh'),(343,34,'Huyện Đức Huệ'),(344,34,'Huyện Mộc Hóa'),(345,35,'Thành Phố Nam Định'),(346,35,'Huyện Xuân Trường'),(347,35,'Huyện Giao Thủy'),(348,35,'Huyện Hải Hậu'),(349,35,'Huyện Nghĩa Hưng'),(350,35,'Huyện Nam Trực'),(351,35,'Huyện Trực Ninh'),(352,35,'Huyện Vụ Bản'),(353,35,'Huyện Ý Yên'),(354,35,'Huyện Mỹ Lộc'),(355,36,'Thành Phố Vinh'),(356,36,'Thị Xã Cửa Lò'),(357,36,'Thị Xã Thái Hòa'),(358,36,'Huyện Anh Sơn'),(359,36,'Huyện Con Cuông'),(360,36,'Huyện Diễn Châu'),(361,36,'Huyện Đô Lương'),(362,36,'Huyện Hưng Nguyên'),(363,36,'Huyện Quỳ Châu'),(364,36,'Huyện Kỳ Sơn'),(365,36,'Huyện Nam Đàn'),(366,36,'Huyện Nghi Lộc'),(367,36,'Huyện Nghĩa Đàn'),(368,36,'Huyện Quế Phong'),(369,36,'Huyện Quỳ Hợp'),(370,36,'Huyện Quỳnh Lưu'),(371,36,'Huyện Tân Kỳ'),(372,36,'Huyện Tương Dương'),(373,36,'Huyện Thành Chương'),(374,36,'Huyện Yên Thành'),(375,37,'Thành Phố Ninh Bình'),(376,37,'Thị Xã Tam Điệp'),(377,37,'Huyện Hoa Lư'),(378,37,'Huyện Gia Viễn'),(379,37,'Huyện Nho Quan'),(380,37,'Huyện Yên Mô'),(381,37,'Huyện Kim Sơn'),(382,37,'Huyện Yên Khánh'),(383,38,'Thành Phố Phan Rang'),(384,38,'Huyện Bác Ái'),(385,38,'Huyện Ninh Hải'),(386,38,'Huyện Ninh Phước'),(387,38,'Huyện Ninh Sơn'),(388,38,'Huyện Thuận Nam'),(389,38,'Huyện Thuận Bắc'),(390,39,'Thành Phố Việt Trì'),(391,39,'Thị Xã Phú Thọ'),(392,39,'Huyện Phù Ninh'),(393,39,'Huyện Đoan Hùng'),(394,39,'Huyện Thanh Ba'),(395,39,'Huyện Hạ Hòa'),(396,39,'Huyện Lâm Thao'),(397,39,'Huyện Cẩm Khê'),(398,39,'Huyện Yên Lập'),(399,39,'Huyện Tam Nông'),(400,39,'Huyện Thanh Thủy'),(401,39,'Huyện Thanh Sơn'),(402,39,'Huyện Tân Sơn'),(403,40,'Thành Phố Đồng Hới'),(404,40,'Huyện Minh Hóa'),(405,40,'Huyện Tuy Hóa'),(406,40,'Huyện Quảng Trạch'),(407,40,'Huyện Bố Trạch'),(408,40,'Huyện Quảng Ninh'),(409,40,'Huyện Lệ Thủy'),(410,41,'Thành Phố Tam Kỳ'),(411,41,'Thành Phố Hội An'),(412,41,'Huyện Thăng Bình'),(413,41,'Huyện Duy Xuyên'),(414,41,'Huyện Điện Bàn'),(415,41,'Huyện Đại Lộc'),(416,41,'Huyện Quế Sơn'),(417,41,'Huyện Hiệp Đức'),(418,41,'Huyện Phước Sơn'),(419,41,'Huyện Tiên Phước'),(420,41,'Huyện Bắc Trà My'),(421,41,'Huyện Nam Trà My'),(422,41,'Huyện Nam Giang'),(423,41,'Huyện Đông Giang'),(424,41,'Huyện Tây Giang'),(425,41,'Huyện Phú Ninh'),(426,41,'Huyện Nông Sơn'),(427,42,'Thành Phố Quảng Ngãi'),(428,42,'Huyện Ba Tơ'),(429,42,'Huyện Bình Sơn'),(430,42,'Huyện Đức Phổ'),(431,42,'Huyện Minh Long'),(432,42,'Huyện Mộ Đức'),(433,42,'Huyện Nghĩa Hành'),(434,42,'Huyện Sơn Hà'),(435,42,'Huyện Sơn Tây'),(436,42,'Huyện Sơn Tịnh'),(437,42,'Huyện Tây Trà'),(438,42,'Huyện Trà Bồng'),(439,42,'Huyện Tư Nghĩa'),(440,42,'Huyện Lý Sơn'),(441,43,'Thành Phố Hạ Long'),(442,43,'Thành Phố Móng Cái'),(443,43,'Thành Phố Cẩm Phả'),(444,43,'Thành Phố Uông Bí'),(445,43,'Thị Xã Quảng Yên'),(446,43,'Huyện Vân Đồn'),(447,43,'Huyện Hoành Bồ'),(448,43,'Huyện Hải Hà'),(449,43,'Huyện Đầm Hà'),(450,43,'Huyện Đông Triều'),(451,43,'Huyện Tiên Yên'),(452,43,'Huyện Bình Liêu'),(453,43,'Huyện Yên Hưng'),(454,43,'Huyện Cô Tô'),(455,43,'Huyện Ba Chẽ'),(456,44,'Thành Phố Đông Hà'),(457,44,'Thị Xã Quảng Trị'),(458,44,'Huyện Đakrông'),(459,44,'Huyện Cam Lộ'),(460,44,'Huyện Gio Linh'),(461,44,'Huyện Hải Lăng'),(462,44,'Huyện Hướng Hoá'),(463,44,'Huyện Vĩnh Linh'),(464,44,'Huyện Triệu Phong'),(465,44,'Huyện Cồn Cỏ'),(466,45,'Thành Phố Sóc Trăng'),(467,45,'Thị Xã Vĩnh Châu'),(468,45,'Huyện Long Phú'),(469,45,'Huyện Mỹ Xuyên'),(470,45,'Huyện Thạnh Trị'),(471,45,'Huyện Ngã Năm'),(472,45,'Huyện Mỹ Tú'),(473,45,'Huyện Kế Sách'),(474,45,'Huyện Cù Lao Dung'),(475,45,'Huyện Trần Đề'),(476,45,'Huyện Châu Thành'),(477,46,'Thành Phố Sơn La'),(478,46,'Huyện Mai Sơn'),(479,46,'Huyện Yên Châu'),(480,46,'Huyện Mộc Châu'),(481,46,'Huyện Mường La'),(482,46,'Huyện Phù Yên'),(483,46,'Huyện Quỳnh Nhai'),(484,46,'Huyện Sông Mã'),(485,46,'Huyện Sốp Cộp'),(486,46,'Huyện Thuận Châu'),(487,46,'Huyện Bắc Yên'),(488,47,'Thị Xã Tây Ninh'),(489,47,'Huyện Hòa Thành'),(490,47,'Huyện Gò Dầu'),(491,47,'Huyện Trảng Bàng'),(492,47,'Huyện Bến Cầu'),(493,47,'Huyện Châu Thành'),(494,47,'Huyện Tân Biên'),(495,47,'Huyện Dương Minh Châu'),(496,47,'Huyện Tân Châu'),(497,48,'Thành Phố Thái Bình'),(498,48,'Huyện Vũ Thư'),(499,48,'Huyện Tiền Hải'),(500,48,'Huyện Kiến Xương'),(501,48,'Huyện Thái Thụy'),(502,48,'Huyện Đông Hưng'),(503,48,'Huyện Quỳnh Phụ'),(504,48,'Huyện Hưng Hà'),(505,49,'Thành Phố Thái Nguyên'),(506,49,'Thị Xã Sông Công'),(507,49,'Huyện Đại Từ'),(508,49,'Huyện Định Hóa'),(509,49,'Huyện Đồng Hỷ'),(510,49,'Huyện Phổ Yên'),(511,49,'Huyện Phú Bình'),(512,49,'Huyện Phú Lương'),(513,49,'Huyện Võ Nhai'),(514,50,'Thành Phố Thanh Hóa'),(515,50,'Thị Xã Bỉm Sơn'),(516,50,'Thị Xã Sầm Sơn'),(517,50,'Huyện Bá Thước'),(518,50,'Huyện Cẩm Thủy'),(519,50,'Huyện Đông Sơn'),(520,50,'Huyện Hà Trung'),(521,50,'Huyện Hậu Lộc'),(522,50,'Huyện Hoằng Hóa'),(523,50,'Huyện Lang Chánh'),(524,50,'Huyện Mường Lát'),(525,50,'Huyện Nga Sơn'),(526,50,'Huyện Ngọc Lặc'),(527,50,'Huyện Như Thanh'),(528,50,'Huyện Như Xuân'),(529,50,'Huyện Nông Cống'),(530,50,'Huyện Quan Hóa'),(531,50,'Huyện Quan Sơn'),(532,50,'Huyện Quảng Xương'),(533,50,'Huyện Thạch Thành'),(534,50,'Huyện Thiệu Hóa'),(535,50,'Huyện Thọ Xuân'),(536,50,'Huyện Thường Xuân'),(537,50,'Huyện TỈNH Gia'),(538,50,'Huyện Triệu Sơn'),(539,50,'Huyện Vĩnh Lộc'),(540,50,'Huyện Yên Định'),(541,51,'Thành Phố Huế'),(542,51,'Thị Xã Hương Thủy'),(543,51,'Thị Xã Hương Trà'),(544,51,'Huyện Phong Điền'),(545,51,'Huyện Quảng Điền'),(546,51,'Huyện Phú Vang'),(547,51,'Huyện Phú Lộc'),(548,51,'Huyện Nam Đông'),(549,51,'Huyện A Lưới'),(550,52,'Thành Phố Mỹ Tho'),(551,52,'Thị Xã Gò Công'),(552,52,'Huyện Cái Bè'),(553,52,'Huyện Cai Lậy'),(554,52,'Huyện Châu Thành'),(555,52,'Huyện Chợ Gạo'),(556,52,'Huyện Gò Công Tây'),(557,52,'Huyện Gò Công Đông'),(558,52,'Huyện Tân Phước'),(559,52,'Huyện Tân Phú Đông'),(560,53,'Thành Phố Trà Vinh'),(561,53,'Huyện Càng Long'),(562,53,'Huyện Tiểu Cần'),(563,53,'Huyện Cầu Kè'),(564,53,'Huyện Trà Cú'),(565,53,'Huyện Châu Thành'),(566,53,'Huyện Cầu Ngang'),(567,53,'Huyện Duyên Hải'),(568,54,'Thành Phố Tuyên Quang'),(569,54,'Huyện Na Hang'),(570,54,'Huyện Chiêm Hoá'),(571,54,'Huyện Hàm Yên'),(572,54,'Huyện Yên Sơn'),(573,54,'Huyện Sơn Dương'),(574,54,'Huyện Lâm Bình'),(575,55,'Thành Phố Vĩnh Long'),(576,55,'Huyện Bình Minh'),(577,55,'Huyện Bình Tân'),(578,55,'Huyện Tam Bình'),(579,55,'Huyện Long Hồ'),(580,55,'Huyện Mang Thít'),(581,55,'Huyện Vũng Liêm'),(582,55,'Huyện Trà Ôn'),(583,56,'Thành Phố Vĩnh Yên'),(584,56,'Thị Xã Phúc Yên'),(585,56,'Huyện Lập Thạch'),(586,56,'Huyện Bình Xuyên'),(587,56,'Huyện Mê Linh'),(588,56,'Huyện Vĩnh Tường'),(589,56,'Huyện Tam Đảo'),(590,56,'Huyện Yên Lạc'),(591,56,'Huyện Tam Dương'),(592,56,'Huyện Sông Lô'),(593,57,'Thành Phố Yên Bái'),(594,57,'Thị Xã Nghĩa Lộ'),(595,57,'Huyện Yên Bình'),(596,57,'Huyện Lục Yên'),(597,57,'Huyện Trấn Yên'),(598,57,'Huyện Văn Yên'),(599,57,'Huyện Văn Chấn'),(600,57,'Huyện Trạm Tấu'),(601,57,'Huyện Mù Cang Chải'),(602,58,'Thành Phố Tuy Hòa'),(603,58,'Thị Xã Sông Cầu'),(604,58,'Huyện Đông Hòa'),(605,58,'Huyện Tây Hòa'),(606,58,'Huyện Tuy An'),(607,58,'Huyện Sông Cầu'),(608,58,'Huyện Đồng Xuân'),(609,58,'Huyện Sơn Hoà'),(610,58,'Huyện Sông Hinh'),(611,58,'Huyện Phú Hoà'),(612,59,'Quận Ninh Kiều'),(613,59,'Quận Cái Răng'),(614,59,'Quận Bình Thủy'),(615,59,'Quận Ô Môn'),(616,59,'Quận Thốt Nốt'),(617,59,'Huyện Cờ Đỏ'),(618,59,'Huyện Phong Điền'),(619,59,'Huyện Vĩnh Thạnh'),(620,59,'Huyện Thới Lai'),(621,60,'Thành Phố Đà Nẵng'),(622,60,'Quận Hải Châu'),(623,60,'Quận Thanh Khê'),(624,60,'Quận Sơn Trà'),(625,60,'Quận Ngũ Hành Sơn'),(626,60,'Quận Liên Chiểu'),(627,60,'Quận Cẩm Lệ'),(628,60,'Huyện Hòa Vang'),(629,60,'Huyện Hoàng Sa'),(630,61,'Quận Dương Kinh'),(631,61,'Quận Đồ Sơn'),(632,61,'Quận Hải An'),(633,61,'Quận Kiến An'),(634,61,'Quận Hồng Bàng'),(635,61,'Quận Ngô Quyền'),(636,61,'Quận Lê Chân'),(637,61,'Huyện An Dương'),(638,61,'Huyện An Lão'),(639,61,'Huyện Bạch Long Vĩ'),(640,61,'Huyện Cát Hải'),(641,61,'Huyện Kiến Thụy'),(642,61,'Huyện Tiên Lãng'),(643,61,'Huyện Vĩnh Bảo'),(644,61,'Huyện Thủy Nguyên'),(645,62,'Quận Ba Đình'),(646,62,'Quận Hoàn Kiếm'),(647,62,'Quận Tây Hồ'),(648,62,'Quận Long Biên'),(649,62,'Quận Cầu Giấy'),(650,62,'Quận Đống Đa'),(651,62,'Quận Hai Bà Trưng'),(652,62,'Quận Hoàng Mai'),(653,62,'Quận Thanh Xuân'),(654,62,'Quận Hà Đông'),(655,62,'Thành Phố Sơn Tây'),(656,62,'Huyện Ba Vì'),(657,62,'Huyện Chương Mỹ'),(658,62,'Huyện Đan Phượng'),(659,62,'Huyện Đông Anh'),(660,62,'Huyện Gia Lâm'),(661,62,'Huyện Hoài Đức'),(662,62,'Huyện Mê Linh'),(663,62,'Huyện Mỹ Đức'),(664,62,'Huyện Phú Xuyên'),(665,62,'Huyện Phúc Thọ'),(666,62,'Huyện Quốc Oai'),(667,62,'Huyện Sóc Sơn'),(668,62,'Huyện Thạch Thất'),(669,62,'Huyện Thanh Oai'),(670,62,'Huyện Thanh Trì'),(671,62,'Huyện Thường Tín'),(672,62,'Huyện Từ Liêm'),(673,62,'Huyện Ứng Hòa'),(674,63,'Quận 1'),(675,63,'Quận 2'),(676,63,'Quận 3'),(677,63,'Quận 4'),(678,63,'Quận 5'),(679,63,'Quận 6'),(680,63,'Quận 7'),(681,63,'Quận 8'),(682,63,'Quận 9'),(683,63,'Quận 10'),(684,63,'Quận 11'),(685,63,'Quận 12'),(686,63,'Quận Bình Tân'),(687,63,'Quận Bình Thạnh'),(688,63,'Quận Gò Vấp'),(689,63,'Quận Phú Nhuận'),(690,63,'Quận Tân Bình'),(691,63,'Quận Tân Phú'),(692,63,'Quận Thủ Đức'),(693,63,'Huyện Bình Chánh'),(694,63,'Huyện Cần Giờ'),(695,63,'Huyện Củ Chi'),(696,63,'Huyện Hóc Môn'),(697,63,'Huyện Nhà Bè');
/*!40000 ALTER TABLE `huyen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `image` (
  `ID_IMG` int(11) NOT NULL AUTO_INCREMENT,
  `NAME_IMG` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MOTA` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_IMG`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,'images/matdinh.jpg','hình mặt định'),(2,'images/tintuc/13600195_1208599452525302_3120510661664070946_n.jpg',NULL),(3,'images/tintuc/13606975_1208599405858640_5970003566829442080_n.jpg',NULL),(4,'images/tintuc/Screenshot (1).png',NULL),(5,'images/tintuc/Screenshot (1).png',NULL),(6,'images/tintuc/13600195_1208599452525302_3120510661664070946_n.jpg',NULL),(7,'images/tintuc/7.jpg',NULL),(8,'images/molop/7.jpg',NULL),(9,'images/molop/8.jpg',NULL),(10,'images/tintuc/1479810941-14798107598882-thumbnail.jpg',NULL),(11,'images/tintuc/1477276885-147727594535995-anh-dai-dien.jpg',NULL),(12,'images/avatar/3.jpg',NULL),(13,'images/molop/1-b1-a1-2690-1456828693.jpg',NULL),(14,'images/molop/1-b1-a1-2690-1456828693.jpg',NULL),(15,'0',NULL),(16,'0',NULL),(17,'$dir2 / $img_name',NULL),(18,'images/molop/17191265_593595904183154_6446638796020354562_n.png',NULL),(19,'images/molop/17191265_593595904183154_6446638796020354562_n.png',NULL),(20,'images/molop/17191265_593595904183154_6446638796020354562_n.png',NULL),(21,'images/molop/17191265_593595904183154_6446638796020354562_n.png',NULL);
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `khoinganh`
--

DROP TABLE IF EXISTS `khoinganh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `khoinganh` (
  `ID_KHOINGANH` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_KHOINGANH` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_KHOINGANH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `khoinganh`
--

LOCK TABLES `khoinganh` WRITE;
/*!40000 ALTER TABLE `khoinganh` DISABLE KEYS */;
INSERT INTO `khoinganh` VALUES ('CNTT','Công Nghệ Thông Tin'),('KHMT','Khoa Học Máy Tính');
/*!40000 ALTER TABLE `khoinganh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lop`
--

DROP TABLE IF EXISTS `lop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lop` (
  `ID_LOP` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_LOP` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_LOP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lop`
--

LOCK TABLES `lop` WRITE;
/*!40000 ALTER TABLE `lop` DISABLE KEYS */;
INSERT INTO `lop` VALUES ('CH','Cao Học'),('ĐH','Đại Học'),('L1','Lớp 1'),('L10','Lớp 10'),('L11','Lớp 11'),('L12','Lớp 12'),('L2','Lớp 2'),('L3','Lớp 3'),('L4','Lớp 4'),('L5','Lớp 5'),('L6','Lớp 6'),('L7','Lớp 7'),('L8','Lớp 8'),('L9','Lớp 9'),('LV','Hướng dẫn luận văn tốt nghiệp');
/*!40000 ALTER TABLE `lop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `monhoc`
--

DROP TABLE IF EXISTS `monhoc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `monhoc` (
  `ID_MONHOC` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `ID_LOP` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TEN_MONHOC` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_MONHOC`),
  KEY `FK_REFERENCE_23` (`ID_LOP`),
  CONSTRAINT `FK_REFERENCE_23` FOREIGN KEY (`ID_LOP`) REFERENCES `lop` (`ID_LOP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `monhoc`
--

LOCK TABLES `monhoc` WRITE;
/*!40000 ALTER TABLE `monhoc` DISABLE KEYS */;
INSERT INTO `monhoc` VALUES ('AVCB1','ĐH','Anh Văn Căn Bản 1'),('AVCB2','ĐH','Anh Văn Căn Bản 2'),('DL10','L10','Địa Lý'),('DL11','L11','Địa Lý'),('DL12','L12','Địa Lý'),('DL4','L4','Địa Lý'),('DL5','L5','Địa Lý'),('DL6','L6','Địa Lý'),('DL7','L7','Địa Lý'),('DL8','L8','Địa Lý'),('DL9','L9','Địa Lý'),('HH10','L10','Hóa Học'),('HH11','L11','Hóa Học'),('HH12','L12','Hóa Học'),('HH8','L8','Hóa Học'),('HH9','L9','Hóa Học'),('KH4','L4','Khoa Học'),('KH5','L5','Khoa Học'),('L4','L4','Tiếng Việt'),('LS10','L10','Lịch Sử'),('LS11','L11','Lịch Sử'),('LS12','L12','Lịch Sử'),('LS4','L4','Lịch Sử'),('LS5','L5','Lịch Sử'),('LS6','L6','Lịch Sử'),('LS7','L7','Lịch Sử'),('LS8','L8','Lịch Sử'),('LS9','L9','Lịch Sử'),('NV10','L10','Ngữ Văn'),('NV11','L11','Ngữ Văn'),('NV12','L12','Ngữ Văn'),('NV6','L6','Ngữ Văn'),('NV7','L7','Ngữ Văn'),('NV8','L8','Ngữ Văn'),('NV9','L9','Ngữ Văn'),('SH10','L10','Sinh Học'),('SH11','L11','Sinh Học'),('SH12','L12','Sinh Học'),('SH6','L6','Sinh Học'),('SH7','L7','Sinh Học'),('SH8','L8','Sinh Học'),('SH9','L9','Sinh Học'),('T1','L1','Toán'),('T10','L10','Toán'),('T11','L11','Toán'),('T12','L12','Toán'),('T2','L2','Toán'),('T3','L3','Toán'),('T4','L4','Toán'),('T5','L5','Toán'),('T6','L6','Toán'),('T7','L7','Toán'),('T8','L8','Toán'),('T9','L9','Toán'),('TA10','L10','Tiếng Anh'),('TA11','L11','Tiếng Anh'),('TA12','L12','Tiếng Anh'),('TA4','L4','Tiếng Anh'),('TA5','L5','Tiếng Anh'),('TA6','L6','Tiếng Anh'),('TA7','L7','Tiếng Anh'),('TA8','L8','Tiếng Anh'),('TA9','L9','Tiếng Anh'),('TH10','L10','Tin Học'),('TH11','L11','Tin Học'),('TH12','L12','Tin Học'),('TH4','L4','Tin Học'),('TH5','L5','Tin Học'),('TH6','L6','Tin Học'),('TH7','L7','Tin Học'),('TH8','L8','Tin Học'),('TH9','L9','Tin Học'),('THO10','L10','Tiếng Hoa'),('THO11','L11','Tiếng Hoa'),('THO12','L12','Tiếng Hoa'),('THO6','L6','Tiếng Hoa'),('THO7','L7','Tiếng Hoa'),('THO8','L8','Tiếng Hoa'),('THO9','L9','Tiếng Hoa'),('TN10','L10','Tiếng Nhật'),('TN11','L11','Tiếng Nhật'),('TN12','L12','Tiếng Nhật'),('TN6','L6','Tiếng Nhật'),('TN7','L7','Tiếng Nhật'),('TN8','L8','Tiếng Nhật'),('TN9','L9','Tiếng Nhật'),('TNXH1','L1','Tự Nhiên- Xã Hội'),('TNXH2','L2','Tự Nhiên- Xã Hội'),('TNXH3','L3','Tự Nhiên- Xã Hội'),('TNXH4','L4','Tự Nhiên- Xã Hội'),('TNXH5','L5','Tự Nhiên- Xã Hội'),('TP10','L10','Tiếng Pháp'),('TP11','L11','Tiếng Pháp'),('TP12','L12','Tiếng Pháp'),('TP6','L6','Tiếng Pháp'),('TP7','L7','Tiếng Pháp'),('TP8','L8','Tiếng Pháp'),('TP9','L9','Tiếng Pháp'),('TV1','L1','Tiếng Việt'),('TV2','L2','Tiếng Việt'),('TV3','L3','Tiếng Việt'),('TV5','L5','Tiếng Việt'),('VL10','L10','Vật Lý'),('VL11','L11','Vật Lý'),('VL12','L12','Vật Lý'),('VL6','L6','Vật Lý'),('VL7','L7','Vật Lý'),('VL8','L8','Vật Lý'),('VL9','L9','Vật Lý');
/*!40000 ALTER TABLE `monhoc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tinh`
--

DROP TABLE IF EXISTS `tinh`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tinh` (
  `ID_TINH` int(11) NOT NULL,
  `TEN_TINH` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_TINH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tinh`
--

LOCK TABLES `tinh` WRITE;
/*!40000 ALTER TABLE `tinh` DISABLE KEYS */;
INSERT INTO `tinh` VALUES (1,'An Giang'),(2,'Bà Rịa- Vũng Tàu'),(3,'Bắc Giang'),(4,'Bắc Kạn'),(5,'Bạc Liêu'),(6,'Bắc Ninh'),(7,'Bến Tre'),(8,'Bình Định'),(9,'Bình Dương'),(10,'Bình Phước'),(11,'Bình Thuận'),(12,'Cà Mau'),(13,'Cao Bằng'),(14,'Đắk Lắk'),(15,'Đắk Nông'),(16,'Điện Biên'),(17,'Đồng Nai'),(18,'Đồng Tháp'),(19,'Gia Lai'),(20,'Hà Giang'),(21,'Hà Nam'),(22,'Hà Tĩnh'),(23,'Hải Dương'),(24,'Hậu Giang'),(25,'Hòa Bình'),(26,'Hương Yên'),(27,'Khánh Hòa'),(28,'Kiên Giang'),(29,'Kon Tum'),(30,'Lai Châu'),(31,'Lâm Đồng'),(32,'Lạng Sơn'),(33,'Lào Cai'),(34,'Long An'),(35,'Nam Định'),(36,'Nghệ An'),(37,'Ninh Bình'),(38,'Ninh Thuận'),(39,'Phú Thọ'),(40,'Quảng Bình'),(41,'Quảng Nam'),(42,'Quảng Ngãi'),(43,'Quảng Ninh'),(44,'Quảng Trị'),(45,'Sóc Trăng'),(46,'Sơn La'),(47,'Tây Ninh'),(48,'Thái Bình'),(49,'Thái Nguyên'),(50,'Thanh Hóa'),(51,'Thừa Thiên Huế'),(52,'Tiền Giang'),(53,'Trà Vinh'),(54,'Tuyên Quang'),(55,'Vĩnh Long'),(56,'Vĩnh Phúc'),(57,'Yên Bái'),(58,'Phú Yên'),(59,'Cần Thơ'),(60,'Đà Nẵng'),(61,'Hải Phòng'),(62,'Hà Nội'),(63,'TP HCM');
/*!40000 ALTER TABLE `tinh` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tintuc`
--

DROP TABLE IF EXISTS `tintuc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tintuc` (
  `ID_TT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_IMG` int(11) DEFAULT NULL,
  `TIEUDE_TT` varchar(400) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NOIDUNG_TT` longtext COLLATE utf8_unicode_ci,
  `GIOITHIEU` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_TT`),
  KEY `FK_REFERENCE_27` (`ID_IMG`),
  CONSTRAINT `FK_REFERENCE_27` FOREIGN KEY (`ID_IMG`) REFERENCES `image` (`ID_IMG`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tintuc`
--

LOCK TABLES `tintuc` WRITE;
/*!40000 ALTER TABLE `tintuc` DISABLE KEYS */;
INSERT INTO `tintuc` VALUES (7,10,'Thực hư phương pháp học giúp trẻ thành “thần đồng”','<p><img alt=\"\" src=\"/GiaSu/images/ttct/images/1479810941-147981063134050-phuong-phap.jpg\" /></p>\r\n\r\n<p>Thời gian gần đây nhiều người chia sẻ rất những hình ảnh về một lớp học có tên là &ldquo;Kích bán cầu não cho trẻ em&rdquo;. Kèm theo những hình ảnh về lớp học là nội dung quảng cáo về ý nghĩa của lớp học này sẽ có thể khiến cho các em nhỏ trở thành siêu nhân, thần đồng&hellip;.</p>\r\n\r\n<p>Nội dung giới thiệu về lớp học này cho thấy, các em học sinh còn nhỏ tuổi, thậm chí là có cả những người lớn sẽ được tham gia những khoá đào tạo rất đặc biệt. Ví dụ như, các học viên sẽ phải bịt mắt lại sờ vào một đồ vật nào đó rồi đoán xem là màu gì. ..</p>\r\n\r\n<p><strong>Bộ GD-ĐT lo ngại làm hại trẻ</strong></p>\r\n\r\n<p>Trao đổi với phóng viên về phương pháp học kích bán cầu não cho trẻ em, PGS.TS Nguyễn Bá Minh, Vụ trưởng Vụ&nbsp;<a href=\"http://www.24h.com.vn/giao-duc-du-hoc-c216.html\">Giáo dục</a>&nbsp;Mầm non, Bộ Giáo dục và Đào tạo bày tỏ: &ldquo;Chúng tôi rất lo ngại với phương pháp &ldquo;kích bán cầu não cho trẻ&rdquo;. Đây là phương pháp chưa từng được công nhận trong hệ thống giáo dục mầm non ở Việt Nam&rdquo;.</p>\r\n\r\n<p>Cũng theo ông Minh, phương pháp &ldquo;kích bán cầu não cho trẻ&rdquo; diễn ra ở một số trung tâm ở Hà Nội và TP.HCM, nằm ngoài nhà trường, không thuộc thẩm quyền quản lý của Bộ GD-ĐT. Tuy nhiên, Bộ GD-ĐT sẽ đề nghị các địa phương vào cuộc, rà soát để chấn chỉnh các trung tâm này.</p>\r\n\r\n<p>Lãnh đạo Bộ GD-ĐT cho biết, nếu cha mẹ muốn con thành &ldquo;thần đồng&rdquo; mà áp dụng phương pháp chưa được thẩm định là thiếu hiểu biết.</p>\r\n\r\n<p>Theo Vụ trưởng Giáo dục Mầm non, nếu cha mẹ ép con, có thể sau này lớn lên, trẻ sẽ &ldquo;sống ảo&rdquo; về những năng lực &ldquo;phi thường&rdquo;. Các em sẽ trở thành người không thực tế, luôn ám ảnh về những năng lực siêu nhiên. Điều này lại làm hại các em.</p>\r\n\r\n<p><img alt=\"\" src=\"/GiaSu/images/ttct/images/1479810941-147981067579408-ong-nguyen-ba-minh.jpg\" /></p>\r\n\r\n<p>Đại diện Bộ GD-ĐT cũng nhấn mạnh: &ldquo;Bộ sẽ lấy ý kiến của các chuyên gia y tế sau tuyên truyền để mọi người thấy rằng, phương pháp học kích hoạt não cho trẻvô cùng nguy hại&rdquo;.</p>\r\n\r\n<p><strong>Thiếu cơ sở khoa học</strong></p>\r\n\r\n<p>Chia sẻ với phóng viên về phương pháp học &ldquo;Kích bán cầu não cho trẻ em&rdquo;, bác sĩ La Đức Cương, Giám đốc Bệnh viện Tâm thần Trung ương cảnh báo, phụ huynh đưa con em mình tham gia các lớp huấn luyện kích bán cầu là một việc làm vô cùng sai lầm. Cho đến nay chưa có bằng chứng nghiên cứu về tính hiệu quả của nó đến sự thành công hay năng lực vượt trội của những đứa trẻ được luyện tập phương pháp này trong tương lai.</p>\r\n\r\n<p>&ldquo;Đây là phương pháp thiếu cơ sở khoa học. Nếu cha mẹ bắt con học sẽ gây ra áp lực cho trẻ, suy nhược cơ thể và trầm cảm&rdquo;, bác sĩ La Đức Cương nói.</p>\r\n\r\n<p>Theo bác sĩ Cương, bộ não của con người sẽ tiếp thu một cách từ từ, đúng quy trình từ đó mới giúp trẻ trưởng thành đúng quy luật. Vì thế, việc ông bố bà mẹ đưa con mình đến các lớp tập huấn để làm ra nhưng việc &ldquo;hơn người&rdquo;, khiến bộ não của trẻ hoạt động trái quy luật tự nhiên, não bộ hoạt động sai nguyên tắc.&nbsp;</p>\r\n\r\n<p>&ldquo;Việc tập huấn kích bán cầu não sẽ biến những em nhỏ trở thành những con người lập dị, không hoà nhập với cộng đồng khi tất cả các em sẽ luôn suy nghĩ rằng mình có khả năng hơn người&hellip;&rdquo;, Giám đốc Bệnh viện Tâm thần Trung ương cho biết thêm.</p>\r\n\r\n<p>Đồng quan điểm, PGS.TS. Nguyễn Tiến Dũng, Khoa Nhi, Bệnh viện Bạch Mai, người có hơn 30 năm nghiên cứu về sức khỏe trẻ em cũng cho biết, não bộ của trẻ phát triển theo quy luật, quá trình giáo dục phát triển phải theo một quy trình từ từ, không được đốt cháy giai đoạn.</p>\r\n\r\n<p>&ldquo;Đối với những trẻ chậm phát triển về não bộ hay trẻ phát triển toàn diện thì cha mẹ, giáo viên phải có phương pháp dạy cho phù hợp (dựa theo đặc điểm khí chất, nhân cách từng người)&rdquo; , PGS.TS. Nguyễn Tiến Dũng chia sẻ.</p>\r\n\r\n<p>PGS.TS. Nguyễn Tiến Dũng khuyến cáo, tùy năng lực và thiên hướng của trẻ, cha mẹ nên tạo điều kiện cho con được tiếp cận với càng nhiều hoạt động trải nghiệm về ngôn ngữ, ngoại ngữ, âm nhạc, hội họa (màu sắc) càng tốt nhưng phải từ từ, tuyệt đối không đốt cháy giai đoạn.</p>\r\n','Đại diện Bộ GD-ĐT nhấn mạnh: “Bộ sẽ lấy ý kiến của các chuyên gia y tế sau tuyên truyền để mọi người thấy rằng, việc kích hoạt não cho trẻ sẽ vô cùng nguy hại”.'),(8,11,'Thần đồng biết đọc từ 18 tháng tuổi giành điểm “khủng” Olympia','<p>Như đã đưa tin, Phan Đăng Nhật Minh (học sinh lớp 11 trường THPT Hải Lăng, Quảng Trị) &ndash; người được mệnh danh là &ldquo;cậu bé google&rdquo; sẽ góp mặt trong đoàn leo núi Olympia mùa thứ 17.</p>\r\n\r\n<p><img alt=\"\" src=\"/GiaSu/images/ttct/images/1477276885-147727571519783-anh-1.jpg\" style=\"height:288px; width:500px\" /></p>\r\n\r\n<p>Trưa ngày 23/10, cuộc thi tuần của Nhật Minh chính thức lên sóng. Khán giả &ldquo;Đường lên đỉnh Olympia&rdquo; đã được theo dõi cuộc đua gay cấn của bốn nhà leo núi tài ba, trong đó, thần đồng biết đọc, biết tính từ 18 tháng tuổi &ndash; Nhật Minh giành chiến thắng áp đảo.</p>\r\n\r\n<p>Số điểm Nhật Minh giành được sau bốn vòng thi là 400 điểm &ndash; nằm trong danh sách những điểm số cao nhất &ldquo;Đường lên đỉnh Olympia&rdquo; suốt 17 năm qua. Không chỉ rinh về số điểm &ldquo;khủng&rdquo;, Nhật Minh còn khiến khán giả &ldquo;đã mắt&rdquo; với lối chơi nhanh nhạy, chắc chắn.</p>\r\n\r\n<p><img alt=\"\" src=\"/GiaSu/images/ttct/images/1477276886-147727574485171-anh-3.jpg\" style=\"height:273px; width:500px\" /></p>\r\n\r\n<p>Ở phần thi Khởi động, Nhật Minh trả lời đúng 10/12 câu hỏi, giành 100 điểm tròn trĩnh. Trong phần thi Vượt chướng ngại vật, &ldquo;cậu bé google&rdquo; trả lời đúng từ khóa sau hai hàng ngang lật mở, nâng số điểm của mình lên 170 điểm. Phần thi Tăng tốc, Nhật Minh tiếp tục dẫn đầu đoàn đua với 280 điểm.</p>\r\n\r\n<p>Sở hữu số điểm cách biệt với ba bạn chơi nhưng trong phần thi Về đích, Nhật Minh vẫn chọn gói câu hỏi 80 điểm. Với việc trả lời đúng câu hỏi ngôi sao hy vọng, anh đã nâng số điểm của mình lên 370 điểm. Số điểm chung cuộc Nhật Minh có được là 400 điểm nhờ trả lời đúng câu hỏi về đích của các thí sinh khác.</p>\r\n\r\n<p><img alt=\"\" src=\"/GiaSu/images/ttct/images/1477276886-14772757676704-anh-2.jpg\" style=\"height:281px; width:500px\" /></p>\r\n\r\n<p>Đúng như những gì khán giả dự đoán, Phan Đăng Nhật Minh đã &ldquo;khuynh đảo&rdquo; cuộc đua Olympia với số điểm cao ngất. Trên Fanpage chính thức của &ldquo;Đường lên đỉnh Olympia&rdquo;, dân mạng dành nhiều lời khen ngợi &ldquo;có cánh&rdquo; cho chàng trai 17 tuổi.</p>\r\n\r\n<p>&ldquo;<em>Xuất sắc quá. Bạn này quá nhanh, quá nguy hiểm. May mà không có gói 100 điểm, không thì bạn ấy hốt hết điểm của chương trình mất thôi</em>&rdquo;, một nick name hài hước.</p>\r\n\r\n<p>&ldquo;<em>Thực chất, mấy bạn hôm nay đều rất giỏi, đen một nỗi là phải thi chung với Nhật Minh&hellip;</em>&rdquo;, một nick name khác tỏ ra nuối tiếc.</p>\r\n\r\n<p>Đúng như những gì khán giả dự đoán, Phan Đăng Nhật Minh đã &ldquo;khuynh đảo&rdquo; cuộc đua Olympia với số điểm cao ngất. Trên Fanpage chính thức của &ldquo;Đường lên đỉnh Olympia&rdquo;, dân mạng dành nhiều lời khen ngợi &ldquo;có cánh&rdquo; cho chàng trai 17 tuổi.</p>\r\n\r\n<p>&ldquo;<em>Xuất sắc quá. Bạn này quá nhanh, quá nguy hiểm. May mà không có gói 100 điểm, không thì bạn ấy hốt hết điểm của chương trình mất thôi</em>&rdquo;, một nick name hài hước.</p>\r\n\r\n<p>&ldquo;<em>Thực chất, mấy bạn hôm nay đều rất giỏi, đen một nỗi là phải thi chung với Nhật Minh&hellip;</em>&rdquo;, một nick name khác tỏ ra nuối tiếc.</p>\r\n','Chàng trai được mệnh danh là “cậu bé google” giành chiến thắng áp ảo trong cuộc thi tuần của Olympia 2017.');
/*!40000 ALTER TABLE `tintuc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trinhdo`
--

DROP TABLE IF EXISTS `trinhdo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trinhdo` (
  `ID_TRINHDO` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `TEN_TRINHDO` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ID_TRINHDO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trinhdo`
--

LOCK TABLES `trinhdo` WRITE;
/*!40000 ALTER TABLE `trinhdo` DISABLE KEYS */;
INSERT INTO `trinhdo` VALUES ('cd','Cao Đẳng'),('ch','Cao Học'),('dh','Đại Học'),('tc','Trung Cấp'),('ths','Thạc Sĩ'),('ts','Tiến Sĩ');
/*!40000 ALTER TABLE `trinhdo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'giasu'
--

--
-- Dumping routines for database 'giasu'
--
/*!50003 DROP PROCEDURE IF EXISTS `insert_giasu` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_giasu`(IN ten varchar(100),IN email varchar(50),IN pass varchar(50),IN aes_key varchar(100))
BEGIN
    Insert into giasu(TEN_GS,EMAIL_GS,MATKHAU_GS) value(ten,email,aes_encrypt(pass,aes_key));
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `login_giasu` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `login_giasu`(IN email varchar(50),IN pass varchar(50), IN aes_key varchar(100))
BEGIN
    select ID_GS,EMAIL_GS,TEN_GS,GIOITHIEU_GS,aes_decrypt(MATKHAU_GS,aes_key) as MATKHAU,ADMIN,ID_IMG from giasu
    Where EMAIL_GS = email and aes_decrypt(MATKHAU_GS,aes_key)=pass;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-09 15:54:32
