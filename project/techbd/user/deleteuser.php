<?php

$id=$_GET['id'];
include("../db/config.php");

$sql="DELETE FROM `userinfo` WHERE `userinfo`.`cu_id` ='" . $id . "'";

$query=mysqli_query($myconn,$sql);

header("location:user.php");


?>
