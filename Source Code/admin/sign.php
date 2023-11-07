<?php
include('header1.php');
include('config.php');

if(isset($_POST['register'])) {
    $fname = $_POST['FirstName'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $rpass = $_POST['repeatPassword'];

    if ($pass == $rpass){
        $hashpass = password_hash($pass , PASSWORD_BCRYPT);
    
    $fetch = "SELECT * FROM `admin` where email = '$email'";
    $check_email = mysqli_query($connection , $fetch);
    if(mysqli_num_rows($check_email) > 0){
        echo 'email already exist';
    }else{
        $insert= "INSERT INTO `admin` (`username`,`email`, `password`) VALUES('$fname', '$email','$hashpass')";
        $connect_insert = mysqli_query($connection , $insert);
        if($connect_insert){
            echo 'registration successful';
        }else{
            echo'registration failed';
        }
        }
    }else{
        echo'password does not match';
    }
}
 ?>
 
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>..</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/templatemo-style.css" rel="stylesheet" />
</head>
<body> 
    <br>
    <br>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Admin Sign Up Here!</h2>
                <hr>
        <form class="user" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                        placeholder="First Name" name="FirstName" required>
                </div>
                
            </div>
            <br>
            <div class="form-group">
                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Email Address" name="email" required>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Password" name="password" required>
                </div>
                <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user"
                        id="exampleRepeatPassword" placeholder="Repeat Password" name="repeatPassword" required>
                </div>
            </div>
            <br>
            
            <input value="sign up" type="submit" class="btn btn-primary btn-user btn-block" name="register" >
            <br>
            <hr>
            <a href="login.php" class="btn btn-danger btn-user btn-block">
               </i>Already have an Acount?Login Here
            </a>
        </form>

            </div>

        </div>

    </div>

</body>

</html>
<?php
include('footer.php');
?>