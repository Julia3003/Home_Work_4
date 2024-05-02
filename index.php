<?php

require_once __DIR__ . '/MainText.php';
require_once __DIR__ . '/Text.php';

try {
	$mainText = new MainText();
	echo $mainText->print() . PHP_EOL;
	
	$newText = new Text();
	if($newText instanceof MainText) {
		echo $newText->print() . PHP_EOL;
	}
} catch (Exception $exception) {

}
