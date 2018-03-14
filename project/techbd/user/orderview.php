
<?php


include("../login/session.php");
if($login_role=='user'){
 header('location:../user/user.php');
}
if($login_role=='moderator'){
 header('location:../moderator/moderator.php');
}
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>orderview</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="style5.css" type="text/css">



<link rel="icon" type="../image/png/jpg" href="../image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="style1.css">




<script type="text/javascript">
function validate() {

var B = document.getElementById("search");
if(B.value== "" || B.value== null) {
alert("Please enter a product name or id or brand or price ");
B.style.border = "2px solid red";
return false;
} else {
B.style.border = "";
}
}
</script>



</head>
<body>


<div id="container1">


<header>
		<?php
			include('head.php');
		?>
	</header>
	
    <div id="search-layer"></div>

<?php
			include('user_menu.php');
?>
<div id="display1">
<center><h2 style="color:red;">Orderlist</h2></center>
<?php

$page=0;
$show=5;
if(isset($_POST["page"]))
{
 $page=$_POST["page"];
 $page=($page*$show)-$show;
}
include("../db/config.php");
$sql="SELECT * FROM `payment` ORDER BY `pay_id` DESC   limit $page,$show";
$res = mysqli_query($myconn,$sql);
echo'<table width="100%" border="1px" cellspacing="0" bgcolor="#0066FF" cellpadding="6">
<tr>

<td width="20%" valign="top"> &nbsp;&nbsp;&nbsp;Total price </td>
<td width="20%" valign="top"> &nbsp;&nbsp;&nbsp; TrxId</td>
<td width="20%" valign="top"> &nbsp;&nbsp;&nbsp;Status  </td>
<td width="60%" valign="top"> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Action</td>
</tr></table>';
while($row=mysqli_fetch_array($res))
{
$price= $row['g_price'];
$trxid= $row['trxid'];
$status=$row['status'];
$cu_id=$row['cu_id'];
$enid=md5($trxid);
if($status==0){
	$status=" Delivery Incomplete";
	
}
else{
	$status= "Delivery Complete";
}
 ?>
   <?php echo' <table width="100%" border="1px" bgcolor="#CCCCFF" cellspacing="0" cellpadding="6">

<tr>
	<td width="20%" valign="top">'.$price.'</td>
 	<td width="20%" valign="top">'.$trxid.' </td>
	
	<td width="20%" valign="top"> &nbsp;&nbsp;&nbsp;'.$status.' </td>
   <td width="10%" valign="top"><a href="actiond.php?id='.$trxid.'"style="color:red;"> &nbsp;&nbsp;&nbsp;<input type="image" src="../image/button_action.png" width="60px" height="20px" "> </td></a>
   <td width="10%" valign="top"><a href="orderdetails.php?id='.$trxid.'"style="color:red;"> &nbsp;&nbsp;&nbsp;<input type="image" src="../image/button_details.png" width="60px" height="20px" "> </td></a>
   <td width="10%" valign="top"><a href="massage.php?id='.$cu_id.'"style="color:red;"> &nbsp;&nbsp;&nbsp;<input type="image" src="../image/button_massage.png" width="60px" height="20px" "> </td></a>
   <td width="10%" valign="top"><a href="deleteor.php?id='.$trxid.'"style="color:red;"> &nbsp;&nbsp;&nbsp;<input type="image" src="../image/button_delete.png" width="60px" height="20px" onclick="return del()"> </td></a>
	

</tr>


</table>

';?>
 <?php
}
$sql2="SELECT * FROM payment ORDER BY pay_id ASC ";
$res1 = mysqli_query($myconn,$sql2);
$count=mysqli_num_rows($res1);//use for count how many images in database
$a=$count/$show;
$a=ceil($a);//ceil function is used to round up figure
echo "<br><br><br>";
?>
<form method="post">&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;
<?php
for($b=1;$b<=$a;$b++)
{
 ?>
    <input type="submit" value="<?php echo $b;?>" name="page">
    <?php
}?>
</div>
<div id="footer1">

<?php
			include('footer.php');
?>


</div>

</div>
</body>
</html>