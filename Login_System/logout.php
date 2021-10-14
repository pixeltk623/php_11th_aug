<?php 
	
	session_start();

	// echo "<pre>";

	// print_r($_SESSION);

	// unset($_SESSION['name']);

	session_destroy();

	session_unset();

	header("Location: index.php");

?>