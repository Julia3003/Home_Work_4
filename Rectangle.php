<?php

class Rectangle extends Figure
{
	protected int|float $length;
	protected int|float $width;
	
	public function __construct(int|float $length, int|float $width)
	{
		$this->setLength($length);
		$this->setWidth($width);
	}
	
	/**
	 * @param float|int $length
	 */
	public function setLength(float|int $length): void
	{
		if ($length <= 0) {
			throw new Exception('The length value must be greater than 0');
		}
		$this->length = $length;
	}
	
	/**
	 * @param float|int $width
	 */
	public function setWidth(float|int $width): void
	{
		if ($width <= 0) {
			throw new Exception('The width value must be greater than 0');
		}
		$this->width = $width;
	}
	
	/**
	 * @return float|int
	 */
	public function getLength(): float|int
	{
		return $this->length;
	}
	
	/**
	 * @return float|int
	 */
	public function getWidth(): float|int
	{
		return $this->width;
	}
	
	public function area(): int|float
	{
		return ($this->length) * ($this->width);
	}
	
	public function perimeter(): int|float
	{
		return ($this->length + $this->width) * 2;
	}
	
	echo parent::getArea();
	echo parent::getPerimeter();
	
}