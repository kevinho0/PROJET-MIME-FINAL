/*
Navicat MySQL Data Transfer

Source Server         : BD
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : l3mime

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-05-14 11:29:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `affectation`
-- ----------------------------
DROP TABLE IF EXISTS `affectation`;
CREATE TABLE `affectation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idEns` int(255) DEFAULT NULL,
  `idFil` int(255) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of affectation
-- ----------------------------

-- ----------------------------
-- Table structure for `enseignant`
-- ----------------------------
DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE `enseignant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of enseignant
-- ----------------------------

-- ----------------------------
-- Table structure for `filiere`
-- ----------------------------
DROP TABLE IF EXISTS `filiere`;
CREATE TABLE `filiere` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of filiere
-- ----------------------------

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `motPasse` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'UTILISATEUR', 'GEST', '0606060606', 'admin@gest-univ.fr', '$2a$10$5bde55bda67cc427988ffOxgLBkcpHly6nwYiS3xaP7ylTr21p9UK', '1');
