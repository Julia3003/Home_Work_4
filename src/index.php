<?php

//$path = '../info.txt';
//
//if (!file_exists($path)) {
//	return;
//}
//
//$filesize = filesize($path);
//$file = fopen($path, 'r');
//$content = [];
//
//echo fgets($file);
//while (($line = fgets($file)) !== false) {
//	echo $content = trim($line);
//}

//$text = fread($file, $filesize);
//
//fclose($file);
//
//print_r($content);

//include 'function.php';
//
//showMessage('test');
//
//echo __DIR__ . PHP_EOL;
//
////include '../function/function.php';
//
//echo __FILE__ . PHP_EOL;
//
//print_r(get_included_files());

$path = '..log.txt';
$file = fopen($path, 'a');

//if (!file_exists($path)) {
//	echo 'Файла не існує';
//	return;
//}
$getConsole = true;
$content = [];
echo 'Введіть аргументи в консоль' . PHP_EOL;
while (($getConsole = trim(fgets(STDIN))) != false) {
	var_dump($getConsole);
	fwrite($file, $getConsole . PHP_EOL);
	echo 'Введіть ще інформацію, якщо потрібно' . PHP_EOL;
}
fclose($file);


//echo $getConsole;
//$filesize = filesize($path);
//$file = fopen($path, 'w');
//$getConsole = fgets(STDIN);
//echo $getConsole;
//$content = [];

var_dump($getConsole);