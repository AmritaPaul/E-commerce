<?php

$id=$_GET['id'];
include("../db/config.php");

$sql='UPDATE `order` SET `status` = 0 WHERE cu_id='.$id.' AND status=1 ';  
$query=mysqli_query($myconn,$sql);

header("location:order.php");
?>


