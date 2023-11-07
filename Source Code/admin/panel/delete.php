<?php
include('config.php');

$user_id = $_GET['fid']; 

$del = "delete from `form` where fid = '$user_id'";

$rest = mysqli_query($connection , $del);

if (!$rest) {
     die("connection failed");
}

header('location: ud.php');

?>