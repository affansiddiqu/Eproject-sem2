<?php

require('config.php');

$userid = $_POST['id'];
$fid = $_POST['sname'];
$aid = $_POST['rname'];
$date = $_POST['date'];
$price = $_POST['price'];

$update = "update bill set fid = '$fid' , aid = '$aid', bdate = '$date' , price = '$price' where id = $userid ";

$res = mysqli_query($connection , $update);
if (!$res) {
     die("connection failed");
}
header('location: viewbill.php');

?>