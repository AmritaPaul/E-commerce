<?php
include("../login/session.php");


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit_order</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="style5.css" type="text/css">

<link rel="icon" type="../image/png/jpg" href="../image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="style1.css">
<script type="text/javascript">
function validate() {
var A = document.getElementById("cu_id");
if(A.value== "" || A.value== null) {
alert("Please enter a user id");
A.style.border = "2px solid red";
return false;
} else {
A.style.border = "";
}
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

<div id="cont">
<div id="sup1">
<?php

	error_reporting( ~E_NOTICE );
	
	require_once 'dbconfig.php';
	
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		
		$stmt_edit = $DB_con->prepare('SELECT op_name,op_brand,op_model,contact,op_price,op_condition,op_authentication,op_category,op_desc,p_image FROM oprodinfo WHERE 
		op_id =:uid');
		
		$stmt_edit->execute(array(':uid'=>$id)); 
		
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
		
	}
	else
	{
		header("Location: ../home.php");
	}
	
	
	if(isset($_POST['btn_save_updates']))
	{
		$op_name = $_POST['pname'];
		$op_brand = $_POST['brand'];
		$op_model = $_POST['op_model'];
		$contact = $_POST['contact'];
		$op_price = $_POST['op_price'];
		$op_condition = $_POST['op_condition'];
		$op_authentication = $_POST['op_authentication'];
		$op_desc = $_POST['op_desc'];
			
		$imgFile = $_FILES['p_image']['name'];
		$tmp_dir = $_FILES['p_image']['tmp_name'];
		$imgSize = $_FILES['p_image']['size'];
					
		if($imgFile)
		{
			$upload_dir = 'prodimg/'; 
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); 
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); 
			$userpic = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 5000000)
				{
					unlink($upload_dir.$edit_row['p_image']);
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else
				{
					$errMSG = "Sorry, your file is too large it should be less then 5MB";
				}
			}
			else
			{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}	
		}
		else
		{
			
			$userpic = $edit_row['p_image']; 
		}	
						
		
	
		if(!isset($errMSG))
		{
		$stmt = $DB_con->prepare('UPDATE oprodinfo SET op_name=:uname,op_brand=:brand,op_model=:mod,contact=:cont,op_price=:price,
		op_condition=:cond,op_authentication=:auth,op_desc=:desc,
										     p_image=:upic 
								       WHERE op_id=:uid');
			$stmt->bindParam(':uname',$op_name);
			$stmt->bindParam(':brand',$op_brand);
			$stmt->bindParam(':upic',$userpic);
			$stmt->bindParam(':uid',$id);
			$stmt->bindParam(':mod',$op_model);
			$stmt->bindParam(':cont',$contact);
			$stmt->bindParam(':price',$op_price);
			$stmt->bindParam(':cond',$op_condition);
			$stmt->bindParam(':auth',$op_authentication);
			$stmt->bindParam(':desc',$op_desc);
		
				
			if($stmt->execute())
			{
				?>
                <script>
				
			window.location.href='view.php';
				</script>
                <?php
			}
			else
			{
				$errMSG = "Sorry Data Could Not Updated !";
			}
		
		}
		
						
	}
	
	
?>




	

<form method="post" enctype="multipart/form-data">
	
    
    <?php
	if(isset($errMSG))
	{
		?>
        <div>
          <span></span> &nbsp; <?php echo $errMSG; ?>
        </div>
        <?php
	}
	?>
   
    
<table>

   <tr><td> <label>Product Name</label></td><td><input type="text" name="pname" value="<?php echo $op_name; ?>" required /></td></tr>
   
 <tr><td> Product Condition:</td><td><input type="text" id="pcondition" value='<?php echo $op_condition; ?>' name="op_condition"></td></tr>
    
   <tr><td> <label>Product Brand:</td><td></label><input type="text" name="brand" value="<?php echo $op_brand; ?>" required /></td></tr>

<tr><td>Product Model:</td><td><input type="text" id="model" value='<?php echo $op_model; ?>' name="op_model"></td></tr>
<tr><td>Product Authentication:</td><td><input type="text" id="authentication" value='<?php echo $op_authentication; ?>' name="op_authentication"></td></tr>
 <tr><td> Product Description:</td><td><input type="text" id="authentication" value='<?php echo $op_desc; ?>' name="op_desc"></td></tr>
<tr><td> Contact:</td><td><input type="text" id="contact" value='<?php echo $contact; ?>' name="contact"></td></tr>

<tr><td>Product Price:</td><td><input type="number" id="pprice" value='<?php echo $op_price; ?>' name="op_price"></td></tr>
 
    	<tr><td><label>Product Img.</label></td><td>
       
        	<p><img src="prodimg/<?php echo $p_image; ?>" height="100" width="100" /></p></td></tr>
        	<tr><td>Select Image :</td><td><input type="file" name="p_image" accept="image/*" /></td></tr>
    
 
    
    </table>
     
   <input  type="submit" name="btn_save_updates" id="addnewprouct" value="Update">
    
        </button>
        
       
        
 
    
</form>
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