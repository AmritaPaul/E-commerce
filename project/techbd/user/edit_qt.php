
<?php

include("../login/session.php");

?>

<?php
$id2=$_GET['id'];
include("../db/config.php");
if(isset($_POST['btn_upload']))
{

$qtn=$_POST['qtnup'];

$sql2='SELECT * FROM `nprodinfo` WHERE np_id='.$id2.'   ';
$query2=mysqli_query($myconn,$sql2);
while($row2=mysqli_fetch_array($query2) ) {

$price=$row2['np_price'];


}
$up_price=$qtn*$price;
 $sql3='UPDATE `order` SET `quantity` ="'.$qtn.'" ,t_price="'.$up_price.'" WHERE p_id='.$id2.' AND status=1 AND cu_id='.$id.' ';
$query3=mysqli_query($myconn,$sql3);
}
header("location:order.php");
?>