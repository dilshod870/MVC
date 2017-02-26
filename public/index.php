<?php

define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'application' . DIRECTORY_SEPARATOR);

if (file_exists(APP . 'autoload.php')) {
	require_once APP . 'autoload.php';
	
	if (!spl_autoload_register('load')) {
		die('Could not register autoloader');
	}
}

require APP . 'config/config.php';

$application = new \Application\Core\Application;
