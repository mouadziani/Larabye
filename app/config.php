<?php 

	$dbName   = 'db_crud_mvc';
	$host     = 'localhost';
	$userName = 'root';
	$password = 'root';

	define("ROOT", str_replace( basename($_SERVER['PHP_SELF']), "", $_SERVER['REQUEST_URI'] ));
	define("WEBROOT", 'http://localhost:8282/php-projects/gestion-formation/public/');