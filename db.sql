-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for quick
DROP DATABASE IF EXISTS `quick`;
CREATE DATABASE IF NOT EXISTS `quick` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `quick`;


-- Dumping structure for table quick.menus
CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `position` int(11) NOT NULL,
  `menu_type` int(11) NOT NULL DEFAULT '1',
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table quick.menus: ~0 rows (approximately)
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` (`id`, `position`, `menu_type`, `icon`, `name`, `title`, `parent_id`, `roles`, `created_at`, `updated_at`) VALUES
	(1, 0, 0, NULL, 'User', 'User', NULL, NULL, '2015-12-25 09:40:10', '2015-12-25 09:40:10');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;


-- Dumping structure for table quick.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table quick.migrations: ~6 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_10_12_000000_create_users_table', 1),
	('2014_10_12_100000_create_password_resets_table', 1),
	('2015_10_10_000000_create_menus_table', 1),
	('2015_10_10_000000_create_roles_table', 1),
	('2015_10_10_000000_update_users_table', 1),
	('2015_12_11_000000_create_users_logs_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Dumping structure for table quick.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table quick.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- Dumping structure for table quick.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table quick.roles: ~2 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
	(1, 'Administrator', '2015-12-25 09:39:48', '2015-12-25 09:39:48'),
	(2, 'User', '2015-12-25 09:39:48', '2015-12-25 09:39:48');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;


-- Dumping structure for table quick.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table quick.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 1, 'test', 'test@test.com', '$2y$10$05MOBmsruUtXZKv4xHsmZOKHqZ.9YgeugyT/sPA9Hi64ibLljM1Nm', '6Gya1Ds0rXvgoiwJsSEwGMJnodlvXgRtUJn8YB7VZs5ut8KDKU9DcJiskiai', '2015-12-25 09:40:10', '2015-12-25 10:12:33');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for table quick.users_logs
CREATE TABLE IF NOT EXISTS `users_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `action_model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table quick.users_logs: ~0 rows (approximately)
/*!40000 ALTER TABLE `users_logs` DISABLE KEYS */;
INSERT INTO `users_logs` (`id`, `user_id`, `action`, `action_model`, `action_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 'login', NULL, NULL, '2015-12-25 10:11:18', '2015-12-25 10:11:18'),
	(2, 1, 'updated', 'users', 1, '2015-12-25 10:12:01', '2015-12-25 10:12:01'),
	(3, 1, 'logout', NULL, NULL, '2015-12-25 10:12:01', '2015-12-25 10:12:01'),
	(4, 1, 'login', NULL, NULL, '2015-12-25 10:12:15', '2015-12-25 10:12:15'),
	(5, 1, 'updated', 'users', 1, '2015-12-25 10:12:32', '2015-12-25 10:12:32'),
	(6, 1, 'updated', 'users', 1, '2015-12-25 10:12:33', '2015-12-25 10:12:33'),
	(7, 1, 'logout', NULL, NULL, '2015-12-25 10:12:33', '2015-12-25 10:12:33'),
	(8, 1, 'login', NULL, NULL, '2015-12-25 10:12:40', '2015-12-25 10:12:40');
/*!40000 ALTER TABLE `users_logs` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
