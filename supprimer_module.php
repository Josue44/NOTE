<?php
	include('cnx.php');
	


	$q1 = "DELETE FROM Module WHERE Num_Module = '".$_GET['id']."'";
	$r1 = $db->query($q1);

    


	

	header('location:aff_module.php');
?>