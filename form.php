<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<h2 style="text-align: center;">Form in HTML</h2>
	<!-- disabled autocomplete="off"  readonly
	POST size="3" multiple
	cols="80" rows="20"
	min="2021-08-10" max="2021-08-30"
	GET
	 -->
	<fieldset>
		<legend>Registration Form</legend>
		<form method="POST" action="form.php" enctype="multipart/form-data">
			<label>Name:</label>
			<input type="text" name="name" value="" placeholder="Enter Your Name" required>
			<br><br>

			<label>Email:</label>
			<input type="email" name="email" value="" placeholder="Enter Your Email" required>
			<br><br>

			<label>Quantity</label>
			<input type="number" name="qty">
			<br><br>

			<label>Gender</label>
			<input type="radio" name="gender" value="Male" checked>Male
			<input type="radio" name="gender" value="Feamle">Feamle
	 		<br><br>

	 		<label>Hobby</label>

	 		<input type="checkbox" name="hobby" value="Cricket" disabled>Cricket
	 		<input type="checkbox" name="hobby" value="Football">Football
	 		<input type="checkbox" name="hobby" value="Tenis">Tenis
	 		<input type="checkbox" name="hobby" value="Baseball" checked>Baseball
			<br><br>

			<label>City</label>
			<select name="city" required="">
				<option value="">Select</option>
				<option value="Baroda">Baroda</option>
				<option value="Bharuch">Bharuch</option>
				<option value="Rajkot">Rajkot</option>
				<option value="Ahmedabad">Ahmedabad</option>
			</select>
			<br><br>

			<label>Address</label>
			<textarea></textarea>
			<br>
			<br>

			<label>Date</label>
			<input type="date" name="" min="1999-01-01">
			<br><br>

			<label>Date & Time</label>
			<input type="datetime-local" name="">
			<br><br>

			<label>Time</label>
			<input type="time" name="">
			<br><br>

			<label>Week</label>
			<input type="week" name="">
			<br><br>

			<label>Month</label>

			<input type="month" name="">
			<br><br>

			<label>Range</label>
			<!-- <input type="range" name="" min="5" max="8"> -->

			<input type="range" min="0" max="100" step="5" value="10"/>
			<br><br>

			<label>Search</label>
			<input type="search" name="">
			<br><br>

			<label>Password</label>
			<input type="password" name="">
			<br><br>

			
			<label>File</label>
			<input type="file" name="profilePic" multiple required>
			<br><br>
			<label>Progress</label>
			<progress value="50" max="100">
			<br><br>
			<input type="submit" name="" value="Send">
			<input type="reset" name="">
		</form>
	</fieldset>

	<!-- <input type="submit" name="">
	<input type="button" name="" value="Button"> -->
</body>
</html>