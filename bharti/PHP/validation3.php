<!--

The email address must start with a letter (no numbers or symbols). -Done
There must be an @ somewhere in the string that is located before the dot.-done
There must be text after the @ symbol but before the dot.
There must be a dot and text after the dot.

-->


<?php

	if (isset($_POST['submit'])) {
		
		$str = $_POST['str'];


//echo strlen($str);
$str1=str_split($str,1);
  if (is_numeric($str1[0])== false) {
          $message = "ok";
    }

    else {
        	 $message= "Invalid email. Please try again.";
        }    
        
     // $at=-1; $dot=-1;

    for($i=0; $i<strlen($str); $i++)

    {
     
     if($str[$i]=='@') {
 
      $at=$i;
     // echo $at;

    }

   else if ($str[$i]=='.'){


      $dot=$i;
      //echo $dot;
   }

}
  
  if($at>$dot){

  echo"please check email format";

}

  else{
  echo "format of email is ok";
//print_r($str1[0]);
}

}




?>


<!DOCTYPE html>
<html>
<head>

</head>	
</body>
<form  method="post" >
E-mail: 	<input type="text" name="str">

		<?php

		   if (isset($message)){
		   	?>
		   	<span style="color: red; text-align: center;"><?php echo $message; ?>
		   		</span>
                

		   		<?php


		   }
		   ?>

		   

		 
<input type="submit" name="submit">
</form>	


</body>
</html>