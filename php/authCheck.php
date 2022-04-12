<?php


function checkAuth() {
	if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in']) { 
		return true;
	}
	return false;
}