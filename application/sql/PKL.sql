/*
 Navicat Premium Data Transfer

 Source Server         : xampp
 Source Server Type    : MySQL
 Source Server Version : 100129
 Source Host           : localhost:3306
 Source Schema         : emjesweb

 Target Server Type    : MySQL
 Target Server Version : 100129
 File Encoding         : 65001

 Date: 05/07/2018 08:50:03
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for absensi
-- ----------------------------
DROP TABLE IF EXISTS `absensi`;
CREATE TABLE `absensi`  (
  `idAbsensi` bigint(20) NOT NULL AUTO_INCREMENT,
  `idPegawai` int(11) NULL DEFAULT NULL,
  `waktuMasuk` time(0) NULL DEFAULT NULL,
  `waktuKeluar` time(0) NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `keterangan` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`idAbsensi`) USING BTREE,
  INDEX `fk_absensi_pegawai_1`(`idPegawai`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of absensi
-- ----------------------------
INSERT INTO `absensi` VALUES (1, 1, '20:37:28', '20:37:29', '2018-07-05', 'Baby shark dudududu!!!');
INSERT INTO `absensi` VALUES (3, 1, '20:37:28', '20:37:29', '2018-07-05', 'Baby shark dudududu~');
INSERT INTO `absensi` VALUES (10, 1, '06:00:00', '03:30:00', '2018-07-26', 'Lupakan');

-- ----------------------------
-- Table structure for bukti
-- ----------------------------
DROP TABLE IF EXISTS `bukti`;
CREATE TABLE `bukti`  (
  `idBukti` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `buktiGambar` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idBukti`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for groups
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups`  (
  `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES (1, 'admin', 'Administrator');
INSERT INTO `groups` VALUES (2, 'members', 'General User');

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori`  (
  `idKategori` int(11) NOT NULL,
  `namaKategori` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `statusKategori` smallint(1) NULL DEFAULT 1,
  PRIMARY KEY (`idKategori`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kategori
-- ----------------------------
INSERT INTO `kategori` VALUES (1, 'web', 1);
INSERT INTO `kategori` VALUES (2, 'android', 1);
INSERT INTO `kategori` VALUES (3, 'desktop', 1);

-- ----------------------------
-- Table structure for klien
-- ----------------------------
DROP TABLE IF EXISTS `klien`;
CREATE TABLE `klien`  (
  `idKlien` int(11) NOT NULL AUTO_INCREMENT,
  `namaKlien` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `noTelp` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` tinytext CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`idKlien`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of klien
-- ----------------------------
INSERT INTO `klien` VALUES (1, 'Pak Johny', '0812810820180', 'exemplar@gmail.com', 'Uganda');
INSERT INTO `klien` VALUES (2, 'Pak Edy', '08980808080', 'mailkskda@mail.com', 'Asgard');

-- ----------------------------
-- Table structure for login_attempts
-- ----------------------------
DROP TABLE IF EXISTS `login_attempts`;
CREATE TABLE `login_attempts`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `time` int(11) UNSIGNED NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for proyek
-- ----------------------------
DROP TABLE IF EXISTS `proyek`;
CREATE TABLE `proyek`  (
  `idProyek` int(11) NOT NULL AUTO_INCREMENT,
  `idKlien` int(11) NULL DEFAULT NULL,
  `namaProyek` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `idKategori` int(11) NULL DEFAULT NULL,
  `fee` bigint(20) NULL DEFAULT NULL,
  `deadline` date NULL DEFAULT NULL,
  `idPegawai` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idProyek`) USING BTREE,
  INDEX `idKategori`(`idKategori`) USING BTREE,
  INDEX `idPegawai`(`idPegawai`) USING BTREE,
  INDEX `idKlien`(`idKlien`) USING BTREE,
  CONSTRAINT `proyek_ibfk_2` FOREIGN KEY (`idKategori`) REFERENCES `kategori` (`idKategori`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `proyek_ibfk_3` FOREIGN KEY (`idKlien`) REFERENCES `klien` (`idKlien`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of proyek
-- ----------------------------
INSERT INTO `proyek` VALUES (1, NULL, 'Lain-Lain', NULL, NULL, '2018-07-05', NULL);
INSERT INTO `proyek` VALUES (2, 1, 'Proyek A', 1, 150000, '2018-07-26', 1);
INSERT INTO `proyek` VALUES (3, 2, 'naSI jumbo', 1, 90000, '2018-07-26', 1);

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role`  (
  `idRole` int(11) NOT NULL,
  `namaRole` varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`idRole`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES (1, 'Admin');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `salt` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(254) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `activation_code` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `forgotten_password_code` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED NULL DEFAULT NULL,
  `remember_code` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED NULL DEFAULT NULL,
  `active` tinyint(1) UNSIGNED NULL DEFAULT NULL,
  `first_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `last_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `company` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, '.kXHPvkubbQ7jdcEa2K1Ze', 1268889823, 1530722659, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- ----------------------------
-- Table structure for users_groups
-- ----------------------------
DROP TABLE IF EXISTS `users_groups`;
CREATE TABLE `users_groups`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `uc_users_groups`(`user_id`, `group_id`) USING BTREE,
  INDEX `fk_users_groups_users1_idx`(`user_id`) USING BTREE,
  INDEX `fk_users_groups_groups1_idx`(`group_id`) USING BTREE,
  CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users_groups
-- ----------------------------
INSERT INTO `users_groups` VALUES (1, 1, 1);
INSERT INTO `users_groups` VALUES (2, 1, 2);

SET FOREIGN_KEY_CHECKS = 1;
