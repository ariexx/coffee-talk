/*
 Navicat Premium Data Transfer

 Source Server         : Coffee-Talk
 Source Server Type    : MySQL
 Source Server Version : 80031 (8.0.31-0ubuntu0.22.04.1)
 Source Host           : localhost:3306
 Source Schema         : coffee_talk

 Target Server Type    : MySQL
 Target Server Version : 80031 (8.0.31-0ubuntu0.22.04.1)
 File Encoding         : 65001

 Date: 08/12/2022 22:19:16
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for activity_log
-- ----------------------------
DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE `activity_log` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint unsigned DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint unsigned DEFAULT NULL,
  `properties` json DEFAULT NULL,
  `batch_uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject` (`subject_type`,`subject_id`),
  KEY `causer` (`causer_type`,`causer_id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of activity_log
-- ----------------------------
BEGIN;
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (1, 'Resource', 'Ad Created by arief', 'App\\Models\\Ad', 'Created', 1, 'App\\Models\\User', 55847, '{\"id\": 1, \"name\": \"Wanjay\", \"image\": \"ads/3EEJqShdsjct8Mvrryxo2lDtfh89GQ-metad3A0NzUxNDgwLXBpeGVsLWFydC1hZXN0aGV0aWMtd2FsbHBhcGVycy5wbmc=-.png\", \"created_at\": \"2022-11-30 21:28:35\", \"updated_at\": \"2022-11-30 21:28:35\"}', NULL, '2022-11-30 21:28:35', '2022-11-30 21:28:35');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (2, 'Resource', 'Order Updated by arief', 'App\\Models\\Order', 'Updated', 99098, 'App\\Models\\User', 55847, '{\"status\": \"delivered\", \"updated_at\": \"2022-11-30 21:28:57\"}', NULL, '2022-11-30 21:28:57', '2022-11-30 21:28:57');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (3, 'Access', 'Stephanie Ondricka logged in', NULL, 'Login', NULL, 'App\\Models\\User', 68043, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.62\"}', NULL, '2022-11-30 21:29:25', '2022-11-30 21:29:25');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (4, 'Access', 'arief logged in', NULL, 'Login', NULL, 'App\\Models\\User', 55847, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.62\"}', NULL, '2022-11-30 21:30:52', '2022-11-30 21:30:52');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (5, 'Resource', 'Order Updated by arief', 'App\\Models\\Order', 'Updated', 990609, 'App\\Models\\User', 55847, '{\"updated_at\": \"2022-11-30 21:31:51\", \"is_confirmation\": 1}', NULL, '2022-11-30 21:31:51', '2022-11-30 21:31:51');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (6, 'Resource', 'Role Created', 'Spatie\\Permission\\Models\\Role', 'Created', 1, NULL, NULL, '{\"id\": 1, \"name\": \"super_admin\", \"created_at\": \"2022-11-30 21:37:34\", \"guard_name\": \"web\", \"updated_at\": \"2022-11-30 21:37:34\"}', NULL, '2022-11-30 21:37:34', '2022-11-30 21:37:34');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (7, 'Resource', 'Role Created', 'Spatie\\Permission\\Models\\Role', 'Created', 2, NULL, NULL, '{\"id\": 2, \"name\": \"filament_user\", \"created_at\": \"2022-11-30 21:37:35\", \"guard_name\": \"web\", \"updated_at\": \"2022-11-30 21:37:35\"}', NULL, '2022-11-30 21:37:35', '2022-11-30 21:37:35');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (8, 'Resource', 'Role Created', 'Spatie\\Permission\\Models\\Role', 'Created', 1, NULL, NULL, '{\"id\": 1, \"name\": \"super_admin\", \"created_at\": \"2022-11-30 21:39:49\", \"guard_name\": \"web\", \"updated_at\": \"2022-11-30 21:39:49\"}', NULL, '2022-11-30 21:39:49', '2022-11-30 21:39:49');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (9, 'Resource', 'Role Created', 'Spatie\\Permission\\Models\\Role', 'Created', 2, NULL, NULL, '{\"id\": 2, \"name\": \"filament_user\", \"created_at\": \"2022-11-30 21:39:50\", \"guard_name\": \"web\", \"updated_at\": \"2022-11-30 21:39:50\"}', NULL, '2022-11-30 21:39:50', '2022-11-30 21:39:50');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (10, 'Resource', 'Role Created by arief', 'Spatie\\Permission\\Models\\Role', 'Created', 3, 'App\\Models\\User', 55847, '{\"id\": 3, \"name\": \"cashier\", \"created_at\": \"2022-11-30 21:41:09\", \"guard_name\": \"web\", \"updated_at\": \"2022-11-30 21:41:09\"}', NULL, '2022-11-30 21:41:09', '2022-11-30 21:41:09');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (11, 'Access', 'Stephanie Ondricka logged in', NULL, 'Login', NULL, 'App\\Models\\User', 68043, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.62\"}', NULL, '2022-11-30 21:46:16', '2022-11-30 21:46:16');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (12, 'Access', 'arief logged in', NULL, 'Login', NULL, 'App\\Models\\User', 55847, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.62\"}', NULL, '2022-11-30 21:46:23', '2022-11-30 21:46:23');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (13, 'Resource', 'User Created by arief', 'App\\Models\\User', 'Created', 0, 'App\\Models\\User', 55847, '{\"id\": 0, \"name\": \"Anjas mara\", \"email\": \"b@b.com\", \"password\": \"$2y$10$HKjF/UWN1yZ4iz0vH8GpB.Ug7EME92xG4g92rqk8UymstLJFTAQSu\", \"created_at\": \"2022-11-30 21:46:56\", \"updated_at\": \"2022-11-30 21:46:56\"}', NULL, '2022-11-30 21:46:57', '2022-11-30 21:46:57');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (14, 'Access', 'Anjas mara logged in', NULL, 'Login', NULL, 'App\\Models\\User', 427791, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.62\"}', NULL, '2022-11-30 21:47:33', '2022-11-30 21:47:33');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (15, 'Access', 'arief logged in', NULL, 'Login', NULL, 'App\\Models\\User', 55847, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.62\"}', NULL, '2022-11-30 21:47:40', '2022-11-30 21:47:40');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (16, 'Resource', 'User Created by arief', 'App\\Models\\User', 'Created', 0, 'App\\Models\\User', 55847, '{\"id\": 0, \"name\": \"ccc\", \"email\": \"c@c.com\", \"password\": \"$2y$10$MM0cEEcDerI4RcxM4rS3uukcNqzHpW4zE0F/bCMTKvLRVCp5luwPe\", \"created_at\": \"2022-11-30 21:50:27\", \"updated_at\": \"2022-11-30 21:50:27\"}', NULL, '2022-11-30 21:50:27', '2022-11-30 21:50:27');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (17, 'Access', 'ccc logged in', NULL, 'Login', NULL, 'App\\Models\\User', 56373, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.62\"}', NULL, '2022-11-30 21:50:59', '2022-11-30 21:50:59');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (18, 'Access', 'arief logged in', NULL, 'Login', NULL, 'App\\Models\\User', 55847, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.62\"}', NULL, '2022-11-30 22:02:50', '2022-11-30 22:02:50');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (19, 'Access', 'arief logged in', NULL, 'Login', NULL, 'App\\Models\\User', 55847, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.62\"}', NULL, '2022-11-30 22:02:57', '2022-11-30 22:02:57');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (20, 'Access', 'ccc logged in', NULL, 'Login', NULL, 'App\\Models\\User', 56373, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.62\"}', NULL, '2022-11-30 22:24:14', '2022-11-30 22:24:14');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (21, 'Access', 'arief logged in', NULL, 'Login', NULL, 'App\\Models\\User', 55847, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.62\"}', NULL, '2022-11-30 22:25:07', '2022-11-30 22:25:07');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (22, 'Access', 'ccc logged in', NULL, 'Login', NULL, 'App\\Models\\User', 56373, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.62\"}', NULL, '2022-11-30 22:27:50', '2022-11-30 22:27:50');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (23, 'Access', 'arief logged in', NULL, 'Login', NULL, 'App\\Models\\User', 55847, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.62\"}', NULL, '2022-11-30 22:32:30', '2022-11-30 22:32:30');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (24, 'Access', 'ccc logged in', NULL, 'Login', NULL, 'App\\Models\\User', 56373, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.62\"}', NULL, '2022-11-30 23:07:07', '2022-11-30 23:07:07');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (25, 'Resource', 'Order Updated by ccc', 'App\\Models\\Order', 'Updated', 99098, 'App\\Models\\User', 56373, '{\"updated_at\": \"2022-11-30 23:14:57\", \"is_confirmation\": 1}', NULL, '2022-11-30 23:14:58', '2022-11-30 23:14:58');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (26, 'Access', 'arief logged in', NULL, 'Login', NULL, 'App\\Models\\User', 55847, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.62\"}', NULL, '2022-12-05 18:42:40', '2022-12-05 18:42:40');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (27, 'Resource', 'Ad Deleted by arief', 'App\\Models\\Ad', 'Deleted', 1, 'App\\Models\\User', 55847, '[]', NULL, '2022-12-05 18:43:04', '2022-12-05 18:43:04');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (28, 'Access', 'arief logged in', NULL, 'Login', NULL, 'App\\Models\\User', 55847, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.62\"}', NULL, '2022-12-05 21:02:07', '2022-12-05 21:02:07');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (29, 'Resource', 'Category Created by arief', 'App\\Models\\Category', 'Created', 0, 'App\\Models\\User', 55847, '{\"id\": 0, \"name\": \"Snack\", \"created_at\": \"2022-12-05 21:06:00\", \"updated_at\": \"2022-12-05 21:06:00\"}', NULL, '2022-12-05 21:06:00', '2022-12-05 21:06:00');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (30, 'Resource', 'Product Created by arief', 'App\\Models\\Product', 'Created', 0, 'App\\Models\\User', 55847, '{\"id\": 0, \"name\": \"Kentang Goreng\", \"image\": null, \"price\": \"1000\", \"status\": \"active\", \"discount\": \"20\", \"created_at\": \"2022-12-05 21:06:44\", \"updated_at\": \"2022-12-05 21:06:44\", \"category_id\": \"620065\", \"description\": null, \"is_discount\": true}', NULL, '2022-12-05 21:06:44', '2022-12-05 21:06:44');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (31, 'Resource', 'Ad Created by arief', 'App\\Models\\Ad', 'Created', 2, 'App\\Models\\User', 55847, '{\"id\": 2, \"name\": \"Banner\", \"image\": \"ads/Wmxc5PogKrBtGECb6LFCiPyfS44iek-metaU2NyZWVuc2hvdCBmcm9tIDIwMjItMTItMDUgMTgtNDgtMjkucG5n-.png\", \"created_at\": \"2022-12-05 21:08:29\", \"updated_at\": \"2022-12-05 21:08:29\"}', NULL, '2022-12-05 21:08:29', '2022-12-05 21:08:29');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (32, 'Resource', 'Ad Created by arief', 'App\\Models\\Ad', 'Created', 3, 'App\\Models\\User', 55847, '{\"id\": 3, \"name\": \"Banner 2\", \"image\": \"ads/Hk5U4ld6qZbVu4uKZ5OhSjUQY5tVt1-metaU2NyZWVuc2hvdCBmcm9tIDIwMjItMTItMDUgMTktMDMtNDYucG5n-.png\", \"created_at\": \"2022-12-05 21:09:25\", \"updated_at\": \"2022-12-05 21:09:25\"}', NULL, '2022-12-05 21:09:25', '2022-12-05 21:09:25');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (33, 'Resource', 'Ad Deleted by arief', 'App\\Models\\Ad', 'Deleted', 2, 'App\\Models\\User', 55847, '[]', NULL, '2022-12-05 22:44:10', '2022-12-05 22:44:10');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (34, 'Resource', 'Ad Updated by arief', 'App\\Models\\Ad', 'Updated', 3, 'App\\Models\\User', 55847, '{\"image\": \"ads/uz4OrSsvsjFxOJwRZ8jaEdcQWgJI26-metaRmVhdHVyZS1JbWFnZS05NDB4MzM5LTM5LmpwZw==-.jpg\", \"updated_at\": \"2022-12-05 22:44:21\"}', NULL, '2022-12-05 22:44:21', '2022-12-05 22:44:21');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (35, 'Resource', 'Ad Updated by arief', 'App\\Models\\Ad', 'Updated', 3, 'App\\Models\\User', 55847, '{\"image\": \"ads/JndQ4VZwe6slwVTsjqtyl9CLodGNgu-metaU2NyZWVuc2hvdCBmcm9tIDIwMjItMTItMDYgMDAtNDAtMzQucG5n-.png\", \"updated_at\": \"2022-12-06 00:41:04\"}', NULL, '2022-12-06 00:41:04', '2022-12-06 00:41:04');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (36, 'Resource', 'Ad Updated by arief', 'App\\Models\\Ad', 'Updated', 3, 'App\\Models\\User', 55847, '{\"image\": \"ads/Ym92YDEPsVl836AfwrbPF16SspwixI-metaUi5wbmc=-.png\", \"updated_at\": \"2022-12-06 00:42:59\"}', NULL, '2022-12-06 00:42:59', '2022-12-06 00:42:59');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (37, 'Resource', 'Ad Updated by arief', 'App\\Models\\Ad', 'Updated', 3, 'App\\Models\\User', 55847, '{\"active\": true, \"updated_at\": \"2022-12-06 01:27:38\"}', NULL, '2022-12-06 01:27:38', '2022-12-06 01:27:38');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (38, 'Resource', 'Ad Updated by arief', 'App\\Models\\Ad', 'Updated', 3, 'App\\Models\\User', 55847, '{\"active\": false, \"updated_at\": \"2022-12-06 01:27:43\"}', NULL, '2022-12-06 01:27:43', '2022-12-06 01:27:43');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (39, 'Resource', 'Ad Updated by arief', 'App\\Models\\Ad', 'Updated', 3, 'App\\Models\\User', 55847, '{\"link\": \"http://127.0.0.1:8000/order\", \"active\": true, \"updated_at\": \"2022-12-06 01:30:51\"}', NULL, '2022-12-06 01:30:51', '2022-12-06 01:30:51');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (40, 'Resource', 'Ad Updated by arief', 'App\\Models\\Ad', 'Updated', 3, 'App\\Models\\User', 55847, '{\"active\": false, \"updated_at\": \"2022-12-06 01:30:59\"}', NULL, '2022-12-06 01:30:59', '2022-12-06 01:30:59');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (41, 'Resource', 'Ad Updated by arief', 'App\\Models\\Ad', 'Updated', 3, 'App\\Models\\User', 55847, '{\"active\": true, \"updated_at\": \"2022-12-06 01:31:07\"}', NULL, '2022-12-06 01:31:07', '2022-12-06 01:31:07');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (42, 'Resource', 'Ad Created by arief', 'App\\Models\\Ad', 'Created', 4, 'App\\Models\\User', 55847, '{\"id\": 4, \"link\": null, \"name\": \"Promo Kocak\", \"image\": \"ads/r9qgPR7kHz3w0FSyOEzJ5rOpguvqGl-metaQmFubmVyLTcyOC14LTkwLXB4LTAxLmpwZw==-.jpg\", \"active\": true, \"created_at\": \"2022-12-06 01:33:02\", \"updated_at\": \"2022-12-06 01:33:02\"}', NULL, '2022-12-06 01:33:02', '2022-12-06 01:33:02');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (43, 'Resource', 'Ad Updated by arief', 'App\\Models\\Ad', 'Updated', 4, 'App\\Models\\User', 55847, '{\"link\": \"https://harapan.ac.id/\", \"active\": true, \"updated_at\": \"2022-12-06 01:38:03\"}', NULL, '2022-12-06 01:38:03', '2022-12-06 01:38:03');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (44, 'Resource', 'Ad Updated by arief', 'App\\Models\\Ad', 'Updated', 4, 'App\\Models\\User', 55847, '{\"link\": null, \"active\": true, \"updated_at\": \"2022-12-06 02:13:20\", \"description\": \"<ul><li>Promo 1</li><li>Promo 2</li><li>Promo 3</li></ul><p><strong>Test bold</strong></p><p><br></p>\"}', NULL, '2022-12-06 02:13:20', '2022-12-06 02:13:20');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (45, 'Resource', 'Ad Updated by arief', 'App\\Models\\Ad', 'Updated', 4, 'App\\Models\\User', 55847, '{\"type\": \"promo\", \"active\": true, \"updated_at\": \"2022-12-06 02:20:56\"}', NULL, '2022-12-06 02:20:56', '2022-12-06 02:20:56');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (46, 'Resource', 'Ad Created by arief', 'App\\Models\\Ad', 'Created', 5, 'App\\Models\\User', 55847, '{\"id\": 5, \"link\": null, \"name\": \"Promo Cashback\", \"type\": \"promo\", \"image\": \"ads/70Gee4SOZfdmjGCrIlCZ6mQnC3swZS-metaNzI4LXgtOTBweF8zMDBkcGkuanBn-.jpg\", \"active\": true, \"created_at\": \"2022-12-06 02:34:01\", \"updated_at\": \"2022-12-06 02:34:01\", \"description\": \"<p>Promo cashback</p>\"}', NULL, '2022-12-06 02:34:01', '2022-12-06 02:34:01');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (47, 'Access', 'arief logged in', NULL, 'Login', NULL, 'App\\Models\\User', 55847, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.62\"}', NULL, '2022-12-06 18:41:48', '2022-12-06 18:41:48');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (48, 'Access', 'arief logged in', NULL, 'Login', NULL, 'App\\Models\\User', 55847, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.62\"}', NULL, '2022-12-06 21:20:51', '2022-12-06 21:20:51');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (49, 'Access', 'arief logged in', NULL, 'Login', NULL, 'App\\Models\\User', 55847, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 Edg/107.0.1418.62\"}', NULL, '2022-12-08 20:42:22', '2022-12-08 20:42:22');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (50, 'Resource', 'Ad Created by arief', 'App\\Models\\Ad', 'Created', 6, 'App\\Models\\User', 55847, '{\"id\": 6, \"link\": null, \"name\": \"Iklan bang ger\", \"type\": \"promo\", \"image\": \"ads/M7jM1Vf6G1KdCnC99OTcxoIgGQ7tyd-metaU2NyZWVuc2hvdCBmcm9tIDIwMjItMTItMDYgMjItMDQtMDgucG5n-.png\", \"active\": true, \"created_at\": \"2022-12-08 20:58:53\", \"product_id\": \"965123\", \"updated_at\": \"2022-12-08 20:58:53\", \"description\": \"<p>Ini adalah iklan kocak</p>\"}', NULL, '2022-12-08 20:58:53', '2022-12-08 20:58:53');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (51, 'Resource', 'Product Updated by arief', 'App\\Models\\Product', 'Updated', 965123, 'App\\Models\\User', 55847, '{\"image\": \"products/NkfCx8gd6OYhrJP0wkjpEm0jzi9FDv-metaUi5wbmc=-.png\", \"updated_at\": \"2022-12-08 21:02:11\", \"is_discount\": true}', NULL, '2022-12-08 21:02:11', '2022-12-08 21:02:11');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (52, 'Resource', 'Order Created by arief', 'App\\Models\\Order', 'Created', 0, 'App\\Models\\User', 55847, '{\"id\": 0, \"name\": \"password\", \"email\": \"asdsad@a.com\", \"status\": \"pending\", \"created_at\": \"2022-12-08 21:15:52\", \"updated_at\": \"2022-12-08 21:15:52\", \"total_price\": 800, \"order_number\": 887222, \"table_number\": \"1\"}', NULL, '2022-12-08 21:15:52', '2022-12-08 21:15:52');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES (53, 'Resource', 'Ad Updated by arief', 'App\\Models\\Ad', 'Updated', 6, 'App\\Models\\User', 55847, '{\"image\": \"ads/763dWvZNPuqD153GoSstnyX6Ww9kfA-metaMTI5MC5wbmc=-.png\", \"active\": true, \"updated_at\": \"2022-12-08 21:28:11\"}', NULL, '2022-12-08 21:28:11', '2022-12-08 21:28:11');
COMMIT;

-- ----------------------------
-- Table structure for ads
-- ----------------------------
DROP TABLE IF EXISTS `ads`;
CREATE TABLE `ads` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `type` enum('banner','promo') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ads_product_id_foreign` (`product_id`),
  CONSTRAINT `ads_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of ads
-- ----------------------------
BEGIN;
INSERT INTO `ads` (`id`, `product_id`, `name`, `description`, `image`, `link`, `active`, `type`, `created_at`, `updated_at`) VALUES (3, NULL, 'Banner 2', NULL, 'ads/Ym92YDEPsVl836AfwrbPF16SspwixI-metaUi5wbmc=-.png', 'https://harapan.ac.id', 1, 'banner', '2022-12-05 21:09:25', '2022-12-06 01:31:07');
INSERT INTO `ads` (`id`, `product_id`, `name`, `description`, `image`, `link`, `active`, `type`, `created_at`, `updated_at`) VALUES (4, NULL, 'Promo Kocak', '<ul><li>Promo 1</li><li>Promo 2</li><li>Promo 3</li></ul><p><strong>Test bold</strong></p><p><br></p>', 'ads/r9qgPR7kHz3w0FSyOEzJ5rOpguvqGl-metaQmFubmVyLTcyOC14LTkwLXB4LTAxLmpwZw==-.jpg', NULL, 1, 'banner', '2022-12-06 01:33:02', '2022-12-06 02:20:56');
INSERT INTO `ads` (`id`, `product_id`, `name`, `description`, `image`, `link`, `active`, `type`, `created_at`, `updated_at`) VALUES (5, 57187, 'Promo Cashback', '<p>Promo cashback</p>', 'ads/70Gee4SOZfdmjGCrIlCZ6mQnC3swZS-metaNzI4LXgtOTBweF8zMDBkcGkuanBn-.jpg', NULL, 1, 'promo', '2022-12-06 02:34:01', '2022-12-06 02:34:01');
INSERT INTO `ads` (`id`, `product_id`, `name`, `description`, `image`, `link`, `active`, `type`, `created_at`, `updated_at`) VALUES (6, 965123, 'Iklan bang ger', '<p>Ini adalah iklan kocak</p>', 'ads/763dWvZNPuqD153GoSstnyX6Ww9kfA-metaMTI5MC5wbmc=-.png', NULL, 1, 'promo', '2022-12-08 20:58:53', '2022-12-08 21:28:11');
COMMIT;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------
BEGIN;
INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES (620065, 'Snack', '2022-12-05 21:06:00', '2022-12-05 21:06:00');
COMMIT;

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
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

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (5, '2022_11_01_004628_create_orders_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (6, '2022_11_01_010207_create_products_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (7, '2022_11_01_010208_create_order_items_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (8, '2022_11_08_170326_create_sessions_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (9, '2022_11_15_234656_add_photo_to_products', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (10, '2022_11_17_001248_change_total_price_nullable_in_orders', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (11, '2022_11_22_221107_create_categories_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (12, '2022_11_22_221413_add_category_id_to_product', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (13, '2022_11_22_225431_create_ads_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (14, '2022_11_28_190138_add_discount_and_is_discount_on_products_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (15, '2022_11_28_225009_add_is_confirmation_on_orders_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (16, '2022_11_30_205606_add_is_confirmation_employee_on_table_orders', 2);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (19, '2022_11_30_212238_create_activity_log_table', 3);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (20, '2022_11_30_212239_add_event_column_to_activity_log_table', 3);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (24, '2022_11_30_212240_add_batch_uuid_column_to_activity_log_table', 4);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (25, '2022_12_06_012833_add_link_to_ads', 5);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (26, '2022_12_06_015054_add_description_to_ads', 6);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (28, '2022_12_06_021718_add_type_to_ads', 7);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (29, '2022_12_08_194021_add_product_uuid_to_ads', 8);
COMMIT;

-- ----------------------------
-- Table structure for order_items
-- ----------------------------
DROP TABLE IF EXISTS `order_items`;
CREATE TABLE `order_items` (
  `id` bigint unsigned NOT NULL,
  `order_number` bigint unsigned NOT NULL,
  `product_id` bigint unsigned NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int NOT NULL,
  `price` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_items_order_number_index` (`order_number`),
  KEY `order_items_product_id_index` (`product_id`),
  CONSTRAINT `order_items_order_number_foreign` FOREIGN KEY (`order_number`) REFERENCES `orders` (`order_number`) ON DELETE CASCADE,
  CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of order_items
-- ----------------------------
BEGIN;
INSERT INTO `order_items` (`id`, `order_number`, `product_id`, `name`, `description`, `quantity`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES (193689, 1669816728, 947392, 'Ardella Schultz V', NULL, 3, 11460, '2022-11-30 20:59:07', '2022-11-30 20:59:07', NULL);
INSERT INTO `order_items` (`id`, `order_number`, `product_id`, `name`, `description`, `quantity`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES (194370, 875, 57187, 'Johnson Gulgowski', 'Fugit commodi consequatur molestiae totam quis.', 27772, 8876854, '2022-11-29 22:50:04', '2022-11-29 22:50:04', NULL);
INSERT INTO `order_items` (`id`, `order_number`, `product_id`, `name`, `description`, `quantity`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES (442199, 887222, 965123, 'Kentang Goreng', 'description', 1, 800, '2022-12-08 21:15:52', '2022-12-08 21:15:52', NULL);
INSERT INTO `order_items` (`id`, `order_number`, `product_id`, `name`, `description`, `quantity`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES (730039, 638806323, 57187, 'Sterling Gleichner', 'Et velit culpa et nisi ut exercitationem.', 7, 40, '2022-11-29 22:50:04', '2022-11-29 22:50:04', NULL);
COMMIT;

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `order_number` bigint unsigned NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_number` int DEFAULT NULL,
  `type` enum('delivery','takeaway','dinein') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dinein',
  `status` enum('pending','confirmed','delivered','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `total_price` int DEFAULT '0',
  `is_confirmation` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_confirmation_employee` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `orders_user_id_index` (`user_id`),
  KEY `orders_order_number_index` (`order_number`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of orders
-- ----------------------------
BEGIN;
INSERT INTO `orders` (`id`, `user_id`, `order_number`, `email`, `name`, `table_number`, `type`, `status`, `total_price`, `is_confirmation`, `created_at`, `updated_at`, `deleted_at`, `is_confirmation_employee`) VALUES (99098, 55847, 1669816728, 'asdads@aa.com', 'asdsad', 111, 'dinein', 'delivered', 0, 1, '2022-11-30 20:59:07', '2022-11-30 23:14:57', NULL, 1);
INSERT INTO `orders` (`id`, `user_id`, `order_number`, `email`, `name`, `table_number`, `type`, `status`, `total_price`, `is_confirmation`, `created_at`, `updated_at`, `deleted_at`, `is_confirmation_employee`) VALUES (244978, NULL, 887222, 'asdsad@a.com', 'password', 1, 'dinein', 'pending', 800, 0, '2022-12-08 21:15:52', '2022-12-08 21:15:52', NULL, 0);
INSERT INTO `orders` (`id`, `user_id`, `order_number`, `email`, `name`, `table_number`, `type`, `status`, `total_price`, `is_confirmation`, `created_at`, `updated_at`, `deleted_at`, `is_confirmation_employee`) VALUES (973363, 5, 875, 'abernathy.kacey@example.net', 'Jeffry Becker', 549, 'dinein', 'pending', 0, 1, '2022-11-29 22:50:04', '2022-11-30 20:54:40', NULL, 0);
INSERT INTO `orders` (`id`, `user_id`, `order_number`, `email`, `name`, `table_number`, `type`, `status`, `total_price`, `is_confirmation`, `created_at`, `updated_at`, `deleted_at`, `is_confirmation_employee`) VALUES (990609, 5, 638806323, 'kenneth82@example.net', 'Cedrick Rowe', 85, 'dinein', 'pending', 0, 1, '2022-11-29 22:50:04', '2022-11-30 21:31:51', NULL, 0);
COMMIT;

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for permissions
-- ----------------------------
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of permissions
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
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

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL,
  `category_id` bigint unsigned DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint unsigned NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_discount` tinyint(1) NOT NULL DEFAULT '0',
  `discount` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
BEGIN;
INSERT INTO `products` (`id`, `category_id`, `name`, `price`, `description`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`, `is_discount`, `discount`) VALUES (57187, NULL, 'Yasmin Roob III', 5856727, NULL, NULL, 'active', '2022-11-29 22:50:04', '2022-11-29 22:50:04', NULL, 0, 0);
INSERT INTO `products` (`id`, `category_id`, `name`, `price`, `description`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`, `is_discount`, `discount`) VALUES (947392, NULL, 'Ardella Schultz V', 3820, NULL, NULL, 'active', '2022-11-29 22:50:04', '2022-11-29 22:50:04', NULL, 0, 0);
INSERT INTO `products` (`id`, `category_id`, `name`, `price`, `description`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`, `is_discount`, `discount`) VALUES (965123, 620065, 'Kentang Goreng', 1000, NULL, 'products/NkfCx8gd6OYhrJP0wkjpEm0jzi9FDv-metaUi5wbmc=-.png', 'active', '2022-12-05 21:06:44', '2022-12-08 21:02:11', NULL, 1, 20);
COMMIT;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for sessions
-- ----------------------------
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of sessions
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','employee') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'employee',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES (5, 'Elisabeth Gusikowski', 'alex20@example.com', '2022-11-29 22:50:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'employee', 'KvpmXtDTpg', '2022-11-29 22:50:04', '2022-11-29 22:50:04', NULL);
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES (55847, 'arief', 'a@a.com', NULL, '$2y$10$tKZGGzQZeNYufp6TDC/MZun0nnUn8n1kuC1MW.rsbnS2KdhLqxPfG', 'admin', 'qcP5XptADwG8gCbYr5XhD3YWyLVnpC8ZwTbfn1N8ExpfZLfyxECRG8C8Ynm4', '2022-11-29 22:51:07', '2022-11-29 22:51:07', NULL);
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES (56373, 'ccc', 'c@c.com', NULL, '$2y$10$MM0cEEcDerI4RcxM4rS3uukcNqzHpW4zE0F/bCMTKvLRVCp5luwPe', 'employee', NULL, '2022-11-30 21:50:27', '2022-11-30 21:50:27', NULL);
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES (68043, 'Stephanie Ondricka', 'sawayn.claud@example.org', '2022-11-29 22:50:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'employee', 'HI8rOMJz5DDlPaAoDzJajvFWlCUqFhQBN03SccIwBqAkIc4UaEbAjp8f2efG', '2022-11-29 22:50:04', '2022-11-29 22:50:04', NULL);
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES (427791, 'Anjas mara', 'b@b.com', NULL, '$2y$10$HKjF/UWN1yZ4iz0vH8GpB.Ug7EME92xG4g92rqk8UymstLJFTAQSu', 'employee', NULL, '2022-11-30 21:46:56', '2022-11-30 21:46:56', NULL);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
