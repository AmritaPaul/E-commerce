

<?php

if(isset($_POST['btn_upload']))
{
	 $filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "prodimg/".$filename;

    move_uploaded_file($filetmp,$filepath);


$pname=$_POST['pname'];
$brand=$_POST['brand'];
$model=$_POST['model'];
$authentication=$_POST['authentication'];
$contact=$_POST['contact'];
$pprice=$_POST['pprice'];
$category=$_POST['category'];
$pdesc=$_POST['pdesc'];
$qt=$_POST['qt'];




include("../db/config.php");
$result="INSERT INTO nprodinfo(np_name,np_brand,np_model,np_authentication,contact,np_price,img_name,img_path,img_type,np_category,np_desc,np_qt)
VALUES('$pname','$brand','$model','$authentication','$contact','$pprice','$filename','$filepath','$filetype','$category','$pdesc','$qt')";
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