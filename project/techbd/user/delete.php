<?php

$id=$_GET['id'];
include("../db/config.php");

$sql="DELETE FROM oprodinfo  WHERE oprodinfo.op_id ='" . $id . "'";
$query=mysqli_query($myconn,$sql);

header("location:view.php");


?>


