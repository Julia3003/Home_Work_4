<?php

require_once 'system/Config.php';
require_once 'system/Request.php';
require_once 'system/Router.php';
require_once 'system/Response.php';
require_once 'controllers/Validator.php';
require_once 'controllers/FrontController.php';

$router = new Router();

$router->addRoute('/', [
	'get' => 'IndexController@index',
]);

$router->addRoute('/front', [
	'get' => 'FrontController@hello',
	'post' => 'FrontController@sum',
]);

try {
	$router->processRoute(Request::getUrl(), Request::getMethod());
} catch (Exception $exception) {
	echo $exception->getMessage() . PHP_EOL;
}