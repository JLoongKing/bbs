
/*
 Navicat Premium Data Transfer

 Source Server         : test
 Source Server Type    : MySQL
 Source Server Version : 50557
 Source Host           : 106.14.223.205
 Source Database       : calfbbs_true

 Target Server Type    : MySQL
 Target Server Version : 50557
 File Encoding         : utf-8

 Date: 05/30/2018 23:57:00 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `calf_advertisement`
-- ----------------------------
DROP TABLE IF EXISTS `#__advertisement`;
CREATE TABLE `#__advertisement` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '广告id',
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '广告名字',
  `cid` int(11) DEFAULT '1' COMMENT '绑定分类id 默认1 首页广告 2分类页广告 3帖子详情页广告 4友情链接',
  `image` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '广告图片地址',
  `type` tinyint(1) DEFAULT NULL COMMENT ' 广告分类，1文字，2图',
  `url_path` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT '跳转url地址',
  `sort` int(11) DEFAULT NULL COMMENT '广告排序',
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`) USING BTREE,
  KEY `sort` (`sort`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
--  Table structure for `calf_classify`
-- ----------------------------
DROP TABLE IF EXISTS `#__classify`;
CREATE TABLE `#__classify` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '分类id',
  `name` varchar(255) DEFAULT NULL COMMENT '分类名字',
  `pid` int(11) DEFAULT '0' COMMENT '父级分类，默认0为顶级分类',
  `path` varchar(255) DEFAULT NULL COMMENT '分类路径，以逗号隔开',
  `level` int(255) DEFAULT NULL COMMENT '分类等级',
  `create_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `calf_massage`
-- ----------------------------
DROP TABLE IF EXISTS `#__massage`;
CREATE TABLE `#__massage` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '消息id',
  `uid` int(11) DEFAULT NULL COMMENT '通知人的uid',
  `username` varchar(255) DEFAULT NULL COMMENT '通知人昵称',
  `puid` int(11) DEFAULT NULL COMMENT '被通知人的uid',
  `posts_id` int(11) DEFAULT NULL COMMENT '通知的帖子id',
  `posts_title` varchar(255) DEFAULT NULL COMMENT '通知的帖子标题',
  `is_read` tinyint(3) unsigned DEFAULT '2' COMMENT '2表示未读，1表示已读',
  `add_time` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`) USING BTREE,
  KEY `puid` (`puid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=187 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `calf_modules`
-- ----------------------------
DROP TABLE IF EXISTS `#__modules`;
CREATE TABLE `#__modules` (
  `mid` int(11) NOT NULL AUTO_INCREMENT COMMENT '插件id',
  `name` varchar(100) NOT NULL COMMENT '插件名称',
  `author` varchar(50) DEFAULT NULL COMMENT '插件作者',
  `descr` text COMMENT '描述',
  `logo` varchar(100) DEFAULT NULL COMMENT '插件logo',
  `version` varchar(50) DEFAULT NULL COMMENT '插件版本',
  `install_time` int(11) DEFAULT NULL COMMENT '安装时间',
  `dir_name` varchar(255) NOT NULL COMMENT '目录名称',
  PRIMARY KEY (`mid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `calf_nav`
-- ----------------------------
DROP TABLE IF EXISTS `#__nav`;
CREATE TABLE `#__nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '导航id',
  `name` varchar(255) DEFAULT NULL COMMENT '导航名字',
  `path` varchar(255) DEFAULT NULL COMMENT '导航路径',
  `image_url` varchar(255) DEFAULT NULL COMMENT '导航栏图标地址',
  `sort` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL COMMENT '1可用，2无用',
  PRIMARY KEY (`id`),
  KEY `sort` (`sort`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `calf_oauth_user`
-- ----------------------------
DROP TABLE IF EXISTS `#__oauth_user`;
CREATE TABLE `#__oauth_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '第三方注册用户表id',
  `uid` int(11) NOT NULL COMMENT 'user表uid',
  `weixin_openid` varchar(255) DEFAULT NULL COMMENT '微信openid',
  `weixin_nickname` varchar(255) DEFAULT NULL COMMENT '微信昵称',
  `qq_openid` varchar(255) DEFAULT NULL COMMENT 'qq openid',
  `qq_nickname` varchar(255) DEFAULT NULL COMMENT 'qq昵称',
  `create_time` int(11) DEFAULT NULL COMMENT '建立时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `calf_plugin`
-- ----------------------------
DROP TABLE IF EXISTS `#__plugin`;
CREATE TABLE `#__plugin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT '0' COMMENT '作者id',
  `username` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '作者',
  `avatar` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '作者头像',
  `name` varchar(30) COLLATE utf8_bin NOT NULL COMMENT '插件名称',
  `show_url` varchar(100) COLLATE utf8_bin DEFAULT NULL COMMENT '演示网址',
  `download_url` varchar(100) COLLATE utf8_bin DEFAULT NULL COMMENT '下载地址',
  `desc_plugin` varchar(150) COLLATE utf8_bin DEFAULT NULL COMMENT '插件描述',
  `cover_url` varchar(150) COLLATE utf8_bin DEFAULT NULL COMMENT '封面地址',
  `upload_time` datetime DEFAULT NULL COMMENT '上传时间',
  `agree` varchar(10) COLLATE utf8_bin DEFAULT NULL COMMENT '是否同意',
  `status` tinyint(2) DEFAULT '0' COMMENT '是否审核通过',
  PRIMARY KEY (`id`),
  UNIQUE KEY `插件名唯一` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
--  Table structure for `calf_posts`
-- ----------------------------
DROP TABLE IF EXISTS `#__posts`;
CREATE TABLE `#__posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '帖子id',
  `cid` int(11) DEFAULT NULL COMMENT '分类的id',
  `uid` int(11) DEFAULT NULL COMMENT '关联发帖用户id',
  `title` varchar(255) DEFAULT NULL COMMENT '帖子的标题',
  `reply_count` int(255) DEFAULT NULL COMMENT '回贴数量',
  `visits_count` int(255) DEFAULT NULL COMMENT '访问量',
  `description` text,
  `text` text COMMENT '帖子内容',
  `status` int(255) DEFAULT NULL COMMENT '帖子状态，0未解决，1已解决，2精华，3删除',
  `top` tinyint(1) DEFAULT NULL,
  `thumb_cnt` int(11) DEFAULT NULL COMMENT '点赞数',
  `create_time` int(11) DEFAULT NULL,
  `change_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`) USING BTREE,
  KEY `uid` (`uid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `calf_praise_record`
-- ----------------------------
DROP TABLE IF EXISTS `#__praise_record`;
CREATE TABLE `#__praise_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL COMMENT '点赞者uid',
  `rid` int(11) NOT NULL COMMENT '赞的哪条回复的ID',
  `reid` int(10) NOT NULL COMMENT '帖子主ID',
  `status` tinyint(1) DEFAULT '1' COMMENT '0 未点赞 1点赞 默认1',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`) USING BTREE,
  KEY `reid` (`reid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ----------------------------
--  Table structure for `calf_replies`
-- ----------------------------
DROP TABLE IF EXISTS `#__replies`;
CREATE TABLE `#__replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '回贴id',
  `uid` int(11) DEFAULT NULL COMMENT '回帖人的uid',
  `puid` int(11) DEFAULT NULL COMMENT '被回帖人的uid',
  `reply_text` text COMMENT '回帖内容',
  `create_time` int(11) DEFAULT NULL COMMENT '回帖时间',
  `top` int(1) DEFAULT '0' COMMENT '是否置顶 1为置顶 默认0 ',
  `thumb_cnt` int(255) NOT NULL DEFAULT '0' COMMENT '点赞数',
  `reid` int(11) NOT NULL COMMENT '关联帖子id',
  `change_time` int(11) DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`) USING BTREE,
  KEY `puid` (`puid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `calf_test`
-- ----------------------------
DROP TABLE IF EXISTS `#__test`;
CREATE TABLE `#__test` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '广告id',
  `test_name` varchar(255) DEFAULT NULL COMMENT '广告名字',
  `cid` int(11) DEFAULT '1' COMMENT '绑定分类id 默认1 首页广告 2分类页广告 3帖子详情页广告 4友情链接',
  `image` varchar(255) DEFAULT NULL COMMENT '广告图片地址',
  `type` tinyint(1) DEFAULT NULL COMMENT ' 广告分类，1文字，2图',
  `url_path` varchar(255) DEFAULT NULL COMMENT '跳转url地址',
  `sort` int(11) DEFAULT NULL COMMENT '广告排序',
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`) USING BTREE,
  KEY `sort` (`sort`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `calf_user`
-- ----------------------------
DROP TABLE IF EXISTS `#__user`;
CREATE TABLE `#__user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户uid',
  `username` varchar(255) NOT NULL COMMENT '用户昵称',
  `password` varchar(32) DEFAULT NULL COMMENT '用户密码',
  `token` varchar(32) DEFAULT NULL COMMENT '用户token',
  `sex` int(1) DEFAULT NULL COMMENT '1为男  2为女',
  `province` varchar(255) DEFAULT NULL COMMENT '所在省份',
  `city` varchar(255) DEFAULT NULL COMMENT '所在区',
  `area` varchar(255) DEFAULT NULL COMMENT '所在地区',
  `signature` text COMMENT '用户个人签名',
  `avatar` varchar(255) DEFAULT NULL COMMENT '头像',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `email` varchar(255) DEFAULT NULL COMMENT '邮件',
  `status` enum('1','2','3') DEFAULT '1' COMMENT '1普通用户 2 管理员 3 黑名单用户',
  `mobile` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
