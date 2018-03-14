
<?php

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>home</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="style5.css" type="text/css">


<link rel="icon" type="../image/png/jpg" href="../image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="style1.css">
  <link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../zoom/css/style.css">


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

<div id="display2">
<?php
$id=$_GET['id'];
include("../db/config.php");


$sql = "SELECT * FROM oprodinfo WHERE op_id='".$id."' ";
$query=mysqli_query($myconn,$sql);

while($row=mysqli_fetch_array($query) ) {


$id1= $row['op_id'];
$pname=$row['op_name'];
$pcondition=$row['op_condition'];
$brand=$row['op_brand'];
$model=$row['op_model'];
$authentication=$row['op_authentication'];
$contact=$row['contact'];
$pprice=$row['op_price'];
$category=$row['op_category'];
$pdesc=$row['op_desc'];
$picpath=$row['p_image'];











?>


	
 	
	<div id="pn"><b>Product Name:</b><?php echo''.$pname.''; ?></div>
	<div id="pig"><b>Product Image:</b></div>
	
	 <div id="pigm">'
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
	
	
	
	 </div>  <?php
	  echo'
	<div id="pp"><b>Product Price:</b>'.$pprice.'</div> 
	<div id="box"><b>Product Condition:</b>'.$pcondition.'<br><br> 
	<b>Product Brand:</b>'.$brand.'<br> <br>
	<b>Product Model:</b>'.$model.'<br><br>
	<b>Product Authentication:</b>'.$authentication.'<br><br>
	<b>Product Contact:</b>'.$contact.'<br><br>
	<b>Product Category:</b>'.$category.'</div> 
	<div id="pd"><b>Product Description:</b>'.$pdesc.'</div>
	<div id="con"><img src="../image/contact.png" width="20%"height="20%""</div><div id="contt">'.$contact.'<br></div>
	 
	
	
   
   




';


}

?>

</div>
<div id="footer1">
<div id="pt1">
<b>Techbd </b><hr> &nbsp;&nbsp;&nbsp;&nbsp; <div id="f1"><p><a href="../f_page/address.php">Address</a> </div><div id="f2"><a href="../home.php"> Home </a></div>
<hr />
<b>Payment System </b> &nbsp;&nbsp;&nbsp;&nbsp <div id="f4"><a href="../f_page/replace&refund.php">Replacement policy</a> </div><div id="f5"> <a href="../f_page/replace&refund.php">Refund policy</a></div>
<hr />
<b>How to pay </b> &nbsp;&nbsp;&nbsp;&nbsp Cash on delevery <img src="../image/bkash_logo.png" id="pay" width="30px" height="40px" />
 <img src="../image/120716173707_UKashLogo2.jpg" id="pay" width="40px" height="30px" />
<br /><hr />
<p>copywrite@techbd.com 2017</p>
</div>
<div id="pr2">
<h3>Newslater</h3>
<p>Every day 1000+ product add in our website</p>
<p>Question | Comments | Complain</p>
<p><b>Moblile:01779218527</b></p>
<p><b>E-mail:techbd@gmail.com</b></p>
<p><a href="https://www.facebook.com/techbdcom-307315119754596/"><b>Inbox:https://www.facebook.com/techbd.com/</b></a></p>
<div id="fb">
<a href="https://www.facebook.com/techbdcom-307315119754596/"><img src="../image/Facebook_Home_logo_old.svg.png"  width="40px" height="30px" /></a>
</div>
<div id="tw">
<a href="https://twitter.com/"><img src="../image/Twitter.png" width="40px" height="30px" /></a>
</div>
<div id="lkd">
<a href="https://www.linkedin.com/"><img src="../image/Linkedin_circle.svg_.png" width="40px" height="30px" /></a>
</div>
<div id="ut">
<a href="https://www.youtube.com/"><img src="../image/youtube-icon-logo-05A29977FC-seeklogo.com.png" width="40px" height="30px" /></a>
</div>
</div>



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