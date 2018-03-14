<?php
error_reporting(0);
session_start();
if(isset($_SESSION['login_user'])){
 if($_SESSION['role']=='admin'){
 header('location:../admin/admin.php');
 }
 if($_SESSION['role']=='user'){
  header('location:../user/user.php');
 }
 if($_SESSION['role']=='moderator'){
  header('location:../moderator/moderator.php');
 }
}
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>home</title>
<link rel="icon" type="image/png/jpg" href="../image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="../style.css">
<script>
    function validateForm() {
    var A = document.forms["myForm"]["username"].value;
    var B = document.forms["myForm"]["password"].value;
	
    if (A == "") {
        alert("Username must be filled out");
        return false;
            }
			 if (B == "") {
        alert("Password must be filled out");
        return false;
            }
	
}

</script>
</head>

<body>
<div id="container1">
<div id="header">
<div id="acc">
<a href="../login/login.php"><img src="../image/Microsoft_Account.svg.png" width="40px" height="40px" /></a>
</div>

<div id="hline">Techbd</div>
<div id="sbox">
<form method="get"  action="../user/search.php">
<input id="search" name="search" type="text" placeholder="What are you loocking for?" required="required"  />
<input class="searchbt" type="image" src="../image/search-button-clipart-1.jpg" width="20px" height="20px" id="submit" name="btn" />
</form>



</div>

<div id="btn"><a href="../user/order.php"><img src="../image/cart-icon.jpg" style="width:40px;height:40px; border-radius:50%" />
</a></div>



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
							<li><a href="../display_product/motor.php">motor</a></li>
						</ul>
					</li>
					<li><a href="../display_product/other.php">Others</a></li>
				</ul>
			</li>
				
    <li><a href="../view_all_p/view_o.php">Old Product</a></li>
	<li><a href="../view_all_p/view.php">Exchange Product</a></li>	
  <li><a href="../db/signupu.php">Create Account</a></li>
	<li><a href="../f_page/about.php">About</a></li>
		
</ul>
	
</div>
<div id="cont">
<div id="sup">
<h1>Login</h1>


<form  name="myForm" action="" method="post"  onsubmit="return validateForm()";>

<input type="text" id="uname" placeholder="User Name" name="username"><br>

<input type="password" id="password" placeholder="Passwors" name="password"><br>
<div><h3 style="color:#FFF"><a href="../db/signup/signupu.php">Create Account</a></h3></div>
<div><h3 style="color:#FFF"><a href="forgetpass.php">Forget Password</a></h3></div>


    <div><input type="submit" name="submit"  value="LogIn"   ></button> </div>
    </form>

<?php
include("connect.php");
if(isset($_POST['submit'])){
 $username=$_POST['username'];
 $password=$_POST['password'];
 
 
 

 $password=md5($password);
 
 
 $sql="SELECT*FROM userinfo WHERE username='$username' AND password='$password' ";
 $result=mysqli_query($myconn,$sql);


 $row=mysqli_num_rows($result);

 $userinfo=mysqli_fetch_assoc($result);
 $role=$userinfo['role'];
$cu_id=$userinfo['cu_id'];
$username=$userinfo['username'];

  


 if($row==1  ){
  $_SESSION['login_user']=$username;
  $_SESSION['cu_id']=$cu_id;
  $_SESSION['role']=$role;
 
  
 
  if($role=='admin'){
     
 header('location:../admin/admin.php');
  }
    
 

  if($role=='user'){
   
  header('location:../user/user.php');
  }
 
  if($role=='moderator'){
  
	
 header('location:../moderator/moderator.php');
  }
  
 
 }
 else{
  echo "User name and Password invalid  ";
 }
 

 }
?>

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