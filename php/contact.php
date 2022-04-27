<?php 

require('./PdoConnect.php');

if(!isset($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['message'])) {
	http_response_code(400);
	return;
}

if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	http_response_code(400);
	return;
}


$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];


$database[] = [
	'fname' => $fname,
	'lname' => $lname,
	'email' => $email,
	'message' => $message,
];


echo json_encode([
	'success' => true,
	'fname' => $fname,
	'lname' => $lname,
	'email' => $email,
	'message' => $message,
]);
	$conn = createPdoConnection();
	$contacts = $conn->query(
	"INSERT INTO contacts (fname, lname, email, message)
	VALUES
	(\"$fname\",\"$lname\",\"$email\",\"$message\");");
	echo json_encode(['success' => true]); 
	

