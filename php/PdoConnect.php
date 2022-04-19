<?php

require('../vendor/autoload.php'); // In order to make use of the composer packages we need to require the autoload.php file

// Load the .env file using the Package we downloaded
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../'); 
$dotenv->load();

function createPdoConnection() {
	$servername = $_ENV['DB_HOST'];
	$username = $_ENV['DB_USER'];
	$password = $_ENV['DB_PASS'];
	$conn = new PDO("mysql:host=$servername;dbname=webpage", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $conn;
}
