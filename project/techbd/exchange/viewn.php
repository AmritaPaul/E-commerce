<?php
include("../login/session.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>home</title>
<link rel="icon" type="image/png/jpg" href="image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="style.css">
<script>
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
<div id="container">
<div id="header">
<div id="logo">
<img src="../image/logo.jpg" />
</div>
<div id="hline">techbd</div>
<div id="sbox">
<form method="post"  action="search.php">
<input id="search" name="search" type="text" placeholder="Search for product & brand"  />
<input id="submit" name="btn" type="submit" value="Search"/>
</form>



</div>
<div id="btn"><a href="">Cart</a></div>
<div id="menu">
<ul class="main-menu">
			<li><a href="../home.php">Home</a></li>
			<li class="sub-menu sub-menu-1"><a href="#">New Products</a>
				<ul class="sub-menu-layout sub-menu-layout-1">
					<li><a href="../admin/avirus.php">Antivirus</a></li>
                    <li><a href="../admin/adobe.php">Adobe Premire</a></li>
                    <li><a href="../admin/adobe.php">PC Hardware</a></li>
					<li class="sub-menu sub-menu-2"><a href="#">Artifacial Intelligency</a>
						<ul class="sub-menu-layout sub-menu-layout-2">
							<li><a href="../admin/arduino.php">Ardunio</a></li>
							<li><a href="../admin/sensor.php">Sensor</a></li>
							<li><a href="../admin/motor.php">motor</a></li>
						</ul>
					</li>
					<li><a href="../admin/other.php">Others</a></li>
				</ul>
			</li>
				
     <li class="sub-menu sub-menu-1"><a href="#">Old Products</a>
               <ul class="sub-menu-layout sub-menu-layout-1">
					<li><a href="ophview.php">Pc Hardware</a></li>
                    <li><a href="omview.php">Mobile</a></li>
                    <li><a href="oetcview.php">Electronices</a></li>
					<li><a href="otherview.php">Others</a></li>
                    <li><a href="addoproduct.php">Give Add</a></li>
                   </ul>
			</li>
	<li class="sub-menu sub-menu-1"><a href="#">Exchange Products</a>
				<ul class="sub-menu-layout sub-menu-layout-1">
					<li><a href="ephview.php">Pc Hardware</a></li>
                    <li><a href="emview.php">Mobile</a></li>
                    <li><a href="eetcview.php">Electronices</a></li>
					<li><a href="eotherview.php">Others</a></li>
                    <li><a href="addoproduct.php">Give Add</a></li>
				</ul>
			</li>			
    <li><a href="../user/user.php">Profile</a></li>
	<li><a href="../about.html">About</a></li>
    <li><a href="../login/logout.php">Logout</a></li>
		
</ul>
	
</div>


<div id="view">
<div id="viewp">
<?php
include("../db/config.php");


$results_per_page = 4;


$sql='SELECT * FROM eprodinfo';
$result = mysqli_query($myconn, $sql);
$number_of_results = mysqli_num_rows($result);


$number_of_pages = ceil($number_of_results/$results_per_page);


if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}


$this_page_first_result = ($page-1)*$results_per_page;


$sql='SELECT * FROM eprodinfo  LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($myconn, $sql);
echo'<table width="100%" border="1px" cellspacing="0" cellpadding="6">
<tr><td width="20%" valign="top">Product Id	</td>
<td width="20%" valign="top"> Product Name</td>
<td width="20%" valign="top"> Product image</td>
<td width="20%" valign="top">Product price  </td>
<td width="20%" valign="top">Action</td>
</tr></table>';

while($row = mysqli_fetch_array($result)) {
   $id= $row['ep_id'];
$name= $row['ep_name'];
$picpath=$row['img_path'];
$price=$row['ep_want'];


echo'<table width="100%" border="1px" cellspacing="0" cellpadding="6">

<tr>
	<td width="20%" valign="top">'.$id.'</td>
 	<td width="20%" valign="top">'.$name.' </td>
	<td width="20%"> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<img src="../exchange/'.$picpath.'" width="60%"height="20%"/></td>
	<td width="20%" valign="top"> &nbsp;&nbsp;&nbsp;'.$price.'TK </td>
    <td width="6.6666%" valign="top"><a href="edit.php?id='.$id.'" style="color:green;">Edit</td></a>
	<td width="6.6666%" valign="top"><a href="details.php?id='.$id.'" style="color:green;">Details</td></a>
    <td width="6.6666%" valign="top"><a href="delete.php?id='.$id.'"style="color:red;"><input type="submit" value="Delete"style="color:red;"onclick="return del()"> </td></a>

</tr>


</table>';
}

echo"<br><br>
<< Previous page";
for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<a href="view.php?page=' . $page . '">' . $page . '</a> ';
}
echo"
Next page>>";

?>
</div>
</div>
</div>
<div id="footer">
<div id="pt1">
<b>Techbd </b> &nbsp;&nbsp;&nbsp;&nbspAddress | Home | How to buy
<br /><hr />
<b>Payment System </b> &nbsp;&nbsp;&nbsp;&nbsp Replacement policy | Refund policy
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

</div>

</div>
<div id="#">

</div>
</div>
</body>
</html>
