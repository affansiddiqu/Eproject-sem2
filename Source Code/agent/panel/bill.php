<?php
include('header.php');
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

    $agent_email = $_SESSION['useremail'];
    $fetch = "SELECT * FROM `add` WHERE email ='$agent_email'";
    $query=mysqli_query($connection , $fetch);
    if(mysqli_num_rows($query) > 0){
        while($row = mysqli_fetch_assoc($query)){
            $city = $row['city'];
            $company = $row['company'];
        }
    }

    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="css/reg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>

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
        $product = "SELECT * from `form` where (`scompany`='$company' AND `city` ='$city') AND `status` ='deliver'";
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
            $agent_email = $_SESSION['useremail'];
            $fetch = "SELECT * FROM `add` WHERE email ='$agent_email'";
            $query=mysqli_query($connection , $fetch);
            if(mysqli_num_rows($query) > 0){
            
                ?>
                <select class="form-select  border-dark" style="border-width: 2px;" name="rname" aria-label="Default select example">
                    <option selected>Select Agent Name or Company or City </option>
                    <?php
                    while($row = mysqli_fetch_assoc($query)){
                    ?>
                    <option value="<?php echo $row['aid']?>"><?php echo  $row['company']?> <?php echo  $row['name']?> <?php echo  $row['city']?></option>
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
    <input type="date" class="form-control form-control-user" placeholder="date" name="date" required>
</div>
<div class="col-sm-6 mb-3 mb-sm-0 mt-4">
<input type="submit" class="btn btn-primary" name="bill">
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