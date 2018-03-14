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
<title>Add_slider</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="../search/style5.css" type="text/css">

<link rel="icon" type="../image/png/jpg" href="../image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="../user/style1.css">



<script type="text/javascript">
function validat() {

var B = document.getElementById("search");
if(B.value== "" || B.value== null) {
alert("Please enter a product name or id or brand or price ");
B.style.border = "2px solid red";
return false;
} else {
B.style.border = "";
}
}
function validate() {

var B = document.getElementById("pname");
if(B.value== "" || B.value== null) {
alert("Please enter a product name");
B.style.border = "2px solid red";
return false;
} else {
B.style.border = "";
}

var B = document.getElementById("file_img");
if(B.value== "" || B.value== null) {
alert("Please Select Image ");
B.style.border = "2px solid red";
return false;
} else {
B.style.border = "";
}






  var z= confirm("Sure you would like to submit information");
    if(z==true)
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
<div id="display2">
<div id="sup1">
<div id="lavel">
<form id="product" name="product" method="post" 
action="insertoproduct.php" enctype="multipart/form-data" onsubmit="return validate()"> 
<h2>Add Image For Slider</h2><br>
<input type="text" id="pname" placeholder="Banner Name" name="pname"><br>
<input type="file" name="file_img" id="file_img" ><br>

    <div><input type="submit" name="btn_upload" button id="addnewprouct" value="Submit"   ></button> </div>
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