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

CREATE TABLE `text` (
	`id` int AUTO_INCREMENT,
	`user_id` INT,
	`name` VARCHAR(20),
	`title` VARCHAR(50),
	`paragraf` VARCHAR(255),
	PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES `user`(`id`)
);

INSERT INTO `text` VALUES
	(1, 1, 'index_1', 'Első cím', ''),
	(2, 1, 'index_2', 'Második cím', ''),
	(3, 1, 'index_3', 'Harmadik cím', ''),
	(4, 1, 'index_4', 'Negyedik cím', ''),
	(5, 1, 'index_5', 'Ötötdik cím', ''),
	(6, 1, 'index_6', 'Hatodik cím', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
	(7, 1, 'index_7', 'Hetedik cím', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
	(8, 1, 'index_8', 'Nyolcadik cím', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
	(9, 1, 'index_9', 'Kilencedik cím', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
	(10, 1, 'services_1', 'Első cím', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
	(11, 1, 'services_2', 'Második cím', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
	(12, 1, 'services_3', 'Harmadik cím', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
	(13, 1, 'services_4', 'Negyedik cím', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
	(14, 1, 'services_5', 'Ötödik cím', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
	(15, 1, 'about_1', 'Első cím', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
	(16, 1, 'about_2', 'Második cím', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
	(17, 1, 'about_3', 'Harmadik cím', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
	(18, 1, 'about_4', 'Negyedik cím', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'),
	(19, 1, 'about_5', 'Ötödik cím', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.')
;

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
    `name` VARCHAR(50),
    `location` VARCHAR(255),
    `description` VARCHAR(255),
    `updated_at` DATE,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`user_id`) REFERENCES `user`(`id`),
    FOREIGN KEY (`category_id`) REFERENCES `category`(`id`)
);

INSERT INTO `images` (`user_id`, `category_id`, `name`, `location`, `description`, `updated_at`) VALUES
    (1, 1, 'első kép', '1.jpg', '', '2019-11-20'),
    (1, 1, 'második kép', '2.jpg', '', '2019-11-20'),
    (1, 1, 'harmadik kép', '3.jpg', '', '2019-11-20'),
    (1, 1, 'negyedik kép', '4.jpg', '', '2019-11-20'),
    (1, 1, 'ötödik kép', '5.jpg', '', '2019-11-20'),
    (1, 1, 'hatodik kép', '6.jpg', '', '2019-11-20')
;
