<?php
include('config.php');
include('header1.php');

if(isset($_POST['login'])){
  $login_email = $_POST['lemail'];
  $login_pass = $_POST['lpassword'];

  $log_query = "select * from user where email = '$login_email'";
  $login_conn = mysqli_query($connection, $log_query);

  if(mysqli_num_rows($login_conn) > 0){
    $row = mysqli_fetch_assoc($login_conn);
    $db_pass = $row['password'];
    $pass_check = password_verify($login_pass , $db_pass);

    if($pass_check){
      session_start();
      $_SESSION["useremail"] = $row['email'];
      header('location:index.php');
    }else{
      echo "<script> alert('Invalid Email/Password')</script>";
    }
  }
}

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple House Template</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/templatemo-style.css" rel="stylesheet" />
</head>

<body>  

<br><br>
<div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>User Login Here!</h2>

                <hr>
        <form class="user" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <div class="form-group">
                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Email Address" name="lemail" required>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Password" name="lpassword" required>
                </div>
              </div>
            <br>
            <input value="login" type="submit" class="btn btn-primary btn-user btn-block" name="login" >
            
        </form>

            </div>

        </div>

    </div>

</body>

</html>
<?php
include('footer.php');
?>
