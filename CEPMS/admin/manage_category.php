<?php 
    
    session_start();

    include_once '../database/config.php';

    if (!isset($_SESSION['admin_id'])) {
           
        header("Location: index.php");
    }
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
                        	<a href="add_category.php" class="btn btn-primary">Add New Category</a>
                        	<br><br>
                         	<table class="table table-bordered"> 
                         		<tr>
                         			<th>Sr.No</th>
                         			<th>Category Name</th>
                         			<th>Created At</th>
                         			<th>Updated At</th>
                         			<th>Action</th>
                         		</tr>
                         		<?php
                         		$query = "SELECT * FROM `category`";

                         		$res = mysqli_query($conn, $query);
                         		$sr = 0;
                         		while ($response = mysqli_fetch_object($res)) {
                         			?>
                         				<tr>
                         					<td><?php echo ++$sr; ?></td>
                         					<td><?php echo $response->name; ?></td>
                         					<td><?php echo $response->created_at; ?></td>
                         					<td><?php echo $response->updated_at; ?></td>
                         					<td>
                         						<a href="" class="btn btn-warning">Edit</a>
                         						<a href="" class="btn btn-danger">Delete</a>
                         					</td>
                         				</tr>
                         			<?php
                         		}
                         		?>
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

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>