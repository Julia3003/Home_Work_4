<?php

trait Validator
{
	public function checkString (mixed $value): bool
	{
		return is_string($value);
	}
	
	public function consistsOf(string $requiredWord): bool
	{
		$result = str_word_count($requiredWord, $format = 0, $characters = null);
		if(!$result) {
			throw new Exception('The word' . $requiredWord . 'is required');
		}
		return true;
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