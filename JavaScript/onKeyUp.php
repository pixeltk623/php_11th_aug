<!DOCTYPE html>
<html>
<head>
	<title>ONKEYUP</title>
</head>
<body>

	<form method="POST">
		<label>Name: </label>
		<input type="text" name="name" id="name" onkeyup="getMyName()">
		<span id="e1"></span>
		<br><br>
		
		<input type="submit" name="submit">
	</form>

	<script type="text/javascript">
		function getMyName() {
			
			let nameOfUser = document.getElementById('name').value;
			let e1 = document.getElementById("e1");
			
			if(nameOfUser=='') {
				e1.innerHTML = "Name Can Not be blank";
			} else {
				e1.innerHTML = "";
			}


			var xhr = new XMLHttpRequest();
			xhr.open("POST", "http://localhost/php_11th_aug/javascript/api.php", false);
			xhr.setRequestHeader('Content-Type', 'application/json');
			xhr.send(JSON.stringify({
			    value: nameOfUser
			}));
			//return xhr.responseText;
			//console.log(JSON.parse(xhr.responseText).status);
			if(JSON.parse(xhr.responseText).status==true) {
				e1.innerHTML = "Name is Already Taken";
				e1.style.color = "red";
			} else {
				e1.innerHTML = "Name is Available";
				e1.style.color = "green";
			}
			//console.log(nameOfUser);
		}
	</script>
</body>
</html>