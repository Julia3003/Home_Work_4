<?php

class Person
{
	public string $name;
	
	public int $age;
	
	public static int $oldAge = 65;

public function __construct(string $name, int $age)
{
	$this->name = $name;
	$this->age = $age;
	self::$oldAge = 50;
}

public static function showOldAge(): void
{
	echo self::$oldAge;
}

}