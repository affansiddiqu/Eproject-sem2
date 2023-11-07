<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
include('config.php');

if(isset($_POST['register'])){
    $company = $_POST['company'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $Password = $_POST['password'];
    $rpass = $_POST['rpassword'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];

    if($Password == $rpass){
    $hashpass = password_hash($Password, PASSWORD_BCRYPT);

        $check_email = "SELECT * from `add`  where email = '$email' ";
        $run_email = mysqli_query($connection, $check_email);
        if(mysqli_num_rows($run_email) > 0){
            echo "<script> alert('email already exist'); </script>";
        }else{
            $insert = "INSERT INTO `add` (`company`, `name`, `email`, `password`, `phone`, `city`) VALUES ( '$company', '$name', '$email', '$hashpass', '$phone', '$city')
            ";
        $connect_insert = mysqli_query($connection, $insert);
        if($connect_insert){
            echo "<script> alert('registration successfully'); </script>";

        }else{
            echo "registration failed";
        }
        
        }
    }else{
        echo "<script> alert('Password does not match'); </script>";

    }

}

?>


    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Add Agent</h2>
                <hr>
        <form class="user" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputcompany" placeholder="Company name" name="company" pattern="^[A-Za-z ]+$" required>
                </div>
                <div class="col-sm-6">
                    <input type="name" class="form-control form-control-user"
                        id="exampleRepeatPassword" placeholder="name" name="name" pattern="^[A-Za-z ]+$" required>
                </div>
            </div>
            <div class="form-group">
                    <input type="email" class="form-control form-control-user"
                        id="exampleEmail" placeholder="email" name="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
                </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="password" name="password" pattern=".{8,}" required>
                </div> 
                <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user"
                        id="exampleRepeatPassword" placeholder="confirm password" name="rpassword" pattern=".{8,}"required>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="number" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="phone" name="phone" pattern=".{8,}" required>
                </div>
                <div class="col-sm-6">
                    <input type="city" class="form-control form-control-user"
                        id="exampleRepeatPassword" placeholder="city" name="city"  pattern="^[A-Za-z ]+$" required>
                </div>
            </div>
           
            <input type="submit" class="btn btn-primary btn-user btn-block" name="register" >
            <hr>
        </form>

            </div>

        </div>

    </div>


</body>

</html>
<?php
include('admin/includes/footer.php');


?>