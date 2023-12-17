-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: laravel-database
-- ------------------------------------------------------

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
-- Table structure for database `library-always`
--
DROP DATABASE IF EXISTS library-always;
CREATE DATABASE library-always;
USE library-always;

DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
	`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(80) NULL DEFAULT NULL,
	`status` ENUM('0','1') NOT NULL DEFAULT '1',
	`created_at` TIMESTAMP NULL DEFAULT (CURRENT_TIMESTAMP()),
	`updated_at` TIMESTAMP NULL DEFAULT (CURRENT_TIMESTAMP()),
	PRIMARY KEY (`id`)
)
COMMENT='Countries table'
COLLATE='utf8mb4_0900_ai_ci';

--
-- Dumping data for table `countries`
--
LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `library-always`.`countries` (`name`, `created_at`, `updated_at`) VALUES ('Colombia', '2023-11-26 19:43:05', '2023-11-26 19:43:07');
INSERT INTO `library-always`.`countries` (`name`, `created_at`, `updated_at`) VALUES ('Argentina', '2023-11-26 19:43:30', '2023-11-26 19:43:31');
INSERT INTO `library-always`.`countries` (`name`, `created_at`, `updated_at`) VALUES ('Chile', '2023-11-26 19:43:45', '2023-11-26 19:43:46');
INSERT INTO `library-always`.`countries` (`name`, `created_at`, `updated_at`) VALUES ('Brasil', '2023-11-26 19:43:54', '2023-11-26 19:43:55');
INSERT INTO `library-always`.`countries` (`name`, `created_at`, `updated_at`) VALUES ('Paraguay', '2023-11-26 19:44:06', '2023-11-26 19:44:07');
INSERT INTO `library-always`.`countries` (`name`, `created_at`) VALUES ('Uruguay', '2023-11-26 19:44:17');
INSERT INTO `library-always`.`countries` (`name`, `created_at`, `updated_at`) VALUES ('Peru', '2023-11-26 19:49:04', '2023-11-26 19:49:06');
INSERT INTO `library-always`.`countries` (`name`, `created_at`, `updated_at`) VALUES ('Estados Unidos', '2023-11-26 19:49:17', '2023-11-26 19:49:18');
/*!40000 ALTER TABLE `actor_episode` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `cities`
--
DROP TABLE IF EXISTS `cities`;
CREATE TABLE `cities` (
	`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NULL DEFAULT NULL,
	`country_id` BIGINT UNSIGNED NOT NULL,
	`status` ENUM('0','1') NOT NULL DEFAULT '1',
	`created_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	`updated_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	PRIMARY KEY (`id`)
)
COMMENT='Cities for every country'
COLLATE='utf8mb4_0900_ai_ci';

ALTER TABLE `cities` ADD CONSTRAINT `FK1_country_id` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON UPDATE CASCADE ON DELETE CASCADE;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--
LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `library-always`.`cities` (`name`, `country_id`, `created_at`, `updated_at`) VALUES ('Bogota', 1, '2023-11-26 20:01:37', '2023-11-26 20:01:39');
INSERT INTO `library-always`.`cities` (`name`, `country_id`, `created_at`, `updated_at`) VALUES ('Buenos Aires', 2, '2023-11-26 20:02:25', '2023-11-26 20:02:26');
INSERT INTO `library-always`.`cities` (`name`, `country_id`, `created_at`, `updated_at`) VALUES ('Santiago de Chile', 3, '2023-11-26 20:02:25', '2023-11-26 20:02:26');
INSERT INTO `library-always`.`cities` (`name`, `country_id`, `created_at`, `updated_at`) VALUES ('Sao Paulo', 4, '2023-11-26 20:04:53', '2023-11-26 20:04:55');
INSERT INTO `library-always`.`cities` (`name`, `country_id`, `created_at`, `updated_at`) VALUES ('Asuncion', 5, '2023-11-26 20:05:33', '2023-11-26 20:05:34');
INSERT INTO `library-always`.`cities` (`name`, `country_id`, `created_at`, `updated_at`) VALUES ('Montevideo', 6, '2023-11-26 20:06:04', '2023-11-26 20:06:05');
INSERT INTO `library-always`.`cities` (`name`, `country_id`, `created_at`, `updated_at`) VALUES ('Lima', 7, '2023-11-26 20:06:34', '2023-11-26 20:06:35');
INSERT INTO `library-always`.`cities` (`name`, `country_id`, `created_at`, `updated_at`) VALUES ('New York', 8, '2023-11-26 20:07:15', '2023-11-26 20:07:16');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;



--
-- Table structure for table `type_documents`
--
DROP TABLE IF EXISTS `type_documents`;
CREATE TABLE `type_documents` (
	`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(60) NULL DEFAULT NULL,
	`status` ENUM('0','1') NOT NULL DEFAULT '1',
	`created_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	`updated_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	PRIMARY KEY (`id`)
)
COLLATE='utf8mb4_0900_ai_ci';

--
-- Dumping data for table `type_documents`
--
LOCK TABLES `type_documents` WRITE;
/*!40000 ALTER TABLE `type_documents` DISABLE KEYS */;
INSERT INTO `library-always`.`type_documents` (`name`, `created_at`, `updated_at`) VALUES ('Tarjeta de Identidad', '2023-11-26 20:14:01', '2023-11-26 20:14:03');
INSERT INTO `library-always`.`type_documents` (`name`, `created_at`, `updated_at`) VALUES ('Cedula', '2023-11-26 20:14:19', '2023-11-26 20:14:20');
INSERT INTO `library-always`.`type_documents` (`name`, `created_at`, `updated_at`) VALUES ('Pasaporte', '2023-11-26 20:14:50', '2023-11-26 20:14:51');
INSERT INTO `library-always`.`type_documents` (`name`, `created_at`) VALUES ('Cedula de Extranjeria', '2023-11-26 20:15:35');
/*!40000 ALTER TABLE `type_documents` ENABLE KEYS */;
UNLOCK TABLES;



--
-- Table structure for table `genres`
--
DROP TABLE IF EXISTS `genres`;
CREATE TABLE `genres` (
	`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NULL DEFAULT NULL,
	`abbreviate` ENUM('M','F') NOT NULL DEFAULT 'M',
	`status` ENUM('0','1') NOT NULL DEFAULT '1',
	`created_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	`updated_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	PRIMARY KEY (`id`)
)
COMMENT='Genres Table'
COLLATE='utf8mb4_0900_ai_ci';

--
-- Dumping data for table `genres`
--
LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `library-always`.`genres` (`name`, `abbreviate`, `created_at`, `updated_at`) VALUES ('Femenino', 'F', '2023-11-30 19:53:41', '2023-11-30 19:53:42');
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `users`
--
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
	`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(80) NULL DEFAULT NULL,
	`last_name` VARCHAR(80) NULL DEFAULT NULL,
	`user` VARCHAR(80) NULL DEFAULT NULL,
	`type_document_id` BIGINT UNSIGNED NOT NULL,
	`number_document` INT NULL DEFAULT NULL,
	`address` VARCHAR(80) NULL DEFAULT NULL,
	`email` VARCHAR(80) NULL DEFAULT NULL,
	`number_phone` VARCHAR(20) NULL DEFAULT NULL,
	`cellphone_number` VARCHAR(20) NULL DEFAULT NULL,
	`genre_id` BIGINT UNSIGNED NOT NULL,
	`password` VARCHAR(200) NULL DEFAULT NULL,
	`city_id` BIGINT UNSIGNED NOT NULL,
	`type_user_id` BIGINT UNSIGNED NOT NULL,
	`status` ENUM('0','1') NOT NULL DEFAULT '1',
	`created_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	`updated_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	PRIMARY KEY (`id`),
	UNIQUE INDEX `number_document` (`number_document`),
	UNIQUE INDEX `email` (`email`),
	CONSTRAINT `FK1_type_document_id` FOREIGN KEY (`type_document_id`) REFERENCES `type_documents` (`id`) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT `FK2_city_id` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT `FK3_genre_id` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT `FK4_type_user_id` FOREIGN KEY (`type_user_id`) REFERENCES `type_users` (`id`) ON UPDATE CASCADE ON DELETE CASCADE
)
COMMENT='Users Table'
COLLATE='utf8mb4_0900_ai_ci';

--
-- Dumping data for table `users`
--
LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `episodes` DISABLE KEYS */;
INSERT INTO `library-always`.`users` (`name`, `last_name`, `type_document_id`, `number_document`, `address`, `email`, `number_phone`, `cellphone_number`, `genre_id`, `password`, `city_id`, `type_user_id`, `created_at`, `updated_at`) VALUES ('Wilmar David', 'Macias Guerrero', 2, 80856960, 'Cll )2 # 17-90', 'davidguerrero0709@gmail.com', '9405709', '3024786575', '1' '$2y$10$AMZrbjYTuNmFKQnxlRevSOuEF.ZqhIU5o9TRyCujQd4fwr9cuiGm6', 1, 1, '2023-11-26 21:08:34', '2023-11-26 21:08:38');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `sessions`
--
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
	`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	`user_id` BIGINT UNSIGNED NOT NULL,
	`token` TEXT NULL DEFAULT NULL,
	`status` ENUM('0','1') NOT NULL DEFAULT '1',
	`created_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	`updated_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	PRIMARY KEY (`id`),
	CONSTRAINT `FK1_usersession_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE ON DELETE CASCADE
)
COMMENT='Sessions By User Table'
COLLATE='utf8mb4_0900_ai_ci';


--
-- Table structure for table `books`
--
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
	`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NULL DEFAULT NULL,
	`status` ENUM('0','1') NOT NULL DEFAULT '1',
	`created_at` TIMESTAMP NULL DEFAULT (CURRENT_TIMESTAMP()),
	`updated_at` TIMESTAMP NULL DEFAULT (CURRENT_TIMESTAMP()),
	PRIMARY KEY (`id`)
)
COMMENT='Books Table'
COLLATE='utf8mb4_0900_ai_ci';



--
-- Table structure for table `book_table`
--
DROP TABLE IF EXISTS `book_table`;
CREATE TABLE `books_authors` (
	`id` BIGINT UNSIGNED NOT NULL,
	`book_id` BIGINT UNSIGNED NOT NULL,
	`author_id` BIGINT UNSIGNED NOT NULL,
	`created_at` TIMESTAMP NOT NULL DEFAULT (0),
	`updated_at` TIMESTAMP NOT NULL DEFAULT (0),
  PRIMARY KEY (`id`)
  CONSTRAINT `FK1_book_id` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON UPDATE CASCADE ON DELETE CASCADE,
  CONSTRAINT `FK2_author_id` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON UPDATE CASCADE ON DELETE CASCADE,
)
COMMENT='pivot books_authors table'
COLLATE='utf8mb4_0900_ai_ci';


--
-- Table structure for table `type_activity`
--
DROP TABLE IF EXISTS `type_activity`;
CREATE TABLE `type_activity` (
	`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` ENUM('Sale','Loan','Free','Business') NULL DEFAULT 'Free',
	`status` ENUM('0','1') NULL DEFAULT '1',
	`created_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	`updated_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	PRIMARY KEY (`id`)
)
COMMENT='Type Activities Table'
COLLATE='utf8mb4_0900_ai_ci';

--
-- Dumping data for table `users`
--
LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `episodes` DISABLE KEYS */;
INSERT INTO `library-always`.`type_activity` (`created_at`, `updated_at`) VALUES ('2023-11-30 21:16:34', '2023-11-30 21:16:35'), ('Sale', '2023-11-30 21:16:48', '2023-11-30 21:16:50'), ('Rent', '2023-11-30 21:16:59', '2023-11-30 21:17:00'), ('Loan', '2023-11-30 21:17:08', '2023-11-30 21:17:09'),('Bond', '2023-11-30 21:17:08', '2023-11-30 21:17:09'), ('Business', '2023-11-30 21:17:08', '2023-11-30 21:17:09');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `activities_library`
--
DROP TABLE IF EXISTS `activities_library`;
CREATE TABLE `activities_library` (
	`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	`type_activity_id` BIGINT UNSIGNED NOT NULL,
	`user_id` BIGINT UNSIGNED NOT NULL,
	`book_id` BIGINT UNSIGNED NOT NULL,
	`prize` DOUBLE NULL DEFAULT NULL,
	`time_activity` DATETIME NULL DEFAULT NULL,
	`status` ENUM('0','1') NOT NULL DEFAULT '1',
	`created_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	`updated_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	PRIMARY KEY (`id`),
	CONSTRAINT `FK1_user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT `FK2_type_activity_id` FOREIGN KEY (`type_activity_id`) REFERENCES `type_activity` (`id`) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT `FK3_book_id` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON UPDATE CASCADE ON DELETE CASCADE
)
COMMENT='Activities Library Table'
COLLATE='utf8mb4_0900_ai_ci';


--
-- Table structure for table `inventaries`
--
DROP TABLE IF EXISTS `inventaries`;
CREATE TABLE `jnventaries` (
	`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	`book_id` BIGINT UNSIGNED NOT NULL,
	`amount` INT NULL DEFAULT NULL,
	`unit_price` DOUBLE NULL DEFAULT NULL,
	`total` DOUBLE NULL DEFAULT NULL,
	`status` ENUM('1','0') NOT NULL DEFAULT '1',
	`created_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	`updated_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	PRIMARY KEY (`id`),
	CONSTRAINT `FK1_book_id` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON UPDATE CASCADE ON DELETE CASCADE
)
COMMENT='Inventaries Table'
COLLATE='utf8mb4_0900_ai_ci';


--
-- Table structure for table `type_users`
--
DROP TABLE IF EXISTS `type_users`;
CREATE TABLE `type_users` (
	`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NULL DEFAULT NULL,
	`status` ENUM('1','0') NOT NULL DEFAULT '1',
	`created_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	`updated_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	PRIMARY KEY (`id`)
)
COMMENT='Type Users Table'
COLLATE='utf8mb4_0900_ai_ci';

--
-- Dumping data for table `type_users`
--
LOCK TABLES `type_users` WRITE;
/*!40000 ALTER TABLE `type_users` DISABLE KEYS */;
INSERT INTO `library-always`.`type_users` (`name`, `created_at`, `updated_at`) VALUES ('Customers', '2023-12-01 20:18:11', '2023-12-01 20:18:12'), ('Suppliers', '2023-12-01 20:18:29', '2023-12-01 20:18:31'), ('Manangements', '2023-12-01 20:38:02', '2023-12-01 20:38:04');
/*!40000 ALTER TABLE `type_users` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `type_payment`
--
DROP TABLE IF EXISTS `type_payment`;
CREATE TABLE `type_payment` (
	`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR 255,
	`status` ENUM('1','0') NOT NULL DEFAULT '1',
	`created_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	`updated_at` TIMESTAMP NOT NULL,
	PRIMARY KEY (`id`)
)
COMMENT='Type Payment Table'
COLLATE='utf8mb4_0900_ai_ci';

--
-- Dumping data for table `type_users`
--
/*!40101 SET character_set_client = @saved_cs_client */;
INSERT INTO `library-always`.`type_payment` (`name`, `created_at`, `updated_at`) VALUES ('Cash', '2023-12-01 21:48:32', '2023-12-01 21:48:33'), ('Credit Card', '2023-12-01 21:48:44', '2023-12-01 21:48:45', ('Debit Card', '2023-12-01 21:49:15', '2023-12-01 21:49:16'), ('Daviplata', '2023-12-01 21:49:15', '2023-12-01 21:49:16')), ('Nequi', '2023-12-01 21:49:42', '2023-12-01 21:49:43'), ('Librery Credit', '2023-12-01 21:49:42', '2023-12-01 21:49:43'), ('Bond', '2023-12-01 21:49:42', '2023-12-01 21:49:43');
/*!40101 SET character_set_client = @saved_cs_client */;



--
-- Table structure for table `type_accounts`
--
DROP TABLE IF EXISTS `type_accounts`;
CREATE TABLE `type_accounts` (
	`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255) NULL DEFAULT NULL,
	`status` ENUM('0','1') NOT NULL DEFAULT '1',
	`created_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	`updated_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	PRIMARY KEY (`id`)
)
COMMENT='Type Accounts Table'
COLLATE='utf8mb4_0900_ai_ci';

--
-- Dumping data for table `accounts`
--
LOCK TABLES `type_accounts` WRITE;
/*!40000 ALTER TABLE `type_account` DISABLE KEYS */;
INSERT INTO `library-always`.`type_accounts` (`name`, `created_at`, `updated_at`) VALUES ('Debit', '2023-12-03 11:17:07', '2023-12-03 11:17:09'), ('Spent', '2023-12-03 11:18:15', '2023-12-03 11:18:16');
/*!40000 ALTER TABLE `type_account` ENABLE KEYS */;
UNLOCK TABLES;


--
-- Table structure for table `type_accounts`
--
DROP TABLE IF EXISTS `payable_receivable_accounts`;
CREATE TABLE `payable_receivable_accounts` (
	`id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
	`type_payment_id` BIGINT UNSIGNED NOT NULL,
	`activity_library_id` BIGINT UNSIGNED NOT NULL,
	`total_activities` DOUBLE NULL DEFAULT NULL,
	`form_number` INT NULL DEFAULT NULL,
	`description` TEXT NULL DEFAULT NULL,
	`payment_date` DATETIME NULL DEFAULT NULL,
	`payment` DOUBLE NULL DEFAULT NULL,
	`created_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	`updated_at` TIMESTAMP NOT NULL DEFAULT (CURRENT_TIMESTAMP()),
	PRIMARY KEY (`id`),
	CONSTRAINT `FK1_type_payment_id` FOREIGN KEY (`type_payment_id`) REFERENCES `type_payment` (`id`) ON UPDATE CASCADE ON DELETE CASCADE,
	CONSTRAINT `FK2_activity_library_id` FOREIGN KEY (`activity_library_id`) REFERENCES `activities_library` (`id`) ON UPDATE CASCADE ON DELETE CASCADE
)
COMMENT='Payable Receivable Accounts Table'
COLLATE='utf8mb4_0900_ai_ci';