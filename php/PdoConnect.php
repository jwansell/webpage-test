<?php

function createPdoConnection() {
	$servername = "localhost";
	$username = "root";
	$password = "password";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=webpage", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conn;
	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
}
