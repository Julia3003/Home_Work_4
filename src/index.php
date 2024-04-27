<?php
class bankAccount
{
	public int $accountNumber;
	public int|float $balance;
}


$bankAccount = new bankAccount();
$bankAccount->accountNumber = '123444';
$bankAccount->balance = 155000.45;
var_dump($bankAccount);


