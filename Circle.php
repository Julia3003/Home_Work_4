<?php

class Circle extends Figure
{
	const PI = 3.14;
	protected int|float $radius;
	
	public function __construct(int|float $radius)
	{
		$this->setRadius($radius);
	}
	
	/**
	 * @param float|int $radius
	 */
	public function setRadius(float|int $radius): void
	{
		if($radius <= 0) {
			throw new Exception('The radius value must be greater than 0');
		}
		$this->radius = $radius;
	}
	
	/**
	 * @return float|int
	 */
	public function getRadius(): float|int
	{
		return $this->radius;
	}
	
	public function area(): int|float
	{
		return (self::PI) * (pow($this->radius, 2));
	}
	
	public function perimeter(): int|float
	{
		return 2 * (self::PI) * ($this->radius);
	}
	
	public function showInfoGetArea()
	{
		echo parent::getArea();
	}
	public function showInfoGetPerimeter()
	{
		echo parent::getPerimeter();
	}
	
}