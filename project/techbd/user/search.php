
<?php



?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>search</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="style6.css" type="text/css">


<link rel="icon" type="../image/png/jpg" href="../image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="../bootstarp/css/bootstrap.min.css">
<script type="text/javascript" src="../bootstarp/js/bootstrap.min.js"></script>




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
function del() {
    
       var del= confirm("For sure Would you like to delete it?");
    if(del==true)
        { return true;}
    else 
        { return false;}
           }
</script>




</head>
<body a link="#FFFFFF">


<div id="container1">

<header>
		<?php
			include('../search/head.php');
		?>
	</header>
	
    <div id="search-layer"></div>
<?php
			include('../menu/user_menu.php');
?>
<div id="display2">
<?php


$conn=mysqli_connect("localhost","root","","techbd");
$set=$_GET['search'];

$set=strtolower($set);
if($set){
	
	
	
	
	
	$show="SELECT*FROM nprodinfo where np_name LIKE '%$set%' or np_id LIKE '%$set%' or np_category LIKE '%$set%' or np_brand  LIKE '%$set%' or np_price LIKE '%$set%'";
	$result=mysqli_query($conn,$show);?>
<div class="container">
<table class="table table-striped table-borderd table-hover">
<tr><td width="20%" valign="top">Product Id	</td>
<td width="20%" valign="top"> Product Name</td>
<td width="20%" valign="top"> Product image</td>
<td width="20%" valign="top">Product price  </td>
<td width="20%" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Action</td>
</tr></table>
	<?php while($rows=mysqli_fetch_array($result))
	
	{
		$id= $rows['np_id'];
$name= $rows['np_name'];
$picpath=$rows['p_image'];
$price=$rows['np_price'];

?><table class="table table-striped table-borderd table-hover"><?php


echo'<tr>
	<td width="20%" valign="top">'.$id.'</td>
 	<td width="20%" valign="top">'.$name.' </td>
	<td width="20%"> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<img src="../admin/prodimg/'.$picpath.'" width="50px"height="50px"/></td>
	<td width="20%" valign="top"> &nbsp;&nbsp;&nbsp;'.$price.'TK </td>

	<td width="20%" valign="top"><a href="../admin/details.php?id='.$id.'" style="color:green;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="../image/button_details.png"  width="70px" height="30px" /></td></a>


</tr>';?>


</table>

<?php
}


		
		
		
	}	 
	
	



else{
	
	echo"Nothing found";
}

?>
</div>
</div>
<div id="footer2">

<?php
			include('footer.php');
?>



</div>

</div>
</body>
</html>