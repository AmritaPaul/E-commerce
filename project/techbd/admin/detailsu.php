<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>home</title>
<link rel="icon" type="image/png/jpg" href="image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="../user/style.css">
<script>
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
<div id="container">
<div id="header">
<div id="logo">
<img src="../image/logo.jpg" />
</div>
<div id="hline">techbd</div>
<div id="sbox">
<form method="post"  action="search.php">
<input id="search" name="search" type="text" placeholder="Search for product & brand"  />
<input id="submit" name="btn" type="submit" value="Search"/>
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
                    <li><a href="../user/add_oproduct.php">Add Product</a></li>
                   </ul>
			</li>	
	<li class="sub-menu sub-menu-1"><a href="#">Exchange </a>
				<ul class="sub-menu-layout sub-menu-layout-1">
					<li><a href="../exchange/pchd.php">Pc Hardware</a></li>
                    <li><a  href="../exchange/mobile.php">Mobile</a></li>
                    <li><a href="../exchange/electronics.php">Electronices</a></li>
					<li><a href="../exchange/other.php">Others</a></li>
                    <li><a href="../exchange/add_eproduct.php">Add Product</a></li>
				</ul>
			</li>			
    <li><a href="../user/add_oproduct.php">Sell By Techbd</a></li>
	<li><a href="../user/f_page/about.php">About</a></li>
     <li><a href="../db/signup/signupu.php">Sign Up</a></li>
    <li><a href="../login/login.php"">Login</a></li>
		

   
		
</ul>
	
</div>


<div id="view">
<?php
$id=$_GET['id'];
include("../db/config.php");


$sql = "SELECT * FROM uprodinfo WHERE up_id='".$id."' ";
$query=mysqli_query($myconn,$sql);

while($row=mysqli_fetch_array($query) ) {
/*$prod_id= $row['op_id'];
$name= $row['op_name'];
$picpath=$row['img_path'];
$price=$row['op_price'];
$prodesc=$row['op_desc'];*/

$id1= $row['up_id'];
$pname=$row['up_name'];
$brand=$row['up_brand'];
$model=$row['up_model'];
$authentication=$row['up_authentication'];
$contact=$row['contact'];
$pprice=$row['up_price'];
$category=$row['up_category'];
$pdesc=$row['up_desc'];
$picpath=$row['img_path'];
//$qt=$row['np_qt'];

/*if($qt!=0){
	$qt="Avalible";
	
}
else{
	$qt= "NotAvalible";
	
}


*/


echo'


	
 	
	<div id="pn"><b>Product Name:</b>'.$pname.'</div>
	<div id="pig"><b>Product Image:</b></div><div id="pigm"><br><img src="../admin/'.$picpath.'" width="100%"height="100%" 							border="2px     solid color:gray"/> </div>
	<div id="pp"><b>Product price :</b>'.$pprice.'</div> 
	<div id="box">
	<b>Product Brand:</b>'.$brand.'<br> <br>
	<b>Product Model:</b>'.$model.'<br><br>
	<b>Product Authentication:</b>'.$authentication.'<br><br>
	<b>Product Contact:</b>'.$contact.'<br><br>
	<b>Product Category:</b>'.$category.'</div> 
	<div id="pd"><b>Product Description:</b>'.$pdesc.'</div>
	<div id="con"><img src="../image/contact.png" width="20%"height="20%""</div><div id="contt">'.$contact.'<br></div>
	 
	 
	 
	 
	 </table>
	 
	 
	 
	 
	 
	 </div>
	
	
   
   




';


}

?>


</div>
</div>
<div id="footer">
<div id="pt1">
<b>Techbd </b> &nbsp;&nbsp;&nbsp;&nbspAddress | Home | How to buy
<br /><hr />
<b>Payment System </b> &nbsp;&nbsp;&nbsp;&nbsp Replacement policy | Refund policy
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

</div>

</div>
<div id="#">

</div>
</div>
</body>
</html>
