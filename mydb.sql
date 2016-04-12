-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 04 月 12 日 14:35
-- 服务器版本: 5.1.44
-- PHP 版本: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `mydb`
--

-- --------------------------------------------------------

--
-- 表的结构 `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL,
  `blog_title` varchar(20) DEFAULT NULL COMMENT '日志标题',
  `content` varchar(1000) DEFAULT NULL COMMENT '日志内容',
  `img_url` varchar(200) DEFAULT NULL COMMENT '日志配图url',
  `type` varchar(20) DEFAULT NULL COMMENT '日志类型',
  `is_deleted` int(2) NOT NULL COMMENT '是否被删除',
  `insert_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `img_url_UNIQUE` (`img_url`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `blog`
--

INSERT INTO `blog` (`id`, `blog_title`, `content`, `img_url`, `type`, `is_deleted`, `insert_time`, `update_time`) VALUES
(0, 'nihao', 'nihaoya', 'http://hao123.com', '13123', 0, '2014-10-06 20:44:01', '2014-10-06 20:44:05'),
(1, 'hahah', 'hahahhhh', 'http://hao123.com1', '131222', 0, '2014-10-24 22:40:20', '2014-10-25 22:40:22');
