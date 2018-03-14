<?php

$id=$_GET['id'];
include("../db/config.php");

$sql="DELETE FROM `banner` WHERE `banner`.`b_id` ='" . $id . "'";
$query=mysqli_query($myconn,$sql);


header("location:../admin/slider.php");


?>


