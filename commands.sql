CREATE TABLE IF NOT EXISTS `products_in_warehouse`
(
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name_product` VARCHAR(255) NOT NULL,
    `price` decimal(10,2) UNSIGNED DEFAULT NULL,
    `category` ENUM('sports nutrition', 'vegetables', 'fruits', 'mushrooms'),
    `description` TEXT,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(),
    `deleted_at` TIMESTAMP DEFAULT NULL
    ) ENGINE = InnoDB CHARACTER SET utf8;

INSERT INTO `products_in_warehouse`(`name_product`,`price`, `category`, `description`)
VALUES ('Mango', 520.25, 'fruits', 'General information about mangoes. The Tommy Atkins mango is the most common
            variety of mango fruit. The fruit was bred in Florida for commercial use. The most optimal use of this
            variety is considered to be its use in the food and confectionery industry. The fruits are larger than
            average in size, one fruit weighs about 700 grams. Despite the fact that Tommy Atkins fruits are inferior
            in taste to other mango varieties, this variety is valued for its long shelf life and good preservation
            during transportation. Currently, Tommy Atkins is grown in North America, Central America, and many regions
            of South America, including Mexico. You can buy Tommy Atkins mangoes in the FRUIT TIME online store, which
            is a leader among distributors selling vegetables, mushrooms, fruits, nuts and other exotic fruits.'),
       ('Apple', 32.95, 'fruits', 'Very tasty sour green fruits.'),
       ('Champignons', 100.50, 'mushrooms', 'Champignons can be eaten boiled and fried, stewed and baked.'),
       ('Tomatoes', 89.90, 'vegetables', 'Tomatoes are the most delicious vegetable.'),
       ('Protein', 645.01, 'sports nutrition', 'Increases amino acid levels, stimulates the immune system.'),
       ('Onion', 37.99, 'vegetables', 'Gives energy to life.'),
       ('Сreatine', 1097.05, 'sports nutrition', 'Increases strength and endurance.');

SELECT * FROM `products_in_warehouse`;
SELECT `name_product`, `price` FROM `products_in_warehouse`;
SELECT `name_product`, `price` FROM `products_in_warehouse` WHERE `price` > 500 ORDER BY `price` DESC;
SELECT `name_product`, `price`, `category` FROM `products_in_warehouse` WHERE `price` > 500 AND `category` = 'fruits'
ORDER BY `price` DESC;

SELECT AVG(`price`) as avg_price FROM `products_in_warehouse`;

UPDATE `products_in_warehouse` SET `price` = 926.34 WHERE `id` = 5;

DELETE FROM `products_in_warehouse` WHERE `id` = 2;


CREATE TABLE IF NOT EXISTS `employees`
(
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `surname` VARCHAR(40) NOT NULL,
    `name` VARCHAR(40) NOT NULL,
    `start_work` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    `finish_work` TIMESTAMP DEFAULT NULL
    ) ENGINE = InnoDB CHARACTER SET utf8;

INSERT INTO `employees`(`surname`,`name`)
VALUES ('Magic', 'John'),
       ('Luis', 'Kurt'),
       ('Gold', 'Jeffrey'),
       ('Silver', 'Stone'),
       ('Muffin', 'Watson'),
       ('Defender', 'Good');

SELECT * FROM `employees`;
SELECT `surname`, `start_work` FROM `employees` WHERE `finish_work` IS NULL;

UPDATE `employees` SET `finish_work` = CURRENT_TIMESTAMP WHERE `surname` = 'Luis' OR `surname` = 'Defender';
UPDATE `employees` SET `surname` = 'Valentino' WHERE `id` = 3;

DELETE FROM `employees` WHERE `id` IN (6);




CREATE TABLE IF NOT EXISTS `users`
(
    `id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `name` CHAR(100) NOT NULL,
    `email` CHAR(255) UNIQUE NOT NULL,
    `age` TINYINT UNSIGNED DEFAULT NULL,
    `gender` ENUM('male', 'female'),
    `password` CHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP(),
    `deleted_at` TIMESTAMP DEFAULT NULL
    ) ENGINE = InnoDB CHARACTER SET utf8;

INSERT INTO `users`(`name`, `email`, `age`, `gender`, `password`)
VALUES ('Jack', 'jake@gmail.com', 23, 'male', 'jacktesttestest'),
       ('Tom', 'tom@gmail.com', 28, 'male', 'tomtesttestest');


SELECT * FROM `users`;
SELECT `name`, `email` FROM users

SELECT * FROM `users` WHERE `id` = 1;

SELECT * FROM `users` WHERE `gender` = 'female' AND `age` > 25;
SELECT * FROM `users` WHERE `gender` = 'male' OR `age` > 32;
SELECT * FROM `users` WHERE (`gender` = 'male' OR `age` > 32) AND `id` > 2;

SELECT * FROM `users` WHERE `created_at` > '2024-05-16 20:00:00';

SELECT * FROM `users` WHERE `deleted_at` IS NULL;

SELECT * FROM `users` WHERE `deleted_at` IS NOT NULL;

SELECT * FROM `users` WHERE `email` LIKE '%gmail.com';

SELECT * FROM `users` WHERE `id` IN (2,3,4);

SELECT * FROM `users` WHERE `id` NOT IN (2,3);

SELECT * FROM `users` ORDER BY `name` DESC;
SELECT * FROM `users` ORDER BY `name` , `age` DESC;

SELECT * FROM `users` LIMIT 2;

SELECT `id`, `name` FROM `users` WHERE `age` > 25 ORDER BY `name` DESC LIMIT 2;

DELETE FROM `users` WHERE `id` = 1;

UPDATE `users` SET `deleted_at` = CURRENT_TIMESTAMP WHERE `id` = 2;

UPDATE `users` SET `deleted_at` = NULL, `name` = 'Bill' WHERE `id` = 2;