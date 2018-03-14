<?php
include_once("config.php");

?>
<?php
$sql = "SELECT * FROM productinfo  ORDER BY id DESC   ";

$res=mysqli_query($myConnection,$sql);
?>





<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>


<link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
<link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
<link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<style>
#slid{
	top:100px;
	width:80%;
	height:200px;
	left:10%;
	position:absolute;
	
}

</style>
</head>
<body>


<div id="slid">
<div class="slider-wrapper theme-bar">
<div id="slider" class="nivoSlider"> 
          <?php
while($row = mysqli_fetch_array($res))
{

$path=$row['img_path'];
?>
  
        <img src="<?php echo''.$path.''?>" alt="" "/>
       
<?php
       

}
?>
 </div> 
   </div>

</div>
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script> 

</body>
</html>