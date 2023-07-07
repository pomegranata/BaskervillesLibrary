/*
Navicat MySQL Data Transfer

Source Server         : koneksi
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ta

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-07-07 08:24:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `buku`
-- ----------------------------
DROP TABLE IF EXISTS `buku`;
CREATE TABLE `buku` (
  `No` int(15) NOT NULL AUTO_INCREMENT,
  `Barcode` varchar(15) NOT NULL,
  `Nama` text NOT NULL,
  `Penulis` text NOT NULL,
  `Jenis` varchar(15) NOT NULL DEFAULT '',
  `Tahun` varchar(15) NOT NULL DEFAULT '',
  `Stok` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`No`,`Barcode`),
  KEY `Barcode` (`Barcode`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of buku
-- ----------------------------
INSERT INTO `buku` VALUES ('1', '1118', 'Wuthering Heights', 'Emily Bronte', 'Novel', '1847', '20');
INSERT INTO `buku` VALUES ('2', '1111', 'Keajaiban Toko Kelontong Namiya', 'Keigo Higashino', 'Novel', '2020', '35');
INSERT INTO `buku` VALUES ('3', '1115', 'Fundamental of Python for Machine Learning', 'Teguh Wahyono', 'Komputer', '2018', '44');
INSERT INTO `buku` VALUES ('4', '1112', 'Kierkegaard dan Pergulatan Menjadi Diri Sendiri', 'Thomas Hidya Tjaya', 'Filsafat', '2004', '80');
INSERT INTO `buku` VALUES ('5', '1114', 'World War II Plans That Never Happened', 'Michael Kerrigan', 'Sejarah', '2012', '21');
INSERT INTO `buku` VALUES ('6', '1113', 'H2O Reborn Phase 0.1', 'Sweta Kartika', 'Komik', '2016', '10');
INSERT INTO `buku` VALUES ('7', '1116', 'Demian', 'Hermann Hesse', 'Novel', '2019', '55');
INSERT INTO `buku` VALUES ('8', '1119', 'Kastil', 'Franz Kafka', 'Novel', '2018', '56');
INSERT INTO `buku` VALUES ('9', '1110', 'Sherlock Holmes: A Study in Scarlet', 'Arthur Conan Doyle', 'Novel', '2019', '100');
INSERT INTO `buku` VALUES ('10', '1101', 'Nietzsche', 'EMHAF', 'Sosial', '2017', '34');
INSERT INTO `buku` VALUES ('11', '0001', 'Ego is The Enemy', 'Ryan Holiday', 'Self-Improvemen', '2019', '90');

-- ----------------------------
-- Table structure for `jenis`
-- ----------------------------
DROP TABLE IF EXISTS `jenis`;
CREATE TABLE `jenis` (
  `No` int(15) NOT NULL AUTO_INCREMENT,
  `Jenis` varchar(15) NOT NULL,
  PRIMARY KEY (`No`,`Jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of jenis
-- ----------------------------
INSERT INTO `jenis` VALUES ('1', 'Novel');
INSERT INTO `jenis` VALUES ('2', 'Komputer');
INSERT INTO `jenis` VALUES ('3', 'Filsafat');
INSERT INTO `jenis` VALUES ('4', 'Sejarah');
INSERT INTO `jenis` VALUES ('5', 'Komik');
INSERT INTO `jenis` VALUES ('6', 'Biografi');
INSERT INTO `jenis` VALUES ('7', 'Sosial');
INSERT INTO `jenis` VALUES ('8', 'Self-Improvemen');

-- ----------------------------
-- Table structure for `peminjaman`
-- ----------------------------
DROP TABLE IF EXISTS `peminjaman`;
CREATE TABLE `peminjaman` (
  `No` int(15) NOT NULL AUTO_INCREMENT,
  `Nama` text NOT NULL,
  `Judul` text NOT NULL,
  `Penulis` text NOT NULL,
  `Penerbit` text NOT NULL,
  `Pinjam` date NOT NULL,
  `Kembali` date NOT NULL,
  PRIMARY KEY (`No`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of peminjaman
-- ----------------------------
INSERT INTO `peminjaman` VALUES ('1', 'John', 'Wuthering Heights', 'Emily Bronte', 'Mizan Classic', '2023-06-29', '2023-07-02');
INSERT INTO `peminjaman` VALUES ('2', 'Dea', 'Wuthering Heights', 'Emily Bronte', 'Mizan Classic', '2023-06-29', '2023-07-02');
INSERT INTO `peminjaman` VALUES ('3', 'Will', 'Fundamental of Python for Machine Learning', 'Teguh Wahyono', 'Gava Media', '2023-07-03', '2023-07-06');
INSERT INTO `peminjaman` VALUES ('4', 'Sinclair', 'Demian', 'Hermann Hesse', 'Semicolon', '2023-07-03', '2023-07-06');
INSERT INTO `peminjaman` VALUES ('5', 'Kara', 'World War II Plans That Never Happened', 'Michael Kerrigan', 'Kompas', '2023-07-04', '2023-07-07');
INSERT INTO `peminjaman` VALUES ('6', 'July', 'H2O Reborn Phase 0.1', 'Sweta Kartika', 'Kolam Komik', '2023-07-04', '2023-07-07');
INSERT INTO `peminjaman` VALUES ('7', 'Feri', 'Demian', 'Hermann Hesse', 'Semicolon', '2023-07-04', '2023-07-07');
INSERT INTO `peminjaman` VALUES ('8', 'Wulan', 'Keajaiban Toko Kelontong Namiya', 'Keigo Higashino', 'Gramedia', '2023-07-04', '2023-07-07');
INSERT INTO `peminjaman` VALUES ('9', 'Sandayu', 'Demian', 'Hermann Hesse', 'Semicolon', '2023-07-04', '2023-07-07');
INSERT INTO `peminjaman` VALUES ('10', 'Hilman', 'Fundamental of Python for Machine Learning', 'Teguh Wahyono', 'Gava Media', '2023-07-04', '2023-07-07');
INSERT INTO `peminjaman` VALUES ('11', 'Hilman', 'Keajaiban Toko Kelontong Namiya', 'Keigo Higashino', 'Gramedia', '2023-07-04', '2023-07-07');
INSERT INTO `peminjaman` VALUES ('12', 'Faza', 'Kierkegaard dan Pergulatan Menjadi Diri Sendiri', 'Thomas Hidya Tjaya', 'KPG', '2023-07-04', '2023-07-07');
INSERT INTO `peminjaman` VALUES ('13', 'Aktiva', 'Nietzsche', 'EMHAF', 'SOCIALITY', '2023-07-06', '2023-07-09');

-- ----------------------------
-- Table structure for `penerbit`
-- ----------------------------
DROP TABLE IF EXISTS `penerbit`;
CREATE TABLE `penerbit` (
  `No` int(15) NOT NULL AUTO_INCREMENT,
  `Barcode` varchar(15) NOT NULL,
  `Penerbit` text NOT NULL,
  `Buku` text NOT NULL,
  `Alamat` text NOT NULL,
  `Telepon` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`No`),
  KEY `Barcode` (`Barcode`),
  CONSTRAINT `Barcode` FOREIGN KEY (`Barcode`) REFERENCES `buku` (`Barcode`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of penerbit
-- ----------------------------
INSERT INTO `penerbit` VALUES ('1', '1118', 'Mizan Classic', 'Wuthering Heights', 'Jl. Joe No. 11 Jagakarsa, Jakarta Selatan', '+6285781817817');
INSERT INTO `penerbit` VALUES ('2', '1111', 'Gramedia', 'Keajaiban Toko Kelontong Namiya', 'Gedung Kompas Gramedia, Jakarta', '(021) 53650110');
INSERT INTO `penerbit` VALUES ('3', '1115', 'Gava Media', 'Fundamental of Python for Machine Learning', 'Jl. Klitren Lor, Kota Yogyakarta, DIY', '(0274) 558502');
INSERT INTO `penerbit` VALUES ('4', '1112', 'KPG', 'Kierkegaard dan Pergulatan Menjadi Diri Sendiri', 'Gedung Kompas Gramedia, Jakarta', '02153650110');
INSERT INTO `penerbit` VALUES ('5', '1114', 'Kompas', 'World War II Plans That Never Happened', 'Gedung Kompas Gramedia, Jakarta', '(021) 53670882');
INSERT INTO `penerbit` VALUES ('6', '1113', 'Kolam Komik', 'H2O Reborn Phase 0.1', 'Gedung Kompas Gramedia, Jakarta', '02153670882');
INSERT INTO `penerbit` VALUES ('7', '1116', 'Semicolon', 'Demian', 'Cibinong, Bogor', '@semicolonian');
INSERT INTO `penerbit` VALUES ('8', '1101', 'SOCIALITY', 'Nietzsche', 'Sewon, Bantul', '(0274) 37944');
INSERT INTO `penerbit` VALUES ('9', '0001', 'Elex Media', 'Ego is The Enemy', 'Kompas Gramedia, Gramedia Jl. Palmerah Sel. No.26, RT.4/RW.2, Gelora, Tanah Abang, Central Jakarta C', '02153670882');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('user2', '2');
INSERT INTO `user` VALUES ('user3', '3');
