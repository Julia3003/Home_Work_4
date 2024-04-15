<?php

function Calculation(int $number1, int $number2, ?closure $callback = null)
{
	$multiplication = $number1 * $number2;
	if (null !== $callback){
		return $callback($multiplication);
	}
	return $multiplication;
}

$val1 = 15;
$val2 = 10;
$result =  Calculation($val1, $val1);

$function = function (int $result){
	echo $result . PHP_EOL;
};

//$function();
//
//$function = 'calculate';