
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
<title>orderdetails</title>
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
			include('../menu/admin.php');
?>
<div id="display2">
<center><h2 style="color:green;">Order Details</h2></center>
<?php
include("../db/config.php");

$id=$_GET['id'];

$sql2="SELECT * FROM `payment` WHERE trxid='" . $id . "'  ";

$query2=mysqli_query($myconn,$sql2);
while($row2=mysqli_fetch_array($query2))
{

$cu_id= $row2['cu_id'];
$gprice=$row2['g_price'];
}

$sql3="SELECT * FROM `userinfo` WHERE cu_id=" . $cu_id . "  ";

$query3=mysqli_query($myconn,$sql3);
while($row3=mysqli_fetch_array($query3))
{

$address= $row3['address'];

}





$sql="SELECT * FROM `order` WHERE p_status='" . $id . "'  ";

$query=mysqli_query($myconn,$sql);



echo'<center><table width="40%" border=".5px" bgcolor="#0099FF" cellspacing="0" cellpadding="6">

<td width="20%" valign="top"> Product Name</td>
<td width="20%" valign="top"> Product Quantity</td>



</tr></table></center>';
while($row=mysqli_fetch_array($query))
{

$name= $row['p_name'];
$qtn=$row['quantity'];
$price=$row['t_price'];
$add=$row['d_address'];
$cu_id=$row['cu_id'];


echo'<center><table width="40%" border=".5px" bgcolor="#CCCCFF" cellspacing="0" cellpadding="6">

<tr>
	
 	<td width="20%" valign="top">'.$name.' </td>
	<td width="20%"> '.$qtn.'</td>
	
	
	

</tr>


</table></center>';




}

echo'<div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Total Price:'.$gprice.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Address: '.$address.'  </div>';



?></div>
<div id="footer1">
<?php
			include('../footer/footer.php');
		?>



</div>

</div>
</body>
</html>