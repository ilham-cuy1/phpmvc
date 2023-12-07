/*
 Navicat Premium Data Transfer

 Source Server         : database
 Source Server Type    : MySQL
 Source Server Version : 100427
 Source Host           : localhost:3306
 Source Schema         : phpmvc

 Target Server Type    : MySQL
 Target Server Version : 100427
 File Encoding         : 65001

 Date: 06/09/2023 00:43:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data_guru
-- ----------------------------
DROP TABLE IF EXISTS `data_guru`;
CREATE TABLE `data_guru`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mata_pelajaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_guru
-- ----------------------------
INSERT INTO `data_guru` VALUES (1, 'Fikrotu Dwi Fuadatuzzahro, S.Pd.', 'Pemrograman Web dan Perangkat Bergerak');
INSERT INTO `data_guru` VALUES (3, 'Estri Handayani, S.Pd', 'Pemrograman Berorientasi Objek');
INSERT INTO `data_guru` VALUES (4, 'Ivans Zuwanta, S.Kom', 'Basis Data');
INSERT INTO `data_guru` VALUES (5, 'Labib Fayumi, S.Pd. Gr', 'PKWU');

-- ----------------------------
-- Table structure for data_siswa
-- ----------------------------
DROP TABLE IF EXISTS `data_siswa`;
CREATE TABLE `data_siswa`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 35 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of data_siswa
-- ----------------------------
INSERT INTO `data_siswa` VALUES (1, 'Fachri Maylana Zamorano', 'Laki-laki', 'Mlinjon');
INSERT INTO `data_siswa` VALUES (4, 'Farhan Musyaffa\' Habibbullah', 'Laki-laki', 'Njambu');
INSERT INTO `data_siswa` VALUES (29, 'Erixs', 'Laki-laki', 'Tugu');
INSERT INTO `data_siswa` VALUES (30, 'Ilham', 'Laki-laki', 'Rejowinangun');

SET FOREIGN_KEY_CHECKS = 1;
