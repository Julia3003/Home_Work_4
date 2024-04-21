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

