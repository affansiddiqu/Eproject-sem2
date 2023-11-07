<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('config.php');
?>

<!--  --> <!-- animate css -->
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
    
<h1 class= "text-center text-dark">New Courier Detail</h1>
<hr style="width:800px; height: 9px; border: none; border-top: 0.5px solid black;">

<div class="container-xxl">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/tcs.png" alt="">
                        </div>
                        <h4 class="text-dark mb-0">Tranzum Courier Service</h4>
                        <p>TCS is a Pakistani courier and logistics company which is based in Karachi, Pakistan. It was founded by a former Pakistan International Airlines (PIA) flight engineer, Khalid Nawaz Awan, in 1983.</p>
                        <a href="tcs.php" class="btn btn-danger">Courier Deatils</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/lepo.png" alt="">
                        </div>
                        <h4 class="text-dark mb-0">Leopard Courier Service</h4>
                        <p>The leopard is one of the five extant species in the genus Panthera. It has a pale yellowish to dark golden fur with dark spots grouped in rosettes. Its body is slender and muscular reaching a length of 92–183 cm with a 66–102 cm long tail.</p>
                        <a href="leopard.php" class="btn btn-warning">Courier Deatils</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item p-4">
                        <div class="overflow-hidden mb-4">
                            <img class="img-fluid" src="img/trax.png" alt="">
                        </div>
                        <h4 class="text-dark mb-0">Trax Courier Service</h4>
                        <p>TRAX offers the most agile last-mile delivery services along with reliable inventory management solutions across a wide network of over 450+ destinations in Pakistan,and promise of the fastest transfer of funds along with safe and secure delivery across Pakistan </p>
                       
                        <a href="trax.php" class="btn btn-success">Courier Deatils</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--  -->

</body>

</html>

<?php
include('admin/includes/footer.php');


?>