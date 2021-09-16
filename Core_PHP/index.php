<?php 


$isButton = "disabled";


// $a = 5;

// echo $a++; // 6 // 5

// echo "<br>";

// echo $a;

// echo "<br>";

// $b = 7;

// echo ++$b; //8

// die;


// $a = "5";

// $isValid = true;

// var_dump($a);
// var_dump($isValid);

// $a = "7";

// $b = 7;

// if ($a===$b) {
	
// 	echo "Done";

// } else {
// 	echo "Type is Not same";
// }

//Operator

// + = sum
// - = sub
// * = mul 
// / = div 
// % = reminder 


// = => Assign the value 
// == => Compare The Value 
// === => Compare the value as well as check the type also 

// AND && => 

// OR || =>

// !=

// $i++ => Post increment

// ++$i => Pre Increment

// true
// false
// +=
// -=






// Rules Of PHP Variables


// 1. 

// $12name = "Kumar"; => Not

// $namexth12 = "Test";

// echo $namexth12;

// $name12 = "Kumar";

// echo $name12;

// $name@esfsd = "asdas"; => Not

// $_name = "Kumar";

// $first_name_ = "Test";


// echo $first_name_;

// $class = "10th";
// $Class = "12th";

// echo $Class;



// print_r($_POST['submit']);


if (isset($_POST['submit'])) {
	$name = $_POST['name'];
}


// if (isset($_GET['submit'])) {
	
// 	echo $name = $_GET['name'];

// }
 
// echo $_GET;


// echo "<pre>";

// print_r($_GET);


// if (isset($userName)) {
	
// 	echo "SET";
// } else {
// 	echo "Not SET";
// }

echo "<br>";

//This is First Line => single Line Comment

/* This is Line */

/*This is Line => muliline comments

This is Line
This is Line

This is Line
*/



// echo "Hello This is Kumar";

// echo "<h1>Hello This is Kumar</h1>";

$a = 5;
$b = 6;


$firstName = "Sharvan";
$lastName = "Kumar";

echo $firstName." ".$lastName;

// echo "<h1>".$firstName."</h1>";

echo "<h1>".$firstName." ".$lastName."</h1>";


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



	<button <?php echo (isset($isButton)) ? $isButton : '' ?>>Button</button>

	<a href="<?php echo "https://www.google.co.in/" ?>">Google</a>
	<h1>Home Page - Index</h1>

	<h2><?php echo "Hello This is Kumar"; ?></h2>

	<h3><?php echo $a+$b; ?></h3>

	<form method="POST">
		<label>Enter Your Name</label>
		<input type="text" name="name" placeholder="Name">
		<input type="submit" name="submit">
	</form>

	<?php 

		// if (isset($name)) {
		// 	echo "<h1>$name</h1>";
		// }

		if (isset($name)) {
			?>
			<h1><?php echo $name; ?></h1>
			<?php
		}

	?>

	
</body>
</html>