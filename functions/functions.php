<?php

//function fileReader(string $filePath): Generator|false
//{
//	if (!file_exists($filePath)) {
//		return false;
//	}
//	$file = fopen($filePath, 'r');
//	while(($line = fgets($file)) != false) {
//		yield $line;
//	}
//	fclose($file);
//}

//$filePath = '../log.txt';
//	$result = fileReader($filePath);
//	foreach ($result as $value) {
//		$lastValue = $value;
//	}
//	echo 'Останні аргументи попередньої програми, які були введені - ' . $lastValue ;

function logger(string $message, $type = 'action'): bool
{
	$types = ['action', 'error'];
	if (!in_array($type, $types)) {
		return false;
	}
	$filePath = 'logs/' . date('d_m_Y') . '.txt';
	$file = fopen($filePath, 'a');
	$result = fwrite($file, $message . PHP_EOL);
	fclose($file);
	return (bool)$result;
}