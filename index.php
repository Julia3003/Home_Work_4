<?php
require_once __DIR__ . '/Validator.php';
require_once __DIR__ . '/TaskForTeamАnalyst.php';
require_once __DIR__ . '/TasksForTechnicalSpecifications.php';

$taskName = 'To do analyst';
$taskDescription = 'Detailed analysis and segmentation of orders by category';

try {
	$taskForTeamАnalyst = new TaskForTeamАnalyst($taskName, $taskDescription);
	$taskForTeamАnalyst->showTask();
} catch (Exception $exception) {
	echo $exception->getMessage() . PHP_EOL;
}

$taskName = 'To do analyst order analytics for April 2024';
$taskDescription = 'Detailed analysis and segmentation of orders by category. Expected result - report.';
$fileName = 'task.txt';
try {
	$tasksForTechnicalSpecifications = new TasksForTechnicalSpecifications($fileName);
	$tasksForTechnicalSpecifications->addTask($taskName, $taskDescription );
	echo 'Задача додана успішно в файл ' . $fileName . PHP_EOL;
} catch (Exception $exception) {
	echo $exception->getMessage() . PHP_EOL;
}