<?php
	
	include_once 'constant.php';
  	include_once 'config.php';

	if (isset($_GET['eid'])) {
		$did = $_GET['eid'];

      $queryD = "DELETE FROM `employee` WHERE eid = ".$did;
      $resultD = mysqli_query($conn, $queryD);

      if ($resultD) {
      	header("Location: index.php");
      } else {
      	echo "Something Error";
      }
	} else {

		header("Location: 404.php");
	}
	

?>