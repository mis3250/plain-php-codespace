
/*
Table struture for hero
*/

drop table if exists `hero`;
CREATE TABLE `hero` (
  `id` int(11) NOT NULL default '0',
  `name` varchar(30) default NULL,
  `power` varchar(30) default NULL,
  `weapon` varchar(30) default NULL,
  `transportation` varchar(30) default NULL,
  PRIMARY KEY  (`id`)
) TYPE=MyISAM;


INSERT INTO `hero` VALUES (0,'Professor One','Earthquake generation','Laser Pointer','Binary Cow') , (1,'Bat Worm','Super Speed','Worm belt','Bat taxi') , (2,'Millennium Panther','Death Breath','Panther Bullets','Panther Submarine') , (3,'Lightning Guardian','Electric Toe','Guardian Missles','Guardian Moped') , (4,'Yak-Bot','Super Yurt','Yakbutter flamethrower','Yak Dirigible') ;
