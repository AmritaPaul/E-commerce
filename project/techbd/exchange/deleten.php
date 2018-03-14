<?php

$id=$_GET['id'];
include("../db/config.php");

$sql="DELETE FROM eprodinfo  WHERE eprodinfo.ep_id ='" . $id . "'";
$query=mysqli_query($myconn,$sql);
while($row=mysqli_fetch_array($query))
{
	$picpath=$row['img_path'];
	
}
unlink($picpath);

header("location:viewn.php");


?>


