<?php
namespace Application\Core\Database;

class DatabaseHandler extends Pdo {
	
	public function __construct() {
		self::main();
	}
	
	public function prepare($sql) {
		return new Statement(self::$dbh, $sql);
	}
	
	public function query($sql) {
		$sth = self::$dbh->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();
	}
	
	public function lastInsertId() {
		return self::$dbh->lastInsertId();
	}
	
}