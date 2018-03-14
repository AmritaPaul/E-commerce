<?php
include("connect.php");
session_start();
$user_check=$_SESSION['login_user'];
 
$sql="SELECT*FROM userinfo WHERE username='$user_check'";
$result=mysqli_query($myconn,$sql);
$row=mysqli_fetch_assoc($result);
$login_session=$row['username'];
$login_role=$row['role'];
$id=$row['cu_id'];
if(!isset($login_session)){
 mysql_close;
 header('location:../login/login.php');
}
?>