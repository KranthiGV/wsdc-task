<?php 
session_start();

$GLOBALS['config'] = array(
	'mysql' => array(
		'host' => '127.0.0.1',
		'username' => 'root',
		'password' => '',
		'db' => 'wsdc'
	),
	'remember' => array(
		'cookie_name' => 'hash',
		'cookie_expiry' => '86400'
	),
	'session' =>array(
		'session_name' => 'user',
		'token_name' => 'token'
	)
);

/*
require_once 'classes/Config.php';
require_once 'classes/Cookie.php';
require_once 'classes/DB.php';
*/
// A loader to facilitate change in names of class files
spl_autoload_register(function($class) {
	require_once 'classes/' .$class. '.php';
});

require_once 'functions/sanitize.php';
