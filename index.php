<?php

require_once __DIR__ . '/BankAccount.php';

$topUpAmount = 50;
try {
	$bankAccount = new BankAccount('12872503456', 5000453.45);
	$bankAccount->replenishmentAccount($topUpAmount);
	echo 'Загальний баланс після поповнення рахунку номер ' . $bankAccount->getAccountNumber() . ' - ' . $bankAccount->getBalance() . PHP_EOL;
	
} catch (Exception $exception) {
	echo $exception->getMessage();
}

$withdrawingAmount = 500;
try {
	$bankAccount = new BankAccount('1324665', 656878787);
	$bankAccount->withdrawalCash($withdrawingAmount);
	echo 'Загальний баланс після зняття коштів з рахунку номер ' . $bankAccount->getAccountNumber() . ' - ' . $bankAccount->getBalance() . PHP_EOL;
} catch (Exception $exception) {
	echo $exception->getMessage();
}


