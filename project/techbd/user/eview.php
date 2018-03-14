<?php

include("../db/config.php");
echo'<table width="60%" border="1px" cellspacing="0" cellpadding="6">
<tr><td width="20%" valign="top">Product Id	</td>
<td width="20%" valign="top"> Product Name</td>
<td width="20%" valign="top"> Product image</td>
<td width="20%" valign="top">Product price  </td>
<td width="20%" valign="top">Action</td>
</tr></table>';

$sql = "SELECT * FROM nprodinfo ORDER BY op_id DESC ";
$query=mysqli_query($myconn,$sql);

while($row=mysqli_fetch_array($query) ) {
$id= $row['np_id'];
$name= $row['np_name'];
$picpath=$row['img_path'];
$price=$row['ep_want'];


echo'<table width="60%" border="1px" cellspacing="0" cellpadding="6">

<tr>
	<td width="18%" valign="top">'.$id.'</td>
 	<td width="18%" valign="top">'.$name.' </td>
	<td width="18%"> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;<img src="../user/'.$picpath.'" width="60%"height="60%"/></td>
	<td width="18%" valign="top"> &nbsp;&nbsp;&nbsp;'.$price.'TK </td>
    <td width="6%" valign="top"><a href="edit1.php?id='.$id.'" style="color:green;">Edit</td></a>
	<td width="6%" valign="top"><a href="details.php?id='.$id.'" style="color:green;">Details</td></a>
    <td width="6%" valign="top"><a href="delete.php?id='.$id.'"style="color:red;"><input type="submit" value="Delete"style="color:red;"onclick="return del()"> </td></a>

</tr>


</table>';


}



?>