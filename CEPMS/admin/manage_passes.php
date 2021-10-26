<?php 
    
    session_start();

    include_once '../database/config.php';

    if (!isset($_SESSION['admin_id'])) {
           
        header("Location: index.php");
    }

    $query = "SELECT * FROM `passes`";

	$res = mysqli_query($conn, $query);
	while ($response[] = mysqli_fetch_object($res)) {}

	$finalData = array_filter($response);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CEPMS</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
   <!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
  
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script> -->

		  <!--   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
  
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>

</head>

<body id="page-top">

    <div id="wrapper">

       <?php 

            include_once 'includes/sidebar.php';

       ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php
                    include_once 'includes/header.php';
                ?>
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard - Category</h1>
                       
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-4">
                        	<a href="add_pass.php" class="btn btn-primary">Add New Pass</a>
                        	<br><br>
                         	<table id="myTable" class="display">
                         		<thead>
	                         		<tr>
	                         			<th>Sr.No</th>
	                         			<th>Pass Number</th>
	                         			<th>Name</th>
	                         			<th>From Date</th>
	                         			<th>To Date</th>
	                         			<th>Action</th>
	                         		</tr>
                         		</thead>
                         		<tbody>
                         		<?php
                         		 foreach ($finalData as $key => $value) {
                         			?>

                         				<tr>
                         					<td><?php echo ++$key; ?></td>
                         					<td><?php echo $value->pass_number; ?></td>
                         					<td><?php echo $value->full_name; ?></td>
                         					<td><?php echo $value->from_date; ?></td>
                         					<td><?php echo $value->to_date; ?></td>
                         					<td>
                         						<a href="show_pass.php?passId=<?php echo $value->pass_number; ?>" class="btn btn-primary">Show</a>
                         						<a href="" class="btn btn-warning">Edit</a>
                         						<a href="" class="btn btn-danger">Delete</a>
                         					</td>
                         				</tr>
                         			<?php
                         		}
                         		?>
                         		</tbody>

                         	</table>
                        </div>
                      
                    </div>
                </div>
            </div>
            <?php 
                include_once 'includes/footer.php';
                include_once 'includes/LogoutModal.php';
            ?>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

  

    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/sb-admin-2.min.js"></script>



    <script type="text/javascript">
$(document).ready(function() {
	$('#myTable').DataTable();

});
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>

</html>