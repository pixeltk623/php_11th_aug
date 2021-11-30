<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post">
		<label>Password</label>
		<br><br>
		<input type="text" name="password" id="password" onkeyup="validateMyPassword()" autocomplete="off">
		<br><br>
		<div id="rules">
			<span id="e1">One lowercase character</span>
			<br>
			<span id="e2">One uppercase character</span>
			<br>
			<span id="e3">One number</span>
			<br>
			<span id="e4">One special character</span>
			<br>
			<span id="e5">8 characters minimum</span>
		</div>
		<br><br>
		<div id="allSet">Your password is secure and you're all set!</div>
		<br><br>
		<input type="submit" name="submit">
	</form>

	<script type="text/javascript">
		let allSet = document.getElementById("allSet");
		allSet.style.display = "none";
		function validateMyPassword() {
			let password = document.getElementById('password').value;
			let lowercaseError = document.getElementById("e1");
			let uppercaseError = document.getElementById("e2"); 
			let numbercaseError = document.getElementById("e3");
			let specialcaseError = document.getElementById("e4");
			let mincharError = document.getElementById("e5");
			
			const re = /[\!\@\#\$\%\^\&\*\)\(\+\=\.\<\>\{\}\[\]\:\;\'\"\|\~\`\_\-]/;

			
			//console.log(isLowerCase(password));

			//console.log(/^[a-z]*$/.test(password));


			if(/[a-z]/.test(password)) {
				lowercaseError.style.color = "grey";
				//console.log('Grey');
			}  else {
				lowercaseError.style.color = "black";
				//console.log('black');
			}

			if(/[A-Z]/.test(password)) {
				uppercaseError.style.color = "grey";
				//console.log('Grey');
			}  else {
				uppercaseError.style.color = "black";
				//console.log('black');
			}

			if(/[0-9]/.test(password)) {
				numbercaseError.style.color = "grey";
				//console.log('Grey');
			}  else {
				numbercaseError.style.color = "black";
				//console.log('black');
			}

			if(re.test(password)) {
				specialcaseError.style.color = 'grey';
			} else {
				specialcaseError.style.color = 'black';
			}

			if(password.length>=8) {
				mincharError.style.color = "grey";
			} else {
				mincharError.style.color = "black";
			}

			// if((password.length>=8) && (/[a-z]/.test(password)) && (/[A-z]/.test(password)) && (/[0-9]/.test(password)) && (re.test(password))) {
			// 	console.log('All Set');
			// } else {
			// 	console.log('Not Set');
			// }

			console.log(re.test(password));

			if((password.length>=8) && (/[a-z]/.test(password)) && (/[A-Z]/.test(password)) && (/[0-9]/.test(password)) && re.test(password)) {
				allSet.style.display = "block";
			} else {
				allSet.style.display = "none";
			}
		}
	</script>
</body>
</html>

<!-- PHP - Ajax (Js, Jquery, BS) => Crud
	2

OOPs
	2

Application
	MVC
		CRUD + AJAX = > 3

PHP 

Laravel 
 -->