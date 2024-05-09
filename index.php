<?php

require_once __DIR__ . '/Tasks.php';
require_once __DIR__ . '/TaskState.php';


$fileName = 'tasks.txt';
$tasks = new Tasks($fileName);
$taskList = $tasks->getTasksList();


try {
	$tasks->addTask('Nice day', 3);
	echo 'Завдання успішно додано в файл' . PHP_EOL;
} catch (Exception $exception) {
	echo 'Завдання не додано. Помилка ' . $exception->getMessage() . PHP_EOL;
}
$taskId = '663a3fa078db5';
try {
	$tasks->completeTask($taskId);
	echo 'По Завданню ' . $taskId . ' статус змінено на ' . TaskState::Done->value . PHP_EOL;
} catch (Exception $exception) {
	echo 'По Завданню ' . $taskId . ' статус не змінено' . PHP_EOL;
}

$taskId = '663d176e19bb8';
try {
	$tasks->deleteTask($taskId);
	echo 'Завдання ' . $taskId . ' успішно видалено' . PHP_EOL;
} catch (Exception $exception) {
	echo $exception->getMessage() . PHP_EOL;
}

