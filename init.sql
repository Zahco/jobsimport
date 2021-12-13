CREATE DATABASE cmc_db;
USE `cmc_db`;

CREATE TABLE `job` (
    `id` int NOT NULL auto_increment,
    `reference` varchar(255),
    `title` varchar(255),
    `description` TEXT,
    `link` varchar(255),
    `company` varchar(255),
    `publishDate` date,
    `source` varchar(255),
    PRIMARY KEY(`id`)
);
