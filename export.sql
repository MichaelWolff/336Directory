-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: thzz882efnak0xod.cbetxkdyhwsb.us-east-1.rds.amazonaws.com    Database: s1vxerk2jlp6h9j1
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.19-MariaDB

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

--
-- Table structure for table `checkout`
--

DROP TABLE IF EXISTS `checkout`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `checkout` (
  `checkoutId` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `deviceId` varchar(5) NOT NULL,
  `checkoutDate` date NOT NULL,
  `dueDate` date NOT NULL,
  `returnDate` date DEFAULT NULL,
  `checkoutBy` smallint(6) NOT NULL,
  `checkinBy` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`checkoutId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `checkout`
--

LOCK TABLES `checkout` WRITE;
/*!40000 ALTER TABLE `checkout` DISABLE KEYS */;
INSERT INTO `checkout` VALUES (1,16969,'007','2017-03-09','2017-03-16',NULL,1,NULL);
/*!40000 ALTER TABLE `checkout` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `department` (
  `departmentId` smallint(6) NOT NULL AUTO_INCREMENT,
  `deptName` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  PRIMARY KEY (`departmentId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `department`
--

LOCK TABLES `department` WRITE;
/*!40000 ALTER TABLE `department` DISABLE KEYS */;
INSERT INTO `department` VALUES (1,'Mathematics','Science'),(2,'Computer Science','Hartnell'),(3,'Game Design','Science'),(4,'Teacher Education','Education'),(5,'Accounting','Business'),(6,'Biology','Science'),(7,'Computer Science','Science'),(8,'Finance','Business'),(9,'Music','Arts'),(10,'Marketing','College of Business');
/*!40000 ALTER TABLE `department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `device`
--

DROP TABLE IF EXISTS `device`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `device` (
  `deviceId` varchar(5) NOT NULL,
  `deviceName` varchar(50) NOT NULL,
  `deviceType` varchar(20) NOT NULL,
  `price` float NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`deviceId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `device`
--

LOCK TABLES `device` WRITE;
/*!40000 ALTER TABLE `device` DISABLE KEYS */;
INSERT INTO `device` VALUES ('','HTC Vive','VR Headset',0,'Available'),('007','GALAXY TAB','Tablet',500,'Available'),('10000','D-Link Wireless Cam','webcam',35,'available'),('1199','Nexus 7','Tablet',999,'CheckedOut'),('12345','Nexus 7 (2013)','Tablet',80,'Available'),('69696','Lara\'s Midterm Answers','CheatSheet',1.75,'Available'),('A829E','iPad 1TB','Tablet',1000,'Available'),('aaabb','HTC vive','VR Headset',799,'Available'),('ad343','Google Pixel 32GB','Smartphone',649.99,'Checkedout'),('bbbaa','Oculus Rift','VR Headset',599.99,'Available'),('ca021','Cannon70D','Camera',900,'Available'),('ca100','Canon Rebel','Camera',200,'Available'),('gj213','Logitech C270','webcam',21.85,'AVAILABLE'),('GS501','Samsung Galaxy S5, Black 16GB','Smartphone',249.72,'Available'),('hs009','VR Headset','VR Headset',250,'Available'),('hs210','Samsung Gear Headset','VR Headset',49.99,'Available'),('ip221','iPhone 6s 32GB','Smartphone',549.99,'Available'),('lo666','Logitech C920','Webcam',58.49,'Available'),('lp014','Dell XPS','Laptop',1400,'checkout'),('lp223','Razer Blade Pro','Laptop',2000,'Available'),('LT007','Acer','laptop',650,'available'),('mi005','Snowball Mic','Microphone',0.99,'available'),('mi100','microphone','Dynamic Mics',999.99,'Available'),('mi311','Blue Yeti','Microphone',100.99,'Available'),('mi689','Blue Snowball iCE','Microphone',44.99,'Available'),('my234','BoomMic','Microphone',129.99,'CheckedOut'),('rb223','Razer Blade Pro','Laptop',2000,'Available'),('SG603','Samsung GALAXY S6 G920 32GB ','Smartphone',374,'CheckedOut'),('sp001','Samsung Galaxy S6','Smartphone',449.99,'Available'),('sp002','Samsung Galaxy S7','Smartphone',670,'Available'),('sp456','Apple iPhone 7','Smartphone',699.99,'Available'),('tr101','GE Tripod','Tripod',69.89,'available'),('vr007','HTC Vive','VR Headset',800,'Available'),('vr008','Gear VR','VR Headset',200,'Available'),('wc001','Logitech C922x Webcam ','Webcam',99.99,'Available'),('wc002','Logitech Webcam c900 HD','Webcam',59.99,'Available'),('wc021',' Logitech HD Pro Webcam C920,','Webcam',421,'Available'),('ya081','Hotball Mic','Microphone',999.99,'CheckedOut');
/*!40000 ALTER TABLE `device` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff` (
  `staffId` smallint(6) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(15) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  PRIMARY KEY (`staffId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES (1,'Karen','White'),(2,'Maggie','Kwon');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `role` varchar(10) NOT NULL,
  `deptId` smallint(6) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (0,'Daniel','Crews','dcrews@csumb.edu','1231231234','Student',2),(211,'Linda','Reyes','lreyes@csumb.edu','(626)222-2222','student',6),(16969,'Ryan','LeBon','rian@csuhotmail.com','831-453-3231','Student',2),(126969,'Ryan','LeBon','rian@csuhotmail.com','831-453-3231','Student',2),(987642,'Tomas','Hernandez','tohernandez@csumb.edu','5555555555','Staff',7),(987654,'Kara','Spencer','kaspencer@csumb.edu','(702)123-4567','student',6),(1001235,'Austin','Brown','hello@gmail.com','(555) 220-8268','Student',9),(1002345,'Michael','Cwener','mcwener@csumb.edu','(123)-123-1234','student',2),(1110011,'Jeff','Gearhart','JGcollegestudent@csumb.edu','(555)-234-5678','student',7),(1111111,'Valerie','Hinojoza-Rood','vhinojoza-rood@csumb.edu','555-555-5555','Student',0),(1111234,'Tommy','Ha','makaveli1996@csumb.edu','831-555-5555','Student',7),(1111295,'Brandon','Ginn','some@email.com','(999) 888-7777','Faculty',1),(1112223,'Cody','Parker','bestEmail@gmail.com','(555) 123-0124','Faculty',3),(1114534,'Rick','James','maryjane420@csumb.edu','8315551234','Faculty',7),(1122334,'Babak','Chehraz','bchehraz@csumb.edu','(123) 456-7890','Student',7),(1134235,'Bill','Gates','BillGates@microsoft.com','(831)-444-8887','student',2),(1212121,'Yang','Jing','myemail@google.com','3333333333','Student',9),(1232123,'Bernie','Sanders','OurLordAndSavior@gmail.com','(831) 555-5555','Staff',5),(1234567,'Daniel','Crews','dcrews@csumb.edu','(123)123-1234','Student',2),(1234577,'Bob','Bobbington','bbob@gmail.com','777-555-7777','Faculty',0),(1234875,'Darth','Vader','darksidebestside@sbcglobal.net','(831)5555555','Student',7),(1236542,'Eduardo','Vilasenor','asdf@gmail.com','9764978123','student',2),(1239423,'Andrew','Sanchez','blasdfl@gmail.com','911','Faculty',7),(1346795,'Eduardo','Vilasenor','asdf@gmail.com','9764978123','student',2),(1485503,'Carsen','Yates','totallynotafakeemailaddress@totallyarealdomain.tot','5599999999','student',7),(1919191,'Billy','Boy','BillyBoy@Billyboy.com','(555) 533-5678','Student',7),(1999999,'Soul','Player','splayer@everywhere','(987)654-3210','Staff',8),(2101997,'Minh Tan','Le','mtl@csumb.edu','(666) 210-1997','Student',2),(2121212,'Lin','Hao','lin@csumb.edu','1370247394','Student',3),(2123215,'Bob','Stuart','BS@comcast.net','(555) 789-6352','Student',5),(2183308,'Brandon','Stillwell','brstillwell@csumb.edu','(281)330-8004','student',2),(2323232,'Tyler','Chargin','tchargin@csumb.edu','(408) 394-1477','Student',2),(2323242,'Tyler','Chargin','tchargin@csumb.edu','(408) 394-1477','Student',2),(2345436,'Daniel','Wilson','hello@hello.com','(325)123-4234','student',2),(2727272,'Brian','Little','thisisreal@real.com','(555)555-5050','Staff',7),(3256478,'Pedro','Lopez','dfrgtg90@yahoo.com','(831)569-1254','Staff',2),(3456789,'Dani','Crouch','blahblah@gmail','(012)345-6789','Student',1),(4433221,'Michael','Moore','moore@where.com','444555','Staff',9),(4561238,'Eduardo','Vilasenor','asdf@gmail.com','1234567894','student',2),(6543210,'Humberto','Plaza','hplazamartinez@csumb.edu','8316745900','Student',9),(6665555,'Bob','Barker','bobbarker@csumb.edu','(123)567-1234','Staff',10),(6666666,'Kieran','Burke','kburke@csumb.edu','8583345238','student',7),(6754832,'Fernando','Madrigal','fafaf422@gmail.com','(831)777-7777','Student',7),(7532145,'Lil','Wayne','cashmoneyrecordswheredreamscometrue@ymbc.info','8317894561','Staff',5),(7654321,'Velvet','Crowe','TalesofBerseria@yahoo.com','9876543','Staff',6),(7766554,'Isaac','Avila','me@mymail','(111)222-3333','Student',8),(7767777,'Tim','Smith','Littletim@gmail.com','(408) 123-4567','Student',2),(7777777,'Tim','Smith','Littletim@gmail.com','(408) 123-4567','Student',2),(8318456,'Samuel ','Valdez ','savaldez@csumb.edu','(831)865-3721','Student',4554),(8888888,'Yang','Jing','myrealemail@google.com','123434567','Student',0),(9999981,'Yashkaran','Singh','ysingh@csumb.edu','(669)-321-9871','Student',1),(9999982,'yahoo','google','yahho@google.com','(123)-456-7890','Student',1),(41111157,'Evelyn','ANDA-MURILLO','evelynmurillo91@gmail.com','(831)512-3812','student',444),(67545465,'Bobby','Longjohns','me@me.com','(765)676-4532','Staff',1),(191919191,'Hank','Hill','illtelluwot@gmail.com','1929292919','teacher',6),(411111157,'Evelyn','ANDA-MURILLO','evelynmurillo91@gmail.com','(831)512-3812','student',444),(902949902,'phillip','emmons','pemmons@csumb.edu','541-555-555','student',5);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-04-07  5:46:27
