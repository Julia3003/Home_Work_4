<?php
class BankAccount
{
	private string $accountNumber;
	private int|float $balance = 0;
	
	private array $data = [];
	
	public function __set(string $sum, $value): void
	{
		$this-> data[$sum] = $value;
	}
	
	public function __get(string $sum)
	{
		if (isset($this->data[$sum])) {
			return $this->data[$sum];
		}
		return null;
	}
	
	public function __construct(string $accountNumber, int|float $balance)
	{
		$this->setAccountNumber($accountNumber);
		$this->setBalance($balance);
	}
	
	public function showBalance(): void
	{
		echo $this->getBalance();
	}
	
	
	/**
	 * @param int $accountNumber
	 */
	public function setAccountNumber(string $accountNumber): void
	{
		if ($accountNumber < 3) {
			throw new Exception("Invalid number of account");
		}
		$this->accountNumber = $accountNumber;
	}
	
	/**
	 * @param float|int $balance
	 */
	public function setBalance(float|int $balance): void
	{
		if ($balance < 0){
			throw new Exception("Balance is incorrect, less than 0");
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