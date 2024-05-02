<?php

require_once __DIR__ . '/MainText.php';
require_once __DIR__ . '/Text.php';
require_once __DIR__ . '/function/functions.php';

try {
	$mainText = new MainText();
	showText($mainText);
	$newText = new Text();
	showText($newText);
} catch (Exception $exception) {
	echo $exception->getMessage() . PHP_EOL;
}
