<?php
include('../login/session.php');


$id=$_GET['id'];
include("../db/config.php");


$sql = "SELECT * FROM nprodinfo WHERE np_id='".$id."' ";
$query=mysqli_query($myconn,$sql);

while($row=mysqli_fetch_array($query) ) {
/*$prod_id= $row['op_id'];
$name= $row['op_name'];
$picpath=$row['img_path'];
$price=$row['op_price'];
$prodesc=$row['op_desc'];*/

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
	<from>
	<input type="text" id="cu_id" value='.$id1.' name="cu_id"><br>
    <input type="text" id="pname" placeholder="Product Name" name="pname"><br>
	<input type="button" value="Add To Cart " name="cart">
	 
	 
	</form>
	 
	 
	 
	 
	 
	 </div>
	
	
   
   




';


}

?>

