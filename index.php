<?php

require_once __DIR__ . '/Figure.php';
require_once __DIR__ . '/Rectangle.php';
require_once __DIR__ . '/Circle.php';

$length = 10;
$width = 5;
$rectangle = new Rectangle ($length, $width);
echo 'Довжина прямокутника - ' . $rectangle->getLength($length) . ' Ширина - ' . $rectangle->getWidth($width). ' Площа - ' . $rectangle->showInfoGetArea() . PHP_EOL;


$radius = 15;
$circle = new Circle($radius);
echo 'Радіус круга - ' . $circle->getRadius($radius) . ' Площа - ' . $circle->showInfoGetArea() . PHP_EOL;

//$fileName = 'tasks.txt';
//$tasks = new Tasks($fileName);
//$taskList = $tasks->getTasksList();
//
//
//try {
//	$tasks->addTask('Nice day', 3);
//	echo 'Завдання успішно додано в файл' . PHP_EOL;
//} catch (Exception $exception) {
//	echo 'Завдання не додано. Помилка ' . $exception->getMessage() . PHP_EOL;
//}
//$taskId = '663952283552a';
//try {
//	$tasks->completeTask($taskId);
//	echo 'По Завданню ' . $taskId . ' статус змінено на ' . TaskState::Done->value . PHP_EOL;
//} catch (Exception $exception) {
//	echo 'По Завданню ' . $taskId . ' статус не змінено' . PHP_EOL;
//}
//
//try {
//	$tasks->deleteTask('66351163aef17');
//} catch (Exception $exception) {
//	echo $exception->getMessage() . PHP_EOL;
//}

