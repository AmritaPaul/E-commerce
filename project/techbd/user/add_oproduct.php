<?php
include('../login/session.php');


	error_reporting( ~E_NOTICE ); // avoid notice
	
	require_once 'dbconfig.php';
	
	if(isset($_POST['btnsave']))
	{   $cu_id = $_POST['cu_id'];
		$pname = $_POST['pname'];// user name
		$brand = $_POST['brand'];
		$model = $_POST['model'];
		$contact = $_POST['contact'];
		$pprice = $_POST['pprice'];
		$pcondition = $_POST['pcondition'];
		$authentication = $_POST['authentication'];
		$category = $_POST['category'];
		$pdesc = $_POST['pdesc'];
	
		
	
		
		$imgFile = $_FILES['p_image']['name'];
		$tmp_dir = $_FILES['p_image']['tmp_name'];
		$imgSize = $_FILES['p_image']['size'];
		
		
		if(empty($pname))
		{
			$errMSG = "Please Enter product name.";
		}
		
	
		else
		{
			$upload_dir = 'prodimg/'; // upload directory
	
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
			$userpic = rand(1000,1000000).".".$imgExt;
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions))
			{			
				// Check file size '5MB'
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
				$errMSG = " Sorry, Select image only JPG, JPEG, PNG & GIF files are allowed.";		
			}
		}
		
		
		// if no error occured, continue ....
		if(!isset($errMSG))
		{
			$stmt = $DB_con->prepare('INSERT INTO oprodinfo(op_name,op_brand,op_model,contact,op_price,op_condition,op_authentication,op_category,op_desc,p_image,cu_id) VALUES(:uname,:brand,:model,:contact,:pprice,:pcon,:auth,:cat,:pdesc,:upic,:cid)');
			$stmt->bindParam(':uname',$pname); //PDOStatement::bindParam — Binds a parameter to the specified variable name.
			$stmt->bindParam(':brand',$brand);
			$stmt->bindParam(':model',$model);
		    $stmt->bindParam(':contact',$contact);
			$stmt->bindParam(':pprice',$pprice);
			$stmt->bindParam(':pcon',$pcondition);
			$stmt->bindParam(':auth',$authentication);
		    $stmt->bindParam(':cat',$category);
			$stmt->bindParam(':pdesc',$pdesc);
			$stmt->bindParam(':upic',$userpic);
			$stmt->bindParam(':cid',$cu_id);
			
			
			
			
			
	
	
		
			
			if($stmt->execute())
			{
				$successMSG = "new record succesfully inserted ...";
				header("refresh:2;view.php"); // redirects image view page after 5 seconds.
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
<title>home</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="style5.css" type="text/css">


<link rel="icon" type="../image/png/jpg" href="../image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" href="../notifiaction/notification-demo-style.css" type="text/css">
<script src="../notifiaction/jquery-2.1.1.min.js" type="text/javascript"></script>

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


function validate() {
	
	
var B = document.getElementById("pname");
if(B.value== "" || B.value== null) {
alert("Please enter a product name");
B.style.border = "2px solid red";
return false;
} else {
B.style.border = "";
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
var C = document.getElementById("pcondition");
if(C.value== "" || C.value== null) {
alert("Please enter product condition old or new ");
C.style.border = "2px solid red";
return false;
} else {
C.style.border = "";
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
	    
	
<center><h2>Add Product</h2>	</center>   
   
<input type="hidden" id="cu_id" value="<?php echo''.$id.''; ?><?php echo $cu_id; ?>" name="cu_id"><br> 
Product Name:&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="pname" placeholder="Product Name" value="<?php echo $pname; ?>" name="pname"><br>
Product Brand:&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="brand" placeholder="Product Brand" value="<?php echo $brand; ?>" name="brand"><br>
Product Model:&nbsp&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="model" placeholder="Product Model" value="<?php echo $model; ?>" name="model"><br>
Contact:&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" id="contact" placeholder="Contact" value="<?php echo $contact; ?>" name="contact"><br>
Product Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" id="pprice" placeholder="Product Price"value="<?php echo $pprice; ?>" name="pprice" ><br>
 Condition:&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="pcondition"value="<?php echo $pcondition; ?>" id="pcondition">
<option value="">Choose Condition</option>
<option value="old">Old</option>
<option value="new">New</option>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Authentication:<select name="authentication" id="authentication"value="<?php echo $authentication; ?>" style="width:100px">
<option value="">Choose Condition</option>
<option value="Copy">Copy</option>
<option value="Original">Original</option>
</select><br>

Category:&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name="category" id="category" value="<?php echo $category; ?>" style="width:100px">
<option value="">Choose category</option>
<option value="pc hardware">Pc Hardware</option>
<option value="mobile">Mobile</option>
<option value="electronices">Electronices</option>
<option value="other">other</option>
</select>
<p>Product Description</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <textarea name="pdesc" id="pdesc"  value="<?php echo $pdesc; ?>" placeholder="Description" "rows="20" cols="55"></textarea><br>
 Image:<input type="file" name="p_image" accept="image/*"  /><br>

    

     

 
 <div><input type="submit" name="btnsave" button id="addnewprouct" value="Add product"   ></button> </div> 
    
</form>
</div>
</div>
</div>
<div id="footer1">

<?php
			include('footer.php');
?>

</div>

</div>
</body>
</html>