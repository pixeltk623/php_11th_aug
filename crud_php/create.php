<?php 

    // $dataString = "Cricket,Football,Tenis";

    // echo "<pre>";
    // print_r(explode(",", $dataString));

    // die;

    // Array to string conversion

    // string to array 


  include_once 'constant.php';
  include_once 'config.php';

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



    $profilePic = $_FILES['profilePic'];
    $size_kb = round($profilePic['size']/1024);

    // echo "<pre>";

    // print_r($profilePic);

    // die;

    $ext = pathinfo($profilePic['name'], PATHINFO_EXTENSION);

    if($ext =='jpg' OR $ext == 'png' OR $ext == 'PNG' OR $ext == 'JPG') {
      $fileExt = true;
    } else {
      $fileExt = false;
    }

    // echo $fileExt;

    // die;

    if (file_exists("uploads/".$profilePic['name'])) {
      $errorFile = "<span style='color:red;'>File is already there</span>";
      $isStatusF = false;
    } elseif($fileExt==false) {
      $errorFile = "<span style='color:red;'>Invalid File Type</span>";
      $isStatusF = false;
    } elseif($size_kb<50 OR $size_kb >500) {
      if ($size_kb<50) {
        $errorFile = "<span style='color:red;'>File Size is too less</span>";
        $isStatusF = false;
      } else {
        $errorFile = "<span style='color:red;'>File Size is too large</span>";
        $isStatusF = false;
      }
      
    } else {
      
        move_uploaded_file($profilePic['tmp_name'], "uploads/".$profilePic['name']);
        $isStatusF = true;

    }

    // echo $errorFile;

    // echo $isStatus;




    //  if (!file_exists("uploads/".$profilePic['name'])) {
    //    echo "We can upload the file";
    //  } else {
    //   echo "File is already there";
    //  }

    

    // if ($size_kb>=50 && $size_kb <=500) {
    //   echo "Ok";
    // } else {
    //   echo "File Size is too large";
    // }

    // if ($ext=='jpg' OR $ext == 'png' OR $ext == 'PNG' OR $ext == 'JPG') {
    //   echo "Good to go";
    // } else {
    //   echo "Invalid file Type";
    // }

    // echo "<pre>";

    // print_r($profilePic);

    //die;


    $queryEmail = "SELECT * FROM employee WHERE email = '$email'";

    $resultE = mysqli_query($conn, $queryEmail);

    if ($resultE->num_rows>0) {
      
      $emailMessage = "<span style='color:red;'>Email is already exits</span>";
      $isStatusE = false;

    } else {

      $isStatusE = true;
    }
    // echo "<pre>";

    // print_r($resultE);

    // die;

    if ($isStatusF && $isStatusE) {
       $query = "INSERT INTO `employee`(`name`, `gender`, `hobby`, `email`, `city`, `dob`, `profilePic`) VALUES ('$name', '$gender', '$hobby', '$email', '$city', '$dob', '".$profilePic['name']."')";

    $result = mysqli_query($conn, $query);
   
    if ($result) {
       $message = array(
            "message"=>"New User Added",
            "class" => "alert-success"
        );
    } else {
        $message = array("message" => "Something Error", "class" => "alert-danger") ;
    }
    }

    //die;

   
  
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

  <form method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="email">Name:</label>  
      <input type="text" class="form-control form-control-sm <?php echo (isset($className)) ? $className : $className ?>"  placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Email:</label>
      <input type="email" class="form-control form-control-sm"  placeholder="Enter email" name="email">
      <?php 

        echo (isset($emailMessage)) ? $emailMessage : '';

      ?>
    </div>
    <div class="form-group">
        <label>City</label>
        <select name="city" class="form-control form-control-sm">
            <option value="">Select</option>
            <option value="Vadodara">Vadodara</option>
            <option value="Anand">Anand</option>
            <option value="Surat">Surat</option>
        </select>
    </div>
    <div class="form-group">
      <label for="pwd">Gender: </label>
      <br>
      <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="gender" value="Male">Male
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="gender" value="Female">Female
          </label>
        </div>
        <div class="form-check-inline disabled">
          <label class="form-check-label">
            <input type="radio" class="form-check-input" name="gender" value="Others">Others
          </label>
        </div>
    </div>
    <div class="form-group">
      <label for="pwd">Hobby: </label>
      <br>
      <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="hobby[]" value="Cricket">Cricket
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="hobby[]" value="Football">Football
          </label>
        </div>
        <div class="form-check-inline">
          <label class="form-check-label">
            <input type="checkbox" class="form-check-input" name="hobby[]" value="Tenis">Tenis
          </label>
        </div>
    </div>
    <div class="form-group">
      <label for="pwd">DOB:</label>
      <input type="date" class="form-control form-control-sm"  name="dob">
    </div>

    <div class="form-group">
      <label>Profile Pic</label>
      <input type="file" name="profilePic" class="form-control-file">

      <?php 
        echo (isset($errorFile)) ? $errorFile : '';
      ?>
    </div>
    
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
  
</div>

</body>
</html>
