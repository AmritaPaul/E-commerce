<?php
$id2=$_GET['id'];
include("../login/session.php");
 
?>

<?php

include("../db/config.php");

$query = 'SELECT * FROM `order` WHERE cu_id='.$id.' AND status=1 AND p_id='.$id2.'   ';

$result = mysqli_query($myconn, $query);


$numRow = mysqli_num_rows($result);
if($numRow==0)
{
	header("location:cart.php?id=".$id2."");
	
}
else{
	?>
     <script>
										alert('Sorry This product already in cart ');
										window.location.href='order.php';
	 </script>
    
    
    
    <?php
	
}

?>