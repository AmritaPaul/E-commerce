
<?php
include("../login/session.php");
 

if($login_role=='admin'){
 header('location:../admin/admin.php');
}

if($login_role=='moderator'){
 header('location:../moderator/moderator.php');
}
include("../db/config.php");
$count=0;

$sql2="SELECT * FROM `msssage` WHERE  cu_id='" . $id . "' AND status=0 ";
$result=mysqli_query($myconn, $sql2);
$count=mysqli_num_rows($result);
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="style5.css" type="text/css">

<link rel="icon" type="../image/png/jpg" href="../image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" href="../notifiaction/notification-demo-style.css" type="text/css">
<script src="../notifiaction/jquery-2.1.1.min.js" type="text/javascript"></script>

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
<script type="text/javascript">

	function myFunction() 
	{
		$.ajax({
			url: "../notifiaction/view_notification.php?id=<?php echo''.$id.''; ?>",
			type: "POST",
			processData:false,
			success: function(data)
			{
			$("#notification-count").remove();					
			$("#notification-latest").show();$("#notification-latest").html(data);
			},
			error: function(){}           
		});
	 }
	 
	 $(document).ready(function() 
	 {
		$('body').click(function(e)
		{
			if ( e.target.id != 'notification-icon')
			{
				$("#notification-latest").hide();
			}
		});
	});
		 
	</script>


</head>
<body>


<div id="container1">
<header>
		<?php
			include('head_login.php');
		?>
	</header>
	
<?php
			include('../menu/user.php');
		?>

<div id="display1">
<center>
<p style={color:green;
}>Wellcome to <b > <?php echo $login_role;?></b>  &nbsp;&nbsp;&nbsp;&nbsp;User name is:<b> <?php echo $login_session;?></b> and  Role  :<b><?php echo $login_role;?></b></p>
</center>
<div id="pdis1">
<?php

$page=0;
$show=4;
if(isset($_POST["page"]))
{
 $page=$_POST["page"];
 $page=($page*$show)-$show;
}
$sql2="SELECT * FROM nprodinfo ORDER BY np_id DESC limit $page,$show";
$res = mysqli_query($myconn,$sql2);
while($row=mysqli_fetch_array($res))
{
$id= $row['np_id'];
$name= $row['np_name'];
$picpath=$row['p_image'];
$price=$row['np_price'];
 ?>
   <?php echo'<div id="pname" style="float:left;margin-left:3%;margin-right:3%; margin-top:5%;  width:19%; height:35%; border:solid 0px #333333;overflow:hide;text-align="center";">&nbsp;'.$name.'<br>
<a href="../admin/details.php? id='.$id.'">&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;<img src="../admin/prodimg/'.$picpath.'" width="80px" height="100px" ></a><br>
Price:'.$price.'Tk
<table><tr><td><a href="../user/check_cart.php?id='.$id.'" ><img src="../image/green-add-to-cart-button-hi.png" width="70px" height="30px" /></td></a></td><td><a href="../admin/details.php?id='.$id.'" style="color:green;"><img src="../image/Details-button.png" width="80px" height="30px" /></td></a></tr></table></div>';?>
    <?php
}
$sql3="SELECT * FROM nprodinfo ORDER BY np_id DESC";
$res1 = mysqli_query($myconn,$sql3);
$count=mysqli_num_rows($res1);
$a=$count/$show;
$a=ceil($a);
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
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
<div id="pdis2">
<?php

$opage=0;
$oshow=4;
if(isset($_POST["opage"]))
{
 $opage=$_POST["opage"];
 $opage=($opage*$oshow)-$oshow;
}
$sql4="SELECT * FROM oprodinfo ORDER BY op_id DESC limit $opage,$oshow";
$ores = mysqli_query($myconn,$sql4);
while($orow=mysqli_fetch_array($ores))
{
$oid= $orow['op_id'];
$oname= $orow['op_name'];
$opicpath=$orow['p_image'];
$oprice=$orow['op_price'];
 ?>
   <?php echo'<div id="pname" style="float:left;margin-left:3%;margin-right:3%; margin-top:5%;  width:19%; height:35%; border:solid 0px #333333;overflow:hide;text-align="center";">&nbsp;'.$oname.'<br>
<a href="../user/details.php? id='.$oid.'">&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;<img src="../user/prodimg/'.$opicpath.'" width="80px" height="100px" ></a><br>
Price:'.$oprice.'Tk
<table><td><a href="../user/details.php?id='.$oid.'" style="color:green;"><img src="../image/Details-button.png" width="80px" height="30px" /></td></a></tr></table></div>';?>
    <?php
}
$sql5="SELECT * FROM oprodinfo ORDER BY op_id DESC";
$ores1 = mysqli_query($myconn,$sql5);
$ocount=mysqli_num_rows($ores1);
$oa=$ocount/$oshow;
$oa=ceil($oa);
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
?>
<form method="opost">&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;
<?php
for($ob=1;$ob<=$oa;$ob++)
{
 ?>
    <input type="submit" value="<?php echo $ob;?>" name="opage">
    <?php
}?>



</div>
<div id="pdis3">
<?php

$epage=0;
$eshow=4;
if(isset($_POST["epage"]))
{
 $epage=$_POST["epage"];
 $epage=($epage*$eshow)-$eshow;//counting for 9 image is displayed in one page
}
$sql6="SELECT * FROM eprodinfo ORDER BY ep_id DESC limit $epage,$eshow";
$eres = mysqli_query($myconn,$sql6);//set limit to display 9 images
while($erow=mysqli_fetch_array($eres))
{
$eid= $erow['ep_id'];
$ename= $erow['ep_name'];
$epicpath=$erow['p_image'];
$eprice=$erow['ep_want'];
 ?>
   <?php echo'<div id="pname" style="float:left;margin-left:3%;margin-right:3%; margin-top:5%;  width:19%; height:35%; border:solid 0px #333333;overflow:hide;text-align="center";">&nbsp;'.$ename.'<br>
<a href="../exchange/details.php? id='.$eid.'">&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;<img src="../exchange/prodimg/'.$epicpath.'" width="80px" height="100px" ></a><br>
Want:'.$eprice.'
<table><td><a href="../exchange/details.php?id='.$eid.'" style="color:green;"><img src="../image/Details-button.png" width="80px" height="30px" /></td></a></tr></table></div>';?>
    <?php
}
$sql7="SELECT * FROM eprodinfo ORDER BY ep_id DESC ";
$eres1 = mysqli_query($myconn,$sql7);
$ecount=mysqli_num_rows($eres1);//use for count how many images in database
$ea=$ecount/$eshow;
$ea=ceil($ea);//ceil function is used to round up figure
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
?>
<form method="epost">&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;
<?php
for($eb=1;$eb<=$ea;$eb++)
{
 ?>
    <input type="submit" value="<?php echo $eb;?>" name="epage">
    <?php
}?>

</div>

<div id="sl1">
<img src="../image/Untitled-1.jpg" width="250px" height=" 350px"> 
</div>
<div id="sl2">

<img src="../image/Top-7-Android-Apps-to-Buy-and-Sell-Used-Things.jpg" width="250px" height=" 350px"> 
</div>
<div id="sl3">

<img  src="../image/banner-intro.jpg" width="250px" height=" 350px"> 
</div>

  




</div>
<div id="footer1">
<?php
			include('footer.php');
?>


</div>

</div>
</body>
</html>