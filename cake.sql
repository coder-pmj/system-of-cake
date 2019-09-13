/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 80015
Source Host           : localhost:3306
Source Database       : cake

Target Server Type    : MYSQL
Target Server Version : 80015
File Encoding         : 65001

Date: 2019-06-08 15:42:31
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `picture` longblob,
  `description` varchar(255) DEFAULT NULL,
  `del` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO product VALUES ('2', '三层玫瑰奶油蛋糕', '$200.00', 0x696D616765732F6D312E706E67, '[15% Off]', '$230.00');
INSERT INTO product VALUES ('4', '巧克力蛋糕1', '$400.00', 0x696D616765732F6D322E706E67, '[15% Off]', '$430.00');
INSERT INTO product VALUES ('6', '小清新蛋糕', '$180.00', 0x696D616765732F6D332E706E67, '[15% Off]', '$230.00');
INSERT INTO product VALUES ('8', '奥利奥蛋糕', '$120.00', 0x696D616765732F6D342E706E67, '[15% Off]', '$150.00');
INSERT INTO product VALUES ('10', '粉色蛋糕', '$50.00', 0x696D616765732F6D352E706E67, '[15% Off]', '$70.00');
INSERT INTO product VALUES ('12', '混合水果蛋糕1', '$320.00', 0x696D616765732F6D362E706E67, '[15% Off]', '$350.00');
INSERT INTO product VALUES ('14', '心形玫瑰蛋糕', '$200.00', 0x696D616765732F6D372E706E67, '[15% Off]', '$230.00');
INSERT INTO product VALUES ('16', '正方形蛋糕', '$220.00', 0x696D616765732F6D382E706E67, '[15% Off]', '$260.00');
INSERT INTO product VALUES ('18', '下午茶小糕点', '$50.00', 0x696D616765732F6D392E706E67, '[15% Off]', '$130.00');

-- ----------------------------
-- Table structure for `producta`
-- ----------------------------
DROP TABLE IF EXISTS `producta`;
CREATE TABLE `producta` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `picture` longblob,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of producta
-- ----------------------------
INSERT INTO producta VALUES ('1', 'Yummy Cakes for u', null, 0x696D616765732F322E706E67, '我们用心做一个蛋糕只为您的美好体验');
INSERT INTO producta VALUES ('2', '巧克力蛋糕', '$95.00', 0x696D616765732F67312E6A7067, null);
INSERT INTO producta VALUES ('3', '3层奶油蛋糕', '$295.00', 0x696D616765732F67322E6A7067, null);
INSERT INTO producta VALUES ('4', '卡通蛋糕', '$185.00', 0x696D616765732F67332E706E67, null);
INSERT INTO producta VALUES ('5', '3层巧克力蛋糕', '$895.00', 0x696D616765732F67342E706E67, null);
INSERT INTO producta VALUES ('6', '香草蛋糕', '$895.00', 0x696D616765732F67352E706E67, null);
INSERT INTO producta VALUES ('7', '少女心爆棚的奶油蛋糕', '$220.00', 0x696D616765732F67362E706E67, null);
INSERT INTO producta VALUES ('8', '圆形两层巧克力蛋糕', '$395.00', 0x696D616765732F67372E706E67, null);
INSERT INTO producta VALUES ('9', '心形香草玫瑰花蛋糕', '$595.00', 0x696D616765732F67382E706E67, null);
INSERT INTO producta VALUES ('10', '草莓提拉米苏蛋糕', '$195.00', 0x696D616765732F67392E706E67, null);
INSERT INTO producta VALUES ('11', '巧克力下午茶小蛋糕', '$45.00', 0x696D616765732F6731302E706E67, null);

-- ----------------------------
-- Table structure for `single`
-- ----------------------------
DROP TABLE IF EXISTS `single`;
CREATE TABLE `single` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `picture` longblob,
  `acount` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of single
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO user VALUES ('1', 'admin', 'admin', '1998-03-05 18:43:52');
