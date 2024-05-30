<?php

//require_once 'system/Config.php';
//require_once 'system/Request.php';
//require_once 'system/Router.php';
//require_once 'system/Response.php';
require_once 'system/Cookie.php';
//require_once 'controllers/Validator.php';
//require_once 'controllers/FrontController.php';
//require_once 'controllers/FrontController.php';
//
//$router = new Router();
//
//$router->addRoute('/', [
//	'get' => 'IndexController@index',
//]);
//
//$router->addRoute('/front', [
//	'get' => 'FrontController@hello',
//	'post' => 'FrontController@sum',
//]);
//
//try {
//	$router->processRoute(Request::getUrl(), Request::getMethod());
//} catch (Exception $exception) {
//	echo $exception->getMessage() . PHP_EOL;
//}

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