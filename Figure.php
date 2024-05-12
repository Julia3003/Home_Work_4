<?php

abstract class Figure
{

public abstract function area(): int|float
{

}

public abstract function perimeter(): int|float
{

}
	
	public function getArea()
	{
		echo 'The area is' . $this->area() . PHP_EOL;
	}
	
	public function getPerimeter()
	{
		echo 'The perimeter is' . $this->perimeter() . PHP_EOL;
	}

}