<!DOCTYPE html>
<html>
<head>
	<title>File Uploading</title>
</head>
<body>

	<form method="post" id="form">
		<label>Name</label>
		<input type="text" name="name" id="name">
		<br><br>
		<label>Profile Pic</label>
		<input type="file" name="file" class="fileUpload">
		<span id="fileError"></span>
		<br><br>
		<input type="submit" name="submit">
	</form>

	<script type="text/javascript">
		const form = document.getElementById('form');
		const nameOfuser = document.getElementById('name');
		const fileUpload = document.getElementsByClassName('fileUpload');
		const fileError = document.getElementById("fileError");
		fileError.style.color="red";
		//console.log(form.submit);
		//form.onsubmit = submit;

		console.log(form.onsubmit);

		form.onsubmit = formSubmit

		// function submit(event) {
		  
		//   event.preventDefault();
		// }

		function formSubmit(event) {
			event.preventDefault();
			//console.log(event);

			console.log(fileUpload[0].files);

			if(fileUpload[0].files.length>0) {
				//console.log(fileUpload[0].files);
				var fileName = fileUpload[0].files[0].name;
				var fileSize = fileUpload[0].files[0].size;
				var ext = (fileName.split('.').pop()).toLowerCase()
				if(ext=='jpeg' || ext=='jpg' || ext=='png') {
					// console.log('We can Upload');

					// console.log(parseInt(fileSize/1024));

					if(parseInt(fileSize/1024)>=10 && parseInt(fileSize/1024)<=500) {
						fileError.innerHTML = "";
					}	else {
						fileError.innerHTML = "File Size Is Not Matched";
					}

					
				} else {
					console.log('invalid Ext');
					fileError.innerHTML = "invalid Ext";
				}
				console.log(ext);
			} else {
				console.log('File is Not Selected');
				fileError.innerHTML = "File is Not Selected";
			}

			
		}
	</script>
</body>
</html>