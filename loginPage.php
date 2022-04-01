<?php
session_start(); // Always remember to start the session 
// Below we are checking if the session has been created before and if it has that it is set to true!
if(isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] == true) {
    header('Location: index.html'); // This redirects the user to the home page if they are already logged in!
}
// We must tell php that we are done executing php code by closing the php script using the symbol below!
?> 

<!DOCTYPE html>
<html lang="en">
<head>
<style>
	body{
		background-color: sandybrown;
	}
	.top-bar{
		background-color: saddlebrown;
		height: 120px;
		margin-bottom: 10px;
		
	}
	.header{
		font-size: 2em;
		color: floralwhite;
		font-weight: bold;
		font-family: sans-serif;
		padding: 20px;
		
	}

	ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: saddlebrown;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-family: sans-serif;
  font-weight:  bold;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #EA6D00;
}

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
  font-weight: bold;
}

span.psw {
  float: right;
  padding-top: 16px;
}

</style>
</head>
<body>
	<div class="top-bar">
		<div class="header">Log-in</div>
	<ul>
  		<li><a href="index.html">Index</a></li>
  		<li><a href="contactus.html">Contact</a></li>
  		<li><a class="active" href="login.html">Login</a></li>
	</ul> 
</div>

<div class ="login-heading">
<h1>Log-in to Sandwichland below!</h1>
</div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input id="uname" type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input id="psw" type="password" placeholder="Enter Password" name="psw" required>
        
    <button id="submit">Login</button>
  </div>

<script src="loginform.js"></script>
</body>
</html>