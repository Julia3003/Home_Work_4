<?php
// 1 варіант Програма, яка приймає з консолі аргументи, які введені, і записує їх в файл

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

//2й варіант
function getConsole2(string $fileMame, $getConsole): bool
{
	$getConsole = trim(fgets(STDIN));
	$result = file_put_contents($fileMame, $getConsole, FILE_APPEND);
	var_dump($result);
	if ($result !== false) {
		return true;
	}
	return false;
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
	$file = file_get_contents($filePath);
	while ($file !== false) {
		$resultValue = file($filePath);
		return $resultValue;
	}
	return false;
}