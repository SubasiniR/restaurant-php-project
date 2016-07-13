CREATE DATABASE IF NOT EXISTS `Restaurant` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `Restaurant`;

DROP TABLE IF EXISTS `TableStatus`;
CREATE TABLE `TableStatus` (
  `TableNumber` int(11) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `ChairCount` int(11) NOT NULL
);

INSERT INTO `TableStatus` VALUES (1, 'indoor', 2);
INSERT INTO `TableStatus` VALUES (2, 'indoor', 2);
INSERT INTO `TableStatus` VALUES (3, 'indoor', 4);
INSERT INTO `TableStatus` VALUES (4, 'indoor', 4);
INSERT INTO `TableStatus` VALUES (5, 'indoor', 4);
INSERT INTO `TableStatus` VALUES (6, 'indoor', 4);
INSERT INTO `TableStatus` VALUES (7, 'indoor', 4);
INSERT INTO `TableStatus` VALUES (8, 'indoor', 6);
INSERT INTO `TableStatus` VALUES (9, 'indoor', 6);
INSERT INTO `TableStatus` VALUES (10, 'indoor', 6);
INSERT INTO `TableStatus` VALUES (11, 'indoor', 12);
INSERT INTO `TableStatus` VALUES (12,'outdoor',2);
INSERT INTO `TableStatus` VALUES (13,'outdoor',2);
INSERT INTO `TableStatus` VALUES (14,'outdoor',2);
INSERT INTO `TableStatus` VALUES (15,'outdoor',2);
INSERT INTO `TableStatus` VALUES (16,'outdoor',2);
INSERT INTO `TableStatus` VALUES (17,'outdoor',4);
INSERT INTO `TableStatus` VALUES (18,'outdoor',4);
INSERT INTO `TableStatus` VALUES (19,'outdoor',4);
INSERT INTO `TableStatus` VALUES (20,'outdoor',6);