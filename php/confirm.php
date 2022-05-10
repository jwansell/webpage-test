<?php
session_start();

require('./PdoConnect.php');
require('./authCheck.php');

if (!checkAuth()) { 
	http_response_code(401);
	return;
}
else {
	$conn = createPdoConnection();
	$addresses = $conn->query("SELECT * FROM addresses
		INNER JOIN orders 
		ON orders.id = addresses.order_id");
	$addresses = $addresses->fetchAll();
	echo json_encode($addresses);

// $conn = createPdoConnection();
// 	$orders = $conn->query("SELECT * FROM orders");
// 	$orders = $orders->fetchAll();
// 	echo json_encode($addresses);
}