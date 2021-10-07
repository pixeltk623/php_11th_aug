<?php

$final = strpos("+919835401515","+91"); // 0 // ''

// if ($final===false) {
// 	echo "Nahi hai";
// } elseif ($final===0) {
// 	echo "Hai";
// }

// die;
// var_dump($final);

// die;
// echo $res =  ($final===0) ? true : false;

// die;
// if ($final==0) {
// 	echo "Hai";
// } else {
// 	echo "Nahi Hai";
// }

// die;
require_once '../vendor/autoload.php';

$conn = mysqli_connect("localhost","root","","php_11_aug");

$query = "SELECT name, mobile FROM users";

$result = mysqli_query($conn, $query);
while ($response[] = mysqli_fetch_object($result)) {}

$finalData = array_filter($response);

// echo "<pre>";
// print_r($finalData);

// $string = "98 546546";

// echo $string = str_replace(' ', '', $string);

$allUserData = array();

foreach ($finalData as $key => $value) {

	if ($value->mobile>=10) {
		$final = strpos($value->mobile,"+91");
		$mobile =  ($final===0) ? $value->mobile : "+91".$value->mobile;
		$finalMobileNo = str_replace(' ', '', $mobile);
	} else {
		$finalMobileNo = "+919835401515";
	}
	

	$allUserData[] = array(
		"name" => $value->name,
		"mobile" =>  $finalMobileNo
	);

}

// echo "<pre>";

// print_r($allUserData);

use Twilio\Rest\Client;

// // Find your Account SID and Auth Token at twilio.com/console
// // and set the environment variables. See http://twil.io/secure
$sid = "ACcf617ef07f0b303abb37a1746cce8615";
$token = "a41e4449187ca561de5f3ce802fa9cac";
$twilio = new Client($sid, $token);

foreach ($allUserData as $key => $value) {
	$message = $twilio->messages
	                  ->create($value['mobile'], // to
	                           ["body" => "Hi ".$value['name'], "from" => "+18788776105"]
	                  );
}
	

print($message->sid);

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<button>Send Notification</button>
</body>
</html>