<?php 
	

	// $date1 = new DateTime("now");
	// $date2 = new DateTime("now");

	// echo "<pre>";

	// print_r($date1->format('Y-m-d'));
	// echo "<br>";
	// print_r($date2->format('Y-m-d'));

	// echo "<br>";

	// // print_r($date2);

	// var_dump($date1->format('Y-m-d') == $date2->format('Y-m-d')); // bool(false)
	// var_dump($date1 < $date2);  // bool(true)
	// var_dump($date1 > $date2);  // bool(false)

	// die;

	// $array = array("Cricket","football");

	// echo "<pre>";

	// print_r($array);

	// die;
	
	if (isset($_POST['submit'])) {
		
		$name = $_POST['name'];
		
		$email = $_POST['email'];
		


		  if (isset($_POST['gender'])) {
       $gender = $_POST['gender'];
    } else {
       $gender = "";
    }

		if (isset($_POST['hobby'])) {
			$hobby = $_POST['hobby'];
			
		} else {
			$hobby = "";
			
		}

		$lengthOfName = strlen($name);

		//var_dump($lengthOfName);

		if ($name=='') {
			
			$error1 =  "Name Can Not be blank";

		} else {
			if ($lengthOfName>2) {
				$error1True = true;
			} else {
				$error1 = "Name Length Error";
			}
		}


		if ($gender=='') {
			$error2 = "Gender is not selected";
		} else {
			$error2True = true;
		}

		if ($hobby=='') {
			$error3 = "Hobby is not selected";
		} else {

			if (sizeof($hobby)<2) {
				$error3 = "Minimum 2 Selection";
			} else {
				$error3True = true;
			}
		}

		$userDate = $_POST['regDate'];

		if($userDate=='') {

			$error4 =  "Date Can Not be Blank";

		} else {
		
			$currentDate = new DateTime("now");
			$usergivenDateDate = new DateTime($userDate);

			//var_dump($currentDate==$usergivenDateDate);

			if ($usergivenDateDate->format('Y-m-d')>=$currentDate->format('Y-m-d')) {
				$error4True = true;
			} else {
				$error4 =  "Date is not valid";
			}
		}

		if (isset($error1True) && isset($error2True) && isset($error3True) && isset($error4True)) {
			echo "We can Move to database";
		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST">
		<label>Name</label>
		<input type="text" name="name">
		<?php 

			if (isset($error1)) {
				?>
				<span style="color: red;"><?php echo $error1; ?></span>
				<?php
			}

		?> 
		
		<br><br>
		<label>Email</label>
		<input type="email" name="email">
		<br><br>

		<label>Gender</label>
		<input type="radio" name="gender" value="Male">Male
		<input type="radio" name="gender" value="Female">Female
		<?php 

			if (isset($error2)) {
				?>
				<span style="color: red;"><?php echo $error2; ?></span>
				<?php
			}

		?>
		<br><br>

		<label>Hobby</label>
		<input type="checkbox" name="hobby[]" value="Cricket">Cricket
		<input type="checkbox" name="hobby[]" value="Football">Football
		<input type="checkbox" name="hobby[]" value="Badminton">Badminton
		<?php 

			if (isset($error3)) {
				?>
				<span style="color: red;"><?php echo $error3; ?></span>
				<?php
			}

		?>
		<br><br>

		<label>Date</label>

		<input type="date" name="regDate">

		<?php 

			if (isset($error4)) {
				?>
				<span style="color: red;"><?php echo $error4; ?></span>
				<?php
			}

		?>

		<br><br>

		<input type="submit" name="submit">


	</form>

</body>
</html>