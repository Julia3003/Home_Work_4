<?php

use database\Connect;

define('APP_DIR', __DIR__ . '/');

require_once 'system/Config.php';
require_once 'database/Connect.php';

try {
	$database = Connect::getInstance();
} catch (PDOException $exception) {
	echo 'Сonnection to database unsuccessful' . $exception->getMessage() . PHP_EOL;
}

try {
	$results = $database->exec("INSERT INTO `products_in_warehouse`(`name_product`,`price`, `category`, `description`)
    VALUES ('Mango', 520.25, 'fruits', 'General information about mangoes. The Tommy Atkins mango is the most common
            variety of mango fruit.'),
           ('Champignons', 100.50, 'mushrooms', 'Champignons can be eaten boiled and fried, stewed and baked.'),
           ('Tomatoes', 89.90, 'vegetables', 'Tomatoes are the most delicious vegetable.'),
           ('Protein', 645.01, 'sports nutrition', 'Increases amino acid levels, stimulates the immune system.'),
           ('Onion', 37.99, 'vegetables', 'Gives energy to life.'),
           ('Сreatine', 1097.05, 'sports nutrition', 'Increases strength and endurance')");
} catch (PDOException $exception) {
	echo 'Сonnection to database unsuccessful' . $exception->getMessage();
}

	try {
	$stmt = $database->query("SELECT * FROM `products_in_warehouse`");
	$result = $stmt->fetchAll();
	print_r($result);
	} catch (PDOException $exception) {
		echo 'query failed - SELECT * FROM products_in_warehouse ' . $exception->getMessage() . PHP_EOL;
	}

try {
	$stmt = $database->query("SELECT `name_product`, `price` FROM `products_in_warehouse`");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT `name_product`, `price` FROM products_in_warehouse ' . $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("SELECT `name_product`, `price` FROM `products_in_warehouse` WHERE `price` > 500 ORDER BY `price` DESC");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT `name_product`, `price` FROM `products_in_warehouse` WHERE `price` > 500 ORDER BY `price` DESC' . $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("SELECT `name_product`, `price`, `category` FROM `products_in_warehouse` WHERE `price` > 500 AND `category` = 'fruits'
       ORDER BY `price` DESC;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT `name_product`, `price`, `category` FROM `products_in_warehouse` WHERE `price` > 500 AND `category` = fruits
       ORDER BY `price` DESC' . $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("SELECT AVG(`price`) as avg_price FROM `products_in_warehouse`;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT AVG(`price`) as avg_price FROM products_in_warehouse' . $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("UPDATE `products_in_warehouse` SET `price` = 926.34 WHERE `id` = 5;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - UPDATE `products_in_warehouse` SET `price` = 926.34 WHERE `id` = 5' . $exception->getMessage() . PHP_EOL;
}



try {
	$results = $database->exec("INSERT INTO `employees`(`surname`,`name`)
    VALUES ('Magic', 'John'),
           ('Luis', 'Kurt'),
           ('Gold', 'Jeffrey'),
           ('Silver', 'Stone'),
           ('Muffin', 'Watson'),
           ('Defender', 'Good')");
} catch (PDOException $exception) {
	echo 'query failed - INSERT INTO `employees`(`surname`,`name`)' . $exception->getMessage();
}

try {
	$stmt = $database->query("SELECT * FROM `employees`;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed -  SELECT * FROM `employees`' . $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("SELECT `surname`, `start_work` FROM `employees` WHERE `finish_work` IS NULL;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT `surname`, `start_work` FROM `employees` WHERE `finish_work` IS NULL;' . $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("UPDATE `employees` SET `finish_work` = CURRENT_TIMESTAMP WHERE `surname` = 'Luis' OR `surname` = 'Defender';");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - UPDATE `employees` SET `finish_work` = CURRENT_TIMESTAMP WHERE `surname` = Luis OR surname = Defender' . $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("UPDATE `employees` SET `surname` = 'Valentino' WHERE `id` = 3;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - UPDATE `employees` SET `surname` = Valentino WHERE `id` = 3' . $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("DELETE FROM `employees` WHERE `id` IN (6);");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - DELETE FROM `employees` WHERE `id` IN (6)' . $exception->getMessage() . PHP_EOL;
}



try {
	$results = $database->exec("INSERT INTO `users`(`name`, `email`, `age`, `gender`, `password`)
    VALUES ('Jack', 'jake@gmail.com', 23, 'male', 'jacktesttestest'),
           ('Tom', 'tom@gmail.com', 28, 'male', 'tomtesttestest')");
} catch (PDOException $exception) {
	echo 'query failed - INSERT INTO  `users`(`name`, `email`, `age`, `gender`, `password`)' . $exception->getMessage();
}


try {
	$stmt = $database->query("SELECT * FROM `users`;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT * FROM `users` '. $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("SELECT `name`, `email` FROM users;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT `name`, `email` FROM users` '. $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("SELECT * FROM `users` WHERE `id` = 1;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT * FROM `users` WHERE `id` = 1` '. $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("SELECT * FROM `users` WHERE `gender` = 'female' AND `age` > 25;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT * FROM `users` WHERE `gender` = female AND `age` > 25` '. $exception->getMessage() . PHP_EOL;
}


try {
	$stmt = $database->query("SELECT * FROM `users` WHERE `gender` = 'male' OR `age` > 32;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT * FROM `users` WHERE `gender` = male OR `age` > 32` '. $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("SELECT * FROM `users` WHERE (`gender` = 'male' OR `age` > 32) AND `id` > 2;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT * FROM `users` WHERE (`gender` = male OR `age` > 32) AND `id` > 2` '. $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("SELECT * FROM `users` WHERE `created_at` > '2024-05-16 20:00:00';");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT * FROM `users` WHERE `created_at` > 2024-05-16 20:00:00 '. $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("SELECT * FROM `users` WHERE `deleted_at` IS NULL;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT * FROM `users` WHERE `deleted_at` IS NULL '. $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("SELECT * FROM `users` WHERE `deleted_at` IS NOT NULL;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT * FROM `users` WHERE `deleted_at` IS NOT NULL '. $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("SELECT * FROM `users` WHERE `id` IN (2,3,4);");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT * FROM `users` WHERE `id` IN (2,3,4)'. $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("SELECT * FROM `users` WHERE `id` NOT IN (2,3);");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT * FROM `users` WHERE `id` NOT IN (2,3)'. $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("SELECT * FROM `users` ORDER BY `name` DESC;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT * FROM `users` ORDER BY `name` DESC'. $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("SELECT * FROM `users` ORDER BY `name` , `age` DESC;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT * FROM `users` ORDER BY `name` , `age` DESC'. $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("SELECT * FROM `users` LIMIT 2;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT * FROM `users` LIMIT 2' . $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("SELECT `id`, `name` FROM `users` WHERE `age` > 25 ORDER BY `name` DESC LIMIT 2;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - SELECT `id`, `name` FROM `users` WHERE `age` > 25 ORDER BY `name` DESC LIMIT 2 ' . $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("DELETE FROM `users` WHERE `id` = 1;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - DELETE FROM `users` WHERE `id` = 1' . $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("UPDATE `users` SET `deleted_at` = CURRENT_TIMESTAMP WHERE `id` = 2;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - UPDATE `users` SET `deleted_at` = CURRENT_TIMESTAMP WHERE `id` = 2' . $exception->getMessage() . PHP_EOL;
}

try {
	$stmt = $database->query("UPDATE `users` SET `deleted_at` = NULL, `name` = 'Bill' WHERE `id` = 2;");
	$result = $stmt->fetchAll();
	print_r($result);
} catch (PDOException $exception) {
	echo 'query failed - UPDATE `users` SET `deleted_at` = NULL, `name` = Bill WHERE `id` = 2' . $exception->getMessage() . PHP_EOL;
}
