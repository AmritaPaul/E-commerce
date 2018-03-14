<?php
include("../login/session.php");
if($login_role=='user'){
 header('location:../user/user.php');
}
if($login_role=='moderator'){
 header('location:../moderator/moderator.php');
}
?>
<?php
 $DBhost = "localhost";
	 $DBuser = "root";
	 $DBpass = "";
	 $DBname = "techbd";
	 
	 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
     if ($DBcon->connect_errno) 
     {
         die("ERROR : -> ".$DBcon->connect_error);
     }
if(isset($_POST['btn-signup']))
 {
	
	$uname = strip_tags($_POST['name']);
	$email = strip_tags($_POST['email']);
	$upass = strip_tags($_POST['password']);
	$upass=md5($upass);
	$role = strip_tags($_POST['role']);
	$mobile=strip_tags($_POST['mobile']);
	$address=strip_tags($_POST['address']);
	$gender=strip_tags($_POST['gender']);

	
	$uname = $DBcon->real_escape_string($uname);
	$email = $DBcon->real_escape_string($email);
	$upass = $DBcon->real_escape_string($upass);
	$role = $DBcon->real_escape_string($role);
	$mobile = $DBcon->real_escape_string($mobile);
	$address = $DBcon->real_escape_string($address);
	$gender = $DBcon->real_escape_string($gender);
	
	$check_uname = $DBcon->query("SELECT username FROM userinfo WHERE 	username='$uname'");
	$check_email = $DBcon->query("SELECT email FROM userinfo WHERE email='$email'");
	$count=$check_uname->num_rows;
	$count1=$check_email->num_rows;
	

	if ($count==0) 
	{
		if ($count1==0) 
	{
		
		$query = "INSERT INTO userinfo(	username,email,password,role,mobile,address,gender,status) VALUES('$uname','$email','$upass','$role','$mobile','$address','$gender','1')";

		if ($DBcon->query($query)) 
		{
			$msg3 = "<div>
						<span></span> &nbsp; successfully registered !
					</div>";
		}
		else 
		{
			$msg3 = "<div>
						<span></span> &nbsp; error while registering !
					</div>";
		}
		
	}
	 else
	 {
		
		
		$msg2 = "<div>
					<span></span> &nbsp; sorry email already taken !
				</div>";
			
	}
		
	}
	 else
	 {
		
		
		$msg1 = "<div>
					<span></span> &nbsp; sorry username already taken !
				</div>";
			
	}
	$DBcon->close();
	
	header("refresh:5;../login/login.php");
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign_Up</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Rubik" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="../search/style5.css" type="text/css">

<link rel="icon" type="image/png/jpg" href="../image/logo.jpg" />
<link rel="stylesheet" type="text/css" href="../style.css" >
<link rel="stylesheet" type="text/css" href="../user/style1.css" >
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript">
function val(){
if(frm.name.value=="")
{
	alert("Please enter the username");
	frm.name.focus();	
	return false;
}
if(frm.email.value=="")
{
	alert("Please enter the email");
	frm.email.focus();	
	return false;
}	
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

if (reg.test(frm.email.value) == false) 
{
	alert('Invalid email address');
	frm.email.focus();	
	return false;
}
if(frm.password.value=="")
{
	alert("Please enter the password");
	frm.password.focus();	
	return false;
}
if(frm.mobile.value=="")
{
	alert("Please enter the mobile number");
	frm.mobile.focus();	
	return false;
}
if(frm.address.value=="")
{
	alert("Please enter the address");
	frm.address.focus();	
	return false;
}
if(frm.gender.value=="")
{
	alert("Please enter the gender");
	frm.gender.focus();	
	return false;
}
if(frm.role.value=="")
{
	alert("Please enter the gender");
	frm.gender.focus();	
	return false;
}

return true;
}
$(document).ready(function()
{    
	$("#name").keyup(function()
	{		
		var name = $(this).val();	
		
		if(name.length > 2)
		{		
			$("#result").html('checking...');
			$.ajax({
				
				type : 'POST',
				url  : 'username-check.php',
				data : $(this).serialize(), 
				success : function(data)
						  {
					         $("#result").html(data);
					      }
				});
				return false;
			
		}
		else
		{
			$("#result").html('');
		}
	});
	
});

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



<div id="display1">
<div id="cont">
<div id="sup1">
<div id="lavel">
SignUp 
<form name="frm" action=" " method="post" >
 <?php if (isset($msg3)) {echo $msg3;}?> 

 <input type="text" name="name" id="name" placeholder="User Name"  /><br>
    <span id="result"></span><br>
    <?php if (isset($msg1)) {echo $msg1;}?>  
<input type="text" id="email" placeholder="Email" name="email" ><br>
  <span></span>
       <?php if (isset($msg2)) {echo $msg2;}?> 
<input type="password" id="password" placeholder="Password" name="password" ><br>
<input type="number" id="mobile" placeholder="Mobile" name="mobile" ><br>
<input type="text" id="address" placeholder="Address" name="address" ><br>

Gender: <select name="gender" id="gender" >
<option value="">Choose </option>
<option value="m">Male</option>
<option value="f">femele</option>
<option value="o">other</option>
</select>
Role: <select name="role" id="role">
<option value="">Choose </option>
<option value="admin">Admin</option>
<option value="user">user</option>
<option value="moderator">Moderator</option>
</select>
<input type="Submit" value="Submit" name="btn-signup" onClick="return val();" ><br>
</form>
</div>
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
