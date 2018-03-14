<?php
include("config.php");
//------oldproduct info----------

$tbl_oprodinfo = "CREATE TABLE IF NOT EXISTS oprodinfo(

							oprod_id INT NOT NULL,
							PRIMARY KEY(oprod_id) ,
							oname VARCHAR(50) NOT NULL,
							oimg_name VARCHAR(50) NOT NULL,
							oimg_path VARCHAR(50) NOT NULL ,
							oimg_type VARCHAR(50) NOT NULL ,
							oprice INT(10) NOT NULL,
							oprodesc VARCHAR(500) NOT NULL

							)";


$query = mysqli_query($myconn, $tbl_oprodinfo);

if ($query === TRUE) {
	echo "<h3>oproduct  INFORMATI table created OK :) </h3>";
} else {
	echo "<h3>oproduct INFORMAT table NOT created :( </h3>";
}


//------exdproduct info----------

$tbl_eprodinfo = "CREATE TABLE IF NOT EXISTS eprodinfo(

							eprod_id INT NOT NULL,
							PRIMARY KEY(eprod_id) ,
							ename VARCHAR(50) NOT NULL,
							eimg_name VARCHAR(50) NOT NULL,
							eimg_path VARCHAR(50) NOT NULL ,
							eimg_type VARCHAR(50) NOT NULL ,
							eprice INT(10) NOT NULL,
							eprodesc VARCHAR(500) NOT NULL

							)";


$query = mysqli_query($myconn, $tbl_eprodinfo);

if ($query === TRUE) {
	echo "<h3>eproduct  INFORMATI table created OK :) </h3>";
} else {
	echo "<h3>eproduct INFORMAT table NOT created :( </h3>";
}


//----------------customer information -------------------

$tbl_custinfo = "CREATE TABLE IF NOT EXISTS custinfo(

							cu_id INT(10) NOT NULL auto_increment,
							PRIMARY KEY(cu_id) ,
							uname VARCHAR(20) NOT NULL,
							email VARCHAR(20) NOT NULL,
							password VARCHAR(50) NOT NULL,
							mobile VARCHAR(20) NOT NULL,
							address VARCHAR(200) NOT NULL,
							gender VARCHAR(50) NOT NULL
							

							)";


$query = mysqli_query($myconn, $tbl_custinfo);

if ($query === TRUE) {
	echo "<h3>customer  INFORMATI table created OK :) </h3>";
} else {
	echo "<h3>customer INFORMAT table NOT created :( </h3>";
}



