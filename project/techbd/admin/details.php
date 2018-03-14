<?php




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Details</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="../search/style5.css" type="text/css">

<link rel="icon" type="image/png/jpg" href="image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="../user/style1.css">

    <link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../zoom/css/style.css">
<script>
function del() {
    
       var del= confirm("For sure Would you like to delete it?");
    if(del==true)
        { return true;}
    else 
        { return false;}
           }
</script>
<style>
#order{
	top: 80px;
    width: 130px;
    border-radius: 50px;
    margin-left: 0px;
    height: 40px;
    background: blue;
    color: white;
    font-weight: bold;
    line-height: 40px;
    position: absolute;
	
	
}
</style>
</head>

<body>
<div id="container1">
<header> <?php
			include('../search/head.php');
		?>

</header>
<?php
			include('../menu/admin.php');
		?>


<div id="display2">
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
$picpath=$row['p_image'];
$qt=$row['np_qt'];

if($qt!=0){
	$qtn="Available";
	
}
else{
	$qtn= "Not Available";
	
}





?>

 
	
    	
	<div id="pn"><b>Product Name:</b><?php echo''.$pname.''; ?></div>
	<div id="pig">
    
    
    <b>Product Image:</b>
    </div>
    <div id="pigm">
   <br>
   
   <div class="bzoom_wrap">
        <ul id="bzoom">
            <li>
                <img class="bzoom_thumb_image" src="<?php echo'prodimg/'.$picpath.''; ?> "title="first img" />
                <img class="bzoom_big_image" src="<?php echo'prodimg/'.$picpath.''; ?>"  "/>
            </li>
          
        </ul>
    </div>
 
   
   
   
   
   </div>
	
    
    
    
    
    
    <div id="pp"><b> Product Price:</b><?php echo''.$pprice.''; ?>TK</div> 
	<div id="box1">
	<b>Product Brand:</b><?php echo''.$brand.''; ?><br> <br>
	<b>Product Stock Quantity:</b>&nbsp;&nbsp;<?php echo''.$qt.''; ?><br> <br>
	<b>Product Stock status:</b><?php echo''.$qtn.''; ?><br> <br>
	<b>Product Model:</b><?php echo''.$model.''; ?><br><br>
	<b>Product Authentication:</b><?php echo''.$authentication.''; ?><br><br>
	<b>Product Contact:</b><?php echo''.$contact.''; ?><br><br>
	<b>Product Category:</b><?php echo''.$category.''; ?></div> 
	<div id="pd1"><b>Product Description:</b><?php echo''.$pdesc.''; ?></div>
	<div id="con"><img src="../image/contact.png" width="20%"height="20%""</div><div id="contt"><?php echo''.$contact.''; ?><br></div>
	
	
	
   
   




<?php


}

?>
 
	<div id="order1">
	
	 <a href="../user/check_cart.php?id=<?php echo''.$id.''?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../image/green-add-to-cart-button-hi.png" width="120px" height="30px" /></a>
	

	 
	 
	 </div>

</div>
<div id="scomm">
<h2>Comments</h2>
<?php
$sql5 = "SELECT * FROM comment WHERE np_id='".$id."' ";
$query5=mysqli_query($myconn,$sql5);

while($row1=mysqli_fetch_array($query5) ) {
	$name=$row1['cu_name'];
    $comment=$row1['comment'];
	echo''.$name.':'.$comment.'<br><br><hr>';
	
}

?>
</div>
<div id="comm">
<form id="product" name="product" method="post" 
action="incomment.php?id=<?php echo''.$id.'';?>" enctype="multipart/form-data" onsubmit="return validate()"> 

<input type="text" id="name" placeholder=" Name" name="name"><br>

</select>
<p>Comment</p> <textarea name="coment" id="pdesc"  "rows="3" cols="60"></textarea>


    <div><input type="submit" name="btn_upload" button id="addnewprouct" value="Submit"   ></button> </div>
    </form>

</div>
</div>
<div id="footer1">
<?php
			include('../footer/footer.php');
		?>

</div>
</div>
<script type="text/javascript" src="../zoom/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="../zoom/js/jqzoom.js"></script>
<script type="text/javascript">
$("#bzoom").zoom({
	zoom_area_width: 300,
    autoplay_interval :3000,
    small_thumbs :0,
    autoplay : false
});
</script>
</body>
</html>
