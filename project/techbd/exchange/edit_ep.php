<?php
include('../login/session.php');


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
<title>Edit</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="../search/style5.css" type="text/css">

<link rel="icon" type="image/png/jpg" href="../image/logo.jpg" />
<link rel="stylesheet" type="text/css" href="../style.css" >
<link rel="stylesheet" type="text/css" href="../user/style1.css" >
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
			include('../search/head.php');
		?>
	</header>
	
<?php
			include('../menu/user.php');
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
		
		$stmt_edit = $DB_con->prepare('SELECT ep_name,ep_brand,ep_model,contact,ep_want,ep_authentication,ep_category,ep_desc,p_image,ep_condition FROM eprodinfo WHERE 
		ep_id =:uid');
		
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
		$op_name = $_POST['pname'];
		$op_brand = $_POST['brand'];
		$op_model = $_POST['op_model'];
		$contact = $_POST['contact'];
		$want = $_POST['want'];
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
		$stmt = $DB_con->prepare('UPDATE eprodinfo SET ep_name=:uname,ep_brand=:brand,ep_model=:mod,contact=:cont,ep_want=:want,
		ep_condition=:cond,ep_authentication=:auth,ep_desc=:desc,
										     p_image=:upic 
								       WHERE ep_id=:uid');
			$stmt->bindParam(':uname',$op_name);
			$stmt->bindParam(':brand',$op_brand);
			$stmt->bindParam(':upic',$userpic);
			$stmt->bindParam(':uid',$id);
			$stmt->bindParam(':mod',$op_model);
			$stmt->bindParam(':cont',$contact);
			$stmt->bindParam(':want',$want);
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




	

<form method="post" enctype="multipart/form-data"  >
	
    
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
   <center>
   <h2>Upadate product Information</h2> </center>
<table>

   <tr><td> <label>Product Name</label></td><td><input type="text" name="pname" value="<?php echo $ep_name; ?>"  /></td></tr>
   
 <tr><td> <label>Product Brand:</td><td></label><input type="text" name="brand" value="<?php echo $ep_brand; ?>"  /></td></tr>
    
 

<tr><td>Product Model:</td><td><input type="text" id="op_model" value='<?php echo $ep_model; ?>' name="op_model"></td></tr>
<tr><td>Product Authentication:</td><td><input type="text" id="op_authentication" value='<?php echo $ep_authentication; ?>' name="op_authentication"></td></tr>
 <tr><td> Product Description:</td><td><input type="text" id="op_desc" value='<?php echo $ep_desc; ?>' name="op_desc"></td></tr>
<tr><td> Contact:</td><td><input type="number" id="contact" value='<?php echo $contact; ?>' name="contact"></td></tr>

<tr><td> Wanted Product:</td><td><input type="text" id="want" value='<?php echo $ep_want; ?>' name="want"></td></tr>
 
 <tr><td> Product Condition:</td><td><input type="text" id="op_condition" value='<?php echo $ep_condition; ?>' name="op_condition"></td></tr>
    	<tr><td><label>Product Img.</label></td><td>
       
        	<p><img src="prodimg/<?php echo $p_image; ?>" height="100" width="100" /></p></td></tr>
        	<tr><td>Select Image :</td><td><input type="file" name="p_image" accept="image/*" /></td></tr>
    
 
    
    </table>
     
   <input  type="submit" name="btn_save_updates" id="addnewprouct" value="Update">
    
        </button>
        
       
        
 
    
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
