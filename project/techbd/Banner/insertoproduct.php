

<?php

if(isset($_POST['btn_upload']))
{
	 $filetmp = $_FILES["file_img"]["tmp_name"];
    $filename = $_FILES["file_img"]["name"];
    $filetype = $_FILES["file_img"]["type"];
    $filepath = "prodimg/".$filename;

    move_uploaded_file($filetmp,$filepath);


$pname=$_POST['pname'];



include("../db/config.php");
$result="INSERT INTO banner(b_name,img_name,img_path,img_type)
VALUES('$pname','$filename','$filepath','$filetype')";
$query = mysqli_query($myconn,$result );

header("location:../admin/slider.php");
}

exit();


?>