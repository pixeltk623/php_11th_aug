<?php 
	header('Access-Control-Allow-Origin: *');

	$conn = mysqli_connect("localhost", "root","","api_db");

	$query = "SELECT *  FROM `products`";

	$result = mysqli_query($conn, $query);

	while ($response[] = mysqli_fetch_object($result)) {
	}
	echo json_encode(array_filter($response));
?>