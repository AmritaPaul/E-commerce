

<?php

if(isset($_POST['btn_upload']))
{
	

$id=$_POST['cu_id'];
$trxid=$_POST['trxid'];
$bl_qn=$_POST['bl_qn'];
$p_id=$_POST['p_id'];
$g_price=$_POST['o_id'];





include("../db/config.php");
$result="INSERT INTO `payment` ( `cu_id`, `g_price`, `trxid`) VALUES ( '$id', '$g_price', '$trxid');";
$query= mysqli_query($myconn,$result );



if($query==true){
	
$sql2='UPDATE `nprodinfo` SET `np_qt` = '.$bl_qn.' WHERE `nprodinfo`.`np_id` = '.$p_id.' ';
$query2=mysqli_query($myconn,$sql2);
	
	
	
	
	
}
	
	
	if($query2==true){
		
     $sql3='UPDATE `order` SET `status` = 0 ,p_status="'.$trxid.'" WHERE cu_id='.$id.' AND status=1 ';
$query3=mysqli_query($myconn,$sql3);
		
		
	
		
	if($query3==true){	
		
		
		
	header("location:thanku.php");
 
}
else{
	header("location:payment.php");
	
}
 
}
else{
	header("location:payment.php");
	
}
}

exit();


?>