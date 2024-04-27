<?php
require_once __DIR__ . '/../functions/functions.php';

$path = '../log.txt';
echo 'Введіть аргументи в консоль' . PHP_EOL;
$resultWrite = getConsole1($path);
if($resultWrite !== false){
	echo 'Інформація успішно записана в файл log.txt' . PHP_EOL;
} else{
	echo 'Інформація не записана в файл log.txt' . PHP_EOL;
}

echo 'Варіант 2. Введіть аргументи в консоль' . PHP_EOL;
$results = getConsole2($path);
if($results === false){
	echo 'Інформація не записана в файл log.txt' . PHP_EOL;
}
	echo 'Інформація успішно записана в файл log.txt' . PHP_EOL;


$result = '';
foreach (fileReader('../log.txt') as $line){
	$result = $line;
}
echo 'Останні аргументи попередньої програми, які були введені - ' . $result . PHP_EOL ;

$filePath2 = '../log.txt';
$resultReade2 = fileReade2($filePath2);
if (is_array($resultReade2)) {
	$getValue = end($resultReade2);
	echo 'Останні аргументи попередньої програми, які були введені - ' . $getValue . PHP_EOL ;
} else {
	echo 'Файл порожній' . PHP_EOL;
}