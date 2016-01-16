-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 07 月 17 日 12:30
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `tongmeng`
--
CREATE DATABASE IF NOT EXISTS `tongmeng` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tongmeng`;

-- --------------------------------------------------------

--
-- 表的结构 `tm_admin`
--

CREATE TABLE IF NOT EXISTS `tm_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `username` char(32) NOT NULL COMMENT '管理员名',
  `password` char(33) NOT NULL COMMENT '管理员密码',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `username_2` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='tm_admin 管理员表' AUTO_INCREMENT=57 ;

--
-- 转存表中的数据 `tm_admin`
--

INSERT INTO `tm_admin` (`id`, `username`, `password`) VALUES
(54, 'erterter', '4a327c97bcdc7d1aaaccf8e4d31e947b'),
(41, 'ma', 'b74df323e3939b563635a2cba7a7afba'),
(42, 'zhang', 'd0cd2693b3506677e4c55e91d6365bff'),
(56, 'wu', 'd3cb757121f725fe825a1176031a1c14'),
(47, 'dwsfghjkl;ljhgfdsa', '9f6e6800cfae7749eb6c486619254b9c'),
(53, 'rge', '1deb3020eb5d74d7bd99e75e7426eaa8'),
(50, 'rtyuiooiuy', '514f1b439f404f86f77090fa9edc96ce'),
(46, 'rfedvs', '0cc175b9c0f1b6a831c399e269772661'),
(52, 'aaaaaaaa', '3dbe00a167653a1aaee01d93e77e730e'),
(55, 'erterte', '4a327c97bcdc7d1aaaccf8e4d31e947b');

-- --------------------------------------------------------

--
-- 表的结构 `tm_advertising`
--

CREATE TABLE IF NOT EXISTS `tm_advertising` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '广告ID',
  `content` text NOT NULL COMMENT '广告内容',
  `links` char(50) NOT NULL COMMENT '广告链接',
  `img` char(50) NOT NULL COMMENT '广告图片',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='tm_advertising广告表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `tm_advertising`
--

INSERT INTO `tm_advertising` (`id`, `content`, `links`, `img`) VALUES
(2, 'sdfghjkl;vcxcvbnm,.', '', 'Uploads/2015-07-12/55a20b4385832.png'),
(3, 'retet', '', 'Uploads/2015-07-16/55a7621464524.png');

-- --------------------------------------------------------

--
-- 表的结构 `tm_bullentin`
--

CREATE TABLE IF NOT EXISTS `tm_bullentin` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '网站公告ID',
  `title` varchar(255) NOT NULL COMMENT '网站公告标题',
  `content` text NOT NULL COMMENT '网站公告内容',
  `btime` int(32) NOT NULL COMMENT '网站公告发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='tm_bullentin网站公告表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `tm_bullentin`
--

INSERT INTO `tm_bullentin` (`id`, `title`, `content`, `btime`) VALUES
(1, '的减肥地方', '电视剧付款了圣诞节方法论快乐圣诞节疯狂的说了句看了放假快乐几点睡付款了减肥快乐坚实的快乐减肥刻录机了空间点上课了房间看电视了解放路空间看老师就快乐圣诞节快乐就付款了几点睡看了就快乐到家颗粒剂颗粒剂快乐的交水电费了跨世纪', 20150303),
(2, '阿道夫第三方', 'gl,g,gdl;fm 到卡乐购监控了放几个颗粒剂', 1111111),
(3, '现场发布的', '十多个人分割', 0),
(4, '点十个人分割', '个人他好几个空格上大号发的是规划法ID号一u二回热糊涂Yui人对隔日软件', 2222);

-- --------------------------------------------------------

--
-- 表的结构 `tm_cart`
--

CREATE TABLE IF NOT EXISTS `tm_cart` (
  `id` int(11) NOT NULL DEFAULT '0' COMMENT '购物车ID',
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `gid` int(11) NOT NULL COMMENT '商品ID[JSON]格式 {gid1:num1}',
  `goodsname` char(125) NOT NULL COMMENT '商品名字',
  `goodsprice` decimal(10,2) NOT NULL COMMENT '商品单价',
  `number` int(125) NOT NULL COMMENT '商品数量',
  `cartprice` decimal(10,2) NOT NULL COMMENT '  商品总价',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='tm_cart购物车表';

-- --------------------------------------------------------

--
-- 表的结构 `tm_comment`
--

CREATE TABLE IF NOT EXISTS `tm_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '评论 ID',
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `gid` int(11) NOT NULL COMMENT '商品ID',
  `commentcontent` text NOT NULL COMMENT '评论内容',
  `commenttime` int(50) NOT NULL COMMENT '评论时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='tm_comment商品评价表' AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `tm_comment`
--

INSERT INTO `tm_comment` (`id`, `uid`, `gid`, `commentcontent`, `commenttime`) VALUES
(7, 33, 3333, '惹他惹他retreatretreat尔特让他电饭锅电饭锅发的方的观点', 145454555),
(12, 5, 4, 'sgdrgdfgdfgdfgdfgdfgf', 4555655),
(6, 3, 4, '梵蒂冈反反复复凤飞飞飞凤飞飞凤飞飞凤飞飞凤飞飞凤飞飞的顶顶顶顶顶的顶顶顶顶顶顶顶顶顶顶顶顶顶顶顶', 45654444),
(8, 33, 3333, '惹他惹他retreatretreat尔特让他电饭锅电饭锅发的方的观点', 145454555),
(9, 44, 44, '饿死他仍然让他热特瑞特让他', 2147483647),
(10, 44, 44, '饿死他仍然让他热特瑞特让他', 88888888),
(11, 444, 444, '天赋犹太人', 444444444);

-- --------------------------------------------------------

--
-- 表的结构 `tm_config`
--

CREATE TABLE IF NOT EXISTS `tm_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '网站配置ID',
  `title` varchar(100) NOT NULL DEFAULT '同梦网' COMMENT '网站标题',
  `keywords` varchar(100) NOT NULL DEFAULT '专注玩具销售' COMMENT '网站关键字',
  `description` varchar(255) NOT NULL DEFAULT '做质量做好,服务最好的玩具商城' COMMENT '网站描述',
  `logo` varchar(100) NOT NULL DEFAULT 'logo.png' COMMENT '网站LOGO',
  `status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '网站开关',
  `cnzz` varchar(100) NOT NULL DEFAULT '站长统计' COMMENT '网站统计代码',
  `icp` varchar(100) NOT NULL DEFAULT '京ICP——68686989556号' COMMENT '网站ICP备案号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `tm_config`
--

INSERT INTO `tm_config` (`id`, `title`, `keywords`, `description`, `logo`, `status`, `cnzz`, `icp`) VALUES
(1, '童梦网', '专注玩具销售', '做最好的玩具商城', './Public/Uploads/2015-07-16/55a75f7b204c1.png', 1, '站长统计', '京ICP备18038866号');

-- --------------------------------------------------------

--
-- 表的结构 `tm_feekback`
--

CREATE TABLE IF NOT EXISTS `tm_feekback` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户反馈ID',
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `feekbacktitle` varchar(255) NOT NULL COMMENT '用户反馈标题',
  `feekbackcontent` text NOT NULL COMMENT '反馈内容',
  `feekbacktime` int(50) NOT NULL COMMENT '用户反馈时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='tm_feekback用户反馈表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `tm_feekback`
--

INSERT INTO `tm_feekback` (`id`, `uid`, `feekbacktitle`, `feekbackcontent`, `feekbacktime`) VALUES
(4, 2, 'sdfdsfsd', '是梵蒂冈地方官地方dfg', 126555454);

-- --------------------------------------------------------

--
-- 表的结构 `tm_goods`
--

CREATE TABLE IF NOT EXISTS `tm_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品ID',
  `tid` int(11) NOT NULL COMMENT '商品所属分类ID',
  `goodsname` varchar(255) NOT NULL COMMENT '商品名称',
  `goodsdesc` text NOT NULL COMMENT '商品描述',
  `salesnum` int(11) NOT NULL DEFAULT '0' COMMENT '商品销量',
  `stock` int(11) NOT NULL DEFAULT '0' COMMENT '库存',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '商品价格',
  `comment` int(11) NOT NULL DEFAULT '0' COMMENT '商品评论次数',
  `goodspic` varchar(255) NOT NULL COMMENT '商品图片',
  `cupon` tinyint(3) NOT NULL DEFAULT '0' COMMENT '是否可用优惠价 0为不可用1为可用',
  `status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '是否上架 1为上架 0为下架',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='tm_goods 商品表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `tm_goods`
--

INSERT INTO `tm_goods` (`id`, `tid`, `goodsname`, `goodsdesc`, `salesnum`, `stock`, `price`, `comment`, `goodspic`, `cupon`, `status`) VALUES
(1, 1, '遥控飞机', '&lt;p&gt;也许吧&lt;/p&gt;', 88, 88, '188.00', 44, 'Uploads/2015-07-17/55a86d492e068.jpg', 0, 1),
(2, 1, '倒霉熊', '&lt;p&gt;尼玛&lt;/p&gt;', 4, 4, '88.00', 8, 'Uploads/2015-07-17/55a86d36a768a.jpg', 0, 1),
(6, 16, '呵呵', '&lt;p&gt;是事实上是是是是得到 到上的味道&lt;/p&gt;', 222, 85, '56.00', 9, 'Uploads/2015-07-17/55a86db64cfb3.jpg', 1, 1),
(4, 2, '飞机', '&lt;p&gt;一个质量好,价格实惠的玩具&lt;/p&gt;', 56, 222, '888.00', 66, 'Uploads/2015-07-17/55a86c03822ae.jpg', 0, 1),
(5, 16, '哈哈', '&lt;p&gt;无&lt;/p&gt;', 5, 555, '888.00', 68, 'Uploads/2015-07-17/55a86c86a3fe6.jpg', 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tm_goodscollect`
--

CREATE TABLE IF NOT EXISTS `tm_goodscollect` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品收藏ID',
  `gid` int(11) NOT NULL COMMENT '商品ID',
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `goodsname` varchar(120) NOT NULL COMMENT '商品名称',
  `collecttime` int(50) NOT NULL COMMENT '收藏时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='tm_goodscollect商品收藏表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tm_goodshistroy`
--

CREATE TABLE IF NOT EXISTS `tm_goodshistroy` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品浏览历史ID',
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `gid` int(11) NOT NULL COMMENT '商品ID',
  `goodsname` varchar(125) NOT NULL COMMENT '商品名',
  `histroytime` int(50) NOT NULL COMMENT '商品浏览时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='tm_goodshistroy商品浏览历史表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tm_goodstype`
--

CREATE TABLE IF NOT EXISTS `tm_goodstype` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品栏目ID',
  `name` char(30) NOT NULL COMMENT '商品类别名',
  `pid` int(11) NOT NULL DEFAULT '0' COMMENT '父分类ID',
  `path` char(255) NOT NULL DEFAULT '0' COMMENT '路径',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='tm_goodstype 商品分类表' AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `tm_goodstype`
--

INSERT INTO `tm_goodstype` (`id`, `name`, `pid`, `path`) VALUES
(1, '遥控玩具', 0, '0'),
(2, '遥控1', 1, '0-1'),
(3, '毛绒玩具', 0, '0'),
(4, '遥控2', 1, '0-1'),
(7, '毛绒玩具1', 3, '0-3'),
(9, 'asdasdsad', 0, '0'),
(8, '毛绒玩具2', 3, '0-3'),
(11, 'zxczxcbvcbvcb', 0, '0'),
(12, 'asdasdwrewterh', 0, '0'),
(15, 'sdfsdfds', 11, '0-11'),
(16, 'sdfsdfsd', 11, '0-11');

-- --------------------------------------------------------

--
-- 表的结构 `tm_help`
--

CREATE TABLE IF NOT EXISTS `tm_help` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '帮助中心ID',
  `title` char(32) NOT NULL COMMENT '帮助主题',
  `content` text NOT NULL COMMENT '帮助内容',
  `time` int(32) NOT NULL COMMENT '帮助发布时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='tm_help帮助中心表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tm_job`
--

CREATE TABLE IF NOT EXISTS `tm_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '应聘表ID',
  `name` char(32) NOT NULL COMMENT '应聘者姓名',
  `office` char(32) NOT NULL COMMENT '应聘职位',
  `telephone` int(12) NOT NULL COMMENT '应聘者电话',
  `description` text NOT NULL COMMENT '自我介绍',
  `time` int(50) NOT NULL COMMENT '提交时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='tm_job应聘表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tm_link`
--

CREATE TABLE IF NOT EXISTS `tm_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '友链ID',
  `linkname` char(32) NOT NULL COMMENT '友链名字',
  `links` char(50) NOT NULL COMMENT '友链地址',
  `logo` char(50) NOT NULL DEFAULT 'logo.png' COMMENT '友链logo',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='tm_link友链表' AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `tm_link`
--

INSERT INTO `tm_link` (`id`, `linkname`, `links`, `logo`) VALUES
(15, '哈哈', 'http://qihoo.com', 'logo.png'),
(14, '百度', 'http://qihoo.com', 'logo.png');

-- --------------------------------------------------------

--
-- 表的结构 `tm_log`
--

CREATE TABLE IF NOT EXISTS `tm_log` (
  `id` int(32) NOT NULL AUTO_INCREMENT COMMENT '管理员登录日志ID',
  `aid` int(11) unsigned zerofill NOT NULL COMMENT '管理员ID',
  `logip` char(32) NOT NULL DEFAULT '0.0.0.0' COMMENT '管理员登录 IP',
  `logtime` int(32) NOT NULL COMMENT '管理员登录时间',
  `lognums` int(11) NOT NULL COMMENT '管理员登录次数',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='tm_log 管理员登录日志表' AUTO_INCREMENT=140 ;

--
-- 转存表中的数据 `tm_log`
--

INSERT INTO `tm_log` (`id`, `aid`, `logip`, `logtime`, `lognums`) VALUES
(17, 00000000038, '::1', 1436542795, 1),
(133, 00000000038, '::1', 1436949783, 1),
(132, 00000000038, '::1', 1436948725, 1),
(4, 00000000038, '::1', 1436533925, 1),
(5, 00000000038, '::1', 1436533957, 1),
(13, 00000000038, '::1', 1436535185, 1),
(15, 00000000038, '::1', 1436536535, 1),
(8, 00000000038, '::1', 1436534844, 1),
(14, 00000000038, '::1', 1436535573, 1),
(10, 00000000038, '::1', 1436534851, 1),
(16, 00000000038, '::1', 1436542759, 1),
(12, 00000000038, '::1', 1436534852, 1),
(18, 00000000038, '::1', 1436544968, 1),
(19, 00000000038, '::1', 1436545834, 1),
(20, 00000000038, '::1', 1436593591, 1),
(21, 00000000038, '::1', 1436597642, 1),
(22, 00000000038, '::1', 1436597642, 1),
(23, 00000000038, '::1', 1436608599, 1),
(24, 00000000038, '::1', 1436608778, 1),
(25, 00000000038, '::1', 1436611024, 1),
(26, 00000000038, '::1', 1436611059, 1),
(27, 00000000038, '::1', 1436611719, 1),
(28, 00000000038, '::1', 1436619493, 1),
(29, 00000000038, '::1', 1436623230, 1),
(30, 00000000038, '::1', 1436624135, 1),
(31, 00000000038, '::1', 1436624785, 1),
(32, 00000000038, '::1', 1436626131, 1),
(33, 00000000038, '::1', 1436628024, 1),
(34, 00000000038, '::1', 1436628480, 1),
(35, 00000000038, '::1', 1436629803, 1),
(36, 00000000038, '::1', 1436629830, 1),
(37, 00000000038, '::1', 1436630477, 1),
(38, 00000000038, '127.0.0.1', 1436680014, 1),
(39, 00000000038, '127.0.0.1', 1436680101, 1),
(40, 00000000038, '127.0.0.1', 1436681343, 1),
(41, 00000000038, '127.0.0.1', 1436681380, 1),
(42, 00000000038, '127.0.0.1', 1436681463, 1),
(43, 00000000038, '127.0.0.1', 1436681501, 1),
(44, 00000000038, '127.0.0.1', 1436682799, 1),
(45, 00000000038, '127.0.0.1', 1436684247, 1),
(46, 00000000038, '127.0.0.1', 1436687299, 1),
(47, 00000000038, '127.0.0.1', 1436687322, 1),
(48, 00000000038, '127.0.0.1', 1436687942, 1),
(49, 00000000038, '::1', 1436688271, 1),
(50, 00000000038, '::1', 1436688696, 1),
(51, 00000000038, '127.0.0.1', 1436693286, 1),
(52, 00000000038, '::1', 1436693523, 1),
(53, 00000000038, '::1', 1436693558, 1),
(54, 00000000038, '::1', 1436693861, 1),
(55, 00000000038, '::1', 1436693870, 1),
(56, 00000000038, '::1', 1436695295, 1),
(57, 00000000038, '::1', 1436695628, 1),
(58, 00000000038, '::1', 1436698970, 1),
(59, 00000000038, '::1', 1436698972, 1),
(60, 00000000038, '127.0.0.1', 1436700370, 1),
(61, 00000000038, '127.0.0.1', 1436700461, 1),
(62, 00000000038, '127.0.0.1', 1436700490, 1),
(63, 00000000038, '::1', 1436700587, 1),
(64, 00000000038, '::1', 1436700689, 1),
(65, 00000000041, '::1', 1436701069, 1),
(66, 00000000041, '::1', 1436701464, 1),
(67, 00000000041, '::1', 1436708447, 1),
(68, 00000000041, '::1', 1436709472, 1),
(69, 00000000038, '::1', 1436709493, 1),
(70, 00000000038, '::1', 1436712250, 1),
(71, 00000000038, '::1', 1436712279, 1),
(72, 00000000038, '::1', 1436712304, 1),
(73, 00000000038, '::1', 1436713061, 1),
(74, 00000000038, '::1', 1436713092, 1),
(75, 00000000038, '::1', 1436713663, 1),
(76, 00000000038, '::1', 1436714644, 1),
(77, 00000000038, '::1', 1436714724, 1),
(78, 00000000038, '::1', 1436715444, 1),
(79, 00000000038, '::1', 1436716729, 1),
(80, 00000000038, '::1', 1436768193, 1),
(81, 00000000038, '::1', 1436768939, 1),
(82, 00000000038, '::1', 1436769323, 1),
(83, 00000000038, '::1', 1436769324, 1),
(84, 00000000038, '::1', 1436769587, 1),
(85, 00000000038, '::1', 1436769605, 1),
(86, 00000000038, '::1', 1436787195, 1),
(87, 00000000038, '::1', 1436787316, 1),
(88, 00000000038, '::1', 1436787800, 1),
(89, 00000000038, '::1', 1436787811, 1),
(90, 00000000038, '::1', 1436789208, 1),
(91, 00000000038, '::1', 1436789806, 1),
(92, 00000000038, '::1', 1436789806, 1),
(93, 00000000038, '::1', 1436789807, 1),
(94, 00000000038, '::1', 1436789807, 1),
(95, 00000000038, '::1', 1436789808, 1),
(96, 00000000038, '::1', 1436789808, 1),
(97, 00000000038, '::1', 1436795526, 1),
(98, 00000000038, '::1', 1436795562, 1),
(99, 00000000038, '::1', 1436795606, 1),
(100, 00000000038, '::1', 1436795636, 1),
(101, 00000000038, '::1', 1436795636, 1),
(102, 00000000038, '::1', 1436795686, 1),
(103, 00000000038, '::1', 1436795689, 1),
(104, 00000000038, '::1', 1436795691, 1),
(105, 00000000038, '::1', 1436795724, 1),
(106, 00000000038, '::1', 1436795731, 1),
(107, 00000000038, '::1', 1436795732, 1),
(108, 00000000038, '::1', 1436795732, 1),
(109, 00000000038, '::1', 1436795734, 1),
(110, 00000000038, '::1', 1436795734, 1),
(111, 00000000038, '::1', 1436795768, 1),
(112, 00000000038, '::1', 1436795796, 1),
(113, 00000000038, '::1', 1436795815, 1),
(114, 00000000038, '::1', 1436795848, 1),
(115, 00000000038, '::1', 1436795868, 1),
(116, 00000000038, '::1', 1436795890, 1),
(117, 00000000038, '::1', 1436795929, 1),
(118, 00000000038, '::1', 1436836066, 1),
(119, 00000000038, '::1', 1436836639, 1),
(120, 00000000038, '::1', 1436838920, 1),
(121, 00000000038, '::1', 1436839255, 1),
(122, 00000000038, '::1', 1436842179, 1),
(123, 00000000038, '::1', 1436842191, 1),
(124, 00000000038, '::1', 1436842865, 1),
(125, 00000000038, '::1', 1436843162, 1),
(126, 00000000038, '::1', 1436846685, 1),
(127, 00000000038, '::1', 1436876564, 1),
(128, 00000000038, '::1', 1436922176, 1),
(129, 00000000038, '::1', 1436922930, 1),
(130, 00000000038, '::1', 1436922930, 1),
(131, 00000000038, '::1', 1436947857, 1),
(134, 00000000038, '::1', 1436973140, 1),
(135, 00000000038, '::1', 1437015232, 1),
(136, 00000000056, '::1', 1437100944, 1),
(137, 00000000056, '::1', 1437102568, 1),
(138, 00000000056, '::1', 1437102814, 1),
(139, 00000000056, '::1', 1437104169, 1);

-- --------------------------------------------------------

--
-- 表的结构 `tm_logistics`
--

CREATE TABLE IF NOT EXISTS `tm_logistics` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '物流ID',
  `orderid` int(11) NOT NULL COMMENT '订单ID',
  `logid` int(11) NOT NULL COMMENT '物流号',
  `logisticsname` char(20) NOT NULL COMMENT '快递公司名字',
  `logisticstime` int(50) NOT NULL COMMENT '发货时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='tm_logistics物流表' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `tm_logistics`
--

INSERT INTO `tm_logistics` (`id`, `orderid`, `logid`, `logisticsname`, `logisticstime`) VALUES
(8, 434, 3434, '耳闻v', 1437030988),
(2, 24245, 7575757, '顺丰', 1154545),
(4, 234324, 324324, '韵达', 23432432);

-- --------------------------------------------------------

--
-- 表的结构 `tm_love`
--

CREATE TABLE IF NOT EXISTS `tm_love` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '爱心活动ID',
  `uid` int(11) NOT NULL COMMENT '爱心用户ID',
  `lovemoney` decimal(10,2) NOT NULL COMMENT '爱心金额',
  `lovetime` int(50) NOT NULL COMMENT '爱心捐款时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='tm_love爱心活动表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `tm_love`
--

INSERT INTO `tm_love` (`id`, `uid`, `lovemoney`, `lovetime`) VALUES
(1, 1, '1010.00', 2147483647),
(5, 44, '424.00', 4242424);

-- --------------------------------------------------------

--
-- 表的结构 `tm_navigate`
--

CREATE TABLE IF NOT EXISTS `tm_navigate` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '导航栏ID',
  `name` char(50) NOT NULL COMMENT '导航栏名字',
  `links` char(50) NOT NULL COMMENT '导航链接',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='tm_navigate导航栏表' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `tm_navigate`
--

INSERT INTO `tm_navigate` (`id`, `name`, `links`) VALUES
(6, '百度', 'www.baidu.com'),
(10, '新浪', 'www.sina.com.cn');

-- --------------------------------------------------------

--
-- 表的结构 `tm_order`
--

CREATE TABLE IF NOT EXISTS `tm_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '订单ID',
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `ordernumber` int(50) NOT NULL COMMENT '订单号',
  `gid` int(11) NOT NULL COMMENT '商品ID',
  `good` varchar(255) NOT NULL COMMENT '商品名',
  `unitprice` longtext NOT NULL COMMENT '商品单价',
  `num` int(10) NOT NULL DEFAULT '1' COMMENT '商品数量',
  `ispay` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否支付  1为支付 0为未支付',
  `totalprice` decimal(10,2) NOT NULL COMMENT '商品总价',
  `ordertime` int(32) NOT NULL COMMENT '订单时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tm_recharge`
--

CREATE TABLE IF NOT EXISTS `tm_recharge` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '充值历史ID',
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `rechargemoney` decimal(10,2) NOT NULL COMMENT '充值金额',
  `rechargetime` int(50) NOT NULL COMMENT '充值时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='tm_recharge充值历史表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tm_reply`
--

CREATE TABLE IF NOT EXISTS `tm_reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '回复ID',
  `fid` int(11) NOT NULL COMMENT '反馈ID',
  `replycontent` text NOT NULL COMMENT '回复内容',
  `replytime` int(50) NOT NULL COMMENT '回复时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='tm_reply反馈回复表' AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `tm_reply`
--

INSERT INTO `tm_reply` (`id`, `fid`, `replycontent`, `replytime`) VALUES
(3, 0, '', 0),
(1, 0, '', 0),
(4, 4, '', 0),
(5, 3, '如果大范甘迪', 0),
(6, 3, '阿的打算', 1436706049),
(7, 3, '俺师傅的十大', 1436706154),
(8, 3, 'yuyt ', 1436709521),
(9, 4, 'ertdrter', 1436788489),
(10, 4, '5y6r', 1436922939),
(11, 4, '1111', 1436958494);

-- --------------------------------------------------------

--
-- 表的结构 `tm_user`
--

CREATE TABLE IF NOT EXISTS `tm_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `username` char(32) NOT NULL COMMENT '用户名',
  `password` char(33) NOT NULL COMMENT '用户密码',
  `auth` tinyint(3) NOT NULL DEFAULT '1' COMMENT '用户权限 0位关闭 1为开启',
  `status` int(3) NOT NULL DEFAULT '1' COMMENT '用户状态 0位关闭 1为开启',
  `regtime` int(32) NOT NULL COMMENT '用户注册时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='tm_user 用户表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `tm_user`
--

INSERT INTO `tm_user` (`id`, `username`, `password`, `auth`, `status`, `regtime`) VALUES
(1, 'sdfghjkgasdfsd', '57315647af9b5ff0c77fb679951a9bf4', 1, 1, 0),
(2, 'wertyttrssadf', '', 1, 1, 0),
(3, 'wujunze', 'aecdab4089dd9a5577555ead353ddf36', 0, 1, 1436858175),
(4, '121', '96e79218965eb72c92a549dd5a330112', 0, 1, 1436946783),
(5, '56757', 'c1fac60eb7538ed0ceb6406e5ab1c202', 0, 1, 1436976091),
(6, 'cms', 'e10adc3949ba59abbe56e057f20f883e', 0, 1, 1436976117);

-- --------------------------------------------------------

--
-- 表的结构 `tm_userdetail`
--

CREATE TABLE IF NOT EXISTS `tm_userdetail` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户详情ID',
  `uid` int(11) NOT NULL COMMENT '关联用户ID',
  `name` char(32) NOT NULL DEFAULT '童梦网' COMMENT '用户昵称',
  `sex` enum('0','1') NOT NULL DEFAULT '0' COMMENT '用户性别',
  `age` int(3) NOT NULL DEFAULT '0' COMMENT '用户年龄',
  `address` varchar(255) NOT NULL COMMENT '用户地址',
  `email` char(50) NOT NULL COMMENT '用户邮箱',
  `tel` int(12) NOT NULL COMMENT '用户电话',
  `credits` int(11) NOT NULL DEFAULT '0' COMMENT '用户积分',
  `money` decimal(10,2) NOT NULL COMMENT '用户余额',
  `pic` char(125) NOT NULL DEFAULT '/Uploads/default.png' COMMENT '用户头像',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='tm_userdetail 用户详情表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `tm_userdetail`
--

INSERT INTO `tm_userdetail` (`id`, `uid`, `name`, `sex`, `age`, `address`, `email`, `tel`, `credits`, `money`, `pic`) VALUES
(1, 0, '童梦网', '0', 0, '', 'wujunze@qq.com', 2147483647, 0, '0.00', 'default.png'),
(2, 0, '童梦网', '0', 0, '', '111', 11111111, 0, '0.00', 'default.png'),
(3, 0, '童梦网', '0', 0, '', '546456', 54654, 0, '0.00', 'default.png'),
(4, 0, '童梦网', '0', 0, '', 'cms', 12345, 0, '0.00', 'default.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
