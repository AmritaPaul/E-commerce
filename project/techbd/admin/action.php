<?php

$id=$_GET['id'];
include("../db/config.php");

$sql="SELECT * FROM userinfo WHERE `userinfo`.`cu_id` ='" . $id . "'";

$query=mysqli_query($myconn,$sql);
while($row=mysqli_fetch_array($query))
{

$status=$row['status'];
if($status==1){
	$status=" 0";
	
}
else{
	$status= "1";
}

}
$cid=$id-1;
$result="UPDATE userinfo SET status='$status' WHERE cu_id='$id'";

$query = mysqli_query($myconn,$result );

header("location:userinfo.php");



?>


