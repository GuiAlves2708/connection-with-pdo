<?php

/**
* MySQL settings
* Configure your access for Database
*/
$config['database']['host'] = 'localhost';	// Your host IP
$config['database']['user'] = 'root';		// Your username
$config['database']['pass'] = ''; 			// Your password
$config['database']['base'] = 'test'; 		// Select your Database

// If production mode use TRUE
$config['env'] = TRUE;

/**
* Shows an exception if there is an error.
* If production mode use TRUE
*/
if ($config['env'] === TRUE) {
	function exceptions($e) {
		echo 'Sorry a problem occurred. Please try later.';
		error_log($e->getMessage());
	}
	set_exception_handler('exceptions');
}
