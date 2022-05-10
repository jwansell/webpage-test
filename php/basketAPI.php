<?php 
session_start();

if (!isset($_SESSION['basket']['items'] )) {	
	$_SESSION['basket']['items'] = [];
}
$_POST = json_decode(file_get_contents('php://input'), true);

if (isset($item['id']) && isset($item['item']) ) (true) { // do validation of item to make sure we have everything. check that it has id and name
	$item = $_POST; // Make a correct array of valid data
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





// if(!isset($_POST['order_time'],$_POST['quantity'],$_POST['item'],$_POST['order_value'])) {
// 	http_response_code(400);
// 	return;
// }

// $time = $_POST['order_time'];
// $quantity = $_POST['quantity'];
// $item = $_POST['item'];
// $value = $_POST['order_value'];

// $database[] = [
// 	'order_time' => $time,
// 	'quantity' => $quantity,
// 	'item' => $item,
// 	'order_value' => $value,
// ];


// echo json_encode([
// 	'success' => true,
// 	'order_time' => $time,
// 	'quantity' => $quantity,
// 	'item' => $item,
// 	'order_value' => $value,
// ]);

// 	$conn = createPdoConnection();
// 	$products = $conn->query("SELECT * FROM products
// 		INNER JOIN orders 
// 		ON orders.id = addresses.order_id");
// 	$products = $products->fetchAll();
// 	echo json_encode($products);

// 	$orders = $conn->query(
// 	"INSERT INTO orders (order_time, quantity, item, order_value)
// 	VALUES
// 	(CURRENT_TIMESTAMP,\"$quantity\",\"$item\",\"$value\");");
// 	echo json_encode(['success' => true]); 