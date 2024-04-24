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

$path = '../info.txt';
$file = fopen($path, 'w');

if (!file_exists($path)) {
	echo 'Файла не існує';
	return;
}

echo 'Введіть аргументи в консоль';
$content = [];
while ($getConsole = fgets(STDIN) !== false) {
	fwrite($file, $getConsole );
}
fclose($file);

//echo $getConsole;
//$filesize = filesize($path);
//$file = fopen($path, 'w');
//$getConsole = fgets(STDIN);
//echo $getConsole;
//$content = [];

fclose($file);
var_dump($content);