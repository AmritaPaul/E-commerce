<?php

	require_once 'dbconfig.php';
	
	if(isset($_GET['delete_id']))
	{
		
		$stmt_select = $DB_con->prepare('SELECT p_image FROM eprodinfo WHERE ep_id =:uid');
		$stmt_select->execute(array(':uid'=>$_GET['delete_id']));
		$imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
		unlink("prodimg/".$imgRow['p_image']); 
		$stmt_delete = $DB_con->prepare('DELETE FROM eprodinfo WHERE ep_id =:uid');
		$stmt_delete->bindParam(':uid',$_GET['delete_id']);
		$stmt_delete->execute();
		
		header("Location: view_ad.php");
	}

?>