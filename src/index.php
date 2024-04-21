<?php
//$result = ['200', 'OK', 245];
//list($status, $num1, $num2) = $result;
//
//
//[, , $num2] = $result;
//echo $num2 . PHP_EOL;
//
//$array = ['name' => 'Jim', 'age' => 20];
//extract($array);
//echo $name . PHP_EOL;
//
//$name = 'Jim';
//$age = 20;
//$array = compact('name', 'age');
//print_r($array);
//
//
//$array = [1,2,3,4,5,6,7];
//foreach ();

//function generatorArray(int $length = 10, int $min = 1, int $max = 10) : array
//{
//	$array = [];
//	for ($i = 0; $i < $length; $i++) {
//		$array[] = rand($min, $max);
//	}
//	return $array;
//}
//
//$array = generatorArray();
//
//foreach ($array as $value) {
//	echo $value . PHP_EOL;
//}



function generator(int $length = 10, int $min = 1, int $max = 10) : Generator
{
	for ($i = 0; $i < $length; $i++) {
		yield rand($min, $max);
	}
}

$generator = generator();

foreach ($generator as $value) {
	echo $value . PHP_EOL;
}


//$array = generatorArray();
//
//foreach ($array as $value) {
//	echo $value . PHP_EOL;
//}

//function generator (): Generator
//{
//	yield 1;
//	yield 5;
//}
//
//$generator = generator();
//
//foreach ($generator as $value) {
//	echo $value . PHP_EOL;
//}
//
//var_dump($generator);

//function myTest() : Generator
//{
//  yield from [5,6,7,8,9];
//}
//
//foreach (myTest() as $value) {
//	echo $value . PHP_EOL;
///
///
///


$i = 0;
$j = 1;
function fibanachi ($maxNumber) {
	for($i = 0; $sum < $maxNumber; $i++, $j++){
		yield $i + $sum;
	}
	
}

function generator(int $length = 10, int $min = 1, int $max = 10) : Generator
{
	for ($i = 0; $i < $length; $i++) {
		yield rand($min, $max);
	}
}

$generator = generator();

foreach ($generator as $value) {
	echo $value . PHP_EOL;
}