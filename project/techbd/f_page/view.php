<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Address</title>
<link rel="icon" type="image/png/jpg" href="../image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="style.css">
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
</script></head>

<body>
<div id="container">
<img src="../image/Gray-plain-website-background.jpg" width="100%" height="100%" />
<div id="header">
<div id="logo">
<img src="../image/logo.jpg" />
</div>
<div id="hline">techbd</div>
<div id="sbox">
<form method="post" action="user/search.php" onsubmit="return validate()" >
<input id="search" name="search" type="text" placeholder="Search for product & brand" />
<input type="image" src="../image/3940585a2d442b4a263055de85b1318f.png" width="40px" height="40px" id="submit" name="btn" />
</form>

</div>
<div id="btn"><a href="../user/order.php"><img src="../image/cart-icon.jpg" style="width:30px;height:30px; border-radius:50%" />
</a>
</div>

<div id="menu">
<ul class="main-menu">
			<li><a href="../home.php">Home</a></li>
			<li class="sub-menu sub-menu-1"><a href="#">New Products</a>
				<ul class="sub-menu-layout sub-menu-layout-1">
					<li><a href="../display_product/antivirus.php">Antivirus</a></li>
                    <li><a href="../display_product/adobe.php">Adobe Premire</a></li>
                    <li><a href="../display_product/pchd.php">PC Hardware</a></li>
					<li class="sub-menu sub-menu-2"><a href="#">Artifacial Intelligency</a>
						<ul class="sub-menu-layout sub-menu-layout-2">
							<li><a href="../display_product/ardunio.php">Ardunio</a></li>
							<li><a href="../display_product/sensor.php">Sensor</a></li>
							<li><a href="../display_product/motor.php">Motor</a></li>
						</ul>
					</li>
					<li><a href="display_product/other.php">Others</a></li>
				</ul>
			</li>
				
     <li class="sub-menu sub-menu-1"><a href="#">Old Products</a>
               <ul class="sub-menu-layout sub-menu-layout-1">
					<li><a href="../user/pchd.php">Pc Hardware</a></li>
                    <li><a href="../user/omview.php">Mobile</a></li>
                    <li><a href="../user/electronics.php">Electronices</a></li>
					<li><a href="../user/other.php">Others</a></li>
                    <li><a href="../user/add_oproduct.php">Give Add</a></li>
                   </ul>
			</li>	
	<li class="sub-menu sub-menu-1"><a href="#">Exchange </a>
				<ul class="sub-menu-layout sub-menu-layout-1">
					<li><a href="../exchange/pchd.php">Pc Hardware</a></li>
                    <li><a  href="../exchange/mview.php">Mobile</a></li>
                    <li><a href="../exchange/electronics.php">Electronices</a></li>
					<li><a href="../exchange/other.php">Others</a></li>
                    <li><a href="../exchange/add_eproduct.php">Give Add</a></li>
				</ul>
			</li>			
    <li><a href="../user/add_oproduct.php">Sell By Techbd</a></li>
	<li><a href="#">About</a></li>
     <li><a href="../db/signup/signupu.php">Sign Up</a></li>
    <li><a href="../login/login.php"">Login</a></li>
		

   
		
</ul>
	
</div>


<div id="view">
<div id="viewp">
<div id="sms">
<center><h2 color:green>Thank You</h2></center>
<center><h3 color:green>Stay with techbd.com .we will send you conformation sms on your mobile </h3></center>
</div>
</div>
</div>
</div>
<div id="footer">
<div id="pt1">
<b>Techbd </b><hr> &nbsp;&nbsp;&nbsp;&nbsp <div id="f1"><p><a href="f_page/address.php">Address</a> </div><div id="f2"><a href="home.php"> Home </a></div>
<hr />
<b>Payment System </b> &nbsp;&nbsp;&nbsp;&nbsp <div id="f4"><a href="f_page/replace&refund.php">Replacement policy</a> </div><div id="f5"> <a href="f_page/replace&refund.php">Refund policy</a></div>
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
<div id="#">

</div>
</div>
</body>
</html>
