<?php
include('header.php');
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('config.php');

$agent_email = $_SESSION['useremail'];

$fetch = "SELECT * FROM `add` WHERE email ='$agent_email'";
$query=mysqli_query($connection , $fetch);
if(mysqli_num_rows($query) > 0){
  while($row = mysqli_fetch_assoc($query)){
   $agent_company= $row['company'];
   $agent_name= $row['name'];
   $agent_email= $row['email'];
   $agent_phone= $row['phone'];
?>
 
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      
                      <?php
                      echo $agent_name;
                      ?>

                      <p class="text-secondary mb-1">Agent</p>
                      <button class="btn btn-primary">Follow</button>
                      <button class="btn btn-outline-primary">Message</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Company</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $agent_company;?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php
                      echo $agent_name;
                      ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php
                      echo $agent_email;
                      ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                   <?php echo $agent_phone; ?>
                    </div>
                  </div>
                  <hr>
              <?php 
            }
          }
             ?>



            </div>
          </div>

        </div>
    </div>
    <?php
    include('admin/includes/footer.php');
    ?>