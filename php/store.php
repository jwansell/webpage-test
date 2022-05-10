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
	$products = $conn->query("SELECT * FROM products");
	$products = $products->fetchAll();
	echo json_encode($products);
}