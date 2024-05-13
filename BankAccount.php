<?php
class bankAccount // порушення 1-го стандарту PSR, а саме: Class names must be declared in StudlyCaps.
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
		if ($balance < 0) {
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
	
	public function replenishment_account(float|int $topUpAmount): void // порушення 1-го стандарту PSR, а саме: Method names must be declared in camelCase.
	{
		if ($topUpAmount > 0)
		{   //порушення 12-го стандарту PSR, а саме: п. 5.1 Помилка: дужка { повинна розміщуватись на одному рядку з if через пробіл
			$this->balance += $topUpAmount;
		} else
		{ throw new Exception("Top-up amount is 0 or less than 0"); //порушення 12-го стандарту PSR, а саме: п. 5.1 if, elseif, else. Помилка: дужка { повинна розміщуватись на одному рядку з else через пробіл
		}
	}
	
	public function withdrawalCash(float|int $withdrawingAmount): void
	{
		if ($withdrawingAmount > 0 && $withdrawingAmount <= $this->balance)
		{ //порушення 12-го стандарту PSR, а саме: п. 5.1 if, elseif, else
			$this->balance -= $withdrawingAmount;
		} else { throw new Exception("The withdrawal is 0 or less than 0/amount is more than the balance."); //порушення 12-го стандарту PSR, а саме: п. 5.1 if, elseif, else. Помилка: тіло повинно розміщуватись на наступному рядку після дужки } та else.
		}
	}
}