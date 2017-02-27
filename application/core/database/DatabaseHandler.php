<?php

class DatabaseHandler extends Pdo {
	
	public function __construct() {
		self::main();
	}
	
	public function query($sql) {
		$sth = self::$dbh->prepare($sql);
		$sth->execute();
		return $sth->fetchAll();
	}
	
}