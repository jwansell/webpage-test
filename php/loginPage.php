<?php
session_start(); 
$loggedin = false;
 // Always remember to start the session 
// Below we are checking if the session has been created before and if it has that it is set to true!
if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true) {
    header('Location: ../index.php');
  $loggedin = true; // This redirects the user to the home page if they are already logged in!
}

if($loggedin) { // If the user is logged in
    echo '<a href="/logout.php">Logout</a>'; // Show an anchor tag with Text Logout and link to `logout.php`
}
// We must tell php that we are done executing php code by closing the php script using the symbol below!
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Log-In</title>
<link rel="stylesheet" href="../css/style.css">
<style>

.login-heading{
	width: 500px;
		padding: 20px;
		margin: auto;
		text-align: center;
		font-family: sans-serif;
		color: #FFD5B0;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  background-color: #FFD5B0;
}

button {
  background-color: saddlebrown;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.container {
	background-color: #E09655;
  padding: 16px;
  width: 500px;
  margin: auto;
  font-family: sans-serif;
  color: #FFD5B0;
  border-radius: 5px;
  font-weight: bold;
}

span.psw {
  float: right;
  padding-top: 16px;
}

</style>
</head>
<body>

<div id="app"> 
	<div class="top-bar">
		<div class="header">Log-in</div>
	<ul>
  		<li><a href="../index.php">Index</a></li>
      <?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) {
      echo '<li><a href="dashboard.php">Dashboard</a></li>';
      } ?>
  		<li><a href="contactus.php">Contact</a></li>
  		<li><a class="active" href="loginPage.php">Login</a></li>
      <?php if ($loggedin) { echo '<p class= "username-display">' . $_SESSION['username']; } ?>
	</ul> 
</div>

<div class ="login-heading">
<h1>Log-in to Sandwichland below!</h1>
</div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input id="uname" type="text" placeholder="Enter Username" name="uname" v-model="unameInput" required>

    <label for="psw"><b>Password</b></label>
    <input id="psw" type="password" placeholder="Enter Password" name="psw" v-model= "pswInput" required v-on:keyup.enter="onSubmit">
        
    <button id="submit" v-on:click="onSubmit">Login</button>
  </div>
</div>
<script src="https://unpkg.com/vue@3"></script>
<script src="../js/loginform.js" defer></script>
</body>
</html>