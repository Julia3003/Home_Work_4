<?php

declare(strict_types=1);

function generateArray(int $length = 10, int $min = 1, int $max = 10): array
{
	$array = [];
	for ($i = 0; $i < $length; $i++) {
		$array[] = rand($min, $max);
	}
	echo max($array). PHP_EOL;
	echo min($array) . PHP_EOL;
	rsort($array);
	return $array;
}

$myArray = generateArray();
var_dump($myArray);


//function generateArray2(int $length = 10, int $min = 1, int $max = 10, $callback): array
//{
//	$array2 = [];
//	for ($i = 0; $i < $length; $i++) {
//		$array2[] = rand($min, $max);
//		$callback = function(int $array2[$i], int $array2[$i++]) int|mixed {
//			return $array2[$i] <=> $array2[$i++];
//		}
//	}
//
//	usort($array2, $callback);
//	return $array2;
//};
//
//	print_r($array2);
//
//$myArray2 = generateArray2($callback);
//var_dump($myArray2);
//$callback = function(array $myArray2) {
//	return $myArray2[$i] <=> $myArray2[$i++];
//};



