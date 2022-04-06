<?php 

function authenticateUsernamePassword($record) {

	if(true) {
		return true;
	}

	return false;
}


//$validUsername = 'Admin';
//$validPassword = 'password';
$validUsers = json_decode(file_get_contents('./users.json'), true);
//denotes these keys as valid passwords
session_start();
//initialises session

if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true) {
    header('Location: index.html');
    return;
}
//checks that user is logged in and redirects to main page if so
if(!isset($_POST['username'], $_POST['password'])) {
	http_response_code(404);
	return;
}
//if username and pass arent valid return 404 error

$uname = $_POST['username'];
$psw = $_POST['password'];

$foundUser = array_filter($validUsers, function ($user) use ($uname, $psw) {
	if ($uname == $user['username'] && $psw == $user['password']) {
		return true;
	}
	return false;
});

if(count($foundUser) == 1) {
	//checks that password and username both valid 
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


