<?php
session_start();
$loggedin = false;

?> <!-- Remember we need to tell PHP to stop running with the "?>" symbol -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
<style>
	.dashboard-body{
		width: 500px;
		padding: 20px;
		margin: auto;
		text-align: center;
		font-size: 1.5em;
		font-family: sans-serif;
		color: #FFD5B0;
		background-color: #E09655;
		
	}

	.dashboard-messages {
		
	}

	.user-data{
		width: 500px;
		padding: 20px;
		margin: auto;
		text-align: center;
		font-size: 1.5em;
		font-family: sans-serif;
		color: #FFD5B0;
		background-color: #E09655;
	}
</style>
<title> User Dashboard </title>
</head>

<body>
<div class="top-bar">
	<div class="header">Dashboard</div>
	<ul>
		<li><a href="index.php">Index</a></li>
		<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) {
			echo '<li><a class="active" href="dashboard.php">Dashboard</a></li>';
			} ?>
		<li><a href="contactus.php">Contact</a></li>
		<?php 
		if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) { // If the user is logged in
    		echo '<li><a class= "logout-link" href="/logout.php">Logout</a></li>';
    		$loggedin = true; // Show an anchor tag with Text Logout and link to `logout.php`
		}
		else {
			echo '<li><a class= "login-link" href="/loginPage.php">Login</a></li>';
		}
  		?>
		<?php if ($loggedin) { echo '<p class= "username-display">' . $_SESSION['username']; } ?>
	</ul> 
</div>
<div class="dashboard-body">
	<h1>Welcome, User!</h1>
	<h2> Sandwich Stats: </h2>
	<p>Date Joined: 23/02/2020</p>
	<p>Sandwiches eaten: 3406</p>
	<p>Hours spent online: 28</p>
	<p>Posts made: 41000</p>
</div>
<div class="user-data">
	<h2> User Information: </h2>
<?php 
$database = json_decode(file_get_contents('./contact.json'), true);
	
foreach ($database as $value) {

	echo "<p>First Name: " . $value['fname'] . "</p>";
	echo "<p>Last Name: " . $value['lname'] . "</p>"; 
	echo "<p>Email Address: " . $value['email'] . "</p>";
}
?>	

</div>

<script src="dashboardfunction.js"></script>
</body>
</html>