-- MySQL dump 10.13  Distrib 8.0.12, for Win64 (x86_64)
--
-- Host: localhost    Database: php
-- ------------------------------------------------------
-- Server version	8.0.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pictures`
--

DROP TABLE IF EXISTS `pictures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `size` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `click` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pictures`
--

LOCK TABLES `pictures` WRITE;
/*!40000 ALTER TABLE `pictures` DISABLE KEYS */;
INSERT INTO `pictures` VALUES (1,'1920x1440.jpg',425018,'img/small/',33),(2,'art_nick_deligaris_drakon.jpg',671138,'img/small/',34),(3,'bear.jpg',21741,'img/small/',34),(4,'charmander.jpg',11393,'img/small/',NULL),(5,'clock.jpg',16094,'img/small/',NULL),(6,'dead-island-20110215060817299.jpg',1994547,'img/small/',30),(7,'deadpool.jpg',22309,'img/small/',30),(8,'dubstep_muzyka_cherep_2560x1600.jpg',244913,'img/small/',NULL),(9,'head.jpg',17511,'img/small/',NULL),(10,'images.jpg',10723,'img/small/',NULL),(11,'jacket.jpg',13751,'img/small/',NULL),(12,'letter.jpg',15547,'img/small/',NULL),(13,'monster.jpg',8943,'img/small/',NULL),(14,'tree.jpg',11888,'img/small/',NULL),(15,'gallery_22_7_295945.jpg',428394,'img/small/',NULL),(32,'be_wallpapers-2.jpg',301980,'img/small/',NULL),(41,'be_wallpapers-3.jpg',376652,'img/small/',NULL),(42,'be_wallpapers-2.jpg',301980,'img/small/',NULL);
/*!40000 ALTER TABLE `pictures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `description` text,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Xiaomi Redmi Note 7 64GB Black','30043544b.jpg','Встроенная память (ROM): 64 ГБ','В режиме съемки с разрешением 48 Мп размер одного пикселя составляет 0,8 мкм, благодаря чему Вы сможете запечатлеть изображение в его истинной красоте и мельчайших деталях. В смартфоне реализован передовой алгоритм ночной съемки: при нажатии на кнопку спуска затвора, камера автоматически делает множество снимков, объединяя их в одну фотографию высокого разрешения.',15990),(2,'Sony G3416 Xperia XA1 Plus Gold','30042093b.jpg','Мощный 8-ядерный чипсет','Восьмиядерный процессор Mediatek Helio P20 обладает возможностью функционирования с частотой до 2.3 ГГц и сочетается с графическим ускорителем Mali-T880 MP2, а также с оперативной памятью 4 ГБ. Хранить многочисленные файлы и приложения можно на 32 ГБ встроенной памяти.',11900),(3,'Samsung Galaxy S10+ Аквамарин','30042523b.jpg','Диагональ экрана	6.4\"(16.2 см)','Корпус смартфона Samsung Galaxy S10+ цвета черного оникса изготовлен из стекла и металла. Его экран диагональю 6.4 дюйма обладает разрешением 3040x1440 пикселей и позволяет смотреть фильмы и видео в высоком качестве. Также этому способствует безрамочная конструкция дисплея, изготовленного по технологии Dynamic AMOLED.',76999),(4,'Apple iPhone XR 64GB Black','30040032b.jpg','Встроенная память (ROM): 64 ГБ','Смартфон Apple iPhone Xr, ставший обладателем классической черной расцветки корпуса, отличает 7-нанометровый 6-ядерный процессор Apple A12 Bionic, являющийся фундаментом для его технического оснащения. Он вместе с 3 ГБ оперативной памяти обеспечивает устройство всем необходимым для беспроблемной работы в многозадачном режиме независимо от количества и типа запускаемых приложений. Высокая тактовая частота процессора, равная 2.5 ГГц, является гарантом отсутствия подтормаживаний и подвисаний операционной системы iOS.',59999),(10,'fea','','fdsafs','fsda',1);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`),
  UNIQUE KEY `password` (`password`),
  UNIQUE KEY `email` (`email`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'roman','bb684d0ba5bfc9ca413771e33c5b636e','romik231@yandex.ru');
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

-- Dump completed on 2019-04-25 22:49:44
