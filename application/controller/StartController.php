<?php
namespace Application\Controller;

use \Application\Core\Controller as Controller;

class StartController extends Controller {
	
	public function __construct($arguments = array()) {
		parent::__construct($arguments);
	}
	
	public function index() {
		/*
		echo "<pre>";
		print_r($this->arguments);
		echo "</pre>";
		*/
		
		$test_model = new \Application\Model\TestModel();
		
		$this->set('page', 'index');
		$this->set('content', $test_model->getString());
		
		$this->render('test.php');
	}
	
	public function test_t() {
		
		$this->set('page', 'test');
		$this->set('content', 'This is the test page');
		
		$this->render('test.php');
	}
	
}