/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : cm3028_2

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2015-12-18 12:45:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for adventure
-- ----------------------------
DROP TABLE IF EXISTS `adventure`;
CREATE TABLE `adventure` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `description` text,
  `by_id` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `date` datetime DEFAULT NULL,
  `tags` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of adventure
-- ----------------------------
INSERT INTO `adventure` VALUES ('2', 'test', '1', 'test adventure', '21', '1', '2015-12-16 18:09:42', null);
INSERT INTO `adventure` VALUES ('3', 'test', '8', 'venture Description', '21', '1', '2015-12-16 18:11:09', null);
INSERT INTO `adventure` VALUES ('4', 'test', '8', 'venture Description', '21', '1', '2015-12-16 18:11:27', null);
INSERT INTO `adventure` VALUES ('5', 'test', '8', 'venture Description', '21', '1', '2015-12-16 18:11:40', null);
INSERT INTO `adventure` VALUES ('6', 'test', '1', 'test', '21', '1', '2015-12-16 18:12:14', null);
INSERT INTO `adventure` VALUES ('7', 'test', '1', 'test', '21', '1', '2015-12-16 18:12:54', null);
INSERT INTO `adventure` VALUES ('8', 'test', '9', 'test', '21', '1', '2015-12-16 18:14:18', null);
INSERT INTO `adventure` VALUES ('9', 'test', '9', 'test', '21', '1', '2015-12-16 18:15:48', null);
INSERT INTO `adventure` VALUES ('10', 'test', '9', 'test', '21', '1', '2015-12-16 18:16:36', null);
INSERT INTO `adventure` VALUES ('11', 'test', '8', 'test', '21', '1', '2015-12-16 18:17:37', null);
INSERT INTO `adventure` VALUES ('12', 'mountains', '225', 'Mountains in timor ', '21', '1', '2015-12-17 13:42:23', null);
INSERT INTO `adventure` VALUES ('13', 'adventure by author', '3', 'This adventure is posted by author', '23', '1', '2015-12-17 16:05:52', null);
INSERT INTO `adventure` VALUES ('14', 'mountains sea cannons', '1', 'test adventure', '21', '1', '2015-12-17 16:33:57', 'adventure tags');
INSERT INTO `adventure` VALUES ('15', 'sea adventure', '2', 'seah adventure tagns ', '21', '1', '2015-12-17 16:38:04', 'adventure tags and sea');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comments` text,
  `commented_by` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `adventure_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of comments
-- ----------------------------

-- ----------------------------
-- Table structure for country
-- ----------------------------
DROP TABLE IF EXISTS `country`;
CREATE TABLE `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of country
-- ----------------------------
INSERT INTO `country` VALUES ('1', 'Afghanistan');
INSERT INTO `country` VALUES ('2', 'Albania');
INSERT INTO `country` VALUES ('3', 'Algeria');
INSERT INTO `country` VALUES ('4', 'American Samoa');
INSERT INTO `country` VALUES ('5', 'Andorra');
INSERT INTO `country` VALUES ('6', 'Angola');
INSERT INTO `country` VALUES ('7', 'Anguilla');
INSERT INTO `country` VALUES ('8', 'Antarctica');
INSERT INTO `country` VALUES ('9', 'Antigua and Barbuda');
INSERT INTO `country` VALUES ('10', 'Argentina');
INSERT INTO `country` VALUES ('11', 'Armenia');
INSERT INTO `country` VALUES ('12', 'Aruba');
INSERT INTO `country` VALUES ('13', 'Australia');
INSERT INTO `country` VALUES ('14', 'Austria');
INSERT INTO `country` VALUES ('15', 'Azerbaijan');
INSERT INTO `country` VALUES ('16', 'Bahamas');
INSERT INTO `country` VALUES ('17', 'Bahrain');
INSERT INTO `country` VALUES ('18', 'Bangladesh');
INSERT INTO `country` VALUES ('19', 'Barbados');
INSERT INTO `country` VALUES ('20', 'Belarus');
INSERT INTO `country` VALUES ('21', 'Belgium');
INSERT INTO `country` VALUES ('22', 'Belize');
INSERT INTO `country` VALUES ('23', 'Benin');
INSERT INTO `country` VALUES ('24', 'Bermuda');
INSERT INTO `country` VALUES ('25', 'Bhutan');
INSERT INTO `country` VALUES ('26', 'Bolivia');
INSERT INTO `country` VALUES ('27', 'Bosnia and Herzegovina');
INSERT INTO `country` VALUES ('28', 'Botswana');
INSERT INTO `country` VALUES ('29', 'Bouvet Island');
INSERT INTO `country` VALUES ('30', 'Brazil');
INSERT INTO `country` VALUES ('31', 'British Indian Ocean Territory');
INSERT INTO `country` VALUES ('32', 'Brunei Darussalam');
INSERT INTO `country` VALUES ('33', 'Bulgaria');
INSERT INTO `country` VALUES ('34', 'Burkina Faso');
INSERT INTO `country` VALUES ('35', 'Burundi');
INSERT INTO `country` VALUES ('36', 'Cambodia');
INSERT INTO `country` VALUES ('37', 'Cameroon');
INSERT INTO `country` VALUES ('38', 'Canada');
INSERT INTO `country` VALUES ('39', 'Cape Verde');
INSERT INTO `country` VALUES ('40', 'Cayman Islands');
INSERT INTO `country` VALUES ('41', 'Central African Republic');
INSERT INTO `country` VALUES ('42', 'Chad');
INSERT INTO `country` VALUES ('43', 'Chile');
INSERT INTO `country` VALUES ('44', 'China');
INSERT INTO `country` VALUES ('45', 'Christmas Island');
INSERT INTO `country` VALUES ('46', 'Cocos (Keeling) Islands');
INSERT INTO `country` VALUES ('47', 'Colombia');
INSERT INTO `country` VALUES ('48', 'Comoros');
INSERT INTO `country` VALUES ('49', 'Congo');
INSERT INTO `country` VALUES ('50', 'Congo, the Democratic Republic of the');
INSERT INTO `country` VALUES ('51', 'Cook Islands');
INSERT INTO `country` VALUES ('52', 'Costa Rica');
INSERT INTO `country` VALUES ('53', 'Cote D\'Ivoire');
INSERT INTO `country` VALUES ('54', 'Croatia');
INSERT INTO `country` VALUES ('55', 'Cuba');
INSERT INTO `country` VALUES ('56', 'Cyprus');
INSERT INTO `country` VALUES ('57', 'Czech Republic');
INSERT INTO `country` VALUES ('58', 'Denmark');
INSERT INTO `country` VALUES ('59', 'Djibouti');
INSERT INTO `country` VALUES ('60', 'Dominica');
INSERT INTO `country` VALUES ('61', 'Dominican Republic');
INSERT INTO `country` VALUES ('62', 'Ecuador');
INSERT INTO `country` VALUES ('63', 'Egypt');
INSERT INTO `country` VALUES ('64', 'El Salvador');
INSERT INTO `country` VALUES ('65', 'Equatorial Guinea');
INSERT INTO `country` VALUES ('66', 'Eritrea');
INSERT INTO `country` VALUES ('67', 'Estonia');
INSERT INTO `country` VALUES ('68', 'Ethiopia');
INSERT INTO `country` VALUES ('69', 'Falkland Islands (Malvinas)');
INSERT INTO `country` VALUES ('70', 'Faroe Islands');
INSERT INTO `country` VALUES ('71', 'Fiji');
INSERT INTO `country` VALUES ('72', 'Finland');
INSERT INTO `country` VALUES ('73', 'France');
INSERT INTO `country` VALUES ('74', 'French Guiana');
INSERT INTO `country` VALUES ('75', 'French Polynesia');
INSERT INTO `country` VALUES ('76', 'French Southern Territories');
INSERT INTO `country` VALUES ('77', 'Gabon');
INSERT INTO `country` VALUES ('78', 'Gambia');
INSERT INTO `country` VALUES ('79', 'Georgia');
INSERT INTO `country` VALUES ('80', 'Germany');
INSERT INTO `country` VALUES ('81', 'Ghana');
INSERT INTO `country` VALUES ('82', 'Gibraltar');
INSERT INTO `country` VALUES ('83', 'Greece');
INSERT INTO `country` VALUES ('84', 'Greenland');
INSERT INTO `country` VALUES ('85', 'Grenada');
INSERT INTO `country` VALUES ('86', 'Guadeloupe');
INSERT INTO `country` VALUES ('87', 'Guam');
INSERT INTO `country` VALUES ('88', 'Guatemala');
INSERT INTO `country` VALUES ('89', 'Guinea');
INSERT INTO `country` VALUES ('90', 'Guinea-Bissau');
INSERT INTO `country` VALUES ('91', 'Guyana');
INSERT INTO `country` VALUES ('92', 'Haiti');
INSERT INTO `country` VALUES ('93', 'Heard Island and Mcdonald Islands');
INSERT INTO `country` VALUES ('94', 'Holy See (Vatican City State)');
INSERT INTO `country` VALUES ('95', 'Honduras');
INSERT INTO `country` VALUES ('96', 'Hong Kong');
INSERT INTO `country` VALUES ('97', 'Hungary');
INSERT INTO `country` VALUES ('98', 'Iceland');
INSERT INTO `country` VALUES ('99', 'India');
INSERT INTO `country` VALUES ('100', 'Indonesia');
INSERT INTO `country` VALUES ('101', 'Iran, Islamic Republic of');
INSERT INTO `country` VALUES ('102', 'Iraq');
INSERT INTO `country` VALUES ('103', 'Ireland');
INSERT INTO `country` VALUES ('104', 'Israel');
INSERT INTO `country` VALUES ('105', 'Italy');
INSERT INTO `country` VALUES ('106', 'Jamaica');
INSERT INTO `country` VALUES ('107', 'Japan');
INSERT INTO `country` VALUES ('108', 'Jordan');
INSERT INTO `country` VALUES ('109', 'Kazakhstan');
INSERT INTO `country` VALUES ('110', 'Kenya');
INSERT INTO `country` VALUES ('111', 'Kiribati');
INSERT INTO `country` VALUES ('112', 'Korea, Democratic People\'s Republic of');
INSERT INTO `country` VALUES ('113', 'Korea, Republic of');
INSERT INTO `country` VALUES ('114', 'Kuwait');
INSERT INTO `country` VALUES ('115', 'Kyrgyzstan');
INSERT INTO `country` VALUES ('116', 'Lao People\'s Democratic Republic');
INSERT INTO `country` VALUES ('117', 'Latvia');
INSERT INTO `country` VALUES ('118', 'Lebanon');
INSERT INTO `country` VALUES ('119', 'Lesotho');
INSERT INTO `country` VALUES ('120', 'Liberia');
INSERT INTO `country` VALUES ('121', 'Libyan Arab Jamahiriya');
INSERT INTO `country` VALUES ('122', 'Liechtenstein');
INSERT INTO `country` VALUES ('123', 'Lithuania');
INSERT INTO `country` VALUES ('124', 'Luxembourg');
INSERT INTO `country` VALUES ('125', 'Macao');
INSERT INTO `country` VALUES ('126', 'Macedonia, the Former Yugoslav Republic of');
INSERT INTO `country` VALUES ('127', 'Madagascar');
INSERT INTO `country` VALUES ('128', 'Malawi');
INSERT INTO `country` VALUES ('129', 'Malaysia');
INSERT INTO `country` VALUES ('130', 'Maldives');
INSERT INTO `country` VALUES ('131', 'Mali');
INSERT INTO `country` VALUES ('132', 'Malta');
INSERT INTO `country` VALUES ('133', 'Marshall Islands');
INSERT INTO `country` VALUES ('134', 'Martinique');
INSERT INTO `country` VALUES ('135', 'Mauritania');
INSERT INTO `country` VALUES ('136', 'Mauritius');
INSERT INTO `country` VALUES ('137', 'Mayotte');
INSERT INTO `country` VALUES ('138', 'Mexico');
INSERT INTO `country` VALUES ('139', 'Micronesia, Federated States of');
INSERT INTO `country` VALUES ('140', 'Moldova, Republic of');
INSERT INTO `country` VALUES ('141', 'Monaco');
INSERT INTO `country` VALUES ('142', 'Mongolia');
INSERT INTO `country` VALUES ('143', 'Montserrat');
INSERT INTO `country` VALUES ('144', 'Morocco');
INSERT INTO `country` VALUES ('145', 'Mozambique');
INSERT INTO `country` VALUES ('146', 'Myanmar');
INSERT INTO `country` VALUES ('147', 'Namibia');
INSERT INTO `country` VALUES ('148', 'Nauru');
INSERT INTO `country` VALUES ('149', 'Nepal');
INSERT INTO `country` VALUES ('150', 'Netherlands');
INSERT INTO `country` VALUES ('151', 'Netherlands Antilles');
INSERT INTO `country` VALUES ('152', 'New Caledonia');
INSERT INTO `country` VALUES ('153', 'New Zealand');
INSERT INTO `country` VALUES ('154', 'Nicaragua');
INSERT INTO `country` VALUES ('155', 'Niger');
INSERT INTO `country` VALUES ('156', 'Nigeria');
INSERT INTO `country` VALUES ('157', 'Niue');
INSERT INTO `country` VALUES ('158', 'Norfolk Island');
INSERT INTO `country` VALUES ('159', 'Northern Mariana Islands');
INSERT INTO `country` VALUES ('160', 'Norway');
INSERT INTO `country` VALUES ('161', 'Oman');
INSERT INTO `country` VALUES ('162', 'Pakistan');
INSERT INTO `country` VALUES ('163', 'Palau');
INSERT INTO `country` VALUES ('164', 'Palestinian Territory, Occupied');
INSERT INTO `country` VALUES ('165', 'Panama');
INSERT INTO `country` VALUES ('166', 'Papua New Guinea');
INSERT INTO `country` VALUES ('167', 'Paraguay');
INSERT INTO `country` VALUES ('168', 'Peru');
INSERT INTO `country` VALUES ('169', 'Philippines');
INSERT INTO `country` VALUES ('170', 'Pitcairn');
INSERT INTO `country` VALUES ('171', 'Poland');
INSERT INTO `country` VALUES ('172', 'Portugal');
INSERT INTO `country` VALUES ('173', 'Puerto Rico');
INSERT INTO `country` VALUES ('174', 'Qatar');
INSERT INTO `country` VALUES ('175', 'Reunion');
INSERT INTO `country` VALUES ('176', 'Romania');
INSERT INTO `country` VALUES ('177', 'Russian Federation');
INSERT INTO `country` VALUES ('178', 'Rwanda');
INSERT INTO `country` VALUES ('179', 'Saint Helena');
INSERT INTO `country` VALUES ('180', 'Saint Kitts and Nevis');
INSERT INTO `country` VALUES ('181', 'Saint Lucia');
INSERT INTO `country` VALUES ('182', 'Saint Pierre and Miquelon');
INSERT INTO `country` VALUES ('183', 'Saint Vincent and the Grenadines');
INSERT INTO `country` VALUES ('184', 'Samoa');
INSERT INTO `country` VALUES ('185', 'San Marino');
INSERT INTO `country` VALUES ('186', 'Sao Tome and Principe');
INSERT INTO `country` VALUES ('187', 'Saudi Arabia');
INSERT INTO `country` VALUES ('188', 'Senegal');
INSERT INTO `country` VALUES ('189', 'Serbia and Montenegro');
INSERT INTO `country` VALUES ('190', 'Seychelles');
INSERT INTO `country` VALUES ('191', 'Sierra Leone');
INSERT INTO `country` VALUES ('192', 'Singapore');
INSERT INTO `country` VALUES ('193', 'Slovakia');
INSERT INTO `country` VALUES ('194', 'Slovenia');
INSERT INTO `country` VALUES ('195', 'Solomon Islands');
INSERT INTO `country` VALUES ('196', 'Somalia');
INSERT INTO `country` VALUES ('197', 'South Africa');
INSERT INTO `country` VALUES ('198', 'South Georgia and the South Sandwich Islands');
INSERT INTO `country` VALUES ('199', 'Spain');
INSERT INTO `country` VALUES ('200', 'Sri Lanka');
INSERT INTO `country` VALUES ('201', 'Sudan');
INSERT INTO `country` VALUES ('202', 'Suriname');
INSERT INTO `country` VALUES ('203', 'Svalbard and Jan Mayen');
INSERT INTO `country` VALUES ('204', 'Swaziland');
INSERT INTO `country` VALUES ('205', 'Sweden');
INSERT INTO `country` VALUES ('206', 'Switzerland');
INSERT INTO `country` VALUES ('207', 'Syrian Arab Republic');
INSERT INTO `country` VALUES ('208', 'Taiwan, Province of China');
INSERT INTO `country` VALUES ('209', 'Tajikistan');
INSERT INTO `country` VALUES ('210', 'Tanzania, United Republic of');
INSERT INTO `country` VALUES ('211', 'Thailand');
INSERT INTO `country` VALUES ('212', 'Timor-Leste');
INSERT INTO `country` VALUES ('213', 'Togo');
INSERT INTO `country` VALUES ('214', 'Tokelau');
INSERT INTO `country` VALUES ('215', 'Tonga');
INSERT INTO `country` VALUES ('216', 'Trinidad and Tobago');
INSERT INTO `country` VALUES ('217', 'Tunisia');
INSERT INTO `country` VALUES ('218', 'Turkey');
INSERT INTO `country` VALUES ('219', 'Turkmenistan');
INSERT INTO `country` VALUES ('220', 'Turks and Caicos Islands');
INSERT INTO `country` VALUES ('221', 'Tuvalu');
INSERT INTO `country` VALUES ('222', 'Uganda');
INSERT INTO `country` VALUES ('223', 'Ukraine');
INSERT INTO `country` VALUES ('224', 'United Arab Emirates');
INSERT INTO `country` VALUES ('225', 'United Kingdom');
INSERT INTO `country` VALUES ('226', 'United States');
INSERT INTO `country` VALUES ('227', 'United States Minor Outlying Islands');
INSERT INTO `country` VALUES ('228', 'Uruguay');
INSERT INTO `country` VALUES ('229', 'Uzbekistan');
INSERT INTO `country` VALUES ('230', 'Vanuatu');
INSERT INTO `country` VALUES ('231', 'Venezuela');
INSERT INTO `country` VALUES ('232', 'Viet Nam');
INSERT INTO `country` VALUES ('233', 'Virgin Islands, British');
INSERT INTO `country` VALUES ('234', 'Virgin Islands, U.s.');
INSERT INTO `country` VALUES ('235', 'Wallis and Futuna');
INSERT INTO `country` VALUES ('236', 'Western Sahara');
INSERT INTO `country` VALUES ('237', 'Yemen');
INSERT INTO `country` VALUES ('238', 'Zambia');
INSERT INTO `country` VALUES ('239', 'Zimbabwe');

-- ----------------------------
-- Table structure for likes
-- ----------------------------
DROP TABLE IF EXISTS `likes`;
CREATE TABLE `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adventure_id` int(11) DEFAULT NULL,
  `liked_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of likes
-- ----------------------------
INSERT INTO `likes` VALUES ('1', null, null);
INSERT INTO `likes` VALUES ('2', null, null);
INSERT INTO `likes` VALUES ('3', null, null);
INSERT INTO `likes` VALUES ('4', null, null);
INSERT INTO `likes` VALUES ('5', null, null);
INSERT INTO `likes` VALUES ('6', null, null);
INSERT INTO `likes` VALUES ('7', null, null);
INSERT INTO `likes` VALUES ('8', '12', '21');
INSERT INTO `likes` VALUES ('9', '12', '21');
INSERT INTO `likes` VALUES ('10', '12', '21');
INSERT INTO `likes` VALUES ('11', '12', '21');
INSERT INTO `likes` VALUES ('12', '12', '21');
INSERT INTO `likes` VALUES ('13', '12', '21');
INSERT INTO `likes` VALUES ('14', '12', '21');
INSERT INTO `likes` VALUES ('15', '12', '23');
INSERT INTO `likes` VALUES ('16', '13', '24');

-- ----------------------------
-- Table structure for uploads
-- ----------------------------
DROP TABLE IF EXISTS `uploads`;
CREATE TABLE `uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `adventure_id` int(11) DEFAULT NULL,
  `default_pic` tinyint(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of uploads
-- ----------------------------
INSERT INTO `uploads` VALUES ('1', '22745porkpie.jpg', '0', '1');
INSERT INTO `uploads` VALUES ('2', '8862porkpie.jpg', '0', '1');
INSERT INTO `uploads` VALUES ('3', '26123porkpie.jpg', '10', '1');
INSERT INTO `uploads` VALUES ('4', '25824porkpie.jpg', '11', '1');
INSERT INTO `uploads` VALUES ('5', '25497shop.png', '11', '0');
INSERT INTO `uploads` VALUES ('8', '28927porkpie.jpg', '12', '0');
INSERT INTO `uploads` VALUES ('9', '32460shop.png', '12', '1');
INSERT INTO `uploads` VALUES ('12', '3841shop.png', '12', '0');
INSERT INTO `uploads` VALUES ('13', '77071228fe29-860a-4897-8bbf-b15d2d257112.jpg', '12', '0');
INSERT INTO `uploads` VALUES ('15', '218361228fe29-860a-4897-8bbf-b15d2d257112.jpg', '13', '1');
INSERT INTO `uploads` VALUES ('16', '10645sump_transparent.png', '13', '0');
INSERT INTO `uploads` VALUES ('17', '10474porkpie.jpg', '14', '1');
INSERT INTO `uploads` VALUES ('18', '18799porkpie.jpg', '15', '1');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `signup_date` datetime NOT NULL,
  `email` varchar(150) NOT NULL,
  `country` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('21', 'imran', '2015-12-15 17:55:43', 'vuimran1@gmail.com', '6', '1', 'e77989ed21758e78331b20e477fc5582', '0');
INSERT INTO `user` VALUES ('22', 'reader', '2015-12-16 20:00:34', 'reader@gmail.com', '1', '2', '227edf7c86c02a44d17eec9aa5b30cd1', '1');
INSERT INTO `user` VALUES ('23', 'author', '2015-12-16 20:04:25', 'author@gmail.com', '1', '3', '202cb962ac59075b964b07152d234b70', '1');
INSERT INTO `user` VALUES ('24', 'reader1', '2015-12-17 16:14:54', 'reader1@gmail.com', '1', '2', 'e77989ed21758e78331b20e477fc5582', '0');
INSERT INTO `user` VALUES ('25', 'admin', '0000-00-00 00:00:00', 'admin@admin.com', '0', '1', 'caf1a3dfb505ffed0d024130f58c5cfa', '1');
