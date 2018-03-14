<!doctype html>
<html><head>
<meta charset="utf-8">
<title>techbd</title>
<?php
include("db/config.php");

?>
<?php
$sql="SELECT * FROM `banner` ORDER BY `banner`.`b_id` ASC";
$res = mysqli_query($myconn,$sql);


?>

<?php
include('live_search/config.php');
?>
<link rel="stylesheet" href="style5.css" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="icon" type="image/png/jpg" href="image/logo.jpg"/>

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="nivo/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo/themes/light/light.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo/themes/dark/dark.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo/themes/bar/bar.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo/css/nivo-slider.css" type="text/css" media="screen" />

</head>

<body>
<div id="container">
	<header>
		<?php
			include('head.php');
		?>
	</header>
	
    <div id="search-layer"></div>
	
<div id="menu">
<ul class="main-menu">
			<li><a href="home.php">Home</a></li>
			<li class="sub-menu sub-menu-1"><a href="#">New Products</a>
				<ul class="sub-menu-layout sub-menu-layout-1">
					<li><a href="display_product/antivirus.php">Antivirus</a></li>
                    <li><a href="display_product/adobe.php">Adobe Premire</a></li>
                    <li><a href="display_product/pchd.php">PC Hardware</a></li>
					<li class="sub-menu sub-menu-2"><a href="#">Artifacial Intelligency</a>
						<ul class="sub-menu-layout sub-menu-layout-2">
							<li><a href="display_product/ardunio.php">Ardunio</a></li>
							<li><a href="display_product/sensor.php">Sensor</a></li>
							<li><a href="display_product/motor.php">Motor</a></li>
						</ul>
					</li>
					<li><a href="display_product/other.php">Others</a></li>
				</ul>
			</li>
				
     <li class="sub-menu sub-menu-1"><a href="#">Old Products</a>
               <ul class="sub-menu-layout sub-menu-layout-1">
					<li><a href="user/pchd.php">Pc Hardware</a></li>
                    <li><a href="user/mobile.php">Mobile</a></li>
                    <li><a href="user/electronics.php">Electronices</a></li>
					<li><a href="user/other.php">Others</a></li>
                    <li><a href="user/add_oproduct.php">Give Add</a></li>
                   </ul>
			</li>	
	<li class="sub-menu sub-menu-1"><a href="#">Exchange </a>
				<ul class="sub-menu-layout sub-menu-layout-1">
					<li><a href="exchange/pchd.php">Pc Hardware</a></li>
                    <li><a  href="exchange/mobile.php">Mobile</a></li>
                    <li><a href="exchange/electronics.php">Electronices</a></li>
					<li><a href="exchange/other.php">Others</a></li>
                    <li><a href="exchange/add_eproduct.php">Give Add</a></li>
				</ul>
			</li>			
    <li><a href="user/add_oproduct.php">Sell By Techbd</a></li>
	<li><a href="f_page/about.php">About</a></li>
     <li><a href="db/signupu.php">Sign Up</a></li>
    <li><a href="login/login.php"">Login</a></li>
		

   
		
</ul>
	
</div>
<div id="slider1">
<div class="slider-wrapper theme-bar">
<div id="slider" class="nivoSlider"> 
          <?php
while($row=mysqli_fetch_array($res))
{

$path=$row['img_path'];
?>
  
        <img src="<?php echo'Banner/'.$path.''?>" alt="" "/>
       
<?php
       

}
?>
 </div> 
   </div>

</div>
</div>

<div id="display">
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
<a href="admin/details.php? id='.$id.'">&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;<img src="admin/prodimg/'.$picpath.'" width="80px" height="100px" ></a><br>
Price:'.$price.'Tk
<table><tr><td><a href="user/check_cart.php?id='.$id.'" ><img src="image/green-add-to-cart-button-hi.png" width="70px" height="30px" /></td></a></td><td><a href="admin/details.php?id='.$id.'" style="color:green;"><img src="image/Details-button.png" width="80px" height="30px" /></td></a></tr></table></div>';?>
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
<a href="user/details.php? id='.$oid.'">&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;<img src="user/prodimg/'.$opicpath.'" width="80px" height="100px" ></a><br>
Price:'.$oprice.'Tk
<table><td><a href="user/details.php?id='.$oid.'" style="color:green;"><img src="image/Details-button.png" width="80px" height="30px" /></td></a></tr></table></div>';?>
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
<a href="exchange/details.php? id='.$eid.'">&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;<img src="exchange/prodimg/'.$epicpath.'" width="80px" height="100px" ></a><br>
Want:'.$eprice.'
<table><td><a href="exchange/details.php?id='.$eid.'" style="color:green;"><img src="image/Details-button.png" width="80px" height="30px" /></td></a></tr></table></div>';?>
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
<a href="view_all_p/view_np.php"><img src="image/Untitled-1.jpg" width="250px" height=" 350px"> </a>
</div>
<div id="sl2">

<a href="view_all_p/view_o.php"><img src="image/Top-7-Android-Apps-to-Buy-and-Sell-Used-Things.jpg" width="250px" height=" 350px"> </a>
</div>
<div id="sl3">

<a href="view_all_p/view.php"><img  src="image/banner-intro.jpg" width="250px" height=" 350px"> </a>
</div>

  

</div>


</div>
<div id="footer">
<div id="pt1">
<b>Techbd </b><hr> &nbsp;&nbsp;&nbsp;&nbsp <div id="f1"><p><a href="f_page/address.php">Address</a> </div><div id="f2"><a href="home.php"> Home </a></div>
<hr />
<b>Payment System </b> &nbsp;&nbsp;&nbsp;&nbsp <div id="f4"><a href="f_page/replace&refund.php">Replacement policy</a> </div><div id="f5"> <a href="f_page/replace&refund.php">Refund policy</a></div>
<hr />
<b>How to pay </b> &nbsp;&nbsp;&nbsp;&nbsp Cash on delevery <img src="image/bkash_logo.png" id="pay" width="30px" height="40px" />
 <img src="image/120716173707_UKashLogo2.jpg" id="pay" width="40px" height="30px" />
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
<a href="https://www.facebook.com/techbdcom-307315119754596/"><img src="image/Facebook_Home_logo_old.svg.png"  width="40px" height="30px" /></a>
</div>
<div id="tw">
<a href="https://twitter.com/"><img src="image/Twitter.png" width="40px" height="30px" /></a>
</div>
<div id="lkd">
<a href="https://www.linkedin.com/"><img src="image/Linkedin_circle.svg_.png" width="40px" height="30px" /></a>
</div>
<div id="ut">
<a href="https://www.youtube.com/"><img src="image/youtube-icon-logo-05A29977FC-seeklogo.com.png" width="40px" height="30px" /></a>
</div>
</div>



</div>

</div>
<script type="text/javascript" src="nivo/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="nivo/js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script> 

</body>
</html>