<?php
session_start();

sleep(1);

if (!isset($_SESSION['is_logged_in']) || !$_SESSION['is_logged_in']) { 
	http_response_code(401);
	return;
}
else {
	$database = file_get_contents('../json/contact.json');
	echo $database;	
}