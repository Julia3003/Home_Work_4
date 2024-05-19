<?php
define('APP_DIR', __DIR__ . '/');

require_once 'system/Config.php';
require_once 'database/Connect.php';

try {
	$database = Connect::getInstance();
	$results = $database->exec("INSERT INTO `products_in_warehouse`(`name_product`,`price`, `category`, `description`)
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
           ('Сreatine', 1097.05, 'sports nutrition', 'Increases strength and endurance')");
	$stmt = $database->query("SELECT * FROM `products_in_warehouse`");
	$result = $stmt->fetchAll();
	} catch (PDOException $exception) {
	echo $exception->getMessage();
	}

	

//	$stmt = $database->query("SELECT * FROM `products_in_warehouse`");
//	while ($row = $stmt->fetch()) {
//		echo $row['name_product'] . "<br>";
//	}
	
//require_once __DIR__ . '/BankAccount.php';
//
//$topUpAmount = 0;
//try {
//	$bankAccount = new BankAccount('12872503456');
//	$bankAccount->setBalance(10000.55);
//	$bankAccount->replenishmentAccount($topUpAmount);
//	echo 'Загальний баланс після поповнення рахунку номер ' . $bankAccount->getAccountNumber() . ' - ' . $bankAccount->getBalance() . PHP_EOL;
//
//} catch (Exception $exception) {
//	echo $exception->getMessage();
//}
//
//$withdrawingAmount = 500;
//try {
//	$bankAccount = new BankAccount('1324665', 5000);
//	$bankAccount->withdrawalCash($withdrawingAmount);
//	echo 'Загальний баланс після зняття коштів з рахунку номер ' . $bankAccount->getAccountNumber() . ' - ' . $bankAccount->getBalance() . PHP_EOL;
//} catch (Exception $exception) {
//	echo $exception->getMessage();
//}

//echo phpinfo();
//try {
//	$dsn = 'mysql:host=mysql;port=3306;dbname=hillel';
//	$database = new PDO($dsn, 'root','password');
//	var_dump($database);
	
//	$results = $database->exec("INSERT INTO `products_in_warehouse`(`name_product`,`price`, `category`, `description`)
//    VALUES ('Mango', 520.25, 'fruits', 'General information about mangoes. The Tommy Atkins mango is the most common
//            variety of mango fruit. The fruit was bred in Florida for commercial use. The most optimal use of this
//            variety is considered to be its use in the food and confectionery industry. The fruits are larger than
//            average in size, one fruit weighs about 700 grams. Despite the fact that Tommy Atkins fruits are inferior
//            in taste to other mango varieties, this variety is valued for its long shelf life and good preservation
//            during transportation. Currently, Tommy Atkins is grown in North America, Central America, and many regions
//            of South America, including Mexico. You can buy Tommy Atkins mangoes in the FRUIT TIME online store, which
//            is a leader among distributors selling vegetables, mushrooms, fruits, nuts and other exotic fruits.'),
//           ('Apple', 32.95, 'fruits', 'Very tasty sour green fruits.'),
//           ('Champignons', 100.50, 'mushrooms', 'Champignons can be eaten boiled and fried, stewed and baked.'),
//           ('Tomatoes', 89.90, 'vegetables', 'Tomatoes are the most delicious vegetable.'),
//           ('Protein', 645.01, 'sports nutrition', 'Increases amino acid levels, stimulates the immune system.'),
//           ('Onion', 37.99, 'vegetables', 'Gives energy to life.'),
//           ('Сreatine', 1097.05, 'sports nutrition', 'Increases strength and endurance')");
	
//	$stmt = $database->query("SELECT * FROM `products_in_warehouse`");
//	while ($row = $stmt->fetch()) {
//		echo $row['name_product'] . "<br>";
//	}
	
	
//	$result = $stmt->fetchAll();
//	$stmt1 = $database->query("SELECT `name_product`, `price` FROM `products_in_warehouse` WHERE `price` > 500 ORDER BY `price` DESC");
//	$result1 = $stmt1->fetchAll();
//
//	echo "<pre>";
//	print_r($result1);
//	echo "<pre>";
	
//} catch (PDOException $exception) {
//	echo $exception->getMessage();
//}

require_once 'database/Connect.php';
$dsn = 'mysql:host=mysql;port=3306;dbname=hillel';
$database = Connect::getInstance();
$database = new PDO($dsn, 'root','password');

