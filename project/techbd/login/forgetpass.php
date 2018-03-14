
<?php


?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forget_password</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="../user/style5.css" type="text/css">

<link rel="icon" type="../image/png/jpg" href="../image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="../user/style1.css">




<script type="text/javascript">
function val(){
if(frm.email.value=="")
{
	alert("Please enter the email");
	frm.email.focus();	
	return false;
}
if(frm.mobile.value=="")
{
	alert("Please enter the mobile");
	frm.mobile.focus();	
	return false;
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
	
    <div id="search-layer"></div>

<?php
			include('../menu/user_menu.php');
?>
<div id="display2">

<div id="sup1">
<div id="lavel">

 

<form name="frm" method="post" action="action.php" enctype="multipart/form-data" >

E-mail:<input type="text" name="email" placeholder=" Enter your e-mail"><br />
Mobile:<input type="text" name="mobile" placeholder="Enter your mobile number"><br />
<input type="submit" name="btn_upload" button id="addnewprouct" value="Submit" onClick="return val();"  ></button> 

</form>
</div>
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