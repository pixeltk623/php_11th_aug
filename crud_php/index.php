<?php 
    
  include_once 'constant.php';
  include_once 'config.php';

   if (isset($_POST['submit'])) {
      
      $did = $_POST['did'];

      $queryD = "DELETE FROM `employee` WHERE eid = ".$did;
      $resultD = mysqli_query($conn, $queryD);

      if ($resultD) {
         $message = array(
            "message"=>"Deleted",
            "class" => "alert-success"
        );
      } else {
         $message = array(
            "message"=>"Error",
            "class" => "alert-danger"
        );
      }
   }


  $query = "SELECT * FROM `employee`";
  $result = mysqli_query($conn, $query);

  $response = array();
  while ($response[] = mysqli_fetch_object($result )) {}

    $finalData  = array_filter($response);
    // echo "<pre>";

    // print_r( sizeof($finalData) );

    // print_r($result->num_rows);




 
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
  <a href="create.php" class="btn btn-primary mb-2">Add New Employee</a>
  <?php 
    if(isset($message)) {
        ?>
            <div class="alert <?php echo $message['class']; ?>">
                <?php echo $message['message']; ?>
            </div>
        <?php 
    }
  ?>


  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Profile Pic</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     
      <?php

         if (sizeof($finalData)==0) {
           ?>
            <tr>
               <td colspan="4" class="text-center text-danger">No Record Found</td>
            </tr>
           <?php
         } else {
        foreach ($finalData as $key => $value) {
        ?>
        <tr>
            <td><?php echo ++$key; ?></td>
            <td><?php echo $value->name; ?></td>
            <td><?php echo $value->email; ?></td>
            <td>
              <img src="uploads/<?php echo $value->profilePic; ?>" width="100">
            </td>
            <td>
               <a href="show.php?eid=<?php echo $value->eid; ?>" class="btn btn-secondary">Show</a>
               <a href="edit.php?eid=<?php echo $value->eid; ?>" class="btn btn-success">Edit</a>
              <!--  <a href="delete.php?eid=<?php echo $value->eid; ?>" class="btn btn-danger">Delete</a>  -->
               <form method="post" class="d-inline">
                  <input type="hidden" name="did" value="<?php echo $value->eid; ?>">
                  <input type="submit" name="submit" value="Delete" class="btn btn-danger">
               </form> 
            </td>
        </tr>
        <?php
        }  }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
