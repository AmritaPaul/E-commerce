<?php
include("../db/config.php");
if(isset($_POST['btn_upload']))
{
$id2=$_GET['id'];	

$id=$_POST['cu_id'];
$p_id=$_POST['p_id'];
$pname=$_POST['pname'];
$price=$_POST['price'];
$qtn=$_POST['quantity'];
$address=$_POST['address'];
$total=$price*$qtn;

$sql = "SELECT * FROM nprodinfo WHERE np_id='".$id2."' ";
$query=mysqli_query($myconn,$sql);

while($row=mysqli_fetch_array($query) ) {

$qt=$row['np_qt'];


if($qt>=$qtn){
			$result3="INSERT INTO `order` ( `cu_id`, `p_id`, `p_name`, `quantity`, `t_price`,`d_address`,status) VALUES ( '$id', '$p_id', 				'$pname', '$qtn', '$total', '$address','1');";
		$query3 = mysqli_query($myconn,$result3 );
		
		
		
		header("location:order.php?id=''.$id.''");
	
}
else{
	echo'Sorry Avalible Product Quantity '.$qt.'';
	
}
}







}




?>
