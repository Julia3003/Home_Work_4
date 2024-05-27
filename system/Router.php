<?php

class Router
{
	private array $routes = [];
	public function addRoute(string $path, array $rules): void
	{
		$this->routes[$path] = $rules;
	}
	
	public function processRoute(string $url, string $method): void
	{
		$routes = $this->routes;
		if (!$routes) {
			throw new Exception('Routes not defined');
		}
		
		$controllerAction = $routes[$url][$method] ?? null;
		
		if (!$controllerAction) {
			Response::error404();
		}

		$this->dispatch($controllerAction);
	}

	private function dispatch(string $controllerAction): void
	{
		[$controller, $action] = explode('@', $controllerAction);
		if (!isset($controller, $action)) {
			throw new Exception('Invalid route declaration');
		}

		$fileName = CONTROLLERS_DIR . $controller . '.php';
		if(!file_exists($fileName)) {
			throw new Exception('Controller not found');
		}

		require_once $fileName;
		
		$controllerObject = new $controller();
//		$controllerObject = new FrontController();
		
		$controllerObject->$action();
//		$controllerObject->register();
	}
	
}