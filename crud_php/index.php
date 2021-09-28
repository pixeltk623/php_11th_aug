<?php 
	

	// require_once 'cofig.php';
	// require_once 'config.php';
	// require_once 'config.php';

	// require 'config.php';
	// require 'config.php';
	// require 'config.php';
	// require 'config.php';
	
	include_once 'config.php';
	// include_once 'config.php';
	// include_once 'config.php';
	// include_once 'config.php';

	// include 'conig.php';
	// include 'config.php';
	// include 'config.php';
	// include 'config.php';

	$query = "SELECT * FROM `users`";

	$result = mysqli_query($conn,$query);

	if ($result->num_rows>0) {
		
		while ($response = mysqli_fetch_object($result)) {
			
			// echo "<pre>";
			// //print_r($response['name']);
			// print_r($response->name);
		}


	} else {
		echo "No Record Found";
	}

	// echo "<pre>";

	// print_r($result);


	$name = "Sharvan";
	$email = "s@gmail.com";
	$mobile = "8160410477";
	$address = "Patna";

	$query = "INSERT INTO employee (name, email, mobile, address) VALUES ('$name','$email','$mobile','$address')";
	$result = mysqli_query($conn,$query);

	if ($result) {
		echo "Data Inserted";
	} else {
		echo "Something Error";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Hello This is Home page</h1>
</body>
</html>