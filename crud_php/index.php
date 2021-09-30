<?php 
    
  include_once 'constant.php';
  include_once 'config.php';

  $query = "SELECT * FROM `employee`";
  $result = mysqli_query($conn, $query);

  $response = array();
  while ($response[] = mysqli_fetch_object($result )) {}

    $finalData  = array_filter($response);
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
  <a href="create.php" class="btn btn-primary mb-2">Add New Employee</a>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Sr.No</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        foreach ($finalData as $key => $value) {
        ?>
        <tr>
            <td><?php echo ++$key; ?></td>
            <td><?php echo $value->name; ?></td>
            <td><?php echo $value->email; ?></td>
        </tr>
        <?php
        }
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
