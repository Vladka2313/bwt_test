-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.22 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win64
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных users
CREATE DATABASE IF NOT EXISTS `users` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `users`;


-- Дамп структуры для таблица users.beckup
CREATE TABLE IF NOT EXISTS `beckup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT '0',
  `email` varchar(50) DEFAULT '0',
  `comment` varchar(100) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы users.beckup: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `beckup` DISABLE KEYS */;
INSERT INTO `beckup` (`id`, `name`, `email`, `comment`) VALUES
	(0, '', '', ''),
	(2, 'sdfaf', 'mark3@gmail.com', 'asdfasdgf gfsg  s'),
	(3, 'sdfaf', 'mark3@gmail.com', 'asdfasdgf gfsg  s'),
	(4, 'ghjklg', 'mark4@gmail.com', 'asdfas d as as '),
	(5, 'sdga', 'h@ukr.net', 'sdaf sd asd as da ');
/*!40000 ALTER TABLE `beckup` ENABLE KEYS */;


-- Дамп структуры для таблица users.reg
CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `login` varchar(50) CHARACTER SET ucs2 DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Дамп данных таблицы users.reg: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `reg` DISABLE KEYS */;
INSERT INTO `reg` (`id`, `name`, `last_name`, `sex`, `date`, `email`, `login`, `password`) VALUES
	(1, 'vlad', 'vlad', NULL, '2016-04-19', 'kot2305@ukr.net', 'vlad', '0000');
/*!40000 ALTER TABLE `reg` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
