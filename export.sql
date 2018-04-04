-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: TeamProject
-- ------------------------------------------------------
-- Server version	5.5.57-0ubuntu0.14.04.1

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
-- Table structure for table `Cart`
--

DROP TABLE IF EXISTS `Cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cart` (
  `Model` tinytext NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cart`
--

LOCK TABLES `Cart` WRITE;
/*!40000 ALTER TABLE `Cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `Cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GPU`
--

DROP TABLE IF EXISTS `GPU`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `GPU` (
  `id` int(11) NOT NULL,
  `Model` tinytext NOT NULL,
  `Cores` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `3DMark` int(11) NOT NULL,
  `Info` tinytext NOT NULL,
  `id_key` int(11) DEFAULT NULL,
  UNIQUE KEY `id_key` (`id_key`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `GPU`
--

LOCK TABLES `GPU` WRITE;
/*!40000 ALTER TABLE `GPU` DISABLE KEYS */;
INSERT INTO `GPU` VALUES (1,'GTX 1080 Ti',3584,745,27810,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 1080',2560,550,21830,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 1070 Ti',2423,600,19910,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 1070',1920,415,18140,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 1060(6GB)',1280,250,12970,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 1060(3GB)',1152,200,12170,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 1050 Ti',768,150,7700,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 1050',640,150,6690,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 950',768,160,6540,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 960',1024,232,7580,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 970',1664,330,11670,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 980',2048,461,13950,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 980 Ti',2816,618,18220,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GT 710',192,40,780,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GT 720',192,58,720,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GT 730',384,53,1170,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GT 740',384,90,1950,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 745',384,572,2310,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 750',384,170,3960,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 750 Ti',640,150,4570,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 760',1152,259,6390,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 770',1536,421,8160,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 780',2304,650,10490,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 780 Ti',2880,700,11780,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 645',576,230,2800,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 650',384,150,2270,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 650 Ti',768,162,3440,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 660',960,214,5040,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 660 Ti',1344,300,6020,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 670',1344,400,6980,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 680',1536,475,7680,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL),(1,'GTX 690',3072,999,13100,'This controls drawing the frames as well as some physics calculations, it uses a pci-express slot and a dedicated power connection',NULL);
/*!40000 ALTER TABLE `GPU` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Motherboard`
--

DROP TABLE IF EXISTS `Motherboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Motherboard` (
  `index` int(11) NOT NULL,
  `Model` tinytext NOT NULL,
  `Socket` tinytext NOT NULL,
  `RAM` tinytext NOT NULL,
  `Price` int(11) NOT NULL,
  KEY `index` (`index`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Motherboard`
--

LOCK TABLES `Motherboard` WRITE;
/*!40000 ALTER TABLE `Motherboard` DISABLE KEYS */;
INSERT INTO `Motherboard` VALUES (0,'Asus PRIME X299-A','LGA2066','128GB',274),(1,'Asus TUF X299 MARK 1','LGA2066','128GB',311),(2,'Asus TUF Z370 Pro Gaming','LGA1151','128GB',148),(3,'Asus STRIX B250H Gaming','LGA1151','64GB',146),(4,'Asus Z170-K','LGA1151','64GB',125),(5,'Asus STRIX B250F GAMING','LGA1151','64GB',357),(6,'Asus Z170-P D3','LGA1151','64GB',300),(7,'Asus PRIME H270-PLUS-CSM','LGA1151','64GB',192),(8,'Asus X99-Pro/USB 3.1','LGA2011-3','64GB',175),(9,'Asus A88X-PLUS','FM2+','64GB',196),(10,'Asus F2A85-V PRO','FM2+','64GB',125),(11,'Asus H170-PLUS D3','LGA1151','64GB',165),(12,'Asus P6X58-E PRO','LGA1366','48GB',177),(13,'Asus TUF SABERTOOTH 990FX R3.0','AM3+/AM3','32GB',187),(14,'Asus M5A99X PRO','AM3+','32GB',188);
/*!40000 ALTER TABLE `Motherboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Processors`
--

DROP TABLE IF EXISTS `Processors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Processors` (
  `id` int(11) DEFAULT NULL,
  `Model` tinytext NOT NULL,
  `Unlocked` tinytext NOT NULL,
  `Cores` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Info` tinytext NOT NULL,
  UNIQUE KEY `Index` (`id`),
  KEY `Index_2` (`id`),
  KEY `Cores` (`Cores`),
  KEY `Price` (`Price`),
  KEY `Key` (`id`),
  KEY `id` (`id`),
  CONSTRAINT `Processors_ibfk_1` FOREIGN KEY (`id`) REFERENCES `Processors` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Processors`
--

LOCK TABLES `Processors` WRITE;
/*!40000 ALTER TABLE `Processors` DISABLE KEYS */;
INSERT INTO `Processors` VALUES (NULL,'i9-7980XE','Yes',18,1899,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i9-7960X','Yes',16,1499,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i9-7940X','Yes',14,1399,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i9-7920X','Yes',12,1099,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i9-7900X','Yes',10,922,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-7820X','Yes',8,457,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-7800X','Yes',6,346,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-7740X','Yes',4,318,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i5-7640X','Yes',4,231,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-6800K','Yes',6,393,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i5-8400','No',6,179,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i5-8600K','Yes',6,243,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-8700','No',6,299,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-8700K','Yes',6,348,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i3-8100','No',4,113,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i3-8350K','Yes',4,169,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i3-8350K','Yes',4,169,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-3930K','Yes',6,150,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-4930K','Yes',6,699,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-3960X','Yes',6,769,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-3820','No',4,351,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-3970X','Yes',6,600,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i3-6100','No',2,115,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i3-6300','No',2,153,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i5-6400','No',4,181,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i5-6500','No',4,195,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i5-6600','No',4,217,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i5-6600K','Yes',4,234,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-6700','No',4,314,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-6700K','Yes',4,295,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-6800K','Yes',6,393,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-6900K','Yes',6,999,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-6850K','Yes',6,439,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-6900K','Yes',6,999,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-4960X','Yes',6,999,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-4930K','Yes',6,699,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-4820K','Yes',4,299,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-5820K','Yes',6,285,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-2700K','Yes',4,299,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-2600K','Yes',4,145,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-2600','No',4,125,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i5-2550K','Yes',4,180,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i5-2500K','Yes',4,241,'This is a high end enthusiast processor that demands a lot of power and adequate cooling'),(NULL,'i7-6900K','Yes',6,999,'This is a high end enthusiast processor that demands a lot of power and adequate cooling');
/*!40000 ALTER TABLE `Processors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-27  6:27:36
