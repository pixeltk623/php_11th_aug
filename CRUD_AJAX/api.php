<?php
	header("Access-Control-Allow-Origin: *");
	header("Content-Type: application/json; charset=UTF-8");
	header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
	header("Access-Control-Max-Age: 3600");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

	include_once "config.php";

	if (isset($_GET['action']) && $_GET['action']=='GET_ALL_DATA') {
		
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

	}

	if (isset($_POST['action']) && $_POST['action']=='INSERT_DATA') { 

		$query = "INSERT INTO `crud_ajax`(`name`, `email`, `gender`, `hobby`, `city`) VALUES ('".$_POST['data']['name']."','".$_POST['data']['email']."','".$_POST['data']['gender']."','". implode(",", $_POST['data']['hobby'])."','".$_POST['data']['city']."')";
		$result = mysqli_query($conn, $query);

		if ($result) {
			echo json_encode(['status'=>true]);
		} else {
			echo json_encode(['status'=>false]);
		}
	}

	if (isset($_POST['action']) && $_POST['action']=='DELETE_USER') { 

		$query = "DELETE FROM `crud_ajax` WHERE id = ".$_POST['data'];
		$result = mysqli_query($conn, $query);

		if ($result) {
			echo json_encode(['status'=>true]);
		} else {
			echo json_encode(['status'=>false]);
		}
	}

	if (isset($_POST['action']) && $_POST['action']=='EDIT_USER') { 

		$query = "SELECT * FROM `crud_ajax` WHERE id = 14";
		$result = mysqli_query($conn, $query);

		$responsep = mysqli_fetch_object($result);

		echo json_encode(['data' => $responsep]);
	}

	if (isset($_POST['action']) && $_POST['action']=='UPDATE_USER') { 

		$query = "UPDATE ";
		$result = mysqli_query($conn, $query);

		if ($result) {
			echo json_encode(['status'=>true]);
		} else {
			echo json_encode(['status'=>false]);
		}
	}
?>