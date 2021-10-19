<?php 
    
    session_start();

    include_once '../database/config.php';
    include_once 'comman_function.php';

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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                       
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                      <form>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Contact Number</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact Number">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Identity Type</label>
                            <select class="form-control">
                                <?php 
                                    foreach (getAllIdentityList() as $key => $value) {
                                            
                                        echo "<option value='".$value['id_no']."'>".$value['id_name']."</option>";
                                    }
                                ?>
                            </select>
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Identity CardNo</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Identity CardNo">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Category</label>

                            <select class="form-control">
                                <?php 
                                    foreach (getAllCategory() as $key => $value) {
                                            
                                        echo "<option value='".$value->id."'>".$value->name."</option>";
                                    }
                                ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">From Date</label>
                            <input type="date" name="" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">To Date</label>
                           <input type="date" name="" class="form-control">
                          </div>

                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
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