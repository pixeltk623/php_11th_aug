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

		$IdentityList = array(
			array("id_no" => "13216546", "id_name" => "Aadhar Card"),
			array("id_no" => "13216546", "id_name" => "Aadhar Card"),
			array("id_no" => "13216546", "id_name" => "Aadhar Card"),
			array("id_no" => "13216546", "id_name" => "Aadhar Card")
		);

		return $IdentityList;
	}

?>