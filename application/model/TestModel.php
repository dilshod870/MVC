<?php
namespace Application\Model;

use \Application\Core\Model as Model;

class TestModel extends Model {
	
	public function getString() {
		return 'Hello World';
	}
	
}