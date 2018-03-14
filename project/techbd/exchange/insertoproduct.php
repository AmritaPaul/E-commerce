

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
$pprice=$_POST['want'];
$category=$_POST['category'];
$pdesc=$_POST['pdesc'];




include("../db/config.php");
$result="INSERT INTO eprodinfo(cu_id,ep_name,ep_condition,ep_brand,ep_model,ep_authentication,contact,ep_want,img_name,img_path,img_type,ep_category,ep_desc)
VALUES('$id','$pname','$pcondition','$brand','$model','$authentication','$contact','$pprice','$filename','$filepath','$filetype','$category','$pdesc')";
/*$result="INSERT INTO eprodinfo(cu_id,ep_name,ep_condition,ep_brand,ep_model,ep_authentication,contact)
VALUES('$id','$pname','$pcondition','$brand','$model','$authentication','$contact')";*/
$query = mysqli_query($myconn,$result );
header("location:../user/user.php");

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