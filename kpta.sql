/*
 Navicat Premium Data Transfer

 Source Server         : DATABASE
 Source Server Type    : MySQL
 Source Server Version : 100134
 Source Host           : localhost:3306
 Source Schema         : kpta

 Target Server Type    : MySQL
 Target Server Version : 100134
 File Encoding         : 65001

 Date: 20/06/2019 12:23:40
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
-- Table structure for dosen
-- ----------------------------
DROP TABLE IF EXISTS `dosen`;
CREATE TABLE `dosen`  (
  `kode_dosen` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nip` int(30) NULL DEFAULT NULL,
  `nama_dosen` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status_dosen` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`kode_dosen`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for dosen_copy1
-- ----------------------------
DROP TABLE IF EXISTS `dosen_copy1`;
CREATE TABLE `dosen_copy1`  (
  `kode_dosen` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nip` int(30) NULL DEFAULT NULL,
  `nama_dosen` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status_dosen` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`kode_dosen`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
-- Table structure for kp
-- ----------------------------
DROP TABLE IF EXISTS `kp`;
CREATE TABLE `kp`  (
  `id_kp` int(15) NOT NULL AUTO_INCREMENT,
  `nim_mhs` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pembimbing` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tgl_ajuan` datetime(0) NULL DEFAULT NULL,
  `perusahaan_nama` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `perusahaan_almt` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `perusahaan_jenis` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `pic` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tgl_mulai_kp` date NULL DEFAULT NULL,
  `tgl_selesai_kp` date NULL DEFAULT NULL,
  `status_kp` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kp`) USING BTREE,
  INDEX `kp_mhs`(`nim_mhs`) USING BTREE,
  CONSTRAINT `kp_mhs` FOREIGN KEY (`nim_mhs`) REFERENCES `mahasiswa` (`nim`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa`  (
  `nim` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nama_mhs` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `angkatan` decimal(10, 0) NULL DEFAULT NULL,
  `sks` int(6) NULL DEFAULT NULL,
  `ipk` float NULL DEFAULT NULL,
  `pem_akademik` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pem_kp` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status_mhs` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`nim`) USING BTREE,
  INDEX `pem_kp`(`pem_kp`) USING BTREE,
  INDEX `pem_aka`(`pem_akademik`) USING BTREE,
  CONSTRAINT `pem_aka` FOREIGN KEY (`pem_akademik`) REFERENCES `dosen` (`kode_dosen`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pem_kp` FOREIGN KEY (`pem_kp`) REFERENCES `dosen` (`kode_dosen`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for mahasiswa_copy1
-- ----------------------------
DROP TABLE IF EXISTS `mahasiswa_copy1`;
CREATE TABLE `mahasiswa_copy1`  (
  `nim` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nama_mhs` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `angkatan` decimal(10, 0) NULL DEFAULT NULL,
  `sks` int(6) NULL DEFAULT NULL,
  `ipk` float NULL DEFAULT NULL,
  `pem_akademik` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pem_kp` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `status_mhs` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`nim`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

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
  `id_ta` int(15) NOT NULL,
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
  PRIMARY KEY (`id_pendadaran`) USING BTREE,
  INDEX `id_ta`(`id_ta`) USING BTREE,
  CONSTRAINT `pendadaran_ibfk_1` FOREIGN KEY (`id_ta`) REFERENCES `ta` (`id_ta`) ON DELETE RESTRICT ON UPDATE RESTRICT
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
-- Table structure for seminar_kpp
-- ----------------------------
DROP TABLE IF EXISTS `seminar_kpp`;
CREATE TABLE `seminar_kpp`  (
  `id_seminar` int(15) NOT NULL AUTO_INCREMENT,
  `id_kp` int(15) NULL DEFAULT NULL,
  `judul_seminar` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `tanggal` date NULL DEFAULT NULL,
  `jam_mulai` time(0) NULL DEFAULT NULL,
  `jam_selesai` time(0) NULL DEFAULT NULL,
  `ruang` int(10) NULL DEFAULT NULL,
  `status_seminarkp` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_seminar`) USING BTREE,
  INDEX `kp_ruang`(`ruang`) USING BTREE,
  INDEX `kp`(`id_kp`) USING BTREE,
  CONSTRAINT `kp` FOREIGN KEY (`id_kp`) REFERENCES `kp` (`id_kp`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `kp_ruang` FOREIGN KEY (`ruang`) REFERENCES `ref_ruang` (`id_ruang`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for seminar_ta
-- ----------------------------
DROP TABLE IF EXISTS `seminar_ta`;
CREATE TABLE `seminar_ta`  (
  `id_seminar` int(15) NOT NULL,
  `id_ta` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jam_mulai` time(6) NOT NULL,
  `jam_selesai` time(6) NOT NULL,
  `status_pendadaran` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_seminar`) USING BTREE,
  INDEX `id_ta`(`id_ta`) USING BTREE,
  CONSTRAINT `seminar_ta_ibfk_1` FOREIGN KEY (`id_ta`) REFERENCES `ta` (`id_ta`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for ta
-- ----------------------------
DROP TABLE IF EXISTS `ta`;
CREATE TABLE `ta`  (
  `id_ta` int(15) NOT NULL AUTO_INCREMENT,
  `judul` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nim_mhs` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pembimbing1` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `id_seminar` int(15) NULL DEFAULT NULL,
  `id_pendadaran` int(15) NULL DEFAULT NULL,
  `status_ta` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_ta`) USING BTREE,
  INDEX `nim_mhs`(`nim_mhs`) USING BTREE,
  INDEX `pembimbing2`(`pembimbing1`) USING BTREE,
  CONSTRAINT `ta_ibfk_1` FOREIGN KEY (`nim_mhs`) REFERENCES `mahasiswa` (`nim`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `ta_ibfk_2` FOREIGN KEY (`pembimbing1`) REFERENCES `dosen` (`kode_dosen`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(2) NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE,
  UNIQUE INDEX `usersname_unique`(`username`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
