<?php
include('../login/session.php');
include("../db/config.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cart</title>
<link rel="icon" type="image/png/jpg" href="../image/logo.jpg" />
<link rel="stylesheet" type="text/css" href="../style.css" >
<link rel="stylesheet" type="text/css" href="style1.css" >
<script type="text/javascript">
function valid() {

var A = document.getElementById("search");
if(A.value== "" || A.value== null) {
alert("Please enter a product name or id or brand or price ");
A.style.border = "2px solid red";
return false;
} else {
A.style.border = "";
}
}
function validate() {

var B = document.getElementById("address");
if(B.value== "" || B.value== null) {
alert("Please enter delevery address");
B.style.border = "2px solid red";
return false;
} else {
B.style.border = "";
}

var C = document.getElementById("quantity");
if(C.value== "" || C.value== null) {
alert("Please enter product quantity ");
C.style.border = "2px solid red";
return false;
} else {
C.style.border = "";
}
}
function calculation(){
	var quantity = document.getElementById('quantity').value;
	var unit_price = document.getElementById('unit_price').value;
	var result = (quantity * unit_price )
	var payment =  result.toFixed(2);
	payment = payment.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	document.getElementById('payment').innerHTML = "Total Price = TK"+payment;
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
<form method="get" action="search.php" onsubmit="return valid()" >
<input id="search" name="search" type="text" placeholder="What are you loocking for?" />
<input type="image" src="../image/search-button-clipart-1.jpg" width="20px" height="20px" id="submit" name="btn" />
</form>


</div>

<div id="btn"><a href="order.php"><img src="../image/cart-icon.jpg" style="width:40px;height:40px; border-radius:50%" />
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
				
     <li><a href="../view_all_p/view_o.php">Old Products</a>
     
     
        
	<li class="sub-menu sub-menu-1"><a href="../view_all_p/view.php">Exchange Products</a>
					
   
	<li><a href="../f_page/about.php">About</a></li>
    
    
     <li><a href="../login/logout.php">Logout</a></li>
		
</ul>
	
</div>
<div id="display1">
<div id="cont">
<div id="sup1">
<div id="lavel">
<?php

if(isset($_POST['btn_upload']))
{
$id2=$_GET['id'];	

$id=$_POST['cu_id'];
$p_id=$_POST['p_id'];
$pname=$_POST['pname'];
$price=$_POST['price'];
$qtn=$_POST['quantity'];
//$address=$_POST['address'];
$total=$price*$qtn;

$sql = "SELECT * FROM nprodinfo WHERE np_id='".$id2."' ";
$query=mysqli_query($myconn,$sql);

while($row=mysqli_fetch_array($query) ) {

$qt=$row['np_qt'];


if($qt>=$qtn){
			$result3="INSERT INTO `order` ( `cu_id`, `p_id`, `p_name`, `quantity`, `t_price`,status) VALUES ( '$id', '$p_id', 				'$pname', '$qtn', '$total', '1');";
		$query3 = mysqli_query($myconn,$result3 );
		header("location:order.php");
	
}
else{
	echo'Sorry Avalible Product Quantity '.$qt.'';
	
}
}







}




?>
<?php

$id2=$_GET['id'];



$sql2 = "SELECT * FROM nprodinfo WHERE np_id='".$id2."' ";
$query2=mysqli_query($myconn,$sql2);

while($row=mysqli_fetch_array($query2) ) {

$id1= $row['np_id'];
$pname=$row['np_name'];
$pprice=$row['np_price'];
$qt=$row['np_qt'];


if($qt!=0){
	$qt="Avalible";
	
}
else{
	$qt= "NotAvalible";
	
}
}
?>
<form id="product" name="product" method="post" 
action="" enctype="multipart/form-data" " onsubmit="return validate()"> 

<input type="hidden"  value="<?php echo''.$id.''; ?>" name="cu_id"><br>
<input type="hidden"  value="<?php echo''.$id1.''; ?>" name="p_id"><br>
<input type="hidden"  value="<?php echo''.$pprice.''; ?>" name="price"><br>
<h3>Add Product</h3><br>
<p>Name:<?php echo''.$pname.''; ?></p>
<p>Unit price:<?php echo''.$pprice.''; ?>Tk</p>
<input type="hidden"  value="<?php echo''.$pname.''; ?>" name="pname"><br>
<p>Quantity:<br> <input id="quantity" name="quantity" type="number" min="1" max="1000000"  onchange="calculation()"></p>
 <input id="unit_price" type="hidden" min="0" max="100" value="<?php echo''.$pprice.''; ?>" step=".1" onchange="calculation()">
<h2 id="payment">00.00Tk</h2>

    <div><input type="submit" name="btn_upload" button id="addnewprouct" value="Submit"   ></button> </div>
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
