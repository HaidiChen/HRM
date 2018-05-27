CREATE DATABASE  IF NOT EXISTS `hrmanagement` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `hrmanagement`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: hrmanagement
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
-- Table structure for table `hetong`
--

DROP TABLE IF EXISTS `hetong`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hetong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `youxiaoqi` int(11) DEFAULT NULL,
  `bianhao` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hetong`
--

LOCK TABLES `hetong` WRITE;
/*!40000 ALTER TABLE `hetong` DISABLE KEYS */;
INSERT INTO `hetong` VALUES (1,5,1),(2,3,2),(4,1,3);
/*!40000 ALTER TABLE `hetong` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jiben`
--

DROP TABLE IF EXISTS `jiben`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jiben` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gongzi` int(11) DEFAULT NULL,
  `butie` int(11) DEFAULT NULL,
  `gongling` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jiben`
--

LOCK TABLES `jiben` WRITE;
/*!40000 ALTER TABLE `jiben` DISABLE KEYS */;
INSERT INTO `jiben` VALUES (-1,4000,2500,-100),(16,1000,500,2),(17,1500,1000,4),(18,2700,1500,6),(19,3300,2000,8),(20,500,250,1),(21,1200,700,3),(22,2500,1200,5),(23,3000,1800,7),(24,3500,2000,9),(25,3500,2000,10),(26,500,100,0);
/*!40000 ALTER TABLE `jiben` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jixiao`
--

DROP TABLE IF EXISTS `jixiao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jixiao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gongzi` int(11) DEFAULT NULL,
  `jibie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jixiao`
--

LOCK TABLES `jixiao` WRITE;
/*!40000 ALTER TABLE `jixiao` DISABLE KEYS */;
INSERT INTO `jixiao` VALUES (6,500,1),(7,1000,2),(8,1500,3),(9,2000,4),(10,2500,5),(11,3000,6),(12,3500,7),(13,4000,8),(14,4500,9),(16,5000,10);
/*!40000 ALTER TABLE `jixiao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `xueli`
--

DROP TABLE IF EXISTS `xueli`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `xueli` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `butie` int(11) DEFAULT NULL,
  `xueli` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `xueli`
--

LOCK TABLES `xueli` WRITE;
/*!40000 ALTER TABLE `xueli` DISABLE KEYS */;
INSERT INTO `xueli` VALUES (2,9000,'博士'),(3,8000,'硕士'),(4,6000,'本科'),(5,4000,'专科'),(6,3000,'高中'),(7,2000,'初中'),(8,1000,'小学'),(12,10000,'博士后');
/*!40000 ALTER TABLE `xueli` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yuangong`
--

DROP TABLE IF EXISTS `yuangong`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yuangong` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhiweibianhao` int(11) NOT NULL,
  `zhiweizhuangtai` int(11) DEFAULT NULL,
  `xuelibianhao` int(11) NOT NULL,
  `jibengongzibianhao` int(11) NOT NULL,
  `jixiaogongzibianhao` int(11) NOT NULL,
  `xingming` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `minzu` varchar(45) DEFAULT NULL,
  `idcard` varchar(45) DEFAULT NULL,
  `zhengzhimianmao` varchar(45) DEFAULT NULL,
  `jiguan` varchar(45) DEFAULT NULL,
  `biyexuexiao` varchar(45) DEFAULT NULL,
  `zhuanye` varchar(45) DEFAULT NULL,
  `lianxidizhi` varchar(45) DEFAULT NULL,
  `youbian` varchar(45) DEFAULT NULL,
  `youxiang` varchar(45) DEFAULT NULL,
  `ruzhishijian` date DEFAULT NULL,
  `qianyueshijian` date DEFAULT NULL,
  `hetongbianhao` int(11) NOT NULL,
  `zhuguan` int(11) DEFAULT NULL,
  `tongshi` int(11) DEFAULT NULL,
  `xiashu` int(11) DEFAULT NULL,
  `ziwo` int(11) DEFAULT NULL,
  `zongping` int(11) DEFAULT NULL,
  `lianxidianhua` varchar(45) DEFAULT NULL,
  `shenfen` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `zwbh_fk_idx` (`zhiweibianhao`),
  KEY `jbgz_fk_idx` (`jibengongzibianhao`),
  KEY `jxgz_fk_idx` (`jixiaogongzibianhao`),
  KEY `xlbh_fk_idx` (`xuelibianhao`),
  KEY `htbh_fk_idx` (`hetongbianhao`),
  CONSTRAINT `htbh_fk` FOREIGN KEY (`hetongbianhao`) REFERENCES `hetong` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `jbgz_fk` FOREIGN KEY (`jibengongzibianhao`) REFERENCES `jiben` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `jxgz_fk` FOREIGN KEY (`jixiaogongzibianhao`) REFERENCES `jixiao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `xlbh_fk` FOREIGN KEY (`xuelibianhao`) REFERENCES `xueli` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `zwbh_fk` FOREIGN KEY (`zhiweibianhao`) REFERENCES `zhiwei` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yuangong`
--

LOCK TABLES `yuangong` WRITE;
/*!40000 ALTER TABLE `yuangong` DISABLE KEYS */;
INSERT INTO `yuangong` VALUES (36,10,1,3,20,16,'小明','男','1988-04-04','汉族','888888888888888888','党员','中国江苏南京鼓楼区','南京林业大学','软件工程','中国江苏南京鼓楼区察哈尔路16号','654443','xiaoming@xxx.com','2017-02-01','2017-02-02',1,NULL,NULL,NULL,NULL,NULL,'15222233333','administrator','123456'),(37,11,1,3,21,14,'小红','女','1974-10-30','汉族','888888888888888899','党员','中国江苏常州','南京林业大学','软件工程','江苏常州xxxx路23号','654499','xiaohong@xxx.com','2015-11-01','2017-11-25',1,80,90,95,100,88,'12235466545','zhiyuan','888899'),(38,11,1,4,20,14,'小强','男','1982-11-23','汉族','888888888888888887','党员','中国江苏南京溧水区','南京林业大学','软件工程','江苏南京溧水区xxx大道','654447','xiaoqiang@xxx.com','2017-02-03','2017-02-02',1,80,90,95,100,88,'15222233444','zhiyuan','888887'),(39,11,1,4,20,14,'小华','男','1982-02-04','汉族','338888888888888888','党员','中国江西南昌','南京林业大学','软件工程','江苏南京建邺区xxx路3号','624443','xiaohua123@xxx.com','2017-06-14','2017-05-28',1,NULL,NULL,NULL,NULL,NULL,'15222993333','administrator','jkjkjk'),(40,37,1,5,26,6,'小康','男','1990-05-08','汉族','888888778888888888','群众','中国山东济南','','','江苏南京鼓楼xx路7号','654499','xiaokang@xxx.com','2018-01-01','2018-01-01',4,NULL,NULL,NULL,NULL,NULL,'','zhiyuan','888888'),(41,27,0,5,20,7,'小黄','女','0000-00-00','汉族','','群众','','','','','','','2017-01-03','2017-01-01',2,NULL,NULL,NULL,NULL,NULL,'15293494394','zhiyuan',''),(42,35,1,4,20,9,'小陈','男','0000-00-00','汉族','','','','','','','','','2017-02-08','2017-02-02',2,NULL,NULL,NULL,NULL,NULL,'','zhiyuan',''),(43,33,1,4,26,11,'小花','女','1988-06-15','汉族','888884488888888899','党员','','','','','','','2018-01-09','2018-01-01',2,NULL,NULL,NULL,NULL,NULL,'18799994394','zhiyuan','888899');
/*!40000 ALTER TABLE `yuangong` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zhiwei`
--

DROP TABLE IF EXISTS `zhiwei`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zhiwei` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shangjiid` int(11) NOT NULL,
  `jihuarenshu` int(11) unsigned NOT NULL,
  `xianyourenshu` int(11) unsigned NOT NULL,
  `zhuangtai` int(11) DEFAULT NULL,
  `gongzi` int(11) NOT NULL,
  `jixiaoquanzhong` double NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zhiwei`
--

LOCK TABLES `zhiwei` WRITE;
/*!40000 ALTER TABLE `zhiwei` DISABLE KEYS */;
INSERT INTO `zhiwei` VALUES (10,0,1,1,1,20000,60,'总经理'),(11,10,3,3,1,15000,55,'副总经理'),(12,11,1,0,0,12000,50,'财务部主管'),(13,11,1,0,0,12000,50,'行政部主管'),(14,11,1,0,0,12000,50,'工程部主管'),(15,11,1,0,0,12000,50,'预算部主管'),(16,11,1,0,0,12000,50,'采购部主管'),(17,11,1,0,0,12000,50,'业务部主管'),(18,11,1,0,0,12000,50,'设计部主管'),(19,13,3,0,0,10000,45,'行政处主任'),(20,13,4,0,0,10000,45,'人事处主任'),(21,12,3,0,0,10000,45,'财务处主任'),(22,12,5,0,0,10000,45,'审计处主任'),(23,14,5,0,0,10000,45,'工程监理主任'),(24,14,2,0,0,10000,45,'售后服务主任'),(25,15,3,0,0,10000,45,'结算处主任'),(26,17,4,0,0,10000,45,'家装处主任'),(27,17,3,1,0,10000,45,'公装处主任'),(28,21,5,0,0,8000,35,'财务组长'),(29,22,5,0,0,8000,35,'审计组长'),(30,19,8,0,0,8000,35,'行政组长'),(31,18,10,0,0,8000,35,'设计组长'),(32,28,25,0,0,4000,20,'财务组员'),(33,29,15,1,0,4000,20,'审计组员'),(34,30,64,0,0,3500,20,'行政组员'),(35,20,25,1,0,3000,20,'人事组员'),(36,23,4,0,0,6000,35,'工程组长'),(37,36,40,1,0,3500,20,'工程组员');
/*!40000 ALTER TABLE `zhiwei` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-04 13:53:34
