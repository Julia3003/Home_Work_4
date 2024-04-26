<?php
require_once __DIR__ . '/../functions/functions.php';

//foreach (fileReader('../log.txt') as $line){
//	$line;
//}
//echo 'Останні аргументи попередньої програми, які були введені - ' . $line ;

//echo date('d_m_Y');

logger('Opened file');

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

/////////////////////////////////////////////////
//1й варіант
// Програма, яка приймає з консолі аргументи, які введені, і записує їх в файл

//$path = '../log.txt';
//$file = fopen($path, 'a');
//
//$getConsole = true;
//$content = [];
//echo 'Введіть аргументи в консоль' . PHP_EOL;
//while (($getConsole = trim(fgets(STDIN))) != false) {
//	fwrite($file, $getConsole . PHP_EOL);
//	echo 'Введіть ще інформацію, якщо потрібно. Якщо потрібно завершити - натисніть Enter' . PHP_EOL;
//}
//fclose($file);
//echo 'Інформація успішно записана в файл log.txt' . PHP_EOL;

//Original виводить з файлу логу останні аргументи попередньої програми, які були введені
//function fileReader(string $filePath): Generator {
//	if (!file_exists($filePath)) {
//		return false;
//	}
//	$file = fopen($filePath, 'r');
//	while(($line = fgets($file)) != false) {
//		yield $line;
//	}
//	fclose($file);
//}
//
//$filePath = '../log.txt';
//	$result = fileReader($filePath);
//	foreach ($result as $value) {
//		$lastValue = $value;
//	}
//	echo 'Останні аргументи попередньої програми, які були введені - ' . $lastValue ;
/////////////////////////////////////////////////////



















//function fileReader2(string $filePath): Generator {
//	if (!file_exists($filePath)) {
//		return false;
//	}
//	$fileSize = filesize($filePath);
//	$file = fopen($filePath, 'r');
//	while(($text = fread($file, $fileSize)) != false) {
//		yield $text;
//	}
//	fclose($file);
//}
//
//$filePath = '../log.txt';
//$result = fileReader2($filePath);
//print_r($result);
//foreach ($result as $value) {
//	$lastValue = $value;
//}
//echo 'Останні аргументи попередньої програми, які були введені - ' . $lastValue ;


////Програма, яка виводить з файлу логу останні аргументи попередньої програми, які були введені.
//$path = '../log.txt';
//$file = fopen($path, 'r');
//$lastArguments = '';
//if (!file_exists($path)) {
//	return;
//}
//if($file){
//	while(($line = fgets($file)) !== false) {
//		$lastLine = $line;
//	}
//	fclose($file);
//	echo "Останні аргументи попередньої програми, які були введені - $lastLine";
//}
