<?php
session_start();
$loggedin = false;

?> <!-- Remember we need to tell PHP to stop running with the "?>" symbol -->

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style.css">
<title> Sandwichland Home </title>
</head>

<body>
<div class="top-bar">
	<div class="header">Welcome to sandwichland!</div>
	<ul>
		<li><a class="active" href="../index.php">Index</a></li>
		<?php if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) {
			echo '<li><a href="php/dashboard.php">Dashboard</a></li>';
			} ?>
		<li><a href="php/contactus.php">Contact</a></li>
		<?php 
		if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) { // If the user is logged in
    		echo '<li><a class= "logout-link" href="php/logout.php">Logout</a></li>';
    		$loggedin = true; // Show an anchor tag with Text Logout and link to `logout.php`
		}
		else {
			echo '<li><a class= "login-link" href="php/loginPage.php">Login</a></li>';
		}
  		?>
		<?php if ($loggedin) { echo '<p class= "username-display">' . $_SESSION['username']; } ?>
	</ul> 
</div>
<div class="main-content-image"> 
	<img class="main-image" src="sandwich1.jpg" alt="Sandwiches." />
</div>
<div class="main-content-body">
	<p> Here at sandwichland, we love all kinds of sandwiches, be they rye or sourdough, hot or cold, in a baguette or on a slice of bread.  </p>
	<h2>Fun Facts:</h2>
	<p>The sandwich gets it's name from english aristocrat John Montagu, the 4th Earl of Sandwich. He would reportedly ask for his meat to be served between two pieces of bread, as it would allow him to eat whilst continuing to play card games.</p>
	<p>The US Department of Agriculture defines a sandwich as 'at least 35% cooked meat and no more than 50% bread', though not all sandwiches contain meat. </p>
	<p>There are lots of sandwiches! Like... So many sandwiches. I don't think we've even come up with every sandwich yet. If you're looking for a life goal, there it is, I suppose. </p>
</div>

</body>
</html>