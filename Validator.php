<?php

trait Validator
{
	public function isInt(mixed $value): bool
	{
		return is_int($value);
	}
}