<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('config.php');


$fetch = "SELECT * FROM `form` order by fid desc";

$data = mysqli_query($connection, $fetch);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/customstyle.css">

</head> 
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
</body>
 <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-left">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>All Courier Detail</h2>
                <hr>
            <table class="table table-warning display-nowrap" id="example">
                <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Residential Address</th>
                    <th scope="col">Shipment Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Courier Type / Weight</th>
                    <th scope="col">Date</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($data)) {
                     ?>
                    <tr>
                    <td><?php echo $row ['fid']?></td>
                    <td><?php echo $row ['scompany']?></td>
                    <td><?php echo $row ['fname']?>
                    <?php echo $row ['lname']?></td>
                    <td><?php echo $row ['femail']?></td>
                    <td><?php echo $row ['raddress']?></td>
                    <td><?php echo $row ['city']?></td>
                    <td><?php echo $row ['phone']?></td>
                    <td><?php echo $row ['ctype']?>
                       weight( <?php echo $row ['weight']?>)</td>
                    <td><?php echo $row ['date']?></td>
                    <td><?php echo $row ['gender']?></td>
                    <td><?php echo $row ['status']?></td>
                </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
            </div>

        </div>

    </div>


</body>

</html>

<?php
include('admin/includes/footer.php');


?>