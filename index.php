<?php

require_once __DIR__ . '/Figure.php';
require_once __DIR__ . '/Rectangle.php';
require_once __DIR__ . '/Circle.php';

$length = 10;
$width = 5;

try {
	$rectangle = new Rectangle ($length, $width);
	echo 'Довжина прямокутника - ' . $rectangle->getLength($length) . ' Ширина - ' . $rectangle->getWidth($width). ' Площа - ' . $rectangle->showInfoGetArea() . PHP_EOL;
} catch (Exception $exception) {
	echo $exception->getMessage() . PHP_EOL;
}


$radius = 15;

try {
	$circle = new Circle($radius);
	echo 'Радіус круга - ' . $circle->getRadius($radius) . ' Площа - ' . $circle->showInfoGetArea() . PHP_EOL;
} catch (Exception $exception) {
	echo $exception->getMessage() . PHP_EOL;
}


