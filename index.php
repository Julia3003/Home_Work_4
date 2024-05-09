<?php

require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/TaskState.php';

$person = new Person;

echo Person::$oldAge . PHP_EOL;
echo Person::showOldAge() . PHP_EOL;

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

