<?php
include("config.php");
$uname=$_POST['uname'];
$email=$_POST['email'];
$role=$_POST['role'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$gender=$_POST['gender'];


$sql1="SELECT email FROM userinfo WHERE email='$email'";
$result = mysqli_query($myconn, $sql1);
while($row = mysqli_fetch_array($result)) {
  
  $count= $row['email'];
  if ($count==0) {

$sql="INSERT INTO userinfo(username,email,role,password,mobile,address,gender )
 VALUE('$uname','$email','$role','$password','$mobile','$address','$gender')";

$query=mysqli_query($myconn,$sql);
header("location:../../home.php");}
else{
	echo"email already taken";
	
}

}
/*if($query==true){
	
	
echo"Success";
}
else{
	echo"UnSuccess";
}
?>*/