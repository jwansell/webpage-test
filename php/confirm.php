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
	$addresses = $conn->query("
	SELECT
		orders.id,
		orders.order_time,
		order_products.quantity,
		orders.item,
		orders.order_value,
		addresses.address,
		addresses.postcode,
		addresses.city,
		addresses.county
	FROM
		addresses 
		INNER JOIN orders ON orders.id = addresses.order_id 
		INNER JOIN order_products ON order_products.order_id = orders.id;");
	$addresses = $addresses->fetchAll();
	echo json_encode($addresses);

// $conn = createPdoConnection();
// 	$orders = $conn->query("SELECT * FROM orders");
// 	$orders = $orders->fetchAll();
// 	echo json_encode($addresses);
}