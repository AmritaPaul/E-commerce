<?php
include('../login/session.php');
if($login_role=='user'){
 header('location:../user/user.php');
}
if($login_role=='moderator'){
 header('location:../moderator/moderator.php');
}
?>
<?php
	error_reporting( ~E_NOTICE ); 
	
	require_once 'dbconfig.php';
	
	if(isset($_POST['btnsave']))
	{   $cu_id = $_POST['cu_id'];
		$pname = $_POST['pname'];
		$brand = $_POST['brand'];
		$model = $_POST['model'];
		$contact = $_POST['contact'];
		$pprice = $_POST['pprice'];
		$authentication = $_POST['authentication'];
		$category = $_POST['category'];
		$pdesc = $_POST['pdesc'];
		$qt = $_POST['qt'];
	
		
	
		
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
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		}
		
		
		
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO nprodinfo(np_name,np_brand,np_model,contact,np_price,np_authentication,np_category,np_desc,p_image,np_qt) VALUES(:uname,:brand,:model,:contact,:pprice,:auth,:cat,:pdesc,:upic,:qt)');
			$stmt->bindParam(':uname',$pname); 
			$stmt->bindParam(':brand',$brand);
			$stmt->bindParam(':model',$model);
		    $stmt->bindParam(':contact',$contact);
			$stmt->bindParam(':pprice',$pprice);
			$stmt->bindParam(':auth',$authentication);
		    $stmt->bindParam(':cat',$category);
			$stmt->bindParam(':pdesc',$pdesc);
			$stmt->bindParam(':upic',$userpic);
			$stmt->bindParam(':qt',$qt);
			
			
			
			
			
	
	
		
			
			if($stmt->execute())
			{
				$successMSG = "new record succesfully inserted ...";
				header("refresh:1;view.php"); 
			}
			else
			{
				$errMSG = "error while inserting....";
			}
		}
	}

?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add_n_product</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="../search/style5.css" type="text/css">

<link rel="icon" type="../image/png/jpg" href="../image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="../user/style1.css">

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
var G = document.getElementById("pprice");
if(G.value== "" || G.value== null) {
alert("Please enter product price");
G.style.border = "2px solid red";
return false;
} else {
G.style.border = "";
}
var A = document.getElementById("qt");
if(A.value== "" || A.value== null) {
alert("Please enter product quantity");
A.style.border = "2px solid red";
return false;
} else {
A.style.border = "";
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



var H = document.getElementById("p_image");
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
 <header><?php
			include('../search/head.php');
		?>

</header>
<?php
			include('../menu/admin.php');
		?>

<div id="display2">


<div id="sup1">
<center><h2 style="color:green">Add Product </h2></center>
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
	    
	
	
   
   
<input type="text" id="pname" placeholder="Product Name" value="<?php echo $pname; ?>" name="pname"><br>
<input type="text" id="brand" placeholder="Product Brand" value="<?php echo $brand; ?>" name="brand"><br>
<input type="text" id="model" placeholder="Product Model" value="<?php echo $model; ?>" name="model"><br>
<input type="number" id="contact" placeholder="Contact" value="<?php echo $contact; ?>" name="contact"><br>
<input type="number" id="pprice" placeholder="Product Price"value="<?php echo $pprice; ?>" name="pprice"><br>
<input type="number" id="qt" placeholder="Product quantity"value="<?php echo $qt; ?>" name="qt" ><br>

 Authentication:<select name="authentication" id="authentication"value="<?php echo $authentication; ?>" style="width:100px">
<option value="">Choose Condition</option>
<option value="Copy">Copy</option>
<option value="Original">Original</option>
</select><br>

Category:&nbsp&nbsp;&nbsp;&nbsp;&nbsp; <select name="category" id="category" value="<?php echo $category; ?>" style="width:100px">
<option value="">Choose category</option>
<option value="pc_hdd">Pc Hardware</option>
<option value="adobe">Adobe</option>
<option value="antivirus">Antivirus</option>
<option value="motor">motor</option>
<option value="sensor">sensor</option>
<option value="arduino ">Arduino </option>
<option value="other">other</option>
</select>
<p>Product Description</p> <textarea name="pdesc" id="pdesc"  value="<?php echo $pdesc; ?>" placeholder="Description" "rows="20" cols="55"></textarea><br>

 Image:<input type="file" id="p_image" name="p_image" accept="image/*"  /><br>
    

     

 
 <div><input type="submit" name="btnsave" button id="addnewprouct" value="Add product"   ></button> </div> 
    
</form>
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