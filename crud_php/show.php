<?php
	include_once 'constant.php';
    include_once 'config.php';

	 if (isset($_GET['eid'])) {
        $eid = $_GET['eid'];

        $queryE = "SELECT * FROM employee WHERE eid = ".$eid;
        $resultE = mysqli_query($conn, $queryE);

        $finalData = mysqli_fetch_object($resultE);

        
      } else {

        header("Location: 404.php");
      }

      // echo "<pre>";

      // print_r($finalData);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>  
<div class="container">
  <h1 class="text-center text-primary">Crud In Core PHP</h1>
  <a href="index.php" class="btn btn-primary mb-2">Back To Home</a>



  <table class="table table-bordered">
    <tr>
    	<th>Name</th>
    	<td><?php echo $finalData->name; ?></td>
    </tr>
    <tr>
    	<th>Email</th>
    	<td><?php echo $finalData->email; ?></td>
    </tr>
    <tr>
    	<th>City</th>
    	<td><?php echo $finalData->city; ?></td>
    </tr>
    <tr>
    	<th>Gender</th>
    	<td><?php echo $finalData->gender; ?></td>
    </tr>
    <tr>
    	<th>Hobby</th>
    	<td><?php echo $finalData->hobby; ?></td>
    </tr>
    <tr>
    	<th>DOB</th>
    	<td><?php echo $finalData->dob; ?></td>
    </tr>
    <tr>
    	<th>Created At</th>
    	<td><?php echo $finalData->created_at; ?></td>
    </tr>
    <tr>
    	<th>Updated At</th>
    	<td><?php echo $finalData->updated_at; ?></td>
    </tr>
   

  </table>
</div>

</body>
</html>
