<?php 

if (isset($_POST['Calculate'])) {

if (isset($_POST['name'])) {
			$name = $_POST['name'];
		
    
}
					
if ($name=='') {
			$error1 = "*Please enter name of employee.";
	
		} else {
			$error1True = true;
		}
  

if (isset($_POST['DOB'])) {


			$DOB = $_POST['DOB'];
					} 
		else {
			$DOB= "";
			
		}

		if ($DOB=='') {
			$error2 = "*Please enter DOB of employee.";
		} else {
			$error2True = true;
		}

		if (isset($_POST['PFno'])) {
			$PFno= $_POST['PFno'];
			
		} else {
			$PFno= "";
			
		}
		
		if ($PFno=='') {
			$error3 = "*Please enter PFno of employee.";
		} else {
			$error3True = true;
		}

        if (isset($_POST['acdetails'])) {
			$acdetails = $_POST['acdetails'];
			
		} else {
			$acdetails = "";
			
		}

			if ($acdetails=='') {
			$error4 = "*Please enter acdetails of employee.";
		} else {
			$error4True = true;
		}

	if (isset($_POST['bdetails'])) {
			$bdetails = $_POST['bdetails'];
			
		} else {
			$bdetails = "";
			
		}

		if ($bdetails=='') {
		 $error5 = "*Please enter bankdetails of employee.";
		} else {
			$error5True = true;
		}
if (isset($_POST['Ldetails'])) {
			$Ldetails = $_POST['Ldetails'];
			
		} else {
			$Ldetails = "";
			
		}
		
if (isset($_POST['Dept'])) {
			$Dept= $_POST['Dept'];
			
		} else {
			$Dept = "";
			
		}

		if ($Dept=='') {
		 $error6 = "*Please enter bankdetails of employee.";
		} else {
			$error6True = true;
		}
		
if (isset($_POST['Wday'])) {
			$Wday = $_POST['Wday'];
			
		} else {
			$Wday = "";
			
		}
		
if (isset($_POST['LOP'])) {
			$LOP= $_POST['LOP'];
			
		} else {
			$LOP = "";
			
		}

		if (isset($_POST['basic'])) {
			$basic= $_POST['basic'];
			
		} 




    if (is_numeric($basic)){
	
	// Convert string to integer using number_format function

	   if (number_format($basic)<5000){    

		   $hra= ($basic*15)/100;
           $SA = ($basic*10)/100;
           $CN=($basic*7)/100;
           $SHA=($basic*11)/100;
           $CA=2500;
           $earning=$basic+$hra+$SA+$CN+$SHA+$CA;
		    $pf = ($basic*8)/100;
            $ESI=($basic*7)/100; 
            $IT=0;
            $PT=200;  
            $Deduct =$pf+$ESI+$IT+$PT;  
            $Net= $earning- $Deduct;         
	           
		}  


	     else if (number_format($basic)>=5000 && $basic<10000) {    
		      $hra= ($basic*15)/100;
	          $SA = ($basic*10)/100;
	         $CN=($basic*7)/100;
	         $SHA=($basic*11)/100;
	         $CA=2500;
	         $earning=$basic+$hra+$SA+$CN+$SHA+$CA;
	         $pf = ($basic*8)/100;
	         $ESI=($basic*7)/100;
	         $IT= ($basic*2)/100;
             $PT=200;  
             $Deduct =$pf+$ESI+$IT+$PT;    
               $Net= $earning- $Deduct;         
	           
		}    

		 else if (number_format($basic)>=10000 && $basic<20000) {   
		   $hra= ($basic*15)/100;
           $SA = ($basic*10)/100; 
           $CN=($basic*7)/100;
           $SHA=($basic*11)/100;
           $CA=2500; 
           $earning=$basic+$hra+$SA+$CN+$SHA+$CA;
	        $pf = ($basic*9)/100; 
	        $ESI=($basic*7)/100;
            $IT= ($basic*5)/100;
            $PT=200;  
            $Deduct =$pf+$ESI+$IT+$PT;                
               $Net= $earning- $Deduct;         
	           
	    }    
		else {

           $hra= ($basic*15)/100;
           $SA = ($basic*10)/100;
           $CN=($basic*7)/100;
           $SHA=($basic*11)/100;
           $CA=2500;
           $earning=$basic+$hra+$SA+$CN+$SHA+$CA;
		    $pf = ($basic*11)/100;
		    $ESI=($basic*7)/100;		              
		    $IT= ($basic*5)/100;
		    $PT=200;  
		    $Deduct =$pf+$ESI+$IT+$PT;          
		     $Net= $earning- $Deduct;         
	      

		 }

		 echo "Welcome: $name,<br>
		       your dob is: $DOB <br> 
                your PF is: $PFno <br>
                your account is: $acdetails <br>
                your Bank is: $bdetails <br>
                your dept is: $Dept <br>

      	       Your net salary is :$Net"; 

	}
    
	}
?>  
		 





<!DOCTYPE html>

<html>
<head>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
<style>
table{
	width: 80%;
	margin-left: 40px;
	margin-top: 50px;
	border-collapse:collapse;
	border: 1px solid black;
	}
	table td{padding-left:5px;
     
	}
	table th{background-color:#fbc403; color:#363636;}
</style>
</head>

<body style="background-color: #DBF9FC;">
   	<form method="POST" style="border: 0; padding-left:150px" >

	<table border="1">
		<tr height=80px; style=" background-color: #90EE90; text-align:center">
		<td colspan='4'> <h4>SALARY SLIP  OF EMPLOYEE</h4>
		</td>	
	</tr>
		<tr height="50px" >
	    <th> Personal </th>
	    <td> Full Name: <span style="color: red; ">* <input type="text" name="name" size="40" style="margin-top: 20px"> <br>
	    	<?php 

			if (isset($error1)) {
				?>
				<span style="color: red;"><?php echo $error1; ?></span><br>
				<?php
			}

	
			 if (isset($_POST['name'])) {
			$name = $_POST['name'];
			if(preg_match("/^([a-zA-Z' ]+)$/",$name)){
			  
			}else{
			    echo 'Enter Alphabets only!';
			}
		}
 		 ?> 
     </td>	
	    	
			
        
     </tr>
	<tr height="50px" >
	    <th> Bank Details </th>
	    <td> Bank Name : <span style="color: red;">* <input type="text" name="bdetails"  size="40"> <br>

	         <?php 

			if (isset($error5)) {
				?>
				<span style="color: red;"><?php echo $error5; ?></span><br>
				<?php
			}
            
		?> 	
		</td>	
         <td colspan="2"> A/c No.: <span style="color: red;">*   <input type="text" name="acdetails" size="43"> <br>

              <?php 

			if (isset($error4)) {
				?>
				<span style="color: red;"><?php echo $error4; ?></span><br>
				<?php
			}
     	 if (isset($_POST['acdetails'])) {
			$PFno = $_POST['acdetails'];
			if(preg_match("/^(['0-9' ]+)$/",$acdetails)) { 


			  
			}else{
			    echo 'Enter number only!';
			}
          }
		?>
		</td>	 
     </tr>
		<tr height="50px" >
	    <th> PF details: </th>
	    <td > PF No : <span style="color: red;">* <input type="text" name="PFno"  size="42"> <br>
	         <?php 

			if (isset($error3)) {
				?>
				<span style="color: red;"><?php echo $error3; ?></span><br>
				<?php
			}

			 if (isset($_POST['PFno'])) {
			$PFno = $_POST['PFno'];
			if(preg_match("/^([a-zA-Z0-9' ]+)$/",$PFno)) { 


			  
			}else{
			    echo 'Enter alphanumeric only!';
			}
          }
		?>
        </td>	

         <td colspan="2"> DOB : <span style="color: red;">*   <input type="date" name="DOB" size="40"> <br>
         <?php 

			if (isset($error2)) {
				?>
				<span style="color: red;"><?php echo $error2; ?></span><br>
				<?php
			}

		?> 
		</td>
     </tr>
		<tr height="50px" >
	    <th> Loca details: </th>
	    <td> Location :  <input type="text" name="Ldetails"  size="43"> </td>		
         <td colspan="2"> Department  : <span style="color: red;">* <input type="text"  size="40">



          </td>


     </tr>
	<tr height="50px" >
	    <th> Working days: </th>
	    <td> Working days :  <input type="text" name="Wday"  size="35"> </td>		
         <td colspan="2"> LOP:  <input type="text" name="LOP" size="40"> </td>	
     </tr>
	
		<tr height=20px width=40px; style=" background-color: #90EE90; text-align:center">
		<td colspan="4"> Salary details</td>	
		
		<!--
		<td> DEDUCTIONS</td>	
		<td> AMOUNT</td>	-->
	</tr>	

	<tr height="50px" >
	    <th> BASIC </th>
	   
         <td ><input type="text" name="basic" size="40"> </td>	
         <td ><input type="submit"  name=" Calculate"  style="width: 30%; height:30px ; background-color: #90EE90">
       
         
		      



       

          <input type="reset" value="Reset" style="width: 30%; height:30px ; background-color: #90EE90">	</td>
    	
   <!--  <tr height="50px" >
	    <th> HOUSE RENT AllOWANCE </th>
	   
         <td ><input type="text" name="hra" size="40"> </td>	
      

      <tr height="50px" >
	    <th> SPECIAL AllOWANCE </th>
	   
         <td ><input type="text" name="SA" size="40"> </td>	
   

     <tr height="50px" >
	    <th> CN ALLOWANCE</th>
	   
         <td ><input type="text" name="CN" size="40"> </td>	
     
	 <tr height="50px" >
	    <th> SHIFT ALLOWANCE </th>
	   
         <td ><input type="text" name="SHA" size="40"> </td>	
         
     </tr>	

      <tr height="50px" >
	    <th> COVID ALLOWANCE </th>
	   
         <td ><input type="text" name="CA" size="40"> </td>	

          </td>-->
         
     </tr>	
	<tr height="50px" >
	    <th> Take home </th>
	    <td> <input type="number" value="<?php echo $Net; ?>" readonly=""  /> 

        



	     </td>
	    <td><label> <span style="color: red;">Field marked with * are mandatory:</label></td>
     </tr>
	
	

	</form>

</table>

 

</body>




</html>