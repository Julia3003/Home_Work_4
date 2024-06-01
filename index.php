<?php

require_once 'system/Cookie.php';

$cookie = new Cookie();
$key = 'index';
$value = 'spring';
$timeExpired = 3600;
$message = '';
try {
	$cookie->createCookie($key, $value, $timeExpired);
	$message .= 'Cookie created successfully<br>';
} catch (Exception $exception) {
	$message .= $exception->getMessage() . '<br>';
}

try {
	$value = $cookie->getCookie($key);
	$message .= 'Cookie value: ' . $value . '<br>';
} catch (Exception $exception) {
	$message .= $exception->getMessage() . '<br>';
}

try {
	$cookie->deleteCookie($key);
	$message .= 'Сookies successfully deleted<br>';
} catch (Exception $exception) {
	$message .= $exception->getMessage() . '<br>';
}

echo $message;