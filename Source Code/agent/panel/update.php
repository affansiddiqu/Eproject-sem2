<?php

require('config.php');

$userid = $_POST['id'];
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


$update = "update form set scompany = '$company' , fname = '$fname', lname = '$lname' , femail = '$email' , raddress = '$raddress' , saddress = '$saddress', city ='$city' , phone = '$phone' , ctype ='$ctype' , weight = '$weight' ,  date = '$date' , gender = '$gender'  where fid = $userid";
$res = mysqli_query($connection , $update);
if (!$res) {
     die("connection failed");
}

    // move_uploaded_file($pimg_tmp_name  , 'img/' . $pimg_name );


header('location: ud.php');

?>