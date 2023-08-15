<?php

class Main {

	protected $controller = 'Home';
	protected $method = 'index';
	protected $params = [];
	
	function __construct()
	{

		$uri = $_SERVER['REQUEST_URI'];
		$uri = trim($uri, '/');
		$uri = explode('/', $uri);

		$this->validation($uri);
	}

	private function validation($uri)
	{

		// # Dump Controller Path
		$controllerPath = __DIR__.'/controllers/';

		// # Set Controller
		if (file_exists($controllerPath.$uri[0].'.php')) {
			$this->controller = $uri[0];
			unset($uri[0]);
		}

		// # Set Method
		if (isset($uri[1])) {
			$this->method = $uri[1];
			unset($uri[1]);
		}

		// echo $this->controller;

		require_once($controllerPath.$this->controller.'.php');
		$this->controller = new $this->controller;

		// # Run Controller
		// call_user_func_array([$this->controller, $this->method], array_values($uri));
		call_user_func_array([$this->controller, $this->method], [implode('/', $uri)]);

	}

}