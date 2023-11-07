<?php

require('config.php');

$userid = $_POST['id'];
$company = $_POST['company'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$city = $_POST['city'];

$hashpass = password_hash($password, PASSWORD_BCRYPT);


$update = "update `add` set company = '$company' , name = '$name', email = '$email' , password ='$hashpass' , phone ='$phone' , city ='$city' where aid = $userid";
$res = mysqli_query($connection , $update);
if (!$res) {
     die("connection failed");
}


header('location: viewagent.php');

?>