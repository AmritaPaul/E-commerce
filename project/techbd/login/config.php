<?php 
$host="localhost";
$username="root"; 
$password=""; 
$dbname="techbd"; 

mysql_connect("$host","$username","$password")or die("Failed To Connect");

mysql_select_db("$dbname")or die("Failed to select database");
?>