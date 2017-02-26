<?php

function load($class_string) {
	$class_path = classToFile($class_string);

	if (file_exists(ROOT . $class_path)) {
		include_once(ROOT . $class_path);
	} else {
		die('File could not be loaded ' . $class_path);
	}
}

function classToFile($class) {
	$class = (strpos($class, '\\')) ? $class : substr($class, 1);
	$class_arr = explode('\\', $class);
	$class_file = array_pop($class_arr).'.php';
	$class_arr = array_map('strtolower', $class_arr);
	array_push($class_arr, $class_file);
	
	return implode($class_arr, DS);
}