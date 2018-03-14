<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>order</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="../search/style5.css" type="text/css">

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
<header> <?php
			include('../search/head.php');
		?>

</header>
<?php
			include('../menu/admin.php');
		?>

<div id="view">
<?php
$id=$_GET['id'];
include("../db/config.php");


$sql = "SELECT * FROM nprodinfo WHERE np_id='".$id."' ";
$query=mysqli_query($myconn,$sql);

while($row=mysqli_fetch_array($query) ) {


$id1= $row['np_id'];
$pname=$row['np_name'];
$brand=$row['np_brand'];
$model=$row['np_model'];
$authentication=$row['np_authentication'];
$contact=$row['contact'];
$pprice=$row['np_price'];
$category=$row['np_category'];
$pdesc=$row['np_desc'];
$picpath=$row['img_path'];
$qt=$row['np_qt'];

if($qt!=0){
	$qt="Avalible";
	
}
else{
	$qt= "NotAvalible";
	
}





echo'


	
 	
	<div id="pn"><b>Product Name:</b>'.$pname.'</div>
	<div id="pig"><b>Product Image:</b></div><div id="pigm"><br><img src="../admin/'.$picpath.'" width="100%"height="100%" 							border="2px     solid color:gray"/> </div>
	<div id="pp"><b>Wanted Product :</b>'.$pprice.'</div> 

	<div id="box">
	<b>Product Brand:</b>'.$brand.'<br> <br>
	<b>Product Stock Quantity:</b>'.$qt.'<br> <br>
	<b>Product Model:</b>'.$model.'<br><br>
	<b>Product Authentication:</b>'.$authentication.'<br><br>
	<b>Product Contact:</b>'.$contact.'<br><br>
	<b>Product Category:</b>'.$category.'</div> 
	<div id="pd"><b>Product Description:</b>'.$pdesc.'</div>
	<div id="con"><img src="../image/contact.png" width="20%"height="20%""</div><div id="contt">'.$contact.'<br></div>
	 
	 <div id="cart">
	 <table border="2px bordercolor="#000000" bgcolor="#CCCCCC"">
	 <tr><td>Qunatity:<input type="number" value="qt" name="qt"></td></tr>
	 <tr><td><input type="button" value="Add To Cart " name="cart"</td></tr>
	 
	 
	 </table>
	 
	 
	 
	 
	 
	 </div>
	
	
   
   




';


}

?>


</div>
</div>
<div id="footer">
<?php
			include('../footer/footer.php');
		?>

</div>
</div>
</body>
</html>
