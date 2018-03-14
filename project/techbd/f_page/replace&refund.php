
<?php



?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>replace and refund policiy</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="../search/style5.css" type="text/css">

<link rel="icon" type="../image/png/jpg" href="../image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="../user/style1.css">




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
			include('../search/head.php');
		?>
	</header>
	
<?php
			include('../menu/user_menu.php');
		?>
<div id="display3">

<center><h2>Product Change Policy (Replacement Policy)</h2></center>
<br>
<br>

<div id="lavel">

Replacement Process:


If you find any kind of problems after receiving your product (such as physically damaged product, product does not function properly, product not same as displayed on image), you can receive replacement of your product. In such cases, please, inform us through an e-mail to complain@techbd.com or call us at 09612 007 007 (press 3) (9am-11pm). Please, note that techbd.com will bear all shipment charge for this type of replacement.

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