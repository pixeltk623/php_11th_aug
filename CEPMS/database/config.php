<?php 

$hostname_db = "localhost";
$username_db = "root";
$password_db = "";
$database_name = "CEPMS";

$conn = mysqli_connect($hostname_db, $username_db, $password_db, $database_name);

try {
    if (!$conn) {
        throw new Exception('Unable to connect');
    }
}
catch(Exception $e) {
	
	
    echo $e->getMessage();
}

?>