<?php

//$path = '../log.txt';
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

$path = '../log.txt';
$file = fopen($path, 'a');

$getConsole = true;
$content = [];
echo 'Введіть аргументи в консоль' . PHP_EOL;
while (($getConsole = trim(fgets(STDIN))) != false) {
	var_dump($getConsole);
	fwrite($file, $getConsole . PHP_EOL);
	echo 'Введіть ще інформацію, якщо потрібно. Якщо потрібно завершити - натисніть Enter' . PHP_EOL;
}
fclose($file);
echo 'Інформація успішно записана в файл log.txt' . PHP_EOL;


$path = '../log.txt';
$file = fopen($path, 'r');
$lastArguments = '';
if (!file_exists($path)) {
	return;
}
if($file){
	while(($line = fgets($file)) !== false) {
		$lastLine = $line;
	}
	fclose($file);
	echo "Останні аргументи попередньої програми, які були введені - $lastLine";
}
