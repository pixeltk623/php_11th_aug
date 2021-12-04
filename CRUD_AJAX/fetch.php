<!DOCTYPE html>
<html>
<head>
	<title></title>
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>


	<div class="container mt-3">
		<button type="button" class="btn btn-primary openModal">Add New User</button>
	<br><br>
	<div id="table"></div>
	</div>
	<div id="edit_mo">
		
	</div>
	<?php 
		include_once 'modal.php';
	?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			getAllData()

			$(document).on("click",".openModal", function() {

				$("#exampleModal").modal("show");
			});

			function getAllData() {
				
				$.ajax({
					type: "GET",
					url: "http://localhost/php_11th_aug/CRUD_AJAX/api.php",
					dataType : 'text',
					data: {action: "GET_ALL_DATA"},
					success:function(data) {
						
						let finalData = JSON.parse(data)

						//console.log(finalData);

						var html = '';

						html += '<table class="table table-bordered">';
                            html += '<thead>';
                                html += '<tr>';
                                    html += '<th>Sr.No</th>';
                                    html += '<th>Name</th>';
                                    html += '<th>Email</th>';
                                    html += '<th>Gender</th>';
                                    html += '<th>Hobby</th>';
                                    html += '<th>City</th>';
                                    html += '<th>Action</th>';
                                html += '</tr>';
                            html += '</thead>';
                    
                    	html += '<tbody>';

						if(finalData.status == 404) {

							html += '<tr>';
								html += '<td colspan="7" class="text-center text-danger">'+finalData.data+'</td>';
							html += '<tr>';

							
						} else {
							
							
							for(var i = 0; i<finalData.data.length; i++) {
								html += '<tr>';
									html += '<td>'+(i+1)+'</td>';
									html += '<td>'+finalData.data[i].name+'</td>';
									html += '<td>'+finalData.data[i].email+'</td>';
									html += '<td>'+finalData.data[i].gender+'</td>';
									html += '<td>'+finalData.data[i].hobby+'</td>';
									html += '<td>'+finalData.data[i].city+'</td>';
									html += '<td> <button class="btn btn-info">Show</button> <button type="button" class="btn btn-secondary edit" value='+finalData.data[i].id+'>Edit</button> <button class="btn btn-danger delete" type="button" value='+finalData.data[i].id+'>Delete</button> </td>';
								html += '<tr>';
							}

						}

						html += '</tbody>';

						html += '<table>';

						$("#table").html(html);

					},

					error:function(error) {
						console.log(error);
					}

				});
			}


			$(document).on("click", ".addNewUser", function(event) {
                event.preventDefault(); 

                let nameOfUser = $("#name").val();
                let email = $("#email").val();
                let city = $("#city").val();
                let gender = $('input[name="gender"]');
                let hobby = $('input[name="hobby"]');
                let genderValue = "";
                let hobbyValue = [];


                for(var i = 0; i<gender.length; i++) {

                    if(gender[i].checked) {
                        genderValue += gender[i].value;
                    }
                }

                for(var i = 0; i<hobby.length; i++) {

                    if(hobby[i].checked) {
                       hobbyValue.push(hobby[i].value);
                    }
                }

                let userDetails = {name: nameOfUser, email: email, city: city, gender:genderValue, hobby: hobbyValue}

                //console.log(userDetails);

                $.ajax({
                    type: "POST",
                    url: "http://localhost/php_11th_aug/CRUD_AJAX/api.php",
                    dataType : 'text',
                    data: {action: "INSERT_DATA", data : userDetails},

                    success:function(data) {
                       	
                       	console.log(data);

                        if(JSON.parse(data).status) {
                            getAllData()

                            $("#exampleModal").modal('hide');
                            $('#myForm')[0].reset();
                        }
                    }
                });

            });

            $(document).on("click",".delete", function() {

            	var did  = $(this).val()

            	 $.ajax({
                    type: "POST",
                    url: "http://localhost/php_11th_aug/CRUD_AJAX/api.php",
                    dataType : 'text',
                    data: {action: "DELETE_USER", data : did},

                    success:function(data) {
                        
                        if(JSON.parse(data).status) {
                            alert("Deleted");
                            getAllData()
                        }
                    }
                });
            });

            $(document).on("click",".edit", function() {
            	var eid  = $(this).val()

            	$.ajax({
                    type: "POST",
                    url: "http://localhost/php_11th_aug/CRUD_AJAX/api.php",
                    dataType : 'text',
                    data: {action: "EDIT_USER", data : eid},

                    success:function(data) {
                      	
                      	$("#edit_mo").html(data);

                      	$("#exampleModal_EDIT").modal("show");

                      	console.log(data);  
                        // if(JSON.parse(data).status) {
                        //     alert("Deleted");
                        //     getAllData()
                        // }
                    }
                });

            });

		});
	</script>
</body>
</html>