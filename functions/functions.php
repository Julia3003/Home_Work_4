<?php
function getConsole(): string
{
	return trim(fgets(STDIN));
}

function writeFile (string $path, string $allGetConsole): bool
{
	$file = fopen($path, 'a');
	$resultWrite = fwrite($file, $allGetConsole . PHP_EOL);
	fclose($file);
	return (bool) $resultWrite;
}

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
