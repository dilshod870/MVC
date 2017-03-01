<?php
namespace Application\Core\Database;

class Statement {
	
	private $statement;
	private $result;
	private $dbh;
	
	public __construct($dbh, $sql) {
		$this->statement = self::$dbh->prepare($sql);
		$this->dbh = $dbh;
	}
	
	public function bind($param, $value, $type = null) {
		if (is_null($type)) {
			switch (true) {
				case is_int($value):
					$type = \PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = \PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = \PDO::PARAM_NULL;
					break;
				default:
					$type = \PDO::PARAM_STR;
			}
		}
		
		$this->statement->bindValue($param, $value, $type);
	}
	
	public function execute($data) {
		$this->statement->execute($data);
		return $this->statement->fetchAll();
	}
	
	public function execute() {
		$this->statement->execute();
		return $this->statement->fetchAll(\PDO::FETCH_ASSOC);
	}
	
}