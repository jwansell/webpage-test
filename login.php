<?php 
$validUsername = 'Admin';
$validPassword = 'password';
session_start();

if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true) {
    header('Location: index.html');
    return;
}

if(!isset($_POST['username'], $_POST['password'])) {
	http_response_code(404);
	return;
}

$uname = $_POST['username'];

$psw = $_POST['password'];

if($uname == $validUsername && $psw == $validPassword){
	http_response_code(200);
	$_SESSION['is_logged_in'] = true;
	$_SESSION['username'] = $uname;
	echo json_encode([
	'success' => true,
	'username' => $uname,
	'password' => $psw,
	]);
	return;
}

$_SESSION['is_logged_in'] = false;
$_SESSION['username'] = null;
http_response_code(404);
return;


