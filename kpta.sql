/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100137
 Source Host           : localhost:3306
 Source Schema         : kpta

 Target Server Type    : MySQL
 Target Server Version : 100137
 File Encoding         : 65001

 Date: 27/06/2019 16:06:43
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for dosen
-- ----------------------------
DROP TABLE IF EXISTS `dosen`;
CREATE TABLE `dosen`  (
  `kode_dosen` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nip` bigint(30) NULL DEFAULT NULL,
  `nama_dosen` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status_dosen` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`kode_dosen`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of dosen
-- ----------------------------
INSERT INTO `dosen` VALUES ('AUG001', 1951100120161001, 'Dr.Ir. Augustinus Sujono M.T.', 'AKTIF');
INSERT INTO `dosen` VALUES ('CHI001', 198804162015041002, 'Chico Hermanu Brillianto Apribowo S.T., M.Eng.', 'AKTIF');
INSERT INTO `dosen` VALUES ('DRM001', 1983032420130201, 'Dr. Miftahul Anwar S.Si., M.Eng.', 'AKTIF');
INSERT INTO `dosen` VALUES ('FER001', 196801161999031001, 'Feri Adriyanto, Ph.D.', 'AKTIF');
INSERT INTO `dosen` VALUES ('HAR050', 199104132018031001, 'Hari Maghfiroh M.Eng.', 'AKTIF');
INSERT INTO `dosen` VALUES ('IRW001', 197004041996031002, 'Irwan Iftadi S.T., M.Eng.', 'AKTIF');
INSERT INTO `dosen` VALUES ('MEI002', 197705132009121004, 'Meiyanto Eko Sulistyo S.T., M.Eng.', 'AKTIF');
INSERT INTO `dosen` VALUES ('MUH015', 197007201999031001, 'Prof. Muhammad Nizam S.T,M.T,Ph.D.', 'AKTIF');
INSERT INTO `dosen` VALUES ('MUH043', 1988122920161001, 'Muhammad Hamka Ibrahim St., M.Eng.', 'AKTIF');
INSERT INTO `dosen` VALUES ('SUB012', 198106092003121002, 'Subuh Pramono S.T., M.T.', 'AKTIF');
INSERT INTO `dosen` VALUES ('SUT034', 1987050620180701, 'Sutrisno S.T., M.Sc, Ph.D.', 'AKTIF');

-- ----------------------------
-- Table structure for kp
-- ----------------------------
DROP TABLE IF EXISTS `kp`;
CREATE TABLE `kp`  (
  `id_kp` int(15) NOT NULL AUTO_INCREMENT,
  `nim_mhs` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
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
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kp
-- ----------------------------
INSERT INTO `kp` VALUES (1, 'I0716001', '2019-05-22 13:12:11', 'Telkomsel', 'Jakarta Selatan', 'Telekomunikasi', 'General Manager', '2019-05-23', '2019-05-31', 'SETUJU');
INSERT INTO `kp` VALUES (2, 'I0716034', '2019-06-22 12:05:00', 'Telkomsel', 'Jl. Gatot Subroto No.Kav. 52,RT.6/RW.1, Kuningan Bar.,Mampang Prpt., Kota JakartaSelatan, Daerah Khusus IbukotaJakarta 12710', 'Telekomunikasi', 'General Manager Up. Bapak Eko', '2019-06-22', '2019-06-29', 'SETUJU');
INSERT INTO `kp` VALUES (3, 'I0716018', '2019-06-22 16:29:57', 'Telkomsel Jakarta', 'Jl.Gatot Subroto, Mampang prpt, Jakarta Selatan', 'Telekomunikasi', 'General Manager Up. Bapak Eko', '2019-06-22', '2019-06-30', 'TOLAK');

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
-- Records of mahasiswa
-- ----------------------------
INSERT INTO `mahasiswa` VALUES ('I0714001', 'ABID ALIM MUSTAQIM', 2014, 150, 3.65, 'AUG001', NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES ('I0714002', 'ADITYA MEITA NUGRAHA', 2014, NULL, NULL, 'AUG001', NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0714003', 'AJI FAUZAN HIDAYAT', 2014, 148, 3.26, 'AUG001', NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES ('I0714004', 'ANDRYAWAN JAYA P', 2014, NULL, NULL, 'AUG001', NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0714005', 'ANRICO GIDEON ALFANO', 2014, NULL, NULL, 'AUG001', NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0714006', 'AULIA ARDAN SULTANI', 2014, 148, 3.32, 'AUG001', NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES ('I0714007', 'BIMA TRI PRASETYA', 2014, 147, 3.54, 'AUG001', NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES ('I0714008', 'BINA PANGESTU N', 2014, NULL, NULL, 'DRM001', NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0714009', 'BONI VASIUS ROSEN', 2014, NULL, NULL, 'AUG001', NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0714010', 'DWIYAN BAGAS DEWANTO', 2014, NULL, NULL, 'AUG001', NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0714011', 'EDI NUGROHO', 2014, 153, 3.34, 'IRW001', NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES ('I0714012', 'FADHILA AMALIA', 2014, NULL, NULL, 'MUH015', NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0714013', 'FASDA ILHAQ ROBBANI', 2014, 152, 3.28, 'MUH015', NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES ('I0714014', 'FEBRIANO EKKY R P Y', 2014, NULL, NULL, 'MUH015', NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0714015', 'FERDIANSYAH ASHIL', 2014, NULL, NULL, 'MUH015', NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0714016', 'FX RIAN WICAKSONO', 2014, 158, 3.78, 'MUH015', NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES ('I0714017', 'IGOR M FARHAN', 2014, 148, 3.82, 'MUH015', NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES ('I0714018', 'IRFAN MAULANA M', 2014, NULL, NULL, 'MUH015', NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0714019', 'LUTHFY MAKHMUDY', 2014, 148, 3.47, 'MUH043', NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES ('I0714020', 'M HAKIM ADHIGUNA', 2014, NULL, NULL, 'CHI001', NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0714021', 'MUHAMAD DZAKY A', 2014, 145, 3.09, 'FER001', NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES ('I0714022', 'MUHAMMAD IQBAL', 2014, NULL, NULL, 'MUH015', NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0714023', 'NADYA FARADIBA E', 2014, NULL, NULL, 'AUG001', NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0714024', 'PANJI MUSLIM', 2014, NULL, NULL, 'AUG001', NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0714026', 'RENALDY PURWANTO', 2014, NULL, NULL, 'AUG001', NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0714027', 'REYNALDO HUTAURUK', 2014, NULL, NULL, 'MEI002', NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0714028', 'REZA YUSADIKA PUTRA', 2014, 146, 3.38, 'MEI002', NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES ('I0714029', 'RIO YUAN PALLAFINE', 2014, 148, 3.36, 'FER001', NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES ('I0714030', 'RIZAL ABDUL ROZAQ R', 2014, 146, 3.34, 'CHI001', NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES ('I0714031', 'RIZAL NURHIDAYAT', 2014, NULL, NULL, 'MUH043', NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0714032', 'STEPHANUS HANURJAYA', 2014, 146, 3.37, 'DRM001', NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES ('I0714033', 'ZULHENDRA HANIF', 2014, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0714034', 'DION PUTRA ANUGRAH', 2014, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715001', 'Abyan Habibie', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715002', 'ADITYA NUR FAUZI G', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715003', 'AHMAD SYAH ALJABAR', 2015, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0715004', 'Arif Nuruddin', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715005', 'Arifian Trilaksita', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715006', 'ARIS MAULANA FAUZAN', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715007', 'Arthur Joshua Titus', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715008', 'CESARIUS ADI A K', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715009', 'DWIKI DIMAS SHIDIQ', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715010', 'FARIS IZZATURRAHMAN', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715011', 'FEBRI ABDUL ROHMAN', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715012', 'Ghea Faradiba', 2015, NULL, NULL, NULL, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES ('I0715013', 'Hillga Richman R', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715014', 'JOHAN TRY AFFANDY', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715015', 'Jusuf Abimas Pratama', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715016', 'Kharis Akbar B', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715017', 'Kirana Dyah Utari Ku', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715018', 'LATIF NUR FAUZI', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715019', 'Lia Alvionita', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715020', 'Lia Anjarwati', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715021', 'MOHAMMAD IZZUL MUKHTAR', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715022', 'Muhammad Akmal', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715024', 'Muhammad Fajar Prakasa', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715025', 'Muhammad Gunawan', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715026', 'Muhammad Ramadhan Bagas Purnomo', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715027', 'MUHAMMAD WAHID HASYIM', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715028', 'Mustofa Danang Ariyanto', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715029', 'Oktavian Listiyanto', 2015, NULL, NULL, NULL, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES ('I0715030', 'Ramanda Fadhillah', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715031', 'Ratih Rachmatika', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715032', 'Ryoki Martfuadi', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715033', 'Sifa\'us Wulaning Arsri', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715034', 'Tony Febrianto', 2015, NULL, NULL, NULL, NULL, 'LULUS');
INSERT INTO `mahasiswa` VALUES ('I0715035', 'Wahyu Kurniawan', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715036', 'WAHYU RAHMAT HIDAYAT', 2015, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0715037', 'YAN MAHARDHIKA PUTRA PERDANA', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715038', 'YASMINE AFIFAH', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0715039', 'Zaniar Rickiansyah', 2015, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0715040', 'YUANA AYUB SUNARYA', 2015, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716001', 'ADIP SAFIUDIN', 2016, 107, 3.45, 'AUG001', 'HAR050', 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716002', 'Adrian Seta Ekananda', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716003', 'Afif Yuhendrasmiko', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716004', 'AHMAD IMAM RAUYANI', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716005', 'AMMAR GALIH GUMILANG', 2016, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0716006', 'Annisa Hanifa', 2016, NULL, NULL, NULL, 'IRW001', 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716007', 'Aulia Ramadhani', 2016, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0716008', 'Axel Adam Mahendra', 2016, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0716009', 'AZIS UBAIDILAH', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716010', 'BHADRIKA EVANDITO A', 2016, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0716011', 'BINTANG SUJATMIKO', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716012', 'Daniel Aquino Purba', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716013', 'ERDIAN DWI LAKSANA', 2016, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0716014', 'Fuad Nur Kuncoro', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716015', 'GHUFRON HUSNAN', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716016', 'Henry Probo Santoso', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716017', 'I Wayan Yoga K', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716018', 'Kevin Sebastian', 2016, 107, 3.48, 'DRM001', 'FER001', 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716019', 'Krisna Hakim', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716020', 'MIFTAHUDDIN IRFANI', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716021', 'Mohamad Nisman Falic', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716022', 'Muhammad Amirudin S', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716023', 'MUHAMMAD FAKHRI ERRI', 2016, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0716024', 'MUHAMMAD THARIEQ P', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716025', 'MUHAMMAD ULIL `AZMI', 2016, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0716026', 'Musyaffa\' Ahmad', 2016, NULL, NULL, NULL, NULL, 'HILANG');
INSERT INTO `mahasiswa` VALUES ('I0716027', 'OKI SETIAWAN', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716028', 'Rilo Pambudi Aditya Wardani', 2016, NULL, NULL, 'MEI002', NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716029', 'ROYANI AULIA IHSANTI', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716030', 'SALMAN AL FARISI', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716031', 'TYAN WIDOTOMO', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716032', 'Vernanda S. Z. H', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716033', 'Wiwik Nur Winda', 2016, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0716034', 'YUDHI PRABOWO KUSUMA', 2016, 107, 3.5, 'DRM001', 'MEI002', 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717001', 'ADITYA PRATAMA', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717002', 'AGUNG BUDI UTOMO', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717003', 'AIMMATUL YUMNA ARIVATUL AZRA', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717004', 'Alvin Ichwannur Ridho', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717005', 'ARIF WIBOWO', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717006', 'Athaya Cantia Putri', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717007', 'Attar Al Mufashal Rasyid', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717008', 'Aulia Vici Yunitasari', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717009', 'Bakasrian Fericoari', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717010', 'BANU MAHESWARA', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717011', 'Bayhaqi Irfani', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717012', 'Berlianne Shanaza Andriany', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717013', 'BIMA DAMAR JATI', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717014', 'BINTAR YUDO SADEWO', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717015', 'FAHMI ISMAIL', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717016', 'FAISHAL HANIFAN MA`RUF', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717017', 'GILANG SATRIA AJIE', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717018', 'Hanifah Yulia', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717019', 'HARISNO', 2017, NULL, NULL, NULL, NULL, 'UNDUR DIRI');
INSERT INTO `mahasiswa` VALUES ('I0717020', 'HERWIN JONATHAN NABABAN', 2017, NULL, NULL, NULL, NULL, 'UNDUR DIRI');
INSERT INTO `mahasiswa` VALUES ('I0717021', 'Hisbullah Ahmad Fathoni', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717022', 'IVAN ROBI SEPTIAN', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717023', 'Kevin Dwiyanto Saputra', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717024', 'M. IQBAL ZIDNY', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717025', 'M. MAULANA YUSUF', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717026', 'MOHAMMAD RAIHAN H.', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717027', 'MUHAMMAD AL HAMID', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717028', 'MUHAMMAD IKYU ARQIE RAMADHAN', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717029', 'Muhammad Renaldy Darmawan', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717030', 'Muhammad Rifai', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717031', 'MUHAMMAD RIFYAL ABUBAKAR', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717032', 'MUHAMMAD RIZQI SUBENO', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717033', 'Muhammad Wakhid Wardani', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717034', 'MUHAMMAD YAHYA IZZUDIN', 2017, NULL, NULL, NULL, NULL, 'UNDUR DIRI');
INSERT INTO `mahasiswa` VALUES ('I0717035', 'Nanda Hafidz Rivanda', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717036', 'RAFIQ SATRIA YUDHA', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717037', 'RIFQI PARADISA', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717038', 'RISKI RAMA KUSUMA', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717039', 'Sony Adyatama', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717040', 'Wahyu Aji Rahmantya Soedjono', 2017, NULL, NULL, NULL, NULL, 'UNDUR DIRI');
INSERT INTO `mahasiswa` VALUES ('I0717041', 'Weldino Panji Kurniadi', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0717042', 'YUSUF YAHYA', 2017, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718001', 'ABRAHAM BABTISTIO', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718002', 'AHMAD AZZAM HAFIDZ', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718003', 'ALVIAN AJI PANGESTU', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718004', 'ANDHIKA RIZKITA PUTERA', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718005', 'Annisa Larasati Febrianingrum', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718006', 'CATYA AFIF KASUDYA', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718007', 'Desi Sunyahni', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718008', 'Eri Setiawan', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718009', 'FANDI SURYA ADINATA', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718010', 'Firmansyah Abada', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718011', 'GHOZY ABROR AUFAN', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718012', 'GIBRAN DZULFIKAR GHAFFARA', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718013', 'Hanandya Maya Shafira', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718014', 'HANIF ARDIYOANSYAH', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718015', 'ILHAM GILANG PRADANA', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718016', 'IMAM ARIF', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718017', 'KHILALUL HANIF', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718018', 'M. FATKHI FUTUKHAL ARIFIN', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718019', 'Moh.Adith Setiawan', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718020', 'Mohammad Ravi Rachman', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718021', 'MUHAMAD MIFTAHUS SURUR', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718022', 'MUHAMMAD DIDIN KAMALUDIN', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718023', 'MUHAMMAD GHOZY AL HAKIM', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718024', 'Muhammad Ibnu Sina Abbas Parlin', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718025', 'Nada Syadza Azizah', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718026', 'Nadya Namirasepti Efendi', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718027', 'Nur Udin Galang Ga', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718028', 'OGA SRI LESTYANA', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718029', 'RAIHAN RAFIF KAUTSAR PRIYANTO', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718030', 'RAMADHAN PRIHANTONO', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718031', 'RIZAL MUJADDID IRSYAD', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718032', 'ROIS HASAN MUHAMMAD', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718033', 'RONI TAMADO', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718034', 'SLASH ARTHUR EDI SUMAWANG', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718035', 'Syaifullah Filard L', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718036', 'SYAUQY MAULANAR RAHMAN', 2018, NULL, NULL, NULL, NULL, 'AKTIF');
INSERT INTO `mahasiswa` VALUES ('I0718037', 'TAUFIK WIDYASTAMA', 2018, NULL, NULL, NULL, NULL, 'AKTIF');

-- ----------------------------
-- Table structure for matkul
-- ----------------------------
DROP TABLE IF EXISTS `matkul`;
CREATE TABLE `matkul`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ta` int(15) NULL DEFAULT NULL,
  `nama_matkul` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `kode_matkul` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `ip` float NULL DEFAULT NULL,
  `huruf` varchar(6) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_ta`(`id_ta`) USING BTREE,
  CONSTRAINT `matkul_ibfk_1` FOREIGN KEY (`id_ta`) REFERENCES `ta` (`id_ta`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of matkul
-- ----------------------------
INSERT INTO `matkul` VALUES (13, 18, 'mk1', 'kode1', 4, 'A');
INSERT INTO `matkul` VALUES (14, 18, 'mk2', 'kode2', 3.51, 'A-');
INSERT INTO `matkul` VALUES (15, 18, 'mk3', 'kode3', 3.8, 'A');

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
-- Table structure for pembimbing
-- ----------------------------
DROP TABLE IF EXISTS `pembimbing`;
CREATE TABLE `pembimbing`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_ta` int(15) NULL DEFAULT NULL,
  `pembimbing1` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pembimbing2` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `kode_dosen`(`pembimbing1`) USING BTREE,
  INDEX `id_ta`(`id_ta`) USING BTREE,
  INDEX `pembimbing2`(`pembimbing2`) USING BTREE,
  CONSTRAINT `pembimbing_ibfk_1` FOREIGN KEY (`pembimbing1`) REFERENCES `dosen` (`kode_dosen`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pembimbing_ibfk_2` FOREIGN KEY (`id_ta`) REFERENCES `ta` (`id_ta`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `pembimbing_ibfk_3` FOREIGN KEY (`pembimbing2`) REFERENCES `dosen` (`kode_dosen`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pembimbing
-- ----------------------------
INSERT INTO `pembimbing` VALUES (4, 18, 'SUT034', 'HAR050');

-- ----------------------------
-- Table structure for peminatan
-- ----------------------------
DROP TABLE IF EXISTS `peminatan`;
CREATE TABLE `peminatan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `angkatan` int(10) NULL DEFAULT NULL,
  `kode` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `nama_peminatan` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `kode`(`kode`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of peminatan
-- ----------------------------
INSERT INTO `peminatan` VALUES (1, 2016, 'SEL', 'Sistem Energi Listrik');
INSERT INTO `peminatan` VALUES (2, 2016, 'MEKA', 'Mekatronika');
INSERT INTO `peminatan` VALUES (3, 2016, 'SIE', 'Sistem Isyarat dan Elektronika');
INSERT INTO `peminatan` VALUES (4, 2016, 'SKI', 'Sistem Komputer dan Informasi');
INSERT INTO `peminatan` VALUES (5, 2015, 'SEL', 'Sistem Energi Listrik');
INSERT INTO `peminatan` VALUES (6, 2015, 'MEKA', 'Mekatronika');
INSERT INTO `peminatan` VALUES (7, 2015, 'SIE', 'Sistem Isyarat dan Elektronika');
INSERT INTO `peminatan` VALUES (8, 2015, 'SKI', 'Sistem Komputer dan Informasi');
INSERT INTO `peminatan` VALUES (9, 2014, 'SEL', 'Sistem Energi Listrik');
INSERT INTO `peminatan` VALUES (10, 2014, 'MEKA', 'Mekatronika');
INSERT INTO `peminatan` VALUES (11, 2014, 'SIE', 'Sistem Isyarat dan Elektronika');
INSERT INTO `peminatan` VALUES (12, 2014, 'SKI', 'Sistem Komputer dan Informasi');
INSERT INTO `peminatan` VALUES (13, 2017, 'SEL', 'Sistem Energi Listrik');
INSERT INTO `peminatan` VALUES (14, 2017, 'MEKA', 'Mekatronika');
INSERT INTO `peminatan` VALUES (15, 2017, 'SIE', 'Sistem Isyarat dan Elektronika');
INSERT INTO `peminatan` VALUES (16, 2017, 'SKI', 'Sistem Komputer dan Informasi');
INSERT INTO `peminatan` VALUES (17, 2018, 'SEL', 'Sistem Energi Listrik');
INSERT INTO `peminatan` VALUES (18, 2018, 'MEKA', 'Mekatronika');
INSERT INTO `peminatan` VALUES (19, 2018, 'SIE', 'Sistem Isyarat dan Elektronika');
INSERT INTO `peminatan` VALUES (20, 2018, 'SKI', 'Sistem Komputer dan Informasi');

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
  `nama_ruang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
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
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of seminar_kpp
-- ----------------------------
INSERT INTO `seminar_kpp` VALUES (1, 1, 'Sewadaya Site', '2019-06-07', '13:35:44', '14:35:47', 1, 'TOLAK');
INSERT INTO `seminar_kpp` VALUES (5, 2, 'Sewadaya Site PT. Telkomsel Smart Office', '2019-06-29', '01:38:00', '02:38:00', 2, 'SETUJU');

-- ----------------------------
-- Table structure for seminar_ta
-- ----------------------------
DROP TABLE IF EXISTS `seminar_ta`;
CREATE TABLE `seminar_ta`  (
  `id_seminar` int(15) NOT NULL AUTO_INCREMENT,
  `id_ta` int(15) NOT NULL,
  `tanggal` date NOT NULL,
  `tempat` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jam_mulai` time(0) NOT NULL,
  `jam_selesai` time(0) NOT NULL,
  `status_seminar` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_seminar`) USING BTREE,
  INDEX `id_ta`(`id_ta`) USING BTREE,
  CONSTRAINT `seminar_ta_ibfk_1` FOREIGN KEY (`id_ta`) REFERENCES `ta` (`id_ta`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of seminar_ta
-- ----------------------------
INSERT INTO `seminar_ta` VALUES (1, 18, '2019-06-28', 'Ruang 1', '12:00:00', '13:30:00', 'PENDING');

-- ----------------------------
-- Table structure for ta
-- ----------------------------
DROP TABLE IF EXISTS `ta`;
CREATE TABLE `ta`  (
  `id_ta` int(15) NOT NULL AUTO_INCREMENT,
  `nim_mhs` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `judul` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `abstrak` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `tgl_pengajuan` date NULL DEFAULT NULL,
  `status_ta` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `kode_peminatan` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id_ta`) USING BTREE,
  INDEX `nim_mhs`(`nim_mhs`) USING BTREE,
  INDEX `kode_peminatan`(`kode_peminatan`) USING BTREE,
  CONSTRAINT `ta_ibfk_1` FOREIGN KEY (`nim_mhs`) REFERENCES `mahasiswa` (`nim`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `ta_ibfk_2` FOREIGN KEY (`kode_peminatan`) REFERENCES `peminatan` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of ta
-- ----------------------------
INSERT INTO `ta` VALUES (18, 'I0716001', 'Implementasi Raspberry Pi untuk Keamanan dengan Pengenalan Wajah dan Sidik Jari', 'ini abstrak', '2019-06-27', 'PENDING', 2);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(2) NULL DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'User', '', 'user@gmail.com', NULL, '$2y$10$H5lplSB6JH.buWRRTgWyyOC6k91eeygfa2ZQuBQsHl3sU4jcYnxBK', 1, NULL, '2019-05-22 17:06:13', '2019-05-22 17:06:13');
INSERT INTO `users` VALUES (2, 'Admin', '', 'admin@gmail.com', NULL, '$2y$10$sfNZI7jaQ1V49UO9/5.W3e7Bba3aK9Sa37yjmSQ3d/CXyAhPYqLgW', 2, NULL, '2019-06-12 20:07:19', '2019-06-12 20:07:22');
INSERT INTO `users` VALUES (3, 'AdminKP', '', 'adminkp@gmail.com', NULL, '$2y$10$.9ViThRyZIxBQPeQheLGGOYRB9U6FcAAWbeQv16WNahjYSLjsBqOC', 3, NULL, '2019-06-13 00:40:25', '2019-06-13 00:40:28');
INSERT INTO `users` VALUES (4, 'AdminTA', '', 'adminta@gmail.com', NULL, '$2y$10$607szHy0WQhyBlOC9z7Dd.WSYdKSiOVDwv2GKAwM8d1ltF7NiEiUW', 4, NULL, '2019-06-13 00:40:52', '2019-06-13 00:40:54');
INSERT INTO `users` VALUES (5, 'Dosen', '', 'dosen@gmail.com', NULL, '$2y$10$dUpJDD3p2VhSeF4XjFy/.eZ9HfOMMIl26Iba3km.J6OiKhLYd/u4K', 5, NULL, '2019-06-13 00:41:12', '2019-06-13 00:41:15');
INSERT INTO `users` VALUES (6, 'Kevin Sebastian', 'I0716018', 'kevin@gmail.com', NULL, '$2y$10$BOuqAGYbl.scnP9y9kuT8.TyhWdO.L0OBh5NzlNB6iQ2LUEl6uZxC', 1, NULL, '2019-06-19 23:41:48', '2019-06-19 23:41:51');
INSERT INTO `users` VALUES (7, 'Yudhi Kusuma', 'I0716034', 'yudhi@gmail.com', NULL, '$2y$10$dYXD6atlRz7d8AIy57jhy.GVl7tnmwfTlBroSNQfTlrZ1EOd0ysXe', 1, NULL, '2019-06-19 12:37:17', '2019-06-19 12:37:17');
INSERT INTO `users` VALUES (8, 'Adip Safiudin', 'I0716001', 'adip@gmail.com', NULL, '$2y$10$3bpoyRNnqs01V0ihPEObjeHnW9LVBPteeHIAdKJitdLbLo1eKTh2.', 1, NULL, '2019-06-19 12:39:36', '2019-06-19 12:39:36');
INSERT INTO `users` VALUES (9, 'Raihan', 'I0717005', 'raihan@gmail.com', NULL, '$2y$10$GzcIROkvPvGcPoepHZplvOB/IlP5/dj5JzxlHFIlilA6MOHpxVoRa', 1, NULL, '2019-06-20 07:16:51', '2019-06-20 07:16:51');
INSERT INTO `users` VALUES (10, 'Annisa Hanifa', 'I0716006', 'annisa@gmail.com', NULL, '$2y$10$RcpsuZcoN.2VH4aYn00tzOs/aYyP.eeEdB2/5fkG5DahOQBqp/VUa', 1, NULL, '2019-06-26 05:21:28', '2019-06-26 05:21:28');

SET FOREIGN_KEY_CHECKS = 1;
