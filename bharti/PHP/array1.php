<?php

$car= array('car1', 'car2','car3','car4');
echo $car[0]."<br>";


//indexed array

$age=array("peter"=>"35", "ben"=>"45", "soham"=>"56");
echo $age['peter']."<br>";


$car1= array(
      array("volvo",23,18),
      array("BMW",24,19),
      array("Land rover",25,20),
      array("Land rover1",25,20)
);

echo $car1[2][0]."<br>" ,$car1[2][1]."<br>" ,$car1[2][2]."<br>";

print_r($car1);
echo count($car1)."<br>";


	$a = array("Sharvan","Anil","Bharati","Sharvan","Anil","Bharati","Sharvan","Anil","Bharati");

	$html = "";
	$html .= "<ul>";
	for ($i=0; $i < sizeof($car1); $i++) { 
		
		$html .= "<li>".$car1[$i]."</li>";
	}
	$html .= "</ul>";

	echo $html

?> 

