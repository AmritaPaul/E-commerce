

<?php

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




include("../db/config.php");
$result="INSERT INTO oprodinfo(cu_id,op_name,op_condition,op_brand,op_model,op_authentication,contact,op_price,img_name,img_path,img_type,op_category,op_desc)
VALUES('$id','$pname','$pcondition','$brand','$model','$authentication','$contact','$pprice','$filename','$filepath','$filetype','$category','$pdesc')";
$query = mysqli_query($myconn,$result );

header("location:admin.php");
/*if($query===TRUE)
{
	echo "successfull";
}
else
{
	echo "not inserted";
}*/
}

exit();


?>