<?php

require_once __DIR__ . '/bankAccount.php';

$bankAccount = new bankAccount(123444, 150.45);

$bankAccount->getProperties();

$user = new bankAccount('12', 1);

class bankAccount
{
	private int $accountNumber;
	private int|float $balance;
	
	public function __construct(int $accountNumber, int|float $balance)
	{
		$this->setAccountNumber($accountNumber);
		$this->setBalance($balance);
	}
	
	/**
	 * @param int $accountNumber
	 */
	public function setAccountNumber(int $accountNumber): void
	{
		if ($accountNumber < 3) {
			return;;
		}
		$this->accountNumber = $accountNumber;
	}
	
	/**
	 * @param float|int $balance
	 */
	public function setBalance(float|int $balance): void
	{
		if ($balance < 0){
			return;
		}
		$this->balance = $balance;
		
	}
	
	/**
	 * @return int
	 */
	/**
	 * @return int
	 */
	public function getAccountNumber(): int
	{
		return $this->accountNumber;
	}
	
	
	/**
	 * @return float|int
	 */
	/**
	 * @return float|int
	 */
	public function getBalance(): float|int
	{
		return $this->balance;
	}
	
	
	
	
	public function getProperties(): void
	{
		echo $this->getAccountNumber() . PHP_EOL;
		echo $this->getBalance() . PHP_EOL;
		
	}
	public function replenishmentAccount()
	{
	
	}
	public function withdrawalCash()
	{
	
	}
	
	
}

//$dinamic = new stdClass();
//$dinamic->name = 'test';


