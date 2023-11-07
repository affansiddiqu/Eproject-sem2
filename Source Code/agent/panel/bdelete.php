<?php
include('config.php');

$user_id = $_GET['id']; 

$del = "delete from `bill` where id = '$user_id'";

$rest = mysqli_query($connection , $del);

if (!$rest) {
     die("connection failed");
}
header('location: viewbill.php');

?>