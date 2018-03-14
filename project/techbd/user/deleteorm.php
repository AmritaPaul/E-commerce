<?php

$id=$_GET['id'];
include("../db/config.php");


$sql1="DELETE FROM `payment` WHERE `payment`.`trxid` ='" . $id . "'";

$query1=mysqli_query($myconn,$sql1);




header("location:../moderator/moderator.php");


?>

