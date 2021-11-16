<?php 
    
    session_start();

    include_once '../database/config.php';

    if (!isset($_SESSION['admin_id'])) {
           
        header("Location: index.php");
    }

    if (isset($_GET['passId'])) {
        
        $passId = $_GET['passId'];

        $query = "SELECT
                p.`pass_id`,
                p.`pass_number`,
                p.`full_name`,
                p.`contact_number`,
                p.`email`,
                it.Identity_name,
                p.`Identity_no`,
                c.name,
                p.`from_date`,
                p.`to_date`,
                p.`created_at`
            FROM
                `passes` AS p
            LEFT JOIN category AS c
            ON
                c.id = p.category_id
            LEFT JOIN identity_type AS it
            ON
                it.id = p.identity_type WHERE p.`pass_number` = '$passId'";

        $resP = mysqli_query($conn, $query);

        $objectRes = mysqli_fetch_object($resP);

        // echo "<pre>";

        // print_r($objectRes);

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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard - Pass Detail</h1>
                       
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-4">
                        	<a href="manage_passes.php" class="btn btn-primary">Back To Passes</a>
                        	<br><br>
                            <div id="myTable">
                            <table class="table table-bordered">
                                <tr>
                                    <th class="text-primary text-center" colspan="4"><?php echo  $objectRes->pass_number; ?></th>
                                </tr>
                                <tr>
                                    <th>Category</th>
                                    <td colspan="3"><?php echo  $objectRes->name; ?></td>
                                </tr>
                                <tr>
                                    <th>Full Name</th>
                                    <td colspan="3"><?php echo  $objectRes->full_name; ?></td>
                                </tr>
                                <tr>
                                    <th>Mobile No</th>
                                    <td><?php echo  $objectRes->contact_number; ?></td>
                                    <th>Email</th>
                                    <td><?php echo  $objectRes->email; ?></td>
                                </tr>
                                <tr>
                                    <th>Identity Type</th>
                                    <td><?php echo  $objectRes->Identity_name; ?></td>
                                    <th>Identity Card No</th>
                                    <td><?php echo  $objectRes->Identity_no; ?></td>
                                </tr>
                                <tr>
                                    <th>From Date</th>
                                    <td><?php echo  $objectRes->from_date; ?></td>
                                    <th>To Date</th>
                                    <td><?php echo  $objectRes->to_date; ?></td>
                                </tr>
                                <tr>
                                    <th>Pass Creation Date</th>
                                    <td colspan="3"><?php echo  $objectRes->created_at; ?></td>
                                </tr>
                            </table>
                            </div>
                            <button class="btn btn-warning" onclick="printPasses()">Print</button>
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

    <script type="text/javascript">
        function printPasses() {
            var divContents = document.getElementById("myTable").innerHTML;

            //console.log(divContents);
            var a = window.open('', '', 'height=1500, width=1500');
            // a.document.write('<html>');
            // a.document.write('<body > <h1>Div contents are <br>');
            a.document.write('<style> table,tr,th,td {  border: 1px solid black; padding : 10px; border-collapse: collapse; width: 100%;  } </style>');
            a.document.write(divContents);
            a.document.close();
            a.print();
        }
    </script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>


</body>

</html>