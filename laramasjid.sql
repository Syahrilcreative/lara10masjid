/*
 Navicat Premium Data Transfer

 Source Server         : laravelProject
 Source Server Type    : MySQL
 Source Server Version : 80031
 Source Host           : localhost:3306
 Source Schema         : laramasjid

 Target Server Type    : MySQL
 Target Server Version : 80031
 File Encoding         : 65001

 Date: 06/11/2024 17:44:54
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for acaras
-- ----------------------------
DROP TABLE IF EXISTS `acaras`;
CREATE TABLE `acaras` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of acaras
-- ----------------------------
BEGIN;
INSERT INTO `acaras` VALUES (2, 'boruto.jpeg', 'Maulid Nabi', '<div style=\"line-height: 18px;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus tempore cum nam dignissimos harum praesentium, enim quae natus consequuntur quam, nulla aperiam provident quasi dolores esse suscipit quia debitis consequatur adipisci aliquam! Architecto reprehenderit quis ipsa quasi illo a molestiae suscipit animi laborum, adipisci placeat! Pariatur esse, iusto inventore dolorem, quos molestiae maiores rerum dolorum ex nostrum perspiciatis, atque repellendus ut asperiores vel nemo ab facilis consequuntur quam modi eligendi! Ipsa veniam laboriosam, culpa laborum error distinctio beatae possimus. Quisquam repellendus ullam voluptatum. Mollitia provident veniam quaerat et, fugit numquam temporibus maiores nisi nostrum, cumque deleniti quis amet consequatur rerum maxime consequuntur ipsum molestiae vitae aliquam doloribus in voluptas. Voluptate quod voluptas harum illum laborum totam tenetur. Sapiente culpa, similique nulla, reprehenderit cum alias delectus cupiditate animi odit quasi amet qui possimus magnam modi adipisci molestiae omnis nostrum expedita laudantium natus voluptatibus nisi, accusamus quos ducimus! Modi voluptate dolorum illo nisi sunt tempora voluptates fuga hic adipisci excepturi, expedita minima id minus odit sint consectetur quia deserunt quibusdam. Tempore, tempora ipsum ipsa quasi nesciunt deserunt quo expedita corrupti amet ducimus, quam iste recusandae. Earum molestias repellat quae perferendis tempore, fugit libero excepturi doloribus totam tempora quam fuga sit pariatur cum animi laborum consectetur. Incidunt optio quae, error accusantium eaque, nihil eius odio quisquam omnis ipsum accusamus aut cum nostrum autem excepturi vero id distinctio sed et fuga sint recusandae natus, inventore alias. Nostrum, asperiores adipisci provident accusamus incidunt explicabo quis voluptatum molestias fugiat quo quidem excepturi tenetur eveniet molestiae voluptates porro non facere praesentium quibusdam voluptatem, sunt exercitationem, magni eaque odit. Quo numquam est voluptatibus facere sunt repellendus temporibus ipsum, porro ex reiciendis aut saepe nulla perspiciatis nemo! Quos officia libero aliquam? Quibusdam est accusantium ipsam quia alias sunt expedita in labore amet, vel quasi, nam similique a, odio culpa libero? Expedita magni, voluptate aut sint earum laborum explicabo aliquam sapiente culpa facere nam, ut vitae placeat distinctio porro unde quos. Dolorem, magni, dolore similique provident magnam fugiat nulla error amet reiciendis alias veritatis eveniet corporis neque culpa soluta. Asperiores molestiae eum atque, maxime possimus accusantium obcaecati, unde a at velit fuga ratione! Sequi numquam alias voluptates inventore, itaque fuga culpa nostrum aut ipsum aperiam esse officiis dolor molestias tempore perspiciatis consectetur. Consequuntur sequi id est, dignissimos voluptas nostrum in dolor odit molestias, sunt iure, laborum dolorum iste corporis sit voluptates iusto quis suscipit nam officia? Iure totam optio necessitatibus! Optio delectus ratione quaerat quae fugiat quo odit molestiae architecto beatae blanditiis, obcaecati doloremque perferendis, pariatur tempore iure dignissimos vel maxime at qui vero, ea omnis. Molestiae magni reiciendis doloremque quasi, error commodi distinctio facere praesentium provident iste, tenetur hic dolorum incidunt ipsa corrupti ratione? Neque recusandae nulla, quisquam veritatis deserunt nemo corporis magni provident! Iste, ab ullam rerum repudiandae sapiente similique ut. Quidem eum sunt dolore rem tenetur officia magnam dolorem culpa minima velit odio optio sed, consectetur a eligendi natus quaerat, modi quae, libero assumenda aliquam. Incidunt maxime ipsum harum, enim ipsa nesciunt mollitia atque doloremque dolor in.</div>', 1, 'Syahril Hidayat', 'active', '2024-10-21 14:13:49', '2024-10-21 14:13:49');
INSERT INTO `acaras` VALUES (3, 'boruto.jpeg', 'asemna', '<div style=\"line-height: 18px;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat ex sed voluptatibus. Voluptatem praesentium autem sunt! Quia id, est autem unde repellat dolorum similique expedita, maxime magni itaque accusantium in, libero quasi! Quae minus officiis sit maiores quisquam molestiae sint, animi earum esse nihil deserunt totam qui sequi natus consequuntur recusandae. Natus voluptates culpa, cum, necessitatibus accusamus quos expedita dolor aliquam exercitationem nam quam? Suscipit perferendis necessitatibus totam delectus explicabo? Consequuntur reprehenderit itaque officia voluptatibus tempora atque accusantium aut maxime asperiores reiciendis tenetur labore nihil quis, vitae impedit id numquam nobis natus culpa nemo laboriosam est sapiente nostrum quas? Sed vel et iure, fugit sit laudantium earum maiores beatae molestiae quibusdam neque repellat expedita laboriosam ratione odio voluptas error officiis quas porro deserunt voluptatem similique mollitia? Dolore, quasi ex? Veritatis architecto suscipit deleniti et dignissimos ab quidem eius itaque neque? Doloremque reprehenderit nemo sunt, nesciunt quo placeat maxime similique harum inventore blanditiis neque reiciendis ab impedit, culpa nulla nisi, velit accusantium quod. Iste tenetur exercitationem quas voluptate? Suscipit repellat impedit facilis sint perspiciatis deleniti quo et dolorem omnis quisquam. Eos excepturi nihil vero necessitatibus repudiandae nesciunt perferendis, velit voluptates cupiditate fuga dolor corrupti soluta fugiat consequuntur quibusdam, dolore consectetur rerum maxime natus delectus a! Adipisci repudiandae consequuntur culpa ducimus mollitia, fugit minus earum nemo id cumque optio laboriosam incidunt officiis quia delectus praesentium, laborum neque tempora quaerat atque deserunt iusto molestias non! Consectetur cumque vero dicta aut odit enim, dolorem quasi suscipit consequuntur dolores quae sunt nisi? Nobis nihil hic velit laborum, deserunt perspiciatis eligendi eius fugit earum necessitatibus unde alias veniam totam, doloribus architecto ad. Doloribus hic, aspernatur harum doloremque at quod veritatis voluptate eveniet placeat neque modi odit illo, amet illum? Labore ut, qui assumenda id nam, corrupti magnam maiores praesentium nihil iure nostrum quis, illum enim natus molestias ullam. Harum quae deserunt enim commodi magnam ipsam, neque distinctio laborum rem doloremque quod quidem, unde sit ullam culpa expedita. Aut deserunt ea molestias sapiente debitis dicta quisquam, qui, impedit, minima architecto officia dolorum. Doloribus temporibus eum reiciendis necessitatibus quasi architecto exercitationem non, repudiandae quae ipsa porro aliquam ipsum sit. Ad rem saepe earum beatae illum tempora, cumque voluptatum repellat corrupti impedit repudiandae veritatis in cupiditate ut minima numquam quis deleniti omnis deserunt inventore! Perferendis laboriosam rerum officia animi repellendus, ipsam aliquid rem voluptatum vitae veritatis aperiam earum error accusamus ab fuga, veniam, tempore numquam. Aliquam, modi, molestias amet illum doloribus odio nisi tempore quos maiores ex autem quisquam, consectetur sequi minus debitis dicta incidunt cupiditate delectus deleniti aspernatur vel odit excepturi ipsa? Consectetur vero laboriosam aliquid excepturi dolore earum iste quidem tenetur exercitationem neque, distinctio fuga sit quas maxime, aspernatur, tempore quos. Eius, porro? Voluptatum illum repudiandae fuga voluptatem, cupiditate possimus dolore veniam aspernatur, fugiat quasi ad tenetur blanditiis voluptate ut assumenda! Sunt facere iusto, voluptas officiis quam illum dolor debitis magni aspernatur consequatur, nostrum amet eius quos accusantium provident placeat ad magnam at fugiat omnis? Perferendis consectetur ut repudiandae aspernatur dicta vitae totam asperiores illum laboriosam facilis!</div>', 1, 'Syahril Hidayat', 'active', '2024-10-21 14:15:15', '2024-10-21 14:51:10');
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
-- Table structure for kas_keluars
-- ----------------------------
DROP TABLE IF EXISTS `kas_keluars`;
CREATE TABLE `kas_keluars` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uangKeluar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_created` int NOT NULL,
  `user_updated` int DEFAULT NULL,
  `name_created` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_updated` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of kas_keluars
-- ----------------------------
BEGIN;
INSERT INTO `kas_keluars` VALUES (1, 'Beli Paku 1 Kg', '40000', '2024-10-22', 1, NULL, 'Syahril Hidayat', NULL, '2024-10-22 15:35:16', '2024-10-22 15:35:16');
INSERT INTO `kas_keluars` VALUES (2, 'Semen 1 Kg', '20000', '2024-10-22', 1, 1, 'Syahril Hidayat', 'Syahril Hidayat', '2024-10-22 15:36:06', '2024-10-22 15:36:24');
COMMIT;

-- ----------------------------
-- Table structure for kas_masuks
-- ----------------------------
DROP TABLE IF EXISTS `kas_masuks`;
CREATE TABLE `kas_masuks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uangMasuk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_created` int NOT NULL,
  `user_updated` int DEFAULT NULL,
  `name_created` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_updated` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of kas_masuks
-- ----------------------------
BEGIN;
INSERT INTO `kas_masuks` VALUES (1, 'Sodakoh Hamba', '50000', '2024-10-22', 1, NULL, 'Syahril Hidayat', NULL, '2024-10-22 15:13:03', '2024-10-22 15:13:03');
INSERT INTO `kas_masuks` VALUES (2, 'Sodakoh Hamba', '80000', '2024-10-22', 1, 1, 'Syahril Hidayat', 'Syahril Hidayat', '2024-10-22 15:13:18', '2024-10-22 15:22:17');
INSERT INTO `kas_masuks` VALUES (3, 'Sodakoh Hamba', '100000', '2024-10-22', 1, NULL, 'Syahril Hidayat', NULL, '2024-10-22 15:21:38', '2024-10-22 15:21:38');
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO `migrations` VALUES (3, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (7, '2014_10_12_000000_create_users_table', 2);
INSERT INTO `migrations` VALUES (8, '2014_10_12_100000_create_password_reset_tokens_table', 2);
INSERT INTO `migrations` VALUES (9, '2019_08_19_000000_create_failed_jobs_table', 2);
INSERT INTO `migrations` VALUES (10, '2019_12_14_000001_create_personal_access_tokens_table', 2);
INSERT INTO `migrations` VALUES (11, '2024_10_21_131314_create_acaras_table', 2);
INSERT INTO `migrations` VALUES (18, '2024_10_21_151629_add_role_to_users_table', 3);
INSERT INTO `migrations` VALUES (19, '2024_10_21_151637_add_status_to_users_table', 3);
INSERT INTO `migrations` VALUES (20, '2024_10_22_143248_create_kas_masuks_table', 3);
INSERT INTO `migrations` VALUES (21, '2024_10_22_152307_create_kas_keluars_table', 4);
COMMIT;

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------
BEGIN;
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
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES (1, 'Syahril Hidayat', 'syahril@example.com', NULL, '$2y$10$ngeXG/cfXNoBjWWGAt3bt.PiNs3zUmgV1zS2OSQWqCI8NWd/xlAJC', NULL, '2024-10-21 20:23:05', '2024-10-23 16:03:15', 'SuperAdmin', 'active');
INSERT INTO `users` VALUES (2, 'Septian', 'septian@gmail.com', NULL, '$2y$12$6reQlSNrzVyZhy6XD9hqE.xZUD486wW/xpa66La2uFSNmj3FV0pPu', NULL, '2024-10-22 08:44:02', '2024-10-22 08:44:02', 'user', 'active');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
