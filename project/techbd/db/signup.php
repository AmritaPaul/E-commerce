<?php
include("../login/session.php");

?>
<?php
 $DBhost = "localhost";
	 $DBuser = "root";
	 $DBpass = "";
	 $DBname = "techbd";
	 
	 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
     if ($DBcon->connect_errno) 
     {
         die("ERROR : -> ".$DBcon->connect_error);
     }
if(isset($_POST['btn-signup']))
 {
	
	$uname = strip_tags($_POST['name']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);
	$role = strip_tags($_POST['role']);
	$mobile=strip_tags($_POST['mobile']);
	$address=strip_tags($_POST['address']);
	$gender=strip_tags($_POST['gender']);

	
	$uname = $DBcon->real_escape_string($uname);
	$email = $DBcon->real_escape_string($email);
	$upass = $DBcon->real_escape_string($upass);
	$role = $DBcon->real_escape_string($role);
	$mobile = $DBcon->real_escape_string($mobile);
	$address = $DBcon->real_escape_string($address);
	$gender = $DBcon->real_escape_string($gender);
	
	$check_uname = $DBcon->query("SELECT username FROM userinfo WHERE 	username='$uname'");
	$check_email = $DBcon->query("SELECT email FROM userinfo WHERE email='$email'");
	$count=$check_uname->num_rows;
	$count1=$check_email->num_rows;
	

	if ($count==0) 
	{
		if ($count1==0) 
	{
		
		$query = "INSERT INTO userinfo(	username,email,password,role,mobile,address,gender,status) VALUES('$uname','$email','$upass','$role','$mobile','$address','$gender','1')";

		if ($DBcon->query($query)) 
		{
			$msg3 = "<div>
						<span></span> &nbsp; successfully registered !
					</div>";
		}
		else 
		{
			$msg3 = "<div>
						<span></span> &nbsp; error while registering !
					</div>";
		}
		
	}
	 else
	 {
		
		
		$msg2 = "<div>
					<span></span> &nbsp; sorry email already taken !
				</div>";
			
	}
		
	}
	 else
	 {
		
		
		$msg1 = "<div>
					<span></span> &nbsp; sorry username already taken !
				</div>";
			
	}
	$DBcon->close();
	//header("location:../login/login.php");
	header("refresh:5;../login/login.php");
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cart</title>
<link rel="icon" type="image/png/jpg" href="../image/logo.jpg" />
<link rel="stylesheet" type="text/css" href="../style.css" >
<link rel="stylesheet" type="text/css" href="../user/style1.css" >
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript">
function val(){
if(frm.name.value=="")
{
	alert("Please enter the username");
	frm.name.focus();	
	return false;
}
if(frm.email.value=="")
{
	alert("Please enter the email");
	frm.email.focus();	
	return false;
}	
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

if (reg.test(frm.email.value) == false) 
{
	alert('Invalid email address');
	frm.email.focus();	
	return false;
}
if(frm.password.value=="")
{
	alert("Please enter the password");
	frm.password.focus();	
	return false;
}
if(frm.mobile.value=="")
{
	alert("Please enter the mobile number");
	frm.mobile.focus();	
	return false;
}
if(frm.address.value=="")
{
	alert("Please enter the address");
	frm.address.focus();	
	return false;
}
if(frm.gender.value=="")
{
	alert("Please enter the gender");
	frm.gender.focus();	
	return false;
}

return true;
}
$(document).ready(function()
{    
	$("#name").keyup(function()
	{		
		var name = $(this).val();	
		
		if(name.length > 2)
		{		
			$("#result").html('checking...');
			$.ajax({
				
				type : 'POST',
				url  : 'username-check.php',
				data : $(this).serialize(), 
				success : function(data)
						  {
					         $("#result").html(data);
					      }
				});
				return false;
			
		}
		else
		{
			$("#result").html('');
		}
	});
	
});

</script>
</head>

<body>
<div id="container1">
<div id="header">
<div id="acc">
<a href="../login/login.php"><img src="../image/Microsoft_Account.svg.png" width="40px" height="40px" /></a>
</div>
<div id="logo">
<img src="../image/logo.jpg" width="50px" height="50px" />
</div>
<div id="hline">techbd</div>
<div id="sbox">
<form method="post" action="../user/search.php" onsubmit="return valid()" >
<input id="search" name="search" type="text" placeholder="Search for product & brand" />
<input type="image" src="../image/3940585a2d442b4a263055de85b1318f.png" width="40px" height="40px" id="submit" name="btn" />
</form>


</div>

<div id="btn"><a href="../user/order.php"><img src="../image/cart-icon.jpg" style="width:40px;height:40px; border-radius:50%" />
</a></div>


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
					<li><a href="../display_product/other.php">Others</a></li>
				</ul>
			</li>
				
     <li class="sub-menu sub-menu-1"><a href="#">Old Products</a>
               <ul class="sub-menu-layout sub-menu-layout-1">
					<li><a href="../user/pchd.php">Pc Hardware</a></li>
                    <li><a href="../user/mobile.php">Mobile</a></li>
                    <li><a href="../user/electronics.php">Electronices</a></li>
					<li><a href="../user/other.php">Others</a></li>
                    <li><a href="../user/add_oproduct.php">Give Add</a></li>
                   </ul>
			</li>	
	<li class="sub-menu sub-menu-1"><a href="#">Exchange </a>
				<ul class="sub-menu-layout sub-menu-layout-1">
					<li><a href="../exchange/pchd.php">Pc Hardware</a></li>
                    <li><a  href="../exchange/mobile.php">Mobile</a></li>
                    <li><a href="../exchange/electronics.php">Electronices</a></li>
					<li><a href="../exchange/other.php">Others</a></li>
                    <li><a href="../exchange/add_eproduct.php">Give Add</a></li>
				</ul>
			</li>			
    <li><a href="../user/add_oproduct.php">Sell By Techbd</a></li>
	<li><a href="../user/f_page/about.php">About</a></li>
     <li><a href="../db/signup/signupu.php">Sign Up</a></li>
    <li><a href="../login/login.php"">Login</a></li>
		

   
		
</ul>
	
</div>
<div id="display1">
<div id="cont">
<div id="sup1">
<div id="lavel">
SignUp 
<form name="frm" action=" " method="post" >
 <?php if (isset($msg3)) {echo $msg3;}?> 
<input type="hidden" id="uname" value="user" name="role"><br>
 <input type="text" name="name" id="name" placeholder="User Name"  /><br>
    <span id="result"></span><br>
    <?php if (isset($msg1)) {echo $msg1;}?>  
<input type="text" id="email" placeholder="Email" name="email" ><br>
  <span></span>
       <?php if (isset($msg2)) {echo $msg2;}?> 
<input type="password" id="password" placeholder="Password" name="password" ><br>
<input type="number" id="mobile" placeholder="Mobile" name="mobile" ><br>
<input type="text" id="address" placeholder="Address" name="address" ><br>

Gender: <select name="gender" id="gender" >
<option value="">Choose gender</option>
<option value="f">Male</option>
<option value="m">femele</option>
<option value="o">other</option>
</select>

<input type="Submit" value="Submit" name="btn-signup" onClick="return val();" ><br>
</form>
</div>
</div>
</div>
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
