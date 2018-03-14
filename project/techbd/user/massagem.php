<?php
include("../db/config.php");

$id=$_GET['id'];
$sql="SELECT * FROM `order` WHERE o_id='" . $id . "' ";
$sms="Thank you.Order complete:) . ";
$query=mysqli_query($myconn,$sql);

while($row=mysqli_fetch_array($query))
{


$cu_id=$row['cu_id'];




}


$result="INSERT INTO `msssage` ( `cu_id`, `massage`) VALUES ( '$cu_id', '$sms');";
$query1=mysqli_query($myconn,$result);

header("Location:orderviewm.php");

?>