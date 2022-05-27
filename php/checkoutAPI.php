<?php 

require('./PdoConnect.php');

$_POST = json_decode(file_get_contents('php://input'), true);
if(!isset($_POST['address'],$_POST['postcode'],$_POST['city'],$_POST['county'])) {
	http_response_code(400);
	return;
}

$address = $_POST['address'];
$postcode = $_POST['postcode'];
$city = $_POST['city'];
$county = $_POST['county'];

$database[] = [
	'address' => $address,
	'postcode' => $postcode,
	'city' => $city,
	'county' => $county,
];


echo json_encode([
	'success' => true,
	'address' => $address,
	'postcode' => $postcode,
	'city' => $city,
	'county' => $county,
]);
	$conn = createPdoConnection();
	$orders = $conn->query(
	"INSERT INTO addresses (user_id, order_id, address, postcode, city, county)
	VALUES
	('1','1',\"$address\",\"$postcode\",\"$city\",\"$county\");");
	echo json_encode(['success' => true]); 
	

