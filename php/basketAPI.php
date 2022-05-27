<?php 
session_start();

if (!isset($_SESSION['basket']['items'] )) {	
	$_SESSION['basket']['items'] = [];
}
$_POST = json_decode(file_get_contents('php://input'), true);

if (isset($_POST['id']) && isset($_POST['item']) && isset($_POST['price'])) { // do validation of item to make sure we have everything. check that it has id and name
	$item =[
		'id' => $_POST['id'],
		'item' => $_POST['item'],
		'price' => $_POST['price']
	]; // Make a correct array of valid data
}
else {
	http_response_code(400);
	exit;
}

// We need to check if we already have the item in our basket
if (isset($_SESSION['basket']['items'][$item['id']])) {
	$_SESSION['basket']['items'][$item['id']]['quantity'] += 1;
} else {
	$item['quantity'] = 1;
	$_SESSION['basket']['items'][$item['id']] = $item;
}

// echo the new basket out 
echo json_encode($_SESSION['basket']);





