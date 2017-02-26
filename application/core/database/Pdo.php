<?php
namespace Application\Core\Database;

class Pdo {
	
	protected static $dbh;
	
	public static function main() {
		self::connect();
	}
	
	public static function connect() {
		if (self::$dbh == null) {
			self::openConnection();
		}
		
		return self::$dbh;
	}
	
	public static function openConnection() {
		$dsn 	= 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';';
		$user 	= DB_USER;
		$pass 	= DB_PASS;
		
		try {
			self::$dbh = new \PDO($dsn, $user, $pass);
		} catch (\PDOException $e) {
			die('Could not establish a pdo connection. Error: ' . $e->getMessage());
		}
	}
	
	public static function disconnect() {
		self::$dbh = null;
	}
	
}