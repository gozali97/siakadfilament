-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sistemsekolah
CREATE DATABASE IF NOT EXISTS `sistemsekolah` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sistemsekolah`;

-- Dumping structure for table sistemsekolah.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemsekolah.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table sistemsekolah.guru
CREATE TABLE IF NOT EXISTS `guru` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nip` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_guru` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemsekolah.guru: ~0 rows (approximately)
INSERT INTO `guru` (`id`, `nip`, `nama_guru`, `email`, `foto`, `status`, `created_at`, `updated_at`) VALUES
	(1, '1231234123', 'saya guru', 'asdf!@sdfs.com', 'YA9kTEWC74jrMUjOmytPXMtlmuBgWi-metaNjNmOWU3MTA3ODllZC5qcGc=-.jpg', 'aktif', '2023-09-09 00:06:37', '2023-09-09 00:06:37');

-- Dumping structure for table sistemsekolah.kasus
CREATE TABLE IF NOT EXISTS `kasus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `siswa_id` int DEFAULT NULL,
  `kategori_kasus_id` int DEFAULT NULL,
  `nama_kasus` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemsekolah.kasus: ~2 rows (approximately)
INSERT INTO `kasus` (`id`, `siswa_id`, `kategori_kasus_id`, `nama_kasus`, `created_at`, `updated_at`) VALUES
	(2, 1, 3, 'berkelahi', '2023-09-10 08:48:39', '2023-09-10 08:48:39');

-- Dumping structure for table sistemsekolah.kategori_kasus
CREATE TABLE IF NOT EXISTS `kategori_kasus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemsekolah.kategori_kasus: ~2 rows (approximately)
INSERT INTO `kategori_kasus` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
	(1, 'Ringan', '2023-09-10 07:58:55', '2023-09-10 07:58:55'),
	(2, 'Sedang', '2023-09-10 07:58:59', '2023-09-10 07:58:59'),
	(3, 'Berat', '2023-09-10 07:59:03', '2023-09-10 07:59:03');

-- Dumping structure for table sistemsekolah.kelas
CREATE TABLE IF NOT EXISTS `kelas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode_kelas` varchar(100) NOT NULL DEFAULT '0',
  `nama_kelas` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sistemsekolah.kelas: ~0 rows (approximately)
INSERT INTO `kelas` (`id`, `kode_kelas`, `nama_kelas`, `created_at`, `updated_at`) VALUES
	(1, 'KL112', 'kelas a', '2023-09-08 23:22:13', '2023-09-08 23:22:13'),
	(2, '12', 'VII A', '2023-09-10 08:46:29', '2023-09-10 08:46:29');

-- Dumping structure for table sistemsekolah.kepala_sekolah
CREATE TABLE IF NOT EXISTS `kepala_sekolah` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nip` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_kepala_sekolah` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- Dumping data for table sistemsekolah.kepala_sekolah: ~0 rows (approximately)

-- Dumping structure for table sistemsekolah.mapel
CREATE TABLE IF NOT EXISTS `mapel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kode` varchar(100) NOT NULL,
  `nama_mapel` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sistemsekolah.mapel: ~2 rows (approximately)
INSERT INTO `mapel` (`id`, `kode`, `nama_mapel`, `created_at`, `updated_at`) VALUES
	(1, 'MP-1561560093', 'Bahasa Indonesia', '2023-09-08 23:40:37', '2023-09-08 23:40:37'),
	(2, 'MP-1561560129', 'Matematika', '2023-09-08 23:41:00', '2023-09-08 23:41:00'),
	(3, 'MP-1561871991', 'Biologi', '2023-09-08 23:41:20', '2023-09-08 23:41:20');

-- Dumping structure for table sistemsekolah.mengajar
CREATE TABLE IF NOT EXISTS `mengajar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mapel_id` int DEFAULT NULL,
  `tahun_pelajaran_id` int DEFAULT NULL,
  `semester_id` int DEFAULT NULL,
  `guru_id` int DEFAULT NULL,
  `hari` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas_id` int DEFAULT NULL,
  `waktu_mulai` time DEFAULT NULL,
  `waktu_selesai` time DEFAULT NULL,
  `jam_ke` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemsekolah.mengajar: ~0 rows (approximately)
INSERT INTO `mengajar` (`id`, `mapel_id`, `tahun_pelajaran_id`, `semester_id`, `guru_id`, `hari`, `kelas_id`, `waktu_mulai`, `waktu_selesai`, `jam_ke`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 1, 1, 'senin', 1, '21:00:00', '14:00:00', '1-3', '2023-09-09 07:57:07', '2023-09-09 07:57:07');

-- Dumping structure for table sistemsekolah.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemsekolah.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_09_08_103231_create_permission_tables', 2),
	(6, '2023_09_08_155551_create_tag_tables', 3);

-- Dumping structure for table sistemsekolah.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemsekolah.model_has_permissions: ~0 rows (approximately)

-- Dumping structure for table sistemsekolah.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemsekolah.model_has_roles: ~4 rows (approximately)
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1),
	(3, 'App\\Models\\User', 3),
	(5, 'App\\Models\\User', 4),
	(6, 'App\\Models\\User', 5);

-- Dumping structure for table sistemsekolah.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemsekolah.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table sistemsekolah.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=207 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemsekolah.permissions: ~183 rows (approximately)
INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'view_role', 'web', '2023-09-08 03:32:36', '2023-09-08 03:32:36'),
	(2, 'view_any_role', 'web', '2023-09-08 03:32:36', '2023-09-08 03:32:36'),
	(3, 'create_role', 'web', '2023-09-08 03:32:36', '2023-09-08 03:32:36'),
	(4, 'update_role', 'web', '2023-09-08 03:32:36', '2023-09-08 03:32:36'),
	(5, 'delete_role', 'web', '2023-09-08 03:32:36', '2023-09-08 03:32:36'),
	(6, 'delete_any_role', 'web', '2023-09-08 03:32:36', '2023-09-08 03:32:36'),
	(7, 'view_kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(8, 'view_any_kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(9, 'create_kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(10, 'update_kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(11, 'restore_kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(12, 'restore_any_kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(13, 'replicate_kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(14, 'reorder_kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(15, 'delete_kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(16, 'delete_any_kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(17, 'force_delete_kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(18, 'force_delete_any_kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(19, 'view_kategori::kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(20, 'view_any_kategori::kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(21, 'create_kategori::kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(22, 'update_kategori::kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(23, 'restore_kategori::kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(24, 'restore_any_kategori::kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(25, 'replicate_kategori::kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(26, 'reorder_kategori::kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(27, 'delete_kategori::kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(28, 'delete_any_kategori::kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(29, 'force_delete_kategori::kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(30, 'force_delete_any_kategori::kasus', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34'),
	(31, 'view_guru', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(32, 'view_any_guru', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(33, 'create_guru', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(34, 'update_guru', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(35, 'restore_guru', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(36, 'restore_any_guru', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(37, 'replicate_guru', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(38, 'reorder_guru', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(39, 'delete_guru', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(40, 'delete_any_guru', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(41, 'force_delete_guru', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(42, 'force_delete_any_guru', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(43, 'view_kelas', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(44, 'view_any_kelas', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(45, 'create_kelas', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(46, 'update_kelas', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(47, 'restore_kelas', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(48, 'restore_any_kelas', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(49, 'replicate_kelas', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(50, 'reorder_kelas', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(51, 'delete_kelas', 'web', '2023-09-10 08:29:58', '2023-09-10 08:29:58'),
	(52, 'delete_any_kelas', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(53, 'force_delete_kelas', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(54, 'force_delete_any_kelas', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(55, 'view_kepala::sekolah', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(56, 'view_any_kepala::sekolah', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(57, 'create_kepala::sekolah', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(58, 'update_kepala::sekolah', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(59, 'restore_kepala::sekolah', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(60, 'restore_any_kepala::sekolah', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(61, 'replicate_kepala::sekolah', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(62, 'reorder_kepala::sekolah', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(63, 'delete_kepala::sekolah', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(64, 'delete_any_kepala::sekolah', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(65, 'force_delete_kepala::sekolah', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(66, 'force_delete_any_kepala::sekolah', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(67, 'view_mapel', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(68, 'view_any_mapel', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(69, 'create_mapel', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(70, 'update_mapel', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(71, 'restore_mapel', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(72, 'restore_any_mapel', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(73, 'replicate_mapel', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(74, 'reorder_mapel', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(75, 'delete_mapel', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(76, 'delete_any_mapel', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(77, 'force_delete_mapel', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(78, 'force_delete_any_mapel', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(79, 'view_mengajar', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(80, 'view_any_mengajar', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(81, 'create_mengajar', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(82, 'update_mengajar', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(83, 'restore_mengajar', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(84, 'restore_any_mengajar', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(85, 'replicate_mengajar', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(86, 'reorder_mengajar', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(87, 'delete_mengajar', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(88, 'delete_any_mengajar', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(89, 'force_delete_mengajar', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(90, 'force_delete_any_mengajar', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(91, 'view_permission', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(92, 'view_any_permission', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(93, 'create_permission', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(94, 'update_permission', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(95, 'restore_permission', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(96, 'restore_any_permission', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(97, 'replicate_permission', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(98, 'reorder_permission', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(99, 'delete_permission', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(100, 'delete_any_permission', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(101, 'force_delete_permission', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(102, 'force_delete_any_permission', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(103, 'view_semester', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(104, 'view_any_semester', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(105, 'create_semester', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(106, 'update_semester', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(107, 'restore_semester', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(108, 'restore_any_semester', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(109, 'replicate_semester', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(110, 'reorder_semester', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(111, 'delete_semester', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(112, 'delete_any_semester', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(113, 'force_delete_semester', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(114, 'force_delete_any_semester', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(115, 'view_siswa', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(116, 'view_any_siswa', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(117, 'create_siswa', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(118, 'update_siswa', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(119, 'restore_siswa', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(120, 'restore_any_siswa', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(121, 'replicate_siswa', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(122, 'reorder_siswa', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(123, 'delete_siswa', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(124, 'delete_any_siswa', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(125, 'force_delete_siswa', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(126, 'force_delete_any_siswa', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(127, 'view_tahun::pelajaran', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(128, 'view_any_tahun::pelajaran', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(129, 'create_tahun::pelajaran', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(130, 'update_tahun::pelajaran', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(131, 'restore_tahun::pelajaran', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(132, 'restore_any_tahun::pelajaran', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(133, 'replicate_tahun::pelajaran', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(134, 'reorder_tahun::pelajaran', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(135, 'delete_tahun::pelajaran', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(136, 'delete_any_tahun::pelajaran', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(137, 'force_delete_tahun::pelajaran', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(138, 'force_delete_any_tahun::pelajaran', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(139, 'view_user', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(140, 'view_any_user', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(141, 'create_user', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(142, 'update_user', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(143, 'restore_user', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(144, 'restore_any_user', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(145, 'replicate_user', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(146, 'reorder_user', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(147, 'delete_user', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(148, 'delete_any_user', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(149, 'force_delete_user', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(150, 'force_delete_any_user', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(151, 'view_walikelas', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(152, 'view_any_walikelas', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(153, 'create_walikelas', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(154, 'update_walikelas', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(155, 'restore_walikelas', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(156, 'restore_any_walikelas', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(157, 'replicate_walikelas', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(158, 'reorder_walikelas', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(159, 'delete_walikelas', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(160, 'delete_any_walikelas', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(161, 'force_delete_walikelas', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(162, 'force_delete_any_walikelas', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(163, 'page_JadwalMengajarGuru', 'web', '2023-09-10 08:29:59', '2023-09-10 08:29:59'),
	(164, 'view_daftar::kasus', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(165, 'view_any_daftar::kasus', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(166, 'create_daftar::kasus', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(167, 'update_daftar::kasus', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(168, 'restore_daftar::kasus', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(169, 'restore_any_daftar::kasus', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(170, 'replicate_daftar::kasus', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(171, 'reorder_daftar::kasus', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(172, 'delete_daftar::kasus', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(173, 'delete_any_daftar::kasus', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(174, 'force_delete_daftar::kasus', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(175, 'force_delete_any_daftar::kasus', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(176, 'view_presensi', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(177, 'view_any_presensi', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(178, 'create_presensi', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(179, 'update_presensi', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(180, 'restore_presensi', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(181, 'restore_any_presensi', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(182, 'replicate_presensi', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(183, 'reorder_presensi', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(184, 'delete_presensi', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(185, 'delete_any_presensi', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(186, 'force_delete_presensi', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(187, 'force_delete_any_presensi', 'web', '2023-09-10 09:25:26', '2023-09-10 09:25:26'),
	(188, 'view_jadwal::mengajar', 'web', '2023-09-11 04:37:45', '2023-09-11 04:37:45'),
	(189, 'view_any_jadwal::mengajar', 'web', '2023-09-11 04:37:45', '2023-09-11 04:37:45'),
	(190, 'update_jadwal::mengajar', 'web', '2023-09-11 04:37:45', '2023-09-11 04:37:45'),
	(191, 'restore_jadwal::mengajar', 'web', '2023-09-11 04:37:45', '2023-09-11 04:37:45'),
	(192, 'restore_any_jadwal::mengajar', 'web', '2023-09-11 04:37:45', '2023-09-11 04:37:45'),
	(193, 'replicate_jadwal::mengajar', 'web', '2023-09-11 04:37:45', '2023-09-11 04:37:45'),
	(194, 'reorder_jadwal::mengajar', 'web', '2023-09-11 04:37:45', '2023-09-11 04:37:45'),
	(195, 'view_rekap::kasus', 'web', '2023-09-12 03:23:59', '2023-09-12 03:23:59'),
	(196, 'view_any_rekap::kasus', 'web', '2023-09-12 03:23:59', '2023-09-12 03:23:59'),
	(197, 'create_rekap::kasus', 'web', '2023-09-12 03:23:59', '2023-09-12 03:23:59'),
	(198, 'update_rekap::kasus', 'web', '2023-09-12 03:23:59', '2023-09-12 03:23:59'),
	(199, 'restore_rekap::kasus', 'web', '2023-09-12 03:23:59', '2023-09-12 03:23:59'),
	(200, 'restore_any_rekap::kasus', 'web', '2023-09-12 03:23:59', '2023-09-12 03:23:59'),
	(201, 'replicate_rekap::kasus', 'web', '2023-09-12 03:23:59', '2023-09-12 03:23:59'),
	(202, 'reorder_rekap::kasus', 'web', '2023-09-12 03:23:59', '2023-09-12 03:23:59'),
	(203, 'delete_rekap::kasus', 'web', '2023-09-12 03:23:59', '2023-09-12 03:23:59'),
	(204, 'delete_any_rekap::kasus', 'web', '2023-09-12 03:23:59', '2023-09-12 03:23:59'),
	(205, 'force_delete_rekap::kasus', 'web', '2023-09-12 03:23:59', '2023-09-12 03:23:59'),
	(206, 'force_delete_any_rekap::kasus', 'web', '2023-09-12 03:23:59', '2023-09-12 03:23:59');

-- Dumping structure for table sistemsekolah.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemsekolah.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table sistemsekolah.presensi
CREATE TABLE IF NOT EXISTS `presensi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `mengajar_id` int DEFAULT NULL,
  `guru_id` int DEFAULT NULL,
  `siswa_id` int DEFAULT NULL,
  `pertemuan_ke` int DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `tanggal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemsekolah.presensi: ~1 rows (approximately)
INSERT INTO `presensi` (`id`, `mengajar_id`, `guru_id`, `siswa_id`, `pertemuan_ke`, `keterangan`, `tanggal`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, 1, 1, 'izin', '2023-09-11', '2023-09-11 10:02:11', '2023-09-11 10:02:11');

-- Dumping structure for table sistemsekolah.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemsekolah.roles: ~4 rows (approximately)
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'super_admin', 'web', '2023-09-08 03:32:36', '2023-09-08 03:32:36'),
	(3, 'guru', 'web', '2023-09-09 10:12:14', '2023-09-09 10:12:14'),
	(4, 'kepsek', 'web', '2023-09-10 02:19:28', '2023-09-10 02:19:28'),
	(5, 'siswa', 'web', '2023-09-10 06:57:43', '2023-09-10 06:57:43'),
	(6, 'Kesiswaan', 'web', '2023-09-10 08:29:34', '2023-09-10 08:29:34');

-- Dumping structure for table sistemsekolah.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemsekolah.role_has_permissions: ~229 rows (approximately)
INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 1),
	(5, 1),
	(6, 1),
	(7, 1),
	(8, 1),
	(9, 1),
	(10, 1),
	(11, 1),
	(12, 1),
	(13, 1),
	(14, 1),
	(15, 1),
	(16, 1),
	(17, 1),
	(18, 1),
	(19, 1),
	(20, 1),
	(21, 1),
	(22, 1),
	(23, 1),
	(24, 1),
	(25, 1),
	(26, 1),
	(27, 1),
	(28, 1),
	(29, 1),
	(30, 1),
	(31, 1),
	(32, 1),
	(33, 1),
	(34, 1),
	(35, 1),
	(36, 1),
	(37, 1),
	(38, 1),
	(39, 1),
	(40, 1),
	(41, 1),
	(42, 1),
	(43, 1),
	(44, 1),
	(45, 1),
	(46, 1),
	(47, 1),
	(48, 1),
	(49, 1),
	(50, 1),
	(51, 1),
	(52, 1),
	(53, 1),
	(54, 1),
	(55, 1),
	(56, 1),
	(57, 1),
	(58, 1),
	(59, 1),
	(60, 1),
	(61, 1),
	(62, 1),
	(63, 1),
	(64, 1),
	(65, 1),
	(66, 1),
	(67, 1),
	(68, 1),
	(69, 1),
	(70, 1),
	(71, 1),
	(72, 1),
	(73, 1),
	(74, 1),
	(75, 1),
	(76, 1),
	(77, 1),
	(78, 1),
	(79, 1),
	(80, 1),
	(81, 1),
	(82, 1),
	(83, 1),
	(84, 1),
	(85, 1),
	(86, 1),
	(87, 1),
	(88, 1),
	(89, 1),
	(90, 1),
	(91, 1),
	(92, 1),
	(93, 1),
	(94, 1),
	(95, 1),
	(96, 1),
	(97, 1),
	(98, 1),
	(99, 1),
	(100, 1),
	(101, 1),
	(102, 1),
	(103, 1),
	(104, 1),
	(105, 1),
	(106, 1),
	(107, 1),
	(108, 1),
	(109, 1),
	(110, 1),
	(111, 1),
	(112, 1),
	(113, 1),
	(114, 1),
	(115, 1),
	(116, 1),
	(117, 1),
	(118, 1),
	(119, 1),
	(120, 1),
	(121, 1),
	(122, 1),
	(123, 1),
	(124, 1),
	(125, 1),
	(126, 1),
	(127, 1),
	(128, 1),
	(129, 1),
	(130, 1),
	(131, 1),
	(132, 1),
	(133, 1),
	(134, 1),
	(135, 1),
	(136, 1),
	(137, 1),
	(138, 1),
	(139, 1),
	(140, 1),
	(141, 1),
	(142, 1),
	(143, 1),
	(144, 1),
	(145, 1),
	(146, 1),
	(147, 1),
	(148, 1),
	(149, 1),
	(150, 1),
	(151, 1),
	(152, 1),
	(153, 1),
	(154, 1),
	(155, 1),
	(156, 1),
	(157, 1),
	(158, 1),
	(159, 1),
	(160, 1),
	(161, 1),
	(162, 1),
	(188, 3),
	(189, 3),
	(190, 3),
	(191, 3),
	(192, 3),
	(193, 3),
	(194, 3),
	(164, 5),
	(165, 5),
	(166, 5),
	(167, 5),
	(168, 5),
	(169, 5),
	(170, 5),
	(171, 5),
	(172, 5),
	(173, 5),
	(174, 5),
	(175, 5),
	(176, 5),
	(177, 5),
	(178, 5),
	(179, 5),
	(180, 5),
	(181, 5),
	(182, 5),
	(183, 5),
	(184, 5),
	(185, 5),
	(186, 5),
	(187, 5),
	(7, 6),
	(8, 6),
	(9, 6),
	(10, 6),
	(11, 6),
	(12, 6),
	(13, 6),
	(14, 6),
	(15, 6),
	(16, 6),
	(17, 6),
	(18, 6),
	(19, 6),
	(20, 6),
	(21, 6),
	(22, 6),
	(23, 6),
	(24, 6),
	(25, 6),
	(26, 6),
	(27, 6),
	(28, 6),
	(29, 6),
	(30, 6),
	(195, 6),
	(196, 6),
	(197, 6),
	(198, 6),
	(199, 6),
	(200, 6),
	(201, 6),
	(202, 6),
	(203, 6),
	(204, 6),
	(205, 6),
	(206, 6);

-- Dumping structure for table sistemsekolah.semester
CREATE TABLE IF NOT EXISTS `semester` (
  `id` int NOT NULL AUTO_INCREMENT,
  `semester` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sistemsekolah.semester: ~2 rows (approximately)
INSERT INTO `semester` (`id`, `semester`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'ganjil', 'tidak aktif', '2023-09-08 23:33:49', '2023-09-08 23:33:49'),
	(2, 'genap', 'aktif', '2023-09-08 23:34:05', '2023-09-08 23:34:05');

-- Dumping structure for table sistemsekolah.siswa
CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_siswa` text COLLATE utf8mb4_unicode_ci,
  `nisn` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` text COLLATE utf8mb4_unicode_ci,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `kelas_id` int DEFAULT NULL,
  `tahun_masuk` year DEFAULT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemsekolah.siswa: ~0 rows (approximately)
INSERT INTO `siswa` (`id`, `nama_siswa`, `nisn`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `kelas_id`, `tahun_masuk`, `foto`, `created_at`, `updated_at`) VALUES
	(1, 'saya siswa', '123', 'jakarta', '2023-09-12', 'laki-laki', 'jakarta', 1, '2023', 'e7XEOO2RMMhLi1fzcxlBCEkQ9BOxZP-metaNjNmOWU3MTA3ODllZC5qcGc=-.jpg', '2023-09-10 06:50:28', '2023-09-10 06:50:28');

-- Dumping structure for table sistemsekolah.taggables
CREATE TABLE IF NOT EXISTS `taggables` (
  `tag_id` bigint unsigned NOT NULL,
  `taggable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taggable_id` bigint unsigned NOT NULL,
  UNIQUE KEY `taggables_tag_id_taggable_id_taggable_type_unique` (`tag_id`,`taggable_id`,`taggable_type`),
  KEY `taggables_taggable_type_taggable_id_index` (`taggable_type`,`taggable_id`),
  CONSTRAINT `taggables_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemsekolah.taggables: ~0 rows (approximately)

-- Dumping structure for table sistemsekolah.tags
CREATE TABLE IF NOT EXISTS `tags` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` json NOT NULL,
  `slug` json NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_column` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemsekolah.tags: ~0 rows (approximately)

-- Dumping structure for table sistemsekolah.tahun_pelajaran
CREATE TABLE IF NOT EXISTS `tahun_pelajaran` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tahun_pelajaran` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sistemsekolah.tahun_pelajaran: ~2 rows (approximately)
INSERT INTO `tahun_pelajaran` (`id`, `tahun_pelajaran`, `status`, `created_at`, `updated_at`) VALUES
	(1, '2019/2020', 'tidak aktif', '2023-09-08 23:37:35', '2023-09-08 23:37:35'),
	(2, '2020/2021', 'aktif', '2023-09-08 23:37:50', '2023-09-08 23:37:50');

-- Dumping structure for table sistemsekolah.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `username` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sistemsekolah.users: ~3 rows (approximately)
INSERT INTO `users` (`id`, `username`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, NULL, 'admin', 'admin@gmail.com', NULL, '$2y$10$dK2vJiwD4gp5S4JiiiAMeuGnAc0GPbQ64KJAZ9NgDK7iSWoISJf2C', NULL, '2023-09-07 21:26:29', '2023-09-07 21:26:29'),
	(2, NULL, 'user1', 'user1@gmail.com', NULL, '$2y$10$znf3Bw7DqoSSGRaFfP2/b.yJCt5ZJ6.933iB267dPp.BSdxDLfw6C', NULL, '2023-09-08 04:24:27', '2023-09-08 04:24:27'),
	(3, 1231234123, 'saya guru', '1231234123@gmail.com', NULL, '$2y$10$XW8y0/d/jj/rMoNKB3rGtOnlOEP6EviZR3qD7X.bHThvkheOApn2K', NULL, '2023-09-09 10:23:55', '2023-09-09 10:23:55'),
	(4, 123, 'saya siswa', '123@gmail.com', NULL, '$2y$10$xOBTubhU4RzaLLwdxoM0IuYpq8ul0Iz38ULvRWw40iR5W27BQImQG', NULL, '2023-09-10 06:57:10', '2023-09-12 02:25:26'),
	(5, NULL, 'kesiswaan', 'kesiswaan@gmail.com', NULL, '$2y$10$zagWrjSJaGyujL.dqJqCsu1DNreQpgZz6VjGPZt6XipIQZ1cwCKeG', NULL, '2023-09-10 08:32:30', '2023-09-12 02:27:42');

-- Dumping structure for table sistemsekolah.wali_kelas
CREATE TABLE IF NOT EXISTS `wali_kelas` (
  `id` int NOT NULL AUTO_INCREMENT,
  `guru_id` int DEFAULT NULL,
  `kelas_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sistemsekolah.wali_kelas: ~1 rows (approximately)
INSERT INTO `wali_kelas` (`id`, `guru_id`, `kelas_id`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2023-09-08 23:45:22', '2023-09-09 00:07:42');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
