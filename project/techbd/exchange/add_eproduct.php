<?php


?>

<?php
include('../login/session.php');
	error_reporting( ~E_NOTICE ); 
	
	require_once 'dbconfig.php';
	
	if(isset($_POST['btnsave']))
	{   $cu_id = $_POST['cu_id'];
		$pname = $_POST['pname'];
		$brand = $_POST['brand'];
		$model = $_POST['model'];
		$contact = $_POST['contact'];
		$wp = $_POST['wp'];
		$authentication = $_POST['authentication'];
		$category = $_POST['category'];
		$pdesc = $_POST['pdesc'];
		$pcondition = $_POST['pcondition'];
	
		
	
		
		$imgFile = $_FILES['p_image']['name'];
		$tmp_dir = $_FILES['p_image']['tmp_name'];
		$imgSize = $_FILES['p_image']['size'];
		
		
		if(empty($pname))
		{
			$errMSG = "Please Enter product name.";
		}
		
	
		else
		{
			$upload_dir = 'prodimg/';
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); 
		
		
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
		
		
			$userpic = rand(1000,1000000).".".$imgExt;
				
	
			if(in_array($imgExt, $valid_extensions))
			{			
			
				if($imgSize < 5000000)				
				{
					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
				}
				else
				{
					$errMSG = "Sorry, your file is too large.";
				}
			}
			else
			{
				$errMSG = "Sorry, setct image  only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		}
		
		
		
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO eprodinfo(ep_name,ep_brand,ep_model,contact,ep_want,ep_authentication,ep_category,ep_desc,p_image,cu_id,ep_condition) VALUES(:uname,:brand,:model,:contact,:wp,:auth,:cat,:pdesc,:upic,:cid,:pcon)');
			$stmt->bindParam(':uname',$pname); 
			$stmt->bindParam(':brand',$brand);
			$stmt->bindParam(':model',$model);
		    $stmt->bindParam(':contact',$contact);
			$stmt->bindParam(':wp',$wp);
			$stmt->bindParam(':auth',$authentication);
		    $stmt->bindParam(':cat',$category);
			$stmt->bindParam(':pdesc',$pdesc);
			$stmt->bindParam(':upic',$userpic);
			$stmt->bindParam(':cid',$cu_id);
			$stmt->bindParam(':pcon',$pcondition);
			
			
			
			
			
			
	
	
		
			
			if($stmt->execute())
			{
				$successMSG = "new record succesfully inserted ...";
				header("refresh:2;view.php"); 
			}
			else
			{
				$errMSG = "error while inserting....";
			}
		}
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add product</title>
<link rel="icon" type="image/png/jpg" href="../image/logo.jpg" />
<link rel="stylesheet" type="text/css" href="../style.css" >
<link rel="stylesheet" type="text/css" href="../user/style1.css" >
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

var C = document.getElementById("brand");
if(C.value== "" || C.value== null) {
alert("Please enter product brand ");
C.style.border = "2px solid red";
return false;
} else {
C.style.border = "";
}
var D = document.getElementById("model");
if(D.value== "" ||D.value== null) {
alert("Please enter  product model");
D.style.border = "2px solid red";
return false;
} else {
D.style.border = "";
}
var F = document.getElementById("contact");
if(F.value== "" || F.value== null) {
alert("Please enter contact");
F.style.border = "2px solid red";
return false;
} else {
F.style.border = "";
}
var G = document.getElementById("wp");
if(G.value== "" || G.value== null) {
alert("Please enter wanted product");
G.style.border = "2px solid red";
return false;
} else {
G.style.border = "";
}
var K = document.getElementById("pcondition");
if(K.value== "" || K.value== null) {
alert("Please Product condition old or new");
K.style.border = "2px solid red";
return false;
} else {
K.style.border = "";
}

var E = document.getElementById("authentication");
if(E.value== "" || E.value== null) {
alert("Please enter  product authentication");
E.style.border = "2px solid red";
return false;
} else {
E.style.border = "";
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


var H = document.getElementById("file_img");
if(H.value== "" || H.value== null) {
alert("Please select product image");
H.style.border = "2px solid red";
return false;
} else {
H.style.border = "";
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
			include('../search/head.php');
		?>
	</header>
	
<?php
			include('../menu/user_menu.php');
		?>
<div id="display1">
<div id="cont">
<div id="sup1">
<div id="lavel">
<?php
	error_reporting( ~E_NOTICE );
	if(isset($errMSG))
	{
			?>
            <div>
            	<span></span> <strong><?php echo $errMSG; ?></strong>
            </div>
            <?php
	}
	
	else if(isset($successMSG))
	{
		?>
        <div>
              <strong><span></span> <?php echo $successMSG; ?></strong>
        </div>
        <?php
	}
	?>   

<form method="post" enctype="multipart/form-data" onsubmit="return validate()">
<h2>Add Product</h2>
	
	
   

<input type="text" id="pname" placeholder="Product Name" value="<?php echo $pname; ?>" name="pname"><br>
<input type="text" id="brand" placeholder="Product Brand" value="<?php echo $brand; ?>" name="brand"><br>
<input type="text" id="model" placeholder="Product Model" value="<?php echo $model; ?>" name="model"><br>
<input type="number" id="contact" placeholder="Contact" value="<?php echo $contact; ?>" name="contact"><br>
<input type="text" id="wp" placeholder="Wanted Product "value="<?php echo $wp; ?>" name="wp"><br>

Condition:&nbsp&nbsp;&nbsp;&nbsp;&nbsp;<select name="pcondition"value="<?php echo $pcondition; ?>" id="pcondition">
<option value="">Choose Condition</option>
<option value="old">Old</option>
<option value="new">New</option>
</select>
 Authentication:<select name="authentication" id="authentication"value="<?php echo $authentication; ?>" style="width:100px">
<option value="">Choose Condition</option>
<option value="Copy">Copy</option>
<option value="Original">Original</option>
</select><br>

Category:&nbsp&nbsp;&nbsp;&nbsp;&nbsp; <select name="category" id="category" value="<?php echo $category; ?>" style="width:100px">
<option value="">Choose category</option>
<option value="pc hardware">Pc Hardware</option>
<option value="mobile">Mobile</option>
<option value="electronices">Electronices</option>
<option value="other">other</option>
</select>
<p>Product Description</p> <textarea name="pdesc" id="pdesc"  value="<?php echo $pdesc; ?>" placeholder="Description" "rows="20" cols="55"></textarea><br>


    
 Image:<input type="file" name="p_image" accept="image/*"  /><br>
     

 <input type="hidden" id="cu_id" value="<?php echo''.$id.''; ?><?php echo $cu_id; ?>" name="cu_id"><br>   
 <div><input type="submit" name="btnsave" button id="addnewprouct" value="Add product"   ></button> </div> 
    
</form>
</div>
</div>
</div>
</div>
<div id="footer1">
<?php
			include('../footer/footer.php');
		?>



</div>
</div>
</body>
</html>
