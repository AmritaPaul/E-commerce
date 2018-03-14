




<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User_info</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="../search/style5.css" type="text/css">


<link rel="icon" type="image/png/jpg" href="image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="../style.css">

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
			include('../menu/admin.php');
		?>


<div id="display3">
<center><h2 style="color:red";>User Information</h2></center>
<br>
<?php

?>

<?php

$conn = mysql_connect("localhost","root","");
mysql_select_db("techbd");//database name
$page=0;
$show=5;
if(isset($_POST["page"]))
{
 $page=$_POST["page"];
 $page=($page*$show)-$show;//counting for 9 image is displayed in one page
}
$res = mysql_query("SELECT * FROM userinfo limit $page,$show");//set limit to display 9 images
echo'<table width="100%" border=".5px" bgcolor="#0066FF" cellspacing="0" cellpadding="6">
<tr>

<td width="20%" valign="top"> &nbsp;&nbsp;&nbsp;User  Name</td>
<td width="20%" valign="top"> &nbsp;&nbsp;&nbsp; Eami Address</td>
<td width="20%" valign="top"> &nbsp;&nbsp;&nbsp;User Role  </td>
<td width="20%" valign="top"> &nbsp;&nbsp;&nbsp;Status	</td>
<td width="20%" valign="top"> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Action</td>
</tr></table>';

while($row=mysql_fetch_array($res))
{
$id= $row['cu_id'];
$name= $row['username'];
$email=$row['email'];
$role=$row['role'];
$status=$row['status'];
if($status==1){
	$status=" Active";
	
}
else{
	$status= "Block";
}
 ?>
   <?php echo' <table width="100%" bgcolor="#CCCCFF" border=".5px" cellspacing="0" cellpadding="6">

<tr>
	<td width="20%" valign="top">'.$name.'</td>
 	<td width="20%" valign="top">'.$email.' </td>
	<td width="20%" valign="top"> &nbsp;&nbsp;&nbsp;'.$role.' </td>
	<td width="20%" valign="top"> &nbsp;&nbsp;&nbsp;'.$status.' </td>
   <td width="20%" valign="top"><a href="action.php?id='.$id.'"style="color:red;"> &nbsp;&nbsp;&nbsp;<input type="image" src="../image/button_active-block.png" width="120px" height="20px" onclick="return del()"> </td></a>
	

</tr>


</table>

';?>
    <?php
}
$res1 = mysql_query("SELECT * FROM userinfo");
$count=mysql_num_rows($res1);//use for count how many images in database
$a=$count/$show;
$a=ceil($a);//ceil function is used to round up figure
echo "<br><br><br><br><br>";
?>
<form method="post">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
for($b=1;$b<=$a;$b++)
{
 ?>
    <input type="submit" value="<?php echo $b;?>" name="page">
    <?php
}?>
  


  

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