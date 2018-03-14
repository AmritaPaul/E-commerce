<?php
include("../db/config.php");

$id=$_GET['id'];

$sms="Thank you.Order complete:) . ";


$result="INSERT INTO `msssage` ( `cu_id`, `massage`) VALUES ( '$id', '$sms');";
$query1=mysqli_query($myconn,$result);

header("Location:orderview.php");

?>