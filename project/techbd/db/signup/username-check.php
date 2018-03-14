<?php
  
  $DBhost = "localhost";
	 $DBuser = "root";
	 $DBpass = "";
	 $DBname = "techbd";
	 
	 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname);
    
     if ($DBcon->connect_errno) 
     {
         die("ERROR : -> ".$DBcon->connect_error);
     }
  
  if($_POST) 
  {
      $name     = strip_tags($_POST['name']);
      
	  $stmt= $DBcon->query("SELECT 	username FROM userinfo WHERE 	username='$name'");
	  $count=$stmt->num_rows;
	  	  
	  if($count>0)
	  {
		  echo "<span style='color:brown;'>Sorry username already taken !!!</span>";
	  }
	  else
	  {
		  echo "<span style='color:white;'>available</span>";
	  }
  }
?>