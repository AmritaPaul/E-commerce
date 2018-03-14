

<?php

if(isset($_POST['btn_upload']))
{
	

$id=$_POST['cu_id'];
$p_id=$_POST['p_id'];
$pname=$_POST['pname'];
$price=$_POST['price'];
$qt=$_POST['quantity'];
$address=$_POST['address'];
$total=$price*$qt;




include("../db/config.php");
$result="INSERT INTO `order` ( `cu_id`, `p_id`, `p_name`, `quantity`, `t_price`,`d_address`) VALUES ( '$id', '$p_id', '$pname', '$qt', '$total', '$address');";
$query = mysqli_query($myconn,$result );
header("location:thanku.php");



}

exit();


?>