<?php 

	$conn = mysqli_connect("localhost", "root", "", "php_11_aug");

	if (isset($_POST['submit'])) {

		$email = $_POST['email'];

		$username = $_POST['uname'];

		$password = md5($_POST['password']);

		$queryC = "SELECT * FROM students WHERE email = '$email' OR username = '$username'";

		$resC = mysqli_query($conn, $queryC);

		if ($resC->num_rows>0) {
			echo "Username and Email exits";
		} else {

			$query = "INSERT INTO `students`(`name`, `email`, `username`, `password`) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['uname']."','$password')";

			$res = mysqli_query($conn, $query);

			if ($res) {
				echo "Users Created";
			} else {
				echo "Error";
			}
		
		}
		

		

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	

	<form method="post">
		<label>Name</label>
		<input type="text" name="name">
		<br><br>
		<label>Email</label>
		<input type="email" name="email">
		<br><br>
		<label>Username</label>
		<input type="text" name="uname">
		<br><br>
		<label>Password</label>
		<input type="Password" name="password">
		<br><br>
		<input type="submit" name="submit">
	</form>

</body>	
</html>