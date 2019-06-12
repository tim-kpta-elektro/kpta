/*
 Navicat Premium Data Transfer

 Source Server         : Local
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : kpta

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 13/06/2019 01:05:29
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for daftar_kp
-- ----------------------------
DROP TABLE IF EXISTS `daftar_kp`;
CREATE TABLE `daftar_kp`  (
  `nim` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mhs_nama` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tgl_ajuan` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `sks_lulus` int(3) NULL DEFAULT NULL,
  `ipk` float NULL DEFAULT NULL,
  `perusahaan_nama` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `perusahaan_almt` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `perusahaan_jenis` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `pic` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_kp` date NULL DEFAULT NULL,
  `tgl_sls_kp` date NULL DEFAULT NULL,
  `judul_laporan` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`nim`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of daftar_kp
-- ----------------------------
INSERT INTO `daftar_kp` VALUES ('I0717026', 'Mohammad Raihan Hafiz', '2019-05-02 14:51:45', 90, 3.45, 'Garuda Indonesia', 'Cengkareng', 'Penerbangan', 'HRD', '2019-02-01', '2019-03-31', 'Pengembangan Web', '');
INSERT INTO `daftar_kp` VALUES ('I0717030', 'Muhammad Rifai', '2019-05-02 14:53:49', 90, 335, 'PT Garuda Indonesia', 'Tangerang, Indonesia', 'Penerbangan', 'HRD', '2019-05-02', '2019-06-02', 'Pengembangan Aplikasi', '');

-- ----------------------------
-- Table structure for daftar_ta
-- ----------------------------
DROP TABLE IF EXISTS `daftar_ta`;
CREATE TABLE `daftar_ta`  (
  `tgl_ajuan` datetime(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  `mhs_nama` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nim` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kbk` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ta_judul` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mk_pilihan1` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mk_pilihan2` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `mk_pilihan3` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `sks_lulus` int(3) NULL DEFAULT NULL,
  `ipk_sementara` float NULL DEFAULT NULL,
  `dosbing1` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `dosbing2` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`tgl_ajuan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of daftar_ta
-- ----------------------------
INSERT INTO `daftar_ta` VALUES ('2019-04-18 06:29:04', 'Wahyu Kurniawan', 'I0715035', 'SKI', 'Website', 'AI', 'SPK', 'ABW', 123, 3.21, 'Sutrisno', NULL);
INSERT INTO `daftar_ta` VALUES ('2019-04-18 06:29:05', 'Arifian Tri Laksita', 'I0715005', 'sel', 'kontrol close loop kecepatan motor bldc', 'kualitas daya', 'Smart Grid', 'Satelit', 144, 3.12, 'Chico Hermanu', NULL);
INSERT INTO `daftar_ta` VALUES ('2019-04-18 06:29:06', 'Ryoki Martfuadi', 'I0715032', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `daftar_ta` VALUES ('2019-04-18 20:15:12', 'Wahyu Kurniawan', 'I0715035', 'SKI', 'Website Untuk Pengembangan', 'SPK', 'ABW', 'AI', 123, 3.21, 'Sutrisno', 'Meiyanto');

-- ----------------------------
-- Table structure for dosen
-- ----------------------------
DROP TABLE IF EXISTS `dosen`;
CREATE TABLE `dosen`  (
  `nip` int(30) NOT NULL,
  `nama_dosen` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status_dosen` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`nip`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of dosen
-- ----------------------------
INSERT INTO `dosen` VALUES (119008293, 'A', 'aktif');

-- ----------------------------
-- Table structure for kerjapraktek
-- ----------------------------
DROP TABLE IF EXISTS `kerjapraktek`;
CREATE TABLE `kerjapraktek`  (
  `id_kerjapraktek` int(15) NOT NULL AUTO_INCREMENT,
  `tgl_ajuan` datetime(0) NULL DEFAULT NULL,
  `perusahaan_nama` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `perusahaan_almt` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `perusahaan_jenis` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `pic` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tgl_mulai_kp` date NULL DEFAULT NULL,
  `tgl_selesai_kp` date NULL DEFAULT NULL,
  `status_kerjapraktek` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kerjapraktek`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kerjapraktek
-- ----------------------------
INSERT INTO `kerjapraktek` VALUES (1, '2019-05-22 10:19:04', 'Telkomsel', 'Jakarta Selatan', 'Telekomunikasi', 'General Manager', '2019-05-23', '2019-05-31', 'aktif');

-- ----------------------------
-- Table structure for kp
-- ----------------------------
DROP TABLE IF EXISTS `kp`;
CREATE TABLE `kp`  (
  `id_kp` int(15) NOT NULL AUTO_INCREMENT,
  `nim_mhs` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pembimbing` int(30) NULL DEFAULT NULL,
  `tgl_ajuan` datetime(0) NULL DEFAULT NULL,
  `perusahaan_nama` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `perusahaan_almt` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `perusahaan_jenis` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `pic` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tgl_mulai_kp` date NULL DEFAULT NULL,
  `tgl_selesai_kp` date NULL DEFAULT NULL,
  `status_kp` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kp`) USING BTREE,
  INDEX `kp_daftar`(`nim_mhs`) USING BTREE,
  INDEX `kp_pembimbing`(`pembimbing`) USING BTREE,
  CONSTRAINT `kp_daftar` FOREIGN KEY (`nim_mhs`) REFERENCES `mahasiswa` (`nim`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `kp_pembimbing` FOREIGN KEY (`pembimbing`) REFERENCES `dosen` (`nip`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kp
-- ----------------------------
INSERT INTO `kp` VALUES (1, 'I0716001', NULL, '2019-05-22 13:12:11', 'Telkomsel', 'Jakarta Selatan', 'Telekomunikasi', 'General Manager', '2019-05-23', '2019-05-31', 'pending');

-- ----------------------------
-- Table structure for mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa`  (
  `nim` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nama_mhs` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `angkatan` decimal(10, 0) NOT NULL,
  `sks` int(6) NOT NULL,
  `ipk` float NOT NULL,
  `status_mhs` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`nim`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of mahasiswa
-- ----------------------------
INSERT INTO `mahasiswa` VALUES ('I0716001', 'ADIP SAFIUDIN', 2016, 107, 3.45, 'aktif');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_resets_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for pendadaran
-- ----------------------------
DROP TABLE IF EXISTS `pendadaran`;
CREATE TABLE `pendadaran`  (
  `id_pendadaran` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jam_mulai` time(6) NOT NULL,
  `jam_selesai` time(6) NOT NULL,
  `dosen_penguji1` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dosen_penguji2` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `dosen_penguji3` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nilai_penguji1` float NOT NULL,
  `nilai_penguji2` float NOT NULL,
  `nilai_penguji3` float NOT NULL,
  `nilai_pendadaran` float NOT NULL,
  `status_pendadaran` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_pendadaran`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for ref_ruang
-- ----------------------------
DROP TABLE IF EXISTS `ref_ruang`;
CREATE TABLE `ref_ruang`  (
  `id_ruang` int(10) NOT NULL AUTO_INCREMENT,
  `ruang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_ruang`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ref_ruang
-- ----------------------------
INSERT INTO `ref_ruang` VALUES (1, 'Ruang Kuliah 1');
INSERT INTO `ref_ruang` VALUES (2, 'Ruang Kuliah 2');
INSERT INTO `ref_ruang` VALUES (3, 'Ruang Kuliah 3');
INSERT INTO `ref_ruang` VALUES (4, 'Ruang Kuliah 4');
INSERT INTO `ref_ruang` VALUES (5, 'Ruang Kaprodi');
INSERT INTO `ref_ruang` VALUES (6, 'Ruang Sidang');
INSERT INTO `ref_ruang` VALUES (7, 'Lab. Elektro');

-- ----------------------------
-- Table structure for seminar_kp
-- ----------------------------
DROP TABLE IF EXISTS `seminar_kp`;
CREATE TABLE `seminar_kp`  (
  `nim` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `mhs_nama` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `judul_sem` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `pembimbing` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tgl_sem` date NULL DEFAULT NULL,
  `jam_mulai` time(0) NULL DEFAULT NULL,
  `jam_selesai` time(0) NULL DEFAULT NULL,
  `tempat` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of seminar_kp
-- ----------------------------
INSERT INTO `seminar_kp` VALUES ('I0717026', 'Mohammad Raihan Hafiz', 'Database', 'Sutrisno', '2019-05-13', '07:50:43', '09:50:56', 'Ruang Kuliah 1');

-- ----------------------------
-- Table structure for seminar_kpp
-- ----------------------------
DROP TABLE IF EXISTS `seminar_kpp`;
CREATE TABLE `seminar_kpp`  (
  `id_seminar` int(15) NOT NULL AUTO_INCREMENT,
  `nim_mhs` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `judul_seminar` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `jam_mulai` time(0) NULL DEFAULT NULL,
  `jam_selesai` time(0) NULL DEFAULT NULL,
  `ruang` int(10) NULL DEFAULT NULL,
  `status_seminarkp` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_seminar`) USING BTREE,
  INDEX `kp_seminar`(`nim_mhs`) USING BTREE,
  INDEX `kp_ruang`(`ruang`) USING BTREE,
  CONSTRAINT `kp_ruang` FOREIGN KEY (`ruang`) REFERENCES `ref_ruang` (`id_ruang`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `kp_seminar` FOREIGN KEY (`nim_mhs`) REFERENCES `mahasiswa` (`nim`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of seminar_kpp
-- ----------------------------
INSERT INTO `seminar_kpp` VALUES (1, 'I0716001', 'Sewadaya Site', '2019-06-07', '13:35:44', '14:35:47', 1, 'PENDING');

-- ----------------------------
-- Table structure for seminar_ta
-- ----------------------------
DROP TABLE IF EXISTS `seminar_ta`;
CREATE TABLE `seminar_ta`  (
  `id_seminar` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jam_mulai` time(6) NOT NULL,
  `jam_selesai` time(6) NOT NULL,
  `status_pendadaran` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_seminar`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for ta
-- ----------------------------
DROP TABLE IF EXISTS `ta`;
CREATE TABLE `ta`  (
  `id_ta` int(15) NOT NULL AUTO_INCREMENT,
  `judul` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nim_mhs` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pembimbing1` int(30) NULL DEFAULT NULL,
  `pembimbing2` int(30) NULL DEFAULT NULL,
  `id_seminar` int(15) NULL DEFAULT NULL,
  `id_pendadaran` int(15) NULL DEFAULT NULL,
  `status_ta` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_ta`) USING BTREE,
  INDEX `nim_mhs`(`nim_mhs`) USING BTREE,
  INDEX `nip_dosen`(`pembimbing1`) USING BTREE,
  INDEX `id_seminar`(`id_seminar`) USING BTREE,
  INDEX `id_pendadaran`(`id_pendadaran`) USING BTREE,
  INDEX `pembimbing2`(`pembimbing2`) USING BTREE,
  CONSTRAINT `ta_ibfk_1` FOREIGN KEY (`nim_mhs`) REFERENCES `mahasiswa` (`nim`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `ta_ibfk_2` FOREIGN KEY (`pembimbing1`) REFERENCES `dosen` (`nip`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `ta_ibfk_3` FOREIGN KEY (`id_seminar`) REFERENCES `seminar_ta` (`id_seminar`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `ta_ibfk_4` FOREIGN KEY (`id_pendadaran`) REFERENCES `pendadaran` (`id_pendadaran`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `ta_ibfk_5` FOREIGN KEY (`pembimbing2`) REFERENCES `dosen` (`nip`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ta
-- ----------------------------
INSERT INTO `ta` VALUES (1, 'Absensi Face Recognition', 'I0716001', 119008293, NULL, NULL, NULL, '');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(2) NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'User', 'user@gmail.com', NULL, '$2y$10$sfNZI7jaQ1V49UO9/5.W3e7Bba3aK9Sa37yjmSQ3d/CXyAhPYqLgW', 1, NULL, '2019-05-22 17:06:13', '2019-05-22 17:06:13');
INSERT INTO `users` VALUES (2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$sfNZI7jaQ1V49UO9/5.W3e7Bba3aK9Sa37yjmSQ3d/CXyAhPYqLgW', 2, NULL, '2019-06-12 20:07:19', '2019-06-12 20:07:22');
INSERT INTO `users` VALUES (3, 'AdminKP', 'adminkp@gmail.com', NULL, '$2y$10$sfNZI7jaQ1V49UO9/5.W3e7Bba3aK9Sa37yjmSQ3d/CXyAhPYqLgW', 3, NULL, '2019-06-13 00:40:25', '2019-06-13 00:40:28');
INSERT INTO `users` VALUES (4, 'AdminTA', 'adminta@gmail.com', NULL, '$2y$10$sfNZI7jaQ1V49UO9/5.W3e7Bba3aK9Sa37yjmSQ3d/CXyAhPYqLgW', 4, NULL, '2019-06-13 00:40:52', '2019-06-13 00:40:54');
INSERT INTO `users` VALUES (5, 'Dosen', 'dosen@gmail.com', NULL, '$2y$10$sfNZI7jaQ1V49UO9/5.W3e7Bba3aK9Sa37yjmSQ3d/CXyAhPYqLgW', 5, NULL, '2019-06-13 00:41:12', '2019-06-13 00:41:15');

SET FOREIGN_KEY_CHECKS = 1;
