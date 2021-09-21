<!Doctype html>
<html>
<body>
	<form method="post">
		Name: <input type="text" name="Name"><br><br>
		Email: <input type="text" name="email"><br><br>
		Submit : <input type="Submit"><br><br>

	</form>
	Welcome <?php echo $_POST["Name"]; ?><br>

	Your email address is: <?php echo $_POST["email"]; ?>
	<body>
</html>