<?php
	include('cnx.php');
	


	$q1 = "DELETE FROM Note WHERE Num_Note = '".$_GET['id']."'";
	$r1 = $db->query($q1);

    


	

	header('location:aff_note.php');
?>