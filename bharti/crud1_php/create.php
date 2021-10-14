<?php

include_once 'constant.php';
 
 if(isset($_POST['submit']))
{
echo $name=$_POST['name'];
echo  $email=$_POST['Email'];
echo  $city=$_POST['city'];
  
 if(isset($_POST['gender'])){
   $gender=$_POST['gender'];

 } else {

     $gender="";
}

 if(isset($_POST['CB']))
{
    $CB=$_POST['CB'];

 } else {

     $CB=array();
   }

   echo "<pre>";
   print_r($CB);

   if(isset($_POST['DOB']))
{
    $DOB=$_POST['DOB'];

 } else {

     $DOB="";
   }

    if($name==''){
        $classname="is-invalid";

      }
    else{

       $classname="is-valid";}
       
     
  if($email==''){
        $classname1="is-invalid";}
          else{

       $classname1="is-valid";}
        
     
  }

?>




<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>

  
    
    <div class="container">
    <h1 class="text-center text-primary"> CRUD IN PHP</h1>
    <a href="index.php" class="btn btn-primary mb-2">Back to home</a>
  <form method="post">
    <div class="form-group">
      <label for="uname">Name:</label><br>
      <input type="text" class="form-control <?php echo(isset($classname)) ? $classname:''?>" id="name" placeholder="Enter Name" name="name" >
   
    </div>
    <div class="form-group" pt-10px>
      <label for="Email">Email:</label><br>
      <input type="text" class="form-control <?php echo(isset($classname1)) ? $classname1:''?>" id="Email" placeholder="Enter Email" name="Email">
    </div><br>
      <div class="form-group">
      <label for="gender">Gender: </label><br>
      
      <div class="form-check-inline" style="margin-right: 5px;">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="gender" value="Male" style="margin-right: 5px;"  >Male
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="gender" value="Female" style="margin-right: 5px;">Female
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="gender" value="Others" style="margin-right: 5px;">Others
          </label>
        </div>
    </div><br>

     <div class="form-group" pt-10px>
      <label for="hobby">Hobby: </label><br>
      <div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="CB[]" value="Football" style="margin-right: 5px;">Football
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" name="CB[]" value="Cricket" style="margin-right: 5px;">Cricket
  </label>
</div>
<div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox"  class="form-check-input"  name="CB[]" value="Hockey" style="margin-right: 5px;">Hockey
  </label>
</div>
</div><br>

<div class="form-group" pt-10px>
      <label for="city">City:</label><br>

<select name="city" class="form-control <?php echo(isset($classname2)) ? $classname2:''?>">

  <option value="Select">Select</option>
   <option value="Delhi">Delhi</option>
    <option value="Chandigarh">Chandigarh</option>
     <option value="Panchkula">Panchkula</option>

</select><br>


     <div class="form-group" pt-10px>
      <label for="DOB">DOB:</label><br>
      <input type="date" class="form-control" id="DOB" placeholder="Enter DOB" name="DOB" >
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    
   
    <button type="submit" name="submit" class="btn-lg btn-primary mt-3" >Submit</button>
  </form>
</div>
     



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </div>
    </body>
</html>
