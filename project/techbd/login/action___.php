<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
    function confirmPass(){
	
	if(frm.name.value=="")
{
	alert("Please enter the username");
	frm.name.focus();	
	return false;
}
	}
</script>

</head>

<body>

<?php
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
				echo''.$pass.'';
				$sql1="UPDATE `userinfo` SET `password` = md5(".$pass.")  WHERE `userinfo`.`cu_id` = ".$id2."";
				$query1=mysqli_query($myconn,$sql1);
							if($query1){
								echo"ok";
							}
				            else{
	                            echo"Not OK";
	
                              }

		
		
		
		
				
				
  }
else{
	echo"Password do not match";
	
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
$status=$row2['status'];
$id=$row2['cu_id'];

}
if($status==1)
{
if($email==$email1 )
{
	echo'<form method="post" action="" enctype="multipart/form-data" >

<input type="text"  name="id" value="'.$id.'"">
<input type="text" id="pass" name="pass" placeholder="Password">
<input type="text" id="conpass" name="conpass" placeholder="Confirm Password" onblur="confirmPass()">
<input type="submit" name="btn_up" button id="addnewprouct" value="Submit"  onblur="confirmPass()"  ></button> 

  </form>';
}
else{
	
	
	echo'False';
	
}
}
else{
	echo'account block';
	
}
}
?>


</body>
</html>