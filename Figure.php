<?php

abstract class Figure
{
	public abstract function area(): int|float;

	public abstract function perimeter(): int|float;

	
	public function getArea(): int|float
	{
		return $this->area();
	}
	
	public function getPerimeter(): int|float
	{
		return $this->perimeter();
	}

}