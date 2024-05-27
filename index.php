<?php

define('APP_DIR', __DIR__ . 'index.php/');

require_once 'system/Config.php';
require_once 'controllers/FrontController.php';
require_once 'system/Request.php';

$router = new Router();

$router->addRoute('/front', [
	'get' => 'FrontController@hello',
	'post' => 'FrontController@sum',
]);

//$router->addRoute('/login', [
//	'get' => 'AuthController@login',
//	'post' => 'AuthController@auth',
//]);

$router->processRoute(Request::getUrl(), Request::getMethod());