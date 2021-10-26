<?php 


    session_start();

    include_once '../database/config.php';
    include_once 'comman_function.php';

    if (!isset($_SESSION['admin_id'])) {
           
        header("Location: index.php");
    }

    if (isset($_POST['submit'])) {
        $passNumber = "COVID19".time();
        $full_name = $_POST['full_name'];
        $contact_number = $_POST['contact_number'];
        $email = $_POST['email'];
        $identity_type = $_POST['identity_type'];
        $Identity_cardNo = $_POST['Identity_cardNo'];
        $Category = $_POST['Category'];
        $from_date = $_POST['from_date'];
        $to_date = $_POST['to_date'];

        $query = "INSERT INTO `passes`(`pass_number`, `full_name`, `contact_number`, `email`, `identity_type`, `Identity_no`, `category_id`, `from_date`, `to_date`) VALUES ('$passNumber','$full_name','$contact_number','$email','$identity_type','$Identity_cardNo','$Category','$from_date','$to_date')";

        $result = mysqli_query($conn, $query);

        if($result) {
            $message = '<div class="alert alert-success" role="alert">
              Pass Created
            </div>';
        } else {
            $message = '<div class="alert alert-danger" role="alert">
 Error!
</div>';
        }
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
                            <?php echo (isset($message) ? $message : ''); ?>
                      <form method="post">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Full Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="full_name" placeholder="Full Name">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Contact Number</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="contact_number"  placeholder="Contact Number">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Identity Type</label>
                            <select class="form-control" name="identity_type">
                                <?php 
                                    foreach (getAllIdentityList() as $key => $value) {
                                            
                                        echo "<option value='".$value->id."'>".$value->Identity_name."</option>";
                                    }
                                ?>
                            </select>
                          </div>
                           <div class="form-group">
                            <label for="exampleInputEmail1">Identity CardNo</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="Identity_cardNo" placeholder="Identity CardNo">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">Category</label>

                            <select class="form-control" name="Category">
                                <?php 
                                    foreach (getAllCategory() as $key => $value) {
                                            
                                        echo "<option value='".$value->id."'>".$value->name."</option>";
                                    }
                                ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">From Date</label>
                            <input type="date" name="from_date" class="form-control">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">To Date</label>
                           <input type="date" name="to_date" class="form-control">
                          </div>

                          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
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