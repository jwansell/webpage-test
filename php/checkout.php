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
  		margin: 8px 0;
  		border: 30px;
  		border-radius: 1000px;
  		cursor: pointer;
  		width: 60%;
	}

	.button:hover {
		opacity: 0.8;
	}

	.grid-container {
	  display: grid;
	  grid-template-columns: auto auto auto;
	  gap: 3px;
	  background-color: #A3622A;
	  border-radius: 5px;
	  padding: 4px;
	}

	.grid-container > div {
	  background-color: #CC884C;
	  text-align: center;
	  padding: 10px;
	  font-size: 20px;
	}

	.item0 {
	font-size: 40px;
	font-weight: bolder;
	grid-column: 1 / span 4;
	grid-row:  1/ 4;
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
					
						<div class="grid-container">
		<?php 	echo		'<div class="item0">Currently in your basket:</div>
							<div class="item1">Name: </div>
							<div class="item2">No:
								<div> <button class="counter" v-on:click="quantity++">+</button> <button class="counter" v-on:click="quantity--">-</button> </div>
							</div>
							<div class="item3">Price: </div>  
							<div class="item4"><button class="button">Remove</button></div> 
						  '; ?>
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
			<button class="button" >Clear order</button>
			<a href= "confirmation.php"><button class="button" v-on:click="onSubmit">Confirm order</button></a>
			<a href= "storePage.php"><button class="button">Back to store page</button></a>
		</div>

	</div>
	<script src="/node_modules/vue/dist/vue.global.js"></script>
	<script src="/node_modules/axios/dist/axios.min.js"></script>
	<script src="../js/checkoutfunction.js" defer></script>
</body>
</html>