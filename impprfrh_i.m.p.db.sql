-- MySQL dump 10.13  Distrib 5.7.23-23, for Linux (x86_64)
--
-- Host: localhost    Database: impprfrh_i.m.p.db
-- ------------------------------------------------------
-- Server version	5.7.23-23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*!50717 SELECT COUNT(*) INTO @rocksdb_has_p_s_session_variables FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'performance_schema' AND TABLE_NAME = 'session_variables' */;
/*!50717 SET @rocksdb_get_is_supported = IF (@rocksdb_has_p_s_session_variables, 'SELECT COUNT(*) INTO @rocksdb_is_supported FROM performance_schema.session_variables WHERE VARIABLE_NAME=\'rocksdb_bulk_load\'', 'SELECT 0') */;
/*!50717 PREPARE s FROM @rocksdb_get_is_supported */;
/*!50717 EXECUTE s */;
/*!50717 DEALLOCATE PREPARE s */;
/*!50717 SET @rocksdb_enable_bulk_load = IF (@rocksdb_is_supported, 'SET SESSION rocksdb_bulk_load = 1', 'SET @rocksdb_dummy_bulk_load = 0') */;
/*!50717 PREPARE s FROM @rocksdb_enable_bulk_load */;
/*!50717 EXECUTE s */;
/*!50717 DEALLOCATE PREPARE s */;

--
-- Table structure for table `advice`
--

DROP TABLE IF EXISTS `advice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `advice` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(20) DEFAULT NULL,
  `advice` varchar(300) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `given_advice` varchar(300) DEFAULT NULL,
  `complete` varchar(10) DEFAULT NULL,
  `block` varchar(10) DEFAULT NULL,
  `time` varchar(15) DEFAULT NULL,
  `date` varchar(15) DEFAULT NULL,
  `customer` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `advice`
--

LOCK TABLES `advice` WRITE;
/*!40000 ALTER TABLE `advice` DISABLE KEYS */;
INSERT INTO `advice` (`id`, `customer_id`, `advice`, `mobile`, `given_advice`, `complete`, `block`, `time`, `date`, `customer`) VALUES (4,'112','Hello  I want to open shop give me advise','9997178512',NULL,NULL,NULL,'09:31:11','26-03-24','naphees'),(5,'','','',NULL,NULL,NULL,'04:55:42','31-03-24',''),(6,'','','',NULL,NULL,NULL,'07:17:13','09-04-24',''),(7,'','','',NULL,NULL,NULL,'08:59:19','05-05-24','');
/*!40000 ALTER TABLE `advice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complain`
--

DROP TABLE IF EXISTS `complain`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `complain` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(20) DEFAULT NULL,
  `complain` varchar(300) DEFAULT NULL,
  `mobile` varchar(12) DEFAULT NULL,
  `complain_action` varchar(300) DEFAULT NULL,
  `complete` varchar(15) DEFAULT NULL,
  `block` varchar(12) DEFAULT NULL,
  `time` varchar(15) DEFAULT NULL,
  `date` varchar(15) DEFAULT NULL,
  `customer` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complain`
--

LOCK TABLES `complain` WRITE;
/*!40000 ALTER TABLE `complain` DISABLE KEYS */;
INSERT INTO `complain` (`id`, `customer_id`, `complain`, `mobile`, `complain_action`, `complete`, `block`, `time`, `date`, `customer`) VALUES (5,'112','Delivery charges  is not best','9997178512',NULL,NULL,NULL,'09:32:46','26-03-24','naphees');
/*!40000 ALTER TABLE `complain` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `hobbies` varchar(50) DEFAULT NULL,
  `birth` varchar(50) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL,
  `town` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `business` varchar(50) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL,
  `email` varchar(44) DEFAULT NULL,
  `webside` varchar(40) DEFAULT NULL,
  `join` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` (`id`, `name`, `password`, `mobile`, `gender`, `hobbies`, `birth`, `image`, `village`, `town`, `district`, `state`, `country`, `time`, `date`, `business`, `pincode`, `email`, `webside`, `join`) VALUES (112,'naphees','$Husen_bca','999717852',NULL,NULL,'2024-03-26','customer_image/Yellow Modern Gadget Store Logo (7).png','khokni','khatauli','m.nagar','up','India','08:28','26-03-24','cosmetic','251201','naphees9997@gmail.com','imppro.in','join');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `employee` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `job` varchar(50) DEFAULT NULL,
  `posted` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL,
  `town` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `time` varchar(55) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` (`id`, `employee`, `password`, `job`, `posted`, `address`, `village`, `town`, `district`, `state`, `country`, `time`, `date`, `gender`, `pincode`, `mobile`) VALUES (6,'naphees','naphees9997',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(20) DEFAULT NULL,
  `feedback` varchar(300) DEFAULT NULL,
  `complete` varchar(12) DEFAULT NULL,
  `block` varchar(12) DEFAULT NULL,
  `time` varchar(15) DEFAULT NULL,
  `date` varchar(15) DEFAULT NULL,
  `customer` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` (`id`, `customer_id`, `feedback`, `complete`, `block`, `time`, `date`, `customer`) VALUES (5,'','',NULL,NULL,'11:48:25','25-03-24',''),(6,'112','Feedback is better than other',NULL,NULL,'09:33:16','26-03-24','naphees');
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photo_uploader`
--

DROP TABLE IF EXISTS `photo_uploader`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photo_uploader` (
  `id` int(59) NOT NULL AUTO_INCREMENT,
  `name` varchar(67) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(67) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(67) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photo_uploader`
--

LOCK TABLES `photo_uploader` WRITE;
/*!40000 ALTER TABLE `photo_uploader` DISABLE KEYS */;
INSERT INTO `photo_uploader` (`id`, `name`, `password`, `address`, `email`) VALUES (1,'naphees','naphees9997',NULL,NULL);
/*!40000 ALTER TABLE `photo_uploader` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produce`
--

DROP TABLE IF EXISTS `produce`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produce` (
  `id` int(60) NOT NULL AUTO_INCREMENT,
  `produce` varchar(100) DEFAULT NULL,
  `quantity` varchar(62) DEFAULT NULL,
  `rate` varchar(62) DEFAULT NULL,
  `minimam_sell` varchar(62) DEFAULT NULL,
  `seller_id` varchar(62) DEFAULT NULL,
  `session` varchar(62) DEFAULT NULL,
  `festival` varchar(62) DEFAULT NULL,
  `religion` varchar(62) DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `time` varchar(60) DEFAULT NULL,
  `date` varchar(60) DEFAULT NULL,
  `profit` varchar(60) DEFAULT NULL,
  `width` varchar(60) DEFAULT NULL,
  `height` varchar(60) DEFAULT NULL,
  `weight` varchar(60) DEFAULT NULL,
  `categories` varchar(60) DEFAULT NULL,
  `sell` varchar(60) DEFAULT NULL,
  `about` varchar(60) DEFAULT NULL,
  `spend` varchar(50) DEFAULT NULL,
  `minimam_purchase` varchar(50) DEFAULT NULL,
  `seller_rate` varchar(50) DEFAULT NULL,
  `seller_quantity` varchar(59) DEFAULT NULL,
  `quantity_available` varchar(59) DEFAULT NULL,
  `seller_sell` varchar(59) DEFAULT NULL,
  `requirement` varchar(59) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=713 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produce`
--

LOCK TABLES `produce` WRITE;
/*!40000 ALTER TABLE `produce` DISABLE KEYS */;
INSERT INTO `produce` (`id`, `produce`, `quantity`, `rate`, `minimam_sell`, `seller_id`, `session`, `festival`, `religion`, `image`, `time`, `date`, `profit`, `width`, `height`, `weight`, `categories`, `sell`, `about`, `spend`, `minimam_purchase`, `seller_rate`, `seller_quantity`, `quantity_available`, `seller_sell`, `requirement`) VALUES (654,'Chain ','1','12','25','Chain ','','','','produce/20240329_101424.jpg','12:43:38','29-03-24','3','','','','jewellery','piece','','3','25','6','1','','piece',NULL),(655,'Chain ','1','16','12','Chain ','','','','produce/20240329_101413.jpg','12:48:46','29-03-24','6','','','','jewellery','piece','','3.5','12','6.5','1','','piece',NULL),(656,'Chain','1','12','25','Bali','','','','produce/20240329_101406.jpg','12:51:58','29-03-24','3','','','','jewellery','piece','','3','25','6','1','','piece',NULL),(657,'Child hand bracelet ','1','60','2','Sumit','','','','produce/20240329_101326.jpg','12:54:40','29-03-24','20','','','','jewellery','dargan','','18','12','22','1','','dargan',NULL),(658,'Bracelet  with thread and pearls','1','72','2','Anil','','','','produce/20240329_101305.jpg','12:59:09','29-03-24','18','','','','jewellery','dargan','','18','12','33','1','','dargan',NULL),(659,'Bracelet  with thread and pearls','1','72','2','Anil','','','','produce/20240329_101230.jpg','12:59:49','29-03-24','18','','','','jewellery','dargan','','18','12','33','1','','dargan',NULL),(660,'Bracelet  with thread and pearls','1','72','2','Anil','','','','produce/20240329_101211.jpg','01:02:11','29-03-24','18','','','','jewellery','dargan','','18','12','28','1','','dargan',NULL),(661,'Bracelet  with thread and Cristal ','1','96','2','Anil','','','','produce/20240329_101155.jpg','01:06:48','29-03-24','18','','','','jewellery','dargan','','18','12','48','1','','dargan',NULL),(662,'Bracelet  with thread and Cristal ','1','96','2','Anil','','','','produce/20240329_100759.jpg','01:07:44','29-03-24','18','','','','jewellery','dargan','','18','12','48','1','','dargan',NULL),(663,'Bracelet  with thread and Cristal ','1','96','2','Anil','','','','produce/20240329_100737.jpg','01:08:11','29-03-24','18','','','','jewellery','dargan','','18','12','48','1','','dargan',NULL),(664,'Bracelet  with thread and Cristal ','1','96','2','Anil','','','','produce/20240329_100710.jpg','01:08:45','29-03-24','18','','','','jewellery','dargan','','18','12','48','1','','dargan',NULL),(665,'Pearls chain','1','96','1','Anil','','','','produce/20240329_101123.jpg','01:12:49','29-03-24','23','','','','jewellery','dargan','','25','4','48','1','','dargan',NULL),(666,'Bracelet  with thread and pearls','1','72','2','Anil','','','','produce/20240329_101058.jpg','01:15:56','29-03-24','25','','','','jewellery','dargan','','24','12','23','1','','dargan',NULL),(667,'Bracelet  with thread and pearls','1','72','2','Anil','','','','produce/20240329_101029.jpg','01:17:10','29-03-24','20','','','','jewellery','dargan','','14','12','28','1','','dargan',NULL),(668,'Bracelet  with thread and pearls','1','84','1','Anil','','','','produce/20240329_100947.jpg','01:19:52','29-03-24','30','','','','jewellery','dargan','','24','12','30','1','','dargan',NULL),(669,'Thread bracelet ','1','48','2','Anil','','','','produce/20240329_100907.jpg','01:23:40','29-03-24','20','','','','jewellery','dargan','','11','12','17','1','','dargan',NULL),(670,'Head belt','1','204','1','Vijay','','','','produce/20240329_100640.jpg','01:28:58','29-03-24','40','','','','jewellery','dargan','','20','1','144','1','','dargan',NULL),(671,'Head belt','1','204','1','Vijay','','','','produce/20240329_100608.jpg','01:29:57','29-03-24','40','','','','jewellery','dargan','','20','1','144','1','','dargan',NULL),(672,'Head belt','1','102','1','Vijay','','','','produce/20240329_100536.jpg','01:34:39','29-03-24','20','','','','jewellery','dargan','','10','1','72','1','','dargan',NULL),(673,'Girl bracelet ','1','22','12','Sumit ki barabr','','','','produce/20240329_100508.jpg','01:41:15','29-03-24','4','','','','jewellery','piece','','3','12','15','1','','piece',NULL),(674,'Hair clips ','1','132','1','Sumit ki barabr','','','','produce/20240329_100416.jpg','01:45:25','29-03-24','30','','','','jewellery','dargan','','18','1','84','1','','dargan',NULL),(675,'Hair clips ','1','192','1','Sumit ki barabr','','','','produce/20240329_100406.jpg','01:52:28','29-03-24','30','','','','jewellery','dargan','','30','1','120','1','','dargan',NULL),(676,'Hair clips ','1','216','1','Sumit ki barabr','','','','produce/20240329_100401.jpg','01:55:40','29-03-24','30','','','','jewellery','dargan','','30','1','156','1','','dargan',NULL),(677,'Girl bracelet ','1','204','1','Sumit ki barabr','','','','produce/20240329_100327.jpg','01:58:04','29-03-24','30','','','','jewellery','dargan','','30','1','144','1','','dargan',NULL),(678,'Hair rubber ','1','84','2','Sumit ki barabr','','','','produce/20240329_100239.jpg','02:06:58','29-03-24','28','','','','jewellery','dargan','','20','6','36','1','','dargan',NULL),(679,'Hair rubber ','1','72','2','Sumit ki barabr','','','','produce/20240329_100222.jpg','02:17:59','29-03-24','25','','','','jewellery','dargan','','17','6','30','1','','dargan',NULL),(680,'Necklace ','1','130','4','Second floor','','','','produce/20240329_095849.jpg','02:23:48','29-03-24','30','','','','jewellery','piece','','30','4','70','1','','piece',NULL),(681,'Necklace ','1','130','4','Second floor','','','','produce/20240329_095816.jpg','02:24:30','29-03-24','30','','','','jewellery','piece','','30','4','70','1','','piece',NULL),(682,'Lipstick  mix','1','216','1','Four floor','','','','produce/20240329_095749.jpg','02:27:35','29-03-24','30','','','','beauty','dargan','','30','1','156','1','','dargan',NULL),(683,'Lipstick  mix','1','216','1','Four floor','','','','produce/20240329_095717.jpg','02:28:30','29-03-24','30','','','','beauty','dargan','','30','1','156','1','','dargan',NULL),(684,'Eyeliner  pencil ','1','180','1','Four floor','','','','produce/20240329_095630.jpg','02:31:06','29-03-24','60','','','','beauty','dargan','','50','1','70','1','','dargan',NULL),(685,'Compact powder','1','44','6','Four floor','','','','produce/20240329_095528.jpg','02:35:01','29-03-24','10','','','','beauty','piece','','10','6','24','1','','piece',NULL),(686,'Eyeliner ','1','216','1','Four floor','','','','produce/20240329_095452.jpg','02:37:30','29-03-24','30','','','','beauty','dargan','','30','1','156','1','','dargan',NULL),(687,'Compact powder','1','120','3','Four floor','','','','produce/20240329_095432.jpg','02:41:02','29-03-24','27','','','','beauty','piece','','27','3','66','1','','piece',NULL),(688,'Compact powder','1','120','3','Four floor','','','','produce/20240329_095426.jpg','02:42:21','29-03-24','27','','','','beauty','piece','','27','3','66','1','','piece',NULL),(689,'Highlighter ','1','140','3','Four floor','','','','produce/20240329_095410.jpg','02:47:02','29-03-24','15','','','','beauty','piece','','15','3','110','1','','piece',NULL),(690,'Highlighter ','1','110','3','Four floor','','','','produce/20240329_095358.jpg','02:50:42','29-03-24','5','','','','beauty','piece','','5','3','80','1','','piece',NULL),(691,'Lipstick liquid (5/p)','1','110','1','Four floor','','','','produce/20240329_095338.jpg','02:56:26','29-03-24','22','','','','beauty','set','','22','1','66','1','','set',NULL),(692,'Lipstick  mix liquid ','1','360','1','Four floor','','','','produce/20240329_095303.jpg','03:01:50','29-03-24','80','','','','beauty','dargan','','64','1','216','1','','dargan',NULL),(693,'Lipstick  mix liquid ','1','720','1','Four floor','','','','produce/20240329_095303.jpg','03:06:20','29-03-24','136','','','','beauty','dargan','','80','1','504','1','','dargan',NULL),(694,'Lipstick  mix liquid 2in one','1','720','1','Four floor','','','','produce/20240329_095216.jpg','03:16:13','29-03-24','236','','','','beauty','dargan','','80','1','504','1','','dargan',NULL),(695,'Lipstick  mix liquid ','1','216','1','Four floor','','','','produce/20240329_095204.jpg','06:01:17','29-03-24','42','','','','beauty','dargan','','42','1','132','1','','dargan',NULL),(696,'Lipstick  mix liquid 2 in one','1','660','1','Four floor','','','','produce/20240329_095131.jpg','06:07:32','29-03-24','164','','','','beauty','dargan','','100','1','396','1','','dargan',NULL),(697,'Chain with bracelet and earrings ','1','36','18','Second floor','','','','produce/20240328_142404.jpg','06:10:55','29-03-24','6','','','','beauty','piece','','5','18','25','1','','piece',NULL),(698,'Child necklace with earrings ','1','15','40','Second floor','','','','produce/20240328_142352.jpg','06:15:13','29-03-24','3','','','','jewellery','piece','','2','40','10','1','','piece',NULL),(699,'Eyeliner ','1','60','12','Four floor','','','','produce/20240328_140418.jpg','06:18:17','29-03-24','10','','','','beauty','piece','','5','12','45','1','','piece',NULL),(700,'Child paras','1','75','6','Paras ','','','','produce/IMG-20240330-WA0003.jpg','02:00:46','30-03-24','16','','','','Watch_belt_sunglasses_paras','piece','','16','6','43','1','','piece',NULL),(701,'Child paras','1','90','6','Paras ','','','','produce/IMG-20240330-WA0004.jpg','02:03:36','30-03-24','19','','','','Watch_belt_sunglasses_paras','piece','','16','6','55','1','','piece',NULL),(702,'Child  paras','1','90','6','Paras','','','','produce/IMG-20240330-WA0005.jpg','02:07:06','30-03-24','15','','','','Watch_belt_sunglasses_paras','piece','','15','6','60','1','','piece',NULL),(703,'Paras kit ','1','85','1','Paras','','','','produce/IMG-20240330-WA0006.jpg','02:09:13','30-03-24','15','','','','Watch_belt_sunglasses_paras','piece','','10','6','60','1','','piece',NULL),(704,'Child paras','1','90','6','Paras ','','','','produce/IMG-20240330-WA0007.jpg','02:13:16','30-03-24','20','','','','Watch_belt_sunglasses_paras','piece','','15','6','55','1','','piece',NULL),(705,'Child paras','1','90','6','Paras','','','','produce/IMG-20240330-WA0008.jpg','02:15:32','30-03-24','15','','','','Watch_belt_sunglasses_paras','piece','','15','6','60','1','','piece',NULL),(706,'Child paras','1','90','6','Paras','','','','produce/IMG-20240330-WA0010.jpg','02:16:44','30-03-24','15','','','','Watch_belt_sunglasses_paras','piece','','15','6','60','1','','piece',NULL),(707,'Child paras','1','85','6','Paras','','','','produce/IMG-20240330-WA0011.jpg','02:19:37','30-03-24','15','','','','Watch_belt_sunglasses_paras','piece','','15','6','55','1','','piece',NULL),(708,'Child paras','1','85','6','Paras','','','','produce/IMG-20240330-WA0012.jpg','02:20:31','30-03-24','15','','','','Watch_belt_sunglasses_paras','piece','','15','6','55','1','','piece',NULL),(709,'Child paras','1','85','6','Paras','','','','produce/IMG-20240330-WA0013.jpg','02:21:30','30-03-24','15','','','','Watch_belt_sunglasses_paras','piece','','15','6','55','1','','piece',NULL),(710,'Child paras','1','85','6','Paras','','','','produce/IMG-20240330-WA0014.jpg','02:22:39','30-03-24','15','','','','Watch_belt_sunglasses_paras','piece','','15','6','55','1','','piece',NULL),(711,'Paras kit ','1','85','6','Paras','','','','produce/IMG-20240330-WA0015.jpg','02:25:25','30-03-24','15','','','','Watch_belt_sunglasses_paras','piece','','15','6','55','1','','piece',NULL),(712,'Child paras','1','90','6','Paras','','','','produce/IMG-20240330-WA0017.jpg','02:27:30','30-03-24','15','','','','Watch_belt_sunglasses_paras','piece','','15','6','60','1','','piece',NULL);
/*!40000 ALTER TABLE `produce` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produce_order`
--

DROP TABLE IF EXISTS `produce_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produce_order` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `customer` varchar(50) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `amount_pay` varchar(50) DEFAULT NULL,
  `payment_mode` varchar(50) DEFAULT NULL,
  `order_complete` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `village` varchar(50) DEFAULT NULL,
  `town` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `pincode` varchar(50) DEFAULT NULL,
  `update` varchar(50) DEFAULT NULL,
  `varify_email` varchar(80) DEFAULT NULL,
  `order_feedback` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produce_order`
--

LOCK TABLES `produce_order` WRITE;
/*!40000 ALTER TABLE `produce_order` DISABLE KEYS */;
INSERT INTO `produce_order` (`id`, `customer`, `amount`, `amount_pay`, `payment_mode`, `order_complete`, `mobile`, `time`, `date`, `village`, `town`, `district`, `state`, `country`, `pincode`, `update`, `varify_email`, `order_feedback`) VALUES (124,'112','1900',NULL,NULL,'complete','9997178512','09:24:26','26-03-24','Khatauli ','Khatauli ','Meerut ','251201','India','251201',NULL,'Naphees9997@gmail.com',NULL),(125,'112','3400',NULL,NULL,NULL,'999717852','14:12:45','26-03-24','mohodipur aakas','jjj','m.nagar','jjj','India','234567',NULL,'naphees9997@gmail.com',NULL),(126,'112','4860',NULL,NULL,NULL,'999717852','07:18:43','27-03-24','mohodipur aakas','jjj','m.nagar','jjj','India','234567',NULL,'naphees9997@gmail.com',NULL),(127,'112','4520',NULL,NULL,NULL,'55365','13:07:49','28-03-24','Ftyr','Tygr','Ffut','Tddy','china','56852',NULL,'Naphees9997@gmail.com',NULL),(128,'112','1200',NULL,NULL,'complete','944441188445525558665554448','13:12:58','28-03-24','Dffwzqx ','Dssxsvs','Xxcs','Dis ','India','478778',NULL,'Naphees9997@gmail.com',NULL),(129,'112','14688',NULL,NULL,NULL,'54545454','17:44:35','22-06-24','ghgh','fhcvh','cvcvc','bvcb','India','1104',NULL,'xvcv@fgdfx.com',NULL);
/*!40000 ALTER TABLE `produce_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produce_page`
--

DROP TABLE IF EXISTS `produce_page`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produce_page` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `page` varchar(55) DEFAULT NULL,
  `time` varchar(55) DEFAULT NULL,
  `date` varchar(55) DEFAULT NULL,
  `categories` varchar(55) DEFAULT NULL,
  `page_image` varchar(500) DEFAULT NULL,
  `produce` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produce_page`
--

LOCK TABLES `produce_page` WRITE;
/*!40000 ALTER TABLE `produce_page` DISABLE KEYS */;
/*!40000 ALTER TABLE `produce_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produce_page_search`
--

DROP TABLE IF EXISTS `produce_page_search`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produce_page_search` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `page` varchar(55) DEFAULT NULL,
  `search1` varchar(55) DEFAULT NULL,
  `search2` varchar(55) DEFAULT NULL,
  `search3` varchar(55) DEFAULT NULL,
  `search4` varchar(55) DEFAULT NULL,
  `search5` varchar(55) DEFAULT NULL,
  `search6` varchar(55) DEFAULT NULL,
  `search7` varchar(55) DEFAULT NULL,
  `search8` varchar(55) DEFAULT NULL,
  `search9` varchar(55) DEFAULT NULL,
  `search10` varchar(55) DEFAULT NULL,
  `search11` varchar(55) DEFAULT NULL,
  `search12` varchar(55) DEFAULT NULL,
  `search13` varchar(55) DEFAULT NULL,
  `search14` varchar(55) DEFAULT NULL,
  `search15` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produce_page_search`
--

LOCK TABLES `produce_page_search` WRITE;
/*!40000 ALTER TABLE `produce_page_search` DISABLE KEYS */;
/*!40000 ALTER TABLE `produce_page_search` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produce_requirement`
--

DROP TABLE IF EXISTS `produce_requirement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produce_requirement` (
  `id` int(59) NOT NULL AUTO_INCREMENT,
  `produce_id` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `produce` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seller_rate` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity_requirement` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sell` varchar(55) COLLATE utf8_unicode_ci DEFAULT NULL,
  `requirement_place` varchar(99) COLLATE utf8_unicode_ci DEFAULT NULL,
  `produce_image` varchar(99) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seller_id` varchar(59) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seller_amount` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produce_requirement`
--

LOCK TABLES `produce_requirement` WRITE;
/*!40000 ALTER TABLE `produce_requirement` DISABLE KEYS */;
INSERT INTO `produce_requirement` (`id`, `produce_id`, `produce`, `seller_rate`, `quantity_requirement`, `amount`, `sell`, `requirement_place`, `produce_image`, `seller_id`, `seller_amount`) VALUES (34,'623','swastic','8','0',NULL,'dargan','251201','produce/redswastic.jpg ','1 ','800'),(35,'623','swastic','8','0',NULL,'dargan','251201','produce/redswastic.jpg ','1 ','400'),(36,'625','hankey','80','0',NULL,'dargan','251201','produce/hankey2.jpg ','3 ','160'),(37,'625','hankey','80','0',NULL,'dargan','251201','produce/hankey2.jpg ','3 ','160'),(41,'623','swastic','8','0',NULL,'dargan','234567','produce/redswastic.jpg ','1 ','320'),(42,'624','eyeshadow','80','0',NULL,'piece','234567','produce/eyeshadewithface.jpg ','2 ','2400'),(44,'623','swastic','8','0',NULL,'dargan','234567','produce/redswastic.jpg ','1 ','240'),(45,'626','belt','16','0',NULL,'piece','234567','produce/biglasticbellt.jpg ','4 ','3648'),(47,'626','belt','16','0',NULL,'piece','56852','produce/biglasticbellt.jpg ','4 ','3456'),(48,'625','hankey','80','0',NULL,'dargan','56852','produce/hankey2.jpg ','3 ','160'),(50,'625','hankey','80','0',NULL,'dargan','478778','produce/hankey2.jpg ','3 ','800'),(51,'625','hankey','80','0',NULL,'dargan','478778','produce/hankey2.jpg ','3 ','160'),(52,'639','Hairband with pearl ','60','152',NULL,'dargan','1104','produce/20240329_102627.jpg ','Vijay ','9120'),(53,'645','Swastic in black wool','18','2',NULL,'dargan','1104','produce/20240329_102459.jpg ','1 ','36');
/*!40000 ALTER TABLE `produce_requirement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `research`
--

DROP TABLE IF EXISTS `research`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `research` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `produce` varchar(55) DEFAULT NULL,
  `seller` varchar(55) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `pincode` varchar(55) DEFAULT NULL,
  `mobile` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `webside` varchar(55) DEFAULT NULL,
  `time` varchar(55) DEFAULT NULL,
  `date` varchar(55) DEFAULT NULL,
  `complete` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `research`
--

LOCK TABLES `research` WRITE;
/*!40000 ALTER TABLE `research` DISABLE KEYS */;
/*!40000 ALTER TABLE `research` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `search`
--

DROP TABLE IF EXISTS `search`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `search` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(55) DEFAULT NULL,
  `employee_id` varchar(55) DEFAULT NULL,
  `search` varchar(55) DEFAULT NULL,
  `time` varchar(55) DEFAULT NULL,
  `date` varchar(55) DEFAULT NULL,
  `add` varchar(55) DEFAULT NULL,
  `block` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `search`
--

LOCK TABLES `search` WRITE;
/*!40000 ALTER TABLE `search` DISABLE KEYS */;
/*!40000 ALTER TABLE `search` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sell`
--

DROP TABLE IF EXISTS `sell`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sell` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `order_number` varchar(44) DEFAULT NULL,
  `customer_id` varchar(55) DEFAULT NULL,
  `produce` varchar(44) DEFAULT NULL,
  `produce_id` varchar(44) DEFAULT NULL,
  `rate` varchar(44) DEFAULT NULL,
  `quantity` varchar(44) DEFAULT NULL,
  `amount` varchar(44) DEFAULT NULL,
  `time` varchar(44) DEFAULT NULL,
  `date` varchar(44) DEFAULT NULL,
  `produce_image` varchar(44) DEFAULT NULL,
  `seller_id` varchar(44) DEFAULT NULL,
  `requirement` varchar(44) DEFAULT NULL,
  `complete` varchar(55) DEFAULT NULL,
  `sell` varchar(44) DEFAULT NULL,
  `profit` varchar(59) DEFAULT NULL,
  `spend` varchar(59) DEFAULT NULL,
  `seller_rate` varchar(59) DEFAULT NULL,
  `requirement_place` varchar(59) DEFAULT NULL,
  `seller_amount` varchar(34) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=731 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sell`
--

LOCK TABLES `sell` WRITE;
/*!40000 ALTER TABLE `sell` DISABLE KEYS */;
INSERT INTO `sell` (`id`, `order_number`, `customer_id`, `produce`, `produce_id`, `rate`, `quantity`, `amount`, `time`, `date`, `produce_image`, `seller_id`, `requirement`, `complete`, `sell`, `profit`, `spend`, `seller_rate`, `requirement_place`, `seller_amount`) VALUES (708,'124','112 ','hankey','625','100','2','200','09:22:55','26-03-24','produce/hankey2.jpg ','3 ',NULL,NULL,'dargan','20','20','80','251201','160'),(709,'124','112 ','hankey','625','100','2','200','09:23:06','26-03-24','produce/hankey2.jpg ','3 ',NULL,NULL,'dargan','20','20','80','251201','160'),(711,'125','112 ','eyeshadow','624','100','30','3000','02:12:27','26-03-24','produce/eyeshadewithface.jpg ','2 ',NULL,NULL,'piece','300','300','80','234567','2400'),(719,'126','112 ','swastic','623','10','30','300','07:14:39','27-03-24','produce/redswastic.jpg ','1 ',NULL,NULL,'dargan','30','30','8','234567','240'),(720,'126','112 ','belt','626','20','228','4560','07:14:55','27-03-24','produce/biglasticbellt.jpg ','4 ',NULL,NULL,'piece','456','456','16','234567','3648'),(721,'127','112 ','belt','626','20','216','4320','07:19:14','27-03-24','produce/biglasticbellt.jpg ','4 ',NULL,NULL,'piece','432','432','16','56852','3456'),(722,'127','112 ','hankey','625','100','2','200','09:00:48','27-03-24','produce/hankey2.jpg ','3 ',NULL,NULL,'dargan','20','20','80','56852','160'),(725,'128','112 ','hankey','625','100','10','1000','01:10:40','28-03-24','produce/hankey2.jpg ','3 ',NULL,NULL,'dargan','100','100','80','478778','800'),(726,'128','112 ','hankey','625','100','2','200','01:11:01','28-03-24','produce/hankey2.jpg ','3 ',NULL,NULL,'dargan','20','20','80','478778','160'),(727,NULL,'121 ','Spring hairband ','637','96','2','192','08:38:47','31-03-24','produce/20240329_102704.jpg ','Vijay ',NULL,NULL,'dargan','40','32','60',NULL,'120'),(728,NULL,'121 ','belt','626','26','12','312','08:41:56','31-03-24','produce/biglasticbellt.jpg ','Belt ',NULL,NULL,'piece','48','36','18',NULL,'216'),(729,'129','112 ','Hairband with pearl ','639','96','152','14592','07:07:52','14-04-24','produce/20240329_102627.jpg ','Vijay ',NULL,NULL,'dargan','2280','2280','60','1104','9120'),(730,'129','112 ','Swastic in black wool','645','48','2','96','05:43:26','22-06-24','produce/20240329_102459.jpg ','1 ',NULL,NULL,'dargan','40','20','18','1104','36');
/*!40000 ALTER TABLE `sell` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seller`
--

DROP TABLE IF EXISTS `seller`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seller` (
  `id` int(45) NOT NULL AUTO_INCREMENT,
  `id_number` varchar(45) DEFAULT NULL,
  `seller` varchar(55) DEFAULT NULL,
  `firm` varchar(50) DEFAULT NULL,
  `firm_adress` varchar(400) DEFAULT NULL,
  `firm_branch1` varchar(45) DEFAULT NULL,
  `account_number` varchar(45) DEFAULT NULL,
  `ifsc_code` varchar(55) DEFAULT NULL,
  `produce_sell` varchar(555) DEFAULT NULL,
  `gstin` varchar(55) DEFAULT NULL,
  `mobile` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `webside` varchar(55) DEFAULT NULL,
  `date` varchar(55) DEFAULT NULL,
  `time` varchar(55) DEFAULT NULL,
  `firm_branch2` varchar(55) DEFAULT NULL,
  `pincode` varchar(55) DEFAULT NULL,
  `join` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seller`
--

LOCK TABLES `seller` WRITE;
/*!40000 ALTER TABLE `seller` DISABLE KEYS */;
INSERT INTO `seller` (`id`, `id_number`, `seller`, `firm`, `firm_adress`, `firm_branch1`, `account_number`, `ifsc_code`, `produce_sell`, `gstin`, `mobile`, `email`, `webside`, `date`, `time`, `firm_branch2`, `pincode`, `join`) VALUES (3,'','','','',NULL,'','','','','','','','28-03-24','09:54:28',NULL,NULL,NULL);
/*!40000 ALTER TABLE `seller` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `seller_order`
--

DROP TABLE IF EXISTS `seller_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `seller_order` (
  `id` int(90) NOT NULL AUTO_INCREMENT,
  `seller_id` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_amount` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `complete` varchar(90) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` varchar(99) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` varchar(99) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pay` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `seller_order`
--

LOCK TABLES `seller_order` WRITE;
/*!40000 ALTER TABLE `seller_order` DISABLE KEYS */;
/*!40000 ALTER TABLE `seller_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suggestion`
--

DROP TABLE IF EXISTS `suggestion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suggestion` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(20) DEFAULT NULL,
  `suggestion` varchar(300) DEFAULT NULL,
  `complete` varchar(12) DEFAULT NULL,
  `block` varchar(12) DEFAULT NULL,
  `time` varchar(15) DEFAULT NULL,
  `date` varchar(15) DEFAULT NULL,
  `customer` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suggestion`
--

LOCK TABLES `suggestion` WRITE;
/*!40000 ALTER TABLE `suggestion` DISABLE KEYS */;
INSERT INTO `suggestion` (`id`, `customer_id`, `suggestion`, `complete`, `block`, `time`, `date`, `customer`) VALUES (4,'112','Procedure  is not good ',NULL,NULL,'09:31:52','26-03-24','naphees'),(5,'','',NULL,NULL,'09:15:29','02-05-24','');
/*!40000 ALTER TABLE `suggestion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'impprfrh_i.m.p.db'
--

--
-- Dumping routines for database 'impprfrh_i.m.p.db'
--
/*!50112 SET @disable_bulk_load = IF (@is_rocksdb_supported, 'SET SESSION rocksdb_bulk_load = @old_rocksdb_bulk_load', 'SET @dummy_rocksdb_bulk_load = 0') */;
/*!50112 PREPARE s FROM @disable_bulk_load */;
/*!50112 EXECUTE s */;
/*!50112 DEALLOCATE PREPARE s */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-04 12:06:24
