<?php
include('config.php');
$s1=$_REQUEST["n"];
$s1=strtolower($s1);
$select_query="SELECT*FROM nprodinfo where np_name LIKE '%$s1%' or np_id LIKE '%$s1%' or np_category LIKE '%$s1%' or np_brand  LIKE '%$s1%' or np_price LIKE '%$s1%'";
$sql=mysqli_query($myconn,$select_query) or die (mysqli_error());
$s="";
while($row=mysqli_fetch_array($sql))
{
	$s=$s."
	<a class='link-p-colr' href='admin/details.php?id=".$row['np_id']."'>
		<div class='live-outer'>
            	<div class='live-im'>
                	<img src='admin/prodimg/".$row['p_image']."'/>
                </div>
                <div class='live-product-det'>
                	<div class='live-product-name'>
                    	<p>".$row['np_name']."</p>
                    </div>
                    <div class='live-product-price'>
						<div class='live-product-price-text'><p>".number_format($row['np_price'])."TK</p></div>
                    </div>
                </div>
            </div>
	</a>
	"	;
}
echo $s;
//<a href='pview.php?id=".$row['id']."&productname=".$row['productname']."'>".$row['productname']."></a>
//<p>".$row['productname']."</p><br>	<p>".$row['producttotalprice']."</p>
?>
