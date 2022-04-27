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
	$orders = $conn->query("SELECT * FROM orders");
	$orders = $orders->fetchAll();
	echo json_encode($orders);
}