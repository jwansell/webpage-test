<?php
session_start();
$loggedin = false;

?> <!-- Remember we need to tell PHP to stop running with the "?>" symbol -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../css/style.css">
<style>
	.dashboard-body{
		width: 500px;
		padding: 20px;
		margin: auto;
		text-align: center;
		font-size: 1.5em;
		font-family: sans-serif;
		color: #FFD5B0;
		border-radius: 5px;
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

	.button {
		background-color: saddlebrown;
  		color: white;
  		padding: 14px 20px;
  		margin: 8px 0;
  		border: 30px;
  		border-radius: 1000px;
  		cursor: pointer;
  		width: 60%;
	}

	.button:hover {
		opacity: 0.8;
	}

	#message-text {

	}

</style>
<title> User Dashboard </title>
</head>

<body>
	
	<div id="app">
	<div class="top-bar">
		<div class="header">Dashboard</div>
		<ul>
			<li><a href="../index.php">Index</a></li>
			<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) {
				echo '<li><a class="active" href="dashboard.php">Dashboard</a></li>';
				echo '<li><a href="ordersPage.php">Orders</a></li>';
				} ?>
			<li><a href="contactus.php">Contact</a></li>
			<li><a href="storePage.php">Store</a></li>
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
		<div id='message-text'>
			<div v-if="messages.length == 0">Loading...</div>
			<div class="contact-message" v-for="message in messages">
				<p>Name: {{message.fname}} {{message.lname}}</p> 
				<p> Email: {{message.email}}</p> 
				<p> Message: {{message.message}}</p>
			</div>
		</div>
		<p id='loading-text'></p>

		<button class="button" v-on:click="fetchMessages">Refresh</button> 
	</div>
</div>
<script src="/node_modules/vue/dist/vue.global.js"></script>
<script src="/node_modules/axios/dist/axios.min.js"></script>
<script src="../js/dashboardfunction.js" defer></script>
</body>
</html>