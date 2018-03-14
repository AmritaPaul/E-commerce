<?php

	require_once 'dbconfig.php';
	
	if(isset($_GET['delete_id']))
	{
		// select image from db to delete
		$stmt_select = $DB_con->prepare('SELECT p_image FROM oprodinfo WHERE op_id =:uid');
		$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("prodimg/".$imgRow['p_image']); //The unlink() function deletes a file.
		
		// it will delete an actual record from db
		$stmt_delete = $DB_con->prepare('DELETE FROM oprodinfo WHERE op_id =:uid');
		$stmt_delete->bindParam(':uid',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: view.php");
	}

?>