
<?php


?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Change_password</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="../user/style5.css" type="text/css">

<link rel="icon" type="../image/png/jpg" href="../image/logo.jpg"/>
<link rel="stylesheet" type="text/css" href="../style.css">
<link rel="stylesheet" type="text/css" href="../user/style1.css">




<script type="text/javascript">
    function confirmPass() {
       if(frm.pass.value!=frm.conpass.value)
{
	alert("password dose not match");
	frm.conpass.focus();	
	return false;
}
if(frm.pass.value=="")
{
	alert("Please enter the password");
	frm.pass.focus();	
	return false;
}
if(frm.conpass.value=="")
{
	alert("Please enter the confirm password");
	frm.conpass.focus();	
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


<?php
error_reporting(0);
include("../db/config.php");
if(isset($_POST['btn_up']))
{
$pass=$_POST['pass'];
$conpass=$_POST['conpass'];
$id2=$_POST['id'];



if($pass==$conpass)
{
		
		         $pass=stripcslashes($pass);
				 $pass=mysql_real_escape_string($pass);
				 $pass=htmlspecialchars($pass);
			
				$sql1="UPDATE `userinfo` SET `password` = md5(".$pass.")  WHERE `userinfo`.`cu_id` = ".$id2."";
				$query1=mysqli_query($myconn,$sql1);
							if($query1){
									?>
							 <script>
										alert('Successfully change Password ');
										window.location.href='login.php';
							</script>
							
							
							
							<?php
							}
				            else{
	                            echo"Not OK";
	
                              }

		
		
		
		
				
				
  }
else{?>
	   <script>
				alert('Password does not match');
				
	  </script>
      
	<?php
	header('loation:action.php');
}




}


?>
<?php
if(isset($_POST['btn_upload']))
{
$email=$_POST['email'];
$mobile=$_POST['mobile'];



$sql = "SELECT * FROM userinfo WHERE mobile=".$mobile."  ";
$query=mysqli_query($myconn,$sql);

while($row2=mysqli_fetch_array($query) ) {

$email1=$row2['email'];
$id=$row2['cu_id'];

          }

				if($email==$email1 )
					{
								echo'<form name="frm" method="post" action="" enctype="multipart/form-data" >
							
							<input type="hidden"  name="id" value="'.$id.'"">
							<input type="password" id="pass" name="pass" placeholder="Password">
							<input type="password" id="conpass" name="conpass" placeholder="Confirm Password" onblur="confirmPass()">
							<input type="submit" name="btn_up" button id="addnewprouct" value="Submit"  onblur="confirmPass()"  ></button> 
							
							  </form>';
							}
						else{
							
							
							
							
							?>
							 <script>
										alert('Sorry Do Not Found Any Account');
										window.location.href='forgetpass.php';
							</script>
							
							
							
							<?php
							
						}
					}


?>

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