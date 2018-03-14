
<?php

include("../login/session.php");

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>order</title>
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
function del() {
    
       var del= confirm("For sure Would you like to cancel it?");
    if(del==true)
        { return true;}
    else 
        { return false;}
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
<?php


include("../db/config.php");

$sql1='SELECT * FROM `order` WHERE cu_id='.$id.' AND status=1 ORDER BY o_id DESC  ';
$query=mysqli_query($myconn,$sql1);
echo'<table width="100%" border="1px" bgcolor="#0066FF" cellspacing="0" cellpadding="6">

<td width="20%" valign="top"> Product Name</td>
<td width="20%" valign="top"> Product quantity</td>
<td width="20%" valign="top">Product price  </td>
<td width="20%" valign="top">Action  </td>

</tr></table>';
$grantt=0;

while($row=mysqli_fetch_array($query) ) {

$id1= $row['p_id'];
$pname= $row['p_name'];
$price= $row['t_price'];
$qt= $row['quantity'];

$grantt=$grantt+$price;
echo'

<table width="100%" border="1px bordercolor="#0033FF"" bgcolor="#CCCCFF" cellspacing="0" cellpadding="6">

<tr>
	
 	<td width="20%" valign="top">'.$pname.' </td>
	<form action="edit_qt.php?id='.$id1.'" method="post" enctype="multipart/form-data">
	<input type="hidden" value="'.$id1.'" name="p_id">
	<td width="20%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" value="'.$qt.'" name="qtnup" </td>
	<td width="20%" valign="top"> &nbsp;&nbsp;&nbsp;'.$price.'TK </td>
	<td width="10%" valign="top"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type="submit" name="btn_upload" button id="addnewprouct" value="Update"   ></button> </td></form>
	<form action="delete_pt.php?id='.$id1.'" method="post" enctype="multipart/form-data">
	<td width="10%" valign="top"> &nbsp;&nbsp;&nbsp;<input type="image" src="../image/button_delete.png" width="60px" height="20px" "> </td>
	</form>
	
	
   
    
	

</tr>


</table>';



}


 
?>

<table>
<td > &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Total price  <?php echo''.$grantt.''?>TK </td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<td width="10%" valign="top"><a href="payment.php?id=<?php echo''.$grantt.''; ?>" style="color:green;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../image/button_confirm.png"  width="80px" height="30px" />

<td width="10%" valign="top"><a href="deleteod.php?id=<?php echo''.$id.''; ?>"style="color:red;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="image" src="../image/button_cancel.png" width="80px" height="30px"  onclick="return del()"> </td></a>
</table>


</div>
<div id="footer1">
<div id="pt1">
<b>Techbd </b><hr> &nbsp;&nbsp;&nbsp;&nbsp; <div id="f1"><p><a href="../f_page/address.php">Address</a> </div><div id="f2"><a href="../home.php"> Home </a></div>
<hr />
<b>Payment System </b> &nbsp;&nbsp;&nbsp;&nbsp <div id="f4"><a href="../f_page/replace&refund.php">Replacement policy</a> </div><div id="f5"> <a href="../f_page/replace&refund.php">Refund policy</a></div>
<hr />
<b>How to pay </b> &nbsp;&nbsp;&nbsp;&nbsp Cash on delevery <img src="../image/bkash_logo.png" id="pay" width="30px" height="40px" />
 <img src="../image/120716173707_UKashLogo2.jpg" id="pay" width="40px" height="30px" />
<br /><hr />
<p>copywrite@techbd.com 2017</p>
</div>
<div id="pr2">
<h3>Newslater</h3>
<p>Every day 1000+ product add in our website</p>
<p>Question | Comments | Complain</p>
<p><b>Moblile:01779218527</b></p>
<p><b>E-mail:techbd@gmail.com</b></p>
<p><a href="https://www.facebook.com/techbdcom-307315119754596/"><b>Inbox:https://www.facebook.com/techbd.com/</b></a></p>
<div id="fb">
<a href="https://www.facebook.com/techbdcom-307315119754596/"><img src="../image/Facebook_Home_logo_old.svg.png"  width="40px" height="30px" /></a>
</div>
<div id="tw">
<a href="https://twitter.com/"><img src="../image/Twitter.png" width="40px" height="30px" /></a>
</div>
<div id="lkd">
<a href="https://www.linkedin.com/"><img src="../image/Linkedin_circle.svg_.png" width="40px" height="30px" /></a>
</div>
<div id="ut">
<a href="https://www.youtube.com/"><img src="../image/youtube-icon-logo-05A29977FC-seeklogo.com.png" width="40px" height="30px" /></a>
</div>
</div>



</div>

</div>
</body>
</html>