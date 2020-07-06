/*
Navicat MySQL Data Transfer

Source Server         : my sql
Source Server Version : 100316
Source Host           : localhost:3306
Source Database       : kuro_pos

Target Server Type    : MYSQL
Target Server Version : 100316
File Encoding         : 65001

Date: 2020-07-06 13:04:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_category
-- ----------------------------
DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) DEFAULT NULL,
  `id_toko` int(11) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_category
-- ----------------------------
INSERT INTO `tbl_category` VALUES ('1', 'ramen', '2');
INSERT INTO `tbl_category` VALUES ('2', 'nasi', '2');
INSERT INTO `tbl_category` VALUES ('7', 'minuman', '2');
INSERT INTO `tbl_category` VALUES ('8', 'snack', '2');

-- ----------------------------
-- Table structure for tbl_menu
-- ----------------------------
DROP TABLE IF EXISTS `tbl_menu`;
CREATE TABLE `tbl_menu` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(50) DEFAULT NULL,
  `menu_image` varchar(255) DEFAULT NULL,
  `menu_harga` int(11) DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  `is_available` tinyint(1) DEFAULT 1,
  `id_toko` int(11) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_menu
-- ----------------------------
INSERT INTO `tbl_menu` VALUES ('1', 'chicken ramen', 'M20200618050811497.jpg', '40000', '1', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('2', 'Beef Ramen', 'M20200618050225668.jpg', '45000', '1', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('3', 'jamur enoki crispy', 'M20200618051048137.jpg', '15000', '8', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('4', 'es jeruk peras', 'M20200618051100758.jpg', '15000', '7', '0', '0', '2');
INSERT INTO `tbl_menu` VALUES ('5', 'es kopi gula aren', 'M20200618051114445.jpg', '20000', '7', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('6', 'es teh manis', 'M20200618051127636.jpg', '10000', '7', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('7', 'es teh tarik', 'M2020061805114088.jpg', '12000', '7', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('8', 'es kopi latte', 'M20200618051156547.jpg', '15000', '7', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('9', 'es lemon tea', 'M20200618051242481.jpg', '15000', '7', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('10', 'jamur crispy', 'M20200618051810274.jpg', '15000', '8', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('11', 'katsu ramen', 'M20200618051825749.jpeg', '40000', '1', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('12', 'kentang goreng', 'M20200618051840505.jpg', '15000', '8', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('13', 'miso karaage ramen', 'M20200618051901442.jpg', '40000', '1', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('14', 'nasi ayam sambal matah', 'M20200618051916885.jpg', '25000', '2', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('15', 'nasi ayam suir', 'M20200618051930694.jpg', '25000', '2', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('16', 'nasi beef teriyaki', 'M20200618051944648.jpg', '30000', '2', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('17', 'nasi cumi hitam', 'M20200618051957945.jpg', '30000', '2', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('18', 'nasi goreng bowl', 'M20200618052018837.jpg', '25000', '2', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('19', 'nasi udah crispy', 'M20200618052032519.jpg', '30000', '2', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('20', 'ramen rumput laut', 'M2020061805204960.jpg', '40000', '1', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('21', 'roti bakar', 'M20200618052102672.jpg', '15000', '8', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('22', 'spicy shoyu ramen', 'M20200618052116389.jpg', '40000', '1', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('23', 'ramen tahu', 'M20200618052129516.jpg', '30000', '1', '0', '1', '2');
INSERT INTO `tbl_menu` VALUES ('24', 'udon tempura ramen', 'M20200618052142565.jpg', '40000', '1', '0', '1', '2');

-- ----------------------------
-- Table structure for tbl_toko
-- ----------------------------
DROP TABLE IF EXISTS `tbl_toko`;
CREATE TABLE `tbl_toko` (
  `toko_id` int(11) NOT NULL AUTO_INCREMENT,
  `toko_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`toko_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_toko
-- ----------------------------
INSERT INTO `tbl_toko` VALUES ('2', 'Ramen Ichiraku');
INSERT INTO `tbl_toko` VALUES ('6', 'Rumah makan bakau');

-- ----------------------------
-- Table structure for tbl_transaksi
-- ----------------------------
DROP TABLE IF EXISTS `tbl_transaksi`;
CREATE TABLE `tbl_transaksi` (
  `transaksi_id` int(11) NOT NULL AUTO_INCREMENT,
  `transaksi_no` varchar(255) DEFAULT NULL,
  `transaksi_status` tinyint(1) DEFAULT 0 COMMENT '0 = new, 1 = paid, 2 = clear',
  `transaksi_tanggal` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  `transaksi_atasnama` varchar(50) DEFAULT NULL,
  `id_toko` int(11) DEFAULT NULL,
  PRIMARY KEY (`transaksi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_transaksi
-- ----------------------------
INSERT INTO `tbl_transaksi` VALUES ('1', '20000000001', '0', '2020-07-06 20:44:12', '3', '0', 'budi', '2');
INSERT INTO `tbl_transaksi` VALUES ('3', '20000000002', '0', '2020-07-03 20:50:08', '2', '0', 'bambang', '2');
INSERT INTO `tbl_transaksi` VALUES ('4', '20000000003', '2', '2020-07-03 20:50:08', '2', '0', 'mahfud', '2');

-- ----------------------------
-- Table structure for tbl_transaksi_detail
-- ----------------------------
DROP TABLE IF EXISTS `tbl_transaksi_detail`;
CREATE TABLE `tbl_transaksi_detail` (
  `transaksi_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_transaksi` int(11) DEFAULT 0,
  `id_menu` int(11) DEFAULT NULL,
  `transaksi_detail_nama` varchar(50) DEFAULT NULL,
  `transaksi_detail_harga` int(11) DEFAULT NULL,
  `transaksi_detail_status` tinyint(1) DEFAULT 1 COMMENT '1 = new, 2 = proses, 3 = served',
  `transaksi_detail_image` varchar(255) DEFAULT NULL,
  `transaksi_detail_note` text DEFAULT NULL,
  `transaksi_detail_jumlah` int(11) DEFAULT NULL,
  `transaksi_detail_ready` tinyint(4) DEFAULT 0 COMMENT '0 = menu ada, 1 = tidak ada',
  PRIMARY KEY (`transaksi_detail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_transaksi_detail
-- ----------------------------
INSERT INTO `tbl_transaksi_detail` VALUES ('1', '1', '4', 'es jeruk peras', '15000', '1', 'M20200618051100758.jpg', '', '1', '1');
INSERT INTO `tbl_transaksi_detail` VALUES ('2', '1', '14', 'nasi ayam sambal matah', '25000', '2', 'M20200618051916885.jpg', '', '1', '0');
INSERT INTO `tbl_transaksi_detail` VALUES ('3', '1', '1', 'chicken ramen', '40000', '1', 'M20200618050811497.jpg', '', '1', '0');
INSERT INTO `tbl_transaksi_detail` VALUES ('4', '3', '14', 'nasi ayam sambal matah', '25000', '1', 'M20200618051916885.jpg', '1', '1', '0');
INSERT INTO `tbl_transaksi_detail` VALUES ('5', '3', '15', 'nasi ayam suir', '25000', '1', 'M20200618051930694.jpg', '', '1', '0');
INSERT INTO `tbl_transaksi_detail` VALUES ('6', '4', '1', 'chicken ramen', '40000', '1', 'M20200618050811497.jpg', 'test', '1', '0');

-- ----------------------------
-- Table structure for tbl_user
-- ----------------------------
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT '',
  `password` varchar(50) DEFAULT '',
  `user_status` tinyint(1) DEFAULT NULL COMMENT '0 => table,1 => kasir,2 => dapur, 3=> manager, 4=> super',
  `user_name` varchar(50) DEFAULT '',
  `id_toko` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_user
-- ----------------------------
INSERT INTO `tbl_user` VALUES ('1', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '4', 'Admin', '2');
INSERT INTO `tbl_user` VALUES ('2', 'kasir', 'e10adc3949ba59abbe56e057f20f883e', '1', 'Kasirnya', '2');
INSERT INTO `tbl_user` VALUES ('3', 'meja1', 'e10adc3949ba59abbe56e057f20f883e', '0', 'Meja 1', '2');
INSERT INTO `tbl_user` VALUES ('4', 'meja2', 'e10adc3949ba59abbe56e057f20f883e', '0', 'Meja 2', '2');
INSERT INTO `tbl_user` VALUES ('5', 'meja3', 'e10adc3949ba59abbe56e057f20f883e', '0', 'Meja 3', '2');
INSERT INTO `tbl_user` VALUES ('6', 'dapur', 'e10adc3949ba59abbe56e057f20f883e', '2', 'Dapur', '2');
INSERT INTO `tbl_user` VALUES ('7', 'bakau', 'e10adc3949ba59abbe56e057f20f883e', '4', 'Rumahmakan bakau', '6');
INSERT INTO `tbl_user` VALUES ('8', 'mejajaja', 'e10adc3949ba59abbe56e057f20f883e', '0', 'meja', '6');
SET FOREIGN_KEY_CHECKS=1;
