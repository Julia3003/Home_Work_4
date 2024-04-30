<?php

require_once __DIR__ . '/BankAccount.php';

//$bankAccount = new bankAccount(123444, 150.45);
//
//$bankAccount->getProperties();



$bankAccount = new BankAccount('12', 1);
$bankAccount->cherry = 234;
$bankAccount->showBalance();



try {
	$user = new BankAccount('12', 1);
} catch (Exception $exception) {
	echo $exception->getMessage();
} finally {
}

echo $bankAccount->cherry . PHP_EOL;

//$dinamic = new stdClass();
//$dinamic->name = 'test';


