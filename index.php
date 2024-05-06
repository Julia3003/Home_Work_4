<?php

require_once __DIR__ . '/MainText.php';
require_once __DIR__ . '/Text.php';
require_once __DIR__ . '/Tasks.php';
require_once __DIR__ . '/TaskState.php';
require_once __DIR__ . '/function/functions.php';

//print_r(TaskState::cases());
$fileName = 'tasks.txt';
$tasks = new Tasks($fileName);
$taskList = $tasks->getTasksList();
//var_dump($taskList);

try {
	$tasks->addTask('Bad day', 3);
	echo 'Завдання успішно додано в файл' . PHP_EOL;
} catch (Exception $exception) {
	echo 'Завдання не додано. Помилка ' . $exception->getMessage() . PHP_EOL;
}
//$taskId = '663884db6c2a3';
//if ($tasks->completeTask($taskId)) {
//	echo 'По Завданню ' . $taskId . ' статус змінено на ' . TaskState::Done->value . PHP_EOL;
//} else {
//	echo 'По Завданню ' . $taskId . ' статус не змінено' . PHP_EOL;
//}


//$deleteTask = $tasks->deleteTask('66351163aef17');




//create
//$taskId = uniqid();
//$taskName = 'Cool task';
//$priority = 2;
//file_put_contents('tasks.txt', "$taskId|$taskName|$priority\n", FILE_APPEND);

//read
//$tasks = file('tasks.txt');
//foreach ($tasks as $key => $task) {
//	$task = explode('|', $task);
//	array_walk($task, function (&$value) {
//		$value = trim($value);
//	});
//	$tasks[$key] = $task;
//}
//
//
//
//deleteTask($taskId)
//$taskId = '6633a87dbb286';
//$tasks = array_filter($tasks, function ($task) use ($taskId)
//{
//	return $task[0] !== $taskId;
//});
////print_r($tasks);
//
////write
//unlink('tasks.txt');
//foreach ($tasks as $task) {
//	file_put_contents('tasks.txt', "$task[0]|$task[1]|$task[2]\n",FILE_APPEND);
//}



//try {
//	$mainText = new MainText();
//	showText($mainText);
//
//	$newText = new Text();
//	showText($newText);
//} catch (Exception $exception) {
//	echo $exception->getMessage() . PHP_EOL;
//}
