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





 $query ="INSERT INTO `customers` (`CustomerID`, `CompanyName`, `ContactName`, `ContactTitle`, `Address`, `City`, `Region`, `PostalCode`, `Country`, `Phone`, `Fax`) VALUES ('400', 'Infosys', 'Bharti', 'Project manager', 'Panchkula', 'Panchkula', 'Haryana', '134112', 'India', '12345679', '1234656')";



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