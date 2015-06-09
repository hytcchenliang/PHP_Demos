/*
SQLyog v10.2 
MySQL - 5.6.11 : Database - liuyanban
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`liuyanban` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `liuyanban`;

/*Table structure for table `words` */

DROP TABLE IF EXISTS `words`;

CREATE TABLE `words` (
  `id` int(32) unsigned NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

/*Data for the table `words` */

insert  into `words`(`id`,`content`,`is_active`,`create_time`) values (1,'对你爱爱爱不完',1,'2015-04-14 00:20:00'),(11,'我恨我痴心',0,'2015-04-14 00:21:19'),(12,'死了都要爱',0,'2015-04-14 00:21:21'),(13,'这是一个需要思考的问题',1,'2015-04-14 00:25:48'),(14,'人生是一次旅行',0,'2015-04-14 00:25:40'),(15,'说不出再见',1,'2015-04-14 00:28:06'),(16,'死了都要爱',1,'2015-04-14 00:28:14');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
