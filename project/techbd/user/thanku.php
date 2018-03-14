
<?php

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Thank_you</title>
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

<div id="sms">
<center><h2 color:green>Thank You</h2></center>
<center><h3 color:green>Stay with Techbd .we will send you confirmation massage on your profile and mobile also </h3></center>
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