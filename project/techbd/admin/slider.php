<?php
include("../login/session.php");
if($login_role=='user'){
 header('location:../user/user.php');
}
if($login_role=='moderator'){
 header('location:../moderator/moderator.php');
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Slider</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="../search/style5.css" type="text/css">

<link rel="icon" type="../image/png/jpg" href="../image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="../user/style1.css">



<script type="text/javascript">
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


<div id="container1">

<header>

 <?php
			include('../search/head.php');
		?>

</header>
<?php
			include('../menu/admin.php');
		?>
<div id="display4">
<?php

include('../db/config.php');
$page=0;
$show=3;
if(isset($_POST["page"]))
{
 $page=$_POST["page"];
 $page=($page*$show)-$show;//counting for 9 image is displayed in one page
}
$sql="SELECT * FROM `banner` ORDER BY `banner`.`b_id` DESC   limit $page,$show";
$res = mysqli_query($myconn,$sql);//set limit to display 9 images
echo'<table width="100%" border="1px" cellspacing="0" bgcolor="#0066FF" cellpadding="6">
<tr>

<td width="19%" valign="top"> &nbsp;&nbsp;&nbsp;Slider Id</td>
<td width="22%" valign="top"> &nbsp;&nbsp;&nbsp;Slider Image </td>
<td width="19%" valign="top"> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Action</td>
</tr></table>';

while($row=mysqli_fetch_array($res))
{
$id= $row['b_id'];
$path=$row['img_path'];



 ?>
   <?php echo' <table width="100%" border="1px" bgcolor="#CCCCFF" cellspacing="0" cellpadding="6">

<tr>
	<td width="20%" valign="top">'.$id.'</td>
 	<td width="20%" valign="top">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<img src="../Banner/'.$path.'" width="200px" height="100px" ></td>
	
   <td width="20%" valign="top"><a href="../Banner/delete.php?id='.$id.'"style="color:red;"> &nbsp;&nbsp;&nbsp;<input type="image" src="../image/button_delete.png" width="60px" height="20px" onclick="return del()"> </td></a>
	
    
</tr>


</table>

';?>
    <?php
}
$sql2="SELECT * FROM `banner` ORDER BY `banner`.`b_id` DESC";
$res1 = mysqli_query($myconn,$sql2);
$count=mysqli_num_rows($res1);//use for count how many images in database
$a=$count/$show;
$a=ceil($a);//ceil function is used to round up figure
echo "<br><br><br><br><br><br>";
?>
<form method="post">&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;
<?php
for($b=1;$b<=$a;$b++)
{
 ?>
    <input type="submit" value="<?php echo $b;?>" name="page">
    <?php
}?>


</div>

<div id="footer1">
<?php
			include('../footer/footer.php');
		?>


</div>

</div>
</body>
</html>