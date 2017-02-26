<?php
namespace Application\Core;

class Controller {
	
	public $arguments;
	public $data;
	
	public function __construct($arguments = array()) {
		$this->arguments = $arguments;
	}
	
	protected function render($view) {
		$file = APP . 'view/' . $view;
		
		if (file_exists($file)) {
			include($file);
		} else {
			die('Could not load view: ' . $view);
		}
	}
	
	protected function set($key, $value) {
		$this->data[$key] = $value;
	}
	
	protected function get($key) {
		return (isset($this->data[$key])) ? $this->data[$key] : '';
	}
	
}