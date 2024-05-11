<?php

trait Validator
{
	public function checkString (mixed $value): bool
	{
		return is_string($value);
	}
	
	public function consistsOf(string $stringForValidation, string $requiredWord): bool
	{
		return str_contains($stringForValidation, $requiredWord);
	}
	
	public function isEmpty(string $value): bool
	{
		return empty($value);
	}
	
	public function maxLength(string $string, int $maxLength): bool
	{
		return strlen($string) < $maxLength;
	}
	
	public function minLength(string $string, int $minLength): bool
	{
		return strlen($string) > $minLength;
	}


	
}