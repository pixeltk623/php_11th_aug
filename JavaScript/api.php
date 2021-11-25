<?php 
	header('Access-Control-Allow-Origin: *');

	$conn = mysqli_connect("localhost", "root","","tkinter_python");

	$request_body = file_get_contents('php://input');

	$data = json_decode($request_body);

	$name = $data->value;



	$query = "SELECT * FROM `users` WHERE name = '$name'";

	$result = mysqli_query($conn, $query);

	

	if($result->num_rows>0) {
		echo json_encode(["status"=>true]);
	} else {
		echo json_encode(["status"=>false]);
	}

	// while ($response[] = mysqli_fetch_object($result)) {
	// }
	// echo json_encode(array_filter($response));
?>