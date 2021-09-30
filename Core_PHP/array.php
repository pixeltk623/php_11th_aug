<?php 
	
	// Types of Array 

	// 1. Indexed Array 
	// 2. associative Array 
	// 3. Multidimensonal Array 
	
	$listOfStudents = array(
		array(
			"name"=>"Sharvan",
			"email"=>"Sharvan@gmail.com",
			"mobile"=>"9835401515",
			"dept"=>"IT",
			"salary"=>"8000",
			"address" => array(
				"PIN" => 4654654,
				"city" => "Vadodara"
			)
		),
		array(
			"name"=>"Sharvan",
			"email"=>"Sharvan@gmail.com",
			"mobile"=>"9835401515",
			"dept"=>"IT",
			"salary"=>"3000",
			"address" => array(
				"PIN" => 4654654,
				"city" => "Vadodara"
			)
		),
		array(
			"name"=>"Sharvan",
			"email"=>"Sharvan@gmail.com",
			"mobile"=>"9835401515",
			"dept"=>"IT",
			"salary"=>"2000",
			"address" => array(
				"PIN" => 4654654,
				"city" => "Vadodara"
			)
		),
		array(
			"name"=>"Sharvan",
			"email"=>"Sharvan@gmail.com",
			"mobile"=>"9835401515",
			"dept"=>"IT",
			"salary"=>"15000",
			"address" => array(
				"PIN" => 4654654,
				"city" => "Vadodara"
			)
		),
		array(
			"name"=>"Sharvan",
			"email"=>"Sharvan@gmail.com",
			"mobile"=>"9835401515",
			"dept"=>"IT",
			"salary"=>"46546",
			"address" => array(
				"PIN" => 4654654,
				"city" => "Vadodara"
			)
		),
		array(
			"name"=>"Sharvan",
			"email"=>"Sharvan@gmail.com",
			"mobile"=>"9835401515",
			"dept"=>"IT",
			"salary"=>"884654",
			"address" => array(
				"PIN" => 4654654,
				"city" => "Vadodara"
			)
		),
		array(
			"name"=>"Sharvan",
			"email"=>"Sharvan@gmail.com",
			"mobile"=>"9835401515",
			"dept"=>"IT",
			"salary"=>"12365",
			"address" => array(
				"PIN" => 4654654,
				"city" => "Vadodara"
			)
		),
		array(
			"name"=>"Sharvan",
			"email"=>"Sharvan@gmail.com",
			"mobile"=>"9835401515",
			"dept"=>"IT",
			"salary"=>"1500",
			"address" => array(
				"PIN" => 4654654,
				"city" => "Vadodara"
			)
		),
		array(
			"name"=>"Sharvan",
			"email"=>"Sharvan@gmail.com",
			"mobile"=>"9835401515",
			"dept"=>"IT",
			"salary"=>"1230",
			"address" => array(
				"PIN" => 4654654,
				"city" => "Vadodara"
			)
		),
	);

	// echo "<pre>";

	// print_r($listOfStudents);

	// die;

	// $listOfStudents = array(
	// 		array(
	// 			array(
	// 				array(
	// 					array(
	// 						array("Sharvan@gmail.com"),
	// 					),
	// 				),
	// 			),
	// 		),
	// 		array(
	// 			array("name"=>"Sharvan"),
	// 		),
	// 		array(
	// 			array(),
	// 		),
	// 		array(),
	// 		array(),
	// 	);
	

	// echo "<pre>";

	// print_r($listOfStudents[1][0]['name']);

	// print_r($listOfStudents[0][0][0][0][0][0]);

	// $listOfStudents = array(
	// 	"name"=>"Sharvan",
	// 	"email"=>"Sharvan@gmail.com",
	// 	"mobile"=>"9835401515",
	// 	"dept"=>"IT",
	// 	"salary"=>"XXXX"
	// ); D:\Xampp\htdocs\php_11th_aug\Core_PHP\array.php

	// echo "<pre>";

	// print_r($listOfStudents['email']);
	// die;


	// die;

	$a = array("Sharvan","Anil","Bharati","Sharvan","Anil","Bharati","Sharvan","Anil","Bharati");

	$html = "";
	$html .= "<ul>";
	for ($i=0; $i < sizeof($a); $i++) { 
		
		$html .= "<li>".$a[$i]."</li>";
	}
	$html .= "</ul>";


	// foreach ($a  as $key => $value) {
		
	// 	echo ++$key." - ".$value;

	// 	echo "<br>";
	// }


	// $finalValue = implode(", ", $a);

	// // echo $a[1];

	// echo $finalValue;

	// $finalArray = explode(",", $finalValue);

	// echo "<pre>";

	// print_r($finalArray);

?>

<?php 
	
	// echo $html;


	
?>

<!-- 
<ul>
	<?php 
	for ($i=0; $i < sizeof($a); $i++) { 
	?>
		<li><?php echo $a[$i] ?></li>
	<?php 
	}

	?>
</ul> -->

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
  <h2>Bordered Table</h2>
  <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th rowspan="2">Sr.No</th>
        <th rowspan="2">Name</th>
        <th rowspan="2">Email</th>
        <th rowspan="2">Mobile</th>
        <th rowspan="2">Dept</th>
        <th rowspan="2">Salary</th>
        <th colspan="2" class="text-center">Address</th>
      </tr>
      <tr>
      	<th>Pin Code</th>
      	<th>City</th>
      </tr>
    </thead>
    <tbody>

    	<?php 

    	/*
    	<?php 
    		for ($i=0; $i < sizeof($listOfStudents); $i++) { 
    	?>

      <tr>
        	<td><?php echo ($i+1); ?></td>
        	<td><?php echo $listOfStudents[$i]['name']; ?></td>
        	<td><?php echo $listOfStudents[$i]['email']; ?></td>
        	<td><?php echo $listOfStudents[$i]['mobile']; ?></td>
        	<td><?php echo $listOfStudents[$i]['dept']; ?></td>
        	<td><?php echo $listOfStudents[$i]['salary']; ?></td>
        	<td><?php echo $listOfStudents[$i]['address']['PIN']; ?></td>
        	<td><?php echo $listOfStudents[$i]['address']['city']; ?></td>
      </tr>
      <?php
    		}
    	?>
		<?php 
		*/
		?>
    	<?php 

    		foreach ($listOfStudents as $key => $value) {

    			?>
    			<tr>
    			<td><?php echo ($key+1); ?></td>
	        	<td><?php //echo $value['name']; ?>
	        		
	        		<input type="text" class="form-control" name="" value="<?php echo $value['name']; ?>">

	        	</td>
	        	<td><?php echo $value['email']; ?></td>
	        	<td><?php echo $value['mobile']; ?></td>
	        	<td><?php echo $value['dept']; ?></td>

	        	<?php
	        	/*
	        	<?php 
	        		if ($value['salary']>=5000) {
	        			$className = "text-success";
	        		} else {
	        			$className = "text-danger";
	        		}
	        	?>
	        	<td class="<?php echo $className; ?>"><?php echo $value['salary']; ?></td>

	        	<?php 

	        		if ($value['salary']>=5000) {
	        			?>
	        			<td class="text-success"><?php echo $value['salary']; ?></td>
	        			<?php 
	        		} else {
	        			?>
	        			<td class="text-danger"><?php echo $value['salary']; ?></td>
	        			<?php 
	        		}

	        	?>

	        	*/
	        	?>

	        	<td class="<?php echo ($value['salary']>=5000) ? 'text-success' : 'text-danger' ?>"><?php echo $value['salary']; ?></td>

	        	<td><?php echo $value['address']['PIN']; ?></td>
	        	<td><?php echo $value['address']['city']; ?></td>
	        	</tr>
    		<?php
    		}

    	?>


    </tbody>
  </table>
</div>

</body>
</html>
