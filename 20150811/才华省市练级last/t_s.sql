/*
Navicat MySQL Data Transfer

Source Server         : student
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : text_01

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2015-08-11 16:23:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `t_s`
-- ----------------------------
DROP TABLE IF EXISTS `t_s`;
CREATE TABLE `t_s` (
  `id` int(11) DEFAULT NULL,
  `s` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`s`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of t_s
-- ----------------------------
INSERT INTO `t_s` VALUES ('1', '哈尔滨');
INSERT INTO `t_s` VALUES ('2', '山西1');
INSERT INTO `t_s` VALUES ('2', '山西2');
INSERT INTO `t_s` VALUES ('2', '山西3');
INSERT INTO `t_s` VALUES ('1', '黑河');
INSERT INTO `t_s` VALUES ('1', '齐齐哈尔');
