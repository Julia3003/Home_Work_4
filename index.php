<?php

require_once __DIR__ . '/bankAccount.php';

//$bankAccount = new bankAccount(123444, 150.45);
//
//$bankAccount->getProperties();

$user = new bankAccount('12', 1);

try {
	$user = new bankAccount('12', 1);
} catch (Exception $exception) {
	echo $exception->getMessage();
} finally {

}

//$dinamic = new stdClass();
//$dinamic->name = 'test';


