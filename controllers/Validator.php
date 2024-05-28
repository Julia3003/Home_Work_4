<?php
trait Validator
{
	public function isEmpty(string $value): bool
	{
		return empty($value);
	}
}