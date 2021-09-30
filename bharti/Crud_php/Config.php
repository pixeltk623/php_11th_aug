<?php 
		

	$conn = mysqli_connect("localhost","root","","northwind");

	if (!$conn) {
		echo "DB Error";
	}

	 echo "<pre>";

	 print_r($conn);

?>