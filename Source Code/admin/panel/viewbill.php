<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('config.php');

$fetch = "SELECT * from `bill` as b INNER JOIN `form` as f on b.fid = f.fid INNER JOIN `add`as a on a.aid = b.aid order by `id` desc ";

$query = mysqli_query($connection, $fetch);
   
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
  <div class="table-responsive">
<div class="col-xl-10 col-lg-12 col-md-9">
                <h2 class="text-dark display-nowrap">Bill Reports</h2>
                <hr>
            <table class="table table-warning" id="example">
                <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 85%;">

          <tr>
           
            <th>Code</th>
            <th>Sender Detail</th>
            <th>Receiver Detail </th>
            <th>Payment </th>
            <th>Delivery Date</th>
            <th>Order Number</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($pro_data = mysqli_fetch_assoc($query)) {
            ?>
            <tr>
              <td>
                <?php echo $pro_data['id'] ?>
              </td>
              <td>
              <b>Sender Company</b> (
                <?php echo $pro_data['scompany'] ?>)
                 <br> <b>Sender Name</b>(
                <?php echo $pro_data['fname'] ?>)
                 <br> <b>Sender Email</b>(
                <?php echo $pro_data['femail'] ?>)
                <br> <b>Sender Residential Address</b>(
                <?php echo $pro_data['raddress'] ?>)
                <br> <b>Sender Shipment Address</b>(
                <?php echo $pro_data['saddress'] ?>)
                <br> <b>Sender Phone</b>(
                <?php echo $pro_data['phone'] ?>)
                <br> <b>Sender city</b>(
                <?php echo $pro_data['city'] ?>)
                 <br> <b>Sender Courier Type</b>(
                <?php echo $pro_data['ctype'] ?>)
                <br> <b>Sender Courier Weight</b>(
                <?php echo $pro_data['weight'] ?>)
                <br> <b>Sender Gender</b>(
                <?php echo $pro_data['gender'] ?>)
              </td>
              <td>
              <b>Agent Company</b> (
                <?php echo $pro_data['company'] ?>)
                <br><b>Agent Name</b> (
                <?php echo $pro_data['name'] ?>)

              <br> <b>Agent Email</b>(
              <?php echo $pro_data['email'] ?>)

                <br> <b>Agent City</b>(
                <?php echo $pro_data['city'] ?>)
               
                <br> <b>Agent Phone</b>(
                <?php echo $pro_data['phone'] ?>)
                
              </td>
              <td>
                <?php echo $pro_data['price'] ?>
              </td>

              <td>
                <?php echo $pro_data['bdate'] ?>
              </td>
              <td>
                <?php echo $pro_data['orderNum'] ?>
              </td>
              <td ><a href="bupdatedata.php?id=<?php echo $pro_data ['id'] ?>" class="btn btn-success">Update</a></td>
              <td ><a href="bdelete.php?id=<?php echo $pro_data ['id']?>" class="btn btn-danger">Delete</a></td>
                    
            </tr>
            <?php
          
        }
          ?>
        </tbody>
      </table>
    
    </div>
  </div>
</div>
</div>
</div>

</body>

</html>

<?php
include('admin/includes/footer.php');
?>
