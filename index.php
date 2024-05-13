<? // порушує 1й стандарт PSR https://www.php-fig.org/psr/psr-1/

require_once __DIR__ . '/BankAccount.php';

$topUpAmount = 0;
try {
	$bankAccount = new BankAccount('12872503456');
	$bankAccount->setBalance(10000.55);
	$bankAccount->replenishment_account($topUpAmount);
	echo 'Загальний баланс після поповнення рахунку номер ' . $bankAccount->getAccountNumber() . ' - ' . $bankAccount->getBalance() . PHP_EOL;
	
} catch (Exception $exception) {
	echo $exception->getMessage();
}

$withdrawingAmount = 500;
try {
	$bankAccount = new BankAccount('1324665', 5000);
	$bankAccount->withdrawalCash($withdrawingAmount);
	echo 'Загальний баланс після зняття коштів з рахунку номер ' . $bankAccount->getAccountNumber() . ' - ' . $bankAccount->getBalance() . PHP_EOL;
} catch (Exception $exception) {
	echo $exception->getMessage();
}


