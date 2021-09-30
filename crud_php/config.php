<?php 
	include_once 'constant.php';
	$conn = mysqli_connect(SERVER_NAME,USER_NAME,PASSWORD,DB_NAME);

	if (!$conn) {
		echo "DB Error";
	}
?>