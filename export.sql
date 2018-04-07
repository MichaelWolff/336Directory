-- MySQL dump 10.13  Distrib 5.5.57, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: midterm
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
-- Table structure for table `m_assignments`
--

DROP TABLE IF EXISTS `m_assignments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_assignments` (
  `assignmentId` int(5) NOT NULL,
  `classId` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `dueDate` date DEFAULT NULL,
  PRIMARY KEY (`assignmentId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_assignments`
--

LOCK TABLES `m_assignments` WRITE;
/*!40000 ALTER TABLE `m_assignments` DISABLE KEYS */;
INSERT INTO `m_assignments` VALUES (1,100,'Assignment 1: HTML','2015-09-24'),(2,100,'Assignment 2: CSS','0000-00-00'),(3,100,'Assignment 3: jQUERY','2015-10-10'),(4,100,'Assignment 4: PHP','2015-10-24'),(5,100,'Assignment 5: MySQL','2015-10-31');
/*!40000 ALTER TABLE `m_assignments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_gradebook`
--

DROP TABLE IF EXISTS `m_gradebook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_gradebook` (
  `recordId` int(5) NOT NULL AUTO_INCREMENT,
  `studentId` int(5) NOT NULL,
  `assignmentId` int(5) NOT NULL,
  `grade` int(3) NOT NULL,
  PRIMARY KEY (`recordId`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_gradebook`
--

LOCK TABLES `m_gradebook` WRITE;
/*!40000 ALTER TABLE `m_gradebook` DISABLE KEYS */;
INSERT INTO `m_gradebook` VALUES (1,11,1,70),(2,11,2,80),(3,11,3,90),(4,12,1,40),(5,12,2,80),(6,12,3,80),(7,13,1,60),(8,13,2,80),(9,13,3,45),(10,14,1,75),(11,14,2,80),(12,14,3,60),(13,15,1,80),(14,15,2,30),(15,15,3,95);
/*!40000 ALTER TABLE `m_gradebook` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_students`
--

DROP TABLE IF EXISTS `m_students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_students` (
  `studentId` int(5) NOT NULL,
  `firstName` varchar(20) DEFAULT NULL,
  `lastName` varchar(20) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  PRIMARY KEY (`studentId`),
  CONSTRAINT `m_students_ibfk_1` FOREIGN KEY (`studentId`) REFERENCES `m_gradebook` (`recordId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_students`
--

LOCK TABLES `m_students` WRITE;
/*!40000 ALTER TABLE `m_students` DISABLE KEYS */;
INSERT INTO `m_students` VALUES (11,'Jane','Doe','F'),(12,'Bob','Deer','M'),(13,'Jenny','Lopez','F'),(14,'Meg','Griffin','F'),(15,'Katniss','Everdeen','F');
/*!40000 ALTER TABLE `m_students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'noemail@gmail.com','a4d80eac9ab26a4a2da04125bc2c096a','admin','','','admin'),(10,'tester@gmail.com','0886a726944132254fa89e9d680b5c12','mwolff10','Michael','Wolff','user');
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

-- Dump completed on 2018-04-07  5:51:45
