<?php

function Calculation(int $number1, int $number2, ?closure $callback = null): int
{
	$multiplication = $number1 * $number2;
	if (null !== $callback){
		 $callback($multiplication);
	}
	return $multiplication;
}

$val1 = 5;
$val2 = 10;

$result =  Calculation($val1, $val2);

$function = function (int $result){
	echo $result . PHP_EOL;
};

$result =  Calculation($val1, $val2, $function);
