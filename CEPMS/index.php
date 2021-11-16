<?php 
    include_once 'database/config.php';
    if (isset($_POST['submit'])) {
        
        $passId = $_POST['passId'];

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

        // print_r(count((array)$objectRes));

        // die;

    }

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        table tr th,td {
            padding: 10px;
        }

        table {
            margin: auto;
        }
    </style>
</head>
<body>

    <form method="post">
        <table border="1" style="border-collapse: collapse;" width="500px;">
            <tr>
                <th>Search</th>
                <td>
                    <input type="text" name="passId" placeholder="Pass Id">
                </td>
            </tr>
            <tr>
                <th colspan="2">
                    <input type="submit" name="submit">
                </th>
            </tr>
        </table>
    </form>

    <br><br>

    <?php 

        if (isset($objectRes)) {

           

    ?>

    <table border="1" style="border-collapse: collapse;" width="800px;">
        <tr>
            <th class="text-primary text-center" colspan="4"><?php echo  $objectRes->pass_number; ?></th>
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
    <?php
        } else {
            echo "<h3 style='text-align: center; color:red;'>Not Found</h3>";
        }
        

    ?>
</body>
</html>