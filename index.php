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
	echo 'hello'; // якщо поставити echo, то виникає помилка.
} catch (Exception $exception) {
	$message .= $exception->getMessage() . '<br>';
}

try {
	$value = $cookie->getCookie($key);
	$message .= 'Cookie value: ' . $value . '<br>';
} catch (Exception $exception) {
	$message .= $exception->getMessage() . '<br>';
}

$key2 = 'index2';
$value2 = 'spring2';
$timeExpired2 = 7200;

try {
	$cookie->updateCookie($key2, $value2, $timeExpired2);
	$message .= 'Сookies successfully edited<br>';
} catch (Exception $exception) {
	$message .= $exception->getMessage() . '<br>';
}

try {
	$cookie->deleteCookie($key2);
	$message .= 'Сookies successfully deleted<br>';
} catch (Exception $exception) {
	$message .= $exception->getMessage() . '<br>';
}

echo $message;