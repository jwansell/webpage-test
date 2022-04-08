<?php
session_start();
$loggedin = false;


?> <!-- Remember we need to tell PHP to stop running with the "?>" symbol -->

<!DOCTYPE html>
<html lang="en">
<title>Contact Us!</title>
<head>
<link rel="stylesheet" href="../css/style.css">
<style>

.contact {
	background-color: #E09655;
	padding: 20px;
	width: 600px;
	margin: auto;
	color: #FFD5B0;
	font-family: sans-serif;
	font-weight: bold;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  background-color: #FFD5B0;
}

#submit {
  background-color: saddlebrown;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.contact-heading{
	width: 500px;
		padding: 20px;
		margin: auto;
		text-align: center;
		font-family: sans-serif;
		color: #FFD5B0;

</style>
</head>
<body>
<div class="top-bar">
	<div class="header">Get in contact</div>
	<ul>
  		<li><a href="../index.php">Index</a></li>
  		<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) {
			echo '<li><a href="dashboard.php">Dashboard</a></li>';
			} ?>
  		<li><a class="active" href="contactus.php">Contact</a></li>
  		<?php 
		if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) { // If the user is logged in
    		echo '<li><a class= "logout-link" href="./logout.php">Logout</a></li>';
    		$loggedin = true; // Show an anchor tag with Text Logout and link to `logout.php`
		}
		else {
			echo '<li><a class= "login-link" href="./loginPage.php">Login</a></li>';
		}
  		?>
  		<?php if ($loggedin) { echo '<p class= "username-display">' . $_SESSION['username']; } ?>
	</ul> 
</div>

<div class ="contact-heading">
<h1>Want to leave a message? Look no further.</h1>
</div>

<div class="contact">
	<label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name:">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name:">

    <label for="email">E-Mail</label>
    <input type="text" id="email" name="email" placeholder="Your E-Mail address:">

    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Leave your message here." style="height:200px"></textarea>

    <button id="submit">Submit</button>
</div>

<script src="../js/contactform.js"></script>
</body>
</html>