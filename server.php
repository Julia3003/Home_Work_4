<?php

$methods = [
	'POST'
];

$currentMethod = $_SERVER['REQUEST_METHOD'];

if (!in_array($currentMethod, $methods)) {
	echo 'Method not allowed';
	exit;
}

echo 'Success!';