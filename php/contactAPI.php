<?php
session_start();

require('./PdoConnect.php');
require('./authCheck.php');

sleep(1);

if (!checkAuth()) { 
	http_response_code(401);
	return;
}
else {
	$conn = createPdoConnection();
	$contacts = $conn->query("SELECT * FROM contacts");
	$contacts = $contacts->fetchAll();
	echo json_encode($contacts);
}