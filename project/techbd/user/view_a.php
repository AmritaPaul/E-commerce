
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
<title>view</title>
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
    
       var del= confirm("For sure Would you like to delete it?");
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
<div id="display3">
<?php
include("../db/config.php");
$page=0;
$show=4;
if(isset($_POST["page"]))
{
 $page=$_POST["page"];
 $page=($page*$show)-$show;
}
$sql="SELECT * FROM oprodinfo  ORDER BY op_id DESC limit $page,$show";
$res = mysqli_query($myconn,$sql);

?>
<?php echo' <table width="100%" border="1px" bgcolor="#0066FF" cellspacing="0" cellpadding="6">

<tr>
	<td width="20%" valign="top">Product Name</td>
 	<td width="20%" valign="top">Product Id </td>
	<td width="20%" valign="top">Product image</td>
 	<td width="20%" valign="top"> Product Price</td>
		<td width="20%" valign="top"> &nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</td>

</table>

';?>


<?php
while($row=mysqli_fetch_array($res))
{
$id1= $row['op_id'];
$name= $row['op_name'];
$picpath=$row['p_image'];
$price=$row['op_price'];
 ?>
   <?php echo' <table width="100%" border="1px" cellspacing="0" cellpadding="6">

<tr>
	<td width="20%" valign="top">'.$id1.'</td>
 	<td width="20%" valign="top">'.$name.' </td>
	<td width="20%"> &nbsp;&nbsp;&nbsp;&nbsp;<img src="prodimg/'.$picpath.'" width="100px"height="100px"/></td>
	<td width="20%" valign="top"> &nbsp;&nbsp;&nbsp;'.$price.'TK </td>
    <td width="7%" valign="top"><a href="edito_a.php?edit_id='.$id1.'" style="color:green;"><img src="../image/button_edit.png"  width="50px" height="30px" /></td></a>
	<td width="7%" valign="top"><a href="details.php?id='.$id1.'" style="color:green;"><img src="../image/button_details.png"  width="50px" height="30px" /></td></a>
    <td width="7%" valign="top"><a href="deleteo_a.php?delete_id='.$id1.'"style="color:red;"><input type="image" src="../image/button_delete.png" width="50px" height="30px" onclick="return del()"> </td></a>


</table>

';?>
    <?php
}
$sql3="SELECT * FROM oprodinfo ORDER BY op_id DESC";
$res1 = mysqli_query($myconn,$sql3);
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