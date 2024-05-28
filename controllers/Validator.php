<?php
trait Validator
{
	public function isInt(mixed $value): bool
	{
		return is_int($value);
	}
	public function isEmpty(string $value): bool
	{
		return empty($value);
	}
}