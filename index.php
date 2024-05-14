<? // порушує 1й стандарт PSR https://www.php-fig.org/psr/psr-1/

require_once __DIR__ . '/BankAccount.php';

$topUpAmount = 0;
try
{ //порушення 12-го стандарту PSR, а саме: п. 5.6 try, catch, finally. Помилка: дужка { повинна розміщуватись на одному рядку з try через пробіл
	$bankAccount = new BankAccount('12872503456');
	$bankAccount->setBalance (10000.55);//порушення 12-го стандарту PSR, а саме: не повинно бути пробілу перед скобкой (
	$bankAccount->replenishment_account($topUpAmount);
	echo 'Загальний баланс після поповнення рахунку номер ' . $bankAccount->getAccountNumber() . ' - ' . $bankAccount->getBalance() . PHP_EOL;
	
} catch(Exception $exception) //порушення 12-го стандарту PSR, а саме: п. 5.6 try, catch, finally. Помилка: між catch та дужкою повинен бути один пробіл.
{ //порушення 12-го стандарту PSR, а саме: п. 5.6 try, catch, finally. Помилка: дужка { повинна розміщуватись на одному рядку з catch через пробіл
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


