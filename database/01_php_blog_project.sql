-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.38-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for 01_php_blog_project
CREATE DATABASE IF NOT EXISTS `01_php_blog_project` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `01_php_blog_project`;

-- Dumping structure for table 01_php_blog_project.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `ID_cat` int(100) NOT NULL AUTO_INCREMENT,
  `name_cat` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_cat`),
  UNIQUE KEY `name_cat` (`name_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table 01_php_blog_project.categories: ~0 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table 01_php_blog_project.categories_backup
CREATE TABLE IF NOT EXISTS `categories_backup` (
  `ID_cat` int(100) DEFAULT NULL,
  `name_cat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table 01_php_blog_project.categories_backup: ~0 rows (approximately)
/*!40000 ALTER TABLE `categories_backup` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories_backup` ENABLE KEYS */;

-- Dumping structure for table 01_php_blog_project.entries
CREATE TABLE IF NOT EXISTS `entries` (
  `ID_ent` int(100) NOT NULL AUTO_INCREMENT,
  `ID_use` int(100) NOT NULL,
  `ID_cat` int(100) NOT NULL,
  `title_ent` varchar(100) NOT NULL,
  `description_ent` longtext NOT NULL,
  `date_ent` date NOT NULL,
  PRIMARY KEY (`ID_ent`),
  KEY `ID_use` (`ID_use`),
  KEY `ID_cat` (`ID_cat`),
  CONSTRAINT `entries_ibfk_1` FOREIGN KEY (`ID_use`) REFERENCES `users` (`ID_use`),
  CONSTRAINT `entries_ibfk_2` FOREIGN KEY (`ID_cat`) REFERENCES `categories` (`ID_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table 01_php_blog_project.entries: ~0 rows (approximately)
/*!40000 ALTER TABLE `entries` DISABLE KEYS */;
/*!40000 ALTER TABLE `entries` ENABLE KEYS */;

-- Dumping structure for table 01_php_blog_project.entries_backup
CREATE TABLE IF NOT EXISTS `entries_backup` (
  `ID_ent` int(100) DEFAULT NULL,
  `ID_use` int(100) DEFAULT NULL,
  `ID_cat` int(100) DEFAULT NULL,
  `title_ent` varchar(100) DEFAULT NULL,
  `description_ent` longtext,
  `date_ent` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table 01_php_blog_project.entries_backup: ~0 rows (approximately)
/*!40000 ALTER TABLE `entries_backup` DISABLE KEYS */;
/*!40000 ALTER TABLE `entries_backup` ENABLE KEYS */;

-- Dumping structure for table 01_php_blog_project.users
CREATE TABLE IF NOT EXISTS `users` (
  `ID_use` int(100) NOT NULL AUTO_INCREMENT,
  `name_use` varchar(100) NOT NULL,
  `surname_use` varchar(100) NOT NULL,
  `email_use` varchar(100) NOT NULL,
  `password_use` varchar(100) NOT NULL,
  `date_use` date NOT NULL,
  PRIMARY KEY (`ID_use`),
  UNIQUE KEY `email_use` (`email_use`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table 01_php_blog_project.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table 01_php_blog_project.users_backup
CREATE TABLE IF NOT EXISTS `users_backup` (
  `ID_use` int(100) DEFAULT NULL,
  `name_use` varchar(100) DEFAULT NULL,
  `surname_use` varchar(100) DEFAULT NULL,
  `email_use` varchar(100) DEFAULT NULL,
  `password_use` varchar(100) DEFAULT NULL,
  `date_use` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table 01_php_blog_project.users_backup: ~0 rows (approximately)
/*!40000 ALTER TABLE `users_backup` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_backup` ENABLE KEYS */;

-- Dumping structure for trigger 01_php_blog_project.categories_backup_trigger
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER categories_backup_trigger BEFORE DELETE ON categories FOR EACH ROW 
BEGIN
INSERT INTO categories_backup VALUES(OLD.ID_cat, OLD.name_cat);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger 01_php_blog_project.entries_backup_trigger
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER entries_backup_trigger BEFORE DELETE ON entries FOR EACH ROW 
BEGIN
INSERT INTO entries_backup VALUES(OLD.ID_ent, OLD.ID_use, OLD.ID_cat, OLD.title_ent, OLD.description_ent, OLD.date_ent);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger 01_php_blog_project.users_backup_trigger
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER users_backup_trigger BEFORE DELETE ON users FOR EACH ROW 
BEGIN
INSERT INTO users_backup VALUES(OLD.ID_use, OLD.name_use, OLD.surname_use, OLD.email_use, OLD.password_use, OLD.date_use);
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
