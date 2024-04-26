<?php
// Програма, яка приймає з консолі аргументи, які введені, і записує їх в файл

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

//Програма, яка виводить з файлу логу останні аргументи попередньої програми, які були введені.
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