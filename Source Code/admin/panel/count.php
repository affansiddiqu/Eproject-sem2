<?php
include('admin/includes/header1.php');
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('config.php');


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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head> 
<link
rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
/>
</body>

<!-- <section class="content"> -->
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row text-center  p-2 text-dark bg-opacity-10 " style="opacity: 85%;">
            <div class="col-lg-3 col-6 bg-#f0353b">
                <!-- small box -->
                <div class="small-box p-4" style="background-color: #f76f74; border-radius: 8px;">
                    <div class="inner"> 
              <h1><?php 
              $fetchpage = "SELECT * from `add` where astatus = '1'";
              $query = mysqli_query($connection, $fetchpage);
              if(mysqli_num_rows($query) > 0){
                  $totalRecords = mysqli_num_rows($query);
              }
               print_r("$totalRecords"); ?></h1>
              <p>Agent Count</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="viewagent.php" class="small-box-footer text-dark" style="text-decoration:none">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box p-4" style="background-color: #f76f74; border-radius: 8px;">
            <div class="inner">
            <h1><?php 
              $fetchpage = "SELECT * from `form` where status = 'In progress'";
              $query = mysqli_query($connection, $fetchpage);
              if(mysqli_num_rows($query) > 0){
                  $totalRecords = mysqli_num_rows($query);
              }
               print_r("$totalRecords"); ?></h1>
              <p>In Progress Courier Count</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="progress.php" class="text-dark small-box-footer" style="text-decoration:none">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box p-4" style="background-color: #f76f74; border-radius: 8px;">
            <div class="inner">
            <h1><?php 
              $fetchpage = "SELECT * from `form` where status = 'deliver'";
              $query = mysqli_query($connection, $fetchpage);
              if(mysqli_num_rows($query) > 0){
                  $totalRecords = mysqli_num_rows($query);
              }
               print_r("$totalRecords"); ?></h1>
               <p>Delivered Courier</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="deliver.php" class="small-box-foote text-dark" style="text-decoration:none">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box p-4" style="background-color: #f76f74; border-radius: 8px;">
            <div class="inner">
            <h1><?php 
              $fetchpage = "SELECT * from `user` where status = '1'";
              $query = mysqli_query($connection, $fetchpage);
              if(mysqli_num_rows($query) > 0){
                  $totalRecords = mysqli_num_rows($query);
              }
               print_r("$totalRecords"); ?></h1>


              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="viewcoustomer.php" class="small-box-footer text-dark" style="text-decoration:none">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      </div>
     
               

</body>

</html>

<?php
include('admin/includes/footer.php');


?>