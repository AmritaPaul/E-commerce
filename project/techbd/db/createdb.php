<?php
$db_host="localhost";
$db_username="root";
$db_password="";
$sql="CREATE DATABASE techbd";
$myConnection=mysqli_connect("$db_host","$db_username","$db_password");
$query=mysqli_query($myConnection,$sql);

if($query=TRUE)
{
	echo"Database Create Successfull";
}
else
{
	echo mysqli_connect_error();
}
?>