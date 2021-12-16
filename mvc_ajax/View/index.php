<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Hello, world!</title>
  </head>
  <body>

  	<div class="container mt-3">
  		 <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Employee</a>
  		<br><br>
  		<div id="table"></div>
  	</div>

  	<?php 
  		include_once 'modal.php';
  	?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript">
    	$(document).ready(function() {
    		getAllData();
    		function getAllData() {
    			
    			$.ajax({
                    type: "GET",
                    url: "http://localhost/Lecture/mvc_ajax/users",
                    dataType : 'text',
                    data: {action: "GET_ALL_DATA"},

                     success:function(data) {
                        //console.log(data)

                        let finalData = JSON.parse(data);

                        console.log(finalData);

                        let html = '';

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
                        if(finalData.status==200) {
                            
                            for(var i=0; i<finalData.data.length; i++) {
                                html += "<tr>";
                                    html += "<td>"+(i+1)+"</td>";
                                    html += "<td>"+finalData.data[i].name+"</td>";
                                    html += "<td>"+finalData.data[i].email+"</td>";
                                    html += "<td>"+finalData.data[i].gender+"</td>";
                                    html += "<td>"+finalData.data[i].hobby+"</td>";
                                    html += "<td>"+finalData.data[i].city+"</td>";
                                    html += "<td><button type='button' class='btn btn-info'>Show</button> <button type='button' class='btn btn-secondary edit' value='"+finalData.data[i].id+"'>Edit</button> <button  type='button' class='btn btn-danger delete' value='"+finalData.data[i].id+"'>Delete</button></td>";
                                html += "</tr>";
                            }

                        } else if(finalData.status==404) {
                            html += "<tr>";
                                html += "<td colspan='7' class='text-center text-danger'>No Record Found</td>";
                            html += "</tr>";
                        }
                        html += '</tbody>';
                        html += '</table>';
                        //console.log(html)

                        $("#table").html(html);   
                    },
                    error:function(e) {
                        console.log(e)
                    }
                });
    		}

    		$(document).on("click",".addNewUser", function(e) {
    			e.preventDefault();

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


                console.log(userDetails);

                $.ajax({
                    type: "POST",
                    url: "http://localhost/Lecture/mvc_ajax/user",
                    dataType : 'text',
                    data: {action: "INSERT_DATA", data : userDetails},

                    success:function(data) {

                        if(JSON.parse(data).status) {
                            getAllData()

                            $("#exampleModal").modal('hide');
                            $('#myForm')[0].reset();
                        }
                    }
                });

    		});

    		$(document).on("click",".delete", function() {
                let did = $(this).val()

                $.ajax({
                    type: "POST",
                    url: "http://localhost/Lecture/mvc_ajax/delete",
                    dataType : 'text',
                    data: {action: "DELETE_USER", data : did},

                    success:function(data) {
                        
                        if(JSON.parse(data).status) {
                            alert("Deleted");
                            getAllData();
                        }
                    }
                });

            });


            $(document).on("click",".edit", function() {
                let eid = $(this).val();

                $.ajax({
                    type: "POST",
                    url: "http://localhost/Lecture/mvc_ajax/edit",
                    dataType : 'text',
                    data: {data : eid},

                    success:function(data) {
                        let finalData = JSON.parse(data);


                        $("#name").val(finalData.name);
                        $("#email").val(finalData.email);

                        var genderE =  document.getElementsByName('gender');

                        for(let i=0; i<genderE.length; i++) {
                            if(genderE[i].value==finalData.gender) {
                                genderE[i].checked = "checked";
                            }
                        }

                        var hobbyE =  document.getElementsByName('hobby');

                        const hobby = finalData.hobby.split(",");


                        for(let i=0; i<hobbyE.length; i++) {
                            
                           for(let j = 0; j<hobby.length; j++) {

                                if(hobbyE[i].value==hobby[j]) {
                                    hobbyE[i].checked = true;
                                }
                           }
                        }

                        var cityE = document.getElementById('city').options;

                        for(let i=0; i<cityE.length; i++) {

                            if(cityE[i].value==finalData.city) {
                                cityE[i].selected = true;
                            }

                        }

                        
                        
                    }
                });

                $("#exampleModal").modal('show');
            });
    	});
    </script>
  </body>
</html>