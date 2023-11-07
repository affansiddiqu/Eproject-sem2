<?php
include('admin/includes/header.php');
include('admin/includes/sidebar.php');
include('admin/includes/topbar.php');
require("config.php");

$user_id = $_GET['fid']; 
// echo ("$user_data");
$query = "select * from `form` where fid = '{$user_id}'";

$retl = mysqli_query($connection , $query);
// print_r($retl);
if(!$retl){
    die("query fail");
}

if (mysqli_num_rows($retl) > 0 ) {
     while($row = mysqli_fetch_assoc($retl)) {
        
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
       <h1> Update Courier</h1>
        
<form action="update.php" class="row g-3 needs-validation" novalidate method="post">
<div class="col-md-0">
    <label for="validationCustom01" class="form-label"></label>
    <input type="hidden"  name="id" class="form-control" id="validationCustom01" required value="<?php echo $row ['fid'] ?>">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
<div class="col-md-4">
    <label for="validationCustom04" name="company" class="form-label">Company</label>
    <select class="form-select" id="validationCustom04" name="company" required>
      <option selected disabled>select</option>
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
    <input type="text" name="fname" class="form-control" id="validationCustom01" required value="<?php echo $row ['fname'] ?>">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" name="lname" class="form-control" id="validationCustom02" required value="<?php echo $row ['lname'] ?>">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Email Address</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="email" name="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required value="<?php echo $row ['femail'] ?>">
      <div class="invalid-feedback">
      Please provide a valid email.
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <label for="validationCustom05" class="form-label">Residential Address</label>
    <input type="text" name="raddress" class="form-control" id="validationCustom05" required value="<?php echo $row ['raddress'] ?>">
    <div class="invalid-feedback">
      Please provide a valid address.
    </div>
  </div>
  
  <div class="col-md-6">
    <label for="validationCustom05" class="form-label">Shipment Address</label>
    <input type="text" name="saddress" class="form-control" id="validationCustom05" required value="<?php echo $row ['saddress'] ?>">
    <div class="invalid-feedback">
      Please provide a valid shipment address.
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">City</label>
    <select class="form-select" name="city" id="validationCustom04" required >
      <option selected disabled >select</option>
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
    <input type="text" name="phone" class="form-control" id="validationCustom05" required value="<?php echo $row ['phone'] ?>">
    <div class="invalid-feedback">
      Please provide a valid Number.
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom05" class="form-label">Courier Type</label>
    <input type="text" name="ctype" class="form-control" id="validationCustom05" required value="<?php echo $row ['ctype'] ?>">
    <div class="invalid-feedback">
      Please provide a valid courier.
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom05" class="form-label">Weight(kg)</label>
    <input type="text" name="weight" class="form-control" id="validationCustom05" required value="<?php echo $row ['weight'] ?>">
    <div class="invalid-feedback">
      Please provide a valid weight(kg).
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationCustom05" class="form-label">Current Date</label>
    <input type="date" name="date" class="form-control" id="validationCustom05" required >
    <div class="invalid-feedback">
      Please provide a valid date.
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">Gender</label>
    <select class="form-select" name="gender" id="validationCustom04" required>      <option selected disabled value="">select</option>
      <option>Male</option>
      <option>Female</option>
      <option>non</option>
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
  <div class="modal-footer p-4">
  <button type="submit" name="submit" class="btn btn-success ms-auto">Update Details</button>
</div>
</form>
<?php
}
}
?>

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
    include('admin/includes/footer.php');
    ?>
       
</body>
</html>