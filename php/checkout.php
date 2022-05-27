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

	.shipping {
	background-color: #E09655;
	width: 500px;
	margin: auto;
	border-radius: 5px;
	color: #FFD5B0;
	font-family: sans-serif;
	font-weight: bold;
	font-size: 16px;
	text-align: left;
	padding: 3px;
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

	.counter {
			background-color: saddlebrown;
  		color: white;
  		border: 30px;
  		border-radius: 1000px;
  		cursor: pointer;
	}

	.counter:hover {
		opacity: 0.8;
	}

	.button {
		background-color: saddlebrown;
  		color: white;
  		padding: 14px 20px;
  		text-align: center;
  		margin: 8px 0;
  		border: 30px;
  		border-radius: 1000px;
  		cursor: pointer;
  		width: 100%;
	}

	.button:hover {
		opacity: 0.8;
	}

	.items-grid-container {
	  display: grid;
	  grid-template-columns: auto;
	  gap: 3px;
	  background-color: #A3622A;
	  border-radius: 5px;
	  padding: 4px;
	}

	.item-grid-container {
	  background-color: #CC884C;
	  text-align: center;
	  padding: 10px;
	  font-size: 20px;
	  display: grid;
	  grid-template-columns: auto auto auto auto auto;
  	  gap: 3px;
	}
</style>
<title> Checkout </title>
</head>

<body>
	
	<div id="app">
		<div class="top-bar">
			<div class="header">Checkout</div>
			<ul>
				<li><a href="../index.php">Index</a></li>
				<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) {
					echo '<li><a href="dashboard.php">Dashboard</a></li>';
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
			<h2>Sandwichland Checkout</h2>
				<div class="items-grid-container">
					Currently in your basket:
					<div class="item-grid-container" v-for="basket in baskets">
						<div class="item1">Name: {{ basket.item }} </div>
						<div class="item2">No: {{basket.quantity}} 
							<div>
								<button class="counter" v-on:click="quantity++">+</button>
								<button class="counter" v-on:click="quantity--">-</button> 
							</div>
						</div>
						<div class="item3">Price: {{basket.price}}</div>  
						<div class="item4"><button class="button" v-on:click="clearItem">Remove</button></div> 
					</div>
				</div>
				<div class="shipping">

					<label>Address</label>
				    <input type="text" id="address" name="address" placeholder="Your current address:" v-model="addressInput">

				    <label>Postcode</label>
				    <input type="text" id="postcode" name="postcode" placeholder="Your postcode:" v-model="postcodeInput">

				    <label>City</label>
				    <input type="text" id="city" name="city" placeholder="Your city:" v-model="cityInput">
				    
					<label>County</label>
				    <input type="text" id="county" name="county" placeholder="Your county:" v-model="countyInput">

				</div>
				<div> {{addressInput}} {{postcodeInput}} {{cityInput}} {{countyInput}}</div>
			<button class="button" v-on:click="clearBasket">Clear order</button>
			<a href= "confirmation.php"><button class="button" v-on:click="onSubmit">Confirm order</button></a>
			<a href= "storePage.php"><button class="button">Back to store page</button></a>
		</div>

	</div>
	<script src="/node_modules/vue/dist/vue.global.js"></script>
	<script src="/node_modules/axios/dist/axios.min.js"></script>
	<script src="../dist/checkout.js" defer></script>
</body>
</html>