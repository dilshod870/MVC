<?php

define('ENVIRONMENT', 'development');

if (ENVIRONMENT == 'development' || ENVIRONMENT == 'dev') {
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
}

define('DS', DIRECTORY_SEPARATOR);

define('PUBLIC_DIR', 'public/');
define('BASE_URL', 'http://localhost/');

define('DB_HOST', 'localhost');
define('DB_NAME', 'test');
define('DB_USER', 'root');
define('DB_PASS', '');