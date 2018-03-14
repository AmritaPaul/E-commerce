<?php
include('../login/session.php');

?>
<?php

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
			$upload_dir = 'user_images/'; // upload directory
	
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
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";		
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
				header("refresh:5;index.php"); // redirects image view page after 5 seconds.
			}
			else
			{
				$errMSG = "error while inserting....";
			}
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Upload, Insert, Update, Delete an Image using PHP MySQL</title>
</head>
<body>

<div>


	<div>
    	<h1>add new user. <a href="index.php"><br> view all </a></h1>
    </div>
    

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

<form method="post" enctype="multipart/form-data">
	    
	
	
   
   
<input type="text" id="cu_id" value="<?php echo''.$id.''; ?><?php echo $cu_id; ?>" name="cu_id"><br> 
<input type="text" id="pname" placeholder="Product Name" value="<?php echo $pname; ?>" name="pname"><br>
<input type="text" id="brand" placeholder="Product Brand" value="<?php echo $brand; ?>" name="brand"><br>
<input type="text" id="model" placeholder="Product Model" value="<?php echo $model; ?>" name="model"><br>
<input type="number" id="contact" placeholder="Contact" value="<?php echo $contact; ?>" name="contact"><br>
<input type="number" id="pprice" placeholder="Product Price"value="<?php echo $pprice; ?>" name="pprice"><br>
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
 Image:<input type="file" name="p_image" accept="image/*" /><br>
Category:&nbsp&nbsp;&nbsp;&nbsp;&nbsp; <select name="category" id="category" value="<?php echo $category; ?>" style="width:100px">
<option value="">Choose category</option>
<option value="pc hardware">Pc Hardware</option>
<option value="mobile">Mobile</option>
<option value="electronices">Electronices</option>
<option value="other">other</option>
</select>
<p>Product Description</p> <textarea name="pdesc" id="pdesc"  value="<?php echo $pdesc; ?>" placeholder="Description" "rows="20" cols="55"></textarea><br>


    

     <button type="submit" name="btnsave">
        <span></span> &nbsp; save
        </button>

 
    
 
    
</form>
</div>

</body>
</html>