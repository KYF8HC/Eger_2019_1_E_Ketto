DROP DATABASE IF EXISTS `portfolio`;
CREATE DATABASE `portfolio`;
CREATE TABLE `users` (
    `UserID` int AUTO_INCREMENT,
    `name` VARCHAR(255),
    `password` VARCHAR(255),
    `phone_number` VARCHAR(255),
    `city` VARCHAR(255),
    `behance_link` VARCHAR(255),
    `pinterest_link` VARCHAR(255),
    `fb_link` VARCHAR(255),
    `inst_link` VARCHAR(255),
    `email` VARCHAR(255),
    PRIMARY KEY (`id`)
);

INSERT INTO `users` (`name`, `behance`) VALUES
    ('Dani', 10000)
;

CREATE TABLE `category` (
`id` int AUTO_INCREMENT,
`name` VARCHAR(255),
`user_id` int,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES user(user_id)
);

INSERT INTO `category`(`name`, `user_id`) VALUES
	('Természet', 1),
    ('Állatok', 1),
    ('Épületek', 1),
    ('Hétköznapi élet', 1)
;

CREATE TABLE `images`(
`id` int AUTO_INCREMENT,
`name` VARCHAR(255),
`location` VARCHAR(255),
`updated_at` DATE,
`category` VARCHAR(255),
`description` VARCHAR(255),
`user_id` int,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES user(user_id)
);

INSERT INTO `images` (`name`, `location`, `updated_at`, 
	`category`, `description`, `user_id`) VALUES
    ('Színes erdő', @'C:\wamp64\www\Portfolio\assets\img', SYSDATE(), 'Természet', 'Erdő', 1) 
;
