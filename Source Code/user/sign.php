<?php
include('header1.php');
include('config.php');

require 'vendor/autoload.php'; 
// Composer se install kiya hua ho to yeh line add karein
// PHPMailer Integration
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['register'])) {
    $fname = $_POST['FirstName'];
    $lname = $_POST['LastName'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $rpass = $_POST['repeatPassword'];

    if ($pass == $rpass){
        $hashpass = password_hash($pass , PASSWORD_BCRYPT);
    
    $fetch = "SELECT * FROM `user` where email = '$email'";
    $check_email = mysqli_query($connection , $fetch);
    if(mysqli_num_rows($check_email) > 0){
        echo "<script> alert('Email already exists'); </script>";
        } else {
            // $user_email variable mein store hojaega User ka email address 
            $user_email = $email;

            // PHPMailer configuration
            $mail = new PHPMailer(true);
            try {
                // Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com'; // SMTP server
                $mail->SMTPAuth = true;
                $mail->Username = 'siddiquiaffan701@gmail.com'; // Sender's email address
                $mail->Password = 'hwmg luvt ngny zuym';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // TLS encryption
                $mail->Port = 587; // Port for TLS

                // Recipient settings
                $mail->setFrom('siddiquiaffan701@gmail.com', 'Affan');
                $mail->addAddress($user_email, $fname); // User ka email address

                // Email content
                $mail->isHTML(true);
                $mail->Subject = 'Welcome to Our Courier Website';
                $mail->Body = 'Thank you for register our website.';

                $mail->send();
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

            $insert= "INSERT INTO `user` (`firstname`, `lastname`, `email`, `password`) VALUES('$fname', '$lname', '$email','$hashpass')";
            $connect_insert = mysqli_query($connection , $insert);
            echo '<script> window.location.href="login.php"; </script>';
        }
    } else {
        echo '<script> alert("Password and confirm password do not match.")</script>';
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
    <section class="home-slider owl-carousel">

<div class="slider-item" style="background-image: url(images/cour.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
  <div class="container">
    <div class="row slider-text justify-content-center align-items-center">

      <div class="col-md-7 col-sm-12 text-center ftco-animate">
          <h1 class="mb-3 mt-5 bread">Register</h1>
      </div>

    </div>
  </div>
</div>
</section>
      	<div class="overlay"></div>
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>User Register Here!</h2>
                <hr>
        <form class="user" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                        placeholder="First Name" name="FirstName" pattern="^[A-Za-z ]+$"  required>
                </div>
                <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="exampleLastName"
                        placeholder="Last Name" name="LastName" pattern="^[A-Za-z ]+$"  required>
                 </div>
            </div>
            <br>
            <div class="form-group">
                <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                    placeholder="Email Address" name="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
            </div>
            <br>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Password" name="password" pattern=".{8,}" required>
                </div>
                <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user"
                        id="exampleRepeatPassword" placeholder="Repeat Password" name="repeatPassword" pattern=".{8,}" required>
                </div>
            </div>
            <br>
            
            <input type="submit" class="btn btn-danger btn-user btn-block" name="register" >

            <!-- <a href="login.php" class="btn btn-danger btn-user btn-block">
               </i>submit
            </a> -->
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