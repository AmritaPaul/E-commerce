<?php
$id = $_GET['id'];
$conn = new mysqli("localhost","root","","techbd");

$sql="UPDATE msssage SET status=1 WHERE  cu_id='" . $id . "'";	
$result=mysqli_query($conn, $sql);

$sql="SELECT * FROM `msssage` WHERE  cu_id='" . $id . "'  ORDER BY `msssage`.`mass_id` DESC " ;
$result=mysqli_query($conn, $sql);

$response='';
while($row=mysqli_fetch_array($result)) 
{
	$response = $response . "<div class='notification-item'>" .
	"<div class='notification-comment'>" . $row["massage"]  . "</div>" .
	"</div>";
}
if(!empty($response))
 {
	print $response;
}


?>