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
	$orders = $conn->query("
		SELECT * FROM orders
		INNER JOIN order_products ON order_products.order_id = orders.id
		");
	$orders = $orders->fetchAll();
	echo json_encode($orders);
}