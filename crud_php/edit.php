<?php 
  
    include_once 'constant.php';
    include_once 'config.php';

    date_default_timezone_set("Asia/Kolkata");

    




  if (isset($_POST['submit'])) {
     
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];

    if (isset($_POST['gender'])) {
       $gender = $_POST['gender'];
    } else {
       $gender = "";
    }

    if (isset($_POST['hobby'])) {
       $hobby = $_POST['hobby'];
    } else {
       $hobby = array();
    }

    $hobby = implode(",", $hobby);

    $dob = $_POST['dob'];

    if ($name=='') {
        $className = "is-invalid";
    } else {
        $className = "is-valid";
    }

    $queryU = "INSERT INTO `employee`(`name`, `gender`, `hobby`, `email`, `city`, `dob`) VALUES ('$name', '$gender', '$hobby', '$email', '$city', '$dob')";


    $queryU = "UPDATE `employee` SET `name`='$name',`gender`='$gender',`hobby`='$hobby',`email`='$email',`city`='$city',`dob`='$dob',`updated_at`='".date("Y-m-d H:i:s")."' WHERE eid = '".$_GET['eid']."'";

    $resultU = mysqli_query($conn, $queryU);
   
    if ($resultU) {
       $message = array(
            "message"=>"Updated",
            "class" => "alert-success"
        );
    } else {
        $message = array("message" => "Something Error", "class" => "alert-danger") ;
    }
  }

  if (isset($_GET['eid'])) {
        $eid = $_GET['eid'];

        $queryE = "SELECT * FROM employee WHERE eid = ".$eid;
        $resultE = mysqli_query($conn, $queryE);

        $finalData = mysqli_fetch_object($resultE);

        $newHobby = explode(",", $finalData->hobby);
        
      } else {

        header("Location: 404.php");
      }

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
  <a href="index.php" class="btn btn-warning mb-2">Back To Home</a>

  <?php 
    if(isset($message)) {
        ?>
            <div class="alert <?php echo $message['class']; ?>">
                <?php echo $message['message']; ?>
            </div>
        <?php 
    }
  ?>

  <form method="post">
    <div class="form-group">
      <label for="email">Name:</label>  
      <input type="text" value="<?php echo $finalData->name; ?>" class="form-control form-control-sm <?php echo (isset($className)) ? $className : $className ?>"  placeholder="Enter name" name="name" >
    </div>
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="email" value="<?php echo $finalData->email; ?>" class="form-control form-control-sm"  placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
        <label>City</label>
        <select name="city" class="form-control form-control-sm">
            <option value="" <?php echo ($finalData->city=='') ? 'selected': ''; ?>>Select</option>
            <option value="Vadodara" <?php echo ($finalData->city=='Vadodara') ? 'selected': ''; ?>>Vadodara</option>
            <option value="Anand" <?php echo ($finalData->city=='Anand') ? 'selected': ''; ?>>Anand</option>
            <option value="Surat" <?php echo ($finalData->city=='Surat') ? 'selected': ''; ?>>Surat</option>
        </select>
    </div>
    <div class="form-group">
      <label for="pwd">Gender: </label>
      <br>
      <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="gender" value="Male" <?php echo ($finalData->gender=='Male' ? 'checked' : '') ?>>Male
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="gender" value="Female" <?php echo ($finalData->gender=='Female' ? 'checked' : '') ?>>Female
          </label>
        </div>
        <div class="form-check-inline disabled">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="gender" value="Others" <?php echo ($finalData->gender=='Others' ? 'checked' : '') ?>>Others
          </label>
        </div>
    </div>
    <div class="form-group">
      <label for="pwd">Hobby: </label>
      <br>
      <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="hobby[]" value="Cricket" <?php echo (in_array("Cricket", $newHobby)) ? 'checked' : '' ?>>Cricket
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="hobby[]" value="Football" <?php echo (in_array("Football", $newHobby)) ? 'checked' : '' ?>>Football
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="hobby[]" value="Tenis" <?php echo (in_array("Tenis", $newHobby)) ? 'checked' : '' ?>>Tenis
          </label>
        </div>
    </div>
    <div class="form-group">
      <label for="pwd">DOB:</label>
      <input type="date" class="form-control form-control-sm" value="<?php echo $finalData->dob; ?>"  name="dob">
    </div>
    
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
  
</div>

</body>
</html>
