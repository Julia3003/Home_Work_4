<?php
declare(strict_types=1);
function generator(int $maxNumber): Generator
{
	for ($i = 0, $j = 1; $i < $maxNumber; $k = $j, $j += $i, $i = $k) {
		yield $i;
	}
	return yield;
}

$result = generator(20);
foreach ($result as $value) {
	echo $value .PHP_EOL;
}

