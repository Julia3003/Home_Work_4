<?php

$i = 1;
while ($i <= 10) {
	echo $i . PHP_EOL;
	$i++;
}



$i = 1;
$result = 1;
while ($i <= 5) {
	$result *= $i;
	$i++;
}
echo $result . PHP_EOL;



$i = 1;
while ($i <= 20){
	if ($i % 2 === 0 ){
		echo $i . PHP_EOL;
	}
	$i++;
}