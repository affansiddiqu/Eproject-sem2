<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('config.php');

$limit = 3;
if(isset($_GET['page'])){
  
  $getpgno = $_GET['page'];
}else{
  $getpgno = 1;
}
$offset = ($getpgno - 1) * $limit;

$fetch = "SELECT * FROM `form` where scompany = 'tcs' order by fid desc limit {$offset}, {$limit}";

$data = mysqli_query($connection, $fetch);
?>

 <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-left">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>New Courier For Tcs</h2>
                <hr>
            <table class="table table-warning">
                <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Residential Address</th>
                    <th scope="col">Shipment Address</th>
                    <th scope="col">City</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Courier Type</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Date</th>
                    <th scope="col">Gender</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($data)) {
                     ?>
                    <tr>
                    <td><?php echo $row ['fid']?></td>
                    <td><?php echo $row ['fname']?></td>
                    <td><?php echo $row ['lname']?></td>
                    <td><?php echo $row ['femail']?></td>
                    <td><?php echo $row ['raddress']?></td>
                    <td><?php echo $row ['saddress']?></td>
                    <td><?php echo $row ['city']?></td>
                    <td><?php echo $row ['phone']?></td>
                    <td><?php echo $row ['ctype']?></td>
                    <td><?php echo $row ['weight']?></td>
                    <td><?php echo $row ['date']?></td>
                    <td><?php echo $row ['gender']?></td>
                </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>

<?php
$fetchpage = "SELECT * from form";
$query = mysqli_query($connection, $fetchpage);

  if(mysqli_num_rows($query) > 0){
    $totalRecords = mysqli_num_rows($query);
    $totalpages = ceil($totalRecords / $limit);
    echo '<ul class="pagination">';
    if($getpgno > 1){
      echo '<li class="page-item"><a class="page-link" href="tcs.php?page='.($getpgno - 1).'">prev</a></li>';

    }
    for($i = 1; $i <= $totalpages; $i++){
      $active = $i == $getpgno? "active" : "";
      echo '<li class="'.$active.' page-item"><a class="page-link" href="tcs.php?page='.$i.'">'.$i.'</a></li>';
    }
    if($getpgno < $totalpages){
      echo '<li class="page-item"><a class="page-link" href="tcs.php?page='.($getpgno + 1).'">next</a></li>';
    }

  }
  ?>
            </div>

        </div>

    </div>


</body>

</html>

<?php
include('admin/includes/footer.php');


?>