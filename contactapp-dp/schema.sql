CREATE TABLE `user` (
`id` int(10) unsigned NOT NULL AUTO_INCREMENT,
`username` varchar(64) NOT NULL,
`password` varchar(40) NOT NULL,
`admin` tinyint(3) unsigned NOT NULL DEFAULT '0',
PRIMARY KEY (`id`)
) ENGINE=InnoDB;