<?php 
	
	session_start();
	

	// if (isset($_SESSION)) {
	// 	echo "string";
	// }

	// echo $name = "Kumar";


	$_SESSION['name'] = "Sharvan";
	$_SESSION['email'] = "S@gmail.com";

	echo "<pre>";
	
	print_r($_SESSION);
?>