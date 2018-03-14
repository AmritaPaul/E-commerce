
<?php


include("../login/session.php");
?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>payment</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="style5.css" type="text/css">


<link rel="icon" type="../image/png/jpg" href="../image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="style1.css">




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
<div id="lavel">
<?php

$id2=$_GET['id'];

include("../db/config.php");


$sql1='SELECT * FROM `order` WHERE cu_id='.$id.' AND status=1 ORDER BY o_id DESC  ';
$query=mysqli_query($myconn,$sql1);
while($row=mysqli_fetch_array($query) ) {

$price= $row['t_price'];
$p_id= $row['p_id'];
$qn_or=$row['quantity'];

}
$sql2='SELECT * FROM `nprodinfo` WHERE np_id='.$p_id.'   ';
$query2=mysqli_query($myconn,$sql2);
while($row2=mysqli_fetch_array($query2) ) {

$qn_np=$row2['np_qt'];


}
$bl_qn=$qn_np-$qn_or;
?>
<form id="product" name="product" method="post" 
action="insertpay.php" enctype="multipart/form-data" > 
<input type="hidden"  value="<?php echo''.$id.''; ?>" name="cu_id"><br>
<input type="hidden"  value="<?php echo''.$id2.''; ?>" name="o_id"><br>
<input type="hidden"  value="<?php echo''.$p_id.''; ?>" name="p_id">

<h3>Payment by bKash </h3><br>

<h4>Send total <?php echo''.$id2.''; ?> TK in 01779218527 and insert here TrxID<h4>

<input type="hidden"  value="<?php echo''.$bl_qn.''; ?>" name="bl_qn">
<input type="number" placeholder="Enter TrxID" name="trxid" required ><br>

    <div><input type="submit" name="btn_upload" button id="addnewprouct" value="Submit"   ></button> </div>
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