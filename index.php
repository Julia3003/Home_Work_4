<?php

require_once __DIR__ . '/Figure.php';
require_once __DIR__ . '/Rectangle.php';
require_once __DIR__ . '/Circle.php';

$length = 10;
$width = 5;

try {
	$rectangle = new Rectangle ($length, $width);
	echo 'Довжина прямокутника - ' . $rectangle->getLength() . ' Ширина - ' . $rectangle->getWidth() . PHP_EOL;
	$rectangle->printArea();
	$rectangle->printPerimeter();
} catch (Exception $exception) {
	echo $exception->getMessage() . PHP_EOL;
}


$radius = 15;

try {
	$circle = new Circle($radius);
	echo 'Радіус круга - ' . $circle->getRadius() . PHP_EOL;
	$circle->printArea();
	$circle->printPerimeter();
} catch (Exception $exception) {
	echo $exception->getMessage() . PHP_EOL;
}


