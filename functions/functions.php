<?php
// 1 варіант Програма, яка приймає з консолі аргументи, які введені, і записує їх в файл

function getConsole1(string $path): bool
{
	$file = fopen($path, 'a');
	if (!file_exists($path)) {
		return false;
	}
	$resultWrite = false;
	while (($getConsole = trim(fgets(STDIN))) != false) {
		$resultWrite = fwrite($file, $getConsole . PHP_EOL);
	}
	fclose($file);
	return (bool) $resultWrite;
}

//2й варіант
function getConsole2(string $fileName): bool
{
	$getConsole = trim(fgets(STDIN));
	$result = false;
	if ($getConsole) {
		$result = file_put_contents($fileName, $getConsole . PHP_EOL, FILE_APPEND);
	}
	return (bool) $result;
}


// 1 варіант Програма, яка виводить з файлу логу останні аргументи попередньої програми, які були введені.
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

// 2 варіант Програма, яка виводить з файлу логу останні аргументи попередньої програми, які були введені.
function fileReade2(string $filePath): array|false
{
	if (!file_exists($filePath)) {
		return false;
	}
	$resultValue = file($filePath);
	if (count($resultValue)) {
		return $resultValue;
	}
	return false;
}