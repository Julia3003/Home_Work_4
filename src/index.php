<?php
require_once __DIR__ . '/../functions/functions.php';

$path = '../log.txt';
$allGetConsole = true;
while($allGetConsole) {
	echo 'Введіть аргументи в консоль або залиште поле пустим, щоб закінчити програму' . PHP_EOL;
	$allGetConsole = getConsole();
	if (!$allGetConsole) {
		continue;
	}
	$resultWrite = writeFile($path, $allGetConsole);
	if($resultWrite !== false){
		echo 'Інформація успішно записана в файл log.txt' . PHP_EOL;
	} else{
		echo 'Інформація не записана в файл log.txt' . PHP_EOL;
	}
}

$result = '';
foreach (fileReader('../log.txt') as $line){
	$result = $line;
}
echo 'Останні аргументи попередньої програми, які були введені - ' . $result . PHP_EOL ;

