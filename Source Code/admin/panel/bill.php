<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('config.php');

if(isset($_POST['bill'])){
    $sname = $_POST['sname'];
    $rname = $_POST['rname'];
    $price = $_POST['price'];
    $date = $_POST['date'];

        $insert = "INSERT INTO `bill` (`fid`,`aid`,`price`,`bdate`) VALUES ('$sname', '$rname', '$price' ,'$date')";
        $connect_insert = mysqli_query($connection, $insert);
        if($connect_insert){
            echo "<script> alert('Bill Created'); </script>";
        }else{
            echo "bill not create";
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


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Create Bill</h2>
                <hr>
        <form class="user" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div class="form-group row">
        <div class="col-sm-12 mb-3 mb-sm-0 mt-4 ml-2">
        <?php
        $product = "SELECT * from `form`  where`status` ='deliver'";
        $result1 = mysqli_query($connection, $product);
        if(mysqli_num_rows($result1) > 0) {
        ?>
        <select class="form-select border-dark" style="border-width: 2px;" name="sname" aria-label="Default select example" id="sname">
            <option selected>Select Company or Sender Name or city or Courier weight</option>
            <?php
            while($row = mysqli_fetch_assoc($result1)){
            ?>
            <option value="<?php echo $row['fid']?>" data-weight="<?php echo $row['weight']?>"><?php echo  $row['scompany']?> <?php echo  $row['fname']?> <?php echo  $row['city']?>  <?php echo $row['weight']?>kg</option>
            <?php
            }
            }
            ?>
        </select>
    </div>
    </div>
        <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0 mt-4 ml-2">
                <?php
                $product = "SELECT * from `add`";
                $result1 = mysqli_query($connection, $product);
                if(mysqli_num_rows($result1) > 0) {
                ?>
                <select class="form-select  border-dark" style="border-width: 2px;"" name="rname" aria-label="Default select example">
                    <option selected>Select Agent Name Or Company or City</option>
                    <?php
                    while($row = mysqli_fetch_assoc($result1)){
                    ?>
                    <option value="<?php echo $row['aid']?>"><?php echo  $row['name']?> <?php echo  $row['company']?> <?php echo  $row['city']?></option>
                    <?php
                    }  
                    }                
                    ?>
                </select>
                </div>
                </div>

        <div class="form-group row">
            <div class="col-sm-12 mb-3 mb-sm-0 mt-4 ml-2">
                <input type="text" class="form-control border-dark" style="border-width: 2px;" id="totalPrice" placeholder="Total Price"  name="price">
            </div>
        </div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const selectElement = document.getElementById("sname");
    const totalPriceInput = document.getElementById("totalPrice");

    selectElement.addEventListener("change", function () {
        const selectedOption = selectElement.options[selectElement.selectedIndex];
        const weight = selectedOption.getAttribute("data-weight");

        // Apply multiplication factor based on company name
        let multiplicationFactor;
        const companyName = selectedOption.innerText.split(' ')[0]; // Extract the company name
        if (companyName === 'Trax') {
            multiplicationFactor = 700;
        } else if (companyName === 'Leopards') {
            multiplicationFactor = 900;
        } else if (companyName === 'Tcs') {
            multiplicationFactor = 1200;
        } else {
            multiplicationFactor = 1; // Default to 1 if company not recognized
        }

        const total = weight * multiplicationFactor;
        totalPriceInput.value = "Total Price: " + total;
    });
});
</script>
                
                <div class="col-sm-6 mb-3 mb-sm-0 mt-4">
                    <input type="date" class="form-control form-control-user"
                       placeholder="date" name="date" required>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0 mt-4">
                    <input type="submit" class="btn btn-primary"
                    name="bill">
                </div>
                                
        </form>

            </div>

            </div>
        </div>

    

</body>

</html>
<?php
include('admin/includes/footer.php');


?>