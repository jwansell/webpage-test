<?php
session_start();

if (!isset($_SESSION['basket']['items'] )) {	
	$_SESSION['basket']['items'] = [];
}

echo json_encode($_SESSION['basket']);