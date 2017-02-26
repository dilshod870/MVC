<?php
namespace Application\Core;

class Application {
	
	public $controller;
	public $segments;
	
	public function __construct() {
		$this->segments = $this->getSegments();
		$arguments = $this->getSegments();
		array_shift($arguments);
		array_shift($arguments);
		
		if (!isset($this->segments[0]) || empty($this->segments[0])) {
			$this->controller = new \Application\Controller\StartController($arguments);
			$this->controller->index();
			return;
		}
		
		$controller = '\\Application\\Controller\\' . $this->segments[0] . 'Controller';
		$this->controller = new $controller($arguments);
		
		if (isset($this->segments[1])) {
			$this->controller->{$this->segments[1]}();
		} else {
			$this->controller->index();
		}
	}
	
	private function getSegments() {
		$path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
		$path_info = trim($path_info, '/');
		return explode('/', $path_info);
	}
	
}