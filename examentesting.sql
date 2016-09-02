-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 01, 2016 at 08:14 PM
-- Server version: 5.5.49-0+deb8u1
-- PHP Version: 5.6.24-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `examentesting`
--

-- --------------------------------------------------------

--
-- Table structure for table `actionlog`
--

CREATE TABLE IF NOT EXISTS `actionlog` (
`id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `user_remote` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `action` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `message` text
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actionlog`
--

INSERT INTO `actionlog` (`id`, `user_id`, `user_remote`, `time`, `action`, `category`, `status`, `message`) VALUES
(1, 0, '127.0.0.1', '2016-09-01 09:24:45', 'login', 'security', 'Login error', 's:43:"Se ha intentado ingresar a la cuenta: admin";'),
(2, 1, '127.0.0.1', '2016-09-01 09:24:49', 'login', 'security', 'Login correcto.', 's:46:"El usuario admin se ha logueado correctamente.";'),
(3, 1, '127.0.0.1', '2016-09-01 09:30:24', 'login', 'security', 'Login correcto.', 's:46:"El usuario admin se ha logueado correctamente.";'),
(4, 1, '127.0.0.1', '2016-09-01 18:12:23', 'login', 'security', 'Login correcto.', 's:46:"El usuario admin se ha logueado correctamente.";'),
(5, 1, '127.0.0.1', '2016-09-01 21:00:56', 'login', 'security', 'Login correcto.', 's:46:"El usuario admin se ha logueado correctamente.";'),
(6, 2, '127.0.0.1', '2016-09-01 21:05:02', 'login', 'security', 'Login correcto.', 's:45:"El usuario marc se ha logueado correctamente.";'),
(7, 2, '127.0.0.1', '2016-09-01 22:26:22', 'login', 'security', 'Login correcto.', 's:45:"El usuario marc se ha logueado correctamente.";'),
(8, 0, '127.0.0.1', '2016-09-01 22:39:07', 'login', 'security', 'Login error', 's:43:"Se ha intentado ingresar a la cuenta: admin";'),
(9, 0, '127.0.0.1', '2016-09-01 22:40:20', 'login', 'security', 'Login error', 's:49:"Se ha intentado ingresar a la cuenta: supearadmin";'),
(10, 0, '127.0.0.1', '2016-09-01 22:40:23', 'login', 'security', 'Login error', 's:48:"Se ha intentado ingresar a la cuenta: superadmin";'),
(11, 0, '127.0.0.1', '2016-09-01 22:40:55', 'login', 'security', 'Login error', 's:49:"Se ha intentado ingresar a la cuenta: supearadmin";'),
(12, 0, '127.0.0.1', '2016-09-01 22:40:59', 'login', 'security', 'Login error', 's:43:"Se ha intentado ingresar a la cuenta: admin";'),
(13, 0, '127.0.0.1', '2016-09-02 00:48:20', 'login', 'security', 'Login error', 's:43:"Se ha intentado ingresar a la cuenta: admin";'),
(14, 0, '127.0.0.1', '2016-09-02 00:48:35', 'login', 'security', 'Login error', 's:48:"Se ha intentado ingresar a la cuenta: superadmin";'),
(15, 0, '127.0.0.1', '2016-09-02 00:51:11', 'login', 'security', 'Login error', 's:42:"Se ha intentado ingresar a la cuenta: user";'),
(16, 0, '127.0.0.1', '2016-09-02 00:51:14', 'login', 'security', 'Login error', 's:42:"Se ha intentado ingresar a la cuenta: user";'),
(17, 0, '127.0.0.1', '2016-09-02 00:51:31', 'login', 'security', 'Login error', 's:42:"Se ha intentado ingresar a la cuenta: user";'),
(18, 0, '127.0.0.1', '2016-09-02 00:51:36', 'login', 'security', 'Login error', 's:42:"Se ha intentado ingresar a la cuenta: user";'),
(19, 1, '127.0.0.1', '2016-09-02 00:52:02', 'login', 'security', 'Login correcto.', 's:45:"El usuario user se ha logueado correctamente.";'),
(20, 1, '127.0.0.1', '2016-09-02 00:52:51', 'login', 'security', 'Login correcto.', 's:45:"El usuario user se ha logueado correctamente.";'),
(21, 1, '127.0.0.1', '2016-09-02 00:53:08', 'login', 'security', 'Login correcto.', 's:45:"El usuario user se ha logueado correctamente.";'),
(22, 1, '127.0.0.1', '2016-09-02 00:53:41', 'login', 'security', 'Login correcto.', 's:45:"El usuario user se ha logueado correctamente.";'),
(23, 1, '127.0.0.1', '2016-09-02 00:53:56', 'login', 'security', 'Login correcto.', 's:45:"El usuario user se ha logueado correctamente.";'),
(24, 1, '127.0.0.1', '2016-09-02 00:54:59', 'login', 'security', 'Login correcto.', 's:45:"El usuario user se ha logueado correctamente.";'),
(25, 1, '127.0.0.1', '2016-09-02 00:55:27', 'login', 'security', 'Login correcto.', 's:45:"El usuario user se ha logueado correctamente.";'),
(26, 1, '127.0.0.1', '2016-09-02 00:56:04', 'login', 'security', 'Login correcto.', 's:45:"El usuario user se ha logueado correctamente.";');

-- --------------------------------------------------------

--
-- Table structure for table `actividades`
--

CREATE TABLE IF NOT EXISTS `actividades` (
`id` int(11) NOT NULL,
  `dependencia` int(11) NOT NULL,
  `prioridad` int(3) NOT NULL,
  `estado` int(3) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `duracion` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actividades`
--

INSERT INTO `actividades` (`id`, `dependencia`, `prioridad`, `estado`, `fecha_inicio`, `duracion`, `comentario`, `created`) VALUES
(2, 1, 1, 1, '2017-01-10', 100, 'test 11', '2016-09-02 00:32:54');

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1472757222),
('manejo-logs', '1', 1472757018),
('ver-backend', '1', 1472754679);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, 'admin del backend y frontend', NULL, NULL, 1472757213, 1472757213),
('manejo-logs', 2, 'Visualizar y manejar los logs.', NULL, NULL, 1472756957, 1472756957),
('ver-backend', 2, 'Visualizar enlace y pagina principal del backend.', NULL, NULL, 1472754633, 1472754633);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dependencias`
--

CREATE TABLE IF NOT EXISTS `dependencias` (
`id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `rid` int(11) DEFAULT '0',
  `org_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dependencias`
--

INSERT INTO `dependencias` (`id`, `title`, `rid`, `org_id`) VALUES
(1, 'Departamento ABC', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `estados`
--

CREATE TABLE IF NOT EXISTS `estados` (
`id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estados`
--

INSERT INTO `estados` (`id`, `name`, `created`) VALUES
(1, 'OK', '2016-09-01 23:41:21'),
(2, 'Terminado', '2016-09-01 23:41:26'),
(3, 'Suspendido', '2016-09-01 23:41:32');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1472717645),
('m140209_132017_init', 1472717647),
('m140403_174025_create_account_table', 1472717648),
('m140504_113157_update_tables', 1472717650),
('m140504_130429_create_token_table', 1472717651),
('m140506_102106_rbac_init', 1472719513),
('m140516_214808_actionlog', 1472720531),
('m140830_171933_fix_ip_field', 1472717651),
('m140830_172703_change_account_table_name', 1472717651),
('m141222_110026_update_ip_field', 1472717651),
('m141222_135246_alter_username_length', 1472717652),
('m150614_103145_update_social_account_table', 1472717653),
('m150623_212711_fix_username_notnull', 1472717654),
('m151218_234654_add_timezone_to_profile', 1472717654);

-- --------------------------------------------------------

--
-- Table structure for table `organigrama`
--

CREATE TABLE IF NOT EXISTS `organigrama` (
`id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organigrama`
--

INSERT INTO `organigrama` (`id`, `name`, `created`) VALUES
(1, '2016', '2016-09-01 23:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `prioridades`
--

CREATE TABLE IF NOT EXISTS `prioridades` (
`id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prioridades`
--

INSERT INTO `prioridades` (`id`, `name`, `created`) VALUES
(1, 'Alta', '2016-09-01 23:39:01'),
(2, 'Media', '2016-09-01 23:39:07'),
(3, 'Baja', '2016-09-01 23:39:13');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `public_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `timezone` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `name`, `public_email`, `gravatar_email`, `gravatar_id`, `location`, `website`, `bio`, `timezone`) VALUES
(1, 'John Doe', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reportes_departamentos`
--

CREATE TABLE IF NOT EXISTS `reportes_departamentos` (
`id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `impresora` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reportes_departamentos`
--

INSERT INTO `reportes_departamentos` (`id`, `nombre`, `impresora`) VALUES
(1, 'Departamento de Sistemas', 'Impresora 1'),
(2, 'Departamento de Contabilidad', 'Impresora ABC');

-- --------------------------------------------------------

--
-- Table structure for table `reportes_impresoras`
--

CREATE TABLE IF NOT EXISTS `reportes_impresoras` (
`id` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `razon` text NOT NULL,
  `id_impresora` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reportes_impresoras`
--

INSERT INTO `reportes_impresoras` (`id`, `id_departamento`, `razon`, `id_impresora`, `id_usuario`, `fecha`) VALUES
(1, 2, 'Sin tinta (color).', 0, 0, '2016-09-01 21:32:01');

-- --------------------------------------------------------

--
-- Table structure for table `social_account`
--

CREATE TABLE IF NOT EXISTS `social_account` (
`id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `client_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `code` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE IF NOT EXISTS `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`user_id`, `code`, `created_at`, `type`) VALUES
(2, 'NO2aCmBIjFQX624xmAc3VBu7Th3NJoa6', 1472777760, 0),
(3, 'qxYa315rqRgCOjYGk82GFHMEAV3T82AX', 1472691359, 0),
(5, 'a5839d0e73b9c525942c2f59e88c1aaf', 1472756159, 1),
(6, '6f5d0dad53ef73e6ba6f01a441c0e602', 1472777760, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`) VALUES
(1, 'user', 'user@example.com', '$2y$10$7qrfWMJZ7lpjPDv86jOxYOTtteaJa2r.zZh07DTZHRGJDYzuI7Jie', '39HU0m5lpjWtqstFVGFjj6lFb7UZDeRq', 1472777760, NULL, NULL, NULL, 1472777760, 1472777760, 0),
(2, 'joe', 'joe@example.com', '$2y$13$CIH1LSMPzU9xDCywt3QO8uovAu2axp8hwuXVa72oI.1G/USsGyMBS', 'mhh1A6KfqQLmHP-MiWN0WB0M90Q2u5OE', NULL, NULL, NULL, NULL, 1472777760, 1472777760, 0),
(3, 'john', 'john@example.com', '$2y$13$qY.ImaYBppt66qez6B31QO92jc5DYVRzo5NxM1ivItkW74WsSG6Ui', 'h6OS9csJbZEOW59ZILmJxU6bCiqVno9A', NULL, NULL, NULL, NULL, 1472691359, 1472691359, 0),
(4, 'steven', 'steven@example.com', '$2y$13$qY.ImaYBppt66qez6B31QO92jc5DYVRzo5NxM1ivItkW74WsSG6Ui', 'TnXTrtLdj-YJBlG2A6jFHJreKgbsLYCa', 1472777760, NULL, 1472777760, NULL, 1472777760, 1472777760, 0),
(5, 'andrew', 'andrew@example.com', '$2y$13$qY.ImaYBppt66qez6B31QO92jc5DYVRzo5NxM1ivItkW74WsSG6Ui', 'qxYa315rqRgCOjYGk82GFHMEAV3T82AX', 1472756159, NULL, NULL, NULL, 1472756159, 1472756159, 0),
(6, 'alex', 'alex@example.com', '$2y$13$qY.ImaYBppt66qez6B31QO92jc5DYVRzo5NxM1ivItkW74WsSG6Ui', 'zQh1A65We0AmHPOMiWN0WB0M90Q24ziU', 1472777760, NULL, NULL, NULL, 1472777760, 1472777760, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actionlog`
--
ALTER TABLE `actionlog`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `actividades`
--
ALTER TABLE `actividades`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
 ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
 ADD PRIMARY KEY (`name`), ADD KEY `rule_name` (`rule_name`), ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
 ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
 ADD PRIMARY KEY (`name`);

--
-- Indexes for table `dependencias`
--
ALTER TABLE `dependencias`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `organigrama`
--
ALTER TABLE `organigrama`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prioridades`
--
ALTER TABLE `prioridades`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `reportes_departamentos`
--
ALTER TABLE `reportes_departamentos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reportes_impresoras`
--
ALTER TABLE `reportes_impresoras`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_account`
--
ALTER TABLE `social_account`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `account_unique` (`provider`,`client_id`), ADD UNIQUE KEY `account_unique_code` (`code`), ADD KEY `fk_user_account` (`user_id`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
 ADD UNIQUE KEY `token_unique` (`user_id`,`code`,`type`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `user_unique_email` (`email`), ADD UNIQUE KEY `user_unique_username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actionlog`
--
ALTER TABLE `actionlog`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `actividades`
--
ALTER TABLE `actividades`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dependencias`
--
ALTER TABLE `dependencias`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `estados`
--
ALTER TABLE `estados`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `organigrama`
--
ALTER TABLE `organigrama`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `prioridades`
--
ALTER TABLE `prioridades`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `reportes_departamentos`
--
ALTER TABLE `reportes_departamentos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reportes_impresoras`
--
ALTER TABLE `reportes_impresoras`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `social_account`
--
ALTER TABLE `social_account`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
ADD CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_account`
--
ALTER TABLE `social_account`
ADD CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `token`
--
ALTER TABLE `token`
ADD CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
