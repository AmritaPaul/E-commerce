<?php
include("../db/config.php");
if(isset($_POST['btn_upload']))
{
$id=$_GET['id'];
$name=$_POST['name'];
$comment=$_POST['coment'];

$result="INSERT INTO comment(cu_name,np_id,comment)
VALUES('$name','$id','$comment')";
$query = mysqli_query($myconn,$result );
header("location:details.php?id=$id");

}

?>