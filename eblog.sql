#创建数据库
create database eblog;
use eblog;
#文章表
DROP TABLE IF EXISTS `eblog_article`;
CREATE TABLE `eblog_article`(
`aid` int(11) primary key NOT NULL AUTO_INCREMENT,
`cid` int(11) NOT NULL,
`title` varchar(200) NOT NULL,
`content` text NOT NULL,
`create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`view` int(10) NOT NULL,
`comment` int(10) NOT NULL
)ENGINE=MyISAM  DEFAULT CHARSET=utf8;
insert into `eblog_article`(aid,cid,title,content,view,comment) values(1,1,'天气真好','今天天气真好啊啊啊啊啊啊啊啊啊啊',10,5);
#音乐表
DROP TABLE IF EXISTS `eblog_music`;
CREATE TABLE `eblog_music`(
`mid` int(11) primary key NOT NULL AUTO_INCREMENT,
`title` varchar(200) NOT NULL,
`singer` varchar(200) NOT NULL,
`url` varchar(200) NOT NULL,
`create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
)ENGINE=MyISAM  DEFAULT CHARSET=utf8;
insert into `eblog_music`(mid,title,singer,url) values(1,'花海','周杰伦','Uploads/music/花海 - 周杰伦.mp3');
#用户表
DROP TABLE IF EXISTS `eblog_admin`;
CREATE TABLE `eblog_admin`(
`uid` int(11) primary key NOT NULL AUTO_INCREMENT,
`name` char(100) NOT NULL,
`password` char(50) NOT NULL,
`create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
)ENGINE=MyISAM  DEFAULT CHARSET=utf8;
insert into `eblog_admin`(uid,name,password) values(1,'admin','21232f297a57a5a743894a0e4a801fc3');

#评论表
DROP TABLE IF EXISTS `eblog_comment`;
CREATE TABLE `eblog_comment`(
`coid` int(11) primary key NOT NULL AUTO_INCREMENT,
`aid`  int(11) NOT NULL,
`coname` char(200) NOT NULL,
`email` char(200)  NOT NULL,
`content` varchar(500) NOT NULL,
`create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
)ENGINE=MyISAM  DEFAULT CHARSET=utf8;
insert into `eblog_comment`(coid,aid,coname,email,content) values(1,1,'随风','12345@qq.com','写的真不错');

#分类表
DROP TABLE IF EXISTS `eblog_category`;
CREATE TABLE `eblog_category`(
`cid` int(11) primary key NOT NULL AUTO_INCREMENT,
`cname` char(200) NOT NULL,
`description` char(200)  NOT NULL,
`create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
)ENGINE=MyISAM  DEFAULT CHARSET=utf8;
insert into `eblog_category`(cid,cname,description) values(1,'随笔','闲来无事乱涂笔');
