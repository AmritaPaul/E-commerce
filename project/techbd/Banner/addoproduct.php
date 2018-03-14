<?php
include('../login/session.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>home</title>
<link rel="icon" type="image/png/jpg" href="image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="style.css" >
<script type="text/javascript">
function validate() {
	
	
var B = document.getElementById("pname");
if(B.value== "" || B.value== null) {
alert("Please enter a product name");
B.style.border = "2px solid red";
return false;
} else {
B.style.border = "";
}

var C = document.getElementById("pcondition");
if(C.value== "" || C.value== null) {
alert("Please enter product condition old or new ");
C.style.border = "2px solid red";
return false;
} else {
C.style.border = "";
}
var K = document.getElementById("brand");
if(K.value== "" || K.value== null) {
alert("Please Product Brand");
K.style.border = "2px solid red";
return false;
} else {
K.style.border = "";
}
var D = document.getElementById("model");
if(D.value== "" ||D.value== null) {
alert("Please enter  product model");
D.style.border = "2px solid red";
return false;
} else {
D.style.border = "";
}
var E = document.getElementById("authentication");
if(E.value== "" || E.value== null) {
alert("Please enter  product authentication");
E.style.border = "2px solid red";
return false;
} else {
E.style.border = "";
}
var F = document.getElementById("contact");
if(F.value== "" || F.value== null) {
alert("Please enter seller contact");
F.style.border = "2px solid red";
return false;
} else {
F.style.border = "";
}
var G = document.getElementById("pprice");
if(G.value== "" || G.value== null) {
alert("Please enter product price");
G.style.border = "2px solid red";
return false;
} else {
G.style.border = "";
}

var H = document.getElementById("file_img");
if(H.value== "" || H.value== null) {
alert("Please select product image");
H.style.border = "2px solid red";
return false;
} else {
H.style.border = "";
}
var combo1 = document.getElementById("category")
if(combo1.value == null || combo1.value == "") {
alert("Please select a category");
document.getElementById("category").style.border = "2px solid red";
return false;
} else {
document.getElementById("category").style.border = "";
}
var J = document.getElementById("pdesc");
if(J.value== "" || J.value== null) {
alert("Please enter product description");
J.style.border = "2px solid red";
return false;
} else {
J.style.border = "";
}




  var z= confirm("Sure you would like to submit information");
    if(z==true)
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
<img src="image/logo.jpg" />
</div>
<div id="hline">techbd</div>
<div id="sbox">
<form>
<input id="search" name="search" type="text" placeholder="Search for product & brand"  />
<input id="submit" name="btn" type="submit" value="Search"/>
</form>

</div>

<div id="cart">
<input id="cart1" name="cart" type="submit" value="cart"/>
</div>

</div>
<div id="menu">
<ul class="main-menu">
			<li><a href="../home.php">Home</a></li>
			<li class="sub-menu sub-menu-1"><a href="#">New Products</a>
				<ul class="sub-menu-layout sub-menu-layout-1">
					<li><a href="#">Antivirus</a></li>
                    <li><a href="#">Adobe Premire</a></li>
                    <li><a href="#">PC Hardware</a></li>
					<li class="sub-menu sub-menu-2"><a href="#">Artifacial Intelligency</a>
						<ul class="sub-menu-layout sub-menu-layout-2">
							<li><a href="#">Ardunio</a></li>
							<li><a href="#">Sensor</a></li>
							<li><a href="#">motorl</a></li>
						</ul>
					</li>
					<li><a href="#">Others</a></li>
				</ul>
			</li>
				
     <li><a href="#">Old Products</a>
	<li class="sub-menu sub-menu-1"><a href="#">Exchange Products</a>
				<ul class="sub-menu-layout sub-menu-layout-1">
					<li><a href="#">Pc Hardware</a></li>
                    <li><a href="#">Mobile</a></li>
                    <li><a href="#">Electronices</a></li>
					<li><a href="#">Others</a></li>
				</ul>
			</li>			
   
	<li><a href="">About</a></li>
    
   
     <li><a href="../login/logout.php">Logout</a></li>
		
</ul>
	
</div>
<div id="cont">
<div id="sbox">
<form>
<input id="search" name="search" type="text" placeholder="Search for product & brand"  />
<input id="submit" name="btn" type="submit" value="Search"/>
</form>
</div>
<div id="sup">
<form id="product" name="product" method="post" 
action="insertoproduct.php" enctype="multipart/form-data" onsubmit="return validate()"> 
Add Product<br>
<input type="hidden" id="cu_id" value="<?php echo''.$id.''; ?>" name="cu_id"><br>
<input type="text" id="pname" placeholder="Product Name" name="pname"><br>
<input type="text" id="pcondition" placeholder="Product Condition" name="pcondition"><br>
<input type="text" id="brand" placeholder="Product Brand" name="brand"><br>
<input type="text" id="model" placeholder="Product Model" name="model"><br>
<input type="text" id="authentication" placeholder="Product Authentication " name="authentication"><br>
<input type="text" id="contact" placeholder="Contact" name="contact"><br>
<input type="text" id="pprice" placeholder="Product Price" name="pprice"><br>
<input type="file" name="file_img" id="file_img" ><br>
Category <select name="category" id="category">
<option value="">Choose category</option>
<option value="pc hardware">Pc Hardware</option>
<option value="mobile">Mobile</option>
<option value="electronices">Electronices</option>
<option value="other">other</option>
</select>
<p>Product Description</p> <textarea name="pdesc" id="pdesc"  "rows="3" cols="40"></textarea>


    <div><input type="submit" name="btn_upload" button id="addnewprouct" value="Add new product"   ></button> </div>
    </form>
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
