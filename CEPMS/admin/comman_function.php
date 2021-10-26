<?php 
	
	include_once '../database/config.php';

	function getAllCategory() {

		global $conn;

		$query = "SELECT * FROM `category";

		$res = mysqli_query($conn, $query);

		while ($response[] = mysqli_fetch_object($res)) {}

		$finalArray = array_filter($response);

		return $finalArray;
	}

	function getAllIdentityList() {
		global $conn;

		$query = "SELECT * FROM `identity_type`";
		$res = mysqli_query($conn, $query);
		while ($response[] = mysqli_fetch_object($res)) {}

		$finalArrayIdentity = array_filter($response);

		return $finalArrayIdentity;
		
	}

?>