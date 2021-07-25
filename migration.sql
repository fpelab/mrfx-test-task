INSERT INTO `bans_words` (`word`) VALUES ("Нельзя");
INSERT INTO `bans_words` (`word`) VALUES ("запрещено");
INSERT INTO `bans_words` (`word`) VALUES ("табу");
ALTER TABLE `posts` ADD `category_rating` INT NOT NULL DEFAULT '0' AFTER `rating`;
