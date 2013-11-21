SET FOREIGN_KEY_CHECKS=0;

CREATE TABLE `apns_device_history` (
  `pid` int(9) unsigned NOT NULL auto_increment,
  `clientid` varchar(64) NOT NULL,
  `appname` varchar(255) NOT NULL,
  `appversion` varchar(25) default NULL,
  `deviceuid` char(40) NOT NULL,
  `devicetoken` char(64) NULL,
  `devicename` varchar(255) NOT NULL,
  `devicemodel` varchar(100) NOT NULL,
  `deviceversion` varchar(25) NOT NULL,
  `pushbadge` enum('disabled','enabled') default 'disabled',
  `pushalert` enum('disabled','enabled') default 'disabled',
  `pushsound` enum('disabled','enabled') default 'disabled',
  `development` enum('production','sandbox') character set latin1 NOT NULL default 'production',
  `status` enum('active','uninstalled') NOT NULL default 'active',
  `archived` datetime NOT NULL,
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
 
  PRIMARY KEY  (`pid`),
  KEY `clientid` (`clientid`),
  KEY `devicetoken` (`devicetoken`),
  KEY `devicename` (`devicename`),
  KEY `devicemodel` (`devicemodel`),
  KEY `deviceversion` (`deviceversion`),
  KEY `pushbadge` (`pushbadge`),
  KEY `pushalert` (`pushalert`),
  KEY `pushsound` (`pushsound`),
  KEY `development` (`development`),
  KEY `status` (`status`),
  KEY `appname` (`appname`),
  KEY `appversion` (`appversion`),
  KEY `deviceuid` (`deviceuid`),
  KEY `archived` (`archived`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Store unique device history';

CREATE TABLE `apns_devices` (
  `pid` int(9) unsigned NOT NULL auto_increment,
  `clientid` varchar(64) NOT NULL,
  `appname` varchar(255) NOT NULL,
  `appversion` varchar(25) default NULL,
  `deviceuid` char(40) NOT NULL,
  `devicetoken` char(64) NULL,
  `devicename` varchar(255) NOT NULL,
  `devicemodel` varchar(100) NOT NULL,
  `deviceversion` varchar(25) NOT NULL,
  `pushbadge` enum('disabled','enabled') default 'disabled',
  `pushalert` enum('disabled','enabled') default 'disabled',
  `pushsound` enum('disabled','enabled') default 'disabled',
  `development` enum('production','sandbox') character set latin1 NOT NULL default 'production',
  `status` enum('active','uninstalled') NOT NULL default 'active',
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`pid`),
  UNIQUE KEY `appname_uid` (`appname`,`deviceuid`),
  UNIQUE KEY `appname_token` (`appname`,`devicetoken`),
  KEY `clientid` (`clientid`),
  KEY `devicetoken` (`devicetoken`),
  KEY `devicename` (`devicename`),
  KEY `devicemodel` (`devicemodel`),
  KEY `deviceversion` (`deviceversion`),
  KEY `pushbadge` (`pushbadge`),
  KEY `pushalert` (`pushalert`),
  KEY `pushsound` (`pushsound`),
  KEY `development` (`development`),
  KEY `status` (`status`)

) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Store unique devices';

DELIMITER ;;
CREATE TRIGGER `Archive` BEFORE UPDATE ON `apns_devices` FOR EACH ROW INSERT INTO `apns_device_history` VALUES (
	NULL,
	OLD.`clientid`,
	OLD.`appname`,
	OLD.`appversion`,
	OLD.`deviceuid`,
	OLD.`devicetoken`,
	OLD.`devicename`,
	OLD.`devicemodel`,
	OLD.`deviceversion`,
	OLD.`pushbadge`,
	OLD.`pushalert`,
	OLD.`pushsound`,
	OLD.`development`,
	OLD.`status`,
	NOW()
);;
DELIMITER ;

CREATE TABLE `apns_messages` (
  `pid` int(9) unsigned NOT NULL auto_increment,
  `clientid` varchar(64) NOT NULL,
  `fk_device` int(9) unsigned NOT NULL,
  `message` varchar(255) NOT NULL,
  `delivery` datetime NOT NULL,
  `status` enum('queued','delivered','failed') character set latin1 NOT NULL default 'queued',
  `create_time` datetime NOT NULL,
  `create_user_id` int(11) unsigned NOT NULL,
  `update_time` datetime NOT NULL,
  `update_user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY  (`pid`),
  KEY `clientid` (`clientid`),
  KEY `fk_device` (`fk_device`),
  KEY `status` (`status`),

  KEY `message` (`message`),
  KEY `delivery` (`delivery`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Messages to push to APNS';