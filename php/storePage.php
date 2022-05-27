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

	.basket {
		background-color: saddlebrown;
  		color: white;
  		padding: 14px 20px;
  		margin: 8px 0;
  		border: 30px;
  		border-radius: 1000px;
  		cursor: pointer;
  		width: 30%;
	}

	.basket:hover {
		opacity: 0.8;
	}

	.store-items {
		width: 500px;
		background-color: #CC884C;
		padding: 5px;
		border-radius: 3px;
		font-size: 20px;
		margin: auto;
		text-align: center;
	}

</style>
<title> Store </title>
</head>

<body>
	
	<div id="app">
	<div class="top-bar">
		<div class="header">Sandwichland store</div>
		<ul>
			<li><a href="../index.php">Index</a></li>
			<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) {
				echo '<li><a href="dashboard.php">Dashboard</a></li>';
				echo '<li><a href="ordersPage.php">Orders</a></li>';
				} ?>
			<li><a href="contactus.php">Contact</a></li>
			<li><a class="active" href="storePage.php">Store</a></li>
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
		<h2>Welcome to our store page.</h2>
		<div v-if="products.length == 0">Loading...</div>
		<div class="store-items" v-for="product in products">
			<p>Name: {{product.item}}</p>
			<p>Price: {{product.price}}</p>
			<p>In Stock: {{product.stock}}</p>
			<button class="basket" v-on:click="addtoBasket(product)">Add To Basket</button>
		</div>
		<button class="button" v-on:click="fetchProducts">Refresh</button>
		<a href= "checkout.php"><button class="button" >To Checkout</button></a>
	</div>

</div>
<script src="/node_modules/vue/dist/vue.global.js"></script>
<script src="/node_modules/axios/dist/axios.min.js"></script>
<script src="../dist/store.js" defer></script>
</body>
</html>