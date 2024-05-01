<?php
class BankAccount
{
	private int $accountNumber;
	private int|float $balance;
	
	
	public function __construct(int $accountNumber, int|float $balance = 0)
	{
		$this->setAccountNumber($accountNumber);
		$this->setBalance($balance);
	}
	
	/**
	 * @param int $accountNumber
	 */
	public function setAccountNumber(int $accountNumber): void
	{
		$this->accountNumber = $accountNumber;
	}
	
	/**
	 * @param float|int $balance
	 * @return void
	 * @throws Exception
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
	public function getAccountNumber(): int
	{
		return $this->accountNumber;
	}
	
	/**
	 * @return float|int
	 */
	public function getBalance(): float|int
	{
		return $this->balance;
	}
	
	public function replenishmentAccount(float|int $topUpAmount): void
	{
		if ($topUpAmount != 0 & $topUpAmount > 0) {
			$this->balance += $topUpAmount;
		} else {
			throw new Exception("Top-up amount is 0 or less than 0");
		}
	}
	
	public function withdrawalCash(float|int $withdrawingAmount): void
	{
		if ($withdrawingAmount <= $this->balance) {
			$this->balance -= $withdrawingAmount;
		} else {
			throw new Exception("The withdrawal amount is more than the balance.");
		}
	}
}