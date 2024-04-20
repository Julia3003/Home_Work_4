<?php
declare(strict_types=1);

function generateArray(int $length = 10, int $min = 1, int $max = 10) : array
{
	$array = [];
	for ($i = 0; $i < $length; $i++)
	{
		$array[] = rand($min, $max);
	}
	return $array;
}

$myArray = generateArray();
var_dump($myArray);

//Порахувати суму елементів масиву (1й варіант)
$sum = 0;
foreach ($myArray as $value) {
	$sum += $value;
}
 echo $sum. PHP_EOL;

//Порахувати суму елементів масиву (2й варіант)
$sum = 0;
for ($i = 0; $i < count($myArray); $i++)
{
	$sum += $myArray[$i];
}
echo $sum. PHP_EOL;


//Порахувати добуток всіх елементів масиву
$result = 1;
foreach ($myArray as $value) {
	$result *= $value;
}
echo $result . PHP_EOL;

//Перевірте скільки раз число 5 зустрічається у вас в масиві.
$result5 = 0;
foreach ($myArray as $value) {
	if($value === 5){
		$result5++;
	}
}
	echo $result5 . PHP_EOL;

foreach ($myArray as $value) {
	if ($value % 3 === 0) {
		echo $value;
	}
}

$newArray = [];
foreach ($myArray as $value) {
	if ($value % 3 === 0) {
		$newArray[] = $value;
	}
}
var_dump($newArray);

