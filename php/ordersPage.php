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
		border-radius: 5px;
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
  		width: 60%;
	}

	#refresh:hover {
	  	opacity: 0.8;
	}

	#message-text {

	}

	.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  gap: 3px;
  background-color: #A3622A;
  border-radius: 5px;
  padding: 3px;
}

.grid-container > div {
  background-color: #CC884C;
  text-align: center;
  padding: 10px 0;
  font-size: 20px;
}

.orders-heading{
	width: 500px;
	padding: 25px;
	margin: auto;
	text-align: center;
	font-family: sans-serif;
	color: #FFD5B0;
}

.item0 {
	font-size: 40px;
	font-weight: bolder;
	grid-column: 1 / span 5;
	grid-row:  1/ 5;
}

.item1 {
  grid-column: 1 / span 1;
}

.item2 {
  grid-column: 2 / span 1;
}

.item3 {
  grid-column: 3 / span 1;
}

.item4 {
  grid-column: 4 / span 1;
}

.item5 {
  grid-column: 5 / span 1;
}

</style>
<title> Orders </title>
</head>

<body>
<div id="app">
	<div class="top-bar">
		<div class="header">Orders</div>
		<ul>
			<li><a href="../index.php">Index</a></li>
			<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) {
				echo '<li><a href="dashboard.php">Dashboard</a></li>';
				echo '<li><a class="active" href="ordersPage.php">Orders</a></li>';
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

	<h1 class="orders-heading">Keep track of orders on this page.</h1>
		<div class="orders-body">
				<div class="grid-container" v-for="order in orders">
					<div class="item0">Orders Database</div>
					<div class="item1">User ID</div>
					<div class="item2">Time Ordered</div>
					<div class="item3">Quantity</div>  
					<div class="item4">Item Ordered</div>
					<div class="item5">Value</div>
					<div>{{order.id}}</div>
					<div>{{order.order_time}}</div>
					<div>{{order.quantity}}</div>
					<div>{{order.item}}</div>
					<div>{{order.order_value}}</div> 
				</div>
			<button id="refresh" v-on:click="fetchOrders">Refresh</button>
		</div>
		
</div>
<script src="/node_modules/vue/dist/vue.global.js"></script>
<script src="/node_modules/axios/dist/axios.min.js"></script>
<script src="../js/ordersfunction.js" defer></script> 
</body>
</html>