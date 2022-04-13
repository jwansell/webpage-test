<?php
session_start();
$loggedin = false;

?> <!-- Remember we need to tell PHP to stop running with the "?>" symbol -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../css/style.css">
<style>
	.orders-body{
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

	#refresh {
  		background-color: saddlebrown;
  		color: white;
  		padding: 14px 20px;
  		margin: 8px 0;
  		border: 30px;
  		border-radius: 1000px;
  		cursor: pointer;
  		width: 100%;
	}

	#refresh:hover {
	  	opacity: 0.8;
	}

	#message-text {

	}

</style>
<title> Orders </title>
</head>

<body>
<div class="top-bar">
	<div class="header">Orders</div>
	<ul>
		<li><a href="../index.php">Index</a></li>
		<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) {
			echo '<li><a href="dashboard.php">Dashboard</a></li>';
			echo '<li><a class="active" href="ordersPage.php">Orders</a></li>';
			} ?>
		<li><a href="contactus.php">Contact</a></li>
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
<div class="orders-body">
	<h1>List of orders:</h1>
	<p>User ID:</p>
	<p>Time Ordered:</p>
	<p>Quantity:</p>
	<p>Item Ordered:</p>
	<p>Value:</p>
	<button id="refresh">Refresh</button>
</div>

<!-- <script src="../js/dashboardfunction.js"></script>  -->
</body>
</html>