

<?php
include("../db/config.php");

if(isset($_POST['btn_upload']))
{
	 $filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "prodimg/".$filename;

    move_uploaded_file($filetmp,$filepath);

$id=$_POST['cu_id'];
$pname=$_POST['pname'];
$pcondition=$_POST['pcondition'];
$brand=$_POST['brand'];
$model=$_POST['model'];
$authentication=$_POST['authentication'];
$contact=$_POST['contact'];
$pprice=$_POST['pprice'];
$category=$_POST['category'];
$pdesc=$_POST['pdesc'];




//$result="INSERT INTO oprodinfo(cu_id,op_name,op_condition,op_brand,op_model,op_authentication,contact,op_price,img_name,img_path,img_type,op_category,op_desc)
//VALUES('$id','$pname','$pcondition','$brand','$model','$authentication','$contact','$pprice','$filename','$filepath','$filetype','$category','$pdesc')";
$result="UPDATE oprodinfo SET op_name='$pname',op_condition='$pcondition',op_brand='$brand',op_model='$model',op_authentication='$authentication',contact='$contact',op_price='$pprice',img_name='$filename',img_path='$filepath',img_type='$filetype' WHERE op_id='$id'";

$query = mysqli_query($myconn,$result );

header("location:viewn.php");

/*if($query===TRUE)
{
header("Location:view.php");
}
else
{
	echo "not inserted";
}*/
}

exit();


?>