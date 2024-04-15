<?php

//First variation - функція повертає нове число
function areaCalculation(int|float $radius):int|float
{
	$area = pi() * ($radius ** 2);
	return $area;
}

echo areaCalculation(8) . PHP_EOL;

//Second variation - функція змінює передане число
function areaCalculationSecond(int|float &$radius2): void
{
	$radius2 = pi() * ($radius2 ** 2);
}
$numberRadius2 = 8;
areaCalculationSecond($numberRadius2);
echo $numberRadius2 . PHP_EOL;


//First variation - функція повертає нове число
function power(int|float $number, int $power = 2):int|float
{
	return $number ** $power;
}

$myNumber = 5;
$powerResult = power($myNumber);
echo $powerResult . PHP_EOL;

//Second variation - функція змінює передане число
function powerSecond(int|float &$number, int $power = 2): void
{
	$number = $number ** $power;
}

$myNumber2 = 7;
powerSecond($myNumber2);
echo $myNumber2 . PHP_EOL;