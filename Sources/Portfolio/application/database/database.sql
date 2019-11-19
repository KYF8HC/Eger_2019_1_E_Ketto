DROP DATABASE IF EXISTS `portfolio`;
CREATE DATABASE `portfolio`;
CREATE TABLE `user` (
    `id` int AUTO_INCREMENT,
    `name` VARCHAR(255),
    `password` VARCHAR(255),
	`email` VARCHAR(255),
    `phone` VARCHAR(255),
    `city` VARCHAR(255),
    `address` VARCHAR(255),
    `facebook` VARCHAR(255),
    `instagram` VARCHAR(255),
    `twitter` VARCHAR(255),
    `youtube` VARCHAR(255),
    `pinterest` VARCHAR(255),
    `tumblr` VARCHAR(255),
	`behance` VARCHAR(255),
	`github` VARCHAR(255),
	`linkedin` VARCHAR(255),
    PRIMARY KEY (`id`)
);

INSERT INTO `user` VALUES
    (1, 'Dani', '$2y$10$RCSUtgH/E9uGfosai5E4/.F3BuAiN77DVGK/4OMdBSLvES98LG9Ma', 'afp1@gmail.com','+3630 1234567', 'Budapest', '', 'facebook.com', '', 'twitter.com', '', '', '', '', '', '')
;
/* jelszó: asd*/

CREATE TABLE `category` (
    `id` int AUTO_INCREMENT,
    `user_id` int,
    `name` VARCHAR(15),
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES `user`(`id`)
);

INSERT INTO `category`(`name`, `user_id`) VALUES
	('Természet', 1),
    ('Állatok', 1),
    ('Épületek', 1),
    ('Hétköznapi élet', 1)
;

CREATE TABLE `images`(
    `id` int AUTO_INCREMENT,
    `user_id` int,
    `category_id` int,
    `name` VARCHAR(25),
    `location` VARCHAR(255),
    `updated_at` DATE,
    `description` VARCHAR(255),
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES `user`(`id`),
    FOREIGN KEY (`category_id`) REFERENCES `category`(`id`)
);

INSERT INTO `images` (`name`, `location`, `updated_at`, `description`, `user_id`, `category_id`) VALUES
    ('Színes erdő', 'ColorfulForest.jpg', SYSDATE(), 'Erdő', 1, 1) 
;
