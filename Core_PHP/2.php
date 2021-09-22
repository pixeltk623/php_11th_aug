<?php 
	
	date_default_timezone_set("Asia/Kolkata");

	
	// Year Month day hours mins second am/pm
	$date = date("2021-09-16");

	// echo strtotime($date);



	$getDay = strtolower(date("l", strtotime($date)));


	// echo $getDay;

	//$dateNew = date("Y/m/d");

	//echo $date;
	//echo $dateNew;

	//$getDay = strtolower(date("l"));

	//echo $getDay;

	switch ($getDay) {
		case 'sunday':
			$currentDay =  $getDay;
			break;
		case 'monday':
			$currentDay =  $getDay;
			break;
		case 'tuesday':
			$currentDay =  $getDay;
			break;
		case 'wednesday':
			$currentDay =  $getDay;
			break;
		case 'thursday':
			$currentDay =  $getDay;
			break;
		case 'friday':
			$currentDay =  $getDay;
			break;
		case 'saturday':
			$currentDay =  $getDay;
			break;
		default:
			$currentDay =  "Error";
			break;
	}

	echo ucfirst($currentDay);





	die;
	$num1 = 18;
	$num2 = 18;
	$num3 = 8;


	if ($num1>$num2 && $num1>$num3) {
		echo $num1." is greater Number";
	} elseif($num2>$num1 && $num2>$num3) {
		echo $num2." is greater Number";
	} elseif($num3>$num1 && $num3>$num2) {
		echo $num3." is greater Number";
	}
	
	// All Numbers are equal
	// if two numbers are same


	die;

	$number =-5;

	// if ($number>0) {
	// 	echo $number." Positive Number";
	// }

	// if ($number>0) {
	// 	echo $number." Positive Number";
	// } else {
	// 	echo $number." Negative Number";
	// }
	
	// Check positve // Even or odd

	if ($number>0) {
		// Positive Number
		if ($number%2==0) {
			echo "Even Number";
		} else {
			echo "Odd Number";
		}
		
	} elseif($number==0)
		echo "Number is 0";
	 else {
		echo $number." Negative Number";
	}
	
	

	
	// if (condition) {
	// 	# code...
	// }	

	// if (condition) {
	// 	# code...
	// } else {

	// }


	// if (condition) {
	// 	# code...
	// } elseif (condition) {
	// 	# code...
	// } else {
	// 	# code...
	// }

	// switch (variable) {
	// 	case 'value':
	// 		# code...
	// 		break;
		
	// 	default:
	// 		# code...
	// 		break;
	// }
	


?>