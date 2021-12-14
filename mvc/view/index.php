<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

  	<div class="container mt-3">
  		<a href="create" class="btn btn-primary">Add New Employee</a>
  		<table class="table">
		  <thead>
		    <tr>
		      <th scope="col">Sr.No</th>
		      <th scope="col">Name</th>
		      <th scope="col">Email</th>
		      <th scope="col">Gender</th>
		      <th scope="col">Hobby</th>
		      <th scope="col">City</th>
		      <th>Action</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php
		  		if($allData['status']==404) {
		  			?>

		  			<tr>
		  				<td colspan="7" class="text-center text-danger"><?php echo $allData['data'] ?></td>
		  			</tr>
		  			<?php
		  		}  else {


		  		foreach ($allData['data'] as $key => $value) {
		  			?>
		  			<tr>
		     			<td><?php echo ++$key; ?></td>
		     			<td><?php echo $value->name; ?></td>
		     			<td><?php echo $value->email; ?></td>
		     			<td><?php echo $value->gender; ?></td>
		     			<td><?php echo $value->hobby; ?></td>
		     			<td><?php echo $value->city; ?></td>
		     			<td>
		     				<button class="btn btn-primary">Show</button>
		     				<a class="btn btn-secondary" href="edit?id=<?php echo $value->id; ?>">Edit</a>
		     				<a class="btn btn-danger" href="delete?id=<?php echo $value->id; ?>">Delete</a>
		     			</td>
		    		</tr>
		  			<?php
		  		} 
		  		}
		  	?>
		   
		  </tbody>
		</table>
  	</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>