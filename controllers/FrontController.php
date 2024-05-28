<?php

class FrontController
{
	use Validator;
	public function hello(): void
	{
		$message = 'Вітаю Вас в програмі!'
			. '<br><a href="/">Back</a>';
		echo $message;
	}
	
	/**
	 * @return void
	 * @throws Exception
	 */
	public function sum(): void
	{
		$num1 = (int) $_POST['first'];
		$num2 = (int) $_POST['second'];
		$this->validate($num1,$num2);
		$message = 'Sum of numbers: ' . ($num1 + $num2)
			. '<br><a href="/">Back</a>';
		echo $message;
	}
	
	protected function validate(int $num1, int $num2): void
	{
		$message = '';
		if ($this->isEmpty($num1) || $this->isEmpty($num2)) {
			$message .= 'The value is empty.' . PHP_EOL;
		}
		if (!$this->isEmpty($message)) {
			throw new Exception($message);
		}
	}
}