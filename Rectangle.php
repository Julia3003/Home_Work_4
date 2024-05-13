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
		if (!$this->validate($length)) {
			throw new Exception('The width value must be greater than 0');
		}
		$this->length = $length;
	}
	
	protected function validate(float|int $value): bool
	{
		return $value > 0;
	}
	
	/**
	 * @param float|int $width
	 */
	public function setWidth(float|int $width): void
	{
		if (!$this->validate($width)) {
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
	
	public function showInfoGetArea(): int|float
	{
		return parent::getArea();
	}
	public function showInfoGetPerimeter(): int|float
	{
		return parent::getPerimeter();
	}
	
}