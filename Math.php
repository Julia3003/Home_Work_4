<?php

trait Math
{
	public function sum(float $num1, float $num2): float
	{
		return $num1 + $num2;
	}
	
	public function power(float $number, int $power = 2): int
	{
		return pow($number, $power);
	}
}