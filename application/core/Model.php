<?php
namespace Application\Core;

use Database\DatabaseHandler as DatabaseHandler;

class Model {
	
	protected $dbh;
	
	public function __construct() {
	}
	
	public function getDbh() {
		return (is_null($this->dbh)) ? new DatabaseHandler() : $this->dbh;
	}
	
}