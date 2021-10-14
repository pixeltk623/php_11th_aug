<?php 

	session_start();

	$conn = mysqli_connect("localhost", "root", "", "php_11_aug");

	if (isset($_SESSION['uname'])) {
		header("Location: Dashboard.php");
	}
		
	if (isset($_POST['submit'])) {
		
		$uemail = $_POST['uemail'];
		$password = md5($_POST['password']);


		$queryC = "SELECT * FROM students WHERE (email = '$uemail' AND  password = '$password') OR (username = '$uemail' AND  password = '$password')";



		$resC = mysqli_query($conn, $queryC);

		$userData = mysqli_fetch_object($resC);

		if ($resC->num_rows>0) {

			$_SESSION['is_login'] = true;
			$_SESSION['uname'] = $userData->username;
			$_SESSION['uid'] = $userData->id;
			$_SESSION['time'] = time();
			
			header("Location: dashboard.php");

		} else {
			echo "UserName Or Email Or Password is wrong";
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
		<label>Email/Username</label>
		<input type="text" name="uemail">
		<br>
		<br>

		<label>Password</label>
		<input type="password" name="password">

		<br><br>

		<input type="submit" name="submit" value="Login">
	</form>

</body>
</html>