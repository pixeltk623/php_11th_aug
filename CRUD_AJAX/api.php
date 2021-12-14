<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

	include_once "config.php";


	$query = "SELECT * FROM `crud_ajax`";

	$result = mysqli_query($conn, $query);

	if($result->num_rows==0) {
		echo json_encode(['status'=>404, 'data' => "No Record Found"]);
	} else {
		$response = array();
		while($responsep[] = mysqli_fetch_object($result)) {}

		$finalData = array_filter($responsep);
		echo json_encode(['status'=>200, 'data' => $finalData]);
	}

	
?>