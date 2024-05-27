<?php

require_once 'system/Config.php';
require_once 'controllers/FrontController.php';
require_once 'system/Request.php';
require_once 'system/Router.php';
require_once 'system/Response.php';

$router = new Router();

$router->addRoute('/front', [
	'get' => 'FrontController@hello',
	'post' => 'FrontController@sum',
]);
$router->addRoute('/', [
	'get' => 'IndexController@index',
]);

$router->processRoute(Request::getUrl(), Request::getMethod());
