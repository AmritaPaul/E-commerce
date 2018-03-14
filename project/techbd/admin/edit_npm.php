<?php
include("../login/session.php");
if($login_role=='admin'){
 header('location:../admin/admin.php');
}
if($login_role=='user'){
 header('location:../user/user.php');
}
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="../search/style5.css" type="text/css">
<link rel="icon" type="../image/png/jpg" href="../image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="../user/style1.css">

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
</script>
</head>

<body>
<div id="container1">
<header> <?php
			include('../search/head.php');
		?>

</header>
<?php
			include('../menu/moderator.php');
		?>

<div id="display2">


<div id="sup1">

<?php

	error_reporting( ~E_NOTICE );
	
	require_once 'dbconfig.php';
	
	if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
	{
		$id = $_GET['edit_id'];
		
		$stmt_edit = $DB_con->prepare('SELECT np_name,np_brand,np_model,contact,np_price,np_authentication,np_category,np_desc,p_image,np_qt FROM nprodinfo WHERE 
		np_id =:uid');
		
		$stmt_edit->execute(array(':uid'=>$id)); 
		
		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
		extract($edit_row);
		
	}
	else
	{
		header("Location: view.php");
	}
	
	
	if(isset($_POST['btn_save_updates']))
	{
		$np_name = $_POST['pname'];
		$op_brand = $_POST['brand'];
		$op_model = $_POST['op_model'];
		$contact = $_POST['contact'];
		$op_price = $_POST['op_price'];
		$qt = $_POST['op_condition'];
		$op_authentication = $_POST['op_authentication'];
		$op_desc = $_POST['op_desc'];
		$qt = $_POST['qt'];
			
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
		$stmt = $DB_con->prepare('UPDATE nprodinfo SET np_name=:uname,np_brand=:brand,np_model=:mod,contact=:cont,np_price=:price,
		np_authentication=:auth,np_desc=:desc, p_image=:upic,np_qt=:qt WHERE np_id=:uid');
			$stmt->bindParam(':uname',$np_name);
			$stmt->bindParam(':upic',$userpic);
			$stmt->bindParam(':uid',$id);
			$stmt->bindParam(':brand',$op_brand);
			$stmt->bindParam(':mod',$op_model);
			$stmt->bindParam(':cont',$contact);
			$stmt->bindParam(':price',$op_price);
			$stmt->bindParam(':auth',$op_authentication);
			$stmt->bindParam(':desc',$op_desc);
			$stmt->bindParam(':qt',$qt);
		
				
			if($stmt->execute())
			{
				?>
                <script>
				
				window.location.href='viewm.php';
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

   <tr><td> <label>Product Name</label></td><td><input type="text" name="pname" value="<?php echo $np_name; ?>" required /></td></tr>
   

    
   <tr><td> <label>Product Brand:</td><td></label><input type="text" name="brand" value="<?php echo $np_brand; ?>" required /></td></tr>

<tr><td>Product Model:</td><td><input type="text" id="model" value='<?php echo $np_model; ?>' name="op_model"></td></tr>
<tr><td>Product Authentication:</td><td><input type="text" id="authentication" value='<?php echo $np_authentication; ?>' name="op_authentication"></td></tr>
 <tr><td> Product Description:</td><td><input type="text" id="authentication" value='<?php echo $np_desc; ?>' name="op_desc"></td></tr>
<tr><td> Contact:</td><td><input type="text" id="contact" value='<?php echo $contact; ?>' name="contact"></td></tr>

<tr><td>Product Price:</td><td><input type="number" id="pprice" value='<?php echo $np_price; ?>' name="op_price"></td></tr>
<tr><td>Product quantity:</td><td><input type="number" id="qt" value='<?php echo $np_qt; ?>' name="qt"></td></tr>
 
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
<?php
			include('../footer/footer.php');
		?>



</div>

</div>
</body>
</html>