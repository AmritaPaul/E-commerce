<?php
include('../login/session.php');

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
<link rel="stylesheet" href="style5.css" type="text/css">

<link rel="icon" type="image/png/jpg" href="../image/logo.jpg" />
<link rel="stylesheet" type="text/css" href="style.css" >
<script type="text/javascript">
function validate() {

var C = document.getElementById("quantity");
if(C.value== "" || C.value== null) {
alert("Please enter product quantity ");
C.style.border = "2px solid red";
return false;
} else {
C.style.border = "";
}
}
function calculation(){
	var quantity = document.getElementById('quantity').value;
	var unit_price = document.getElementById('unit_price').value;
	var result = (quantity * unit_price )
	var payment =  result.toFixed(2);
	payment = payment.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	document.getElementById('payment').innerHTML = "Total Price = TK"+payment;
}

</script>
</head>

<body>
<div id="container">

<header>
		<?php
			include('head.php');
		?>
	</header>
	
    <div id="search-layer"></div>

<?php
			include('user_menu.php');
?>
<div id="cont">
<div id="sup1">
<?php

$id2=$_GET['id'];

include("../db/config.php");


$sql1='SELECT * FROM `order` WHERE o_id='.$id2.' ORDER BY o_id DESC  ';
$query=mysqli_query($myconn,$sql1);
while($row=mysqli_fetch_array($query) ) {

$qt= $row['quantity'];

}
?>
<form id="product" name="product" method="post" 
action="insertcart.php" enctype="multipart/form-data" " onsubmit="return validate()"> 

<p>Quantity:<br> <input id="quantity" name="quantity"value="<?php echo''.$qt.''; ?>" type="number" min="1" max="1000000" name="qt" onchange="calculation()"></p>

    <div><input type="submit" name="btn_upload" button id="addnewprouct" value="Submit"   ></button> </div>
    </form>
</div>

</div>
<div id="footer">

<?php
			include('footer.php');
?>

</div>
</div>
</body>
</html>
