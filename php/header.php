<?php

$loggedIn = loggedIn();

$navHtml = "<ul class='main-header'>";
if ($loggedIn) { // Only when the user is logged in
    $navHtml .= "
        <li class='header-item'><a href='/logout.php'>Logout</a></li>
        <li class='header-item'><a href='/dashboard.php'>Dashboard</a></li>
        <li class='header-item'><a href='/ordersPage.php'>Orders</a></li>
    ";
} else {
    $navHtml .= "<li class='header-item'><a href='/loginPage.php'>Login</a></li>";
}
// Here we put all other's
$navHtml .= "<li class='header-item'><a href='../index.php'>Index</a></li>";
$navHtml .= "<li class='header-item'><a href='/contactus.php'>Contact</a></li>";
$navHtml .= "</ul>";

echo $navHtml;