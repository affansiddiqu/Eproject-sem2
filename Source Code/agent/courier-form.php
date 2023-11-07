<?php
include('header.php');
include('config.php');

require 'vendor/autoload.php';
// PHPMailer Integration
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['submit'])) {
    $company = $_POST['company'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $raddress = $_POST['raddress'];
    $saddress = $_POST['saddress'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $ctype = $_POST['ctype'];
    $weight = $_POST['weight'];
    $date = $_POST['date'];
    $gender = $_POST['gender'];

    // Generate a random order number
    $orderNumber = rand(1000, 100000);
    $insert = "INSERT INTO `form` (`scompany`, `fname`, `lname`, `femail`, `raddress`, `saddress`, `city`, `phone`, `ctype`, `weight`, `date`, `orderNum`, `gender`) VALUES ('$company', '$fname', '$lname', '$email', '$raddress', '$saddress', '$city', '$phone', '$ctype', '$weight', '$date', '$orderNumber', '$gender')";
    $result = mysqli_query($connection, $insert);

    if ($result) {
        // Send an email with the order number
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
            $mail->addAddress($email, $fname); // User ka email address

            // Email content
            $mail->isHTML(true);
            $mail->Subject = 'Courier Order Confirmation';
            $mail->Body = "Thank you for placing your courier order. Your order number is: $orderNumber";

            $mail->send();
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        echo '<script>alert("Courier form registered. An email with your order number has been sent.")</script>';
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
// header('location: service.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="css/reg.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container mt-5">
       <h1>Courier Form</h1>
        

<form action="courier-form.php" class="row g-3 needs-validation" novalidate method="post">

<div class="col-md-4">
    <label for="validationCustom04" name="company" class="form-label">Company</label>
    <select class="form-select" id="validationCustom04" name="company" required>
      <option selected disabled value="">select</option>
      <option>Tcs</option>
      <option>Leopards</option>
      <option>Trax</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid Company.
    </div>
  </div>
  
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" name="fname" class="form-control" id="validationCustom01"  pattern="^[A-Za-z ]+$" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" name="lname" class="form-control" id="validationCustom02" pattern="^[A-Za-z ]+$" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Email Address</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="email" name="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
      <div class="invalid-feedback">
      Please provide a valid email.
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <label for="validationCustom05" class="form-label">Residential Address</label>
    <input type="text" name="raddress" class="form-control" id="validationCustom05"  pattern="^[A-Za-z0-9 .,/-]+$" required>
    <div class="invalid-feedback">
      Please provide a valid address.
    </div>
  </div>
  
  <div class="col-md-6">
    <label for="validationCustom05" class="form-label">Shipment Address</label>
    <input type="text" name="saddress" class="form-control" id="validationCustom05"  pattern="^[A-Za-z0-9 .,/-]+$" required>
    <div class="invalid-feedback">
      Please provide a valid shipment address.
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">City</label>
    <select class="form-select" name="city" id="validationCustom04" required>
      <option selected disabled value="">select</option>
      <option>Karachi</option>
      <option>Lahore</option>
      <option>Islamabad</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid city.
    </div>
  </div>
  
  <div class="col-md-4">
    <label for="validationCustom05" class="form-label">Phone Number</label>
    <input type="text" name="phone" class="form-control" id="validationCustom05" pattern="^\d{10}$" required>
    <div class="invalid-feedback">
      Please provide a valid Number.
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom05" class="form-label">Courier Type</label>
    <input type="text" name="ctype" class="form-control" id="validationCustom05" pattern="^[A-Za-z ]+$" required>
    <div class="invalid-feedback">
      Please provide a valid courier.
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom05" class="form-label">Weight(kg)</label>
    <input type="text" name="weight" class="form-control" id="validationCustom05" pattern="^\d+(\.\d+)?$" required>
    <div class="invalid-feedback">
      Please provide a valid weight(kg).
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom05" class="form-label">Current Date</label>
    <input type="date" name="date" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid date.
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">Gender</label>
    <select class="form-select" name="gender" id="validationCustom04" required>
      <option selected disabled value="">select</option>
      <option>Male</option>
      <option>Female</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid Gender.
    </div>
  </div>
  

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
  </div>
</form>


<script>// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()</script>


    </div>
    <?php
    include('footer.php');
    ?>
    <!-- <script src="./sweettalnt.js"></script>
    <script src="./app.js"></script> -->
   
</body>
</html>