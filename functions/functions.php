<?php
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

function getConsole1($path): bool
{
	$file = fopen($path, 'a');
	if (!file_exists($path)) {
		return false;
	}
	while (($getConsole = trim(fgets(STDIN))) != false) {
		$resultWrite = fwrite($file, $getConsole . PHP_EOL);
	}
	fclose($file);
	return (bool) $resultWrite;
}






//Домашнє завдання
function fileReader(string $filePath): Generator|false
{
	if (!file_exists($filePath)) {
		return false;
	}
	$file = fopen($filePath, 'r');
	while(($line = fgets($file)) != false) {
		yield $line;
	}
	fclose($file);
}

//$filePath = '../log.txt';
//	$result = fileReader($filePath);
//	foreach ($result as $value) {
//		$lastValue = $value;
//	}
//	echo 'Останні аргументи попередньої програми, які були введені - ' . $lastValue ;

//function logger(string $message, $type = 'action'): bool
//{
//	$types = ['action', 'error'];
//	if (!in_array($type, $types)) {
//		return false;
//	}
//	$filePath = '../logs/' . date('d_m_Y') . '.txt';
//	$file = fopen($filePath, 'a');
//	$result = fwrite($file, $message . PHP_EOL);
//	fclose($file);
//	return (bool)$result;
//}