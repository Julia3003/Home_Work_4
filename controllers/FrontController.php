<?php

class FrontController
{
	use Validator;
	public function hello(): void
	{
		echo 'Вітаю Вас в програмі!';
	}
	
	/**
	 * @return void
	 * @throws Exception
	 */
	public function sum(): void
	{
		$num1 = $_POST['first'];
		$num2 = $_POST['second'];
		$this->validate($num1,$num2);
		echo $num1 + $num2;
	}
	
	protected function validate(int $num1, int $num2): void
	{
		$message = '';
		if (!$this->isInt($num1) || $this->isInt($num2)) {
			$message .= 'The value must be a number.' . PHP_EOL;
		}
		if (!$this->isEmpty($message)) {
			throw new Exception($message);
		}
	}
}