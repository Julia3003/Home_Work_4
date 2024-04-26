<?php
require __DIR__ . '/../functions/functions.php';

$path = '../log.txt';
echo 'Введіть аргументи в консоль' . PHP_EOL;
$resultWrite = getConsole1($path);
if($resultWrite !== false){
	echo 'Інформація успішно записана в файл log.txt' . PHP_EOL;
} else{
	echo 'Інформація не записана в файл log.txt' . PHP_EOL;
}

$fileName = '../log.txt';
$getConsole = fgets(STDIN);
$results = getConsole2($fileName, $getConsole);
if($results === false){
	echo 'Інформація не записана в файл log.txt' . PHP_EOL;
}
	echo 'Інформація успішно записана в файл log.txt' . PHP_EOL;



foreach (fileReader('../log.txt') as $line){
	$line;
}
echo 'Останні аргументи попередньої програми, які були введені - ' . $line . PHP_EOL ;

$filePath2 = '../log.txt';
$resultReade2 = fileReade2($filePath2);
$getValue = end($resultReade2);

echo 'Останні аргументи попередньої програми, які були введені - ' . $getValue . PHP_EOL ;


