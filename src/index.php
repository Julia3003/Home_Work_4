<?php
//Обчислення площі кола
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


// Приймає число і підносить його до ступеню - з наявністю аргумента з дефолтним значенням - це $power
//First variation - функція повертає нове число
function power(int|float $number, int $power = 2):int|float
{
	return $number ** $power;
}

$myNumber = 5;
$powerResult = power($myNumber);
echo $powerResult . PHP_EOL;

//Second variation - функція змінює передане число - з наявністю аргумента з дефолтним значенням - це $power
function powerSecond(int|float &$number, int $power = 2): void
{
	$number = $number ** $power;
}

$myNumber2 = 7;
powerSecond($myNumber2);
echo $myNumber2 . PHP_EOL;


// Приймає число і підносить його до ступеню - всі аргументи обов'язкові
//First variation - функція повертає нове число
function powerVarSecond(int|float $number, int $power):int|float
{
	return $number ** $power;
}

$myNumber = 5;
$degree = 3;
$powerResult = power($myNumber, $degree);
echo $powerResult . PHP_EOL;

//Second variation - всі аргументи обов'язкові
function powerVarSeconds(int|float &$number, int $power): void
{
	$number = $number ** $power;
}

$myNumberSecond = 7;
$degree2 = 2;
powerSecond($myNumberSecond, $degree2);
echo $myNumberSecond . PHP_EOL;