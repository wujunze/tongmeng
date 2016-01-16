INSERT INTO `{Prefix}tags` (`id`, `name`, `fid`, `xid`) VALUES (1, '按年代', 0, 1);#cscms#
INSERT INTO `{Prefix}tags` (`id`, `name`, `fid`, `xid`) VALUES (2, '按曲风', 0, 2);#cscms#
INSERT INTO `{Prefix}tags` (`id`, `name`, `fid`, `xid`) VALUES (3, '按心情', 0, 3);#cscms#
INSERT INTO `{Prefix}tags` (`id`, `name`, `fid`, `xid`) VALUES (4, '按地域', 0, 4);#cscms#
INSERT INTO `{Prefix}tags` (`id`, `name`, `fid`, `xid`) VALUES (5, '按类型', 0, 5);#cscms#
INSERT INTO `{Prefix}tags` (`id`, `name`, `fid`, `xid`) VALUES (6, '70后', 1, 1);#cscms#
INSERT INTO `{Prefix}tags` (`id`, `name`, `fid`, `xid`) VALUES (7, '80后', 1, 2);#cscms#
INSERT INTO `{Prefix}tags` (`id`, `name`, `fid`, `xid`) VALUES (8, '90后', 1, 3);#cscms#
INSERT INTO `{Prefix}tags` (`id`, `name`, `fid`, `xid`) VALUES (9, 'POP', 2, 1);#cscms#
INSERT INTO `{Prefix}tags` (`id`, `name`, `fid`, `xid`) VALUES (10, '乡村', 2, 2);#cscms#
INSERT INTO `{Prefix}tags` (`id`, `name`, `fid`, `xid`) VALUES (11, '中国风', 2, 3);#cscms#
INSERT INTO `{Prefix}tags` (`id`, `name`, `fid`, `xid`) VALUES (12, '想哭', 3, 1);#cscms#
INSERT INTO `{Prefix}tags` (`id`, `name`, `fid`, `xid`) VALUES (13, '忧伤', 3, 2);#cscms#
INSERT INTO `{Prefix}tags` (`id`, `name`, `fid`, `xid`) VALUES (14, '寂寞', 3, 3);#cscms#
INSERT INTO `{Prefix}tags` (`id`, `name`, `fid`, `xid`) VALUES (15, '美好', 3, 4);#cscms#
INSERT INTO `{Prefix}tags` (`id`, `name`, `fid`, `xid`) VALUES (16, '内地', 4, 1);#cscms#
INSERT INTO `{Prefix}tags` (`id`, `name`, `fid`, `xid`) VALUES (17, '欧美', 4, 2);#cscms#
INSERT INTO `{Prefix}tags` (`id`, `name`, `fid`, `xid`) VALUES (18, '日韩', 4, 3);#cscms#
INSERT INTO `{Prefix}tags` (`id`, `name`, `fid`, `xid`) VALUES (19, '港台', 4, 4);#cscms#
INSERT INTO `{Prefix}userlevel` (`id`, `name`, `xid`, `stars`, `jinyan`) VALUES (1, '初级', 1, 1, 0);#cscms#
INSERT INTO `{Prefix}userlevel` (`id`, `name`, `xid`, `stars`, `jinyan`) VALUES (2, '中级', 2, 5, 200);#cscms#
INSERT INTO `{Prefix}userlevel` (`id`, `name`, `xid`, `stars`, `jinyan`) VALUES (3, '高级', 3, 10, 500);#cscms#
INSERT INTO `{Prefix}userlevel` (`id`, `name`, `xid`, `stars`, `jinyan`) VALUES (4, '元老', 4, 15, 1000);#cscms#
INSERT INTO `{Prefix}userzu` (`id`, `name`, `xid`, `color`, `pic`, `info`, `cion_y`, `cion_m`, `cion_d`, `fid`, `aid`, `sid`, `vid`, `mid`, `did`) VALUES (1, '注册会员', 1, '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0);#cscms#
INSERT INTO `{Prefix}userzu` (`id`, `name`, `xid`, `color`, `pic`, `info`, `cion_y`, `cion_m`, `cion_d`, `fid`, `aid`, `sid`, `vid`, `mid`, `did`) VALUES (2, '中级会员', 2, '', '', '', 1000, 100, 10, 0, 0, 0, 1, 1, 0);#cscms#
INSERT INTO `{Prefix}userzu` (`id`, `name`, `xid`, `color`, `pic`, `info`, `cion_y`, `cion_m`, `cion_d`, `fid`, `aid`, `sid`, `vid`, `mid`, `did`) VALUES (3, '黄钻会员', 3, '#CC9933', '', '黄钻会员', 300, 100, 10, 1, 1, 1, 1, 1, 1);#cscms#
INSERT INTO `{Prefix}adminzu` (`id`, `name`, `sys`, `app`) VALUES (1, '超级管理员', '', '');#cscms#
INSERT INTO `{Prefix}adminzu` (`id`, `name`, `sys`, `app`) VALUES (2, '网站编辑员', '', '');