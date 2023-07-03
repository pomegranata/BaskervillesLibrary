/*
Navicat MySQL Data Transfer

Source Server         : koneksi
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ta

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2023-07-03 12:06:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `barang`
-- ----------------------------
DROP TABLE IF EXISTS `barang`;
CREATE TABLE `barang` (
  `No` int(15) NOT NULL AUTO_INCREMENT,
  `Barcode` varchar(15) NOT NULL,
  `Nama` text NOT NULL,
  `Penulis` text NOT NULL,
  `Jenis` varchar(15) NOT NULL DEFAULT '',
  `Tahun` varchar(15) NOT NULL DEFAULT '',
  `Stok` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`No`,`Barcode`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of barang
-- ----------------------------
INSERT INTO `barang` VALUES ('1', '1118', 'Wuthering Heights', 'Emily Bronte', 'Novel', '1847', '20');
INSERT INTO `barang` VALUES ('2', '1111', 'Keajaiban Toko Kelontong Namiya', 'Keigo Higashino', 'Novel', '2020', '35');
INSERT INTO `barang` VALUES ('3', '1115', 'Fundamental of Python for Machine Learning', 'Teguh Wahyono', 'Komputer', '2018', '44');
INSERT INTO `barang` VALUES ('4', '1112', 'Kierkegaard dan Pergulatan Menjadi Diri Sendiri', 'Thomas Hidya Tjaya', 'Filsafat', '2004', '80');
INSERT INTO `barang` VALUES ('5', '1114', 'World War II Plans That Never Happened', 'Michael Kerrigan', 'Sejarah', '2012', '21');
INSERT INTO `barang` VALUES ('6', '1113', 'H2O Reborn Phase 0.1', 'Kolam Komik', 'Komik', '2016', '10');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of peminjaman
-- ----------------------------
INSERT INTO `peminjaman` VALUES ('1', 'John', 'Wuthering Heights', 'Emily Bronte', 'Mizan Classic', '2023-06-29', '2023-07-02');
INSERT INTO `peminjaman` VALUES ('2', 'Dea', 'Wuthering Heights', 'Emily Bronte', 'Mizan Classic', '2023-06-29', '2023-07-02');
INSERT INTO `peminjaman` VALUES ('3', 'Will', 'Fundamental of Python for Machine Learning', 'Teguh Wahyono', 'Gava Media', '2023-07-03', '2023-07-06');

-- ----------------------------
-- Table structure for `satuan`
-- ----------------------------
DROP TABLE IF EXISTS `satuan`;
CREATE TABLE `satuan` (
  `No` int(15) NOT NULL AUTO_INCREMENT,
  `Jenis` varchar(15) NOT NULL,
  PRIMARY KEY (`No`,`Jenis`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of satuan
-- ----------------------------
INSERT INTO `satuan` VALUES ('1', 'Novel');
INSERT INTO `satuan` VALUES ('2', 'Komputer');
INSERT INTO `satuan` VALUES ('3', 'Filsafat');
INSERT INTO `satuan` VALUES ('4', 'Sejarah');
INSERT INTO `satuan` VALUES ('5', 'Komik');

-- ----------------------------
-- Table structure for `supplier`
-- ----------------------------
DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier` (
  `No` int(15) NOT NULL AUTO_INCREMENT,
  `Barcode` varchar(15) NOT NULL,
  `Penerbit` text NOT NULL,
  `Buku` text NOT NULL,
  `Alamat` text NOT NULL,
  `Telepon` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`No`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of supplier
-- ----------------------------
INSERT INTO `supplier` VALUES ('1', '1118', 'Mizan Classic', 'Wuthering Heights', 'Jl. Joe No. 11 Jagakarsa, Jakarta Selatan', '+6285781817817');
INSERT INTO `supplier` VALUES ('2', '1111', 'Gramedia', 'Keajaiban Toko Kelontong Namiya', 'Gedung Kompas Gramedia, Jakarta', '(021) 53650110');
INSERT INTO `supplier` VALUES ('3', '1115', 'Gava Media', 'Fundamental of Python for Machine Learning', 'Jl. Klitren Lor, Kota Yogyakarta, DIY', '(0274) 558502');
INSERT INTO `supplier` VALUES ('4', '1112', 'KPG', 'Kierkegaard dan Pergulatan Menjadi Diri Sendiri', 'Gedung Kompas Gramedia, Jakarta', '02153650110');
INSERT INTO `supplier` VALUES ('5', '1114', 'Kompas', 'World War II Plans That Never Happened', 'Gedung Kompas Gramedia, Jakarta', '(021) 53670882');
INSERT INTO `supplier` VALUES ('6', '1113', 'M&C', 'H2O Reborn Phase 0.1', 'Gedung Kompas Gramedia, Jakarta', '02153670882');

-- ----------------------------
-- Table structure for `t_user`
-- ----------------------------
DROP TABLE IF EXISTS `t_user`;
CREATE TABLE `t_user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of t_user
-- ----------------------------
INSERT INTO `t_user` VALUES ('user2', '2');
