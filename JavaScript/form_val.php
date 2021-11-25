<?php 
	if (isset($_POST['submit'])) {
		
		echo "<pre>";

		print_r($_POST);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Crud | New Employee Registration</title>
	<style type="text/css">
		table {
			margin: auto;
		}

		table tr th,td {
			padding: 10px;
		}
	</style>
</head>
<body>
	<h1 style="text-align: center; color: blue;">New Employee Registration</h1>
	
	<button type="button" onclick="getApiData()">Get All Data</button>
					
	<form method="post">
		<table width="50%" style="border-collapse: collapse;" border="1">
			<tr>
				<th>Full Name</th>
				<td><input type="text" name="fname" id="fname" placeholder="Enter Your First Name" >
					<span id="e1"></span>
				</td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" name="email" id="email" placeholder="Enter Your Last Email" >
					<span id="e2"></span>
				</td>
			</tr>
			<tr>
				<th>Gender</th>
				<td><input type="radio" name="gender" value="Male">Male
				<input type="radio" name="gender" value="Female">Female
				<input type="radio" name="gender" value="Others">Others
				<span id="e3"></span>
			</td>
			</tr>

			<tr>
				<th>DOB</th>
				<td><input type="date" name="dob" id="dob">
					<span id="e4"></span>
				</td>
			</tr>
			<tr>
				<th>City</th>
				<td>
					<select name="city" id="city">
						<option value="">Select</option>
						<option value="Vadodara">Vadodara</option>
						<option value="Anand">Anand</option>
						<option value="Nadiad">Nadiad</option>
						<option value="Ahmedabad">Ahmedabad</option>
						<option value="Surat">Surat</option>
					</select>
					<span id="e5"></span>
				</td>
			</tr>

			<tr>
				<th>Hobby</th>
				<td>
					<input type="checkbox" name="hobby[]" value="Cricket">Cricket
					<input type="checkbox" name="hobby[]" value="Football">Football
					<input type="checkbox" name="hobby[]" value="Baseball">Baseball
					<input type="checkbox" name="hobby[]" value="Badmintion">Badmintion
					<span id="e6"></span>
				</td>
			</tr>
			<tr>
				<th colspan="2">
					<input type="submit" name="submit" value="Register" onclick="return formCheck()">
				</th>
			</tr>
		</table>
	</form>
	<br><br>
	<div style="margin: auto;" id="resulTable"></div>

	<script type="text/javascript">
		function httpGet(theUrl) {
		    var xmlHttp = new XMLHttpRequest();
		    xmlHttp.open( "GET", theUrl, false ); // false for synchronous request
		    xmlHttp.send( null );
		    return xmlHttp.responseText;
		}

		function getApiData() {
			let finalData = httpGet("http://localhost/php_11th_aug/javascript/web_service.php")
			console.log(JSON.parse(finalData));
		}

		// setInterval(
		// 	getApiData, 1000
		// );
				
		function formCheck() {
			
			let fname = document.getElementById('fname').value;
			let email = document.getElementById('email').value;	
			let gender = document.getElementsByName('gender');
			let dob = document.getElementById("dob").value;	
			let city = document.getElementById("city").value;
			let hobby = document.getElementsByName('hobby[]');

			let count = 0;

			let genderValue = '';
			let hobbyValue = [];

			if(fname=='') {
				document.getElementById("e1").innerHTML = "Name Can Not be blank";
				document.getElementById("e1").style.color = "red";
				//console.log('Name Can Not be blank');
			} else {
				document.getElementById("e1").innerHTML = "";
			}

			if (email=='') {
				document.getElementById("e2").innerHTML = "Email Can Not be blank";
				document.getElementById("e2").style.color = "red";
			} else {
				document.getElementById("e2").innerHTML = "";

			}

			// for(let i=0; i<gender.length; i++) {
			// 	console.log(gender[i].checked);
			// 	if(gender[i].checked==true) {
			// 		count++;
			// 	}
			// }

			// console.log(count);

			// if(count>0) {
			// 	document.getElementById("e3").innerHTML = "";
			// } else {
			// 	document.getElementById("e3").innerHTML = "Gender Is Not Selected";
			// 	document.getElementById("e3").style.color = "red";
			// }

			for(let i=0; i<gender.length; i++) {
				if(gender[i].checked==true) {
					// genderValue.append(gender[i].value)
					genderValue += gender[i].value;
				}
			}
			
			//console.log(genderValue);

			if(genderValue=='') {
				document.getElementById("e3").innerHTML = "Gender Is Not Selected";
				document.getElementById("e3").style.color = "red";
			} else {
				document.getElementById("e3").innerHTML = "";
			}

			//console.log(dob);
			if(dob=='') {
				//console.log('Hello');
				document.getElementById("e4").innerHTML = "Date Is Not Picked";
				document.getElementById("e4").style.color = "red";
			} else {
				document.getElementById("e4").innerHTML = "";
				console.log('Hi');
			}

			if(city=='') {
				//console.log('Hello');
				document.getElementById("e5").innerHTML = "City Is Not Selected";
				document.getElementById("e5").style.color = "red";
			} else {
				document.getElementById("e5").innerHTML = "";
				console.log('Hi');
			}

			for(let i=0;i<hobby.length;i++) {
				if(hobby[i].checked){
					hobbyValue.push(hobby[i].value);
				}
			}


			if(hobbyValue.length==0) {
				console.log("Hobby is Not Selected");
				document.getElementById("e6").innerHTML = "Hobby is Not Selected";
				document.getElementById("e6").style.color = "red";
			} else {
				if(hobbyValue.length==1){
					console.log("Minimum 2 Selection is Required");
					document.getElementById("e6").innerHTML = "Minimum 2 Selection is Required";
					document.getElementById("e6").style.color = "red";
				} else {
					document.getElementById("e6").innerHTML = "";
				}
			}

			if(fname!='' && email !='' && genderValue!='' && hobbyValue.length>1 && city!='' && dob!='') {
				
				document.getElementById("fname").value = '';

				// html = '';
				// html += "<table width='50%' style='border-collapse: collapse;' border='1'>";
				// 	html += "<tr>";
				// 		html += "<th>Full Name</th>";
				// 		html += "<td>"+fname+"</td>";
				// 	html += "</tr>";
				// 	html += "<tr>";
				// 		html += "<th>Email</th>";
				// 		html += "<td>"+email+"</td>";
				// 	html += "</tr>";
				// 	html += "<tr>";
				// 		html += "<th>Gender</th>";
				// 		html += "<td>"+genderValue+"</td>";
				// 	html += "</tr>";
				// 	html += "<tr>";
				// 		html += "<th>DOB</th>";
				// 		html += "<td>"+dob+"</td>";
				// 	html += "</tr>";
				// 	html += "<tr>";
				// 		html += "<th>City</th>";
				// 		html += "<td>"+city+"</td>";
				// 	html += "</tr>";
				// 	html += "<tr>";
				// 		html += "<th>Hobby</th>";
				// 		html += "<td>"+hobbyValue+"</td>";
				// 	html += "</tr>";
				// html += "</table>";

				// console.log(html);

				// document.getElementById("resulTable").innerHTML = html;

				return true;

			} else {
				console.log('Error');
			}
			
			return false;
		}
	</script>
</body>
</html>