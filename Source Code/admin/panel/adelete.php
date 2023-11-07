
<?php
include('config.php');

$user_id = $_GET['aid']; 

$del = "delete from `add` where aid = '$user_id'";

$rest = mysqli_query($connection , $del);

if (!$rest) {
    die("connection failed");
}
header('location: viewagent.php');

?>